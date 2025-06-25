<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use App\Providers\AppServiceProvider;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    ->withProviders([
        AppServiceProvider::class
    ])
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->statefulApi(); // conf. p/ o Sanctum
    })
    ->withExceptions(function (Exceptions $exceptions) {

        $exceptions->shouldRenderJsonWhen(function ($request, $throwable) {
            return $request->is('api/*');
        });

        // ValidationException - Para erros de validação
        $exceptions->render(function (\Illuminate\Validation\ValidationException $e, $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => 'Os dados fornecidos são inválidos.',
                    'error' => 'VALIDATION_ERROR',
                    'errors' => $e->errors()
                ], 422);
            }
        });

        // ModelNotFoundException - Para recursos não encontrados
        $exceptions->render(function (\Illuminate\Database\Eloquent\ModelNotFoundException $e, $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => 'Recurso não encontrado.',
                    'error' => 'RESOURCE_NOT_FOUND'
                ], 404);
            }
        });

        // AuthenticationException - Para problemas de autenticação
        $exceptions->render(function (\Illuminate\Auth\AuthenticationException $e, $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => 'Token de acesso inválido ou expirado.',
                    'error' => 'UNAUTHENTICATED'
                ], 401);
            }
        });

        // AuthorizationException - Para problemas de autorização
        $exceptions->render(function (\Illuminate\Auth\Access\AuthorizationException $e, $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => 'Você não tem permissão para acessar este recurso.',
                    'error' => 'FORBIDDEN'
                ], 403);
            }
        });

        // Erro genérico 500
        $exceptions->render(function (\Throwable $e, $request) {
            if ($request->is('api/*')) {
                // Em desenvolvimento, mostrar erro completo
                if (config('app.debug')) {
                    return response()->json([
                        'message' => $e->getMessage(),
                        'error' => get_class($e),
                        'file' => $e->getFile(),
                        'line' => $e->getLine(),
                        'trace' => $e->getTrace()
                    ], 500);
                }

                // Em produção, erro genérico
                return response()->json([
                    'message' => 'Erro interno do servidor.',
                    'error' => 'INTERNAL_SERVER_ERROR'
                ], 500);
            }
        });
        
    })
    ->create();

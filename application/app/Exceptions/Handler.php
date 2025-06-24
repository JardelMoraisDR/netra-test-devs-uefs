<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    protected $levels = [
        //
    ];

    protected $dontReport = [
        //
    ];

    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e): mixed
    {
        if ($request->is('api/*')) {
            return $this->handleApiException($request, $e);
        }

        return parent::render($request, $e);
    }

    private function handleApiException(Request $request, Throwable $exception): JsonResponse
    {
        if ($exception instanceof ModelNotFoundException) {
            return response()->json([
                'message' => 'Recurso não encontrado.',
                'error' => 'NOT_FOUND'
            ], 404);
        }

        if ($exception instanceof ValidationException) {
            return response()->json([
                'message' => 'Os dados fornecidos são inválidos.',
                'error' => 'VALIDATION_ERROR',
                'errors' => $exception->errors()
            ], 422);
        }

        // Para desenvolvimento, mostra erro completo
        if (config('app.debug')) {
            return response()->json([
                'message' => $exception->getMessage(),
                'error' => get_class($exception),
                'trace' => $exception->getTrace()
            ], 500);
        }

        return response()->json([
            'message' => 'Erro interno do servidor.',
            'error' => 'INTERNAL_SERVER_ERROR'
        ], 500);
    }
}
# Blog API – README

## Visão geral

Esta aplicação é uma API RESTful escrita em **Laravel 12** e **PostgreSQL** que implementa operações CRUD para **Usuários**, **Posts** e **Tags**, além de fluxo de autenticação via tokens do **Laravel Sanctum**. O projeto foi desenvolvido como solução para um teste técnico para a vaga de Engenheiro de Software no projeto UEFS da empresa Netra.

## Stack e pré‑requisitos

* **Docker Desktop** (Linux containers)
* **Docker Compose**
* **Node.js >= 18** e **npm** (apenas para assets via Vite)
* **Git**

> Se preferir, todo o ambiente pode ser levantado apenas com Docker, dispensando PHP e Composer instalados localmente.

---

## Escopo do Teste Técnico

Desenvolver uma API RESTful com as seguintes funcionalidades:

- CRUD de **Usuários**
- CRUD de **Posts**
- CRUD de **Tags**

### Regras de Relacionamento

- Um **usuário** pode ter várias **postagens**.
- Uma **postagem** pode conter várias **tags** (palavras-chave).

### Requisitos Técnicos do Projeto

- Todas as rotas devem seguir o padrão `/api`, por exemplo: `/api/posts`.
- Fornecer um `Dockerfile` e `docker-compose.yml` para execução do projeto.
- Incluir documentação(README) clara sobre como rodar o projeto localmente, como testar os endpoints, visão geral da arquitetura e estrutura do projeto e destaques sobre decisões técnicas e particularidades da implementação.

---

## Instalação rápida (modo desenvolvimento sem Docker)

```bash
# 1. Clone o repositório
git clone <REPO_URL> blog-api && cd blog-api

# 2. Instale dependências de front‑end e rode Vite em modo dev
npm install && npm run dev

# 3. Copie variáveis de ambiente
cp .env.example .env
# ajuste credenciais se necessário

# 4. Instale dependências PHP e rode migrations
docker run --rm -v $(pwd):/app -w /app composer install
php artisan key:generate
php artisan migrate --seed
```

> **Recomendado**: utilizar o workflow completo abaixo com Docker para garantir que o ambiente seja idêntico ao de produção.

---

## Execução com Docker

1. **Construa as imagens**

   ```bash
   docker‑compose build
   ```
2. **Suba os containers**

   ```bash
   docker‑compose up ‑d
   ```
3. **Instale dependências PHP**

   ```bash
   docker‑compose exec app composer install
   ```
4. **Gere a chave da aplicação**

   ```bash
   docker‑compose exec app php artisan key:generate
   ```
5. **Crie e popule o banco**

   ```bash
   docker‑compose exec app php artisan migrate --seed
   ```
6. **Gere a documentação da API (Scribe)**

   ```bash
   docker‑compose exec app php artisan scribe:generate
   ```
7. **Inicialize configuração de testes (Pest)**

   ```bash
   docker‑compose exec app ./vendor/bin/pest --init
   ```
8. **Limpe caches**

   ```bash
   docker‑compose exec app php artisan optimize:clear
   ```

> Após esses passos a API estará disponível em `http://localhost:8000`.

---

## Gerenciador de banco (Adminer)

* URL: [http://localhost:8080/](http://localhost:8080/)
* Sistema: **PostgreSQL**
  Servidor: `postgres`
  Usuário: `laravel`
  Senha: `secret`
  Banco: `api_blog`

---

## Documentação da API (Scribe)

Acesse a documentação interativa gerada automaticamente em:
[http://localhost:8000/docs](http://localhost:8000/docs)

---

## Testes automatizados (Pest)

Execute toda a suíte de testes:

```bash
docker‑compose exec app php artisan test
```

---

## Rotas

### 1. Rotas públicas (não requerem token)

| Método | Endpoint                    | Descrição            |
| ------ | --------------------------- | -------------------- |
| `GET`  | `/api/users`                | Lista usuários       |
| `GET`  | `/api/users/{id}`           | Detalha usuário      |
| `GET`  | `/api/users/{userId}/posts` | Posts de um usuário  |
| `GET`  | `/api/posts`                | Lista posts          |
| `GET`  | `/api/posts/{id}`           | Detalha post         |
| `GET`  | `/api/tags`                 | Lista tags           |
| `GET`  | `/api/tags/popular`         | Tags mais usadas     |
| `GET`  | `/api/tags/search?query=`   | Busca tags por termo |
| `GET`  | `/api/tags/{id}`            | Detalha tag          |
| `GET`  | `/api/tags/{tagId}/posts`   | Posts de uma tag     |

### 2. Rotas de autenticação

| Método | Endpoint             | Descrição                                    |
| ------ | -------------------- | -------------------------------------------- |
| `POST` | `/api/auth/register` | Cria novo usuário e retorna token            |
| `POST` | `/api/auth/login`    | Autentica usuário e retorna token            |
| `POST` | `/api/auth/logout`   | Invalidar token atual *(requer token)*       |
| `GET`  | `/api/auth/profile`  | Retorna usuário autenticado *(requer token)* |

### 3. Rotas protegidas (requerem token Bearer)

| Método   | Endpoint                    | Descrição        |
| -------- | --------------------------- | ---------------- |
| `POST`   | `/api/users`                | Cria usuário     |
| `PUT`    | `/api/users/{id}`           | Atualiza usuário |
| `DELETE` | `/api/users/{id}`           | Remove usuário   |
| `POST`   | `/api/posts`                | Cria post        |
| `PUT`    | `/api/posts/{id}`           | Atualiza post    |
| `DELETE` | `/api/posts/{id}`           | Remove post      |
| `POST`   | `/api/posts/{id}/publish`   | Publica post     |
| `POST`   | `/api/posts/{id}/unpublish` | Despublica post  |
| `POST`   | `/api/tags`                 | Cria tag         |
| `PUT`    | `/api/tags/{id}`            | Atualiza tag     |
| `DELETE` | `/api/tags/{id}`            | Remove tag       |

> Para todas as rotas protegidas, inclua o cabeçalho:
> `Authorization: Bearer <token-recebido-no-login>`

---

## Licença

Distribuído sob a licença MIT. Consulte o arquivo `LICENSE` para mais detalhes.

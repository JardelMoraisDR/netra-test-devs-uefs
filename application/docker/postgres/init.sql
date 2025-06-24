-- Configurações iniciais do PostgreSQL
-- Extensões úteis para Laravel
CREATE EXTENSION IF NOT EXISTS "uuid-ossp";
CREATE EXTENSION IF NOT EXISTS "pg_trgm";

-- Database para testes
CREATE DATABASE api_blog_test;
GRANT ALL PRIVILEGES ON DATABASE api_blog_test TO laravel;

-- Configurações de performance
ALTER SYSTEM SET shared_buffers = '256MB';
ALTER SYSTEM SET effective_cache_size = '1GB';
ALTER SYSTEM SET maintenance_work_mem = '64MB';
ALTER SYSTEM SET checkpoint_completion_target = 0.9;
ALTER SYSTEM SET wal_buffers = '16MB';
ALTER SYSTEM SET default_statistics_target = 100;
ALTER SYSTEM SET random_page_cost = 1.1;
ALTER SYSTEM SET effective_io_concurrency = 200;

-- Aplicar configurações
SELECT pg_reload_conf();
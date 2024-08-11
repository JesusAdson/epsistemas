
## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/JesusAdson/epsistemas
```

Entre no diretório do projeto

```bash
  cd epsistemas
```

Instale as dependências

```bash
  composer install && npm install
```

Copie o arquivo .env.example para o .env

```bash
  cp .env.example .env
```

Gere o App Key
```bash
  php artisan key:generate
```

Rode as migrations

```bash
  php artisan migrate
```

Rode o vite

```bash
  npm run dev || npm run build
```

Inicie o servidor

```bash
  php artisan serve
```

**Caso queira popular a tabela rode o seguinte comando (opcional)

```bash
  php artisan db:seed
```


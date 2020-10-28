# ETS

## How To Install

### 1. Clone This Repo

```sh
git clone https://github.com/kaori02/mid-exam-webpro-e
```

### 2. Install Composer

```sh
cd ETS; composer install
```

### 3. Install Node Module

```sh
npm install && npm run dev
```

### 4. Create .env file

- Create `.env` file
- Copy everything from `.env.example` to `.env`
- Change `DB_DATABASE=laravel` to `DB_DATABASE=mid_exam_webpro_e`

### 5. Create db named 'ets' on your local

### 6. create key

```sh
php artisan key:generate
```

### 7. Migrate

```sh
php artisan migrate
```

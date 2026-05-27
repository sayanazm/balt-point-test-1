# Тестовое задание для БалтПоинт
## Функционал
- Список постов
- Категории
- Связь между моделями:
    - Category → hasMany Posts
    - Post → belongsTo Category
- Seeders и Factories
---

## Стек

- PHP 8.3
- Laravel 11

---

## Установка проекта

### 1. Клонировать репозиторий
git clone https://github.com/sayanazm/balt-point-test-1.git

### 2. Установить зависимости
composer install

### 3. Создать .env
cp .env.example .env

### 4. Сгенерировать ключ
php artisan key:generate

### 5. Выполнить миграции и сидеры
php artisan migrate:fresh --seed

### 6. Запуск приложения
php artisan serve

# Запус приложения
 - cp ./backend/.env.example ./backend/.env
 - docker compose build
 - docker compose run node yarn install
 - docker compose run php composer install
 - docker compose up -d
 - docker compose run php php artisan migrate
 - docker compose run php php artisan l5-swagger:generate

Сваггер доступен по адресу http://localhost:8080/api/documentation
Приложение открывается по адресу http://localhost

# Подготовка для запуска тетсов
 - создать тетсувую базу например create database test_db;
 - cp ./backend/.env.example ./backend/.env.testing
 - прописать в .env.testing в DB_DATABASE  имя созданной базы
 - docker compose exec php php artisan migrate --env=testing

тесты можно запустить командой  - docker compose exec php php artisan test
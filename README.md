### Для запуска необходимо запустить следующие команды:
<b>1.</b>Запуск docker.
```
docker-compose up --build
```
<b>2.</b>Генерация .env
```
php artisan generate:env
```
<b>3.</b>Запуск php container.
```
docker exec -it feedback-php bash
```

### Внутри php container надо запускать следующие команды:
<b>4.</b>Миграция.
```
php artisan migrate
```
<b>5.</b>Генерация Swagger.
```
php artisan l5-swagger:generate
```
<b>6.</b>Запуск тестов.
```
php artisan test
```

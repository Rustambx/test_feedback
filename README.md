### Для запуска необходимо запустить следующие команды:
<b>1.</b>Запуск docker.
```
docker-compose up
```
<b>2.</b>Запуск php container.
```
docker exec -it feedback-php bash
```

### Внутри php container надо запускать следующие команды:
<b>3.</b>Запуск тестов.
```
php artisan test
```

# Дипломный проект по профессии «Веб-разработчик»

Дипломный проект представляет собой создание сайта для бронирования онлайн билетов в кинотеатр и разработка информационной системы для администрирования залов, сеансов и предварительного бронирования билетов.

## Выполненные задачи
* Разработан сайт бронирования билетов онлайн.
* Разработана административную часть сайта.

## Сущности

1. **Кинозал**. Помещение, в котором демонстрируются фильмы. Режим работы определяется расписанием на день. Зал — прямоугольное помещение, состоит из N х M различных зрительских мест.
2. **Зрительское место**. Место в кинозале. Есть два вида: VIP и обычное. 
3. **Фильм**. Информация о фильме заполняется администратором. Фильм связан с сеансом в кинозале.
4. **Сеанс**. Временной промежуток, во время которого в кинозале будет показываться фильм. На сеанс могут быть забронированы билеты.
5. **Билет**. QR-код c уникальным кодом бронирования, в котором обязательно указаны место, ряд, сеанс. Билет действителен строго на свой сеанс. Для генерации QR-кода можно использовать [сервис](http://phpqrcode.sourceforge.net/). 

## Роли пользователей системы
* Администратор — авторизованный пользователь.
* Гость — неавторизованный посетитель сайта.

### Возможности администратора
* Создание или редактирование залов.
* Создание или редактирование списка фильмов.
* Настройка цен.
* Создание или редактирование расписания сеансов фильмов.

### Возможности гостя
* Просмотр расписания.
* Просмотр списка фильмов.
* Выбор места в кинозале.
* Бронирование билета на конкретную дату.

## Важные моменты
* Присутствует валидация входных данных на стороне сервера.
* Пароль хранится в захешированном виде и при аутентификации происходит проверка хеша пользователя.

## Используемые NPM пакеты




## Версии окружения




## Инструкция по запуску приложения

*1. Запуск приложения Laravel:*

 1.1 В корневой папке приложения запускаем команду `composer install` 
 
 1.2 В корневой папке проекта файл `.env.example` переименовываем в `.env`. Проверяем файл в корневой папке проекта `.env` на корректность, например что адрес, название БД, логин и пароль стоят корректные. 
 
 1.4 Создаем новую БД с названием `database.sqlite`. Проверяем, что название новой БД сходится с названием в файле `.env` 
 
 1.5 Выполняем первую миграцию с сидированием БД `php artisan migrate:fresh --seed` 
 
 1.6 В корневой папке приложения запускаем команду `php artisan key:generate` 
 
 1.7 Проверяем, что Laravel запустился корректно `php artisan serve` 
 

*2. Запуск приложения VITE/React:*
 2.1 Проходим в папку `/react` и запускаем команду `npm install` 
 
 2.2 В корне папки `/react` создаём новый файл конфиг с именем `.env` и записываем туда константу `VITE_API_BASE_URL=http://localhost:8000` 
 
 2.3 Проверяем, что Vite запустился корректно `npm run dev` 
 
*3. Доступ в панель администрирования URL: http://127.0.0.1:8000/admin/login E-mail: admin@gmail.com Пароль: admin


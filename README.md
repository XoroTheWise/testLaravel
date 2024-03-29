# Тестовое задание по Laravel. 

Три таблицы, связь "один ко многим" и "многие ко многим", присутствует авторизация под авторами и админами, как по web, так и по api. Админам доступен CRUD-интерфейс для всех таблиц и Rest Api, авторам - только api.

Для Api использовал [PostMan](https://www.postman.com/), коллекция в репозитории ( *testLaraka.postman_collection.json* ). Для JWT-авторизцаии необходимо выбрать тип авторизации Bearer Token и указать в поле *Token* возвращаемый токен login-запроса. 
 
## API:

Для использования JWT-авторизации, необходимо установить JWT-токен 
```bash
php artisan jwt:secret
```


**a**.	Запрос на авторизацию пользователя.

**b**.	Получение списка книг с именем автора, авторизация не обязательна.

**c**.	Получение данных книги по id, авторизация не обязательна.

**d**.	Обновление данных книги, авторизация под автором книги обязательна.

**e**.	Удаление книги, авторизация под автором книги обязательна.

**f**.	Получение списка авторов с указанием количества книг, авторизация не обязательна.

**g**.	Получение данных автора со списком книг, авторизация не обязательна.

**h**.	Обновление данных автора, авторизация под  автором обязательна (можно обновлять только свои данные).

## Реализация API:



**a**. *POST bearer token, можно вводить как в параметрах, так и в body*:

```bash
http://testlaraka/api/auth/login?email=admin@mail.ru&password=123456789	
``` 

**b**. *GET без токена*:
```bash
http://testlaraka/api/books	
``` 

**c**. *GET без токена*:
```bash
http://testlaraka/api/books/52		
``` 

**d**. *PUT необходим токен, можно вводить как в параметрах, так и в body*:
```bash
http://testlaraka/api/book/18?title=555		
``` 

**e**. *DELETE необходим токен*:
```bash
http://testlaraka/api/book/49		
``` 

**f**. *GET без токена*:
```bash
http://testlaraka/api/authors		
``` 

**f**. *GET без токена*:
```bash
http://testlaraka/api/authors/5	
``` 

**f**. *POST необходим токен, указать данные в query\body (name &&|| email)*:
```bash
http://testlaraka/api/author/5
``` 

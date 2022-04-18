# Тестовое задание по Laravel. 

Три таблицы, связь "один ко многим" и "многие ко многим", присутствует авторизация под авторами и админами, как по web, так и по api. Админам доступен CRUD-интерфейс для всех таблиц и Rest Api, авторам - только api. Дамп бд закинул ( *testlaraka.sql* ).

Для Api использовал [PostMan](https://www.postman.com/), коллекция в репозитории ( *testLaraka.postman_collection (1).json* ).
 
## API:

a.	Запрос на авторизацию пользователя.

b.	Получение списка книг с именем автора, авторизация не обязательна.

c.	Получение данных книги по id, авторизация не обязательна.

d.	Обновление данных книги, авторизация под автором книги обязательна.

e.	Удаление книги, авторизация под автором книги обязательна.

f.	Получение списка авторов с указанием количества книг, авторизация не обязательна.

g.	Получение данных автора со списком книг, авторизация не обязательна.

h.	Обновление данных автора, авторизация под  автором обязательна (можно обновлять только свои данные).

## Реализация API:



**a**. *POST bearer token*:

```bash
http://testlaraka/api/auth/login?email=admin@mail.ru&password=123456789   	
``` 



**b**. *GET без токена*:
```bash
http://testlaraka/booksApi 		
``` 

**c**. *GET без токена*:
```bash
http://testlaraka/booksApi/5 		
``` 

**d**. *PUT необходим токен*:
```bash
http://testlaraka/api/bookUpdate/4?title=ffsdf 		
``` 

**e**. *PUT необходим токен*:
```bash
http://testlaraka/api/bookDeleted/4 		
``` 

**f**. *GET без токена*:
```bash
http://testlaraka/authorsApi		
``` 

**f**. *GET без токена*:
```bash
http://testlaraka/authorsApi/5		
``` 

**f**. *PUT необходим токен*:
```bash
http://testlaraka/api/authorUpdate/2?name=TheBestAuthor
``` 

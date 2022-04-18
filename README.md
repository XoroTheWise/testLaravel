#Тестовое задание по Laravel. 

3 таблицы, связь "один ко многим" и "многие ко многим", присутствует авторизация под авторами и админами, как по web, так и по api. Админам доступен CRUD-интерфейс для всех таблиц и Rest Api, авторам - только api. Дамп бд закинул (testlaraka.sql).

Для Api использовал [PostMan](https://www.postman.com/)
 
##API:

a.	Запрос на авторизацию пользователя.

b.	Получение списка книг с именем автора, авторизация не обязательна.

c.	Получение данных книги по id, авторизация не обязательна.

d.	Обновление данных книги, авторизация под автором книги обязательна.

e.	Удаление книги, авторизация под автором книги обязательна.

f.	Получение списка авторов с указанием количества книг, авторизация не обязательна.

g.	Получение данных автора со списком книг, авторизация не обязательна.

h.	Обновление данных автора, авторизация под  автором обязательна (можно обновлять только свои данные).


________________________________________________________________________

Реализация:

a - http://testlaraka/api/auth/login?email=admin@mail.ru&password=123456789   	POST bearer token

b - http://testlaraka/booksApi 		GET; *без токена	

c - http://testlaraka/booksApi/5  	GET; *без токена

d - http://testlaraka/api/bookUpdate/4?title=ffsdf     PUT *необходим токен

e - http://testlaraka/api/bookDeleted/4      PUT *необходим токен

f - http://testlaraka/authorsApi 	 GET; *без токена

g - http://testlaraka/authorsApi/5 	 GET; *без токена

h - http://testlaraka/api/authorUpdate/2?name=TheBestAuthor       PUT *необходим токен

Тестовое задание по Laravel. 

3 таблицы, связь "один ко многим" и "многие ко многим", присутствует авторизация под авторами и админами, как по web, так и по api. Админам доступен CRUD-интерфейс для всех таблиц и Rest Api, авторам - только api. 

Для Api использовал PostMan - https://www.postman.com/
 
 
 
 
API:

a.	Запрос на авторизацию пользователя.

b.	Получение списка книг с именем автора, авторизация не обязательна.

c.	Получение данных книги по id, авторизация не обязательна.

d.	Обновление данных книги, авторизация под автором книги обязательна.

e.	Удаление книги, авторизация под автором книги обязательна.

f.	Получение списка авторов с указанием количества книг, авторизация не обязательна.

g.	Получение данных автора со списком книг, авторизация не обязательна.

h.	Обновление данных автора, авторизация под  автором обязательна (можно обновлять только свои данные).



Реализация:

a - http://testlaraka/api/auth/login?email=admin@mail.ru&password=123456789   	POST <p style="red">bearer token</p>;

b - http://testlaraka/booksApi 		GET;	

c - http://testlaraka/booksApi/5  	GET;

d - http://testlaraka/api/bookUpdate/4?title=ffsdf     PUT

e - http://testlaraka/api/bookDeleted/4      PUT 

f - http://testlaraka/authorsApi 	 GET;

g - http://testlaraka/authorsApi/5 	 GET;

h - http://testlaraka/api/authorUpdate/2?name=TheBestAuthor       PUT

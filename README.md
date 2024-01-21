# API Documentation
## 💁‍♀️ Allowed HTTP request
- GET : To GET data from the API
- POST    : To send POST request to the API ( Create data )
- PUT     : To send PUT request to the API ( Update data )
- DELETE  : To delete data on the API 
## Description Of Usual Server Responses
- 200 `OK` - Request was successful
- 404 `Not Found` - Requested data was not found
## Books Attributes
- id `integer` : Unique identifier ( Primary Key )
- book_name `string` : Book Name
- description `string` : Book Description
- category_id `integer` : Book Category
## bookCategory Attributes
- id `integer` : Unique identifier ( Primary Key )
- category `string` : Category Name
## GET Request Example
### Getting all data
Book URL : 
```
http://localhost:8000/Book
```
bookCategory URL : 
```
http://localhost:8000/bookCategory
```
### Getting a specific book data based on ID
Book URL : 
```
http://localhost:8000/Book/{id}
```
bookCategory URL : 
```
http://localhost:8000/bookCategory/{id}
```
## POST Request Example


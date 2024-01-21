# API Documentation
## 💁‍♀️ Allowed HTTP request
- GET : To GET data from the API
- POST    : To send POST request to the API ( Create data )
- PUT     : To send PUT request to the API ( Update data )
- DELETE  : To delete data on the API 
## 📝 Description Of Usual Server Responses
- 200 `OK` - Request was successful
- 404 `Not Found` - Requested data was not found
## 📚 Books Attributes
- id `integer` : Unique identifier ( Primary Key )
- book_name `string` : Book Name
- description `string` : Book Description
- category_id `integer` : Book Category ( Foreign Key )
## ✍ bookCategory Attributes
- id `integer` : Unique identifier ( Primary Key )
- category `string` : Category Name
## 🔖 GET Method Example
### Getting all data
#### Book URL : 
```
http://localhost:8000/api/Book
```
#### Result Examples :
```json
[
    {
        "id": 1,
        "book_name": "Jovan Walter",
        "description": "Mr. Robin Rath",
        "category_id": 1,
        "created_at": "2024-01-21T04:20:39.000000Z",
        "updated_at": "2024-01-21T04:20:39.000000Z"
    },
    {
        "id": 2,
        "book_name": "Royal Medhurst",
        "description": "Addie Simonis Jr.",
        "category_id": 1,
        "created_at": "2024-01-21T04:20:39.000000Z",
        "updated_at": "2024-01-21T04:20:39.000000Z"
    },
    {
        "id": 3,
        "book_name": "Dante Carroll",
        "description": "Ona Runte",
        "category_id": 1,
        "created_at": "2024-01-21T04:20:39.000000Z",
        "updated_at": "2024-01-21T04:20:39.000000Z"
    }
]
```
#### bookCategory URL : 
```
http://localhost:8000/api/bookCategory
```
#### Result Examples :
```json
[
    {
        "id": 1,
        "category": "Urban Jakubowski",
        "created_at": "2024-01-21T04:20:39.000000Z",
        "updated_at": "2024-01-21T04:20:39.000000Z"
    },
    {
        "id": 2,
        "category": "Macey Grant",
        "created_at": "2024-01-21T04:20:39.000000Z",
        "updated_at": "2024-01-21T04:20:39.000000Z"
    },
    {
        "id": 3,
        "category": "Ayden McLaughlin",
        "created_at": "2024-01-21T04:20:39.000000Z",
        "updated_at": "2024-01-21T04:20:39.000000Z"
    }
]
```
### Getting a specific book data based on ID
#### Book URL : 
```
http://localhost:8000/api/Book/{id}
```
#### Result Examples :
```json
{
    "id": 1,
    "book_name": "Jovan Walter",
    "description": "Mr. Robin Rath",
    "category_id": 1,
    "created_at": "2024-01-21T04:20:39.000000Z",
    "updated_at": "2024-01-21T04:20:39.000000Z"
}
```
#### bookCategory URL : 
```
http://localhost:8000/api/bookCategory/{id}
```
#### Result Examples :
```json
{
    "id": 1,
    "category": "Urban Jakubowski",
    "created_at": "2024-01-21T04:20:39.000000Z",
    "updated_at": "2024-01-21T04:20:39.000000Z"
}
```
## 🧾 POST Method Example
### Book Example
#### URL :
```
http://localhost:8000/api/Book
```
#### Body :
```json
{
    "book_name":"test",
    "category_id":"3",
    "description":"lorem"
}
```
### bookCategory Example
#### URL :
```
http://localhost:8000/api/bookCategory
```
#### Body :
```json
{
    "category":"test"
}
```
## ✍ PUT Method Example
### Book Example
#### URL :
```
http://localhost:8000/api/Book/{id}
```
#### Body :
```json
{
    "book_name":"test",
    "category_id":"3",
    "description":"lorem"
}
```
### bookCategory Example
#### URL :
```
http://localhost:8000/api/bookCategory/{id}
```
#### Body :
```json
{
    "category":"test"
}
```
## ❌ DELETE Method Example
### Book
#### URL :
```
http://localhost:8000/api/Book/{id}
```
### bookCategory
#### URL :
```
http://localhost:8000/api/bookCategory/{id}
```
## 🤯 Entity Relational Diagram ( ERD )
![Screenshot 2024-01-21 212421](https://github.com/urfavteddybear/Final-Submission-IDC/assets/97431620/7f38c334-2000-4256-8f59-c646d485cad3)
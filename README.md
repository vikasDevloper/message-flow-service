# Symfony 5 REST API for Messaging System

Symfony 5 + ngnix + Mysql + doctrine + RabiitMQ + Docker


## Table of Contents
+ [About](#about)
+ [Getting Started](#getting_started)


## About <a name = "about"></a>
Symfony 5 skeleton to build REST APIs, inclusive of:


This project is compliant with:
Create a service that will store and control information about users & messages.
![message_flow_service_api](https://user-images.githubusercontent.com/37538760/204134083-19461b0f-46a7-41d6-89b0-8889b40d94e1.gif)


General HTTP output format:


POST messages: POST http://127.0.0.1:8000/messages

JSON (any other field will be ignored):
```json

    {
        "data": {
            "to": "8a7290c4-970d-4285-b18d-d62b581f2061",
            "from": "110cc5dc-51ee-4da0-a5e3-9cd704fc9be6",
            "message": {
                "content": "Hi I'm Vikas, I am impressed with your painting, I want to propose more for it"
            }
        }
    },
    {
        "data": {
            "to": "110cc5dc-51ee-4da0-a5e3-9cd704fc9be6",
            "from": "8a7290c4-970d-4285-b18d-d62b581f2061",
            "message": {
                "content": "Wow, cool,How Much"
            }
        }
    }

``` 
Response:
```json
{
    "status": "Messages created!",
    "id": "638292d466633950a8306662"
}

```

Example - GET resource: GET http://127.0.0.1:8000/messages/110cc5dc-51ee-4da0-a5e3-9cd704fc9be6/recipients
```json
{
    "data": {
        "recipients": [
            {
                "id": "8a7290c4-970d-4285-b18d-d62b581f2061",
                "count": 1
            }
        ]
    }
}

``` 

Example - GET resource: GET 
http://127.0.0.1:8000/messages/8a7290c4-970d-4285-b18d-d62b581f2061/recipients/110cc5dc-51ee-4da0-a5e3-9cd704fc9be6?date_from=2022-11-27&date_to=2022-11-28&per_page=2&page_number=2

JSON (Params):
```json 
{
   "date_from":2022-11-27,
   "date_to":2022-11-29,
   "per_page":10,
   "page_number":1
}

``` 
Response:
```json
{
    "data": {
        "messages": [
            {
                "id": "638292d466633950a8306662",
                "from": "110cc5dc-51ee-4da0-a5e3-9cd704fc9be6",
                "to": "8a7290c4-970d-4285-b18d-d62b581f2061",
                "content": "Hi I\u0027m Vikas, I am impressed with your painting, I want to propose more for it",
                "created_at": "2022-11-27 03:57:32",
                "updated_at": "2022-11-27 03:57:32"
            },
            {
                "id": "638292d466633950a8306662",
                "from": "8a7290c4-970d-4285-b18d-d62b581f2061",
                "to": "110cc5dc-51ee-4da0-a5e3-9cd704fc9be6",
                "content": "Wow, cool,How Much",
                "created_at": "2022-11-27 03:57:32",
                "updated_at": "2022-11-27 03:57:32"
            }
        ],
        "count": 2
    }
}
```


## Getting Started <a name = "getting_started"></a>

These instructions will get you a copy of the project up and running on your local machine 
for development and testing purposes. 

### Prerequisites

What things you need to install the software and how to install them.
- PHP 7.2.5+
- [composer](https://getcomposer.org/download/)
- [symfony](https://symfony.com/doc/current/setup.html)
- [Mysql]
- docker (optional)
- [RabitMQ]


### Installing

```bash
git clone https://github.com/vikasDevloper/message-flow-service.git
cd message-flow-service
cp .env.dist .env
## edit .env if needed
composer install
symfony server:start
```
### Installing (alternative with Docker)

```bash
git clone https://github.com/vikasDevloper/message-flow-service.git
cd message-flow-service
cp .env.dist .env
## edit .env if needed

docker-compose build
docker-compose up
```


### Running the example

#### Install database
```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

#### Get with Curl

```bash
curl -H 'content-type: application/json' -v -X POST http://127.0.0.1:8000/messages
curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/messages/110cc5dc-51ee-4da0-a5e3-9cd704fc9be6/recipients
```

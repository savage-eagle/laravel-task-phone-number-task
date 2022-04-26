# Create Phone Book Listing

POST: /api/phone_book

```json
{
    "user_id": 1,
    "first_name": "Jose Carlos",
    "last_name": null,
    "is_blocked": false
}
```

# Delete Phone Book (with all phone-numbers)

DELETE: /api/phone_book/{ID}

# View A Specify Phone Book

GET: /api/phone_book/{ID}

# View all Phone Books

GET: /api/phone_book

# Update phone Book

PUT: /api/phone_book/{ID}

```json
{
    "first_name": "Jose Carlos",
    "last_name": "ge",
    "is_blocked": true
}
```

# Create Phone Numbers for a Phone Book

POST: /api/phone_numbers

```json
{
    "phone_book_id": 2,
    "phone_number": "1234567891",
    "contact_type": "home"
}
```

# Delete Phone Number

DELETE: /api/phone_numbers/{ID}

# View A Phone Number

GET: /api/phone_numbers/{ID}

# View all Phone Numbers

GET: /api/phone_numbers

# Update phone number

PUT: /api/phone_numbers/{ID}

```json
{
    "first_name": "Jose Carlos",
    "last_name": "ge",
    "is_blocked": true
}
```

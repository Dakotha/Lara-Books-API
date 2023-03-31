# Lara-Books-API

Aby uruchomić projekt wykonaj następujące kroki:

* Edytuj plik .env.example i zapisz go jako .env

W terminalu wpisz komendę:
```
composer install
./vendor/bin/sail up
```

W drugim terminalu wpisz następujące komendy:
```
./vendor/bin/sail bash
php artisan migrate
```

## Opis endpointów

Bazowym url'em jest:
```
http://localhost/api
```
lub inny jaki skonfigurujesz w swoim środowisku developerskim, np:
```
http://wp-test.local/api
```

Wpisując w terminalu komendę:
```
php artisan route:list
```
otrzymasz listę wszystkich dostępnych endpointów.

## BOOKS
---

### GET /books
Zwraca kolekcję wszystkich książek.

### POST /books
Zapisuje do bazy danych nową książkę. Należy wysłać json'a, np:
```
{
    "title": "Tytuł nowej książki",
    "category_id": 1,
    "author_ids": [1, 2]
}
```

### GET /books/{book}
Pobiera książkę z danym ID

### PUT /books/{book}
Uaktualnia w bazie danych książke z danym ID. Należy wysłać json'a, np:
```
{
    "title": "Nowy Tytuł książki",
    "category_id": 1,
    "author_ids": [1, 3]
}
```

### DELETE /books/{book}
Usuwa książkę z danym ID

### POST /books/{id}/authors
Dodaje rekord do tabeli łączącej tabele books i authors w relacji many-to-many.

## AUTHORS
---

### GET /authors
Zwraca kolekcję wszystkich autorów.

### POST /authors
Zapisuje do bazy danych nowego autora. Należy wysłać json'a, np:
```
{
    "name": "Nowy autor"
}
```

### GET /authors/{author}
Pobiera autora z danym ID

### PUT /author/{author}
Uaktualnia w bazie danych autora z danym ID. Należy wysłać json'a, np:
```
{
    "name": "Nowy autor",
}
```

### DELETE /authors/{autor}
Usuwa autora z danym ID

## CATEGORIES
---

### GET /categories
Zwraca kolekcję wszystkich kategorii.

### POST /categories
Zapisuje do bazy danych nową kategorię. Należy wysłać json'a, np:
```
{
    "name": "Nowa kategoria"
}
```

### GET /categories/{category}
Pobiera kategorię z danym ID

### PUT /categories/{category}
Uaktualnia w bazie danych kategorię z danym ID. Należy wysłać json'a, np:
```
{
    "name": "Nowy nazwa kategorii"
}
```

### DELETE /categories/{category}
Usuwa książkę z danym ID

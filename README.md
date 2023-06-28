# Zadanie rekrutacyjne
Jest to pierwsza część zadania rekrutacyjnego, polegająca na stworzeniu API dla frontendowej aplikacji pobierającej i wyświetlającej dane.

## Opis zadania
Zadanie składa się z dwóch części. Najpierw należy stworzyć API serwujące listę książek. Każda książka może należeć do jednej kategorii lub nie należeć do żadnej i do wielu autorów.
Następnie należy stworzyć aplikację pobierającą i wyświetlającą dane z API.

## Jak uruchomoć projekt?

Aby uruchomić projekt wykonaj następujące kroki:

* Edytuj plik .env.example i zapisz go jako .env
* Uzupełnij dane dostępowe do wcześniej przygotowanej bazy danych

W terminalu wpisz następujące komendy:
```
composer install
php artisan key:generate
php artisan migrate
```

Aby wypełnić bazę danych przykładowymi danymi, wykonaj następującą komendę:
```
php artisan db:seed
```

Aplikacja jest gotowana do działania. Uruchom serwer za pomocą komendy
```
php artisan serve
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

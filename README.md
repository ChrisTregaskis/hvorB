# hvorB Application

This application is built using Slim framework, OOP and the MVC structure.

## Setup

1. Clone repo
2. Run ```composer install``` in app route
3. Create database with name ```wbapp``` and a either import template from db/ file or create your own with the following columns:
    - ```id``` : user id
    - ```fname``` : first name
    - ```sname``` : surname
    - ```fullName``` : full name
    - ```knownEmail``` : last known work email
    - ```knownCompany``` : last known company
    - ```companyAPIResult``` : result of company following curl query
    - ```matchPrevious``` : bool to say if knownCompany matches any previous company on Lkn profile
    - ```matchCurrent``` : bool to say if current profile company matches knownCompany

4. Run ```composer start```

## Running Tests

- cd into the tests directory and run: ```../vendor/bin/phpunit .```
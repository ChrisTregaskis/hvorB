# hvorB Application

This application is built using Slim framework, OOP and the MVC structure.

## Setup

1. Clone repo
2. Run ```composer install``` in app route
3. Create database with name ```wbapp``` and a either import latest version in db/ file or create your own with the following columns:
    - ```id``` : user id
    - ```fname``` : first name
    - ```sname``` : surname
    - ```fullName``` : full name
    - ```knownEmail``` : last known work email
    - ```knownCompany``` : last known company
    - ```companyCheck``` : result of company following curl query
    - ```companyMatch``` : bool to say if the company is the same or not after check

4. Run ```composer start```

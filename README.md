Script to generate CV
===========================

Requirements
-------------------------

*   PHP 7.1
*   wkhtmltopdf

Instalation
-------------------------

*   git clone git@github.com:gawryluklukasz/cv-generator.git
*   composer install
*   edit variable WKHTMLTOPDF_PATH in .env file (`which wkhtmltopdf` will be helpfull)
*   cd cv-generator.git
*   php -S 127.0.0.1:8000 -t public
*   Browse to the http://localhost:8000/ URL.

Main information
-------------------------

### Configuration

*   you can replace photo in public/images/
*   all information about candidate is in config/data_person.yaml

### Change template

If you want edit template you can change file templates/cv/index.html.twig

TODO
-------------------------

*   multilanguage
*   cleaning unnecessary packages
*   move config to database (and maybe interface with CRUD to data)

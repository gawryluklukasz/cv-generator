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

*   all information about candidate is in config/data_person.yaml
*   default photo configuration is in file data_person.yml,
    if you want serve it from local it's not a problem - remove key photo and replace photo in public/images/

### Change template

If you want edit template you can change file templates/cv/index.html.twig

Troubleshoting
-------------------------

```
The exit status code '134' says something went wrong:
stderr: "QXcbConnection: Could not connect to display 
Aborted
```
To resolve this install xvfb and set in .dev `"/usr/bin/xvfb-run /usr/bin/wkhtmltopdf"`

TODO
-------------------------

*   multilanguage
*   move config to database (and maybe interface with CRUD to data)

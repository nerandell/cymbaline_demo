Cymbaline Demo
==============

A simple web app demonstrating the use of cymbaline_, a web framework for PHP.

.. _cymbaline: https://github.com/nerandell/cymbaline

Getting Started
---------------
- PHP 5.3.x is required
- Install Composer_
- Setup URL rewriting so that all requests are handled by index.php
.. _composer: https://getcomposer.org/

Usage
-----
To run this demo, you need composer. 
Once composer is installed, run:

.. code-block:: bash

    $ composer install


Serve the app using your preferred web server.

To see the demo in action:

.. code-block:: bash

    $ curl -X POST -H "Content-Type: application/json" -H "Cache-Control: no-cache" -H "Postman-Token: eb13576b-12a6-7f61-46cf-29fd4c312e9b" -d '{
    "name": "Directi", "location": "Sector 44"}' 'http://localhost:8080/company'
    $ curl http://localhost:8080/company/1
    {"id":3,"name":"Directi","location":"Sector 44","created_at":"2015-12-06 10:56:22","updated_at":"2015-12-06 10:56:22"}%







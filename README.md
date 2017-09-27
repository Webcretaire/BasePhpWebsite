# BasePhpWebsite
Basic files to setup a php project with a router and php as a templating engine

## How to use this skeleton ?
First of all you should install dependencies using composer (``composer install``).

Then to create a new page, a class that extends BaseTemplate needs to be created in the folder /src/App/View, and it must be registered in a routing file (see /config/routing/general.yml for an example)

The routing files are lists of includes and/or routes in YAML.
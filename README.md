# BIC4 Project: The films about the unknown

## The films about the unknown

Diese Webseite listet alle Filme und ihre dazugehörigen Schauspieler auf. 
Mithilfe einer Suchfunktion kann nach den Schauspielern oder dem Film gesucht werden.

## Verwendete Technologien:

Diese Webseite wurde mithilfe von CSS und dem dazugehörigen Framework Bulma designed.
Unsere eigenen Anpassungen finden sich in dem _variables.scss und -custom.scss Dateien.

Des weiteren wurde JavaScript und Vue Components verwendet, um dem Benutzer eine leichte Interaktion und ein dynamisches Nutzungsgefühl zu ermöglichen. 

Die Daten über die Filme und Schauspieler wurden auf einer eigenen Datenbank abgelegt in welcher sie auch verändert werden.

Dem Benutzer stehen folgende Möglichkeiten zur Verfügung Änderungen an der Datenbank vor zu nehmen.

### Already providing

All routes that are needed are implemented:
 * **GET** ```/actor``` &rarr; Lists all actors
 * **GET** ```/list/actor``` &rarr; Returns JSON of all actors
 * **GET** ```/list/film``` &rarr; Returns JSON of all film
 * **POST** ```/actor``` &rarr; Stores new actors
 * **GET** ```/actor/{slug}``` &rarr; Show actor
 * **PUT** ```/actor/{slug}``` &rarr; Update actor
 * **DELETE** ```/actor/{slug}``` &rarr; Delete actor
 * **GET** ```/actor/{slug}/edit``` &rarr; Edit actor
 * **GET** ```/search/actor``` &rarr; Search actors
 * **POST** ```/search/actor``` &rarr; Query actors
 * **GET** ```/film``` &rarr; Lists all films
 * **GET** ```/list/film``` &rarr; Returns JSON of all film
 * **POST** ```/film``` &rarr; Stores new film
 * **GET** ```/film/{slug}``` &rarr; Show film
 * **PUT** ```/film/{slug}``` &rarr; Update film
 * **DELETE** ```/film/{slug}``` &rarr; Delete film
 * **GET** ```/film/{slug}/edit``` &rarr; Edit film

All views can be found in ```/resources/views```.

### TODO

#### VueJS

Implement your [VueJS](https://vuejs.org) components in the folder ```/resources/js/components```.
Register your components in ```/resources/js/app.js``` and use them in the following files:

 * ```/resources/views/film```
     * ```/resources/views/film/create.blade.php```
     * ```/resources/views/film/edit.blade.php```
     * ```/resources/views/film/index.blade.php```
     * ```/resources/views/film/show.blade.php```
 * ```/resources/views/actor```
      * ```/resources/views/actor/create.blade.php```
      * ```/resources/views/actor/edit.blade.php```
      * ```/resources/views/actor/index.blade.php```
      * ```/resources/views/actor/search.blade.php```
      * ```/resources/views/actor/show.blade.php```

To query data for dropdowns in forms or to reload lists use the list routes:
 * **GET** ```/list/film```
 * **GET** ```/list/actor```

For the search form use ```q``` as the name for the text input.
The search will be handled by the backend.

#### CSS (SCSS)

The design of the software need to be adapted.
[Bulma](https://bulma.io) is used to layout and style the website.
If wanted default styles can be overwritten by setting variables in the ```/resources/sass/_variables.scss``` file.
Also it is possible to write custom styles in ```/resources/sass/_custom.scss```.

A new logo need to be set. If pictures will be present on the website place them in ```/public/img``` folder.
Here you will also find the logo.

### Hints

#### JavaScript and CSS (SCSS)

To compile scss and JavaScript ```npm run dev``` need to be executed in the project folder.
It is also possible to run ```npm run watch``` so it is not need to execute ```npm run dev``` every time a change happend.

#### Data for Database

To make starting developing fast there are some seeders implemented to fill all needed tables except the user table.
To populate the database run the command ```php artisan db:seed``` in the filminal in project root folder.

## Wie man die Webseite verwendet:
* Sobald man die Webseite ansteuert, findet man sich auf der Willkommensseite wieder.
  Hier hat man die Möglichkeit, sich mit einem bereits registrierten Nutzer anzumelden, oder einen neuen Benutzer anzulegen.
    * Möchte man einen neuen Benutzer anlegen, muss man auf den Button "Registerierung" drücken. Danach öffnet sich ein Fenster,
        in dem man seinen Namen, seine E-Mail Adresse und sein Passwort 2x eingibt. 
    * Möchte man jedoch einen Registrierten Benutzer anmelden, öffnet sich ein Fenster wo man seine E-Mail Adresse und sein Passwort eingibt.
* Danach gelangt man zum Hauptmenü.
    * Hier hat man die volle Auswahl. Man kann sich mit dem Dropdown Menü seines Benutzers wieder ausloggen.
    * Man kann mit dem Dropdownm Menü bei dem Schauspieler die Liste aller Schauspieler anzeigen lassen.
        * Einen neuen Schauspieler erstellen.
        * Eine Suche nach den Schauspielern oder einem Film durchführen.
    * Man kann mit dem Dropdownm Menü bei dem Film die Liste aller Filme anzeigen lassen.
        * Einen neuen Film erstellen.
* Hat man eine Liste ausgewählt, hat man die Möglichkeit mittels des roten Links (ID) eine detailiertere Ansicht des betreffenden Schauspielers oder Films zu erhalten.
    * Diese Ansicht dient gleichzeitig auch dafür, den gewählten Eintrag zu bearbeiten oder zu löschen. 
        * Mit Abbrechen gelangt man wieder zurück zur jeweiligen Listenansicht.
        * Wählt man Bearbeiten gelangt man auf eine weitere Ansicht in der man dann je nach dem Name, Beschreibung und die Film ID verändern kann.
        * Wählt man Löschen, wird der Eintrag gelöscht und man gelangt zurück zur Liste.
* Hat man Hinzufügen ausgewählt, gelangt man zu einer weiteren Maske in der man Name, Beschreibung und Film ID eintragen kann.
    * Mit Hinzufügen wird dieser Eintrag der Liste hinzugefügt. 
    * Mit Abbrechen gelangt man wieder zurück zur Startseite.
* Hat man die Suche ausgewählt, gelangt man zu einer Listenansicht mit zwei aufegesetzten Suchfeldern.
    * Das erste Suchfeld sucht nach Namen der Schauspieler. 
    * Das zweite Suchfeld sucht nach den Film ID's.
    * Je nach dem welche Suchanfrage man startet wird die Liste eingeschränkt. Man kann auch in beide Suchfelder etwas eingeben um es exakt zu spezifizieren.





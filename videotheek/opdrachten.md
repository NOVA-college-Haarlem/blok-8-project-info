# Opdrachten

## Opdracht 1 - Database ontwerp

1. Maak een database ontwerp voor de kinderopvang.
2. Laat je database ontwerp door de docent goedkeuren.

### Specifieke Eisen

### Films

Eigenschappen:
- Titel
- Regisseur
- Genre
- Jaar
- Duur
- Uitgever

Daarnaast:
- Een film kan meerdere regisseurs hebben.
- Een film heeft één productiehuis
- Een film hoort bij één hoofdgenre (bijv. 'Documentaire', 'Thriller', 'Actie')
- Een film kan in meerdere subgenres vallen (bijv. 'Science Fiction', 'Mysterie')


#### Regisseurs

Eigenschappen:
- Naam
- Geboortedatum

Daarnaast:
- Een regisseur kan meerdere films hebben geregisseerd

#### Productiehuizen

Eigenschappen:
- Naam
- Contactpersoon
- Email
- Telefoonnummer
- Levertijd in dagen

Daarnaast:
- Een productiehuis kan meerdere films produceren

#### Genres

Eigenschappen:
- Naam

Daarnaast:
- Een genre kan meerdere films hebben

#### Subgenres

Eigenschappen:
- Naam
- Hoort bij een hoofdgenre

Daarnaast:
- Een subgenre kan meerdere films hebben

## Opdracht 2 - Laravel Project beginnen

1. Start een nieuw Laravel project in Laravel Herd.
2. Kies voor het gebruik van Laravel Breeze voor authenticatie
3. Noem het project "videostore"
4. Kies Blade voor de frontend
5. Testing Framework: PHPUnit
6. Target location: _hoef je niet te kiezen_
7. ga naar http://videostore.test

## Opdracht 3 - Database Docker omgeving

1. Open VS Code
2. Open je projecten folder (dus werk netjes volgens de eerdere afspraken/opdrachten)
3. Open een terminal
4. Clone deze repository: https://github.com/NOVA-college-Haarlem/mysql-phpmyadmin in de projecten folder
    - `git clone https://github.com/NOVA-college-Haarlem/mysql-phpmyadmin`
5. Open de map `mysql-phpmyadmin`
6. Open een terminal in deze map
7. Run `docker compose up -d`
8. Open een browser en ga naar http://localhost:8000
9. Je hebt nu toegang tot een MySQL database met een phpmyadmin interface.

## Opdracht 4 - Models maken

1. Maak via de `php artisan` commando de models aan. Deze zijn altijd in enkelvoud en in het Engels.

2. Laat je models door de docent goedkeuren.


## Opdracht 5 - Database connectie

1. Druk op Ctrl + P
2. Open .env file
3. Gebruik je liever mysql en phpmyadmin. Vul de correcte database connectie in. Zie regel 24 tm 29
> DB_CONNECTION=mysql
> DB_HOST=127.0.0.1
> DB_PORT=3307
> DB_DATABASE=videotheek
> DB_USERNAME=root
> DB_PASSWORD=password

## Opdracht 5 - Migrations maken

1. Maak via de `php artisan` commando de migrations aan. 
2. Zorg ervoor dat je alle attributen uit je database ontwerp hebt meegenomen.
3. Controleer of de migrations zijn aangemaakt.
4. Laat je migrations door de docent goedkeuren.

## Opdracht 6 - Seeding

1. Maak via de `php artisan` commando de seeders aan. Deze zijn altijd in enkelvoud en in het Engels.
2. Zorg ervoor dat alle niet-verplichte kolommen zijn voorzien van een default waarde of een nullable waarde.
3. Probeer de database te seeden.
4. Laat je seeders door de docent goedkeuren.

## Opdracht 7 - Userstories maken

De volgende dien je te maken:

- [ ] films kunnen toevoegen zodat nieuwe aanwinsten in het systeem staan
- [ ] films kunnen bewerken zodat informatie up-to-date blijft
- [ ] de voorraad van films kunnen bijhouden zodat ik weet wanneer bij te bestellen (deze dien je te bevragen bij de docent)
- [ ] kunnen zien welke films onder het minimum voorraadniveau komen (deze dien je te bevragen bij de docent)
- [ ] films kunnen verwijderen als ze uit de collectie gaan (deze  dien je te bevragen bij de docent)

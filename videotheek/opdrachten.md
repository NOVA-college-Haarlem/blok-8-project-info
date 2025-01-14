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


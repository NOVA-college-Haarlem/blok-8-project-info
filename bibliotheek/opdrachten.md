# Opdrachten

## Opdracht 1 - Database ontwerp

1. Maak een database ontwerp voor het dierenasiel.
2. Laat je database ontwerp door de docent goedkeuren.

### Functionaliteiten

De bibliotheekbeheerder wil de volgende functionaliteiten in het inventarissysteem:

1. **Boekbeheer**
   - Boeken toevoegen en beheren

2. **Genrebeheer**
   - Hoofdgenres en subgenres beheren
     
3. **Auteursbeheer**
   - Auteurs toevoegen en beheren

4. **Leveranciersbeheer**
   - Leveranciersinformatie beheren

### Specifieke Eisen

#### Boeken

Eigenschappen:
- Titel
- Auteur
- ISBN
- Genre
- Aantal exemplaren
- Minimum voorraad
- Uitgever

Daarnaast:
- Een boek kan meerdere auteurs hebben.
- Een boek kan meerdere leveranciers hebben.
- Een boek hoort bij één hoofdgenre (bijv. 'Fictie')
- Een boek kan in meerdere subgenres vallen (bijv. 'Science Fiction', 'Mysterie')
- Een boek kan geleverd worden door meerdere leveranciers

#### Auteurs

Eigenschappen:
- Naam
- Geboortedatum

Daarnaast:
- Een auteur kan meerdere boeken hebben geschreven

#### Leveranciers

Eigenschappen:
- Naam
- Contactpersoon
- Email
- Telefoonnummer
- Levertijd in dagen

Daarnaast:
- Een leverancier kan meerdere boeken leveren

#### Genres

Eigenschappen:
- Naam

Daarnaast:
- Een genre kan meerdere boeken hebben

#### Subgenres

Eigenschappen:
- Naam
- Hoort bij een hoofdgenre

Daarnaast:
- Een subgenre kan meerdere boeken hebben

## Opdracht 2 - Laravel Project beginnen

1. Start een nieuw Laravel project in Laravel Herd.
2. Kies voor het gebruik van Laravel Breeze voor authenticatie
3. Noem het project "bibliotheek"
4. Kies Blade voor de frontend
5. Testing Framework: PHPUnit
6. Target location: _hoef je niet te kiezen_
7. ga naar http://bibliotheek.test

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



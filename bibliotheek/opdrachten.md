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

## Opdracht 5 - Database connectie

1. Druk op Ctrl + P
2. Open .env file
3. Gebruik je liever mysql en phpmyadmin. Vul de correcte database connectie in. Zie regel 24 tm 29
> DB_CONNECTION=mysql
> DB_HOST=127.0.0.1
> DB_PORT=3307
> DB_DATABASE=bibliotheek
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

- [ ] - boeken kunnen toevoegen zodat nieuwe aanwinsten in het systeem staan
- [ ] - boeken kunnen bewerken zodat informatie up-to-date blijft
- [ ] - boeken kunnen verwijderen als ze uit de collectie gaan
- [ ] - de voorraad van boeken kunnen bijhouden zodat ik weet wanneer bij te bestellen (deze laatste dien je te bevragen bij de docent)

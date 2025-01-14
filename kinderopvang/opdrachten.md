# Opdrachten

## Opdracht 1 - Database ontwerp

1. Maak een database ontwerp voor de kinderopvang.
2. Laat je database ontwerp door de docent goedkeuren.

### Specifieke Eisen

#### Kind

Eigenschappen:
- Naam
- Leeftijd
- Geslacht
- Medische geschiedenis
- Dieetbehoeften

Relaties:
- Kan een dieetbehoefte hebben
- Heeft nul of meerdere medische behandelingen
- Hoort bij een of meerdere ouders

#### Inschrijving

Eigenschappen:
- Datum
- Status
- Kind
- Ouder

Relaties:
- Een kind kan een inschrijving hebben
- Een ouder kan meerdere inschrijvingen doen
  
#### Ouder

Eigenschappen:
- Naam
- Contactinformatie
- Adres
- E-mail
- Telefoonnummer
- Kinderen

Relaties:
- Een ouder kan meerdere kinderen hebben
- Een inschrijving verbindt een kind met een ouder

#### Medische Behandeling

Eigenschappen:
- Datum
- Type
- Beschrijving

Relaties:
- Een kind kan meerdere medische behandelingen hebben
- Een medische behandeling kan bij meerdere kinderen plaatsvinden

### Dieetbehoefte

Eigenschappen:
- Naam
- Beschrijving
- Voedingsstoffen

Relaties:
- Een kind heeft een dieetbehoefte

## Opdracht 2 - Laravel Project beginnen

1. Start een nieuw Laravel project in Laravel Herd.
2. Kies voor het gebruik van Laravel Breeze voor authenticatie
3. Noem het project "kinderopvang"
4. Kies Blade voor de frontend
5. Testing Framework: PHPUnit
6. Target location: _hoef je niet te kiezen_
7. ga naar http://kinderopvang.test

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

2. Laat je models door de docent goedkeuren.1




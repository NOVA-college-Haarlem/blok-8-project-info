# Opdrachten

## Opdracht 1 - Database ontwerp

1. Maak een database ontwerp voor het dierenasiel.
2. Laat je database ontwerp door de docent goedkeuren.

### Specifieke Eisen

#### Dier

Eigenschappen:
- Naam
- Soort
- Ras
- Leeftijd
- Geslacht
- Medische geschiedenis

Daarnaast:
- Kan geadopteerd worden door een aanvrager
- Heeft een voedingsschema
- Heeft nul of meerdere medische behandelingen
- Hoort bij een categorie


#### Adoptie

Eigenschappen:
- Aanvrager 
- Contactinformatie
- Datum van aanvraag
- Status van de aanvraag

Daarnaast:
- Een dier kan meerdere adopties hebben
- Een aanvrager kan meerdere adopties hebben
- Een adoptie verbindt een dier met een aanvrager

#### Medische Behandeling

Eigenschappen:
- Datum
- Type
- Beschrijving

Daarnaast:
- Een dier kan meerdere medische behandelingen hebben
- Een medische behandeling kan bij meerdere dier plaatsvinden

#### Voederschema

Eigenschappen:
- Naam
- Beschrijving
- Voedingsstoffen

Daarnaast:
- Een dier heeft een voederschema

## Opdracht 2 - Laravel Project beginnen

1. Start een nieuw Laravel project in Laravel Herd.
2. Kies voor het gebruik van Laravel Breeze voor authenticatie
3. Noem het project "dierenasiel"
4. Kies Blade voor de frontend
5. Testing Framework: PHPUnit
6. Target location: _hoef je niet te kiezen_
7. ga naar http://dierenasiel.test

## Opdracht 3 - Models maken

1. Maak via de `php artisan` commando de models aan. Deze zijn altijd in enkelvoud en in het Engels.

2. Laat je models door de docent goedkeuren.
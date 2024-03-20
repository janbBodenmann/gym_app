# Gym App Setup-Anleitung

Um die Gym-Webseite lokal auf deinem Rechner einzurichten, folge bitte diesen Schritten:

## Projekt klonen

Zuerst musst du das Projekt von Git klonen </br>
<https://github.com/janbBodenmann/gym_app.git>

## PHP-Terminal

```bash
cd GymApp3
```

```bash
composer install
cp .env.example .env
php artisan key:generate
```

## VITE-Terminal

```bash
cd GymApp3
```

```bash
npm install
npm run build
```

## XAMPP starten
Starte XAMPP und starte Apache und MySQL.

## Datenbank konfigurieren
Öffne die `.env-Datei` im Laravel-Projekt und ändere die Zeile:


<code>DB_DATABASE=gymapp3</code>

zu:

<code>DB_DATABASE=test</code>

## Datenbank migrieren
Führe den folgenden Befehl im Terminal (PHP) aus, um die Datenbankmigration durchzuführen:

```bash
php artisan migrate
```

## PHP-Server starten
Starte den PHP-Server mit dem folgenden Befehl:

```bash
php artisan serve
```

Öffne die Webseite mit dem Link, den `php artisan serve` bereitstellt.

## Vue-Entwicklungsserver starten
Öffne ein weiteres Terminal und führe den Befehl aus:
```bash
npm run dev
```


### Nun läuft alles und die Seite ist live und wird live aktualisiert, sobald du etwas im Code änderst.

# Vehikl Oil Change Challenge

A small Laravel app that determines whether a car is due for an oil change,
based on the current odometer reading and the details of the last oil change.

A car needs an oil change if:
- It's been more than 5,000 km since the last oil change, or
- It's been more than 6 months since the last oil change.

## Setup

1. Clone the repository:
```bash
   git clone https://github.com/MACQ25/oilchange.git
   cd oilchange
```

2. Install dependencies:
```bash
   composer install
```

3. Copy the environment file:
```bash
   cp .env.example .env
```

4. Generate an app key:
```bash
    php artisan key:generate 
```

5. Run migrations:
```bash
   php artisan migrate
```

6. (If step 5 failed) Artisan should have created the SQLite file for you automatically, but if migration failed because the file doesn't exist, run one of the following (OS dependent), then repeat step 5:

    macOS/Linux/Git Bash:
    ```bash
    touch database/database.sqlite
    ```
    Windows (PowerShell):
    ```powershell
    New-Item database/database.sqlite -ItemType File
    ```


7. Install frontend dependencies and build assets:
```bash
   npm install
   npm run build
```

8. Start the development server:
```bash
   php artisan serve
```

Visit `http://localhost:8000` to use the app.
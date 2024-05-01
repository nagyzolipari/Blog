# Rendszerfejlesztés 4. csapat: Blog
 Készítették:
- Nagy Dalma IIG79B
- Nagy Zoltán HQPBWK
- Szabados Dávid BE94N5

  A beadandók a beadandó sorszámával ellátott branchben található.


### Laravel Telepítése és Futtatása

#### Előfeltételek:
Győződj meg róla, hogy telepítve van a gépedre a következő szoftverek:
- PHP (8.1 vagy újabb)
- Composer (PHP függőségkezelő)
- Node.js és npm (a JavaScript függőségek kezeléséhez)
- Relációs adatbázis (pl. MySQL)

#### 1. Lépés: Laravel Blog Projekt Telepítése

A Github oldalról: https://github.com/nagyzolipari/Blog.git A zöld Code gombra kattintás után le kell tölteni a zip fájlt, majd azt egy tetszőleges mappába ki kell csomagolni.


#### 2. Lépés: Környezeti Beállítások
//Nyiss egy parancssort vagy terminált, és hajtsd végre a következő parancsot a Laravel Blog projekt mappában:
```
//Az alábbi mappákat kell látni: (app, bootstrap, config, database, public, resources, routes)
```
Másold le az `.env.example` fájlt `.env` néven, amit később személyre szabhatunk:
```
cp .env.example .env
```
Állítsd be az adatbázis kapcsolatot az `.env` fájlban, például:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=root
DB_PASSWORD=secret
```

#### 3. Lépés: Függőségek Telepítése
Futtasd a következő parancsokat a szükséges PHP és JavaScript függőségek telepítéséhez:
```
composer install
npm install
npm run-script build
```

#### 4. Lépés: Adatbázis Migrációk és Seeder-ek
Hajtsd végre az adatbázis migrációkat, amelyek létrehozzák a szükséges adattáblákat:
```
php artisan migrate
```
Opcionálisan, ha vannak adat-seeder-ek a projektben, futtathatod őket a következő paranccsal:
```
php artisan db:seed
```

#### 5. Lépés: Alkalmazás Kulcs Generálása
Generálj egy alkalmazás kulcsot, ami növeli az alkalmazás biztonságát:
```
php artisan key:generate
```

#### 6. Lépés: Laravel Szerver Indítása
Indítsd el a beépített fejlesztői szervert:
```
php artisan serve
```
Ez elindítja a szervert, és elérhetővé teszi az alkalmazást a `http://localhost:8000` címen a böngészőben.

---

Ez a dokumentáció lefedi a Laravel projekt alap telepítését és futtatását. Ha további funkciókra vagy testreszabásra van szükség, azokat a projekt specifikus követelményei alapján kell implementálni.
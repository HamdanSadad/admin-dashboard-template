# Sumatra (Admin Panel)

A lightweight PHP admin panel project with multiple UI themes and role-based dashboards.

---

## 🔍 Project Description

Sumatra is a small admin panel scaffold built with plain PHP and modular views (themes). It supports multiple themes (Default, Fobia, Minia), role-based dashboards configured in `config/menu.json`, and simple CRUD modules (`users`, `barang`, `buku`, `matakuliah`). The project uses environment variables (via `vlucas/phpdotenv`) for configuration such as database credentials and the selected theme.

---

## 🧰 Tools & Dependencies

- PHP (7.4+ recommended)
- MySQL / MariaDB
- XAMPP / WAMP (for local development)
- Composer (dependency manager)
- Packages:
  - `vlucas/phpdotenv` (loaded in `config/database.php`)
- Frontend theme assets included under `assets/` (Default, Fobia, Minia)

---

## 🔧 Basic Setup (Local)

1. Place the project under your web server document root (e.g. `C:\xampp\htdocs\sumatra`).
2. Install Composer dependencies:

```bash
composer install
```

3. Copy `.env.example` to `.env` (or create `.env`) and set values:

```
DB_HOST=127.0.0.1
DB_PORT=3306
DB_NAME=your_database
DB_USER=your_db_user
DB_PASS=your_db_pass
BASE_PATH=http://localhost/sumatra
THEME=default
```

4. Create the database `your_database` in MySQL and import any SQL schema you have.
5. Start Apache + MySQL (if using XAMPP).
6. Open your browser and visit the `BASE_PATH` (e.g. `http://localhost/sumatra`).

Note: `config/database.php` reads `.env` and sets `$THEME` used by the views (`views/<theme>/...`) and `BASE_PATH` used by `lib/auth.php` to define `BASE_URL`.

---

## 🎨 Changing Theme

- Edit `.env` and change `THEME` to `default`, `fobia`, or `minia`.
- The app loads view files from `views/<THEME>/` and assets from `assets/<THEME>/`.

If a theme misses app-specific menu links, add them to `views/<THEME>/sidebar.php` or create a shared partial in `views/partials/` and include it from each theme.

---

## 🗂 Key Files / Structure (short)

- `config/database.php` — dotenv loader, DB connection, `$THEME`
- `config/menu.json` — role definitions and dashboard paths
- `lib/functions.php` — helpers (`loadMenuConfig()`, `isActiveModule()`, access checks)
- `lib/auth.php` — authentication, redirects, defines `BASE_URL`
- `views/<theme>/sidebar.php` — theme navigation markup
- Modules: `users/`, `barang/`, `buku/`, `matakuliah/` (each with `index.php`, `add.php`, `edit.php`, `delete.php`)

Full tree saved in `tree.txt` (and a more complete `tree_full.txt` can be generated if needed).

---

## ⚙️ Git — Commit & Push (quick guide)

If this project is not yet a Git repository:

```bash
cd /path/to/sumatra
git init
git add .
git commit -m "Initial commit"
```

To push to GitHub (create a repo first on GitHub):

```bash
git remote add origin https://github.com/<your-username>/<repo>.git
git branch -M main
git push -u origin main
```

To clone this repo to another machine/folder:

```bash
git clone https://github.com/<your-username>/<repo>.git
cd <repo>
composer install
cp .env.example .env  # or create .env and set values
```

---

## ✅ Recommended Workflow for Contributions

- Create a feature branch: `git checkout -b feat/my-change`
- Make changes and test locally
- Commit with meaningful message: `git commit -m "Add feature X"`
- Push branch and open a Pull Request

---

## 🧪 Notes & Tips

- Keep `THEME` in `.env` consistent; theme views assume certain assets and markup.
- Add new roles or dashboard paths in `config/menu.json` to control redirects and role labels.
- Use `lib/functions.php` helpers such as `userCanAccessModule()` and `isActiveModule()` when adding menu items for consistent behavior.

---

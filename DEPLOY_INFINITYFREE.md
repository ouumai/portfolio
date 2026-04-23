## InfinityFree Deploy Notes

Target domain:
`https://portfolio-umairahsabri.infinityfree.me/`

### Important

- InfinityFree uses `htdocs` as the web root.
- Do not upload your local `.env` file as-is because it contains local settings and mail credentials.
- On production, use `CI_ENVIRONMENT = production`.

### Recommended structure on InfinityFree

Option 1: safest

- Put the contents of `public/` directly inside `htdocs/`
- Put the folders `app/`, `vendor/`, `writable/`, `system/`, and the project root files one level above `htdocs/`
- Update `htdocs/index.php` paths if you move folders outside `htdocs/`

Option 2: easiest with current project structure

- Upload the whole project into `htdocs/`
- Keep the existing `public/` folder
- Create a `.htaccess` file in `htdocs/` with:

```apache
RewriteEngine On
RewriteRule ^$ public/ [L]
RewriteRule (.*) public/$1 [L]
```

This makes the domain load the `public` folder automatically.

### Production `.env`

Create a new `.env` on the server with at least:

```ini
CI_ENVIRONMENT = production
app.baseURL = 'https://portfolio-umairahsabri.infinityfree.me/'
```

Then add your production email/database values if needed.

### Database

- Create a MySQL database from InfinityFree control panel
- Update these values in the production `.env`:

```ini
database.default.hostname = <your infinityfree db host>
database.default.database = <your db name>
database.default.username = <your db username>
database.default.password = <your db password>
database.default.DBDriver = MySQLi
database.default.port = 3306
```

### Final checks

- Make sure `vendor/` is uploaded too
- Make sure `writable/` exists
- Visit:
  `https://portfolio-umairahsabri.infinityfree.me/`
- Test both language buttons: `EN` and `BM`
- Test the contact form after production SMTP values are set

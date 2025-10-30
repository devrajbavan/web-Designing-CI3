# Web Designing with CodeIgniter 3 (CI3)

A professional web design and development project built using **CodeIgniter 3**, focusing on clean structure, modularity, and responsive UI design.

---

## 📘 Overview

**Web-Designing-CI3** is a PHP-based web application that demonstrates the implementation of a modern, responsive website using the **CodeIgniter 3 framework**. The project showcases clean MVC architecture, custom templates, and front-end design integration suitable for professional and educational use.

---

## 🚀 Features

* Built on **CodeIgniter 3.1.x** framework.
* Follows MVC (Model-View-Controller) structure for clean separation of logic.
* Dynamic routing and controllers.
* Responsive web design using custom CSS and Bootstrap.
* Modular template integration for header, footer, and page components.
* `.htaccess` support for clean URLs (removes `index.php` from routes).
* Ready-to-deploy on Apache or Nginx environments.
* Organized asset management (CSS, JS, images).
* Easily customizable theme and structure.

---

## 🛠️ Technologies Used

| Category            | Technologies                         |
| ------------------- | ------------------------------------ |
| **Backend**         | PHP 8.x, CodeIgniter 3.1.x           |
| **Frontend**        | HTML5, CSS3, JavaScript, Bootstrap 5 |
| **Server**          | Apache2 / Nginx                      |
| **Database**        | MySQL / MariaDB                      |
| **Version Control** | Git & GitHub                         |
| **Environment**     | Ubuntu / XAMPP / WAMP                |

---

## 🧩 Project Structure

```
ci3/
├── application/
│   ├── config/
│   ├── controllers/
│   ├── models/
│   ├── views/
│   └── ...
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── system/
├── index.php
├── .htaccess
├── composer.json
├── license.txt
└── readme.rst
```

**Key folders explained:**

* `application/controllers/` → Contains page logic and route handlers.
* `application/views/` → Holds all HTML templates and layout files.
* `assets/` → Frontend design files (CSS, JS, Images).
* `system/` → Core CodeIgniter framework files.
* `.htaccess` → URL rewriting for SEO-friendly links.

---

## ⚙️ Installation & Setup

### Prerequisites

Make sure the following are installed:

* PHP ≥ 8.0
* MySQL / MariaDB
* Apache2 / Nginx
* Git (for version control)

### Steps

1. **Clone the repository**

   ```bash
   git clone https://github.com/devrajbavan/web-Designing-CI3.git
   cd web-Designing-CI3/ci3
   ```

2. **Move to your web root directory**

   ```bash
   sudo mv ci3 /var/www/html/
   ```

3. **Set folder permissions (Linux)**

   ```bash
   sudo chmod -R 755 /var/www/html/ci3
   ```

4. **Configure Base URL**
   Edit `application/config/config.php`:

   ```php
   $config['base_url'] = 'http://localhost/ci3/';
   ```

5. **Configure Database** (optional)
   If your app uses a DB, edit `application/config/database.php`:

   ```php
   $db['default'] = array(
       'hostname' => 'localhost',
       'username' => 'root',
       'password' => '',
       'database' => 'ci3_webdesign',
       'dbdriver' => 'mysqli',
   );
   ```

6. **Enable URL rewriting**
   Ensure `.htaccess` is present in the root folder and Apache mod_rewrite is enabled:

   ```bash
   sudo a2enmod rewrite
   sudo systemctl restart apache2
   ```

---

## 💻 Usage

1. Start your Apache server (XAMPP/WAMP or manually):

   ```bash
   sudo systemctl start apache2
   ```

2. Visit the project in your browser:

   ```
   http://localhost/ci3/
   ```

3. Explore the project structure, routes, and views.

4. Modify views under `application/views/` and CSS files in `assets/css/` to customize your layout.

---

## 📂 Key Files

| File                            | Purpose                                        |
| ------------------------------- | ---------------------------------------------- |
| `index.php`                     | Entry point for all requests (bootstrap file). |
| `.htaccess`                     | Enables clean URLs.                            |
| `composer.json`                 | PHP dependency configuration file.             |
| `license.txt`                   | License information.                           |
| `application/config/config.php` | Application settings and base URL.             |
| `application/controllers/`      | Handles route logic.                           |
| `application/views/`            | Frontend templates.                            |

---

## 🧠 Development Notes

* The project demonstrates how to integrate custom designs into the CodeIgniter 3 framework.
* Ideal for learning MVC-based web development with PHP.
* Structure follows **CI3 best practices** for scalability and maintainability.
* Can be extended into a dynamic CMS, portfolio site, or admin dashboard.

---

## 🧪 Troubleshooting

| Issue                                     | Solution                                                        |
| ----------------------------------------- | --------------------------------------------------------------- |
| `localhost/ci3/index.php` required in URL | Check `.htaccess` and `mod_rewrite` status.                     |
| Database not connecting                   | Verify credentials in `database.php`.                           |
| 404 page                                  | Check routing configuration in `application/config/routes.php`. |
| Permission denied                         | Run `sudo chmod -R 755 /var/www/html/ci3`.                      |

---

## 🤝 Contributing

Contributions are welcome! To contribute:

1. Fork the repository.
2. Create a feature branch: `git checkout -b feature/your-feature`.
3. Commit changes: `git commit -m "Add your feature"`.
4. Push the branch: `git push origin feature/your-feature`.
5. Open a Pull Request.

---

## 📄 License

This project is licensed under the **MIT License** — see the `license.txt` file for details.

---

## 👤 Author

**Devraj Bavan**
💻 GitHub: [@devrajbavan](https://github.com/devrajbavan)
🌐 Repository: [web-Designing-CI3](https://github.com/devrajbavan/web-Designing-CI3)

---

### ⭐ If you find this project useful, consider giving it a star on GitHub!

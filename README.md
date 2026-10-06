# TT eSports

A table tennis club website. Visitors can browse training programs and instructors, book a table, register for tournaments, and manage a profile. Registration, booking and payment forms are handled by PHP with MySQL.

## Tech Stack

- HTML5, CSS3, vanilla JavaScript
- PHP with MySQL (`mysqli`)
- Font Awesome, Boxicons, Google Fonts (loaded from CDNs)

## Project Structure

```
TT eSports/
├── pages/                  Static HTML pages
├── css/                    One stylesheet per page
├── js/                     function.js (FAQ accordion), homepage.js (slideshow)
├── php/                    Server-side forms (register, book, payment)
└── images/
    ├── branding/           Logo and menu icons
    ├── trainers/           Instructor photos
    ├── bookings/           Table booking venue images
    ├── training/           Training and tournament images
    └── backgrounds/        Hero and background images
```

## Pages

| Page                                                                     | Purpose                                                      |
| ------------------------------------------------------------------------ | ------------------------------------------------------------ |
| `pages/homepage.html`                                                    | Landing page with slideshow and links to activities          |
| `pages/login.html`                                                       | Login form                                                   |
| `php/register.php`                                                       | User registration (saves to MySQL)                           |
| `pages/viewprofile.html`, `pages/editprofile.html`                       | View and edit profile                                        |
| `pages/trainingpage.html`                                                | Training hub: sessions, instructors, competitions            |
| `pages/trainingsessions.html`                                            | Session levels                                               |
| `pages/beginnerlevel.html`, `pages/intermediatelevel.html`               | Level details                                                |
| `pages/instructors.html`, `pages/trainer1.html` to `pages/trainer6.html` | Instructor list and profiles                                 |
| `pages/booktable.html`, `pages/available.html`                           | Table booking                                                |
| `php/book.php`                                                           | Booking form (saves to MySQL)                                |
| `php/payment.php`                                                        | Payment form (saves to MySQL)                                |
| `pages/compete.html`, `pages/tourneyreg.html`                            | Tournaments and registration                                 |
| `pages/help.html`                                                        | FAQ                                                          |
| `pages/admindashboard.html`                                              | Admin dashboard (user, tournament, booking, payment details) |

## Getting Started

### Static pages only

Open `pages/homepage.html` in a browser. Links between pages use relative paths, so keep the folder layout as is.

### With PHP and MySQL

1. Install a local stack that provides PHP and MySQL, such as XAMPP, MAMP or the built-in PHP server with a local MySQL install.
2. Put the project in the web root (for example `htdocs/TT eSports`) or run from the project root:
   ```bash
   php -S localhost:8000
   ```
3. Create the databases and tables below.
4. Visit `http://localhost:8000/pages/homepage.html`.

### Database setup

The PHP files connect to `localhost` as `root` with an empty password. The schemas below are inferred from the `INSERT` statements, so adjust the column types as needed.

```sql
CREATE DATABASE registration;
CREATE TABLE registration.users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  fname VARCHAR(50), sname VARCHAR(50), uname VARCHAR(50),
  email VARCHAR(100), gender VARCHAR(10),
  phonenumber VARCHAR(20), pass VARCHAR(255)
);

CREATE DATABASE booking;
CREATE TABLE booking.booking (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100), location VARCHAR(100), duration VARCHAR(100),
  phonenumber VARCHAR(20), date VARCHAR(50)
);

CREATE DATABASE payment;
CREATE TABLE payment.payment (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100), email VARCHAR(100), cardnumber VARCHAR(20),
  cvv VARCHAR(4), year VARCHAR(10), expmonth VARCHAR(10)
);
```

## Known Issues

Links and files that are referenced but do not exist:

- `images/branding/close.png` (menu close icon used by the side menu)
- `login2.js`, `bookings.html`, `payment1.php`, `BookTable1.html`, `homepage1.html`, `login4.html`
- The `.jfif` background image referenced in `css/register.css`
- `pages/beginnerlevel.html` has an empty `href=".php"`

Security issues to fix before any real deployment:

- SQL is built by concatenating user input, which allows SQL injection. Use prepared statements.
- Passwords are stored in plain text. Use `password_hash()` and `password_verify()`.
- `php/payment.php` stores card numbers and CVVs. Do not store these; use a payment provider.
- The database connection uses `root` with no password. Use a dedicated user with limited privileges.

## License

No license specified.
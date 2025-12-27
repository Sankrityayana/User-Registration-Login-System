# User Registration & Login System

A secure and simple user registration and login system built with PHP and MySQL for XAMPP.

## 🌟 Features

- ✅ User Registration with validation
- ✅ User Login with secure password hashing
- ✅ Session management
- ✅ Protected dashboard page
- ✅ Logout functionality
- ✅ Clean, responsive light theme design
- ✅ Input validation and sanitization
- ✅ SQL injection prevention using prepared statements
- ✅ Password strength requirements

## Requirements

- XAMPP (Apache + MySQL + PHP)
- Web browser

## Installation & Setup

### Step 1: Start XAMPP
1. Open XAMPP Control Panel
2. Start **Apache** and **MySQL** services

### Step 2: Create Database
1. Open your browser and go to `http://localhost/phpmyadmin`
2. Click on "SQL" tab
3. Copy and paste the content from `database.sql` file
4. Click "Go" to execute the SQL script

**OR** you can manually import the file:
1. Click "New" to create a new database
2. Name it `user_system`
3. Go to "Import" tab
4. Choose the `database.sql` file
5. Click "Go"

### Step 3: Place Files in XAMPP
1. Copy the project folder to your XAMPP htdocs directory:
   - Windows: `C:\xampp\htdocs\user-registration-login-system\`
   - Mac/Linux: `/Applications/XAMPP/htdocs/user-registration-login-system/`

### Step 4: Access the Application
Open your browser and navigate to:
```
http://localhost/user-registration-login-system/
```

## 📁 File Structure

```
user-registration-login-system/
│
├── index.php           # Landing page
├── register.php        # User registration page
├── login.php          # User login page
├── dashboard.php      # Protected dashboard (requires login)
├── logout.php         # Logout handler
├── config.php         # Database configuration
├── style.css          # Stylesheet (clean light theme)
├── database.sql       # Database schema
└── README.md          # Documentation
```

## 🔧 Database Configuration

The default configuration in `config.php`:
```php
DB_HOST: localhost
DB_USER: root
DB_PASS: (empty)
DB_NAME: user_system
```

If your XAMPP MySQL has different credentials, update `config.php` accordingly.

## 🚀 Usage

1. **Registration**: Click "Register" and fill in the form with username, email, and password
2. **Login**: Use your username or email with password to login
3. **Dashboard**: After successful login, you'll be redirected to the dashboard
4. **Logout**: Click the logout button to end your session

## 🔒 Security Features

- Password hashing using `password_hash()` and `password_verify()`
- SQL injection prevention using prepared statements
- Session-based authentication
- Input validation and sanitization
- XSS prevention using `htmlspecialchars()`
- Protected pages (redirects to login if not authenticated)

## ✔️ Validation Rules

- All fields are required
- Email must be in valid format
- Password must be at least 6 characters
- Username and email must be unique
- Passwords must match during registration

## ⚠️ Troubleshooting

**Database connection error:**
- Make sure MySQL is running in XAMPP
- Check database credentials in `config.php`
- Verify database `user_system` exists

**Page not found (404):**
- Ensure files are in the correct htdocs directory
- Check the URL path

**Login not working:**
- Clear browser cookies/cache
- Make sure you registered first
- Check if database contains user data

## 💻 Tech Stack

- **Frontend**: HTML5, CSS3 (Clean Light Theme)
- **Backend**: PHP 7.4+
- **Database**: MySQL 5.7+
- **Server**: Apache (XAMPP)

## 🔗 Repository

GitHub: [https://github.com/Sankrityayana/User-Registration-Login-System](https://github.com/Sankrityayana/User-Registration-Login-System)

## 📝 License

Free to use for educational and personal projects.

---

**Created with ❤️ using PHP and MySQL**

#  Personal Task Manager

A clean and responsive **Personal Task Manager Web Application** built using **PHP and MySQL**.  
This application helps users organize daily tasks, track progress, and manage productivity with a simple and modern interface.

---

## ✨ Features

✅ Add new tasks  
✅ View all tasks  
✅ Mark tasks as completed  
✅ Delete tasks  
✅ Task statistics dashboard  
✅ Total, completed, and pending task count  
✅ Progress tracking  
✅ Clean and responsive UI  
✅ MySQL database integration  

---

## 🖥️ Screenshots

(Add your project screenshots here)

---

## 🛠️ Technologies Used

### Frontend
- HTML5
- CSS3
- Bootstrap 5
- JavaScript

### Backend
- PHP

### Database
- MySQL

### Server
- XAMPP

---

## 📂 Project Structure

```
to_do_list/

│
├── index.php
├── dashboard.php
├── create.php
├── delete.php
├── connection.php
│
├── includes/
│   ├── header.php
│   └── footer.php
│
└── assets/
    └── css/
        └── style.css
```

---

## ⚙️ Installation & Setup

### 1. Clone the repository

```bash
git clone https://github.com/yourusername/Personal-Task-Manager.git
```

### 2. Move project to XAMPP

Place the folder inside:

```
xampp/htdocs/
```

### 3. Start XAMPP

Start:

- Apache
- MySQL

---

## 🗄️ Database Setup

Open phpMyAdmin and create database:

```sql
CREATE DATABASE todo_master;
```

Select database:

```sql
USE todo_master;
```

Create table:

```sql
CREATE TABLE todo
(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
status TINYINT DEFAULT 0,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## 🔌 Database Configuration

Update `connection.php`:

```php
$conn = new mysqli(
"localhost",
"root",
"",
"todo_master"
);
```

---

## ▶️ Run Application

Open browser:

```
http://localhost/to_do_list/
```

---

## 🚀 Future Improvements

- User authentication
- Task categories
- Priority levels
- Due date reminders
- Dark mode
- Search and filter tasks

---

## 👩‍💻 Author

**Geetha Alampally**

---

⭐ If you like this project, consider giving it a star!

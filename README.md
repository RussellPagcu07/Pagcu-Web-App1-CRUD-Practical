**Project developed by** Russell C. Pagcu  
**USN:** 23000958010  
**Year Level and Program:** 2nd Year – BSIT  

# Student Directory Management System

## 📖 Project Overview

This project is a **CRUD-based web application** developed as a hands-on exercise for managing student records in a college registrar's office. The goal was to simulate a real-world scenario where a registrar needs a simple system to **add**, **view**, **update**, and **delete** student entries. Each record contains a student's ID, first name, last name, year level, program, and email.

## 🧰 Technology Stack Used

- **PHP (PDO)**
- **MySQL**
- **HTML5**
- **CSS3**
- **JavaScript** (for basic interaction)
- **XAMPP** (Apache + MySQL for local development)

## ▶️ How to Run This Project Locally

1. **Install [XAMPP](https://www.apachefriends.org/index.html)** on your computer.
2. Start **Apache** and **MySQL** via the XAMPP Control Panel.
3. Open **phpMyAdmin** and run the following SQL command to create the database:

    ```sql
    CREATE DATABASE student_management;

    USE student_management;

    CREATE TABLE students (
        student_id INT AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(50) NOT NULL,
        last_name VARCHAR(50) NOT NULL,
        year_level VARCHAR(10) NOT NULL,
        program VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL
    );
    ```

4. Place the entire `STUDENT_DIRECTORY_MANAGEMENT` project folder inside the `htdocs` directory of your XAMPP installation (e.g., `C:\xampp\htdocs\`).
5. Open a browser and go to:  
   `http://localhost/STUDENT_DIRECTORY_MANAGEMENT/Pages/index.html`
6. Navigate through the application to perform **Create**, **Read**, **Update**, and **Delete** operations on student records.

## 🙏 Credits

- No third-party code or templates were reused. All code was written from scratch for academic purposes.

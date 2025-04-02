# 📩 Messaging API with Twilio

Welcome to the **Messaging API** project! This application allows users to send instant messages via SMS and email using **Twilio** and **PHPMailer**. Follow this guide to set up the project and get it running on your local machine. 🚀

---

## 🌟 Features
- Send SMS using Twilio 📱
- Send emails using PHPMailer 📧
- Store messages in a MySQL database 🗄️
- Responsive contact form with animations ✨

---

## 🛠️ Prerequisites
Before you begin, make sure you have the following installed:
- **PHP** (>= 8.0)
- **Composer** (Dependency Manager for PHP)
- **MySQL** (Database)
- **Git** (Version Control)

---

## 📥 Installation Guide

### 1. Clone the Repository
```bash

git clone https://github.com/your-username/MessagingAPI.git
cd MessagingAPI
```
### 2. Install Dependencies
Run the following command to install the required PHP packages:
```bash
composer install
```

### 3. Configure the `.env` File
1. Create a `.env` file in the root directory:
2. Open the `.env` file and configure the following values:
   ```properties
   DB_HOST=localhost
   DB_NAME=messaging_db
   DB_USER=root
   DB_PASS=

   TWILIO_SID=your_twilio_sid
   TWILIO_AUTH_TOKEN=your_twilio_auth_token
   TWILIO_PHONE=your_twilio_phone_number

   SMTP_HOST=smtp.gmail.com
   SMTP_USER=your_email@gmail.com
   SMTP_PASS=your_email_app_password
   SMTP_PORT=587
   ```

   > ⚠️ **Important:** Replace the placeholders with your actual credentials. Never share your .env file publicly!

### 4. Set Up the Database
1. Open your MySQL client or phpMyAdmin.
2. Create a new database:
   ```sql
   CREATE DATABASE messaging_db;
   USE messaging_db;

   CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

### 5. Start the Development Server
Start XAMPP/LAMPP Server
>Go to Your XAMPP Panel!

Visit the application at [http://localhost:8000](http://localhost:8000).

---

## 🛠️ Twilio Setup Guide
1. Sign up for a free Twilio account at [Twilio](https://www.twilio.com/try-twilio).
2. Get your **Account SID**, **Auth Token**, and a **Twilio Phone Number** from the Twilio Console.
3. Add these values to your .env file:
   ```properties
   TWILIO_SID=your_twilio_sid
   TWILIO_AUTH_TOKEN=your_twilio_auth_token
   TWILIO_PHONE=your_twilio_phone_number
   ```

---

## 📧 Email Configuration
1. If you're using Gmail:
   - Enable **2-Step Verification** in your Google account.
   - Generate an **App Password** from your Google account settings.
   - Use the generated password as `SMTP_PASS` in your .env file.
2. For other email providers, refer to their SMTP configuration documentation.

---

## 🗂️ Folder Structure
```
MessagingAPI/
├── assets/                # Static assets (CSS, JS, images)
├── database/              # Database schema
├── public/                # Publicly accessible files (form, index)
├── src/                   # Core PHP files (config, email, SMS)
├── vendor/                # Composer dependencies
└── .env                   # Environment variables (excluded from Git)
```

---

## ⚠️ Important Notes
- **Do not commit your .env file** to the repository. Use .gitignore to exclude it.
- Rotate your Twilio and email credentials if they are accidentally exposed.

---

## 🧪 Testing the Application
1. Fill out the contact form with your name, email, phone number, and message.
2. Submit the form.
3. Check:
   - SMS is sent to the provided phone number.
   - Email is sent to the provided email address.
   - Message is stored in the database.

---

## 🤝 Contributing
Feel free to fork this repository and submit pull requests. Contributions are welcome! 🎉

---

## 📜 License
This project has no license yet.

---

## 💬 Questions?
If you have any questions, feel free to reach out to **Janny Abu-abu**. 😊

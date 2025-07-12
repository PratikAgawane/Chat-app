# 💬 Real-Time Chat App (PHP + MySQL + WebSocket)

A real-time, multi-user chat application built using **PHP**, **MySQL**, and **Ratchet WebSocket** library.

---

## 🚀 Features

- 🔐 User Registration & Login (Secure with hashed passwords)
- 💬 Real-time Messaging via WebSockets
- 🏠 Chat Rooms (Public chat support)
- 🕒 Message Timestamps
- 🧠 MySQL Integration for Users, Rooms, and Messages
- 📱 Responsive Interface with HTML/CSS/JS
- ✅ Built without any frameworks — pure PHP + JS

---

## 🛠 Tech Stack

| Layer | Tech |
|-------|------|
| Frontend | HTML, CSS, JS (Vanilla) |
| Backend | PHP 8.x |
| Database | MySQL |
| Realtime | Ratchet (WebSocket PHP Library) |

---

## 📁 Folder Structure

chat-app/
├── public/ # Frontend (register/login/chat pages)
│ ├── assets/ # CSS + JS
│ ├── chat.php # Chat UI
│ ├── login.php # Login Page
│ └── register.php # Register Page
├── includes/ # PHP helper files (db, auth, etc.)
├── websocket/ # WebSocket server (Ratchet)
├── dump.sql # MySQL DB structure
└── README.md


---

## 🧪 How to Run Locally

### 1. Clone the repository

git clone https://github.com/your-username/real-time-chat-app.git
cd real-time-chat-app

<<<<<<< HEAD


### 2. Install dependencies

composer install

### 3. Import MySQL DB
Use dump.sql in phpMyAdmin or CLI:
CREATE DATABASE chat_app;
USE chat_app;
-- then paste contents of dump.sql

### 4. Start WebSocket Server
php websocket/server.php

### 5. Start PHP Server
php -S localhost:8000 -t public

### 6. Access in Browser
http://localhost:8000/register.php


=======
>>>>>>> 6c33a1c4a2e829a0ad58ed3bcb87d7a1441bbae8

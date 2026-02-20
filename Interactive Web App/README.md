# Interactive Restaurant Web App

## Overview
University project: an interactive sushi restaurant web app with **full functionality for both customers and staff**. Customers can create an account, browse the menu, reserve tables, place orders, make payments, submit feedback, and view contact and location information. Staff can log in to manage bills, view reservations, and read customer feedback.  

## Features

### Customer
- User registration and login (`Register.php` → `loggedin.php`)  
- Menu browsing (`menu.php`)  
- Table reservation (`reserve.php`)  
- Ordering and payment processing (`order.php`, `pay.php`)  
- Feedback submission (`feedback.php`)  
- Contact info and restaurant location  
- Animated image sections for visual appeal  

### Staff
- Staff login (`stafflogin.php` → `loggedinstaff.php`)  
- View customer bills and total amounts (`staffbill.php`)  
- View all reservations (`showreserve.php`)  
- View feedback from customers (`showfeedback.php`)  

## Technologies Used
- Backend: PHP, MySQL (database `restaurant`)  
- Frontend: HTML, CSS, JavaScript  
- Tools: WAMP server for local development, session management, database integration  

## Setup Instructions
1. Copy the project folder to your local server (e.g., `C:\wamp64\www\finalyear`).  
2. Start WAMP server and ensure **Apache** and **MySQL** are running.  
3. Create a MySQL database named `restaurant` and import any required tables.  
4. Open your browser and navigate to:  
   - Customer: `http://localhost/finalyear/Register.php` → `loggedin.php`  
   - Staff: `http://localhost/finalyear/stafflogin.php` → `loggedinstaff.php`  
5. Explore features: login, reserve, order, pay, feedback, contact, and location.  

## Project Files
- PHP Files: `index.php`, `login.php`, `Register.php`, `reserve.php`, `order.php`, `pay.php`, `feedback.php`, `stafflogin.php`, `loggedin.php`, `loggedinstaff.php`, and others  
- CSS: `style.css`  
- Images: all `.jpg`, `.jpeg`, `.png` files in `images` folder  
- Documentation: optional `.pdf` files used for planning (`Search sheet.pdf`, `sheet3.pdf`, etc.)  

## Notes
- This is a university project built for **learning full-stack web development**, session management, and database integration.  
- No real payments are processed; all data is simulated for demonstration purposes.

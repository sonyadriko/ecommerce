# E-Commerce Platform with Admin Panel and Customer Ordering System

This project is a web-based **E-Commerce Platform** built using **Laravel**. It includes a robust **Admin Panel** powered by **Filament** for managing products, categories, customers, and orders, alongside a fully functional **Customer-Facing Ordering System**. The project is designed to streamline online shopping experiences with a user-friendly interface for both administrators and customers.

---

## Features

### **Admin Panel**
- **Product Management**: Add, edit, delete, and manage product listings with ease.
- **Category Management**: Organize products into categories for better navigation.
- **Customer Management**: View and manage customer information.
- **Order Management**: Process and track customer orders.
- **Role-Based Access**: Secure login and role-based access for administrators.

### **Customer-Facing System**
- **Product Browsing**: Customers can view product details and browse by categories.
- **Shopping Cart**: Add products to a cart and manage quantities before checkout.
- **Order Checkout**: Secure order processing with confirmation and tracking.
- **User Authentication**: Customers can register, log in, and manage their profiles.

---

## Tech Stack
- **Backend**: Laravel 10, PHP 8, MySQL
- **Frontend**: Blade Templating Engine, HTML, CSS, JavaScript, Bootstrap
- **Admin Panel**: Filament Admin
- **Database**: MySQL

---

## Installation & Setup

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/yourusername/ecommerce-platform.git
   cd ecommerce-platform
   
2. **Install Dependencies**:
   ```bash
   composer install
   npm install

3. **Environment Configuration**:
   Copy the .env.example file and configure your database
   ```bash
   cp .env.example .env
   php artisan key:generate

4. **Migrate the Database**:
   ```bash
   php artisan migrate

5. **Run the Development Server**:
   ```bash
   php artisan serve
   
6. **Access the Application**:
   Admin Panel: http://localhost:8000/admin
   Customer Frontend: http://localhost:8000
    

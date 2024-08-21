# Online-PetStore
This project is an Online Petstore that features both a client's area and an admin area, each with distinct functionalities tailored to the needs of customers and store administrators.

## Project Overview
### Client's Area
The client's area is the primary interface for customers to browse through available products, manage their shopping cart, and place orders. Key features include:
**User Authentication:** Customers can sign up, log in, and restore their passwords if needed.
**Product Browsing:** Customers can browse products organized by categories, each with detailed product pages.
**Shopping Cart:** Customers can add products to their cart, adjust quantities, and see the total number of items in their cart.
**Order Placement:** When ready to purchase, customers fill out a form with delivery information and submit their order.

## Admin Area
The admin area is designed for store employees to manage the store's inventory, product categories, and orders. This area is only accessible to authorized personnel. Key features include:
**Product Management:** Administrators can add, edit, or delete products, ensuring that the catalog is always up to date.
**Category Management:** Administrators can manage product categories, which are displayed on the client’s site for easier navigation.
**Brand Management:** Administrators can add, edit, or delete product brands available in the store.
**Order Management:** Administrators can view all incoming orders, along with the necessary details to fulfill them. Once an order is completed, the status can be updated accordingly.
**Automatic Synchronization:** Any changes made in the admin area (products, categories, etc.) are automatically reflected on the client's website.

## File Structure
### Client's Website
**index.php:** The homepage displaying featured products and categories.
**products.php:** Displays products from a specific category.
**product.php:** Shows details of a selected product.
**function/common-functions.php:** Contains common functions used throughout the client's area.

### Admin Area (located in admin_area folder)
**index.php:** The homepage of the admin area.
**insert-animals.php:** Manage animals for which the shop sells products (edit/delete/insert).
**insert-brands.php:** Manage product brands (edit/delete/insert).
**insert-categories.php:** Manage product categories that will be shown on the client’s site (edit/delete/insert).
**insert-products.php:** Manage products displayed on the client’s site (edit/delete/insert).

## Technologies Used ##
**Database:** MySQL to manage all data.
**Database Management:** phpMyAdmin is employed for efficient MySQL database management.

## Installation and Setup
Clone the repository to your local machine.
Configure the database by importing the provided SQL file (if applicable) and updating the connection settings in the project files.
Set up your web server to serve the project files.
Ensure that the appropriate file permissions are set for the admin area to allow database operations.

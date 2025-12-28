 Blood Bank Management System
 @ Project Overview

The Blood Bank Management System is a web-based application designed to manage blood donation and distribution efficiently.
It helps blood banks maintain donor records, blood stock details, and request management in a structured and user-friendly way.

This system aims to reduce manual work, improve data accuracy, and ensure quick availability of blood during emergencies.

-> Objectives

Maintain centralized blood donor information

Track blood stock availability by group

Manage blood donation and request records

Reduce paperwork and manual errors

Provide fast and reliable blood availability information

-> Technologies Used
Frontend

HTML

CSS

JavaScript

Backend

PHP

Database

MySQL

Tools

XAMPP

VS Code

 User Roles
1️. Admin

Login securely

Add, update, and delete donor details

Manage blood stock

Approve or reject blood requests

View all reports

2️. Donor

Register as a blood donor

Update personal and health details

View donation history

3️⃣ Receiver

Search available blood groups

Submit blood requests

View request status

-> Key Features

-> Secure Login System

-> Donor Registration & Management

-> Blood Group-wise Stock Management

 Blood Request Handling

 Dashboard with Statistics

 Search Functionality

 Database-driven Dynamic Content

 Database Structure (Main Tables)

admin – stores admin login details

donors – donor personal and blood details

blood_stock – available blood units by group

blood_requests – blood request records

donation_history – donor donation logs

-> System Workflow

Admin logs into the system

Donors register and provide details

Admin verifies donor and updates blood stock

Receiver searches for required blood group

Blood request is submitted

Admin processes the request

 Screens (Optional)

Login Page

Admin Dashboard

Donor Registration Page

Blood Stock Page

Request Management Page

-> Installation & Setup

Install XAMPP/WAMP

Clone or download the project

Move project folder to:

htdocs/


Open phpMyAdmin

Create a database (e.g., blood_bank)

Import the provided .sql file

Start Apache & MySQL

Open browser and run:

http://localhost/blood-bank

-> Default Admin Login (Example)

Username: admin

Password: admin123

# Change credentials after first login for security.

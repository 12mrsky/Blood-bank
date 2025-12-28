# Blood Bank Management System
# Introduction

The Blood Bank Management System is a web-based application designed to manage blood donation, donor records, and blood stock efficiently.
It helps blood banks maintain accurate data, reduce manual work, and ensure quick availability of blood during emergencies.

This project is developed to automate blood bank operations and improve overall management efficiency.

# Objectives

Maintain centralized donor information

Track blood stock by blood group

Manage blood donation and request records

Reduce paperwork and manual errors

Improve response time during emergencies

# Prerequisites

Before running the project, ensure you have the following installed:

PHP (7.x or higher)

MySQL

Apache Server (XAMPP / WAMP)

Web Browser

Git (optional)

# Tech Stack
Frontend

HTML

CSS

JavaScript

Backend

PHP

Database

MySQL

# Features

Admin login system

Donor registration and management

Blood group-wise stock management

Blood request handling

Search blood availability

Secure data storage

User-friendly interface

# User Roles
Admin

Login securely

Add, update, and delete donor details

Manage blood stock

View and manage blood requests

Donor

Register as a blood donor

Update personal details

View donation history

Receiver

Search required blood group

Submit blood requests

Check request status

# Project Structure
Blood-Bank-Management-System/
│
├── admin/
│   ├── dashboard.php
│   ├── manage_donors.php
│   └── manage_requests.php
│
├── user/
│   ├── register.php
│   └── request_blood.php
│
├── includes/
│   ├── config.php
│   └── db.php
│
├── assets/
│   ├── css/
│   └── js/
│
└── database.sql

# Getting Started

Download or clone the repository

git clone https://github.com/your-username/Blood-Bank-Management-System.git


Move the project folder to:

htdocs/


Open XAMPP Control Panel and start Apache & MySQL

Open phpMyAdmin

Create a database (e.g., blood_bank)

Import the database.sql file

Open browser and run:

http://localhost/Blood-Bank-Management-System

# Database Tables

admin – admin login details

donors – donor personal and blood details

blood_stock – available blood units

blood_requests – blood request records

donation_history – donor donation logs

# System Workflow

Admin logs into the system

Donor registers and submits details

Admin verifies donor information

Blood stock is updated

Receiver requests blood

Admin processes the request

# Future Enhancements

Email and SMS notifications

Online appointment scheduling

Location-based donor search

Mobile application support

Role-based access control

# Learning Outcomes

PHP and MySQL integration

CRUD operations

Form validation

Database design

Real-world web application development

# Developer

Suraj Yadu
MCA Graduate
PHP & Web Developer

# License

This project is developed for educational purposes only.
Free to use and modify.

# Public Complaint Management System

> A web-based platform developed to simplify the process of submitting, managing, and responding to public complaints through a centralized administrative system.

---

## Overview

The Public Complaint Management System is a web application built with Laravel to facilitate communication between citizens and administrators. The platform enables users to submit complaints online while allowing administrators to review, verify, and respond to reports through an organized dashboard.

The application aims to improve transparency, streamline complaint handling, and reduce manual administrative processes by providing a centralized digital reporting system.

Developed as an academic project, this application demonstrates full-stack web development using Laravel and MySQL.

---

## Features

### Public Services

* User Registration & Login
* Submit Public Complaints
* Complaint History
* Complaint Status Tracking

### Administration

* Administrative Dashboard
* Complaint Verification
* Complaint Management
* Response Management
* User Management

### Reporting

* Complaint Statistics
* Dashboard Analytics
* Complaint Categorization

---

## Tech Stack

### Backend

* Laravel
* PHP

### Frontend

* Blade Template
* HTML5
* CSS3
* JavaScript
* Bootstrap

### Database

* MySQL

### Libraries

* SweetAlert2
* Toastr
* Summernote

---

## System Architecture

```text
Citizens
     │
     ▼
Public Complaint Website
     │
Laravel MVC Architecture
     │
Business Logic
     │
MySQL Database
     │
Administrative Dashboard
```

---

## My Responsibilities

This project was developed independently, covering both backend and frontend development.

My responsibilities included:

* Designing the relational database structure.
* Developing the complaint submission workflow.
* Building the administrative dashboard.
* Implementing authentication and role-based authorization.
* Developing complaint verification and response features.
* Managing complaint categories and user data.
* Connecting frontend interfaces with backend functionality.
* Testing and refining the application to improve usability and reliability.

---

## Challenges

One of the main challenges in developing this application was designing a workflow that could efficiently accommodate both citizens and administrators while maintaining a simple and intuitive user experience.

Another challenge involved implementing role-based access control, organizing complaint data, and ensuring that complaint statuses and responses remained synchronized throughout the application.

Developing this project strengthened my understanding of Laravel MVC architecture, authentication, relational database design, and full-stack web application development.

---

## Running the Project

### Prerequisites

* PHP 8.2 or later
* Composer
* Node.js
* MySQL

### Setup

Install project dependencies.

```bash
composer install
npm install
```

Copy the environment configuration.

```bash
cp .env.example .env
```

Configure the database inside the `.env` file.

Generate the application key.

```bash
php artisan key:generate
```

Run the database migrations.

```bash
php artisan migrate
```

Compile frontend assets.

```bash
npm run dev
```

Start the development server.

```bash
php artisan serve
```

---

## Future Improvements

Potential future enhancements include:

* Email notifications.
* File attachment support.
* Complaint location mapping.
* Complaint priority management.
* Real-time notifications.
* Mobile-responsive optimization.
* Data export and reporting.

---

## Project Status

Academic Project

Developed as a web-based complaint management platform to demonstrate Laravel development, authentication, role-based authorization, dashboard implementation, and relational database management.

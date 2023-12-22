# Barangay Information Management System

This is a web-based application built using PHP and MySQL to help barangays digitize and manage resident information and records.

## Overview

The system allows barangay personnel to:

- Register new residents
- Update existing resident records  
- View and manage resident profiles
- Generate reports and statistics
- Manage announcements and advisories

Key features:

- Resident database with profile management
- Role-based access control
- Dashboard with key metrics and notifications
- Announcement/advisory publishing 
- Reporting and analytics

## Installation

### Requirements

- PHP 7.2 or higher
- MySQL 5.7 or higher
- Web server (Apache or Nginx) 

### Setting up

1. Clone the repository or download the source code

2. Copy the source code to your web server's document root folder (e.g. htdocs in XAMPP)

3. Import the SQL database schema located in `/database/schema.sql`

4. Configure your database credentials in `/config/db.php` 

5. Make sure the `/storage` folder is writable by the web server

6. Access the app in your browser via http://localhost/barangay-ims

7. Login with default credentials:

    ```
    Username: admin
    Password: password
    ```

Customize the credentials as needed for your installation.

## Usage 

The system has two main user roles:

**Admin** - Can register residents, manage all data and users, and generate reports

**Staff** - Can view and search resident profiles, and create advisories

Refer to user management section for adding users and assigning roles.

### Resident Management

To register a new resident:

1. Go to Residents > Add Resident
2. Fill up details like name, birthdate, contact information etc.
3. Upload photo and documents
4. Save resident

To edit a resident profile:

1. Go to Residents > View Residents 
2. Click on name to access profile
3. Edit details and save

### Announcements

To create an announcement:

1. Go to Announcements > Create Announcement
2. Add title and content
3. Choose publication date 
4. Publish

Announcements will show up on the public site homepage. 

### Reporting 

Reports can be generated from the Reports module. Select report type, set filters if any and click Generate to download/view.

Available reports:

- Resident Listing
- Households Listing
- Age Distribution 
- Gender Distribution

## Customization

Additional features and modifications can be made by editing the source code. Some pointers:

- Add/remove resident profile fields in `/models/Resident.php`
- Build new reports in `/controllers/ReportsController.php`  
- Create custom dashboards in `/views/dashboard.php`
- Manage roles and permissions in `/config/roles.php`

Reach out for any help in customizing this further for your barangay.
# Destination Delight

**Destination Delight** is a user-friendly travel website aimed at simplifying trip planning across India. It allows users to explore popular destinations, book various modes of transportation (car, bus, train, and flight), and connect with partnered hotels and travel agencies for a seamless and enjoyable experience. This platform integrates various technologies and supports communication with users via email notifications for booking and trip updates.

## Features

- **Explore Destinations**: Search and discover top travel destinations across India, with detailed information to help plan your trip.
- **Booking Services**: Book transportation options including car rentals, buses, trains, and flights.
- **Accommodation**: Collaborates with trusted hotels and travel agencies to provide smooth accommodation bookings.
- **User Communication**: Stay connected with users through email notifications for confirmations, updates, and offers.
- **Secure Payment Gateway**: Allows for safe and secure payments through integrated payment services.
  
## Technology Stack

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Email Integration**: PHP-based mailing system to send transactional emails (confirmation, updates, etc.)
  
## Getting Started

### Prerequisites

Before running the project locally, make sure you have the following tools installed:
- [XAMPP](https://www.apachefriends.org/index.html) or [WAMP](http://www.wampserver.com/) for a local server environment (Apache, PHP, MySQL)
- A browser (Chrome, Firefox, etc.)

### Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/karthikram-p/DestinationDelight.git
    ```

2. Navigate to the project directory:
    ```bash
    cd DestinationDelight
    ```

3. Move the project to your XAMPP or WAMP `htdocs` directory.

4. Create a MySQL database:
   - Open phpMyAdmin and create a new database (e.g., `destination_delight`).
   - Import the provided `database.sql` file into the created database to set up the necessary tables.

5. Configure the database:
   - Open the `config.php` file and update the database connection settings:
    ```php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'your_username');
    define('DB_PASSWORD', 'your_password');
    define('DB_DATABASE', 'destination_delight');
    ```

6. Start the local server (Apache, MySQL) using XAMPP or WAMP.

7. Access the project in your browser:
    ```
    http://localhost/destination-delight
    ```

### Email Setup

- The website sends emails using PHP's built-in mail function. Make sure to configure the SMTP settings in your `php.ini` file or use a mail service like [PHPMailer](https://github.com/PHPMailer/PHPMailer) for better email handling.

## Usage

1. **Home Page**: Users can search for destinations across India.
2. **Booking Section**: Select transportation options (car, bus, train, or flight) and complete the booking.
3. **Accommodation**: Browse through available hotels and services provided by associated travel agencies.
4. **User Registration**: Users can sign up, log in, and manage their bookings.
5. **Email Notifications**: After booking, users will receive confirmation and updates via email.

## Project Structure

```bash
.
├── assets/               # Static files (CSS, images, JS)
├── includes/             # Reusable PHP scripts (header, footer, database connection)
├── pages/                # Web pages (home, booking, hotels, about, contact)
├── database.sql          # Database schema for MySQL
├── config.php            # Database configuration
└── README.md             # Project documentation

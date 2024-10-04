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
- **Email Integration**: PHP-based mailing system (with [PHPMailer](https://github.com/PHPMailer/PHPMailer) for better email handling)

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

5. Configure the database connection:
   - Open the `database.php` file and update the database connection settings:

    ```php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'your_username');
    define('DB_PASSWORD', 'your_password');
    define('DB_DATABASE', 'destination_delight');
    ```

6. Start the local server (Apache, MySQL) using XAMPP or WAMP.

7. Access the project in your browser:

    ```
    http://localhost/DestinationDelight
    ```

### Email Setup

- The website sends emails using PHP's built-in mail function. For better email handling, configure the SMTP settings in your `php.ini` file or use [PHPMailer](https://github.com/PHPMailer/PHPMailer) for advanced email features.

## Pages

1. **Home Page (`welcome.php`)**: The main landing page where users can explore various destinations, view highlights, and navigate to other sections of the website.
   
2. **Bookings Page (`confirm_booking.php`)**: Users can book transportation (car, bus, train, or flight) or accommodation after selecting their desired destination.

3. **Price List Page (`prices.php`)**: Displays a list of transportation and accommodation prices for various destinations.

4. **Profile Page (`edit_user.php`)**: Allows users to manage their personal information, view past bookings, and update their profile details.

5. **Gallery Page (`gallery.php`)**: A visual gallery showcasing popular destinations and travel experiences, allowing users to browse through images and get inspired for their trip.

6. **About/Contact Page (`about.php` & `contact.php`)**: Provides information about the website, its mission, and a contact form for users to reach out with inquiries.

7. **Login/Signup Page (`login.php` & `signup.php`)**: Enables users to create a new account or log in to access their profile and manage bookings.

## Project Structure

```bash
.
├── PHPMailer-master/        # PHPMailer library for email handling
├── components/              # PHP components like header and footer
├── css/                     # Stylesheets
├── database/                # Database-related scripts (optional for migration)
├── js/                      # JavaScript files
├── lightbox2/               # Image lightbox component (gallery feature)
├── add_destination_price.php
├── add_destinations.php
├── admin_chat.php
├── admin_dashboard.php
├── admin_login.php
├── admin_login_handler.php
├── admin_logout.php
├── admin_manage_destinations.php
├── admin_manage_password_resets.php
├── admin_manage_prices.php
├── admin_manage_reservations.php
├── admin_manage_reviews.php
├── admin_manage_tours.php
├── admin_manage_users.php
├── composer.json
├── composer.lock
├── confirm_booking.php      # Bookings Page
├── confirm_bookings.php
├── database.php             # Database connection file
├── destinations.php
├── destinations_afterlogin.php
├── edit_user.php            # Profile Page
├── fetch_messages.php
├── fetch_prices.php
├── fetch_reviews.php
├── fetch_user_messages.php
├── forgotpassword.php
├── gallery.php              # Gallery Page
├── gallery_afterlogin.php
├── login.php                # Login Page
├── signup.php               # Signup Page
├── logout.php
├── prices.php               # Price List Page
├── prices_afterlogin.php
├── process_booking.php
├── resetpassword.php
├── reviews.php
├── sendpasswordreset.php
├── tour_handler.php
├── update_destination_price.php
├── update_user.php
├── user_chat.php
├── verify.php
├── welcome.php              # Home Page
├── welcome_afterlogin.php
├── about.php                # About Page
├── contact.php              # Contact Page
└── README.md                # Project documentation

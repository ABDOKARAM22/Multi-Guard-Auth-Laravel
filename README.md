# Multi-Guard Authentication with Laravel Breeze

This Laravel project demonstrates the implementation of multi-guard authentication using Laravel Breeze. It includes separate authentication guards for admins and users, each with their own dedicated database tables, control files, and view files. Additionally, it provides functionality for updating the profile of both admins and users.

## Features

- **Admin Authentication**: Utilizes a dedicated guard and database table for admin authentication.
- **User Authentication**: Utilizes a separate guard and database table for user authentication.
- **Profile Update**: Includes functionality for admins and users to update their profiles.

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/Multi-Guard-Authentication-Breeze.git

2. Install dependencies:

  ```bash
  cd Multi-Guard-Authentication-Breeze
  composer install
  npm install && npm run dev

3. Configure environment variables:

-Duplicate the `.env.example` file and rename it to `.env`.
-Configure your database connection in the `.env` file.
-Ensure you set up separate tables for admins and users and configure the appropriate guards in the `config/auth.php` file.

4. Run migrations:

  ```bash
  php artisan migrate

5. Serve the application:

  ```bash
  php artisan serve

## Usage
-Access the application in your browser and navigate to the appropriate routes for admin and user authentication.
-Update your profile information through the provided profile update pages.

## Contributing
Contributions are welcome! Feel free to submit issues and pull requests

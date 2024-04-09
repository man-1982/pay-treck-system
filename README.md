
# Pay-Treck System

## Short Description

The Pay-Treck System is a comprehensive payroll 
management application designed to streamline the process of calculating salaries, managing employee hours,
and handling expenses. 
Built with Laravel 11 and leveraging the power of DDEV for local development, this system offers a robust solution for administrators, accountants, and employees to interact with their payroll data efficiently.

## Getting Started

These instructions will get your copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

- Docker
- DDEV
- Composer

Ensure you have Docker and DDEV installed on your machine. The project uses DDEV to simplify the development environment setup.

### Starting the Project

To get the development environment running, follow these steps:

1. **Start DDEV:**

   Navigate to the project's root directory in your terminal and run:

   ```bash
   ddev start
   ```

   This command initializes and starts the DDEV environment.

2. **Launch in Browser:**

   To open the application in your default web browser, run:

   ```bash
   ddev launch
   ```

3. **Access phpMyAdmin:**

   For database management and exploration, access phpMyAdmin at:

   ```bash
   ddev phpmyadmin
   ```

4. **Database Creation:**

   You will need to manually create the database for the application. Use phpMyAdmin or a similar tool to create a database named `pay_treck`.

### Additional Setup

- After creating the database, ensure you update the `.env` file with the correct database connection details.
- Run migrations and seeders if necessary to populate your database with initial data:

  ```bash
  ddev exec php artisan migrate
  ddev exec php artisan db:seed
  ```

## Usage

Provide instructions on how to use the application, including any available commands, features, and how users can take advantage of the system.

## Contributing

If you wish to contribute to the Pay-Treck System, please read the CONTRIBUTING.md file for guidelines on how to make a contribution.

## License

This project is licensed under the MIT License - see the LICENSE.md file for details.

---

For more information on DDEV commands and configurations, refer to the [DDEV Documentation](https://ddev.readthedocs.io).

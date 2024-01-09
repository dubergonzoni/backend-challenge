
# Pastry Shop Project

This project is a web application developed with the Laravel framework. It allows for the management of orders, customers, and products of a pastry shop.

## Features

- Customer Management
- Product Management
- Creation and Management of Orders
- Sending an email to the customer with the details of their order

## Requirements

- PHP >= 7.4
- Composer
- MySQL
- Laravel 8.x

## Installation

Follow the steps below to set up the development environment:

1. **Clone the Repository**
   ```sh
   git clone https://github.com/dubergonzoni/backend-challenge.git
   cd backendchallenge
   ```

2. **Install Composer Dependencies**
   ```sh
   composer install
   ```

3. **Configure the `.env` File**
   - Copy the `.env.example` file to a new file named `.env`.
   - Update the environment variables, especially those related to the database (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

4. **Generate Application Key**
   ```sh
   php artisan key:generate
   ```

5. **Run Migrations**
   ```sh
   php artisan migrate
   ```

## Execution

To start the development server:

```sh
php artisan serve
```

Access the application at `http://localhost:8000`.
Observation: Views are under development

## Testing

Run the tests with the following command:

```sh
php artisan test
```
Observation: under developmet, will run only example tests.


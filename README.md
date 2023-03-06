# Admin Panel to Manage Companies

This is a web-based admin panel built using Laravel. It allows authorized users to manage companies and employees.

## Features

- Login and logout functionality for admin users
- CRUD operations for companies and employees
- Validations on form inputs using Laravel's Request classes
- Pagination on company and employee index pages
- Dashboard to display the number of companies and employees in the system
- API resource to expose company and employee details
- Responsive design using Laravel Breeze theme

## Installation

1. Clone the repository to your local machine.
2. Run `composer install` to install the required packages.
3. Create a new database for the project.
4. Rename the `.env.example` file to `.env` and fill in your database details.
5. Generate an application key by running `php artisan key:generate`.
6. Run the database migrations using `php artisan migrate`.
7. Optionally, you can seed the database with test data by running `php artisan db:seed`.
8. Store company logos in `storage/app/public` folder and make them accessible from the public folder by running `php artisan storage:link`.
9. Start the development server using `php artisan serve`.

## Usage

1. Visit the application in your web browser by going to `http://localhost:8000`.
2. Login using the provided admin credentials.
3. You will be redirected to the dashboard, where you can view the number of companies and employees in the system.
4. To view a list of companies, click on the "Companies" link in the navigation bar.
5. To add a new company, click on the "Add Company" button and fill in the required fields.
6. To edit an existing company, click on the "Edit" button next to the company you want to edit and make the necessary changes.
7. To delete a company, click on the "Delete" button next to the company you want to delete.
8. To view a list of employees, click on the "Employees" link in the navigation bar.
9. To add a new employee, click on the "Add Employee" button and fill in the required fields.
10. To edit an existing employee, click on the "Edit" button next to the employee you want to edit and make the necessary changes.
11. To delete an employee, click on the "Delete" button next to the employee you want to delete.
12. To search for a company or an employee, enter a keyword in the search box and click on the "Search" button.
13. To logout, click on the "Logout" button in the navigation bar.

## API Resource

1. To view a list of companies through API, go to `http://localhost:8000/api/companies`.
2. To view a single company through API, go to `http://localhost:8000/api/companies/{id}` where {id} is the ID of the company you want to view.
3. To view a list of employees through API, go to `http://localhost:8000/api/employees`.
4. To view a single employee through API, go to `http://localhost:8000/api/employees/{id}` where {id} is the ID of the employee you want to view.

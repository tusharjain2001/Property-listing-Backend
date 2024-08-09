# Property API

## Project Overview

This project is a RESTful API for managing properties and inquiries. It allows users to fetch a list of properties with pagination, view detailed information about a specific property, and submit inquiries related to properties.

## Architecture

The project is built using the Laravel framework, following the MVC (Model-View-Controller) architectural pattern.

### Project Structure
- **Controllers**: Handles the logic for processing incoming HTTP requests, interacting with models, and returning responses.
- **Models**: Represents the database tables and contains the business logic related to the application's data.
- **Routes**: Defines the endpoints for the API and maps them to the corresponding controllers.
- **Middleware**: Filters HTTP requests entering your application, allowing you to modify or reject requests before they reach your controllers.
- **Database Migrations**: Manages the structure of your database using version control.



## Installation

Follow these steps to set up the project on your local machine.

### Prerequisites
- PHP >= 8.0
- Composer
- MySQL
- Node.js & npm (for frontend assets)
- xampp

### Steps

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/property-api.git
   cd property-api
   ```

2. **Install dependencies:**
    ```bash
    composer install
    ```
3. **Generate an application key:**
    ```bash
    php artisan key:generate
    ```    
4. **Run database migrations:**
    ```bash
    php artisan migrate
    ```   
5. **Seed the database:**
    ```bash
    php artisan db:seed
    ```        
6. **Serve the application:**
    ```bash
    php artisan serve
    ```     
    The application will be available at http://127.0.0.1:8000.

7. **Setup/Run The Frontend:**
    
    https://github.com/tusharjain2001/property-listing
        
        


    
    

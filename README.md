# Multi-Tenant Admin Panel with Filament

A multi-tenant application built with Laravel, Filament, and Laravel Passport for API authentication.

## Installation Steps

1. Clone the repository
```bash
git clone <repository-url>
cd <project-folder>
```

2. Install dependencies
```bash
composer install
npm install
```

3. Copy .env file
```bash
cp .env.example .env
```

4. Generate application key
```bash
php artisan key:generate
```

5. Configure database settings in .env
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

6. Run migrations
```bash
php artisan migrate
```

7. Install Passport
```bash
php artisan passport:install
```

## Environment Configuration

Add these variables to your .env file:

```env
SESSION_DRIVER=cookie
SESSION_DOMAIN=(add your domain here if not localhost)
```

## Laravel Passport Setup

1. Add Passport service provider in `config/app.php`:
```php
'providers' => [
    Laravel\Passport\PassportServiceProvider::class,
],
```

2. Add HasApiTokens trait to User model:
```php
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
}
```

## Project Structure

### Admin Panel (Filament)

Location: `app/Filament/Admin`
- Manages central administration
- User management
- Tenant management

### Store Panel

Location: `app/Filament/Store`
- Tenant-specific administration
- Book management
- Order processing

### Middleware Configuration

Location: `app/Http/Kernel.php`
```php
protected $middlewareGroups = [
    'web' => [
        \Stancl\Tenancy\Middleware\InitializeTenancyByDomain::class,
    ],
];
```

## Key Features

1. **Multi-Tenancy**
- Domain-based tenant identification
- Separate database per tenant
- Automatic database creation for new tenants

2. **Admin Panel**
- User management
- Tenant creation and management
- System-wide settings

3. **Store Panel**
- Book management
- Inventory tracking
- Order processing

4. **API Authentication**
- Secure API endpoints using Laravel Passport
- Token-based authentication
- Tenant-specific data isolation

5. **Database Management**
- Automatic tenant database creation
- Database connection switching
- Query logging for debugging

## Important Files

- `app/Providers/TenancyServiceProvider.php` - Tenancy configuration
- `app/Models/Book.php` - Book model with tenant connection
- `app/Http/Controllers/Api/AuthController.php` - API authentication
- `app/Http/Controllers/Api/BookController.php` - Book CRUD operations
- `config/tenancy.php` - Tenancy configuration

## Security

- API routes are protected with Passport authentication
- Tenant data is isolated in separate databases
- Central domains are protected from unauthorized access


# Simplified Inventory Management System Using Laravel

In this project I'd to create A database and a table called Product, Then I'd to perform Create, Read, Update, and Delete on products.



## Features

- Admin Login
- Oerview of Products
- Create Product
- Update Product
- Delete Product


## Deployment

To Create Laravel new project

```bash
  composer create-project laravel/laravel IMS
```

For the live server

```bash
  php artisan serve
```
To Migrate

```bash
  php artisan migrate
```

To Create new table

```bash
  public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('quantity');
            $table->decimal('price');
        });
    }
```
To Migrate

```bash
  php artisan migrate
```
For fillable values

```bash
  protected $fillable = [
        'name',
        'quantity',
        'price'
    ];
```
All the routes

```bash
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

```
So on-------




## Installation

- XAMPP server
- VS Code Editor
- Composer
- Laravel
- Node.js
    
## Roadmap

- Creating new project in Laravel
- Add Authentication for admin
- Creating a database
- Creating A Table
- Connecting Database to website
- Using Laravel MVC architecture
- Successfully fetch the database
- Successfully update the database
- Successfully delete the data
- Each time the connection is succesful show success message
- If not succesful show error with reason
- Use restful


## Lessons Learned

- How Laravel works.
- How CRUD operaions take place.
- How to manipulate data.
- How route works.
- How controller works.


## How To use this app

- First get/download all the files
- Run the server using command
- Use default server to go to dafault page
- To access the product menu you have to create account or login via authentication page
- Create account using register page
- After successful registration you can access the dashboard
- The you can see all the menus for products
- Create a new product or edit an Existing product
- You can delete the product as well
- Thank You.


##  About Me
I'm a full stack developer...


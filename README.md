# Laravel Package Boilerplate
Starting point for Laravel package development

## Getting Started

In your laravel installation root directory, in `composer.json`, add the package namespace: 

```
"psr-4": {
    "App\\": "app/",
    "se468\\PackageBoilerplate\\" : "packages/se468/laravel-package-boilerplate/src"
}
```

In `config/app.php`, in the providers array, add 
```
se468\PackageBoilerplate\PackageServiceProvider::class,
```

Create folder `packages/se468` and clone this repo inside it.

Run these commands to set up the dependencies:
```
composer install
```

Go to route `/package-boilerplate` and see if you see Hello world. If you did, congratulations!

## Setting up webpack and laravel-mix
In your package directory, run the following commands.
```
npm install
npm install webpack -D
npm install webpack-cli -D
```

Now try running:
```
npm run dev
```
and check if it creates compiled js/css in public directory.

## Rename

Rename everything to match your own:
* Your Github ID - example: se468
* PackageNamespace - example: LaravelPackageBoilerplate
* Your Package Folder - example: laravel-package-boilerplate

Checklist
Inside Laravel: 
```
1. composer.json
2. config/app.php
```

For your package:
```
1. Rename packages/se468 to your own github id
2. PackageServiceProvider
3. composer.json
4. anywhere else you need to change
```

Remove any features you don't need from the boilerplate.



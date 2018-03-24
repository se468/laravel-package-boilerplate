# Laravel Package Boilerplate
Starting point for Laravel package development

## Getting Started
1. In your laravel installation root directory, in `composer.json`, add the package namespace: 

```
"psr-4": {
    "App\\": "app/",
    "se468\\PackageBoilerplate\\" : "packages/se468/laravel-package-boilerplate/src"
}
```

1. In `config/app.php`, in the providers array, add 
```
se468\PackageBoilerplate\PackageServiceProvider::class,
```

1. Create folder `packages/se468` and clone this repo inside it.

1. Change `composer.json` inside the package directory to your own package name, namespace and github id.
```
name
description
authors
psr-4
providers
```

1. In `PackageServiceProvider.php` in `src`, change the places where it is commented.

1. Run these commands to set up the dependencies:
```
composer install
npm install
npm install webpack --save-dev
```

1. Go to route `/package-boilerplate` and see if you see Hello world. If you did, congratulations!

1. Rename everything to match your own:
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
```

Remove any features you don't need from the boilerplate.



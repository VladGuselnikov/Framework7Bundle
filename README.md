Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require vladg/framework7-bundle:@dev
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new  Vladg\Framework7Bundle\VladgFramework7Bundle(),
        );

        // ...
    }

    // ...
}
```

Step 3: Install assets
-------------------------
Given your server's public directory is named "web", install the public vendor resources

``` bash
$ .bin/console assets:install web
```

Optionally, use the --symlink attribute to create links rather than copies of the resources 

``` bash
$ .bin/console assets:install --symlink web
```
Step 4: Usage
-------------------------
Refer to the desired files in your HTML template, e.g.

``` html
<script type="text/javascript" src="{{ asset('bundles/vladgframework7/dist/js/framework7.min.js') }}"></script>
```

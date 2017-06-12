Lo-Dash Bundle for Symfony2

## Notice

This is a legacy bundle dating back to when javascript packagers such as NPM or Bower didn't exist.
No further updates to this bundle will be published, so please consider the bundle abandoned.

## Current Version

Lo-Dash v4.17.4

## Installation

### Add bundle to your composer.json file

``` js
// composer.json

{
    "require": {
		// ...
        "bmatzner/lodash-bundle": "~4.17"
    }
}
```

### Add bundle to your application kernel

``` php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Bmatzner\LoDashBundle\BmatznerLoDashBundle(),
        // ...
    );
}
```

### Download the bundle using Composer

``` bash
$ php composer.phar update bmatzner/lodash-bundle
```

### Install assets

Given your server's public directory is named "web", install the public vendor resources

``` bash
$ php app/console assets:install web
```

Optionally, use the --symlink attribute to create links rather than copies of the resources 

``` bash
$ php app/console assets:install --symlink web
```

## Usage

Refer to the desired files in your HTML template, e.g.

``` html
<script type="text/javascript" src="{{ asset('bundles/bmatznerlodash/js/lodash.min.js') }}"></script>
```

## Licenses

Refer to the source code of the included files for license information

## References

1. http://lodash.com/
2. http://symfony.com/

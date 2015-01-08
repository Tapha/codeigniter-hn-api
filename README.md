# Codeigniter-HN-API
"A Codeigniter wrapper for the Hacker News API - (Algolia &amp; Firebase versions supported)"

# Codeigniter Library For Hacker News API

## Overview

This is a very simple wrapper for the Algolia (https://hn.algolia.com/api) and Firebase (https://github.com/HackerNews/API) Hacker News API's.

Please email tapha@taphamedia.com if you find any bugs.

I hope to improve it over time and as updates to the API's occur. Please do not hesitate to suggest, or send any improvements you may have, via pull requests.

## Dependencies

This library leverages the Guzzle HTTP Client for URL requests. Installation (via Composer) instructions can be found here: https://github.com/guzzle/guzzle

Get more information and answers with the
[Documentation](http://guzzlephp.org/),
[Forums](https://groups.google.com/forum/?hl=en#!forum/guzzle),
and [Gitter](https://gitter.im/guzzle/guzzle).

##How To Install

###Step 1: Install composer 

The recommended way to install Guzzle is through
[Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest stable version of Guzzle:

```bash
composer require guzzlehttp/guzzle
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```
###Step 2: Add the Hn_api.php file to the /application/libraries folder in your codeigniter directory

```
libraries/Hn_api.php -> your_app/application/libraries/add here
``` 
You may find the file in the repository above.

## Methods

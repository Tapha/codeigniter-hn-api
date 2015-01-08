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

//Firebase API - https://github.com/HackerNews/API
	
	/**
	 * Get Item
	 *
	 * The item's unique id. Required.
	 *
	 * @return JSON -> Array
	 * @author Tapha
	 **/
	 	 	 
	get_item($item_id = NULL);
    
    /**
	 * Item Deleted
	 *
	 * Check if item is deleted.
	 *
	 * @return BOOL
	 * @author Tapha
	 **/
	 	 	 
    item_deleted($item_id = NULL);
    
    //Users
    
    /**
	 * Get User
	 *
	 * Get the users details.
	 *
	 * @return JSON -> Array
	 * @author Tapha
	 **/
    
    get_user($username = NULL);
    
    //Top Stories
    
    /**
	 * Get top stories
	 *
	 * Check the top stories on hn.
	 *
	 * @return JSON
	 * @author Tapha
	 **/
    
    get_top_stories();
    
    //Max ID
    
    /**
	 * Get current Maximum ID
	 *
	 * Check the current max id on hn.
	 *
	 * @return JSON -> Array
	 * @author Tapha
	 **/
    
    get_max_id();
    
    //Updates
    
    /**
	 * Get all current updates
	 *
	 * Check the most recent updates on hn.
	 *
	 * @return JSON -> Array
	 * @author Tapha
	 **/
    
   	get_updates();
   	    
//Algolia API - https://hn.algolia.com/api
    
    /**
	 * Get search item
	 *
	 * Check the item details on hn.
	 *
	 * @return JSON -> Array
	 * @author Tapha
	 **/
    
    get_search_item($id = NULL);
    
    /**
	 * Get search user
	 *
	 * Check the user details on hn.
	 *
	 * @return JSON -> Array
	 * @author Tapha
	 **/
    
    get_search_user($username = NULL);
    
    /**
	 * Get search 
	 *
	 * Search on hn.
	 *
	 * @return JSON -> Array
	 * @author Tapha
	 **/
    
    get_search(); 
    
    //Uses Func Get Args. Each argument is a search string
    
    /**
	 * Get search, ordered by date
	 *
	 * Search on hn, ordered by date.
	 *
	 * @return JSON -> Array
	 * @author Tapha
	 **/
    
    get_search_by_date();
    
    //Uses Func Get Args. Each argument is a search string
    

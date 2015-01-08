<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/**
 * CodeIgniter HN API Class
 *
 * Work with remote servers via cURL much easier than using the native PHP bindings.
 *
 * @package        	CodeIgniter
 * @subpackage    	Libraries
 * @category    	Libraries
 * @author        	Tapha Ngum
 * @license         	http://opensource.org/licenses/MIT
 * @link		https://github.com/Tapha/codeigniter-hn-api
 */

// Load Guzzle
use GuzzleHttp\Client;

class Hn_api {

	/**
	 * base api (Firebase API)
	 *
	 * @var string
	 **/
	 
	protected $base_api = "https://hacker-news.firebaseio.com/v0/";		
	
	/**
	 * after api (Firebase API)
	 *
	 * after api item, action or username string.
	 *
	 * @var string
	 **/
	 
	protected $after_item = ".json?print=pretty";
	
	/**
	 * base search api (Algolia API)
	 *
	 * @var string
	 **/
	 
	protected $base_search_api = "http://hn.algolia.com/api/v1/";
	
	/**
	 * base search query api (Algolia API)
	 *
	 * @var string
	 **/
	 
	protected $base_search_query_api = "http://hn.algolia.com/api/v1/search?query=";
	
	/**
	 * base search query by date api (Algolia API)
	 *
	 * @var string
	 **/
	 
	protected $base_search_query_by_date_api = "http://hn.algolia.com/api/v1/search_by_date?query=";
	
	//Constructor
	
	public function __construct()
     {
         //Code here       
     }	   
	
	//Items
	//Firebase API
	
	/**
	 * Get Item
	 *
	 * The item's unique id. Required.
	 *
	 * @return JSON -> Array
	 * @author Tapha
	 **/	 	 

    public function get_item($item_id = NULL)
    {
    	$client = new Client();
    	$url_string = $this->base_api."item/".$item_id.$this->after_item;
    	$response = $client->get($url_string);
    	$response = $response->json();
    	return $response;
    }
    
    /**
	 * Item Deleted
	 *
	 * Check if item is deleted.
	 *
	 * @return BOOL
	 * @author Tapha
	 **/	 	 

    public function item_deleted($item_id = NULL)
    {
    	$client = new Client();
    	$url_string = $this->base_api."deleted/".$item_id.$this->after_item;
    	$response = $client->get($url_string);
    	$response = $response->json();
    	return $response;
    }
    
    //Users
    
    /**
	 * Get User
	 *
	 * Get the users details.
	 *
	 * @return JSON -> Array
	 * @author Tapha
	 **/
    
    public function get_user($username = NULL)
    {
    	$client = new Client();
    	$url_string = $this->base_api."item/".$username.$this->after_item;
    	$response = $client->get($url_string);
    	$response = $response->json();
    	return $response;
    }
    
    //Top Stories
    
    /**
	 * Get top stories
	 *
	 * Check the top stories on hn.
	 *
	 * @return JSON -> Array
	 * @author Tapha
	 **/
    
    public function get_top_stories()
    {
    	$client = new Client();
    	$url_string = $this->base_api."topstories".$this->after_item;
    	$response = $client->get($url_string);
    	$response = $response->json();
    	return $response;
    }
    
    //Max ID
    
    /**
	 * Get current Maximum ID
	 *
	 * Check the current max id on hn.
	 *
	 * @return JSON -> Array
	 * @author Tapha
	 **/
    
    public function get_max_id()
    {
    	$client = new Client();
    	$url_string = $this->base_api."maxitem".$this->after_item;
    	$response = $client->get($url_string);
    	$response = $response->json();
    	return $response;
    }
    
    //Updates
    
    /**
	 * Get current updates
	 *
	 * Check the most recent updates on hn.
	 *
	 * @return JSON -> Array
	 * @author Tapha
	 **/
    
    public function get_updates()
    {
    	$client = new Client();
    	$url_string = $this->base_api."updates".$this->after_item;
    	$response = $client->get($url_string);
    	$response = $response->json();
    	return $response;
    }
    
    //Algolia API
    
    /**
	 * Get search item
	 *
	 * Check the item details on hn.
	 *
	 * @return JSON -> Array
	 * @author Tapha
	 **/
    
    public function get_search_item($id)
    {
    	$client = new Client();
    	$url_string = $this->base_search_api."items/:".$id;
    	$response = $client->get($url_string);
    	$response = $response->json();
    	return $response;
    }
    
    /**
	 * Get search user
	 *
	 * Check the user details on hn.
	 *
	 * @return JSON -> Array
	 * @author Tapha
	 **/
    
    public function get_search_user($username)
    {
    	$client = new Client();
    	$url_string = $this->base_search_api."users/:".$username;
    	$response = $client->get($url_string);
    	$response = $response->json();
    	return $response;
    }
    
    /**
	 * Get search 
	 *
	 * Search on hn.
	 *
	 * @return JSON -> Array
	 * @author Tapha
	 **/
    
    public function get_search() //Use Func Get Args. Each argument is a search string
    {
    	if ( func_num_args() > 0 ){
        	$args = func_get_args();
        	$num = 0;
    	}
    	foreach($args as $arg)
    	{
    		if ($num == 0)
    		{
    			$url_string = $this->base_search_query_api.$arg;
    		}
    		else
    		{
    			$url_string = $url_string.'&'.$arg;
    		}
    		$num++;
    		
    	}
    	$client = new Client();
    	
    	$response = $client->get($url_string);
    	$response = $response->json();
    	return $response;
    }
    
    /**
	 * Get search, ordered by date.
	 *
	 * Search on hn, ordered by date.
	 *
	 * @return JSON -> Array
	 * @author Tapha
	 **/
    
    public function get_search_by_date()
    {
    	if ( func_num_args() > 0 ){
        	$args = func_get_args();
        	$num = 0;
    	}
    	foreach($args as $arg)
    	{
    		if ($num == 0)
    		{
    			$url_string = $this->base_search_query_by_date_api.$arg; //Use Func Get Args. Each argument is a search string
    		}
    		else
    		{
    			$url_string = $url_string.'&'.$arg;
    		}
    		$num++;
    		
    	}
    	$client = new Client();
    	
    	$response = $client->get($url_string);
    	$response = $response->json();
    	return $response;
    }

}

/* End of file Hn_api.php */

<?php

class WebsitesProvider extends DataProvider
{

	protected function readData($path) {

	    $websites = simplexml_load_string(realpath('../core/websites.xml')) or die("Error: Cannot create object");

		    return $websites;
   
	}
}
?>
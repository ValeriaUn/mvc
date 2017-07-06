<?php

class WebsitesProvider extends DataProvider
{

	protected function readData($path) {

	    $websites = simplexml_load_string($path.'websites.xml') or die("Error: Cannot create object");

	 //    if ($websites === false) {

		//     $errors =  "Failed loading XML: ";

		//     foreach(libxml_get_errors() as $error) {

		//         $errors .= '<br>', $error->message;
		//     }

		// } else {

		    return $websites;
		// }        
	}
}
?>
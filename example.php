<?php

include ("lib/awsCloudSearch.php");

// Add your search domain and domain id
$aws = new awsCloudSearch(DOMAIN_NAME, DOMAIN_ID);
//Set param values
$myParam = array(
		"size" => 2000,
		"start" => 0,
		"return-fields" => 'field1,field2,field3,field4,field5,field6',
		//"rank" => '-docid'
);
// search for the value you are looking for
$res = $aws->search("term", $myParam);
// Search for the value by the field and condition
/*$query = "(and field1:'value' field2:'value')";
$res = $aws->searchby_field($query, $myParam);*/

// if the HTTP_CODE is 200 you have a winner
if ($aws->http_code == 200)
{
    print_r($res);
}
else
{
	// else you have an issue
    echo "the code was: " . $aws->http_code;   
}



?>






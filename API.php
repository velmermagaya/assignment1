<?php



function get_product($name)

{

	$products = array(

		array(	"Marks"=>"assignments",

				"types"=>array("assignment1","assignment2")),

		array(	"Marks"=>"examination",

				"types"=>array("test1","finalexam"),

				

	);

	
foreach($products as $product)

	{

		if($product['description']==$name)

		{

			return $product;

			break;

		}

	}



}
?>
data.php
Displaying data.php.
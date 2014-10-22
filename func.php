<?php
/*********************************************************************

******
*                                                                

          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, 

Ilya M. Shalnev    *
*                                                  

                        *
* This  is  commercial  software,  only  

users  who have purchased a valid *
* license  and  accept  to the 

terms of the  License Agreement can install *
* and use this program.   

                                                 *
*                    

                                                      *
**********************************************************************

******
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   

AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS 

DISTRIBUTION PACKAGE.            *
**********************************************************************

******/

if ( !defined('AREA') ) { die('Access denied'); }

function 

fn_redprice_get_category_data_pre($category_id, $field_list, 

$get_main_pair, $skip_company_condition, $lang_code)
{
	//Getting authentication data to identify user
	$auth = $_SESSION['auth'];

/*	
$number = db_get_field('SELECT feature_id FROM ?:product_features_descriptions ORDER BY feature_id DESC LIMIT 1');
$number=$number+1;
db_query("INSERT INTO ?:product_features_descriptions (`feature_id` , `description` , `lang_code`) VALUES (?i , 'kirmizi' , 'en')",$number);     

db_query("INSERT INTO ?:product_features
 (feature_id , feature_code , company_id , feature_type , 

categories_path , parent_id , display_on_product , display_on_catalog 

, display_on_header , status , position , comparison) VALUES (?i , '' , 1 , 'C' , '' , 0 , 'Y' , 'N' , 'N' , 'A' , 0 , 'N')",$number);
*/

//Checking if the user is logged in and resides at the customer area
	

if (!empty($auth['user_id']) && AREA == 'C') {
		//Checking if the database has data on the user.
		//Creating new record if necessary, appending existing data if possible.



	





	}


		




}

?>

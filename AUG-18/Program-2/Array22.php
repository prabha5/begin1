<?php


$first=array(array('name'=>'Dinesh','education'=>'cse','percentage'=>70),
				   array('name'=>'Prabhakaran','education'=>'it','percentage'=>80),
				   array('name'=>'Revathi','education'=>'cse','percentage'=>90)
			);


$second=array(array('name'=>'Dinesh','age'=>20,'sex'=>'male'),
				  array('name'=>'Prabhakaran','age'=>21,'sex'=>'male'),
				  array('name'=>'Revathi','age'=>20,'sex'=>'female')
			);

foreach($firstarray as &$value1) {	 
    foreach ($secondarray as $value2) {   
        if($value1['name'] == $value2['name']) {        	
            $value1 = array_merge($first, $second);     
            echo "<pre>";
            print_r($value1);
            die();       
        }
    }
}



?>
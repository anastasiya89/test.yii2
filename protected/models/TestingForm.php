<?php
class TestingForm extends CFormModel{

	public function getResult ( $file ){

	    $file_content = file_get_contents($file);
	    $arr = explode(' ', $file_content);
	    foreach($arr as $val){
	    	if((int)$val == true){
	    		$a = str_split($val);

	    		$data[] = array_sum($a);
	    	}
	    }
	    rsort($data); 
	    return $data;
	 }

}

<?php

namespace Repository;

class CleanRequests{
	public static function clean(array $requests):array
	{
		$result = array();
		foreach($requests as $key => $request){
			if(is_string($request)){
				$result[$key]=trim(strip_tags($request));
			}else{
				array_push($result,$key,$request);
			}
		}
		return $result;
	}
}

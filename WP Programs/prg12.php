<?php
$data=[
	['id'=>1,'name'=>'Srikanth','age'=>20],
	['id'=>2,'name'=>'Sri','age'=>23],
	['id'=>3,'name'=>'kanth','age'=>25],
	['id'=>4,'name'=>'Syam','age'=>27],
	['id'=>5,'name'=>'Kavita','age'=>20]
	];
function searchByCriteria($data,$criteria){
	$results=[];
	foreach($data as $entry){
		$match=true;
		foreach($criteria as $key => $value){
			if(!isset($entry[$key]) || $entry[$key]!=$value){
				$match=false;
				break;
			}
		}
		if($match){
			$results[]=$entry;
		}
	}
	return $results;
}
$criteria=['age' => 23];
$searchResults=searchByCriteria($data,$criteria);
echo 'Search Results:<br>';
print_r($searchResults);
?>
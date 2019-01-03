<?php 
	function GetUglyNumber_Solution($index){
		while ($index%2==0) {
			$index/=2;
		}
		while ($index%3==0) {
			$index/=3;
		}
		while ($index%5==0) {
			$index/=5;
		}
		if($index==1){
			return true;
		}else{
			return false;
		}
	}
	$max = 1;
	$n = 0;
	for ($i=1;;$i++) { 
		if(GetUglyNumber_Solution($i)){
			$n++;
			if($n==$max){ 
				echo "第".$n."位的丑数是".$i;
				break;
			}
		}
		
	}
	
 ?>
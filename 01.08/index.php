<?php 
	function ReverseSentence($str)
	{
		$arr = explode(' ',$str);
		krsort($arr);
		$str = implode($arr,' ');
		echo $str;
	}
	$str = 'student. a am I';
	ReverseSentence($str);
 ?>
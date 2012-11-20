<?php 

	namespace Org\Com\Arf;
	use Org\Com\Arf\GetVals as val_s;

	require 'getvals.php';


	class SfPrinter {

		function cetak($str){
			try{
				$val = new val_s();
				echo "{$val->addition()} ".$str;
			} catch(Exception $error) {
				echo $error;
			}
		}

	}

?>
<?php

class Boostrap{

	public function test(){
		echo "ho";
	}
	public function alert($msg,$type){
		return '
			<div class="my-alert">
				<div class=" alert alert-'.$type.' text-center p-3" role="alert">
					'.$msg.'
				</div>
			</div>
		';
	}
	public function alert2($msg,$type){
		return '
			<div class="new-alert">
				<div class=" alert alert-'.$type.' text-center p-3" style="
				position:fixed;
				bottom: 5%;
				left: 40%;
				z-index:1;
				" 
				role="alert">
					'.$msg.'
				</div>
			</div>
		';
	}

}
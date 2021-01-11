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
}
<?php
namespace MauronAlpha {
	
	class RequestType extends MauronCode_dataObject {

		//constructor
		public function __construct(){
			parent::set_dataType($this->dataType);
		}

	}
}
?>
<?php
namespace MauronAlpha {
	
	class RequestHandler extends MauronCode {
	
		//constructor
		public function __construct(){
			parent::set_CodeType(MauronAlpha::CodeType_requestHandler.Instance );			
		}
	
	}
	
	class CodeType_requestHandler extends CodeType {
			
		//constructor
		public function __construct() {
			parent::set_CodeType(MauronAlpha::CodeType_subType.Instance);
		}
		
		protected static $STR_name = "RequestHandler";

		private $singleton_instance;
		private static function get_Instance() {
			if(this::singleton_instance===null){
				$this->singleton_instance = new CodeType_requestHandler();
			}
			return this::singleton_instance;
		}
	}
	
	
	
	
}
?>
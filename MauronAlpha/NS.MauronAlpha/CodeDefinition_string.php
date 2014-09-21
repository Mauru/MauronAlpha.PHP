<?php

namespace MauronAlpha {

public class CodeDefinition_string extends MauronAlpha::CodeDefinition {
	
	//constructor
	private function __construct() {}

	//Instance
	private function get_Instance() {
		return new CodeDefinition_string();
	}
	
	public static string $Name = "CodeDefinition.String";
	
	//property: Value, type: string, Default: null
	private string $STR_value;
	private static string $DEFAULT_STR_value = null;
	public function get_Value() {
		if(!isset($this->STR_value)){
			$this->STR_value=$this->DEFAULT_STR_value;
		}
		return $this->STR_value;
	}
	public function set_Value(string $value) {
		$this->STR_value=$value;
		return this;
	}
}

}
?>
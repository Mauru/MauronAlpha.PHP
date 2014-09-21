<?php
namespace MauronAlpha;

final class CodeType_subtype extends CodeType {
	public static $Name="subType";
	
	//constructor
	private function __construct()	{}

	
	private static function Instance() {
		static $inst = null;
		if ($inst === null) {
			$inst = new CodeType_subtype();
		}
		return $inst;
	}
}
?>
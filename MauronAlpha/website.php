<?php
namespace MauronAlpha;

final class CodeType_subtype extends CodeType {
	/**
	 * Call this method to get singleton
	 *
	 * @return UserFactory
	 */
	public static function Instance()
	{
		static $inst = null;
		if ($inst === null) {
			$inst = new UserFactory();
		}
		return $inst;
	}

	/**
	 * Private ctor so nobody else can instance it
	 *
	 */
	private function __construct()
	{

	}
}

/** A class that defines what a MauronCode Fragment does
 * 
 * @author Mauru
 */
class CodeType extends MauronCode {
	
	//constructor
	public function __construct(){
		parent::__construct(CodeType_subtype.Instance);
	}
	

}

class MauronCode {
	//constructor
	public function __construct(CodeType $codeType) {
	
	}
	
	
	//Debug
	public function Debug(string $msg, MauronCode $source){
		print($msg);
		print($source);	
	}
}

?>
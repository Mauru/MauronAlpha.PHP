<?PHP 
namespace MauronAlpha/HandlingErrors {

public class ErrorType extends MauronCode {

	//constructor
	private function __construct(){
		parent::set_CodeType(CodeType_subType->Instance);
	}
	
	private abstract function get_Name(){
		return "ErrorType.Unknown";
	}

}

}
?>
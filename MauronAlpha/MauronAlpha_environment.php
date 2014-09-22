<?PHP
namespace MauronAlpha/Environment {

require_once(./HandlingErrors/ErrorType_fatal.php);
require_once(./HandlingClasses/ClassLoader.php);


public final class MauronAlpha_environment {
	
	//constructor
	private function __construct() {}
	
	//get the ClassLoader
	private function get_ClassLoader() {
		
		if(!isset($this->Data->ClassLoader)){
			$this->BuildSingleton_ClassLoader();
		}
		
	}
	
	//Initialize the class Loader for the first time
	private function BuildSingleton_ClassLoader(){
		if(isset($this->Data->ClassLoader)){
			$this->Error(
				"ClassLoader already set!,(BuildSingleton_ClassLoader)",
				ErrorType_fatal->Instance
			);
		}
	}
	
	// Throw an ErrorException
	private function Error(string $messge, ErrorType $errorType){
		
	}
	
	
	
}
	
}

}
?>
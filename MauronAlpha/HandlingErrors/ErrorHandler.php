<?PHP

namespace MauronAlpha {

public class Errorhandler {

	//constructor
	public function __construct(string $message, class $class){
		$this->set_Message = $message;
	}
	
	//magicMethod: SET_*, argument: { string, object }
	private function __set(string $key, object $value){
		string $str_functionName = "set_".$key;
		if(function_exists($this->$str_functionName)){
			return $this->$str_functionName($key,$value);
		}
		
		//ErrorHandling
		return $this->ThrowError(new ErrorHandler("Error.InvalidPropertyModification",new ErrorSource($key,$this->NEW_AssemblyInfo($class)))
	}
	
	
	//creator: AssemblyInfo, argument: Object
	public static function NEW_AssemblyInfo(Class $class){
		return new MauronAlpha::AssemblyInfo($class);
	}	
	
	public function DataRequest(Requesthandler $requesthandler, string $key, RequestType $requestType, ReturnType $returnType) {
		return $
	}
	
	
}

}
?>
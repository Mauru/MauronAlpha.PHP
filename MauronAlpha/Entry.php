<?PHP

/*
<summary>
Quick Definition of what a DataRequest can look like
</summary>
*/

namespace MauronAlpha;

public class RequestType {

	//constructor
	public function __construct(){}

}

public class RequestHandler {

	//constructor
	public function __construct(){}
	
}

public class AssemblyInfo {
	
	//constructor
	public function __construct(object $object){
		$this->set_Source($object);
		$this->set_NameSpace_fromObject($object);
	}	
	
	//property: Source, type: Object;
	private object $OBJ_source;
	private function set_Source(object $object) {
		$this->OBJ_source = object;
		return $this;
	}
	private function get_Source() {
		return $this->OBJ_source;
	}
	//boolean: Source
	private boolean $DEF_HasSource = false;
	private function IsTrue_HasSource() {
		$this->DEF_HasSource = isset($this->OBJ_Source);
		return $this->DEF_HasSource;		
	}
	
	//property: NameSpace, type: CodeDefinition_nameSpace;
	private string $STR_definition_nameSpace = "AssemblyInfo.Unknown";
	private CodeDefinition_nameSpace $NameSpace_source;
	private function set_NameSpace_fromObject(object $object){
		$this->NameSpace_source = new MauronAlpha::CodeDefinition_nameSpace(TypeOf($object));
	}
	
	//property: TypeOf, type: CodeDefinition_type
	private string $STR_definition_type = "AssemblyInfo.Type.Unknown";
	public function TypeOf(object $object){
		$this->STR_definition_type = get_class($object);
		return new MauronAlpha::CodeDefinition_type($this->STR_definition_type);
	}
	
}

public class CodeDefinition_type extends MauronAlpha::CodeDefinition {
	
	//constructor
	public function __construct(string $typeDefinition){ 
		$this->set_TypeDefinition($typeDefinition);
	}
	
	//property: TypeDefinition, type: string, default: CodeDefinition.Type.Unknown
	private string $STR_typeDefinition;
	private static $DEFAULT_STR_typeDefinition = "CodeDefinition.Type.Unknown";
	
	private function get_TypeDefinition( $returnType =  new MauronAlpha::CodeDefinition_string() ){
		if( !isset($this->STR_typeDefinition)) {
			$this->STR_typeDefinition = $this->DEFFAULT_STR_typeDefinition;
		}
		return $this->STR_typeDefinition;
	}
	private function set_TypeDefinition(string $string){
		$this->STR_TypeDefinition = $string;
		return $this;
	}
	
	public static string $Name = "CodeDefinition.Type";
	
	public function get_Value($returnType = new MauronAlpha::CodeDefinition_string()) {
		return $this->TypeDefinition_fromString($this->get_TypeDefinition());
	}
	
	public static function TypeDefinition_fromString(string $string){
		return MauronAlpha::ClassFinder->Request_TypeDefinition_fromString($string);
	}
	
	public static function Class_fromObject(object $object){
		return get_class($object);
	}
}

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

public abstract class CodeDefinition {
	
	//constructor
	public function __construct() {}
	public static function TypeOf(object $object) {
		return new MauronAlpha::CodeDefinition_type->Class_fromObject($object);
	}
	
}

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
	public static NEW_AssemblyInfo(class $class){
		return new MauronAlpha::AssemblyInfo($class);
	}	
	
	public function DataRequest(Requesthandler $requesthandler, string $key, RequestType $requestType, ReturnType $returnType) {
		return $
	}
	
	
}

public class DataRequest {
	
	//constructor
	public function __construct(){}
	
	private string $STR_requestType="Request.Unknown";
	
	private RequestHandler $requestHandler;
	
	private function Initiate(string $key, RequestType $requestType, ReturnType $returnType) {
		$this->set_Busy(true);
		
		$this->set_RequestHandler( 
			MauronAlpha::Classfactory->New_fromString("MauronAlpha.RequestHandler")->set_RequestType($requestType)->set_ReturnType($returnType);
		);
		
		if(!$this->RequestHandler->IsValidRequest) {
			ErrorHandler $ERROR_requestInvalid = $this->ErrorHandler_fromDataRequest( 
				$this->requestHandler,
				$key,
				$requestType,$returnType
			);
			$this->set_Result_fromErrorHandler($ERROR_requestInvalid);
		}
		
		return $this->Yield();
	}
	
	private function ErrorHandler_fromDataRequest(RequestHandler $)
	
	private function Yield() {
		$this->set_Busy(false);
		return false;
	}
		
	}
}


/* 
<summary>
This is the Entry level Code Architecture for the MauronAlpha PHP Interface
</summary 
*/

//1: We start out by determining WHAT we are dealing with

$request = new DataRequest();



?>
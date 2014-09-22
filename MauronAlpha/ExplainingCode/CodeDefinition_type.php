<?PHP

namespace MauronAlpha {

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

}
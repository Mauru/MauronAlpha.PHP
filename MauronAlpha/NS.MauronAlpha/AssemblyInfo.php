<?PHP
namespace MauronAlpha {

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

}
?>
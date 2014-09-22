<?PHP

namespace MauronAlpha {

public abstract class CodeDefinition {
	
	//constructor
	public function __construct() {}
	public static function TypeOf(object $object) {
		return new MauronAlpha::CodeDefinition_type->Class_fromObject($object);
	}
	
}

}
?>

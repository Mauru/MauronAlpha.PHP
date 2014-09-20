<?PHP
namespace MauronAlpha;
class MauronCode {
	
	public $CodeType;
	
	//constructor
	public function __construct(CodeType $codeType) {
		$this->CodeType=$codeType;
	}
	
	
	//Debug
	public function Debug(string $msg, MauronCode $source){
		print($msg);
		print($source);	
	}
	
}
?>
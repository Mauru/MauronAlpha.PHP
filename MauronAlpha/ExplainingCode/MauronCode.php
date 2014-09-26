<?PHP
namespace MauronAlpha\ExplainingCode {
use MauronAlpha\HandlingErrors\ErrorResolution;

class MauronCode {
	
	public $CodeType;
	
	//constructor
	public function __construct(CodeType $codeType) {
		$this->CodeType=$codeType;
	}
	
	//getters
	protected $PROPERTIES = [];
	protected $DATA = [];
	
	public function __get($key) {
		$F_name= "get_".$key;
		if(in_array($key,$this->PROPERTIES)){
			return $this->$F_name();
		}
		if(function_exists($F_name)){
			return $this->$F_name();
		}		
		if(array_key_exists($key,$this->DATA)){
			return $this->DATA[$key];
		}
		$this->Exception("Key not found",$this,ErrorResolution::DoNothing);
		return NULL;
	}
	
	//Debug
	public function Debug(string $msg, MauronCode $source){
		print($msg);
		print($source);	
	}
	
	//Exception
	public function Exception(string $msg, MauronCode $source, ErrorResolution $resolution) {
		
	}
	
	//Error
	public function Error(string $msg, MauronCode $source, ErrorType $errorType) {}
	
	//CodeType
	public function get_CodeType() {
		if(!isset($this->CodeType)) {
			$this->Error("Invalid CodeType",$this,MauronAlpha\HandlingErrors\ErrorType::fatal);
		}
		return $this->CodeType;
	}
	
}
}
?>
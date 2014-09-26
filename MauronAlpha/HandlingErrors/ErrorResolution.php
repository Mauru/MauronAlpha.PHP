<?PHP 
namespace MauronAlpha\HandlingErrors {
use MauronAlpha\ExplainingCode\MauronCode;

class ErrorResolution extends MauronCode {

	//constructor
	public function __construct($str) {
		self::$STR_description=$str;
	}
	
	//Description of the Resolution
	private $STR_description;
	
	//Error Resolution cases
	publi$DoNothing = new ErrorResolution("DoNothing");
}

}
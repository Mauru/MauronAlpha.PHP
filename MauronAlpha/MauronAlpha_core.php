<?PHP 
namespace MauronAlpha {
	
	require_once("./ExplainingCode/MauronCode.php");
	use MauronAlpha\ExplainingCode;

	final class MauronAlpha_core extends ExplainingCode\MauronCode {
	
		//constructor
		public function __construct() {}
		
		public function get_Test() {
			return "OK";
		}
	
	}

}
?>
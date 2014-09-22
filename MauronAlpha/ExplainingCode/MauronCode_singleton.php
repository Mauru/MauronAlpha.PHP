<?php
namespace MauronAlpha {

	abstract class MauronCode_Singleton	{
		
		protected function __construct(){}

		final private static function get_Instance() {
			static $ARRAY_instances = array();

			$CLASS_called = get_called_class();

			if (!isset($ARRAY_instances[$CLASS_called])){
				$ARRAY_instances[$CLASS_called] = new $CLASS_called();
			}

			return $ARRAY_instances[$CLASS_called];
		}

		final private function __clone() {}
	}
}
?>
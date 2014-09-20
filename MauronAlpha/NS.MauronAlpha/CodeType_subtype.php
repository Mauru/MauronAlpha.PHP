<?php
namespace MauronAlpha;

final class CodeType_subtype extends CodeType {
	public static $Name="subType";
	
	/**
	 * Call this method to get singleton
	 *
	 * @return UserFactory
	 */
	public static function Instance() {
		static $inst = null;
		if ($inst === null) {
			$inst = new UserFactory();
		}
		return $inst;
	}

	/**
	 * Private constructor so nobody else can instance it
	 *
	 */
	private function __construct()	{}
	
}
?>
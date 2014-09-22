<?php

namespace MauronAlpha;

/** A class that defines what a MauronCode Fragment does
 * 
 * @author Mauru
 */
class CodeType extends MauronCode {
	
	//constructor
	public function __construct(){
		parent::set_CodeType( MauronAlpha::CodeType_subtype.Instance );
	}
	
	public abstract $Name;	

	
}

?>
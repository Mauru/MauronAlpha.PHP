<?php

namespace MauronAlpha {

public class DataRequest {
	
	//constructor
	public function __construct(){}
	
	private string $STR_requestType="Request.Unknown";
	
	private RequestHandler $requestHandler;
	
	private function Initiate(string $key, RequestType $requestType, ReturnType $returnType) {
		$this->set_Busy(true);
		
		$this->set_RequestHandler( 
			MauronAlpha::Classfactory->New_fromString("MauronAlpha.RequestHandler")->set_RequestType($requestType)->set_ReturnType($returnType);
		);
		
		if(!$this->RequestHandler->IsValidRequest) {
			ErrorHandler $ERROR_requestInvalid = $this->ErrorHandler_fromDataRequest( 
				$this->requestHandler,
				$key,
				$requestType,$returnType
			);
			$this->set_Result_fromErrorHandler($ERROR_requestInvalid);
		}
		
		return $this->Yield();
	}
	
	private function ErrorHandler_fromDataRequest(RequestHandler $request){}
	
	private function Yield() {
		$this->set_Busy(false);
		return false;
	}
		
	}

}

?>
<?php

class RDFIOIOService {
	protected $mInput = null;
	protected $mResults = null;
	
	public function __construct() {
		// Nothing so far
	}
	
	public function execute() {
		// Do stuff ...
	}
	
	# Getters and setters
	
	public function setInput( &$input ) {
		$this->mInput = $input;	
	}
	public function getInput() {
		return $this->mInput;
	}
	public function setResults( &$results ) {
		$this->mResults = $results;	
	}
	public function getResults() {
		return $this->mResults;
	}	
}

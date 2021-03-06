<?php
include location.php;
class seat{
	private $taken; //boolean 
	private $dirty; //boolean
	private $chair; //boolean
	private $location; // int? position? how do you decide this?
	private $occupant; // if there is an occupant ($taken==true) who are they?
	
	/*
	Constructor
	*/
	function __construct(){
		$this->taken = 0;
		$this->dirty = 0;
		$this->chair = 0;
		$this->location = new location();
		$this->occupant = 0;
		$this->isFriend = false;
	}
	/*
	Get the value of taken
	Arguments: none
	Return: value of $taken
	*/
	public function getTaken() {
		return $taken;
	}
	
	/*
	Set the value of taken
	Arguments: boolean values
	Return: none
	*/
	public function setTaken($taken) {
		$this->taken = $taken;
	}
	
	/*
	Get the value of Dirty
	Arguments: none
	Return: int $dirty
	*/
	public function getDirty() {
		return $dirty;
	}
	
	/*
	Set the value of Dirty
	Arguments: bool $dirty
	Return: none
	*/
	public function setDirty($dirty) {
		$this->dirty = $dirty;
	}
	/*
	Set the value of Chair
	Arguments: bool $chair
	Return: none
	*/
	public function setChair($chair) {
		$this->chair = $chair;
	}
	/*
	Get the value of Chair
	Arguments: none
	Return: bool $chair
	*/
	public function getChair() {
		return $chair;
	}
	/*
	Set the value of Location
	Arguments: int $location
	Return: none
	*/
	private function setLocation($location) {
		$this->location = $location;
	}
	/*
	Get the value of Location
	Arguments: none
	Return: int $location
	*/
	private function getLocation() {
		return $location;
	}
	/*
	Set the value of setOccupant
	Arguments: bool $occupant
	Return: none
	*/
	private function setOccupant($occupant){
		$this->occupant = $occupant;

	}
	/*
	Get the value of setOccupant
	Arguments: none
	Return: bool $occupant
	*/
	private function getOccupant(){
		return $occupant;
	}

}

?>
<?php

class Food
{
	protected $Fname
	public function getName($name)
	{
		$this->Fname=$name;
	}
	public function showData()
	{
		echo  "Item is:".$this->Fname."</br>";
	}
}
class Junkfood extends Food
{
	private $jfname="Sandwich";
	public function passvalue()
	{
		$this->Fname=$this->$jfname;
	}
}
$jf=new Junkfood();
$jf->passvalue();
$jf->showdata();
?>

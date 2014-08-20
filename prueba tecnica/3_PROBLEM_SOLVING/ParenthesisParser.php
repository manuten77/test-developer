<?php

class ParenthesisParser 
{
	public $string;
	public $numopn;
	public $numcls;
	public function __construct($string) 
	{  
		 
      if(strlen($string)==0) exit("The lenght of string must be >0!");    
		if ( (strpos($string, '(') == false)||(strpos($string, ')') == false)) exit ("OPEN or CLOSE Parenthesis Not found into String");	
      $this->numopn=0;
      $this->numcls=0;
      $this->string = $string;             
   }
	public function __destruct() 
	{
                echo "__destruct method called!";
                $this->string = null;
   }
	public function getNumParenthesisOPEN()
	{
	   $str=$this->string;
		$returnValue = count_chars(".$str.", 0);
		$count=count($returnValue);
		
	
		// char "(" =40 ;
		for($i=0;$i<$count;$i++)
		{
			if (chr($i) == "(")
		   {
		   	echo "There are $returnValue[$i] instance of \"" , chr($i) , "\" into string.<br>";
		   	$this->numopn=$returnValue[$i];
		   }  	         
		}
		return $this->numopn;
	}


	public function getNumParenthesisCLOSE()
	{
	   $str=$this->string;
		$returnValue = count_chars(".$str.", 0);
		$count=count($returnValue);
		
		// char ")"=41;
		for($i=0;$i<$count;$i++)
		{
		  	if (chr($i) == ")")
		   {
		   	echo "There are $returnValue[$i] instance of \"" , chr($i) , "\" into string.<br>";
		   	$this->numcls=$returnValue[$i];
		   }    
	       
		}
		return $this->numcls;
	}

	public function ParserString()
	{
		$str=$this->string;		
		$returnValue = count_chars(".$str.", 0);
		$count=count($returnValue);
		
		// char "(" =40 ; char ")"=41;
		for($i=0;$i<$count;$i++)
		{	
			if (chr($i) == "(")
		   {
		   	$this->numopn=$returnValue[$i];
		   }
		  	if (chr($i) == ")")
		   {
		   	$this->numcls=$returnValue[$i];
		   }          
		}
		if ($this->numopn==$this->numcls)
	 		echo "Successful";
	 	else
	 		echo "Exception Mismatched Parenthesis";
	
	}



?>
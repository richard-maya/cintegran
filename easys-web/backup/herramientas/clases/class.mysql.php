<?php
class MySQL
{
  var $conCat;
  function MySQL()
  {
  	if(!isset($this->conCat))
	{
  		$this->conCat = (mysql_connect("localhost","easysweb_admin","Admin1986")) or die(mysql_error());
  		mysql_select_db("easysweb_master",$this->conCat) or die(mysql_error());
  	}
  }

 function consulta($consultCat)
 {
	$resultado = mysql_query($consultCat,$this->conCat);
  	if(!$resultado)
	{
  		echo 'MySQL Error: ' . mysql_error();
	    exit;
	}
  	return $resultado; 
  }
  
 function fetch_array($consultCat)
 { 
  	return mysql_fetch_array($consultCat);
 }
 
 function num_rows($consultCat)
 { 
 	 return mysql_num_rows($consultCat);
 }
 
 function fetch_row($consultCat)
 { 
 	 return mysql_fetch_row($consultCat);
 }
 function fetch_assoc($consultCat)
 { 
 	 return mysql_fetch_assoc($consultCat);
 } 
 
}

?>
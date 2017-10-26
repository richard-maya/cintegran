
<?php
class Conectar
{
	public static function con()
	{
		$conexion = mysql_connect("localhost","cintegra_admin","admin1982");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("cintegra_master");
		return $conexion;
	}
}
?>
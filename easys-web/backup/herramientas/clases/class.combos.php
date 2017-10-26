<?php

class selects extends MySQL
{
	var $code = "";
	
	function cargarPaises()
	{
		$consulta = parent::consulta("SELECT c_Estado,Nombre_estado FROM c_Estado WHERE c_Pais = 'MEX' ORDER BY Nombre_estado ASC");
		$num_total_registros = parent::num_rows($consulta);
		if($num_total_registros>0)
		{
			$paises = array();
			while($pais = parent::fetch_assoc($consulta))
			{
				$code = $pais["c_Estado"];
				$name = $pais["Nombre_estado"];
				$paises[$code]=$name;
			}
			return $paises;
		}
		else
		{
			return false;
		}
	}
	function cargarEstados()
	{
		$consulta = parent::consulta("SELECT c_Municipio,Descripcion FROM c_Municipio WHERE c_Estado = '".$this->code."'");
		$num_total_registros = parent::num_rows($consulta);
		if($num_total_registros>0)
		{
            $estados = array();
			while($estado = parent::fetch_assoc($consulta))
			{
				$code = $estado["c_Municipio"];
				$cve = $estado["Descripcion"];
				//$estados[$name]=$name;
                $estados[$code]=$cve;
			}
			return $estados;
		}
		else
		{
			return false;
		}
	}
		function cargarCiudades()
	{
		$consulta = parent::consulta("SELECT Descripcion,c_Localidad FROM c_Localidad WHERE c_Municipio = '".$this->code."'");
		$num_total_registros = parent::num_rows($consulta);
		if($num_total_registros>0)
		{
			$ciudades = array();
			while($ciudad = parent::fetch_assoc($consulta))
			{
				$code = $ciudad["c_Localidad"];
				$name = $ciudad["Name"];				
				$ciudades[$code]=$code;
			}
			return $ciudades;
		}
		else
		{
			return false;
		}
	}		

	function cargartcontra()
	{
		$consulta = parent::consulta("SELECT c_TipoContrato,Descripcion FROM c_TipoContrato ORDER BY c_TipoContrato ASC");
		$num_total_registros = parent::num_rows($consulta);
		if($num_total_registros>0)
		{
			$paises = array();
			while($pais = parent::fetch_assoc($consulta))
			{
				$code = $pais["c_TipoContrato"];
				$name = $pais["Descripcion"];				
				$paises[$code]=$name;
			}
			return $paises;
		}
		else
		{
			return false;
		}
	}
	function cargarjornada()
	{
		$consulta = parent::consulta("SELECT c_TipoJornada,Descripcion FROM c_TipoJornada ORDER BY c_TipoJornada ASC");
		$num_total_registros = parent::num_rows($consulta);
		if($num_total_registros>0)
		{
			$paises = array();
			while($pais = parent::fetch_assoc($consulta))
			{
				$code = $pais["c_TipoJornada"];
				$name = $pais["Descripcion"];				
				$paises[$code]=$name;
			}
			return $paises;
		}
		else
		{
			return false;
		}
	}function cargarregimen()
	{
		$consulta = parent::consulta("SELECT c_TipoRegimen,Descripcion FROM c_TipoRegimen ORDER BY c_TipoRegimen ASC");
		$num_total_registros = parent::num_rows($consulta);
		if($num_total_registros>0)
		{
			$paises = array();
			while($pais = parent::fetch_assoc($consulta))
			{
				$code = $pais["c_TipoRegimen"];
				$name = $pais["Descripcion"];				
				$paises[$code]=$name;
			}
			return $paises;
		}
		else
		{
			return false;
		}
	}
	function cargarperiodop()
	{
		$consulta = parent::consulta("SELECT c_PeriodicidadPago,Descripcion FROM c_PeriocidadPago ORDER BY c_PeriodicidadPago ASC");
		$num_total_registros = parent::num_rows($consulta);
		if($num_total_registros>0)
		{
			$paises = array();
			while($pais = parent::fetch_assoc($consulta))
			{
				$code = $pais["c_PeriodicidadPago"];
				$name = $pais["Descripcion"];				
				$paises[$code]=$name;
			}
			return $paises;
		}
		else
		{
			return false;
		}
	}
	function cargarregimenfiscal()
	{
		$consulta = parent::consulta("SELECT c_RegimenFiscal,Descripcion FROM c_RegimenFiscal ORDER BY c_RegimenFiscal ASC");
		$num_total_registros = parent::num_rows($consulta);
		if($num_total_registros>0)
		{
			$paises = array();
			while($pais = parent::fetch_assoc($consulta))
			{
				$code = $pais["c_RegimenFiscal"];
				$name = $pais["Descripcion"];				
				$paises[$code]=$name;
			}
			return $paises;
		}
		else
		{
			return false;
		}
	}
	

	
	function seleccionarMunicipios()
	{
		$consulta = parent::consulta("SELECT c_Municipio,Descripcion FROM c_Municipio WHERE c_Estado = '".$this->code."' AND c_Municipio='".$this->code1."'");
		$num_total_registros = parent::num_rows($consulta);
		if($num_total_registros>0)
		{
            $estados = array();
			while($estado = parent::fetch_assoc($consulta))
			{
				$code = $estado["c_Municipio"];
				$cve = $estado["Descripcion"];
				//$estados[$name]=$name;
                $estados[$code]=$cve;
			}
			return $estados;
		}
		else
		{
			return false;
		}
	}
}



function cargarCodigoPostal()
	{
		$consulta = parent::consulta("SELECT c_CodigoPostal FROM c_CodigoPostal ORDER BY c_CodigoPostal ASC");
		$num_total_registros = parent::num_rows($consulta);
		if($num_total_registros>0)
		{
			$CodigoPostal = array();
			while($CP = parent::fetch_assoc($consulta))
			{
				$code = $CP["c_CodigoPostal"];
				$CodigoPostal[$code]=$name;
			}
			return $CodigoPostal;
		}
		else
		{
			return false;
		}
	}

	function cargarPais()
	{
		$consulta = parent::consulta("SELECT c_Pais, Descripci_n FROM c_Pais WHERE c_Pais !='MEX' ORDER BY id_pais ASC");
		$num_total_registros = parent::num_rows($consulta);
		if($num_total_registros>0)
		{
			$Paises = array();
			while($pais = parent::fetch_assoc($consulta))
			{
				$code = $pais["c_Pais"];
				$name = $pais["Descripci_n"];
				$Paises[$code]=$name;
			}
			return $Paises;
		}
		else
		{
			return false;
		}
	}
?>
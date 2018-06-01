<?php 
error_reporting(E_ALL);
 class AccesoDatos{
 private $oConexion=null; 
	
     	function conectar(){
		$bRet = false;
			try{
				$this->oConexion = new PDO("pgsql:dbname=AppDental; host=localhost; user=postgres; password=cristovive"); 
				$bRet = true;
			}catch(Exception $e){
				throw $e;
			}
			return $bRet;
		}
		
     	function desconectar(){
		$bRet = true;
			if ($this->oConexion != null){
				$this->oConexion=null;
			}
			return $bRet;
		}
		
		
      	function ejecutarConsulta($psConsulta){
		$arrRS = null;
		$rst = null;
		$oLinea = null;
		$sValCol = "";
		$i=0;
		$j=0;
			if ($psConsulta == ""){
		       throw new Exception("AccesoDatos->ejecutarConsulta: falta indicar la consulta");
			}
			if ($this->oConexion == null){
				throw new Exception("AccesoDatos->ejecutarConsulta: falta conectar la base");
			}
			try{
				$rst = $this->oConexion->query($psConsulta); 
			}catch(Exception $e){
				throw $e;
			}
			if ($rst){
				foreach($rst as $oLinea){ 
					foreach($oLinea as $llave=>$sValCol){
						if (is_string($llave)){
							$arrRS[$i][$j] = $sValCol;
							$j++;
						}
					}
					$j=0;
					$i++;
				}
			}
			return $arrRS;
		}
		
      	function ejecutarComando($psComando){
		$nAfectados = -1;
	       if ($psComando == ""){
		       throw new Exception("AccesoDatos->ejecutarComando: falta indicar el comando");
			}
			if ($this->oConexion == null){
				throw new Exception("AccesoDatos->ejecutarComando: falta conectar la base");
			}
			try{
	       	   $nAfectados =$this->oConexion->exec($psComando);
			}catch(Exception $e){
				throw $e;
			}
			return $nAfectados;
		}
	}
 ?>
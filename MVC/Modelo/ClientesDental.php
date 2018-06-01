    <?php

include_once("AccesoDatos.php");
include_once("Usuario.php");
class ClientesDental extends Usuario{	
	function insertar(){
	$oAccesoDatos=new AccesoDatos();
	$sQuery="";
	$nAfectados=-1;
		if ($this->Nombre == "" OR $this->ApellidoP == "" OR 
		    $this->ApellidoM == "" OR $this->Sexo == "" OR $this->Correo=="" OR $this->Ciudad=="" OR $this->Estado==""
		    OR $this->Tel=="" OR $this->Edad==""
		    OR $this->Usuario=="" OR $this->Contraseña=="")
			throw new Exception("ClientesDental->insertar(): faltan datos");
		else{
			if ($oAccesoDatos->conectar()){
		 		$sQuery = "INSERT INTO usuario (apellidom,apellidop,contraseña,correo,edad,estado,nombre,sexo,telefono,usuario,ciudad) 
					VALUES 
					('".$this->ApellidoP."',
					'".$this->ApellidoM."',
					'".$this->Contraseña."',
					'".$this->Correo."',
					'".$this->Edad."',
					'".$this->Estado."',
					'".$this->Nombre."',
					'".$this->Sexo."',
					'".$this->Tel."',
					'".$this->Usuario."',
					'".$this->Ciudad."');";
				$nAfectados = $oAccesoDatos->ejecutarComando($sQuery);
				$oAccesoDatos->desconectar();	
			}
		}
		return $nAfectados;
	}
	function insertarcita(){
	$oAccesoDatos=new AccesoDatos();
	$sQuery="";
	$nAfectados=-1;
		if ($this->Fecha == null OR $this->Hora == "" OR 
		    $this->TipoC == "" 
		    OR $this->Usuario=="")
			throw new Exception("ClientesDental->insertarcita(): faltan datos");
		else{
			if ($oAccesoDatos->conectar()){
		 		$sQuery = "INSERT INTO citas (usuario,fecha_solicitud,hora,tipo_cita) 
					VALUES
					('".$this->Usuario."',
					'".$this->Fecha->format('Y-m-d')."',
					'".$this->Hora."',
					'".$this->TipoC."');";
				$nAfectados = $oAccesoDatos->ejecutarComando($sQuery);
				$oAccesoDatos->desconectar();	
			}
		}
		return $nAfectados;
	}
    function insertarnoticia(){
	$oAccesoDatos=new AccesoDatos();
	$sQuery="";
	$nAfectados=-1;
		if ($this->Titulo == "" OR $this->Noticia == "" OR 
		    $this->Imagen == "")
			throw new Exception("ClientesDental->insertarnoticia(): faltan datos");
		else{
			if ($oAccesoDatos->conectar()){
		 		$sQuery = "INSERT INTO noticias (titulo,noticia,imagen) 
					VALUES
					('".$this->Titulo."',
					'".$this->Noticia."',
					'".$this->Imagen."');";
				$nAfectados = $oAccesoDatos->ejecutarComando($sQuery);
				$oAccesoDatos->desconectar();	
			}
		}
		return $nAfectados;
	}
    function insertartratamiento(){
	$oAccesoDatos=new AccesoDatos();
	$sQuery="";
	$nAfectados=-1;
		if ($this->Titulo == "" OR $this->Tratamiento == "" OR 
		    $this->Imagen == "")
			throw new Exception("ClientesDental->insertartratamiento(): faltan datos");
		else{
			if ($oAccesoDatos->conectar()){
		 		$sQuery = "INSERT INTO tratamientos (titulo,tratamiento,imagen) 
					VALUES
					('".$this->Titulo."',
					'".$this->Tratamiento."',
					'".$this->Imagen."');";
				$nAfectados = $oAccesoDatos->ejecutarComando($sQuery);
				$oAccesoDatos->desconectar();	
			}
		}
		return $nAfectados;
	}
    function modificarnoticia(){
	$oAccesoDatos=new AccesoDatos();
	$sQuery="";
	$nAfectados=-1;
	echo $_SESSION['IDNO'];
	echo $_POST['noticia'];
	echo $_POST['titulo'];
	echo $_SESSION['imgN'];

		if ($this->Titulo == "" OR $this->Noticia == "" OR 
		    $this->Imagen == "")
			throw new Exception("ClientesDental->modificarnoticia(): faltan datos");
		else{
			if ($oAccesoDatos->conectar()){
		 		$sQuery = "UPDATE noticias 
					SET titulo= '".$this->Titulo."' , 
					noticia= '".$this->Noticia."' , 
					imagen = '".$this->Imagen."'
					WHERE id_noticia = '".$this->IdN."' ";
				$nAfectados = $oAccesoDatos->ejecutarComando($sQuery);
				$oAccesoDatos->desconectar();
			}
		}
		return $nAfectados;
     
	}
	function modificartratamiento(){
	$oAccesoDatos=new AccesoDatos();
	$sQuery="";
	$nAfectados=-1;
		if ($this->Titulo == "" OR $this->Tratamiento == "" OR  
		    $this->Imagen == "")
			throw new Exception("ClientesDental->modificartratamiento(): faltan datos");
		else{
			if ($oAccesoDatos->conectar()){
		 		$sQuery = "UPDATE tratamientos 
					SET titulo= '".$this->Titulo."' , 
					tratamiento= '".$this->Tratamiento."' , 
					imagen = '".$this->Imagen."'
					WHERE id_tratamiento = '".$this->IdT."' ";
					$nAfectados = $oAccesoDatos->ejecutarComando($sQuery);
				$oAccesoDatos->desconectar();
			}
		}
		return $nAfectados;
	}
    function buscarTodos(){
	$oAccesoDatos=new AccesoDatos();
	$sQuery="";
	$arrRS=null;
	$aLinea=null;
	$j=0;
	$oPersHosp=null;
	$arrResultado=false;
		if ($oAccesoDatos->conectar()){
		 	$sQuery = "SELECT id_noticia,titulo, noticia, imagen 
				FROM noticias 
			ORDER BY id_noticia";
			$arrRS = $oAccesoDatos->ejecutarConsulta($sQuery);
			$oAccesoDatos->desconectar();
			if ($arrRS){
				foreach($arrRS as $aLinea){
					$oPersHosp = new ClientesDental();
					$oPersHosp->setIdN($aLinea[0]);
					$oPersHosp->setTitulo($aLinea[1]);
					$oPersHosp->setNoticia($aLinea[2]);
					$oPersHosp->setImagen($aLinea[3]);
            		$arrResultado[$j] = $oPersHosp;
					$j=$j+1;
                }
			}
			else
				$arrResultado = false;
        }
		return $arrResultado;
	}
	function buscarTodos2(){
	$oAccesoDatos=new AccesoDatos();
	$sQuery="";
	$arrRS=null;
	$aLinea=null;
	$j=0;
	$oPersHosp=null;
	$arrResultado=false;
		if ($oAccesoDatos->conectar()){
		 	$sQuery = "SELECT id_tratamiento,titulo, tratamiento, imagen 
				FROM tratamientos 
				ORDER BY id_tratamiento";
			$arrRS = $oAccesoDatos->ejecutarConsulta($sQuery);
			$oAccesoDatos->desconectar();
			if ($arrRS){
				foreach($arrRS as $aLinea){
					$oPersHosp = new ClientesDental();
					$oPersHosp->setIdT($aLinea[0]);
					$oPersHosp->setTitulo($aLinea[1]);
					$oPersHosp->setTratamiento($aLinea[2]);
					$oPersHosp->setImagen($aLinea[3]);
            		$arrResultado[$j] = $oPersHosp;
					$j=$j+1;
                }
			}
			else
				$arrResultado = false;
        }
		return $arrResultado;
	}   
    function borrar(){
	$oAccesoDatos=new AccesoDatos();
	$sQuery="";
	$nAfectados=-1;
		if ($this->IdN==0)
			throw new Exception("ClientesDental->borrar(): faltan datos");
		else{
			if ($oAccesoDatos->conectar()){
		 		$sQuery = "DELETE FROM noticias 
							WHERE id_noticia = ".$this->IdN;
				$nAfectados = $oAccesoDatos->ejecutarComando($sQuery);
				$oAccesoDatos->desconectar();
			}
		}
		return $nAfectados;
	}
	function borrar2(){
	$oAccesoDatos=new AccesoDatos();
	$sQuery="";
	$nAfectados=-1;
		if ($this->IdT==0)
			throw new Exception("ClientesDental->borrar2(): faltan datos");
		else{
			if ($oAccesoDatos->conectar()){
		 		$sQuery = "DELETE FROM tratamientos 
							WHERE id_tratamiento = ".$this->IdT;
				$nAfectados = $oAccesoDatos->ejecutarComando($sQuery);
				$oAccesoDatos->desconectar();
			}
		}
		return $nAfectados;
	}
	function buscar(){
	$oAccesoDatos=new AccesoDatos();
	$sQuery="";
	$arrRS=null;
	$bRet = false;
		if ($this->IdT==0)
			throw new Exception("ClientesDental->buscar(): faltan datos");
		else{
			if ($oAccesoDatos->conectar()){
		 		$sQuery = " SELECT titulo, tratamiento, imagen
							FROM tratamientos
							WHERE id_tratamiento = ".$this->IdT;
				$arrRS = $oAccesoDatos->ejecutarConsulta($sQuery);
				$oAccesoDatos->desconectar();
				if ($arrRS){
					$this->Titulo = $arrRS[0][0];
					$this->Tratamiento = $arrRS[0][1];
					$this->Imagen = $arrRS[0][2];
					$bRet = true;
				}
			} 
		}
		return $bRet;
	}
	function buscar2(){
	$oAccesoDatos=new AccesoDatos();
	$sQuery="";
	$arrRS=null;
	$bRet = false;
		if ($this->IdN==0)
			throw new Exception("ClientesDental->buscar2(): faltan datos");
		else{
			if ($oAccesoDatos->conectar()){
		 		$sQuery = " SELECT titulo, noticia, imagen
							FROM noticias
							WHERE id_noticia = ".$this->IdN;
				$arrRS = $oAccesoDatos->ejecutarConsulta($sQuery);
				$oAccesoDatos->desconectar();
				if ($arrRS){
					$this->Titulo = $arrRS[0][0];
					$this->Noticia = $arrRS[0][1];
					$this->Imagen = $arrRS[0][2];
					$bRet = true;
				}
			} 
		}
		return $bRet;
	}
}?>
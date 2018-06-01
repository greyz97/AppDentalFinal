<?php
class Usuario{
	protected $Nombre="";
	protected $ApellidoP="";
	protected $ApellidoM="";
	protected $Correo="";
	protected $Sexo="";
  protected $Ciudad="";
  protected $Estado="";
  protected $Edad="";
  protected $Tel="";
  protected $Usuario="";
  protected $Contraseña="";
    protected $Fecha=null;
    protected $Hora="";
    protected $TipoC="";
        protected $Id=null;
protected $Titulo="";
protected $Noticia="";
protected $Imagen="";
protected $Tratamiento="";
protected $IdN="";
protected $IdT="";
    function setTitulo($psTitulo){
       $this->Titulo = $psTitulo;
    }
    function getTitulo(){
       return $this->Titulo;
    }
    function setImagen($psImagen){
       $this->Imagen = $psImagen;
    }
    function getImagen(){
       return $this->Imagen;
    }   
    function setNoticia($psNoticia){
       $this->Noticia = $psNoticia;
    }
    function getNoticia(){
       return $this->Noticia;
    }
    function setTratamiento($psTratamiento){
       $this->Tratamiento = $psTratamiento;
    }
    function getTratamiento(){
       return $this->Tratamiento;
    }
    function setTipoC($psTipoc){
       $this->TipoC = $psTipoc;
    }
    function getTipoC(){
       return $this->TipoC;
    }
    function setIdN($psIdN){
       $this->IdN = $psIdN;
    }
    function getIdN(){
       return $this->IdN;
    }
    function setIdT($psIdT){
       $this->IdT = $psIdT;
    }
    function getIdT(){
       return $this->IdT;
    }
    function setId($psId){
       $this->Id = $psId;
    }
    function getId(){
       return $this->Id;
    }
    function setNombre($psNombre){
       $this->Nombre = $psNombre;
    }
    function getNombre(){
       return $this->Nombre;
    }
    function setHora($psHora){
       $this->Hora = $psHora;
    }
    function getHora(){
       return $this->Hora;
    }
    function setFecha($psFecha){
       $this->Fecha = $psFecha;
    }
    function getFecha(){
       return $this->Fecha;
    }
   
    function setApellidoP($psApePat){
       $this->ApellidoP = $psApePat;
    }   
    function getApellidoP(){
       return $this->ApellidoP;
    }
   
    function setApellidoM($psApeMat){
       $this->ApellidoM = $psApeMat;
    }
    function getApellidoM(){
       return $this->ApellidoM;
    }
   
    function setCorreo($pCorreo){
       $this->Correo = $pCorreo;
    }
    function getCorreo(){
       return $this->Correo;
    }
   
    function setSexo($pSexo){
       $this->Sexo = $pSexo;
    }
    function getSexo(){
       return $this->Sexo;
    }
	
    function setEdad($pEdad){
       $this->Edad = $pEdad;
    }
    function getEdad(){
       return $this->Edad;
    }
    function setCiudad($pCiudad){
       $this->Ciudad = $pCiudad;
    }
    function getCiudad(){
       return $this->Ciudad;
    }
    function setEstado($pEstado){
       $this->Estado = $pEstado;
    }
    function getEstado(){
       return $this->Estado;
    }
    function setUsuario($pUsuario){
       $this->Usuario = $pUsuario;
    }
    function getUsuario(){
       return $this->Usuario;
    }
    function setTel($pTel){
       $this->Tel = $pTel;
    }
    function getTel(){
       return $this->Tel;
    }
    function setContraseña($pContraseña){
       $this->Contraseña = $pContraseña;
    }
    function getContraseña(){
       return $this->Contraseña;
    }

	function getNombreCompleto(){
		return $this->ApellidoP." ".$this->ApellidoM." ".$this->Nombre;
	}
}
?>
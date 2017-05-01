<?php
	class Usuario{
		private $dni;
		private $nombre;
		private $apellidos;
		private $pass;
		private $email;
		private $fecha;
		private $tel;
		private $movil;
		private $tipo;
		private $avatar;
		public function setDni($dni){
			$this->dni=$dni;
		}
		public function getDni(){
			return $this->dni;
		}
		public function setNombre($nombre){
			$this->nombre=$nombre;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setApellidos($apellidos){
			$this->apellidos=$apellidos;
		}
		public function getApellidos(){
			return $this->apellidos;
		}
		public function setPass($pass){
			$this->pass=$pass;
		}
		public function getPass(){
			return $this->pass;
		}
		public function setEmail($email){
			$this->email=$email;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setFecha($fecha){
			$this->fecha=$fecha;
		}
		public function getFecha(){
			return $this->fecha;
		}
		public function setTel($tel){
			$this->tel=$tel;
		}
		public function getTel(){
			return $this->tel;
		}
		public function setMovil($movil){
			$this->movil=$movil;
		}
		public function getMovil(){
			return $this->movil;
		}
		public function setTipo($tipo){
			$this->tipo=$tipo;
		}
		public function getTipo(){
			return $this->tipo;
		}
		public function setAvatar($avatar){
			$this->avatar=$avatar;
		}
		public function getAvatar(){
			return $this->avatar;
		}
	}
/*
	class Barco{
		private $matricula;
		private $nombre;
		private $eslora;
		private $manga;
		private $fotos;
		public function setMatricula($matricula){
			$this->matricula=$matricula;
		}
		public function getMatricula(){
			return $this->matricula;
		}
		public function setNombre($nombre){
			$this->nombre=$nombre;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setEslora($eslora){
			$this->eslora=$eslora;
		}
		public function getEslora(){
			return $this->eslora;
		}
		public function setManga($manga){
			$this->manga=$manga;
		}
		public function getManga(){
			return $this->manga;
		}
		public function setFotos($fotos){
			$this->fotos=$fotos;
		}
		public function getFotos(){
			return $this->fotos;
		}
	}
*/

?>
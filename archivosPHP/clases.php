<?php
	class consultasBD
	{
		private $host = "localhost";
		private $usuario = "root";
		private $clave = "10091994";
		private $db = "trabajofinal";
		public $conexion;

		//Conectar con la base de datos
		public function __construct()
		{
			$this->conexion = new mysqli($this->host, $this->usuario, $this->clave,$this->db) or die(mysql_error());
			$this->conexion->set_charset("utf8");
		}

		//Seleccionar en base a una condicion
		public function buscar($tabla, $condicion)
		{
			$resultado = $this->conexion->query("SELECT * FROM $tabla WHERE $condicion") or die($this->conexion->error);
			if ($resultado) {
				return $resultado->fetch_all(MYSQLI_ASSOC);
			}
			return false;
		}

		//Seleccionar toda la tabla
		public function buscar2($tabla)
		{
			$resultado = $this->conexion->query("SELECT * FROM $tabla") or die($this->conexion->error);
			if ($resultado) {
				return $resultado->fetch_all(MYSQLI_ASSOC);
			}
			return false;
		}

		//Seleccionar ultimas cinco
		public function buscar3($tabla)
		{
			$resultado = $this->conexion->query("SELECT * FROM $tabla ORDER BY Id DESC LIMIT 5") or die($this->conexion->error);
			if ($resultado) {
				return $resultado->fetch_all(MYSQLI_ASSOC);
			}
			return false;
		}

		//Insertar
		public function insertar($tabla, $datos)
		{
			$resultado = $this->conexion->query("INSERT INTO $tabla VALUES ($datos)") or die($this->conexion->error);
			if ($resultado) {
				return true;
			}
			return false;
		}

		//Modificar
		public function actualizar($tabla, $campos, $condicion)
		{    
			$resultado = $this->conexion->query("UPDATE $tabla SET $campos WHERE $condicion") or die($this->conexion->error);
			if ($resultado) {
				return true;
			}
			return false;        
		}

		//Borrar
		public function borrar($tabla, $condicion)
		{    
			$resultado = $this->conexion->query("DELETE FROM $tabla WHERE $condicion") or die($this->conexion->error);
			if ($resultado) {
				return true;
			}
			return false;        
		}
	}
?>
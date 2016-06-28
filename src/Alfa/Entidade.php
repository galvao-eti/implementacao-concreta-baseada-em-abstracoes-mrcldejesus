<?php
namespace Alfa;

abstract class Entidade implements Abstracao\Entidade{

	public static $dependencia;

	public function __construct(BaseDeDados $base){

		self::$dependencia = $base;
	}

	public function create($colunas, $valores){

			$entidade = $this->getNome();
			$colunas = array_keys($atributos);
			$valores = array_values($atributos);
			
			$sql = "INSERT INTO $entidade (" . implode(',', $colunas) . ") Values ('" . implode("','", $valores) . "')";

			if (!mysqli_query(self::$dependencia->conexao, $sql)) 
			{
				throw new \Exception(mysqli_error(self::$dependencia->conexao));
			}
		}
		
    public function retrieve($colunas, $clausula){

    		$entidade = $this->getNome();
			$colunas = array_keys($atributos);
			$valores = array_values($atributos);

			$sql = "SELECT $colunas FROM $entidade" . "$clausula";

			if (!mysqli_query(self::$dependencia->conexao, $sql)) 
			{
				throw new \Exception(mysqli_error(self::$dependencia->conexao));
			}

    }

    public function update($colunas, $valores, $clausula){

    		$entidade = $this->getNome();
			$colunas = array_keys($atributos);
			$valores = array_values($atributos);

			$sql = "UPDATE $entidade SET $colunas = $valores WHERE $clausula";

			if (!mysqli_query(self::$dependencia->conexao, $sql)) 
			{
				throw new \Exception(mysqli_error(self::$dependencia->conexao));
			}
    }

    public function delete($clausula){

    		$entidade = $this->getNome();
			$colunas = array_keys($atributos);
			$valores = array_values($atributos);

			$sql = "DELETE FROM $entidade WHERE id in ($clausula)";

			if (!mysqli_query(self::$dependencia->conexao, $sql)) 
			{
				throw new \Exception(mysqli_error(self::$dependencia->conexao));
			}
    }

    public function setNome($nome){

    	$this->nome = $nome;
    
    }

    public function getNome(){

    	return $this->nome;

    }
}

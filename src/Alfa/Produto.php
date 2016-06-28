<?php 
namespace Alfa;

class Produto extends Entidade{

	public static $id;
	public $nome;
	public $preco;
	public static $dependencia;

	public function __construct(BaseDeDados $base)
	{
		self::$dependencia = $base;
	} 

	public function setId($id)
	{
		self::$id = $id;
	}

	public function getId()
	{
		return self::$id;
	}	
	
}
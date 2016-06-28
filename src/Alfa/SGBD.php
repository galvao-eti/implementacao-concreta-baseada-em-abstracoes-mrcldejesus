<?php
namespace Alfa;

class SGBD implements Abstracao\SGBD{

	protected $endereco;
	protected $porta;
	public $usuario;
	public $senha;
	public $tipo;

	public function __get($nome)
	{
		return $this->$nome;
	}

	public function __set($nome, $valor)
	{
		$this->$nome = $valor;
	}

	function __construct($tipo)
	{
		$this->tipo = $tipo;
	}

	public function setEndereco($endereco)
	{
		$this->endereco = $endereco;
	}

	public function getEndereco()
	{
		return $this->endereco;
	}

	public function setPorta($porta)
	{
		if(is_numeric($porta)){
			$this->porta = $porta;
		}
	}

	public function getPorta()
	{
		return $this->porta;
	}

	public function setUsuario($usuario)
	{
		$this->usuario = $usuario;
	}

	public function getUsuario()
	{
		return $this->usuario;
	}

	public function setSenha($senha)
	{
		$this->senha = $senha;
	}

	public function getSenha()
	{
		return $this->senha;
	}
}

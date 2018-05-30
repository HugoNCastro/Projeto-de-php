<?php

class Produto {

	private $id;
	private $nome;
	private $preco;
	private $descricao;
	private $categoria;
	private $usado;

	public function getId()
	{
		return $this->$id;
	}
	public function setId($id)
	{
		return $this->$id = $id;
	}



	public function getNome()
	{
		return $this->$nome;
	}

	public function setNome($nome)
	{
		return $this->$id = $id;
	}



	public function getPreco()
	{
		return $this->$preco;
	}
	public function setPreco($preco)
	{
		return $this->$preco = $preco;
	}


	public function getDescricao()
	{
		return $this->$descricao;
	}
	public function setDescricao($descricao)
	{
		return $this->$descricao = $descricao;
	}


	public function getCategoria()
	{
		return $this->$categoria;
	}
	public function setCategoria($categoria)
	{
		return $this->$categoria = $categoria;
	}


	public function getUsado()
	{
		return $this->$usado;
	}
	public function setUsado($usado)
	{
		return $this->$usado = $usado;
	}
	
	public function precoComDesconto($valor = 0.6){
		if ($valor >= 0 && $valor <= 0.5) {
			return $this->preco - ($this->preco * $valor);
		}else{
			$texto = "Desconto inválido";
			?>
			<p class="alert-danger form-control"><?=$texto?></p>
	<?php  
		}
		
	}


}

?>
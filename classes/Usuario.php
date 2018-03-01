<?php 
require_once('DB.php');

class Usuario{

	protected $table = 'informacoes';

	private $nome;
	private $loja;
	private $pedido;
	private $quantidade;
	private $descricao;
	private $img;
	private $data;
	private $status;
	private $orders;

	public function insert()
	{
		$sql = "INSERT INTO $this->table (nome, loja, pedido, quantidade, descricao, img, data, status, orders) VALUES (:nome, :loja, :pedido, :quantidade, :descricao, :img, :data, :status, :orders)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':loja', $this->loja);
		$stmt->bindParam(':pedido', $this->pedido);
		$stmt->bindParam(':quantidade', $this->quantidade);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':img', $this->img);
		$stmt->bindParam(':data', $this->data);
		$stmt->bindParam(':status', $this->status);
		$stmt->bindParam(':orders', $this->orders);
		return $stmt->execute();
	}

	public function update($id)
	{
		$sql = "UPDATE $this->table SET status = :status, orders = :orders WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':status', $this->status);
		$stmt->bindParam(':orders', $this->orders);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}


	public function findAll()
	{
		$sql = "SELECT * FROM $this->table ORDER BY orders";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}


	public function findSts()
	{
		$sql = "SELECT * FROM $this->table ORDER BY orders";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}


	public function findNome()
	{
		$sql = "SELECT * FROM $this->table ORDER BY nome";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}


	public function findLoja()
	{
		$sql = "SELECT * FROM $this->table ORDER BY loja";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}


	public function findPedido()
	{
		$sql = "SELECT * FROM $this->table ORDER BY pedido";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}


	public function find($id)
	{
		$sql = "SELECT * FROM $this->table WHERE id = $id";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		return $this->nome = $nome;
	}

	public function getLoja()
	{
		return $this->loja;
	}

	public function setLoja($loja)
	{
		return $this->loja = $loja;
	}


	public function getPedido()
	{
		return $this->pedido;
	}

	public function setPedido($pedido)
	{
		return $this->pedido = $pedido;
	}


	public function getQuantidade()
	{
		return $this->quantidade;
	}

	public function setQuantidade($quantidade)
	{
		return $this->quantidade = $quantidade;
	}

	public function getDescricao()
	{
		return $this->descricao;
	}

	public function setDescricao($descricao)
	{
		return $this->descricao = $descricao;
	}


	public function getImg()
	{
		return $this->img;
	}

	public function setImg($img)
	{
		return $this->img = $img;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setData($data)
	{
		return $this->data = $data;
	}


	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($status)
	{
		return $this->status = $status;
	}

	public function getOrders()
	{
		return $this->orders;
	}

	public function setOrders($orders)
	{
		return $this->orders = $orders;
	}


}
?>
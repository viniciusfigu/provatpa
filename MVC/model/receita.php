<?php
class Receita{
    
    private $nome;
    private $email;
    private $titulodareceita
    private $receita;

    private $con;

    public function __construct(){
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);        
    }
    
    public function all(){
        // O MÉTOD PREPARE DA CLASS PDO ACEITA INSTRUÇÕES SQL
        $sql = $this->con->prepare("SELECT * FROM receita ORDER BY nome");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

	/**
	 * Get the value of nome
	 *
	 * @return  mixed
	 */
	public function getnome()
	{
		return $this->nome;
	}

	/**
	 * Set the value of nome
	 *
	 * @param   mixed  $nome  
	 *
	 * @return  self
	 */
	public function setnome($nome)
	{
		$this->nome = $nome;

		return $this;
	}

	/**
	 * Get the value of email
	 *
	 * @return  mixed
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Set the value of email
	 *
	 * @param   mixed  $email  
	 *
	 * @return  self
	 */
	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Get the value of nome
	 *
	 * @return  mixed
	 */
	public function gettitulodareceita()
	{
		return $this->titulodareceita;
	}

	/**
	 * Set the value of titulodareceita
	 *
	 * @param   mixed  $titulodareceita  
	 *
	 * @return  self
	 */
	public function settitulodareceita($titulodareceita)
	{
		$this->titulodareceita = $titulodareceita;

		return $this;
	}

	/**
	 * Get the value of senha
	 *
	 * @return  mixed
	 */
	public function getreceita()
	{
		return $this->receita;
	}

	/**
	 * Set the value of receita
	 *
	 * @param   mixed  $receita  
	 *
	 * @return  self
	 */
	public function setreceita($receita)
	{
		$this->receita = $receita;

		return $this;
	}
}
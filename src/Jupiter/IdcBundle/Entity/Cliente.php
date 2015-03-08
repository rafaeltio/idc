<?php

namespace Jupiter\IdcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Jupiter\IdcBundle\Entity\ClienteRepository")
 */
class Cliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=2)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="razaoSocial", type="string", length=255)
     */
    private $razaoSocial;

    /**
     * @ORM\OneToOne(targetEntity="Endereco", mappedBy="cliente")
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="telefoneFixo", type="string", length=30)
     */
    private $telefoneFixo;

    /**
     * @var string
     *
     * @ORM\Column(name="telefoneCelular1", type="string", length=30)
     */
    private $telefoneCelular1;

    /**
     * @var string
     *
     * @ORM\Column(name="telefoneCelular2", type="string", length=30)
     */
    private $telefoneCelular2;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=30)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj", type="string", length=30)
     */
    private $cnpj;

    /**
     * @ORM\OneToMany(targetEntity="OrdemServico", mappedBy="cliente")
     **/
    private $ordemServico;

    /**
     * Construtor da classe instanciando $ordemServico como uma coleção
     */
    public function __construct()
    {
        $this->ordemServico = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Cliente
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Cliente
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set razaoSocial
     *
     * @param string $razaoSocial
     * @return Cliente
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get razaoSocial
     *
     * @return string 
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set endereco
     *
     * @param \stdClass $Endereco
     * @return Cliente
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return \stdClass
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set telefoneFixo
     *
     * @param string $telefoneFixo
     * @return Cliente
     */
    public function setTelefoneFixo($telefoneFixo)
    {
        $this->telefoneFixo = $telefoneFixo;

        return $this;
    }

    /**
     * Get telefoneFixo
     *
     * @return string 
     */
    public function getTelefoneFixo()
    {
        return $this->telefoneFixo;
    }

    /**
     * Set telefoneCelular1
     *
     * @param string $telefoneCelular1
     * @return Cliente
     */
    public function setTelefoneCelular1($telefoneCelular1)
    {
        $this->telefoneCelular1 = $telefoneCelular1;

        return $this;
    }

    /**
     * Get telefoneCelular1
     *
     * @return string 
     */
    public function getTelefoneCelular1()
    {
        return $this->telefoneCelular1;
    }

    /**
     * Set telefoneCelular2
     *
     * @param string $telefoneCelular2
     * @return Cliente
     */
    public function setTelefoneCelular2($telefoneCelular2)
    {
        $this->telefoneCelular2 = $telefoneCelular2;

        return $this;
    }

    /**
     * Get telefoneCelular2
     *
     * @return string 
     */
    public function getTelefoneCelular2()
    {
        return $this->telefoneCelular2;
    }

    /**
     * Set cpf
     *
     * @param string $cpf
     * @return Cliente
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string 
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set cnpj
     *
     * @param string $cnpj
     * @return Cliente
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get cnpj
     *
     * @return string 
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function __toString(){
        return "Nome: ".$this->nome;
    }

}

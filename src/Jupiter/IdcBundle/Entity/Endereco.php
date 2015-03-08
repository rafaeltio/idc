<?php

namespace Jupiter\IdcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Endereco
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Jupiter\IdcBundle\Entity\EnderecoRepository")
 */
class Endereco
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
     * @ORM\OneToOne(targetEntity="Cliente", inversedBy="endereco")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
    **/
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="logradouro", type="string", length=255)
     */
    private $logradouro;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=30)
     */
    private $cep;

    /**
     * @ORM\ManyToOne(targetEntity="Bairro")
     * @ORM\JoinColumn(name="bairro_id", referencedColumnName="id")
    **/
    private $bairro;

    /**
     * @ORM\OneToOne(targetEntity="Cidade")
     * @ORM\JoinColumn(name="cidade_id", referencedColumnName="id")
    **/
    private $cidade;

    /**
     * @ORM\OneToOne(targetEntity="Estado")
     * @ORM\JoinColumn(name="estado_id", referencedColumnName="id")
    **/
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento", type="string", length=255)
     */
    private $complemento;


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
     * @return Endereco
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
     * Set logradouro
     *
     * @param string $logradouro
     * @return Endereco
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * Get logradouro
     *
     * @return string 
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set cep
     *
     * @param string $cep
     * @return Endereco
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return string 
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set codBairro
     *
     * @param integer $codBairro
     * @return Endereco
     */
    public function setCodBairro($codBairro)
    {
        $this->codBairro = $codBairro;

        return $this;
    }

    /**
     * Get codBairro
     *
     * @return integer 
     */
    public function getCodBairro()
    {
        return $this->codBairro;
    }

    /**
     * Set codCidade
     *
     * @param integer $codCidade
     * @return Endereco
     */
    public function setCodCidade($codCidade)
    {
        $this->codCidade = $codCidade;

        return $this;
    }

    /**
     * Get codCidade
     *
     * @return integer 
     */
    public function getCodCidade()
    {
        return $this->codCidade;
    }

    /**
     * Set complemento
     *
     * @param string $complemento
     * @return Endereco
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Get complemento
     *
     * @return string 
     */
    public function getComplemento()
    {
        return $this->complemento;
    }


    /**
     * Set cliente
     *
     * @param \stdClass $Cliente
     * @return Endereco
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \stdClass
     */
    public function getCliente()
    {
        return $this->cliente;
    }


    /**
     * Set bairro
     *
     * @param \stdClass $Bairro
     * @return Endereco
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro
     *
     * @return \stdClass
     */
    public function getBairro()
    {
        return $this->bairro;
    }


    /**
     * Set cidade
     *
     * @param \stdClass $Cidade
     * @return Endereco
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return \stdClass
     */
    public function getCidade()
    {
        return $this->cidade;
    }


    /**
     * Set estado
     *
     * @param \stdClass $Estado
     * @return Endereco
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \stdClass
     */
    public function getEstado()
    {
        return $this->estado;
    }

}

<?php

namespace Jupiter\IdcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdemServico
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Jupiter\IdcBundle\Entity\OrdemServicoRepository")
 */
class OrdemServico
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
     * @var integer
     *
     * @ORM\Column(name="codCliente", type="integer")
     */
    private $codCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="codCestaServico", type="integer")
     */
    private $codCestaServico;

    /**
     * @var integer
     *
     * @ORM\Column(name="codUsuario", type="integer")
     */
    private $codUsuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="criandoEm", type="datetime")
     */
    private $criandoEm;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="blob")
     */
    private $descricao;

    /**
     * @var float
     *
     * @ORM\Column(name="valorHora", type="float")
     */
    private $valorHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="qtdHora", type="integer")
     */
    private $qtdHora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="previsaoEntrega", type="date")
     */
    private $previsaoEntrega;


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
     * Set codCliente
     *
     * @param integer $codCliente
     * @return OrdemServico
     */
    public function setCodCliente($codCliente)
    {
        $this->codCliente = $codCliente;

        return $this;
    }

    /**
     * Get codCliente
     *
     * @return integer 
     */
    public function getCodCliente()
    {
        return $this->codCliente;
    }

    /**
     * Set codCestaServico
     *
     * @param integer $codCestaServico
     * @return OrdemServico
     */
    public function setCodCestaServico($codCestaServico)
    {
        $this->codCestaServico = $codCestaServico;

        return $this;
    }

    /**
     * Get codCestaServico
     *
     * @return integer 
     */
    public function getCodCestaServico()
    {
        return $this->codCestaServico;
    }

    /**
     * Set codUsuario
     *
     * @param integer $codUsuario
     * @return OrdemServico
     */
    public function setCodUsuario($codUsuario)
    {
        $this->codUsuario = $codUsuario;

        return $this;
    }

    /**
     * Get codUsuario
     *
     * @return integer 
     */
    public function getCodUsuario()
    {
        return $this->codUsuario;
    }

    /**
     * Set criandoEm
     *
     * @param \DateTime $criandoEm
     * @return OrdemServico
     */
    public function setCriandoEm($criandoEm)
    {
        $this->criandoEm = $criandoEm;

        return $this;
    }

    /**
     * Get criandoEm
     *
     * @return \DateTime 
     */
    public function getCriandoEm()
    {
        return $this->criandoEm;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return OrdemServico
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set valorHora
     *
     * @param float $valorHora
     * @return OrdemServico
     */
    public function setValorHora($valorHora)
    {
        $this->valorHora = $valorHora;

        return $this;
    }

    /**
     * Get valorHora
     *
     * @return float 
     */
    public function getValorHora()
    {
        return $this->valorHora;
    }

    /**
     * Set qtdHora
     *
     * @param integer $qtdHora
     * @return OrdemServico
     */
    public function setQtdHora($qtdHora)
    {
        $this->qtdHora = $qtdHora;

        return $this;
    }

    /**
     * Get qtdHora
     *
     * @return integer 
     */
    public function getQtdHora()
    {
        return $this->qtdHora;
    }

    /**
     * Set previsaoEntrega
     *
     * @param \DateTime $previsaoEntrega
     * @return OrdemServico
     */
    public function setPrevisaoEntrega($previsaoEntrega)
    {
        $this->previsaoEntrega = $previsaoEntrega;

        return $this;
    }

    /**
     * Get previsaoEntrega
     *
     * @return \DateTime 
     */
    public function getPrevisaoEntrega()
    {
        return $this->previsaoEntrega;
    }
}

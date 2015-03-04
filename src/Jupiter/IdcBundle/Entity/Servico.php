<?php

namespace Jupiter\IdcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servico
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Jupiter\IdcBundle\Entity\ServicoRepository")
 */
class Servico
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
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @ORM\ManyToOne(targetEntity="CategoriaServico", inversedBy="servico")
     * @ORM\JoinColumn(name="CategoriaServico_id", referencedColumnName="id")
     **/
    private $categoria;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Servico
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
     * Set codCategoria
     *
     * @param integer $codCategoria
     * @return Servico
     */
    public function setCodCategoria($codCategoria)
    {
        $this->codCategoria = $codCategoria;

        return $this;
    }

    /**
     * Get codCategoria
     *
     * @return integer 
     */
    public function getCodCategoria()
    {
        return $this->codCategoria;
    }

    /**
     * Set valorHora
     *
     * @param float $valorHora
     * @return Servico
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
     * @return Servico
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
}

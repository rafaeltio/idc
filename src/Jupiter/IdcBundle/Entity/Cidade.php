<?php

namespace Jupiter\IdcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cidade
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Jupiter\IdcBundle\Entity\CidadeRepository")
 */
class Cidade
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
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumn(name="estado_id", referencedColumnName="id")
    **/
    private $estado;


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
     * @return Cidade
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
     * Set uf
     *
     * @param string $uf
     * @return Cidade
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get uf
     *
     * @return string 
     */
    public function getUf()
    {
        return $this->uf;
    }
}

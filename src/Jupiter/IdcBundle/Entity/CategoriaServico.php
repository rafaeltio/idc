<?php

namespace Jupiter\IdcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriaServico
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Jupiter\IdcBundle\Entity\CategoriaServicoRepository")
 */
class CategoriaServico
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
     * @ORM\OneToMany(targetEntity="Servico", mappedBy="categoria")
     **/
    private $servico;


    public function __construct() {
        $this->servico = new ArrayCollection();
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
     * Set nome
     *
     * @param string $nome
     * @return CategoriaServico
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
}

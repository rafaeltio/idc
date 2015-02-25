<?php

namespace Jupiter\IdcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CestaDeServico
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Jupiter\IdcBundle\Entity\CestaDeServicoRepository")
 */
class CestaDeServico
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
     * @ORM\Column(name="CodCliente", type="integer")
     */
    private $codCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="CodServico", type="integer")
     */
    private $codServico;


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
     * @return CestaDeServico
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
     * Set codServico
     *
     * @param integer $codServico
     * @return CestaDeServico
     */
    public function setCodServico($codServico)
    {
        $this->codServico = $codServico;

        return $this;
    }

    /**
     * Get codServico
     *
     * @return integer 
     */
    public function getCodServico()
    {
        return $this->codServico;
    }
}

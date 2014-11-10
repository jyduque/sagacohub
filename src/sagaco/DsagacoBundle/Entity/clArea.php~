<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tb_area
 *
 * @ORM\Table(name="tb_area")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clAreaRepository")
 */
class clArea
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
     * @ORM\Column(name="co_area", type="integer")
     */
    private $coArea;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_descripcion", type="text")
     */
    private $txDescripcion;


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
     * Set coArea
     *
     * @param integer $coArea
     * @return tb_area
     */
    public function setCoArea($coArea)
    {
        $this->coArea = $coArea;

        return $this;
    }

    /**
     * Get coArea
     *
     * @return integer 
     */
    public function getCoArea()
    {
        return $this->coArea;
    }

    /**
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return tb_area
     */
    public function setTxDescripcion($txDescripcion)
    {
        $this->txDescripcion = $txDescripcion;

        return $this;
    }

    /**
     * Get txDescripcion
     *
     * @return string 
     */
    public function getTxDescripcion()
    {
        return $this->txDescripcion;
    }
}

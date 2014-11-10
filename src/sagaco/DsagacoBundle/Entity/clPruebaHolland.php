<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tb_prueba_holland
 *
 * @ORM\Table(name="tb_prueba_holland")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clPruebaHollandRepository")
 */
class clPruebaHolland
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
     * @ORM\Column(name="co_prueba_holland", type="integer")
     */
    private $coPruebaHolland;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_descripcion", type="text", nullable=true)
     */
    private $txDescripcion;

    /** @ORM\OneToOne(targetEntity="sagaco\DsagacoBundle\Entity\clPrueba") */
    protected $tp_prueba;
    
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
     * Set coPruebaHolland
     *
     * @param integer $coPruebaHolland
     * @return tb_prueba_holland
     */
    public function setCoPruebaHolland($coPruebaHolland)
    {
        $this->coPruebaHolland = $coPruebaHolland;

        return $this;
    }

    /**
     * Get coPruebaHolland
     *
     * @return integer 
     */
    public function getCoPruebaHolland()
    {
        return $this->coPruebaHolland;
    }

    /**
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return tb_prueba_holland
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
            
    /**
     * Set tp_prueba
     *
     * @param string $tp_prueba
     * @return tb_prueba_holland
     */
    public function settp_prueba($tp_prueba)
    {
        $this->tp_prueba = $tp_prueba;

        return $this;
    }
    
    /**
     * Get tp_prueba
     *
     * @return string 
     */
    public function gettp_prueba()
    {
        return $this->tp_prueba;
    }

    /**
     * Set tp_prueba
     *
     * @param \sagaco\DsagacoBundle\Entity\clPrueba $tpPrueba
     * @return clPruebaHolland
     */
    public function setTpPrueba(\sagaco\DsagacoBundle\Entity\clPrueba $tpPrueba = null)
    {
        $this->tp_prueba = $tpPrueba;

        return $this;
    }

    /**
     * Get tp_prueba
     *
     * @return \sagaco\DsagacoBundle\Entity\clPrueba 
     */
    public function getTpPrueba()
    {
        return $this->tp_prueba;
    }
}

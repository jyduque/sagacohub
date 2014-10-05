<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tb_prueba_dvi
 *
 * @ORM\Table(name="tb_prueba_dvi")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clPruebaDVIRepository")
 */
class clPruebaDVI
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
     * @ORM\Column(name="co_prueba_dvi", type="integer")
     */
    private $coPruebaDvi;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_descripcion", type="text", nullable=true)
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
    
    /** @ORM\OneToOne(targetEntity="sagaco\DsagacoBundle\Entity\clPrueba") */
    protected $tp_prueba;
    
    /**
     * Set coPruebaDvi
     *
     * @param integer $coPruebaDvi
     * @return tb_prueba_dvi
     */
    public function setCoPruebaDvi($coPruebaDvi)
    {
        $this->coPruebaDvi = $coPruebaDvi;

        return $this;
    }

    /**
     * Get coPruebaDvi
     *
     * @return integer 
     */
    public function getCoPruebaDvi()
    {
        return $this->coPruebaDvi;
    }

    /**
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return tb_prueba_dvi
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
     * @return tb_prueba_dvi
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
}

<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tb_prueba_angelini
 *
 * @ORM\Table(name="tb_prueba_angelini")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clPruebaAngeliniRepository")
 */
class clPruebaAngelini
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
     * @ORM\Column(name="co_prueba_angelini", type="integer")
     */
    private $coPruebaAngelini;

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
     * Set coPruebaAngelini
     *
     * @param integer $coPruebaAngelini
     * @return tb_prueba_angelini
     */
    public function setCoPruebaAngelini($coPruebaAngelini)
    {
        $this->coPruebaAngelini = $coPruebaAngelini;

        return $this;
    }

    /**
     * Get coPruebaAngelini
     *
     * @return integer 
     */
    public function getCoPruebaAngelini()
    {
        return $this->coPruebaAngelini;
    }

    /**
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return tb_prueba_angelini
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
     * @return tb_prueba_angelini
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

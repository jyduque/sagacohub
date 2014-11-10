<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tp_prueba
 *
 * @ORM\Table(name="tp_prueba")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clPruebaRepository")
 */
class clPrueba
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
     * @ORM\Column(name="co_prueba", type="integer")
     */
    private $coPrueba;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_tipo_prueba", type="string", length=8)
     */
    private $txTipoPrueba;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_descripcion", type="text", nullable=true)
     */
    private $txDescripcion;
    
    /** @ORM\ManyToOne(targetEntity="sagaco\DsagacoBundle\Entity\clPersona") */
    protected $tb_persona;

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
     * Set coPrueba
     *
     * @param integer $coPrueba
     * @return tp_prueba
     */
    public function setCoPrueba($coPrueba)
    {
        $this->coPrueba = $coPrueba;

        return $this;
    }

    /**
     * Get coPrueba
     *
     * @return integer 
     */
    public function getCoPrueba()
    {
        return $this->coPrueba;
    }

    /**
     * Set txTipoPrueba
     *
     * @param string $txTipoPrueba
     * @return tp_prueba
     */
    public function setTxTipoPrueba($txTipoPrueba)
    {
        $this->txTipoPrueba = $txTipoPrueba;

        return $this;
    }

    /**
     * Get txTipoPrueba
     *
     * @return string 
     */
    public function getTxTipoPrueba()
    {
        return $this->txTipoPrueba;
    }

    /**
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return tp_prueba
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
     * Set tb_persona
     *
     * @param string $tb_persona
     * @return tp_prueba
     */
    public function settb_persona($tb_persona)
    {
        $this->tb_persona = $tb_persona;

        return $this;
    }
    
    /**
     * Get tb_persona
     *
     * @return string 
     */
    public function gettb_persona()
    {
        return $this->tb_persona;
    }
}

<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tb_motivo_consulta
 *
 * @ORM\Table(name="tb_motivo_consulta")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clMotivoConsultaRepository")
 */
class clMotivoConsulta
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
     * @ORM\Column(name="co_motivo_consulta", type="integer")
     */
    private $coMotivoConsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_motivo_consulta", type="text")
     */
    private $txMotivoConsulta;

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

    /** @ORM\ManyToOne(targetEntity="sagaco\DsagacoBundle\Entity\clArea") */
    protected $tb_area;
    
    /**
     * Set coMotivoConsulta
     *
     * @param integer $coMotivoConsulta
     * @return tb_motivo_consulta
     */
    public function setCoMotivoConsulta($coMotivoConsulta)
    {
        $this->coMotivoConsulta = $coMotivoConsulta;

        return $this;
    }

    /**
     * Get coMotivoConsulta
     *
     * @return integer 
     */
    public function getCoMotivoConsulta()
    {
        return $this->coMotivoConsulta;
    }

    /**
     * Set txMotivoConsulta
     *
     * @param string $txMotivoConsulta
     * @return tb_motivo_consulta
     */
    public function setTxMotivoConsulta($txMotivoConsulta)
    {
        $this->txMotivoConsulta = $txMotivoConsulta;

        return $this;
    }

    /**
     * Get txMotivoConsulta
     *
     * @return string 
     */
    public function getTxMotivoConsulta()
    {
        return $this->txMotivoConsulta;
    }

    /**
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return tb_motivo_consulta
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
     * Set tb_area
     *
     * @param string $tb_area
     * @return tp_motivo_consulta
     */
    public function settb_area($tb_area)
    {
        $this->tb_area = $tb_area;

        return $this;
    }
    
    /**
     * Get tb_area
     *
     * @return string 
     */
    public function gettb_area()
    {
        return $this->tb_area;
    }
}

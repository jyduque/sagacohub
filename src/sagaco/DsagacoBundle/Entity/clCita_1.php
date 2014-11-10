<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tp_cita
 *
 * @ORM\Table(name="tp_cita")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clCitaRepository")
 */
class clCita
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
     * @ORM\Column(name="co_cita", type="integer")
     */
    private $coCita;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_dia", type="string", length=9)
     */
    private $txDia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ho_inicio", type="time")
     */
    private $hoInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ho_fin", type="time")
     */
    private $hoFin;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_descripcion", type="text", nullable=true)
     */
    private $txDescripcion;
    
    /** @ORM\ManyToOne(targetEntity="sagaco\DsagacoBundle\Entity\clHorario") */
    protected $tb_horario;
    
    /** @ORM\ManyToOne(targetEntity="sagaco\DsagacoBundle\Entity\clMotivoConsulta") */
    protected $tb_motivo_consulta;
    
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
     * Set coCita
     *
     * @param integer $coCita
     * @return tp_cita
     */
    public function setCoCita($coCita)
    {
        $this->coCita = $coCita;

        return $this;
    }

    /**
     * Get coCita
     *
     * @return integer 
     */
    public function getCoCita()
    {
        return $this->coCita;
    }

    /**
     * Set txDia
     *
     * @param string $txDia
     * @return tp_cita
     */
    public function setTxDia($txDia)
    {
        $this->txDia = $txDia;

        return $this;
    }

    /**
     * Get txDia
     *
     * @return string 
     */
    public function getTxDia()
    {
        return $this->txDia;
    }

    /**
     * Set hoInicio
     *
     * @param \DateTime $hoInicio
     * @return tp_cita
     */
    public function setHoInicio($hoInicio)
    {
        $this->hoInicio = $hoInicio;

        return $this;
    }

    /**
     * Get hoInicio
     *
     * @return \DateTime 
     */
    public function getHoInicio()
    {
        return $this->hoInicio;
    }

    /**
     * Set hoFin
     *
     * @param \DateTime $hoFin
     * @return tp_cita
     */
    public function setHoFin($hoFin)
    {
        $this->hoFin = $hoFin;

        return $this;
    }

    /**
     * Get hoFin
     *
     * @return \DateTime 
     */
    public function getHoFin()
    {
        return $this->hoFin;
    }

    /**
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return tp_cita
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
     * Set tb_horario
     *
     * @param string $tb_horario
     * @return tp_cita
     */
    public function settb_horario($tb_horario)
    {
        $this->tb_horario = $tb_horario;

        return $this;
    }
    
    /**
     * Get tb_horario
     *
     * @return string 
     */
    public function gettb_horario()
    {
        return $this->tb_horario;
    }
            
    /**
     * Set tb_motivo_consulta
     *
     * @param string $tb_motivo_consulta
     * @return tp_cita
     */
    public function settb_motivo_consulta($tb_motivo_consulta)
    {
        $this->tb_motivo_consulta = $tb_motivo_consulta;

        return $this;
    }
    
    /**
     * Get tb_motivo_consulta
     *
     * @return string 
     */
    public function gettb_motivo_consulta()
    {
        return $this->tb_motivo_consulta;
    }
               
    /**
     * Set tb_persona
     *
     * @param string $tb_persona
     * @return tp_cita
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

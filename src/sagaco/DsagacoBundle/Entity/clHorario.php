<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tb_horario
 *
 * @ORM\Table(name="tb_horario")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clHorarioRepository")
 */
class clHorario
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
     * @ORM\Column(name="co_horario", type="integer")
     */
    private $coHorario;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_semest_actual", type="string", length=6)
     */
    private $txSemestActual;

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
     * @var boolean
     *
     * @ORM\Column(name="in_estado_disponibilidad", type="boolean")
     */
    private $inEstadoDisponibilidad;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_descripcion", type="text", nullable=true)
     */
    private $txDescripcion;
    
    /** @ORM\ManyToOne(targetEntity="sagaco\DsagacoBundle\Entity\clOrientador") */
    protected $tb_orientador;

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
     * Set coHorario
     *
     * @param integer $coHorario
     * @return tb_horario
     */
    public function setCoHorario($coHorario)
    {
        $this->coHorario = $coHorario;

        return $this;
    }

    /**
     * Get coHorario
     *
     * @return integer 
     */
    public function getCoHorario()
    {
        return $this->coHorario;
    }

    /**
     * Set txSemestActual
     *
     * @param string $txSemestActual
     * @return tb_horario
     */
    public function setTxSemestActual($txSemestActual)
    {
        $this->txSemestActual = $txSemestActual;

        return $this;
    }

    /**
     * Get txSemestActual
     *
     * @return string 
     */
    public function getTxSemestActual()
    {
        return $this->txSemestActual;
    }

    /**
     * Set txDia
     *
     * @param string $txDia
     * @return tb_horario
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
     * @return tb_horario
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
     * @return tb_horario
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
     * Set inEstadoDisponibilidad
     *
     * @param boolean $inEstadoDisponibilidad
     * @return tb_horario
     */
    public function setInEstadoDisponibilidad($inEstadoDisponibilidad)
    {
        $this->inEstadoDisponibilidad = $inEstadoDisponibilidad;

        return $this;
    }

    /**
     * Get inEstadoDisponibilidad
     *
     * @return boolean 
     */
    public function getInEstadoDisponibilidad()
    {
        return $this->inEstadoDisponibilidad;
    }

    /**
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return tb_horario
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
     * Set tb_orientador
     *
     * @param string $tb_orientador
     * @return tb_horario
     */
    public function settb_orientador($tb_orientador)
    {
        $this->tb_orientador = $tb_orientador;

        return $this;
    }
    
    /**
     * Get tb_orientador
     *
     * @return string 
     */
    public function gettb_orientador()
    {
        return $this->tb_orientador;
    }
}

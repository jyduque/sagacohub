<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpHorariCita
 *
 * @ORM\Table(name="e_sagaco.tp_horari_cita", indexes={@ORM\Index(name="IDX_6D71F3AF4BD8FA32", columns={"co_orientador"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clHorariCitaRepository")
 */
class clHorariCita
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_horari_cita", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_horari_cita_co_horari_cita", allocationSize=1, initialValue=1)
     */
    private $coHorariCita;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fe_horario", type="date", nullable=false)
     */
    private $feHorario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ho_inicio", type="time", nullable=false)
     */
    private $hoInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ho_fin", type="time", nullable=false)
     */
    private $hoFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_creacion", type="datetime", nullable=false)
     */
    private $fhCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_actualizacion", type="datetime", nullable=false)
     */
    private $fhActualizacion;

    /**
     * @var \ESagaco.tbOrientador
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbOrientador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_orientador", referencedColumnName="co_orientador")
     * })
     */
    private $coOrientador;



    /**
     * Get coHorariCita
     *
     * @return integer 
     */
    public function getCoHorariCita()
    {
        return $this->coHorariCita;
    }

    /**
     * Set feHorario
     *
     * @param \DateTime $feHorario
     * @return clHorariCita
     */
    public function setFeHorario($feHorario)
    {
        $this->feHorario = $feHorario;

        return $this;
    }

    /**
     * Get feHorario
     *
     * @return \DateTime 
     */
    public function getFeHorario()
    {
        return $this->feHorario;
    }

    /**
     * Set hoInicio
     *
     * @param \DateTime $hoInicio
     * @return clHorariCita
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
     * @return clHorariCita
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
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clHorariCita
     */
    public function setFhCreacion($fhCreacion)
    {
        $this->fhCreacion = $fhCreacion;

        return $this;
    }

    /**
     * Get fhCreacion
     *
     * @return \DateTime 
     */
    public function getFhCreacion()
    {
        return $this->fhCreacion;
    }

    /**
     * Set fhActualizacion
     *
     * @param \DateTime $fhActualizacion
     * @return clHorariCita
     */
    public function setFhActualizacion($fhActualizacion)
    {
        $this->fhActualizacion = $fhActualizacion;

        return $this;
    }

    /**
     * Get fhActualizacion
     *
     * @return \DateTime 
     */
    public function getFhActualizacion()
    {
        return $this->fhActualizacion;
    }

    /**
     * Set coOrientador
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbOrientador $coOrientador
     * @return clHorariCita
     */
    public function setCoOrientador(\sagaco\DsagacoBundle\Entity\clOrientador $coOrientador = null)
    {
        $this->coOrientador = $coOrientador;

        return $this;
    }

    /**
     * Get coOrientador
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbOrientador 
     */
    public function getCoOrientador()
    {
        return $this->coOrientador;
    }
}

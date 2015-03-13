<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpDetallAgendaorientador
 *
 * @ORM\Table(name="e_sagaco.tp_detall_agendaorientador", indexes={@ORM\Index(name="IDX_A2043AA0712B9E7B", columns={"co_dia_semana"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clDetallAgendaorientadorRepository")
 */
class clDetallAgendaorientador
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_detall_agendaorientador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_detall_agendaorientador_co_detall_agendaorientador", allocationSize=1, initialValue=1)
     */
    private $coDetallAgendaorientador;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ho_inicio", type="time", nullable=false)
     */
    private $hoInicio;

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
     * @var \ESagaco.tbDiaSemana
     *
     * @ORM\ManyToOne(targetEntity="clDiaSemana")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_dia_semana", referencedColumnName="co_dia_semana")
     * })
     */
    private $coDiaSemana;

     /**
     * @var \ESagaco.tpAgendaOrientador
     *
     * @ORM\ManyToOne(targetEntity="clAgendaOrientador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_agenda_orientador", referencedColumnName="co_agenda_orientador")
     * })
     */
    private $coAgendaOrientador;

    
    /**
     * Get coDetallAgendaorientador
     *
     * @return integer 
     */
    public function getCoDetallAgendaorientador()
    {
        return $this->coDetallAgendaorientador;
    }

    /**
     * Set hoInicio
     *
     * @param \DateTime $hoInicio
     * @return clDetallAgendaorientador
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
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clDetallAgendaorientador
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
     * @return clDetallAgendaorientador
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
     * Set coDiaSemana
     *
     * @param \sagaco\DsagacoBundle\Entity\clDiaSemana $coDiaSemana
     * @return clDetallAgendaorientador
     */
    public function setCoDiaSemana(\sagaco\DsagacoBundle\Entity\clDiaSemana $coDiaSemana = null)
    {
        $this->coDiaSemana = $coDiaSemana;

        return $this;
    }

    /**
     * Get coDiaSemana
     *
     * @return \sagaco\DsagacoBundle\Entity\clDiaSemana 
     */
    public function getCoDiaSemana()
    {
        return $this->coDiaSemana;
    }

    /**
     * Set coAgendaOrientador
     *
     * @param \sagaco\DsagacoBundle\Entity\clAgendaOrientador $coAgendaOrientador
     * @return clDetallAgendaorientador
     */
    public function setCoAgendaOrientador(\sagaco\DsagacoBundle\Entity\clAgendaOrientador $coAgendaOrientador = null)
    {
        $this->coAgendaOrientador = $coAgendaOrientador;

        return $this;
    }

    /**
     * Get coAgendaOrientador
     *
     * @return \sagaco\DsagacoBundle\Entity\clAgendaOrientador 
     */
    public function getCoAgendaOrientador()
    {
        return $this->coAgendaOrientador;
    }
}

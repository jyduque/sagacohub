<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbAgendaOrientador
 *
 * @ORM\Table(name="e_sagaco.tb_agenda_orientador", indexes={@ORM\Index(name="IDX_A2043AA0712B9E7B", columns={"co_dia_semana"}), @ORM\Index(name="IDX_A2043AA0105A000", columns={"co_duracion"}), @ORM\Index(name="IDX_A2043AA04BD8FA32", columns={"co_orientador"}), @ORM\Index(name="IDX_A2043AA03BFCC05A", columns={"co_semestre"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clAgendaOrientadorRepository")
 */
class clAgendaOrientador
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_agenda_orientador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_agenda_orientador_co_agenda_orientador", allocationSize=1, initialValue=1)
     */
    private $coAgendaOrientador;

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
     * @ORM\ManyToOne(targetEntity="ESagaco.tbDiaSemana")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_dia_semana", referencedColumnName="co_dia_semana")
     * })
     */
    private $coDiaSemana;

    /**
     * @var \ESagaco.tbDuracion
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbDuracion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_duracion", referencedColumnName="co_duracion")
     * })
     */
    private $coDuracion;

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
     * @var \ESagaco.tbSemestre
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbSemestre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_semestre", referencedColumnName="co_semestre")
     * })
     */
    private $coSemestre;



    /**
     * Get coAgendaOrientador
     *
     * @return integer 
     */
    public function getCoAgendaOrientador()
    {
        return $this->coAgendaOrientador;
    }

    /**
     * Set hoInicio
     *
     * @param \DateTime $hoInicio
     * @return clAgendaOrientador
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
     * @return clAgendaOrientador
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
     * @return clAgendaOrientador
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
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbDiaSemana $coDiaSemana
     * @return clAgendaOrientador
     */
    public function setCoDiaSemana(\sagaco\DsagacoBundle\Entity\clDiaSemana $coDiaSemana = null)
    {
        $this->coDiaSemana = $coDiaSemana;

        return $this;
    }

    /**
     * Get coDiaSemana
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbDiaSemana 
     */
    public function getCoDiaSemana()
    {
        return $this->coDiaSemana;
    }

    /**
     * Set coDuracion
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbDuracion $coDuracion
     * @return clAgendaOrientador
     */
    public function setCoDuracion(\sagaco\DsagacoBundle\Entity\clDuracion $coDuracion = null)
    {
        $this->coDuracion = $coDuracion;

        return $this;
    }

    /**
     * Get coDuracion
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbDuracion 
     */
    public function getCoDuracion()
    {
        return $this->coDuracion;
    }

    /**
     * Set coOrientador
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbOrientador $coOrientador
     * @return clAgendaOrientador
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

    /**
     * Set coSemestre
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbSemestre $coSemestre
     * @return clAgendaOrientador
     */
    public function setCoSemestre(\sagaco\DsagacoBundle\Entity\clSemestre $coSemestre = null)
    {
        $this->coSemestre = $coSemestre;

        return $this;
    }

    /**
     * Get coSemestre
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbSemestre 
     */
    public function getCoSemestre()
    {
        return $this->coSemestre;
    }
}

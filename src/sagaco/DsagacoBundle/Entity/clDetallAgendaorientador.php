<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpDetallAgendaorientador
 *
 * @ORM\Table(name="e_sagaco.tp_detall_agendaorientador")
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
     * @var boolean
     *
     * @ORM\Column(name="in_lunes", type="boolean", nullable=true)
     */
    private $inLunes;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="in_martes", type="boolean", nullable=true)
     */
    private $inMartes;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="in_miercoles", type="boolean", nullable=true)
     */
    private $inMiercoles;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="in_jueves", type="boolean", nullable=true)
     */
    private $inJueves;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="in_viernes", type="boolean", nullable=true)
     */
    private $inViernes;
    
    /** 
     * @var string
     * 
     * @ORM\Column(name="nb_timezone", type="string") 
     */
    private $timezone;

     /**
      * Bidirectional - Many DetalleAgenda es generado por una AgendaOrientador (OWNING SIDE)
      * 
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="clAgendaOrientador", inversedBy="detallAgenda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_agenda_orientador", referencedColumnName="co_agenda_orientador")})
     * @ORM\OrderBy({"hoInicio" = "ASC"})
     */
    private $coAgendaOrientador;
    
    public function __construct()
    {    
        $hoInicio = new \DateTime();
        $this->hoInicio = $hoInicio;
        $this->timezone = $hoInicio->getTimeZone()->getName();
    }
    
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
       // if (!$this->localized) {
            $this->hoInicio->setTimeZone(new \DateTimeZone($this->timezone));
        //}
        //return $this->created;
        return $this->hoInicio;
    }
    
    /**
     * Set inLunes
     *
     * @param boolean $inLunes
     * @return clDetallAgendaorientador
     */
    public function setInLunes($inLunes)
    {
        $this->inLunes = $inLunes;

        return $this;
    }

    /**
     * Get inLunes
     *
     * @return boolean 
     */
    public function getInLunes()
    {
        return $this->inLunes;
    }
    
    /**
     * Set inMartes
     *
     * @param boolean $inMartes
     * @return clDetallAgendaorientador
     */
    public function setInMartes($inMartes)
    {
        $this->inMartes = $inMartes;

        return $this;
    }

    /**
     * Get inMartes
     *
     * @return boolean 
     */
    public function getInMartes()
    {
        return $this->inMartes;
    }
    
    /**
     * Set inMiercoles
     *
     * @param boolean $inMiercoles
     * @return clDetallAgendaorientador
     */
    public function setInMiercoles($inMiercoles)
    {
        $this->inMiercoles = $inMiercoles;

        return $this;
    }

    /**
     * Get inMiercoles
     *
     * @return boolean 
     */
    public function getInMiercoles()
    {
        return $this->inMiercoles;
    }
    
    /**
     * Set inJueves
     *
     * @param boolean $inJueves
     * @return clDetallAgendaorientador
     */
    public function setInJueves($inJueves)
    {
        $this->inJueves = $inJueves;

        return $this;
    }

    /**
     * Get inJueves
     *
     * @return boolean 
     */
    public function getInJueves()
    {
        return $this->inJueves;
    }
    
    /**
     * Set inViernes
     *
     * @param boolean $inViernes
     * @return clDetallAgendaorientador
     */
    public function setInViernes($inViernes)
    {
        $this->inViernes = $inViernes;

        return $this;
    }

    /**
     * Get inViernes
     *
     * @return boolean 
     */
    public function getInViernes()
    {
        return $this->inViernes;
    }    
    
    /**
     * Set coAgendaOrientador
     *
     * @param \sagaco\DsagacoBundle\Entity\clAgendaOrientador $coAgendaOrientador
     * @return clDetallAgendaorientador
     */
    public function setCoAgendaOrientador(\sagaco\DsagacoBundle\Entity\clAgendaOrientador $coAgendaOrientador)
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

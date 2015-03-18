<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert; 

/**
 * ESagaco.tpAgendaOrientador
 *
 * @ORM\Table(name="e_sagaco.tp_agenda_orientador", indexes={@ORM\Index(name="IDX_A2043AA04BD8FA32", columns={"co_orientador"}), @ORM\Index(name="IDX_A2043AA03BFCC05A", columns={"co_semestre"})})
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
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="clOrientador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_orientador", referencedColumnName="co_orientador")
     * })
     */
    private $coOrientador;

    /**
     * @var \ESagaco.tbSemestre
     *
     * @ORM\ManyToOne(targetEntity="clSemestre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_semestre", referencedColumnName="co_semestre")
     * })
     */
    private $coSemestre;
    
    /**
     * @var \ESagaco.tbDuracion
     *
     * @ORM\ManyToOne(targetEntity="clDuracion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_duracion", referencedColumnName="co_duracion")
     * })
     */
    private $coDuracion;
    
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
     * Bidirectional - One-To-Many (INVERSE SIDE)
     * 
     * @ORM\OneToMany(targetEntity="clDetallAgendaorientador", mappedBy="coAgendaOrientador", cascade={"persist", "remove"}, orphanRemoval=true)
     * @ORM\OrderBy({"hoInicio" = "ASC"})
     * @Assert\Valid()
     */
    private $detallAgenda;
    
    public function __construct()
    {
        $this->detallAgenda = new ArrayCollection();        
    }


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
     * Set coOrientador
     *
     * @param \sagaco\DsagacoBundle\Entity\clOrientador $coOrientador
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
     * @return \sagaco\DsagacoBundle\Entity\clOrientador 
     */
    public function getCoOrientador()
    {
        return $this->coOrientador;
    }

    /**
     * Set coSemestre
     *
     * @param \sagaco\DsagacoBundle\Entity\clSemestre $coSemestre
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
     * @return \sagaco\DsagacoBundle\Entity\clSemestre 
     */
    public function getCoSemestre()
    {
        return $this->coSemestre;
    }
    
     /**
     * Set coDuracion
     *
     * @param \sagaco\DsagacoBundle\Entity\clDuracion $coDuracion
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
     * @return \sagaco\DsagacoBundle\Entity\clDuracion 
     */
    public function getCoDuracion()
    {
        return $this->coDuracion;
    }
    
    public function addDetallAgenda(\sagaco\DsagacoBundle\Entity\clDetallAgendaorientador $detallAgenda)
    {
        $this->detallAgenda[] = $detallAgenda;
        $detallAgenda->setCoAgendaOrientador($this);
    }
    
     
    public function setDetallAgenda(ArrayCollection $detallAgenda = null)
    {       
        foreach ($detallAgenda as $detalle) {
            $detalle->setCoAgendaOrientador($this);
        }
        $this->detallAgenda = $detallAgenda;
    }
    
    /**
     * Get detallAgenda
     *
     * @return \sagaco\DsagacoBundle\Entity\clDetallAgendaorientador 
     */
    public function getDetallAgenda()
    {
        return $this->detallAgenda;
    }
}

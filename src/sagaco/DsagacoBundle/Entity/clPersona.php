<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbPersona
 *
 * @ORM\Table(name="e_sagaco.tb_persona", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tb_persona_co_contro_estudio", columns={"co_contro_estudio"}), @ORM\UniqueConstraint(name="uk_tb_persona_co_recurs_humano", columns={"co_recurs_humano"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clPersonaRepository")
 */
class clPersona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_persona", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_persona_co_persona", allocationSize=1, initialValue=1)
     */
    private $coPersona;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_estudiante", type="boolean", nullable=true)
     */
    private $inEstudiante;

    /**
     * @var \ESagaco.viControEstudio
     *
     * @ORM\ManyToOne(targetEntity="clControEstudio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_contro_estudio", referencedColumnName="co_contro_estudio")
     * })
     */
    private $coControEstudio;

    /**
     * @var \ESagaco.viRecursHumano
     *
     * @ORM\ManyToOne(targetEntity="clRecursHumano")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_recurs_humano", referencedColumnName="co_recurs_humano")
     * })
     */
    private $coRecursHumano;



    /**
     * Get coPersona
     *
     * @return integer 
     */
    public function getCoPersona()
    {
        return $this->coPersona;
    }

    /**
     * Set inEstudiante
     *
     * @param boolean $inEstudiante
     * @return clPersona
     */
    public function setInEstudiante($inEstudiante)
    {
        $this->inEstudiante = $inEstudiante;

        return $this;
    }

    /**
     * Get inEstudiante
     *
     * @return boolean 
     */
    public function getInEstudiante()
    {
        return $this->inEstudiante;
    }

    /**
     * Set coControEstudio
     *
     * @param \sagaco\DsagacoBundle\Entity\clControEstudio $coControEstudio
     * @return clPersona
     */
    public function setCoControEstudio(\sagaco\DsagacoBundle\Entity\clControEstudio $coControEstudio = null)
    {
        $this->coControEstudio = $coControEstudio;

        return $this;
    }

    /**
     * Get coControEstudio
     *
     * @return \sagaco\DsagacoBundle\Entity\clControEstudio 
     */
    public function getCoControEstudio()
    {
        return $this->coControEstudio;
    }

    /**
     * Set coRecursHumano
     *
     * @param \sagaco\DsagacoBundle\Entity\clRecursHumano $coRecursHumano
     * @return clPersona
     */
    public function setCoRecursHumano(\sagaco\DsagacoBundle\Entity\clRecursHumano $coRecursHumano = null)
    {
        $this->coRecursHumano = $coRecursHumano;

        return $this;
    }

    /**
     * Get coRecursHumano
     *
     * @return \sagaco\DsagacoBundle\Entity\clRecursHumano 
     */
    public function getCoRecursHumano()
    {
        return $this->coRecursHumano;
    }
}

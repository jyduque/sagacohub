<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbCarrera
 *
 * @ORM\Table(name="e_sagaco.tb_carrera")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clCarreraRepository")
 */
class clCarrera
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_carrera", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_carrera_co_carrera", allocationSize=1, initialValue=1)
     */
    private $coCarrera;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_carrera", type="string", length=100, nullable=false)
     */
    private $nbCarrera;

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
     * Get coCarrera
     *
     * @return integer 
     */
    public function getCoCarrera()
    {
        return $this->coCarrera;
    }

    /**
     * Set nbCarrera
     *
     * @param string $nbCarrera
     * @return clCarrera
     */
    public function setNbCarrera($nbCarrera)
    {
        $this->nbCarrera = $nbCarrera;

        return $this;
    }

    /**
     * Get nbCarrera
     *
     * @return string 
     */
    public function getNbCarrera()
    {
        return $this->nbCarrera;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clCarrera
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
     * @return clCarrera
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
}

<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbDuracion
 *
 * @ORM\Table(name="e_sagaco.tb_duracion")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clDuracionRepository")
 */
class clDuracion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_duracion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_duracion_co_duracion_1", allocationSize=1, initialValue=1)
     */
    private $coDuracion;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_duracion", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nuDuracion;

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
     * Get coDuracion
     *
     * @return integer 
     */
    public function getCoDuracion()
    {
        return $this->coDuracion;
    }

    /**
     * Set nuDuracion
     *
     * @param string $nuDuracion
     * @return clDuracion
     */
    public function setNuDuracion($nuDuracion)
    {
        $this->nuDuracion = $nuDuracion;

        return $this;
    }

    /**
     * Get nuDuracion
     *
     * @return string 
     */
    public function getNuDuracion()
    {
        return $this->nuDuracion;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clDuracion
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
     * @return clDuracion
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
    
    public function __toString()
    {
        return $this->getNuDuracion();
    }
}

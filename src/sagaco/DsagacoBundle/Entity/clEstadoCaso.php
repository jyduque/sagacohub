<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbEstadoCaso
 *
 * @ORM\Table(name="e_sagaco.tb_estado_caso")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clEstadoCasoRepository")
 */
class clEstadoCaso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_estado_caso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_estado_caso_co_estado_caso", allocationSize=1, initialValue=1)
     */
    private $coEstadoCaso;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_estado_caso", type="string", length=30, nullable=false)
     */
    private $nbEstadoCaso;

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
     * Get coEstadoCaso
     *
     * @return integer 
     */
    public function getCoEstadoCaso()
    {
        return $this->coEstadoCaso;
    }

    /**
     * Set nbEstadoCaso
     *
     * @param string $nbEstadoCaso
     * @return clEstadoCaso
     */
    public function setNbEstadoCaso($nbEstadoCaso)
    {
        $this->nbEstadoCaso = $nbEstadoCaso;

        return $this;
    }

    /**
     * Get nbEstadoCaso
     *
     * @return string 
     */
    public function getNbEstadoCaso()
    {
        return $this->nbEstadoCaso;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clEstadoCaso
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
     * @return clEstadoCaso
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

<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbParentesco
 *
 * @ORM\Table(name="e_sagaco.tb_parentesco")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clParentescoRepository")
 */
class clParentesco
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_parentesco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_parentesco_co_parentesco", allocationSize=1, initialValue=1)
     */
    private $coParentesco;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_parentesco", type="string", length=30, nullable=false)
     */
    private $nbParentesco;

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
     * Get coParentesco
     *
     * @return integer 
     */
    public function getCoParentesco()
    {
        return $this->coParentesco;
    }

    /**
     * Set nbParentesco
     *
     * @param string $nbParentesco
     * @return clParentesco
     */
    public function setNbParentesco($nbParentesco)
    {
        $this->nbParentesco = $nbParentesco;

        return $this;
    }

    /**
     * Get nbParentesco
     *
     * @return string 
     */
    public function getNbParentesco()
    {
        return $this->nbParentesco;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clParentesco
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
     * @return clParentesco
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
        return $this->getNbParentesco();
    }
}

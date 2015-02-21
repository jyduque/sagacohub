<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbGenero
 *
 * @ORM\Table(name="e_sagaco.tb_genero")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clGeneroRepository")
 */
class clGenero
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_genero", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_genero_co_genero", allocationSize=1, initialValue=1)
     */
    private $coGenero;

    /**
     * @var string
     *
     * @ORM\Column(name="in_genero", type="string", length=2, nullable=false)
     */
    private $inGenero;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_genero", type="string", length=10, nullable=false)
     */
    private $nbGenero;

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
     * Get coGenero
     *
     * @return integer 
     */
    public function getCoGenero()
    {
        return $this->coGenero;
    }

    /**
     * Set inGenero
     *
     * @param string $inGenero
     * @return clGenero
     */
    public function setInGenero($inGenero)
    {
        $this->inGenero = $inGenero;

        return $this;
    }

    /**
     * Get inGenero
     *
     * @return string 
     */
    public function getInGenero()
    {
        return $this->inGenero;
    }

    /**
     * Set nbGenero
     *
     * @param string $nbGenero
     * @return clGenero
     */
    public function setNbGenero($nbGenero)
    {
        $this->nbGenero = $nbGenero;

        return $this;
    }

    /**
     * Get nbGenero
     *
     * @return string 
     */
    public function getNbGenero()
    {
        return $this->nbGenero;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clGenero
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
     * @return clGenero
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
        return $this->getNbGenero();
    }
}

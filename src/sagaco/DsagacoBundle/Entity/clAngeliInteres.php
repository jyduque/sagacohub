<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbAngeliInteres
 *
 * @ORM\Table(name="e_sagaco.tb_angeli_interes")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clAngeliInteresRepository")
 */
class clAngeliInteres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_angeli_interes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_angeli_interes_co_angeli_interes_1", allocationSize=1, initialValue=1)
     */
    private $coAngeliInteres;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_interes", type="string", length=50, nullable=false)
     */
    private $nbInteres;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_inicial", type="string", length=5, nullable=false)
     */
    private $nbInicial;

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
     * Get coAngeliInteres
     *
     * @return integer 
     */
    public function getCoAngeliInteres()
    {
        return $this->coAngeliInteres;
    }

    /**
     * Set nbInteres
     *
     * @param string $nbInteres
     * @return clAngeliInteres
     */
    public function setNbInteres($nbInteres)
    {
        $this->nbInteres = $nbInteres;

        return $this;
    }

    /**
     * Get nbInteres
     *
     * @return string 
     */
    public function getNbInteres()
    {
        return $this->nbInteres;
    }

    /**
     * Set nbInicial
     *
     * @param string $nbInicial
     * @return clAngeliInteres
     */
    public function setNbInicial($nbInicial)
    {
        $this->nbInicial = $nbInicial;

        return $this;
    }

    /**
     * Get nbInicial
     *
     * @return string 
     */
    public function getNbInicial()
    {
        return $this->nbInicial;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clAngeliInteres
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
     * @return clAngeliInteres
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
        return $this->getNbInicial();
    }
}

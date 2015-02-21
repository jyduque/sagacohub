<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbHollanLetra
 *
 * @ORM\Table(name="e_sagaco.tb_hollan_letra")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clHollanLetraRepository")
 */
class clHollanLetra
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_hollan_letra", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_hollan_letra_co_hollan_letra", allocationSize=1, initialValue=1)
     */
    private $coHollanLetra;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_hollan_letra", type="string", length=2, nullable=false)
     */
    private $nbHollanLetra;

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
     * Get coHollanLetra
     *
     * @return integer 
     */
    public function getCoHollanLetra()
    {
        return $this->coHollanLetra;
    }

    /**
     * Set nbHollanLetra
     *
     * @param string $nbHollanLetra
     * @return clHollanLetra
     */
    public function setNbHollanLetra($nbHollanLetra)
    {
        $this->nbHollanLetra = $nbHollanLetra;

        return $this;
    }

    /**
     * Get nbHollanLetra
     *
     * @return string 
     */
    public function getNbHollanLetra()
    {
        return $this->nbHollanLetra;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clHollanLetra
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
     * @return clHollanLetra
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
        return $this->getNbHollanLetra();
    }
}

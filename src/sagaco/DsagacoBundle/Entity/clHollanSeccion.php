<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbHollanSeccion
 *
 * @ORM\Table(name="e_sagaco.tb_hollan_seccion")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clHollanSeccionRepository")
 */
class clHollanSeccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_hollan_seccion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_hollan_seccion_co_hollan_seccion", allocationSize=1, initialValue=1)
     */
    private $coHollanSeccion;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_hollan_seccion", type="string", length=50, nullable=false)
     */
    private $nbHollanSeccion;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_descripcion", type="string", length=255, nullable=false)
     */
    private $txDescripcion;

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
     * Get coHollanSeccion
     *
     * @return integer 
     */
    public function getCoHollanSeccion()
    {
        return $this->coHollanSeccion;
    }

    /**
     * Set nbHollanSeccion
     *
     * @param string $nbHollanSeccion
     * @return clHollanSeccion
     */
    public function setNbHollanSeccion($nbHollanSeccion)
    {
        $this->nbHollanSeccion = $nbHollanSeccion;

        return $this;
    }

    /**
     * Get nbHollanSeccion
     *
     * @return string 
     */
    public function getNbHollanSeccion()
    {
        return $this->nbHollanSeccion;
    }

    /**
     * Set txDescripcion
     *
     * @param string $txDescripcion
     * @return clHollanSeccion
     */
    public function setTxDescripcion($txDescripcion)
    {
        $this->txDescripcion = $txDescripcion;

        return $this;
    }

    /**
     * Get txDescripcion
     *
     * @return string 
     */
    public function getTxDescripcion()
    {
        return $this->txDescripcion;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clHollanSeccion
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
     * @return clHollanSeccion
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
        return $this->getNbHollanSeccion();
    }
}

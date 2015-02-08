<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbTipoInstitucion
 *
 * @ORM\Table(name="e_sagaco.tb_tipo_institucion")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clTipoInstitucionRepository")
 */
class clTipoInstitucion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_tipo_institucion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_tipo_institucion_co_tipo_institucion", allocationSize=1, initialValue=1)
     */
    private $coTipoInstitucion;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_tipo_institucion", type="string", length=10, nullable=false)
     */
    private $nbTipoInstitucion;

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
     * Get coTipoInstitucion
     *
     * @return integer 
     */
    public function getCoTipoInstitucion()
    {
        return $this->coTipoInstitucion;
    }

    /**
     * Set nbTipoInstitucion
     *
     * @param string $nbTipoInstitucion
     * @return clTipoInstitucion
     */
    public function setNbTipoInstitucion($nbTipoInstitucion)
    {
        $this->nbTipoInstitucion = $nbTipoInstitucion;

        return $this;
    }

    /**
     * Get nbTipoInstitucion
     *
     * @return string 
     */
    public function getNbTipoInstitucion()
    {
        return $this->nbTipoInstitucion;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clTipoInstitucion
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
     * @return clTipoInstitucion
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

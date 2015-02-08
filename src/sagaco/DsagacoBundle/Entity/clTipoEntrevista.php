<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbTipoEntrevista
 *
 * @ORM\Table(name="e_sagaco.tb_tipo_entrevista")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clTipoEntrevistaRepository")
 */
class clTipoEntrevista
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_tipo_entrevista", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_tipo_entrevista_co_tipo_entrevista", allocationSize=1, initialValue=1)
     */
    private $coTipoEntrevista;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_tipo_entrevista", type="string", length=30, nullable=false)
     */
    private $nbTipoEntrevista;

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
     * Get coTipoEntrevista
     *
     * @return integer 
     */
    public function getCoTipoEntrevista()
    {
        return $this->coTipoEntrevista;
    }

    /**
     * Set nbTipoEntrevista
     *
     * @param string $nbTipoEntrevista
     * @return clTipoEntrevista
     */
    public function setNbTipoEntrevista($nbTipoEntrevista)
    {
        $this->nbTipoEntrevista = $nbTipoEntrevista;

        return $this;
    }

    /**
     * Get nbTipoEntrevista
     *
     * @return string 
     */
    public function getNbTipoEntrevista()
    {
        return $this->nbTipoEntrevista;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clTipoEntrevista
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
     * @return clTipoEntrevista
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

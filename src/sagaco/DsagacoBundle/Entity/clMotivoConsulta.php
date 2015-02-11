<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbMotivoConsulta
 *
 * @ORM\Table(name="e_sagaco.tb_motivo_consulta", indexes={@ORM\Index(name="IDX_DA5A0CB092038EE7", columns={"co_area"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clMorivoConsultaRepository")
 */
class clMotivoConsulta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_motivo_consulta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_motivo_consulta_co_motivo_consulta", allocationSize=1, initialValue=1)
     */
    private $coMotivoConsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_motivo_consulta", type="string", length=50, nullable=false)
     */
    private $nbMotivoConsulta;

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
     * @var \ESagaco.tbArea
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbArea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_area", referencedColumnName="co_area")
     * })
     */
    private $coArea;



    /**
     * Get coMotivoConsulta
     *
     * @return integer 
     */
    public function getCoMotivoConsulta()
    {
        return $this->coMotivoConsulta;
    }

    /**
     * Set nbMotivoConsulta
     *
     * @param string $nbMotivoConsulta
     * @return clMotivoConsulta
     */
    public function setNbMotivoConsulta($nbMotivoConsulta)
    {
        $this->nbMotivoConsulta = $nbMotivoConsulta;

        return $this;
    }

    /**
     * Get nbMotivoConsulta
     *
     * @return string 
     */
    public function getNbMotivoConsulta()
    {
        return $this->nbMotivoConsulta;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clMotivoConsulta
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
     * @return clMotivoConsulta
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

    /**
     * Set coArea
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbArea $coArea
     * @return clMotivoConsulta
     */
    public function setCoArea(\sagaco\DsagacoBundle\Entity\clArea $coArea = null)
    {
        $this->coArea = $coArea;

        return $this;
    }

    /**
     * Get coArea
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbArea 
     */
    public function getCoArea()
    {
        return $this->coArea;
    }
}

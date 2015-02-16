<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.thHistorCaso
 *
 * @ORM\Table(name="e_sagaco.th_histor_caso", indexes={@ORM\Index(name="IDX_64B9387D4E190D5B", columns={"co_estado_caso"}), @ORM\Index(name="IDX_64B9387DDD4AC395", columns={"co_caso"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clHistorCasoRepository")
 */
class clHistorCaso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_histor_caso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_th_histor_caso_co_histor_caso", allocationSize=1, initialValue=1)
     */
    private $coHistorCaso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_creacion", type="datetime", nullable=false)
     */
    private $fhCreacion;

    /**
     * @var \ESagaco.tbEstadoCaso
     *
     * @ORM\ManyToOne(targetEntity="ESagaco.tbEstadoCaso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_estado_caso", referencedColumnName="co_estado_caso")
     * })
     */
    private $coEstadoCaso;

    /**
     * @var \ESagaco.tpCaso
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="ESagaco.tpCaso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_caso", referencedColumnName="co_caso")
     * })
     */
    private $coCaso;



    /**
     * Set coHistorCaso
     *
     * @param integer $coHistorCaso
     * @return clHistorCaso
     */
    public function setCoHistorCaso($coHistorCaso)
    {
        $this->coHistorCaso = $coHistorCaso;

        return $this;
    }

    /**
     * Get coHistorCaso
     *
     * @return integer 
     */
    public function getCoHistorCaso()
    {
        return $this->coHistorCaso;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clHistorCaso
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
     * Set coEstadoCaso
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tbEstadoCaso $coEstadoCaso
     * @return clHistorCaso
     */
    public function setCoEstadoCaso(\sagaco\DsagacoBundle\Entity\clEstadoCaso $coEstadoCaso = null)
    {
        $this->coEstadoCaso = $coEstadoCaso;

        return $this;
    }

    /**
     * Get coEstadoCaso
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tbEstadoCaso 
     */
    public function getCoEstadoCaso()
    {
        return $this->coEstadoCaso;
    }

    /**
     * Set coCaso
     *
     * @param \sagaco\DsagacoBundle\Entity\ESagaco.tpCaso $coCaso
     * @return clHistorCaso
     */
    public function setCoCaso(\sagaco\DsagacoBundle\Entity\clCaso $coCaso)
    {
        $this->coCaso = $coCaso;

        return $this;
    }

    /**
     * Get coCaso
     *
     * @return \sagaco\DsagacoBundle\Entity\ESagaco.tpCaso 
     */
    public function getCoCaso()
    {
        return $this->coCaso;
    }
}

<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbTipoPregunta
 *
 * @ORM\Table(name="e_sagaco.tb_tipo_pregunta")
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clTipoPreguntaRepository")
 */
class clTipoPregunta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_tipo_pregunta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_tipo_pregunta_co_tipo_pregunta_1", allocationSize=1, initialValue=1)
     */
    private $coTipoPregunta;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_tipo_pregunta", type="string", length=20, nullable=false)
     */
    private $nbTipoPregunta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_creacion", type="datetime", nullable=false)
     */
    private $fhCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fh_actualizacion", type="datetime", nullable=true)
     */
    private $fhActualizacion;



    /**
     * Get coTipoPregunta
     *
     * @return integer 
     */
    public function getCoTipoPregunta()
    {
        return $this->coTipoPregunta;
    }

    /**
     * Set nbTipoPregunta
     *
     * @param string $nbTipoPregunta
     * @return clTipoPregunta
     */
    public function setNbTipoPregunta($nbTipoPregunta)
    {
        $this->nbTipoPregunta = $nbTipoPregunta;

        return $this;
    }

    /**
     * Get nbTipoPregunta
     *
     * @return string 
     */
    public function getNbTipoPregunta()
    {
        return $this->nbTipoPregunta;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clTipoPregunta
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
     * @return clTipoPregunta
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

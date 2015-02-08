<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tbGrupoRol
 *
 * @ORM\Table(name="e_sagaco.tb_grupo_rol", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tb_grupo_rol_nb_grupo_rol", columns={"nb_grupo_rol"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clGrupoRolRepository")
 */
class clGrupoRol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_grupo_rol", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tb_grupo_rol_co_grupo_rol", allocationSize=1, initialValue=1)
     */
    private $coGrupoRol;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_grupo_rol", type="string", length=20, nullable=false)
     */
    private $nbGrupoRol;

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
     * Get coGrupoRol
     *
     * @return integer 
     */
    public function getCoGrupoRol()
    {
        return $this->coGrupoRol;
    }

    /**
     * Set nbGrupoRol
     *
     * @param string $nbGrupoRol
     * @return clGrupoRol
     */
    public function setNbGrupoRol($nbGrupoRol)
    {
        $this->nbGrupoRol = $nbGrupoRol;

        return $this;
    }

    /**
     * Get nbGrupoRol
     *
     * @return string 
     */
    public function getNbGrupoRol()
    {
        return $this->nbGrupoRol;
    }

    /**
     * Set fhCreacion
     *
     * @param \DateTime $fhCreacion
     * @return clGrupoRol
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
     * @return clGrupoRol
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
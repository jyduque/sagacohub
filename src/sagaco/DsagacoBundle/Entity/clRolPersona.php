<?php

namespace sagaco\DsagacoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ESagaco.tpRolPersona
 *
 * @ORM\Table(name="e_sagaco.tp_rol_persona", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tp_rol_persona_co_grupo_rol_co_persona", columns={"co_grupo_rol", "co_persona"})}, indexes={@ORM\Index(name="IDX_E8D85C5DB537562C", columns={"co_grupo_rol"}), @ORM\Index(name="IDX_E8D85C5D1A0F11FF", columns={"co_persona"})})
 * @ORM\Entity(repositoryClass="sagaco\DsagacoBundle\Entity\clRolPersonaRepository")
 */
class clRolPersona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_rol_persona", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="e_sagaco.seq_tp_rol_persona_co_rol_persona", allocationSize=1, initialValue=1)
     */
    private $coRolPersona;

    /**
     * @var \ESagaco.tbGrupoRol
     *
     * @ORM\ManyToOne(targetEntity="clGrupoRol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_grupo_rol", referencedColumnName="co_grupo_rol")
     * })
     */
    private $coGrupoRol;

    /**
     * @var \ESagaco.tbPersona
     *
     * @ORM\ManyToOne(targetEntity="clPersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="co_persona", referencedColumnName="co_persona")
     * })
     */
    private $coPersona;



    /**
     * Get coRolPersona
     *
     * @return integer 
     */
    public function getCoRolPersona()
    {
        return $this->coRolPersona;
    }

    /**
     * Set coGrupoRol
     *
     * @param \sagaco\DsagacoBundle\Entity\clGrupoRol $coGrupoRol
     * @return clRolPersona
     */
    public function setCoGrupoRol(\sagaco\DsagacoBundle\Entity\clGrupoRol $coGrupoRol = null)
    {
        $this->coGrupoRol = $coGrupoRol;

        return $this;
    }

    /**
     * Get coGrupoRol
     *
     * @return \sagaco\DsagacoBundle\Entity\clGrupoRol 
     */
    public function getCoGrupoRol()
    {
        return $this->coGrupoRol;
    }

    /**
     * Set coPersona
     *
     * @param \sagaco\DsagacoBundle\Entity\clPersona $coPersona
     * @return clRolPersona
     */
    public function setCoPersona(\sagaco\DsagacoBundle\Entity\clPersona $coPersona = null)
    {
        $this->coPersona = $coPersona;

        return $this;
    }

    /**
     * Get coPersona
     *
     * @return \sagaco\DsagacoBundle\Entity\clPersona 
     */
    public function getCoPersona()
    {
        return $this->coPersona;
    }
}

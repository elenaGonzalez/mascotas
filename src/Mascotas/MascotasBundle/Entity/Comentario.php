<?php

namespace Mascotas\MascotasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mascotas\MascotasBundle\Entity\ComentarioRepository")
 */
class Comentario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=255)
     */
    private $usuario;

    
     /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Publicacion", inversedBy="comentario", cascade={"persist"})
     * @ORM\JoinColumn(name="publicacion_id", referencedColumnName="id"),
     *
     */
     
    private $publicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=255)
     */
    private $comentario;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     * @return Comentario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set publicacion
     *
     * @param string $publicacion
     * @return Comentario
     */
    public function setPublicacion($publicacion)
    {
        $this->publicacion = $publicacion;

        return $this;
    }

    /**
     * Get publicacion
     *
     * @return string 
     */
    public function getPublicacion()
    {
        return $this->publicacion;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return Comentario
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }
    
}

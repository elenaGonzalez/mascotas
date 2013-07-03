<?php

namespace Mascotas\MascotasBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Publicacion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mascotas\MascotasBundle\Entity\PublicacionRepository")
 */
class Publicacion {

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

    /**
     * @Assert\NotBlank()
     */
    private $usuario;


    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */

    /**
     * @Assert\NotBlank()
     */
    private $tipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechapublicacion", type="date")
     */
    private $fechapublicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=255)
     */
    private $aviso;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=255)
     */
    private $contacto;

    /**
     *
     * @ORM\OneToMany(targetEntity="Comentario", mappedBy="publicacion")
     */
    private $comentarios;

    public function __construct() {
        $this->comentarios = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     * @return Publicacion
     */
    public function setUsuario($usuario) {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario() {
        return $this->usuario;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Publicacion
     */
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo() {
        return $this->tipo;
    }

    /**
     * Set fechapublicacion
     *
     * @param \DateTime $fechaPublicacion
     * @return Publicacion
     */
    public function setFechaPublicacion($fechaPublicacion) {
        $this->fechapublicacion = $fechaPublicacion;

        return $this;
    }

    /**
     * Get fechapublicacion
     *
     * @return \DateTime 
     */
    public function getFechaPublicacion() {
        return $this->fechapublicacion;
    }

    /**
     * Set lugar
     *
     * @param string $aviso
     * @return Publicacion
     */
    public function setAviso($aviso) {
        $this->aviso = $aviso;

        return $this;
    }

    /**
     * Get aviso
     *
     * @return string 
     */
    public function getAviso() {
        return $this->aviso;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Publicacion
     */
    public function setFoto($foto) {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto() {
        return $this->foto;
    }

    /**
     * Set foto
     *
     * @param string $contacto
     * @return Publicacion
     */
    public function setContacto($contacto) {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string 
     */
    public function getContacto() {
        return $this->contacto;
    }

    public function __toString() {
        return $this->getAviso();
    }

    /**
     * Add comentarios
     *
     * @param \Mascotas\MascotasBundle\Entity\Comentario $comentarios
     * @return Publicacion
     */
    public function addComentario(\Mascotas\MascotasBundle\Entity\Comentario $comentarios) {
        $this->comentarios[] = $comentarios;

        return $this;
    }

    /**
     * Remove comentarios
     *
     * @param \Mascotas\MascotasBundle\Entity\Comentario $comentarios
     */
    public function removeComentario(\Mascotas\MascotasBundle\Entity\Comentario $comentarios) {
        $this->comentarios->removeElement($comentarios);
    }

    /**
     * Get comentarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComentarios() {
        return $this->comentarios;
    }

}

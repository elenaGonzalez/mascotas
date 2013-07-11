<?php

namespace Mascotas\MascotasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * Mascota
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mascotas\MascotasBundle\Entity\MascotaRepository")
 */
class Mascota {

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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="raza", type="string", length=200)
     */
    private $raza;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=10)
     */
    private $sexo;

    /**
     *
     * @ORM\OneToOne(targetEntity="Document", cascade={"persist"})
     * @ORM\JoinColumn(name="document_id", referencedColumnName="id") 
     * 
     */    
    private $foto;


    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="mascotas", cascade={"persist"})
     */
    private $usuario;
    
    
    // para recibir la fotos/uploadedfile del formulario
    private $foto_cargada;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Mascota
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set raza
     *
     * @param string $raza
     * @return Mascota
     */
    public function setRaza($raza) {
        $this->raza = $raza;

        return $this;
    }

    /**
     * Get raza
     *
     * @return string 
     */
    public function getRaza() {
        return $this->raza;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Mascota
     */
    public function setSexo($sexo) {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo() {
        return $this->sexo;
    }

   /**
     * Set foto
     *
     * @param \Mascotas\MascotasBundle\Entity\Document $foto
     * @return Publicacion
     */
    public function setFoto(\Mascotas\MascotasBundle\Entity\Document $foto = null)
    {
        $this->foto = $foto;
    
        return $this;
    }

    /**
     * Get foto
     *
     * @return \Mascotas\MascotasBundle\Entity\Document 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set usuario
     *
     * @param \Mascotas\MascotasBundle\Entity\Usuario $usuario
     * @return Mascota
     */
    public function setUsuario(\Mascotas\MascotasBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Mascotas\MascotasBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
    
     /**
     * Get foto_cargada
     *
     * @return UploadedFile
     */
    public function getFotoCargada(){
        return $this->foto_cargada;
    }
    
    public function setFotoCargada(UploadedFile $foto_cargada){
        $this->foto_subida = $foto_cargada;
    }
    
     public function __toString() {
        return $this->getNombre();
    }
    
}

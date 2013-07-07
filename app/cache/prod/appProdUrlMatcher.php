<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/mascotas')) {
            if (0 === strpos($pathinfo, '/mascotas/comentario')) {
                // comentario
                if ($pathinfo === '/mascotas/comentario/{$publicacion_id}/{$pag_actual}') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comentario;
                    }

                    return array (  'pag_actual' => 1,  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\ComentarioController::indexAction',  '_route' => 'comentario',);
                }
                not_comentario:

                // comentario_create
                if (0 === strpos($pathinfo, '/mascotas/comentario/create') && preg_match('#^/mascotas/comentario/create/(?P<publicacion_id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_comentario_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentario_create')), array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\ComentarioController::createAction',));
                }
                not_comentario_create:

                // comentario_new
                if (0 === strpos($pathinfo, '/mascotas/comentario/new') && preg_match('#^/mascotas/comentario/new/(?P<publicacion_id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comentario_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentario_new')), array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\ComentarioController::newAction',));
                }
                not_comentario_new:

                // comentario_show
                if (preg_match('#^/mascotas/comentario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comentario_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentario_show')), array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\ComentarioController::showAction',));
                }
                not_comentario_show:

                // comentario_edit
                if (preg_match('#^/mascotas/comentario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comentario_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentario_edit')), array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\ComentarioController::editAction',));
                }
                not_comentario_edit:

                // comentario_update
                if (preg_match('#^/mascotas/comentario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_comentario_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentario_update')), array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\ComentarioController::updateAction',));
                }
                not_comentario_update:

                // comentario_delete
                if (preg_match('#^/mascotas/comentario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_comentario_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentario_delete')), array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\ComentarioController::deleteAction',));
                }
                not_comentario_delete:

            }

            // mascotas_mascotas_default_index
            if (rtrim($pathinfo, '/') === '/mascotas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mascotas_mascotas_default_index');
                }

                return array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mascotas_mascotas_default_index',);
            }

            if (0 === strpos($pathinfo, '/mascotas/mascota')) {
                // mascota
                if (rtrim($pathinfo, '/') === '/mascotas/mascota') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mascota;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'mascota');
                    }

                    return array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\MascotaController::indexAction',  '_route' => 'mascota',);
                }
                not_mascota:

                // mascota_create
                if ($pathinfo === '/mascotas/mascota/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mascota_create;
                    }

                    return array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\MascotaController::createAction',  '_route' => 'mascota_create',);
                }
                not_mascota_create:

                // mascota_new
                if ($pathinfo === '/mascotas/mascota/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mascota_new;
                    }

                    return array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\MascotaController::newAction',  '_route' => 'mascota_new',);
                }
                not_mascota_new:

                // mascota_show
                if (preg_match('#^/mascotas/mascota/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mascota_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mascota_show')), array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\MascotaController::showAction',));
                }
                not_mascota_show:

                // mascota_edit
                if (preg_match('#^/mascotas/mascota/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mascota_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mascota_edit')), array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\MascotaController::editAction',));
                }
                not_mascota_edit:

                // mascota_update
                if (preg_match('#^/mascotas/mascota/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mascota_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mascota_update')), array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\MascotaController::updateAction',));
                }
                not_mascota_update:

                // mascota_delete
                if (preg_match('#^/mascotas/mascota/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mascota_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mascota_delete')), array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\MascotaController::deleteAction',));
                }
                not_mascota_delete:

            }

            if (0 === strpos($pathinfo, '/mascotas/publicacion')) {
                // publicacion
                if (preg_match('#^/mascotas/publicacion(?P<pagina_actual>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publicacion;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'publicacion');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicacion')), array (  'pagina_actual' => 1,  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\PublicacionController::indexAction',));
                }
                not_publicacion:

                // publicacion_create
                if ($pathinfo === '/mascotas/publicacion/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_publicacion_create;
                    }

                    return array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\PublicacionController::createAction',  '_route' => 'publicacion_create',);
                }
                not_publicacion_create:

                // publicacion_new
                if ($pathinfo === '/mascotas/publicacion/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publicacion_new;
                    }

                    return array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\PublicacionController::newAction',  '_route' => 'publicacion_new',);
                }
                not_publicacion_new:

                // publicacion_show
                if (preg_match('#^/mascotas/publicacion/(?P<id>\\d+)(?:/(?P<comentario_nro_pagina>\\d+))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publicacion_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicacion_show')), array (  'comentario_nro_pagina' => 1,  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\PublicacionController::showAction',));
                }
                not_publicacion_show:

                // publicacion_edit
                if (preg_match('#^/mascotas/publicacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publicacion_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicacion_edit')), array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\PublicacionController::editAction',));
                }
                not_publicacion_edit:

                // publicacion_update
                if (preg_match('#^/mascotas/publicacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_publicacion_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicacion_update')), array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\PublicacionController::updateAction',));
                }
                not_publicacion_update:

                // publicacion_delete
                if (preg_match('#^/mascotas/publicacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_publicacion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicacion_delete')), array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\PublicacionController::deleteAction',));
                }
                not_publicacion_delete:

            }

            if (0 === strpos($pathinfo, '/mascotas/usuario')) {
                // usuario
                if (rtrim($pathinfo, '/') === '/mascotas/usuario') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_usuario;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'usuario');
                    }

                    return array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario',);
                }
                not_usuario:

                // usuario_create
                if ($pathinfo === '/mascotas/usuario/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_usuario_create;
                    }

                    return array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
                }
                not_usuario_create:

                // usuario_new
                if ($pathinfo === '/mascotas/usuario/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_usuario_new;
                    }

                    return array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
                }
                not_usuario_new:

                // usuario_show
                if (preg_match('#^/mascotas/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_usuario_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\UsuarioController::showAction',));
                }
                not_usuario_show:

                // usuario_edit
                if (preg_match('#^/mascotas/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_usuario_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\UsuarioController::editAction',));
                }
                not_usuario_edit:

                // usuario_update
                if (preg_match('#^/mascotas/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_usuario_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\UsuarioController::updateAction',));
                }
                not_usuario_update:

                // usuario_delete
                if (preg_match('#^/mascotas/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_usuario_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\UsuarioController::deleteAction',));
                }
                not_usuario_delete:

                // registro
                if ($pathinfo === '/mascotas/usuario/new') {
                    return array (  '_UsuarioController' => 'MascotasMascotasBundle:Usuario:new',  '_route' => 'registro',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Mascotas\\MascotasBundle\\Controller\\SeguridadController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // contacto
        if ($pathinfo === '/contacto') {
            return array (  '_controller' => 'MascotasMascotasBundle:Contacto:contacto',  '_route' => 'contacto',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

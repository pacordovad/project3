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

        // frontend_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'frontend_homepage');
            }

            return array (  '_controller' => 'Frontend\\Bundle\\Controller\\DefaultController::indexAction',  '_route' => 'frontend_homepage',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Frontend\\Bundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // login_check
        if ($pathinfo === '/auth') {
            return array('_route' => 'login_check');
        }

        // logout
        if ($pathinfo === '/salir') {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/categoria')) {
            // categoria
            if (rtrim($pathinfo, '/') === '/categoria') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categoria');
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\CategoriaController::newAction',  '_route' => 'categoria',);
            }

            // categoria_create
            if ($pathinfo === '/categoria/crear') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categoria_create;
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\CategoriaController::createAction',  '_route' => 'categoria_create',);
            }
            not_categoria_create:

            // categoria_edit
            if (preg_match('#^/categoria/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_edit')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\CategoriaController::editAction',));
            }

            // categoria_update
            if (preg_match('#^/categoria/(?P<id>[^/]++)/actualizar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_categoria_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_update')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\CategoriaController::updateAction',));
            }
            not_categoria_update:

            // categoria_delete
            if (preg_match('#^/categoria/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_delete')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\CategoriaController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/empresa')) {
            // empresa
            if (rtrim($pathinfo, '/') === '/empresa') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'empresa');
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\EmpresaController::newAction',  '_route' => 'empresa',);
            }

            // empresa_create
            if ($pathinfo === '/empresa/crear') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_empresa_create;
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\EmpresaController::createAction',  '_route' => 'empresa_create',);
            }
            not_empresa_create:

            // empresa_edit
            if (preg_match('#^/empresa/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_edit')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\EmpresaController::editAction',));
            }

            // empresa_update
            if (preg_match('#^/empresa/(?P<id>[^/]++)/actualizar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_empresa_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_update')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\EmpresaController::updateAction',));
            }
            not_empresa_update:

            // empresa_delete
            if (preg_match('#^/empresa/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_delete')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\EmpresaController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/area')) {
            // area
            if (rtrim($pathinfo, '/') === '/area') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'area');
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\AreaController::newAction',  '_route' => 'area',);
            }

            // area_create
            if ($pathinfo === '/area/crear') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_area_create;
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\AreaController::createAction',  '_route' => 'area_create',);
            }
            not_area_create:

            // area_edit
            if (preg_match('#^/area/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'area_edit')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\AreaController::editAction',));
            }

            // area_update
            if (preg_match('#^/area/(?P<id>[^/]++)/actualizar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_area_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'area_update')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\AreaController::updateAction',));
            }
            not_area_update:

            // area_delete
            if (preg_match('#^/area/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'area_delete')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\AreaController::deleteAction',));
            }

            // area_etapa
            if (preg_match('#^/area/(?P<areaId>[^/]++)/etapa$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'area_etapa')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\AreaController::etapaAction',));
            }

        }

        if (0 === strpos($pathinfo, '/pais')) {
            // pais
            if (rtrim($pathinfo, '/') === '/pais') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pais');
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\PaisController::newAction',  '_route' => 'pais',);
            }

            // pais_create
            if ($pathinfo === '/pais/crear') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pais_create;
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\PaisController::createAction',  '_route' => 'pais_create',);
            }
            not_pais_create:

            // pais_edit
            if (preg_match('#^/pais/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_edit')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PaisController::editAction',));
            }

            // pais_update
            if (preg_match('#^/pais/(?P<id>[^/]++)/actualizar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_pais_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_update')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PaisController::updateAction',));
            }
            not_pais_update:

            // pais_delete
            if (preg_match('#^/pais/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_delete')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PaisController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/region')) {
            // region
            if (rtrim($pathinfo, '/') === '/region') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'region');
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\RegionController::newAction',  '_route' => 'region',);
            }

            // region_create
            if ($pathinfo === '/region/crear') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_region_create;
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\RegionController::createAction',  '_route' => 'region_create',);
            }
            not_region_create:

            // region_edit
            if (preg_match('#^/region/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'region_edit')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\RegionController::editAction',));
            }

            // region_update
            if (preg_match('#^/region/(?P<id>[^/]++)/actualizar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_region_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'region_update')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\RegionController::updateAction',));
            }
            not_region_update:

            // region_delete
            if (preg_match('#^/region/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'region_delete')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\RegionController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/provincia')) {
            // provincia
            if (rtrim($pathinfo, '/') === '/provincia') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'provincia');
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\ProvinciaController::newAction',  '_route' => 'provincia',);
            }

            // provincia_create
            if ($pathinfo === '/provincia/crear') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_provincia_create;
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\ProvinciaController::createAction',  '_route' => 'provincia_create',);
            }
            not_provincia_create:

            // provincia_edit
            if (preg_match('#^/provincia/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'provincia_edit')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\ProvinciaController::editAction',));
            }

            // provincia_update
            if (preg_match('#^/provincia/(?P<id>[^/]++)/actualizar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_provincia_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'provincia_update')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\ProvinciaController::updateAction',));
            }
            not_provincia_update:

            // provincia_delete
            if (preg_match('#^/provincia/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'provincia_delete')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\ProvinciaController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/ciudad')) {
                // ciudad
                if (rtrim($pathinfo, '/') === '/ciudad') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ciudad');
                    }

                    return array (  '_controller' => 'Frontend\\Bundle\\Controller\\CiudadController::newAction',  '_route' => 'ciudad',);
                }

                // ciudad_create
                if ($pathinfo === '/ciudad/crear') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ciudad_create;
                    }

                    return array (  '_controller' => 'Frontend\\Bundle\\Controller\\CiudadController::createAction',  '_route' => 'ciudad_create',);
                }
                not_ciudad_create:

                // ciudad_edit
                if (preg_match('#^/ciudad/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ciudad_edit')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\CiudadController::editAction',));
                }

                // ciudad_update
                if (preg_match('#^/ciudad/(?P<id>[^/]++)/actualizar$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_ciudad_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ciudad_update')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\CiudadController::updateAction',));
                }
                not_ciudad_update:

                // ciudad_delete
                if (preg_match('#^/ciudad/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ciudad_delete')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\CiudadController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/cargo')) {
                // cargo
                if (rtrim($pathinfo, '/') === '/cargo') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cargo');
                    }

                    return array (  '_controller' => 'Frontend\\Bundle\\Controller\\CargoController::newAction',  '_route' => 'cargo',);
                }

                // cargo_create
                if ($pathinfo === '/cargo/crear') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cargo_create;
                    }

                    return array (  '_controller' => 'Frontend\\Bundle\\Controller\\CargoController::createAction',  '_route' => 'cargo_create',);
                }
                not_cargo_create:

                // cargo_edit
                if (preg_match('#^/cargo/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cargo_edit')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\CargoController::editAction',));
                }

                // cargo_update
                if (preg_match('#^/cargo/(?P<id>[^/]++)/actualizar$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_cargo_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cargo_update')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\CargoController::updateAction',));
                }
                not_cargo_update:

                // cargo_delete
                if (preg_match('#^/cargo/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cargo_delete')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\CargoController::deleteAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/figura')) {
            // figura
            if (rtrim($pathinfo, '/') === '/figura') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'figura');
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\FiguraController::newAction',  '_route' => 'figura',);
            }

            // figura_create
            if ($pathinfo === '/figura/crear') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_figura_create;
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\FiguraController::createAction',  '_route' => 'figura_create',);
            }
            not_figura_create:

            // figura_edit
            if (preg_match('#^/figura/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'figura_edit')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\FiguraController::editAction',));
            }

            // figura_update
            if (preg_match('#^/figura/(?P<id>[^/]++)/actualizar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_figura_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'figura_update')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\FiguraController::updateAction',));
            }
            not_figura_update:

            // figura_delete
            if (preg_match('#^/figura/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'figura_delete')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\FiguraController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/tipocalidad')) {
            // tipocalidad
            if (rtrim($pathinfo, '/') === '/tipocalidad') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipocalidad');
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\TipoCalidadController::newAction',  '_route' => 'tipocalidad',);
            }

            // tipocalidad_create
            if ($pathinfo === '/tipocalidad/crear') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tipocalidad_create;
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\TipoCalidadController::createAction',  '_route' => 'tipocalidad_create',);
            }
            not_tipocalidad_create:

            // tipocalidad_edit
            if (preg_match('#^/tipocalidad/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocalidad_edit')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\TipoCalidadController::editAction',));
            }

            // tipocalidad_update
            if (preg_match('#^/tipocalidad/(?P<id>[^/]++)/actualizar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tipocalidad_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocalidad_update')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\TipoCalidadController::updateAction',));
            }
            not_tipocalidad_update:

            // tipocalidad_delete
            if (preg_match('#^/tipocalidad/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocalidad_delete')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\TipoCalidadController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/medida')) {
            // medida
            if (rtrim($pathinfo, '/') === '/medida') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'medida');
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\MedidaController::newAction',  '_route' => 'medida',);
            }

            // medida_create
            if ($pathinfo === '/medida/crear') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_medida_create;
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\MedidaController::createAction',  '_route' => 'medida_create',);
            }
            not_medida_create:

            // medida_edit
            if (preg_match('#^/medida/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medida_edit')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\MedidaController::editAction',));
            }

            // medida_update
            if (preg_match('#^/medida/(?P<id>[^/]++)/actualizar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_medida_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medida_update')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\MedidaController::updateAction',));
            }
            not_medida_update:

            // medida_delete
            if (preg_match('#^/medida/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medida_delete')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\MedidaController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/pasopedido')) {
            // pasopedido
            if (rtrim($pathinfo, '/') === '/pasopedido') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pasopedido');
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\PasoPedidoController::newAction',  '_route' => 'pasopedido',);
            }

            // pasopedido_create
            if ($pathinfo === '/pasopedido/crear') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pasopedido_create;
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\PasoPedidoController::createAction',  '_route' => 'pasopedido_create',);
            }
            not_pasopedido_create:

            // pasopedido_edit
            if (preg_match('#^/pasopedido/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pasopedido_edit')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PasoPedidoController::editAction',));
            }

            // pasopedido_update
            if (preg_match('#^/pasopedido/(?P<id>[^/]++)/actualizar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_pasopedido_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pasopedido_update')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PasoPedidoController::updateAction',));
            }
            not_pasopedido_update:

            // pasopedido_delete
            if (preg_match('#^/pasopedido/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pasopedido_delete')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PasoPedidoController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario');
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario',);
            }

            // usuario_create
            if ($pathinfo === '/usuario/crear') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuario_create;
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
            }
            not_usuario_create:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\UsuarioController::editAction',));
            }

            // usuario_update
            if (preg_match('#^/usuario/(?P<id>[^/]++)/actualizar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\UsuarioController::updateAction',));
            }
            not_usuario_update:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\UsuarioController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/producto')) {
            // producto
            if (rtrim($pathinfo, '/') === '/producto') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'producto');
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\ProductoController::newAction',  '_route' => 'producto',);
            }

            // producto_create
            if ($pathinfo === '/producto/crear') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_producto_create;
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\ProductoController::createAction',  '_route' => 'producto_create',);
            }
            not_producto_create:

            // producto_edit
            if (preg_match('#^/producto/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_edit')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\ProductoController::editAction',));
            }

            // producto_update
            if (preg_match('#^/producto/(?P<id>[^/]++)/actualizar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_producto_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_update')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\ProductoController::updateAction',));
            }
            not_producto_update:

            // producto_delete
            if (preg_match('#^/producto/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_delete')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\ProductoController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/contacto')) {
            // contacto
            if (rtrim($pathinfo, '/') === '/contacto') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'contacto');
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\ContactoController::newAction',  '_route' => 'contacto',);
            }

            // contacto_create
            if ($pathinfo === '/contacto/crear') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contacto_create;
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\ContactoController::createAction',  '_route' => 'contacto_create',);
            }
            not_contacto_create:

            // contacto_edit
            if (preg_match('#^/contacto/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacto_edit')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\ContactoController::editAction',));
            }

            // contacto_update
            if (preg_match('#^/contacto/(?P<id>[^/]++)/actualizar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_contacto_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacto_update')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\ContactoController::updateAction',));
            }
            not_contacto_update:

            // contacto_delete
            if (preg_match('#^/contacto/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacto_delete')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\ContactoController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/pedido')) {
            // pedido
            if (rtrim($pathinfo, '/') === '/pedido') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pedido');
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::newAction',  '_route' => 'pedido',);
            }

            if (0 === strpos($pathinfo, '/pedido/tableroCo')) {
                // pedido_control
                if ($pathinfo === '/pedido/tableroControl') {
                    return array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::controlAction',  '_route' => 'pedido_control',);
                }

                // pedido_cobros
                if ($pathinfo === '/pedido/tableroCobros') {
                    return array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::cobrosAction',  '_route' => 'pedido_cobros',);
                }

            }

            // pedido_esquema
            if (preg_match('#^/pedido/(?P<id>[^/]++)/esquema$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_esquema')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::esquemaAction',));
            }

            // pedido_create
            if ($pathinfo === '/pedido/crear') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pedido_create;
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::createAction',  '_route' => 'pedido_create',);
            }
            not_pedido_create:

            // pedido_edit
            if (preg_match('#^/pedido/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_edit')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::editAction',));
            }

            // pedido_update
            if (preg_match('#^/pedido/(?P<id>[^/]++)/actualizar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_pedido_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_update')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::updateAction',));
            }
            not_pedido_update:

            // pedido_delete
            if (preg_match('#^/pedido/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_delete')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/pedido/cambia')) {
                if (0 === strpos($pathinfo, '/pedido/cambiaDelegado')) {
                    // pedido_cambiaDelegado1
                    if ($pathinfo === '/pedido/cambiaDelegado1') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_pedido_cambiaDelegado1;
                        }

                        return array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::cambiaDelegado1Action',  '_route' => 'pedido_cambiaDelegado1',);
                    }
                    not_pedido_cambiaDelegado1:

                    // pedido_cambiaDelegado2
                    if ($pathinfo === '/pedido/cambiaDelegado2') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_pedido_cambiaDelegado2;
                        }

                        return array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::cambiaDelegado2Action',  '_route' => 'pedido_cambiaDelegado2',);
                    }
                    not_pedido_cambiaDelegado2:

                    // pedido_cambiaDelegado3
                    if ($pathinfo === '/pedido/cambiaDelegado3') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_pedido_cambiaDelegado3;
                        }

                        return array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::cambiaDelegado3Action',  '_route' => 'pedido_cambiaDelegado3',);
                    }
                    not_pedido_cambiaDelegado3:

                }

                // pedido_cambiaPaso
                if ($pathinfo === '/pedido/cambiaPaso') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pedido_cambiaPaso;
                    }

                    return array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::cambiaPasoAction',  '_route' => 'pedido_cambiaPaso',);
                }
                not_pedido_cambiaPaso:

            }

            // pedido_actualiza_produccion
            if (preg_match('#^/pedido/(?P<id>[^/]++)/(?P<paso>[^/]++)/actualizaProduccion$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pedido_actualiza_produccion;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_actualiza_produccion')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::actualizaProduccionAction',));
            }
            not_pedido_actualiza_produccion:

            // pedido_productos
            if (preg_match('#^/pedido/(?P<id>[^/]++)/productos$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_productos')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::productosAction',));
            }

            // pedido_certificacion_entrega
            if (preg_match('#^/pedido/(?P<id>[^/]++)/certificacionentrega$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_certificacion_entrega')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::certificacionEntregaAction',));
            }

            // pedido_genera_certificacion_entrega
            if (preg_match('#^/pedido/(?P<id>[^/]++)/gcertificacionentrega$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_genera_certificacion_entrega')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::generaCertificacionEntregaAction',));
            }

            // pedido_control_instalacion
            if (preg_match('#^/pedido/(?P<id>[^/]++)/controlinstalacion$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_control_instalacion')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::controlInstalacionAction',));
            }

            // pedido_genera_control_instalacion
            if (preg_match('#^/pedido/(?P<id>[^/]++)/gcontrolinstalacion$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_genera_control_instalacion')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::generaControlInstalacionAction',));
            }

            // pedido_reporte_general
            if (preg_match('#^/pedido/(?P<idempresa>[^/]++)/(?P<idarea>[^/]++)/reporteGeneral$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_reporte_general')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::reporteGeneralAction',));
            }

            // pedido_genera_reporte_general
            if (preg_match('#^/pedido/(?P<idempresa>[^/]++)/(?P<idarea>[^/]++)/greportegeneral$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_genera_reporte_general')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::generaReporteGeneralAction',));
            }

            // pedido_reporte_general_puntos
            if ($pathinfo === '/pedido/reportegeneralpuntos') {
                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::reporteGeneralPuntosAction',  '_route' => 'pedido_reporte_general_puntos',);
            }

            // pedido_genera_reporte_general_puntos
            if ($pathinfo === '/pedido/greportegeneralpuntos') {
                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::generaReporteGeneralPuntosAction',  '_route' => 'pedido_genera_reporte_general_puntos',);
            }

            // pedido_imprimir
            if (preg_match('#^/pedido/(?P<id>[^/]++)/imprimir$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pedido_imprimir;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_imprimir')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::imprimeAction',));
            }
            not_pedido_imprimir:

            // pedido_produccion
            if ($pathinfo === '/pedido/produccion') {
                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::produccionAction',  '_route' => 'pedido_produccion',);
            }

            // pedido_duplicar
            if (preg_match('#^/pedido/(?P<id>[^/]++)/duplicar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_duplicar')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::duplicaAction',));
            }

            // pedido_get_notas_control
            if (preg_match('#^/pedido/(?P<id>[^/]++)/getnotascontrol$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pedido_get_notas_control;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_get_notas_control')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::getPedidoNotasControlAction',));
            }
            not_pedido_get_notas_control:

            // pedido_set_notas_control
            if (preg_match('#^/pedido/(?P<id>[^/]++)/setnotascontrol$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pedido_set_notas_control;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_set_notas_control')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::setPedidoNotasControlAction',));
            }
            not_pedido_set_notas_control:

            // pedido_get_notas_control_pp
            if (preg_match('#^/pedido/(?P<id>[^/]++)/getnotascontrolpp$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pedido_get_notas_control_pp;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_get_notas_control_pp')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::getPPNotasControlAction',));
            }
            not_pedido_get_notas_control_pp:

            // pedido_set_notas_control_pp
            if (preg_match('#^/pedido/(?P<id>[^/]++)/setnotascontrolpp$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pedido_set_notas_control_pp;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_set_notas_control_pp')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoController::setPPNotasControlAction',));
            }
            not_pedido_set_notas_control_pp:

            if (0 === strpos($pathinfo, '/pedidoproducto')) {
                // pedidoproductoxml
                if (preg_match('#^/pedidoproducto/(?P<productoSeleccionadoId>[^/]++)/(?P<nombreProducto>[^/]++)/(?P<cantidad>[^/]++)/(?P<dimensionId>[^/]++)/(?P<dimensionX>[^/]++)/(?P<dimensionY>[^/]++)/(?P<cortesia>[^/]++)/(?P<tipoCalidadId>[^/]++)/(?P<posicion>[^/]++)/(?P<pedidoPk>[^/]++)/seleccion$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedidoproductoxml')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoProductoController::pedidoProductoAction',  'productoSeleccionadoId' => '-',  'nombreProducto' => '-',  'cantidad' => '-',  'dimensionId' => '-',  'dimensionX' => '-',  'dimensionY' => '-',  'cortesia' => '-',  'tipoCalidadId' => '-',  'pedidoPk' => '-',  'posicion' => '-',));
                }

                // pedidoproductoeditlink
                if (preg_match('#^/pedidoproducto/(?P<productoSeleccionadoId>[^/]++)/(?P<nombreProducto>[^/]++)/(?P<cantidad>[^/]++)/(?P<dimensionId>[^/]++)/(?P<dimensionX>[^/]++)/(?P<dimensionY>[^/]++)/(?P<cortesia>[^/]++)/(?P<tipoCalidadId>[^/]++)/(?P<posicion>[^/]++)/(?P<pedidoPk>[^/]++)/editlink$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedidoproductoeditlink')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoProductoController::getEditLinkAction',  'productoSeleccionadoId' => '-',  'nombreProducto' => '-',  'cantidad' => '-',  'dimensionId' => '-',  'dimensionX' => '-',  'dimensionY' => '-',  'cortesia' => '-',  'tipoCalidadId' => '-',  'pedidoPk' => '-',  'posicion' => '-',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/tarea')) {
            // tarea
            if (rtrim($pathinfo, '/') === '/tarea') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tarea');
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\TareaController::newAction',  '_route' => 'tarea',);
            }

            // tarea_create
            if ($pathinfo === '/tarea/crear') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tarea_create;
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\TareaController::createAction',  '_route' => 'tarea_create',);
            }
            not_tarea_create:

            // tarea_edit
            if (preg_match('#^/tarea/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarea_edit')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\TareaController::editAction',));
            }

            // tarea_update
            if (preg_match('#^/tarea/(?P<id>[^/]++)/actualizar$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tarea_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarea_update')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\TareaController::updateAction',));
            }
            not_tarea_update:

            // tarea_delete
            if (preg_match('#^/tarea/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarea_delete')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\TareaController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/reportes')) {
            // menupedido
            if ($pathinfo === '/reportes/pedido') {
                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\ReportesController::menuReportesPedidosAction',  '_route' => 'menupedido',);
            }

            // menugeneral
            if ($pathinfo === '/reportes/general') {
                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\ReportesController::menuReportesGeneralesAction',  '_route' => 'menugeneral',);
            }

            // menupedidofiltrar
            if ($pathinfo === '/reportes/pedidoFiltrar') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_menupedidofiltrar;
                }

                return array (  '_controller' => 'Frontend\\Bundle\\Controller\\ReportesController::menuReportesPedidosFiltrarAction',  '_route' => 'menupedidofiltrar',);
            }
            not_menupedidofiltrar:

            if (0 === strpos($pathinfo, '/reportes/reporte')) {
                // reporte_pedido
                if ($pathinfo === '/reportes/reportePedido') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_reporte_pedido;
                    }

                    return array (  '_controller' => 'Frontend\\Bundle\\Controller\\ReportesController::generaReportePedidoAction',  '_route' => 'reporte_pedido',);
                }
                not_reporte_pedido:

                // reporte_general
                if ($pathinfo === '/reportes/reporteGeneral') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_reporte_general;
                    }

                    return array (  '_controller' => 'Frontend\\Bundle\\Controller\\ReportesController::generaReporteGeneralAction',  '_route' => 'reporte_general',);
                }
                not_reporte_general:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

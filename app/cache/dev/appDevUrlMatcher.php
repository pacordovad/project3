<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/styles')) {
            // _assetic_9f4557b
            if ($pathinfo === '/styles.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9f4557b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_9f4557b',);
            }

            if (0 === strpos($pathinfo, '/styles_')) {
                // _assetic_9f4557b_0
                if ($pathinfo === '/styles_jquery.dataTables_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9f4557b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_9f4557b_0',);
                }

                if (0 === strpos($pathinfo, '/styles_bootstrap')) {
                    // _assetic_9f4557b_1
                    if ($pathinfo === '/styles_bootstrap.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9f4557b',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_9f4557b_1',);
                    }

                    // _assetic_9f4557b_2
                    if ($pathinfo === '/styles_bootstrap-theme.min_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9f4557b',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_9f4557b_2',);
                    }

                }

                // _assetic_9f4557b_3
                if ($pathinfo === '/styles_main_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9f4557b',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_9f4557b_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/jquerymain')) {
            // _assetic_9e40589
            if ($pathinfo === '/jquerymain.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9e40589',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_9e40589',);
            }

            if (0 === strpos($pathinfo, '/jquerymain_')) {
                // _assetic_9e40589_0
                if ($pathinfo === '/jquerymain_jquery-1.10.2_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9e40589',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_9e40589_0',);
                }

                // _assetic_9e40589_1
                if ($pathinfo === '/jquerymain_main_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9e40589',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_9e40589_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/jqueryui')) {
            // _assetic_8036dc1
            if ($pathinfo === '/css/jqueryui.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8036dc1',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8036dc1',);
            }

            // _assetic_8036dc1_0
            if ($pathinfo === '/css/jqueryui_jquery-ui-1.10.3.custom.min_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8036dc1',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8036dc1_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/5114111')) {
            // _assetic_5114111
            if ($pathinfo === '/js/5114111.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 5114111,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5114111',);
            }

            if (0 === strpos($pathinfo, '/js/5114111_')) {
                // _assetic_5114111_0
                if ($pathinfo === '/js/5114111_bootstrap-3.0.0.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 5114111,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5114111_0',);
                }

                if (0 === strpos($pathinfo, '/js/5114111_jquery.')) {
                    // _assetic_5114111_1
                    if ($pathinfo === '/js/5114111_jquery.dataTables-1.9.4.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 5114111,  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_5114111_1',);
                    }

                    // _assetic_5114111_2
                    if ($pathinfo === '/js/5114111_jquery.mixitup.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 5114111,  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_5114111_2',);
                    }

                    // _assetic_5114111_3
                    if ($pathinfo === '/js/5114111_jquery.scrollTo.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 5114111,  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_5114111_3',);
                    }

                }

                // _assetic_5114111_4
                if ($pathinfo === '/js/5114111_modal_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 5114111,  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_5114111_4',);
                }

                // _assetic_5114111_5
                if ($pathinfo === '/js/5114111_popover_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 5114111,  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_5114111_5',);
                }

                // _assetic_5114111_6
                if ($pathinfo === '/js/5114111_button_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 5114111,  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_5114111_6',);
                }

                // _assetic_5114111_7
                if ($pathinfo === '/js/5114111_jquery-ui-1.10.3.custom.min_8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 5114111,  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_5114111_7',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/29ccbd2')) {
            // _assetic_29ccbd2
            if ($pathinfo === '/css/29ccbd2.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '29ccbd2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_29ccbd2',);
            }

            if (0 === strpos($pathinfo, '/css/29ccbd2_')) {
                // _assetic_29ccbd2_0
                if ($pathinfo === '/css/29ccbd2_login_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '29ccbd2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_29ccbd2_0',);
                }

                if (0 === strpos($pathinfo, '/css/29ccbd2_bootstrap')) {
                    // _assetic_29ccbd2_1
                    if ($pathinfo === '/css/29ccbd2_bootstrap.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '29ccbd2',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_29ccbd2_1',);
                    }

                    // _assetic_29ccbd2_2
                    if ($pathinfo === '/css/29ccbd2_bootstrap-theme.min_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '29ccbd2',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_29ccbd2_2',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/ab3b3ec')) {
            // _assetic_ab3b3ec
            if ($pathinfo === '/js/ab3b3ec.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ab3b3ec',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ab3b3ec',);
            }

            if (0 === strpos($pathinfo, '/js/ab3b3ec_')) {
                // _assetic_ab3b3ec_0
                if ($pathinfo === '/js/ab3b3ec_jquery-1.10.2_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ab3b3ec',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ab3b3ec_0',);
                }

                // _assetic_ab3b3ec_1
                if ($pathinfo === '/js/ab3b3ec_bootstrap-3.0.0.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ab3b3ec',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_ab3b3ec_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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

            if (0 === strpos($pathinfo, '/pedidoproducto')) {
                // pedidoproductoxml
                if (preg_match('#^/pedidoproducto/(?P<productoSeleccionadoId>[^/]++)/(?P<nombreProducto>[^/]++)/(?P<cantidad>[^/]++)/(?P<dimensionId>[^/]++)/(?P<dimensionX>[^/]++)/(?P<dimensionY>[^/]++)/(?P<cortesia>[^/]++)/(?P<tipoCalidadId>[^/]++)/(?P<pedidoPk>[^/]++)/seleccion$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedidoproductoxml')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoProductoController::pedidoProductoAction',  'productoSeleccionadoId' => '-',  'nombreProducto' => '-',  'cantidad' => '-',  'dimensionId' => '-',  'dimensionX' => '-',  'dimensionY' => '-',  'cortesia' => '-',  'tipoCalidadId' => '-',  'pedidoPk' => '-',));
                }

                // pedidoproductoeditlink
                if (preg_match('#^/pedidoproducto/(?P<productoSeleccionadoId>[^/]++)/(?P<nombreProducto>[^/]++)/(?P<cantidad>[^/]++)/(?P<dimensionId>[^/]++)/(?P<dimensionX>[^/]++)/(?P<dimensionY>[^/]++)/(?P<cortesia>[^/]++)/(?P<tipoCalidadId>[^/]++)/(?P<pedidoPk>[^/]++)/editlink$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedidoproductoeditlink')), array (  '_controller' => 'Frontend\\Bundle\\Controller\\PedidoProductoController::getEditLinkAction',  'productoSeleccionadoId' => '-',  'nombreProducto' => '-',  'cantidad' => '-',  'dimensionId' => '-',  'dimensionX' => '-',  'dimensionY' => '-',  'cortesia' => '-',  'tipoCalidadId' => '-',  'pedidoPk' => '-',));
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

<?php

/* FrontendBundle:Layouts:base.html.twig */
class __TwigTemplate_4424289a555d80ceba363c8d756161f5c09c4e96a173ead3a6626830ede53dad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'estilos' => array($this, 'block_estilos'),
            'controlm' => array($this, 'block_controlm'),
            'cobrosm' => array($this, 'block_cobrosm'),
            'produccionm' => array($this, 'block_produccionm'),
            'taream' => array($this, 'block_taream'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b9ccb8c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b9ccb8c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/b9ccb8c_jquery.dataTables_1.css");
            // line 11
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "b9ccb8c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b9ccb8c") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/b9ccb8c.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1c983ea_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1c983ea_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1c983ea_bootstrap.min_1.css");
            // line 19
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "1c983ea_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1c983ea_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1c983ea_bootstrap-theme.min_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "1c983ea_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1c983ea_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1c983ea_main_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "1c983ea"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1c983ea") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1c983ea.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "25d9041_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_25d9041_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/25d9041_jquery-1.10.2_1.js");
            // line 25
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "25d9041_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_25d9041_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/25d9041_main_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "25d9041"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_25d9041") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/25d9041.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0d49e82_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d49e82_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/0d49e82_jquery-ui-1.10.3.custom.min_1.css");
            // line 30
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "0d49e82"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0d49e82") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/0d49e82.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 32
        echo "        ";
        $this->displayBlock('estilos', $context, $blocks);
        // line 34
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>     
    <body>
        <input type=\"hidden\" id=\"loading-base-gif\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/loader.gif"), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" id=\"loading-small-base-gif\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/loader-small.gif"), "html", null, true);
        echo "\"/>
        <!-- Fixed navbar -->
        <div class=\"navbar navbar-default navbar-static-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"controlm ";
        // line 46
        $this->displayBlock('controlm', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("pedido_control");
        echo "\">Control</a></li>
                        ";
        // line 47
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR")) {
            echo "<li class=\"cobrosm ";
            $this->displayBlock('cobrosm', $context, $blocks);
            echo "\"><a href=\"";
            echo $this->env->getExtension('routing')->getUrl("pedido_cobros");
            echo "\">Facturación</a></li>";
        }
        // line 48
        echo "                        <li class=\"produccionm ";
        $this->displayBlock('produccionm', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("pedido_produccion");
        echo "\">Proceso</a></li>
                        <li class=\"tareasm ";
        // line 49
        $this->displayBlock('taream', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("tarea");
        echo "\">Lista de tareas</a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 52
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR")) {
            // line 53
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Opciones administraci&oacute;n <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getUrl("producto");
            echo "\">Productos</a></li>
                                <li><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getUrl("categoria");
            echo "\">Categor&iacute;as</a></li>
                                <li><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getUrl("figura");
            echo "\">Figuras</a></li>
                                <li><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getUrl("tipocalidad");
            echo "\">Tipos de calidad</a></li>
                                <li><a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getUrl("medida");
            echo "\">Medidas</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getUrl("empresa");
            echo "\">Empresas</a></li>
                                <li><a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getUrl("area");
            echo "\">&Aacute;reas</a></li>
                                <li><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getUrl("contacto");
            echo "\">Contactos</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getUrl("usuario");
            echo "\">Usuarios</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getUrl("pasopedido");
            echo "\">Pasos de pedidos</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getUrl("pais");
            echo "\">Pa&iacute;ses</a></li>
                                <li><a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getUrl("region");
            echo "\">Regiones</a></li>
                                <li><a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getUrl("provincia");
            echo "\">Provincias</a></li>
                                <li><a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getUrl("ciudad");
            echo "\">Ciudades</a></li>
                                <li><a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getUrl("cargo");
            echo "\">Cargos</a></li>
                            </ul>
                        </li>
                        ";
        }
        // line 78
        echo "                        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR")) {
            // line 79
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Reportes<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\" onclick=\"muestraMenuReportePedidos(event,'";
            // line 82
            echo $this->env->getExtension('routing')->getUrl("menupedido");
            echo "')\">Reportes por pedido</a></li>
                                <li><a href=\"#\" onclick=\"muestraMenuReporteGeneral(event,'";
            // line 83
            echo $this->env->getExtension('routing')->getUrl("menugeneral");
            echo "')\">Reportes generales</a></li>
                            </ul>
                        </li>
                        ";
        }
        // line 87
        echo "                        <li><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("logout");
        echo "\">Bienvenido ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombres"), "html", null, true);
        echo ", salir</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class=\"container\">
            ";
        // line 94
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 95
            echo "                <div class=\"alert alert-dismissable alert-success\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    ";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 101
            echo "                <div class=\"alert alert-dismissable alert-warning\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    ";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 107
            echo "                <div class=\"alert alert-dismissable alert-warning\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    ";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "            <div>
                <h1></h1>
                ";
        // line 114
        $this->displayBlock('body', $context, $blocks);
        // line 115
        echo "            </div>
        </div> <!-- /container -->

        ";
        // line 118
        $this->env->loadTemplate("FrontendBundle:Layouts:modal.html.twig")->display($context);
        // line 119
        echo "        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        ";
        // line 122
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3b8dad4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3b8dad4_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3b8dad4_jquery.dataTables-1.9.4.min_1.js");
            // line 125
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "3b8dad4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3b8dad4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3b8dad4.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 127
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5114111_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5114111_bootstrap-3.0.0.min_1.js");
            // line 137
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "5114111_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5114111_jquery.dataTables-1.9.4.min_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "5114111_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5114111_jquery.mixitup.min_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "5114111_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5114111_jquery.scrollTo.min_4.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "5114111_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5114111_modal_5.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "5114111_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5114111_popover_6.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "5114111_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5114111_button_7.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "5114111_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5114111_jquery-ui-1.10.3.custom.min_8.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "5114111"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5114111.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 139
        echo "        <script type=\"text/javascript\">
            \$(document).ready(function() {
                window.dataTable = \$('#datatable_crud').dataTable({
                        \"oLanguage\": {
                            \"sUrl\": '";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/datatables.spanish.txt"), "html", null, true);
        echo "'
                        }
                });
                window.dataTable2 = \$('#datatable_crud_posicion').dataTable({
                        \"aaSorting\": [[ 1, \"asc\" ]],    
                        \"oLanguage\": {
                            \"sUrl\": '";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/datatables.spanish.txt"), "html", null, true);
        echo "'
                        }
                });
                window.dataTable3 = \$('#datatable_crud_pedidos').dataTable({
                        \"aaSorting\": [[ 6, \"desc\" ]],    
                        \"oLanguage\": {
                            \"sUrl\": '";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/datatables.spanish.txt"), "html", null, true);
        echo "'
                        }
                });
            });
        </script>
        ";
        // line 160
        $this->displayBlock('javascripts', $context, $blocks);
        // line 162
        echo "    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Sistema de Control de Producci&oacute;n";
    }

    // line 32
    public function block_estilos($context, array $blocks = array())
    {
        // line 33
        echo "        ";
    }

    // line 46
    public function block_controlm($context, array $blocks = array())
    {
    }

    // line 47
    public function block_cobrosm($context, array $blocks = array())
    {
    }

    // line 48
    public function block_produccionm($context, array $blocks = array())
    {
    }

    // line 49
    public function block_taream($context, array $blocks = array())
    {
    }

    // line 114
    public function block_body($context, array $blocks = array())
    {
    }

    // line 160
    public function block_javascripts($context, array $blocks = array())
    {
        // line 161
        echo "        ";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Layouts:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 161,  517 => 160,  512 => 114,  507 => 49,  502 => 48,  497 => 47,  492 => 46,  488 => 33,  485 => 32,  479 => 6,  474 => 162,  472 => 160,  464 => 155,  455 => 149,  446 => 143,  440 => 139,  384 => 137,  379 => 127,  365 => 125,  361 => 122,  356 => 119,  354 => 118,  349 => 115,  347 => 114,  343 => 112,  334 => 109,  330 => 107,  325 => 106,  316 => 103,  312 => 101,  307 => 100,  298 => 97,  294 => 95,  290 => 94,  277 => 87,  270 => 83,  266 => 82,  261 => 79,  258 => 78,  251 => 74,  247 => 73,  243 => 72,  239 => 71,  235 => 70,  230 => 68,  225 => 66,  220 => 64,  216 => 63,  212 => 62,  207 => 60,  203 => 59,  199 => 58,  195 => 57,  191 => 56,  186 => 53,  184 => 52,  176 => 49,  169 => 48,  161 => 47,  155 => 46,  144 => 38,  140 => 37,  133 => 34,  130 => 32,  116 => 30,  111 => 27,  91 => 25,  86 => 21,  60 => 19,  55 => 13,  41 => 11,  37 => 7,  33 => 6,  27 => 2,);
    }
}

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
            // asset "9f4557b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9f4557b_0") : $this->env->getExtension('assets')->getAssetUrl("styles_jquery.dataTables_1.css");
            // line 14
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "9f4557b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9f4557b_1") : $this->env->getExtension('assets')->getAssetUrl("styles_bootstrap.min_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "9f4557b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9f4557b_2") : $this->env->getExtension('assets')->getAssetUrl("styles_bootstrap-theme.min_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "9f4557b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9f4557b_3") : $this->env->getExtension('assets')->getAssetUrl("styles_main_4.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "9f4557b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9f4557b") : $this->env->getExtension('assets')->getAssetUrl("styles.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9e40589_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9e40589_0") : $this->env->getExtension('assets')->getAssetUrl("jquerymain_jquery-1.10.2_1.js");
            // line 21
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "9e40589_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9e40589_1") : $this->env->getExtension('assets')->getAssetUrl("jquerymain_main_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "9e40589"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9e40589") : $this->env->getExtension('assets')->getAssetUrl("jquerymain.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 23
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8036dc1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8036dc1_0") : $this->env->getExtension('assets')->getAssetUrl("css/jqueryui_jquery-ui-1.10.3.custom.min_1.css");
            // line 28
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "8036dc1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8036dc1") : $this->env->getExtension('assets')->getAssetUrl("css/jqueryui.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 30
        echo "        ";
        $this->displayBlock('estilos', $context, $blocks);
        // line 32
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>     
    <body>
        <input type=\"hidden\" id=\"loading-base-gif\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/loader.gif"), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" id=\"loading-small-base-gif\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/loader-small.gif"), "html", null, true);
        echo "\"/>
        <!-- Fixed navbar -->
        <div class=\"navbar navbar-default navbar-static-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        ";
        // line 44
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR")) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getUrl("pedido_control");
            echo "\">Control</a></li>";
        }
        // line 45
        echo "                        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR")) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getUrl("pedido_cobros");
            echo "\">Cobros</a></li>";
        }
        // line 46
        echo "                        <li><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("pedido_produccion");
        echo "\">Produccion</a></li>
                        <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getUrl("tarea");
        echo "\">Tareas</a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 50
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR")) {
            // line 51
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Opciones administraci&oacute;n <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getUrl("producto");
            echo "\">Productos</a></li>
                                <li><a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getUrl("categoria");
            echo "\">Categor&iacute;as</a></li>
                                <li><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getUrl("figura");
            echo "\">Figuras</a></li>
                                <li><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getUrl("tipocalidad");
            echo "\">Tipos de calidad</a></li>
                                <li><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getUrl("medida");
            echo "\">Medidas</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getUrl("empresa");
            echo "\">Empresas</a></li>
                                <li><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getUrl("area");
            echo "\">&Aacute;reas</a></li>
                                <li><a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getUrl("contacto");
            echo "\">Contactos</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getUrl("usuario");
            echo "\">Usuarios</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getUrl("pasopedido");
            echo "\">Pasos de pedidos</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getUrl("pais");
            echo "\">Pa&iacute;ses</a></li>
                                <li><a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getUrl("region");
            echo "\">Regiones</a></li>
                                <li><a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getUrl("provincia");
            echo "\">Provincias</a></li>
                                <li><a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getUrl("ciudad");
            echo "\">Ciudades</a></li>
                                <li><a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getUrl("cargo");
            echo "\">Cargos</a></li>
                            </ul>
                        </li>
                        ";
        }
        // line 76
        echo "                        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR")) {
            // line 77
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Reportes<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\" onclick=\"muestraMenuReportePedidos(event,'";
            // line 80
            echo $this->env->getExtension('routing')->getUrl("menupedido");
            echo "')\">Reportes por pedido</a></li>
                                <li><a href=\"#\" onclick=\"muestraMenuReporteGeneral(event,'";
            // line 81
            echo $this->env->getExtension('routing')->getUrl("menugeneral");
            echo "')\">Reportes generales</a></li>
                            </ul>
                        </li>
                        ";
        }
        // line 85
        echo "                        <li><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("logout");
        echo "\">Bienvenido ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "nombres"), "html", null, true);
        echo ", salir</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class=\"container\">
            ";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 93
            echo "                <div class=\"alert alert-dismissable alert-success\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    ";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 99
            echo "                <div class=\"alert alert-dismissable alert-warning\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    ";
            // line 101
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 105
            echo "                <div class=\"alert alert-dismissable alert-warning\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    ";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "            <div>
                <h1></h1>
                ";
        // line 112
        $this->displayBlock('body', $context, $blocks);
        // line 113
        echo "            </div>
        </div> <!-- /container -->

        ";
        // line 116
        $this->env->loadTemplate("FrontendBundle:Layouts:modal.html.twig")->display($context);
        // line 117
        echo "        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        ";
        // line 120
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5114111_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111_0") : $this->env->getExtension('assets')->getAssetUrl("js/5114111_bootstrap-3.0.0.min_1.js");
            // line 130
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "5114111_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111_1") : $this->env->getExtension('assets')->getAssetUrl("js/5114111_jquery.dataTables-1.9.4.min_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "5114111_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111_2") : $this->env->getExtension('assets')->getAssetUrl("js/5114111_jquery.mixitup.min_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "5114111_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111_3") : $this->env->getExtension('assets')->getAssetUrl("js/5114111_jquery.scrollTo.min_4.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "5114111_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111_4") : $this->env->getExtension('assets')->getAssetUrl("js/5114111_modal_5.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "5114111_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111_5") : $this->env->getExtension('assets')->getAssetUrl("js/5114111_popover_6.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "5114111_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111_6") : $this->env->getExtension('assets')->getAssetUrl("js/5114111_button_7.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "5114111_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111_7") : $this->env->getExtension('assets')->getAssetUrl("js/5114111_jquery-ui-1.10.3.custom.min_8.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "5114111"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5114111") : $this->env->getExtension('assets')->getAssetUrl("js/5114111.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 132
        echo "        <script type=\"text/javascript\">
            \$(document).ready(function() {
                window.dataTable = \$('#datatable_crud').dataTable({
                        \"oLanguage\": {
                            \"sUrl\": '";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/datatables.spanish.txt"), "html", null, true);
        echo "'
                        }
                });
                window.dataTable2 = \$('#datatable_crud_posicion').dataTable({
                        \"aaSorting\": [[ 1, \"asc\" ]],    
                        \"oLanguage\": {
                            \"sUrl\": '";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/datatables.spanish.txt"), "html", null, true);
        echo "'
                        }
                });
            });
        </script>
        ";
        // line 147
        $this->displayBlock('javascripts', $context, $blocks);
        // line 149
        echo "    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Sistema de Control de Producci&oacute;n";
    }

    // line 30
    public function block_estilos($context, array $blocks = array())
    {
        // line 31
        echo "        ";
    }

    // line 112
    public function block_body($context, array $blocks = array())
    {
    }

    // line 147
    public function block_javascripts($context, array $blocks = array())
    {
        // line 148
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
        return array (  450 => 148,  447 => 147,  442 => 112,  438 => 31,  435 => 30,  429 => 6,  424 => 149,  422 => 147,  414 => 142,  405 => 136,  399 => 132,  343 => 130,  339 => 120,  334 => 117,  332 => 116,  327 => 113,  325 => 112,  321 => 110,  312 => 107,  308 => 105,  303 => 104,  294 => 101,  290 => 99,  285 => 98,  276 => 95,  272 => 93,  268 => 92,  255 => 85,  248 => 81,  244 => 80,  239 => 77,  236 => 76,  229 => 72,  225 => 71,  221 => 70,  217 => 69,  213 => 68,  208 => 66,  203 => 64,  198 => 62,  194 => 61,  190 => 60,  185 => 58,  181 => 57,  177 => 56,  173 => 55,  169 => 54,  164 => 51,  162 => 50,  156 => 47,  151 => 46,  144 => 45,  138 => 44,  127 => 36,  123 => 35,  116 => 32,  113 => 30,  99 => 28,  94 => 23,  74 => 21,  69 => 16,  37 => 14,  33 => 7,  29 => 6,  23 => 2,  34 => 5,  31 => 4,  28 => 3,);
    }
}

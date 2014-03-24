<?php

/* FrontendBundle:Pedido:controlInstalacion.html.twig */
class __TwigTemplate_568b70a6890ec7d2504e2fa6d3936e9f0e1ef5b0b184cc073352c9f67ae9ef9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle:Layouts:simple.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontendBundle:Layouts:simple.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<table style=\"width: 100%\">
        <tr>
            <td style=\"width: 60%\"></td>
            <td style=\"width: 20%\"><label>C&oacute;digo de pedido<label></td>
            <td style=\"width: 20%\"><span style=\"color: #3276b1; font-size: 150%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idRecur"), "html", null, true);
        echo "</span></td>
        </tr>
        <tr>
            <td style=\"width: 60%\"></td>
            <td style=\"width: 20%\"><label>Fecha de registro</label></td>
            <td style=\"width: 20%\">";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaRegistro"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td style=\"width: 60%\"></td>
            <td style=\"width: 20%\"><label>Fecha de &uacute;ltima actualizaci&oacute;n</label></td>
            <td style=\"width: 20%\">";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaActualizacion"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td style=\"width: 60%\"></td>
            <td style=\"width: 20%\"><label>Usuario &uacute;ltima actualizaci&oacute;n</label></td>
            <td style=\"width: 20%\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ultimaActualizacionUsuarioPk"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td style=\"width: 60%\"><h1>Control de Instalaci&oacute;n</h1></td>
            <td style=\"width: 20%\"></td>
            <td style=\"width: 20%\"></td>
        </tr>
    </table>
    <hr/>
    <table style=\"width: 100%\">
        <tr>
            <td style=\"width: 20%\"><label>Empresa</label></td>
            <td style=\"width: 40%\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "empresaPk"), "html", null, true);
        echo "</td>
            <td style=\"width: 20%\"><label>RUC<label></td>
            <td style=\"width: 40%\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "empresaPk"), "ruc"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td style=\"width: 20%\"><label>Direcci&oacute;n</label></td>
            <td style=\"width: 40%\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "empresaPk"), "direccion"), "html", null, true);
        echo "</td>
            <td style=\"width: 20%\"><label>Telf</label></td>
            <td style=\"width: 40%\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "empresaPk"), "telefono"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td style=\"width: 20%\"><label>&Aacute;rea</label></td>
            <td style=\"width: 40%\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaContacto"), "html", null, true);
        echo "</td>
            <td style=\"width: 20%\"><label>Etapa</label></td>
            <td style=\"width: 40%\">";
        // line 49
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FrontendBundle:Area:etapa", array("areaId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "id"))), array());
        echo "</td>
        </tr>
        <tr>
            <td style=\"width: 20%\"></td>
            <td style=\"width: 40%\"></td>
            <td style=\"width: 20%\"><label>Fecha reporte</label></td>
            <td style=\"width: 40%\">";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
    </table>
    <hr/>
    <h3>Productos</h3>
    <table>
        <tr>
            <th style=\"width: 10%\">#</th>
            <th style=\"width: 30%\">Producto</th>
            <th style=\"width: 10%\">Cantidad</th>
            <th style=\"width: 10%\">Alto (cm)</th>
            <th style=\"width: 10%\">Ancho (cm)</th>
            <th style=\"width: 20%\">Calidad</th>
            <th style=\"width: 10%\">Instalado</th>
        </tr>
        ";
        // line 70
        $context["i"] = 1;
        // line 71
        echo "        ";
        $context["cantidad"] = 0;
        // line 72
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoProducto"));
        foreach ($context['_seq'] as $context["_key"] => $context["pedidoProducto"]) {
            // line 73
            echo "            ";
            if (($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cortesia") != true)) {
                // line 74
                echo "                <tr>
                    <td>";
                // line 75
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</td>
                    <td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "nombreProducto"), "html", null, true);
                echo "</td>
                    <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"), "html", null, true);
                echo "</td>
                    <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "alto"), "html", null, true);
                echo "</td>
                    <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "ancho"), "html", null, true);
                echo "</td>
                    <td>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "tipoCalidadPk"), "html", null, true);
                echo "</td>
                    <td>[&nbsp;&nbsp;]</td>
                </tr>
                ";
                // line 83
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 84
                echo "                ";
                $context["cantidad"] = ((isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")) + $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"));
                // line 85
                echo "            ";
            }
            // line 86
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedidoProducto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        <tr>
            <th></th>
            <th></th>
            <th style=\"border-top: 1px solid\">";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")), "html", null, true);
        echo "</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </table>
    ";
        // line 97
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aplicaConcepto2")) {
            // line 98
            echo "    <hr/>
    <h3>Productos de Cortes&iacute;a</h3>
    <table>
        <tr>
            <th style=\"width: 10%\">#</th>
            <th style=\"width: 30%\">Producto</th>
            <th style=\"width: 10%\">Cantidad</th>
            <th style=\"width: 10%\">Alto (cm)</th>
            <th style=\"width: 10%\">Ancho (cm)</th>
            <th style=\"width: 20%\">Calidad</th>
            <th style=\"width: 10%\">Instalado</th>
        </tr>
        ";
            // line 110
            $context["i"] = 1;
            // line 111
            echo "        ";
            $context["cantidad"] = 0;
            // line 112
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoProducto"));
            foreach ($context['_seq'] as $context["_key"] => $context["pedidoProducto"]) {
                // line 113
                echo "            ";
                if (($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cortesia") == true)) {
                    // line 114
                    echo "                <tr>
                    <td>";
                    // line 115
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "nombreProducto"), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 118
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "alto"), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 119
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "ancho"), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 120
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "tipoCalidadPk"), "html", null, true);
                    echo "</td>
                    <td>[&nbsp;&nbsp;]</td>
                </tr>
                ";
                    // line 123
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 124
                    echo "                ";
                    $context["cantidad"] = ((isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")) + $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"));
                    // line 125
                    echo "            ";
                }
                // line 126
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedidoProducto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "        <tr>
            <th></th>
            <th></th>
            <th style=\"border-top: 1px solid\">";
            // line 130
            echo twig_escape_filter($this->env, (isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")), "html", null, true);
            echo "</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </table>
    ";
        }
        // line 138
        echo "    <table style=\"width: 100%\">
        <tr>
            <td style=\"width: 20%\"><label>Notas</label></td>
            <td style=\"width: 80%\">";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notas"), "html", null, true);
        echo "</td>
        </tr>
    </table>
    <br/><br/><br/><br/><br/><br/>
    <table style=\"width: 100%\">
        <tr>
            <td style=\"width: 10%\"></td>
            <td style=\"border-top: 1px solid;font-weight: bold; text-align: center; width: 40%\">Firma Autorizada</td>
            <td style=\"width: 20%\"></td>
            <td style=\"border-top: 1px solid;font-weight: bold; text-align: center; width: 40%\">Cliente</td>
            <td style=\"width: 10%\"></td>
        </tr>
        <tr>
            <td style=\"width: 10%\"></td>
            <td style=\"width: 40%\"></td>
            <td style=\"width: 20%\"></td>
            <td style=\"border-bottom: 1px solid;font-weight: bold; width: 40%\">Nombre:</td>
            <td style=\"width: 10%\"></td>
        </tr>
        <tr>
            <td style=\"width: 10%\"></td>
            <td style=\"width: 40%\"></td>
            <td style=\"width: 20%\"></td>
            <td style=\"border-bottom: 1px solid;font-weight: bold; width: 40%\">Fecha:</td>
            <td style=\"width: 10%\"></td>
        </tr>
        <tr>
            <td style=\"width: 10%\"></td>
            <td style=\"width: 40%\"></td>
            <td style=\"width: 20%\"></td>
            <td style=\"border-bottom: 1px solid;font-weight: bold; width: 40%\">Hora:</td>
            <td style=\"width: 10%\"></td>
        </tr>
    </table>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Pedido:controlInstalacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 141,  291 => 138,  280 => 130,  275 => 127,  269 => 126,  266 => 125,  263 => 124,  261 => 123,  255 => 120,  251 => 119,  247 => 118,  243 => 117,  239 => 116,  235 => 115,  232 => 114,  229 => 113,  224 => 112,  221 => 111,  219 => 110,  205 => 98,  203 => 97,  193 => 90,  188 => 87,  182 => 86,  179 => 85,  176 => 84,  174 => 83,  168 => 80,  164 => 79,  160 => 78,  156 => 77,  152 => 76,  148 => 75,  145 => 74,  142 => 73,  137 => 72,  134 => 71,  132 => 70,  114 => 55,  105 => 49,  100 => 47,  93 => 43,  88 => 41,  81 => 37,  76 => 35,  61 => 23,  53 => 18,  45 => 13,  37 => 8,  31 => 4,  28 => 3,);
    }
}

<?php

/* FrontendBundle:Pedido:listado.html.twig */
class __TwigTemplate_6ced5424d00e07aae58c5cfeff779a917a6e6c21a89ff93202e870995b0edb13 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
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
            <td style=\"width: 60%\"><h1>Listado de Productos</h1></td>
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
    </table>
    <hr/>
    <h3>Productos</h3>
    <table style=\"width: 100%;\">
        <tr>
            <th>#</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Alto (cm)</th>
            <th>Ancho (cm)</th>
            <th>Calidad</th>
            <th>V. Unit</th>
            <th>Total</th>
        </tr>
        ";
        // line 65
        $context["i"] = 1;
        // line 66
        echo "        ";
        $context["cantidad"] = 0;
        // line 67
        echo "        ";
        $context["total"] = 0;
        // line 68
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoProducto"));
        foreach ($context['_seq'] as $context["_key"] => $context["pedidoProducto"]) {
            // line 69
            echo "            ";
            if (($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cortesia") != true)) {
                // line 70
                echo "                <tr>
                    <td>";
                // line 71
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</td>
                    <td>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "nombreProducto"), "html", null, true);
                echo "</td>
                    <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"), "html", null, true);
                $context["cantidad"] = ((isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")) + $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"));
                echo "</td>
                    <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "alto"), "html", null, true);
                echo "</td>
                    <td>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "ancho"), "html", null, true);
                echo "</td>
                    <td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "tipoCalidadPk"), "html", null, true);
                echo "</td>
                    <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "precioVenta"), "html", null, true);
                echo "</td>
                    <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "total"), "html", null, true);
                $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "total"));
                echo "</td>
                </tr>
                ";
                // line 80
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 81
                echo "            ";
            }
            // line 82
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedidoProducto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        <tr id=\"tot-row-cortesia\">
            <th></th>
            <th></th>
            <th id=\"tot-cantidad-cortesia\" style=\"border-top: 1px solid\">";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")), "html", null, true);
        echo "</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th id=\"tot-precio-cortesia\" style=\"border-top: 1px solid\">";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</th>
        </tr>
    </table>
    ";
        // line 94
        $context["hayCortesias"] = false;
        // line 95
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoProducto"));
        foreach ($context['_seq'] as $context["_key"] => $context["pedidoProducto"]) {
            // line 96
            echo "        ";
            if (($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cortesia") == true)) {
                // line 97
                echo "            ";
                $context["hayCortesias"] = true;
                // line 98
                echo "        ";
            }
            // line 99
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedidoProducto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "    ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aplicaConcepto2") && ((isset($context["hayCortesias"]) ? $context["hayCortesias"] : $this->getContext($context, "hayCortesias")) == true))) {
            // line 101
            echo "    <br/>
    <h4>Productos de Cortes&iacute;a</h4>
    <table style=\"width: 100%;\">
        <tr>
            <th>#</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Alto (cm)</th>
            <th>Ancho (cm)</th>
            <th>Calidad</th>
            <th>V. Unit</th>
            <th>Total</th>
        </tr>
        ";
            // line 114
            $context["i"] = 1;
            // line 115
            echo "        ";
            $context["cantidad"] = 0;
            // line 116
            echo "        ";
            $context["total"] = 0;
            // line 117
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoProducto"));
            foreach ($context['_seq'] as $context["_key"] => $context["pedidoProducto"]) {
                // line 118
                echo "            ";
                if (($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cortesia") == true)) {
                    // line 119
                    echo "                <tr>
                    <td>";
                    // line 120
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 121
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "nombreProducto"), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 122
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"), "html", null, true);
                    $context["cantidad"] = ((isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")) + $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"));
                    echo "</td>
                    <td>";
                    // line 123
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "alto"), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 124
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "ancho"), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 125
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "tipoCalidadPk"), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 126
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "precioVenta"), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 127
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "total"), "html", null, true);
                    $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "total"));
                    echo "</td>
                </tr>
                ";
                    // line 129
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 130
                    echo "            ";
                }
                // line 131
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedidoProducto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "        <tr id=\"tot-row-cortesia\">
            <th></th>
            <th></th>
            <th id=\"tot-cantidad-cortesia\" style=\"border-top: 1px solid\">";
            // line 135
            echo twig_escape_filter($this->env, (isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")), "html", null, true);
            echo "</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th id=\"tot-precio-cortesia\" style=\"border-top: 1px solid\">";
            // line 140
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "</th>
        </tr>
    </table>
    <br/>
    <br/>
    ";
        }
        // line 146
        echo "    <table style=\"width: 100%\">
        <tr>
            <td style=\"width: 20%\"><label>Notas</label></td>
            <td style=\"width: 80%\">";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notas"), "html", null, true);
        echo "</td>
        </tr>
    </table>
    <script type=\"text/javascript\">
        window.print();
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Pedido:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 149,  335 => 146,  326 => 140,  318 => 135,  313 => 132,  307 => 131,  304 => 130,  302 => 129,  296 => 127,  292 => 126,  288 => 125,  284 => 124,  280 => 123,  275 => 122,  271 => 121,  267 => 120,  264 => 119,  261 => 118,  256 => 117,  253 => 116,  250 => 115,  248 => 114,  233 => 101,  230 => 100,  224 => 99,  221 => 98,  218 => 97,  215 => 96,  210 => 95,  208 => 94,  202 => 91,  194 => 86,  189 => 83,  183 => 82,  180 => 81,  178 => 80,  172 => 78,  168 => 77,  164 => 76,  160 => 75,  156 => 74,  151 => 73,  147 => 72,  143 => 71,  140 => 70,  137 => 69,  132 => 68,  129 => 67,  126 => 66,  124 => 65,  105 => 49,  100 => 47,  93 => 43,  88 => 41,  81 => 37,  76 => 35,  61 => 23,  53 => 18,  45 => 13,  37 => 8,  31 => 4,  28 => 3,);
    }
}

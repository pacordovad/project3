<?php

/* FrontendBundle:Pedido:esquemasimple.html.twig */
class __TwigTemplate_50017b8500d343fa2e8119b71cc7dcf742d6467b11e8a6bb26c75eb123f9cdad extends Twig_Template
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
            <td style=\"width: 60%\"><h1>Esquema de Producción</h1></td>
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
    ";
        // line 53
        $context["i"] = 0;
        // line 54
        echo "    <table style=\"width: 100%\">
        <tr>
    ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["pedidoProducto"]) {
            // line 57
            echo "        ";
            if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 5) == 0)) {
                // line 58
                echo "            </tr>
            <tr>
        ";
            }
            // line 61
            echo "        <td style=\"width: 20%; vertical-align: top\">
            <h4>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "nombreProducto"), "html", null, true);
            echo "</h4>
            ";
            // line 63
            if (file_exists((((((isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")) . "/uploads/productos/p") . $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "id")) . ".") . $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "imagenExtension")))) {
                // line 64
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image(((("@FrontendBundle/Resources/public/uploads/productos/p" . $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "id")) . ".") . $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "imagenExtension"))), "cropResize", array(0 => 100, 1 => 100), "method"), "html", null, true);
                echo "\" />
            ";
            }
            // line 66
            echo "            <br/>
            <label>Producto:</label> ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "html", null, true);
            echo "<br/>
            <label>Categor&iacute;a:</label> ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "categoriaPk"), "html", null, true);
            echo "<br/>
            <label>Cantidad:</label>  ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"), "html", null, true);
            echo "<br/>
            <label>Calidad:</label>  ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "tipoCalidadPk"), "html", null, true);
            echo "<br/>
            <label>Medidas:</label>  ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "medidaPk"), "html", null, true);
            echo "<br/>
            <br/>
        </td>
        ";
            // line 74
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 75
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedidoProducto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </tr>
    </table>
    <script type=\"text/javascript\">
        window.print();
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Pedido:esquemasimple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 76,  172 => 75,  170 => 74,  164 => 71,  160 => 70,  156 => 69,  152 => 68,  148 => 67,  145 => 66,  139 => 64,  137 => 63,  133 => 62,  130 => 61,  125 => 58,  122 => 57,  118 => 56,  114 => 54,  112 => 53,  105 => 49,  100 => 47,  93 => 43,  88 => 41,  81 => 37,  76 => 35,  61 => 23,  53 => 18,  45 => 13,  37 => 8,  31 => 4,  28 => 3,);
    }
}

<?php

/* FrontendBundle:Pedido:pedido.html.twig */
class __TwigTemplate_c5b6e6fb7f83137a6b991426857660801820d36bb8c0a3dc59ae2d6c003397d8 extends Twig_Template
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
            <td style=\"width: 60%\"><h1>Pedido</h1></td>
            <td style=\"width: 20%\"><label>Usuario &uacute;ltima actualizaci&oacute;n</label></td>
            <td style=\"width: 20%\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ultimaActualizacionUsuarioPk"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td style=\"width: 60%\"></td>
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
    <table style=\"width: 100%\">
        <tr>
            <td style=\"width: 60%\"><label>Concepto</label></td>
            <td><label>Valor</label></td>
            <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subtotalSinDescuento"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td style=\"width: 60%\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "conceptoFactura"), "html", null, true);
        echo "</td>
            <td><label>Subtotal</label></td>
            <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subtotalSinDescuento"), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 64
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aplicaConcepto1")) {
            // line 65
            echo "        <tr>
            <td style=\"width: 60%\"></td>
            <td><label>Descuento</label></td>
            <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "totalDescuento"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descuento"), "html", null, true);
            echo "%)</td>
        </tr>
        <tr>
            <td style=\"width: 60%\"></td>
            <td><label>Subtotal descuento</label></td>
            <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subtotal"), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        // line 76
        echo "        <tr>
            <td style=\"width: 60%\"><label>N&uacute;mero de productos</label> ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getNumPedidoProducto", array(), "method"), "html", null, true);
        echo "</td>
            <td><label>IVA (12%)</label></td>
            <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iva"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td style=\"width: 60%\"></td>
            <td><label>Total</label></td>
            <td>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "total"), "html", null, true);
        echo "</td>
        </tr>
    </table>
    <table style=\"width: 100%\">
        <tr>
            <td style=\"width: 20%\"><label>Fecha de entrega</label></td>
            <td style=\"width: 80%\">";
        // line 90
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaMaximaEntrega"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td style=\"width: 20%\"><label>Notas</label></td>
            <td style=\"width: 80%\">";
        // line 94
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
    <script type=\"text/javascript\">
        window.print();
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Pedido:pedido.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 94,  180 => 90,  171 => 84,  163 => 79,  158 => 77,  155 => 76,  149 => 73,  139 => 68,  134 => 65,  132 => 64,  127 => 62,  122 => 60,  116 => 57,  105 => 49,  100 => 47,  93 => 43,  88 => 41,  81 => 37,  76 => 35,  61 => 23,  53 => 18,  45 => 13,  37 => 8,  31 => 4,  28 => 3,);
    }
}

<?php

/* FrontendBundle:Pedido:reciboPago.html.twig */
class __TwigTemplate_1b90e0d02e95ef4f5a3c35f5870d435d6ba82d65566c36a6adb0c7848f89f6c0 extends Twig_Template
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
        $context["num_financiamiento"] = 1;
        // line 5
        echo "    ";
        if ((((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "financiamiento"))) && ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "financiamiento") != "")) && ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "financiamiento") > 0))) {
            // line 6
            echo "        ";
            $context["num_financiamiento"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "financiamiento");
            // line 7
            echo "    ";
        }
        // line 8
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["num_financiamiento"]) ? $context["num_financiamiento"] : $this->getContext($context, "num_financiamiento"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            echo "    <table style=\"width: 100%\">
        <tr>
            <td style=\"width: 60%\"></td>
            <td style=\"width: 20%\"><label>C&oacute;digo de pedido<label></td>
            <td style=\"width: 20%\"><span style=\"color: #3276b1; font-size: 150%\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</span></td>
        </tr>
        <tr>
            <td style=\"width: 60%\"></td>
            <td style=\"width: 20%\"><label>Fecha de registro</label></td>
            <td style=\"width: 20%\">";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaRegistro"), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td style=\"width: 60%\"></td>
            <td style=\"width: 20%\"><label>Fecha de &uacute;ltima actualizaci&oacute;n</label></td>
            <td style=\"width: 20%\">";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaActualizacion"), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td style=\"width: 60%\"></td>
            <td style=\"width: 20%\"><label>Usuario &uacute;ltima actualizaci&oacute;n</label></td>
            <td style=\"width: 20%\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ultimaActualizacionUsuarioPk"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td style=\"width: 60%\">
                <h1>Recibo de Pago</h1>
                ";
            // line 33
            if ((((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "financiamiento"))) && ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "financiamiento") != "")) && ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "financiamiento") > 0))) {
                // line 34
                echo "                <h4>Pago # ";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "financiamiento"), "html", null, true);
                echo "</h4>
                ";
            }
            // line 36
            echo "            </td>
            <td style=\"width: 20%\"></td>
            <td style=\"width: 20%\"></td>
        </tr>
    </table>
    <hr/>
    <table style=\"width: 100%\">
        <tr>
            <td style=\"width: 20%\"><label>Empresa</label></td>
            <td style=\"width: 40%\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "empresaPk"), "html", null, true);
            echo "</td>
            <td style=\"width: 20%\"><label>RUC<label></td>
            <td style=\"width: 40%\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "empresaPk"), "ruc"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td style=\"width: 20%\"><label>Direcci&oacute;n</label></td>
            <td style=\"width: 40%\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "empresaPk"), "direccion"), "html", null, true);
            echo "</td>
            <td style=\"width: 20%\"><label>Telf</label></td>
            <td style=\"width: 40%\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "empresaPk"), "telefono"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td style=\"width: 20%\"><label>&Aacute;rea</label></td>
            <td style=\"width: 40%\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaContacto"), "html", null, true);
            echo "</td>
            <td style=\"width: 20%\"><label>Etapa</label></td>
            <td style=\"width: 40%\">";
            // line 59
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
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cuota"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td style=\"width: 60%\"></td>
            <td><label>Subtotal</label></td>
            <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cuota"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td style=\"width: 60%\"></td>
            <td><label>IVA (12%)</label></td>
            <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ivaCuota"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td style=\"width: 60%\"></td>
            <td><label>Total</label></td>
            <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "totalCuota"), "html", null, true);
            echo "</td>
        </tr>
    </table>
    <table style=\"width: 100%\">
        <tr>
            <td style=\"width: 20%\"><label>Notas</label></td>
            <td style=\"width: 80%\">";
            // line 88
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
            // line 122
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != (isset($context["num_financiamiento"]) ? $context["num_financiamiento"] : $this->getContext($context, "num_financiamiento")))) {
                // line 123
                echo "    <div style=\"display: block; width: 100%; height: 140px;\"></div>
    ";
            }
            // line 125
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "    <script type=\"text/javascript\">
        window.print();
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Pedido:reciboPago.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 126,  222 => 125,  218 => 123,  216 => 122,  179 => 88,  170 => 82,  162 => 77,  154 => 72,  146 => 67,  135 => 59,  130 => 57,  123 => 53,  118 => 51,  111 => 47,  106 => 45,  95 => 36,  87 => 34,  85 => 33,  77 => 28,  69 => 23,  61 => 18,  53 => 13,  47 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  31 => 4,  28 => 3,);
    }
}

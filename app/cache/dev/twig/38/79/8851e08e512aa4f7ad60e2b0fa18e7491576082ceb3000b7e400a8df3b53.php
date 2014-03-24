<?php

/* FrontendBundle:Pedido:reporteGeneral.html.twig */
class __TwigTemplate_38798851e08e512aa4f7ad60e2b0fa18e7491576082ceb3000b7e400a8df3b53 extends Twig_Template
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
        echo "<h3>Reporte General de Pedidos</h3>
    <table style=\"width: 100%\">
        <tr>
            <td style=\"width: 20%\"><label>Empresa</label></td>
            <td style=\"width: 40%\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "html", null, true);
        echo "</td>
            <td style=\"width: 20%\"><label>Total Etapas</label></td>
            <td style=\"width: 40%\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["etapas"]) ? $context["etapas"] : $this->getContext($context, "etapas")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td style=\"width: 20%\"><label>Fecha reporte</label></td>
            <td style=\"width: 40%\">";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            <td style=\"width: 20%\"><label>Total (USD)</label></td>
            <td style=\"width: 40%\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</td>
        </tr>
    </table>
    <hr/>
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 21
            echo "        <label>Nombre &Aacute;rea</label>&nbsp;";
            echo twig_escape_filter($this->env, (isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "html", null, true);
            echo "<br/>
        <label>C&oacute;digo</label>&nbsp;";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "id"), "html", null, true);
            echo "<br/>
        <label>Etapas</label>&nbsp;";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "etapa"), "html", null, true);
            echo "<br/>
        <table style=\"width: 100%\">
            <tr>
                <th style=\"width: 10%\">#</th>
                <th style=\"width: 15%\">C&oacute;digo</th>
                <th style=\"width: 15%\">Fecha</th>
                <th style=\"width: 10%\">#Prod</th>
                <th style=\"width: 15%\">Coordinador</th>
                <th style=\"width: 20%\">Concepto</th>
                <th style=\"width: 15%\">Total</th>
            </tr>
            ";
            // line 34
            $context["i"] = 1;
            // line 35
            echo "            ";
            $context["totalArea"] = 0;
            // line 36
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "pedidos"));
            foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
                // line 37
                echo "            <tr>
                <td style=\"width: 10%\">";
                // line 38
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                echo "</td>
                <td style=\"width: 15%\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "idRecur"), "html", null, true);
                echo "</td>
                <td style=\"width: 15%\">";
                // line 40
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "fechaRegistro"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                <td style=\"width: 10%\">";
                // line 41
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "pedidoProducto")), "html", null, true);
                echo "</td>
                <td style=\"width: 15%\">";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "coordinadorUsuarioPk"), "html", null, true);
                echo "</td>
                <td style=\"width: 20%\">";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "conceptoFactura"), "html", null, true);
                echo "</td>
                <td style=\"width: 15%\">";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "total"), "html", null, true);
                echo "</td>
                ";
                // line 45
                $context["totalArea"] = ((isset($context["totalArea"]) ? $context["totalArea"] : $this->getContext($context, "totalArea")) + $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "total"));
                // line 46
                echo "            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            <tr>
                <th style=\"width: 10%\"></th>
                <th style=\"width: 15%\"></th>
                <th style=\"width: 15%\"></th>
                <th style=\"width: 10%\"></th>
                <th style=\"width: 15%\"></th>
                <th style=\"width: 20%; border-top: 1px solid\">Total</th>
                <th style=\"width: 15%; border-top: 1px solid\">";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["totalArea"]) ? $context["totalArea"] : $this->getContext($context, "totalArea")), "html", null, true);
            echo "</th>
            </tr>
        </table>
        <hr/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Pedido:reporteGeneral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 55,  139 => 48,  132 => 46,  130 => 45,  126 => 44,  122 => 43,  118 => 42,  114 => 41,  110 => 40,  106 => 39,  101 => 38,  98 => 37,  93 => 36,  90 => 35,  88 => 34,  74 => 23,  70 => 22,  65 => 21,  61 => 20,  54 => 16,  49 => 14,  42 => 10,  37 => 8,  31 => 4,  28 => 3,);
    }
}

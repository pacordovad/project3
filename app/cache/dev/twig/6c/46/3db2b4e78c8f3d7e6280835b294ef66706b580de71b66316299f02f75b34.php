<?php

/* FrontendBundle:Pedido:reporteGeneralPuntos.html.twig */
class __TwigTemplate_6c463db2b4e78c8f3d7e6280835b294ef66706b580de71b66316299f02f75b34 extends Twig_Template
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
        echo "<h3>Reporte General de Puntos</h3>
    <table style=\"width: 100%\">
        <tr>
            <td style=\"width: 20%\"><label>Empresa</label></td>
            <td style=\"width: 40%\">Todas</td>
            <td style=\"width: 20%\"><label>&Aacute;rea</label></td>
            <td style=\"width: 40%\">Todas</td>
        </tr>
        <tr>
            <td style=\"width: 20%\"><label>Fecha reporte</label></td>
            <td style=\"width: 40%\">";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            <td style=\"width: 20%\"><label>Total puntos</label></td>
            <td style=\"width: 40%\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["totalpuntos"]) ? $context["totalpuntos"] : $this->getContext($context, "totalpuntos")), "html", null, true);
        echo "</td>
        </tr>
    </table>
    <hr/>
    <table style=\"width: 100%\">
        <tr>
            <th style=\"width: 30%\"></th>
            <th style=\"width: 10%\">#</th>
            <th style=\"width: 15%\">Mes</th>
            <th style=\"width: 10%\">Puntos</th>
            <th style=\"width: 35%\"></th>
        </tr>
        ";
        // line 28
        $context["i"] = 1;
        // line 29
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultados"]) ? $context["resultados"] : $this->getContext($context, "resultados")));
        foreach ($context['_seq'] as $context["_key"] => $context["resultado"]) {
            // line 30
            echo "            <tr>
                <th style=\"width: 30%\"></th>
                <td style=\"width: 10%\">";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            echo "</td>
                <td style=\"width: 15%\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")), "mes", array(), "array"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")), "anio", array(), "array"), "html", null, true);
            echo "</td>
                <td style=\"width: 10%\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")), "puntos", array(), "array"), "html", null, true);
            echo "</td>
                <th style=\"width: 35%\"></th>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        <tr>
            <th style=\"width: 30%\"></th>
            <th style=\"width: 10%\"></th>
            <th style=\"width: 15%; border-top: 1px solid\">Total</th>
            <th style=\"width: 10%; border-top: 1px solid\">";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["totalpuntos"]) ? $context["totalpuntos"] : $this->getContext($context, "totalpuntos")), "html", null, true);
        echo "</th>
            <th style=\"width: 35%\"></th>
        </tr>
    </table>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Pedido:reporteGeneralPuntos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 42,  95 => 38,  85 => 34,  79 => 33,  74 => 32,  70 => 30,  65 => 29,  63 => 28,  48 => 16,  43 => 14,  31 => 4,  28 => 3,);
    }
}

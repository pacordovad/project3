<?php

/* FrontendBundle:Reportes:menuReporteGenerales.html.twig */
class __TwigTemplate_27c8e1036717230422666d0cf6625519f97204b90304aaf8aeef666ae5083097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getUrl("reporte_general");
        echo "\" method=\"POST\" id=\"forma_reporte_pedidos\" target=\"_newtab\">
    <div class=\"row\">
        <div class=\"col-md-2\">
            <label for=\"empresa-reporte\">Empresa</label>
        </div>
        <div class=\"col-md-4\">
            <select id=\"empresa-reporte\" name=\"empresa-reporte\">
                ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 9
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            </select>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-2\">
            <label for=\"area-reporte\">Area</label>
        </div>
        <div class=\"col-md-4\">
            <select id=\"area-reporte\" name=\"area-reporte\">
                <option value=\"-1\" selected=\"selected\"></option>
                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 22
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "empresaArea"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </select>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-2\">
            <label for=\"tipo-reporte\">Tipo reporte</label>
        </div>
        <div class=\"col-md-4\">
            <select id=\"tipo-reporte\" name=\"tipo-reporte\">
                <option value=\"1\">Reporte General de Pedidos</option>
                <option value=\"2\">Reporte General de Puntos</option>
            </select>
        </div>
    </div>
</form>
<script type=\"text/javascript\">
    \$(\"#submit-boton-modal\").unbind();
    \$(\"#submit-boton-modal\").click(function() {
        \$(\"#forma_reporte_pedidos\").submit();
    });
</script>";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Reportes:menuReporteGenerales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  61 => 22,  57 => 21,  45 => 11,  34 => 9,  30 => 8,  19 => 1,);
    }
}

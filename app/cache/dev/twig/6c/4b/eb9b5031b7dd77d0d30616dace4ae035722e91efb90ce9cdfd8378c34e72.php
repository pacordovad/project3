<?php

/* FrontendBundle:Reportes:menuReportePedidos.html.twig */
class __TwigTemplate_6c4beb9b5031b7dd77d0d30616dace4ae035722e91efb90ce9cdfd8378c34e72 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getUrl("reporte_pedido");
        echo "\" method=\"POST\" id=\"forma_reporte_pedidos\" target=\"_newtab\">
<div class=\"row\">
    <div class=\"col-md-2\">
        <label for=\"empresa-reporte\">Empresa</label>
    </div>
    <div class=\"col-md-4\">
        <select id=\"empresa-reporte\" name=\"empresa-reporte\">
            <option value=\"\" selected=\"selected\"></option>
            ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 10
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "id"), "html", null, true);
            echo "\" data-empresaid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </select>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-2\">
        <label for=\"area-reporte\">Area</label>
    </div>
    <div class=\"col-md-4\">
        <select id=\"area-reporte-hidden\" style=\"display: none\">
            <option data-empresa=\"-1\" value=\"\" selected=\"selected\"></option>
            ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 23
            echo "                <option data-empresa=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "empresaPk"), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "empresaArea"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </select>
        <select id=\"area-reporte\">
            <option data-empresa=\"-1\" value=\"\" selected=\"selected\"></option>
            ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 29
            echo "                <option data-empresa=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "empresaPk"), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "empresaArea"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </select>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-2\">
        <label for=\"paso-reporte\">Paso</label>
    </div>
    <div class=\"col-md-4\">
        <select id=\"paso-reporte\" name=\"paso-reporte\">
            <option value=\"\" selected=\"selected\"></option>
            ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pasos"]) ? $context["pasos"] : $this->getContext($context, "pasos")));
        foreach ($context['_seq'] as $context["_key"] => $context["paso"]) {
            // line 42
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paso"]) ? $context["paso"] : $this->getContext($context, "paso")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["paso"]) ? $context["paso"] : $this->getContext($context, "paso")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </select>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-2\">
        <label for=\"fechadesde-reporte\">Fecha desde</label>
    </div>
    <div class=\"col-md-4\">
        <input type=\"text\" id=\"fechadesde-reporte\" name=\"fechadesde-reporte\"/>
    </div>
    <div class=\"col-md-2\">
        <label for=\"fechahasta-reporte\">Fecha hasta</label>
    </div>
    <div class=\"col-md-4\">
        <input type=\"text\" id=\"fechahasta-reporte\" name=\"fechahasta-reporte\"/>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-2\">
        <label for=\"codigo-reporte\">Codigo</label>
    </div>
    <div class=\"col-md-4\">
        <select id=\"codigo-reporte-select\" name=\"codigo-reporte-select\">
            ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 68
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["pedido"]) ? $context["pedido"] : $this->getContext($context, "pedido")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </select>
        <input type=\"text\" id=\"codigo-reporte\"/>
        <span id=\"loading-pedidos\"></span>
    </div>
    <div class=\"col-md-4\">
        <input type=\"checkbox\" id=\"modificar-reporte\">
        <label for=\"modificar-reporte\">modificar</label>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-2\">
        <label for=\"tipo-reporte\">Tipo reporte</label>
    </div>
    <div class=\"col-md-4\">
        <select id=\"tipo-reporte\" name=\"tipo-reporte\">
            <option value=\"1\">Certificaci&oacute;n de Entrega</option>
            <option value=\"2\">Control de Instalaci&oacute;n</option>
        </select>
    </div>
</div>
</form>
<script type=\"text/javascript\">
    \$(\"#fechadesde-reporte\").datepicker({
                altFormat: \"yy-mm-dd 00:00:00\",
                changeYear: true,
                changeMonth: true,
                dateFormat: \"yy-mm-dd 00:00:00\",
                yearRange: \"2012:2050\"
            });
    \$(\"#fechahasta-reporte\").datepicker({
        altFormat: \"yy-mm-dd 00:00:00\",
        changeYear: true,
        changeMonth: true,
        dateFormat: \"yy-mm-dd 00:00:00\",
        yearRange: \"2012:2050\"
    });
    modificarReporteCambio();
    \$('#modificar-reporte').change(function(){
        modificarReporteCambio();
    });
    var urlFiltro = \"";
        // line 110
        echo $this->env->getExtension('routing')->getUrl("menupedidofiltrar");
        echo "\";
    \$(\"#empresa-reporte\").change(function(){
        filtraAreasReporte();
        filtraPedidos(urlFiltro);
    });
    \$(\"#area-reporte\").change(function(){
        filtraPedidos(urlFiltro);
    });
    \$(\"#paso-reporte\").change(function(){
        filtraPedidos(urlFiltro);
    });
    \$(\"#fechadesde-reporte\").bind(\"propertychange keyup input paste change\", function() {
        filtraPedidos(urlFiltro);
    });
    \$(\"#fechahasta-reporte\").bind(\"propertychange keyup input paste change\", function() {
        filtraPedidos(urlFiltro);
    });
    \$(\"#submit-boton-modal\").unbind();
    \$(\"#submit-boton-modal\").click(function() {
        var codigoReporte = \"\";
        if(\$('#modificar-reporte').is(\":checked\")){
            codigoReporte = \$.trim(\$(\"#codigo-reporte\").val());
        }else{
            codigoReporte = \$.trim(\$(\"#codigo-reporte-select\").val());
        }
        
        if(codigoReporte.length > 0){
            \$(\"#forma_reporte_pedidos\").submit();
        }else{
            alert(\"Ingrese el código del pedido\");
        }
    });
</script>";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Reportes:menuReportePedidos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 110,  166 => 70,  155 => 68,  151 => 67,  126 => 44,  115 => 42,  111 => 41,  99 => 31,  86 => 29,  82 => 28,  77 => 25,  64 => 23,  60 => 22,  48 => 12,  35 => 10,  31 => 9,  19 => 1,);
    }
}

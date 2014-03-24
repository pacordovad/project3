<?php

/* FrontendBundle:Pedido:esquema.html.twig */
class __TwigTemplate_de11d33918f9560209e3b542e38a32d8a1a9951247a7b27f0fe7d80edf0ef91e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle:Layouts:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontendBundle:Layouts:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\">
        <div class=\"col-md-7\"></div>
        <div class=\"col-md-3\"><label>C&oacute;digo de pedido<label></div>
        <div class=\"col-md-2\"><span style=\"color: #3276b1; font-size: 150%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idRecur"), "html", null, true);
        echo "</span></div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-7\"></div>
        <div class=\"col-md-3\"><label>Fecha de registro</label></div>
        <div class=\"col-md-2\">";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaRegistro"), "Y-m-d H:i:s"), "html", null, true);
        echo "</div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-7\"></div>
        <div class=\"col-md-3\"><label>Fecha de &uacute;ltima actualizaci&oacute;n</label></div>
        <div class=\"col-md-2\">";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaActualizacion"), "Y-m-d H:i:s"), "html", null, true);
        echo "</div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-7\"><h1>Esquema pedido</h1></div>
        <div class=\"col-md-3\"><label>Usuario &uacute;ltima actualizaci&oacute;n</label></div>
        <div class=\"col-md-2\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ultimaActualizacionUsuarioPk"), "html", null, true);
        echo "</div>
    </div>
    <hr/>
    <div class=\"row\">
        <div class=\"col-md-2\"><label>Empresa</label></div>
        <div class=\"col-md-4\">
            ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "empresaPk"), "html", null, true);
        echo "
        </div>
        <div class=\"col-md-2\"><label>RUC<label></div>
        <div class=\"col-md-4\" id=\"ruc_empresa\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "empresaPk"), "ruc"), "html", null, true);
        echo "</div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-2\"><label>Direcci&oacute;n</label></div>
        <div class=\"col-md-4\" id=\"direccion_empresa\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "empresaPk"), "direccion"), "html", null, true);
        echo "</div>
        <div class=\"col-md-2\"><label>Telf</label></div>
        <div class=\"col-md-4\" id=\"telf_empresa\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "empresaPk"), "telefono"), "html", null, true);
        echo "</div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-2\"><label>&Aacute;rea</label></div>
        <div class=\"col-md-4\">
            ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaContacto"), "html", null, true);
        echo "
        </div>
        <div class=\"col-md-2\"><label>Etapa</label></div>
        <div class=\"col-md-4\">
            ";
        // line 46
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FrontendBundle:Area:etapa", array("areaId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "id"))), array());
        // line 47
        echo "        </div>
    </div>
    <hr/>
    ";
        // line 50
        $context["i"] = 0;
        // line 51
        echo "    <div class=\"row\">
    ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["pedidoProducto"]) {
            // line 53
            echo "        ";
            if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 4) == 0)) {
                // line 54
                echo "            </div>
            <div class=\"row\">
        ";
            }
            // line 57
            echo "        <div class=\"col-md-3\">
            <h4>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "nombreProducto"), "html", null, true);
            echo "</h4>
            ";
            // line 59
            if (file_exists((((((isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")) . "/uploads/productos/p") . $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "id")) . ".") . $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "imagenExtension")))) {
                // line 60
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image(((("@FrontendBundle/Resources/public/uploads/productos/p" . $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "id")) . ".") . $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "imagenExtension"))), "cropResize", array(0 => 100, 1 => 100), "method"), "html", null, true);
                echo "\" /></td>
            ";
            }
            // line 62
            echo "            <br/>
            <label>Producto:</label> ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "html", null, true);
            echo "<br/>
            <label>Categor&iacute;a:</label> ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "categoriaPk"), "html", null, true);
            echo "<br/>
            <label>Cantidad:</label>  ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"), "html", null, true);
            echo "<br/>
            <label>Calidad:</label>  ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "tipoCalidadPk"), "html", null, true);
            echo "<br/>
            <label>Medidas:</label>  ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "medidaPk"), "html", null, true);
            echo "<br/>
            <br/>
        </div>
        ";
            // line 70
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 71
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedidoProducto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </div>
    <br/>
    <br/>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Pedido:esquema.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 72,  168 => 71,  166 => 70,  160 => 67,  156 => 66,  152 => 65,  148 => 64,  144 => 63,  141 => 62,  135 => 60,  133 => 59,  129 => 58,  126 => 57,  121 => 54,  118 => 53,  114 => 52,  111 => 51,  109 => 50,  104 => 47,  102 => 46,  95 => 42,  87 => 37,  82 => 35,  75 => 31,  69 => 28,  60 => 22,  52 => 17,  44 => 12,  36 => 7,  31 => 4,  28 => 3,);
    }
}

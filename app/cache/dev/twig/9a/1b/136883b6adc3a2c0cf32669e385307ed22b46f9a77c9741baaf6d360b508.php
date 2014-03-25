<?php

/* FrontendBundle:PedidoProducto:pedidoProducto.html.twig */
class __TwigTemplate_9a1b136883b6adc3a2c0cf32669e385307ed22b46f9a77c9741baaf6d360b508 extends Twig_Template
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
        // line 19
        echo "    <div class=\"pPedidoProducto\" id=\"pPedidoProducto\" data-editurl=\"";
        echo $this->env->getExtension('routing')->getPath("pedidoproductoeditlink");
        echo "\">
        <div class=\"row\">
            <!-- Productos -->
            <div class=\"col-md-6\" style=\"border-right: 1px solid #eee\">
                <label for=\"selectProducto\">Categoria</label>
                <select id=\"selectProducto\" onchange=\"chSelectProducto(this)\">
                    <option value=\"all\">Mostrar todas</option>
                    ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 27
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </select>
                <input type=\"text\" id=\"busqueda\" placeholder=\"Nombre...\" />
                <br/><br/>
                <ul id=\"Grid\">
                ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "                    <li id=\"li-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" class=\"mix ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoriaPK"), "id"), "html", null, true);
            echo " ";
            if ((((isset($context["productoSeleccionadoId"]) ? $context["productoSeleccionadoId"] : $this->getContext($context, "productoSeleccionadoId")) != null) && ((isset($context["productoSeleccionadoId"]) ? $context["productoSeleccionadoId"] : $this->getContext($context, "productoSeleccionadoId")) == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id")))) {
                echo "seleccionado";
            }
            echo "\" data-nombre=\"";
            echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" data-categoriaid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoriaPk"), "id"), "html", null, true);
            echo "\" data-categoria=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoriaPk"), "html", null, true);
            echo "\">
                        <a href=\"#\" id=\"lia-";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" data-figura=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "figuraPk"), "id"), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image(((("@FrontendBundle/Resources/public/uploads/productos/p" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id")) . ".") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imagenExtension"))), "cropResize", array(0 => 100, 1 => 100), "method"), "html", null, true);
            echo "\" />
                            <span>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreImagen"), "html", null, true);
            echo "</span>
                        </a>
                        <script type=\"text/javascript\">
                            \$('#lia-";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "').on('click', function(e) {
                                e.preventDefault();
                                productoCambio('";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "');
                            });
                        </script>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </ul>
                <input type=\"hidden\" name=\"productoSeleccionadoId\" id=\"productoSeleccionadoId\" value=\"";
        // line 48
        if (((isset($context["productoSeleccionadoId"]) ? $context["productoSeleccionadoId"] : $this->getContext($context, "productoSeleccionadoId")) != null)) {
            echo twig_escape_filter($this->env, (isset($context["productoSeleccionadoId"]) ? $context["productoSeleccionadoId"] : $this->getContext($context, "productoSeleccionadoId")), "html", null, true);
        }
        echo "\"/>
            </div>
                
            <!-- Campos -->
            <div class=\"col-md-6\">
                <table class=\"tProductoPedido\">
                    <tr>
                        <td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreProducto"), 'label');
        echo "</td>
                        <td><input type=\"text\" id=\"nombreProducto\" value=\"";
        // line 56
        if (((isset($context["nombreProducto"]) ? $context["nombreProducto"] : $this->getContext($context, "nombreProducto")) != null)) {
            echo twig_escape_filter($this->env, (isset($context["nombreProducto"]) ? $context["nombreProducto"] : $this->getContext($context, "nombreProducto")), "html", null, true);
        }
        echo "\"/></td>
                    </tr>
                    <tr>
                        <td>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad"), 'label');
        echo "</td>
                        <td><input type=\"number\" id=\"cantidad\" value=\"";
        // line 60
        if (((isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")) != null)) {
            echo twig_escape_filter($this->env, (isset($context["cantidad"]) ? $context["cantidad"] : $this->getContext($context, "cantidad")), "html", null, true);
        }
        echo "\"/></td>
                    </tr>
                    <tr>
                        <td>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medidaPk"), 'label');
        echo "</td>
                        <td>
                            <select id=\"dimensionhidden\" style=\"display: none\">
                                <option></option>
                                ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dimensiones"]) ? $context["dimensiones"] : $this->getContext($context, "dimensiones")));
        foreach ($context['_seq'] as $context["_key"] => $context["dimension"]) {
            // line 68
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dimension"]) ? $context["dimension"] : $this->getContext($context, "dimension")), "id"), "html", null, true);
            echo "\" data-figura=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dimension"]) ? $context["dimension"] : $this->getContext($context, "dimension")), "figuraPk"), "Id"), "html", null, true);
            echo "\" data-alto=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dimension"]) ? $context["dimension"] : $this->getContext($context, "dimension")), "largo"), "html", null, true);
            echo "\" data-ancho=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dimension"]) ? $context["dimension"] : $this->getContext($context, "dimension")), "ancho"), "html", null, true);
            echo "\" ";
            if ((((isset($context["dimensionId"]) ? $context["dimensionId"] : $this->getContext($context, "dimensionId")) != null) && ((isset($context["dimensionId"]) ? $context["dimensionId"] : $this->getContext($context, "dimensionId")) == $this->getAttribute((isset($context["dimension"]) ? $context["dimension"] : $this->getContext($context, "dimension")), "id")))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["dimension"]) ? $context["dimension"] : $this->getContext($context, "dimension")), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dimension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                <option value=\"0\" data-figura=\"-1\" data-ancho=\"1\" data-alto=\"1\" ";
        if (((isset($context["dimensionId"]) ? $context["dimensionId"] : $this->getContext($context, "dimensionId")) == "0")) {
            echo "selected";
        }
        echo ">No estándar</option>
                            </select>
                            
                            <select id=\"dimension\" onchange=\"setDimension()\">
                                <option></option>
                                ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dimensiones"]) ? $context["dimensiones"] : $this->getContext($context, "dimensiones")));
        foreach ($context['_seq'] as $context["_key"] => $context["dimension"]) {
            // line 76
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dimension"]) ? $context["dimension"] : $this->getContext($context, "dimension")), "id"), "html", null, true);
            echo "\" data-alto=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dimension"]) ? $context["dimension"] : $this->getContext($context, "dimension")), "largo"), "html", null, true);
            echo "\" data-ancho=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dimension"]) ? $context["dimension"] : $this->getContext($context, "dimension")), "ancho"), "html", null, true);
            echo "\" ";
            if ((((isset($context["dimensionId"]) ? $context["dimensionId"] : $this->getContext($context, "dimensionId")) != null) && ((isset($context["dimensionId"]) ? $context["dimensionId"] : $this->getContext($context, "dimensionId")) == $this->getAttribute((isset($context["dimension"]) ? $context["dimension"] : $this->getContext($context, "dimension")), "id")))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["dimension"]) ? $context["dimension"] : $this->getContext($context, "dimension")), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dimension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                                <option value=\"0\" data-ancho=\"1\" data-alto=\"1\" ";
        if (((isset($context["dimensionId"]) ? $context["dimensionId"] : $this->getContext($context, "dimensionId")) == "0")) {
            echo "selected";
        }
        echo ">No estándar</option>
                            </select>
                            <span id=\"medidas-extra\">
                                <br/>
                                <input type=\"number\" id=\"dimensionY\" value=\"";
        // line 82
        if (((isset($context["dimensionY"]) ? $context["dimensionY"] : $this->getContext($context, "dimensionY")) != null)) {
            echo twig_escape_filter($this->env, (isset($context["dimensionY"]) ? $context["dimensionY"] : $this->getContext($context, "dimensionY")), "html", null, true);
        } else {
            echo "0";
        }
        echo "\" style=\"width: 70px\"/>&nbsp;&nbsp;x&nbsp;&nbsp;
                                <input type=\"number\" id=\"dimensionX\" value=\"";
        // line 83
        if (((isset($context["dimensionX"]) ? $context["dimensionX"] : $this->getContext($context, "dimensionX")) != null)) {
            echo twig_escape_filter($this->env, (isset($context["dimensionX"]) ? $context["dimensionX"] : $this->getContext($context, "dimensionX")), "html", null, true);
        } else {
            echo "0";
        }
        echo "\" style=\"width: 70px\"/>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoCalidadPk"), 'label');
        echo "</td>
                        <td>
                            <select id=\"tipo-calidad\">
                                <option></option>
                                ";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tiposCalidad"]) ? $context["tiposCalidad"] : $this->getContext($context, "tiposCalidad")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipoCalidad"]) {
            // line 93
            echo "                                <option data-nombre=\"";
            echo twig_escape_filter($this->env, (isset($context["tipoCalidad"]) ? $context["tipoCalidad"] : $this->getContext($context, "tipoCalidad")), "html", null, true);
            echo "\" data-valor=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoCalidad"]) ? $context["tipoCalidad"] : $this->getContext($context, "tipoCalidad")), "valor"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoCalidad"]) ? $context["tipoCalidad"] : $this->getContext($context, "tipoCalidad")), "id"), "html", null, true);
            echo "\" ";
            if ((((isset($context["tipoCalidadId"]) ? $context["tipoCalidadId"] : $this->getContext($context, "tipoCalidadId")) != null) && ((isset($context["tipoCalidadId"]) ? $context["tipoCalidadId"] : $this->getContext($context, "tipoCalidadId")) == $this->getAttribute((isset($context["tipoCalidad"]) ? $context["tipoCalidad"] : $this->getContext($context, "tipoCalidad")), "id")))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["tipoCalidad"]) ? $context["tipoCalidad"] : $this->getContext($context, "tipoCalidad")), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipoCalidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                            </select>
                            <input type=\"hidden\" id=\"pedidoPk\" value=\"";
        // line 96
        if (((isset($context["pedidoPk"]) ? $context["pedidoPk"] : $this->getContext($context, "pedidoPk")) != null)) {
            echo twig_escape_filter($this->env, (isset($context["pedidoPk"]) ? $context["pedidoPk"] : $this->getContext($context, "pedidoPk")), "html", null, true);
        }
        echo "\"/>
                            <input type=\"hidden\" id=\"cortesia\" value=\"";
        // line 97
        if (((isset($context["cortesia"]) ? $context["cortesia"] : $this->getContext($context, "cortesia")) != null)) {
            echo twig_escape_filter($this->env, (isset($context["cortesia"]) ? $context["cortesia"] : $this->getContext($context, "cortesia")), "html", null, true);
        }
        echo "\"/>
                        </td>
                    </tr>
                    <tr>
                        <td>";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "posicion"), 'label');
        echo "</td>
                        <td>
                            <select id=\"posicion\" name=\"posicion\">
                                ";
        // line 104
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posiciones"]) ? $context["posiciones"] : $this->getContext($context, "posiciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["posicionLista"]) {
            // line 105
            echo "                                <option data-nombre=\"";
            echo twig_escape_filter($this->env, (isset($context["posicionLista"]) ? $context["posicionLista"] : $this->getContext($context, "posicionLista")), "html", null, true);
            echo "\" data-valor=\"";
            echo twig_escape_filter($this->env, (isset($context["posicionLista"]) ? $context["posicionLista"] : $this->getContext($context, "posicionLista")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["posicionLista"]) ? $context["posicionLista"] : $this->getContext($context, "posicionLista")), "html", null, true);
            echo "\" ";
            if ((((isset($context["posicion"]) ? $context["posicion"] : $this->getContext($context, "posicion")) != null) && ((isset($context["posicion"]) ? $context["posicion"] : $this->getContext($context, "posicion")) == (isset($context["posicionLista"]) ? $context["posicionLista"] : $this->getContext($context, "posicionLista"))))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["posicionLista"]) ? $context["posicionLista"] : $this->getContext($context, "posicionLista")), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['posicionLista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    ";
        // line 114
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 115
            echo "        <script type=\"text/javascript\">
            ";
            // line 116
            if ((((isset($context["productoSeleccionadoId"]) ? $context["productoSeleccionadoId"] : $this->getContext($context, "productoSeleccionadoId")) != null) && ((isset($context["productoSeleccionadoId"]) ? $context["productoSeleccionadoId"] : $this->getContext($context, "productoSeleccionadoId")) == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id")))) {
                // line 117
                echo "            productoCambio('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "');
            ";
            }
            // line 119
            echo "               
            function filter(){
                var value = \$(\"#busqueda\").val();
                value = value.toLowerCase();
                var categoria = \$(\"#selectProducto\").val();
                \$(\".mix\").each(function(index) {
                    var nombre = \$(this).data(\"nombre\");
                    nombre = nombre.toLowerCase();
                    var categoriaProducto = \$(this).data(\"categoriaid\");
                    if(nombre.indexOf(value) !== -1 && (categoriaProducto == categoria || categoria === \"all\")){
                        \$(this).show();
                    }else{
                        \$(this).hide();
                    }
                });
            }
            
            \$(\"#busqueda\").keyup(function(e){
                filter();
            });
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "FrontendBundle:PedidoProducto:pedidoProducto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 119,  336 => 117,  334 => 116,  331 => 115,  327 => 114,  318 => 107,  299 => 105,  295 => 104,  289 => 101,  280 => 97,  274 => 96,  271 => 95,  252 => 93,  248 => 92,  241 => 88,  229 => 83,  221 => 82,  211 => 78,  192 => 76,  188 => 75,  177 => 70,  156 => 68,  152 => 67,  145 => 63,  137 => 60,  133 => 59,  125 => 56,  121 => 55,  109 => 48,  106 => 47,  95 => 42,  90 => 40,  84 => 37,  80 => 36,  74 => 35,  55 => 34,  51 => 33,  45 => 29,  34 => 27,  30 => 26,  19 => 19,);
    }
}

<?php

/* FrontendBundle:Pedido:produccion.html.twig */
class __TwigTemplate_269e41e66637290f6a12fc0dd9862e88862f8cb467869999923098fae28e0581 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle:Layouts:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 5
        echo "<h3>Productos</h3>

    <div class=\"row\">
        <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("pedido");
        echo "\" class=\"btn btn-primary\" style=\"float: right; margin-bottom: 30px\">Nuevo Pedido</a>
    </div>
    <div class=\"row\">
        <div class=\"col-md-1\">
            <label for=\"empresa\">Empresa</label>
        </div>
        <div class=\"col-md-4\">
            <select id=\"empresa\">
                <option value=\"\" selected=\"selected\"></option>
                ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 18
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "html", null, true);
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
        // line 20
        echo "            </select>
        </div>
        <div class=\"col-md-1\">
            <label for=\"categoria\">Categoria</label>
        </div>
        <div class=\"col-md-3\">
            <select id=\"categoria\">
                <option value=\"\" selected=\"selected\"></option>
                ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 29
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </select>
        </div>
        <div class=\"col-md-1\">
            <label for=\"producto\">Producto</label>
        </div>
        <div class=\"col-md-2\">
            <select id=\"producto\">
                <option value=\"\" selected=\"selected\"></option>
                ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 40
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombreProducto"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombreProducto"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </select>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-1\">
            <label for=\"area\">Area</label>
        </div>
        <div class=\"col-md-4\">
            <select id=\"areahidden\" style=\"display: none\">
                <option data-empresa=\"-1\" value=\"\" selected=\"selected\"></option>
                ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 53
            echo "                    <option data-empresa=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "empresaPk"), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "empresaArea"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "empresaArea"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </select>
            <select id=\"area\">
                <option data-empresa=\"-1\" value=\"\" selected=\"selected\"></option>
                ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 59
            echo "                    <option data-empresa=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "empresaPk"), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "empresaArea"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "empresaArea"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </select>
        </div>
        <div class=\"col-md-1\">
            <label for=\"calidad\">Calidad</label>
        </div>
        <div class=\"col-md-3\">
            <select id=\"calidad\">
                <option value=\"\" selected=\"selected\"></option>
                ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calidades"]) ? $context["calidades"] : $this->getContext($context, "calidades")));
        foreach ($context['_seq'] as $context["_key"] => $context["calidad"]) {
            // line 70
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["calidad"]) ? $context["calidad"] : $this->getContext($context, "calidad")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["calidad"]) ? $context["calidad"] : $this->getContext($context, "calidad")), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            </select>
        </div>
        <div class=\"col-md-1\">
            <label for=\"medida\">Medidas</label>
        </div>
        <div class=\"col-md-2\">
            <select id=\"medida\">
                <option value=\"\" selected=\"selected\"></option>
                ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medidas"]) ? $context["medidas"] : $this->getContext($context, "medidas")));
        foreach ($context['_seq'] as $context["_key"] => $context["medida"]) {
            // line 81
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["medida"]) ? $context["medida"] : $this->getContext($context, "medida")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["medida"]) ? $context["medida"] : $this->getContext($context, "medida")), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medida'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "            </select>
        </div>
    </div>
    <div class=\"row\">
        
        <div class=\"col-md-1\">
            <label for=\"paso\">Paso</label>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <div class=\"col-md-4\">
            <select id=\"paso\" ";
        // line 92
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "disabled";
        }
        echo ">
                <option value=\"\" selected=\"selected\"></option>
                ";
        // line 94
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pasos"]) ? $context["pasos"] : $this->getContext($context, "pasos")));
        foreach ($context['_seq'] as $context["_key"] => $context["paso"]) {
            // line 95
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["paso"]) ? $context["paso"] : $this->getContext($context, "paso")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["paso"]) ? $context["paso"] : $this->getContext($context, "paso")), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "            </select>
        </div>
        <div class=\"col-md-1\">
            <label for=\"coordinador\">Coordinador</label>
        </div>
        <div class=\"col-md-3\">
            <select id=\"coordinador\">
                <option value=\"\" selected=\"selected\"></option>
                ";
        // line 105
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coordinadores"]) ? $context["coordinadores"] : $this->getContext($context, "coordinadores")));
        foreach ($context['_seq'] as $context["_key"] => $context["coordinador"]) {
            // line 106
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["coordinador"]) ? $context["coordinador"] : $this->getContext($context, "coordinador")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["coordinador"]) ? $context["coordinador"] : $this->getContext($context, "coordinador")), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coordinador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "            </select>
        </div>
        <div class=\"col-md-1\">
            <label for=\"codigo\">C&oacute;digo pedido</label>
        </div>
        <div class=\"col-md-2\">
            <input type=\"text\" id=\"codigo\"/>
        </div>
    </div>
    
    <br/>
    <input type=\"hidden\" id=\"loading-gif\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/loader-small.gif"), "html", null, true);
        echo "\"/>
    <table class=\"tColapse records_list\" id=\"datatable_crud\" style=\"font-size: 11px\">
        <thead>
            <tr>
                <th>#</th>
                <th style=\"display: none\">Empresa</th>
                <th style=\"display: none\">Area</th>
                <th style=\"display: none\">Paso</th>
                <th style=\"display: none\">Medida</th>
                <th>C&oacute;digo pedido</th>
                <th style=\"display: none\">Concepto</th>
                <th>Categor&iacute;a</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Alto (cm)</th>
                <th>Ancho (cm)</th>
                <th>Calidad</th>
                <th>Coordinador</th>
                <th>Delegado 1</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>Delegado 2</th>
                <th>12</th>
                <th>13</th>
                <th>14</th>
                <th>15</th>
                <th>Delegado 3</th>
                <th>16</th>
                <th></th>
                <th>Notas</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 161
        $context["i"] = 1;
        // line 162
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 163
            echo "            <tr>
                <td>";
            // line 164
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            echo "</td>
                <td style=\"display: none\">";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "contactoPk"), "areaPk"), "empresaPk"), "html", null, true);
            echo "</td>
                <td style=\"display: none\">";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "contactoPk"), "areaPk"), "empresaArea"), "html", null, true);
            echo "</td>
                <td style=\"display: none\">";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "pasoPedidosPk"), "html", null, true);
            echo "</td>
                <td style=\"display: none\">";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "medidaPk"), "html", null, true);
            echo "</td>
                <td>
                    <span id=\"tc";
            // line 170
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "idRecur"), "html", null, true);
            echo "</span>
                    <div class=\"tooltip\" style=\"display: none\">
                        <div class=\"tooltip-inner\" id=\"tci";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
                            ";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "conceptoFactura"), "html", null, true);
            echo "
                        </div>
                        <div class=\"tooltip-arrow\"></div>
                    </div>
                    <script type=\"text/javascript\">
                        jQuery(document).ready(function() {
                            var popc";
            // line 179
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo " = \$(\"#tci";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").html();
                            \$(\"#tc";
            // line 180
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").popover({
                                title: 'Conceptos',
                                trigger:'hover click',
                                content: popc";
            // line 183
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo ",
                                html:true
                            });
                        });
                    </script>
                </td>
                <td style=\"display: none\">";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "conceptoFactura"), "html", null, true);
            echo "</td>
                <td>";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "productoPk"), "categoriaPk"), "html", null, true);
            echo "</td>
                <td>";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreProducto"), "html", null, true);
            echo "</td>
                <td>";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cantidad"), "html", null, true);
            echo "</td>
                <td>";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "alto"), "html", null, true);
            echo "</td>
                <td>";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ancho"), "html", null, true);
            echo "</td>
                <td>";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoCalidadPk"), "html", null, true);
            echo "</td>
                <td>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "coordinadorUsuarioPk"), "html", null, true);
            echo "</td>
                <td>";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado1UsuarioPk"), "html", null, true);
            echo "</td>
                
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado1UsuarioPk"), "id"))) {
                echo "disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso1"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso1")) {
                echo "checked";
            }
            echo " onchange=\"actualizaProduccionPedidoProducto('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pedido_actualiza_produccion", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "paso" => "1")), "html", null, true);
            echo "',this,'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\"></td>
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado1UsuarioPk"), "id"))) {
                echo "disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso2"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso2")) {
                echo "checked";
            }
            echo " onchange=\"actualizaProduccionPedidoProducto('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pedido_actualiza_produccion", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "paso" => "2")), "html", null, true);
            echo "',this,'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\"></td>
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado1UsuarioPk"), "id"))) {
                echo "disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso3"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso3")) {
                echo "checked";
            }
            echo " onchange=\"actualizaProduccionPedidoProducto('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pedido_actualiza_produccion", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "paso" => "3")), "html", null, true);
            echo "',this,'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\"></td>
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado1UsuarioPk"), "id"))) {
                echo "disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso4"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso4")) {
                echo "checked";
            }
            echo " onchange=\"actualizaProduccionPedidoProducto('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pedido_actualiza_produccion", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "paso" => "4")), "html", null, true);
            echo "',this,'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\"></td>
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado1UsuarioPk"), "id"))) {
                echo "disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso5"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso5")) {
                echo "checked";
            }
            echo " onchange=\"actualizaProduccionPedidoProducto('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pedido_actualiza_produccion", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "paso" => "5")), "html", null, true);
            echo "',this,'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\"></td>
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado1UsuarioPk"), "id"))) {
                echo "disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso6"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso6")) {
                echo "checked";
            }
            echo " onchange=\"actualizaProduccionPedidoProducto('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pedido_actualiza_produccion", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "paso" => "6")), "html", null, true);
            echo "',this,'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\"></td>
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado1UsuarioPk"), "id"))) {
                echo "disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso7"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso7")) {
                echo "checked";
            }
            echo " onchange=\"actualizaProduccionPedidoProducto('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pedido_actualiza_produccion", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "paso" => "7")), "html", null, true);
            echo "',this,'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\"></td>
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado1UsuarioPk"), "id"))) {
                echo "disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso8"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso8")) {
                echo "checked";
            }
            echo " onchange=\"actualizaProduccionPedidoProducto('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pedido_actualiza_produccion", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "paso" => "8")), "html", null, true);
            echo "',this,'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\"></td>
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado1UsuarioPk"), "id"))) {
                echo "disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso9"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso9")) {
                echo "checked";
            }
            echo " onchange=\"actualizaProduccionPedidoProducto('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pedido_actualiza_produccion", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "paso" => "9")), "html", null, true);
            echo "',this,'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\"></td>
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado1UsuarioPk"), "id"))) {
                echo "disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso10"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso10")) {
                echo "checked";
            }
            echo " onchange=\"actualizaProduccionPedidoProducto('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pedido_actualiza_produccion", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "paso" => "10")), "html", null, true);
            echo "',this,'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\"></td>
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado1UsuarioPk"), "id"))) {
                echo "disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso11"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso11")) {
                echo "checked";
            }
            echo " onchange=\"actualizaProduccionPedidoProducto('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pedido_actualiza_produccion", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "paso" => "11")), "html", null, true);
            echo "',this,'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\"></td>
                
                <td>";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado2UsuarioPk"), "html", null, true);
            echo "</td>
                
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado2UsuarioPk"), "id"))) {
                echo "disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso12"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso12")) {
                echo "checked";
            }
            echo " onchange=\"actualizaProduccionPedidoProducto('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pedido_actualiza_produccion", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "paso" => "12")), "html", null, true);
            echo "',this,'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\"></td>
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado2UsuarioPk"), "id"))) {
                echo "disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso13"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso13")) {
                echo "checked";
            }
            echo " onchange=\"actualizaProduccionPedidoProducto('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pedido_actualiza_produccion", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "paso" => "13")), "html", null, true);
            echo "',this,'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\"></td>
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado2UsuarioPk"), "id"))) {
                echo "disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso14"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso14")) {
                echo "checked";
            }
            echo " onchange=\"actualizaProduccionPedidoProducto('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pedido_actualiza_produccion", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "paso" => "14")), "html", null, true);
            echo "',this,'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\"></td>
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado2UsuarioPk"), "id"))) {
                echo "disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso15"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso15")) {
                echo "checked";
            }
            echo " onchange=\"actualizaProduccionPedidoProducto('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pedido_actualiza_produccion", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "paso" => "15")), "html", null, true);
            echo "',this,'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\"></td>
                
                <td>";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado3UsuarioPk"), "html", null, true);
            echo "</td>
                
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado3UsuarioPk"), "id"))) {
                echo "disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso11"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso16")) {
                echo "checked";
            }
            echo " onchange=\"actualizaProduccionPedidoProducto('";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pedido_actualiza_produccion", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "paso" => "16")), "html", null, true);
            echo "',this,'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "')\"></td>
                <td><span id=\"loading_";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\"></span></td>
                <td>
                    ";
            // line 223
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pedidoPk", array(), "any", false, true), "notas", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "notas") != ""))) {
                // line 224
                echo "                        <!-- Button trigger modal -->
                        <button style=\"font-size: 12px; padding: 5px 11px;\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#notas";
                // line 225
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "id"), "html", null, true);
                echo "\">
                          <span class=\"glyphicon glyphicon-list-alt\"></span>
                        </button>
                        <!-- Modal -->
                        <div class=\"modal fade\" id=\"notas";
                // line 229
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "id"), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                          <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                <h4 class=\"modal-title\" id=\"myModalLabel\">Notas pedido <span style=\"color: #3276b1\">";
                // line 234
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "id"), "html", null, true);
                echo "</span></h4>
                              </div>
                              <div class=\"modal-body\" style=\"font-size: 150%\">
                                    ";
                // line 237
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "notas"), "html", null, true);
                echo "
                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                              </div>
                            </div><!-- /.modal-content -->
                          </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    ";
            }
            // line 246
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "        </tbody>
    </table>
    
";
    }

    // line 254
    public function block_javascripts($context, array $blocks = array())
    {
        // line 255
        echo "    <script type=\"text/javascript\">
        /* Custom filtering function which will filter data in column four between two values */
        \$.fn.dataTableExt.afnFiltering.push(
            function( oSettings, aData, iDataIndex ) {
                    var iEmpresa = document.getElementById('empresa').value.toLowerCase();
                    var iVersion = aData[1].toLowerCase();
                    if (iVersion.indexOf(iEmpresa) !== -1)
                    {
                            return true;
                    }
                    return false;
                }
            );
        \$.fn.dataTableExt.afnFiltering.push(
            function( oSettings, aData, iDataIndex ) {
                    var iArea = document.getElementById('area').value.toLowerCase();
                    var iVersion = aData[2].toLowerCase();
                    if (iVersion.indexOf(iArea) !== -1)
                    {
                            return true;
                    }
                    return false;
                }
            );
        \$.fn.dataTableExt.afnFiltering.push(
            function( oSettings, aData, iDataIndex ) {
                    var iPaso = document.getElementById('paso').value.toLowerCase();
                    var iVersion = aData[3].toLowerCase();
                    if (iVersion.indexOf(iPaso) !== -1)
                    {
                            return true;
                    }
                    return false;
                }
            );
        \$.fn.dataTableExt.afnFiltering.push(
            function( oSettings, aData, iDataIndex ) {
                    var iCoordinador = document.getElementById('categoria').value.toLowerCase();
                    var iVersion = aData[6].toLowerCase();
                    if (iVersion.indexOf(iCoordinador) !== -1)
                    {
                        return true;
                    }
                    return false;
                }
            );
        \$.fn.dataTableExt.afnFiltering.push(
            function( oSettings, aData, iDataIndex ) {
                    var iCoordinador = document.getElementById('calidad').value.toLowerCase();
                    var iVersion = aData[11].toLowerCase();
                    if (iVersion.indexOf(iCoordinador) !== -1)
                    {
                        return true;
                    }
                    return false;
                }
            );
        \$.fn.dataTableExt.afnFiltering.push(
            function( oSettings, aData, iDataIndex ) {
                    var iCoordinador = document.getElementById('coordinador').value.toLowerCase();
                    var iVersion = aData[12].toLowerCase();
                    if (iVersion.indexOf(iCoordinador) !== -1)
                    {
                        return true;
                    }
                    return false;
                }
            );
        \$.fn.dataTableExt.afnFiltering.push(
            function( oSettings, aData, iDataIndex ) {
                    var iCoordinador = document.getElementById('producto').value.toLowerCase();
                    var iVersion = aData[7].toLowerCase();
                    if (iVersion.indexOf(iCoordinador) !== -1)
                    {
                        return true;
                    }
                    return false;
                }
            );
        \$.fn.dataTableExt.afnFiltering.push(
            function( oSettings, aData, iDataIndex ) {
                    var iCoordinador = document.getElementById('medida').value.toLowerCase();
                    var iVersion = aData[4].toLowerCase();
                    if (iVersion.indexOf(iCoordinador) !== -1)
                    {
                        return true;
                    }
                    return false;
                }
            );
        \$.fn.dataTableExt.afnFiltering.push(
            function( oSettings, aData, iDataIndex ) {
                    var iCodigo = document.getElementById('codigo').value.toLowerCase();
                    var iVersion = aData[5].toLowerCase();
                    if (iVersion.indexOf(iCodigo) !== -1)
                    {
                        return true;
                    }
                    return false;
                }
            );
        \$(document).ready(function() {
            \$('#empresa').change( function() { window.dataTable.fnDraw(); filtraAreas(); } );
            \$('#area').change( function() { window.dataTable.fnDraw(); } );
            \$('#paso').change( function() { window.dataTable.fnDraw(); } );
            \$('#categoria').change( function() { window.dataTable.fnDraw(); } );
            \$('#calidad').change( function() { window.dataTable.fnDraw(); } );
            \$('#coordinador').change( function() { window.dataTable.fnDraw(); } );
            \$('#producto').change( function() { window.dataTable.fnDraw(); } );
            \$('#medida').change( function() { window.dataTable.fnDraw(); } );
            \$('#codigo').keyup( function() { window.dataTable.fnDraw(); } );
        } );
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Pedido:produccion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  804 => 255,  801 => 254,  794 => 249,  786 => 246,  774 => 237,  768 => 234,  760 => 229,  753 => 225,  750 => 224,  748 => 223,  743 => 221,  725 => 220,  720 => 218,  701 => 216,  683 => 215,  665 => 214,  647 => 213,  642 => 211,  623 => 209,  605 => 208,  587 => 207,  569 => 206,  551 => 205,  533 => 204,  515 => 203,  497 => 202,  479 => 201,  461 => 200,  443 => 199,  438 => 197,  434 => 196,  430 => 195,  426 => 194,  422 => 193,  418 => 192,  414 => 191,  410 => 190,  406 => 189,  397 => 183,  391 => 180,  385 => 179,  376 => 173,  372 => 172,  365 => 170,  360 => 168,  356 => 167,  352 => 166,  348 => 165,  343 => 164,  340 => 163,  335 => 162,  333 => 161,  288 => 119,  275 => 108,  264 => 106,  260 => 105,  250 => 97,  239 => 95,  235 => 94,  228 => 92,  217 => 83,  206 => 81,  202 => 80,  192 => 72,  181 => 70,  177 => 69,  167 => 61,  154 => 59,  150 => 58,  145 => 55,  132 => 53,  128 => 52,  116 => 42,  105 => 40,  101 => 39,  91 => 31,  80 => 29,  76 => 28,  66 => 20,  53 => 18,  49 => 17,  37 => 8,  32 => 5,  29 => 3,);
    }
}

<?php

/* FrontendBundle:Pedido:produccion.html.twig */
class __TwigTemplate_269e41e66637290f6a12fc0dd9862e88862f8cb467869999923098fae28e0581 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle:Layouts:base.html.twig");

        $this->blocks = array(
            'produccionm' => array($this, 'block_produccionm'),
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
    public function block_produccionm($context, array $blocks = array())
    {
        echo "selected";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<h3>Productos</h3>

    <div class=\"row\">
        <a href=\"";
        // line 10
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
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 20
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
        // line 22
        echo "            </select>
        </div>
        <div class=\"col-md-1\">
            <label for=\"categoria\">Categoria</label>
        </div>
        <div class=\"col-md-3\">
            <select id=\"categoria\">
                <option value=\"\" selected=\"selected\"></option>
                ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 31
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
        // line 33
        echo "            </select>
        </div>
        <div class=\"col-md-1\">
            <label for=\"producto\">Producto</label>
        </div>
        <div class=\"col-md-2\">
            <select id=\"producto\">
                <option value=\"\" selected=\"selected\"></option>
                ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 42
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
        // line 44
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
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 55
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
        // line 57
        echo "            </select>
            <select id=\"area\">
                <option data-empresa=\"-1\" value=\"\" selected=\"selected\"></option>
                ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 61
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
        // line 63
        echo "            </select>
        </div>
        <div class=\"col-md-1\">
            <label for=\"calidad\">Calidad</label>
        </div>
        <div class=\"col-md-3\">
            <select id=\"calidad\">
                <option value=\"\" selected=\"selected\"></option>
                ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calidades"]) ? $context["calidades"] : $this->getContext($context, "calidades")));
        foreach ($context['_seq'] as $context["_key"] => $context["calidad"]) {
            // line 72
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
        // line 74
        echo "            </select>
        </div>
        <div class=\"col-md-1\">
            <label for=\"medida\">Medidas</label>
        </div>
        <div class=\"col-md-2\">
            <select id=\"medida\">
                <option value=\"\" selected=\"selected\"></option>
                ";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medidas"]) ? $context["medidas"] : $this->getContext($context, "medidas")));
        foreach ($context['_seq'] as $context["_key"] => $context["medida"]) {
            // line 83
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
        // line 85
        echo "            </select>
        </div>
    </div>
    <div class=\"row\">
        
        <div class=\"col-md-1\">
            <label for=\"paso\">Paso</label>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <div class=\"col-md-4\">
            <select id=\"paso\" ";
        // line 94
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "disabled";
        }
        echo ">
                <option value=\"\" selected=\"selected\"></option>
                ";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pasos"]) ? $context["pasos"] : $this->getContext($context, "pasos")));
        foreach ($context['_seq'] as $context["_key"] => $context["paso"]) {
            // line 97
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["paso"]) ? $context["paso"] : $this->getContext($context, "paso")), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["paso"]) ? $context["paso"] : $this->getContext($context, "paso")), "porDefecto") == 1)) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["paso"]) ? $context["paso"] : $this->getContext($context, "paso")), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "            </select>
        </div>
        <div class=\"col-md-1\">
            <label for=\"coordinador\">Coordinador</label>
        </div>
        <div class=\"col-md-3\">
            <select id=\"coordinador\">
                <option value=\"\" selected=\"selected\"></option>
                ";
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coordinadores"]) ? $context["coordinadores"] : $this->getContext($context, "coordinadores")));
        foreach ($context['_seq'] as $context["_key"] => $context["coordinador"]) {
            // line 108
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
        // line 110
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
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/loader-small.gif"), "html", null, true);
        echo "\"/>
    <table class=\"tColapse records_list t_produccion\" id=\"datatable_crud\" style=\"font-size: 11px\">
        <thead>
            <tr>
                <th style=\"display: none\">#</th>
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
        // line 163
        $context["i"] = 1;
        // line 164
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 165
            echo "            <tr>
                <td style=\"display: none\">";
            // line 166
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            echo "</td>
                <td style=\"display: none\">";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "contactoPk"), "areaPk"), "empresaPk"), "html", null, true);
            echo "</td>
                <td style=\"display: none\">";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "contactoPk"), "areaPk"), "empresaArea"), "html", null, true);
            echo "</td>
                <td style=\"display: none\">";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "pasoPedidosPk"), "html", null, true);
            echo "</td>
                <td style=\"display: none\">";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "medidaPk"), "html", null, true);
            echo "</td>
                <td>
                    <span id=\"tc";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "idRecur"), "html", null, true);
            echo "</span>
                    <div class=\"tooltip\" style=\"display: none\">
                        <div class=\"tooltip-inner\" id=\"tci";
            // line 174
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
                            ";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "conceptoFactura"), "html", null, true);
            echo "
                        </div>
                        <div class=\"tooltip-arrow\"></div>
                    </div>
                    <script type=\"text/javascript\">
                        jQuery(document).ready(function() {
                            var popc";
            // line 181
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo " = \$(\"#tci";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").html();
                            \$(\"#tc";
            // line 182
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").popover({
                                title: 'Conceptos',
                                trigger:'hover click',
                                content: popc";
            // line 185
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo ",
                                html:true
                            });
                        });
                    </script>
                </td>
                <td style=\"display: none\">";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "conceptoFactura"), "html", null, true);
            echo "</td>
                <td>";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "productoPk"), "categoriaPk"), "html", null, true);
            echo "</td>
                <td>";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreProducto"), "html", null, true);
            echo "</td>
                <td class=\"highlighted\">";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cantidad"), "html", null, true);
            echo "</td>
                <td>";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "alto"), "html", null, true);
            echo "</td>
                <td>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ancho"), "html", null, true);
            echo "</td>
                <td class=\"highlighted\">";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoCalidadPk"), "html", null, true);
            echo "</td>
                <td>";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "coordinadorUsuarioPk"), "html", null, true);
            echo "</td>
                <td>";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado1UsuarioPk"), "html", null, true);
            echo "</td>
                
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 201
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
            // line 202
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
            // line 203
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
            // line 204
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
            // line 205
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
            // line 206
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
            // line 207
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
            // line 208
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
            // line 209
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
            // line 210
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
            // line 211
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
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado2UsuarioPk"), "html", null, true);
            echo "</td>
                
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 215
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
            // line 216
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
            // line 217
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
            // line 218
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
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoPk"), "delegado3UsuarioPk"), "html", null, true);
            echo "</td>
                
                <td><input type=\"checkbox\" name=\"pedidoProducto_";
            // line 222
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
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\"></span></td>
                <td>
                    <!-- Button trigger modal -->
                    <button style=\"font-size: 12px; padding: 5px 11px;\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#notasPP";
            // line 226
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">
                      <span class=\"glyphicon glyphicon-list-alt\"></span>
                    </button>
                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"notasPP";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                      <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            <h4 class=\"modal-title\" id=\"myModalLabel\">Notas producto: <span style=\"color: #3276b1\">";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreProducto"), "html", null, true);
            echo "</span></h4>
                          </div>
                          <div class=\"modal-body\" style=\"font-size: 150%\">
                              <h4>
                                  Notas:
                              </h4>
                              <textarea rows=\"5\" style=\"width: 100%\" id=\"notasPPText";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notasControlPp"), "html", null, true);
            echo "</textarea>
                          </div>
                          <div class=\"modal-footer\">
                                <button type=\"button\" id=\"sendNotasControlPP";
            // line 244
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" data-modalid=\"notasPP";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" data-idnotas=\"notasPPText";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" class=\"btn btn-success enviaNotas\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_set_notas_control_pp", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" data-dismiss=\"modal\">Guardar</button>
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                          </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "        </tbody>
    </table>
    
";
    }

    // line 258
    public function block_javascripts($context, array $blocks = array())
    {
        // line 259
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
                    var iCoordinador = document.getElementById('calidad').value.toLowerCase();
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
                    var iCoordinador = document.getElementById('coordinador').value.toLowerCase();
                    var iVersion = aData[13].toLowerCase();
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
                    var iVersion = aData[8].toLowerCase();
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
        return array (  823 => 259,  820 => 258,  813 => 253,  792 => 244,  784 => 241,  775 => 235,  767 => 230,  760 => 226,  754 => 223,  736 => 222,  731 => 220,  712 => 218,  694 => 217,  676 => 216,  658 => 215,  653 => 213,  634 => 211,  616 => 210,  598 => 209,  580 => 208,  562 => 207,  544 => 206,  526 => 205,  508 => 204,  490 => 203,  472 => 202,  454 => 201,  449 => 199,  445 => 198,  441 => 197,  437 => 196,  433 => 195,  429 => 194,  425 => 193,  421 => 192,  417 => 191,  408 => 185,  402 => 182,  396 => 181,  387 => 175,  383 => 174,  376 => 172,  371 => 170,  367 => 169,  363 => 168,  359 => 167,  354 => 166,  351 => 165,  346 => 164,  344 => 163,  299 => 121,  286 => 110,  275 => 108,  271 => 107,  261 => 99,  246 => 97,  242 => 96,  235 => 94,  224 => 85,  213 => 83,  209 => 82,  199 => 74,  188 => 72,  184 => 71,  174 => 63,  161 => 61,  157 => 60,  152 => 57,  139 => 55,  135 => 54,  123 => 44,  112 => 42,  108 => 41,  98 => 33,  87 => 31,  83 => 30,  73 => 22,  60 => 20,  56 => 19,  44 => 10,  39 => 7,  36 => 5,  30 => 3,);
    }
}

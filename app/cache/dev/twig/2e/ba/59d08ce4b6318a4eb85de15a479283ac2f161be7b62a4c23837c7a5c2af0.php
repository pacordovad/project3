<?php

/* FrontendBundle:Pedido:control.html.twig */
class __TwigTemplate_2eba59d08ce4b6318a4eb85de15a479283ac2f161be7b62a4c23837c7a5c2af0 extends Twig_Template
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
        // line 4
        echo "<h3>Control</h3>
    <div class=\"row\">
        <a href=\"";
        // line 6
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
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 16
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
        // line 18
        echo "            </select>
        </div>
        <div class=\"col-md-1\">
            <label for=\"fechadesde\">Fecha desde</label>
        </div>
        <div class=\"col-md-2\">
            <input type=\"text\" id=\"fechadesde\"/>
        </div>
        <div class=\"col-md-1\">
            <label for=\"fechahasta\">Fecha hasta</label>
        </div>
        <div class=\"col-md-2\">
            <input type=\"text\" id=\"fechahasta\"/>
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
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 41
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
        // line 43
        echo "            </select>
            <select id=\"area\">
                <option data-empresa=\"-1\" value=\"\" selected=\"selected\"></option>
                ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 47
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
        // line 49
        echo "            </select>
        </div>
        <div class=\"col-md-1\">
            <label for=\"coordinador\">Coordinador</label>
        </div>
        <div class=\"col-md-2\">
            <select id=\"coordinador\">
                <option value=\"\" selected=\"selected\"></option>
                ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coordinadores"]) ? $context["coordinadores"] : $this->getContext($context, "coordinadores")));
        foreach ($context['_seq'] as $context["_key"] => $context["coordinador"]) {
            // line 58
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
        // line 60
        echo "            </select>
        </div>
        <div class=\"col-md-1\">
            <label for=\"codigo\">C&oacute;digo</label>
        </div>
        <div class=\"col-md-2\">
            <input type=\"text\" id=\"codigo\"/>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-1\">
            <label for=\"paso\">Paso</label>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <div class=\"col-md-4\">
            <select id=\"paso\">
                <option value=\"\" selected=\"selected\"></option>
                ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pasos"]) ? $context["pasos"] : $this->getContext($context, "pasos")));
        foreach ($context['_seq'] as $context["_key"] => $context["paso"]) {
            // line 77
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
        // line 79
        echo "            </select>
        </div>
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\"></div>
    </div>
    
    <br/>
    <input type=\"hidden\" id=\"loading-gif\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/loader-small.gif"), "html", null, true);
        echo "\"/>
    <table class=\"tColapse records_list\" id=\"datatable_crud\" style=\"font-size: 11px\">
        <thead>
            <tr>
                <th>#</th>
                <th style=\"display: none\">Concepto</th>
                <th style=\"display: none\">Empresa</th>
                <th style=\"display: none\">Contacto</th>
                <th style=\"display: none\">Paso</th>
                <th>Coordinador</th>
                <th>Fecha de registro</th>
                <th>&Aacute;rea</th>
                <th># Prod.</th>
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
                <th>Relacionados</th>
                <th>Paso</th>
                <th>Notas</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 125
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 126
            echo "            <tr>
                <td>
                    <span id=\"tc";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idRecur"), "html", null, true);
            echo "</span>
                    <div class=\"tooltip\" style=\"display: none\">
                        <div class=\"tooltip-inner\" id=\"tci";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">
                            ";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "conceptoFactura"), "html", null, true);
            echo "
                        </div>
                        <div class=\"tooltip-arrow\"></div>
                    </div>
                    <script type=\"text/javascript\">
                        jQuery(document).ready(function() {
                            var popc";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo " = \$(\"#tci";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\").html();
                            \$(\"#tc";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\").popover({
                                title: 'Conceptos',
                                trigger:'hover click',
                                content: popc";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo ",
                                html:true
                            });
                        });
                    </script>
                </td>
                <td style=\"display: none\">";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "conceptoFactura"), "html", null, true);
            echo "</td>
                <td style=\"display: none\">";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "empresaPk"), "html", null, true);
            echo "</td>
                <td style=\"display: none\">";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaEmpresaContacto"), "html", null, true);
            echo "</td>
                <td style=\"display: none\">";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pasoPedidosPk"), "html", null, true);
            echo "</td>
                <td>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "coordinadorUsuarioPk"), "html", null, true);
            echo "</td>
                <td>";
            // line 152
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaRegistro")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaRegistro"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <span id=\"t";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "empresaArea"), "html", null, true);
            echo "</span>
                    <div class=\"tooltip\" style=\"display: none\">
                        <div class=\"tooltip-inner\" id=\"ti";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">
                            ";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "html", null, true);
            echo "<br/><br/>
                            Contacto: ";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "html", null, true);
            echo "<br/>
                            Cargo: ";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "cargoPk"), "html", null, true);
            echo "<br/>
                            Telf: ";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "telefono"), "html", null, true);
            echo "<br/><br/>
                            Etapa area: ";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etapa"), "html", null, true);
            echo "
                        </div>
                        <div class=\"tooltip-arrow\"></div>
                    </div>
                        <script type=\"text/javascript\">
                            jQuery(document).ready(function() {
                                var pop";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo " = \$(\"#ti";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\").html();
                                \$(\"#t";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\").popover({
                                    title: 'Contacto',
                                    trigger:'hover click',
                                    content: pop";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo ",
                                    html:true
                                });
                            });
                        </script>
                </td>
                <td>";
            // line 177
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoProducto")), "html", null, true);
            echo "</td>
                <td>";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "coordinadorUsuarioPk"), "html", null, true);
            echo "</td>
                <td>
                    <select id=\"delegado1_";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" name=\"delegado1_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" onchange=\"cambiaDelegado1('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "','";
            echo $this->env->getExtension('routing')->getUrl("pedido_cambiaDelegado1");
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "delegado1UsuarioPk"), "id"), "html", null, true);
            echo "')\">
                        ";
            // line 181
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 182
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id") == $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "delegado1UsuarioPk"), "id"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "                    </select>
                </td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso1"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso1")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso2"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso2")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso3"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso3")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso4"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso4")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso5"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso5")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso6"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso6")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso7"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso7")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso8"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso8")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso9"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso9")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso10"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso10")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso11"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso11")) {
                echo "checked";
            }
            echo "></td>
                <td>
                    <select id=\"delegado2_";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" name=\"delegado2_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" onchange=\"cambiaDelegado2('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "','";
            echo $this->env->getExtension('routing')->getUrl("pedido_cambiaDelegado2");
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "delegado2UsuarioPk"), "id"), "html", null, true);
            echo "')\">
                        ";
            // line 199
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 200
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id") == $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "delegado2UsuarioPk"), "id"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "                    </select>
                </td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso12"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso12")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso13"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso13")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso14"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso14")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso15"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso15")) {
                echo "checked";
            }
            echo "></td>
                <td>
                    <select id=\"delegado3_";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" name=\"delegado3_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" onchange=\"cambiaDelegado3('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "','";
            echo $this->env->getExtension('routing')->getUrl("pedido_cambiaDelegado3");
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "delegado3UsuarioPk"), "id"), "html", null, true);
            echo "')\">
                        ";
            // line 210
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 211
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id") == $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "delegado3UsuarioPk"), "id"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "                    </select>
                </td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso11"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paso16")) {
                echo "checked";
            }
            echo "></td>
                <td>
                    <a class=\"btn btn-primary\" style=\"font-size: 10px; float: left\" href=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" title=\"Editar\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                    <a class=\"btn btn-primary\" style=\"font-size: 10px; float: left\" href=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_productos", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" title=\"Productos\"><span class=\"glyphicon glyphicon-list\"></a>
                    <a class=\"btn btn-primary\" style=\"font-size: 10px; float: left\" href=\"";
            // line 219
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_esquema", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" title=\"Esquema\"><span class=\"glyphicon glyphicon-eye-open\"></a>
                    <a class=\"btn btn-primary\" style=\"font-size: 10px; float: left\" href=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_duplicar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" title=\"Duplicar\"><span class=\"glyphicon glyphicon-random\"></a>
                </td>
                <td>
                    <select id=\"paso_";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" name=\"paso_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" onchange=\"cambiaPaso('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "','";
            echo $this->env->getExtension('routing')->getUrl("pedido_cambiaPaso");
            echo "','";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pasoPedido", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pasoPedido", array(), "any", false, true), "id"), "-1")) : ("-1")), "html", null, true);
            echo "')\">
                        <option value=\"-1\" data-label=\"\"></option>
                        ";
            // line 225
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pasos"]) ? $context["pasos"] : $this->getContext($context, "pasos")));
            foreach ($context['_seq'] as $context["_key"] => $context["paso"]) {
                // line 226
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paso"]) ? $context["paso"] : $this->getContext($context, "paso")), "id"), "html", null, true);
                echo "\" data-label=\"";
                echo twig_escape_filter($this->env, (isset($context["paso"]) ? $context["paso"] : $this->getContext($context, "paso")), "html", null, true);
                echo "\" ";
                if (((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pasoPedidosPk"))) && ($this->getAttribute((isset($context["paso"]) ? $context["paso"] : $this->getContext($context, "paso")), "id") == $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pasoPedidosPk"), "id")))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["paso"]) ? $context["paso"] : $this->getContext($context, "paso")), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paso'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "                    </select>
                </td>
                <td>
                ";
            // line 231
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "notas", array(), "any", true, true) && ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notas") != ""))) {
                // line 232
                echo "                    <!-- Button trigger modal -->
                    <button style=\"font-size: 12px; padding: 5px 11px;\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#notas";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "\">
                      <span class=\"glyphicon glyphicon-list-alt\"></span>
                    </button>

                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"notas";
                // line 238
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                      <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            <h4 class=\"modal-title\" id=\"myModalLabel\">Notas pedido <span style=\"color: #3276b1\">";
                // line 243
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "</span></h4>
                          </div>
                          <div class=\"modal-body\" style=\"font-size: 150%\">
                                ";
                // line 246
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notas"), "html", null, true);
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
            // line 255
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "        </tbody>
    </table>
";
    }

    // line 262
    public function block_javascripts($context, array $blocks = array())
    {
        // line 263
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
                    var iVersion = aData[7].toLowerCase();                    
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
                    var iVersion = aData[4].toLowerCase();
                    if (iVersion.indexOf(iPaso) !== -1)
                    {
                            return true;
                    }
                    return false;
                }
            );
        \$.fn.dataTableExt.afnFiltering.push(
            function( oSettings, aData, iDataIndex ) {
                    var iCoordinador = document.getElementById('coordinador').value.toLowerCase();
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
                    var iVersion = aData[0].toLowerCase();
                    if (iVersion.indexOf(iCodigo) !== -1)
                    {
                        return true;
                    }
                    return false;
                }
            );
        \$.fn.dataTableExt.afnFiltering.push(
            function( oSettings, aData, iDataIndex ) {
                var iFini = document.getElementById('fechadesde').value;
                var iFfin = document.getElementById('fechahasta').value;
                var iDateCol = 5;

                iFini = iFini.substring(0,4) + iFini.substring(5,7) + iFini.substring(8,10) + iFini.substring(11,13) + iFini.substring(14,16) + iFini.substring(17,19);
                iFfin = iFfin.substring(0,4) + iFfin.substring(5,7) + iFfin.substring(8,10) + iFfin.substring(11,13) + iFfin.substring(14,16) + iFfin.substring(17,19);
                
                var dato = aData[iDateCol].substring(0,4) + aData[iDateCol].substring(5,7) + aData[iDateCol].substring(8,10) + aData[iDateCol].substring(11,13) + aData[iDateCol].substring(14,16) + aData[iDateCol].substring(17,19);

                if ( iFini === \"\" && iFfin === \"\" )
                {
                    return true;
                }
                else if ( iFini <= dato && iFfin === \"\")
                {
                    return true;
                }
                else if ( iFfin >= dato && iFini === \"\")
                {
                    return true;
                }
                else if (iFini <= dato && iFfin >= dato)
                {
                    return true;
                }
                return false;
            }
        );
        \$(document).ready(function() {
            \$(\"#fechadesde\").datepicker({
                altFormat: \"yy-mm-dd 00:00:00\",
                changeYear: true,
                changeMonth: true,
                dateFormat: \"yy-mm-dd 00:00:00\",
                yearRange: \"2012:2050\"
            });
            \$(\"#fechahasta\").datepicker({
                altFormat: \"yy-mm-dd 00:00:00\",
                changeYear: true,
                changeMonth: true,
                dateFormat: \"yy-mm-dd 00:00:00\",
                yearRange: \"2012:2050\"
            });
            \$('#empresa').change( function() { window.dataTable.fnDraw(); filtraAreas(); } );
            \$('#area').change( function() { window.dataTable.fnDraw(); } );
            \$('#paso').change( function() { window.dataTable.fnDraw(); } );
            \$('#coordinador').change( function() { window.dataTable.fnDraw(); } );
            \$('#codigo').keyup( function() { window.dataTable.fnDraw(); } );
            \$('#fechadesde').on( \"keyup change\", function() { window.dataTable.fnDraw(); } );
            \$('#fechahasta').on( \"keyup change\", function() { window.dataTable.fnDraw(); } );
        } );
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Pedido:control.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  760 => 263,  757 => 262,  751 => 258,  743 => 255,  731 => 246,  725 => 243,  717 => 238,  709 => 233,  706 => 232,  704 => 231,  699 => 228,  682 => 226,  678 => 225,  665 => 223,  659 => 220,  655 => 219,  651 => 218,  647 => 217,  636 => 215,  632 => 213,  617 => 211,  613 => 210,  601 => 209,  590 => 207,  580 => 206,  570 => 205,  560 => 204,  556 => 202,  541 => 200,  537 => 199,  525 => 198,  514 => 196,  504 => 195,  494 => 194,  484 => 193,  474 => 192,  464 => 191,  454 => 190,  444 => 189,  434 => 188,  424 => 187,  414 => 186,  410 => 184,  395 => 182,  391 => 181,  379 => 180,  374 => 178,  370 => 177,  361 => 171,  355 => 168,  349 => 167,  340 => 161,  336 => 160,  332 => 159,  328 => 158,  324 => 157,  320 => 156,  313 => 154,  306 => 152,  302 => 151,  298 => 150,  294 => 149,  290 => 148,  286 => 147,  277 => 141,  271 => 138,  265 => 137,  256 => 131,  252 => 130,  245 => 128,  241 => 126,  237 => 125,  195 => 86,  186 => 79,  175 => 77,  171 => 76,  153 => 60,  142 => 58,  138 => 57,  128 => 49,  115 => 47,  111 => 46,  106 => 43,  93 => 41,  89 => 40,  65 => 18,  52 => 16,  48 => 15,  36 => 6,  32 => 4,  29 => 3,);
    }
}

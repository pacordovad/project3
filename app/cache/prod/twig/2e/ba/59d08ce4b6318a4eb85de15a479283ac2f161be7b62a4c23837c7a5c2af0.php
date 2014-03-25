<?php

/* FrontendBundle:Pedido:control.html.twig */
class __TwigTemplate_2eba59d08ce4b6318a4eb85de15a479283ac2f161be7b62a4c23837c7a5c2af0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle:Layouts:base.html.twig");

        $this->blocks = array(
            'controlm' => array($this, 'block_controlm'),
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
    public function block_controlm($context, array $blocks = array())
    {
        echo "selected";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h3>Control</h3>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 18
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["empresa"]) ? $context["empresa"] : null), "html", null, true);
            echo "\" data-empresaid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["empresa"]) ? $context["empresa"] : null), "html", null, true);
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
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 43
            echo "                    <option data-empresa=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["area"]) ? $context["area"] : null), "empresaPk"), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : null), "empresaArea"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : null), "empresaArea"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </select>
            <select id=\"area\">
                <option data-empresa=\"-1\" value=\"\" selected=\"selected\"></option>
                ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 49
            echo "                    <option data-empresa=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["area"]) ? $context["area"] : null), "empresaPk"), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : null), "empresaArea"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["area"]) ? $context["area"] : null), "empresaArea"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['area'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </select>
        </div>
        <div class=\"col-md-1\">
            <label for=\"coordinador\">Coordinador</label>
        </div>
        <div class=\"col-md-2\">
            <select id=\"coordinador\">
                <option value=\"\" selected=\"selected\"></option>
                ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coordinadores"]) ? $context["coordinadores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["coordinador"]) {
            // line 60
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["coordinador"]) ? $context["coordinador"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["coordinador"]) ? $context["coordinador"] : null), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coordinador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
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
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pasos"]) ? $context["pasos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["paso"]) {
            // line 79
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["paso"]) ? $context["paso"] : null), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["paso"]) ? $context["paso"] : null), "porDefecto") == 1)) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["paso"]) ? $context["paso"] : null), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            </select>
        </div>
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\"></div>
    </div>
    
    <br/>
    <input type=\"hidden\" id=\"loading-gif\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/loader-small.gif"), "html", null, true);
        echo "\"/>
    <table class=\"tColapse records_list t_control\" id=\"datatable_crud_pedidos\" style=\"font-size: 11px\">
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
        // line 127
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 128
            echo "            <tr>
                <td>
                    <span id=\"tc";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "idRecur"), "html", null, true);
            echo "</span>
                    <div class=\"tooltip\" style=\"display: none\">
                        <div class=\"tooltip-inner\" id=\"tci";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\">
                            ";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "conceptoFactura"), "html", null, true);
            echo "
                        </div>
                        <div class=\"tooltip-arrow\"></div>
                    </div>
                    <script type=\"text/javascript\">
                        jQuery(document).ready(function() {
                            var popc";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo " = \$(\"#tci";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\").html();
                            \$(\"#tc";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\").popover({
                                title: 'Conceptos',
                                trigger:'hover click',
                                content: popc";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo ",
                                html:true
                            });
                        });
                    </script>
                </td>
                <td style=\"display: none\">";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "conceptoFactura"), "html", null, true);
            echo "</td>
                <td style=\"display: none\">";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "contactoPk"), "areaPk"), "empresaPk"), "html", null, true);
            echo "</td>
                <td style=\"display: none\">";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "contactoPk"), "areaEmpresaContacto"), "html", null, true);
            echo "</td>
                <td style=\"display: none\">";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pasoPedidosPk"), "html", null, true);
            echo "</td>
                <td>";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "coordinadorUsuarioPk"), "html", null, true);
            echo "</td>
                <td>";
            // line 154
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechaRegistro")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechaRegistro"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <span id=\"t";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "contactoPk"), "areaPk"), "empresaArea"), "html", null, true);
            echo "</span>
                    <div class=\"tooltip\" style=\"display: none\">
                        <div class=\"tooltip-inner\" id=\"ti";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\">
                            Contacto: ";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "contactoPk"), "html", null, true);
            echo "<br/>
                            Cargo: ";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "contactoPk"), "cargoPk"), "html", null, true);
            echo "<br/>
                            Telf: ";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "contactoPk"), "telefono"), "html", null, true);
            echo " ";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "contactoPk"), "extension") != null)) {
                echo "Ext. ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "contactoPk"), "extension"), "html", null, true);
            }
            echo "<br/>
                            Telf celular 1: ";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "contactoPk"), "celular1"), "html", null, true);
            echo "<br/>
                            Telf celular 2: ";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "contactoPk"), "celular2"), "html", null, true);
            echo "<br/>
                            Correo trabajo: ";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "contactoPk"), "correoTrabajo"), "html", null, true);
            echo "<br/>
                            Correo alternativo: ";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "contactoPk"), "correoAlternativo"), "html", null, true);
            echo "<br/>
                            Etapa area: ";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "etapa"), "html", null, true);
            echo "
                        </div>
                        <div class=\"tooltip-arrow\"></div>
                    </div>
                        <script type=\"text/javascript\">
                            jQuery(document).ready(function() {
                                var pop";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo " = \$(\"#ti";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\").html();
                                \$(\"#t";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\").popover({
                                    title: 'Contacto',
                                    trigger:'hover click',
                                    content: pop";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo ",
                                    html:true
                                });
                            });
                        </script>
                </td>
                <td class=\"highlighted\">";
            // line 182
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pedidoProducto")), "html", null, true);
            echo "</td>
                <td>";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "coordinadorUsuarioPk"), "html", null, true);
            echo "</td>
                <td>
                    <select id=\"delegado1_";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" name=\"delegado1_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" onchange=\"cambiaDelegado1('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "','";
            echo $this->env->getExtension('routing')->getUrl("pedido_cambiaDelegado1");
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "delegado1UsuarioPk"), "id"), "html", null, true);
            echo "')\">
                        ";
            // line 186
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 187
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id") == $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "delegado1UsuarioPk"), "id"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["usuario"]) ? $context["usuario"] : null), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                    </select>
                </td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso1"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso1")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso2"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso2")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso3"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso3")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso4"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso4")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso5"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso5")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso6"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso6")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso7"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso7")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso8"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso8")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso9"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso9")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso10"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso10")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso11"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso11")) {
                echo "checked";
            }
            echo "></td>
                <td>
                    <select id=\"delegado2_";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" name=\"delegado2_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" onchange=\"cambiaDelegado2('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "','";
            echo $this->env->getExtension('routing')->getUrl("pedido_cambiaDelegado2");
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "delegado2UsuarioPk"), "id"), "html", null, true);
            echo "')\">
                        ";
            // line 204
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 205
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id") == $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "delegado2UsuarioPk"), "id"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["usuario"]) ? $context["usuario"] : null), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "                    </select>
                </td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso12"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso12")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso13"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso13")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso14"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso14")) {
                echo "checked";
            }
            echo "></td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso15"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso15")) {
                echo "checked";
            }
            echo "></td>
                <td>
                    <select id=\"delegado3_";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" name=\"delegado3_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" onchange=\"cambiaDelegado3('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "','";
            echo $this->env->getExtension('routing')->getUrl("pedido_cambiaDelegado3");
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "delegado3UsuarioPk"), "id"), "html", null, true);
            echo "')\">
                        ";
            // line 215
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 216
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id") == $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "delegado3UsuarioPk"), "id"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["usuario"]) ? $context["usuario"] : null), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "                    </select>
                </td>
                <td><input type=\"checkbox\" name=\"paso1_";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso11"), "html", null, true);
            echo "\" disabled=\"disabled\" ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "paso16")) {
                echo "checked";
            }
            echo "></td>
                <td>
                    ";
            // line 222
            if ($this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")) {
                echo "<a class=\"btn btn-primary\" style=\"font-size: 10px; float: left\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                echo "\" title=\"Propuesta\"><span class=\"glyphicon glyphicon-edit\"></span></a>";
            }
            // line 223
            echo "                    ";
            if ($this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")) {
                echo "<a class=\"btn btn-primary\" style=\"font-size: 10px; float: left\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_productos", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                echo "\" title=\"Proceso\"><span class=\"glyphicon glyphicon-list\"></a>";
            }
            // line 224
            echo "                    <a class=\"btn btn-primary\" style=\"font-size: 10px; float: left\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_esquema", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\" title=\"Productos\"><span class=\"glyphicon glyphicon-eye-open\"></a>
                    ";
            // line 225
            if ($this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")) {
                echo "<a class=\"btn btn-primary\" onclick=\"return confirmar()\" style=\"font-size: 10px; float: left\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_duplicar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                echo "\" title=\"Copiar\"><span class=\"glyphicon glyphicon-random\"></a>";
            }
            // line 226
            echo "                </td>
                <td>
                    <select id=\"paso_";
            // line 228
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" name=\"paso_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" onchange=\"cambiaPaso('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "','";
            echo $this->env->getExtension('routing')->getUrl("pedido_cambiaPaso");
            echo "','";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pasoPedido", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pasoPedido", array(), "any", false, true), "id"), "-1")) : ("-1")), "html", null, true);
            echo "')\" ";
            if (($this->env->getExtension('security')->isGranted("ROLE_COORDINADOR") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id") == $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "delegado3UsuarioPk"), "id")))) {
            } else {
                echo "disabled";
            }
            echo ">
                        <option value=\"-1\" data-label=\"\"></option>
                        ";
            // line 230
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pasos"]) ? $context["pasos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["paso"]) {
                // line 231
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paso"]) ? $context["paso"] : null), "id"), "html", null, true);
                echo "\" data-label=\"";
                echo twig_escape_filter($this->env, (isset($context["paso"]) ? $context["paso"] : null), "html", null, true);
                echo "\" ";
                if (((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pasoPedidosPk"))) && ($this->getAttribute((isset($context["paso"]) ? $context["paso"] : null), "id") == $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pasoPedidosPk"), "id")))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["paso"]) ? $context["paso"] : null), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paso'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "                    </select>
                </td>
                <td>
                    <!-- Button trigger modal -->
                    <button style=\"font-size: 12px; padding: 5px 11px;\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#notas";
            // line 237
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\">
                      <span class=\"glyphicon glyphicon-list-alt\"></span>
                    </button>

                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"notas";
            // line 242
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                      <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            <h4 class=\"modal-title\" id=\"myModalLabel\">Notas pedido <span style=\"color: #3276b1\">";
            // line 247
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "</span></h4>
                          </div>
                          <div class=\"modal-body\" style=\"font-size: 150%\">
                              <h4>
                                  Notas:
                              </h4>
                              <textarea rows=\"5\" style=\"width: 100%\" id=\"notasPedido";
            // line 253
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "notasControl"), "html", null, true);
            echo "</textarea>
                          </div>
                          <div class=\"modal-footer\">
                              <button type=\"button\" id=\"sendNotasControl";
            // line 256
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" data-modalid=\"notas";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" data-idnotas=\"notasPedido";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" class=\"btn btn-success enviaNotas\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_set_notas_control", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
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
        // line 265
        echo "        </tbody>
    </table>
";
    }

    // line 269
    public function block_javascripts($context, array $blocks = array())
    {
        // line 270
        echo "    <script type=\"text/javascript\">
        /* Custom filtering function which will filter data in column four between two values */
        \$.fn.dataTableExt.afnFiltering.push(
            function( oSettings, aData, iDataIndex ) {
                    var iEmpresa = document.getElementById('empresa').value.toLowerCase();
                    var iVersion = aData[2].toLowerCase();
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
                    var iVersion = aData[5].toLowerCase();
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
                var iDateCol = 6;

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
            \$('#empresa').change( function() { window.dataTable3.fnDraw(); filtraAreas(); } );
            \$('#area').change( function() { window.dataTable3.fnDraw(); } );
            \$('#paso').change( function() { window.dataTable3.fnDraw(); } );
            \$('#coordinador').change( function() { window.dataTable3.fnDraw(); } );
            \$('#codigo').keyup( function() { window.dataTable3.fnDraw(); } );
            \$('#fechadesde').on( \"keyup change\", function() { window.dataTable3.fnDraw(); } );
            \$('#fechahasta').on( \"keyup change\", function() { window.dataTable3.fnDraw(); } );
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
        return array (  811 => 270,  808 => 269,  802 => 265,  781 => 256,  773 => 253,  764 => 247,  756 => 242,  748 => 237,  742 => 233,  725 => 231,  721 => 230,  703 => 228,  699 => 226,  693 => 225,  688 => 224,  681 => 223,  675 => 222,  664 => 220,  660 => 218,  645 => 216,  641 => 215,  629 => 214,  618 => 212,  608 => 211,  598 => 210,  588 => 209,  584 => 207,  569 => 205,  565 => 204,  553 => 203,  542 => 201,  532 => 200,  522 => 199,  512 => 198,  502 => 197,  492 => 196,  482 => 195,  472 => 194,  462 => 193,  452 => 192,  442 => 191,  438 => 189,  423 => 187,  419 => 186,  407 => 185,  402 => 183,  398 => 182,  389 => 176,  383 => 173,  377 => 172,  368 => 166,  364 => 165,  360 => 164,  356 => 163,  352 => 162,  343 => 161,  339 => 160,  335 => 159,  331 => 158,  324 => 156,  317 => 154,  313 => 153,  309 => 152,  305 => 151,  301 => 150,  297 => 149,  288 => 143,  282 => 140,  276 => 139,  267 => 133,  263 => 132,  256 => 130,  252 => 128,  248 => 127,  206 => 88,  197 => 81,  182 => 79,  178 => 78,  160 => 62,  149 => 60,  145 => 59,  135 => 51,  122 => 49,  118 => 48,  113 => 45,  100 => 43,  96 => 42,  72 => 20,  59 => 18,  55 => 17,  43 => 8,  39 => 6,  36 => 5,  30 => 3,);
    }
}

<?php

/* FrontendBundle:Pedido:cobros.html.twig */
class __TwigTemplate_d31e85ba6ebb467e2fc2de763858c8025c2b4fc0d22c756087eee673a0d0e23d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle:Layouts:base.html.twig");

        $this->blocks = array(
            'cobrosm' => array($this, 'block_cobrosm'),
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
    public function block_cobrosm($context, array $blocks = array())
    {
        echo "selected";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h3>Cobros</h3>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 43
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
        // line 45
        echo "            </select>
            <select id=\"area\">
                <option data-empresa=\"-1\" value=\"\" selected=\"selected\"></option>
                ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["areas"]) ? $context["areas"] : $this->getContext($context, "areas")));
        foreach ($context['_seq'] as $context["_key"] => $context["area"]) {
            // line 49
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
        $context['_seq'] = twig_ensure_traversable((isset($context["coordinadores"]) ? $context["coordinadores"] : $this->getContext($context, "coordinadores")));
        foreach ($context['_seq'] as $context["_key"] => $context["coordinador"]) {
            // line 60
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
        $context['_seq'] = twig_ensure_traversable((isset($context["pasos"]) ? $context["pasos"] : $this->getContext($context, "pasos")));
        foreach ($context['_seq'] as $context["_key"] => $context["paso"]) {
            // line 79
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
        // line 81
        echo "            </select>
        </div>
        <div class=\"col-md-1\">
            <label for=\"factura\">Factura</label>
        </div>
        <div class=\"col-md-2\">
            <input type=\"text\" id=\"factura\"/>
        </div>
        <div class=\"col-md-4\"></div>
    </div>
    
    <br/>
    
    <input type=\"hidden\" id=\"loading-gif\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/loader-small.gif"), "html", null, true);
        echo "\"/>
    <table class=\"tColapse records_list t_cobros\" id=\"datatable_crud_pedidos\" style=\"font-size: 11px\">
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
                <th># Factura</th>
                <th>Subtotal</th>
                <th>IVA</th>
                <th>Total</th>
                <th>Ret. Renta</th>
                <th>Ret. IVA</th>
                <th>L&iacute;quido</th>
                <th>Banco</th>
                <th>Relacionados</th>
                <th>Paso</th>
                <th>Notas</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 122
            echo "            <tr>
                <td>
                    <span id=\"tc";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idRecur"), "html", null, true);
            echo "</span>
                    <div class=\"tooltip\" style=\"display: none\">
                        <div class=\"tooltip-inner\" id=\"tci";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">
                            ";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "conceptoFactura"), "html", null, true);
            echo "
                        </div>
                        <div class=\"tooltip-arrow\"></div>
                    </div>
                    <script type=\"text/javascript\">
                        jQuery(document).ready(function() {
                            var popc";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo " = \$(\"#tci";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\").html();
                            \$(\"#tc";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\").popover({
                                title: 'Conceptos',
                                trigger:'hover click',
                                content: popc";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo ",
                                html:true
                            });
                        });
                    </script>
                </td>
                <td style=\"display: none\">";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "conceptoFactura"), "html", null, true);
            echo "</td>
                <td style=\"display: none\">";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "empresaPk"), "html", null, true);
            echo "</td>
                <td style=\"display: none\">";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaEmpresaContacto"), "html", null, true);
            echo "</td>
                <td style=\"display: none\">";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pasoPedidosPk"), "html", null, true);
            echo "</td>
                <td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "coordinadorUsuarioPk"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 149
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaRegistro")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaRegistro"), "Y-m-d H:i:s"), "html", null, true);
            }
            // line 150
            echo "                </td>
                <td>
                    <span id=\"t";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "areaPk"), "empresaArea"), "html", null, true);
            echo "</span>
                    <div class=\"tooltip\" style=\"display: none\">
                        <div class=\"tooltip-inner\" id=\"ti";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">
                            Contacto: ";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "html", null, true);
            echo "<br/>
                            Cargo: ";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "cargoPk"), "html", null, true);
            echo "<br/>
                            Telf: ";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "telefono"), "html", null, true);
            echo " ";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "extension") != null)) {
                echo "Ext. ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "extension"), "html", null, true);
            }
            echo "<br/>
                            Telf celular 1: ";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "celular1"), "html", null, true);
            echo "<br/>
                            Telf celular 2: ";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "celular2"), "html", null, true);
            echo "<br/>
                            Correo trabajo: ";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "correoTrabajo"), "html", null, true);
            echo "<br/>
                            Correo alternativo: ";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "correoAlternativo"), "html", null, true);
            echo "<br/>
                            Etapa area: ";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etapa"), "html", null, true);
            echo "
                        </div>
                        <div class=\"tooltip-arrow\"></div>
                    </div>
                    <script type=\"text/javascript\">
                        jQuery(document).ready(function() {
                            var pop";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo " = \$(\"#ti";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\").html();
                            \$(\"#t";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\").popover({
                                title: 'Contacto',
                                trigger:'hover click',
                                content: pop";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo ",
                                html:true
                            });
                        });
                    </script>
                </td>
                <td>";
            // line 178
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoProducto")), "html", null, true);
            echo "</td>
                <td>";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "facturaNum"), "html", null, true);
            echo "</td>
                <td>";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subtotal"), "html", null, true);
            echo "</td>
                <td>";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iva"), "html", null, true);
            echo "</td>
                <td>";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "total"), "html", null, true);
            echo "</td>
                <td>";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "retencionRentaTotal"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "retencionRenta", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "retencionRenta"), "0")) : ("0")), "html", null, true);
            echo "%)</td>
                <td>";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "retencionIvaTotal"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "retencionIva", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "retencionIva"), "0")) : ("0")), "html", null, true);
            echo "%)</td>
                <td>";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "liquido"), "html", null, true);
            echo "</td>
                <td>";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "banco"), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-primary\" style=\"font-size: 10px; float: left\" href=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" title=\"Propuesta\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                    <a class=\"btn btn-primary\" style=\"font-size: 10px; float: left\" href=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_productos", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" title=\"Proceso\"><span class=\"glyphicon glyphicon-list\"></a>
                    <a class=\"btn btn-primary\" style=\"font-size: 10px; float: left\" href=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_esquema", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" title=\"Productos\"><span class=\"glyphicon glyphicon-eye-open\"></a>
                    <a class=\"btn btn-primary\" onclick=\"return confirmar()\" style=\"font-size: 10px; float: left\" href=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_duplicar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" title=\"Copiar\"><span class=\"glyphicon glyphicon-random\"></a>
                </td>
                <td>
                    <select id=\"paso_";
            // line 194
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
                        <option value=\"-1\"></option>
                        ";
            // line 196
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pasos"]) ? $context["pasos"] : $this->getContext($context, "pasos")));
            foreach ($context['_seq'] as $context["_key"] => $context["paso"]) {
                // line 197
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paso"]) ? $context["paso"] : $this->getContext($context, "paso")), "id"), "html", null, true);
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
            // line 199
            echo "                    </select>
                </td>
                <td>
                    <!-- Button trigger modal -->
                    <button style=\"font-size: 12px; padding: 5px 11px;\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#notas";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">
                      <span class=\"glyphicon glyphicon-list-alt\"></span>
                    </button>

                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"notas";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                      <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            <h4 class=\"modal-title\" id=\"myModalLabel\">Notas pedido <span style=\"color: #3276b1\">";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</span></h4>
                          </div>
                          <div class=\"modal-body\" style=\"font-size: 150%\">
                              <h4>
                                  Notas:
                              </h4>
                              <textarea rows=\"5\" style=\"width: 100%\" id=\"notasPedido";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notasControl"), "html", null, true);
            echo "</textarea>
                          </div>
                          <div class=\"modal-footer\">
                                <button type=\"button\" id=\"sendNotasControl";
            // line 222
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" data-modalid=\"notas";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" data-idnotas=\"notasPedido";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" class=\"btn btn-success enviaNotas\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_set_notas_control", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
        // line 231
        echo "        </tbody>
    </table>
";
    }

    // line 234
    public function block_javascripts($context, array $blocks = array())
    {
        // line 235
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
        \$.fn.dataTableExt.afnFiltering.push(
            function( oSettings, aData, iDataIndex ) {
                    var iFactura = document.getElementById('factura').value.toLowerCase();
                    var iVersion = aData[9].toLowerCase();
                    if (iVersion.indexOf(iFactura) !== -1)
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
            \$('#factura').keyup( function() { window.dataTable3.fnDraw(); } );
        } );
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Pedido:cobros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  554 => 235,  551 => 234,  545 => 231,  524 => 222,  516 => 219,  507 => 213,  499 => 208,  491 => 203,  485 => 199,  470 => 197,  466 => 196,  453 => 194,  447 => 191,  443 => 190,  439 => 189,  435 => 188,  430 => 186,  426 => 185,  420 => 184,  414 => 183,  410 => 182,  406 => 181,  402 => 180,  398 => 179,  394 => 178,  385 => 172,  379 => 169,  373 => 168,  364 => 162,  360 => 161,  356 => 160,  352 => 159,  348 => 158,  339 => 157,  335 => 156,  331 => 155,  327 => 154,  320 => 152,  316 => 150,  312 => 149,  307 => 147,  303 => 146,  299 => 145,  295 => 144,  291 => 143,  282 => 137,  276 => 134,  270 => 133,  261 => 127,  257 => 126,  250 => 124,  246 => 122,  242 => 121,  212 => 94,  197 => 81,  182 => 79,  178 => 78,  160 => 62,  149 => 60,  145 => 59,  135 => 51,  122 => 49,  118 => 48,  113 => 45,  100 => 43,  96 => 42,  72 => 20,  59 => 18,  55 => 17,  43 => 8,  39 => 6,  36 => 5,  30 => 3,);
    }
}

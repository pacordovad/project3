<?php

/* FrontendBundle:Pedido:new.html.twig */
class __TwigTemplate_0b63c393f64a0429f8676987845e956f6e4ded406268166543ee82c37b89e8dd extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 5
        if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id")))) {
            // line 6
            echo "    <div class=\"row\">
        <div class=\"col-md-7\"></div>
        <div class=\"col-md-3\"><label>C&oacute;digo de pedido<label></div>
        <div class=\"col-md-2\"><span style=\"color: #3276b1; font-size: 150%\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idRecur"), "html", null, true);
            echo "</span></div>
    </div>
    ";
        }
        // line 12
        echo "    <div class=\"row\">
        <div class=\"col-md-7\"></div>
        <div class=\"col-md-3\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaRegistro"), 'label');
        echo "</div>
        <div class=\"col-md-2\">";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaRegistro"), "Y-m-d H:i:s"), "html", null, true);
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaRegistro"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaRegistro"), 'widget');
        echo "</div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-7\"></div>
        <div class=\"col-md-3\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaActualizacion"), 'label');
        echo "</div>
        <div class=\"col-md-2\">";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaActualizacion"), "Y-m-d H:i:s"), "html", null, true);
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaActualizacion"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaActualizacion"), 'widget');
        echo "</div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-7\"><h1>Pedido</h1></div>
        <div class=\"col-md-3\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ultimaActualizacionUsuarioPk"), 'label');
        echo "</div>
        <div class=\"col-md-2\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ultimaActualizacionUsuarioPk"), "html", null, true);
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ultimaActualizacionUsuarioPk"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ultimaActualizacionUsuarioPk"), 'widget');
        echo "</div>
    </div>
    <hr/>
    <div class=\"row\">
        <div class=\"col-md-2\"><label>Empresa</label></div>
        <div class=\"col-md-4\">
            <select id=\"empresa\">
                ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 33
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "id"), "html", null, true);
            echo "\" data-direccion=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "direccion"), "html", null, true);
            echo "\" data-ruc=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "ruc"), "html", null, true);
            echo "\" data-telefono=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "telefono"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </select>
        </div>
        <div class=\"col-md-2\"><label>RUC<label></div>
        <div class=\"col-md-4\" id=\"ruc_empresa\"></div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-2\"><label>Direcci&oacute;n</label></div>
        <div class=\"col-md-4\" id=\"direccion_empresa\"></div>
        <div class=\"col-md-2\"><label>Telf</label></div>
        <div class=\"col-md-4\" id=\"telf_empresa\"></div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-2\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactoPk"), 'label');
        echo "</div>
        <div class=\"col-md-4\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactoPk"), 'errors');
        echo "
            ";
        // line 49
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactoPk"), "setRendered");
        // line 50
        echo "            <select id=\"frontend_bundle_pedido_contactoPk\" name=\"frontend_bundle_pedido[contactoPk]\">
                ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contactos"]) ? $context["contactos"] : $this->getContext($context, "contactos")));
        foreach ($context['_seq'] as $context["_key"] => $context["contacto"]) {
            // line 52
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "id"), "html", null, true);
            echo "\" data-etapa=\"";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FrontendBundle:Area:etapa", array("areaId" => $this->getAttribute($this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "areaPk"), "id"))), array());
            echo "\" data-empresa=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "areaPk"), "empresaPk"), "id"), "html", null, true);
            echo "\" ";
            if (((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"))) && ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contactoPk"), "id") == $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "id")))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "areaContacto"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contacto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </select>
        </div>
        <div class=\"col-md-2\"><label>Etapa</label></div>
        <div class=\"col-md-4\">
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etapa"), 'widget');
        echo "
        </div>
    </div>
    <hr/>
    <div class=\"row\">
        <h3>Productos
        <button type=\"button\" class=\"btn btn-primary\" id=\"btnAgregarProducto\" style=\"float: right\">Agregar Producto</button>
        </h3>
        <br/>
        <br/>
        ";
        // line 68
        $this->env->loadTemplate("FrontendBundle:Pedido:modal.html.twig")->display($context);
        // line 69
        echo "        <input type=\"hidden\" id=\"loading-gif\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/loader.gif"), "html", null, true);
        echo "\"/>
        <table id=\"table-producto-pedidos\" class=\"t1\" data-count=\"1\" style=\"width: 100%;\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Posici&oacute;n</th>
                    <th>Categor&iacute;a</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Alto (cm)</th>
                    <th>Ancho (cm)</th>
                    <th>Calidad</th>
                    <th>V. Unit</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 87
        $context["i"] = 1;
        // line 88
        echo "            ";
        $context["index"] = 0;
        // line 89
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoProducto"));
        foreach ($context['_seq'] as $context["_key"] => $context["pedidoProducto"]) {
            // line 90
            echo "                ";
            if (($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cortesia") == false)) {
                // line 91
                echo "                    <tr id=\"tr-p";
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\">
                        <td>";
                // line 92
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 93
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_posicion\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "posicion"), "html", null, true);
                echo "</td>
                        <td id=\"td_categoria_";
                // line 94
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "categoriaPk"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 95
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_nombreProducto\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "nombreProducto"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 96
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_cantidad\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 97
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_alto\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "alto"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 98
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_ancho\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "ancho"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 99
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_tipoCalidadPk\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "tipoCalidadPk"), "html", null, true);
                echo "</td>
                        <td id=\"td_preciounitario_";
                // line 100
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "precioVenta"), "html", null, true);
                echo "</td>
                        <td id=\"td_precioventa_";
                // line 101
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "total"), "html", null, true);
                echo "</td>
                        <td>
                            <a class=\"btn btn-primary\" id=\"edit-";
                // line 103
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\" href=\"#\">Editar</a>
                            ";
                // line 104
                if ((!$this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "getEmpezoProduccion"))) {
                    echo "                            
                                <a class=\"btn btn-danger\" id=\"del-";
                    // line 105
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\" href=\"#\">Eliminar</a>
                            ";
                }
                // line 107
                echo "                            <script type=\"text/javascript\">
                                \$(\"#edit-";
                // line 108
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\").on('click', function(e) {
                                    // prevent the link from creating a \"#\" on the URL
                                    e.preventDefault();
                                    // Call edit function
                                    editarProducto('Editar','";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedidoproductoxml", array("productoSeleccionadoId" => $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "id"), "nombreProducto" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "nombreProducto"), "cantidad" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"), "dimensionId" => (($this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : null), "medidaPk", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : null), "medidaPk", array(), "any", false, true), "id"), "0")) : ("0")), "dimensionX" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "ancho"), "dimensionY" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "alto"), "cortesia" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cortesiaTab"), "tipoCalidadId" => $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "tipoCalidadPk"), "id"), "pedidoPk" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "posicion" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "posicion"))), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "');
                                });
                                ";
                // line 114
                if ((!$this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "getEmpezoProduccion"))) {
                    echo "   
                                    \$(\"#del-";
                    // line 115
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\").on('click', function(e) {
                                        // prevent the link from creating a \"#\" on the URL
                                        e.preventDefault();
                                        var cortesia = ";
                    // line 118
                    if (($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cortesia") == 1)) {
                        echo "\"1\"";
                    } else {
                        echo "\"0\"";
                    }
                    echo ";
                                        if(confirmar()){
                                            // remove the li for the tag form
                                            \$(\"#ul-prod-";
                    // line 121
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\").remove();
                                            window.dataTable4.fnDeleteRow(window.dataTable4.fnGetPosition(document.getElementById(\"tr-p";
                    // line 122
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\")));
                                            if(cortesia !== \"1\"){
                                                calculaTotalesTabla();
                                            }else{
                                                calculaTotalesTablaCortesia();
                                            }
                                        }
                                    });
                                ";
                }
                // line 131
                echo "                            </script>
                        </td>
                    </tr>
                    ";
                // line 134
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 135
                echo "                ";
            }
            // line 136
            echo "                ";
            $context["index"] = ((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) + 1);
            // line 137
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedidoProducto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                <tr id=\"end-row\" style=\"display: none\">
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </tbody>
            <tfoot>
                <tr id=\"tot-row\">
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th id=\"tot-cantidad\" style=\"border-top: 1px solid\">0</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th id=\"tot-precio\" style=\"border-top: 1px solid\">0</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
        <ul class=\"productos\" data-prototype=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pedidoProducto"), "vars"), "prototype"), 'widget'));
        echo "\" style=\"display: none\">
            ";
        // line 170
        echo "            ";
        $context["index"] = 0;
        // line 171
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pedidoProducto"));
        foreach ($context['_seq'] as $context["_key"] => $context["pedidoProducto"]) {
            // line 172
            echo "                <li id=\"ul-prod-";
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), 'row');
            echo "</li>
                ";
            // line 173
            $context["index"] = ((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) + 1);
            // line 174
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedidoProducto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "        </ul>
    </div>
    <hr/>    
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"row\">
                <div class=\"col-md-4\">";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conceptoFactura"), 'label');
        echo "</div>
                <div class=\"col-md-8\">";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conceptoFactura"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conceptoFactura"), 'widget');
        echo "</div>
            </div>
            <div class=\"row\" ";
        // line 184
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "style=\"display: none\"";
        }
        echo ">
                <div class=\"col-md-4\">";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aplicaConcepto1"), 'label');
        echo "</div>
                <div class=\"col-md-8\">";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aplicaConcepto1"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aplicaConcepto1"), 'widget');
        echo "</div>
            </div>
            <div class=\"row\" ";
        // line 188
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "style=\"display: none\"";
        }
        echo ">
                <div class=\"col-md-4\">";
        // line 189
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aplicaConcepto2"), 'label');
        echo "</div>
                <div class=\"col-md-8\">";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aplicaConcepto2"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aplicaConcepto2"), 'widget');
        echo "</div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"row\">
                <div class=\"col-md-2\"><label>Subtotal</label></div>
                <div class=\"col-md-4\"><span id=\"subtotal\">0.00</span></div>
            </div>
            <div class=\"row\" id=\"row-descuento\">
                <div class=\"col-md-2\">";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descuento"), 'label');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 200
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descuento"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descuento"), 'widget');
        echo "</div>
            </div>
            <div class=\"row\" id=\"row-subtotal-descuento\">
                <div class=\"col-md-2\"><label>Subtotal descuento</label></div>
                <div class=\"col-md-4\"><span id=\"subtotal-descuento\">0.00</span></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2\"><label>IVA (12%)</label></div>
                <div class=\"col-md-4\"><span id=\"iva\">0.00</span></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2\"><label>Total</label></div>
                <div class=\"col-md-4\" style=\"font-weight: bold\"><span id=\"total\">0.00</span></div>
            </div>
        </div>
    </div>
    
    <!---
    
    Script 1
    
    -->
    <script type=\"text/javascript\">
        calculaTotalesTabla();
        chekaAplica1();
        chekaAplica2();
        iniciaEmpresa();
        ";
        // line 227
        if (twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etapa"))) {
            // line 228
            echo "            empresaCambio();
        ";
        }
        // line 230
        echo "    </script>
    
    <div class=\"row\" id=\"row-cortesia\" ";
        // line 232
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "style=\"display: none\"";
        }
        echo ">
        <hr/>
        <h4>Productos de cortes&iacute;a
        <button type=\"button\" class=\"btn btn-primary\" id=\"btnAgregarProductoCortesia\" style=\"float: right\">Agregar Producto de Cortesía</button>
        </h4>
        <br/>
        <br/>
        <table id=\"table-producto-pedidos-cortesia\" data-count=\"1\" style=\"width: 100%;\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Posici&oacute;n</th>
                    <th>Categor&iacute;a</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Ancho (cm)</th>
                    <th>Alto (cm)</th>
                    <th>Calidad</th>
                    <th>V. Unit</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 256
        $context["i"] = 1;
        // line 257
        echo "            ";
        $context["index"] = 0;
        // line 258
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoProducto"));
        foreach ($context['_seq'] as $context["_key"] => $context["pedidoProducto"]) {
            // line 259
            echo "                ";
            if (($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cortesia") != false)) {
                // line 260
                echo "                    <tr id=\"tr-p";
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\">
                        <td>";
                // line 261
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 262
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_posicion\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "posicion"), "html", null, true);
                echo "</td>
                        <td id=\"td_categoria_";
                // line 263
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "categoriaPk"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 264
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_nombreProducto\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "nombreProducto"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 265
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_cantidad\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 266
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_ancho\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "ancho"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 267
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_alto\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "alto"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 268
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_tipoCalidadPk\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "tipoCalidadPk"), "html", null, true);
                echo "</td>
                        <td id=\"td_preciounitario_";
                // line 269
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "precioVenta"), "html", null, true);
                echo "</td>
                        <td id=\"td_precioventa_";
                // line 270
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "total"), "html", null, true);
                echo "</td>
                        <td>
                            <a class=\"btn btn-primary\" id=\"edit-";
                // line 272
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\" href=\"#\">Editar</a>
                            ";
                // line 273
                if ((!$this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "getEmpezoProduccion"))) {
                    // line 274
                    echo "                                <a class=\"btn btn-danger\" id=\"del-";
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\" href=\"#\">Eliminar</a>
                            ";
                }
                // line 276
                echo "                            <script type=\"text/javascript\">
                                \$(\"#edit-";
                // line 277
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\").on('click', function(e) {
                                    // prevent the link from creating a \"#\" on the URL
                                    e.preventDefault();
                                    // Call edit function
                                    editarProducto('Editar','";
                // line 281
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedidoproductoxml", array("productoSeleccionadoId" => $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "id"), "nombreProducto" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "nombreProducto"), "cantidad" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"), "dimensionId" => (($this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : null), "medidaPk", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : null), "medidaPk", array(), "any", false, true), "id"), "0")) : ("0")), "dimensionX" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "ancho"), "dimensionY" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "alto"), "cortesia" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cortesiaTab"), "tipoCalidadId" => $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "tipoCalidadPk"), "id"), "posicion" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "posicion"), "pedidoPk" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "');
                                });
                                ";
                // line 283
                if ((!$this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "getEmpezoProduccion"))) {
                    // line 284
                    echo "                                    \$(\"#del-";
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\").on('click', function(e) {
                                        // prevent the link from creating a \"#\" on the URL
                                        e.preventDefault();
                                        var cortesia = ";
                    // line 287
                    if (($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cortesia") == 1)) {
                        echo "\"1\"";
                    } else {
                        echo "\"0\"";
                    }
                    echo ";
                                        if(confirmar()){
                                            // remove the li for the tag form
                                            \$(\"#ul-prod-";
                    // line 290
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\").remove();
                                            window.dataTable5.fnDeleteRow(window.dataTable5.fnGetPosition(document.getElementById(\"tr-p";
                    // line 291
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\")));
                                            if(cortesia !== \"1\"){
                                                calculaTotalesTabla();
                                            }else{
                                                calculaTotalesTablaCortesia();
                                            }
                                        }
                                    });
                                ";
                }
                // line 300
                echo "                            </script>
                        </td>
                    </tr>
                    ";
                // line 303
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 304
                echo "                ";
            }
            // line 305
            echo "                ";
            $context["index"] = ((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) + 1);
            // line 306
            echo "                <tr id=\"end-row-cortesia\" style=\"display: none\">
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedidoProducto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        echo "            </tbody>
            <tfoot>
                <tr id=\"tot-row-cortesia\">
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th id=\"tot-cantidad-cortesia\" style=\"border-top: 1px solid\">0</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th id=\"tot-precio-cortesia\" style=\"border-top: 1px solid\">0</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!---
    
    Script 1
    
    -->
    <script type=\"text/javascript\">
        calculaTotalesTablaCortesia();
        chekaAplica1();
        chekaAplica2();
    </script>
    
    <hr/>
    <div>
        <div class=\"col-md-12\" style=\"text-align: center; font-weight: bold\">Informaci&oacute;n complementaria</div>
    </div>
    <br/>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"row\" ";
        // line 356
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "style=\"display:none\"";
        }
        echo ">
                <div class=\"col-md-4\">";
        // line 357
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaAprobacion"), 'label');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 358
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaAprobacion"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaAprobacion"), 'widget');
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">";
        // line 361
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaMaximaEntrega"), 'label');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 362
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaMaximaEntrega"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaMaximaEntrega"), 'widget');
        echo "</div>
            </div>
            <div class=\"row\" ";
        // line 364
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "style=\"display:none\"";
        }
        echo ">
                <div class=\"col-md-4\">";
        // line 365
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "retencionRenta"), 'label');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 366
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "retencionRenta"), 'errors');
        echo "
                    -> <label id=\"retencion-renta\">0</label>
                    ";
        // line 368
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "retencionRenta"), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\" ";
        // line 371
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "style=\"display:none\"";
        }
        echo ">   
                <div class=\"col-md-4\">";
        // line 372
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "retencionIva"), 'label');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 373
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "retencionIva"), 'errors');
        echo "
                    -> <label id=\"retencion-iva\">0</label>
                    ";
        // line 375
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "retencionIva"), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"row\" ";
        // line 380
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "style=\"display:none\"";
        }
        echo ">
                <div class=\"col-md-4\">";
        // line 381
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "financiamiento"), 'label');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 382
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "financiamiento"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "financiamiento"), 'widget');
        echo "</div>
            </div>
            <div class=\"row\" ";
        // line 384
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "style=\"display:none\"";
        }
        echo ">
                <div class=\"col-md-4\">";
        // line 385
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facturaNum"), 'label');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 386
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facturaNum"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facturaNum"), 'widget');
        echo "</div>
            </div>
            <div class=\"row\" ";
        // line 388
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "style=\"display:none\"";
        }
        echo ">
                <div class=\"col-md-4\">";
        // line 389
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "banco"), 'label');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 390
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "banco"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "banco"), 'widget');
        echo "</div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-2\">
            <br/>
            ";
        // line 397
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notas"), 'label');
        echo "
        </div>
        <div class=\"col-md-10\">
            <br/>
            ";
        // line 401
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notas"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notas"), 'widget');
        echo "
        </div>
    </div>
    <div style=\"display: none\">
        ";
        // line 405
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </div>
    <br/>
    <br/>
    <input type=\"submit\" value=\"Guardar pedido\" class=\"btn btn-primary\"/>&nbsp;&nbsp;&nbsp;
    ";
        // line 410
        if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id")))) {
            // line 411
            echo "    <input type=\"button\" value=\"Imprimir pedido\" id=\"imprimir\" class=\"btn btn-success\" ";
            if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
                echo "style=\"display: none\"";
            }
            echo "/>
    <div id=\"menu-imprimir\" data-content='<form action=\"";
            // line 412
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pedido_imprimir", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" method=\"POST\" id=\"imprime-form\">\"Escoja la opción a imprimir:<br/><br/>
        <ol>
        <li><input id=\"imprimiropcion1\" type=\"radio\" name=\"opcionimprimir\" value=\"1\" checked> <label for=\"imprimiropcion1\">Propuesta de mejoramiento</label></li>
        <li><input id=\"imprimiropcion2\" type=\"radio\" name=\"opcionimprimir\" value=\"2\"> <label for=\"imprimiropcion2\">Listado de productos</label></li>
        <li><input id=\"imprimiropcion5\" type=\"radio\" name=\"opcionimprimir\" value=\"5\"> <label for=\"imprimiropcion5\">Certificado de entrega</label></li>
        <li><input id=\"imprimiropcion6\" type=\"radio\" name=\"opcionimprimir\" value=\"6\"> <label for=\"imprimiropcion6\">Certificado de instalación</label></li>
        <li><input id=\"imprimiropcion4\" type=\"radio\" name=\"opcionimprimir\" value=\"4\"> <label for=\"imprimiropcion4\">Recibos de pago</label></li>
        <li><input id=\"imprimiropcion3\" type=\"radio\" name=\"opcionimprimir\" value=\"3\"> <label for=\"imprimiropcion3\">Esquema de Producci&oacute;n</label></li>
        </ol></form>' style=\"display: none\">
    </div>
    ";
        }
        // line 423
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    &nbsp;
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
";
    }

    // line 433
    public function block_javascripts($context, array $blocks = array())
    {
        // line 434
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script type=\"text/javascript\">
            function addProductoForm(collectionHolder, \$newLinkLi) {
                // Get the data-prototype explained earlier
                var prototype = collectionHolder.data('prototype');

                // get the new index
                var index = collectionHolder.data('index');

                // Replace '__name__' in the prototype's HTML to
                // instead be a number based on how many items we have
                var newForm = prototype.replace(/__name__/g, index);

                // increase the index with one for the next item
                collectionHolder.data('index', index + 1);

                // Display the form in the page in an li, before the \"Add a tag\" link li
                var \$newFormLi = \$('<li></li>').append(newForm);
                \$newLinkLi.before(\$newFormLi);
                
                // add a delete link to the new form
                addTagFormDeleteLink(\$newFormLi);
            }
        </script>
        <script type=\"text/javascript\">
            // Get the ul that holds the collection of tags
            var collectionHolder = \$('ul.productos');

            jQuery(document).ready(function() {
                
                calculaTotalesTabla();
                calculaTotalesTablaCortesia();
                chekaAplica1();
                chekaAplica2();
                
                \$('#empresa').on('change', function(e) {
                    empresaCambio();
                });
                
                // count the current form inputs we have (e.g. 2), use that as the new
                // index when inserting a new item (e.g. 2)
                collectionHolder.data('index', collectionHolder.find('li').length);
                \$('#table-producto-pedidos').data('count', \$('#table-producto-pedidos').find('tr').length - 1);
                \$('#table-producto-pedidos-cortesia').data('count', \$('#table-producto-pedidos-cortesia').find('tr').length - 1);
                
                \$('#btnAgregarProducto').on('click', function(e) {
                    // prevent the link from creating a \"#\" on the URL
                    e.preventDefault();
                    anadirProducto('Agregar','";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedidoproductoxml", array("productoSeleccionadoId" => "-", "nombreProducto" => "-", "cantidad" => "-", "dimensionId" => "-", "dimensionX" => "-", "dimensionY" => "-", "cortesia" => "-", "tipoCalidadId" => "-", "posicion" => "-", "pedidoPk" => "-")), "html", null, true);
        echo "');
                });
                
                \$('#btnAgregarProductoCortesia').on('click', function(e) {
                    // prevent the link from creating a \"#\" on the URL
                    e.preventDefault();
                    anadirProducto('Agregar','";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedidoproductoxml", array("productoSeleccionadoId" => "-", "nombreProducto" => "-", "cantidad" => "-", "dimensionId" => "-", "dimensionX" => "-", "dimensionY" => "-", "cortesia" => "1", "tipoCalidadId" => "-", "posicion" => "-", "pedidoPk" => "-")), "html", null, true);
        echo "');
                });
                
                \$('#btnGuardarProducto').on('click', function(e) {
                    // prevent the link from creating a \"#\" on the URL
                    e.preventDefault();
                    guardarProducto(collectionHolder);
                });
                
                // Aplica concepto
                \$(\"#frontend_bundle_pedido_descuento\").bind(\"propertychange keyup input paste\", function() {
                    calculaTotales();
                });

                \$(\"#frontend_bundle_pedido_aplicaConcepto1\").change(function() {
                    chekaAplica1();
                });
                
                \$(\"#frontend_bundle_pedido_aplicaConcepto2\").change(function() {
                    chekaAplica2();
                });
                
                //Renta e iva
                \$(\"#frontend_bundle_pedido_retencionRenta\").bind(\"propertychange keyup input paste\", function() {
                    calculaRenta();
                });
                
                \$(\"#frontend_bundle_pedido_retencionIva\").bind(\"propertychange keyup input paste\", function() {
                    calculaIva();
                });
                
                \$(\"#imprimir\").click(function(e){
                    e.preventDefault();
                    \$('#modal-base').modal();
                    \$(\"#modal-base-titulo\").html(\"Imprimir pedido\");
                    \$(\"#modal-base-body\").html(\$(\"#menu-imprimir\").data(\"content\"));
                    \$(\"#submit-boton-modal\").html(\"Imprimir\");
                    \$(\"#submit-boton-modal\").unbind();
                    \$(\"#submit-boton-modal\").click(function(){
                        var opt1 = \$(\"#imprimiropcion5\").is(\":checked\");
                        var opt2 = \$(\"#imprimiropcion6\").is(\":checked\");
                        if(opt1 || opt2){
                            //\$('#modal-base').modal(\"hide\");
                            muestraMenuReportePedidos(e,'";
        // line 531
        echo $this->env->getExtension('routing')->getUrl("menupedido");
        echo "');
                        }else{
                            \$(\"#imprime-form\").submit();
                        }
                    });
                });
                
                window.dataTable4 = \$('#table-producto-pedidos').dataTable({
                        \"aaSorting\": [[ 1, \"asc\" ]],   
                        \"iDisplayLength\": 500,
                        \"oLanguage\": {
                            \"sUrl\": '";
        // line 542
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/datatables.spanish.txt"), "html", null, true);
        echo "'
                        }
                });
                
                window.dataTable5 = \$('#table-producto-pedidos-cortesia').dataTable({
                        \"aaSorting\": [[ 1, \"asc\" ]],  
                        \"iDisplayLength\": 500,
                        \"oLanguage\": {
                            \"sUrl\": '";
        // line 550
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/datatables.spanish.txt"), "html", null, true);
        echo "'
                        }
                });
            });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Pedido:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1091 => 550,  1080 => 542,  1066 => 531,  1020 => 488,  1011 => 482,  959 => 434,  956 => 433,  942 => 423,  928 => 412,  921 => 411,  919 => 410,  911 => 405,  903 => 401,  896 => 397,  885 => 390,  881 => 389,  875 => 388,  869 => 386,  865 => 385,  859 => 384,  853 => 382,  849 => 381,  843 => 380,  835 => 375,  830 => 373,  826 => 372,  820 => 371,  814 => 368,  809 => 366,  805 => 365,  799 => 364,  793 => 362,  789 => 361,  782 => 358,  778 => 357,  772 => 356,  734 => 320,  715 => 306,  712 => 305,  709 => 304,  707 => 303,  702 => 300,  690 => 291,  686 => 290,  676 => 287,  669 => 284,  667 => 283,  660 => 281,  653 => 277,  650 => 276,  644 => 274,  642 => 273,  638 => 272,  631 => 270,  625 => 269,  619 => 268,  613 => 267,  607 => 266,  601 => 265,  595 => 264,  589 => 263,  583 => 262,  579 => 261,  574 => 260,  571 => 259,  566 => 258,  563 => 257,  561 => 256,  532 => 232,  528 => 230,  524 => 228,  522 => 227,  491 => 200,  487 => 199,  474 => 190,  470 => 189,  464 => 188,  458 => 186,  454 => 185,  448 => 184,  442 => 182,  438 => 181,  430 => 175,  424 => 174,  422 => 173,  415 => 172,  410 => 171,  407 => 170,  403 => 168,  371 => 138,  365 => 137,  362 => 136,  359 => 135,  357 => 134,  352 => 131,  340 => 122,  336 => 121,  326 => 118,  320 => 115,  316 => 114,  309 => 112,  302 => 108,  299 => 107,  294 => 105,  290 => 104,  286 => 103,  279 => 101,  273 => 100,  267 => 99,  261 => 98,  255 => 97,  249 => 96,  243 => 95,  237 => 94,  231 => 93,  227 => 92,  222 => 91,  219 => 90,  214 => 89,  211 => 88,  209 => 87,  187 => 69,  185 => 68,  172 => 58,  166 => 54,  147 => 52,  143 => 51,  140 => 50,  138 => 49,  134 => 48,  130 => 47,  116 => 35,  99 => 33,  95 => 32,  83 => 25,  79 => 24,  70 => 20,  66 => 19,  57 => 15,  53 => 14,  49 => 12,  43 => 9,  38 => 6,  36 => 5,  32 => 4,  29 => 3,);
    }
}

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
        <table id=\"table-producto-pedidos\" data-count=\"1\" style=\"width: 100%; border-collapse: separate; border-spacing: 10px;\">
            <tr>
                <th>#</th>
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
            ";
        // line 83
        $context["i"] = 1;
        // line 84
        echo "            ";
        $context["index"] = 0;
        // line 85
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoProducto"));
        foreach ($context['_seq'] as $context["_key"] => $context["pedidoProducto"]) {
            // line 86
            echo "                ";
            if (($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cortesia") == false)) {
                // line 87
                echo "                    <tr id=\"tr-p";
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\">
                        <td>";
                // line 88
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</td>
                        <td id=\"td_categoria_";
                // line 89
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "categoriaPk"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 90
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_nombreProducto\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "nombreProducto"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 91
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_cantidad\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 92
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_alto\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "alto"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 93
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_ancho\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "ancho"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 94
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_tipoCalidadPk\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "tipoCalidadPk"), "html", null, true);
                echo "</td>
                        <td id=\"td_preciounitario_";
                // line 95
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "precioVenta"), "html", null, true);
                echo "</td>
                        <td id=\"td_precioventa_";
                // line 96
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "total"), "html", null, true);
                echo "</td>
                        <td>
                            <a class=\"btn btn-primary\" id=\"edit-";
                // line 98
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\" href=\"#\">Editar</a>
                            ";
                // line 99
                if ((!$this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "getEmpezoProduccion"))) {
                    echo "                            
                                <a class=\"btn btn-danger\" id=\"del-";
                    // line 100
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\" href=\"#\">Eliminar</a>
                            ";
                }
                // line 102
                echo "                            <script type=\"text/javascript\">
                                \$(\"#edit-";
                // line 103
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\").on('click', function(e) {
                                    // prevent the link from creating a \"#\" on the URL
                                    e.preventDefault();
                                    // Call edit function
                                    editarProducto('Editar','";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedidoproductoxml", array("productoSeleccionadoId" => $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "id"), "nombreProducto" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "nombreProducto"), "cantidad" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"), "dimensionId" => (($this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : null), "medidaPk", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : null), "medidaPk", array(), "any", false, true), "id"), "0")) : ("0")), "dimensionX" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "ancho"), "dimensionY" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "alto"), "cortesia" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cortesiaTab"), "tipoCalidadId" => $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "tipoCalidadPk"), "id"), "pedidoPk" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "');
                                });
                                ";
                // line 109
                if ((!$this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "getEmpezoProduccion"))) {
                    echo "   
                                    \$(\"#del-";
                    // line 110
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\").on('click', function(e) {
                                        // prevent the link from creating a \"#\" on the URL
                                        e.preventDefault();
                                        var cortesia = ";
                    // line 113
                    if (($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cortesia") == 1)) {
                        echo "\"1\"";
                    } else {
                        echo "\"0\"";
                    }
                    echo ";
                                        if(confirmar()){
                                            // remove the li for the tag form
                                            \$(\"#ul-prod-";
                    // line 116
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\").remove();
                                            \$(\"#tr-p";
                    // line 117
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\").remove();
                                            if(cortesia !== \"1\"){
                                                calculaTotalesTabla();
                                            }else{
                                                calculaTotalesTablaCortesia();
                                            }
                                        }
                                    });
                                ";
                }
                // line 126
                echo "                            </script>
                        </td>
                    </tr>
                    ";
                // line 129
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 130
                echo "                ";
            }
            // line 131
            echo "                ";
            $context["index"] = ((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) + 1);
            // line 132
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedidoProducto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "            <tr id=\"tot-row\">
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
        </table>
        <ul class=\"productos\" data-prototype=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pedidoProducto"), "vars"), "prototype"), 'widget'));
        echo "\" style=\"display: none\">
            ";
        // line 148
        echo "            ";
        $context["index"] = 0;
        // line 149
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pedidoProducto"));
        foreach ($context['_seq'] as $context["_key"] => $context["pedidoProducto"]) {
            // line 150
            echo "                <li id=\"ul-prod-";
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), 'row');
            echo "</li>
                ";
            // line 151
            $context["index"] = ((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) + 1);
            // line 152
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedidoProducto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "        </ul>
    </div>
    <hr/>    
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"row\">
                <div class=\"col-md-4\">";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conceptoFactura"), 'label');
        echo "</div>
                <div class=\"col-md-8\">";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conceptoFactura"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conceptoFactura"), 'widget');
        echo "</div>
            </div>
            <div class=\"row\" ";
        // line 162
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "style=\"display: none\"";
        }
        echo ">
                <div class=\"col-md-4\">";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aplicaConcepto1"), 'label');
        echo "</div>
                <div class=\"col-md-8\">";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aplicaConcepto1"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aplicaConcepto1"), 'widget');
        echo "</div>
            </div>
            <div class=\"row\" ";
        // line 166
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "style=\"display: none\"";
        }
        echo ">
                <div class=\"col-md-4\">";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aplicaConcepto2"), 'label');
        echo "</div>
                <div class=\"col-md-8\">";
        // line 168
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
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descuento"), 'label');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 178
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
        // line 205
        if (twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etapa"))) {
            // line 206
            echo "            empresaCambio();
        ";
        }
        // line 208
        echo "    </script>
    
    <div class=\"row\" id=\"row-cortesia\" ";
        // line 210
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
        <table id=\"table-producto-pedidos-cortesia\" data-count=\"1\" style=\"width: 100%; border-collapse: separate; border-spacing: 10px;\">
            <tr>
                <th>#</th>
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
            ";
        // line 230
        $context["i"] = 1;
        // line 231
        echo "            ";
        $context["index"] = 0;
        // line 232
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pedidoProducto"));
        foreach ($context['_seq'] as $context["_key"] => $context["pedidoProducto"]) {
            // line 233
            echo "                ";
            if (($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cortesia") != false)) {
                // line 234
                echo "                    <tr id=\"tr-p";
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\">
                        <td>";
                // line 235
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</td>
                        <td id=\"td_categoria_";
                // line 236
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "categoriaPk"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 237
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_nombreProducto\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "nombreProducto"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 238
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_cantidad\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 239
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_ancho\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "ancho"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 240
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_alto\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "alto"), "html", null, true);
                echo "</td>
                        <td id=\"td_frontend_bundle_pedido_pedidoProducto_";
                // line 241
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "_tipoCalidadPk\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "tipoCalidadPk"), "html", null, true);
                echo "</td>
                        <td id=\"td_preciounitario_";
                // line 242
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "precioVenta"), "html", null, true);
                echo "</td>
                        <td id=\"td_precioventa_";
                // line 243
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "total"), "html", null, true);
                echo "</td>
                        <td>
                            <a class=\"btn btn-primary\" id=\"edit-";
                // line 245
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\" href=\"#\">Editar</a>
                            ";
                // line 246
                if ((!$this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "getEmpezoProduccion"))) {
                    // line 247
                    echo "                                <a class=\"btn btn-danger\" id=\"del-";
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\" href=\"#\">Eliminar</a>
                            ";
                }
                // line 249
                echo "                            <script type=\"text/javascript\">
                                \$(\"#edit-";
                // line 250
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "\").on('click', function(e) {
                                    // prevent the link from creating a \"#\" on the URL
                                    e.preventDefault();
                                    // Call edit function
                                    editarProducto('Editar','";
                // line 254
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedidoproductoxml", array("productoSeleccionadoId" => $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "productoPk"), "id"), "nombreProducto" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "nombreProducto"), "cantidad" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cantidad"), "dimensionId" => (($this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : null), "medidaPk", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : null), "medidaPk", array(), "any", false, true), "id"), "0")) : ("0")), "dimensionX" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "ancho"), "dimensionY" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "alto"), "cortesia" => $this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cortesiaTab"), "tipoCalidadId" => $this->getAttribute($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "tipoCalidadPk"), "id"), "pedidoPk" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                echo "');
                                });
                                ";
                // line 256
                if ((!$this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "getEmpezoProduccion"))) {
                    // line 257
                    echo "                                    \$(\"#del-";
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\").on('click', function(e) {
                                        // prevent the link from creating a \"#\" on the URL
                                        e.preventDefault();
                                        var cortesia = ";
                    // line 260
                    if (($this->getAttribute((isset($context["pedidoProducto"]) ? $context["pedidoProducto"] : $this->getContext($context, "pedidoProducto")), "cortesia") == 1)) {
                        echo "\"1\"";
                    } else {
                        echo "\"0\"";
                    }
                    echo ";
                                        if(confirmar()){
                                            // remove the li for the tag form
                                            \$(\"#ul-prod-";
                    // line 263
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\").remove();
                                            \$(\"#tr-p";
                    // line 264
                    echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
                    echo "\").remove();
                                            if(cortesia !== \"1\"){
                                                calculaTotalesTabla();
                                            }else{
                                                calculaTotalesTablaCortesia();
                                            }
                                        }
                                    });
                                ";
                }
                // line 273
                echo "                            </script>
                        </td>
                    </tr>
                    ";
                // line 276
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 277
                echo "                ";
            }
            // line 278
            echo "                ";
            $context["index"] = ((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) + 1);
            // line 279
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedidoProducto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        echo "            <tr id=\"tot-row-cortesia\">
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
        // line 312
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "style=\"display:none\"";
        }
        echo ">
                <div class=\"col-md-4\">";
        // line 313
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaAprobacion"), 'label');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 314
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaAprobacion"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaAprobacion"), 'widget');
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">";
        // line 317
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaMaximaEntrega"), 'label');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 318
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaMaximaEntrega"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaMaximaEntrega"), 'widget');
        echo "</div>
            </div>
            <div class=\"row\" ";
        // line 320
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "style=\"display:none\"";
        }
        echo ">
                <div class=\"col-md-4\">";
        // line 321
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "retencionRenta"), 'label');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 322
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "retencionRenta"), 'errors');
        echo "
                    -> <label id=\"retencion-renta\">0</label>
                    ";
        // line 324
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "retencionRenta"), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\" ";
        // line 327
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "style=\"display:none\"";
        }
        echo ">   
                <div class=\"col-md-4\">";
        // line 328
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "retencionIva"), 'label');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 329
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "retencionIva"), 'errors');
        echo "
                    -> <label id=\"retencion-iva\">0</label>
                    ";
        // line 331
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "retencionIva"), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"row\" ";
        // line 336
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "style=\"display:none\"";
        }
        echo ">
                <div class=\"col-md-4\">";
        // line 337
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "financiamiento"), 'label');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 338
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "financiamiento"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "financiamiento"), 'widget');
        echo "</div>
            </div>
            <div class=\"row\" ";
        // line 340
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "style=\"display:none\"";
        }
        echo ">
                <div class=\"col-md-4\">";
        // line 341
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facturaNum"), 'label');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 342
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facturaNum"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facturaNum"), 'widget');
        echo "</div>
            </div>
            <div class=\"row\" ";
        // line 344
        if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
            echo "style=\"display:none\"";
        }
        echo ">
                <div class=\"col-md-4\">";
        // line 345
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "banco"), 'label');
        echo "</div>
                <div class=\"col-md-4\">";
        // line 346
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
        // line 353
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notas"), 'label');
        echo "
        </div>
        <div class=\"col-md-10\">
            <br/>
            ";
        // line 357
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notas"), 'errors');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notas"), 'widget');
        echo "
        </div>
    </div>
    <div style=\"display: none\">
        ";
        // line 361
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </div>
    <br/>
    <br/>
    <input type=\"submit\" value=\"Guardar pedido\" class=\"btn btn-primary\"/>&nbsp;&nbsp;&nbsp;
    ";
        // line 366
        if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id")))) {
            // line 367
            echo "    <input type=\"button\" value=\"Imprimir pedido\" id=\"imprimir\" class=\"btn btn-success\" ";
            if ((!($this->env->getExtension('security')->isGranted("ROLE_ADMINISTRADOR") || $this->env->getExtension('security')->isGranted("ROLE_COORDINADOR")))) {
                echo "style=\"display: none\"";
            }
            echo "/>
    <div id=\"menu-imprimir\" data-content='<form action=\"";
            // line 368
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
        // line 379
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

    // line 389
    public function block_javascripts($context, array $blocks = array())
    {
        // line 390
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
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedidoproductoxml", array("productoSeleccionadoId" => "-", "nombreProducto" => "-", "cantidad" => "-", "dimensionId" => "-", "dimensionX" => "-", "dimensionY" => "-", "cortesia" => "-", "tipoCalidadId" => "-", "pedidoPk" => "-")), "html", null, true);
        echo "');
                });
                
                \$('#btnAgregarProductoCortesia').on('click', function(e) {
                    // prevent the link from creating a \"#\" on the URL
                    e.preventDefault();
                    anadirProducto('Agregar','";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedidoproductoxml", array("productoSeleccionadoId" => "-", "nombreProducto" => "-", "cantidad" => "-", "dimensionId" => "-", "dimensionX" => "-", "dimensionY" => "-", "cortesia" => "1", "tipoCalidadId" => "-", "pedidoPk" => "-")), "html", null, true);
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
        // line 487
        echo $this->env->getExtension('routing')->getUrl("menupedido");
        echo "');
                        }else{
                            \$(\"#imprime-form\").submit();
                        }
                    });
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
        return array (  1012 => 487,  966 => 444,  957 => 438,  905 => 390,  902 => 389,  888 => 379,  874 => 368,  867 => 367,  865 => 366,  857 => 361,  849 => 357,  842 => 353,  831 => 346,  827 => 345,  821 => 344,  815 => 342,  811 => 341,  805 => 340,  799 => 338,  795 => 337,  789 => 336,  781 => 331,  776 => 329,  772 => 328,  766 => 327,  760 => 324,  755 => 322,  751 => 321,  745 => 320,  739 => 318,  735 => 317,  728 => 314,  724 => 313,  718 => 312,  684 => 280,  678 => 279,  675 => 278,  672 => 277,  670 => 276,  665 => 273,  653 => 264,  649 => 263,  639 => 260,  632 => 257,  630 => 256,  623 => 254,  616 => 250,  613 => 249,  607 => 247,  605 => 246,  601 => 245,  594 => 243,  588 => 242,  582 => 241,  576 => 240,  570 => 239,  564 => 238,  558 => 237,  552 => 236,  548 => 235,  543 => 234,  540 => 233,  535 => 232,  532 => 231,  530 => 230,  505 => 210,  501 => 208,  497 => 206,  495 => 205,  464 => 178,  460 => 177,  447 => 168,  443 => 167,  437 => 166,  431 => 164,  427 => 163,  421 => 162,  415 => 160,  411 => 159,  403 => 153,  397 => 152,  395 => 151,  388 => 150,  383 => 149,  380 => 148,  376 => 146,  361 => 133,  355 => 132,  352 => 131,  349 => 130,  347 => 129,  342 => 126,  330 => 117,  326 => 116,  316 => 113,  310 => 110,  306 => 109,  299 => 107,  292 => 103,  289 => 102,  284 => 100,  280 => 99,  276 => 98,  269 => 96,  263 => 95,  257 => 94,  251 => 93,  245 => 92,  239 => 91,  233 => 90,  227 => 89,  223 => 88,  218 => 87,  215 => 86,  210 => 85,  207 => 84,  205 => 83,  187 => 69,  185 => 68,  172 => 58,  166 => 54,  147 => 52,  143 => 51,  140 => 50,  138 => 49,  134 => 48,  130 => 47,  116 => 35,  99 => 33,  95 => 32,  83 => 25,  79 => 24,  70 => 20,  66 => 19,  57 => 15,  53 => 14,  49 => 12,  43 => 9,  38 => 6,  36 => 5,  32 => 4,  29 => 3,);
    }
}

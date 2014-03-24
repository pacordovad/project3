<?php

/* FrontendBundle:Producto:index.html.twig */
class __TwigTemplate_548a4bd47f6b235b24d957ec5192a32705f0ecd019f7aa5bb05066374b5d1442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h3>Productos</h3>
    
    <table class=\"records_list\" id=\"datatable_crud_posicion\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Posici&oacute;n</th>
                <th>Nombre</th>
                <th>Figura</th>
                <th>Categoria</th>
                <th>Imagen</th>
                
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "posicion"), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreImagen"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "figuraPK"), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoriaPK"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 27
            if (file_exists((((((isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")) . "/uploads/productos/p") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id")) . ".") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imagenExtension")))) {
                // line 28
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image(((("@FrontendBundle/Resources/public/uploads/productos/p" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id")) . ".") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imagenExtension"))), "cropResize", array(0 => 100, 1 => 100), "method"), "html", null, true);
                echo "\" />
                    ";
            }
            // line 30
            echo "                </td>
                <td>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirmar()\">Eliminar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Producto:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 37,  90 => 33,  86 => 32,  82 => 30,  76 => 28,  74 => 27,  69 => 25,  65 => 24,  61 => 23,  57 => 22,  51 => 21,  48 => 20,  44 => 19,  26 => 3,  20 => 1,);
    }
}

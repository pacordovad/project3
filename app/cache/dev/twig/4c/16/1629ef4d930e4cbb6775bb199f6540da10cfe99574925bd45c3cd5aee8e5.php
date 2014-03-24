<?php

/* FrontendBundle:Contacto:index.html.twig */
class __TwigTemplate_4c161629ef4d930e4cbb6775bb199f6540da10cfe99574925bd45c3cd5aee8e5 extends Twig_Template
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
        echo "<h3>Contactos</h3>
    
    <table class=\"records_list\" id=\"datatable_crud_posicion\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Posici&oacute;n</th>
                <th>Area</th>
                <th>Nombre</th>
                <th>Cargo</th>
                <th>Ciudad</th>
                <th>Teléfono convencional</th>
                <th>Celular</th>
                <th>Correos</th>
                <th>Observaciones</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacto_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "posicion"), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "areaPk"), "empresaArea"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombresContacto"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidosContacto"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cargoPk"), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ciudadPk"), "ciudadPais"), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefono"), "html", null, true);
            echo " ";
            if ((!twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "extension")))) {
                echo "Ext. ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "extension"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 32
            if ((!twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "celular1")))) {
                echo "Movistar: <b>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "celular1"), "html", null, true);
                echo "</b><br/>";
            }
            // line 33
            echo "                    ";
            if ((!twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "celular2")))) {
                echo "Porta: <b>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "celular2"), "html", null, true);
                echo "</b>";
            }
            echo " 
                </td>
                <td>
                    ";
            // line 36
            if ((!twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "correoTrabajo")))) {
                echo "Trabajo: <b>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "correoTrabajo"), "html", null, true);
                echo "</b><br/>";
            }
            echo " 
                    ";
            // line 37
            if ((!twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "correoAlternativo")))) {
                echo "Alternativo: <b>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "correoAlternativo"), "html", null, true);
                echo "</b>";
            }
            echo " 
                </td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observaciones"), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacto_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacto_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirmar()\">Eliminar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Contacto:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  145 => 46,  135 => 42,  131 => 41,  126 => 39,  117 => 37,  109 => 36,  98 => 33,  92 => 32,  82 => 30,  78 => 29,  74 => 28,  68 => 27,  64 => 26,  60 => 25,  54 => 24,  51 => 23,  47 => 22,  26 => 3,  20 => 1,  41 => 9,  35 => 6,  31 => 4,  28 => 3,);
    }
}

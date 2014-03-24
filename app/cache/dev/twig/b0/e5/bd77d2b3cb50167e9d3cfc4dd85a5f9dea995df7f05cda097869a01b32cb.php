<?php

/* FrontendBundle:Region:index.html.twig */
class __TwigTemplate_b0e5bd77d2b3cb50167e9d3cfc4dd85a5f9dea995df7f05cda097869a01b32cb extends Twig_Template
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
        echo "<h3>Regiones</h3>
    
    <table class=\"records_list\" id=\"datatable_crud_posicion\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Posici&oacute;n</th>
                <th>Nombre regi&oacute;n</th>
                <th>Pa&iacute;s</th>
                
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("region_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "posicion"), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreRegion"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paisPk"), "html", null, true);
            echo "</td>
                
                <td>                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("region_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>
                                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("region_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirmar()\">Eliminar</a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Region:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  72 => 25,  68 => 24,  63 => 22,  59 => 21,  55 => 20,  49 => 19,  46 => 18,  42 => 17,  26 => 3,  20 => 1,  41 => 9,  35 => 6,  31 => 4,  28 => 3,);
    }
}

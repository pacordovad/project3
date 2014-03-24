<?php

/* FrontendBundle:Area:index.html.twig */
class __TwigTemplate_52b0451b3bf338327282623a8991411b555c2a38dd34894760c9cc6784f57f81 extends Twig_Template
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
        echo "<h3>Areas</h3>
    
    <table class=\"records_list\" id=\"datatable_crud_posicion\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Posici&oacute;n</th>
                <th>C&oacute;digo</th>
                <th>Nombre &aacute;rea</th>
                <th>Empresa</th>
                
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("area_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "posicion"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codigo"), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreArea"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "empresaPk"), "html", null, true);
            echo "</td>
                
                <td>                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("area_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>
                                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("area_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirmar()\">Eliminar</a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Area:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 32,  77 => 27,  73 => 26,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  50 => 20,  47 => 19,  43 => 18,  26 => 3,  20 => 1,);
    }
}

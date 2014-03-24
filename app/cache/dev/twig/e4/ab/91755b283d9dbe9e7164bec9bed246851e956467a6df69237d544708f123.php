<?php

/* FrontendBundle:Producto:edit.html.twig */
class __TwigTemplate_e4ab91755b283d9dbe9e7164bec9bed246851e956467a6df69237d544708f123 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle:Layouts:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        echo "<h1>Productos</h1>
    <br/>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
    <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("producto");
        echo "\">Regresar</a>
    <br/>
    ";
        // line 9
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Producto:index"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Producto:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  39 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}

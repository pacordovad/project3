<?php

/* FrontendBundle:TipoCalidad:new.html.twig */
class __TwigTemplate_9ac8cd893471fdf02878cbfff3e32a152be664dca002b136a2c537c8d43a1900 extends Twig_Template
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
        echo "<h1>Tipos de Calidades</h1>
    <br/>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    &nbsp;
    <br/>
    ";
        // line 9
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:TipoCalidad:index"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:TipoCalidad:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  35 => 6,  31 => 4,  28 => 3,);
    }
}

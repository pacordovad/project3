<?php

/* FrontendBundle:Medida:new.html.twig */
class __TwigTemplate_a8d014ebb4260ba2c967d9db35e4e3a1176e7bdc2ea083f47cfb162b86a5c96a extends Twig_Template
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
        echo "<h1>Medidas</h1>
    <br/>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    &nbsp;
    <br/>
    ";
        // line 9
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Medida:index"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Medida:new.html.twig";
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

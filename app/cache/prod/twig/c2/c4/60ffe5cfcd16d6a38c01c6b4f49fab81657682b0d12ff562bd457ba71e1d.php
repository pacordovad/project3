<?php

/* FrontendBundle:Security:login.html.twig */
class __TwigTemplate_c2c460ffe5cfcd16d6a38c01c6b4f49fab81657682b0d12ff562bd457ba71e1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "29ccbd2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_29ccbd2_0") : $this->env->getExtension('assets')->getAssetUrl("css/29ccbd2_login_1.css");
            // line 12
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "29ccbd2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_29ccbd2_1") : $this->env->getExtension('assets')->getAssetUrl("css/29ccbd2_bootstrap.min_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "29ccbd2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_29ccbd2_2") : $this->env->getExtension('assets')->getAssetUrl("css/29ccbd2_bootstrap-theme.min_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "29ccbd2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_29ccbd2") : $this->env->getExtension('assets')->getAssetUrl("css/29ccbd2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <body screen_capture_injected=\"true\">
        <div class=\"container\">
            <h2 style=\"text-align: center\">Sistema de Control de Producción</h2>
            ";
        // line 18
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 19
            echo "                <div class=\"alert alert-dismissable alert-warning\" style=\"margin-bottom: 0px;margin-top: 20px;margin-left: 300px;margin-right: 300px;\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), array(), "messages"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 24
        echo "            <form class=\"form-signin\" action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                <h4 class=\"form-signin-heading\">Por favor ingrese sus credenciales</h4>
                <input type=\"text\" class=\"form-control\" placeholder=\"Usuario\" required=\"\" autofocus=\"\" id=\"username\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\">
                <input type=\"password\" class=\"form-control\" placeholder=\"Clave\" required=\"\" id=\"password\" name=\"_password\">
                <input type=\"hidden\" name=\"_target_path\" value=\"/\" />
                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Ingresar</button>
            </form>

        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        ";
        // line 36
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ab3b3ec_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab3b3ec_0") : $this->env->getExtension('assets')->getAssetUrl("js/ab3b3ec_jquery-1.10.2_1.js");
            // line 40
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "ab3b3ec_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab3b3ec_1") : $this->env->getExtension('assets')->getAssetUrl("js/ab3b3ec_bootstrap-3.0.0.min_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "ab3b3ec"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab3b3ec") : $this->env->getExtension('assets')->getAssetUrl("js/ab3b3ec.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 42
        echo "    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Sistema de Control de Producci&oacute;n";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 6,  123 => 42,  103 => 40,  99 => 36,  86 => 26,  80 => 24,  74 => 21,  70 => 19,  68 => 18,  60 => 14,  34 => 12,  30 => 7,  26 => 6,  20 => 2,);
    }
}

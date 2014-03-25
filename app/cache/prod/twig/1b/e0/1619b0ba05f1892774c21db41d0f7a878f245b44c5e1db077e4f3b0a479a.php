<?php

/* FrontendBundle:Other:fields.html.twig */
class __TwigTemplate_1be01619b0ba05f1892774c21db41d0f7a878f245b44c5e1db077e4f3b0a479a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'submit_widget' => array($this, 'block_submit_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('button_widget', $context, $blocks);
        // line 17
        echo "    
";
        // line 18
        $this->displayBlock('form_widget_compound', $context, $blocks);
    }

    // line 1
    public function block_submit_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit"));
        // line 4
        echo "    ";
        $context["class"] = "btn btn-primary";
        // line 5
        echo "    ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 9
    public function block_button_widget($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 12
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : null)));
            // line 13
            echo "    ";
        }
        // line 14
        echo "    <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo " class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "</button>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 18
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 19
        ob_start();
        // line 20
        echo "    <table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"crud-table\">
        ";
        // line 21
        if ((twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent")) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0))) {
            // line 22
            echo "        <tr>
            <td colspan=\"2\">
                ";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
            </td>
        </tr>
        ";
        }
        // line 28
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
    </table>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Other:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  111 => 29,  106 => 28,  93 => 21,  88 => 20,  86 => 19,  69 => 14,  63 => 12,  60 => 11,  58 => 10,  55 => 9,  47 => 5,  44 => 4,  41 => 3,  39 => 2,  27 => 9,  24 => 8,  22 => 1,  1096 => 555,  1085 => 547,  1071 => 536,  1025 => 493,  1016 => 487,  959 => 434,  956 => 433,  942 => 423,  928 => 412,  921 => 411,  919 => 410,  911 => 405,  903 => 401,  896 => 397,  885 => 390,  881 => 389,  875 => 388,  869 => 386,  865 => 385,  859 => 384,  853 => 382,  849 => 381,  843 => 380,  835 => 375,  830 => 373,  826 => 372,  820 => 371,  814 => 368,  809 => 366,  805 => 365,  799 => 364,  793 => 362,  789 => 361,  782 => 358,  778 => 357,  772 => 356,  734 => 320,  715 => 306,  712 => 305,  709 => 304,  707 => 303,  702 => 300,  690 => 291,  686 => 290,  676 => 287,  669 => 284,  667 => 283,  660 => 281,  653 => 277,  650 => 276,  644 => 274,  642 => 273,  638 => 272,  631 => 270,  625 => 269,  619 => 268,  613 => 267,  607 => 266,  601 => 265,  595 => 264,  589 => 263,  583 => 262,  579 => 261,  574 => 260,  571 => 259,  566 => 258,  563 => 257,  561 => 256,  532 => 232,  528 => 230,  524 => 228,  522 => 227,  491 => 200,  487 => 199,  474 => 190,  470 => 189,  464 => 188,  458 => 186,  454 => 185,  448 => 184,  442 => 182,  438 => 181,  430 => 175,  424 => 174,  422 => 173,  415 => 172,  410 => 171,  407 => 170,  403 => 168,  371 => 138,  365 => 137,  362 => 136,  359 => 135,  357 => 134,  352 => 131,  340 => 122,  336 => 121,  326 => 118,  320 => 115,  316 => 114,  309 => 112,  302 => 108,  299 => 107,  294 => 105,  290 => 104,  286 => 103,  279 => 101,  273 => 100,  267 => 99,  261 => 98,  255 => 97,  249 => 96,  243 => 95,  237 => 94,  231 => 93,  227 => 92,  222 => 91,  219 => 90,  214 => 89,  211 => 88,  209 => 87,  187 => 69,  185 => 68,  172 => 58,  166 => 54,  147 => 52,  143 => 51,  140 => 50,  138 => 49,  134 => 48,  130 => 47,  116 => 35,  99 => 24,  95 => 22,  83 => 18,  79 => 24,  70 => 20,  66 => 13,  57 => 15,  53 => 14,  49 => 12,  43 => 9,  38 => 6,  36 => 1,  32 => 18,  29 => 17,);
    }
}

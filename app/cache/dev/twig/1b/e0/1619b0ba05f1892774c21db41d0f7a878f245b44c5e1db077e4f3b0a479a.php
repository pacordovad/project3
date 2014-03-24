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
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
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
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 12
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 13
            echo "    ";
        }
        // line 14
        echo "    <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo " class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
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
        if ((twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent")) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 22
            echo "        <tr>
            <td colspan=\"2\">
                ";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
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
        return array (  111 => 29,  106 => 28,  93 => 21,  88 => 20,  86 => 19,  69 => 14,  63 => 12,  60 => 11,  58 => 10,  55 => 9,  47 => 5,  44 => 4,  41 => 3,  39 => 2,  27 => 9,  24 => 8,  22 => 1,  956 => 434,  947 => 428,  895 => 380,  892 => 379,  878 => 369,  868 => 362,  861 => 361,  859 => 360,  851 => 355,  844 => 352,  840 => 351,  831 => 346,  827 => 345,  821 => 344,  815 => 342,  811 => 341,  805 => 340,  799 => 338,  795 => 337,  789 => 336,  781 => 331,  776 => 329,  772 => 328,  766 => 327,  760 => 324,  755 => 322,  751 => 321,  745 => 320,  739 => 318,  735 => 317,  728 => 314,  724 => 313,  718 => 312,  684 => 280,  678 => 279,  675 => 278,  672 => 277,  670 => 276,  665 => 273,  653 => 264,  649 => 263,  639 => 260,  632 => 257,  630 => 256,  623 => 254,  616 => 250,  613 => 249,  607 => 247,  605 => 246,  601 => 245,  594 => 243,  588 => 242,  582 => 241,  576 => 240,  570 => 239,  564 => 238,  558 => 237,  552 => 236,  548 => 235,  543 => 234,  540 => 233,  535 => 232,  532 => 231,  530 => 230,  505 => 210,  501 => 208,  497 => 206,  495 => 205,  464 => 178,  460 => 177,  447 => 168,  443 => 167,  437 => 166,  431 => 164,  427 => 163,  421 => 162,  415 => 160,  411 => 159,  403 => 153,  397 => 152,  395 => 151,  388 => 150,  383 => 149,  380 => 148,  376 => 146,  361 => 133,  355 => 132,  352 => 131,  349 => 130,  347 => 129,  342 => 126,  330 => 117,  326 => 116,  316 => 113,  310 => 110,  306 => 109,  299 => 107,  292 => 103,  289 => 102,  284 => 100,  280 => 99,  276 => 98,  269 => 96,  263 => 95,  257 => 94,  251 => 93,  245 => 92,  239 => 91,  233 => 90,  227 => 89,  223 => 88,  218 => 87,  215 => 86,  210 => 85,  207 => 84,  205 => 83,  187 => 69,  185 => 68,  172 => 58,  166 => 54,  147 => 52,  143 => 51,  140 => 50,  138 => 49,  134 => 48,  130 => 47,  116 => 35,  99 => 24,  95 => 22,  83 => 18,  79 => 24,  70 => 20,  66 => 13,  57 => 15,  53 => 14,  49 => 12,  43 => 9,  38 => 6,  36 => 1,  32 => 18,  29 => 17,);
    }
}

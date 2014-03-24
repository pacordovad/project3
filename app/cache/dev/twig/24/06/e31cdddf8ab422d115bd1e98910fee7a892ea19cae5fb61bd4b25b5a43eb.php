<?php

/* form_table_layout.html.twig */
class __TwigTemplate_2406e31cdddf8ab422d115bd1e98910fee7a892ea19cae5fb61bd4b25b5a43eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("form_div_layout.html.twig");
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_row', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('form_widget_compound', $context, $blocks);
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    <tr>
        <td>
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        </td>
        <td>
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </td>
    </tr>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_button_row($context, array $blocks = array())
    {
        // line 18
        ob_start();
        // line 19
        echo "    <tr>
        <td></td>
        <td>
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </td>
    </tr>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 28
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 29
        ob_start();
        // line 30
        echo "    <tr style=\"display: none\">
        <td colspan=\"2\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </td>
    </tr>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 38
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 39
        ob_start();
        // line 40
        echo "    <table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 41
        if ((twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent")) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 42
            echo "        <tr>
            <td colspan=\"2\">
                ";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            </td>
        </tr>
        ";
        }
        // line 48
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </table>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 49,  145 => 48,  132 => 41,  127 => 40,  125 => 39,  122 => 38,  113 => 32,  109 => 30,  107 => 29,  104 => 28,  90 => 19,  85 => 17,  76 => 11,  72 => 10,  62 => 5,  50 => 37,  48 => 28,  45 => 27,  40 => 16,  35 => 2,  14 => 1,  111 => 29,  106 => 28,  93 => 21,  88 => 18,  86 => 19,  69 => 14,  63 => 12,  60 => 4,  58 => 10,  55 => 9,  47 => 5,  44 => 4,  41 => 3,  39 => 2,  27 => 9,  24 => 8,  22 => 1,  956 => 434,  947 => 428,  895 => 380,  892 => 379,  878 => 369,  868 => 362,  861 => 361,  859 => 360,  851 => 355,  844 => 352,  840 => 351,  831 => 346,  827 => 345,  821 => 344,  815 => 342,  811 => 341,  805 => 340,  799 => 338,  795 => 337,  789 => 336,  781 => 331,  776 => 329,  772 => 328,  766 => 327,  760 => 324,  755 => 322,  751 => 321,  745 => 320,  739 => 318,  735 => 317,  728 => 314,  724 => 313,  718 => 312,  684 => 280,  678 => 279,  675 => 278,  672 => 277,  670 => 276,  665 => 273,  653 => 264,  649 => 263,  639 => 260,  632 => 257,  630 => 256,  623 => 254,  616 => 250,  613 => 249,  607 => 247,  605 => 246,  601 => 245,  594 => 243,  588 => 242,  582 => 241,  576 => 240,  570 => 239,  564 => 238,  558 => 237,  552 => 236,  548 => 235,  543 => 234,  540 => 233,  535 => 232,  532 => 231,  530 => 230,  505 => 210,  501 => 208,  497 => 206,  495 => 205,  464 => 178,  460 => 177,  447 => 168,  443 => 167,  437 => 166,  431 => 164,  427 => 163,  421 => 162,  415 => 160,  411 => 159,  403 => 153,  397 => 152,  395 => 151,  388 => 150,  383 => 149,  380 => 148,  376 => 146,  361 => 133,  355 => 132,  352 => 131,  349 => 130,  347 => 129,  342 => 126,  330 => 117,  326 => 116,  316 => 113,  310 => 110,  306 => 109,  299 => 107,  292 => 103,  289 => 102,  284 => 100,  280 => 99,  276 => 98,  269 => 96,  263 => 95,  257 => 94,  251 => 93,  245 => 92,  239 => 91,  233 => 90,  227 => 89,  223 => 88,  218 => 87,  215 => 86,  210 => 85,  207 => 84,  205 => 83,  187 => 69,  185 => 68,  172 => 58,  166 => 54,  147 => 52,  143 => 51,  140 => 50,  138 => 44,  134 => 42,  130 => 47,  116 => 35,  99 => 24,  95 => 22,  83 => 18,  79 => 24,  70 => 20,  66 => 7,  57 => 3,  53 => 38,  49 => 12,  43 => 17,  38 => 3,  36 => 1,  32 => 18,  29 => 17,);
    }
}

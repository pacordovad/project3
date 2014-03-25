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
        return array (  150 => 49,  145 => 48,  132 => 41,  127 => 40,  125 => 39,  122 => 38,  113 => 32,  109 => 30,  107 => 29,  104 => 28,  90 => 19,  85 => 17,  76 => 11,  72 => 10,  62 => 5,  50 => 37,  48 => 28,  45 => 27,  40 => 16,  35 => 2,  14 => 1,  111 => 29,  106 => 28,  93 => 21,  88 => 18,  86 => 19,  69 => 14,  63 => 12,  60 => 4,  58 => 10,  55 => 9,  47 => 5,  44 => 4,  41 => 3,  39 => 2,  27 => 9,  24 => 8,  22 => 1,  1096 => 555,  1085 => 547,  1071 => 536,  1025 => 493,  1016 => 487,  959 => 434,  956 => 433,  942 => 423,  928 => 412,  921 => 411,  919 => 410,  911 => 405,  903 => 401,  896 => 397,  885 => 390,  881 => 389,  875 => 388,  869 => 386,  865 => 385,  859 => 384,  853 => 382,  849 => 381,  843 => 380,  835 => 375,  830 => 373,  826 => 372,  820 => 371,  814 => 368,  809 => 366,  805 => 365,  799 => 364,  793 => 362,  789 => 361,  782 => 358,  778 => 357,  772 => 356,  734 => 320,  715 => 306,  712 => 305,  709 => 304,  707 => 303,  702 => 300,  690 => 291,  686 => 290,  676 => 287,  669 => 284,  667 => 283,  660 => 281,  653 => 277,  650 => 276,  644 => 274,  642 => 273,  638 => 272,  631 => 270,  625 => 269,  619 => 268,  613 => 267,  607 => 266,  601 => 265,  595 => 264,  589 => 263,  583 => 262,  579 => 261,  574 => 260,  571 => 259,  566 => 258,  563 => 257,  561 => 256,  532 => 232,  528 => 230,  524 => 228,  522 => 227,  491 => 200,  487 => 199,  474 => 190,  470 => 189,  464 => 188,  458 => 186,  454 => 185,  448 => 184,  442 => 182,  438 => 181,  430 => 175,  424 => 174,  422 => 173,  415 => 172,  410 => 171,  407 => 170,  403 => 168,  371 => 138,  365 => 137,  362 => 136,  359 => 135,  357 => 134,  352 => 131,  340 => 122,  336 => 121,  326 => 118,  320 => 115,  316 => 114,  309 => 112,  302 => 108,  299 => 107,  294 => 105,  290 => 104,  286 => 103,  279 => 101,  273 => 100,  267 => 99,  261 => 98,  255 => 97,  249 => 96,  243 => 95,  237 => 94,  231 => 93,  227 => 92,  222 => 91,  219 => 90,  214 => 89,  211 => 88,  209 => 87,  187 => 69,  185 => 68,  172 => 58,  166 => 54,  147 => 52,  143 => 51,  140 => 50,  138 => 44,  134 => 42,  130 => 47,  116 => 35,  99 => 24,  95 => 22,  83 => 18,  79 => 24,  70 => 20,  66 => 7,  57 => 3,  53 => 38,  49 => 12,  43 => 17,  38 => 3,  36 => 1,  32 => 18,  29 => 17,);
    }
}

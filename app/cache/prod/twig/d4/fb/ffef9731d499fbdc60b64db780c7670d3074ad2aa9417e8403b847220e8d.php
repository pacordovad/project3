<?php

/* FrontendBundle:Pedido:modal.html.twig */
class __TwigTemplate_d4fbffef9731d499fbdc60b64db780c7670d3074ad2aa9417e8403b847220e8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modal fade\" id=\"modal-producto\" data-action=\"agregar\" data-edit-id=\"\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" style=\"width: 800px;\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"modal-titulo\"></h4>
            </div>
            <div class=\"modal-body\" id=\"modal-body\">
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                <button type=\"button\" id=\"btnGuardarProducto\" data-loading-text=\"Guardando...\" class=\"btn btn-primary\">Guardar cambios</button>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Pedido:modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  878 => 219,  876 => 218,  873 => 217,  862 => 212,  860 => 211,  857 => 210,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  828 => 197,  825 => 196,  817 => 192,  812 => 190,  801 => 185,  798 => 184,  796 => 183,  785 => 178,  783 => 177,  780 => 176,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  710 => 149,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  635 => 117,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  529 => 92,  527 => 91,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  480 => 75,  478 => 74,  467 => 72,  461 => 70,  459 => 69,  456 => 68,  450 => 64,  437 => 61,  433 => 60,  428 => 59,  426 => 58,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  374 => 36,  368 => 34,  366 => 33,  363 => 32,  355 => 27,  350 => 26,  344 => 24,  342 => 23,  337 => 22,  335 => 21,  332 => 20,  313 => 15,  311 => 14,  308 => 13,  293 => 6,  288 => 4,  285 => 3,  281 => 388,  278 => 387,  276 => 381,  271 => 374,  268 => 373,  266 => 366,  263 => 365,  260 => 363,  258 => 354,  253 => 342,  250 => 341,  248 => 336,  245 => 335,  240 => 326,  238 => 312,  235 => 311,  233 => 304,  230 => 303,  225 => 298,  220 => 290,  217 => 289,  215 => 280,  212 => 279,  210 => 270,  207 => 269,  204 => 267,  202 => 266,  199 => 265,  197 => 249,  194 => 248,  191 => 246,  189 => 240,  186 => 239,  184 => 233,  181 => 232,  179 => 224,  176 => 223,  174 => 217,  171 => 216,  169 => 210,  164 => 203,  161 => 202,  159 => 196,  156 => 195,  154 => 189,  151 => 188,  149 => 182,  146 => 181,  144 => 176,  141 => 175,  139 => 169,  136 => 168,  131 => 160,  129 => 148,  126 => 147,  124 => 132,  121 => 131,  119 => 117,  114 => 111,  101 => 89,  96 => 67,  94 => 57,  91 => 56,  89 => 47,  84 => 41,  81 => 40,  74 => 20,  71 => 19,  64 => 3,  61 => 2,  150 => 49,  145 => 48,  132 => 41,  127 => 40,  125 => 39,  122 => 38,  113 => 32,  109 => 105,  107 => 29,  104 => 90,  90 => 19,  85 => 17,  76 => 31,  72 => 10,  62 => 5,  50 => 37,  48 => 28,  45 => 27,  40 => 16,  35 => 2,  14 => 1,  111 => 110,  106 => 104,  93 => 21,  88 => 18,  86 => 46,  69 => 13,  63 => 12,  60 => 4,  58 => 10,  55 => 9,  47 => 5,  44 => 4,  41 => 3,  39 => 2,  27 => 9,  24 => 8,  22 => 1,  1096 => 555,  1085 => 547,  1071 => 536,  1025 => 493,  1016 => 276,  959 => 434,  956 => 433,  942 => 423,  928 => 412,  921 => 411,  919 => 410,  911 => 405,  903 => 229,  896 => 397,  885 => 390,  881 => 220,  875 => 388,  869 => 386,  865 => 213,  859 => 384,  853 => 382,  849 => 206,  843 => 380,  835 => 375,  830 => 198,  826 => 372,  820 => 371,  814 => 191,  809 => 189,  805 => 365,  799 => 364,  793 => 182,  789 => 361,  782 => 358,  778 => 357,  772 => 172,  734 => 320,  715 => 151,  712 => 150,  709 => 304,  707 => 148,  702 => 300,  690 => 291,  686 => 290,  676 => 287,  669 => 284,  667 => 283,  660 => 281,  653 => 277,  650 => 276,  644 => 274,  642 => 273,  638 => 118,  631 => 270,  625 => 269,  619 => 113,  613 => 267,  607 => 266,  601 => 265,  595 => 264,  589 => 263,  583 => 262,  579 => 261,  574 => 260,  571 => 259,  566 => 258,  563 => 257,  561 => 256,  532 => 232,  528 => 230,  524 => 90,  522 => 227,  491 => 200,  487 => 199,  474 => 190,  470 => 73,  464 => 71,  458 => 186,  454 => 185,  448 => 184,  442 => 62,  438 => 181,  430 => 175,  424 => 174,  422 => 173,  415 => 172,  410 => 171,  407 => 170,  403 => 48,  371 => 35,  365 => 137,  362 => 136,  359 => 135,  357 => 134,  352 => 131,  340 => 122,  336 => 121,  326 => 118,  320 => 115,  316 => 16,  309 => 112,  302 => 108,  299 => 8,  294 => 105,  290 => 5,  286 => 103,  279 => 101,  273 => 380,  267 => 99,  261 => 98,  255 => 353,  249 => 96,  243 => 327,  237 => 94,  231 => 93,  227 => 301,  222 => 297,  219 => 90,  214 => 89,  211 => 88,  209 => 87,  187 => 69,  185 => 68,  172 => 58,  166 => 209,  147 => 52,  143 => 51,  140 => 50,  138 => 44,  134 => 161,  130 => 47,  116 => 116,  99 => 68,  95 => 22,  83 => 18,  79 => 32,  70 => 20,  66 => 12,  57 => 3,  53 => 38,  49 => 12,  43 => 17,  38 => 3,  36 => 1,  32 => 18,  29 => 17,);
    }
}

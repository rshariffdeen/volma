<?php

/* SensioDistributionBundle:Configurator:layout.html.twig */
class __TwigTemplate_b335f03b06431698524de684aa21ae1aea2e9c28d15633906cb6f631e0b370da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Web Configurator Bundle";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  793 => 182,  785 => 178,  783 => 177,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  721 => 153,  712 => 150,  696 => 140,  683 => 135,  680 => 134,  662 => 125,  658 => 124,  654 => 123,  643 => 120,  638 => 118,  619 => 113,  614 => 111,  596 => 106,  555 => 95,  550 => 94,  503 => 81,  501 => 80,  490 => 77,  456 => 68,  450 => 64,  414 => 52,  390 => 43,  377 => 37,  316 => 16,  245 => 335,  810 => 492,  775 => 485,  727 => 476,  710 => 149,  706 => 473,  698 => 471,  686 => 468,  649 => 122,  634 => 456,  549 => 411,  517 => 404,  389 => 160,  378 => 157,  343 => 146,  334 => 141,  290 => 5,  281 => 411,  276 => 395,  152 => 46,  668 => 344,  664 => 342,  651 => 337,  647 => 336,  644 => 335,  631 => 327,  629 => 454,  626 => 325,  613 => 320,  602 => 317,  593 => 105,  569 => 300,  559 => 296,  545 => 291,  531 => 283,  519 => 278,  515 => 85,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  463 => 248,  459 => 69,  448 => 240,  438 => 236,  418 => 224,  400 => 47,  347 => 191,  170 => 84,  324 => 113,  288 => 4,  212 => 279,  202 => 266,  190 => 76,  462 => 202,  394 => 168,  380 => 158,  373 => 156,  351 => 192,  335 => 21,  329 => 188,  325 => 129,  323 => 128,  303 => 106,  270 => 102,  20 => 1,  308 => 13,  113 => 48,  191 => 246,  146 => 181,  476 => 246,  455 => 228,  451 => 227,  447 => 226,  421 => 217,  405 => 49,  372 => 201,  318 => 111,  296 => 121,  226 => 84,  194 => 248,  127 => 35,  321 => 135,  313 => 15,  274 => 110,  234 => 118,  180 => 92,  236 => 109,  222 => 297,  175 => 58,  53 => 11,  184 => 233,  65 => 11,  58 => 13,  606 => 449,  601 => 446,  592 => 334,  581 => 305,  563 => 298,  551 => 310,  539 => 304,  535 => 302,  533 => 284,  527 => 91,  513 => 292,  509 => 83,  473 => 254,  467 => 72,  445 => 248,  443 => 225,  431 => 189,  416 => 235,  263 => 365,  244 => 119,  174 => 217,  172 => 57,  370 => 200,  359 => 197,  352 => 175,  328 => 139,  304 => 181,  259 => 103,  255 => 353,  231 => 83,  195 => 96,  129 => 148,  97 => 51,  81 => 40,  225 => 298,  197 => 249,  185 => 74,  346 => 189,  261 => 127,  249 => 127,  233 => 304,  218 => 113,  213 => 78,  188 => 90,  178 => 59,  153 => 77,  104 => 90,  76 => 31,  861 => 399,  858 => 398,  853 => 316,  849 => 206,  846 => 205,  837 => 267,  818 => 260,  816 => 259,  811 => 257,  803 => 254,  796 => 183,  794 => 248,  786 => 244,  774 => 240,  772 => 172,  766 => 235,  763 => 234,  750 => 224,  746 => 161,  738 => 217,  732 => 213,  726 => 209,  722 => 207,  715 => 151,  707 => 148,  702 => 472,  697 => 141,  690 => 469,  687 => 193,  677 => 465,  672 => 345,  667 => 184,  642 => 172,  637 => 358,  622 => 452,  617 => 112,  609 => 319,  604 => 156,  591 => 309,  588 => 308,  586 => 149,  582 => 147,  576 => 101,  573 => 143,  567 => 414,  564 => 99,  561 => 138,  554 => 136,  547 => 93,  541 => 290,  538 => 129,  532 => 410,  529 => 92,  524 => 90,  522 => 406,  516 => 121,  514 => 120,  506 => 289,  502 => 288,  498 => 113,  491 => 109,  486 => 106,  464 => 71,  442 => 62,  439 => 195,  433 => 60,  428 => 59,  417 => 398,  411 => 395,  401 => 172,  396 => 389,  376 => 205,  371 => 35,  366 => 33,  361 => 152,  356 => 64,  333 => 173,  317 => 185,  302 => 125,  297 => 179,  287 => 135,  272 => 117,  267 => 101,  262 => 98,  242 => 328,  200 => 72,  198 => 105,  181 => 232,  114 => 111,  90 => 27,  426 => 58,  410 => 221,  403 => 48,  399 => 198,  375 => 186,  367 => 155,  344 => 24,  338 => 135,  330 => 162,  320 => 127,  307 => 128,  301 => 141,  293 => 6,  271 => 374,  265 => 105,  253 => 342,  239 => 117,  211 => 96,  165 => 83,  161 => 202,  155 => 47,  124 => 132,  110 => 44,  100 => 39,  77 => 20,  70 => 15,  832 => 264,  827 => 262,  823 => 261,  820 => 305,  807 => 491,  802 => 278,  797 => 276,  788 => 486,  780 => 176,  776 => 264,  768 => 258,  765 => 257,  761 => 43,  758 => 42,  751 => 163,  749 => 162,  744 => 415,  739 => 156,  734 => 411,  729 => 155,  724 => 154,  719 => 405,  714 => 403,  709 => 401,  704 => 399,  699 => 142,  694 => 138,  689 => 137,  682 => 467,  678 => 133,  674 => 387,  666 => 126,  660 => 464,  655 => 180,  650 => 378,  645 => 376,  635 => 117,  630 => 370,  625 => 453,  620 => 451,  615 => 344,  610 => 362,  605 => 360,  595 => 356,  590 => 354,  580 => 350,  575 => 348,  560 => 335,  558 => 333,  528 => 305,  510 => 289,  508 => 257,  496 => 79,  487 => 242,  478 => 74,  471 => 253,  465 => 249,  454 => 244,  446 => 197,  441 => 196,  436 => 235,  425 => 219,  422 => 226,  419 => 236,  412 => 222,  395 => 210,  391 => 387,  388 => 42,  386 => 159,  383 => 207,  369 => 183,  364 => 197,  357 => 123,  353 => 149,  350 => 26,  348 => 140,  345 => 147,  332 => 20,  326 => 138,  315 => 131,  310 => 154,  306 => 107,  299 => 8,  292 => 125,  289 => 113,  282 => 121,  280 => 141,  275 => 105,  266 => 366,  260 => 363,  257 => 111,  250 => 341,  215 => 280,  207 => 269,  186 => 239,  160 => 97,  137 => 77,  34 => 4,  800 => 433,  795 => 432,  792 => 488,  695 => 139,  684 => 192,  679 => 466,  675 => 132,  670 => 386,  663 => 322,  661 => 321,  657 => 181,  652 => 179,  648 => 316,  640 => 119,  632 => 168,  621 => 300,  616 => 298,  612 => 296,  607 => 294,  600 => 358,  598 => 107,  594 => 335,  589 => 286,  585 => 307,  577 => 303,  568 => 273,  557 => 96,  552 => 293,  548 => 292,  543 => 306,  536 => 259,  534 => 258,  530 => 307,  525 => 280,  521 => 295,  512 => 84,  504 => 241,  493 => 78,  488 => 234,  484 => 105,  479 => 256,  472 => 227,  470 => 73,  466 => 225,  449 => 198,  429 => 188,  424 => 202,  420 => 207,  415 => 180,  408 => 50,  406 => 393,  397 => 213,  385 => 41,  363 => 32,  358 => 151,  354 => 166,  349 => 42,  342 => 23,  340 => 145,  336 => 159,  331 => 140,  327 => 114,  319 => 159,  311 => 14,  300 => 180,  295 => 178,  291 => 102,  286 => 112,  279 => 130,  277 => 136,  256 => 96,  248 => 336,  237 => 117,  232 => 88,  228 => 100,  223 => 109,  216 => 79,  210 => 270,  205 => 108,  192 => 108,  150 => 55,  148 => 64,  134 => 161,  126 => 147,  118 => 49,  84 => 41,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 209,  437 => 61,  435 => 223,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 201,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 206,  381 => 383,  379 => 204,  374 => 36,  368 => 34,  365 => 197,  362 => 110,  360 => 69,  355 => 27,  341 => 189,  337 => 22,  322 => 168,  314 => 165,  312 => 130,  309 => 129,  305 => 142,  298 => 120,  294 => 90,  285 => 3,  283 => 115,  278 => 410,  268 => 373,  264 => 124,  258 => 354,  252 => 125,  247 => 126,  241 => 93,  229 => 87,  220 => 290,  214 => 111,  177 => 84,  169 => 210,  140 => 58,  132 => 52,  128 => 68,  107 => 43,  61 => 2,  273 => 394,  269 => 107,  254 => 92,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 120,  219 => 110,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 59,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 18,  59 => 13,  93 => 28,  88 => 32,  78 => 18,  38 => 7,  28 => 3,  201 => 106,  196 => 92,  183 => 87,  171 => 216,  166 => 209,  163 => 82,  158 => 80,  156 => 195,  151 => 188,  142 => 70,  138 => 59,  136 => 168,  121 => 131,  117 => 39,  105 => 25,  91 => 56,  62 => 14,  49 => 14,  26 => 3,  87 => 26,  46 => 10,  44 => 10,  31 => 3,  94 => 57,  89 => 47,  85 => 23,  75 => 19,  68 => 30,  56 => 12,  24 => 2,  27 => 3,  25 => 5,  21 => 2,  19 => 1,  79 => 32,  72 => 18,  69 => 13,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 169,  131 => 160,  123 => 61,  120 => 31,  115 => 48,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 33,  74 => 20,  66 => 12,  55 => 12,  52 => 13,  50 => 10,  43 => 9,  41 => 7,  35 => 6,  32 => 6,  29 => 4,  209 => 88,  203 => 73,  199 => 265,  193 => 87,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 75,  144 => 176,  141 => 175,  133 => 57,  130 => 46,  125 => 51,  122 => 41,  116 => 116,  112 => 36,  109 => 105,  106 => 104,  103 => 41,  99 => 68,  95 => 34,  92 => 43,  86 => 46,  82 => 28,  80 => 27,  73 => 24,  64 => 11,  60 => 20,  57 => 39,  54 => 19,  51 => 13,  48 => 11,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}

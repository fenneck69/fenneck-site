<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_9a0df5479fe630939a52ffa16f10ff26234dcb6d8bf77654d54403fe4112d559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : null), "vars"), "errors")) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : null), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : null), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : null), 'widget');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 91,  287 => 89,  264 => 82,  178 => 46,  12 => 36,  778 => 251,  763 => 244,  742 => 240,  734 => 237,  717 => 233,  714 => 232,  711 => 231,  703 => 226,  653 => 218,  650 => 217,  644 => 213,  616 => 207,  595 => 205,  587 => 203,  578 => 200,  573 => 198,  546 => 166,  534 => 162,  531 => 161,  513 => 179,  475 => 169,  448 => 153,  445 => 152,  429 => 148,  422 => 147,  396 => 138,  345 => 116,  307 => 104,  286 => 98,  247 => 75,  206 => 57,  90 => 24,  283 => 97,  236 => 109,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1106 => 316,  1103 => 315,  1100 => 314,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  865 => 213,  862 => 212,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  817 => 192,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  783 => 177,  769 => 247,  767 => 246,  764 => 169,  756 => 165,  751 => 163,  746 => 161,  739 => 239,  729 => 235,  724 => 154,  721 => 153,  715 => 151,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  694 => 138,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  640 => 211,  619 => 113,  617 => 112,  598 => 107,  576 => 199,  564 => 193,  557 => 96,  550 => 187,  547 => 93,  503 => 81,  493 => 171,  480 => 75,  456 => 68,  450 => 64,  414 => 144,  408 => 142,  368 => 126,  355 => 122,  350 => 26,  342 => 23,  332 => 20,  316 => 16,  255 => 353,  245 => 83,  194 => 52,  200 => 54,  180 => 66,  560 => 191,  549 => 182,  532 => 174,  528 => 160,  525 => 172,  523 => 171,  518 => 170,  514 => 168,  511 => 167,  508 => 165,  501 => 174,  474 => 150,  460 => 143,  455 => 141,  442 => 151,  439 => 150,  436 => 132,  433 => 149,  426 => 58,  415 => 121,  405 => 141,  360 => 104,  354 => 101,  331 => 96,  322 => 93,  304 => 103,  272 => 91,  249 => 74,  233 => 304,  216 => 100,  140 => 51,  126 => 24,  192 => 88,  161 => 57,  320 => 92,  288 => 4,  237 => 71,  232 => 78,  222 => 66,  185 => 61,  150 => 34,  100 => 57,  692 => 399,  683 => 223,  678 => 133,  676 => 385,  666 => 222,  661 => 220,  656 => 219,  641 => 368,  635 => 117,  615 => 354,  590 => 204,  583 => 334,  577 => 329,  575 => 328,  536 => 306,  524 => 90,  510 => 178,  482 => 285,  464 => 71,  452 => 268,  423 => 57,  421 => 244,  413 => 241,  400 => 47,  393 => 137,  385 => 41,  374 => 128,  324 => 110,  310 => 171,  302 => 168,  296 => 167,  282 => 161,  278 => 95,  270 => 84,  259 => 87,  226 => 131,  365 => 141,  347 => 134,  338 => 113,  319 => 124,  315 => 98,  301 => 144,  299 => 8,  281 => 96,  268 => 373,  265 => 130,  262 => 81,  260 => 363,  257 => 103,  225 => 67,  213 => 69,  211 => 81,  197 => 90,  174 => 42,  127 => 48,  252 => 85,  242 => 82,  231 => 69,  207 => 269,  195 => 84,  165 => 77,  129 => 25,  84 => 32,  52 => 11,  167 => 56,  155 => 52,  145 => 54,  111 => 43,  23 => 18,  58 => 24,  37 => 24,  20 => 1,  1127 => 457,  1123 => 456,  1119 => 455,  1109 => 317,  1098 => 313,  1091 => 438,  1081 => 431,  1077 => 305,  1066 => 426,  1062 => 425,  1058 => 424,  1053 => 292,  1049 => 422,  1045 => 421,  1037 => 416,  1033 => 415,  1029 => 282,  1020 => 412,  1015 => 410,  1003 => 401,  999 => 400,  991 => 395,  981 => 393,  979 => 260,  976 => 259,  966 => 384,  962 => 383,  953 => 379,  942 => 371,  935 => 367,  925 => 360,  916 => 354,  909 => 350,  905 => 348,  894 => 226,  890 => 342,  883 => 338,  879 => 337,  873 => 217,  869 => 335,  860 => 211,  856 => 328,  852 => 327,  843 => 325,  838 => 323,  825 => 196,  821 => 312,  814 => 191,  804 => 306,  802 => 305,  799 => 304,  789 => 297,  785 => 178,  780 => 176,  774 => 290,  772 => 248,  762 => 286,  753 => 164,  748 => 242,  741 => 274,  728 => 267,  716 => 258,  712 => 150,  706 => 254,  700 => 225,  696 => 140,  688 => 249,  684 => 248,  681 => 247,  664 => 239,  655 => 236,  651 => 235,  647 => 234,  643 => 120,  637 => 230,  632 => 228,  627 => 227,  625 => 361,  622 => 225,  614 => 111,  610 => 219,  607 => 349,  594 => 215,  584 => 202,  582 => 211,  566 => 207,  561 => 205,  556 => 204,  553 => 188,  548 => 313,  540 => 164,  527 => 91,  522 => 195,  520 => 194,  516 => 294,  495 => 158,  487 => 156,  466 => 168,  461 => 70,  453 => 161,  441 => 152,  428 => 59,  417 => 145,  407 => 238,  403 => 48,  398 => 115,  389 => 133,  387 => 110,  384 => 109,  375 => 124,  369 => 122,  359 => 117,  357 => 116,  346 => 111,  343 => 115,  341 => 131,  337 => 22,  327 => 102,  314 => 88,  311 => 14,  309 => 148,  305 => 115,  293 => 6,  289 => 140,  284 => 106,  279 => 104,  277 => 136,  274 => 135,  266 => 366,  261 => 76,  256 => 79,  251 => 101,  220 => 65,  215 => 280,  202 => 55,  198 => 54,  190 => 49,  157 => 56,  137 => 29,  132 => 28,  124 => 47,  96 => 18,  74 => 30,  61 => 28,  34 => 15,  784 => 215,  775 => 213,  760 => 243,  749 => 162,  745 => 241,  736 => 238,  732 => 204,  727 => 203,  725 => 197,  723 => 196,  720 => 195,  713 => 191,  709 => 190,  705 => 189,  702 => 188,  695 => 139,  686 => 181,  682 => 180,  677 => 179,  674 => 178,  672 => 241,  668 => 240,  660 => 238,  652 => 376,  648 => 173,  645 => 369,  638 => 210,  633 => 209,  631 => 364,  628 => 165,  623 => 161,  618 => 160,  612 => 159,  599 => 206,  596 => 106,  593 => 105,  591 => 151,  586 => 150,  579 => 332,  574 => 209,  569 => 325,  562 => 139,  552 => 136,  543 => 179,  533 => 133,  529 => 92,  519 => 127,  500 => 291,  490 => 77,  471 => 115,  467 => 72,  459 => 159,  440 => 106,  437 => 61,  434 => 256,  427 => 99,  420 => 146,  410 => 90,  404 => 88,  402 => 140,  399 => 139,  392 => 82,  388 => 42,  383 => 80,  381 => 79,  378 => 78,  371 => 35,  363 => 32,  361 => 124,  358 => 123,  348 => 118,  344 => 24,  340 => 114,  330 => 103,  325 => 94,  321 => 100,  317 => 107,  313 => 15,  308 => 13,  303 => 94,  298 => 101,  294 => 46,  290 => 90,  275 => 86,  271 => 374,  263 => 365,  258 => 354,  253 => 78,  248 => 116,  244 => 140,  228 => 83,  214 => 63,  191 => 246,  186 => 47,  177 => 43,  175 => 45,  170 => 79,  153 => 72,  146 => 34,  128 => 47,  120 => 46,  118 => 46,  113 => 39,  110 => 63,  104 => 34,  97 => 56,  83 => 32,  81 => 20,  77 => 29,  65 => 27,  53 => 22,  608 => 225,  602 => 217,  597 => 342,  589 => 213,  585 => 216,  581 => 201,  572 => 144,  568 => 211,  565 => 324,  563 => 188,  558 => 190,  555 => 189,  551 => 205,  541 => 197,  537 => 176,  535 => 197,  530 => 193,  526 => 131,  521 => 182,  515 => 180,  512 => 84,  509 => 83,  507 => 190,  504 => 175,  502 => 180,  499 => 173,  496 => 172,  494 => 122,  491 => 157,  489 => 175,  486 => 286,  483 => 173,  481 => 119,  478 => 74,  476 => 116,  473 => 168,  470 => 167,  468 => 160,  463 => 113,  457 => 160,  454 => 156,  451 => 158,  449 => 138,  444 => 263,  438 => 150,  435 => 149,  432 => 100,  430 => 255,  425 => 146,  411 => 143,  406 => 140,  390 => 136,  382 => 135,  380 => 130,  377 => 129,  373 => 123,  366 => 125,  362 => 118,  353 => 115,  351 => 120,  339 => 191,  335 => 21,  329 => 117,  323 => 125,  318 => 114,  312 => 97,  306 => 95,  300 => 93,  295 => 100,  291 => 99,  285 => 3,  280 => 87,  276 => 393,  267 => 78,  250 => 341,  239 => 97,  229 => 91,  218 => 97,  212 => 76,  210 => 270,  205 => 90,  188 => 48,  184 => 48,  181 => 232,  169 => 62,  160 => 40,  152 => 61,  148 => 49,  139 => 59,  134 => 28,  114 => 111,  107 => 37,  76 => 18,  70 => 27,  273 => 85,  269 => 133,  254 => 147,  246 => 99,  243 => 73,  240 => 72,  238 => 312,  235 => 311,  230 => 106,  227 => 301,  224 => 103,  221 => 77,  219 => 101,  217 => 64,  208 => 124,  204 => 267,  179 => 44,  159 => 196,  143 => 33,  135 => 51,  131 => 160,  119 => 108,  108 => 42,  102 => 60,  71 => 23,  67 => 26,  63 => 20,  59 => 13,  47 => 22,  38 => 5,  94 => 30,  89 => 33,  85 => 31,  79 => 35,  75 => 29,  68 => 24,  56 => 25,  50 => 21,  29 => 3,  87 => 23,  72 => 28,  55 => 12,  21 => 11,  26 => 14,  98 => 31,  93 => 17,  88 => 37,  78 => 19,  46 => 8,  27 => 14,  40 => 17,  44 => 18,  35 => 17,  31 => 23,  43 => 7,  41 => 6,  28 => 22,  201 => 72,  196 => 52,  183 => 46,  171 => 44,  166 => 209,  163 => 58,  158 => 55,  156 => 38,  151 => 52,  142 => 30,  138 => 49,  136 => 58,  123 => 48,  121 => 24,  117 => 51,  115 => 45,  105 => 61,  101 => 40,  91 => 37,  69 => 16,  66 => 30,  62 => 14,  49 => 21,  24 => 1,  32 => 4,  25 => 12,  22 => 12,  19 => 11,  209 => 58,  203 => 55,  199 => 265,  193 => 51,  189 => 63,  187 => 64,  182 => 85,  176 => 58,  173 => 72,  168 => 43,  164 => 55,  162 => 41,  154 => 36,  149 => 62,  147 => 52,  144 => 48,  141 => 58,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 107,  112 => 105,  109 => 43,  106 => 104,  103 => 41,  99 => 41,  95 => 28,  92 => 27,  86 => 28,  82 => 36,  80 => 13,  73 => 17,  64 => 24,  60 => 18,  57 => 18,  54 => 16,  51 => 16,  48 => 15,  45 => 14,  42 => 19,  39 => 25,  36 => 4,  33 => 16,  30 => 2,);
    }
}

<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_e7af0fa8644304abfdfe9932ba6d8687d381a7cb29d56b923c60e6266597fbba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : null), "vars"), "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : null), 'widget');
    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : null), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : null), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : null), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  624 => 224,  620 => 223,  601 => 216,  580 => 207,  559 => 201,  545 => 198,  497 => 156,  485 => 124,  447 => 113,  424 => 91,  412 => 126,  401 => 89,  391 => 163,  379 => 154,  376 => 153,  333 => 132,  326 => 129,  292 => 91,  287 => 77,  264 => 74,  178 => 48,  12 => 36,  778 => 251,  763 => 244,  742 => 240,  734 => 237,  717 => 233,  714 => 232,  711 => 231,  703 => 226,  653 => 218,  650 => 217,  644 => 213,  616 => 207,  595 => 205,  587 => 203,  578 => 200,  573 => 198,  546 => 166,  534 => 162,  531 => 161,  513 => 179,  475 => 169,  448 => 153,  445 => 152,  429 => 148,  422 => 147,  396 => 138,  345 => 116,  307 => 82,  286 => 98,  247 => 75,  206 => 57,  90 => 39,  283 => 97,  236 => 109,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1106 => 316,  1103 => 315,  1100 => 314,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  865 => 213,  862 => 212,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  817 => 192,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  783 => 177,  769 => 247,  767 => 246,  764 => 169,  756 => 165,  751 => 163,  746 => 161,  739 => 239,  729 => 235,  724 => 154,  721 => 153,  715 => 151,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  694 => 138,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  640 => 211,  619 => 113,  617 => 112,  598 => 107,  576 => 199,  564 => 193,  557 => 96,  550 => 187,  547 => 93,  503 => 81,  493 => 155,  480 => 75,  456 => 68,  450 => 114,  414 => 144,  408 => 142,  368 => 126,  355 => 122,  350 => 26,  342 => 23,  332 => 20,  316 => 16,  255 => 353,  245 => 83,  194 => 52,  200 => 54,  180 => 49,  560 => 191,  549 => 182,  532 => 192,  528 => 160,  525 => 172,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  508 => 165,  501 => 163,  474 => 122,  460 => 143,  455 => 115,  442 => 151,  439 => 150,  436 => 132,  433 => 149,  426 => 58,  415 => 127,  405 => 141,  360 => 104,  354 => 142,  331 => 96,  322 => 93,  304 => 103,  272 => 91,  249 => 74,  233 => 304,  216 => 100,  140 => 51,  126 => 179,  192 => 53,  161 => 57,  320 => 87,  288 => 4,  237 => 71,  232 => 78,  222 => 66,  185 => 61,  150 => 34,  100 => 43,  692 => 399,  683 => 223,  678 => 133,  676 => 385,  666 => 222,  661 => 220,  656 => 219,  641 => 368,  635 => 226,  615 => 354,  590 => 204,  583 => 334,  577 => 206,  575 => 328,  536 => 194,  524 => 90,  510 => 178,  482 => 285,  464 => 71,  452 => 268,  423 => 57,  421 => 90,  413 => 241,  400 => 47,  393 => 168,  385 => 159,  374 => 128,  324 => 110,  310 => 83,  302 => 79,  296 => 167,  282 => 161,  278 => 95,  270 => 84,  259 => 87,  226 => 131,  365 => 141,  347 => 140,  338 => 113,  319 => 124,  315 => 98,  301 => 144,  299 => 8,  281 => 75,  268 => 373,  265 => 130,  262 => 81,  260 => 363,  257 => 103,  225 => 67,  213 => 69,  211 => 81,  197 => 90,  174 => 42,  127 => 52,  252 => 68,  242 => 82,  231 => 69,  207 => 58,  195 => 54,  165 => 77,  129 => 180,  84 => 32,  52 => 22,  167 => 56,  155 => 52,  145 => 54,  111 => 46,  23 => 11,  58 => 22,  37 => 23,  20 => 11,  1127 => 457,  1123 => 456,  1119 => 455,  1109 => 317,  1098 => 313,  1091 => 438,  1081 => 431,  1077 => 305,  1066 => 426,  1062 => 425,  1058 => 424,  1053 => 292,  1049 => 422,  1045 => 421,  1037 => 416,  1033 => 415,  1029 => 282,  1020 => 412,  1015 => 410,  1003 => 401,  999 => 400,  991 => 395,  981 => 393,  979 => 260,  976 => 259,  966 => 384,  962 => 383,  953 => 379,  942 => 371,  935 => 367,  925 => 360,  916 => 354,  909 => 350,  905 => 348,  894 => 226,  890 => 342,  883 => 338,  879 => 337,  873 => 217,  869 => 335,  860 => 211,  856 => 328,  852 => 327,  843 => 325,  838 => 323,  825 => 196,  821 => 312,  814 => 191,  804 => 306,  802 => 305,  799 => 304,  789 => 297,  785 => 178,  780 => 176,  774 => 290,  772 => 248,  762 => 286,  753 => 164,  748 => 242,  741 => 274,  728 => 267,  716 => 258,  712 => 150,  706 => 254,  700 => 225,  696 => 140,  688 => 249,  684 => 248,  681 => 247,  664 => 239,  655 => 236,  651 => 235,  647 => 234,  643 => 120,  637 => 230,  632 => 228,  627 => 227,  625 => 361,  622 => 225,  614 => 111,  610 => 219,  607 => 218,  594 => 212,  584 => 202,  582 => 211,  566 => 203,  561 => 205,  556 => 204,  553 => 188,  548 => 313,  540 => 164,  527 => 91,  522 => 195,  520 => 194,  516 => 294,  495 => 158,  487 => 156,  466 => 168,  461 => 70,  453 => 161,  441 => 152,  428 => 59,  417 => 145,  407 => 238,  403 => 48,  398 => 88,  389 => 133,  387 => 110,  384 => 109,  375 => 124,  369 => 148,  359 => 144,  357 => 116,  346 => 111,  343 => 115,  341 => 131,  337 => 22,  327 => 102,  314 => 88,  311 => 14,  309 => 148,  305 => 115,  293 => 6,  289 => 140,  284 => 76,  279 => 104,  277 => 136,  274 => 135,  266 => 366,  261 => 73,  256 => 79,  251 => 101,  220 => 65,  215 => 280,  202 => 55,  198 => 55,  190 => 49,  157 => 56,  137 => 29,  132 => 42,  124 => 51,  96 => 18,  74 => 29,  61 => 27,  34 => 15,  784 => 215,  775 => 213,  760 => 243,  749 => 162,  745 => 241,  736 => 238,  732 => 204,  727 => 203,  725 => 197,  723 => 196,  720 => 195,  713 => 191,  709 => 190,  705 => 189,  702 => 188,  695 => 139,  686 => 181,  682 => 180,  677 => 179,  674 => 178,  672 => 241,  668 => 240,  660 => 238,  652 => 376,  648 => 173,  645 => 369,  638 => 210,  633 => 209,  631 => 364,  628 => 165,  623 => 161,  618 => 160,  612 => 220,  599 => 215,  596 => 106,  593 => 105,  591 => 151,  586 => 150,  579 => 332,  574 => 205,  569 => 325,  562 => 139,  552 => 136,  543 => 179,  533 => 133,  529 => 191,  519 => 127,  500 => 291,  490 => 154,  471 => 115,  467 => 72,  459 => 116,  440 => 106,  437 => 61,  434 => 256,  427 => 99,  420 => 146,  410 => 113,  404 => 90,  402 => 140,  399 => 139,  392 => 82,  388 => 42,  383 => 80,  381 => 157,  378 => 78,  371 => 35,  363 => 32,  361 => 124,  358 => 123,  348 => 118,  344 => 24,  340 => 136,  330 => 103,  325 => 94,  321 => 100,  317 => 107,  313 => 84,  308 => 13,  303 => 94,  298 => 101,  294 => 46,  290 => 90,  275 => 86,  271 => 374,  263 => 365,  258 => 72,  253 => 78,  248 => 116,  244 => 140,  228 => 83,  214 => 63,  191 => 246,  186 => 51,  177 => 43,  175 => 47,  170 => 79,  153 => 72,  146 => 34,  128 => 47,  120 => 176,  118 => 46,  113 => 39,  110 => 172,  104 => 34,  97 => 56,  83 => 37,  81 => 20,  77 => 32,  65 => 27,  53 => 27,  608 => 225,  602 => 217,  597 => 342,  589 => 213,  585 => 209,  581 => 201,  572 => 204,  568 => 211,  565 => 324,  563 => 202,  558 => 190,  555 => 200,  551 => 199,  541 => 197,  537 => 176,  535 => 197,  530 => 193,  526 => 190,  521 => 182,  515 => 180,  512 => 84,  509 => 83,  507 => 165,  504 => 164,  502 => 180,  499 => 173,  496 => 172,  494 => 122,  491 => 157,  489 => 175,  486 => 286,  483 => 173,  481 => 119,  478 => 74,  476 => 116,  473 => 168,  470 => 121,  468 => 160,  463 => 117,  457 => 160,  454 => 156,  451 => 158,  449 => 138,  444 => 263,  438 => 150,  435 => 149,  432 => 100,  430 => 255,  425 => 146,  411 => 143,  406 => 111,  390 => 136,  382 => 135,  380 => 130,  377 => 129,  373 => 123,  366 => 125,  362 => 118,  353 => 115,  351 => 141,  339 => 191,  335 => 133,  329 => 130,  323 => 88,  318 => 86,  312 => 97,  306 => 95,  300 => 93,  295 => 100,  291 => 99,  285 => 3,  280 => 87,  276 => 393,  267 => 78,  250 => 341,  239 => 64,  229 => 91,  218 => 97,  212 => 60,  210 => 59,  205 => 90,  188 => 48,  184 => 48,  181 => 232,  169 => 44,  160 => 39,  152 => 36,  148 => 49,  139 => 59,  134 => 182,  114 => 174,  107 => 38,  76 => 35,  70 => 29,  273 => 85,  269 => 133,  254 => 147,  246 => 67,  243 => 66,  240 => 72,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 61,  221 => 77,  219 => 101,  217 => 64,  208 => 124,  204 => 57,  179 => 44,  159 => 196,  143 => 33,  135 => 51,  131 => 181,  119 => 108,  108 => 171,  102 => 37,  71 => 30,  67 => 30,  63 => 17,  59 => 25,  47 => 25,  38 => 21,  94 => 41,  89 => 39,  85 => 32,  79 => 35,  75 => 21,  68 => 28,  56 => 23,  50 => 23,  29 => 15,  87 => 38,  72 => 29,  55 => 23,  21 => 11,  26 => 13,  98 => 41,  93 => 35,  88 => 37,  78 => 35,  46 => 20,  27 => 14,  40 => 17,  44 => 18,  35 => 20,  31 => 15,  43 => 26,  41 => 25,  28 => 14,  201 => 56,  196 => 52,  183 => 50,  171 => 44,  166 => 209,  163 => 40,  158 => 55,  156 => 38,  151 => 52,  142 => 30,  138 => 49,  136 => 58,  123 => 48,  121 => 50,  117 => 175,  115 => 47,  105 => 45,  101 => 43,  91 => 37,  69 => 19,  66 => 17,  62 => 24,  49 => 22,  24 => 12,  32 => 14,  25 => 13,  22 => 11,  19 => 11,  209 => 58,  203 => 55,  199 => 265,  193 => 51,  189 => 52,  187 => 64,  182 => 85,  176 => 58,  173 => 46,  168 => 43,  164 => 55,  162 => 41,  154 => 36,  149 => 35,  147 => 52,  144 => 26,  141 => 58,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 48,  112 => 105,  109 => 46,  106 => 104,  103 => 43,  99 => 23,  95 => 41,  92 => 38,  86 => 35,  82 => 34,  80 => 25,  73 => 33,  64 => 19,  60 => 16,  57 => 15,  54 => 23,  51 => 14,  48 => 21,  45 => 20,  42 => 19,  39 => 21,  36 => 16,  33 => 16,  30 => 13,);
    }
}

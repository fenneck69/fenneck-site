<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_950dc65f14fe64fa67479c901a9bfdb960053400beb1a409726b0568eaa1abd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Group:new_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  58 => 9,  20 => 1,  1127 => 457,  1123 => 456,  1119 => 455,  1109 => 450,  1098 => 442,  1091 => 438,  1081 => 431,  1077 => 429,  1066 => 426,  1062 => 425,  1058 => 424,  1053 => 423,  1049 => 422,  1045 => 421,  1037 => 416,  1033 => 415,  1029 => 414,  1020 => 412,  1015 => 410,  1003 => 401,  999 => 400,  991 => 395,  981 => 393,  979 => 392,  976 => 391,  966 => 384,  962 => 383,  953 => 379,  942 => 371,  935 => 367,  925 => 360,  916 => 354,  909 => 350,  905 => 348,  894 => 343,  890 => 342,  883 => 338,  879 => 337,  873 => 336,  869 => 335,  860 => 329,  856 => 328,  852 => 327,  843 => 325,  838 => 323,  825 => 313,  821 => 312,  814 => 308,  804 => 306,  802 => 305,  799 => 304,  789 => 297,  785 => 296,  780 => 294,  774 => 290,  772 => 289,  762 => 286,  753 => 280,  748 => 278,  741 => 274,  728 => 267,  716 => 258,  712 => 257,  706 => 254,  700 => 251,  696 => 250,  688 => 249,  684 => 248,  681 => 247,  664 => 239,  655 => 236,  651 => 235,  647 => 234,  643 => 233,  637 => 230,  632 => 228,  627 => 227,  625 => 226,  622 => 225,  614 => 220,  610 => 219,  607 => 218,  594 => 215,  584 => 212,  582 => 211,  566 => 207,  561 => 205,  556 => 204,  553 => 203,  548 => 201,  540 => 199,  527 => 196,  522 => 195,  520 => 194,  516 => 193,  495 => 183,  487 => 180,  466 => 168,  461 => 166,  453 => 161,  441 => 152,  428 => 147,  417 => 141,  407 => 137,  403 => 136,  398 => 134,  389 => 133,  387 => 132,  384 => 131,  375 => 124,  369 => 122,  359 => 117,  357 => 116,  346 => 111,  343 => 110,  341 => 109,  337 => 108,  327 => 103,  314 => 97,  311 => 96,  309 => 95,  305 => 94,  293 => 88,  289 => 87,  284 => 85,  279 => 84,  277 => 83,  274 => 82,  266 => 77,  261 => 76,  256 => 74,  251 => 73,  220 => 65,  215 => 63,  202 => 55,  198 => 54,  190 => 49,  137 => 28,  132 => 26,  124 => 21,  61 => 246,  34 => 62,  784 => 215,  775 => 213,  760 => 210,  749 => 207,  745 => 206,  736 => 272,  732 => 204,  727 => 203,  725 => 197,  723 => 196,  720 => 195,  713 => 191,  709 => 190,  705 => 189,  702 => 188,  695 => 183,  686 => 181,  682 => 180,  677 => 179,  674 => 178,  672 => 241,  668 => 240,  660 => 238,  652 => 174,  648 => 173,  645 => 172,  638 => 168,  633 => 167,  631 => 166,  628 => 165,  623 => 161,  618 => 160,  612 => 159,  599 => 158,  596 => 157,  593 => 152,  591 => 151,  586 => 150,  579 => 210,  574 => 209,  569 => 208,  562 => 139,  552 => 136,  543 => 200,  533 => 133,  529 => 132,  519 => 127,  500 => 123,  490 => 121,  471 => 115,  467 => 114,  459 => 112,  440 => 106,  437 => 151,  434 => 101,  427 => 99,  420 => 95,  410 => 90,  404 => 88,  402 => 87,  399 => 86,  392 => 82,  388 => 81,  383 => 80,  381 => 79,  378 => 78,  371 => 74,  363 => 68,  361 => 67,  358 => 66,  348 => 62,  344 => 61,  340 => 60,  330 => 104,  325 => 102,  321 => 101,  317 => 53,  313 => 52,  308 => 51,  303 => 48,  298 => 90,  294 => 46,  290 => 45,  275 => 40,  271 => 39,  263 => 37,  258 => 36,  253 => 33,  248 => 72,  244 => 31,  228 => 67,  214 => 20,  191 => 13,  186 => 48,  177 => 46,  175 => 9,  170 => 8,  153 => 1,  146 => 194,  128 => 150,  118 => 131,  113 => 119,  110 => 118,  104 => 109,  97 => 86,  81 => 14,  77 => 12,  65 => 42,  53 => 27,  608 => 225,  602 => 217,  597 => 216,  589 => 213,  585 => 216,  581 => 214,  572 => 144,  568 => 211,  565 => 210,  563 => 209,  558 => 137,  555 => 206,  551 => 205,  541 => 197,  537 => 134,  535 => 197,  530 => 193,  526 => 131,  521 => 189,  515 => 125,  512 => 192,  509 => 191,  507 => 190,  504 => 189,  502 => 180,  499 => 179,  496 => 178,  494 => 122,  491 => 176,  489 => 175,  486 => 120,  483 => 173,  481 => 119,  478 => 174,  476 => 116,  473 => 172,  470 => 168,  468 => 167,  463 => 113,  457 => 160,  454 => 111,  451 => 158,  449 => 108,  444 => 107,  438 => 150,  435 => 149,  432 => 100,  430 => 148,  425 => 146,  411 => 138,  406 => 140,  390 => 137,  382 => 135,  380 => 134,  377 => 133,  373 => 123,  366 => 73,  362 => 118,  353 => 115,  351 => 124,  339 => 121,  335 => 59,  329 => 117,  323 => 116,  318 => 114,  312 => 113,  306 => 110,  300 => 109,  295 => 89,  291 => 106,  285 => 44,  280 => 41,  276 => 102,  267 => 38,  250 => 100,  239 => 95,  229 => 91,  218 => 82,  212 => 62,  210 => 77,  205 => 76,  188 => 75,  184 => 73,  181 => 72,  169 => 66,  160 => 59,  152 => 54,  148 => 53,  134 => 165,  114 => 37,  107 => 33,  76 => 18,  70 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 70,  240 => 30,  238 => 85,  235 => 69,  230 => 68,  227 => 81,  224 => 66,  221 => 77,  219 => 22,  217 => 64,  208 => 73,  204 => 16,  179 => 69,  159 => 61,  143 => 55,  135 => 53,  119 => 42,  102 => 8,  71 => 390,  67 => 17,  63 => 36,  59 => 225,  38 => 6,  94 => 85,  89 => 77,  85 => 16,  75 => 11,  68 => 14,  56 => 224,  87 => 66,  21 => 5,  26 => 2,  93 => 9,  88 => 17,  78 => 1,  46 => 145,  27 => 4,  44 => 131,  31 => 4,  28 => 3,  201 => 15,  196 => 90,  183 => 82,  171 => 43,  166 => 61,  163 => 4,  158 => 3,  156 => 2,  151 => 63,  142 => 49,  138 => 54,  136 => 171,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 146,  24 => 6,  25 => 4,  19 => 1,  79 => 18,  72 => 16,  69 => 304,  47 => 18,  40 => 13,  37 => 6,  22 => 2,  246 => 99,  157 => 39,  145 => 46,  139 => 172,  131 => 44,  123 => 143,  120 => 142,  115 => 130,  111 => 38,  108 => 11,  101 => 30,  98 => 40,  96 => 5,  83 => 3,  74 => 391,  66 => 303,  55 => 8,  52 => 21,  50 => 10,  43 => 8,  41 => 130,  35 => 5,  32 => 3,  29 => 2,  209 => 17,  203 => 78,  199 => 71,  193 => 73,  189 => 71,  187 => 84,  182 => 11,  176 => 64,  173 => 44,  168 => 72,  164 => 58,  162 => 41,  154 => 58,  149 => 34,  147 => 50,  144 => 32,  141 => 187,  133 => 55,  130 => 163,  125 => 149,  122 => 37,  116 => 41,  112 => 12,  109 => 34,  106 => 36,  103 => 31,  99 => 98,  95 => 28,  92 => 4,  86 => 28,  82 => 22,  80 => 20,  73 => 17,  64 => 247,  60 => 6,  57 => 29,  54 => 189,  51 => 188,  48 => 13,  45 => 8,  42 => 7,  39 => 82,  36 => 81,  33 => 4,  30 => 3,);
    }
}

<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig */
class __TwigTemplate_468253a9849e227042797ce461bab2e7306962c6a89d044f0027c1d52f110c0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <ul class=\"sonata-ba-show-one-to-many\">
    ";
        // line 16
        if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "EDIT"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 22
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        // line 25
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 187,  549 => 182,  532 => 174,  528 => 173,  525 => 172,  523 => 171,  518 => 170,  514 => 168,  511 => 167,  508 => 165,  501 => 161,  474 => 150,  460 => 143,  455 => 141,  442 => 134,  439 => 133,  436 => 132,  433 => 130,  426 => 126,  415 => 121,  405 => 118,  360 => 104,  354 => 101,  331 => 96,  322 => 93,  304 => 85,  272 => 81,  249 => 74,  233 => 71,  216 => 70,  140 => 47,  126 => 42,  192 => 85,  161 => 54,  320 => 92,  288 => 107,  237 => 86,  232 => 84,  222 => 81,  185 => 68,  150 => 65,  100 => 36,  692 => 399,  683 => 393,  678 => 390,  676 => 385,  666 => 382,  661 => 380,  656 => 378,  641 => 368,  635 => 365,  615 => 354,  590 => 338,  583 => 334,  577 => 329,  575 => 328,  536 => 306,  524 => 297,  510 => 293,  482 => 285,  464 => 275,  452 => 268,  423 => 250,  421 => 244,  413 => 241,  400 => 116,  393 => 112,  385 => 225,  374 => 217,  324 => 179,  310 => 171,  302 => 168,  296 => 167,  282 => 161,  278 => 160,  270 => 157,  259 => 149,  226 => 131,  365 => 141,  347 => 134,  338 => 130,  319 => 124,  315 => 120,  301 => 117,  299 => 112,  281 => 105,  268 => 107,  265 => 99,  262 => 105,  260 => 98,  257 => 103,  225 => 87,  213 => 69,  211 => 81,  197 => 70,  174 => 59,  252 => 3,  242 => 101,  231 => 133,  207 => 91,  195 => 84,  165 => 72,  129 => 57,  84 => 39,  167 => 57,  155 => 52,  127 => 32,  23 => 18,  58 => 23,  20 => 11,  1127 => 457,  1123 => 456,  1119 => 455,  1109 => 450,  1098 => 442,  1091 => 438,  1081 => 431,  1077 => 429,  1066 => 426,  1062 => 425,  1058 => 424,  1053 => 423,  1049 => 422,  1045 => 421,  1037 => 416,  1033 => 415,  1029 => 414,  1020 => 412,  1015 => 410,  1003 => 401,  999 => 400,  991 => 395,  981 => 393,  979 => 392,  976 => 391,  966 => 384,  962 => 383,  953 => 379,  942 => 371,  935 => 367,  925 => 360,  916 => 354,  909 => 350,  905 => 348,  894 => 343,  890 => 342,  883 => 338,  879 => 337,  873 => 336,  869 => 335,  860 => 329,  856 => 328,  852 => 327,  843 => 325,  838 => 323,  825 => 313,  821 => 312,  814 => 308,  804 => 306,  802 => 305,  799 => 304,  789 => 297,  785 => 296,  780 => 294,  774 => 290,  772 => 289,  762 => 286,  753 => 280,  748 => 278,  741 => 274,  728 => 267,  716 => 258,  712 => 257,  706 => 254,  700 => 251,  696 => 250,  688 => 249,  684 => 248,  681 => 247,  664 => 239,  655 => 236,  651 => 235,  647 => 234,  643 => 233,  637 => 230,  632 => 228,  627 => 227,  625 => 361,  622 => 225,  614 => 220,  610 => 219,  607 => 349,  594 => 215,  584 => 212,  582 => 211,  566 => 207,  561 => 205,  556 => 204,  553 => 184,  548 => 313,  540 => 308,  527 => 196,  522 => 195,  520 => 194,  516 => 294,  495 => 158,  487 => 156,  466 => 168,  461 => 166,  453 => 161,  441 => 152,  428 => 147,  417 => 243,  407 => 238,  403 => 117,  398 => 115,  389 => 133,  387 => 110,  384 => 109,  375 => 124,  369 => 122,  359 => 117,  357 => 116,  346 => 111,  343 => 132,  341 => 131,  337 => 97,  327 => 126,  314 => 88,  311 => 87,  309 => 117,  305 => 115,  293 => 109,  289 => 82,  284 => 106,  279 => 104,  277 => 109,  274 => 82,  266 => 77,  261 => 76,  256 => 96,  251 => 101,  220 => 80,  215 => 78,  202 => 77,  198 => 54,  190 => 49,  137 => 46,  132 => 58,  124 => 31,  61 => 25,  34 => 16,  784 => 215,  775 => 213,  760 => 210,  749 => 207,  745 => 206,  736 => 272,  732 => 204,  727 => 203,  725 => 197,  723 => 196,  720 => 195,  713 => 191,  709 => 190,  705 => 189,  702 => 188,  695 => 183,  686 => 181,  682 => 180,  677 => 179,  674 => 178,  672 => 241,  668 => 240,  660 => 238,  652 => 376,  648 => 173,  645 => 369,  638 => 168,  633 => 167,  631 => 364,  628 => 165,  623 => 161,  618 => 160,  612 => 159,  599 => 158,  596 => 157,  593 => 152,  591 => 151,  586 => 150,  579 => 332,  574 => 209,  569 => 325,  562 => 139,  552 => 136,  543 => 179,  533 => 133,  529 => 299,  519 => 127,  500 => 291,  490 => 287,  471 => 115,  467 => 114,  459 => 273,  440 => 106,  437 => 151,  434 => 256,  427 => 99,  420 => 123,  410 => 90,  404 => 88,  402 => 237,  399 => 86,  392 => 82,  388 => 81,  383 => 80,  381 => 79,  378 => 78,  371 => 74,  363 => 68,  361 => 207,  358 => 103,  348 => 62,  344 => 193,  340 => 60,  330 => 104,  325 => 94,  321 => 101,  317 => 91,  313 => 52,  308 => 86,  303 => 48,  298 => 90,  294 => 46,  290 => 45,  275 => 103,  271 => 108,  263 => 4,  258 => 36,  253 => 95,  248 => 100,  244 => 140,  228 => 83,  214 => 20,  191 => 69,  186 => 82,  177 => 46,  175 => 77,  170 => 74,  153 => 56,  146 => 49,  128 => 47,  118 => 131,  113 => 41,  110 => 48,  104 => 67,  97 => 63,  81 => 25,  77 => 58,  65 => 30,  53 => 10,  608 => 225,  602 => 217,  597 => 342,  589 => 213,  585 => 216,  581 => 214,  572 => 144,  568 => 211,  565 => 324,  563 => 188,  558 => 186,  555 => 185,  551 => 205,  541 => 197,  537 => 176,  535 => 197,  530 => 193,  526 => 131,  521 => 189,  515 => 125,  512 => 192,  509 => 191,  507 => 190,  504 => 292,  502 => 180,  499 => 179,  496 => 178,  494 => 122,  491 => 157,  489 => 175,  486 => 286,  483 => 173,  481 => 119,  478 => 174,  476 => 116,  473 => 172,  470 => 278,  468 => 167,  463 => 113,  457 => 160,  454 => 111,  451 => 158,  449 => 138,  444 => 263,  438 => 150,  435 => 149,  432 => 100,  430 => 255,  425 => 146,  411 => 120,  406 => 140,  390 => 137,  382 => 135,  380 => 107,  377 => 133,  373 => 123,  366 => 106,  362 => 118,  353 => 115,  351 => 135,  339 => 191,  335 => 59,  329 => 117,  323 => 125,  318 => 114,  312 => 113,  306 => 110,  300 => 109,  295 => 89,  291 => 106,  285 => 111,  280 => 41,  276 => 102,  267 => 78,  250 => 93,  239 => 97,  229 => 91,  218 => 97,  212 => 62,  210 => 75,  205 => 90,  188 => 83,  184 => 73,  181 => 61,  169 => 74,  160 => 70,  152 => 51,  148 => 64,  134 => 59,  114 => 71,  107 => 52,  76 => 80,  70 => 16,  273 => 96,  269 => 100,  254 => 147,  243 => 89,  240 => 72,  238 => 85,  235 => 69,  230 => 68,  227 => 81,  224 => 66,  221 => 77,  219 => 84,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 59,  135 => 35,  119 => 28,  102 => 38,  71 => 28,  67 => 27,  63 => 24,  59 => 23,  38 => 17,  94 => 69,  89 => 40,  85 => 34,  75 => 28,  68 => 31,  56 => 24,  87 => 33,  21 => 11,  26 => 14,  93 => 34,  88 => 60,  78 => 29,  46 => 35,  27 => 13,  44 => 19,  31 => 15,  28 => 14,  201 => 72,  196 => 68,  183 => 78,  171 => 63,  166 => 100,  163 => 4,  158 => 53,  156 => 68,  151 => 61,  142 => 61,  138 => 36,  136 => 171,  121 => 53,  117 => 51,  105 => 27,  91 => 34,  62 => 29,  49 => 21,  24 => 12,  25 => 12,  19 => 11,  79 => 37,  72 => 25,  69 => 24,  47 => 19,  40 => 13,  37 => 17,  22 => 12,  246 => 99,  157 => 39,  145 => 52,  139 => 60,  131 => 48,  123 => 54,  120 => 42,  115 => 50,  111 => 78,  108 => 48,  101 => 49,  98 => 44,  96 => 37,  83 => 3,  74 => 34,  66 => 25,  55 => 21,  52 => 20,  50 => 20,  43 => 19,  41 => 18,  35 => 17,  32 => 16,  29 => 15,  209 => 92,  203 => 122,  199 => 86,  193 => 83,  189 => 65,  187 => 84,  182 => 80,  176 => 77,  173 => 72,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 60,  147 => 90,  144 => 62,  141 => 55,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  116 => 42,  112 => 49,  109 => 40,  106 => 36,  103 => 46,  99 => 26,  95 => 43,  92 => 61,  86 => 37,  82 => 33,  80 => 33,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 21,  48 => 40,  45 => 19,  42 => 7,  39 => 17,  36 => 17,  33 => 6,  30 => 15,);
    }
}

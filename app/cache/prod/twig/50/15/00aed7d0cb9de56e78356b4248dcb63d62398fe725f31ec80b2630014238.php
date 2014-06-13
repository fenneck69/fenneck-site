<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_501500aed7d0cb9de56e78356b4248dcb63d62398fe725f31ec80b2630014238 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu.html.twig");

        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        // line 15
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 16
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren"))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        // line 24
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 25
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed")) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current")) {
                // line 29
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass")));
            } elseif ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "currentAncestor")) {
                // line 31
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass")));
            }
            // line 33
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst")) {
                // line 34
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass")));
            }
            // line 36
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast")) {
                // line 37
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass")));
            }
            // line 39
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes");
            // line 40
            if ((!twig_test_empty((isset($context["classes"]) ? $context["classes"] : null)))) {
                // line 41
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"))) && ((!$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current")) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink")))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level"))));
            // line 52
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes"), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes")), (isset($context["attributes"]) ? $context["attributes"] : null))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<div";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes")), (isset($context["attributes"]) ? $context["attributes"] : null))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 59,  84 => 40,  52 => 23,  167 => 75,  155 => 68,  145 => 48,  111 => 39,  23 => 3,  58 => 9,  37 => 18,  20 => 11,  1127 => 457,  1123 => 456,  1119 => 455,  1109 => 450,  1098 => 442,  1091 => 438,  1081 => 431,  1077 => 429,  1066 => 426,  1062 => 425,  1058 => 424,  1053 => 423,  1049 => 422,  1045 => 421,  1037 => 416,  1033 => 415,  1029 => 414,  1020 => 412,  1015 => 410,  1003 => 401,  999 => 400,  991 => 395,  981 => 393,  979 => 392,  976 => 391,  966 => 384,  962 => 383,  953 => 379,  942 => 371,  935 => 367,  925 => 360,  916 => 354,  909 => 350,  905 => 348,  894 => 343,  890 => 342,  883 => 338,  879 => 337,  873 => 336,  869 => 335,  860 => 329,  856 => 328,  852 => 327,  843 => 325,  838 => 323,  825 => 313,  821 => 312,  814 => 308,  804 => 306,  802 => 305,  799 => 304,  789 => 297,  785 => 296,  780 => 294,  774 => 290,  772 => 289,  762 => 286,  753 => 280,  748 => 278,  741 => 274,  728 => 267,  716 => 258,  712 => 257,  706 => 254,  700 => 251,  696 => 250,  688 => 249,  684 => 248,  681 => 247,  664 => 239,  655 => 236,  651 => 235,  647 => 234,  643 => 233,  637 => 230,  632 => 228,  627 => 227,  625 => 226,  622 => 225,  614 => 220,  610 => 219,  607 => 218,  594 => 215,  584 => 212,  582 => 211,  566 => 207,  561 => 205,  556 => 204,  553 => 203,  548 => 201,  540 => 199,  527 => 196,  522 => 195,  520 => 194,  516 => 193,  495 => 183,  487 => 180,  466 => 168,  461 => 166,  453 => 161,  441 => 152,  428 => 147,  417 => 141,  407 => 137,  403 => 136,  398 => 134,  389 => 133,  387 => 132,  384 => 131,  375 => 124,  369 => 122,  359 => 117,  357 => 116,  346 => 111,  343 => 110,  341 => 109,  337 => 108,  327 => 103,  314 => 97,  311 => 96,  309 => 95,  305 => 94,  293 => 88,  289 => 87,  284 => 85,  279 => 84,  277 => 83,  274 => 82,  266 => 77,  261 => 76,  256 => 74,  251 => 73,  220 => 65,  215 => 63,  202 => 55,  198 => 54,  190 => 49,  157 => 39,  137 => 28,  132 => 44,  124 => 43,  96 => 5,  74 => 34,  61 => 21,  34 => 15,  784 => 215,  775 => 213,  760 => 210,  749 => 207,  745 => 206,  736 => 272,  732 => 204,  727 => 203,  725 => 197,  723 => 196,  720 => 195,  713 => 191,  709 => 190,  705 => 189,  702 => 188,  695 => 183,  686 => 181,  682 => 180,  677 => 179,  674 => 178,  672 => 241,  668 => 240,  660 => 238,  652 => 174,  648 => 173,  645 => 172,  638 => 168,  633 => 167,  631 => 166,  628 => 165,  623 => 161,  618 => 160,  612 => 159,  599 => 158,  596 => 157,  593 => 152,  591 => 151,  586 => 150,  579 => 210,  574 => 209,  569 => 208,  562 => 139,  552 => 136,  543 => 200,  533 => 133,  529 => 132,  519 => 127,  500 => 123,  490 => 121,  471 => 115,  467 => 114,  459 => 112,  440 => 106,  437 => 151,  434 => 101,  427 => 99,  420 => 95,  410 => 90,  404 => 88,  402 => 87,  399 => 86,  392 => 82,  388 => 81,  383 => 80,  381 => 79,  378 => 78,  371 => 74,  363 => 68,  361 => 67,  358 => 66,  348 => 62,  344 => 61,  340 => 60,  330 => 104,  325 => 102,  321 => 101,  317 => 53,  313 => 52,  308 => 51,  303 => 48,  298 => 90,  294 => 46,  290 => 45,  275 => 40,  271 => 39,  263 => 37,  258 => 36,  253 => 33,  248 => 72,  244 => 31,  228 => 67,  214 => 20,  191 => 13,  186 => 48,  177 => 46,  175 => 9,  170 => 8,  153 => 1,  146 => 194,  128 => 150,  120 => 42,  118 => 131,  113 => 119,  110 => 118,  104 => 109,  97 => 47,  83 => 30,  81 => 14,  77 => 36,  65 => 42,  53 => 23,  608 => 225,  602 => 217,  597 => 216,  589 => 213,  585 => 216,  581 => 214,  572 => 144,  568 => 211,  565 => 210,  563 => 209,  558 => 137,  555 => 206,  551 => 205,  541 => 197,  537 => 134,  535 => 197,  530 => 193,  526 => 131,  521 => 189,  515 => 125,  512 => 192,  509 => 191,  507 => 190,  504 => 189,  502 => 180,  499 => 179,  496 => 178,  494 => 122,  491 => 176,  489 => 175,  486 => 120,  483 => 173,  481 => 119,  478 => 174,  476 => 116,  473 => 172,  470 => 168,  468 => 167,  463 => 113,  457 => 160,  454 => 111,  451 => 158,  449 => 108,  444 => 107,  438 => 150,  435 => 149,  432 => 100,  430 => 148,  425 => 146,  411 => 138,  406 => 140,  390 => 137,  382 => 135,  380 => 134,  377 => 133,  373 => 123,  366 => 73,  362 => 118,  353 => 115,  351 => 124,  339 => 121,  335 => 59,  329 => 117,  323 => 116,  318 => 114,  312 => 113,  306 => 110,  300 => 109,  295 => 89,  291 => 106,  285 => 44,  280 => 41,  276 => 102,  267 => 38,  250 => 100,  239 => 95,  229 => 91,  218 => 82,  212 => 62,  210 => 77,  205 => 76,  188 => 75,  184 => 73,  181 => 72,  169 => 66,  160 => 59,  152 => 54,  148 => 53,  139 => 46,  134 => 165,  114 => 39,  107 => 52,  76 => 80,  70 => 26,  273 => 96,  269 => 94,  254 => 92,  246 => 99,  243 => 70,  240 => 30,  238 => 85,  235 => 69,  230 => 68,  227 => 81,  224 => 66,  221 => 77,  219 => 22,  217 => 64,  208 => 73,  204 => 16,  179 => 86,  159 => 61,  143 => 55,  135 => 53,  131 => 44,  119 => 42,  108 => 11,  102 => 36,  71 => 31,  67 => 25,  63 => 13,  59 => 24,  47 => 88,  38 => 6,  94 => 30,  89 => 43,  85 => 27,  79 => 37,  75 => 17,  68 => 14,  56 => 23,  50 => 22,  29 => 15,  87 => 66,  72 => 33,  55 => 24,  21 => 5,  26 => 14,  98 => 24,  93 => 45,  88 => 28,  78 => 1,  46 => 32,  27 => 13,  40 => 19,  44 => 18,  35 => 15,  31 => 14,  43 => 8,  41 => 18,  28 => 3,  201 => 15,  196 => 90,  183 => 82,  171 => 43,  166 => 61,  163 => 4,  158 => 3,  156 => 2,  151 => 49,  142 => 49,  138 => 54,  136 => 45,  123 => 143,  121 => 42,  117 => 57,  115 => 130,  105 => 51,  101 => 49,  91 => 44,  69 => 31,  66 => 29,  62 => 27,  49 => 146,  24 => 6,  32 => 16,  25 => 12,  22 => 1,  19 => 1,  209 => 17,  203 => 78,  199 => 71,  193 => 73,  189 => 71,  187 => 84,  182 => 87,  176 => 85,  173 => 44,  168 => 72,  164 => 60,  162 => 41,  154 => 58,  149 => 34,  147 => 50,  144 => 60,  141 => 187,  133 => 55,  130 => 49,  125 => 149,  122 => 37,  116 => 41,  112 => 12,  109 => 53,  106 => 33,  103 => 50,  99 => 98,  95 => 34,  92 => 4,  86 => 41,  82 => 39,  80 => 20,  73 => 17,  64 => 28,  60 => 26,  57 => 25,  54 => 189,  51 => 22,  48 => 21,  45 => 20,  42 => 18,  39 => 17,  36 => 16,  33 => 6,  30 => 1,);
    }
}

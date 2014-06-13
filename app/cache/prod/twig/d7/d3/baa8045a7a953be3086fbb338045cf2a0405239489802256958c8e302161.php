<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig */
class __TwigTemplate_d7d3baa8045a7a953be3086fbb338045cf2a0405239489802256958c8e302161 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if ((!$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "hasassociationadmin"))) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : null), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "formfielddescriptions"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "name"), array(), "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "value")), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "uniqid"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "link_parameters"))), array());
                    // line 29
                    echo "                ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "placeholder"))) {
                    // line 30
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "placeholder"), array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 34
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 36
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 39
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" >
                ";
                // line 40
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
            </span>
        ";
            }
            // line 43
            echo "
        <span id=\"field_actions_";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
            // line 46
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : null))) {
                // line 47
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                // line 48
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-info btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "\"
                        >
                        <i class=\"fa fa-list\"></i>
                        ";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 56
            echo "
                ";
            // line 57
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasRoute", array(0 => "create"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : null))) {
                // line 58
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                // line 59
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-success btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 67
            echo "            </span>

            <span class=\"btn-group\">
                ";
            // line 70
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : null))) {
                // line 71
                echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
                // line 72
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-danger btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "\"
                        >
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 80
            echo "            </span>
        </span>

        ";
            // line 83
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig")->display($context);
            // line 84
            echo "    </div>

    ";
            // line 86
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 86,  161 => 71,  320 => 122,  288 => 107,  237 => 86,  232 => 84,  222 => 81,  185 => 68,  150 => 55,  100 => 36,  692 => 399,  683 => 393,  678 => 390,  676 => 385,  666 => 382,  661 => 380,  656 => 378,  641 => 368,  635 => 365,  615 => 354,  590 => 338,  583 => 334,  577 => 329,  575 => 328,  536 => 306,  524 => 297,  510 => 293,  482 => 285,  464 => 275,  452 => 268,  423 => 250,  421 => 244,  413 => 241,  400 => 233,  393 => 230,  385 => 225,  374 => 217,  324 => 179,  310 => 171,  302 => 168,  296 => 167,  282 => 161,  278 => 160,  270 => 157,  259 => 149,  226 => 131,  365 => 141,  347 => 134,  338 => 130,  319 => 124,  315 => 120,  301 => 117,  299 => 112,  281 => 105,  268 => 107,  265 => 99,  262 => 105,  260 => 98,  257 => 103,  225 => 87,  213 => 82,  211 => 81,  197 => 70,  174 => 64,  127 => 56,  252 => 3,  242 => 101,  231 => 133,  207 => 91,  195 => 84,  165 => 59,  129 => 59,  84 => 39,  52 => 21,  167 => 75,  155 => 68,  145 => 52,  111 => 44,  23 => 18,  58 => 9,  37 => 18,  20 => 11,  1127 => 457,  1123 => 456,  1119 => 455,  1109 => 450,  1098 => 442,  1091 => 438,  1081 => 431,  1077 => 429,  1066 => 426,  1062 => 425,  1058 => 424,  1053 => 423,  1049 => 422,  1045 => 421,  1037 => 416,  1033 => 415,  1029 => 414,  1020 => 412,  1015 => 410,  1003 => 401,  999 => 400,  991 => 395,  981 => 393,  979 => 392,  976 => 391,  966 => 384,  962 => 383,  953 => 379,  942 => 371,  935 => 367,  925 => 360,  916 => 354,  909 => 350,  905 => 348,  894 => 343,  890 => 342,  883 => 338,  879 => 337,  873 => 336,  869 => 335,  860 => 329,  856 => 328,  852 => 327,  843 => 325,  838 => 323,  825 => 313,  821 => 312,  814 => 308,  804 => 306,  802 => 305,  799 => 304,  789 => 297,  785 => 296,  780 => 294,  774 => 290,  772 => 289,  762 => 286,  753 => 280,  748 => 278,  741 => 274,  728 => 267,  716 => 258,  712 => 257,  706 => 254,  700 => 251,  696 => 250,  688 => 249,  684 => 248,  681 => 247,  664 => 239,  655 => 236,  651 => 235,  647 => 234,  643 => 233,  637 => 230,  632 => 228,  627 => 227,  625 => 361,  622 => 225,  614 => 220,  610 => 219,  607 => 349,  594 => 215,  584 => 212,  582 => 211,  566 => 207,  561 => 205,  556 => 204,  553 => 203,  548 => 313,  540 => 308,  527 => 196,  522 => 195,  520 => 194,  516 => 294,  495 => 289,  487 => 180,  466 => 168,  461 => 166,  453 => 161,  441 => 152,  428 => 147,  417 => 243,  407 => 238,  403 => 136,  398 => 232,  389 => 133,  387 => 132,  384 => 131,  375 => 124,  369 => 122,  359 => 117,  357 => 116,  346 => 111,  343 => 132,  341 => 131,  337 => 108,  327 => 126,  314 => 97,  311 => 118,  309 => 117,  305 => 115,  293 => 109,  289 => 163,  284 => 106,  279 => 104,  277 => 109,  274 => 82,  266 => 77,  261 => 76,  256 => 96,  251 => 101,  220 => 80,  215 => 78,  202 => 77,  198 => 54,  190 => 49,  157 => 39,  137 => 59,  132 => 58,  124 => 43,  96 => 37,  74 => 34,  61 => 25,  34 => 4,  784 => 215,  775 => 213,  760 => 210,  749 => 207,  745 => 206,  736 => 272,  732 => 204,  727 => 203,  725 => 197,  723 => 196,  720 => 195,  713 => 191,  709 => 190,  705 => 189,  702 => 188,  695 => 183,  686 => 181,  682 => 180,  677 => 179,  674 => 178,  672 => 241,  668 => 240,  660 => 238,  652 => 376,  648 => 173,  645 => 369,  638 => 168,  633 => 167,  631 => 364,  628 => 165,  623 => 161,  618 => 160,  612 => 159,  599 => 158,  596 => 157,  593 => 152,  591 => 151,  586 => 150,  579 => 332,  574 => 209,  569 => 325,  562 => 139,  552 => 136,  543 => 200,  533 => 133,  529 => 299,  519 => 127,  500 => 291,  490 => 287,  471 => 115,  467 => 114,  459 => 273,  440 => 106,  437 => 151,  434 => 256,  427 => 99,  420 => 95,  410 => 90,  404 => 88,  402 => 237,  399 => 86,  392 => 82,  388 => 81,  383 => 80,  381 => 79,  378 => 78,  371 => 74,  363 => 68,  361 => 207,  358 => 139,  348 => 62,  344 => 193,  340 => 60,  330 => 104,  325 => 102,  321 => 101,  317 => 121,  313 => 52,  308 => 51,  303 => 48,  298 => 90,  294 => 46,  290 => 45,  275 => 103,  271 => 108,  263 => 4,  258 => 36,  253 => 95,  248 => 100,  244 => 140,  228 => 83,  214 => 20,  191 => 69,  186 => 83,  177 => 46,  175 => 77,  170 => 71,  153 => 56,  146 => 58,  128 => 47,  120 => 42,  118 => 131,  113 => 41,  110 => 48,  104 => 67,  97 => 63,  83 => 30,  81 => 14,  77 => 29,  65 => 30,  53 => 10,  608 => 225,  602 => 217,  597 => 342,  589 => 213,  585 => 216,  581 => 214,  572 => 144,  568 => 211,  565 => 324,  563 => 209,  558 => 137,  555 => 317,  551 => 205,  541 => 197,  537 => 134,  535 => 197,  530 => 193,  526 => 131,  521 => 189,  515 => 125,  512 => 192,  509 => 191,  507 => 190,  504 => 292,  502 => 180,  499 => 179,  496 => 178,  494 => 122,  491 => 176,  489 => 175,  486 => 286,  483 => 173,  481 => 119,  478 => 174,  476 => 116,  473 => 172,  470 => 278,  468 => 167,  463 => 113,  457 => 160,  454 => 111,  451 => 158,  449 => 108,  444 => 263,  438 => 150,  435 => 149,  432 => 100,  430 => 255,  425 => 146,  411 => 138,  406 => 140,  390 => 137,  382 => 135,  380 => 134,  377 => 133,  373 => 123,  366 => 73,  362 => 118,  353 => 115,  351 => 135,  339 => 191,  335 => 59,  329 => 117,  323 => 125,  318 => 114,  312 => 113,  306 => 110,  300 => 109,  295 => 89,  291 => 106,  285 => 111,  280 => 41,  276 => 102,  267 => 5,  250 => 93,  239 => 97,  229 => 91,  218 => 97,  212 => 62,  210 => 75,  205 => 90,  188 => 84,  184 => 73,  181 => 80,  169 => 74,  160 => 58,  152 => 92,  148 => 64,  139 => 54,  134 => 47,  114 => 71,  107 => 52,  76 => 80,  70 => 26,  273 => 96,  269 => 100,  254 => 147,  246 => 99,  243 => 89,  240 => 139,  238 => 85,  235 => 69,  230 => 68,  227 => 81,  224 => 66,  221 => 77,  219 => 84,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 59,  135 => 81,  131 => 48,  119 => 43,  108 => 39,  102 => 37,  71 => 28,  67 => 28,  63 => 13,  59 => 23,  47 => 21,  38 => 17,  94 => 35,  89 => 40,  85 => 34,  79 => 37,  75 => 17,  68 => 31,  56 => 24,  50 => 20,  29 => 21,  87 => 66,  72 => 33,  55 => 24,  21 => 12,  26 => 13,  98 => 44,  93 => 45,  88 => 60,  78 => 36,  46 => 32,  27 => 13,  40 => 13,  44 => 18,  35 => 16,  31 => 22,  43 => 20,  41 => 18,  28 => 13,  201 => 72,  196 => 90,  183 => 78,  171 => 63,  166 => 100,  163 => 4,  158 => 62,  156 => 57,  151 => 61,  142 => 61,  138 => 50,  136 => 45,  123 => 143,  121 => 53,  117 => 57,  115 => 50,  105 => 47,  101 => 49,  91 => 34,  69 => 50,  66 => 29,  62 => 29,  49 => 9,  24 => 13,  32 => 15,  25 => 12,  22 => 12,  19 => 11,  209 => 92,  203 => 122,  199 => 86,  193 => 83,  189 => 71,  187 => 84,  182 => 69,  176 => 65,  173 => 72,  168 => 60,  164 => 72,  162 => 68,  154 => 67,  149 => 60,  147 => 90,  144 => 60,  141 => 55,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  116 => 42,  112 => 12,  109 => 69,  106 => 33,  103 => 46,  99 => 38,  95 => 43,  92 => 61,  86 => 37,  82 => 33,  80 => 33,  73 => 29,  64 => 25,  60 => 15,  57 => 22,  54 => 189,  51 => 38,  48 => 21,  45 => 19,  42 => 7,  39 => 17,  36 => 17,  33 => 6,  30 => 15,);
    }
}

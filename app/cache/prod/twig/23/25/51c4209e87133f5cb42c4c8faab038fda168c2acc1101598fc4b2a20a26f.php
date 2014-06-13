<?php

/* VinceTBootstrapFormBundle:Form:fields.html.twig */
class __TwigTemplate_232551c4209e87133f5cb42c4c8faab038fda168c2acc1101598fc4b2a20a26f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'bootstrap_datepicker_widget' => array($this, 'block_bootstrap_datepicker_widget'),
            'bootstrap_timepicker_widget' => array($this, 'block_bootstrap_timepicker_widget'),
            'bootstrap_daterangepicker_widget' => array($this, 'block_bootstrap_daterangepicker_widget'),
            'bootstrap_email_widget' => array($this, 'block_bootstrap_email_widget'),
            'bootstrap_percent_widget' => array($this, 'block_bootstrap_percent_widget'),
            'bootstrap_money_widget' => array($this, 'block_bootstrap_money_widget'),
            'bootstrap_colorpicker_widget' => array($this, 'block_bootstrap_colorpicker_widget'),
            'bootstrap_colorpicker_component_widget' => array($this, 'block_bootstrap_colorpicker_component_widget'),
            'bootstrap_slider_widget' => array($this, 'block_bootstrap_slider_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('bootstrap_datepicker_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('bootstrap_timepicker_widget', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('bootstrap_daterangepicker_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('bootstrap_email_widget', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('bootstrap_percent_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('bootstrap_money_widget', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('bootstrap_colorpicker_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('bootstrap_colorpicker_component_widget', $context, $blocks);
        // line 97
        echo "

";
        // line 99
        $this->displayBlock('bootstrap_slider_widget', $context, $blocks);
    }

    // line 1
    public function block_bootstrap_datepicker_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"input-append date bootstrap-datepicker\" data-date=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\" data-date-format=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["format"]) ? $context["format"] : null)), "html", null, true);
        echo "\">
        ";
        // line 4
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
        <span class=\"add-on\"><i class=\"icon-calendar\"></i></span>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 10
    public function block_bootstrap_timepicker_widget($context, array $blocks = array())
    {
        // line 11
        ob_start();
        // line 12
        echo "    <div class=\"input-append bootstrap-timepicker\">
        <input type=\"text\" ";
        // line 13
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " 
        ";
        // line 14
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        // line 15
        echo "        data-minute-step=\"";
        echo twig_escape_filter($this->env, (isset($context["minute_step"]) ? $context["minute_step"] : null), "html", null, true);
        echo "\"
        data-second-step=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["second_step"]) ? $context["second_step"] : null), "html", null, true);
        echo "\"
        ";
        // line 17
        if ((isset($context["disable_focus"]) ? $context["disable_focus"] : null)) {
            echo "data-disable-focus=\"";
            echo twig_escape_filter($this->env, (isset($context["disable_focus"]) ? $context["disable_focus"] : null), "html", null, true);
            echo "\" ";
        }
        // line 18
        echo "        ";
        if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
            echo "data-show-seconds=\"";
            echo twig_escape_filter($this->env, (isset($context["with_seconds"]) ? $context["with_seconds"] : null), "html", null, true);
            echo "\" ";
        }
        // line 19
        echo "        />
        <span class=\"add-on\"><i class=\"icon-time\"></i></span>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 25
    public function block_bootstrap_daterangepicker_widget($context, array $blocks = array())
    {
        // line 26
        ob_start();
        // line 27
        echo "    <div class=\"input-prepend bootstrap-daterangepicker\">
        <span class=\"add-on\"><i class=\"icon-calendar\"></i></span>
        <input type=\"text\" ";
        // line 29
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " 
        ";
        // line 30
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        // line 31
        echo "        data-opens=\"";
        echo twig_escape_filter($this->env, (isset($context["opens"]) ? $context["opens"] : null), "html", null, true);
        echo "\"
        data-separator=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true);
        echo "\"
        data-show-week-numbers=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["show_week_numbers"]) ? $context["show_week_numbers"] : null), "html", null, true);
        echo "\"
        data-show-dropdowns=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["show_dropdowns"]) ? $context["show_dropdowns"] : null), "html", null, true);
        echo "\"
        data-min-date=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["min_date"]) ? $context["min_date"] : null), "html", null, true);
        echo "\"
        data-max-date=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["max_date"]) ? $context["max_date"] : null), "html", null, true);
        echo "\"
        data-date-limit=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["date_limit"]) ? $context["date_limit"] : null), "html", null, true);
        echo "\"
        data-ranges=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["ranges"]) ? $context["ranges"] : null), "html", null, true);
        echo "\"
        data-locale=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
        echo "\"
        />
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 45
    public function block_bootstrap_email_widget($context, array $blocks = array())
    {
        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"input-prepend\">
        <span class=\"add-on\"><i class=\"icon-envelope\"></i></span>
        ";
        // line 49
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 54
    public function block_bootstrap_percent_widget($context, array $blocks = array())
    {
        // line 55
        ob_start();
        // line 56
        echo "    <div class=\"input-append\">
        ";
        // line 57
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
        <span class=\"add-on\">%</span>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 63
    public function block_bootstrap_money_widget($context, array $blocks = array())
    {
        // line 64
        ob_start();
        // line 65
        echo "    <div class=\"";
        if ((isset($context["input_prepend"]) ? $context["input_prepend"] : null)) {
            echo "input-prepend";
        }
        echo " ";
        if ((isset($context["input_append"]) ? $context["input_append"] : null)) {
            echo "input-append";
        }
        echo "\">
        ";
        // line 66
        if ((isset($context["input_prepend"]) ? $context["input_prepend"] : null)) {
            // line 67
            echo "            <span class=\"add-on\">";
            echo twig_escape_filter($this->env, (isset($context["input_prepend"]) ? $context["input_prepend"] : null), "html", null, true);
            echo "</span>
        ";
        }
        // line 69
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
        ";
        // line 70
        if ((isset($context["input_append"]) ? $context["input_append"] : null)) {
            // line 71
            echo "            <span class=\"add-on\">";
            echo twig_escape_filter($this->env, (isset($context["input_append"]) ? $context["input_append"] : null), "html", null, true);
            echo "</span>
        ";
        }
        // line 73
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 77
    public function block_bootstrap_colorpicker_widget($context, array $blocks = array())
    {
        // line 78
        ob_start();
        // line 79
        echo "    ";
        if ((isset($context["use_component"]) ? $context["use_component"] : null)) {
            // line 80
            echo "        ";
            $this->displayBlock("bootstrap_colorpicker_component_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 82
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 87
    public function block_bootstrap_colorpicker_component_widget($context, array $blocks = array())
    {
        // line 88
        ob_start();
        // line 89
        echo "    <div class=\"input-append bootstrap-colorpicker color\" data-color=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\" data-color-format=\"";
        echo twig_escape_filter($this->env, (isset($context["format"]) ? $context["format"] : null), "html", null, true);
        echo "\">
        ";
        // line 90
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
        <span class=\"add-on\">
            <i ";
        // line 92
        if ((isset($context["value"]) ? $context["value"] : null)) {
            echo "style=\"background-color: ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        echo "></i>
        </span>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 99
    public function block_bootstrap_slider_widget($context, array $blocks = array())
    {
        // line 100
        ob_start();
        // line 101
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "VinceTBootstrapFormBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  336 => 100,  223 => 55,  956 => 271,  946 => 302,  933 => 296,  917 => 291,  914 => 290,  912 => 289,  901 => 285,  898 => 284,  887 => 280,  870 => 274,  868 => 273,  863 => 269,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  791 => 262,  788 => 233,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  757 => 221,  743 => 217,  738 => 214,  679 => 200,  673 => 198,  665 => 196,  663 => 195,  657 => 193,  629 => 186,  626 => 184,  603 => 179,  600 => 178,  588 => 175,  570 => 164,  554 => 224,  479 => 135,  418 => 112,  370 => 101,  356 => 126,  624 => 224,  620 => 223,  601 => 216,  580 => 207,  559 => 201,  545 => 198,  497 => 156,  485 => 124,  447 => 113,  424 => 114,  412 => 126,  401 => 89,  391 => 163,  379 => 104,  376 => 103,  333 => 99,  326 => 86,  292 => 91,  287 => 77,  264 => 74,  178 => 35,  12 => 36,  778 => 267,  763 => 244,  742 => 240,  734 => 237,  717 => 210,  714 => 232,  711 => 231,  703 => 226,  653 => 218,  650 => 192,  644 => 190,  616 => 182,  595 => 205,  587 => 203,  578 => 200,  573 => 198,  546 => 175,  534 => 162,  531 => 225,  513 => 230,  475 => 169,  448 => 119,  445 => 152,  429 => 148,  422 => 147,  396 => 138,  345 => 116,  307 => 82,  286 => 98,  247 => 75,  206 => 46,  90 => 38,  283 => 78,  236 => 42,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1106 => 316,  1103 => 315,  1100 => 314,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 269,  947 => 249,  939 => 243,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 286,  900 => 228,  897 => 227,  892 => 282,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  865 => 272,  862 => 212,  857 => 267,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 246,  817 => 192,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 233,  793 => 182,  783 => 177,  769 => 247,  767 => 246,  764 => 169,  756 => 165,  751 => 163,  746 => 161,  739 => 239,  729 => 235,  724 => 154,  721 => 153,  715 => 151,  710 => 149,  707 => 208,  699 => 142,  697 => 141,  694 => 138,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  640 => 211,  619 => 183,  617 => 112,  598 => 107,  576 => 199,  564 => 162,  557 => 96,  550 => 187,  547 => 93,  503 => 81,  493 => 143,  480 => 75,  456 => 68,  450 => 114,  414 => 144,  408 => 109,  368 => 126,  355 => 122,  350 => 26,  342 => 23,  332 => 88,  316 => 16,  255 => 67,  245 => 83,  194 => 39,  200 => 31,  180 => 49,  560 => 191,  549 => 182,  532 => 192,  528 => 160,  525 => 157,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  508 => 165,  501 => 154,  474 => 122,  460 => 123,  455 => 115,  442 => 151,  439 => 150,  436 => 132,  433 => 149,  426 => 58,  415 => 127,  405 => 108,  360 => 128,  354 => 101,  331 => 96,  322 => 93,  304 => 81,  272 => 91,  249 => 74,  233 => 304,  216 => 35,  140 => 51,  126 => 66,  192 => 53,  161 => 31,  320 => 92,  288 => 80,  237 => 63,  232 => 78,  222 => 66,  185 => 61,  150 => 34,  100 => 62,  692 => 399,  683 => 223,  678 => 133,  676 => 199,  666 => 222,  661 => 220,  656 => 219,  641 => 189,  635 => 188,  615 => 354,  590 => 204,  583 => 334,  577 => 206,  575 => 328,  536 => 194,  524 => 90,  510 => 178,  482 => 136,  464 => 125,  452 => 268,  423 => 57,  421 => 90,  413 => 241,  400 => 47,  393 => 168,  385 => 159,  374 => 128,  324 => 110,  310 => 83,  302 => 79,  296 => 151,  282 => 161,  278 => 95,  270 => 84,  259 => 87,  226 => 131,  365 => 141,  347 => 140,  338 => 101,  319 => 124,  315 => 90,  301 => 80,  299 => 8,  281 => 75,  268 => 71,  265 => 51,  262 => 81,  260 => 363,  257 => 103,  225 => 56,  213 => 69,  211 => 81,  197 => 30,  174 => 34,  127 => 18,  252 => 68,  242 => 65,  231 => 69,  207 => 33,  195 => 54,  165 => 77,  129 => 67,  84 => 32,  52 => 12,  167 => 56,  155 => 30,  145 => 26,  111 => 40,  23 => 13,  58 => 77,  37 => 6,  20 => 1,  1127 => 457,  1123 => 456,  1119 => 455,  1109 => 317,  1098 => 313,  1091 => 438,  1081 => 431,  1077 => 305,  1066 => 426,  1062 => 425,  1058 => 424,  1053 => 292,  1049 => 422,  1045 => 421,  1037 => 416,  1033 => 415,  1029 => 282,  1020 => 412,  1015 => 410,  1003 => 401,  999 => 400,  991 => 395,  981 => 393,  979 => 260,  976 => 259,  966 => 384,  962 => 383,  953 => 270,  942 => 300,  935 => 367,  925 => 292,  916 => 354,  909 => 288,  905 => 348,  894 => 226,  890 => 281,  883 => 338,  879 => 277,  873 => 217,  869 => 335,  860 => 268,  856 => 328,  852 => 327,  843 => 325,  838 => 323,  825 => 196,  821 => 312,  814 => 191,  804 => 306,  802 => 235,  799 => 234,  789 => 297,  785 => 232,  780 => 303,  774 => 290,  772 => 248,  762 => 286,  753 => 220,  748 => 242,  741 => 274,  728 => 267,  716 => 258,  712 => 150,  706 => 254,  700 => 205,  696 => 204,  688 => 202,  684 => 248,  681 => 247,  664 => 239,  655 => 236,  651 => 235,  647 => 191,  643 => 120,  637 => 230,  632 => 187,  627 => 227,  625 => 361,  622 => 225,  614 => 111,  610 => 181,  607 => 180,  594 => 176,  584 => 173,  582 => 211,  566 => 203,  561 => 161,  556 => 204,  553 => 188,  548 => 176,  540 => 160,  527 => 91,  522 => 156,  520 => 194,  516 => 294,  495 => 158,  487 => 156,  466 => 168,  461 => 70,  453 => 161,  441 => 152,  428 => 116,  417 => 145,  407 => 238,  403 => 48,  398 => 88,  389 => 133,  387 => 110,  384 => 106,  375 => 124,  369 => 148,  359 => 144,  357 => 116,  346 => 111,  343 => 92,  341 => 131,  337 => 90,  327 => 102,  314 => 88,  311 => 83,  309 => 82,  305 => 115,  293 => 90,  289 => 140,  284 => 76,  279 => 77,  277 => 136,  274 => 73,  266 => 70,  261 => 69,  256 => 79,  251 => 101,  220 => 54,  215 => 280,  202 => 55,  198 => 55,  190 => 38,  157 => 56,  137 => 29,  132 => 57,  124 => 20,  96 => 40,  74 => 29,  61 => 27,  34 => 17,  784 => 215,  775 => 213,  760 => 222,  749 => 218,  745 => 241,  736 => 238,  732 => 213,  727 => 203,  725 => 197,  723 => 196,  720 => 211,  713 => 209,  709 => 190,  705 => 189,  702 => 188,  695 => 139,  686 => 181,  682 => 201,  677 => 179,  674 => 178,  672 => 241,  668 => 197,  660 => 194,  652 => 376,  648 => 173,  645 => 369,  638 => 210,  633 => 209,  631 => 364,  628 => 165,  623 => 161,  618 => 160,  612 => 220,  599 => 215,  596 => 106,  593 => 105,  591 => 151,  586 => 150,  579 => 332,  574 => 205,  569 => 325,  562 => 139,  552 => 136,  543 => 174,  533 => 133,  529 => 159,  519 => 127,  500 => 291,  490 => 142,  471 => 129,  467 => 72,  459 => 116,  440 => 106,  437 => 61,  434 => 118,  427 => 99,  420 => 146,  410 => 110,  404 => 90,  402 => 107,  399 => 139,  392 => 82,  388 => 42,  383 => 80,  381 => 105,  378 => 78,  371 => 35,  363 => 32,  361 => 124,  358 => 123,  348 => 118,  344 => 24,  340 => 91,  330 => 103,  325 => 94,  321 => 100,  317 => 107,  313 => 84,  308 => 89,  303 => 87,  298 => 101,  294 => 82,  290 => 90,  275 => 86,  271 => 374,  263 => 365,  258 => 72,  253 => 66,  248 => 116,  244 => 43,  228 => 57,  214 => 63,  191 => 26,  186 => 37,  177 => 43,  175 => 47,  170 => 33,  153 => 72,  146 => 34,  128 => 47,  120 => 46,  118 => 47,  113 => 46,  110 => 45,  104 => 43,  97 => 11,  83 => 55,  81 => 26,  77 => 25,  65 => 97,  53 => 63,  608 => 225,  602 => 217,  597 => 177,  589 => 213,  585 => 209,  581 => 201,  572 => 204,  568 => 211,  565 => 324,  563 => 202,  558 => 160,  555 => 200,  551 => 221,  541 => 197,  537 => 159,  535 => 197,  530 => 193,  526 => 190,  521 => 182,  515 => 305,  512 => 84,  509 => 228,  507 => 156,  504 => 155,  502 => 180,  499 => 173,  496 => 172,  494 => 122,  491 => 157,  489 => 175,  486 => 286,  483 => 173,  481 => 119,  478 => 74,  476 => 116,  473 => 168,  470 => 121,  468 => 128,  463 => 117,  457 => 160,  454 => 121,  451 => 120,  449 => 138,  444 => 263,  438 => 150,  435 => 149,  432 => 100,  430 => 255,  425 => 146,  411 => 143,  406 => 111,  390 => 136,  382 => 135,  380 => 130,  377 => 129,  373 => 102,  366 => 150,  362 => 148,  353 => 115,  351 => 141,  339 => 191,  335 => 133,  329 => 130,  323 => 85,  318 => 86,  312 => 97,  306 => 88,  300 => 93,  295 => 100,  291 => 80,  285 => 79,  280 => 77,  276 => 393,  267 => 78,  250 => 44,  239 => 64,  229 => 91,  218 => 97,  212 => 49,  210 => 59,  205 => 90,  188 => 25,  184 => 48,  181 => 232,  169 => 78,  160 => 39,  152 => 36,  148 => 49,  139 => 51,  134 => 19,  114 => 45,  107 => 44,  76 => 2,  70 => 18,  273 => 85,  269 => 133,  254 => 46,  246 => 67,  243 => 66,  240 => 64,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 39,  221 => 38,  219 => 101,  217 => 64,  208 => 47,  204 => 57,  179 => 44,  159 => 196,  143 => 33,  135 => 51,  131 => 48,  119 => 44,  108 => 45,  102 => 13,  71 => 31,  67 => 30,  63 => 87,  59 => 20,  47 => 12,  38 => 25,  94 => 10,  89 => 34,  85 => 4,  79 => 21,  75 => 30,  68 => 30,  56 => 24,  50 => 62,  29 => 14,  87 => 29,  72 => 29,  55 => 76,  21 => 11,  26 => 2,  98 => 36,  93 => 39,  88 => 33,  78 => 3,  46 => 20,  27 => 16,  40 => 44,  44 => 19,  35 => 24,  31 => 4,  43 => 45,  41 => 18,  28 => 1,  201 => 56,  196 => 52,  183 => 50,  171 => 153,  166 => 32,  163 => 40,  158 => 74,  156 => 38,  151 => 29,  142 => 25,  138 => 49,  136 => 24,  123 => 65,  121 => 17,  117 => 16,  115 => 47,  105 => 39,  101 => 37,  91 => 39,  69 => 99,  66 => 23,  62 => 35,  49 => 21,  24 => 14,  32 => 15,  25 => 12,  22 => 12,  19 => 11,  209 => 58,  203 => 45,  199 => 265,  193 => 51,  189 => 52,  187 => 64,  182 => 36,  176 => 309,  173 => 46,  168 => 43,  164 => 55,  162 => 41,  154 => 36,  149 => 35,  147 => 27,  144 => 26,  141 => 72,  133 => 69,  130 => 22,  125 => 46,  122 => 45,  116 => 43,  112 => 15,  109 => 46,  106 => 14,  103 => 38,  99 => 12,  95 => 41,  92 => 59,  86 => 30,  82 => 33,  80 => 31,  73 => 1,  64 => 36,  60 => 86,  57 => 34,  54 => 23,  51 => 24,  48 => 54,  45 => 53,  42 => 8,  39 => 20,  36 => 21,  33 => 10,  30 => 9,);
    }
}

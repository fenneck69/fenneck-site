<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_a5e5d4af235337220a53e5c360c326e63df16a457a3fef91f3cadee4a3258018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_7c6502505ea0719a9aa118a611d3a6374d0b1011142df321bbeb61531d0d407f"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAiCAQAAADragGFAAAD60lEQVR42o2UfUxbVRjGb7fy4ah2QwdECSgjEpcYUP8hmtiWljbt+Gih62zGVqBjXkqgVcYQKzNLJF1HBxt0S9YMgqHVLt1oZRqidcpcgQ1dMpkxgyVK2NSYyWTAJoPB4/1g0iLQnZub+348v3vOPe95L/FogFO+pbBMbtPmgEsEDXC1OXJbYVn5FnBoPwg4wVfVCc7J3WRToxoxIbmYRjXZJHcLzqnqTvAZkEUsSfI2iddxCHtR8LkIvBCIR0UKsNdxSOKVt1mSwGGQ87GKNk3ncO1ARdFxkU/qxMYQaKPUKfIVHR+oGK7VdCrazsdSGKJKqsW+oRqnMcu7s91Td02FuBAo7prKU7ezPcvrNA7ViH0l1Ygi/Kmiz+y2H3Tirvqj0PvLqk09ieAsfW1PYrXJXwZ9/VFx11Vda2OW159KmEvFvkkdadvunN19oEbYrXSczMD6/6D1JzOUDmH3gZrZ3dudpG1SJ/aZSwnSuqsDebIz9oZBtbC7/SDykATu0oZTXl77QWH3oNreIDuD3F0dpJXoU3sMU9nG5ku6lop8N9RIAw9ccqvGoDGQWymIR0XUqk+PVF0qNjZPZXsMfWoCKUijrky8Qt0KyuIiWtMqnBdAAOG8phXRVORFKvM6rWC0KQQiqfAG8PEUnkY8ZUVW7hdg6arcTyk2UJlnKAWfsqIRSSwfSFDeDIaUN5FAhBtIlz4IhqQPkB4eytROBEPaCWQ+xkyu3mDI1fs4Mz33dUsw9KUdieGhzVXf0GIF8hmoPIC4sNBEmuweLbbca56kn9kzI+ngrIkgosHMLqu/90c/a31oQVSYxemu0ELNDCph0E0z+3cd8WshnMAb4jlaqP/rjuwPWelt2hYtfCHFutWhJ95vXTw8v6l/yh3dNyphPJMLMatDz6rHaJHhnwsXJQ+33R/z1d6l/dxxJK+GrHMVsvOUTOdNX+ztvKycaLnORo6Vg7sy9GRVFyspnhp2wIDKs+6cGTay5wI2rQj9nbpt8dTtuzVM4gW89JVlB7V/a1QLEUeMrEBDNaDkfvHht07TrVi/eObrrStUC7H6AJ0smH848MnPWUzn5swM9qNHzyxRO4KE/1XoRoZklk5aRy/bdX8KIJ8XLwhQ+ut3H526ylbLk7OsWogy29hlkL+LKPEHd25f+WXIdJf+T7xzQ8RkjG7wljW5duRRM+yYDvThMIpQjGP+79mtWKzW8yEV8snp9wsgWzh1a64De/Ay+NiEV0HOdXw8plhgsaaKoGohxuSigxKM9cOMN7GZTSIC8ZT33vi3BczG6AOIXYKS85mj+e443kYKokO/FsnQWUeZl84OvUZX618UFpIDvqMM6gAAAABJRU5ErkJggg==\" alt=\"Events\"></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners"))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Listener</th>
        </tr>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners"));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 32
            echo "            <tr>
                <td><code>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "event"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 34
            echo $context["__internal_7c6502505ea0719a9aa118a611d3a6374d0b1011142df321bbeb61531d0d407f"]->getdisplay_listener((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")));
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </table>

    <h2>Not Called Listeners</h2>

    ";
        // line 41
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners")) {
            // line 42
            echo "        <table>
            <tr>
                <th>Event name</th>
                <th>Listener</th>
            </tr>
            ";
            // line 47
            $context["listeners"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners");
            // line 48
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")))));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 49
                echo "                <tr>
                    <td><code>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), (isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), array(), "array"), "event"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 51
                echo $context["__internal_7c6502505ea0719a9aa118a611d3a6374d0b1011142df321bbeb61531d0d407f"]->getdisplay_listener($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), (isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </table>
    ";
        } else {
            // line 56
            echo "        <p>
            <strong>No uncalled listeners</strong>.
        </p>
        <p>

            All listeners were called for this request or an error occurred
            when trying to collect uncalled listeners (in which case check the
            logs to get more information).

        </p>
    ";
        }
    }

    // line 69
    public function getdisplay_listener($_listener = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $_listener,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "    ";
            if (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Closure")) {
                // line 71
                echo "        Closure
    ";
            } elseif (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Function")) {
                // line 73
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "file"), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "line"));
                // line 74
                echo "        ";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "function"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "function"), "html", null, true);
                }
                // line 75
                echo "    ";
            } elseif (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Method")) {
                // line 76
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "file"), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "line"));
                // line 77
                echo "        ";
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "class"));
                echo "::";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "method"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "method"), "html", null, true);
                }
                // line 78
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  446 => 197,  431 => 189,  394 => 168,  241 => 90,  505 => 257,  492 => 253,  477 => 249,  458 => 242,  419 => 227,  172 => 62,  1140 => 461,  1136 => 460,  1132 => 459,  1111 => 446,  1104 => 442,  1094 => 435,  1090 => 433,  1075 => 429,  1050 => 420,  1046 => 419,  1042 => 418,  1028 => 414,  994 => 397,  992 => 396,  989 => 395,  975 => 387,  948 => 371,  938 => 364,  922 => 354,  907 => 347,  896 => 342,  851 => 327,  827 => 312,  815 => 309,  787 => 294,  766 => 284,  754 => 278,  719 => 258,  701 => 253,  685 => 245,  592 => 214,  517 => 261,  443 => 152,  416 => 226,  397 => 212,  334 => 105,  1183 => 475,  1175 => 473,  1165 => 468,  1147 => 456,  1137 => 449,  1133 => 447,  1122 => 454,  1114 => 442,  1105 => 440,  1101 => 439,  1093 => 434,  1089 => 433,  1085 => 432,  1076 => 430,  1071 => 428,  1059 => 419,  1055 => 418,  1047 => 413,  1035 => 410,  1022 => 402,  1018 => 401,  998 => 389,  972 => 372,  965 => 368,  929 => 358,  913 => 347,  904 => 344,  899 => 342,  886 => 340,  882 => 339,  875 => 327,  850 => 316,  835 => 309,  823 => 305,  797 => 291,  777 => 277,  761 => 282,  733 => 260,  708 => 253,  704 => 252,  698 => 249,  693 => 247,  671 => 238,  630 => 227,  609 => 220,  604 => 219,  539 => 193,  498 => 170,  472 => 247,  386 => 127,  372 => 121,  297 => 89,  336 => 100,  223 => 55,  956 => 271,  946 => 360,  933 => 296,  917 => 348,  914 => 290,  912 => 289,  901 => 285,  898 => 284,  887 => 280,  870 => 274,  868 => 273,  863 => 324,  853 => 261,  848 => 258,  840 => 253,  834 => 316,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  791 => 262,  788 => 233,  773 => 276,  771 => 232,  768 => 231,  765 => 230,  757 => 269,  743 => 217,  738 => 214,  679 => 200,  673 => 242,  665 => 196,  663 => 236,  657 => 193,  629 => 186,  626 => 184,  603 => 179,  600 => 178,  588 => 215,  570 => 210,  554 => 224,  479 => 172,  418 => 135,  370 => 203,  356 => 114,  624 => 224,  620 => 222,  601 => 218,  580 => 207,  559 => 201,  545 => 198,  497 => 156,  485 => 124,  447 => 113,  424 => 229,  412 => 126,  401 => 172,  391 => 123,  379 => 206,  376 => 103,  333 => 99,  326 => 86,  292 => 88,  287 => 86,  264 => 74,  178 => 64,  12 => 36,  778 => 267,  763 => 244,  742 => 266,  734 => 237,  717 => 210,  714 => 232,  711 => 231,  703 => 226,  653 => 218,  650 => 234,  644 => 190,  616 => 182,  595 => 215,  587 => 213,  578 => 200,  573 => 211,  546 => 175,  534 => 191,  531 => 225,  513 => 230,  475 => 248,  448 => 151,  445 => 236,  429 => 188,  422 => 184,  396 => 138,  345 => 104,  307 => 91,  286 => 112,  247 => 75,  206 => 46,  90 => 27,  283 => 84,  236 => 42,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 474,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 460,  1145 => 322,  1143 => 321,  1118 => 443,  1115 => 319,  1112 => 318,  1106 => 316,  1103 => 315,  1100 => 314,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 430,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 409,  1027 => 281,  1024 => 280,  1016 => 405,  1014 => 272,  1012 => 404,  1009 => 397,  1004 => 399,  982 => 261,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 366,  958 => 253,  955 => 375,  952 => 251,  950 => 361,  947 => 249,  939 => 356,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 352,  915 => 233,  903 => 346,  900 => 228,  897 => 227,  892 => 341,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  865 => 331,  862 => 212,  857 => 267,  849 => 206,  846 => 315,  844 => 204,  841 => 313,  833 => 308,  830 => 198,  828 => 246,  817 => 310,  812 => 308,  809 => 297,  801 => 185,  798 => 300,  796 => 233,  793 => 298,  783 => 177,  769 => 247,  767 => 273,  764 => 169,  756 => 165,  751 => 163,  746 => 161,  739 => 239,  729 => 262,  724 => 154,  721 => 257,  715 => 151,  710 => 149,  707 => 208,  699 => 142,  697 => 252,  694 => 251,  689 => 137,  680 => 134,  675 => 239,  662 => 125,  658 => 235,  654 => 123,  649 => 122,  640 => 231,  619 => 183,  617 => 223,  598 => 107,  576 => 199,  564 => 162,  557 => 96,  550 => 187,  547 => 93,  503 => 81,  493 => 143,  480 => 75,  456 => 68,  450 => 155,  414 => 134,  408 => 176,  368 => 126,  355 => 143,  350 => 198,  342 => 137,  332 => 88,  316 => 16,  255 => 67,  245 => 83,  194 => 70,  200 => 72,  180 => 49,  560 => 191,  549 => 182,  532 => 266,  528 => 160,  525 => 196,  523 => 263,  518 => 180,  514 => 260,  511 => 166,  508 => 258,  501 => 154,  474 => 170,  460 => 123,  455 => 241,  442 => 235,  439 => 195,  436 => 143,  433 => 232,  426 => 58,  415 => 180,  405 => 108,  360 => 128,  354 => 199,  331 => 96,  322 => 99,  304 => 90,  272 => 91,  249 => 74,  233 => 87,  216 => 79,  140 => 51,  126 => 66,  192 => 53,  161 => 41,  320 => 127,  288 => 80,  237 => 63,  232 => 68,  222 => 66,  185 => 75,  150 => 55,  100 => 42,  692 => 399,  683 => 244,  678 => 133,  676 => 199,  666 => 222,  661 => 220,  656 => 237,  641 => 189,  635 => 229,  615 => 221,  590 => 204,  583 => 214,  577 => 212,  575 => 328,  536 => 194,  524 => 90,  510 => 178,  482 => 250,  464 => 244,  452 => 268,  423 => 137,  421 => 90,  413 => 241,  400 => 136,  393 => 211,  385 => 159,  374 => 128,  324 => 100,  310 => 83,  302 => 91,  296 => 151,  282 => 161,  278 => 106,  270 => 102,  259 => 74,  226 => 84,  365 => 141,  347 => 140,  338 => 135,  319 => 94,  315 => 125,  301 => 80,  299 => 8,  281 => 75,  268 => 71,  265 => 76,  262 => 98,  260 => 72,  257 => 103,  225 => 56,  213 => 78,  211 => 81,  197 => 71,  174 => 74,  252 => 68,  242 => 65,  231 => 61,  207 => 75,  195 => 53,  165 => 60,  129 => 67,  84 => 24,  167 => 71,  155 => 63,  127 => 25,  23 => 13,  58 => 20,  20 => 1,  1127 => 457,  1123 => 456,  1119 => 455,  1109 => 441,  1098 => 313,  1091 => 438,  1081 => 431,  1077 => 305,  1066 => 427,  1062 => 426,  1058 => 425,  1053 => 292,  1049 => 422,  1045 => 421,  1037 => 411,  1033 => 416,  1029 => 282,  1020 => 412,  1015 => 410,  1003 => 401,  999 => 400,  991 => 385,  981 => 378,  979 => 388,  976 => 259,  966 => 383,  962 => 383,  953 => 270,  942 => 300,  935 => 355,  925 => 353,  916 => 354,  909 => 346,  905 => 348,  894 => 226,  890 => 281,  883 => 338,  879 => 277,  873 => 333,  869 => 332,  860 => 323,  856 => 329,  852 => 327,  843 => 325,  838 => 317,  825 => 196,  821 => 312,  814 => 299,  804 => 306,  802 => 301,  799 => 234,  789 => 286,  785 => 293,  780 => 303,  774 => 290,  772 => 248,  762 => 286,  753 => 220,  748 => 242,  741 => 271,  728 => 267,  716 => 255,  712 => 254,  706 => 254,  700 => 205,  696 => 204,  688 => 246,  684 => 248,  681 => 244,  664 => 239,  655 => 234,  651 => 235,  647 => 191,  643 => 230,  637 => 230,  632 => 187,  627 => 224,  625 => 361,  622 => 224,  614 => 222,  610 => 220,  607 => 219,  594 => 176,  584 => 173,  582 => 212,  566 => 207,  561 => 205,  556 => 204,  553 => 203,  548 => 201,  540 => 200,  527 => 187,  522 => 195,  520 => 194,  516 => 294,  495 => 158,  487 => 156,  466 => 245,  461 => 70,  453 => 199,  441 => 196,  428 => 116,  417 => 145,  407 => 130,  403 => 48,  398 => 127,  389 => 133,  387 => 164,  384 => 208,  375 => 205,  369 => 148,  359 => 115,  357 => 116,  346 => 111,  343 => 108,  341 => 131,  337 => 90,  327 => 101,  314 => 88,  311 => 94,  309 => 82,  305 => 115,  293 => 90,  289 => 113,  284 => 76,  279 => 83,  277 => 136,  274 => 79,  266 => 70,  261 => 69,  256 => 96,  251 => 72,  220 => 81,  215 => 63,  202 => 55,  198 => 54,  190 => 49,  137 => 28,  132 => 26,  124 => 21,  61 => 250,  34 => 62,  784 => 215,  775 => 290,  760 => 222,  749 => 276,  745 => 267,  736 => 238,  732 => 213,  727 => 203,  725 => 261,  723 => 196,  720 => 211,  713 => 255,  709 => 254,  705 => 189,  702 => 188,  695 => 139,  686 => 245,  682 => 201,  677 => 243,  674 => 178,  672 => 241,  668 => 240,  660 => 238,  652 => 376,  648 => 173,  645 => 232,  638 => 230,  633 => 209,  631 => 364,  628 => 165,  623 => 223,  618 => 160,  612 => 220,  599 => 215,  596 => 216,  593 => 105,  591 => 151,  586 => 150,  579 => 211,  574 => 209,  569 => 208,  562 => 139,  552 => 136,  543 => 174,  533 => 198,  529 => 265,  519 => 127,  500 => 184,  490 => 142,  471 => 129,  467 => 72,  459 => 153,  440 => 106,  437 => 61,  434 => 142,  427 => 230,  420 => 141,  410 => 110,  404 => 129,  402 => 137,  399 => 139,  392 => 82,  388 => 209,  383 => 80,  381 => 105,  378 => 78,  371 => 35,  363 => 32,  361 => 146,  358 => 200,  348 => 140,  344 => 24,  340 => 107,  330 => 103,  325 => 129,  321 => 100,  317 => 107,  313 => 84,  308 => 93,  303 => 122,  298 => 120,  294 => 82,  290 => 87,  275 => 105,  271 => 374,  263 => 75,  258 => 72,  253 => 66,  248 => 94,  244 => 65,  228 => 57,  214 => 63,  191 => 77,  186 => 48,  177 => 46,  175 => 47,  170 => 29,  153 => 69,  146 => 34,  128 => 53,  118 => 49,  113 => 48,  110 => 38,  104 => 42,  97 => 32,  81 => 23,  77 => 408,  65 => 244,  53 => 12,  608 => 225,  602 => 217,  597 => 216,  589 => 213,  585 => 209,  581 => 213,  572 => 204,  568 => 209,  565 => 208,  563 => 202,  558 => 160,  555 => 200,  551 => 221,  541 => 197,  537 => 159,  535 => 199,  530 => 193,  526 => 190,  521 => 182,  515 => 305,  512 => 84,  509 => 228,  507 => 156,  504 => 155,  502 => 256,  499 => 173,  496 => 172,  494 => 254,  491 => 178,  489 => 252,  486 => 176,  483 => 173,  481 => 119,  478 => 160,  476 => 116,  473 => 168,  470 => 121,  468 => 156,  463 => 117,  457 => 160,  454 => 156,  451 => 120,  449 => 198,  444 => 263,  438 => 150,  435 => 149,  432 => 100,  430 => 145,  425 => 146,  411 => 221,  406 => 111,  390 => 136,  382 => 126,  380 => 160,  377 => 129,  373 => 156,  366 => 202,  362 => 201,  353 => 115,  351 => 141,  339 => 191,  335 => 134,  329 => 131,  323 => 128,  318 => 98,  312 => 124,  306 => 92,  300 => 121,  295 => 100,  291 => 86,  285 => 79,  280 => 81,  276 => 393,  267 => 101,  250 => 101,  239 => 64,  229 => 85,  218 => 97,  212 => 62,  210 => 59,  205 => 90,  188 => 76,  184 => 48,  181 => 65,  169 => 44,  160 => 25,  152 => 36,  148 => 49,  134 => 54,  114 => 48,  107 => 6,  76 => 31,  70 => 19,  273 => 80,  269 => 78,  254 => 73,  243 => 66,  240 => 64,  238 => 70,  235 => 63,  230 => 67,  227 => 301,  224 => 66,  221 => 38,  219 => 101,  217 => 64,  208 => 47,  204 => 78,  179 => 47,  159 => 196,  143 => 31,  135 => 29,  119 => 40,  102 => 41,  71 => 23,  67 => 24,  63 => 26,  59 => 14,  38 => 6,  94 => 30,  89 => 3,  85 => 4,  75 => 323,  68 => 22,  56 => 228,  87 => 34,  21 => 11,  26 => 13,  93 => 28,  88 => 24,  78 => 19,  46 => 13,  27 => 3,  44 => 135,  31 => 61,  28 => 14,  201 => 56,  196 => 52,  183 => 50,  171 => 73,  166 => 28,  163 => 42,  158 => 74,  156 => 58,  151 => 35,  142 => 25,  138 => 56,  136 => 18,  121 => 50,  117 => 270,  105 => 34,  91 => 25,  62 => 14,  49 => 14,  24 => 1,  25 => 5,  19 => 11,  79 => 33,  72 => 322,  69 => 16,  47 => 149,  40 => 79,  37 => 78,  22 => 12,  246 => 93,  157 => 39,  145 => 26,  139 => 19,  131 => 48,  123 => 42,  120 => 271,  115 => 10,  111 => 47,  108 => 11,  101 => 220,  98 => 219,  96 => 37,  83 => 33,  74 => 395,  66 => 307,  55 => 16,  52 => 11,  50 => 150,  43 => 12,  41 => 6,  35 => 6,  32 => 5,  29 => 1,  209 => 58,  203 => 73,  199 => 265,  193 => 51,  189 => 52,  187 => 64,  182 => 38,  176 => 63,  173 => 44,  168 => 61,  164 => 70,  162 => 59,  154 => 22,  149 => 34,  147 => 54,  144 => 32,  141 => 51,  133 => 69,  130 => 46,  125 => 51,  122 => 45,  116 => 39,  112 => 12,  109 => 46,  106 => 224,  103 => 223,  99 => 31,  95 => 5,  92 => 4,  86 => 28,  82 => 21,  80 => 32,  73 => 20,  64 => 23,  60 => 18,  57 => 207,  54 => 16,  51 => 15,  48 => 14,  45 => 10,  42 => 100,  39 => 86,  36 => 4,  33 => 4,  30 => 3,);
    }
}

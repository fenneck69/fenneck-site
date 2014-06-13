<?php

/* GestionCoreBundle:Block:timeline.html.twig */
class __TwigTemplate_267c5c275257bbe883edbc40253671c18d5e4fbe641e65ba5ead6afa69ac4649 extends Twig_Template
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
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/timeline.css\">
<script type=\"text/javascript\" src=\"/js/timeline.js\"></script>
<script type=\"text/javascript\" src=\"/js/storyjs-embed.js\"></script>
<script>
    ";
        // line 5
        $context["hasAgenda"] = 0;
        // line 6
        echo "    var dataObject =
    {
        \"timeline\":
        {
            \"headline\":\"Planning des remboursements\",
            \"type\":\"default\",
            \"text\":\"\",
            \"date\": [
                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["remboursements"]) ? $context["remboursements"] : $this->getContext($context, "remboursements")));
        foreach ($context['_seq'] as $context["_key"] => $context["remboursement"]) {
            // line 15
            echo "                ";
            if ($this->getAttribute((isset($context["remboursement"]) ? $context["remboursement"] : $this->getContext($context, "remboursement")), "created")) {
                // line 16
                echo "                {
                    ";
                // line 17
                $context["hasAgenda"] = 1;
                // line 18
                echo "                    \"startDate\":\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["remboursement"]) ? $context["remboursement"] : $this->getContext($context, "remboursement")), "created"), "Y,m,d"), "html", null, true);
                echo "\",
                    \"endDate\":\"";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["remboursement"]) ? $context["remboursement"] : $this->getContext($context, "remboursement")), "created"), "Y,m,d"), "html", null, true);
                echo "\",
                    \"headline\":\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["remboursement"]) ? $context["remboursement"] : $this->getContext($context, "remboursement")), "activite"), "nom"), "html", null, true);
                echo "<br/>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["remboursement"]) ? $context["remboursement"] : $this->getContext($context, "remboursement")), "membre"), "nom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["remboursement"]) ? $context["remboursement"] : $this->getContext($context, "remboursement")), "membre"), "prenom"), "html", null, true);
                echo "\",
                    \"text\":\"<p><b>Montant activité :</b> ";
                // line 21
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["remboursement"]) ? $context["remboursement"] : $this->getContext($context, "remboursement")), "prix"), 2), "html", null, true);
                echo " €<br/><b>Montant participation :</b> ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["remboursement"]) ? $context["remboursement"] : $this->getContext($context, "remboursement")), "montantParticipation"), 2), "html", null, true);
                echo " € ";
                if ($this->getAttribute((isset($context["remboursement"]) ? $context["remboursement"] : $this->getContext($context, "remboursement")), "valide")) {
                    echo "<span class='alert alert-success' style='text-transform:uppercase;'>Remboursé</span>";
                } else {
                    echo "<span style='text-transform:uppercase;' class='alert alert-warning'>En attente de validation</span></p>";
                }
                echo "\",
                    \"asset\":
                    {
                        \"media\":\"<table class='table table-bordered'>\" +
                                \"<tr>\" +
                                \"<th class='text-center' colspan='2'>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["remboursement"]) ? $context["remboursement"] : $this->getContext($context, "remboursement")), "activite"), "nom"), "html", null, true);
                echo "</th><th class='text-center'>Paiement</th>\" +
                                \"</tr>\" +
                                \"<tr>\" +
                                \"<td class='text-left'><strong>Nom : </strong></td>\" +
                                \"<td><strong>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["remboursement"]) ? $context["remboursement"] : $this->getContext($context, "remboursement")), "membre"), "nom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["remboursement"]) ? $context["remboursement"] : $this->getContext($context, "remboursement")), "membre"), "prenom"), "html", null, true);
                echo "</strong></td>\" +
\t\t\t\t\t\t\t\t";
                // line 31
                if ($this->getAttribute((isset($context["remboursement"]) ? $context["remboursement"] : $this->getContext($context, "remboursement")), "valide")) {
                    // line 32
                    echo "\t\t\t\t\t\t\t\t\"<td class='text-center' rowspan='3' style='background-color:#dff0d8;color: #3c763d;vertical-align:middle;'><div class='glyphicon glyphicon-ok'></div></td>\" +
\t\t\t\t\t\t\t\t";
                } else {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t\"<td class='text-center' rowspan='3' style='background-color:#f2dede;color: #a94442;vertical-align:middle;'><div class='glyphicon glyphicon-remove'></div></td>\" +
\t\t\t\t\t\t\t\t";
                }
                // line 36
                echo "                                \"</tr>\" +
                                \"<tr>\" +
                                \"<td class='text-left'><strong>Agence : </strong></td>\" +
                                \"<td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["remboursement"]) ? $context["remboursement"] : $this->getContext($context, "remboursement")), "membre"), "famille"), "agence"), "nom"), "html", null, true);
                echo "</td>\" +
                                \"</tr>\" +
                                \"<tr>\" +
                                \"<td class='text-left'><strong>Participation : </strong></td>\" +
                                \"<td>";
                // line 43
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["remboursement"]) ? $context["remboursement"] : $this->getContext($context, "remboursement")), "montantParticipation"), 2), "html", null, true);
                echo " €</td>\" +
                                \"</tr>\" +
                                \"</table>\",
                        \"credit\":\"\",
                        \"caption\":\"\"
                    }
                },
                ";
            }
            // line 51
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['remboursement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            ]
        }
    };
    jQuery(document).ready(function() {
        createStoryJS({
            type:       'timeline',
            width:      '100%',
            height:     '380',
            source:     dataObject,
            embed_id:   'planning',
\t\t\tstart_at_end:true, 
            lang:        'fr'
        });
    });
</script>
<div class=\"row-fluid\">
    <div class=\"span12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><span class=\"glyphicon glyphicon-calendar\"></span> Les derniers remboursements</h3>
            </div>
            <div class=\"panel-body\">
                <div id=\"planning\"></div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "GestionCoreBundle:Block:timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 100,  223 => 55,  956 => 271,  946 => 302,  933 => 296,  917 => 291,  914 => 290,  912 => 289,  901 => 285,  898 => 284,  887 => 280,  870 => 274,  868 => 273,  863 => 269,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  791 => 262,  788 => 233,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  757 => 221,  743 => 217,  738 => 214,  679 => 200,  673 => 198,  665 => 196,  663 => 195,  657 => 193,  629 => 186,  626 => 184,  603 => 179,  600 => 178,  588 => 175,  570 => 164,  554 => 224,  479 => 135,  418 => 112,  370 => 101,  356 => 126,  624 => 224,  620 => 223,  601 => 216,  580 => 207,  559 => 201,  545 => 198,  497 => 156,  485 => 124,  447 => 113,  424 => 114,  412 => 126,  401 => 89,  391 => 163,  379 => 104,  376 => 103,  333 => 99,  326 => 86,  292 => 91,  287 => 77,  264 => 74,  178 => 35,  12 => 36,  778 => 267,  763 => 244,  742 => 240,  734 => 237,  717 => 210,  714 => 232,  711 => 231,  703 => 226,  653 => 218,  650 => 192,  644 => 190,  616 => 182,  595 => 205,  587 => 203,  578 => 200,  573 => 198,  546 => 175,  534 => 162,  531 => 225,  513 => 230,  475 => 169,  448 => 119,  445 => 152,  429 => 148,  422 => 147,  396 => 138,  345 => 116,  307 => 82,  286 => 98,  247 => 75,  206 => 46,  90 => 38,  283 => 78,  236 => 42,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1106 => 316,  1103 => 315,  1100 => 314,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 269,  947 => 249,  939 => 243,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 286,  900 => 228,  897 => 227,  892 => 282,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  865 => 272,  862 => 212,  857 => 267,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 246,  817 => 192,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 233,  793 => 182,  783 => 177,  769 => 247,  767 => 246,  764 => 169,  756 => 165,  751 => 163,  746 => 161,  739 => 239,  729 => 235,  724 => 154,  721 => 153,  715 => 151,  710 => 149,  707 => 208,  699 => 142,  697 => 141,  694 => 138,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  640 => 211,  619 => 183,  617 => 112,  598 => 107,  576 => 199,  564 => 162,  557 => 96,  550 => 187,  547 => 93,  503 => 81,  493 => 143,  480 => 75,  456 => 68,  450 => 114,  414 => 144,  408 => 109,  368 => 126,  355 => 122,  350 => 26,  342 => 23,  332 => 88,  316 => 16,  255 => 67,  245 => 83,  194 => 39,  200 => 31,  180 => 49,  560 => 191,  549 => 182,  532 => 192,  528 => 160,  525 => 157,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  508 => 165,  501 => 154,  474 => 122,  460 => 123,  455 => 115,  442 => 151,  439 => 150,  436 => 132,  433 => 149,  426 => 58,  415 => 127,  405 => 108,  360 => 128,  354 => 101,  331 => 96,  322 => 93,  304 => 81,  272 => 91,  249 => 74,  233 => 304,  216 => 35,  140 => 51,  126 => 66,  192 => 53,  161 => 31,  320 => 92,  288 => 80,  237 => 63,  232 => 78,  222 => 66,  185 => 61,  150 => 34,  100 => 62,  692 => 399,  683 => 223,  678 => 133,  676 => 199,  666 => 222,  661 => 220,  656 => 219,  641 => 189,  635 => 188,  615 => 354,  590 => 204,  583 => 334,  577 => 206,  575 => 328,  536 => 194,  524 => 90,  510 => 178,  482 => 136,  464 => 125,  452 => 268,  423 => 57,  421 => 90,  413 => 241,  400 => 47,  393 => 168,  385 => 159,  374 => 128,  324 => 110,  310 => 83,  302 => 79,  296 => 151,  282 => 161,  278 => 95,  270 => 84,  259 => 87,  226 => 131,  365 => 141,  347 => 140,  338 => 101,  319 => 124,  315 => 90,  301 => 80,  299 => 8,  281 => 75,  268 => 71,  265 => 51,  262 => 81,  260 => 363,  257 => 103,  225 => 56,  213 => 69,  211 => 81,  197 => 30,  174 => 34,  252 => 68,  242 => 65,  231 => 69,  207 => 33,  195 => 54,  165 => 77,  129 => 67,  84 => 32,  167 => 56,  155 => 30,  127 => 18,  23 => 27,  58 => 20,  20 => 1,  1127 => 457,  1123 => 456,  1119 => 455,  1109 => 317,  1098 => 313,  1091 => 438,  1081 => 431,  1077 => 305,  1066 => 426,  1062 => 425,  1058 => 424,  1053 => 292,  1049 => 422,  1045 => 421,  1037 => 416,  1033 => 415,  1029 => 282,  1020 => 412,  1015 => 410,  1003 => 401,  999 => 400,  991 => 395,  981 => 393,  979 => 260,  976 => 259,  966 => 384,  962 => 383,  953 => 270,  942 => 300,  935 => 367,  925 => 292,  916 => 354,  909 => 288,  905 => 348,  894 => 226,  890 => 281,  883 => 338,  879 => 277,  873 => 217,  869 => 335,  860 => 268,  856 => 328,  852 => 327,  843 => 325,  838 => 323,  825 => 196,  821 => 312,  814 => 191,  804 => 306,  802 => 235,  799 => 234,  789 => 297,  785 => 232,  780 => 303,  774 => 290,  772 => 248,  762 => 286,  753 => 220,  748 => 242,  741 => 274,  728 => 267,  716 => 258,  712 => 150,  706 => 254,  700 => 205,  696 => 204,  688 => 202,  684 => 248,  681 => 247,  664 => 239,  655 => 236,  651 => 235,  647 => 191,  643 => 120,  637 => 230,  632 => 187,  627 => 227,  625 => 361,  622 => 225,  614 => 111,  610 => 181,  607 => 180,  594 => 176,  584 => 173,  582 => 211,  566 => 203,  561 => 161,  556 => 204,  553 => 188,  548 => 176,  540 => 160,  527 => 91,  522 => 156,  520 => 194,  516 => 294,  495 => 158,  487 => 156,  466 => 168,  461 => 70,  453 => 161,  441 => 152,  428 => 116,  417 => 145,  407 => 238,  403 => 48,  398 => 88,  389 => 133,  387 => 110,  384 => 106,  375 => 124,  369 => 148,  359 => 144,  357 => 116,  346 => 111,  343 => 92,  341 => 131,  337 => 90,  327 => 102,  314 => 88,  311 => 83,  309 => 82,  305 => 115,  293 => 90,  289 => 140,  284 => 76,  279 => 77,  277 => 136,  274 => 73,  266 => 70,  261 => 69,  256 => 79,  251 => 101,  220 => 54,  215 => 280,  202 => 55,  198 => 55,  190 => 38,  137 => 29,  132 => 57,  124 => 20,  61 => 15,  34 => 17,  784 => 215,  775 => 213,  760 => 222,  749 => 218,  745 => 241,  736 => 238,  732 => 213,  727 => 203,  725 => 197,  723 => 196,  720 => 211,  713 => 209,  709 => 190,  705 => 189,  702 => 188,  695 => 139,  686 => 181,  682 => 201,  677 => 179,  674 => 178,  672 => 241,  668 => 197,  660 => 194,  652 => 376,  648 => 173,  645 => 369,  638 => 210,  633 => 209,  631 => 364,  628 => 165,  623 => 161,  618 => 160,  612 => 220,  599 => 215,  596 => 106,  593 => 105,  591 => 151,  586 => 150,  579 => 332,  574 => 205,  569 => 325,  562 => 139,  552 => 136,  543 => 174,  533 => 133,  529 => 159,  519 => 127,  500 => 291,  490 => 142,  471 => 129,  467 => 72,  459 => 116,  440 => 106,  437 => 61,  434 => 118,  427 => 99,  420 => 146,  410 => 110,  404 => 90,  402 => 107,  399 => 139,  392 => 82,  388 => 42,  383 => 80,  381 => 105,  378 => 78,  371 => 35,  363 => 32,  361 => 124,  358 => 123,  348 => 118,  344 => 24,  340 => 91,  330 => 103,  325 => 94,  321 => 100,  317 => 107,  313 => 84,  308 => 89,  303 => 87,  298 => 101,  294 => 82,  290 => 90,  275 => 86,  271 => 374,  263 => 365,  258 => 72,  253 => 66,  248 => 116,  244 => 43,  228 => 57,  214 => 63,  191 => 26,  186 => 37,  177 => 43,  175 => 47,  170 => 33,  153 => 72,  146 => 34,  128 => 51,  118 => 47,  113 => 46,  110 => 39,  104 => 43,  97 => 32,  81 => 26,  77 => 25,  65 => 97,  53 => 63,  608 => 225,  602 => 217,  597 => 177,  589 => 213,  585 => 209,  581 => 201,  572 => 204,  568 => 211,  565 => 324,  563 => 202,  558 => 160,  555 => 200,  551 => 221,  541 => 197,  537 => 159,  535 => 197,  530 => 193,  526 => 190,  521 => 182,  515 => 305,  512 => 84,  509 => 228,  507 => 156,  504 => 155,  502 => 180,  499 => 173,  496 => 172,  494 => 122,  491 => 157,  489 => 175,  486 => 286,  483 => 173,  481 => 119,  478 => 74,  476 => 116,  473 => 168,  470 => 121,  468 => 128,  463 => 117,  457 => 160,  454 => 121,  451 => 120,  449 => 138,  444 => 263,  438 => 150,  435 => 149,  432 => 100,  430 => 255,  425 => 146,  411 => 143,  406 => 111,  390 => 136,  382 => 135,  380 => 130,  377 => 129,  373 => 102,  366 => 150,  362 => 148,  353 => 115,  351 => 141,  339 => 191,  335 => 133,  329 => 130,  323 => 85,  318 => 86,  312 => 97,  306 => 88,  300 => 93,  295 => 100,  291 => 80,  285 => 79,  280 => 77,  276 => 393,  267 => 78,  250 => 44,  239 => 64,  229 => 91,  218 => 97,  212 => 49,  210 => 59,  205 => 90,  188 => 25,  184 => 48,  181 => 232,  169 => 78,  160 => 39,  152 => 36,  148 => 49,  134 => 52,  114 => 45,  107 => 44,  76 => 2,  70 => 30,  273 => 85,  269 => 133,  254 => 46,  243 => 66,  240 => 64,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 39,  221 => 38,  219 => 101,  217 => 64,  208 => 47,  204 => 57,  179 => 44,  159 => 196,  143 => 33,  135 => 51,  119 => 44,  102 => 13,  71 => 18,  67 => 36,  63 => 87,  59 => 24,  38 => 25,  94 => 10,  89 => 30,  85 => 4,  75 => 30,  68 => 30,  56 => 15,  87 => 29,  21 => 11,  26 => 13,  93 => 39,  88 => 39,  78 => 3,  46 => 28,  27 => 6,  44 => 16,  31 => 4,  28 => 1,  201 => 56,  196 => 52,  183 => 50,  171 => 153,  166 => 32,  163 => 40,  158 => 74,  156 => 38,  151 => 29,  142 => 25,  138 => 49,  136 => 24,  121 => 17,  117 => 43,  105 => 36,  91 => 39,  62 => 50,  49 => 18,  24 => 2,  25 => 5,  19 => 1,  79 => 33,  72 => 29,  69 => 99,  47 => 17,  40 => 44,  37 => 14,  22 => 12,  246 => 67,  157 => 56,  145 => 26,  139 => 51,  131 => 48,  123 => 65,  120 => 46,  115 => 47,  111 => 40,  108 => 45,  101 => 34,  98 => 36,  96 => 40,  83 => 55,  74 => 31,  66 => 21,  55 => 76,  52 => 21,  50 => 14,  43 => 45,  41 => 15,  35 => 24,  32 => 15,  29 => 4,  209 => 58,  203 => 45,  199 => 265,  193 => 51,  189 => 52,  187 => 64,  182 => 36,  176 => 309,  173 => 46,  168 => 43,  164 => 55,  162 => 41,  154 => 36,  149 => 35,  147 => 27,  144 => 26,  141 => 72,  133 => 69,  130 => 22,  125 => 46,  122 => 45,  116 => 43,  112 => 15,  109 => 46,  106 => 14,  103 => 38,  99 => 12,  95 => 31,  92 => 59,  86 => 30,  82 => 26,  80 => 31,  73 => 1,  64 => 27,  60 => 86,  57 => 23,  54 => 19,  51 => 24,  48 => 54,  45 => 53,  42 => 8,  39 => 21,  36 => 8,  33 => 10,  30 => 9,);
    }
}

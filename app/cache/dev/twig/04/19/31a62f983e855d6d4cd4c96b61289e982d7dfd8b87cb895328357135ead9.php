<?php

/* WebProfilerBundle:Profiler:toolbar.css.twig */
class __TwigTemplate_041931a62f983e855d6d4cd4c96b61289e982d7dfd8b87cb895328357135ead9 extends Twig_Template
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
        echo ".sf-minitoolbar {
    display: none;

    position: fixed;
    bottom: 0;
    right: 0;

    padding: 5px 5px 0;

    background-color: #f7f7f7;
    background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
    background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
    background: linear-gradient(top, #e4e4e4, #ffffff);

    border-radius: 16px 0 0 0;

    z-index: 6000000;
}

.sf-toolbarreset * {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
}

.sf-toolbarreset {
    position: fixed;
    background-color: #f7f7f7;
    left: 0;
    right: 0;
    height: 38px;
    margin: 0;
    padding: 0 40px 0 0;
    z-index: 6000000;
    font: 11px Verdana, Arial, sans-serif;
    text-align: left;
    color: #2f2f2f;

    background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
    background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
    background: linear-gradient(top, #e4e4e4, #ffffff);

    bottom: 0;
    border-top: 1px solid #bbb;
}
.sf-toolbarreset abbr {
    border-bottom: 1px dotted #000000;
    cursor: help;
}
.sf-toolbarreset span,
.sf-toolbarreset div {
    font-size: 11px;
}
.sf-toolbarreset img {
    width: auto;
    display: inline;
}

.sf-toolbarreset .hide-button {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: 40px;
    height: 40px;
    cursor: pointer;
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAMAAAAMCGV4AAAAllBMVEXDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PExMTPz8/Q0NDR0dHT09Pb29vc3Nzf39/h4eHi4uLj4+P6+vr7+/v8/Pz9/f3///+Nh2QuAAAAIXRSTlMABgwPGBswMzk8QktRV4SKjZOWmaKlq7TAxszb3urt+fy1vNEpAAAAiklEQVQIHUXBBxKCQBREwRFzDqjoGh+C2YV//8u5Sll2S0E/dof1tKdKM6GyqCto7PjZRJIS/mbSELgXOSd/BzpKIH1ZefVWpDDTHsi8mZVnwImPi5ndCLbaAZk3M58Bay0h9VbeSvMpjDUAHj4jL55AW1rxN5fU2PLjIgVRzNdxVFOlGzvnJi0Fb1XNGBHA9uQOAAAAAElFTkSuQmCC');
    background-repeat: no-repeat;
    background-position: 13px 11px;
}

.sf-toolbar-block {
    white-space: nowrap;
    color: #2f2f2f;
    display: block;
    min-height: 28px;
    border-right: 1px solid #e4e4e4;
    padding: 0;
    float: left;
    cursor: default;
}

.sf-toolbar-block span {
    display: inline-block;
}

.sf-toolbar-block .sf-toolbar-info-piece {
    line-height: 19px;
    margin-bottom: 5px;
}

.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {
    padding: 0px 5px;
    border-radius: 5px;
    margin-bottom: 0px;
    vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-piece:last-child {
    margin-bottom: 0;
}

.sf-toolbar-block .sf-toolbar-info-piece a,
.sf-toolbar-block .sf-toolbar-info-piece abbr {
    color: #2f2f2f;
}

.sf-toolbar-block .sf-toolbar-info-piece b {
    display: inline-block;
    width: 110px;
    vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-with-next-pointer:after {
    content: ' :: ';
    color: #999;
}

.sf-toolbar-block .sf-toolbar-info-with-delimiter {
    border-right: 1px solid #999;
    padding-right: 5px;
    margin-right: 5px;
}

.sf-toolbar-block .sf-toolbar-info {
    display: none;
    position: absolute;
    background-color: #fff;
    border: 1px solid #bbb;
    padding: 9px 0;
    margin-left: -1px;

    bottom: 38px;
    border-bottom-width: 0;
    border-bottom: 1px solid #bbb;
    border-radius: 4px 4px 0 0;
}

.sf-toolbarreset > div:last-of-type .sf-toolbar-info {
    right: -1px;
}

.sf-toolbar-block .sf-toolbar-info:empty {
    visibility: hidden;
}

.sf-toolbar-block .sf-toolbar-status {
    display: inline-block;
    color: #fff;
    background-color: #666;
    padding: 3px 6px;
    border-radius: 3px;
    margin-bottom: 2px;
    vertical-align: middle;
    min-width: 6px;
    min-height: 13px;
}

.sf-toolbar-block .sf-toolbar-status abbr {
    color: #fff;
    border-bottom: 1px dotted black;
}

.sf-toolbar-block .sf-toolbar-status-green {
    background-color: #759e1a;
}

.sf-toolbar-block .sf-toolbar-status-red {
    background-color: #a33;
}

.sf-toolbar-block .sf-toolbar-status-yellow {
    background-color: #ffcc00;
    color: #000;
}

.sf-toolbar-block .sf-toolbar-status-black {
    background-color: #000;
}

.sf-toolbar-block .sf-toolbar-icon {
    display: block;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > span {
    display: block;
    font-weight: normal;
    text-decoration: none;
    margin: 0;
    padding: 5px 8px;
    min-width: 20px;
    text-align: center;
    vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > a:link
.sf-toolbar-block .sf-toolbar-icon > a:hover {
    color: black !important;
}

.sf-toolbar-block .sf-toolbar-icon > a[href]:after {
    content: \"\";
}

.sf-toolbar-block .sf-toolbar-icon img {
    border-width: 0;
    vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon img + span {
    margin-left: 5px;
    margin-top: 2px;
}

.sf-toolbar-block .sf-toolbar-icon .sf-toolbar-status {
    border-radius: 12px;
    border-bottom-left-radius: 0;
    margin-top: 0;
}

.sf-toolbar-block .sf-toolbar-info-method {
    border-bottom: 1px dashed #ccc;
    cursor: help;
}

.sf-toolbar-block .sf-toolbar-info-method[onclick=\"\"] {
    border-bottom: none;
    cursor: inherit;
}

.sf-toolbar-info-php {}
.sf-toolbar-info-php-ext {}

.sf-toolbar-info-php-ext .sf-toolbar-status {
    margin-left: 2px;
}

.sf-toolbar-info-php-ext .sf-toolbar-status:first-child {
    margin-left: 0;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail {
    display: inline-block;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional:empty,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail:empty {
    display: none;
}

.sf-toolbarreset:hover {
    box-shadow: rgba(0, 0, 0, 0.3) 0 0 50px;
}

.sf-toolbar-block:hover {
    box-shadow: rgba(0, 0, 0, 0.35) 0 0 5px;
    border-right: none;
    margin-right: 1px;
    position: relative;
}

.sf-toolbar-block:hover .sf-toolbar-icon {
    background-color: #fff;
    border-top: 1px dotted #DDD;
    position: relative;
    margin-top: -1px;
    z-index: 10002;
}

.sf-toolbar-block:hover .sf-toolbar-info {
    display: block;
    min-width: -webkit-calc(100% + 2px);
    min-width: calc(100% + 2px);
    z-index: 10001;
    box-sizing: border-box;
    padding: 9px;
    line-height: 19px;
}

/***** Override the setting when the toolbar is on the top *****/
";
        // line 286
        if (((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")) == "top")) {
            // line 287
            echo "    .sf-minitoolbar {
        top: 0;
        bottom: auto;
        right: 0;

        background-color: #f7f7f7;

        background-image: -moz-linear-gradient(225deg, #e4e4e4, #ffffff);
        background-image: -webkit-gradient(linear, 100% 0%, 0% 0%, from(#e4e4e4), to(#ffffff));
        background-image: -o-linear-gradient(135deg, #e4e4e4, #ffffff);
        background: linear-gradient(225deg, #e4e4e4, #ffffff);

        border-radius: 0 0 0 16px;
    }

    .sf-toolbarreset {
        background-image: -moz-linear-gradient(225deg, #e4e4e4, #ffffff);
        background-image: -webkit-gradient(linear, 100% 0%, 0% 0%, from(#e4e4e4), to(#ffffff));
        background-image: -o-linear-gradient(135deg, #e4e4e4, #ffffff);
        background: linear-gradient(225deg, #e4e4e4, #ffffff);

        top: 0;
        bottom: auto;
        border-bottom: 1px solid #bbb;
    }

    .sf-toolbar-block .sf-toolbar-info {
        top: 39px;
        bottom: auto;
        border-top-width: 0;
        border-radius: 0 0 4px 4px;
    }

    .sf-toolbar-block:hover .sf-toolbar-icon {
        border-top: none;
        border-bottom: 1px dotted #DDD;
        margin-top: 0;
        margin-bottom: -1px;
    }
";
        }
        // line 327
        echo "
";
        // line 328
        if ((!(isset($context["floatable"]) ? $context["floatable"] : $this->getContext($context, "floatable")))) {
            // line 329
            echo "    .sf-toolbarreset {
        position: static;
        background: #cbcbcb;

        background-image: -moz-linear-gradient(90deg, #cbcbcb, #e8e8e8) !important;
        background-image: -webkit-gradient(linear, 0% 0%, 100% 0%, from(#cbcbcb), to(#e8e8e8)) !important;
        background-image: -o-linear-gradient(180deg, #cbcbcb, #e8e8e8) !important;
        background: linear-gradient(90deg, #cbcbcb, #e8e8e8) !important;
    }
";
        }
        // line 339
        echo "
/***** Media query *****/
@media screen and (max-width: 779px) {
    .sf-toolbar-block .sf-toolbar-icon > * > :first-child ~ * {
        display: none;
    }

    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional,
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
        display: none !important;
    }
}

@media screen and (min-width: 880px) {
    .sf-toolbar-block .sf-toolbar-icon a[href\$=\"config\"] .sf-toolbar-info-piece-additional {
        display: inline-block;
    }
}

@media screen and (min-width: 980px) {
    .sf-toolbar-block .sf-toolbar-icon a[href\$=\"security\"] .sf-toolbar-info-piece-additional {
        display: inline-block;
    }
}

@media screen and (max-width: 1179px) {
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional {
        display: none;
    }
}

@media screen and (max-width: 1439px) {
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
        display: none;
    }
}

/***** Media query print: Do not print the Toolbar. *****/
@media print {
    .sf-toolbar {
        display: none;
        visibility: hidden;
    }
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  792 => 488,  690 => 469,  634 => 456,  606 => 449,  567 => 414,  367 => 339,  328 => 139,  234 => 90,  1073 => 656,  1069 => 654,  1044 => 645,  1026 => 633,  1023 => 632,  1021 => 631,  1013 => 627,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  963 => 604,  959 => 602,  941 => 595,  937 => 593,  930 => 590,  926 => 589,  919 => 587,  911 => 581,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  864 => 558,  854 => 552,  836 => 543,  824 => 537,  800 => 523,  790 => 519,  770 => 507,  740 => 491,  737 => 490,  718 => 482,  646 => 451,  642 => 449,  636 => 446,  542 => 421,  462 => 202,  446 => 197,  431 => 189,  394 => 134,  241 => 93,  505 => 257,  492 => 253,  477 => 249,  458 => 242,  419 => 227,  172 => 57,  1140 => 461,  1136 => 460,  1132 => 459,  1111 => 446,  1104 => 442,  1094 => 435,  1090 => 433,  1075 => 429,  1050 => 420,  1046 => 419,  1042 => 418,  1028 => 414,  994 => 397,  992 => 396,  989 => 395,  975 => 609,  948 => 371,  938 => 364,  922 => 354,  907 => 347,  896 => 573,  851 => 327,  827 => 312,  815 => 531,  787 => 294,  766 => 284,  754 => 499,  719 => 258,  701 => 253,  685 => 245,  592 => 214,  517 => 404,  443 => 152,  416 => 226,  397 => 212,  334 => 141,  1183 => 475,  1175 => 473,  1165 => 468,  1147 => 456,  1137 => 449,  1133 => 447,  1122 => 454,  1114 => 442,  1105 => 440,  1101 => 439,  1093 => 434,  1089 => 433,  1085 => 432,  1076 => 430,  1071 => 428,  1059 => 419,  1055 => 648,  1047 => 413,  1035 => 639,  1022 => 402,  1018 => 630,  998 => 389,  972 => 608,  965 => 368,  929 => 358,  913 => 347,  904 => 344,  899 => 342,  886 => 340,  882 => 339,  875 => 327,  850 => 316,  835 => 309,  823 => 305,  797 => 291,  777 => 277,  761 => 282,  733 => 260,  708 => 253,  704 => 252,  698 => 471,  693 => 247,  671 => 465,  630 => 227,  609 => 220,  604 => 219,  539 => 193,  498 => 170,  472 => 247,  386 => 159,  372 => 121,  297 => 200,  336 => 100,  223 => 55,  956 => 271,  946 => 360,  933 => 296,  917 => 348,  914 => 290,  912 => 289,  901 => 285,  898 => 284,  887 => 280,  870 => 560,  868 => 273,  863 => 324,  853 => 261,  848 => 548,  840 => 253,  834 => 316,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 492,  807 => 491,  805 => 236,  791 => 262,  788 => 486,  773 => 276,  771 => 232,  768 => 231,  765 => 230,  757 => 269,  743 => 217,  738 => 214,  679 => 466,  673 => 242,  665 => 196,  663 => 236,  657 => 193,  629 => 454,  626 => 443,  603 => 439,  600 => 178,  588 => 215,  570 => 210,  554 => 224,  479 => 172,  418 => 135,  370 => 203,  356 => 122,  624 => 224,  620 => 451,  601 => 446,  580 => 207,  559 => 427,  545 => 198,  497 => 156,  485 => 124,  447 => 113,  424 => 229,  412 => 126,  401 => 135,  391 => 133,  379 => 206,  376 => 103,  333 => 115,  326 => 138,  292 => 88,  287 => 86,  264 => 74,  178 => 59,  12 => 36,  778 => 267,  763 => 244,  742 => 492,  734 => 237,  717 => 210,  714 => 232,  711 => 231,  703 => 226,  653 => 218,  650 => 234,  644 => 190,  616 => 440,  595 => 215,  587 => 434,  578 => 432,  573 => 211,  546 => 423,  534 => 418,  531 => 225,  513 => 230,  475 => 248,  448 => 151,  445 => 236,  429 => 188,  422 => 184,  396 => 138,  345 => 147,  307 => 128,  286 => 112,  247 => 75,  206 => 46,  90 => 42,  283 => 115,  236 => 42,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 474,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 460,  1145 => 322,  1143 => 321,  1118 => 443,  1115 => 319,  1112 => 318,  1106 => 316,  1103 => 315,  1100 => 314,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 430,  1074 => 304,  1067 => 299,  1064 => 651,  1056 => 293,  1051 => 647,  1048 => 646,  1040 => 285,  1036 => 284,  1032 => 409,  1027 => 281,  1024 => 280,  1016 => 405,  1014 => 272,  1012 => 404,  1009 => 397,  1004 => 624,  982 => 261,  973 => 258,  970 => 607,  967 => 606,  964 => 255,  961 => 366,  958 => 253,  955 => 600,  952 => 251,  950 => 361,  947 => 597,  939 => 356,  936 => 297,  934 => 241,  931 => 295,  923 => 588,  920 => 235,  918 => 352,  915 => 233,  903 => 346,  900 => 228,  897 => 227,  892 => 341,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  865 => 331,  862 => 557,  857 => 267,  849 => 206,  846 => 315,  844 => 546,  841 => 313,  833 => 308,  830 => 539,  828 => 538,  817 => 310,  812 => 530,  809 => 297,  801 => 185,  798 => 300,  796 => 489,  793 => 298,  783 => 177,  769 => 247,  767 => 273,  764 => 505,  756 => 165,  751 => 163,  746 => 478,  739 => 239,  729 => 262,  724 => 484,  721 => 257,  715 => 151,  710 => 475,  707 => 208,  699 => 142,  697 => 252,  694 => 470,  689 => 137,  680 => 134,  675 => 239,  662 => 125,  658 => 235,  654 => 123,  649 => 462,  640 => 448,  619 => 183,  617 => 223,  598 => 107,  576 => 199,  564 => 162,  557 => 96,  550 => 187,  547 => 93,  503 => 81,  493 => 143,  480 => 75,  456 => 68,  450 => 155,  414 => 134,  408 => 176,  368 => 126,  355 => 329,  350 => 327,  342 => 137,  332 => 88,  316 => 16,  255 => 101,  245 => 83,  194 => 68,  200 => 72,  180 => 70,  560 => 191,  549 => 411,  532 => 410,  528 => 160,  525 => 196,  523 => 263,  518 => 180,  514 => 415,  511 => 166,  508 => 258,  501 => 154,  474 => 170,  460 => 123,  455 => 241,  442 => 235,  439 => 195,  436 => 143,  433 => 232,  426 => 58,  415 => 180,  405 => 108,  360 => 128,  354 => 199,  331 => 140,  322 => 99,  304 => 90,  272 => 91,  249 => 92,  233 => 87,  216 => 79,  140 => 51,  126 => 66,  192 => 53,  161 => 58,  320 => 127,  288 => 118,  237 => 91,  232 => 88,  222 => 83,  185 => 75,  150 => 55,  100 => 42,  692 => 474,  683 => 244,  678 => 468,  676 => 467,  666 => 222,  661 => 220,  656 => 237,  641 => 189,  635 => 229,  615 => 221,  590 => 204,  583 => 214,  577 => 212,  575 => 328,  536 => 419,  524 => 90,  510 => 178,  482 => 250,  464 => 244,  452 => 268,  423 => 137,  421 => 90,  413 => 141,  400 => 136,  393 => 211,  385 => 159,  374 => 128,  324 => 112,  310 => 83,  302 => 125,  296 => 121,  282 => 161,  278 => 106,  270 => 102,  259 => 103,  226 => 84,  365 => 125,  347 => 119,  338 => 116,  319 => 94,  315 => 131,  301 => 80,  299 => 8,  281 => 114,  268 => 71,  265 => 105,  262 => 93,  260 => 72,  257 => 103,  225 => 56,  213 => 78,  211 => 81,  197 => 69,  174 => 74,  252 => 68,  242 => 65,  231 => 61,  207 => 76,  195 => 53,  165 => 83,  129 => 67,  84 => 27,  167 => 71,  155 => 47,  127 => 35,  23 => 13,  58 => 18,  20 => 1,  1127 => 457,  1123 => 456,  1119 => 455,  1109 => 441,  1098 => 313,  1091 => 438,  1081 => 431,  1077 => 657,  1066 => 427,  1062 => 426,  1058 => 425,  1053 => 292,  1049 => 422,  1045 => 421,  1037 => 411,  1033 => 416,  1029 => 282,  1020 => 412,  1015 => 410,  1003 => 401,  999 => 400,  991 => 385,  981 => 378,  979 => 388,  976 => 259,  966 => 383,  962 => 383,  953 => 270,  942 => 300,  935 => 592,  925 => 353,  916 => 354,  909 => 580,  905 => 579,  894 => 226,  890 => 281,  883 => 338,  879 => 277,  873 => 333,  869 => 332,  860 => 323,  856 => 329,  852 => 327,  843 => 325,  838 => 544,  825 => 196,  821 => 312,  814 => 299,  804 => 306,  802 => 301,  799 => 234,  789 => 286,  785 => 293,  780 => 513,  774 => 509,  772 => 248,  762 => 504,  753 => 220,  748 => 242,  741 => 271,  728 => 267,  716 => 255,  712 => 254,  706 => 473,  700 => 205,  696 => 476,  688 => 246,  684 => 248,  681 => 244,  664 => 463,  655 => 457,  651 => 235,  647 => 191,  643 => 230,  637 => 230,  632 => 187,  627 => 224,  625 => 453,  622 => 452,  614 => 222,  610 => 220,  607 => 219,  594 => 176,  584 => 173,  582 => 212,  566 => 207,  561 => 205,  556 => 204,  553 => 425,  548 => 201,  540 => 200,  527 => 408,  522 => 406,  520 => 194,  516 => 294,  495 => 158,  487 => 156,  466 => 245,  461 => 70,  453 => 199,  441 => 196,  428 => 116,  417 => 145,  407 => 138,  403 => 136,  398 => 127,  389 => 160,  387 => 164,  384 => 208,  375 => 205,  369 => 148,  359 => 123,  357 => 116,  346 => 111,  343 => 146,  341 => 117,  337 => 90,  327 => 101,  314 => 88,  311 => 94,  309 => 129,  305 => 108,  293 => 120,  289 => 196,  284 => 76,  279 => 83,  277 => 136,  274 => 110,  266 => 70,  261 => 69,  256 => 96,  251 => 182,  220 => 81,  215 => 63,  202 => 94,  198 => 54,  190 => 49,  137 => 28,  132 => 26,  124 => 21,  61 => 12,  34 => 5,  784 => 215,  775 => 485,  760 => 222,  749 => 479,  745 => 493,  736 => 238,  732 => 487,  727 => 476,  725 => 261,  723 => 196,  720 => 211,  713 => 255,  709 => 254,  705 => 480,  702 => 472,  695 => 139,  686 => 468,  682 => 467,  677 => 465,  674 => 178,  672 => 241,  668 => 464,  660 => 464,  652 => 376,  648 => 173,  645 => 232,  638 => 230,  633 => 209,  631 => 364,  628 => 444,  623 => 223,  618 => 160,  612 => 220,  599 => 215,  596 => 216,  593 => 105,  591 => 436,  586 => 150,  579 => 211,  574 => 431,  569 => 208,  562 => 139,  552 => 136,  543 => 174,  533 => 198,  529 => 409,  519 => 127,  500 => 184,  490 => 142,  471 => 129,  467 => 72,  459 => 153,  440 => 106,  437 => 61,  434 => 142,  427 => 230,  420 => 141,  410 => 110,  404 => 129,  402 => 137,  399 => 139,  392 => 82,  388 => 209,  383 => 80,  381 => 105,  378 => 157,  371 => 156,  363 => 153,  361 => 152,  358 => 151,  348 => 140,  344 => 24,  340 => 145,  330 => 103,  325 => 129,  321 => 135,  317 => 107,  313 => 110,  308 => 287,  303 => 122,  298 => 120,  294 => 82,  290 => 119,  275 => 105,  271 => 190,  263 => 75,  258 => 187,  253 => 100,  248 => 97,  244 => 65,  228 => 57,  214 => 63,  191 => 67,  186 => 72,  177 => 69,  175 => 58,  170 => 84,  153 => 77,  146 => 34,  128 => 42,  118 => 49,  113 => 48,  110 => 38,  104 => 31,  97 => 32,  81 => 23,  77 => 20,  65 => 11,  53 => 15,  608 => 225,  602 => 217,  597 => 216,  589 => 213,  585 => 209,  581 => 213,  572 => 204,  568 => 209,  565 => 430,  563 => 429,  558 => 160,  555 => 200,  551 => 424,  541 => 197,  537 => 159,  535 => 199,  530 => 417,  526 => 190,  521 => 182,  515 => 305,  512 => 84,  509 => 228,  507 => 156,  504 => 155,  502 => 256,  499 => 173,  496 => 172,  494 => 254,  491 => 178,  489 => 252,  486 => 176,  483 => 173,  481 => 119,  478 => 160,  476 => 116,  473 => 168,  470 => 121,  468 => 156,  463 => 117,  457 => 160,  454 => 156,  451 => 120,  449 => 198,  444 => 263,  438 => 150,  435 => 149,  432 => 100,  430 => 145,  425 => 146,  411 => 221,  406 => 111,  390 => 136,  382 => 131,  380 => 158,  377 => 129,  373 => 156,  366 => 202,  362 => 124,  353 => 328,  351 => 141,  339 => 191,  335 => 134,  329 => 131,  323 => 128,  318 => 98,  312 => 130,  306 => 286,  300 => 121,  295 => 100,  291 => 86,  285 => 100,  280 => 194,  276 => 111,  267 => 101,  250 => 101,  239 => 64,  229 => 87,  218 => 97,  212 => 62,  210 => 77,  205 => 90,  188 => 90,  184 => 63,  181 => 65,  169 => 44,  160 => 25,  152 => 46,  148 => 49,  134 => 39,  114 => 36,  107 => 6,  76 => 27,  70 => 24,  273 => 80,  269 => 107,  254 => 73,  243 => 66,  240 => 64,  238 => 70,  235 => 89,  230 => 67,  227 => 86,  224 => 66,  221 => 80,  219 => 101,  217 => 64,  208 => 76,  204 => 75,  179 => 47,  159 => 57,  143 => 31,  135 => 46,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 16,  38 => 12,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 228,  87 => 32,  21 => 11,  26 => 6,  93 => 27,  88 => 24,  78 => 18,  46 => 12,  27 => 7,  44 => 11,  31 => 8,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 35,  142 => 25,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 25,  62 => 27,  49 => 14,  24 => 1,  25 => 5,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 21,  40 => 79,  37 => 7,  22 => 12,  246 => 136,  157 => 39,  145 => 74,  139 => 19,  131 => 48,  123 => 61,  120 => 31,  115 => 10,  111 => 47,  108 => 33,  101 => 30,  98 => 34,  96 => 30,  83 => 31,  74 => 395,  66 => 307,  55 => 15,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 9,  32 => 4,  29 => 3,  209 => 58,  203 => 73,  199 => 93,  193 => 51,  189 => 66,  187 => 64,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 22,  149 => 34,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 41,  122 => 45,  116 => 57,  112 => 12,  109 => 52,  106 => 51,  103 => 223,  99 => 23,  95 => 34,  92 => 28,  86 => 28,  82 => 19,  80 => 27,  73 => 33,  64 => 21,  60 => 18,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}

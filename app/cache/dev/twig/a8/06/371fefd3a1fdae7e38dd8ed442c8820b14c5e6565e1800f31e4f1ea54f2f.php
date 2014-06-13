<?php

/* WebProfilerBundle:Profiler:profiler.css.twig */
class __TwigTemplate_a806371fefd3a1fdae7e38dd8ed442c8820b14c5e6565e1800f31e4f1ea54f2f extends Twig_Template
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
        echo "/*
Copyright (c) 2008, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.6.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}
html, body {
    background-color: #efefef;
}
body {
    font: 1em \"Lucida Sans Unicode\", \"Lucida Grande\", Verdana, Arial, Helvetica, sans-serif;
    text-align: left;
}
p {
    font-size: 14px;
    line-height: 20px;
    color: #313131;
    padding-bottom: 20px
}
strong {
    color: #313131;
    font-weight: bold;
}
em {
    font-style: italic;
}
a {
    color: #6c6159;
}
a img {
    border: none;
}
a:hover {
    text-decoration: underline;
}
button::-moz-focus-inner {
    padding: 0;
    border: none;
}
button {
    overflow: visible;
    width: auto;
    background-color: transparent;
    font-weight: bold;
}
caption {
    margin-bottom: 7px;
}
table, tr, th, td {
    border-collapse: collapse;
    border: 1px solid #d0dbb3;
}
table {
    width: 100%;
    margin: 10px 0 30px;
}
table th {
    font-weight: bold;
    background-color: #f1f7e2;
}
table th, table td {
    font-size: 12px;
    padding: 8px 10px;
}
table td em {
    color: #aaa;
}
fieldset {
    border: none;
}
abbr {
    border-bottom: 1px dotted #000;
    cursor: help;
}
pre, code {
    font-size: 0.9em;
}
.clear {
    clear: both;
    height: 0;
    font-size: 0;
    line-height: 0;
}
.clear-fix:after
{
    content: \"\\0020\";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
* html .clear-fix
{
    height: 1%;
}
.clear-fix
{
    display: block;
}
#content {
    padding: 0 50px;
    margin: 0 auto 20px;
    font-family: Arial, Helvetica, sans-serif;
    min-width: 970px;
}
#header {
    padding: 20px 30px 20px;
}
#header h1 {
    float: left;
}
.search {
    float: right;
}
#menu-profiler {
    border-right: 1px solid #dfdfdf;
}
#menu-profiler li {
    border-bottom: 1px solid #dfdfdf;
    position: relative;
    padding-bottom: 0;
    display: block;
    background-color: #f6f6f6;
    z-index: 10000;
}
#menu-profiler li a {
    color: #404040;
    display: block;
    font-size: 13px;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;
}
#menu-profiler li a span.label {
    display: block;
    padding: 20px 0px 16px 65px;
    min-height: 16px;
    overflow: hidden;
}
#menu-profiler li a span.icon {
    display: block;
    position: absolute;
    left: 0;
    top: 12px;
    width: 60px;
    text-align: center;
}
#menu-profiler li.selected a,
#menu-profiler li a:hover {
    background: #d1d1d1 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA7CAAAAACfn7+eAAAACXZwQWcAAAABAAAAOwDiPIGUAAAAJElEQVQIW2N4y8TA9B+KGZDYEP5/FD4Eo7IgNLJqZDUIMRRTAcmVHUZf/1g/AAAAAElFTkSuQmCC) repeat-x 0 0;
}
#navigation div:first-child,
#menu-profiler li:first-child,
#menu-profiler li:first-child a,
#menu-profiler li:first-child a span.label {
    border-radius: 16px 0 0 0;
}
#menu-profiler li a span.count {
    padding: 0;
    position: absolute;
    right: 10px;
    top: 20px;
}
#collector-wrapper {
    float: left;
    width: 100%;
}
#collector-content {
    margin-left: 250px;
    padding: 30px 40px 40px;
}
#collector-content pre {
    white-space: pre-wrap;
    word-break: break-all;
}
#navigation {
    float: left;
    width: 250px;
    margin-left: -100%;
}
#collector-content table td {
    background-color: white;
}
h1 {
    font-family: Georgia, \"Times New Roman\", Times, serif;
    color: #404040;
}
h2, h3 {
    font-weight: bold;
    margin-bottom: 20px;
}
li {
    padding-bottom: 10px;
}
#main {
    border-radius: 16px;
    margin-bottom: 20px;
}
#menu-profiler span.count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: #fff;
    margin-right: 2px;
    font-size: 11px;
}
#resume {
    background-color: #f6f6f6;
    border-bottom: 1px solid #dfdfdf;
    padding: 18px 10px 0px;
    margin-left: 250px;
    height: 34px;
    color: #313131;
    font-size: 12px;
    border-top-right-radius: 16px;
}
a#resume-view-all {
    display: inline-block;
    padding: 0.2em 0.7em;
    margin-right: 0.5em;
    background-color: #666;
    border-radius: 16px;
    color: white;
    font-weight: bold;
    text-decoration: none;
}
table th.value {
    width: 450px;
    background-color: #dfeeb8;
}
#content h2 {
    font-size: 24px;
    color: #313131;
    font-weight: bold;
}
#content #main {
    padding: 0;
    background-color: #FFF;
    border: 1px solid #dfdfdf;
}
#content #main p {
    color: #313131;
    font-size: 14px;
    padding-bottom: 20px;
}
.sf-toolbarreset {
    border-top: 0;
    padding: 0;
}
.sf-reset .block-exception-detected .text-exception {
    left: 10px;
    right: 10px;
    width: 95%;
}
.sf-reset .block-exception-detected .illustration-exception {
    display: none;
}
ul.alt {
    margin: 10px 0 30px;
}
ul.alt li {
    padding: 5px 7px;
    font-size: 13px;
}
ul.alt li.even {
    background: #f1f7e2;
}
ul.alt li.error {
    background-color: #f66;
    margin-bottom: 1px;
}
ul.alt li.warning {
    background-color: #ffcc00;
    margin-bottom: 1px;
}
ul.alt li.scream, ul.alt li.scream strong {
    color: gray;
}
ul.sf-call-stack li {
    text-size: small;
    padding: 0 0 0 20px;
}
td.main, td.menu {
    text-align: left;
    margin: 0;
    padding: 0;
    border: 0;
    vertical-align: top;
}
.search {
    float: right;
    padding-top: 20px;
}
.search label {
    line-height: 28px;
    vertical-align: middle;
}
.search input {
    width: 195px;
    font-size: 12px;
    border: 1px solid #dadada;
    background: #FFF url(data:image/gif;base64,R0lGODlhAQAFAKIAAPX19e/v7/39/fr6+urq6gAAAAAAAAAAACH5BAAAAAAALAAAAAABAAUAAAMESAEjCQA7) repeat-x left top;
    padding: 5px 6px;
    color: #565656;
}
.search input[type=\"search\"] {
    -webkit-appearance: textfield;
}
#navigation div:first-child {
    margin: 0 0 20px;
    border-top: 0;
}
#navigation .search {
    padding-top: 15px;
    float: none;
    background: none repeat scroll 0 0 #f6f6f6;
    color: #333;
    margin: 20px 0;
    border: 1px solid #dfdfdf;
    border-left: none;
}
#navigation .search h3 {
    font-family: Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    margin-left: 10px;
    font-size: 13px;
}
#navigation .search form {
    padding: 15px 0;
}
#navigation .search button {
    float: right;
    margin-right: 20px;
}
#navigation .search label {
    display: block;
    float: left;
    width: 50px;
}
#navigation .search input,
#navigation .search select,
#navigation .search label,
#navigation .search a {
    font-size: 12px;
}
#navigation .search form {
    padding-left: 10px;
}
#navigation .search input {
    width: 160px;
}
#navigation .import label {
    float: none;
    display: inline;
}
#navigation .import input {
    width: 100px;
}
.timeline {
    background-color: #fbfbfb;
    margin-bottom: 15px;
    margin-top: 5px;
}
#collector-content .routing tr.matches td {
    background-color: #0e0;
}
#collector-content .routing tr.almost td {
    background-color: #fa0;
}
.loading {
    background: transparent url(data:image/gif;base64,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) scroll no-repeat 50% 50%;
    height: 30px;
    display: none;
}
.sf-profiler-timeline .legends {
    font-size: 12px;
    line-height: 1.5em;
}
.sf-profiler-timeline .legends span {
    border-left-width: 10px;
    border-left-style: solid;
    padding: 0 10px 0 5px;
}
.sf-profiler-timeline canvas {
    border: 1px solid #999;
    border-width: 1px 0;
}
.collapsed-menu-parents #resume,
.collapsed-menu-parents #collector-content {
    margin-left: 60px !important;
}
.collapsed-menu {
    width: 60px !important;
}
.collapsed-menu span :not(.icon) {
    display: none !important;
}
.collapsed-menu span.icon img {
    display: inline !important;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:profiler.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  792 => 488,  690 => 469,  634 => 456,  606 => 449,  567 => 414,  367 => 155,  328 => 139,  234 => 90,  1073 => 656,  1069 => 654,  1044 => 645,  1026 => 633,  1023 => 632,  1021 => 631,  1013 => 627,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  963 => 604,  959 => 602,  941 => 595,  937 => 593,  930 => 590,  926 => 589,  919 => 587,  911 => 581,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  864 => 558,  854 => 552,  836 => 543,  824 => 537,  800 => 523,  790 => 519,  770 => 507,  740 => 491,  737 => 490,  718 => 482,  646 => 451,  642 => 449,  636 => 446,  542 => 421,  462 => 202,  446 => 197,  431 => 189,  394 => 134,  241 => 93,  505 => 257,  492 => 253,  477 => 249,  458 => 242,  419 => 227,  172 => 57,  1140 => 461,  1136 => 460,  1132 => 459,  1111 => 446,  1104 => 442,  1094 => 435,  1090 => 433,  1075 => 429,  1050 => 420,  1046 => 419,  1042 => 418,  1028 => 414,  994 => 397,  992 => 396,  989 => 395,  975 => 609,  948 => 371,  938 => 364,  922 => 354,  907 => 347,  896 => 573,  851 => 327,  827 => 312,  815 => 531,  787 => 294,  766 => 284,  754 => 499,  719 => 258,  701 => 253,  685 => 245,  592 => 214,  517 => 404,  443 => 152,  416 => 226,  397 => 212,  334 => 141,  1183 => 475,  1175 => 473,  1165 => 468,  1147 => 456,  1137 => 449,  1133 => 447,  1122 => 454,  1114 => 442,  1105 => 440,  1101 => 439,  1093 => 434,  1089 => 433,  1085 => 432,  1076 => 430,  1071 => 428,  1059 => 419,  1055 => 648,  1047 => 413,  1035 => 639,  1022 => 402,  1018 => 630,  998 => 389,  972 => 608,  965 => 368,  929 => 358,  913 => 347,  904 => 344,  899 => 342,  886 => 340,  882 => 339,  875 => 327,  850 => 316,  835 => 309,  823 => 305,  797 => 291,  777 => 277,  761 => 282,  733 => 260,  708 => 253,  704 => 252,  698 => 471,  693 => 247,  671 => 465,  630 => 227,  609 => 220,  604 => 219,  539 => 193,  498 => 170,  472 => 247,  386 => 159,  372 => 121,  297 => 200,  336 => 100,  223 => 55,  956 => 271,  946 => 360,  933 => 296,  917 => 348,  914 => 290,  912 => 289,  901 => 285,  898 => 284,  887 => 280,  870 => 560,  868 => 273,  863 => 324,  853 => 261,  848 => 548,  840 => 253,  834 => 316,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 492,  807 => 491,  805 => 236,  791 => 262,  788 => 486,  773 => 276,  771 => 232,  768 => 231,  765 => 230,  757 => 269,  743 => 217,  738 => 214,  679 => 466,  673 => 242,  665 => 196,  663 => 236,  657 => 193,  629 => 454,  626 => 443,  603 => 439,  600 => 178,  588 => 215,  570 => 210,  554 => 224,  479 => 172,  418 => 135,  370 => 203,  356 => 122,  624 => 224,  620 => 451,  601 => 446,  580 => 207,  559 => 427,  545 => 198,  497 => 156,  485 => 124,  447 => 113,  424 => 229,  412 => 126,  401 => 135,  391 => 133,  379 => 206,  376 => 103,  333 => 115,  326 => 138,  292 => 88,  287 => 86,  264 => 74,  178 => 59,  12 => 36,  778 => 267,  763 => 244,  742 => 492,  734 => 237,  717 => 210,  714 => 232,  711 => 231,  703 => 226,  653 => 218,  650 => 234,  644 => 190,  616 => 440,  595 => 215,  587 => 434,  578 => 432,  573 => 211,  546 => 423,  534 => 418,  531 => 225,  513 => 230,  475 => 248,  448 => 151,  445 => 236,  429 => 188,  422 => 184,  396 => 138,  345 => 147,  307 => 128,  286 => 112,  247 => 75,  206 => 46,  90 => 42,  283 => 115,  236 => 42,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 474,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 460,  1145 => 322,  1143 => 321,  1118 => 443,  1115 => 319,  1112 => 318,  1106 => 316,  1103 => 315,  1100 => 314,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 430,  1074 => 304,  1067 => 299,  1064 => 651,  1056 => 293,  1051 => 647,  1048 => 646,  1040 => 285,  1036 => 284,  1032 => 409,  1027 => 281,  1024 => 280,  1016 => 405,  1014 => 272,  1012 => 404,  1009 => 397,  1004 => 624,  982 => 261,  973 => 258,  970 => 607,  967 => 606,  964 => 255,  961 => 366,  958 => 253,  955 => 600,  952 => 251,  950 => 361,  947 => 597,  939 => 356,  936 => 297,  934 => 241,  931 => 295,  923 => 588,  920 => 235,  918 => 352,  915 => 233,  903 => 346,  900 => 228,  897 => 227,  892 => 341,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  865 => 331,  862 => 557,  857 => 267,  849 => 206,  846 => 315,  844 => 546,  841 => 313,  833 => 308,  830 => 539,  828 => 538,  817 => 310,  812 => 530,  809 => 297,  801 => 185,  798 => 300,  796 => 489,  793 => 298,  783 => 177,  769 => 247,  767 => 273,  764 => 505,  756 => 165,  751 => 163,  746 => 478,  739 => 239,  729 => 262,  724 => 484,  721 => 257,  715 => 151,  710 => 475,  707 => 208,  699 => 142,  697 => 252,  694 => 470,  689 => 137,  680 => 134,  675 => 239,  662 => 125,  658 => 235,  654 => 123,  649 => 462,  640 => 448,  619 => 183,  617 => 223,  598 => 107,  576 => 199,  564 => 162,  557 => 96,  550 => 187,  547 => 93,  503 => 81,  493 => 143,  480 => 75,  456 => 68,  450 => 155,  414 => 134,  408 => 176,  368 => 126,  355 => 150,  350 => 120,  342 => 137,  332 => 88,  316 => 16,  255 => 101,  245 => 83,  194 => 68,  200 => 72,  180 => 70,  560 => 191,  549 => 411,  532 => 410,  528 => 160,  525 => 196,  523 => 263,  518 => 180,  514 => 415,  511 => 166,  508 => 258,  501 => 154,  474 => 170,  460 => 123,  455 => 241,  442 => 235,  439 => 195,  436 => 143,  433 => 232,  426 => 58,  415 => 180,  405 => 108,  360 => 128,  354 => 199,  331 => 140,  322 => 99,  304 => 90,  272 => 91,  249 => 92,  233 => 87,  216 => 79,  140 => 51,  126 => 66,  192 => 53,  161 => 58,  320 => 127,  288 => 118,  237 => 91,  232 => 88,  222 => 83,  185 => 75,  150 => 55,  100 => 42,  692 => 474,  683 => 244,  678 => 468,  676 => 467,  666 => 222,  661 => 220,  656 => 237,  641 => 189,  635 => 229,  615 => 221,  590 => 204,  583 => 214,  577 => 212,  575 => 328,  536 => 419,  524 => 90,  510 => 178,  482 => 250,  464 => 244,  452 => 268,  423 => 137,  421 => 90,  413 => 141,  400 => 136,  393 => 211,  385 => 159,  374 => 128,  324 => 112,  310 => 83,  302 => 125,  296 => 121,  282 => 161,  278 => 106,  270 => 102,  259 => 103,  226 => 84,  365 => 125,  347 => 119,  338 => 116,  319 => 94,  315 => 131,  301 => 80,  299 => 8,  281 => 114,  268 => 71,  265 => 105,  262 => 93,  260 => 72,  257 => 103,  225 => 56,  213 => 78,  211 => 81,  197 => 69,  174 => 74,  252 => 68,  242 => 65,  231 => 61,  207 => 76,  195 => 53,  165 => 83,  129 => 67,  84 => 40,  167 => 71,  155 => 47,  127 => 35,  23 => 13,  58 => 25,  20 => 1,  1127 => 457,  1123 => 456,  1119 => 455,  1109 => 441,  1098 => 313,  1091 => 438,  1081 => 431,  1077 => 657,  1066 => 427,  1062 => 426,  1058 => 425,  1053 => 292,  1049 => 422,  1045 => 421,  1037 => 411,  1033 => 416,  1029 => 282,  1020 => 412,  1015 => 410,  1003 => 401,  999 => 400,  991 => 385,  981 => 378,  979 => 388,  976 => 259,  966 => 383,  962 => 383,  953 => 270,  942 => 300,  935 => 592,  925 => 353,  916 => 354,  909 => 580,  905 => 579,  894 => 226,  890 => 281,  883 => 338,  879 => 277,  873 => 333,  869 => 332,  860 => 323,  856 => 329,  852 => 327,  843 => 325,  838 => 544,  825 => 196,  821 => 312,  814 => 299,  804 => 306,  802 => 301,  799 => 234,  789 => 286,  785 => 293,  780 => 513,  774 => 509,  772 => 248,  762 => 504,  753 => 220,  748 => 242,  741 => 271,  728 => 267,  716 => 255,  712 => 254,  706 => 473,  700 => 205,  696 => 476,  688 => 246,  684 => 248,  681 => 244,  664 => 463,  655 => 457,  651 => 235,  647 => 191,  643 => 230,  637 => 230,  632 => 187,  627 => 224,  625 => 453,  622 => 452,  614 => 222,  610 => 220,  607 => 219,  594 => 176,  584 => 173,  582 => 212,  566 => 207,  561 => 205,  556 => 204,  553 => 425,  548 => 201,  540 => 200,  527 => 408,  522 => 406,  520 => 194,  516 => 294,  495 => 158,  487 => 156,  466 => 245,  461 => 70,  453 => 199,  441 => 196,  428 => 116,  417 => 145,  407 => 138,  403 => 136,  398 => 127,  389 => 160,  387 => 164,  384 => 208,  375 => 205,  369 => 148,  359 => 123,  357 => 116,  346 => 111,  343 => 146,  341 => 117,  337 => 90,  327 => 101,  314 => 88,  311 => 94,  309 => 129,  305 => 108,  293 => 120,  289 => 196,  284 => 76,  279 => 83,  277 => 136,  274 => 110,  266 => 70,  261 => 69,  256 => 96,  251 => 182,  220 => 81,  215 => 63,  202 => 94,  198 => 54,  190 => 49,  137 => 28,  132 => 26,  124 => 21,  61 => 12,  34 => 5,  784 => 215,  775 => 485,  760 => 222,  749 => 479,  745 => 493,  736 => 238,  732 => 487,  727 => 476,  725 => 261,  723 => 196,  720 => 211,  713 => 255,  709 => 254,  705 => 480,  702 => 472,  695 => 139,  686 => 468,  682 => 467,  677 => 465,  674 => 178,  672 => 241,  668 => 464,  660 => 464,  652 => 376,  648 => 173,  645 => 232,  638 => 230,  633 => 209,  631 => 364,  628 => 444,  623 => 223,  618 => 160,  612 => 220,  599 => 215,  596 => 216,  593 => 105,  591 => 436,  586 => 150,  579 => 211,  574 => 431,  569 => 208,  562 => 139,  552 => 136,  543 => 174,  533 => 198,  529 => 409,  519 => 127,  500 => 184,  490 => 142,  471 => 129,  467 => 72,  459 => 153,  440 => 106,  437 => 61,  434 => 142,  427 => 230,  420 => 141,  410 => 110,  404 => 129,  402 => 137,  399 => 139,  392 => 82,  388 => 209,  383 => 80,  381 => 105,  378 => 157,  371 => 156,  363 => 153,  361 => 152,  358 => 151,  348 => 140,  344 => 24,  340 => 145,  330 => 103,  325 => 129,  321 => 135,  317 => 107,  313 => 110,  308 => 109,  303 => 122,  298 => 120,  294 => 82,  290 => 119,  275 => 105,  271 => 190,  263 => 75,  258 => 187,  253 => 100,  248 => 97,  244 => 65,  228 => 57,  214 => 63,  191 => 67,  186 => 72,  177 => 69,  175 => 58,  170 => 84,  153 => 77,  146 => 34,  128 => 42,  118 => 49,  113 => 48,  110 => 38,  104 => 31,  97 => 32,  81 => 23,  77 => 20,  65 => 11,  53 => 12,  608 => 225,  602 => 217,  597 => 216,  589 => 213,  585 => 209,  581 => 213,  572 => 204,  568 => 209,  565 => 430,  563 => 429,  558 => 160,  555 => 200,  551 => 424,  541 => 197,  537 => 159,  535 => 199,  530 => 417,  526 => 190,  521 => 182,  515 => 305,  512 => 84,  509 => 228,  507 => 156,  504 => 155,  502 => 256,  499 => 173,  496 => 172,  494 => 254,  491 => 178,  489 => 252,  486 => 176,  483 => 173,  481 => 119,  478 => 160,  476 => 116,  473 => 168,  470 => 121,  468 => 156,  463 => 117,  457 => 160,  454 => 156,  451 => 120,  449 => 198,  444 => 263,  438 => 150,  435 => 149,  432 => 100,  430 => 145,  425 => 146,  411 => 221,  406 => 111,  390 => 136,  382 => 131,  380 => 158,  377 => 129,  373 => 156,  366 => 202,  362 => 124,  353 => 149,  351 => 141,  339 => 191,  335 => 134,  329 => 131,  323 => 128,  318 => 98,  312 => 130,  306 => 92,  300 => 121,  295 => 100,  291 => 86,  285 => 100,  280 => 194,  276 => 111,  267 => 101,  250 => 101,  239 => 64,  229 => 87,  218 => 97,  212 => 62,  210 => 77,  205 => 90,  188 => 90,  184 => 63,  181 => 65,  169 => 44,  160 => 25,  152 => 46,  148 => 49,  134 => 39,  114 => 36,  107 => 6,  76 => 34,  70 => 15,  273 => 80,  269 => 107,  254 => 73,  243 => 66,  240 => 64,  238 => 70,  235 => 89,  230 => 67,  227 => 86,  224 => 66,  221 => 80,  219 => 101,  217 => 64,  208 => 76,  204 => 75,  179 => 47,  159 => 57,  143 => 31,  135 => 46,  119 => 40,  102 => 33,  71 => 13,  67 => 14,  63 => 18,  59 => 16,  38 => 18,  94 => 21,  89 => 3,  85 => 23,  75 => 18,  68 => 12,  56 => 228,  87 => 41,  21 => 11,  26 => 13,  93 => 27,  88 => 24,  78 => 18,  46 => 34,  27 => 7,  44 => 11,  31 => 8,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 35,  142 => 25,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 25,  62 => 27,  49 => 14,  24 => 1,  25 => 5,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 21,  40 => 79,  37 => 6,  22 => 12,  246 => 136,  157 => 39,  145 => 74,  139 => 19,  131 => 48,  123 => 61,  120 => 31,  115 => 10,  111 => 47,  108 => 33,  101 => 30,  98 => 45,  96 => 30,  83 => 33,  74 => 395,  66 => 307,  55 => 38,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 5,  32 => 4,  29 => 3,  209 => 58,  203 => 73,  199 => 93,  193 => 51,  189 => 66,  187 => 64,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 22,  149 => 34,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 41,  122 => 45,  116 => 57,  112 => 12,  109 => 52,  106 => 51,  103 => 223,  99 => 23,  95 => 27,  92 => 28,  86 => 28,  82 => 19,  80 => 27,  73 => 33,  64 => 13,  60 => 18,  57 => 39,  54 => 16,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
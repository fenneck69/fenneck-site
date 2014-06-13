<?php

/* DoctrineBundle:Collector:explain.html.twig */
class __TwigTemplate_407c4591e472ac84c8a1b062e96b5cf107e184fb8ead3ec10817fc1213804150 extends Twig_Template
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
        echo "<strong>Explanation:</strong>

<table style=\"margin: 5px 0;\">
    <thead>
        <tr>
            ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 0, array(), "array")));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 7
            echo "                <th>";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 13
            echo "        <tr>
            ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 15
                echo "                <td>";
                echo twig_escape_filter($this->env, ((("possible_keys" == (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))) ? (strtr((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), array("," => ", "))) : ((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")))), "html", null, true);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:explain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 225,  602 => 224,  597 => 221,  589 => 218,  585 => 216,  581 => 214,  572 => 212,  568 => 211,  565 => 210,  563 => 209,  558 => 207,  555 => 206,  551 => 205,  541 => 197,  537 => 195,  535 => 194,  530 => 193,  526 => 192,  521 => 189,  515 => 185,  512 => 184,  509 => 183,  507 => 182,  504 => 181,  502 => 180,  499 => 179,  496 => 178,  494 => 177,  491 => 176,  489 => 175,  486 => 174,  483 => 173,  481 => 172,  478 => 171,  476 => 170,  473 => 169,  470 => 168,  468 => 167,  463 => 164,  457 => 160,  454 => 159,  451 => 158,  449 => 157,  444 => 154,  438 => 150,  435 => 149,  432 => 148,  430 => 147,  425 => 144,  411 => 143,  406 => 140,  390 => 137,  382 => 135,  380 => 134,  377 => 133,  373 => 131,  366 => 127,  362 => 126,  353 => 125,  351 => 124,  339 => 121,  335 => 120,  329 => 117,  323 => 116,  318 => 114,  312 => 113,  306 => 110,  300 => 109,  295 => 107,  291 => 106,  285 => 105,  280 => 103,  276 => 102,  267 => 101,  250 => 100,  239 => 95,  229 => 91,  218 => 82,  212 => 78,  210 => 77,  205 => 76,  188 => 75,  184 => 73,  181 => 72,  169 => 66,  160 => 59,  152 => 54,  148 => 53,  134 => 45,  114 => 37,  107 => 33,  76 => 18,  70 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 94,  230 => 82,  227 => 81,  224 => 79,  221 => 77,  219 => 76,  217 => 75,  208 => 73,  204 => 72,  179 => 69,  159 => 61,  143 => 55,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 17,  63 => 13,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 19,  75 => 17,  68 => 14,  56 => 9,  87 => 24,  21 => 2,  26 => 6,  93 => 9,  88 => 6,  78 => 22,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 64,  166 => 61,  163 => 60,  158 => 67,  156 => 66,  151 => 63,  142 => 49,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 99,  157 => 56,  145 => 46,  139 => 48,  131 => 44,  123 => 41,  120 => 40,  115 => 43,  111 => 38,  108 => 36,  101 => 30,  98 => 40,  96 => 31,  83 => 25,  74 => 14,  66 => 14,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 71,  193 => 73,  189 => 71,  187 => 84,  182 => 70,  176 => 64,  173 => 68,  168 => 72,  164 => 58,  162 => 57,  154 => 58,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 31,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 20,  73 => 17,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}

<?php

/* WebProfilerBundle:Collector:request.html.twig */
class __TwigTemplate_728313e0f73bc11fd37fbd59b8032277891cbf0b409d8f52bf54a0e81c577253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 6
            echo "            ";
            $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "file"), $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "line"));
            // line 7
            echo "            <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\">";
            echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "class"));
            echo "</span>
            <span class=\"sf-toolbar-info-method\" onclick=\"";
            // line 8
            if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                echo "window.location='";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "js"), "html", null, true);
                echo "';window.event.stopPropagation();return false;";
            }
            echo "\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "method"), "html", null, true);
            echo "
            </span>
        ";
        } else {
            // line 12
            echo "            <span class=\"sf-toolbar-info-class\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "html", null, true);
            echo "</span>
        ";
        }
        // line 14
        echo "    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "    ";
        $context["request_status_code_color"] = (((400 > $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode"))) ? ((((200 == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode"))) ? ("green") : ("yellow"))) : ("red"));
        // line 16
        echo "    ";
        $context["request_route"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "route")) ? ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "route")) : ("NONE"));
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        <img width=\"28\" height=\"28\" alt=\"Request\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAACvElEQVR42tVTbUhTYRTerDCnKVoUUr/KCZmypA9Koet0bXNLJ5XazDJ/WFaCUY0pExRZXxYiJgsxWWjkaL+yK+po1gjyR2QfmqWxtBmaBtqWGnabT++c11Fu4l/P4VzOPc95zoHznsNZodIbLDdRcKnc1Bu8DAK45ZsOnykQNMopsNooLxCknb0cDq5vml9FtHiIgpBR0R6iihYyFMTDt2Lg56ObPkI6TMGXSof1EV67IqCwisJSWliFAG/E0CfFIiebdNypcxi/1zgyFiIiZ3sJQr0RQx5frLa6k7SOKRo3oMFNR5t62h2rttKXEOKFqDCxtXNmmBokO2KKTlp3IdWuT2dYRNGKwEXEBCcL172G5FG0aIxC0kR9PBTVH1kkwQn+IqJnCE33EalVzT9GJQS1tAdD3CKicJYFrxqx7W2ejCEdZy1FiC5tZxHhLJKOZaRdQJAyV/YAvDliySALHxmxR4Hqe2iwvaOR/CEuZYJFSgYhVbZRkA8KGdEktrqnqra90NndCdkt77fjIHIhexOrfO6O3bbbOj/rqu5IptgyR3sU93QbOYhquZK4MCDp0Ina/PLsu5JvbCTRaapUdUmIV/RzoMdsk/0hWRNdAvKOmvqlN0drsJbJf1P4YsQ5lGrJeuosiOUgbOC8cto3LfOXTdVd7BqZsQKbse+0jUL6WPcesqs4MNSUTQAxGjwFiC8m3yzmqwHJBWYKBJ9WNqW/dHkpU/osch1Yj5RJfXPfSEe/2UPsN490NPfZG5CKyJmcV5ayHyzy7BMqsXfuHhGK/cjAIeSpR92gehR55D8TcQhDEKJwytBJ4fr4NULvrEM8NszfJPyxDoHYAQ1oPCWmIX4gifmDS/DV2DKeb25FHWr76yEG7/9L4YFPeiQQ4/8LkgJ8Et+NncTCsYqzXAEXa7CWdPZzGWdlyV+vST0JanfPvwAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["request_status_code_color"]) ? $context["request_status_code_color"] : $this->getContext($context, "request_status_code_color")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statustext"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode"), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["request_handler"]) ? $context["request_handler"] : $this->getContext($context, "request_handler")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-info-piece-additional-detail\">on <i>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["request_route"]) ? $context["request_route"] : $this->getContext($context, "request_route")), "html", null, true);
        echo "</i></span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        ob_start();
        // line 25
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Status</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["request_status_code_color"]) ? $context["request_status_code_color"] : $this->getContext($context, "request_status_code_color")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode"), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statustext"), "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["request_handler"]) ? $context["request_handler"] : $this->getContext($context, "request_handler")), "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["request_route"]) ? $context["request_route"] : $this->getContext($context, "request_route")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 39
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata"))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 42
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 46
    public function block_menu($context, array $blocks = array())
    {
        // line 47
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAcCAQAAACn1QXuAAAD2UlEQVR42p2Ve0zTVxTHKS4+KCBqNomCClgEJJAYkznQQIFaWltAiigsxGUgMy6b45HWV4UKUoP1yaMS0DqniVpngKlEMoMzW2Z0QTf4Ax/bdCzFCpQWq60U+Xp/baG/EoGf3vPH7/b3PffTc++55/w8xg+wji4W3ImDw4S3DgSD5fGhA+wcbRxclqsB+30RnmWcda1JPWn1poj8e3TYlvb/l6edTdSLWvYHgcUIdSwiuduxOOdu/n90WF7350648J+a0ClxYNWECglgahP+OyUOPpm34sDMNt6Ez+QwjniAKSzFgKWTw6L33x/3/yMHzU09l/XKlykj7krlXURNDlsEaVm/a8Fh48trUEEKGY4Zb5SaXUpZH4oROAlKvjijPu9GQfcY6jkOQoBlWIgARCAVVbtNo1rxky9/lqiV/hMmQfwXfRtZQxYVVoItC5aUpO8rDIcvYvUNqcN0n7TfJkyC+5lUdYIH9hlOkn3bCWbVCoJLLX9C9+FZEcoIpj2HYHh9XT92ZbUEFl7XSvfhD2EVI5imFh/DX948+lvWhgAEHL3kBrNhNSOYvImCdSgEb+wbGrmjomCFv46DrWn6hN+2QY6ZDYH8Tt6Dv+c4Yfn9bofbN8ABG/xHjYcMKmNHC0Tw/XOF0Ez3+VaH2BMZ1Ezclaynnm1x8LTDBo7U65Tm0tejrltPwwvzIcQO7EIKFsB3c8uoprAqzZruwQpE1cnpeMVxxZLNc8mFQQy2W9Tb+1xSplbjD18EEvM7sjTjuksp6rXVDBeVN29s5ztjFY1VSILpfJAHZiFkG1lAtyTD+gvZsix5emPSC3flm6v3JGvfxNvn+8zDt/HLFR3XUYI6RFPltERkYFro4j6Itdd5JB6JzaaGBAKUFtorpOsHRNoLveAxU1jRQ6xFQbaVNNFBpICN6YjZ00UpN0swj4KFPK/MtTJBffXKoETk3mouiYw7cmoLpsGzNVFkth+NpTKWgnkjof9MnjOflRYqsy4rfV1udebZatIgHhyB0XmylsyL2VXJjtQReMNWe9uGH5JN3ytMubY6HS7J9HSYTI/L1c9ybQoTQfEwG2HN52p7KixuEQ91PH5wEYkE5sRxUYJaFCCr4g+6o+o2slEMNVHjCYqF+RBjJ87m0OI/2YnvwMVCgnLi2AjCcgQgpGen1Mh1bATSgV4pghGISKKyqT6Gj+CHRUj/grT66sGOp7tIjOpmhGEGqYLxA174DOW4gjZiP6EMn2LWO7pz+O8N2nYcQhGq7v+ITZg3wYcPPghFDKibGUNm3u/qq5hL1PWIxgJEIRZBmE69fQsyes/JMSWb+gAAAABJRU5ErkJggg==\" alt=\"Request\"></span>
    <strong>Request</strong>
</span>
";
    }

    // line 53
    public function block_panel($context, array $blocks = array())
    {
        // line 54
        echo "    <h2>Request GET Parameters</h2>

    ";
        // line 56
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestquery"), "all"))) {
            // line 57
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestquery")));
            // line 58
            echo "    ";
        } else {
            // line 59
            echo "        <p>
            <em>No GET parameters</em>
        </p>
    ";
        }
        // line 63
        echo "
    <h2>Request POST Parameters</h2>

    ";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestrequest"), "all"))) {
            // line 67
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestrequest")));
            // line 68
            echo "    ";
        } else {
            // line 69
            echo "        <p>
            <em>No POST parameters</em>
        </p>
    ";
        }
        // line 73
        echo "
    <h2>Request Attributes</h2>

    ";
        // line 76
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestattributes"), "all"))) {
            // line 77
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestattributes")));
            // line 78
            echo "    ";
        } else {
            // line 79
            echo "        <p>
            <em>No attributes</em>
        </p>
    ";
        }
        // line 83
        echo "
    <h2>Request Cookies</h2>

    ";
        // line 86
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestcookies"), "all"))) {
            // line 87
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestcookies")));
            // line 88
            echo "    ";
        } else {
            // line 89
            echo "        <p>
            <em>No cookies</em>
        </p>
    ";
        }
        // line 93
        echo "
    <h2>Request Headers</h2>

    ";
        // line 96
        $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestheaders")));
        // line 97
        echo "
    <h2>Request Content</h2>

    ";
        // line 100
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content") == false)) {
            // line 101
            echo "        <p><em>Request content not available (it was retrieved as a resource).</em></p>
    ";
        } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content")) {
            // line 103
            echo "        <pre>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content"), "html", null, true);
            echo "</pre>
    ";
        } else {
            // line 105
            echo "        <p><em>No content</em></p>
    ";
        }
        // line 107
        echo "
    <h2>Request Server Parameters</h2>

    ";
        // line 110
        $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestserver")));
        // line 111
        echo "
    <h2>Response Headers</h2>

    ";
        // line 114
        $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "responseheaders")));
        // line 115
        echo "
    <h2>Session Metadata</h2>

    ";
        // line 118
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata"))) {
            // line 119
            echo "    ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata")));
            // line 120
            echo "    ";
        } else {
            // line 121
            echo "    <p>
        <em>No session metadata</em>
    </p>
    ";
        }
        // line 125
        echo "
    <h2>Session Attributes</h2>

    ";
        // line 128
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionattributes"))) {
            // line 129
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionattributes")));
            // line 130
            echo "    ";
        } else {
            // line 131
            echo "        <p>
            <em>No session attributes</em>
        </p>
    ";
        }
        // line 135
        echo "
    <h2>Flashes</h2>

    ";
        // line 138
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "flashes"))) {
            // line 139
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "flashes")));
            // line 140
            echo "    ";
        } else {
            // line 141
            echo "        <p>
            <em>No flashes</em>
        </p>
    ";
        }
        // line 145
        echo "
    ";
        // line 146
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent")) {
            // line 147
            echo "        <h2><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent"), "token"))), "html", null, true);
            echo "\">Parent request: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent"), "token"), "html", null, true);
            echo "</a></h2>

        ";
            // line 149
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent"), "getcollector", array(0 => "request"), "method"), "requestattributes")));
            // line 150
            echo "    ";
        }
        // line 151
        echo "
    ";
        // line 152
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"))) {
            // line 153
            echo "        <h2>Sub requests</h2>

        ";
            // line 155
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 156
                echo "            <h3><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "token"), "html", null, true);
                echo "</a></h3>
            ";
                // line 157
                $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "getcollector", array(0 => "request"), "method"), "requestattributes")));
                // line 158
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "    ";
        }
        // line 160
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 155,  328 => 139,  234 => 90,  1073 => 656,  1069 => 654,  1044 => 645,  1026 => 633,  1023 => 632,  1021 => 631,  1013 => 627,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  963 => 604,  959 => 602,  941 => 595,  937 => 593,  930 => 590,  926 => 589,  919 => 587,  911 => 581,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  864 => 558,  854 => 552,  836 => 543,  824 => 537,  800 => 523,  790 => 519,  770 => 507,  740 => 491,  737 => 490,  718 => 482,  646 => 451,  642 => 449,  636 => 446,  542 => 421,  462 => 202,  446 => 197,  431 => 189,  394 => 134,  241 => 93,  505 => 257,  492 => 253,  477 => 249,  458 => 242,  419 => 227,  172 => 57,  1140 => 461,  1136 => 460,  1132 => 459,  1111 => 446,  1104 => 442,  1094 => 435,  1090 => 433,  1075 => 429,  1050 => 420,  1046 => 419,  1042 => 418,  1028 => 414,  994 => 397,  992 => 396,  989 => 395,  975 => 609,  948 => 371,  938 => 364,  922 => 354,  907 => 347,  896 => 573,  851 => 327,  827 => 312,  815 => 531,  787 => 294,  766 => 284,  754 => 499,  719 => 258,  701 => 253,  685 => 245,  592 => 214,  517 => 261,  443 => 152,  416 => 226,  397 => 212,  334 => 141,  1183 => 475,  1175 => 473,  1165 => 468,  1147 => 456,  1137 => 449,  1133 => 447,  1122 => 454,  1114 => 442,  1105 => 440,  1101 => 439,  1093 => 434,  1089 => 433,  1085 => 432,  1076 => 430,  1071 => 428,  1059 => 419,  1055 => 648,  1047 => 413,  1035 => 639,  1022 => 402,  1018 => 630,  998 => 389,  972 => 608,  965 => 368,  929 => 358,  913 => 347,  904 => 344,  899 => 342,  886 => 340,  882 => 339,  875 => 327,  850 => 316,  835 => 309,  823 => 305,  797 => 291,  777 => 277,  761 => 282,  733 => 260,  708 => 253,  704 => 252,  698 => 477,  693 => 247,  671 => 465,  630 => 227,  609 => 220,  604 => 219,  539 => 193,  498 => 170,  472 => 247,  386 => 159,  372 => 121,  297 => 200,  336 => 100,  223 => 55,  956 => 271,  946 => 360,  933 => 296,  917 => 348,  914 => 290,  912 => 289,  901 => 285,  898 => 284,  887 => 280,  870 => 560,  868 => 273,  863 => 324,  853 => 261,  848 => 548,  840 => 253,  834 => 316,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 529,  807 => 528,  805 => 236,  791 => 262,  788 => 518,  773 => 276,  771 => 232,  768 => 231,  765 => 230,  757 => 269,  743 => 217,  738 => 214,  679 => 200,  673 => 242,  665 => 196,  663 => 236,  657 => 193,  629 => 186,  626 => 443,  603 => 439,  600 => 178,  588 => 215,  570 => 210,  554 => 224,  479 => 172,  418 => 135,  370 => 203,  356 => 122,  624 => 224,  620 => 222,  601 => 218,  580 => 207,  559 => 427,  545 => 198,  497 => 156,  485 => 124,  447 => 113,  424 => 229,  412 => 126,  401 => 135,  391 => 133,  379 => 206,  376 => 103,  333 => 115,  326 => 138,  292 => 88,  287 => 86,  264 => 74,  178 => 59,  12 => 36,  778 => 267,  763 => 244,  742 => 492,  734 => 237,  717 => 210,  714 => 232,  711 => 231,  703 => 226,  653 => 218,  650 => 234,  644 => 190,  616 => 440,  595 => 215,  587 => 434,  578 => 432,  573 => 211,  546 => 423,  534 => 418,  531 => 225,  513 => 230,  475 => 248,  448 => 151,  445 => 236,  429 => 188,  422 => 184,  396 => 138,  345 => 147,  307 => 128,  286 => 112,  247 => 75,  206 => 46,  90 => 20,  283 => 115,  236 => 42,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 474,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 460,  1145 => 322,  1143 => 321,  1118 => 443,  1115 => 319,  1112 => 318,  1106 => 316,  1103 => 315,  1100 => 314,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 430,  1074 => 304,  1067 => 299,  1064 => 651,  1056 => 293,  1051 => 647,  1048 => 646,  1040 => 285,  1036 => 284,  1032 => 409,  1027 => 281,  1024 => 280,  1016 => 405,  1014 => 272,  1012 => 404,  1009 => 397,  1004 => 624,  982 => 261,  973 => 258,  970 => 607,  967 => 606,  964 => 255,  961 => 366,  958 => 253,  955 => 600,  952 => 251,  950 => 361,  947 => 597,  939 => 356,  936 => 297,  934 => 241,  931 => 295,  923 => 588,  920 => 235,  918 => 352,  915 => 233,  903 => 346,  900 => 228,  897 => 227,  892 => 341,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  865 => 331,  862 => 557,  857 => 267,  849 => 206,  846 => 315,  844 => 546,  841 => 313,  833 => 308,  830 => 539,  828 => 538,  817 => 310,  812 => 530,  809 => 297,  801 => 185,  798 => 300,  796 => 521,  793 => 298,  783 => 177,  769 => 247,  767 => 273,  764 => 505,  756 => 165,  751 => 163,  746 => 161,  739 => 239,  729 => 262,  724 => 484,  721 => 257,  715 => 151,  710 => 149,  707 => 208,  699 => 142,  697 => 252,  694 => 251,  689 => 137,  680 => 134,  675 => 239,  662 => 125,  658 => 235,  654 => 123,  649 => 122,  640 => 448,  619 => 183,  617 => 223,  598 => 107,  576 => 199,  564 => 162,  557 => 96,  550 => 187,  547 => 93,  503 => 81,  493 => 143,  480 => 75,  456 => 68,  450 => 155,  414 => 134,  408 => 176,  368 => 126,  355 => 150,  350 => 120,  342 => 137,  332 => 88,  316 => 16,  255 => 101,  245 => 83,  194 => 68,  200 => 72,  180 => 70,  560 => 191,  549 => 182,  532 => 266,  528 => 160,  525 => 196,  523 => 263,  518 => 180,  514 => 415,  511 => 166,  508 => 258,  501 => 154,  474 => 170,  460 => 123,  455 => 241,  442 => 235,  439 => 195,  436 => 143,  433 => 232,  426 => 58,  415 => 180,  405 => 108,  360 => 128,  354 => 199,  331 => 140,  322 => 99,  304 => 90,  272 => 91,  249 => 92,  233 => 87,  216 => 79,  140 => 51,  126 => 66,  192 => 53,  161 => 58,  320 => 127,  288 => 118,  237 => 91,  232 => 88,  222 => 83,  185 => 75,  150 => 55,  100 => 42,  692 => 474,  683 => 244,  678 => 468,  676 => 467,  666 => 222,  661 => 220,  656 => 237,  641 => 189,  635 => 229,  615 => 221,  590 => 204,  583 => 214,  577 => 212,  575 => 328,  536 => 419,  524 => 90,  510 => 178,  482 => 250,  464 => 244,  452 => 268,  423 => 137,  421 => 90,  413 => 141,  400 => 136,  393 => 211,  385 => 159,  374 => 128,  324 => 112,  310 => 83,  302 => 125,  296 => 121,  282 => 161,  278 => 106,  270 => 102,  259 => 103,  226 => 84,  365 => 125,  347 => 119,  338 => 116,  319 => 94,  315 => 131,  301 => 80,  299 => 8,  281 => 114,  268 => 71,  265 => 105,  262 => 93,  260 => 72,  257 => 103,  225 => 56,  213 => 78,  211 => 81,  197 => 69,  174 => 74,  252 => 68,  242 => 65,  231 => 61,  207 => 76,  195 => 53,  165 => 60,  129 => 67,  84 => 24,  167 => 71,  155 => 47,  127 => 35,  23 => 13,  58 => 14,  20 => 1,  1127 => 457,  1123 => 456,  1119 => 455,  1109 => 441,  1098 => 313,  1091 => 438,  1081 => 431,  1077 => 657,  1066 => 427,  1062 => 426,  1058 => 425,  1053 => 292,  1049 => 422,  1045 => 421,  1037 => 411,  1033 => 416,  1029 => 282,  1020 => 412,  1015 => 410,  1003 => 401,  999 => 400,  991 => 385,  981 => 378,  979 => 388,  976 => 259,  966 => 383,  962 => 383,  953 => 270,  942 => 300,  935 => 592,  925 => 353,  916 => 354,  909 => 580,  905 => 579,  894 => 226,  890 => 281,  883 => 338,  879 => 277,  873 => 333,  869 => 332,  860 => 323,  856 => 329,  852 => 327,  843 => 325,  838 => 544,  825 => 196,  821 => 312,  814 => 299,  804 => 306,  802 => 301,  799 => 234,  789 => 286,  785 => 293,  780 => 513,  774 => 509,  772 => 248,  762 => 504,  753 => 220,  748 => 242,  741 => 271,  728 => 267,  716 => 255,  712 => 254,  706 => 254,  700 => 205,  696 => 476,  688 => 246,  684 => 248,  681 => 244,  664 => 463,  655 => 457,  651 => 235,  647 => 191,  643 => 230,  637 => 230,  632 => 187,  627 => 224,  625 => 361,  622 => 442,  614 => 222,  610 => 220,  607 => 219,  594 => 176,  584 => 173,  582 => 212,  566 => 207,  561 => 205,  556 => 204,  553 => 425,  548 => 201,  540 => 200,  527 => 416,  522 => 195,  520 => 194,  516 => 294,  495 => 158,  487 => 156,  466 => 245,  461 => 70,  453 => 199,  441 => 196,  428 => 116,  417 => 145,  407 => 138,  403 => 136,  398 => 127,  389 => 160,  387 => 164,  384 => 208,  375 => 205,  369 => 148,  359 => 123,  357 => 116,  346 => 111,  343 => 146,  341 => 117,  337 => 90,  327 => 101,  314 => 88,  311 => 94,  309 => 129,  305 => 108,  293 => 120,  289 => 196,  284 => 76,  279 => 83,  277 => 136,  274 => 110,  266 => 70,  261 => 69,  256 => 96,  251 => 182,  220 => 81,  215 => 63,  202 => 55,  198 => 54,  190 => 49,  137 => 28,  132 => 26,  124 => 21,  61 => 12,  34 => 5,  784 => 215,  775 => 290,  760 => 222,  749 => 276,  745 => 493,  736 => 238,  732 => 487,  727 => 203,  725 => 261,  723 => 196,  720 => 211,  713 => 255,  709 => 254,  705 => 480,  702 => 479,  695 => 139,  686 => 472,  682 => 470,  677 => 243,  674 => 178,  672 => 241,  668 => 464,  660 => 238,  652 => 376,  648 => 173,  645 => 232,  638 => 230,  633 => 209,  631 => 364,  628 => 444,  623 => 223,  618 => 160,  612 => 220,  599 => 215,  596 => 216,  593 => 105,  591 => 436,  586 => 150,  579 => 211,  574 => 431,  569 => 208,  562 => 139,  552 => 136,  543 => 174,  533 => 198,  529 => 265,  519 => 127,  500 => 184,  490 => 142,  471 => 129,  467 => 72,  459 => 153,  440 => 106,  437 => 61,  434 => 142,  427 => 230,  420 => 141,  410 => 110,  404 => 129,  402 => 137,  399 => 139,  392 => 82,  388 => 209,  383 => 80,  381 => 105,  378 => 157,  371 => 156,  363 => 153,  361 => 152,  358 => 151,  348 => 140,  344 => 24,  340 => 145,  330 => 103,  325 => 129,  321 => 135,  317 => 107,  313 => 110,  308 => 109,  303 => 122,  298 => 120,  294 => 82,  290 => 119,  275 => 105,  271 => 190,  263 => 75,  258 => 187,  253 => 100,  248 => 97,  244 => 65,  228 => 57,  214 => 63,  191 => 67,  186 => 72,  177 => 69,  175 => 58,  170 => 56,  153 => 69,  146 => 34,  128 => 42,  118 => 49,  113 => 48,  110 => 38,  104 => 31,  97 => 32,  81 => 23,  77 => 20,  65 => 244,  53 => 12,  608 => 225,  602 => 217,  597 => 216,  589 => 213,  585 => 209,  581 => 213,  572 => 204,  568 => 209,  565 => 430,  563 => 429,  558 => 160,  555 => 200,  551 => 424,  541 => 197,  537 => 159,  535 => 199,  530 => 417,  526 => 190,  521 => 182,  515 => 305,  512 => 84,  509 => 228,  507 => 156,  504 => 155,  502 => 256,  499 => 173,  496 => 172,  494 => 254,  491 => 178,  489 => 252,  486 => 176,  483 => 173,  481 => 119,  478 => 160,  476 => 116,  473 => 168,  470 => 121,  468 => 156,  463 => 117,  457 => 160,  454 => 156,  451 => 120,  449 => 198,  444 => 263,  438 => 150,  435 => 149,  432 => 100,  430 => 145,  425 => 146,  411 => 221,  406 => 111,  390 => 136,  382 => 131,  380 => 158,  377 => 129,  373 => 156,  366 => 202,  362 => 124,  353 => 149,  351 => 141,  339 => 191,  335 => 134,  329 => 131,  323 => 128,  318 => 98,  312 => 130,  306 => 92,  300 => 121,  295 => 100,  291 => 86,  285 => 100,  280 => 194,  276 => 111,  267 => 101,  250 => 101,  239 => 64,  229 => 87,  218 => 97,  212 => 62,  210 => 77,  205 => 90,  188 => 76,  184 => 63,  181 => 65,  169 => 44,  160 => 25,  152 => 46,  148 => 49,  134 => 39,  114 => 36,  107 => 6,  76 => 17,  70 => 15,  273 => 80,  269 => 107,  254 => 73,  243 => 66,  240 => 64,  238 => 70,  235 => 89,  230 => 67,  227 => 86,  224 => 66,  221 => 80,  219 => 101,  217 => 64,  208 => 76,  204 => 75,  179 => 47,  159 => 57,  143 => 31,  135 => 46,  119 => 40,  102 => 24,  71 => 23,  67 => 14,  63 => 18,  59 => 16,  38 => 7,  94 => 21,  89 => 3,  85 => 23,  75 => 18,  68 => 22,  56 => 228,  87 => 34,  21 => 11,  26 => 13,  93 => 27,  88 => 24,  78 => 19,  46 => 10,  27 => 3,  44 => 10,  31 => 4,  28 => 3,  201 => 74,  196 => 52,  183 => 71,  171 => 73,  166 => 54,  163 => 53,  158 => 74,  156 => 58,  151 => 35,  142 => 25,  138 => 47,  136 => 18,  121 => 50,  117 => 37,  105 => 25,  91 => 25,  62 => 12,  49 => 11,  24 => 1,  25 => 5,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 8,  40 => 79,  37 => 78,  22 => 12,  246 => 96,  157 => 39,  145 => 26,  139 => 19,  131 => 48,  123 => 42,  120 => 31,  115 => 10,  111 => 47,  108 => 33,  101 => 30,  98 => 219,  96 => 37,  83 => 33,  74 => 395,  66 => 307,  55 => 9,  52 => 12,  50 => 150,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 1,  209 => 58,  203 => 73,  199 => 265,  193 => 51,  189 => 66,  187 => 64,  182 => 38,  176 => 63,  173 => 44,  168 => 61,  164 => 70,  162 => 59,  154 => 22,  149 => 34,  147 => 43,  144 => 42,  141 => 48,  133 => 45,  130 => 46,  125 => 41,  122 => 45,  116 => 39,  112 => 12,  109 => 27,  106 => 224,  103 => 223,  99 => 23,  95 => 27,  92 => 4,  86 => 28,  82 => 19,  80 => 27,  73 => 16,  64 => 13,  60 => 18,  57 => 207,  54 => 16,  51 => 13,  48 => 14,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}

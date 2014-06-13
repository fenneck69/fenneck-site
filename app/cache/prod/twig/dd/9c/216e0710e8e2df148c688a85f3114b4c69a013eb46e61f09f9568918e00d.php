<?php

/* ThraceFormBundle:Form:fields.html.twig */
class __TwigTemplate_dd9c216e0710e8e2df148c688a85f3114b4c69a013eb46e61f09f9568918e00d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'thrace_autocomplete_widget' => array($this, 'block_thrace_autocomplete_widget'),
            'thrace_buttonset_widget' => array($this, 'block_thrace_buttonset_widget'),
            'thrace_colorpicker_widget' => array($this, 'block_thrace_colorpicker_widget'),
            'thrace_datepicker_widget' => array($this, 'block_thrace_datepicker_widget'),
            'thrace_daterangepicker_widget' => array($this, 'block_thrace_daterangepicker_widget'),
            'thrace_datetimepicker_widget' => array($this, 'block_thrace_datetimepicker_widget'),
            'thrace_datetimerangepicker_widget' => array($this, 'block_thrace_datetimerangepicker_widget'),
            'thrace_timepicker_widget' => array($this, 'block_thrace_timepicker_widget'),
            'thrace_input_limiter_widget' => array($this, 'block_thrace_input_limiter_widget'),
            'thrace_rating_widget' => array($this, 'block_thrace_rating_widget'),
            'thrace_recaptcha_widget' => array($this, 'block_thrace_recaptcha_widget'),
            'thrace_select2_widget' => array($this, 'block_thrace_select2_widget'),
            'thrace_select2_dependent_widget' => array($this, 'block_thrace_select2_dependent_widget'),
            'thrace_slider_widget' => array($this, 'block_thrace_slider_widget'),
            'thrace_slider_range_widget' => array($this, 'block_thrace_slider_range_widget'),
            'thrace_spinner_widget' => array($this, 'block_thrace_spinner_widget'),
            'thrace_toggle_button_widget' => array($this, 'block_thrace_toggle_button_widget'),
            'thrace_tinymce_widget' => array($this, 'block_thrace_tinymce_widget'),
            'thrace_multi_select_collection_widget' => array($this, 'block_thrace_multi_select_collection_widget'),
            'thrace_select2_sortable_widget' => array($this, 'block_thrace_select2_sortable_widget'),
            'thrace_collection_widget' => array($this, 'block_thrace_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('thrace_autocomplete_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('thrace_buttonset_widget', $context, $blocks);
        // line 18
        echo " 

";
        // line 20
        $this->displayBlock('thrace_colorpicker_widget', $context, $blocks);
        // line 27
        echo "

";
        // line 29
        $this->displayBlock('thrace_datepicker_widget', $context, $blocks);
        // line 34
        echo " 

";
        // line 36
        $this->displayBlock('thrace_daterangepicker_widget', $context, $blocks);
        // line 42
        echo " 

";
        // line 44
        $this->displayBlock('thrace_datetimepicker_widget', $context, $blocks);
        // line 49
        echo " 

";
        // line 51
        $this->displayBlock('thrace_datetimerangepicker_widget', $context, $blocks);
        // line 57
        echo " 

";
        // line 59
        $this->displayBlock('thrace_timepicker_widget', $context, $blocks);
        // line 64
        echo " 

";
        // line 66
        $this->displayBlock('thrace_input_limiter_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('thrace_rating_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('thrace_recaptcha_widget', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('thrace_select2_widget', $context, $blocks);
        // line 109
        echo " 

";
        // line 111
        $this->displayBlock('thrace_select2_dependent_widget', $context, $blocks);
        // line 118
        echo "
";
        // line 119
        $this->displayBlock('thrace_slider_widget', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('thrace_slider_range_widget', $context, $blocks);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('thrace_spinner_widget', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('thrace_toggle_button_widget', $context, $blocks);
        // line 163
        echo "

";
        // line 165
        $this->displayBlock('thrace_tinymce_widget', $context, $blocks);
        // line 171
        echo "
";
        // line 172
        $this->displayBlock('thrace_multi_select_collection_widget', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('thrace_select2_sortable_widget', $context, $blocks);
        // line 194
        echo "
";
        // line 195
        $this->displayBlock('thrace_collection_widget', $context, $blocks);
    }

    // line 1
    public function block_thrace_autocomplete_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <span class=\"thrace-autocomplete\" style=\"display:none\" data-options=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null)))), "html", null, true);
        echo "\"></span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 8
    public function block_thrace_buttonset_widget($context, array $blocks = array())
    {
        echo " 
";
        // line 9
        ob_start();
        // line 10
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "-buttonset\">
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 12
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
            echo "
            <label for=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars"), "id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars"), "label", array(), "array"), "html", null, true);
            echo "</label>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </div>
    <span class=\"thrace-buttonset\" data-options=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null)))), "html", null, true);
        echo "\" style=\"display: none\"></span> 
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 17
        echo " 
";
    }

    // line 20
    public function block_thrace_colorpicker_widget($context, array $blocks = array())
    {
        // line 21
        ob_start();
        // line 22
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => array("style" => "display:none")));
        echo "
    <div id=\"thrace-colorpicker-widget-";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"colorSelector\"><div style=\"background-color: #ffffff;\"></div></div>
    <span class=\"thrace-colorpicker\" data-options=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null)))), "html", null, true);
        echo "\" style=\"display:none\"></span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 29
    public function block_thrace_datepicker_widget($context, array $blocks = array())
    {
        echo " 
";
        // line 30
        ob_start();
        echo " 
    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <span class=\"thrace-datepicker\" data-options=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null), "lang" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "locale"), "buttonImage" => $this->env->getExtension('assets')->getAssetUrl("bundles/thraceform/images/calendar.gif")))), "html", null, true);
        echo "\" style=\"display: none\"></span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 33
        echo " 
";
    }

    // line 36
    public function block_thrace_daterangepicker_widget($context, array $blocks = array())
    {
        echo " 
";
        // line 37
        ob_start();
        echo " 
    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "first_name"), array(), "array"), 'widget');
        echo " &nbsp;
    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "second_name"), array(), "array"), 'widget');
        echo "
    <span class=\"thrace-daterangepicker\" data-options=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null)))), "html", null, true);
        echo "\" style=\"display: none\"></span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 41
        echo " 
";
    }

    // line 44
    public function block_thrace_datetimepicker_widget($context, array $blocks = array())
    {
        echo " 
";
        // line 45
        ob_start();
        echo " 
    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <span class=\"thrace-datetimepicker\" data-options=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null), "lang" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "locale"), "buttonImage" => $this->env->getExtension('assets')->getAssetUrl("bundles/thraceform/images/calendar.gif")))), "html", null, true);
        echo "\" style=\"display: none\"></span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 48
        echo " 
";
    }

    // line 51
    public function block_thrace_datetimerangepicker_widget($context, array $blocks = array())
    {
        echo " 
";
        // line 52
        ob_start();
        echo " 
    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "first_name"), array(), "array"), 'widget');
        echo " &nbsp;
    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "second_name"), array(), "array"), 'widget');
        echo "
    <span class=\"thrace-datetimerangepicker\" data-options=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null)))), "html", null, true);
        echo "\" style=\"display: none\"></span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 56
        echo " 
";
    }

    // line 59
    public function block_thrace_timepicker_widget($context, array $blocks = array())
    {
        echo " 
";
        // line 60
        ob_start();
        echo " 
    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <span class=\"thrace-timepicker\" data-options=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null), "lang" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "locale"), "buttonImage" => $this->env->getExtension('assets')->getAssetUrl("bundles/thraceform/images/calendar.gif")))), "html", null, true);
        echo "\" style=\"display: none\"></span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 63
        echo " 
";
    }

    // line 66
    public function block_thrace_input_limiter_widget($context, array $blocks = array())
    {
        // line 67
        ob_start();
        // line 68
        echo "    ";
        $context["extraConfigs"] = array("id" => (isset($context["id"]) ? $context["id"] : null), "remText" => $this->env->getExtension('translator')->trans("remText", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "limitText" => $this->env->getExtension('translator')->trans("limitText", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)));
        // line 73
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo " 
    <span class=\"thrace-input-limiter\" data-options=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), (isset($context["extraConfigs"]) ? $context["extraConfigs"] : null))), "html", null, true);
        echo "\" style=\"display:none\"></span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 78
    public function block_thrace_rating_widget($context, array $blocks = array())
    {
        // line 79
        ob_start();
        // line 80
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => array("style" => "display:none")));
        echo "
    <div id=\"thrace-rating-widget-";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"></div>
    <span class=\"thrace-rating\" data-options=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null), "path" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "path"))))), "html", null, true);
        echo "\" style=\"display:none\"></span>  
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 86
    public function block_thrace_recaptcha_widget($context, array $blocks = array())
    {
        // line 87
        ob_start();
        // line 88
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" style=\"display: none;\"></div>
    <noscript>
        <iframe src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "server_url"), "html", null, true);
        echo "/noscript?k=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "public_key"), "html", null, true);
        echo "\" width=\"500\" height=\"300\" frameborder=\"0\"></iframe>
        <br />
        <textarea name=\"recaptcha_challenge_field\" rows=\"3\" cols=\"40\"></textarea>
        <input type=\"hidden\" name=\"recaptcha_response_field\" value=\"manual_challenge\" />
    </noscript>
    <span class=\"thrace-recaptcha\" data-options=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null), "lang" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "locale")))), "html", null, true);
        echo "\" style=\"display:none\"></span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 99
    public function block_thrace_select2_widget($context, array $blocks = array())
    {
        echo " 
";
        // line 100
        ob_start();
        // line 101
        echo "    ";
        $context["extraConfigs"] = array("_id" => (isset($context["id"]) ? $context["id"] : null), "placeholder" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "placeholder"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)));
        // line 105
        echo "    
    ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <span class=\"thrace-select2\" data-options=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), (isset($context["extraConfigs"]) ? $context["extraConfigs"] : null))), "html", null, true);
        echo "\" style=\"display: none\"></span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 108
        echo " 
";
    }

    // line 111
    public function block_thrace_select2_dependent_widget($context, array $blocks = array())
    {
        echo " 
";
        // line 112
        ob_start();
        echo " 
    ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "first_name"), array(), "array"), 'widget');
        echo " 
    ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "second_name"), array(), "array"), 'widget');
        echo "
    <span class=\"thrace-select2-dependent\" data-options=\"";
        // line 115
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null)))), "html", null, true);
        echo "\" style=\"display: none\"></span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 116
        echo " 
";
    }

    // line 119
    public function block_thrace_slider_widget($context, array $blocks = array())
    {
        echo " 
";
        // line 120
        ob_start();
        echo " 
    ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => array("style" => "display:none")));
        echo "
    <span id=\"thrace-slider-tpl-";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-slider-tpl\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "tpl"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "</span>
    <div id=\"thrace-slider-";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "width", array(), "any", true, true)) {
            echo " style=\"width:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "width"), "html", null, true);
            echo "
        ";
        } elseif ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "height", array(), "any", true, true)) {
            // line 124
            echo " style=\"height:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "height"), "html", null, true);
            echo " 
        ";
        }
        // line 125
        echo "\" >
    </div>
    <span class=\"thrace-slider\" data-options=\"";
        // line 127
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null)))), "html", null, true);
        echo "\" style=\"display:none\"></span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 131
    public function block_thrace_slider_range_widget($context, array $blocks = array())
    {
        // line 132
        ob_start();
        echo " 
    ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <span id=\"thrace-slider-range-tpl-";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-slider-range-tpl\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "tpl"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "</span>
    <div id=\"thrace-slider-range-";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "width", array(), "any", true, true)) {
            echo " style=\"width:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "width"), "html", null, true);
            echo " 
        ";
        } elseif ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "height", array(), "any", true, true)) {
            // line 136
            echo " style=\"height:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "height"), "html", null, true);
            echo " 
        ";
        }
        // line 137
        echo "\" >
    </div>
    <span class=\"thrace-slider-range\" data-options=\"";
        // line 139
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null)))), "html", null, true);
        echo "\" style=\"display:none\"></span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 143
    public function block_thrace_spinner_widget($context, array $blocks = array())
    {
        // line 144
        ob_start();
        // line 145
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <span class=\"thrace-spinner\" style=\"display:none\" data-options=\"";
        // line 146
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null), "culture" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "locale")))), "html", null, true);
        echo "\"></span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 150
    public function block_thrace_toggle_button_widget($context, array $blocks = array())
    {
        echo " 
";
        // line 151
        ob_start();
        // line 152
        echo "    ";
        $context["extra"] = array("id" => ((isset($context["id"]) ? $context["id"] : null) . "-widget"), "checked_label" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "checked_label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "unchecked_label" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "unchecked_label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)));
        // line 157
        echo "
    <input type=\"checkbox\" id=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extra"]) ? $context["extra"] : null), "id"), "html", null, true);
        echo "\"\" ";
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />
    <label for=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extra"]) ? $context["extra"] : null), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "label", array(), "array"), "html", null, true);
        echo "</label>
    <span class=\"thrace-toggle-button\" data-options=\"";
        // line 160
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), (isset($context["extra"]) ? $context["extra"] : null))), "html", null, true);
        echo "\" style=\"display: none\"></span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 161
        echo " 
";
    }

    // line 165
    public function block_thrace_tinymce_widget($context, array $blocks = array())
    {
        // line 166
        ob_start();
        // line 167
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
   <span class=\"thrace-tinymce\" data-options=\" ";
        // line 168
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null), "base_url" => $this->env->getExtension('assets')->getAssetUrl(""), "lang" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "locale")))), "html", null, true);
        echo "\" style=\"display:none\"></span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 172
    public function block_thrace_multi_select_collection_widget($context, array $blocks = array())
    {
        // line 173
        ob_start();
        echo " 
\t<label for=\"";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "label_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "label_class"), "")) : ("")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "</label>
    <div data-prototype=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "prototype", array(), "array"), 'widget'));
        echo "\" data-options=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null)))), "html", null, true);
        echo "\" class=\"thrace-multi-select ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "container_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "container_class"), "")) : ("")), "html", null, true);
        echo "\">           
        ";
        // line 176
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "datagrid_exists")) {
            echo " 
            ";
            // line 177
            $this->env->loadTemplate("ThraceFormBundle:Form:datagrid.html.twig")->display(array_merge($context, array("grid" => (isset($context["grid"]) ? $context["grid"] : null))));
            // line 178
            echo "        ";
        }
        // line 179
        echo "        <div id=\"thrace-multi-select-form-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
        ";
        // line 180
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 181
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "        </div>
    </div>    
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 188
    public function block_thrace_select2_sortable_widget($context, array $blocks = array())
    {
        // line 189
        ob_start();
        echo " 
    ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <span data-options=\"";
        // line 191
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("id" => (isset($context["id"]) ? $context["id"] : null)))), "html", null, true);
        echo "\" class=\"thrace-select2-sortable\"></span>    
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 195
    public function block_thrace_collection_widget($context, array $blocks = array())
    {
        // line 196
        ob_start();
        // line 197
        $context["extra"] = array("id" => (isset($context["id"]) ? $context["id"] : null), "add_button_text" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "add_button_text"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "remove_button_text" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "remove_button_text"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "empty_text" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "empty_text"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)));
        // line 203
        echo "<div id=\"thrace-collection-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
    ";
        // line 204
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 205
            echo "    <fieldset id=\"thrace_filedset_";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\" data-idx=\"";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "fieldset_class"), "html", null, true);
            echo "\" style=\"margin:20px;\">
        ";
            // line 206
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
            echo "
        <a class=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "remove_button_class"), "html", null, true);
            echo " thrace-collection-button-remove\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extra"]) ? $context["extra"] : null), "remove_button_text"), "html", null, true);
            echo "</a>
    </fieldset>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "    <div id=\"thrace-collection-empty-text-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "empty_text_class"), "html", null, true);
        echo "\" ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            echo "style=\"display:none\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extra"]) ? $context["extra"] : null), "empty_text"), "html", null, true);
        echo "</div>
</div>
<br>
<a id=\"thrace-collection-button-add-";
        // line 213
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "add_button_class"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extra"]) ? $context["extra"] : null), "add_button_text"), "html", null, true);
        echo "</a>

<span id=\"";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" data-prototype=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "prototype", array(), "array"), 'widget'));
        echo "\" data-options=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), (isset($context["extra"]) ? $context["extra"] : null))), "html", null, true);
        echo "\"
    class=\"thrace-collection\" style=\"display:none\">
</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "ThraceFormBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  784 => 215,  775 => 213,  760 => 210,  749 => 207,  745 => 206,  736 => 205,  732 => 204,  727 => 203,  725 => 197,  723 => 196,  720 => 195,  713 => 191,  709 => 190,  705 => 189,  702 => 188,  695 => 183,  686 => 181,  682 => 180,  677 => 179,  674 => 178,  672 => 177,  668 => 176,  660 => 175,  652 => 174,  648 => 173,  645 => 172,  638 => 168,  633 => 167,  631 => 166,  628 => 165,  623 => 161,  618 => 160,  612 => 159,  599 => 158,  596 => 157,  593 => 152,  591 => 151,  586 => 150,  579 => 146,  574 => 145,  569 => 143,  562 => 139,  552 => 136,  543 => 135,  533 => 133,  529 => 132,  519 => 127,  500 => 123,  490 => 121,  471 => 115,  467 => 114,  459 => 112,  440 => 106,  437 => 105,  434 => 101,  427 => 99,  420 => 95,  410 => 90,  404 => 88,  402 => 87,  399 => 86,  392 => 82,  388 => 81,  383 => 80,  381 => 79,  378 => 78,  371 => 74,  363 => 68,  361 => 67,  358 => 66,  348 => 62,  344 => 61,  340 => 60,  330 => 56,  325 => 55,  321 => 54,  317 => 53,  313 => 52,  308 => 51,  303 => 48,  298 => 47,  294 => 46,  290 => 45,  275 => 40,  271 => 39,  263 => 37,  258 => 36,  253 => 33,  248 => 32,  244 => 31,  228 => 24,  214 => 20,  191 => 13,  186 => 12,  177 => 10,  175 => 9,  170 => 8,  153 => 1,  146 => 194,  128 => 150,  120 => 142,  118 => 131,  113 => 119,  110 => 118,  104 => 109,  97 => 86,  83 => 64,  81 => 59,  77 => 57,  65 => 42,  53 => 27,  608 => 225,  602 => 224,  597 => 221,  589 => 218,  585 => 216,  581 => 214,  572 => 144,  568 => 211,  565 => 210,  563 => 209,  558 => 137,  555 => 206,  551 => 205,  541 => 197,  537 => 134,  535 => 194,  530 => 193,  526 => 131,  521 => 189,  515 => 125,  512 => 184,  509 => 124,  507 => 182,  504 => 181,  502 => 180,  499 => 179,  496 => 178,  494 => 122,  491 => 176,  489 => 175,  486 => 120,  483 => 173,  481 => 119,  478 => 171,  476 => 116,  473 => 169,  470 => 168,  468 => 167,  463 => 113,  457 => 160,  454 => 111,  451 => 158,  449 => 108,  444 => 107,  438 => 150,  435 => 149,  432 => 100,  430 => 147,  425 => 144,  411 => 143,  406 => 140,  390 => 137,  382 => 135,  380 => 134,  377 => 133,  373 => 131,  366 => 73,  362 => 126,  353 => 63,  351 => 124,  339 => 121,  335 => 59,  329 => 117,  323 => 116,  318 => 114,  312 => 113,  306 => 110,  300 => 109,  295 => 107,  291 => 106,  285 => 44,  280 => 41,  276 => 102,  267 => 38,  250 => 100,  239 => 95,  229 => 91,  218 => 82,  212 => 78,  210 => 77,  205 => 76,  188 => 75,  184 => 73,  181 => 72,  169 => 66,  160 => 59,  152 => 54,  148 => 53,  139 => 172,  134 => 165,  114 => 37,  107 => 33,  76 => 18,  70 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 99,  243 => 88,  240 => 30,  238 => 85,  235 => 29,  230 => 82,  227 => 81,  224 => 23,  221 => 77,  219 => 22,  217 => 21,  208 => 73,  204 => 16,  179 => 69,  159 => 61,  143 => 55,  135 => 53,  131 => 44,  119 => 42,  108 => 111,  102 => 99,  71 => 49,  67 => 17,  63 => 36,  59 => 34,  47 => 18,  38 => 6,  94 => 85,  89 => 77,  85 => 19,  79 => 18,  75 => 51,  68 => 14,  56 => 9,  50 => 10,  29 => 3,  87 => 66,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 40,  93 => 9,  88 => 6,  78 => 22,  46 => 7,  27 => 4,  40 => 1,  44 => 12,  35 => 5,  31 => 5,  43 => 8,  41 => 7,  28 => 3,  201 => 15,  196 => 90,  183 => 82,  171 => 64,  166 => 61,  163 => 4,  158 => 3,  156 => 2,  151 => 63,  142 => 49,  138 => 54,  136 => 171,  123 => 143,  121 => 46,  117 => 44,  115 => 130,  105 => 40,  101 => 30,  91 => 27,  69 => 44,  66 => 14,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 17,  203 => 78,  199 => 71,  193 => 73,  189 => 71,  187 => 84,  182 => 11,  176 => 64,  173 => 68,  168 => 72,  164 => 60,  162 => 59,  154 => 58,  149 => 195,  147 => 50,  144 => 188,  141 => 187,  133 => 55,  130 => 163,  125 => 149,  122 => 37,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 31,  99 => 98,  95 => 28,  92 => 78,  86 => 28,  82 => 22,  80 => 20,  73 => 17,  64 => 17,  60 => 13,  57 => 29,  54 => 10,  51 => 20,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}

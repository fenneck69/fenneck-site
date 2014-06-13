<?php

/* GestionCoreBundle:Form:fields.html.twig */
class __TwigTemplate_31e3cd04c1f56097a0b4f0eb929e4880662eefc73d7e23758b598f32377c1a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'money_widget' => array($this, 'block_money_widget'),
            'bootstrap_datepicker_widget' => array($this, 'block_bootstrap_datepicker_widget'),
            'thrace_file_upload_widget' => array($this, 'block_thrace_file_upload_widget'),
            'thrace_file_upload_controls' => array($this, 'block_thrace_file_upload_controls'),
            'thrace_media_upload_meta' => array($this, 'block_thrace_media_upload_meta'),
            'thrace_image_upload_widget' => array($this, 'block_thrace_image_upload_widget'),
            'thrace_image_upload_container' => array($this, 'block_thrace_image_upload_container'),
            'thrace_image_controls' => array($this, 'block_thrace_image_controls'),
            'thrace_image_upload_crop' => array($this, 'block_thrace_image_upload_crop'),
            'thrace_media_upload_widget' => array($this, 'block_thrace_media_upload_widget'),
            'thrace_multi_file_upload_collection_widget' => array($this, 'block_thrace_multi_file_upload_collection_widget'),
            'thrace_multi_image_upload_collection_widget' => array($this, 'block_thrace_multi_image_upload_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('money_widget', $context, $blocks);
        // line 10
        $this->displayBlock('bootstrap_datepicker_widget', $context, $blocks);
        // line 18
        $this->displayBlock('thrace_file_upload_widget', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('thrace_file_upload_controls', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('thrace_media_upload_meta', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('thrace_image_upload_widget', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('thrace_image_upload_container', $context, $blocks);
        // line 207
        echo "
";
        // line 208
        $this->displayBlock('thrace_image_controls', $context, $blocks);
        // line 243
        echo "
";
        // line 244
        $this->displayBlock('thrace_image_upload_crop', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('thrace_media_upload_widget', $context, $blocks);
        // line 322
        echo "
";
        // line 323
        $this->displayBlock('thrace_multi_file_upload_collection_widget', $context, $blocks);
        // line 408
        echo "
";
        // line 409
        $this->displayBlock('thrace_multi_image_upload_collection_widget', $context, $blocks);
    }

    // line 1
    public function block_money_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "\t";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 4
        echo "    <div class=\"input-append\">
\t\t<input type=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo "/>
\t\t<span class=\"add-on\">";
        // line 6
        echo strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : null), array("{{ widget }}" => ""));
        echo "</span>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 10
    public function block_bootstrap_datepicker_widget($context, array $blocks = array())
    {
        // line 11
        ob_start();
        // line 12
        echo "    <div class=\"input-append date bootstrap-datepicker\" data-date=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\" data-date-format=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["format"]) ? $context["format"] : null)), "html", null, true);
        echo "\">
        ";
        // line 13
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
        <span class=\"add-on\"><i class=\"icon-calendar\"></i></span>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 18
    public function block_thrace_file_upload_widget($context, array $blocks = array())
    {
        // line 19
        ob_start();
        // line 20
        echo "<div ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class"), "html", null, true);
            echo "\" ";
        }
        echo ">
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo " 
    <span class=\"thrace-file-upload\" data-options=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null)), "html", null, true);
        echo "\" style=\"display:none\"></span>
    
    <span class=\"thrace-file-upload-main\" style=\"display:none\">
        <div id=\"thrace-file-error-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"ui-state-error\" 
             style=\"width:300px; padding:10px; margin-bottom: 5px; display:none\">
            <span style=\"float:right\">
                <a href=\"#close\" id=\"thrace-upload-error-cancel-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                </a>
            </span>
            <p>
                <span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span> 
                <span class=\"thrace-fileupload-error\">&nbsp</span>
            </p>
        </div>
                    
        <div  id=\"thrace-progressbar-";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" style=\"width:350px; height:10px; display: none\" ></div>
       
        <div class=\"thrace-progress-info\" style=\"display:none\">
            <div class=\"ui-widget\">
                <div class=\"ui-state-highlight ui-corner-all\" style=\"width:340px;padding:5px;\"> 
                    <span style=\"float:right\" id=\"thrace-upload-remove-file-";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
                        <a href=\"#remove\">
                            <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                        </a>
                    </span>
                    <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                    <span>";
        // line 49
        echo $this->env->getExtension('translator')->getTranslator()->trans("upload_progress", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo ": <strong>0%</strong></span>
                    <br/>
                    <span id=\"thrace-file-info-";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">__file_name__ (__file_size__)</span>
                </div>
            </div>
        </div>
                    
        <div id=\"thrace-upload-file-";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"ui-state-highlight ui-corner-all\" style=\"width:440px;padding:5px;\"> 
            
            <p id=\"thrace-file-empty-";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), "vars"), "value")) {
            echo "style=\"display:none\"";
        }
        echo ">
                <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                ";
        // line 60
        echo $this->env->getExtension('translator')->getTranslator()->trans("no_file_uploaded", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        // line 61
        echo "            </p>
            
            <p id=\"thrace-file-name-";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" ";
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "originalName"), "vars"), "value"))) {
            echo "style=\"display:none\"";
        }
        echo ">
                <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                <strong>";
        // line 65
        echo $this->env->getExtension('translator')->getTranslator()->trans("filename", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo ": </strong>
                <span class=\"thrace-file-name\">";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "originalName"), "vars"), "value"), "html", null, true);
        echo "</span>
            </p>
    
        </div>
        
        ";
        // line 71
        $this->displayBlock("thrace_file_upload_controls", $context, $blocks);
        echo "
        ";
        // line 72
        $this->displayBlock("thrace_media_upload_meta", $context, $blocks);
        echo "  
    </span>
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 79
    public function block_thrace_file_upload_controls($context, array $blocks = array())
    {
        // line 80
        ob_start();
        // line 81
        echo "<div class=\"thrace-controls\">
\t<div class=\"btn-group\">
    <button id=\"thrace-file-btn-upload-";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"btn\" 
        title=\"";
        // line 84
        echo $this->env->getExtension('translator')->getTranslator()->trans("button_upload_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo "\"><i class='icon-upload'></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("button_upload_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo "</button>
    ";
        // line 85
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "enabled_button")) {
            // line 86
            echo "        <button id=\"thrace-file-btn-enabled-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" 
        class=\"btn\" 
            title=\"";
            // line 88
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_title_enabled", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            echo "\"><i class='icon-edit'></i> ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_title_enabled", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            echo "</button>
    ";
        }
        // line 90
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "meta_button")) {
            // line 91
            echo "        <button id=\"thrace-meta-btn-edit-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"btn\" 
            title=\"";
            // line 92
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_edit_meta_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            echo "\"><i class='icon-edit'></i> ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_edit_meta_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            echo "</button>
    ";
        }
        // line 94
        echo "    <button id=\"thrace-file-btn-remove-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"btn\" 
        title=\"";
        // line 95
        echo $this->env->getExtension('translator')->getTranslator()->trans("button_remove_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo "\"><i class='icon-remove'></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("button_remove_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo "</button>
\t</div>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 101
    public function block_thrace_media_upload_meta($context, array $blocks = array())
    {
        // line 102
        ob_start();
        // line 103
        echo "<div id=\"thrace-dlg-meta-edit-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-media\" 
    title=\"";
        // line 104
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo "\">
   <div>
       <label for=\"thrace_meta_title-";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-media-label\">
           ";
        // line 107
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_label_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        // line 108
        echo "       </label>
       <input type=\"text\" id=\"thrace-meta-title-";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-media-text\" />
   </div>
   
   <div>
       <label for=\"thrace-meta-caption-";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-media-label\" >
           ";
        // line 114
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_label_caption", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        // line 115
        echo "       </label>
       <input type=\"text\" id=\"thrace-meta-caption-";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-media-text\" />
   </div>
   
   <div>
       <label for=\"thrace-meta-description-";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-media-label\">
           ";
        // line 121
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_label_description", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        // line 122
        echo "       </label>
       <textarea id=\"thrace-meta-description-";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-media-text\" rows=\"5\" ></textarea>
   </div>
   
   <div>
       <label for=\"thrace-meta-author-";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-media-label\">
           ";
        // line 128
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_label_author", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        // line 129
        echo "       </label>
       <input type=\"text\" id=\"thrace-meta-author-";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-media-text\" />
   </div>
   
   <div>
       <label for=\"thrace-meta-copywrite-";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-media-label\">
           ";
        // line 135
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_label_copywrite", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        // line 136
        echo "       </label>
       <input type=\"text\" id=\"thrace-meta-copywrite-";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-media-text\" />
   </div>
   
   <div style=\"float:right\">
       <a id=\"thrace-edit-dlg-done-btn-";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-upload-button\">
           ";
        // line 142
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_button_done", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        // line 143
        echo "       </a>
   </div>
   
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 150
    public function block_thrace_image_upload_widget($context, array $blocks = array())
    {
        // line 151
        ob_start();
        // line 152
        echo "<div ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class"), "html", null, true);
            echo "\" ";
        }
        echo ">    
    ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo " 
    <div class=\"thrace-image-upload-main\" style=\"display:none\">
        ";
        // line 155
        $this->displayBlock("thrace_image_upload_container", $context, $blocks);
        echo " 
        ";
        // line 156
        $this->displayBlock("thrace_image_upload_crop", $context, $blocks);
        echo "
        ";
        // line 157
        $this->displayBlock("thrace_media_upload_meta", $context, $blocks);
        echo "
    </div>
    
    <span class=\"thrace-image-upload\" data-options=\"";
        // line 160
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("base_url" => $this->env->getExtension('assets')->getAssetUrl("")))), "html", null, true);
        echo "\" style=\"display:none\"></span>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 165
    public function block_thrace_image_upload_container($context, array $blocks = array())
    {
        // line 166
        ob_start();
        // line 167
        echo "<div id=\"thrace-image-upload-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
    <div class=\"ui-state-error\" style=\"width:300px; padding:5px; display:none\">
        <span style=\"float:right\">
            <a href=\"#close\" id=\"thrace-upload-error-cancel-";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
                <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
            </a>
        </span>
        <p>
            <span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span> 
            <span class=\"thrace-imageupload-error\">&nbsp</span>
        </p>
    </div>
   
    <div  id=\"thrace-progressbar-";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" style=\"width:350px; height:10px; display: none\" ></div>
    
    <div class=\"thrace-progress-info\" style=\"display:none\">
        <div class=\"ui-widget\">
            <div class=\"ui-state-highlight ui-corner-all\" style=\"width:340px;padding:5px;\"> 
                <span style=\"float:right\" id=\"thrace-upload-remove-image-";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
                    <a href=\"#remove\">
                        <img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                    </a>
                </span>
                <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                <span>";
        // line 191
        echo $this->env->getExtension('translator')->getTranslator()->trans("upload_progress", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo ": <strong>0%</strong></span>
                <br/>
                <span id=\"thrace-image-info-";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">__image_name__ (__image_size__)</span>
            </div>
        </div>
    </div>
        
    <div class=\"thrace-image\">
        <img id=\"thrace-image-";
        // line 199
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/noImage.png"), "html", null, true);
        echo "\" />
    </div>
    
    ";
        // line 202
        $this->displayBlock("thrace_image_controls", $context, $blocks);
        echo "
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 208
    public function block_thrace_image_controls($context, array $blocks = array())
    {
        // line 209
        ob_start();
        // line 210
        echo "<div class=\"thrace-controls\">
    <button id=\"thrace-image-btn-upload-";
        // line 211
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"ui-icon ui-icon-newwin thrace-image-upload-button\" 
        title=\"";
        // line 212
        echo $this->env->getExtension('translator')->getTranslator()->trans("button_upload_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo "\"></button> &nbsp;
    ";
        // line 213
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "enabled_button")) {
            // line 214
            echo "        <a id=\"thrace-image-btn-enabled-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" 
            class=\"ui-icon ";
            // line 215
            if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "enabled_value")) {
                echo " ui-icon-bullet  ";
            } else {
                echo " ui-icon-radio-on ";
            }
            echo " thrace-image-upload-button\" 
            title=\"";
            // line 216
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_title_enabled", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            echo "\"></a>  &nbsp;
    ";
        }
        // line 218
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "view_button")) {
            // line 219
            echo "        <a id=\"thrace-image-btn-view-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"ui-icon ui-icon-zoomin thrace-image-upload-button\" 
            title=\"";
            // line 220
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_view_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            echo "\"></a>  &nbsp;
    ";
        }
        // line 222
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "crop_button")) {
            // line 223
            echo "        <a id=\"thrace-image-btn-crop-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"ui-icon ui-icon-scissors thrace-image-upload-button\" 
            title=\"";
            // line 224
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_crop_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            echo "\"></a>  &nbsp;
    ";
        }
        // line 226
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "meta_button")) {
            // line 227
            echo "        <a id=\"thrace-meta-btn-edit-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"ui-icon ui-icon-pencil thrace-image-upload-button\" 
            title=\"";
            // line 228
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_edit_meta_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            echo "\"></a>  &nbsp;
    ";
        }
        // line 229
        echo "  
    ";
        // line 230
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "rotate_button")) {
            // line 231
            echo "        <a id=\"thrace-image-btn-rotate-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"ui-icon ui-icon-arrowrefresh-1-s thrace-image-upload-button\" 
            title=\"";
            // line 232
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_rotate_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            echo "\"></a> &nbsp;
    ";
        }
        // line 234
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "reset_button")) {
            // line 235
            echo "        <a id=\"thrace-image-btn-reset-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"ui-icon ui-icon-cancel thrace-image-upload-button\" 
            title=\"";
            // line 236
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_reset_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            echo "\"></a>  &nbsp;
    ";
        }
        // line 237
        echo " 
    <a id=\"thrace-image-btn-remove-";
        // line 238
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"ui-icon ui-icon-trash thrace-image-upload-button\" 
        title=\"";
        // line 239
        echo $this->env->getExtension('translator')->getTranslator()->trans("button_remove_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo "\"></a>  &nbsp;
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 244
    public function block_thrace_image_upload_crop($context, array $blocks = array())
    {
        // line 245
        ob_start();
        // line 246
        echo "<div id=\"thrace-dlg-image-crop-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" style=\"display:none\" 
    title=\"";
        // line 247
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_crop_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo "\">
   
    <div id=\"thrace-image-crop-";
        // line 249
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-image\"></div>

    <div style=\"float:right\">
        <input type=\"hidden\" id=\"x-";
        // line 252
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" id=\"y-";
        // line 253
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" id=\"w-";
        // line 254
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" id=\"h-";
        // line 255
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"/>
        
        <a id=\"thrace-crop-dlg-cancel-btn-";
        // line 257
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-image-upload-button\">
            ";
        // line 258
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_crop_button_cancel", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo "</a>
        <a id=\"thrace-crop-dlg-save-btn-";
        // line 259
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-image-upload-button\">
            ";
        // line 260
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_crop_button_crop", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo "</a>  &nbsp;    
    </div>
</div>  
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 266
    public function block_thrace_media_upload_widget($context, array $blocks = array())
    {
        // line 267
        ob_start();
        echo "       
<div ";
        // line 268
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class"), "html", null, true);
            echo "\" ";
        }
        echo "> 
    ";
        // line 269
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo " 
    <span class=\"thrace-media-upload\" data-options=\"";
        // line 270
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("base_path" => $this->env->getExtension('assets')->getAssetUrl(""), "media_render_url" => $this->env->getExtension('routing')->getUrl("thrace_media_render_temporary")))), "html", null, true);
        echo "\" style=\"display:none\"></span>
    
    <span class=\"thrace-file-upload-main\" style=\"display:none\">
        <div id=\"thrace-file-error-";
        // line 273
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"ui-state-error\" 
             style=\"width:300px; padding:10px; margin-bottom: 5px; display:none\">
            <span style=\"float:right\">
                <a href=\"#close\" id=\"thrace-upload-error-cancel-";
        // line 276
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                </a>
            </span>
            <p>
                <span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span> 
                <span class=\"thrace-fileupload-error\">&nbsp</span>
            </p>
        </div>
                    
        <div  id=\"thrace-progressbar-";
        // line 286
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" style=\"width:350px; height:10px; display: none\" ></div>
       
        <div class=\"thrace-progress-info\" style=\"display:none\">
            <div class=\"ui-widget\">
                <div class=\"ui-state-highlight ui-corner-all\" style=\"width:340px;padding:5px;\"> 
                    <span style=\"float:right\" id=\"thrace-upload-remove-file-";
        // line 291
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
                        <a href=\"#remove\">
                            <img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                        </a>
                    </span>
                    <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                    <span>";
        // line 297
        echo $this->env->getExtension('translator')->getTranslator()->trans("upload_progress", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo ": <strong>0%</strong></span>
                    <br/>
                    <span id=\"thrace-file-info-";
        // line 299
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">__file_name__ (__file_size__)</span>
                </div>
            </div>
        </div>
              
        
        <div id=\"thrace-upload-file-";
        // line 305
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"ui-state-highlight ui-corner-all\" style=\"width:440px;padding:5px; ";
        if ((!twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), "vars"), "value")))) {
            echo "display:none";
        }
        echo "\" class=\"ui-state-highlight ui-corner-all\" style=\"width:440px;padding:5px;\">             
            <p>
                <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                ";
        // line 308
        echo $this->env->getExtension('translator')->getTranslator()->trans("no_media_uploaded", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        // line 309
        echo "            </p>            
        </div>
        
        
        <div id=\"thrace-media-container-";
        // line 313
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"></div>
        
        ";
        // line 315
        $this->displayBlock("thrace_file_upload_controls", $context, $blocks);
        echo "
        ";
        // line 316
        $this->displayBlock("thrace_media_upload_meta", $context, $blocks);
        echo "  
    </span>
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 323
    public function block_thrace_multi_file_upload_collection_widget($context, array $blocks = array())
    {
        // line 324
        ob_start();
        // line 325
        echo "<div ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class"), "html", null, true);
            echo "\" ";
        }
        echo "> \t   
    <div class=\"thrace-multi-file-upload-main\" style=\"display:none\">
        <div id=\"thrace-multi-file-upload-error-";
        // line 327
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-multi-file-upload-error\" style=\"display:none\">
            <div class=\"ui-state-error\" style=\"width:340px; padding:5px;\">
                <p>
                    <span style=\"float:right\">
                        <a href=\"#close\" id=\"thrace-multi-upload-error-cancel-";
        // line 331
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                        </a>
                    </span>
    
                    <span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span> 
                    <span class=\"thrace-fileupload-error\">&nbsp;</span>
                </p>
            </div>
        </div>
    \t
        <div id=\"multi-file-progress-";
        // line 342
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"></div>
    
        <div id=\"drag-drop-area-";
        // line 344
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-drag-drop\">
            <div class=\"thrace-drag-drop-inside\">
                <p class=\"thrace-drag-drop-info lead\" id=\"thrace-drag-drop-info-";
        // line 346
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" 
                    trans-no-files=\"";
        // line 347
        echo $this->env->getExtension('translator')->getTranslator()->trans("no_file_text", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo "\"
                >";
        // line 348
        echo $this->env->getExtension('translator')->getTranslator()->trans("drag_drop_file_text", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo "</p>
            </div>
        </div>
            
            
        <ul id=\"thrace-multi-file-upload-container-";
        // line 353
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-sortable\">
            ";
        // line 354
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            echo " 
                <li data-index=\"";
            // line 355
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\">
                    ";
            // line 356
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
            echo "
                    <div class=\"ui-state-highlight\" style=\"width:300px;height:70px;padding:5px;\"> 
                        <p>
                            <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                            <strong>";
            // line 360
            echo $this->env->getExtension('translator')->getTranslator()->trans("filename", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            echo ": </strong>
                            <span class=\"thrace-file-name\">";
            // line 361
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "originalName"), "vars"), "value"), "html", null, true);
            echo "</span>
                        </p>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 366
        echo "        </ul>
            
        <div id=\"thrace-multi-file-prototype-";
        // line 368
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" style=\"display:none\">
            <div class=\"ui-state-highlight\" style=\"width:300px;height:70px;padding:5px;\"> 
                <p>
                    <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                    <strong>";
        // line 372
        echo $this->env->getExtension('translator')->getTranslator()->trans("filename", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo ": </strong>
                    <span class=\"thrace-file-name\">__name__</span>
                </p>
            </div>
        </div>
    \t
        <div id=\"thrace-progressbar-prototype-";
        // line 378
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" style=\"display:none\">
            <div id=\"__id__\"  class=\"thrace-progressbar-multi-file\" style=\"width:350px; height:10px;\" ></div>
            <div class=\"thrace-progress-info\">
                <div class=\"ui-widget\">
                    <div class=\"ui-state-highlight ui-corner-all\" style=\"width:340px;padding:5px;\"> 
                        <span style=\"float:right\">
                            <a href=\"#remove\" id=\"thrace-multi-upload-remove-file-__id__\">
                                <img src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                            </a>
                        </span>
                        <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                        <span>";
        // line 389
        echo $this->env->getExtension('translator')->getTranslator()->trans("upload_progress", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo ": <strong>0%</strong></span>
                        <br/>
                        <span>__file_name__</span>
                    </div>
                </div>
            </div>
        </div>
        
        <span data-prototype=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "prototype", array(), "array"), 'widget'));
        echo "\" data-options=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : null)), "html", null, true);
        echo "\"
            class=\"thrace-multi-file-upload\" style=\"display:none\"></span>
        <div style=\"clear:both;\"></div> 
        
        ";
        // line 401
        $this->displayBlock("thrace_file_upload_controls", $context, $blocks);
        echo "
        ";
        // line 402
        $this->displayBlock("thrace_media_upload_meta", $context, $blocks);
        echo " 
    </div>
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 409
    public function block_thrace_multi_image_upload_collection_widget($context, array $blocks = array())
    {
        // line 410
        ob_start();
        // line 411
        echo "<div ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class"), "html", null, true);
            echo "\" ";
        }
        echo ">
    <div class=\"thrace-multi-image-upload-main\" style=\"display:none\">
        <div id=\"thrace-multi-image-upload-error-";
        // line 413
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" 
            class=\"thrace-multi-image-upload-error\" style=\"display:none\">
    
            <div class=\"ui-state-error\" style=\"width:340px; padding:5px;\">         
                <span style=\"float:right\">
                    <a href=\"#close\" id=\"thrace-multi-upload-error-cancel-";
        // line 418
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                    </a>
                </span>
    
                <span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span> 
                <span class=\"thrace-imageupload-error\">&nbsp;</span>       
            </div>
        </div>
    \t
        <div id=\"multi-image-progress-";
        // line 428
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"></div>
    
        <div id=\"drag-drop-area-";
        // line 430
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-drag-drop\" ";
        if ((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : null)) > 0)) {
            echo "style=\"display:none;\"";
        }
        echo ">
            <div class=\"thrace-drag-drop-inside\">
                <p class=\"thrace-drag-drop-info\" id=\"thrace-drag-drop-info-";
        // line 432
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" 
                    trans-drag=\"";
        // line 433
        echo $this->env->getExtension('translator')->getTranslator()->trans("drag_drop_image_text", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo "\"
                    trans-no-images=\"";
        // line 434
        echo $this->env->getExtension('translator')->getTranslator()->trans("no_images_text", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo "\"
                ></p>
            </div>
        </div>
                   
        <ul id=\"thrace-multi-image-upload-container-";
        // line 439
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"thrace-sortable\">
            ";
        // line 440
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 441
            echo "                <li data-index=\"";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\">
                    ";
            // line 442
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
            echo "
                    <img src=\"";
            // line 443
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thrace_media_image_render_temporary", array("name" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars"), "value"), "name"))), "html", null, true);
            echo "\" 
                       style=\"width:";
            // line 444
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "minWidth"), "html", null, true);
            echo "px; height:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "minHeight"), "html", null, true);
            echo "px\" />
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 447
        echo "        </ul>
            
        <div id=\"thrace-progressbar-prototype-";
        // line 449
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" style=\"display:none\">
            <div id=\"__id__\"  class=\"thrace-progressbar-multi-image\" style=\"width:350px; height:10px;\" ></div>
            <div class=\"thrace-progress-info\">
                <div class=\"ui-widget\">
                    <div class=\"ui-state-highlight ui-corner-all\" style=\"width:340px;padding:5px;\"> 
                        <span style=\"float:right\">
                            <a href=\"#remove\" id=\"thrace-multi-upload-remove-image-__id__\">
                                <img src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                            </a>
                        </span>
                        <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                        <span>";
        // line 460
        echo $this->env->getExtension('translator')->getTranslator()->trans("upload_progress", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo ": <strong>0%</strong></span>
                        <br/>
                        <span>__image_name__ (__image_size__)</span>
                    </div>
                </div>
            </div>
        </div>
                
        <span data-prototype=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "prototype", array(), "array"), 'widget'));
        echo "\" data-options=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("base_url" => $this->env->getExtension('assets')->getAssetUrl("")))), "html", null, true);
        echo "\"
            class=\"thrace-multi-image-upload\" style=\"display:none\"></span>
        
        <div style=\"clear:both;\"></div> 

        ";
        // line 473
        $this->displayBlock("thrace_image_controls", $context, $blocks);
        echo "
        ";
        // line 474
        $this->displayBlock("thrace_image_upload_crop", $context, $blocks);
        echo "
        ";
        // line 475
        $this->displayBlock("thrace_media_upload_meta", $context, $blocks);
        echo "
    </div>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "GestionCoreBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1183 => 475,  1175 => 473,  1165 => 468,  1147 => 456,  1137 => 449,  1133 => 447,  1122 => 444,  1114 => 442,  1105 => 440,  1101 => 439,  1093 => 434,  1089 => 433,  1085 => 432,  1076 => 430,  1071 => 428,  1059 => 419,  1055 => 418,  1047 => 413,  1035 => 410,  1022 => 402,  1018 => 401,  998 => 389,  972 => 372,  965 => 368,  929 => 354,  913 => 347,  904 => 344,  899 => 342,  886 => 332,  882 => 331,  875 => 327,  850 => 316,  835 => 309,  823 => 305,  797 => 291,  777 => 277,  761 => 270,  733 => 260,  708 => 253,  704 => 252,  698 => 249,  693 => 247,  671 => 238,  630 => 227,  609 => 220,  604 => 219,  539 => 193,  498 => 170,  472 => 157,  386 => 121,  372 => 115,  297 => 88,  336 => 100,  223 => 55,  956 => 271,  946 => 360,  933 => 296,  917 => 348,  914 => 290,  912 => 289,  901 => 285,  898 => 284,  887 => 280,  870 => 274,  868 => 273,  863 => 324,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  791 => 262,  788 => 233,  773 => 276,  771 => 232,  768 => 231,  765 => 230,  757 => 269,  743 => 217,  738 => 214,  679 => 200,  673 => 198,  665 => 196,  663 => 236,  657 => 193,  629 => 186,  626 => 184,  603 => 179,  600 => 178,  588 => 215,  570 => 210,  554 => 224,  479 => 135,  418 => 135,  370 => 114,  356 => 108,  624 => 224,  620 => 223,  601 => 218,  580 => 207,  559 => 201,  545 => 198,  497 => 156,  485 => 124,  447 => 113,  424 => 114,  412 => 126,  401 => 89,  391 => 123,  379 => 104,  376 => 103,  333 => 99,  326 => 86,  292 => 91,  287 => 77,  264 => 74,  178 => 35,  12 => 36,  778 => 267,  763 => 244,  742 => 266,  734 => 237,  717 => 210,  714 => 232,  711 => 231,  703 => 226,  653 => 218,  650 => 232,  644 => 190,  616 => 182,  595 => 205,  587 => 203,  578 => 200,  573 => 211,  546 => 175,  534 => 191,  531 => 225,  513 => 230,  475 => 169,  448 => 151,  445 => 150,  429 => 148,  422 => 147,  396 => 138,  345 => 104,  307 => 91,  286 => 98,  247 => 75,  206 => 46,  90 => 39,  283 => 84,  236 => 42,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 474,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 460,  1145 => 322,  1143 => 321,  1118 => 443,  1115 => 319,  1112 => 318,  1106 => 316,  1103 => 315,  1100 => 314,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 409,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 397,  1004 => 266,  982 => 261,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 366,  958 => 253,  955 => 252,  952 => 251,  950 => 361,  947 => 249,  939 => 356,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 286,  900 => 228,  897 => 227,  892 => 282,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  865 => 325,  862 => 212,  857 => 267,  849 => 206,  846 => 315,  844 => 204,  841 => 313,  833 => 308,  830 => 198,  828 => 246,  817 => 192,  812 => 190,  809 => 297,  801 => 185,  798 => 184,  796 => 233,  793 => 182,  783 => 177,  769 => 247,  767 => 273,  764 => 169,  756 => 165,  751 => 163,  746 => 161,  739 => 239,  729 => 259,  724 => 154,  721 => 257,  715 => 151,  710 => 149,  707 => 208,  699 => 142,  697 => 141,  694 => 138,  689 => 137,  680 => 134,  675 => 239,  662 => 125,  658 => 235,  654 => 123,  649 => 122,  640 => 229,  619 => 183,  617 => 223,  598 => 107,  576 => 199,  564 => 162,  557 => 96,  550 => 187,  547 => 93,  503 => 81,  493 => 143,  480 => 75,  456 => 68,  450 => 152,  414 => 134,  408 => 109,  368 => 126,  355 => 122,  350 => 106,  342 => 23,  332 => 88,  316 => 16,  255 => 67,  245 => 83,  194 => 39,  200 => 31,  180 => 49,  560 => 191,  549 => 182,  532 => 192,  528 => 160,  525 => 157,  523 => 189,  518 => 180,  514 => 180,  511 => 166,  508 => 165,  501 => 154,  474 => 122,  460 => 123,  455 => 115,  442 => 151,  439 => 150,  436 => 143,  433 => 149,  426 => 58,  415 => 127,  405 => 108,  360 => 128,  354 => 107,  331 => 96,  322 => 93,  304 => 90,  272 => 91,  249 => 74,  233 => 304,  216 => 35,  140 => 51,  126 => 66,  192 => 53,  161 => 64,  320 => 92,  288 => 80,  237 => 63,  232 => 78,  222 => 66,  185 => 61,  150 => 21,  100 => 42,  692 => 399,  683 => 244,  678 => 133,  676 => 199,  666 => 222,  661 => 220,  656 => 219,  641 => 189,  635 => 228,  615 => 354,  590 => 204,  583 => 214,  577 => 212,  575 => 328,  536 => 194,  524 => 90,  510 => 178,  482 => 136,  464 => 155,  452 => 268,  423 => 137,  421 => 90,  413 => 241,  400 => 47,  393 => 168,  385 => 159,  374 => 128,  324 => 95,  310 => 83,  302 => 79,  296 => 151,  282 => 161,  278 => 95,  270 => 79,  259 => 87,  226 => 131,  365 => 141,  347 => 140,  338 => 102,  319 => 94,  315 => 90,  301 => 80,  299 => 8,  281 => 75,  268 => 71,  265 => 51,  262 => 81,  260 => 72,  257 => 103,  225 => 56,  213 => 69,  211 => 81,  197 => 30,  174 => 34,  127 => 13,  252 => 68,  242 => 65,  231 => 61,  207 => 51,  195 => 45,  165 => 77,  129 => 67,  84 => 1,  52 => 164,  167 => 56,  155 => 63,  145 => 26,  111 => 40,  23 => 13,  58 => 20,  37 => 78,  20 => 1,  1127 => 457,  1123 => 456,  1119 => 455,  1109 => 441,  1098 => 313,  1091 => 438,  1081 => 431,  1077 => 305,  1066 => 426,  1062 => 425,  1058 => 424,  1053 => 292,  1049 => 422,  1045 => 421,  1037 => 411,  1033 => 415,  1029 => 282,  1020 => 412,  1015 => 410,  1003 => 401,  999 => 400,  991 => 385,  981 => 378,  979 => 260,  976 => 259,  966 => 384,  962 => 383,  953 => 270,  942 => 300,  935 => 355,  925 => 353,  916 => 354,  909 => 346,  905 => 348,  894 => 226,  890 => 281,  883 => 338,  879 => 277,  873 => 217,  869 => 335,  860 => 323,  856 => 328,  852 => 327,  843 => 325,  838 => 323,  825 => 196,  821 => 312,  814 => 299,  804 => 306,  802 => 293,  799 => 234,  789 => 286,  785 => 232,  780 => 303,  774 => 290,  772 => 248,  762 => 286,  753 => 220,  748 => 242,  741 => 274,  728 => 267,  716 => 255,  712 => 254,  706 => 254,  700 => 205,  696 => 204,  688 => 246,  684 => 248,  681 => 247,  664 => 239,  655 => 234,  651 => 235,  647 => 191,  643 => 230,  637 => 230,  632 => 187,  627 => 226,  625 => 361,  622 => 224,  614 => 222,  610 => 181,  607 => 180,  594 => 176,  584 => 173,  582 => 211,  566 => 203,  561 => 161,  556 => 202,  553 => 188,  548 => 199,  540 => 160,  527 => 187,  522 => 185,  520 => 194,  516 => 294,  495 => 158,  487 => 156,  466 => 168,  461 => 70,  453 => 161,  441 => 152,  428 => 116,  417 => 145,  407 => 130,  403 => 48,  398 => 127,  389 => 133,  387 => 110,  384 => 106,  375 => 116,  369 => 148,  359 => 109,  357 => 116,  346 => 111,  343 => 92,  341 => 131,  337 => 90,  327 => 102,  314 => 88,  311 => 83,  309 => 82,  305 => 115,  293 => 90,  289 => 85,  284 => 76,  279 => 83,  277 => 136,  274 => 73,  266 => 70,  261 => 69,  256 => 71,  251 => 101,  220 => 58,  215 => 56,  202 => 49,  198 => 55,  190 => 43,  157 => 56,  137 => 56,  132 => 54,  124 => 20,  96 => 41,  74 => 29,  61 => 27,  34 => 17,  784 => 215,  775 => 213,  760 => 222,  749 => 268,  745 => 267,  736 => 238,  732 => 213,  727 => 203,  725 => 258,  723 => 196,  720 => 211,  713 => 209,  709 => 190,  705 => 189,  702 => 188,  695 => 139,  686 => 245,  682 => 201,  677 => 179,  674 => 178,  672 => 241,  668 => 237,  660 => 194,  652 => 376,  648 => 173,  645 => 231,  638 => 210,  633 => 209,  631 => 364,  628 => 165,  623 => 161,  618 => 160,  612 => 220,  599 => 215,  596 => 216,  593 => 105,  591 => 151,  586 => 150,  579 => 332,  574 => 205,  569 => 325,  562 => 139,  552 => 136,  543 => 174,  533 => 133,  529 => 159,  519 => 127,  500 => 291,  490 => 142,  471 => 129,  467 => 72,  459 => 153,  440 => 106,  437 => 61,  434 => 142,  427 => 99,  420 => 136,  410 => 110,  404 => 129,  402 => 128,  399 => 139,  392 => 82,  388 => 122,  383 => 80,  381 => 105,  378 => 78,  371 => 35,  363 => 32,  361 => 124,  358 => 123,  348 => 118,  344 => 24,  340 => 103,  330 => 103,  325 => 94,  321 => 100,  317 => 107,  313 => 84,  308 => 89,  303 => 87,  298 => 101,  294 => 82,  290 => 90,  275 => 81,  271 => 374,  263 => 365,  258 => 72,  253 => 66,  248 => 66,  244 => 65,  228 => 57,  214 => 63,  191 => 26,  186 => 37,  177 => 43,  175 => 47,  170 => 29,  153 => 72,  146 => 34,  128 => 53,  120 => 12,  118 => 11,  113 => 46,  110 => 39,  104 => 43,  97 => 32,  83 => 55,  81 => 26,  77 => 408,  65 => 244,  53 => 63,  608 => 225,  602 => 217,  597 => 177,  589 => 213,  585 => 209,  581 => 213,  572 => 204,  568 => 209,  565 => 208,  563 => 202,  558 => 160,  555 => 200,  551 => 221,  541 => 197,  537 => 159,  535 => 197,  530 => 193,  526 => 190,  521 => 182,  515 => 305,  512 => 84,  509 => 228,  507 => 156,  504 => 155,  502 => 171,  499 => 173,  496 => 172,  494 => 122,  491 => 167,  489 => 166,  486 => 165,  483 => 173,  481 => 119,  478 => 160,  476 => 116,  473 => 168,  470 => 121,  468 => 156,  463 => 117,  457 => 160,  454 => 121,  451 => 120,  449 => 138,  444 => 263,  438 => 150,  435 => 149,  432 => 100,  430 => 141,  425 => 146,  411 => 143,  406 => 111,  390 => 136,  382 => 120,  380 => 130,  377 => 129,  373 => 102,  366 => 113,  362 => 148,  353 => 115,  351 => 141,  339 => 191,  335 => 101,  329 => 130,  323 => 85,  318 => 86,  312 => 92,  306 => 88,  300 => 93,  295 => 100,  291 => 86,  285 => 79,  280 => 77,  276 => 393,  267 => 78,  250 => 44,  239 => 64,  229 => 60,  218 => 97,  212 => 49,  210 => 59,  205 => 90,  188 => 25,  184 => 48,  181 => 232,  169 => 78,  160 => 25,  152 => 36,  148 => 49,  139 => 19,  134 => 52,  114 => 48,  107 => 6,  76 => 2,  70 => 266,  273 => 80,  269 => 133,  254 => 46,  246 => 67,  243 => 66,  240 => 64,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 39,  221 => 38,  219 => 101,  217 => 64,  208 => 47,  204 => 57,  179 => 44,  159 => 196,  143 => 58,  135 => 55,  131 => 48,  119 => 44,  108 => 46,  102 => 13,  71 => 31,  67 => 265,  63 => 26,  59 => 24,  47 => 149,  38 => 25,  94 => 10,  89 => 3,  85 => 4,  79 => 21,  75 => 323,  68 => 28,  56 => 23,  50 => 150,  29 => 4,  87 => 2,  72 => 322,  55 => 165,  21 => 11,  26 => 2,  98 => 36,  93 => 40,  88 => 33,  78 => 3,  46 => 20,  27 => 6,  40 => 79,  44 => 18,  35 => 18,  31 => 1,  43 => 45,  41 => 15,  28 => 14,  201 => 56,  196 => 52,  183 => 50,  171 => 153,  166 => 28,  163 => 40,  158 => 74,  156 => 38,  151 => 29,  142 => 25,  138 => 49,  136 => 18,  123 => 65,  121 => 17,  117 => 43,  115 => 10,  105 => 36,  101 => 34,  91 => 39,  69 => 99,  66 => 21,  62 => 243,  49 => 18,  24 => 2,  32 => 15,  25 => 5,  22 => 12,  19 => 1,  209 => 58,  203 => 45,  199 => 265,  193 => 51,  189 => 52,  187 => 64,  182 => 38,  176 => 309,  173 => 46,  168 => 43,  164 => 65,  162 => 41,  154 => 22,  149 => 35,  147 => 27,  144 => 26,  141 => 20,  133 => 69,  130 => 22,  125 => 52,  122 => 45,  116 => 43,  112 => 15,  109 => 46,  106 => 14,  103 => 43,  99 => 12,  95 => 5,  92 => 4,  86 => 30,  82 => 34,  80 => 409,  73 => 1,  64 => 36,  60 => 208,  57 => 207,  54 => 19,  51 => 24,  48 => 54,  45 => 101,  42 => 100,  39 => 20,  36 => 16,  33 => 10,  30 => 9,);
    }
}

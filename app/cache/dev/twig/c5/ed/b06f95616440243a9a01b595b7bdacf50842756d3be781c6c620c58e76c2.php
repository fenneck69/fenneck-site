<?php

/* ThraceMediaBundle:Form:fields.html.twig */
class __TwigTemplate_c5edb06f95616440243a9a01b595b7bdacf50842756d3be781c6c620c58e76c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        $this->displayBlock('thrace_file_upload_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('thrace_file_upload_controls', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('thrace_media_upload_meta', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('thrace_image_upload_widget', $context, $blocks);
        // line 145
        echo "
";
        // line 146
        $this->displayBlock('thrace_image_upload_container', $context, $blocks);
        // line 188
        echo "
";
        // line 189
        $this->displayBlock('thrace_image_controls', $context, $blocks);
        // line 224
        echo "
";
        // line 225
        $this->displayBlock('thrace_image_upload_crop', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('thrace_media_upload_widget', $context, $blocks);
        // line 303
        echo "
";
        // line 304
        $this->displayBlock('thrace_multi_file_upload_collection_widget', $context, $blocks);
        // line 390
        echo "
";
        // line 391
        $this->displayBlock('thrace_multi_image_upload_collection_widget', $context, $blocks);
    }

    // line 1
    public function block_thrace_file_upload_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "<div ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "div_class"), "html", null, true);
            echo "\" ";
        }
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " 
    <span class=\"thrace-file-upload\" data-options=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs"))), "html", null, true);
        echo "\" style=\"display:none\"></span>
    
    <span class=\"thrace-file-upload-main\" style=\"display:none\">
        <div id=\"thrace-file-error-";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"ui-state-error\" 
             style=\"width:300px; padding:10px; margin-bottom: 5px; display:none\">
            <span style=\"float:right\">
                <a href=\"#close\" id=\"thrace-upload-error-cancel-";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 12
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
        // line 21
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"width:350px; height:10px; display: none\" ></div>
       
        <div class=\"thrace-progress-info\" style=\"display:none\">
            <div class=\"ui-widget\">
                <div class=\"ui-state-highlight ui-corner-all\" style=\"width:340px;padding:5px;\"> 
                    <span style=\"float:right\" id=\"thrace-upload-remove-file-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
                        <a href=\"#remove\">
                            <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                        </a>
                    </span>
                    <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                    <span>";
        // line 32
        echo $this->env->getExtension('translator')->getTranslator()->trans("upload_progress", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo ": <strong>0%</strong></span>
                    <br/>
                    <span id=\"thrace-file-info-";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">__file_name__ (__file_size__)</span>
                </div>
            </div>
        </div>
                    
        <div id=\"thrace-upload-file-";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"ui-state-highlight ui-corner-all\" style=\"width:440px;padding:5px;\"> 
            
            <p id=\"thrace-file-empty-";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), "vars"), "value")) {
            echo "style=\"display:none\"";
        }
        echo ">
                <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                ";
        // line 43
        echo $this->env->getExtension('translator')->getTranslator()->trans("no_file_uploaded", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        // line 44
        echo "            </p>
            
            <p id=\"thrace-file-name-";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" ";
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "originalName"), "vars"), "value"))) {
            echo "style=\"display:none\"";
        }
        echo ">
                <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                <strong>";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("filename", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo ": </strong>
                <span class=\"thrace-file-name\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "originalName"), "vars"), "value"), "html", null, true);
        echo "</span>
            </p>
    
        </div>
        
        ";
        // line 54
        $this->displayBlock("thrace_file_upload_controls", $context, $blocks);
        echo "
        ";
        // line 55
        $this->displayBlock("thrace_media_upload_meta", $context, $blocks);
        echo "  
    </span>
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_thrace_file_upload_controls($context, array $blocks = array())
    {
        // line 63
        ob_start();
        // line 64
        echo "<div class=\"thrace-controls\">    
    <button id=\"thrace-file-btn-upload-";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"ui-icon ui-icon-newwin thrace-file-upload-button\" 
        title=\"";
        // line 66
        echo $this->env->getExtension('translator')->getTranslator()->trans("button_upload_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\"></button> &nbsp;
    ";
        // line 67
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "enabled_button")) {
            // line 68
            echo "        <a id=\"thrace-file-btn-enabled-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" 
        class=\"ui-icon ";
            // line 69
            if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "enabled_value")) {
                echo " ui-icon-bullet ";
            } else {
                echo " ui-icon-radio-on ";
            }
            echo " thrace-file-upload-button\" 
            title=\"";
            // line 70
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_title_enabled", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "\"></a>  &nbsp;
    ";
        }
        // line 72
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "meta_button")) {
            // line 73
            echo "        <a id=\"thrace-meta-btn-edit-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"ui-icon ui-icon-pencil thrace-file-upload-button\" 
            title=\"";
            // line 74
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_edit_meta_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "\"></a>  &nbsp;
    ";
        }
        // line 76
        echo "    <a id=\"thrace-file-btn-remove-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"ui-icon ui-icon-trash thrace-file-upload-button\" 
        title=\"";
        // line 77
        echo $this->env->getExtension('translator')->getTranslator()->trans("button_remove_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\"></a>  &nbsp;
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 82
    public function block_thrace_media_upload_meta($context, array $blocks = array())
    {
        // line 83
        ob_start();
        // line 84
        echo "<div id=\"thrace-dlg-meta-edit-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media\" 
    title=\"";
        // line 85
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\">
   <div>
       <label for=\"thrace_meta_title-";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-label\">
           ";
        // line 88
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_label_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        // line 89
        echo "       </label>
       <input type=\"text\" id=\"thrace-meta-title-";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-text\" />
   </div>
   
   <div>
       <label for=\"thrace-meta-caption-";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-label\" >
           ";
        // line 95
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_label_caption", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        // line 96
        echo "       </label>
       <input type=\"text\" id=\"thrace-meta-caption-";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-text\" />
   </div>
   
   <div>
       <label for=\"thrace-meta-description-";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-label\">
           ";
        // line 102
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_label_description", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        // line 103
        echo "       </label>
       <textarea id=\"thrace-meta-description-";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-text\" rows=\"5\" ></textarea>
   </div>
   
   <div>
       <label for=\"thrace-meta-author-";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-label\">
           ";
        // line 109
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_label_author", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        // line 110
        echo "       </label>
       <input type=\"text\" id=\"thrace-meta-author-";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-text\" />
   </div>
   
   <div>
       <label for=\"thrace-meta-copywrite-";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-label\">
           ";
        // line 116
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_label_copywrite", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        // line 117
        echo "       </label>
       <input type=\"text\" id=\"thrace-meta-copywrite-";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-text\" />
   </div>
   
   <div style=\"float:right\">
       <a id=\"thrace-edit-dlg-done-btn-";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-upload-button\">
           ";
        // line 123
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_button_done", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        // line 124
        echo "       </a>
   </div>
   
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 131
    public function block_thrace_image_upload_widget($context, array $blocks = array())
    {
        // line 132
        ob_start();
        // line 133
        echo "<div ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "div_class"), "html", null, true);
            echo "\" ";
        }
        echo ">    
    ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " 
    <div class=\"thrace-image-upload-main\" style=\"display:none\">
        ";
        // line 136
        $this->displayBlock("thrace_image_upload_container", $context, $blocks);
        echo " 
        ";
        // line 137
        $this->displayBlock("thrace_image_upload_crop", $context, $blocks);
        echo "
        ";
        // line 138
        $this->displayBlock("thrace_media_upload_meta", $context, $blocks);
        echo "
    </div>
    
    <span class=\"thrace-image-upload\" data-options=\"";
        // line 141
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("base_url" => $this->env->getExtension('assets')->getAssetUrl("/")))), "html", null, true);
        echo "\" style=\"display:none\"></span>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 146
    public function block_thrace_image_upload_container($context, array $blocks = array())
    {
        // line 147
        ob_start();
        // line 148
        echo "<div id=\"thrace-image-upload-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
    <div class=\"ui-state-error\" style=\"width:300px; padding:5px; display:none\">
        <span style=\"float:right\">
            <a href=\"#close\" id=\"thrace-upload-error-cancel-";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
                <img src=\"";
        // line 152
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
        // line 161
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"width:350px; height:10px; display: none\" ></div>
    
    <div class=\"thrace-progress-info\" style=\"display:none\">
        <div class=\"ui-widget\">
            <div class=\"ui-state-highlight ui-corner-all\" style=\"width:340px;padding:5px;\"> 
                <span style=\"float:right\" id=\"thrace-upload-remove-image-";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
                    <a href=\"#remove\">
                        <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                    </a>
                </span>
                <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                <span>";
        // line 172
        echo $this->env->getExtension('translator')->getTranslator()->trans("upload_progress", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo ": <strong>0%</strong></span>
                <br/>
                <span id=\"thrace-image-info-";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">__image_name__ (__image_size__)</span>
            </div>
        </div>
    </div>
        
    <div class=\"thrace-image\">
        <img id=\"thrace-image-";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/noImage.png"), "html", null, true);
        echo "\" />
    </div>
    
    ";
        // line 183
        $this->displayBlock("thrace_image_controls", $context, $blocks);
        echo "
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 189
    public function block_thrace_image_controls($context, array $blocks = array())
    {
        // line 190
        ob_start();
        // line 191
        echo "<div class=\"thrace-controls\">
    <button id=\"thrace-image-btn-upload-";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"ui-icon ui-icon-newwin thrace-image-upload-button\" 
        title=\"";
        // line 193
        echo $this->env->getExtension('translator')->getTranslator()->trans("button_upload_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\"></button> &nbsp;
    ";
        // line 194
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "enabled_button")) {
            // line 195
            echo "        <a id=\"thrace-image-btn-enabled-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" 
            class=\"ui-icon ";
            // line 196
            if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "enabled_value")) {
                echo " ui-icon-bullet  ";
            } else {
                echo " ui-icon-radio-on ";
            }
            echo " thrace-image-upload-button\" 
            title=\"";
            // line 197
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_title_enabled", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "\"></a>  &nbsp;
    ";
        }
        // line 199
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "view_button")) {
            // line 200
            echo "        <a id=\"thrace-image-btn-view-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"ui-icon ui-icon-zoomin thrace-image-upload-button\" 
            title=\"";
            // line 201
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_view_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "\"></a>  &nbsp;
    ";
        }
        // line 203
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "crop_button")) {
            // line 204
            echo "        <a id=\"thrace-image-btn-crop-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"ui-icon ui-icon-scissors thrace-image-upload-button\" 
            title=\"";
            // line 205
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_crop_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "\"></a>  &nbsp;
    ";
        }
        // line 207
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "meta_button")) {
            // line 208
            echo "        <a id=\"thrace-meta-btn-edit-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"ui-icon ui-icon-pencil thrace-image-upload-button\" 
            title=\"";
            // line 209
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_edit_meta_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "\"></a>  &nbsp;
    ";
        }
        // line 210
        echo "  
    ";
        // line 211
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "rotate_button")) {
            // line 212
            echo "        <a id=\"thrace-image-btn-rotate-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"ui-icon ui-icon-arrowrefresh-1-s thrace-image-upload-button\" 
            title=\"";
            // line 213
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_rotate_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "\"></a> &nbsp;
    ";
        }
        // line 215
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "reset_button")) {
            // line 216
            echo "        <a id=\"thrace-image-btn-reset-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"ui-icon ui-icon-cancel thrace-image-upload-button\" 
            title=\"";
            // line 217
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_reset_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "\"></a>  &nbsp;
    ";
        }
        // line 218
        echo " 
    <a id=\"thrace-image-btn-remove-";
        // line 219
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"ui-icon ui-icon-trash thrace-image-upload-button\" 
        title=\"";
        // line 220
        echo $this->env->getExtension('translator')->getTranslator()->trans("button_remove_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\"></a>  &nbsp;
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 225
    public function block_thrace_image_upload_crop($context, array $blocks = array())
    {
        // line 226
        ob_start();
        // line 227
        echo "<div id=\"thrace-dlg-image-crop-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"display:none\" 
    title=\"";
        // line 228
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_crop_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\">
   
    <div id=\"thrace-image-crop-";
        // line 230
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-image\"></div>

    <div style=\"float:right\">
        <input type=\"hidden\" id=\"x-";
        // line 233
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" id=\"y-";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" id=\"w-";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" id=\"h-";
        // line 236
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"/>
        
        <a id=\"thrace-crop-dlg-cancel-btn-";
        // line 238
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-image-upload-button\">
            ";
        // line 239
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_crop_button_cancel", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "</a>
        <a id=\"thrace-crop-dlg-save-btn-";
        // line 240
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-image-upload-button\">
            ";
        // line 241
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_crop_button_crop", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "</a>  &nbsp;    
    </div>
</div>  
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 247
    public function block_thrace_media_upload_widget($context, array $blocks = array())
    {
        // line 248
        ob_start();
        echo "       
<div ";
        // line 249
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "div_class"), "html", null, true);
            echo "\" ";
        }
        echo "> 
    ";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " 
    <span class=\"thrace-media-upload\" data-options=\"";
        // line 251
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("base_path" => $this->env->getExtension('assets')->getAssetUrl(""), "media_render_url" => $this->env->getExtension('routing')->getUrl("thrace_media_render_temporary")))), "html", null, true);
        echo "\" style=\"display:none\"></span>
    
    <span class=\"thrace-file-upload-main\" style=\"display:none\">
        <div id=\"thrace-file-error-";
        // line 254
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"ui-state-error\" 
             style=\"width:300px; padding:10px; margin-bottom: 5px; display:none\">
            <span style=\"float:right\">
                <a href=\"#close\" id=\"thrace-upload-error-cancel-";
        // line 257
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 258
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
        // line 267
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"width:350px; height:10px; display: none\" ></div>
       
        <div class=\"thrace-progress-info\" style=\"display:none\">
            <div class=\"ui-widget\">
                <div class=\"ui-state-highlight ui-corner-all\" style=\"width:340px;padding:5px;\"> 
                    <span style=\"float:right\" id=\"thrace-upload-remove-file-";
        // line 272
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
                        <a href=\"#remove\">
                            <img src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                        </a>
                    </span>
                    <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                    <span>";
        // line 278
        echo $this->env->getExtension('translator')->getTranslator()->trans("upload_progress", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo ": <strong>0%</strong></span>
                    <br/>
                    <span id=\"thrace-file-info-";
        // line 280
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">__file_name__ (__file_size__)</span>
                </div>
            </div>
        </div>
              
        
        <div id=\"thrace-upload-file-";
        // line 286
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"ui-state-highlight ui-corner-all\" style=\"width:440px;padding:5px; ";
        if ((!twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), "vars"), "value")))) {
            echo "display:none";
        }
        echo "\" class=\"ui-state-highlight ui-corner-all\" style=\"width:440px;padding:5px;\">             
            <p>
                <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                ";
        // line 289
        echo $this->env->getExtension('translator')->getTranslator()->trans("no_media_uploaded", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        // line 290
        echo "            </p>            
        </div>
        
        
        <div id=\"thrace-media-container-";
        // line 294
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"></div>
        
        ";
        // line 296
        $this->displayBlock("thrace_file_upload_controls", $context, $blocks);
        echo "
        ";
        // line 297
        $this->displayBlock("thrace_media_upload_meta", $context, $blocks);
        echo "  
    </span>
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 304
    public function block_thrace_multi_file_upload_collection_widget($context, array $blocks = array())
    {
        // line 305
        ob_start();
        // line 306
        echo "<div ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "div_class"), "html", null, true);
            echo "\" ";
        }
        echo "> \t   
    <div class=\"thrace-multi-file-upload-main\" style=\"display:none\">
        <div id=\"thrace-multi-file-upload-error-";
        // line 308
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-multi-file-upload-error\" style=\"display:none\">
            <div class=\"ui-state-error\" style=\"width:340px; padding:5px;\">
                <p>
                    <span style=\"float:right\">
                        <a href=\"#close\" id=\"thrace-multi-upload-error-cancel-";
        // line 312
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 313
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
        // line 323
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"></div>
    
        <div id=\"drag-drop-area-";
        // line 325
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-drag-drop\" ";
        if ((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) > 0)) {
            echo "style=\"display:none;\"";
        }
        echo ">
            <div class=\"thrace-drag-drop-inside\">
                <p class=\"thrace-drag-drop-info\" id=\"thrace-drag-drop-info-";
        // line 327
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" 
                    trans-drag=\"";
        // line 328
        echo $this->env->getExtension('translator')->getTranslator()->trans("drag_drop_file_text", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\"
                    trans-no-files=\"";
        // line 329
        echo $this->env->getExtension('translator')->getTranslator()->trans("no_file_text", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\"
                ></p>
            </div>
        </div>
            
            
        <ul id=\"thrace-multi-file-upload-container-";
        // line 335
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-sortable\">
            ";
        // line 336
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            echo " 
                <li data-index=\"";
            // line 337
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\">
                    ";
            // line 338
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
            echo "
                    <div class=\"ui-state-highlight\" style=\"width:300px;height:70px;padding:5px;\"> 
                        <p>
                            <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                            <strong>";
            // line 342
            echo $this->env->getExtension('translator')->getTranslator()->trans("filename", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo ": </strong>
                            <span class=\"thrace-file-name\">";
            // line 343
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array"), "originalName"), "vars"), "value"), "html", null, true);
            echo "</span>
                        </p>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        echo "        </ul>
            
        <div id=\"thrace-multi-file-prototype-";
        // line 350
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"display:none\">
            <div class=\"ui-state-highlight\" style=\"width:300px;height:70px;padding:5px;\"> 
                <p>
                    <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                    <strong>";
        // line 354
        echo $this->env->getExtension('translator')->getTranslator()->trans("filename", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo ": </strong>
                    <span class=\"thrace-file-name\">__name__</span>
                </p>
            </div>
        </div>
    \t
        <div id=\"thrace-progressbar-prototype-";
        // line 360
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"display:none\">
            <div id=\"__id__\"  class=\"thrace-progressbar-multi-file\" style=\"width:350px; height:10px;\" ></div>
            <div class=\"thrace-progress-info\">
                <div class=\"ui-widget\">
                    <div class=\"ui-state-highlight ui-corner-all\" style=\"width:340px;padding:5px;\"> 
                        <span style=\"float:right\">
                            <a href=\"#remove\" id=\"thrace-multi-upload-remove-file-__id__\">
                                <img src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                            </a>
                        </span>
                        <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                        <span>";
        // line 371
        echo $this->env->getExtension('translator')->getTranslator()->trans("upload_progress", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo ": <strong>0%</strong></span>
                        <br/>
                        <span>__file_name__</span>
                    </div>
                </div>
            </div>
        </div>
        
        <span data-prototype=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "prototype", array(), "array"), 'widget'));
        echo "\" data-options=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs"))), "html", null, true);
        echo "\"
            class=\"thrace-multi-file-upload\" style=\"display:none\"></span>
        <div style=\"clear:both;\"></div> 
        
        ";
        // line 383
        $this->displayBlock("thrace_file_upload_controls", $context, $blocks);
        echo "
        ";
        // line 384
        $this->displayBlock("thrace_media_upload_meta", $context, $blocks);
        echo " 
    </div>
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 391
    public function block_thrace_multi_image_upload_collection_widget($context, array $blocks = array())
    {
        // line 392
        ob_start();
        // line 393
        echo "<div ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "div_class"), "html", null, true);
            echo "\" ";
        }
        echo ">
    <div class=\"thrace-multi-image-upload-main\" style=\"display:none\">
        <div id=\"thrace-multi-image-upload-error-";
        // line 395
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" 
            class=\"thrace-multi-image-upload-error\" style=\"display:none\">
    
            <div class=\"ui-state-error\" style=\"width:340px; padding:5px;\">         
                <span style=\"float:right\">
                    <a href=\"#close\" id=\"thrace-multi-upload-error-cancel-";
        // line 400
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 401
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
        // line 410
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"></div>
    
        <div id=\"drag-drop-area-";
        // line 412
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-drag-drop\" ";
        if ((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) > 0)) {
            echo "style=\"display:none;\"";
        }
        echo ">
            <div class=\"thrace-drag-drop-inside\">
                <p class=\"thrace-drag-drop-info\" id=\"thrace-drag-drop-info-";
        // line 414
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" 
                    trans-drag=\"";
        // line 415
        echo $this->env->getExtension('translator')->getTranslator()->trans("drag_drop_image_text", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\"
                    trans-no-images=\"";
        // line 416
        echo $this->env->getExtension('translator')->getTranslator()->trans("no_images_text", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\"
                ></p>
            </div>
        </div>
                   
        <ul id=\"thrace-multi-image-upload-container-";
        // line 421
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-sortable\">
            ";
        // line 422
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 423
            echo "                <li data-index=\"";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\">
                    ";
            // line 424
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
            echo "
                    <img src=\"";
            // line 425
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thrace_media_image_render_temporary", array("name" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "value"), "name"))), "html", null, true);
            echo "\" 
                       style=\"width:";
            // line 426
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "minWidth"), "html", null, true);
            echo "px; height:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "minHeight"), "html", null, true);
            echo "px\" />
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 429
        echo "        </ul>
            
        <div id=\"thrace-progressbar-prototype-";
        // line 431
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"display:none\">
            <div id=\"__id__\"  class=\"thrace-progressbar-multi-image\" style=\"width:350px; height:10px;\" ></div>
            <div class=\"thrace-progress-info\">
                <div class=\"ui-widget\">
                    <div class=\"ui-state-highlight ui-corner-all\" style=\"width:340px;padding:5px;\"> 
                        <span style=\"float:right\">
                            <a href=\"#remove\" id=\"thrace-multi-upload-remove-image-__id__\">
                                <img src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                            </a>
                        </span>
                        <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                        <span>";
        // line 442
        echo $this->env->getExtension('translator')->getTranslator()->trans("upload_progress", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo ": <strong>0%</strong></span>
                        <br/>
                        <span>__image_name__ (__image_size__)</span>
                    </div>
                </div>
            </div>
        </div>
                
        <span data-prototype=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "prototype", array(), "array"), 'widget'));
        echo "\" data-options=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("base_url" => $this->env->getExtension('assets')->getAssetUrl("/")))), "html", null, true);
        echo "\"
            class=\"thrace-multi-image-upload\" style=\"display:none\"></span>
        
        <div style=\"clear:both;\"></div> 

        ";
        // line 455
        $this->displayBlock("thrace_image_controls", $context, $blocks);
        echo "
        ";
        // line 456
        $this->displayBlock("thrace_image_upload_crop", $context, $blocks);
        echo "
        ";
        // line 457
        $this->displayBlock("thrace_media_upload_meta", $context, $blocks);
        echo "
    </div>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "ThraceMediaBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1127 => 457,  1123 => 456,  1119 => 455,  1109 => 450,  1098 => 442,  1091 => 438,  1081 => 431,  1077 => 429,  1066 => 426,  1062 => 425,  1058 => 424,  1053 => 423,  1049 => 422,  1045 => 421,  1037 => 416,  1033 => 415,  1029 => 414,  1020 => 412,  1015 => 410,  1003 => 401,  999 => 400,  991 => 395,  981 => 393,  979 => 392,  976 => 391,  966 => 384,  962 => 383,  953 => 379,  942 => 371,  935 => 367,  925 => 360,  916 => 354,  909 => 350,  905 => 348,  894 => 343,  890 => 342,  883 => 338,  879 => 337,  873 => 336,  869 => 335,  860 => 329,  856 => 328,  852 => 327,  843 => 325,  838 => 323,  825 => 313,  821 => 312,  814 => 308,  804 => 306,  802 => 305,  799 => 304,  789 => 297,  785 => 296,  780 => 294,  774 => 290,  772 => 289,  762 => 286,  753 => 280,  748 => 278,  741 => 274,  728 => 267,  716 => 258,  712 => 257,  706 => 254,  700 => 251,  696 => 250,  688 => 249,  684 => 248,  681 => 247,  664 => 239,  655 => 236,  651 => 235,  647 => 234,  643 => 233,  637 => 230,  632 => 228,  627 => 227,  625 => 226,  622 => 225,  614 => 220,  610 => 219,  607 => 218,  594 => 215,  584 => 212,  582 => 211,  566 => 207,  561 => 205,  556 => 204,  553 => 203,  548 => 201,  540 => 199,  527 => 196,  522 => 195,  520 => 194,  516 => 193,  495 => 183,  487 => 180,  466 => 168,  461 => 166,  453 => 161,  441 => 152,  428 => 147,  417 => 141,  407 => 137,  403 => 136,  398 => 134,  389 => 133,  387 => 132,  384 => 131,  375 => 124,  369 => 122,  359 => 117,  357 => 116,  346 => 111,  343 => 110,  341 => 109,  337 => 108,  327 => 103,  314 => 97,  311 => 96,  309 => 95,  305 => 94,  293 => 88,  289 => 87,  284 => 85,  279 => 84,  277 => 83,  274 => 82,  266 => 77,  261 => 76,  256 => 74,  251 => 73,  220 => 65,  215 => 63,  202 => 55,  198 => 54,  190 => 49,  137 => 28,  132 => 26,  124 => 21,  61 => 246,  34 => 62,  784 => 215,  775 => 213,  760 => 210,  749 => 207,  745 => 206,  736 => 272,  732 => 204,  727 => 203,  725 => 197,  723 => 196,  720 => 195,  713 => 191,  709 => 190,  705 => 189,  702 => 188,  695 => 183,  686 => 181,  682 => 180,  677 => 179,  674 => 178,  672 => 241,  668 => 240,  660 => 238,  652 => 174,  648 => 173,  645 => 172,  638 => 168,  633 => 167,  631 => 166,  628 => 165,  623 => 161,  618 => 160,  612 => 159,  599 => 158,  596 => 157,  593 => 152,  591 => 151,  586 => 150,  579 => 210,  574 => 209,  569 => 208,  562 => 139,  552 => 136,  543 => 200,  533 => 133,  529 => 132,  519 => 127,  500 => 123,  490 => 121,  471 => 115,  467 => 114,  459 => 112,  440 => 106,  437 => 151,  434 => 101,  427 => 99,  420 => 95,  410 => 90,  404 => 88,  402 => 87,  399 => 86,  392 => 82,  388 => 81,  383 => 80,  381 => 79,  378 => 78,  371 => 74,  363 => 68,  361 => 67,  358 => 66,  348 => 62,  344 => 61,  340 => 60,  330 => 104,  325 => 102,  321 => 101,  317 => 53,  313 => 52,  308 => 51,  303 => 48,  298 => 90,  294 => 46,  290 => 45,  275 => 40,  271 => 39,  263 => 37,  258 => 36,  253 => 33,  248 => 72,  244 => 31,  228 => 67,  214 => 20,  191 => 13,  186 => 48,  177 => 46,  175 => 9,  170 => 8,  153 => 1,  146 => 194,  128 => 150,  118 => 131,  113 => 119,  110 => 118,  104 => 109,  97 => 86,  81 => 2,  77 => 57,  65 => 42,  53 => 27,  608 => 225,  602 => 217,  597 => 216,  589 => 213,  585 => 216,  581 => 214,  572 => 144,  568 => 211,  565 => 210,  563 => 209,  558 => 137,  555 => 206,  551 => 205,  541 => 197,  537 => 134,  535 => 197,  530 => 193,  526 => 131,  521 => 189,  515 => 125,  512 => 192,  509 => 191,  507 => 190,  504 => 189,  502 => 180,  499 => 179,  496 => 178,  494 => 122,  491 => 176,  489 => 175,  486 => 120,  483 => 173,  481 => 119,  478 => 174,  476 => 116,  473 => 172,  470 => 168,  468 => 167,  463 => 113,  457 => 160,  454 => 111,  451 => 158,  449 => 108,  444 => 107,  438 => 150,  435 => 149,  432 => 100,  430 => 148,  425 => 146,  411 => 138,  406 => 140,  390 => 137,  382 => 135,  380 => 134,  377 => 133,  373 => 123,  366 => 73,  362 => 118,  353 => 115,  351 => 124,  339 => 121,  335 => 59,  329 => 117,  323 => 116,  318 => 114,  312 => 113,  306 => 110,  300 => 109,  295 => 89,  291 => 106,  285 => 44,  280 => 41,  276 => 102,  267 => 38,  250 => 100,  239 => 95,  229 => 91,  218 => 82,  212 => 62,  210 => 77,  205 => 76,  188 => 75,  184 => 73,  181 => 72,  169 => 66,  160 => 59,  152 => 54,  148 => 53,  134 => 165,  114 => 37,  107 => 33,  76 => 18,  70 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 70,  240 => 30,  238 => 85,  235 => 69,  230 => 68,  227 => 81,  224 => 66,  221 => 77,  219 => 22,  217 => 64,  208 => 73,  204 => 16,  179 => 69,  159 => 61,  143 => 55,  135 => 53,  119 => 42,  102 => 8,  71 => 390,  67 => 17,  63 => 36,  59 => 225,  38 => 6,  94 => 85,  89 => 77,  85 => 19,  75 => 51,  68 => 14,  56 => 224,  87 => 66,  21 => 2,  26 => 6,  93 => 9,  88 => 6,  78 => 1,  46 => 145,  27 => 4,  44 => 131,  31 => 61,  28 => 3,  201 => 15,  196 => 90,  183 => 82,  171 => 43,  166 => 61,  163 => 4,  158 => 3,  156 => 2,  151 => 63,  142 => 49,  138 => 54,  136 => 171,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 146,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 304,  47 => 18,  40 => 1,  37 => 10,  22 => 2,  246 => 99,  157 => 39,  145 => 46,  139 => 172,  131 => 44,  123 => 143,  120 => 142,  115 => 130,  111 => 38,  108 => 11,  101 => 30,  98 => 40,  96 => 5,  83 => 3,  74 => 391,  66 => 303,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 130,  35 => 5,  32 => 4,  29 => 1,  209 => 17,  203 => 78,  199 => 71,  193 => 73,  189 => 71,  187 => 84,  182 => 11,  176 => 64,  173 => 44,  168 => 72,  164 => 58,  162 => 41,  154 => 58,  149 => 34,  147 => 50,  144 => 32,  141 => 187,  133 => 55,  130 => 163,  125 => 149,  122 => 37,  116 => 41,  112 => 12,  109 => 34,  106 => 36,  103 => 31,  99 => 98,  95 => 28,  92 => 4,  86 => 28,  82 => 22,  80 => 20,  73 => 17,  64 => 247,  60 => 6,  57 => 29,  54 => 189,  51 => 188,  48 => 13,  45 => 8,  42 => 7,  39 => 82,  36 => 81,  33 => 4,  30 => 7,);
    }
}

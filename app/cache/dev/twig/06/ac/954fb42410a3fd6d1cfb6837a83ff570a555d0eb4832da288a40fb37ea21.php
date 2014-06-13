<?php

/* GestionCoreBundle:Form:fields2.html.twig */
class __TwigTemplate_06ac954fb42410a3fd6d1cfb6837a83ff570a555d0eb4832da288a40fb37ea21 extends Twig_Template
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
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('thrace_media_upload_meta', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('thrace_image_upload_widget', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('thrace_image_upload_container', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('thrace_image_controls', $context, $blocks);
        // line 228
        echo "
";
        // line 229
        $this->displayBlock('thrace_image_upload_crop', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('thrace_media_upload_widget', $context, $blocks);
        // line 307
        echo "
";
        // line 308
        $this->displayBlock('thrace_multi_file_upload_collection_widget', $context, $blocks);
        // line 394
        echo "
";
        // line 395
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
        echo "\" class=\"btn\" 
        title=\"";
        // line 66
        echo $this->env->getExtension('translator')->getTranslator()->trans("button_upload_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("button_upload_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "</button> &nbsp;
    ";
        // line 67
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "enabled_button")) {
            // line 68
            echo "        <a id=\"thrace-file-btn-enabled-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" 
        class=\"btn\" 
            title=\"";
            // line 70
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_title_enabled", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "\"><i style=\"float:left;\" class=\"ui-icon ";
            if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "enabled_value")) {
                echo " ui-icon-bullet ";
            } else {
                echo " ui-icon-radio-on ";
            }
            echo "\"></i>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_title_enabled", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "</a>  &nbsp;
    ";
        }
        // line 72
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "meta_button")) {
            // line 73
            echo "        <a id=\"thrace-meta-btn-edit-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"btn\" 
            title=\"";
            // line 74
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_edit_meta_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "\">
\t\t\t<i style=\"float:left;\" class=\"ui-icon ui-icon-pencil\"></i>";
            // line 75
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_edit_meta_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            // line 76
            echo "\t\t\t</a>  &nbsp;
    ";
        }
        // line 78
        echo "    <a id=\"thrace-file-btn-remove-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"btn\" 
        title=\"";
        // line 79
        echo $this->env->getExtension('translator')->getTranslator()->trans("button_remove_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\">
\t\t<i style=\"float:left;\" class=\"ui-icon ui-icon-trash\"></i>";
        // line 80
        echo $this->env->getExtension('translator')->getTranslator()->trans("button_remove_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        // line 81
        echo "\t\t</a>  
</div><div style=\"clear:both;\">&nbsp;</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 86
    public function block_thrace_media_upload_meta($context, array $blocks = array())
    {
        // line 87
        ob_start();
        // line 88
        echo "<div id=\"thrace-dlg-meta-edit-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media\" 
    title=\"";
        // line 89
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\">
   <div>
       <label for=\"thrace_meta_title-";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-label\">
           ";
        // line 92
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_label_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        // line 93
        echo "       </label>
       <input type=\"text\" id=\"thrace-meta-title-";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-text\" />
   </div>
   
   <div>
       <label for=\"thrace-meta-caption-";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-label\" >
           ";
        // line 99
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_label_caption", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        // line 100
        echo "       </label>
       <input type=\"text\" id=\"thrace-meta-caption-";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-text\" />
   </div>
   
   <div>
       <label for=\"thrace-meta-description-";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-label\">
           ";
        // line 106
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_label_description", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        // line 107
        echo "       </label>
       <textarea id=\"thrace-meta-description-";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-text\" rows=\"5\" ></textarea>
   </div>
   
   <div>
       <label for=\"thrace-meta-author-";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-label\">
           ";
        // line 113
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_label_author", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        // line 114
        echo "       </label>
       <input type=\"text\" id=\"thrace-meta-author-";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-text\" />
   </div>
   
   <div>
       <label for=\"thrace-meta-copywrite-";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-label\">
           ";
        // line 120
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_label_copywrite", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        // line 121
        echo "       </label>
       <input type=\"text\" id=\"thrace-meta-copywrite-";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-media-text\" />
   </div>
   
   <div style=\"float:right\">
       <a id=\"thrace-edit-dlg-done-btn-";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-upload-button\">
           ";
        // line 127
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_edit_meta_button_done", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        // line 128
        echo "       </a>
   </div>
   
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 135
    public function block_thrace_image_upload_widget($context, array $blocks = array())
    {
        // line 136
        ob_start();
        // line 137
        echo "<div ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "div_class"), "html", null, true);
            echo "\" ";
        }
        echo ">    
    ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " 
    <div class=\"thrace-image-upload-main\" style=\"display:none\">
        ";
        // line 140
        $this->displayBlock("thrace_image_upload_container", $context, $blocks);
        echo " 
        ";
        // line 141
        $this->displayBlock("thrace_image_upload_crop", $context, $blocks);
        echo "
        ";
        // line 142
        $this->displayBlock("thrace_media_upload_meta", $context, $blocks);
        echo "
    </div>
    
    <span class=\"thrace-image-upload\" data-options=\"";
        // line 145
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("base_url" => $this->env->getExtension('assets')->getAssetUrl("/")))), "html", null, true);
        echo "\" style=\"display:none\"></span>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 150
    public function block_thrace_image_upload_container($context, array $blocks = array())
    {
        // line 151
        ob_start();
        // line 152
        echo "<div id=\"thrace-image-upload-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
    <div class=\"ui-state-error\" style=\"width:300px; padding:5px; display:none\">
        <span style=\"float:right\">
            <a href=\"#close\" id=\"thrace-upload-error-cancel-";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
                <img src=\"";
        // line 156
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
        // line 165
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"width:350px; height:10px; display: none\" ></div>
    
    <div class=\"thrace-progress-info\" style=\"display:none\">
        <div class=\"ui-widget\">
            <div class=\"ui-state-highlight ui-corner-all\" style=\"width:340px;padding:5px;\"> 
                <span style=\"float:right\" id=\"thrace-upload-remove-image-";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
                    <a href=\"#remove\">
                        <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                    </a>
                </span>
                <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                <span>";
        // line 176
        echo $this->env->getExtension('translator')->getTranslator()->trans("upload_progress", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo ": <strong>0%</strong></span>
                <br/>
                <span id=\"thrace-image-info-";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">__image_name__ (__image_size__)</span>
            </div>
        </div>
    </div>
        
    <div class=\"thrace-image\">
        <img id=\"thrace-image-";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/noImage.png"), "html", null, true);
        echo "\" />
    </div>
    
    ";
        // line 187
        $this->displayBlock("thrace_image_controls", $context, $blocks);
        echo "
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 193
    public function block_thrace_image_controls($context, array $blocks = array())
    {
        // line 194
        ob_start();
        // line 195
        echo "<div class=\"thrace-controls\">
    <button id=\"thrace-image-btn-upload-";
        // line 196
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"ui-icon ui-icon-newwin thrace-image-upload-button\" 
        title=\"";
        // line 197
        echo $this->env->getExtension('translator')->getTranslator()->trans("button_upload_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\"></button> &nbsp;
    ";
        // line 198
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "enabled_button")) {
            // line 199
            echo "        <a id=\"thrace-image-btn-enabled-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" 
            class=\"ui-icon ";
            // line 200
            if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "enabled_value")) {
                echo " ui-icon-bullet  ";
            } else {
                echo " ui-icon-radio-on ";
            }
            echo " thrace-image-upload-button\" 
            title=\"";
            // line 201
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_title_enabled", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "\"></a>  &nbsp;
    ";
        }
        // line 203
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "view_button")) {
            // line 204
            echo "        <a id=\"thrace-image-btn-view-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"ui-icon ui-icon-zoomin thrace-image-upload-button\" 
            title=\"";
            // line 205
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_view_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "\"></a>  &nbsp;
    ";
        }
        // line 207
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "crop_button")) {
            // line 208
            echo "        <a id=\"thrace-image-btn-crop-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"ui-icon ui-icon-scissors thrace-image-upload-button\" 
            title=\"";
            // line 209
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_crop_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "\"></a>  &nbsp;
    ";
        }
        // line 211
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "meta_button")) {
            // line 212
            echo "        <a id=\"thrace-meta-btn-edit-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"ui-icon ui-icon-pencil thrace-image-upload-button\" 
            title=\"";
            // line 213
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_edit_meta_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "\"></a>  &nbsp;
    ";
        }
        // line 214
        echo "  
    ";
        // line 215
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "rotate_button")) {
            // line 216
            echo "        <a id=\"thrace-image-btn-rotate-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"ui-icon ui-icon-arrowrefresh-1-s thrace-image-upload-button\" 
            title=\"";
            // line 217
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_rotate_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "\"></a> &nbsp;
    ";
        }
        // line 219
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "reset_button")) {
            // line 220
            echo "        <a id=\"thrace-image-btn-reset-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"ui-icon ui-icon-cancel thrace-image-upload-button\" 
            title=\"";
            // line 221
            echo $this->env->getExtension('translator')->getTranslator()->trans("button_reset_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "\"></a>  &nbsp;
    ";
        }
        // line 222
        echo " 
    <a id=\"thrace-image-btn-remove-";
        // line 223
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"ui-icon ui-icon-trash thrace-image-upload-button\" 
        title=\"";
        // line 224
        echo $this->env->getExtension('translator')->getTranslator()->trans("button_remove_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\"></a>  &nbsp;
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 229
    public function block_thrace_image_upload_crop($context, array $blocks = array())
    {
        // line 230
        ob_start();
        // line 231
        echo "<div id=\"thrace-dlg-image-crop-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"display:none\" 
    title=\"";
        // line 232
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_crop_title", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\">
   
    <div id=\"thrace-image-crop-";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-image\"></div>

    <div style=\"float:right\">
        <input type=\"hidden\" id=\"x-";
        // line 237
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" id=\"y-";
        // line 238
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" id=\"w-";
        // line 239
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" id=\"h-";
        // line 240
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"/>
        
        <a id=\"thrace-crop-dlg-cancel-btn-";
        // line 242
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-image-upload-button\">
            ";
        // line 243
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_crop_button_cancel", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "</a>
        <a id=\"thrace-crop-dlg-save-btn-";
        // line 244
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-image-upload-button\">
            ";
        // line 245
        echo $this->env->getExtension('translator')->getTranslator()->trans("dialog_crop_button_crop", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "</a>  &nbsp;    
    </div>
</div>  
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 251
    public function block_thrace_media_upload_widget($context, array $blocks = array())
    {
        // line 252
        ob_start();
        echo "       
<div ";
        // line 253
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "div_class"), "html", null, true);
            echo "\" ";
        }
        echo "> 
    ";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " 
    <span class=\"thrace-media-upload\" data-options=\"";
        // line 255
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("base_path" => $this->env->getExtension('assets')->getAssetUrl(""), "media_render_url" => $this->env->getExtension('routing')->getUrl("thrace_media_render_temporary")))), "html", null, true);
        echo "\" style=\"display:none\"></span>
    
    <span class=\"thrace-file-upload-main\" style=\"display:none\">
        <div id=\"thrace-file-error-";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"ui-state-error\" 
             style=\"width:300px; padding:10px; margin-bottom: 5px; display:none\">
            <span style=\"float:right\">
                <a href=\"#close\" id=\"thrace-upload-error-cancel-";
        // line 261
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 262
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
        // line 271
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"width:350px; height:10px; display: none\" ></div>
       
        <div class=\"thrace-progress-info\" style=\"display:none\">
            <div class=\"ui-widget\">
                <div class=\"ui-state-highlight ui-corner-all\" style=\"width:340px;padding:5px;\"> 
                    <span style=\"float:right\" id=\"thrace-upload-remove-file-";
        // line 276
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
                        <a href=\"#remove\">
                            <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                        </a>
                    </span>
                    <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                    <span>";
        // line 282
        echo $this->env->getExtension('translator')->getTranslator()->trans("upload_progress", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo ": <strong>0%</strong></span>
                    <br/>
                    <span id=\"thrace-file-info-";
        // line 284
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">__file_name__ (__file_size__)</span>
                </div>
            </div>
        </div>
              
        
        <div id=\"thrace-upload-file-";
        // line 290
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"ui-state-highlight ui-corner-all\" style=\"width:440px;padding:5px; ";
        if ((!twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), "vars"), "value")))) {
            echo "display:none";
        }
        echo "\" class=\"ui-state-highlight ui-corner-all\" style=\"width:440px;padding:5px;\">             
            <p>
                <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                ";
        // line 293
        echo $this->env->getExtension('translator')->getTranslator()->trans("no_media_uploaded", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        // line 294
        echo "            </p>            
        </div>
        
        
        <div id=\"thrace-media-container-";
        // line 298
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"></div>
        
        ";
        // line 300
        $this->displayBlock("thrace_file_upload_controls", $context, $blocks);
        echo "
        ";
        // line 301
        $this->displayBlock("thrace_media_upload_meta", $context, $blocks);
        echo "  
    </span>
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 308
    public function block_thrace_multi_file_upload_collection_widget($context, array $blocks = array())
    {
        // line 309
        ob_start();
        // line 310
        echo "<div ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "div_class"), "html", null, true);
            echo "\" ";
        }
        echo "> \t   
    <div class=\"thrace-multi-file-upload-main\" style=\"display:none\">
        <div id=\"thrace-multi-file-upload-error-";
        // line 312
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-multi-file-upload-error\" style=\"display:none\">
            <div class=\"ui-state-error\" style=\"width:340px; padding:5px;\">
                <p>
                    <span style=\"float:right\">
                        <a href=\"#close\" id=\"thrace-multi-upload-error-cancel-";
        // line 316
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 317
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
        // line 327
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"></div>
    
        <div id=\"drag-drop-area-";
        // line 329
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-drag-drop\" ";
        if ((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) > 0)) {
            echo "style=\"display:none;\"";
        }
        echo ">
            <div class=\"thrace-drag-drop-inside\">
                <p class=\"thrace-drag-drop-info\" id=\"thrace-drag-drop-info-";
        // line 331
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" 
                    trans-drag=\"";
        // line 332
        echo $this->env->getExtension('translator')->getTranslator()->trans("drag_drop_file_text", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\"
                    trans-no-files=\"";
        // line 333
        echo $this->env->getExtension('translator')->getTranslator()->trans("no_file_text", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\"
                ></p>
            </div>
        </div>
            
            
        <ul id=\"thrace-multi-file-upload-container-";
        // line 339
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-sortable\">
            ";
        // line 340
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            echo " 
                <li data-index=\"";
            // line 341
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\">
                    ";
            // line 342
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
            echo "
                    <div class=\"ui-state-highlight\" style=\"width:300px;height:70px;padding:5px;\"> 
                        <p>
                            <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                            <strong>";
            // line 346
            echo $this->env->getExtension('translator')->getTranslator()->trans("filename", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo ": </strong>
                            <span class=\"thrace-file-name\">";
            // line 347
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
        // line 352
        echo "        </ul>
            
        <div id=\"thrace-multi-file-prototype-";
        // line 354
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"display:none\">
            <div class=\"ui-state-highlight\" style=\"width:300px;height:70px;padding:5px;\"> 
                <p>
                    <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                    <strong>";
        // line 358
        echo $this->env->getExtension('translator')->getTranslator()->trans("filename", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo ": </strong>
                    <span class=\"thrace-file-name\">__name__</span>
                </p>
            </div>
        </div>
    \t
        <div id=\"thrace-progressbar-prototype-";
        // line 364
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"display:none\">
            <div id=\"__id__\"  class=\"thrace-progressbar-multi-file\" style=\"width:350px; height:10px;\" ></div>
            <div class=\"thrace-progress-info\">
                <div class=\"ui-widget\">
                    <div class=\"ui-state-highlight ui-corner-all\" style=\"width:340px;padding:5px;\"> 
                        <span style=\"float:right\">
                            <a href=\"#remove\" id=\"thrace-multi-upload-remove-file-__id__\">
                                <img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                            </a>
                        </span>
                        <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                        <span>";
        // line 375
        echo $this->env->getExtension('translator')->getTranslator()->trans("upload_progress", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo ": <strong>0%</strong></span>
                        <br/>
                        <span>__file_name__</span>
                    </div>
                </div>
            </div>
        </div>
        
        <span data-prototype=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "prototype", array(), "array"), 'widget'));
        echo "\" data-options=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs"))), "html", null, true);
        echo "\"
            class=\"thrace-multi-file-upload\" style=\"display:none\"></span>
        <div style=\"clear:both;\"></div> 
        
        ";
        // line 387
        $this->displayBlock("thrace_file_upload_controls", $context, $blocks);
        echo "
        ";
        // line 388
        $this->displayBlock("thrace_media_upload_meta", $context, $blocks);
        echo " 
    </div>
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 395
    public function block_thrace_multi_image_upload_collection_widget($context, array $blocks = array())
    {
        // line 396
        ob_start();
        // line 397
        echo "<div ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "div_class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "div_class"), "html", null, true);
            echo "\" ";
        }
        echo ">
    <div class=\"thrace-multi-image-upload-main\" style=\"display:none\">
        <div id=\"thrace-multi-image-upload-error-";
        // line 399
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" 
            class=\"thrace-multi-image-upload-error\" style=\"display:none\">
    
            <div class=\"ui-state-error\" style=\"width:340px; padding:5px;\">         
                <span style=\"float:right\">
                    <a href=\"#close\" id=\"thrace-multi-upload-error-cancel-";
        // line 404
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 405
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
        // line 414
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"></div>
    
        <div id=\"drag-drop-area-";
        // line 416
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-drag-drop\" ";
        if ((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) > 0)) {
            echo "style=\"display:none;\"";
        }
        echo ">
            <div class=\"thrace-drag-drop-inside\">
                <p class=\"thrace-drag-drop-info\" id=\"thrace-drag-drop-info-";
        // line 418
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" 
                    trans-drag=\"";
        // line 419
        echo $this->env->getExtension('translator')->getTranslator()->trans("drag_drop_image_text", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\"
                    trans-no-images=\"";
        // line 420
        echo $this->env->getExtension('translator')->getTranslator()->trans("no_images_text", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "\"
                ></p>
            </div>
        </div>
                   
        <ul id=\"thrace-multi-image-upload-container-";
        // line 425
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"thrace-sortable\">
            ";
        // line 426
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 427
            echo "                <li data-index=\"";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\">
                    ";
            // line 428
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
            echo "
                    <img src=\"";
            // line 429
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thrace_media_image_render_temporary", array("name" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "value"), "name"))), "html", null, true);
            echo "\" 
                       style=\"width:";
            // line 430
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
        // line 433
        echo "        </ul>
            
        <div id=\"thrace-progressbar-prototype-";
        // line 435
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" style=\"display:none\">
            <div id=\"__id__\"  class=\"thrace-progressbar-multi-image\" style=\"width:350px; height:10px;\" ></div>
            <div class=\"thrace-progress-info\">
                <div class=\"ui-widget\">
                    <div class=\"ui-state-highlight ui-corner-all\" style=\"width:340px;padding:5px;\"> 
                        <span style=\"float:right\">
                            <a href=\"#remove\" id=\"thrace-multi-upload-remove-image-__id__\">
                                <img src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thracemedia/images/cancel.png"), "html", null, true);
        echo "\" />
                            </a>
                        </span>
                        <span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>
                        <span>";
        // line 446
        echo $this->env->getExtension('translator')->getTranslator()->trans("upload_progress", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo ": <strong>0%</strong></span>
                        <br/>
                        <span>__image_name__ (__image_size__)</span>
                    </div>
                </div>
            </div>
        </div>
                
        <span data-prototype=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "prototype", array(), "array"), 'widget'));
        echo "\" data-options=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("base_url" => $this->env->getExtension('assets')->getAssetUrl("/")))), "html", null, true);
        echo "\"
            class=\"thrace-multi-image-upload\" style=\"display:none\"></span>
        
        <div style=\"clear:both;\"></div> 

        ";
        // line 459
        $this->displayBlock("thrace_image_controls", $context, $blocks);
        echo "
        ";
        // line 460
        $this->displayBlock("thrace_image_upload_crop", $context, $blocks);
        echo "
        ";
        // line 461
        $this->displayBlock("thrace_media_upload_meta", $context, $blocks);
        echo "
    </div>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "GestionCoreBundle:Form:fields2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1140 => 461,  1136 => 460,  1132 => 459,  1111 => 446,  1104 => 442,  1094 => 435,  1090 => 433,  1075 => 429,  1050 => 420,  1046 => 419,  1042 => 418,  1028 => 414,  994 => 397,  992 => 396,  989 => 395,  975 => 387,  948 => 371,  938 => 364,  922 => 354,  907 => 347,  896 => 342,  851 => 327,  827 => 312,  815 => 309,  787 => 294,  766 => 284,  754 => 278,  719 => 258,  701 => 253,  685 => 245,  592 => 214,  517 => 193,  443 => 152,  416 => 140,  397 => 135,  334 => 105,  1183 => 475,  1175 => 473,  1165 => 468,  1147 => 456,  1137 => 449,  1133 => 447,  1122 => 454,  1114 => 442,  1105 => 440,  1101 => 439,  1093 => 434,  1089 => 433,  1085 => 432,  1076 => 430,  1071 => 428,  1059 => 419,  1055 => 418,  1047 => 413,  1035 => 410,  1022 => 402,  1018 => 401,  998 => 389,  972 => 372,  965 => 368,  929 => 358,  913 => 347,  904 => 344,  899 => 342,  886 => 340,  882 => 339,  875 => 327,  850 => 316,  835 => 309,  823 => 305,  797 => 291,  777 => 277,  761 => 282,  733 => 260,  708 => 253,  704 => 252,  698 => 249,  693 => 247,  671 => 238,  630 => 227,  609 => 220,  604 => 219,  539 => 193,  498 => 170,  472 => 157,  386 => 127,  372 => 121,  297 => 89,  336 => 100,  223 => 55,  956 => 271,  946 => 360,  933 => 296,  917 => 348,  914 => 290,  912 => 289,  901 => 285,  898 => 284,  887 => 280,  870 => 274,  868 => 273,  863 => 324,  853 => 261,  848 => 258,  840 => 253,  834 => 316,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  791 => 262,  788 => 233,  773 => 276,  771 => 232,  768 => 231,  765 => 230,  757 => 269,  743 => 217,  738 => 214,  679 => 200,  673 => 242,  665 => 196,  663 => 236,  657 => 193,  629 => 186,  626 => 184,  603 => 179,  600 => 178,  588 => 215,  570 => 210,  554 => 224,  479 => 172,  418 => 135,  370 => 120,  356 => 114,  624 => 224,  620 => 222,  601 => 218,  580 => 207,  559 => 201,  545 => 198,  497 => 156,  485 => 124,  447 => 113,  424 => 142,  412 => 126,  401 => 89,  391 => 123,  379 => 104,  376 => 103,  333 => 99,  326 => 86,  292 => 88,  287 => 86,  264 => 74,  178 => 35,  12 => 36,  778 => 267,  763 => 244,  742 => 266,  734 => 237,  717 => 210,  714 => 232,  711 => 231,  703 => 226,  653 => 218,  650 => 234,  644 => 190,  616 => 182,  595 => 215,  587 => 213,  578 => 200,  573 => 211,  546 => 175,  534 => 191,  531 => 225,  513 => 230,  475 => 169,  448 => 151,  445 => 150,  429 => 148,  422 => 147,  396 => 138,  345 => 104,  307 => 91,  286 => 98,  247 => 75,  206 => 46,  90 => 39,  283 => 84,  236 => 42,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 474,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 460,  1145 => 322,  1143 => 321,  1118 => 443,  1115 => 319,  1112 => 318,  1106 => 316,  1103 => 315,  1100 => 314,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 430,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 409,  1027 => 281,  1024 => 280,  1016 => 405,  1014 => 272,  1012 => 404,  1009 => 397,  1004 => 399,  982 => 261,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 366,  958 => 253,  955 => 375,  952 => 251,  950 => 361,  947 => 249,  939 => 356,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 352,  915 => 233,  903 => 346,  900 => 228,  897 => 227,  892 => 341,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  865 => 331,  862 => 212,  857 => 267,  849 => 206,  846 => 315,  844 => 204,  841 => 313,  833 => 308,  830 => 198,  828 => 246,  817 => 310,  812 => 308,  809 => 297,  801 => 185,  798 => 300,  796 => 233,  793 => 298,  783 => 177,  769 => 247,  767 => 273,  764 => 169,  756 => 165,  751 => 163,  746 => 161,  739 => 239,  729 => 262,  724 => 154,  721 => 257,  715 => 151,  710 => 149,  707 => 208,  699 => 142,  697 => 252,  694 => 251,  689 => 137,  680 => 134,  675 => 239,  662 => 125,  658 => 235,  654 => 123,  649 => 122,  640 => 231,  619 => 183,  617 => 223,  598 => 107,  576 => 199,  564 => 162,  557 => 96,  550 => 187,  547 => 93,  503 => 81,  493 => 143,  480 => 75,  456 => 68,  450 => 155,  414 => 134,  408 => 109,  368 => 126,  355 => 122,  350 => 112,  342 => 23,  332 => 88,  316 => 16,  255 => 67,  245 => 83,  194 => 39,  200 => 31,  180 => 49,  560 => 191,  549 => 182,  532 => 192,  528 => 160,  525 => 196,  523 => 189,  518 => 180,  514 => 180,  511 => 166,  508 => 187,  501 => 154,  474 => 170,  460 => 123,  455 => 115,  442 => 151,  439 => 150,  436 => 143,  433 => 149,  426 => 58,  415 => 127,  405 => 108,  360 => 128,  354 => 113,  331 => 96,  322 => 99,  304 => 90,  272 => 91,  249 => 74,  233 => 304,  216 => 35,  140 => 51,  126 => 66,  192 => 53,  161 => 64,  320 => 92,  288 => 80,  237 => 63,  232 => 68,  222 => 66,  185 => 61,  150 => 21,  100 => 42,  692 => 399,  683 => 244,  678 => 133,  676 => 199,  666 => 222,  661 => 220,  656 => 237,  641 => 189,  635 => 229,  615 => 221,  590 => 204,  583 => 214,  577 => 212,  575 => 328,  536 => 194,  524 => 90,  510 => 178,  482 => 136,  464 => 155,  452 => 268,  423 => 137,  421 => 90,  413 => 241,  400 => 136,  393 => 168,  385 => 159,  374 => 128,  324 => 100,  310 => 83,  302 => 91,  296 => 151,  282 => 161,  278 => 80,  270 => 79,  259 => 74,  226 => 131,  365 => 141,  347 => 140,  338 => 106,  319 => 94,  315 => 90,  301 => 80,  299 => 8,  281 => 75,  268 => 71,  265 => 76,  262 => 81,  260 => 72,  257 => 103,  225 => 56,  213 => 69,  211 => 81,  197 => 30,  174 => 34,  252 => 68,  242 => 65,  231 => 61,  207 => 51,  195 => 45,  165 => 77,  129 => 67,  84 => 1,  167 => 56,  155 => 63,  127 => 13,  23 => 27,  58 => 20,  20 => 1,  1127 => 457,  1123 => 456,  1119 => 455,  1109 => 441,  1098 => 313,  1091 => 438,  1081 => 431,  1077 => 305,  1066 => 427,  1062 => 426,  1058 => 425,  1053 => 292,  1049 => 422,  1045 => 421,  1037 => 411,  1033 => 416,  1029 => 282,  1020 => 412,  1015 => 410,  1003 => 401,  999 => 400,  991 => 385,  981 => 378,  979 => 388,  976 => 259,  966 => 383,  962 => 383,  953 => 270,  942 => 300,  935 => 355,  925 => 353,  916 => 354,  909 => 346,  905 => 348,  894 => 226,  890 => 281,  883 => 338,  879 => 277,  873 => 333,  869 => 332,  860 => 323,  856 => 329,  852 => 327,  843 => 325,  838 => 317,  825 => 196,  821 => 312,  814 => 299,  804 => 306,  802 => 301,  799 => 234,  789 => 286,  785 => 293,  780 => 303,  774 => 290,  772 => 248,  762 => 286,  753 => 220,  748 => 242,  741 => 271,  728 => 267,  716 => 255,  712 => 254,  706 => 254,  700 => 205,  696 => 204,  688 => 246,  684 => 248,  681 => 244,  664 => 239,  655 => 234,  651 => 235,  647 => 191,  643 => 230,  637 => 230,  632 => 187,  627 => 224,  625 => 361,  622 => 224,  614 => 222,  610 => 220,  607 => 219,  594 => 176,  584 => 173,  582 => 212,  566 => 207,  561 => 205,  556 => 204,  553 => 203,  548 => 201,  540 => 200,  527 => 187,  522 => 195,  520 => 194,  516 => 294,  495 => 158,  487 => 156,  466 => 165,  461 => 70,  453 => 161,  441 => 151,  428 => 116,  417 => 145,  407 => 130,  403 => 48,  398 => 127,  389 => 133,  387 => 110,  384 => 106,  375 => 122,  369 => 148,  359 => 115,  357 => 116,  346 => 111,  343 => 108,  341 => 131,  337 => 90,  327 => 101,  314 => 88,  311 => 94,  309 => 82,  305 => 115,  293 => 90,  289 => 85,  284 => 76,  279 => 83,  277 => 136,  274 => 79,  266 => 70,  261 => 69,  256 => 71,  251 => 72,  220 => 65,  215 => 63,  202 => 55,  198 => 54,  190 => 49,  137 => 28,  132 => 26,  124 => 21,  61 => 250,  34 => 62,  784 => 215,  775 => 290,  760 => 222,  749 => 276,  745 => 267,  736 => 238,  732 => 213,  727 => 203,  725 => 261,  723 => 196,  720 => 211,  713 => 255,  709 => 254,  705 => 189,  702 => 188,  695 => 139,  686 => 245,  682 => 201,  677 => 243,  674 => 178,  672 => 241,  668 => 240,  660 => 238,  652 => 376,  648 => 173,  645 => 232,  638 => 230,  633 => 209,  631 => 364,  628 => 165,  623 => 223,  618 => 160,  612 => 220,  599 => 215,  596 => 216,  593 => 105,  591 => 151,  586 => 150,  579 => 211,  574 => 209,  569 => 208,  562 => 139,  552 => 136,  543 => 174,  533 => 198,  529 => 197,  519 => 127,  500 => 184,  490 => 142,  471 => 129,  467 => 72,  459 => 153,  440 => 106,  437 => 61,  434 => 142,  427 => 99,  420 => 141,  410 => 110,  404 => 129,  402 => 137,  399 => 139,  392 => 82,  388 => 128,  383 => 80,  381 => 105,  378 => 78,  371 => 35,  363 => 32,  361 => 124,  358 => 123,  348 => 118,  344 => 24,  340 => 107,  330 => 103,  325 => 94,  321 => 100,  317 => 107,  313 => 84,  308 => 93,  303 => 87,  298 => 101,  294 => 82,  290 => 87,  275 => 81,  271 => 374,  263 => 75,  258 => 72,  253 => 66,  248 => 66,  244 => 65,  228 => 57,  214 => 63,  191 => 26,  186 => 48,  177 => 46,  175 => 47,  170 => 29,  153 => 72,  146 => 34,  128 => 53,  118 => 11,  113 => 46,  110 => 39,  104 => 43,  97 => 32,  81 => 2,  77 => 408,  65 => 244,  53 => 63,  608 => 225,  602 => 217,  597 => 216,  589 => 213,  585 => 209,  581 => 213,  572 => 204,  568 => 209,  565 => 208,  563 => 202,  558 => 160,  555 => 200,  551 => 221,  541 => 197,  537 => 159,  535 => 199,  530 => 193,  526 => 190,  521 => 182,  515 => 305,  512 => 84,  509 => 228,  507 => 156,  504 => 155,  502 => 171,  499 => 173,  496 => 172,  494 => 122,  491 => 178,  489 => 166,  486 => 176,  483 => 173,  481 => 119,  478 => 160,  476 => 116,  473 => 168,  470 => 121,  468 => 156,  463 => 117,  457 => 160,  454 => 156,  451 => 120,  449 => 138,  444 => 263,  438 => 150,  435 => 149,  432 => 100,  430 => 145,  425 => 146,  411 => 138,  406 => 111,  390 => 136,  382 => 126,  380 => 130,  377 => 129,  373 => 102,  366 => 119,  362 => 148,  353 => 115,  351 => 141,  339 => 191,  335 => 101,  329 => 130,  323 => 85,  318 => 98,  312 => 92,  306 => 92,  300 => 93,  295 => 100,  291 => 86,  285 => 79,  280 => 81,  276 => 393,  267 => 78,  250 => 44,  239 => 64,  229 => 60,  218 => 97,  212 => 62,  210 => 59,  205 => 90,  188 => 25,  184 => 48,  181 => 232,  169 => 78,  160 => 25,  152 => 36,  148 => 49,  134 => 52,  114 => 48,  107 => 6,  76 => 2,  70 => 266,  273 => 80,  269 => 78,  254 => 73,  243 => 66,  240 => 64,  238 => 70,  235 => 63,  230 => 67,  227 => 301,  224 => 66,  221 => 38,  219 => 101,  217 => 64,  208 => 47,  204 => 57,  179 => 44,  159 => 196,  143 => 58,  135 => 55,  119 => 44,  102 => 8,  71 => 394,  67 => 265,  63 => 26,  59 => 229,  38 => 25,  94 => 10,  89 => 3,  85 => 4,  75 => 323,  68 => 28,  56 => 228,  87 => 2,  21 => 11,  26 => 13,  93 => 40,  88 => 39,  78 => 1,  46 => 149,  27 => 6,  44 => 135,  31 => 61,  28 => 14,  201 => 56,  196 => 52,  183 => 50,  171 => 43,  166 => 28,  163 => 40,  158 => 74,  156 => 38,  151 => 29,  142 => 25,  138 => 49,  136 => 18,  121 => 17,  117 => 43,  105 => 36,  91 => 39,  62 => 243,  49 => 150,  24 => 2,  25 => 5,  19 => 1,  79 => 33,  72 => 322,  69 => 308,  47 => 149,  40 => 79,  37 => 78,  22 => 12,  246 => 67,  157 => 39,  145 => 26,  139 => 19,  131 => 48,  123 => 65,  120 => 12,  115 => 10,  111 => 40,  108 => 11,  101 => 34,  98 => 36,  96 => 5,  83 => 3,  74 => 395,  66 => 307,  55 => 165,  52 => 164,  50 => 150,  43 => 45,  41 => 134,  35 => 18,  32 => 15,  29 => 1,  209 => 58,  203 => 45,  199 => 265,  193 => 51,  189 => 52,  187 => 64,  182 => 38,  176 => 309,  173 => 44,  168 => 43,  164 => 65,  162 => 41,  154 => 22,  149 => 34,  147 => 27,  144 => 32,  141 => 20,  133 => 69,  130 => 22,  125 => 52,  122 => 45,  116 => 43,  112 => 12,  109 => 46,  106 => 14,  103 => 43,  99 => 12,  95 => 5,  92 => 4,  86 => 30,  82 => 34,  80 => 409,  73 => 1,  64 => 251,  60 => 208,  57 => 207,  54 => 193,  51 => 192,  48 => 54,  45 => 101,  42 => 100,  39 => 86,  36 => 85,  33 => 10,  30 => 9,);
    }
}

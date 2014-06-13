<?php

/* GestionCoreBundle:Remboursement:base_edit_form.html.twig */
class __TwigTemplate_fd04d3b4950c99cc710aaac6a8f8dfbb715dbe90c2459d0d429f635e315de40b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

    ";
        // line 4
        $context["url"] = (((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")))) ? ("edit") : ("create"));
        // line 5
        echo "
    ";
        // line 6
        if ((!$this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))), "method"))) {
            // line 7
            echo "        <div>
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 11
            echo "        <form
              ";
            // line 12
            if (($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 13
            echo "              role=\"form\"
              action=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo "
              method=\"POST\"
              ";
            // line 16
            if ((!$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "html5_validate"), "method"))) {
                echo "novalidate=\"novalidate\"";
            }
            // line 17
            echo "              >
            ";
            // line 18
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "errors")) > 0)) {
                // line 19
                echo "                <div class=\"sonata-ba-form-error alert alert-danger alert-dismissable\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    ";
                // line 21
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                </div>
            ";
            }
            // line 24
            echo "
            ";
            // line 25
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 28
            echo "
            ";
            // line 29
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 219
            echo "
            ";
            // line 220
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 223
            echo "
            ";
            // line 224
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

            ";
            // line 226
            $this->displayBlock('formactions', $context, $blocks);
            // line 268
            echo "        </form>
    ";
        }
        // line 270
        echo "
    ";
        // line 271
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

";
    }

    // line 25
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        // line 26
        echo "                <div class=\"row\">
            ";
    }

    // line 29
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        // line 30
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
            // line 31
            echo "                    <div class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "class"), "col-md-8")) : ("col-md-8")), "html", null, true);
            echo "\">
                        <div class=\"box box-success\">
                            <div class=\"box-header\">
                                <h4 class=\"box-title\">
                                    ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), 1 => array(), 2 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "translation_domain")), "method"), "html", null, true);
            echo "
                                </h4>
                            </div>
                            ";
            // line 39
            echo "                                <div class=\"box-body\">
                                    <div class=\"sonata-ba-collapsed-fields\">
                                        ";
            // line 41
            if (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description") != false)) {
                // line 42
                echo "                                            <p>";
                echo $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description");
                echo "</p>
                                        ";
            }
            // line 44
            echo "
                                        ";
            // line 45
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 46
                echo "                                            ";
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
                    // line 47
                    echo "                                                ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), 'row');
                    echo "
                                            ";
                }
                // line 49
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                                    </div>
                                </div>
                            ";
            // line 53
            echo "                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t<div class=\"col-md-4\">
                        <div class=\"box box-warning\">
                            <div class=\"box-header\">
                                <h4 class=\"box-title\">
                                   Montant du remboursement
                                </h4>
                            </div>
                            <script type=\"text/javascript\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t \$(document).ready(function(\$) {
\t\t\t\t\t\t
\t\t\t\t\t\t\tvar montantUniquePlein = 0;
\t\t\t\t\t\t\tvar montantUniqueRemboursement = 0;
\t\t\t\t\t\t\tvar tauxEnCours = 0;
\t\t\t\t\t\t\tvar vacEnCours = 0;
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t/* ON LES VALEURS PAR DEFAUT DE LUGC */
\t\t\t\t\t\t\t\t\$('.prixRemb').parent('.sonata-ba-field').parent('.form-group').hide();
\t\t\t\t\t\t\t\tchangeMontant(\$('#tarifUgc').val(), (\$('#tarifUgc').val()-\$('#reducUgc').val()));
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tfunction changeMontant(prixplein, prixremb,taux){
\t\t\t\t\t\t\t\t//alert(prixplein.toFixed(2));
\t\t\t\t\t\t\t\t\tmontantUniquePlein = Number(prixplein).toFixed(2);
\t\t\t\t\t\t\t\t\tmontantUniqueRemboursement = Number(prixremb).toFixed(2);
\t\t\t\t\t\t\t\t\t\$('#montantCE').html(Number(montantUniqueRemboursement*\$('.qteRemb').val()).toFixed(2));
\t\t\t\t\t\t\t\t\tif(!taux){
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$('.prixRemb').val(Number(montantUniquePlein*\$('.qteRemb').val()).toFixed(2));
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tfunction calculReducTaux(montantplein,plafon,taux){
\t\t\t\t\t\t\t\tresultat = Number((taux/100)*montantplein).toFixed(2);
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tif(Number(resultat) > Number(plafon)){
\t\t\t\t\t\t\t\t\t\tresultat = plafon;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\treturn resultat;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tfunction calculVacances(){
\t\t\t\t\t\t\t\t\tmembreEncours = \$('.listMembre').select2('data').id;
\t\t\t\t\t\t\t\t\t\$.get('";
        // line 101
        echo $this->env->getExtension('routing')->getPath("admin_gestion_core_remboursement_precalc");
        echo "?membre='+membreEncours, function( data ) {
\t\t\t\t\t\t\t\t\t\t\$('#montantCE').html(Number(data).toFixed(2));
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$('.listMembre').change(function(){
\t\t\t\t\t\t\t\t\tif(!!vacEnCours){
\t\t\t\t\t\t\t\t\t\tcalculVacances();
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$('.prixRemb').on('input', function() {
\t\t\t\t\t\t\t\t\tif(!!tauxEnCours){
\t\t\t\t\t\t\t\t\t\tswitch(tauxEnCours) {
\t\t\t\t\t\t\t\t\t\tcase \"sport\":
\t\t\t\t\t\t\t\t\t\t\tchangeMontant(\$(this).val(),calculReducTaux(\$(this).val(),\$('#limitSport').val(),\$('#pourcentSport').val()),true);
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase \"spectacle\":
\t\t\t\t\t\t\t\t\t\t\tchangeMontant(\$(this).val(),calculReducTaux(\$(this).val(),\$('#limitSpectacle').val(),\$('#pourcentSpectacle').val())*\$('.qteRemb').val(),true);
\t\t\t\t\t\t\t\t\t\t\tbreak;\t
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$('.listActivite').change(function(){

\t\t\t\t\t\t\t\t\tswitch(\$(this).val()) {
\t\t\t\t\t\t\t\t\t\tcase \"1\"://UGC
\t\t\t\t\t\t\t\t\t\t\ttauxEnCours = 0;
\t\t\t\t\t\t\t\t\t\t\tvacEnCours = 0;
\t\t\t\t\t\t\t\t\t\t\t\$('.prixRemb').parent('.sonata-ba-field').parent('.form-group').hide();
\t\t\t\t\t\t\t\t\t\t\t\$('.qteRemb').parent('.sonata-ba-field').parent('.form-group').show();
\t\t\t\t\t\t\t\t\t\t\tchangeMontant(\$('#tarifUgc').val(), (\$('#tarifUgc').val()-\$('#reducUgc').val()));
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase \"2\"://CGR
\t\t\t\t\t\t\t\t\t\t\ttauxEnCours = 0;
\t\t\t\t\t\t\t\t\t\t\tvacEnCours = 0;
\t\t\t\t\t\t\t\t\t\t\t\$('.prixRemb').parent('.sonata-ba-field').parent('.form-group').hide();
\t\t\t\t\t\t\t\t\t\t\t\$('.qteRemb').parent('.sonata-ba-field').parent('.form-group').show();
\t\t\t\t\t\t\t\t\t\t\tchangeMontant(\$('#tarifCGR').val(), (\$('#tarifCGR').val()-\$('#reducCGR').val()));
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase \"3\"://PATHE
\t\t\t\t\t\t\t\t\t\t\ttauxEnCours = 0;
\t\t\t\t\t\t\t\t\t\t\tvacEnCours = 0;
\t\t\t\t\t\t\t\t\t\t\t\$('.prixRemb').parent('.sonata-ba-field').parent('.form-group').hide();
\t\t\t\t\t\t\t\t\t\t\t\$('.qteRemb').parent('.sonata-ba-field').parent('.form-group').show();
\t\t\t\t\t\t\t\t\t\t\tchangeMontant(\$('#tarifPathe').val(), (\$('#tarifPathe').val()-\$('#reducPathe').val()));
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase \"4\"://Cheque Lire/multimedia
\t\t\t\t\t\t\t\t\t\t\ttauxEnCours = 0;
\t\t\t\t\t\t\t\t\t\t\tvacEnCours = 0;
\t\t\t\t\t\t\t\t\t\t\t\$('.prixRemb').parent('.sonata-ba-field').parent('.form-group').hide();
\t\t\t\t\t\t\t\t\t\t\t\$('.qteRemb').parent('.sonata-ba-field').parent('.form-group').show();
\t\t\t\t\t\t\t\t\t\t\tchangeMontant(\$('#tarifMulti').val(), (\$('#tarifMulti').val()-\$('#reducMulti').val()));
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase \"5\"://Abonnement sportif
\t\t\t\t\t\t\t\t\t\t\ttauxEnCours = \"sport\";
\t\t\t\t\t\t\t\t\t\t\tvacEnCours = 0;
\t\t\t\t\t\t\t\t\t\t\t\$('.prixRemb').parent('.sonata-ba-field').parent('.form-group').show();
\t\t\t\t\t\t\t\t\t\t\t\$('.qteRemb').parent('.sonata-ba-field').parent('.form-group').hide();
\t\t\t\t\t\t\t\t\t\t\t\$('.qteRemb').val(1);
\t\t\t\t\t\t\t\t\t\t\tchangeMontant(\$('.prixRemb').val(),calculReducTaux(\$('.prixRemb').val(),\$('#limitSport').val(),\$('#pourcentSport').val()));
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase \"6\"://Spectacle
\t\t\t\t\t\t\t\t\t\t\ttauxEnCours = \"spectacle\";
\t\t\t\t\t\t\t\t\t\t\tvacEnCours = 0;
\t\t\t\t\t\t\t\t\t\t\t\$('.prixRemb').parent('.sonata-ba-field').parent('.form-group').show();
\t\t\t\t\t\t\t\t\t\t\t\$('.qteRemb').val(1);
\t\t\t\t\t\t\t\t\t\t\t\$('.qteRemb').parent('.sonata-ba-field').parent('.form-group').show();
\t\t\t\t\t\t\t\t\t\t\tchangeMontant(\$('.prixRemb').val(),calculReducTaux(\$('.prixRemb').val(),\$('#limitSpectacle').val(),\$('#pourcentSpectacle').val()));
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase \"7\"://Cheques vacances
\t\t\t\t\t\t\t\t\t\t\ttauxEnCours = 0;
\t\t\t\t\t\t\t\t\t\t\tvacEnCours = 1;
\t\t\t\t\t\t\t\t\t\t\t\$('.prixRemb').parent('.sonata-ba-field').parent('.form-group').hide();
\t\t\t\t\t\t\t\t\t\t\t\$('.prixRemb').val(1);
\t\t\t\t\t\t\t\t\t\t\t\$('.qteRemb').parent('.sonata-ba-field').parent('.form-group').hide();
\t\t\t\t\t\t\t\t\t\t\t\$('.qteRemb').val(1);
\t\t\t\t\t\t\t\t\t\t\tcalculVacances();
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\$('.qteRemb').on('input', function() {
\t\t\t\t\t\t\t\t\tchangeMontant(montantUniquePlein,montantUniqueRemboursement)
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t });
\t\t\t\t\t\t 
\t\t\t\t\t\t 
\t\t\t\t\t\t 
\t\t\t\t\t\t 
\t\t\t\t\t\t\t</script>
                                <div class=\"box-body\">
                                    <div class=\"sonata-ba-collapsed-fields\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"label label-warning\" style=\"font-size:25px; \"><span id=\"montantCE\">0</span>&nbsp;<span class=\"glyphicon glyphicon-euro\"></span></h3><br/>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"tarifUgc\" value=\"";
        // line 198
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cinemaUGC"]) ? $context["cinemaUGC"] : $this->getContext($context, "cinemaUGC")), "prixPlein"), 2), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"tarifCGR\" value=\"";
        // line 199
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cinemaCGR"]) ? $context["cinemaCGR"] : $this->getContext($context, "cinemaCGR")), "prixPlein"), 2), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"tarifPathe\" value=\"";
        // line 200
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cinemaPATHE"]) ? $context["cinemaPATHE"] : $this->getContext($context, "cinemaPATHE")), "prixPlein"), 2), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"reducUgc\" value=\"";
        // line 201
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cinemaUGC"]) ? $context["cinemaUGC"] : $this->getContext($context, "cinemaUGC")), "prixReduit"), 2), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"reducCGR\" value=\"";
        // line 202
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cinemaCGR"]) ? $context["cinemaCGR"] : $this->getContext($context, "cinemaCGR")), "prixReduit"), 2), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"reducPathe\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cinemaPATHE"]) ? $context["cinemaPATHE"] : $this->getContext($context, "cinemaPATHE")), "prixReduit"), 2), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"tarifMulti\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["chequeLire"]) ? $context["chequeLire"] : $this->getContext($context, "chequeLire")), "prixPlein"), 2), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"reducMulti\" value=\"";
        // line 206
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["chequeLire"]) ? $context["chequeLire"] : $this->getContext($context, "chequeLire")), "prixReduit"), 2), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"pourcentSport\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["aboSport"]) ? $context["aboSport"] : $this->getContext($context, "aboSport")), "taux"), 2), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"limitSport\" value=\"";
        // line 209
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["aboSport"]) ? $context["aboSport"] : $this->getContext($context, "aboSport")), "plafond"), 2), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"pourcentSpectacle\" value=\"";
        // line 211
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["aboSpectacle"]) ? $context["aboSpectacle"] : $this->getContext($context, "aboSpectacle")), "taux"), 2), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"limitSpectacle\" value=\"";
        // line 212
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["aboSpectacle"]) ? $context["aboSpectacle"] : $this->getContext($context, "aboSpectacle")), "plafond"), 2), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t
                                    </div>
                                </div>
                        </div>
                    </div>
            ";
    }

    // line 220
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        // line 221
        echo "                </div>
            ";
    }

    // line 226
    public function block_formactions($context, array $blocks = array())
    {
        // line 227
        echo "                <div class=\"well well-small form-actions\">
                    ";
        // line 228
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isxmlhttprequest")) {
            // line 229
            echo "                        ";
            if ((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")))) {
                // line 230
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 232
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 234
            echo "                    ";
        } else {
            // line 235
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "supportsPreviewMode")) {
                // line 236
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\"></i>
                                ";
                // line 238
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 241
            echo "                        ";
            if ((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")))) {
                // line 242
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 244
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method")) {
                    // line 245
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 247
                echo "
                            ";
                // line 248
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 249
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 250
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 252
                echo "
                            ";
                // line 253
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 254
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 256
                echo "                        ";
            } else {
                // line 257
                echo "                            ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "edit"), "method")) {
                    // line 258
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 260
                echo "                            ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method")) {
                    // line 261
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 263
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 265
            echo "                    ";
        }
        // line 266
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "GestionCoreBundle:Remboursement:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  505 => 257,  492 => 253,  477 => 249,  458 => 242,  419 => 227,  172 => 45,  1140 => 461,  1136 => 460,  1132 => 459,  1111 => 446,  1104 => 442,  1094 => 435,  1090 => 433,  1075 => 429,  1050 => 420,  1046 => 419,  1042 => 418,  1028 => 414,  994 => 397,  992 => 396,  989 => 395,  975 => 387,  948 => 371,  938 => 364,  922 => 354,  907 => 347,  896 => 342,  851 => 327,  827 => 312,  815 => 309,  787 => 294,  766 => 284,  754 => 278,  719 => 258,  701 => 253,  685 => 245,  592 => 214,  517 => 261,  443 => 152,  416 => 226,  397 => 212,  334 => 105,  1183 => 475,  1175 => 473,  1165 => 468,  1147 => 456,  1137 => 449,  1133 => 447,  1122 => 454,  1114 => 442,  1105 => 440,  1101 => 439,  1093 => 434,  1089 => 433,  1085 => 432,  1076 => 430,  1071 => 428,  1059 => 419,  1055 => 418,  1047 => 413,  1035 => 410,  1022 => 402,  1018 => 401,  998 => 389,  972 => 372,  965 => 368,  929 => 358,  913 => 347,  904 => 344,  899 => 342,  886 => 340,  882 => 339,  875 => 327,  850 => 316,  835 => 309,  823 => 305,  797 => 291,  777 => 277,  761 => 282,  733 => 260,  708 => 253,  704 => 252,  698 => 249,  693 => 247,  671 => 238,  630 => 227,  609 => 220,  604 => 219,  539 => 193,  498 => 170,  472 => 247,  386 => 127,  372 => 121,  297 => 89,  336 => 100,  223 => 55,  956 => 271,  946 => 360,  933 => 296,  917 => 348,  914 => 290,  912 => 289,  901 => 285,  898 => 284,  887 => 280,  870 => 274,  868 => 273,  863 => 324,  853 => 261,  848 => 258,  840 => 253,  834 => 316,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  791 => 262,  788 => 233,  773 => 276,  771 => 232,  768 => 231,  765 => 230,  757 => 269,  743 => 217,  738 => 214,  679 => 200,  673 => 242,  665 => 196,  663 => 236,  657 => 193,  629 => 186,  626 => 184,  603 => 179,  600 => 178,  588 => 215,  570 => 210,  554 => 224,  479 => 172,  418 => 135,  370 => 203,  356 => 114,  624 => 224,  620 => 222,  601 => 218,  580 => 207,  559 => 201,  545 => 198,  497 => 156,  485 => 124,  447 => 113,  424 => 229,  412 => 126,  401 => 89,  391 => 123,  379 => 206,  376 => 103,  333 => 99,  326 => 86,  292 => 88,  287 => 86,  264 => 74,  178 => 35,  12 => 36,  778 => 267,  763 => 244,  742 => 266,  734 => 237,  717 => 210,  714 => 232,  711 => 231,  703 => 226,  653 => 218,  650 => 234,  644 => 190,  616 => 182,  595 => 215,  587 => 213,  578 => 200,  573 => 211,  546 => 175,  534 => 191,  531 => 225,  513 => 230,  475 => 248,  448 => 151,  445 => 236,  429 => 148,  422 => 228,  396 => 138,  345 => 104,  307 => 91,  286 => 98,  247 => 75,  206 => 46,  90 => 29,  283 => 84,  236 => 42,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 474,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 460,  1145 => 322,  1143 => 321,  1118 => 443,  1115 => 319,  1112 => 318,  1106 => 316,  1103 => 315,  1100 => 314,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 430,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 409,  1027 => 281,  1024 => 280,  1016 => 405,  1014 => 272,  1012 => 404,  1009 => 397,  1004 => 399,  982 => 261,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 366,  958 => 253,  955 => 375,  952 => 251,  950 => 361,  947 => 249,  939 => 356,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 352,  915 => 233,  903 => 346,  900 => 228,  897 => 227,  892 => 341,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  865 => 331,  862 => 212,  857 => 267,  849 => 206,  846 => 315,  844 => 204,  841 => 313,  833 => 308,  830 => 198,  828 => 246,  817 => 310,  812 => 308,  809 => 297,  801 => 185,  798 => 300,  796 => 233,  793 => 298,  783 => 177,  769 => 247,  767 => 273,  764 => 169,  756 => 165,  751 => 163,  746 => 161,  739 => 239,  729 => 262,  724 => 154,  721 => 257,  715 => 151,  710 => 149,  707 => 208,  699 => 142,  697 => 252,  694 => 251,  689 => 137,  680 => 134,  675 => 239,  662 => 125,  658 => 235,  654 => 123,  649 => 122,  640 => 231,  619 => 183,  617 => 223,  598 => 107,  576 => 199,  564 => 162,  557 => 96,  550 => 187,  547 => 93,  503 => 81,  493 => 143,  480 => 75,  456 => 68,  450 => 155,  414 => 134,  408 => 220,  368 => 126,  355 => 122,  350 => 198,  342 => 23,  332 => 88,  316 => 16,  255 => 67,  245 => 83,  194 => 39,  200 => 31,  180 => 49,  560 => 191,  549 => 182,  532 => 266,  528 => 160,  525 => 196,  523 => 263,  518 => 180,  514 => 260,  511 => 166,  508 => 258,  501 => 154,  474 => 170,  460 => 123,  455 => 241,  442 => 235,  439 => 234,  436 => 143,  433 => 232,  426 => 58,  415 => 127,  405 => 108,  360 => 128,  354 => 199,  331 => 96,  322 => 99,  304 => 90,  272 => 91,  249 => 74,  233 => 304,  216 => 35,  140 => 51,  126 => 66,  192 => 53,  161 => 41,  320 => 92,  288 => 80,  237 => 63,  232 => 68,  222 => 66,  185 => 49,  150 => 21,  100 => 42,  692 => 399,  683 => 244,  678 => 133,  676 => 199,  666 => 222,  661 => 220,  656 => 237,  641 => 189,  635 => 229,  615 => 221,  590 => 204,  583 => 214,  577 => 212,  575 => 328,  536 => 194,  524 => 90,  510 => 178,  482 => 250,  464 => 244,  452 => 268,  423 => 137,  421 => 90,  413 => 241,  400 => 136,  393 => 211,  385 => 159,  374 => 128,  324 => 100,  310 => 83,  302 => 91,  296 => 151,  282 => 161,  278 => 80,  270 => 79,  259 => 74,  226 => 131,  365 => 141,  347 => 140,  338 => 106,  319 => 94,  315 => 90,  301 => 80,  299 => 8,  281 => 75,  268 => 71,  265 => 76,  262 => 81,  260 => 72,  257 => 103,  225 => 56,  213 => 69,  211 => 81,  197 => 30,  174 => 34,  252 => 68,  242 => 65,  231 => 61,  207 => 51,  195 => 53,  165 => 77,  129 => 67,  84 => 1,  167 => 56,  155 => 63,  127 => 25,  23 => 27,  58 => 20,  20 => 1,  1127 => 457,  1123 => 456,  1119 => 455,  1109 => 441,  1098 => 313,  1091 => 438,  1081 => 431,  1077 => 305,  1066 => 427,  1062 => 426,  1058 => 425,  1053 => 292,  1049 => 422,  1045 => 421,  1037 => 411,  1033 => 416,  1029 => 282,  1020 => 412,  1015 => 410,  1003 => 401,  999 => 400,  991 => 385,  981 => 378,  979 => 388,  976 => 259,  966 => 383,  962 => 383,  953 => 270,  942 => 300,  935 => 355,  925 => 353,  916 => 354,  909 => 346,  905 => 348,  894 => 226,  890 => 281,  883 => 338,  879 => 277,  873 => 333,  869 => 332,  860 => 323,  856 => 329,  852 => 327,  843 => 325,  838 => 317,  825 => 196,  821 => 312,  814 => 299,  804 => 306,  802 => 301,  799 => 234,  789 => 286,  785 => 293,  780 => 303,  774 => 290,  772 => 248,  762 => 286,  753 => 220,  748 => 242,  741 => 271,  728 => 267,  716 => 255,  712 => 254,  706 => 254,  700 => 205,  696 => 204,  688 => 246,  684 => 248,  681 => 244,  664 => 239,  655 => 234,  651 => 235,  647 => 191,  643 => 230,  637 => 230,  632 => 187,  627 => 224,  625 => 361,  622 => 224,  614 => 222,  610 => 220,  607 => 219,  594 => 176,  584 => 173,  582 => 212,  566 => 207,  561 => 205,  556 => 204,  553 => 203,  548 => 201,  540 => 200,  527 => 187,  522 => 195,  520 => 194,  516 => 294,  495 => 158,  487 => 156,  466 => 245,  461 => 70,  453 => 161,  441 => 151,  428 => 116,  417 => 145,  407 => 130,  403 => 48,  398 => 127,  389 => 133,  387 => 110,  384 => 208,  375 => 205,  369 => 148,  359 => 115,  357 => 116,  346 => 111,  343 => 108,  341 => 131,  337 => 90,  327 => 101,  314 => 88,  311 => 94,  309 => 82,  305 => 115,  293 => 90,  289 => 85,  284 => 76,  279 => 83,  277 => 136,  274 => 79,  266 => 70,  261 => 69,  256 => 71,  251 => 72,  220 => 65,  215 => 63,  202 => 55,  198 => 54,  190 => 49,  137 => 28,  132 => 26,  124 => 21,  61 => 250,  34 => 62,  784 => 215,  775 => 290,  760 => 222,  749 => 276,  745 => 267,  736 => 238,  732 => 213,  727 => 203,  725 => 261,  723 => 196,  720 => 211,  713 => 255,  709 => 254,  705 => 189,  702 => 188,  695 => 139,  686 => 245,  682 => 201,  677 => 243,  674 => 178,  672 => 241,  668 => 240,  660 => 238,  652 => 376,  648 => 173,  645 => 232,  638 => 230,  633 => 209,  631 => 364,  628 => 165,  623 => 223,  618 => 160,  612 => 220,  599 => 215,  596 => 216,  593 => 105,  591 => 151,  586 => 150,  579 => 211,  574 => 209,  569 => 208,  562 => 139,  552 => 136,  543 => 174,  533 => 198,  529 => 265,  519 => 127,  500 => 184,  490 => 142,  471 => 129,  467 => 72,  459 => 153,  440 => 106,  437 => 61,  434 => 142,  427 => 230,  420 => 141,  410 => 110,  404 => 129,  402 => 137,  399 => 139,  392 => 82,  388 => 209,  383 => 80,  381 => 105,  378 => 78,  371 => 35,  363 => 32,  361 => 124,  358 => 200,  348 => 118,  344 => 24,  340 => 107,  330 => 103,  325 => 94,  321 => 100,  317 => 107,  313 => 84,  308 => 93,  303 => 87,  298 => 101,  294 => 82,  290 => 87,  275 => 81,  271 => 374,  263 => 75,  258 => 72,  253 => 66,  248 => 66,  244 => 65,  228 => 57,  214 => 63,  191 => 50,  186 => 48,  177 => 46,  175 => 47,  170 => 29,  153 => 72,  146 => 34,  128 => 53,  118 => 11,  113 => 268,  110 => 38,  104 => 34,  97 => 32,  81 => 27,  77 => 408,  65 => 244,  53 => 63,  608 => 225,  602 => 217,  597 => 216,  589 => 213,  585 => 209,  581 => 213,  572 => 204,  568 => 209,  565 => 208,  563 => 202,  558 => 160,  555 => 200,  551 => 221,  541 => 197,  537 => 159,  535 => 199,  530 => 193,  526 => 190,  521 => 182,  515 => 305,  512 => 84,  509 => 228,  507 => 156,  504 => 155,  502 => 256,  499 => 173,  496 => 172,  494 => 254,  491 => 178,  489 => 252,  486 => 176,  483 => 173,  481 => 119,  478 => 160,  476 => 116,  473 => 168,  470 => 121,  468 => 156,  463 => 117,  457 => 160,  454 => 156,  451 => 120,  449 => 238,  444 => 263,  438 => 150,  435 => 149,  432 => 100,  430 => 145,  425 => 146,  411 => 221,  406 => 111,  390 => 136,  382 => 126,  380 => 130,  377 => 129,  373 => 102,  366 => 202,  362 => 201,  353 => 115,  351 => 141,  339 => 191,  335 => 101,  329 => 130,  323 => 85,  318 => 98,  312 => 92,  306 => 92,  300 => 93,  295 => 100,  291 => 86,  285 => 79,  280 => 81,  276 => 393,  267 => 78,  250 => 101,  239 => 64,  229 => 60,  218 => 97,  212 => 62,  210 => 59,  205 => 90,  188 => 25,  184 => 48,  181 => 232,  169 => 44,  160 => 25,  152 => 36,  148 => 49,  134 => 52,  114 => 48,  107 => 6,  76 => 18,  70 => 266,  273 => 80,  269 => 78,  254 => 73,  243 => 66,  240 => 64,  238 => 70,  235 => 63,  230 => 67,  227 => 301,  224 => 66,  221 => 38,  219 => 101,  217 => 64,  208 => 47,  204 => 57,  179 => 47,  159 => 196,  143 => 31,  135 => 29,  119 => 44,  102 => 8,  71 => 23,  67 => 265,  63 => 26,  59 => 13,  38 => 5,  94 => 30,  89 => 3,  85 => 4,  75 => 323,  68 => 22,  56 => 228,  87 => 2,  21 => 11,  26 => 13,  93 => 28,  88 => 24,  78 => 19,  46 => 8,  27 => 6,  44 => 135,  31 => 61,  28 => 14,  201 => 56,  196 => 52,  183 => 50,  171 => 43,  166 => 28,  163 => 42,  158 => 74,  156 => 38,  151 => 35,  142 => 25,  138 => 30,  136 => 18,  121 => 17,  117 => 270,  105 => 36,  91 => 25,  62 => 14,  49 => 150,  24 => 1,  25 => 5,  19 => 1,  79 => 33,  72 => 322,  69 => 16,  47 => 149,  40 => 79,  37 => 78,  22 => 12,  246 => 67,  157 => 39,  145 => 26,  139 => 19,  131 => 48,  123 => 65,  120 => 271,  115 => 10,  111 => 226,  108 => 11,  101 => 220,  98 => 219,  96 => 29,  83 => 3,  74 => 395,  66 => 307,  55 => 12,  52 => 11,  50 => 150,  43 => 7,  41 => 6,  35 => 18,  32 => 15,  29 => 1,  209 => 58,  203 => 56,  199 => 265,  193 => 51,  189 => 52,  187 => 64,  182 => 38,  176 => 46,  173 => 44,  168 => 43,  164 => 65,  162 => 41,  154 => 22,  149 => 34,  147 => 27,  144 => 32,  141 => 20,  133 => 69,  130 => 26,  125 => 52,  122 => 45,  116 => 40,  112 => 12,  109 => 46,  106 => 224,  103 => 223,  99 => 12,  95 => 5,  92 => 4,  86 => 28,  82 => 21,  80 => 409,  73 => 17,  64 => 251,  60 => 18,  57 => 207,  54 => 16,  51 => 15,  48 => 14,  45 => 101,  42 => 100,  39 => 86,  36 => 4,  33 => 10,  30 => 2,);
    }
}

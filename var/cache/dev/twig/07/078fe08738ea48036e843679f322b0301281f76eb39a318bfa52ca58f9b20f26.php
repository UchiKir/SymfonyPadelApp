<?php

/* club/registerClub.html.twig */
class __TwigTemplate_4a40d509d3bcfa648dab6566e59c9f04cde03041d32cb5fb3b705d1292b7f787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "club/registerClub.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_681cca17dfe046814f5a4ef3ead396c556fb2ff3e1ac82bf080f20252294cb4c = $this->env->getExtension("native_profiler");
        $__internal_681cca17dfe046814f5a4ef3ead396c556fb2ff3e1ac82bf080f20252294cb4c->enter($__internal_681cca17dfe046814f5a4ef3ead396c556fb2ff3e1ac82bf080f20252294cb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "club/registerClub.html.twig"));

        // line 2
        $context["active"] = 3;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_681cca17dfe046814f5a4ef3ead396c556fb2ff3e1ac82bf080f20252294cb4c->leave($__internal_681cca17dfe046814f5a4ef3ead396c556fb2ff3e1ac82bf080f20252294cb4c_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5116e62acc3d20daf4565a8d20e46e19d331018185cb0c79f244c33c62ecce50 = $this->env->getExtension("native_profiler");
        $__internal_5116e62acc3d20daf4565a8d20e46e19d331018185cb0c79f244c33c62ecce50->enter($__internal_5116e62acc3d20daf4565a8d20e46e19d331018185cb0c79f244c33c62ecce50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cccbafd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cccbafd_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/main_part_1_AppBundle_1.js");
            // line 7
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/ajax.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/libs/googleMaps.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDYBSohGbS2zZHJlss4KogGTyHqxmTAOVw&libraries=places&callback=initAutocomplete\" async defer></script>
\t";
        } else {
            // asset "cccbafd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cccbafd") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/main.js");
            // line 7
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/ajax.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/libs/googleMaps.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDYBSohGbS2zZHJlss4KogGTyHqxmTAOVw&libraries=places&callback=initAutocomplete\" async defer></script>
\t";
        }
        unset($context["asset_url"]);
        // line 11
        echo "
";
        
        $__internal_5116e62acc3d20daf4565a8d20e46e19d331018185cb0c79f244c33c62ecce50->leave($__internal_5116e62acc3d20daf4565a8d20e46e19d331018185cb0c79f244c33c62ecce50_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_4953023dac4b172285b8aca89a25171a1c22f40744c382b95302dfec510f70a1 = $this->env->getExtension("native_profiler");
        $__internal_4953023dac4b172285b8aca89a25171a1c22f40744c382b95302dfec510f70a1->enter($__internal_4953023dac4b172285b8aca89a25171a1c22f40744c382b95302dfec510f70a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        $context["profile"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method");
        // line 15
        echo "
\t<div class=\"container rounded-box\">
\t\t";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "account-settings")));
        echo " 
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-md-offset-4 club-photo\">
\t\t\t\t\t<img id=\"clubImg\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/img/clubs/default.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t<br />
\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br />
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-md-offset-4\">
  \t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#club_data\">";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("Club's Data", array(), "messages");
        echo "</button>
  \t\t\t\t\t<br /><br />
  \t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"club_data\" class=\"collapse\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        // line 36
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('translator')->getTranslator()->trans("Phone", array(), "messages");
        // line 47
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t\t";
        // line 57
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email", array(), "messages");
        // line 58
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t\t\t\t";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t\t";
        // line 68
        echo $this->env->getExtension('translator')->getTranslator()->trans("Address", array(), "messages");
        // line 69
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t\t\t\t";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'widget', array("attr" => array("id" => "autocomplete", "onFocus" => "geolocate()")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t\t";
        // line 79
        echo $this->env->getExtension('translator')->getTranslator()->trans("Schedule", array(), "messages");
        // line 80
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t\t\t\t";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horario", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-md-offset-4\">
  \t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#club_installations\">";
        // line 90
        echo $this->env->getExtension('translator')->getTranslator()->trans("Club's Installation", array(), "messages");
        echo "</button>
  \t\t\t\t\t<br /><br />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"club_installations\" class=\"collapse\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t\t";
        // line 97
        echo $this->env->getExtension('translator')->getTranslator()->trans("Courts", array(), "messages");
        // line 98
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t\t\t\t";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "amountCourt", array()), 'widget', array("attr" => array("onChange" => "courts();")));
        echo "
\t\t\t\t\t\t\t<div id=\"courtsTypes\" style=\"visibility: hidden; position: absolute\">
\t\t\t\t\t\t\t\t";
        // line 103
        echo $this->env->getExtension('translator')->getTranslator()->trans("Crystal Courts", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crystalCourts", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t\t";
        // line 104
        echo $this->env->getExtension('translator')->getTranslator()->trans("Wall Courts", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wallCourts", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t\t";
        // line 105
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cover Courts", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coverCourts", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t\t";
        // line 106
        echo $this->env->getExtension('translator')->getTranslator()->trans("Central Courts", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centralCourts", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t\t";
        // line 107
        echo $this->env->getExtension('translator')->getTranslator()->trans("Individual Courts", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "individualCourts", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t";
        // line 116
        echo $this->env->getExtension('translator')->getTranslator()->trans("Equipment Rental", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipmentRental", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 117
        echo $this->env->getExtension('translator')->getTranslator()->trans("Food Services", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "foodServices", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 118
        echo $this->env->getExtension('translator')->getTranslator()->trans("Showers", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "showers", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 119
        echo $this->env->getExtension('translator')->getTranslator()->trans("Disabled Access", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disabledAccess", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 120
        echo $this->env->getExtension('translator')->getTranslator()->trans("Gym", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gym", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 121
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sauna", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sauna", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 122
        echo $this->env->getExtension('translator')->getTranslator()->trans("Kindergarten", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kindergarten", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 123
        echo $this->env->getExtension('translator')->getTranslator()->trans("Jacuzzi", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jacuzzi", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 124
        echo $this->env->getExtension('translator')->getTranslator()->trans("Parking", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parking", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 125
        echo $this->env->getExtension('translator')->getTranslator()->trans("Parking Motorcycles", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parkingMotorcycles", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 126
        echo $this->env->getExtension('translator')->getTranslator()->trans("Parking Bicycles", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parkingBicycles", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 127
        echo $this->env->getExtension('translator')->getTranslator()->trans("Waterpool", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "waterpool", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 128
        echo $this->env->getExtension('translator')->getTranslator()->trans("Locker", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locker", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 129
        echo $this->env->getExtension('translator')->getTranslator()->trans("Shop", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shop", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 130
        echo $this->env->getExtension('translator')->getTranslator()->trans("WiFi", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wifi", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 131
        echo $this->env->getExtension('translator')->getTranslator()->trans("Playground", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "playground", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 132
        echo $this->env->getExtension('translator')->getTranslator()->trans("School", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "school", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 133
        echo $this->env->getExtension('translator')->getTranslator()->trans("American Tournament", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "americanTournament", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 134
        echo $this->env->getExtension('translator')->getTranslator()->trans("Leagues", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leagues", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t\t";
        // line 135
        echo $this->env->getExtension('translator')->getTranslator()->trans("Ilumination", array(), "messages");
        echo "&nbsp";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ilumination", array()), 'widget');
        echo "<br />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-md-offset-4\">
  \t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#club_webs\">Webs</button>
  \t\t\t\t\t<br /><br />
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"club_webs\" class=\"collapse\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t\tWeb
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t\t\t\t";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t\tFacebook
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t\t\t\t";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facebookUrl", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t\tTwitter
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t\t\t\t";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "twitterUrl", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t\tInstagram
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t\t\t\t";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "instantgramUrl", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t\tSkype
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t\t\t\t";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skypeUsername", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-md-offset-4\">
  \t\t\t\t\t<button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#club_contact\">";
        // line 207
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contact", array(), "messages");
        echo "</button>
  \t\t\t\t\t<br /><br />
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"club_contact\" class=\"collapse\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t\t";
        // line 216
        echo $this->env->getExtension('translator')->getTranslator()->trans("Are you the owner?", array(), "messages");
        // line 217
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t";
        // line 220
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isOwner", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t           \t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t\t";
        // line 227
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        // line 228
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t\t\t\t";
        // line 231
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreContacto", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t\t";
        // line 238
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email", array(), "messages");
        // line 239
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t\t\t\t";
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailContacto", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t\t";
        // line 249
        echo $this->env->getExtension('translator')->getTranslator()->trans("Phone", array(), "messages");
        // line 250
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t\t\t\t";
        // line 253
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumberMovi", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 258
        if ((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))) {
            // line 259
            echo "\t\t\t";
        }
        // line 260
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-md-offset-4 club-photo\">
\t\t\t\t\t<div class=\"btn-group btn-block\">
              \t\t  <button class=\"btn btn-lg btn-primary\" type=\"submit\">";
        // line 263
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add Club", array(), "messages");
        echo "</button>
           \t\t\t</div>
           \t\t</div>
           \t</div>

           \t";
        // line 268
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "route", array()), 'widget');
        echo "
           \t";
        // line 269
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street_number", array()), 'widget');
        echo "
           \t";
        // line 270
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locality", array()), 'widget');
        echo "
           \t";
        // line 271
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "administrative_area_level_4", array()), 'widget');
        echo "
           \t";
        // line 272
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postal_code", array()), 'widget');
        echo "
           \t";
        // line 273
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "administrative_area_level_2", array()), 'widget');
        echo "
           \t";
        // line 274
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'widget');
        echo "
           \t";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "latitude", array()), 'widget');
        echo "
           \t";
        // line 276
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude", array()), 'widget');
        echo "

\t\t";
        // line 278
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_4953023dac4b172285b8aca89a25171a1c22f40744c382b95302dfec510f70a1->leave($__internal_4953023dac4b172285b8aca89a25171a1c22f40744c382b95302dfec510f70a1_prof);

    }

    public function getTemplateName()
    {
        return "club/registerClub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  613 => 278,  608 => 276,  604 => 275,  600 => 274,  596 => 273,  592 => 272,  588 => 271,  584 => 270,  580 => 269,  576 => 268,  568 => 263,  563 => 260,  560 => 259,  558 => 258,  550 => 253,  545 => 250,  543 => 249,  533 => 242,  528 => 239,  526 => 238,  516 => 231,  511 => 228,  509 => 227,  499 => 220,  494 => 217,  492 => 216,  480 => 207,  469 => 199,  455 => 188,  441 => 177,  427 => 166,  413 => 155,  388 => 135,  382 => 134,  376 => 133,  370 => 132,  364 => 131,  358 => 130,  352 => 129,  346 => 128,  340 => 127,  334 => 126,  328 => 125,  322 => 124,  316 => 123,  310 => 122,  304 => 121,  298 => 120,  292 => 119,  286 => 118,  280 => 117,  274 => 116,  260 => 107,  254 => 106,  248 => 105,  242 => 104,  236 => 103,  231 => 101,  226 => 98,  224 => 97,  214 => 90,  204 => 83,  199 => 80,  197 => 79,  187 => 72,  182 => 69,  180 => 68,  170 => 61,  165 => 58,  163 => 57,  153 => 50,  148 => 47,  146 => 46,  136 => 39,  131 => 36,  129 => 35,  119 => 28,  110 => 22,  105 => 20,  99 => 17,  95 => 15,  93 => 14,  87 => 13,  79 => 11,  72 => 8,  67 => 7,  59 => 8,  54 => 7,  50 => 6,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = 3 %}*/
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* */
/* 	{% javascripts '@AppBundle/*' output='js/compiled/main.js' %}*/
/* 		<script src="{{ asset('bundles/web/js/ajax.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/web/js/libs/googleMaps.js') }}" type="text/javascript"></script>*/
/* 		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYBSohGbS2zZHJlss4KogGTyHqxmTAOVw&libraries=places&callback=initAutocomplete" async defer></script>*/
/* 	{% endjavascripts %}*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* {% set profile = app.session.get('profile') %}*/
/* */
/* 	<div class="container rounded-box">*/
/* 		{{ form_start(form, { 'attr': {'class': 'account-settings'} }) }} */
/* 			<div class="row">*/
/* 				<div class="col-md-4 col-md-offset-4 club-photo">*/
/* 					<img id="clubImg" src="{{ asset('bundles/web/img/clubs/default.jpg') }}" />*/
/* 					<br />*/
/* 					{{ form_widget(form.image)}}*/
/* 				</div>*/
/* 			</div>*/
/* 			<br />*/
/* 			<div class="row">*/
/* 				<div class="col-md-4 col-md-offset-4">*/
/*   					<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#club_data">{% trans %}Club's Data{% endtrans %}</button>*/
/*   					<br /><br />*/
/*   				</div>*/
/* 			</div>*/
/* 			<div id="club_data" class="collapse">*/
/* 				<div class="row">*/
/* 					<div class="col-md-1 col-md-offset-4">*/
/* 						{% trans %}Name{% endtrans %}*/
/* 					</div>*/
/* 					<div class="col-md-3">*/
/* 						<div class="form-group input-group-sm">*/
/* 							{{ form_widget(form.name) }}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-md-1 col-md-offset-4">*/
/* 						{% trans %}Phone{% endtrans %}*/
/* 					</div>*/
/* 					<div class="col-md-3">*/
/* 						<div class="form-group input-group-sm">*/
/* 							{{ form_widget(form.phoneNumber) }}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-md-1 col-md-offset-4">*/
/* 						{% trans %}Email{% endtrans %}*/
/* 					</div>*/
/* 					<div class="col-md-3">*/
/* 						<div class="form-group input-group-sm">*/
/* 							{{ form_widget(form.email) }}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-md-1 col-md-offset-4">*/
/* 						{% trans %}Address{% endtrans %}*/
/* 					</div>*/
/* 					<div class="col-md-3">*/
/* 						<div class="form-group input-group-sm">*/
/* 							{{ form_widget(form.location, {'attr': {'id': 'autocomplete', 'onFocus': 'geolocate()'}}) }}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-md-1 col-md-offset-4">*/
/* 						{% trans %}Schedule{% endtrans %}*/
/* 					</div>*/
/* 					<div class="col-md-3">*/
/* 						<div class="form-group input-group-sm">*/
/* 							{{ form_widget(form.horario) }}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<div class="col-md-4 col-md-offset-4">*/
/*   					<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#club_installations">{% trans %}Club's Installation{% endtrans %}</button>*/
/*   					<br /><br />*/
/* 				</div>*/
/* 			</div>*/
/* 			<div id="club_installations" class="collapse">*/
/* 				<div class="row">*/
/* 					<div class="col-md-1 col-md-offset-4">*/
/* 						{% trans %}Courts{% endtrans %}*/
/* 					</div>*/
/* 					<div class="col-md-3">*/
/* 						<div class="form-group input-group-sm">*/
/* 							{{ form_widget(form.amountCourt, { 'attr': {'onChange': 'courts();'}}) }}*/
/* 							<div id="courtsTypes" style="visibility: hidden; position: absolute">*/
/* 								{% trans %}Crystal Courts{% endtrans %}&nbsp{{ form_widget(form.crystalCourts) }}<br />*/
/* 								{% trans %}Wall Courts{% endtrans %}&nbsp{{ form_widget(form.wallCourts) }}<br />*/
/* 								{% trans %}Cover Courts{% endtrans %}&nbsp{{ form_widget(form.coverCourts) }}<br />*/
/* 								{% trans %}Central Courts{% endtrans %}&nbsp{{ form_widget(form.centralCourts) }}<br />*/
/* 								{% trans %}Individual Courts{% endtrans %}&nbsp{{ form_widget(form.individualCourts) }}<br />*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-md-4 col-md-offset-4">*/
/* 						<div class="checkbox">*/
/* 							{% trans %}Equipment Rental{% endtrans %}&nbsp{{ form_widget(form.equipmentRental) }}<br />*/
/* 							{% trans %}Food Services{% endtrans %}&nbsp{{ form_widget(form.foodServices) }}<br />*/
/* 							{% trans %}Showers{% endtrans %}&nbsp{{ form_widget(form.showers) }}<br />*/
/* 							{% trans %}Disabled Access{% endtrans %}&nbsp{{ form_widget(form.disabledAccess) }}<br />*/
/* 							{% trans %}Gym{% endtrans %}&nbsp{{ form_widget(form.gym) }}<br />*/
/* 							{% trans %}Sauna{% endtrans %}&nbsp{{ form_widget(form.sauna) }}<br />*/
/* 							{% trans %}Kindergarten{% endtrans %}&nbsp{{ form_widget(form.kindergarten) }}<br />*/
/* 							{% trans %}Jacuzzi{% endtrans %}&nbsp{{ form_widget(form.jacuzzi) }}<br />*/
/* 							{% trans %}Parking{% endtrans %}&nbsp{{ form_widget(form.parking) }}<br />*/
/* 							{% trans %}Parking Motorcycles{% endtrans %}&nbsp{{ form_widget(form.parkingMotorcycles) }}<br />*/
/* 							{% trans %}Parking Bicycles{% endtrans %}&nbsp{{ form_widget(form.parkingBicycles) }}<br />*/
/* 							{% trans %}Waterpool{% endtrans %}&nbsp{{ form_widget(form.waterpool) }}<br />*/
/* 							{% trans %}Locker{% endtrans %}&nbsp{{ form_widget(form.locker) }}<br />*/
/* 							{% trans %}Shop{% endtrans %}&nbsp{{ form_widget(form.shop) }}<br />*/
/* 							{% trans %}WiFi{% endtrans %}&nbsp{{ form_widget(form.wifi) }}<br />*/
/* 							{% trans %}Playground{% endtrans %}&nbsp{{ form_widget(form.playground) }}<br />*/
/* 							{% trans %}School{% endtrans %}&nbsp{{ form_widget(form.school) }}<br />*/
/* 							{% trans %}American Tournament{% endtrans %}&nbsp{{ form_widget(form.americanTournament) }}<br />*/
/* 							{% trans %}Leagues{% endtrans %}&nbsp{{ form_widget(form.leagues) }}<br />*/
/* 							{% trans %}Ilumination{% endtrans %}&nbsp{{ form_widget(form.ilumination) }}<br />*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-md-4 col-md-offset-4">*/
/*   					<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#club_webs">Webs</button>*/
/*   					<br /><br />*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div id="club_webs" class="collapse">*/
/* 				<div class="row">*/
/* 					<div class="col-md-1 col-md-offset-4">*/
/* 						Web*/
/* 					</div>*/
/* 					<div class="col-md-3">*/
/* 						<div class="form-group input-group-sm">*/
/* 							{{ form_widget(form.url) }}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-md-1 col-md-offset-4">*/
/* 						Facebook*/
/* 					</div>*/
/* 					<div class="col-md-3">*/
/* 						<div class="form-group input-group-sm">*/
/* 							{{ form_widget(form.facebookUrl) }}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-md-1 col-md-offset-4">*/
/* 						Twitter*/
/* 					</div>*/
/* 					<div class="col-md-3">*/
/* 						<div class="form-group input-group-sm">*/
/* 							{{ form_widget(form.twitterUrl) }}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-md-1 col-md-offset-4">*/
/* 						Instagram*/
/* 					</div>*/
/* 					<div class="col-md-3">*/
/* 						<div class="form-group input-group-sm">*/
/* 							{{ form_widget(form.instantgramUrl) }}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-md-1 col-md-offset-4">*/
/* 						Skype*/
/* 					</div>*/
/* 					<div class="col-md-3">*/
/* 						<div class="form-group input-group-sm">*/
/* 							{{ form_widget(form.skypeUsername) }}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="row">*/
/* 				<div class="col-md-4 col-md-offset-4">*/
/*   					<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#club_contact">{% trans %}Contact{% endtrans %}</button>*/
/*   					<br /><br />*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div id="club_contact" class="collapse">*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-md-1 col-md-offset-4">*/
/* 						{% trans %}Are you the owner?{% endtrans %}*/
/* 					</div>*/
/* 					<div class="col-md-3">*/
/* 						<div class="checkbox">*/
/* 							{{ form_widget(form.isOwner)}}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 	           	<div class="row">*/
/* 					<div class="col-md-1 col-md-offset-4">*/
/* 						{% trans %}Name{% endtrans %}*/
/* 					</div>*/
/* 					<div class="col-md-3">*/
/* 						<div class="form-group input-group-sm">*/
/* 							{{ form_widget(form.nombreContacto) }}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-md-1 col-md-offset-4">*/
/* 						{% trans %}Email{% endtrans %}*/
/* 					</div>*/
/* 					<div class="col-md-3">*/
/* 						<div class="form-group input-group-sm">*/
/* 							{{ form_widget(form.emailContacto) }}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-md-1 col-md-offset-4">*/
/* 						{% trans %}Phone{% endtrans %}*/
/* 					</div>*/
/* 					<div class="col-md-3">*/
/* 						<div class="form-group input-group-sm">*/
/* 							{{ form_widget(form.phoneNumberMovi) }}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% if image %}*/
/* 			{% endif %}*/
/* 			<div class="row">*/
/* 				<div class="col-md-4 col-md-offset-4 club-photo">*/
/* 					<div class="btn-group btn-block">*/
/*               		  <button class="btn btn-lg btn-primary" type="submit">{% trans %}Add Club{% endtrans %}</button>*/
/*            			</div>*/
/*            		</div>*/
/*            	</div>*/
/* */
/*            	{{ form_widget(form.route) }}*/
/*            	{{ form_widget(form.street_number) }}*/
/*            	{{ form_widget(form.locality) }}*/
/*            	{{ form_widget(form.administrative_area_level_4) }}*/
/*            	{{ form_widget(form.postal_code) }}*/
/*            	{{ form_widget(form.administrative_area_level_2) }}*/
/*            	{{ form_widget(form.country) }}*/
/*            	{{ form_widget(form.latitude) }}*/
/*            	{{ form_widget(form.longitude) }}*/
/* */
/* 		{{ form_end(form) }}*/
/* </div>*/
/* */
/* {% endblock %}*/

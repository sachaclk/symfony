<?php

/* base.html.twig */
class __TwigTemplate_d8e24d9571bd551cbcd105b68ca991d4b10a0c4197311123e4695072e1c63e62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7206601604edf9913ee438a838718d2ec5cbf3332636ae5bfab34355eec0d29 = $this->env->getExtension("native_profiler");
        $__internal_d7206601604edf9913ee438a838718d2ec5cbf3332636ae5bfab34355eec0d29->enter($__internal_d7206601604edf9913ee438a838718d2ec5cbf3332636ae5bfab34355eec0d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "
        </body>
        </html>
";
        
        $__internal_d7206601604edf9913ee438a838718d2ec5cbf3332636ae5bfab34355eec0d29->leave($__internal_d7206601604edf9913ee438a838718d2ec5cbf3332636ae5bfab34355eec0d29_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1e87b1edf24caed3fce5585a4b47c7dd162b2b545aaff3d5c981f44debe09c1 = $this->env->getExtension("native_profiler");
        $__internal_a1e87b1edf24caed3fce5585a4b47c7dd162b2b545aaff3d5c981f44debe09c1->enter($__internal_a1e87b1edf24caed3fce5585a4b47c7dd162b2b545aaff3d5c981f44debe09c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Quote & Symfony";
        
        $__internal_a1e87b1edf24caed3fce5585a4b47c7dd162b2b545aaff3d5c981f44debe09c1->leave($__internal_a1e87b1edf24caed3fce5585a4b47c7dd162b2b545aaff3d5c981f44debe09c1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40b7f4fb5aa6e51d7d13b62cf80d409aea817d5460c4882254d993403d780680 = $this->env->getExtension("native_profiler");
        $__internal_40b7f4fb5aa6e51d7d13b62cf80d409aea817d5460c4882254d993403d780680->enter($__internal_40b7f4fb5aa6e51d7d13b62cf80d409aea817d5460c4882254d993403d780680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
        <header>Les Citations & Vous by Symfony</header>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("create");
        echo "\">Créer une citation</a></li>
             <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("punchline");
        echo "\">The Best Punchline</a></li>
             <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("moderate");
        echo "\">Moderate</a></li>
          </ul>
        </div>

    <link rel=\"stylesheet\" href=\"https://bootswatch.com/journal/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
";
        
        $__internal_40b7f4fb5aa6e51d7d13b62cf80d409aea817d5460c4882254d993403d780680->leave($__internal_40b7f4fb5aa6e51d7d13b62cf80d409aea817d5460c4882254d993403d780680_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef19fadb013dcb6adb9fe350047569c3cada39db9446e954f13b2953c74e49d9 = $this->env->getExtension("native_profiler");
        $__internal_ef19fadb013dcb6adb9fe350047569c3cada39db9446e954f13b2953c74e49d9->enter($__internal_ef19fadb013dcb6adb9fe350047569c3cada39db9446e954f13b2953c74e49d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef19fadb013dcb6adb9fe350047569c3cada39db9446e954f13b2953c74e49d9->leave($__internal_ef19fadb013dcb6adb9fe350047569c3cada39db9446e954f13b2953c74e49d9_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8b122cf6d422007639d3d39b7263f8aef4c7fe70225f02943bbec98a46fc1da = $this->env->getExtension("native_profiler");
        $__internal_b8b122cf6d422007639d3d39b7263f8aef4c7fe70225f02943bbec98a46fc1da->enter($__internal_b8b122cf6d422007639d3d39b7263f8aef4c7fe70225f02943bbec98a46fc1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b8b122cf6d422007639d3d39b7263f8aef4c7fe70225f02943bbec98a46fc1da->leave($__internal_b8b122cf6d422007639d3d39b7263f8aef4c7fe70225f02943bbec98a46fc1da_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 26,  114 => 25,  105 => 20,  97 => 15,  93 => 14,  89 => 13,  85 => 12,  78 => 7,  72 => 6,  60 => 5,  50 => 27,  47 => 26,  45 => 25,  38 => 22,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Quote & Symfony{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/* */
/*         <header>Les Citations & Vous by Symfony</header>*/
/* */
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*           <ul class="nav navbar-nav">*/
/*             <li class="active"><a href="{{path("homepage")}}">Home</a></li>*/
/*             <li><a href="{{path("create")}}">Créer une citation</a></li>*/
/*              <li><a href="{{path("punchline")}}">The Best Punchline</a></li>*/
/*              <li><a href="{{path("moderate")}}">Moderate</a></li>*/
/*           </ul>*/
/*         </div>*/
/* */
/*     <link rel="stylesheet" href="https://bootswatch.com/journal/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="{{ asset('css/style.css')}}">*/
/* {% endblock %}*/
/* <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/*     {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/* */
/*         </body>*/
/*         </html>*/
/* */

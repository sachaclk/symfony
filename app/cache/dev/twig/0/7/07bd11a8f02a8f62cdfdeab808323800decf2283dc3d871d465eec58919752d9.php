<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5a29365daf3b0356dbb8a968f53a33db94fc69503da725f20c5a2b46555c073f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_706c8e85d43ecf4d07340ae1a4a8634ff517d64e020c97ccbb340669a5c9ca03 = $this->env->getExtension("native_profiler");
        $__internal_706c8e85d43ecf4d07340ae1a4a8634ff517d64e020c97ccbb340669a5c9ca03->enter($__internal_706c8e85d43ecf4d07340ae1a4a8634ff517d64e020c97ccbb340669a5c9ca03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_706c8e85d43ecf4d07340ae1a4a8634ff517d64e020c97ccbb340669a5c9ca03->leave($__internal_706c8e85d43ecf4d07340ae1a4a8634ff517d64e020c97ccbb340669a5c9ca03_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb904bfdd87d4e982efb6d21c70981608113f1e8a2a994100fdb8683fe97acb8 = $this->env->getExtension("native_profiler");
        $__internal_eb904bfdd87d4e982efb6d21c70981608113f1e8a2a994100fdb8683fe97acb8->enter($__internal_eb904bfdd87d4e982efb6d21c70981608113f1e8a2a994100fdb8683fe97acb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eb904bfdd87d4e982efb6d21c70981608113f1e8a2a994100fdb8683fe97acb8->leave($__internal_eb904bfdd87d4e982efb6d21c70981608113f1e8a2a994100fdb8683fe97acb8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bed2bae4ad393e8098b5fe50739492c37ebfac84c670f65c6262f3b58e210d41 = $this->env->getExtension("native_profiler");
        $__internal_bed2bae4ad393e8098b5fe50739492c37ebfac84c670f65c6262f3b58e210d41->enter($__internal_bed2bae4ad393e8098b5fe50739492c37ebfac84c670f65c6262f3b58e210d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bed2bae4ad393e8098b5fe50739492c37ebfac84c670f65c6262f3b58e210d41->leave($__internal_bed2bae4ad393e8098b5fe50739492c37ebfac84c670f65c6262f3b58e210d41_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2edb6707a12cddcd1b0cd421f300fb6cf68e2b2367931c15f9ff3308ff0d85dc = $this->env->getExtension("native_profiler");
        $__internal_2edb6707a12cddcd1b0cd421f300fb6cf68e2b2367931c15f9ff3308ff0d85dc->enter($__internal_2edb6707a12cddcd1b0cd421f300fb6cf68e2b2367931c15f9ff3308ff0d85dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2edb6707a12cddcd1b0cd421f300fb6cf68e2b2367931c15f9ff3308ff0d85dc->leave($__internal_2edb6707a12cddcd1b0cd421f300fb6cf68e2b2367931c15f9ff3308ff0d85dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */

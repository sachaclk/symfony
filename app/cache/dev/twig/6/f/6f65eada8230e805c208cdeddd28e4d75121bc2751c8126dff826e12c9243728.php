<?php

/* default/showBestRated.html.twig */
class __TwigTemplate_cf7cfd8d29335912be75bafc844af7cac272418149040d4062b75cd298422ffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "default/showBestRated.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8c07fd54d149dbd39386fd9e2b1ff051e66f720aecbf1cc33d8b2dc096ab4a5 = $this->env->getExtension("native_profiler");
        $__internal_d8c07fd54d149dbd39386fd9e2b1ff051e66f720aecbf1cc33d8b2dc096ab4a5->enter($__internal_d8c07fd54d149dbd39386fd9e2b1ff051e66f720aecbf1cc33d8b2dc096ab4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/showBestRated.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8c07fd54d149dbd39386fd9e2b1ff051e66f720aecbf1cc33d8b2dc096ab4a5->leave($__internal_d8c07fd54d149dbd39386fd9e2b1ff051e66f720aecbf1cc33d8b2dc096ab4a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4c81b4d52af0b5abd6b0628bbb4d2cbd78e3ba5c7a36da1e8c69550a1aa622d = $this->env->getExtension("native_profiler");
        $__internal_e4c81b4d52af0b5abd6b0628bbb4d2cbd78e3ba5c7a36da1e8c69550a1aa622d->enter($__internal_e4c81b4d52af0b5abd6b0628bbb4d2cbd78e3ba5c7a36da1e8c69550a1aa622d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>La meilleure Punchline</h1>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fortunes"]) ? $context["fortunes"] : $this->getContext($context, "fortunes")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["fortune"]) {
            // line 7
            echo "\t<div class=\"div_quote\">";
            echo twig_include($this->env, $context, "default/fortune.html.twig");
            echo "</div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fortune'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e4c81b4d52af0b5abd6b0628bbb4d2cbd78e3ba5c7a36da1e8c69550a1aa622d->leave($__internal_e4c81b4d52af0b5abd6b0628bbb4d2cbd78e3ba5c7a36da1e8c69550a1aa622d_prof);

    }

    public function getTemplateName()
    {
        return "default/showBestRated.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* */
/* <h1>La meilleure Punchline</h1>*/
/* {% for fortune in fortunes %}*/
/* 	<div class="div_quote">{{ include('default/fortune.html.twig') }}</div>*/
/* {% endfor %}*/
/* {% endblock %}*/
/* */
/* */

<?php

/* default/showByAuthor.html.twig */
class __TwigTemplate_cefb0c7aa1e3ff9eca947d70811801ed7d52ca18afa79f6185d16d2d7468d20f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "default/showByAuthor.html.twig", 2);
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
        $__internal_7fb5604d1b256504b6333c8e79dd30820e96b699581c940621f9be6f356c696c = $this->env->getExtension("native_profiler");
        $__internal_7fb5604d1b256504b6333c8e79dd30820e96b699581c940621f9be6f356c696c->enter($__internal_7fb5604d1b256504b6333c8e79dd30820e96b699581c940621f9be6f356c696c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/showByAuthor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fb5604d1b256504b6333c8e79dd30820e96b699581c940621f9be6f356c696c->leave($__internal_7fb5604d1b256504b6333c8e79dd30820e96b699581c940621f9be6f356c696c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_96cee104757bcbc31646eeb89fc13f84daecb057239722504143b1db9c57a7f6 = $this->env->getExtension("native_profiler");
        $__internal_96cee104757bcbc31646eeb89fc13f84daecb057239722504143b1db9c57a7f6->enter($__internal_96cee104757bcbc31646eeb89fc13f84daecb057239722504143b1db9c57a7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<h1>Les Auteurs</h1>
\t";
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
            echo "\t       <div class=\"\">";
            echo twig_include($this->env, $context, "default/fortune.html.twig");
            echo "</div>
\t";
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
        // line 8
        echo "\t\t
";
        
        $__internal_96cee104757bcbc31646eeb89fc13f84daecb057239722504143b1db9c57a7f6->leave($__internal_96cee104757bcbc31646eeb89fc13f84daecb057239722504143b1db9c57a7f6_prof);

    }

    public function getTemplateName()
    {
        return "default/showByAuthor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 8,  60 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<h1>Les Auteurs</h1>*/
/* 	{% for fortune in fortunes %}*/
/* 	       <div class="">{{ include('default/fortune.html.twig') }}</div>*/
/* 	{% endfor %}		*/
/* {% endblock %}*/

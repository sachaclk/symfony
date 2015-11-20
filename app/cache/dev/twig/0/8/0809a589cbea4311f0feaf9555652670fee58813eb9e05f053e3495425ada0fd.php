<?php

/* default/moderate.html.twig */
class __TwigTemplate_9903529bd0f708d5dc8722f08a9295af713f5d2ce8d391e1f0a06b54d8c68a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "default/moderate.html.twig", 2);
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
        $__internal_4b4685e33b51d9843f8efee997a0dbd509be19887bf72c7f05a2881b5076bde9 = $this->env->getExtension("native_profiler");
        $__internal_4b4685e33b51d9843f8efee997a0dbd509be19887bf72c7f05a2881b5076bde9->enter($__internal_4b4685e33b51d9843f8efee997a0dbd509be19887bf72c7f05a2881b5076bde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/moderate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b4685e33b51d9843f8efee997a0dbd509be19887bf72c7f05a2881b5076bde9->leave($__internal_4b4685e33b51d9843f8efee997a0dbd509be19887bf72c7f05a2881b5076bde9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_70ad498ff21f3b88b06e2db0ef6ad2b32559f93182555535f17cee649e09f6f6 = $this->env->getExtension("native_profiler");
        $__internal_70ad498ff21f3b88b06e2db0ef6ad2b32559f93182555535f17cee649e09f6f6->enter($__internal_70ad498ff21f3b88b06e2db0ef6ad2b32559f93182555535f17cee649e09f6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<h1>Moderation des quotes</h1>
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
        
        $__internal_70ad498ff21f3b88b06e2db0ef6ad2b32559f93182555535f17cee649e09f6f6->leave($__internal_70ad498ff21f3b88b06e2db0ef6ad2b32559f93182555535f17cee649e09f6f6_prof);

    }

    public function getTemplateName()
    {
        return "default/moderate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<h1>Moderation des quotes</h1>*/
/* 	{% for fortune in fortunes %}*/
/* 	       <div class="">{{ include('default/fortune.html.twig') }}</div>*/
/* 	{% endfor %}*/
/* {% endblock %}*/
/* */

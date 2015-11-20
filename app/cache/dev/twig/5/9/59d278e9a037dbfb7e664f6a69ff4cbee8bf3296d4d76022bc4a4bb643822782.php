<?php

/* default/index.html.twig */
class __TwigTemplate_b4c6a6c6529f0cde9a883a73b89b400d713cd67849ad0bf668f9556460392f18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_d0d648f05b3cb721aa5913ecbacaf48da98658e12d1a844782f2eede95c129a0 = $this->env->getExtension("native_profiler");
        $__internal_d0d648f05b3cb721aa5913ecbacaf48da98658e12d1a844782f2eede95c129a0->enter($__internal_d0d648f05b3cb721aa5913ecbacaf48da98658e12d1a844782f2eede95c129a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0d648f05b3cb721aa5913ecbacaf48da98658e12d1a844782f2eede95c129a0->leave($__internal_d0d648f05b3cb721aa5913ecbacaf48da98658e12d1a844782f2eede95c129a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bad917bdc4dbc42a3b6855618c41dfbc1dbe23f7b144eee113bfadb29810db6 = $this->env->getExtension("native_profiler");
        $__internal_7bad917bdc4dbc42a3b6855618c41dfbc1dbe23f7b144eee113bfadb29810db6->enter($__internal_7bad917bdc4dbc42a3b6855618c41dfbc1dbe23f7b144eee113bfadb29810db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
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
            // line 5
            echo "        <div class=\"jumbotron\">
       ";
            // line 6
            echo twig_include($this->env, $context, "default/fortune.html.twig");
            echo "
        </div>
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
        // line 9
        echo "        <div class=\"pagerfanta\">

        </div>
";
        
        $__internal_7bad917bdc4dbc42a3b6855618c41dfbc1dbe23f7b144eee113bfadb29810db6->leave($__internal_7bad917bdc4dbc42a3b6855618c41dfbc1dbe23f7b144eee113bfadb29810db6_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  61 => 6,  58 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% for fortune in fortunes %}*/
/*         <div class="jumbotron">*/
/*        {{ include('default/fortune.html.twig') }}*/
/*         </div>*/
/*         {% endfor %}*/
/*         <div class="pagerfanta">*/
/* */
/*         </div>*/
/* {% endblock %}*/
/* */

<?php

/* default/showByQuote.html.twig */
class __TwigTemplate_39cd4d5b954c6e53a5c79daff54adc3b5c51c48025ab8a3895207d6bb16bbf9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/showByQuote.html.twig", 1);
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
        $__internal_4cb7a3d68658041cf3c4b9fdcae2b94d9afcf8e74c4d6e9a6de97946ac08ed5b = $this->env->getExtension("native_profiler");
        $__internal_4cb7a3d68658041cf3c4b9fdcae2b94d9afcf8e74c4d6e9a6de97946ac08ed5b->enter($__internal_4cb7a3d68658041cf3c4b9fdcae2b94d9afcf8e74c4d6e9a6de97946ac08ed5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/showByQuote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cb7a3d68658041cf3c4b9fdcae2b94d9afcf8e74c4d6e9a6de97946ac08ed5b->leave($__internal_4cb7a3d68658041cf3c4b9fdcae2b94d9afcf8e74c4d6e9a6de97946ac08ed5b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13c42c50e4431d771093d5075c71919a5e23067300b99f4be6488951a2b535d1 = $this->env->getExtension("native_profiler");
        $__internal_13c42c50e4431d771093d5075c71919a5e23067300b99f4be6488951a2b535d1->enter($__internal_13c42c50e4431d771093d5075c71919a5e23067300b99f4be6488951a2b535d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h1>La Quote</h1>
\t";
        // line 5
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
            // line 6
            echo "\t\t<div class=\"\">";
            echo twig_include($this->env, $context, "default/fortune.html.twig");
            echo "</div>

\t\t<div class=\"comments\"><h3>Les Commentaires</h3>
\t\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fortune"], "comments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 10
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
                echo "
\t\t\t\t<p class=\"italic\">By : ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", array()), "html", null, true);
                echo "</p>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t\t</div>

\t\t<div class=\"comments\"><h3>Poste ton com'</h3><form action=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quote", array("id" => $this->getAttribute($context["fortune"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" novalidate>
\t\t\t";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "btn btn-default")));
            echo "
\t\t\t";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
\t\t</form></div>
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
        // line 21
        echo "\t\t
";
        
        $__internal_13c42c50e4431d771093d5075c71919a5e23067300b99f4be6488951a2b535d1->leave($__internal_13c42c50e4431d771093d5075c71919a5e23067300b99f4be6488951a2b535d1_prof);

    }

    public function getTemplateName()
    {
        return "default/showByQuote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 21,  104 => 19,  100 => 18,  96 => 17,  92 => 16,  88 => 15,  84 => 13,  76 => 11,  71 => 10,  67 => 9,  60 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<h1>La Quote</h1>*/
/* 	{% for fortune in fortunes %}*/
/* 		<div class="">{{ include('default/fortune.html.twig') }}</div>*/
/* */
/* 		<div class="comments"><h3>Les Commentaires</h3>*/
/* 			{% for comment in fortune.comments %}*/
/* 				{{ comment.content }}*/
/* 				<p class="italic">By : {{ comment.author }}</p>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* */
/* 		<div class="comments"><h3>Poste ton com'</h3><form action="{{path("quote",{id: fortune.id})}}" method="post" novalidate>*/
/* 			{{form_row(form.author, {'attr': {class:"form-control"}})}}*/
/* 			{{form_row(form.content, {'attr': {class:"form-control"}})}}*/
/* 			{{form_row(form.submit, {'attr': {class:"btn btn-default"}})}}*/
/* 			{{form_rest(form)}}*/
/* 		</form></div>*/
/* 	{% endfor %}		*/
/* {% endblock %}*/

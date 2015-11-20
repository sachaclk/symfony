<?php

/* default/editQuote.html.twig */
class __TwigTemplate_6e9c1b6b9ac65758a9c02aaa5b57c03df95fcf8a1c6c6e1f7d6e42d15cf5fcb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/editQuote.html.twig", 1);
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
        $__internal_83f35758ab07c0e1436645d4a9576e4e4d4b3e73842aec2822133f9aeeb98661 = $this->env->getExtension("native_profiler");
        $__internal_83f35758ab07c0e1436645d4a9576e4e4d4b3e73842aec2822133f9aeeb98661->enter($__internal_83f35758ab07c0e1436645d4a9576e4e4d4b3e73842aec2822133f9aeeb98661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/editQuote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83f35758ab07c0e1436645d4a9576e4e4d4b3e73842aec2822133f9aeeb98661->leave($__internal_83f35758ab07c0e1436645d4a9576e4e4d4b3e73842aec2822133f9aeeb98661_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e010c18c74adb2429b5e1eb9f9113819094bb9b5aec09da4b7e6fe2417a1add = $this->env->getExtension("native_profiler");
        $__internal_0e010c18c74adb2429b5e1eb9f9113819094bb9b5aec09da4b7e6fe2417a1add->enter($__internal_0e010c18c74adb2429b5e1eb9f9113819094bb9b5aec09da4b7e6fe2417a1add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Edite la quote</h1>

<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_quote", array("id" => $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">

";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "btn btn-default")));
        echo "
\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</form>


";
        
        $__internal_0e010c18c74adb2429b5e1eb9f9113819094bb9b5aec09da4b7e6fe2417a1add->leave($__internal_0e010c18c74adb2429b5e1eb9f9113819094bb9b5aec09da4b7e6fe2417a1add_prof);

    }

    public function getTemplateName()
    {
        return "default/editQuote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <h1>Edite la quote</h1>*/
/* */
/* <form action="{{ path('edit_quote',{id:fortune.id}) }}" method="post">*/
/* */
/* {{ form_start(form) }}*/
/* 	{{form_row(form.title, {'attr': {class:"form-control"}})}}*/
/* 	{{form_row(form.author, {'attr': {class:"form-control"}})}}*/
/* 	{{form_row(form.content, {'attr': {class:"form-control"}})}}*/
/* 	{{form_row(form.submit, {'attr': {class:"btn btn-default"}})}}*/
/* 	{{form_rest(form)}}*/
/* {{ form_end(form) }}*/
/* </form>*/
/* */
/* */
/* {% endblock %}*/
/* */

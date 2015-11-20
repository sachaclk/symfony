<?php

/* default/create.html.twig */
class __TwigTemplate_0457cc39940a6720b16dd4efc91e4acf91a27fa32c66c65aa6e2016016e5e2de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/create.html.twig", 1);
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
        $__internal_f37cad2040d222799c62d0549d13070919a4c52682ab76e299e1a9736c54fca1 = $this->env->getExtension("native_profiler");
        $__internal_f37cad2040d222799c62d0549d13070919a4c52682ab76e299e1a9736c54fca1->enter($__internal_f37cad2040d222799c62d0549d13070919a4c52682ab76e299e1a9736c54fca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f37cad2040d222799c62d0549d13070919a4c52682ab76e299e1a9736c54fca1->leave($__internal_f37cad2040d222799c62d0549d13070919a4c52682ab76e299e1a9736c54fca1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_50d65af0e37c95536212af13122b0c66147820c8cda27abecd0078bb6007f500 = $this->env->getExtension("native_profiler");
        $__internal_50d65af0e37c95536212af13122b0c66147820c8cda27abecd0078bb6007f500->enter($__internal_50d65af0e37c95536212af13122b0c66147820c8cda27abecd0078bb6007f500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Créer la meilleure quote</h1>

<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("create");
        echo "\" method=\"post\" novalidate>
\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "btn btn-default")));
        echo "
\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>


";
        
        $__internal_50d65af0e37c95536212af13122b0c66147820c8cda27abecd0078bb6007f500->leave($__internal_50d65af0e37c95536212af13122b0c66147820c8cda27abecd0078bb6007f500_prof);

    }

    public function getTemplateName()
    {
        return "default/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <h1>Créer la meilleure quote</h1>*/
/* */
/* <form action="{{ path('create') }}" method="post" novalidate>*/
/* 	{{form_row(form.title, {'attr': {class:"form-control"}})}}*/
/* 	{{form_row(form.author, {'attr': {class:"form-control"}})}}*/
/* 	{{form_row(form.content, {'attr': {class:"form-control"}})}}*/
/* 	{{form_row(form.submit, {'attr': {class:"btn btn-default"}})}}*/
/* 	{{form_rest(form)}}*/
/* </form>*/
/* */
/* */
/* {% endblock %}*/
/* */

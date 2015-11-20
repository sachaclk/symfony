<?php

/* default/fortune.html.twig */
class __TwigTemplate_01dc0401c5dc4f754877ebfbc6a36d28cbae3157040316a0d07ee2f76c4199fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5838c8f15f1982e5049927c74027e41e9013c8d1d22cd5f1bd7bb9b0285fd88b = $this->env->getExtension("native_profiler");
        $__internal_5838c8f15f1982e5049927c74027e41e9013c8d1d22cd5f1bd7bb9b0285fd88b->enter($__internal_5838c8f15f1982e5049927c74027e41e9013c8d1d22cd5f1bd7bb9b0285fd88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/fortune.html.twig"));

        // line 1
        echo "
<div class=\"div_quote\">
\t<ul>
\t\t<h2><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quote", array("id" => $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "id", array()))), "html", null, true);
        echo "\">Titre: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "title", array()), "html", null, true);
        echo "</h2>

\t\t<h4><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("author", array("author" => $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "author", array()))), "html", null, true);
        echo "\">Auteur: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "author", array()), "html", null, true);
        echo "</a></h4>
\t\t<h1>\" ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "content", array()), "html", null, true);
        echo " \"</h1>
\t\t<h5>Publiée le: ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "createdAt", array()), "d/m/y"), "html", null, true);
        echo "</h5>
\t\t";
        // line 9
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), ("votedUp" . $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "id", array())), array(), "any", true, true)) {
            // line 10
            echo "\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vote_up", array("id" => $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "id", array()))), "html", null, true);
            echo "\">👍 <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "upVote", array()), "html", null, true);
            echo "</strong></a> tu as déjà voté</li>
\t\t";
        } else {
            // line 12
            echo "\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vote_up", array("id" => $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "id", array()))), "html", null, true);
            echo "\">👍 ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "upVote", array()), "html", null, true);
            echo "</a></li>
\t\t";
        }
        // line 14
        echo "\t\t";
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), ("votedDown" . $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "id", array())), array(), "any", true, true)) {
            // line 15
            echo "\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vote_down", array("id" => $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "id", array()))), "html", null, true);
            echo "\">👎 <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "downVote", array()), "html", null, true);
            echo "</strong></a> tu as déjà voté</li>
\t\t";
        } else {
            // line 17
            echo "\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vote_down", array("id" => $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "id", array()))), "html", null, true);
            echo "\">👎 ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "downVote", array()), "html", null, true);
            echo "</a></li>
\t\t";
        }
        // line 19
        echo "\t\t";
        if (($this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "getPublished", array(), "method") == false)) {
            // line 20
            echo "\t\t\t<p><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("validate", array("id" => $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "id", array()))), "html", null, true);
            echo "\">• Accepter la quote</a></p>
\t\t";
        }
        // line 22
        echo "\t\t<p><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_quote", array("id" => $this->getAttribute((isset($context["fortune"]) ? $context["fortune"] : $this->getContext($context, "fortune")), "id", array()))), "html", null, true);
        echo "\">• Editer la quote</a></p>
\t</ul>

</div>
";
        
        $__internal_5838c8f15f1982e5049927c74027e41e9013c8d1d22cd5f1bd7bb9b0285fd88b->leave($__internal_5838c8f15f1982e5049927c74027e41e9013c8d1d22cd5f1bd7bb9b0285fd88b_prof);

    }

    public function getTemplateName()
    {
        return "default/fortune.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  88 => 20,  85 => 19,  77 => 17,  69 => 15,  66 => 14,  58 => 12,  50 => 10,  48 => 9,  44 => 8,  40 => 7,  34 => 6,  27 => 4,  22 => 1,);
    }
}
/* */
/* <div class="div_quote">*/
/* 	<ul>*/
/* 		<h2><a href="{{path("quote",{id: fortune.id})}}">Titre: {{ fortune.title }}</h2>*/
/* */
/* 		<h4><a href="{{path("author",{author: fortune.author})}}">Auteur: {{ fortune.author }}</a></h4>*/
/* 		<h1>" {{ fortune.content }} "</h1>*/
/* 		<h5>Publiée le: {{ fortune.createdAt|date('d/m/y') }}</h5>*/
/* 		{% if attribute(session, 'votedUp' ~ fortune.id) is defined %}*/
/* 			<li><a href="{{path("vote_up",{id: fortune.id})}}">👍 <strong>{{ fortune.upVote}}</strong></a> tu as déjà voté</li>*/
/* 		{% else %}*/
/* 			<li><a href="{{path("vote_up",{id: fortune.id})}}">👍 {{ fortune.upVote}}</a></li>*/
/* 		{% endif %}*/
/* 		{% if attribute(session, 'votedDown' ~ fortune.id) is defined %}*/
/* 			<li><a href="{{path("vote_down",{id: fortune.id})}}">👎 <strong>{{ fortune.downVote}}</strong></a> tu as déjà voté</li>*/
/* 		{% else %}*/
/* 			<li><a href="{{path("vote_down",{id: fortune.id})}}">👎 {{ fortune.downVote}}</a></li>*/
/* 		{% endif %}*/
/* 		{% if fortune.getPublished() == false %}*/
/* 			<p><a href="{{path("validate",{id: fortune.id})}}">• Accepter la quote</a></p>*/
/* 		{% endif %}*/
/* 		<p><a href="{{path("edit_quote",{id: fortune.id})}}">• Editer la quote</a></p>*/
/* 	</ul>*/
/* */
/* </div>*/
/* */

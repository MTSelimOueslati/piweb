<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Qcm/Answer/renseigner.html.twig */
class __TwigTemplate_08d69acf79a3dee74c90fce3d072dd59d5809910f495d161a8f517eee82ff44b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Qcm/Answer/renseigner.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Qcm/Answer/renseigner.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Qcm/Answer/renseigner.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Vous allez repondre au QCM \"";
        // line 7
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["titre"] ?? $this->getContext($context, "titre")), "titre", [])), "html", null, true);
        echo "\"</div>
        <div class=\"panel-body\">
            <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("qcmAnswerrenseigner_index", ["id" => $this->getAttribute(($context["titre"] ?? $this->getContext($context, "titre")), "id", [])]), "html", null, true);
        echo "\" method=\"post\">
                <label for=\"name\">Nom </label><input id=\"name\" type=\"text\" name=\"user\" required placeholder=\"Entrer votre nom\" class=\"form-control\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["qcm"] ?? $this->getContext($context, "qcm")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 12
            echo "                    <div>
                       <h2  class=\"page-header\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", []), "html", null, true);
            echo "</h2>
                        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["question"], "propositions", []));
            foreach ($context['_seq'] as $context["key"] => $context["proposition"]) {
                // line 15
                echo "                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">
                            <div class=\"checkbox\">
                                <label><input type=\"radio\" name=\"proposition[";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", []), "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, $context["proposition"], "html", null, true);
                echo "\" >&nbsp;";
                echo twig_escape_filter($this->env, $context["proposition"], "html", null, true);
                echo "</label>
                            </div></li></ul>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['proposition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                        <hr>
                        <hr>
                        <hr>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                <button type=\"submit\" class=\"btn btn-success btn-block\">Valider</button>
            </form>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Qcm/Answer/renseigner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 26,  108 => 21,  95 => 18,  90 => 15,  86 => 14,  82 => 13,  79 => 12,  75 => 11,  70 => 9,  65 => 7,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}


    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Vous allez repondre au QCM \"{{ titre.titre | capitalize }}\"</div>
        <div class=\"panel-body\">
            <form action=\"{{ path('qcmAnswerrenseigner_index',{'id' : titre.id})}}\" method=\"post\">
                <label for=\"name\">Nom </label><input id=\"name\" type=\"text\" name=\"user\" required placeholder=\"Entrer votre nom\" class=\"form-control\">
                {% for question in qcm %}
                    <div>
                       <h2  class=\"page-header\">{{ question.question }}</h2>
                        {% for key,proposition in question.propositions %}
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\">
                            <div class=\"checkbox\">
                                <label><input type=\"radio\" name=\"proposition[{{ question.id }}]\" value=\"{{ proposition }}\" >&nbsp;{{ proposition }}</label>
                            </div></li></ul>
                        {% endfor %}
                        <hr>
                        <hr>
                        <hr>
                    </div>
                {% endfor %}
                <button type=\"submit\" class=\"btn btn-success btn-block\">Valider</button>
            </form>
        </div>
    </div>


{% endblock %}

", "@Qcm/Answer/renseigner.html.twig", "C:\\wamp64\\www\\piweb\\src\\QcmBundle\\Resources\\views\\Answer\\renseigner.html.twig");
    }
}

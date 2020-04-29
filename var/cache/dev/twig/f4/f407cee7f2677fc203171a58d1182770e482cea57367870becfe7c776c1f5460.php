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

/* @Associations/Association/afficheA.html.twig */
class __TwigTemplate_41debd132102a33115d5b5c97f1e7c8565f5869cd787aa3bf7ed72b61591908f extends \Twig\Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Associations/Association/afficheA.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Associations/Association/afficheA.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Associations/Association/afficheA.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
<br>
    <br>
    <br>
    <br>
    <h2> <center> List of associations </center></h2>
    <style>div.card {
            display: inline-block;
            width:300px;
        }</style>


  <center>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["association"] ?? $this->getContext($context, "association")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 17
            echo "        <div class=\"card\" align=\"center\">

            <div class=\"image\">
                <img  src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/web/" . $this->getAttribute($context["e"], "logo", []))), "html", null, true);
            echo "\" height=\"142\" width=\"142\">
            </div>
            <div class=\"title\">
                <h1>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "Name", []), "html", null, true);
            echo "</h1>
                ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "Description", []), "html", null, true);
            echo "
            </div>
            <div class=\"des\">
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("associations_modifierAssociation", ["id" => $this->getAttribute($context["e"], "id", [])]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-sm btn-outline-info\">Update</button></a>
                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("associations_supprimerAssociation", ["id" => $this->getAttribute($context["e"], "id", [])]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-sm btn-outline-danger\">Delete</button></a>
                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("associations_showDetailsAdmin", ["id" => $this->getAttribute($context["e"], "id", [])]), "html", null, true);
            echo "\">  <button type=\"button\" class=\"btn btn-sm btn-outline-info\">More</button></a>

            </div>
        </div>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
  </center>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Associations/Association/afficheA.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 36,  108 => 29,  104 => 28,  100 => 27,  94 => 24,  90 => 23,  84 => 20,  79 => 17,  75 => 16,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base2.html.twig\" %}
{% block content %}

<br>
    <br>
    <br>
    <br>
    <h2> <center> List of associations </center></h2>
    <style>div.card {
            display: inline-block;
            width:300px;
        }</style>


  <center>
    {% for e in association %}
        <div class=\"card\" align=\"center\">

            <div class=\"image\">
                <img  src=\"{{ asset('uploads/web/' ~ e.logo) }}\" height=\"142\" width=\"142\">
            </div>
            <div class=\"title\">
                <h1>{{ e.Name }}</h1>
                {{ e.Description }}
            </div>
            <div class=\"des\">
                <a href=\"{{ path('associations_modifierAssociation',{'id': e.id}) }}\"><button type=\"button\" class=\"btn btn-sm btn-outline-info\">Update</button></a>
                <a href=\"{{ path('associations_supprimerAssociation',{'id': e.id}) }}\"><button type=\"button\" class=\"btn btn-sm btn-outline-danger\">Delete</button></a>
                <a href=\"{{ path('associations_showDetailsAdmin',{'id': e.id}) }}\">  <button type=\"button\" class=\"btn btn-sm btn-outline-info\">More</button></a>

            </div>
        </div>


    {% endfor %}

  </center>

{% endblock %}", "@Associations/Association/afficheA.html.twig", "C:\\wamp64\\www\\piweb\\src\\AssociationsBundle\\Resources\\views\\Association\\afficheA.html.twig");
    }
}

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

/* @Associations/Association/AfficheAClient.html.twig */
class __TwigTemplate_7d1bcc056a0d9acf546ac4249340123eff59e371c1860427d73ace78f23b3271 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Associations/Association/AfficheAClient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Associations/Association/AfficheAClient.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Associations/Association/AfficheAClient.html.twig", 1);
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
  <center> <h2> List of associations </h2></center>



    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["association"] ?? $this->getContext($context, "association")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 13
            echo "            <div class=\"card\" align=\"center\">

                <div class=\"image\">
                    <img  src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/web/" . $this->getAttribute($context["e"], "logo", []))), "html", null, true);
            echo "\" height=\"142\" width=\"142\">
                </div>
                <div class=\"title\">
                    <h1>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "Name", []), "html", null, true);
            echo "</h1>
                    ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "Description", []), "html", null, true);
            echo " <br> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "website", []), "html", null, true);
            echo "
                </div>

                <div>
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("associations_showDetails", ["id" => $this->getAttribute($context["e"], "id", [])]), "html", null, true);
            echo "\">  <button type=\"button\" class=\"btn btn-sm btn-outline-info\">More</button></a>
                    </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "

    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Associations/Association/AfficheAClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 28,  99 => 24,  90 => 20,  86 => 19,  80 => 16,  75 => 13,  71 => 12,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block content %}

    <br>
    <br>
    <br>
    <br>
  <center> <h2> List of associations </h2></center>



    {% for e in association %}
            <div class=\"card\" align=\"center\">

                <div class=\"image\">
                    <img  src=\"{{ asset('uploads/web/' ~ e.logo) }}\" height=\"142\" width=\"142\">
                </div>
                <div class=\"title\">
                    <h1>{{ e.Name }}</h1>
                    {{ e.Description }} <br> {{ e.website }}
                </div>

                <div>
                    <a href=\"{{ path('associations_showDetails',{'id': e.id}) }}\">  <button type=\"button\" class=\"btn btn-sm btn-outline-info\">More</button></a>
                    </div>
            </div>
        {% endfor %}


    </table>

{% endblock %}", "@Associations/Association/AfficheAClient.html.twig", "C:\\wamp64\\www\\piweb\\src\\AssociationsBundle\\Resources\\views\\Association\\AfficheAClient.html.twig");
    }
}

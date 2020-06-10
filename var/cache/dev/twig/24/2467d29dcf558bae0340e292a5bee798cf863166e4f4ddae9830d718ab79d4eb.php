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

/* @Qcm/Results/viewResult.html.twig */
class __TwigTemplate_dbe75dbc5b14854eccd66dc748dcc56b9ddd30c884eaca38c1dfadb7a51791d1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'customCss' => [$this, 'block_customCss'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Qcm/Results/viewResult.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Qcm/Results/viewResult.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Qcm/Results/viewResult.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_customCss($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customCss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customCss"));

        // line 4
        echo "    ";
        if (($context["stats"] ?? $this->getContext($context, "stats"))) {
            // line 5
            echo "        <style type='text/css'>

            @-webkit-keyframes barMoyenne {
                from {
                    width: 0px;
                }
                to {
                    width: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "moyenneResultats", []), "html", null, true);
            echo "%;
                }
            }

            @keyframes barMeilleur {
                from {
                    width: 0px;
                }
                to {
                    width: ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "meilleurResultat", []), "html", null, true);
            echo "%;
                }
            }

            .ui_box__inner .progress_bar_moyenne {
                width: ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "moyenneResultats", []), "html", null, true);
            echo "%;
            }

            .ui_box__inner .progress_bar_meilleur {
                width: ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "meilleurResultat", []), "html", null, true);
            echo "%;
            }
        </style>

        <link rel=\"stylesheet\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/stats.css"), "html", null, true);
            echo "\">
    ";
        }
        // line 36
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 42
        echo "    ";
        if (($context["stats"] ?? $this->getContext($context, "stats"))) {
            // line 43
            echo "        <h2 class=\"title\">Statistiques du qcm : ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["qcm"] ?? $this->getContext($context, "qcm")), "titre", []), "html", null, true);
            echo "</h2>

        <div class='ui'>
            <div class='ui_box'>
                <div class='ui_box__inner'>
                    <h3>
                        Statistiques des utilisateurs :
                    </h3>
                    <h4>Moyenne de bonne réponse</h4>
                    <div class='stat'>
                        <span>";
            // line 53
            echo twig_escape_filter($this->env, twig_round($this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "moyenneResultats", [])), "html", null, true);
            echo "%</span>
                    </div>
                    <div class='progress'>
                        <div class='progress_bar_moyenne'></div>
                    </div>
                    <p>Moyenne de bonnes réponses sur un total de ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "nombreUsers", []), "html", null, true);
            echo " utilisateurs intérogés</p>

                    <hr>

                    <h4>Le Meilleur résultat : (";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "userMeilleurResultat", []), "html", null, true);
            echo ")</h4>

                    <div class='stat'>
                        <span>";
            // line 65
            echo twig_escape_filter($this->env, twig_round($this->getAttribute(($context["stats"] ?? $this->getContext($context, "stats")), "meilleurResultat", [])), "html", null, true);
            echo "% de bonnes réponses</span>
                    </div>
                    <div class='progress'>
                        <div class='progress_bar_meilleur'></div>
                    </div>

                </div>
            </div>
        </div>

        <div class='ui'>
            <div class='ui_box'>
                <div class='ui_box__inner'>
                    <h3 class=\"sousTitre\">
                        Résultats des utilisateurs :
                    </h3>

                    <div id=\"panel\">
                        <table class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>N°</th>
                                <th>User</th>
                                <th>Résultat</th>
                            </tr>
                            </thead>
                            <tbody>

                            ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["allResults"] ?? $this->getContext($context, "allResults")));
            foreach ($context['_seq'] as $context["_key"] => $context["resultat"]) {
                // line 94
                echo "                                <tr>
                                    <td>";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["resultat"], "id", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["resultat"], "user", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["resultat"], "nbReponsesOK", []), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["resultat"], "nbQuestions", []), "html", null, true);
                echo "</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 108
            echo "        <div class=\"jumbotron\">
            <h3 align=\"center\">Aucun résultat pour ce QCM!</h3>
        </div>
    ";
        }
        // line 112
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Qcm/Results/viewResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 112,  239 => 108,  229 => 100,  218 => 97,  214 => 96,  210 => 95,  207 => 94,  203 => 93,  172 => 65,  166 => 62,  159 => 58,  151 => 53,  137 => 43,  134 => 42,  125 => 41,  112 => 36,  107 => 34,  100 => 30,  93 => 26,  85 => 21,  73 => 12,  64 => 5,  61 => 4,  52 => 3,  30 => 1,);
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

{% block customCss %}
    {% if  stats %}
        <style type='text/css'>

            @-webkit-keyframes barMoyenne {
                from {
                    width: 0px;
                }
                to {
                    width: {{ stats.moyenneResultats }}%;
                }
            }

            @keyframes barMeilleur {
                from {
                    width: 0px;
                }
                to {
                    width: {{ stats.meilleurResultat }}%;
                }
            }

            .ui_box__inner .progress_bar_moyenne {
                width: {{ stats.moyenneResultats }}%;
            }

            .ui_box__inner .progress_bar_meilleur {
                width: {{ stats.meilleurResultat }}%;
            }
        </style>

        <link rel=\"stylesheet\" href=\"{{ asset('css/stats.css') }}\">
    {% endif %}



{% endblock %}

{% block content %}
    {% if  stats %}
        <h2 class=\"title\">Statistiques du qcm : {{ qcm.titre }}</h2>

        <div class='ui'>
            <div class='ui_box'>
                <div class='ui_box__inner'>
                    <h3>
                        Statistiques des utilisateurs :
                    </h3>
                    <h4>Moyenne de bonne réponse</h4>
                    <div class='stat'>
                        <span>{{ stats.moyenneResultats|round }}%</span>
                    </div>
                    <div class='progress'>
                        <div class='progress_bar_moyenne'></div>
                    </div>
                    <p>Moyenne de bonnes réponses sur un total de {{ stats.nombreUsers }} utilisateurs intérogés</p>

                    <hr>

                    <h4>Le Meilleur résultat : ({{ stats.userMeilleurResultat }})</h4>

                    <div class='stat'>
                        <span>{{ stats.meilleurResultat|round }}% de bonnes réponses</span>
                    </div>
                    <div class='progress'>
                        <div class='progress_bar_meilleur'></div>
                    </div>

                </div>
            </div>
        </div>

        <div class='ui'>
            <div class='ui_box'>
                <div class='ui_box__inner'>
                    <h3 class=\"sousTitre\">
                        Résultats des utilisateurs :
                    </h3>

                    <div id=\"panel\">
                        <table class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>N°</th>
                                <th>User</th>
                                <th>Résultat</th>
                            </tr>
                            </thead>
                            <tbody>

                            {% for resultat in allResults %}
                                <tr>
                                    <td>{{ resultat.id }}</td>
                                    <td>{{ resultat.user }}</td>
                                    <td>{{ resultat.nbReponsesOK }}/{{ resultat.nbQuestions }}</td>
                                </tr>
                            {% endfor %}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        <div class=\"jumbotron\">
            <h3 align=\"center\">Aucun résultat pour ce QCM!</h3>
        </div>
    {% endif %}

{% endblock %}", "@Qcm/Results/viewResult.html.twig", "C:\\wamp64\\www\\piweb\\src\\QcmBundle\\Resources\\views\\Results\\viewResult.html.twig");
    }
}

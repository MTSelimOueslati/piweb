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

/* @Qcm/Create/index.html.twig */
class __TwigTemplate_13e62bffbcddf4ff24ef0aecb4f6d97932cc0df5779c7693cdac1821f1a5a4b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Qcm/Create/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Qcm/Create/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Qcm/Create/index.html.twig", 1);
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
    <form method=\"post\" action=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("qcmCreate_index");
        echo "\" data-toggle=\"validator\" id=\"formCreate\">
        <script>
            function ajoutQuestion(){
                var count = \$(\".qGRP\").length + 1;
                var html = \"<div class='panel panel-warning qGRP' id='\"+count+\"'>\" +
                    \"<div class='panel-heading'>Question \"+count+\"</div>\" +
                    \"<div class='panel-body'>\" +
                        \"<div class='form-group'>\" +
                        \"<input name='question_\"+count+\"' type='text' class='form-control' id='question_\"+count+\"' placeholder='Question' required>\" +
                        \"</div>\" +
                        \"<div class='form-group'>\" +
                        \"<input name='reponse_\"+count+\"' type='text' class='form-control' id='reponse_\"+count+\"' placeholder='Reponse' required>\" +
                        \"</div>\" +
                        \"<div class='form-group'>\" +
                        \"<input name='prop1_\"+count+\"' type='text' class='form-control' id='prop1_\"+count+\"' placeholder='Autre proposition 1' required>\" +
                        \"</div>\" +
                        \"<div class='form-group'>\" +
                        \"<input name='prop2_\"+count+\"' type='text' class='form-control' id='prop2_\"+count+\"' placeholder='Autre proposition 2' required>\" +
                        \"</div>\" +                        \"<div class='form-group'>\" +

                        \"<input name='prop3_\"+count+\"' type='text' class='form-control' id='prop3_\"+count+\"' placeholder='Autre proposition 3' required>\" +
                        \"</div>\" +
                        \"</div>\" +
                    \"</div>\";
                \$(\"#questionsGrp\").append(html);
                \$('input[name=nbQuestions]').val(\"0\"+(parseInt(\$('input[name=nbQuestions]').val())+1));
                \$('#formCreate').validator('destroy');
                \$('#formCreate').validator('update');
            }
        </script>
        <br>
        <br>
        <br>
        <br>
        <br>
        <style>div.panel  {

                width:300px;
            }</style>
        <center>
        <div class=\"panel panel-warning\" >
            <div class=\"panel-heading\">Créer un QCM</div>
            <div class=\"panel-body\">
                <div class=\"form-group\">
                    <input name=\"titre\" type=\"text\" class=\"form-control\" id=\"titre\" placeholder=\"Titre de votre QCM\" required>
                </div>
                <div class=\"form-group\" id=\"questionsGrp\">

                </div>
                <div class=\"form-group\">
                    <button type=\"button\" class=\"btn btn-md btn-warning\" onclick=\"ajoutQuestion()\">Ajouter une question</button>
                </div>
                <div class=\"form-group\">
                    <input type=\"hidden\" name=\"nbQuestions\" value=\"0\" data-validate=\"true\" data-minlength=\"2\" />
                    <button type=\"submit\" class=\"btn btn-md btn-success\">Valider</button>
                </div>
            </div>
        </div>
    </form>
    </center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Qcm/Create/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 4,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block content %}

    <form method=\"post\" action=\"{{ path('qcmCreate_index') }}\" data-toggle=\"validator\" id=\"formCreate\">
        <script>
            function ajoutQuestion(){
                var count = \$(\".qGRP\").length + 1;
                var html = \"<div class='panel panel-warning qGRP' id='\"+count+\"'>\" +
                    \"<div class='panel-heading'>Question \"+count+\"</div>\" +
                    \"<div class='panel-body'>\" +
                        \"<div class='form-group'>\" +
                        \"<input name='question_\"+count+\"' type='text' class='form-control' id='question_\"+count+\"' placeholder='Question' required>\" +
                        \"</div>\" +
                        \"<div class='form-group'>\" +
                        \"<input name='reponse_\"+count+\"' type='text' class='form-control' id='reponse_\"+count+\"' placeholder='Reponse' required>\" +
                        \"</div>\" +
                        \"<div class='form-group'>\" +
                        \"<input name='prop1_\"+count+\"' type='text' class='form-control' id='prop1_\"+count+\"' placeholder='Autre proposition 1' required>\" +
                        \"</div>\" +
                        \"<div class='form-group'>\" +
                        \"<input name='prop2_\"+count+\"' type='text' class='form-control' id='prop2_\"+count+\"' placeholder='Autre proposition 2' required>\" +
                        \"</div>\" +                        \"<div class='form-group'>\" +

                        \"<input name='prop3_\"+count+\"' type='text' class='form-control' id='prop3_\"+count+\"' placeholder='Autre proposition 3' required>\" +
                        \"</div>\" +
                        \"</div>\" +
                    \"</div>\";
                \$(\"#questionsGrp\").append(html);
                \$('input[name=nbQuestions]').val(\"0\"+(parseInt(\$('input[name=nbQuestions]').val())+1));
                \$('#formCreate').validator('destroy');
                \$('#formCreate').validator('update');
            }
        </script>
        <br>
        <br>
        <br>
        <br>
        <br>
        <style>div.panel  {

                width:300px;
            }</style>
        <center>
        <div class=\"panel panel-warning\" >
            <div class=\"panel-heading\">Créer un QCM</div>
            <div class=\"panel-body\">
                <div class=\"form-group\">
                    <input name=\"titre\" type=\"text\" class=\"form-control\" id=\"titre\" placeholder=\"Titre de votre QCM\" required>
                </div>
                <div class=\"form-group\" id=\"questionsGrp\">

                </div>
                <div class=\"form-group\">
                    <button type=\"button\" class=\"btn btn-md btn-warning\" onclick=\"ajoutQuestion()\">Ajouter une question</button>
                </div>
                <div class=\"form-group\">
                    <input type=\"hidden\" name=\"nbQuestions\" value=\"0\" data-validate=\"true\" data-minlength=\"2\" />
                    <button type=\"submit\" class=\"btn btn-md btn-success\">Valider</button>
                </div>
            </div>
        </div>
    </form>
    </center>
{% endblock %}", "@Qcm/Create/index.html.twig", "C:\\wamp64\\www\\piweb\\src\\QcmBundle\\Resources\\views\\Create\\index.html.twig");
    }
}

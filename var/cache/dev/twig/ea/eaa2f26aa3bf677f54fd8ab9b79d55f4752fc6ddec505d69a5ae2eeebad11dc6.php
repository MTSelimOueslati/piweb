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

/* @Httplug/webprofiler.html.twig */
class __TwigTemplate_810c52ac135efe33e7ccf84aecae72f5c6492bd8fd9db951a07d3d82bcb19691 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'head' => [$this, 'block_head'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/webprofiler.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/webprofiler.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Httplug/webprofiler.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", [])) > 0)) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@Httplug/Icon/httplug.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", [])), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">in</span>
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totalDuration", [])), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">ms</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", [])), "html", null, true);
            echo " requests</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Client</th>
                        <th>Method</th>
                        <th>Target</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", []));
            foreach ($context['_seq'] as $context["_key"] => $context["stack"]) {
                // line 30
                echo "                            <tr>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["stack"], "client", []), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["stack"], "requestMethod", []), "html", null, true);
                echo "</td>
                                ";
                // line 33
                $context["target"] = $this->getAttribute($context["stack"], "requestTarget", []);
                // line 34
                echo "                                <td title=\"";
                echo twig_escape_filter($this->env, ($context["target"] ?? $this->getContext($context, "target")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, ($context["target"] ?? $this->getContext($context, "target"))) > 30)) ? ((twig_slice($this->env, ($context["target"] ?? $this->getContext($context, "target")), 0, 30) . "...")) : (($context["target"] ?? $this->getContext($context, "target")))), "html", null, true);
                echo "</td>
                                <td>";
                // line 35
                ((($this->getAttribute($context["stack"], "duration", []) == 0)) ? (print ("n/a")) : (print (twig_escape_filter($this->env, (twig_number_format_filter($this->env, $this->getAttribute($context["stack"], "duration", [])) . " ms"), "html", null, true))));
                echo "</td>
                                <td>";
                // line 36
                (($this->getAttribute($context["stack"], "failed", [])) ? (print ("FAILED")) : (print (twig_escape_filter($this->env, (($this->getAttribute($context["stack"], "responseCode", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["stack"], "responseCode", []), "n/a")) : ("n/a")), "html", null, true))));
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stack'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    </tbody>
                </table>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 43
            echo "
        ";
            // line 44
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@Httplug/webprofiler.html.twig", 44)->display(twig_array_merge($context, ["link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", []))) ? ("red") : (""))]));
            // line 45
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 49
        echo "    <style>
        ";
        // line 50
        echo twig_include($this->env, $context, "@Httplug/style/httplug.css.twig");
        echo "
    </style>
    <script type=\"text/javascript\">
        ";
        // line 53
        echo twig_include($this->env, $context, "@Httplug/script/httplug.js.twig");
        echo "
    </script>
    ";
        // line 55
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 59
        echo "    ";
        // line 60
        echo "    <span class=\"label ";
        echo (((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", [])) == 0)) ? ("disabled") : (""));
        echo " ";
        echo ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", []))) ? ("label-status-error") : (""));
        echo "\">
        <span class=\"icon\">
            ";
        // line 62
        echo twig_include($this->env, $context, "@Httplug/Icon/httplug.svg");
        echo "
        </span>
        <strong>Httplug</strong>
        ";
        // line 65
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", []))) {
            // line 66
            echo "            <span class=\"count\">
                <span>";
            // line 67
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", [])), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 70
        echo "    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_panel($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 74
        echo "    <h2>HTTPlug</h2>
    <div class=\"sf-tabs\">
        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "clients", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 77
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">";
            // line 78
            echo twig_escape_filter($this->env, $context["client"], "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countClientMessages", [0 => $context["client"]], "method"), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are sent by client named \"";
            // line 82
            echo twig_escape_filter($this->env, $context["client"], "html", null, true);
            echo "\".
                </p>

                ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "clientRootStacks", [0 => $context["client"]], "method"));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["stack"]) {
                // line 86
                echo "                    <div class=\"httplug-stack\">
                        ";
                // line 87
                $this->loadTemplate("@Httplug/stack.html.twig", "@Httplug/webprofiler.html.twig", 87)->display(twig_to_array(["collector" =>                 // line 88
($context["collector"] ?? $this->getContext($context, "collector")), "client" =>                 // line 89
$context["client"], "stack" =>                 // line 90
$context["stack"], "id" => $this->getAttribute(                // line 91
$context["loop"], "index", [])]));
                // line 93
                echo "                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stack'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 98
            echo "            <div class=\"empty\">
                <p>No request were sent.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Httplug/webprofiler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 102,  335 => 98,  328 => 95,  313 => 93,  311 => 91,  310 => 90,  309 => 89,  308 => 88,  307 => 87,  304 => 86,  287 => 85,  281 => 82,  272 => 78,  269 => 77,  264 => 76,  260 => 74,  251 => 73,  240 => 70,  234 => 67,  231 => 66,  229 => 65,  223 => 62,  215 => 60,  213 => 59,  204 => 58,  192 => 55,  187 => 53,  181 => 50,  178 => 49,  169 => 48,  158 => 45,  156 => 44,  153 => 43,  147 => 39,  138 => 36,  134 => 35,  127 => 34,  125 => 33,  121 => 32,  117 => 31,  114 => 30,  110 => 29,  93 => 15,  90 => 14,  88 => 13,  85 => 12,  79 => 9,  74 => 7,  69 => 6,  66 => 5,  63 => 4,  54 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.stacks|length > 0 %}
        {% set icon %}
            {{ include('@Httplug/Icon/httplug.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.stacks|length }}</span>
            <span class=\"sf-toolbar-label\">in</span>
            <span class=\"sf-toolbar-value\">{{ collector.totalDuration|number_format }}</span>
            <span class=\"sf-toolbar-label\">ms</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>{{ collector.stacks|length }} requests</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Client</th>
                        <th>Method</th>
                        <th>Target</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        {% for stack in collector.stacks %}
                            <tr>
                                <td>{{ stack.client }}</td>
                                <td>{{ stack.requestMethod }}</td>
                                {% set target = stack.requestTarget %}
                                <td title=\"{{ target }}\">{{ target|length > 30 ? target[:30] ~ '...' : target }}</td>
                                <td>{{ stack.duration == 0 ? 'n/a' : stack.duration|number_format ~ ' ms'}}</td>
                                <td>{{ stack.failed ? 'FAILED' : stack.responseCode|default('n/a') }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endset %}

        {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url, 'status': collector.failedStacks|length ? 'red' : '' } %}
    {% endif %}
{% endblock %}

{% block head %}
    <style>
        {{ include('@Httplug/style/httplug.css.twig') }}
    </style>
    <script type=\"text/javascript\">
        {{ include('@Httplug/script/httplug.js.twig') }}
    </script>
    {{ parent() }}
{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label {{ collector.stacks|length == 0 ? 'disabled' }} {{ collector.failedStacks|length ? 'label-status-error' }}\">
        <span class=\"icon\">
            {{ include('@Httplug/Icon/httplug.svg') }}
        </span>
        <strong>Httplug</strong>
        {% if collector.failedStacks|length %}
            <span class=\"count\">
                <span>{{ collector.failedStacks|length }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>HTTPlug</h2>
    <div class=\"sf-tabs\">
        {% for client in collector.clients %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">{{ client }} <span class=\"badge\">{{ collector.countClientMessages(client) }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are sent by client named \"{{ client }}\".
                </p>

                {% for stack in collector.clientRootStacks(client) %}
                    <div class=\"httplug-stack\">
                        {% include '@Httplug/stack.html.twig' with {
                            'collector': collector,
                            'client': client,
                            'stack': stack,
                            'id': loop.index
                        } only %}
                    </div>
                {% endfor %}
            </div>
        </div>
        {% else %}
            <div class=\"empty\">
                <p>No request were sent.</p>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "@Httplug/webprofiler.html.twig", "C:\\wamp64\\www\\piweb\\vendor\\php-http\\httplug-bundle\\src\\Resources\\views\\webprofiler.html.twig");
    }
}

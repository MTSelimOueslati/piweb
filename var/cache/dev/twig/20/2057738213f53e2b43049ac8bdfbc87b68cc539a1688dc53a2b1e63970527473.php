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

/* @Httplug/stack.html.twig */
class __TwigTemplate_3128be3343d50b7b67df776efbc35595175d18ebd67bbd84f46504506f26ba7f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/stack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/stack.html.twig"));

        // line 1
        echo "<div class=\"httplug-stack-header httplug-toggle\" data-toggle=\"#httplug-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "clientSlug", []), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "-details\">
    <div>
        ";
        // line 3
        if ($this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "failed", [])) {
            // line 4
            echo "            <span class=\"httplug-stack-failed\">✘</span>
        ";
        } else {
            // line 6
            echo "            <span class=\"httplug-stack-success\">✔</span>
        ";
        }
        // line 8
        echo "        <span class=\"label httplug-method httplug-method-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "requestMethod", [])), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "requestMethod", []), "html", null, true);
        echo "</span>
    </div>
    <div class=\"label httplug-stack-header-target\">
        <span class=\"httplug-scheme\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "requestScheme", []), "html", null, true);
        echo "://</span>
        <span class=\"httplug-host\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "requestHost", []), "html", null, true);
        echo "</span>
        <span class=\"httplug-target\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "requestTarget", []), "html", null, true);
        echo "</span>
    </div>
    <div>
        <span class=\"label httplug-duration\">";
        // line 16
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "duration", [])), "html", null, true);
        echo " ms</span>
        ";
        // line 17
        if ((($this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "responseCode", []) >= 400) && ($this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "responseCode", []) <= 599))) {
            // line 18
            echo "            <span class=\"label status-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "responseCode", []), "html", null, true);
            echo "</span>
        ";
        } elseif ((($this->getAttribute(        // line 19
($context["stack"] ?? $this->getContext($context, "stack")), "responseCode", []) >= 300) && ($this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "responseCode", []) <= 399))) {
            // line 20
            echo "            <span class=\"label status-warning\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "responseCode", []), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 22
            echo "            <span class=\"label status-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "responseCode", []), "html", null, true);
            echo "</span>
        ";
        }
        // line 24
        echo "    </div>
</div>
<div id=\"httplug-";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "clientSlug", []), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "-details\" class=\"httplug-hidden\">
    <div class=\"httplug-toolbar\">
        <div class=\"httplug-copy-as-curl\">
            <input readonly=\"readonly\" type=\"text\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "curlCommand", []), "html", null, true);
        echo "\" />
            <button class=\"btn tooltip-toggle\" aria-label=\"Copy to clipboard\">Copy to clipboard</button>
        </div>
        <button data-toggle=\"#httplug-";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "clientSlug", []), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "-stack\" class=\"httplug-toggle btn\" >Toggle plugin stack</button>
        <button data-toggle=\"#httplug-";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "clientSlug", []), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "-details .httplug-http-body\" class=\"httplug-toggle btn\">Toggle body</button>
    </div>
    <div class=\"httplug-messages\">
        <div class=\"httplug-message card\">
            <h4>Request</h4>
            ";
        // line 38
        echo nl2br($this->env->getExtension('Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension')->markup($this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "clientRequest", [])));
        echo "
        </div>
        <div class=\"httplug-message card\">
            <h4>Response</h4>
            ";
        // line 42
        echo nl2br($this->env->getExtension('Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension')->markup($this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "clientResponse", [])));
        echo "
        </div>
    </div>
    ";
        // line 45
        if ($this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "profiles", [])) {
            // line 46
            echo "        <div id=\"httplug-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "clientSlug", []), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "-stack\" class=\"httplug-hidden card\">
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "profiles", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
                // line 48
                echo "                <h3 class=\"httplug-plugin-name\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["profile"], "plugin", []), "html", null, true);
                echo "</h3>
                <div class=\"httplug-messages\">
                    <div class=\"httplug-message\">
                        <h4>Request</h4>
                        ";
                // line 52
                echo nl2br($this->env->getExtension('Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension')->markup($this->getAttribute($context["profile"], "request", [])));
                echo "
                    </div>
                    <div class=\"httplug-message\">
                        <h4>Response</h4>
                        ";
                // line 56
                echo nl2br($this->env->getExtension('Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension')->markup($this->getAttribute($context["profile"], "response", [])));
                echo "
                    </div>
                </div>
                ";
                // line 59
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    // line 60
                    echo "                    <hr />
                ";
                }
                // line 62
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        </div>
    ";
        }
        // line 65
        echo "</div>
";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "childrenStacks", [0 => ($context["stack"] ?? $this->getContext($context, "stack"))], "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 67
            echo "    <div class=\"httplug-stack\">
        ";
            // line 68
            $this->loadTemplate("@Httplug/stack.html.twig", "@Httplug/stack.html.twig", 68)->display(twig_to_array(["collector" =>             // line 69
($context["collector"] ?? $this->getContext($context, "collector")), "client" =>             // line 70
($context["client"] ?? $this->getContext($context, "client")), "stack" =>             // line 71
$context["child"], "id" => ((            // line 72
($context["id"] ?? $this->getContext($context, "id")) . "-") . $this->getAttribute($context["loop"], "index", []))]));
            // line 74
            echo "    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Httplug/stack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 74,  247 => 72,  246 => 71,  245 => 70,  244 => 69,  243 => 68,  240 => 67,  223 => 66,  220 => 65,  216 => 63,  202 => 62,  198 => 60,  196 => 59,  190 => 56,  183 => 52,  175 => 48,  158 => 47,  151 => 46,  149 => 45,  143 => 42,  136 => 38,  126 => 33,  120 => 32,  114 => 29,  106 => 26,  102 => 24,  96 => 22,  90 => 20,  88 => 19,  83 => 18,  81 => 17,  77 => 16,  71 => 13,  67 => 12,  63 => 11,  54 => 8,  50 => 6,  46 => 4,  44 => 3,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"httplug-stack-header httplug-toggle\" data-toggle=\"#httplug-{{ stack.clientSlug }}-{{ id }}-details\">
    <div>
        {% if stack.failed %}
            <span class=\"httplug-stack-failed\">✘</span>
        {% else %}
            <span class=\"httplug-stack-success\">✔</span>
        {% endif %}
        <span class=\"label httplug-method httplug-method-{{ stack.requestMethod|lower }}\">{{ stack.requestMethod }}</span>
    </div>
    <div class=\"label httplug-stack-header-target\">
        <span class=\"httplug-scheme\">{{ stack.requestScheme }}://</span>
        <span class=\"httplug-host\">{{ stack.requestHost }}</span>
        <span class=\"httplug-target\">{{ stack.requestTarget }}</span>
    </div>
    <div>
        <span class=\"label httplug-duration\">{{ stack.duration|number_format }} ms</span>
        {% if stack.responseCode >= 400 and stack.responseCode <= 599 %}
            <span class=\"label status-error\">{{ stack.responseCode }}</span>
        {% elseif stack.responseCode >= 300 and stack.responseCode <= 399 %}
            <span class=\"label status-warning\">{{ stack.responseCode }}</span>
        {% else %}
            <span class=\"label status-success\">{{ stack.responseCode }}</span>
        {% endif %}
    </div>
</div>
<div id=\"httplug-{{ stack.clientSlug }}-{{ id }}-details\" class=\"httplug-hidden\">
    <div class=\"httplug-toolbar\">
        <div class=\"httplug-copy-as-curl\">
            <input readonly=\"readonly\" type=\"text\" value=\"{{ stack.curlCommand }}\" />
            <button class=\"btn tooltip-toggle\" aria-label=\"Copy to clipboard\">Copy to clipboard</button>
        </div>
        <button data-toggle=\"#httplug-{{ stack.clientSlug }}-{{ id }}-stack\" class=\"httplug-toggle btn\" >Toggle plugin stack</button>
        <button data-toggle=\"#httplug-{{ stack.clientSlug }}-{{ id }}-details .httplug-http-body\" class=\"httplug-toggle btn\">Toggle body</button>
    </div>
    <div class=\"httplug-messages\">
        <div class=\"httplug-message card\">
            <h4>Request</h4>
            {{ stack.clientRequest|httplug_markup|nl2br }}
        </div>
        <div class=\"httplug-message card\">
            <h4>Response</h4>
            {{ stack.clientResponse|httplug_markup|nl2br }}
        </div>
    </div>
    {% if stack.profiles %}
        <div id=\"httplug-{{ stack.clientSlug }}-{{ id }}-stack\" class=\"httplug-hidden card\">
            {% for profile in stack.profiles %}
                <h3 class=\"httplug-plugin-name\">{{ profile.plugin }}</h3>
                <div class=\"httplug-messages\">
                    <div class=\"httplug-message\">
                        <h4>Request</h4>
                        {{ profile.request|httplug_markup|nl2br }}
                    </div>
                    <div class=\"httplug-message\">
                        <h4>Response</h4>
                        {{ profile.response|httplug_markup|nl2br }}
                    </div>
                </div>
                {% if not loop.last %}
                    <hr />
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}
</div>
{% for child in collector.childrenStacks(stack) %}
    <div class=\"httplug-stack\">
        {% include '@Httplug/stack.html.twig' with {
            'collector': collector,
            'client': client,
            'stack': child,
            'id': id ~ '-' ~ loop.index
        } only %}
    </div>
{% endfor %}
", "@Httplug/stack.html.twig", "C:\\wamp64\\www\\piweb\\vendor\\php-http\\httplug-bundle\\src\\Resources\\views\\stack.html.twig");
    }
}

<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_df0ebff8fdb17693830ddfcc1b8007007947c4fddb5fe1e8b545cc4876fd2466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "WebProfilerBundle:Collector:events.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_44b37826f07d763061bae33a705f291d0c265613dc727a077d718842ab54f941"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/webprofiler/images/profiler/events.png"), "html", null, true);
        echo "\" alt=\"Events\" /></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners", array()))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Priority</th>
            <th>Listener</th>
        </tr>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 33
            echo "            <tr>
                <td><code>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "event", array()), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "priority", array()), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 36
            echo $context["__internal_44b37826f07d763061bae33a705f291d0c265613dc727a077d718842ab54f941"]->getdisplay_listener($context["listener"]);
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </table>

    ";
        // line 41
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners", array())) {
            // line 42
            echo "        <h2>Not Called Listeners</h2>

        <table>
            <tr>
                <th>Event name</th>
                <th>Priority</th>
                <th>Listener</th>
            </tr>
            ";
            // line 50
            $context["listeners"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners", array());
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")))));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 52
                echo "                <tr>
                    <td><code>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), $context["listener"], array(), "array"), "event", array()), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), $context["listener"], array(), "array"), "priority", array()), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 55
                echo $context["__internal_44b37826f07d763061bae33a705f291d0c265613dc727a077d718842ab54f941"]->getdisplay_listener($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), $context["listener"], array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        </table>
    ";
        }
    }

    // line 62
    public function getdisplay_listener($__listener__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $__listener__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 63
            echo "    ";
            if (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type", array()) == "Closure")) {
                // line 64
                echo "        Closure
    ";
            } elseif (($this->getAttribute(            // line 65
(isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type", array()) == "Function")) {
                // line 66
                echo "        ";
                $context["link"] = $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\CodeExtension')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "file", array()), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "line", array()));
                // line 67
                echo "        ";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "function", array()), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "function", array()), "html", null, true);
                }
                // line 68
                echo "    ";
            } elseif (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type", array()) == "Method")) {
                // line 69
                echo "        ";
                $context["link"] = $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\CodeExtension')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "file", array()), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "line", array()));
                // line 70
                echo "        ";
                echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\CodeExtension')->abbrClass($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "class", array()));
                echo "::";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "method", array()), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "method", array()), "html", null, true);
                }
                // line 71
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 71,  194 => 70,  191 => 69,  188 => 68,  177 => 67,  174 => 66,  172 => 65,  169 => 64,  166 => 63,  154 => 62,  148 => 58,  139 => 55,  135 => 54,  131 => 53,  128 => 52,  123 => 51,  121 => 50,  111 => 42,  109 => 41,  105 => 39,  96 => 36,  92 => 35,  88 => 34,  85 => 33,  81 => 32,  71 => 24,  68 => 23,  59 => 16,  53 => 14,  50 => 13,  47 => 12,  39 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% from _self import display_listener %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><img src=\"{{ asset('bundles/webprofiler/images/profiler/events.png') }}\" alt=\"Events\" /></span>
    <strong>Events</strong>
</span>
{% endblock %}

{% block panel %}
    {% if collector.calledlisteners|length %}
        {{ block('panelContent') }}
    {% else %}
        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    {% endif %}
{% endblock %}

{% block panelContent %}
    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Priority</th>
            <th>Listener</th>
        </tr>
        {% for listener in collector.calledlisteners %}
            <tr>
                <td><code>{{ listener.event }}</code></td>
                <td><code>{{ listener.priority }}</code></td>
                <td><code>{{ display_listener(listener) }}</code></td>
            </tr>
        {% endfor %}
    </table>

    {% if collector.notcalledlisteners %}
        <h2>Not Called Listeners</h2>

        <table>
            <tr>
                <th>Event name</th>
                <th>Priority</th>
                <th>Listener</th>
            </tr>
            {% set listeners = collector.notcalledlisteners %}
            {% for listener in listeners|keys|sort %}
                <tr>
                    <td><code>{{ listeners[listener].event }}</code></td>
                    <td><code>{{ listeners[listener].priority }}</code></td>
                    <td><code>{{ display_listener(listeners[listener]) }}</code></td>
                </tr>
            {% endfor %}
        </table>
    {% endif %}
{% endblock %}

{% macro display_listener(listener) %}
    {% if listener.type == \"Closure\" %}
        Closure
    {% elseif listener.type == \"Function\" %}
        {% set link = listener.file|file_link(listener.line) %}
        {% if link %}<a href=\"{{ link }}\">{{ listener.function }}</a>{% else %}{{ listener.function }}{% endif %}
    {% elseif listener.type == \"Method\" %}
        {% set link = listener.file|file_link(listener.line) %}
        {{ listener.class|abbr_class }}::{% if link %}<a href=\"{{ link }}\">{{ listener.method }}</a>{% else %}{{ listener.method }}{% endif %}
    {% endif %}
{% endmacro %}
", "WebProfilerBundle:Collector:events.html.twig", "/var/www/FileUpload/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/events.html.twig");
    }
}

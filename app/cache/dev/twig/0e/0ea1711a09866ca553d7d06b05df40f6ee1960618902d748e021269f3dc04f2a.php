<?php

/* WebProfilerBundle:Profiler:layout.html.twig */
class __TwigTemplate_f9c32d59344474df7b9a7b1ed3bc7b90533305ce85da4560090486f6a9e2f97a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:base.html.twig", "WebProfilerBundle:Profiler:layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:toolbar", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "position" => "normal"), array());
        // line 6
        echo "
    <div id=\"content\">
        ";
        // line 8
        $this->loadTemplate("WebProfilerBundle:Profiler:header.html.twig", "WebProfilerBundle:Profiler:layout.html.twig", 8)->display(array());
        // line 9
        echo "
        <div id=\"main\">

            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    ";
        // line 14
        if ((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile"))) {
            // line 15
            echo "                        <div id=\"resume\">
                            <a id=\"resume-view-all\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search", array("limit" => 10)), "html", null, true);
            echo "\">View all</a>
                            <strong>Profile for:</strong>
                            ";
            // line 18
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "method", array())), "html", null, true);
            echo "
                            ";
            // line 19
            if (twig_in_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "method", array())), array(0 => "GET", 1 => "HEAD"))) {
                // line 20
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 22
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "
                            ";
            }
            // line 24
            echo "                            <span class=\"date\">
                                <em>by ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "ip", array()), "html", null, true);
            echo "</em> at <em>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "time", array()), "r"), "html", null, true);
            echo "</em>
                            </span>
                        </div>
                    ";
        }
        // line 29
        echo "
                    <div id=\"collector_content\">
                        ";
        // line 31
        $this->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig", "WebProfilerBundle:Profiler:layout.html.twig", 31)->display($context);
        // line 32
        echo "                        ";
        $this->displayBlock('panel', $context, $blocks);
        // line 33
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 36
        if (array_key_exists("templates", $context)) {
            // line 37
            echo "                        <ul id=\"menu_profiler\">
                            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 39
                echo "                                ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "renderBlock", array(0 => "menu", 1 => array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"))), "method"), "html", null, true);
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 40
                echo "                                ";
                if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) != "")) {
                    // line 41
                    echo "                                    <li class=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    if (($context["name"] == (isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")))) {
                        echo " selected";
                    }
                    echo "\">
                                        <a href=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => $context["name"])), "html", null, true);
                    echo "\">";
                    echo (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"));
                    echo "</a>
                                    </li>
                                ";
                }
                // line 45
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                        </ul>
                    ";
        }
        // line 48
        echo "                    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:searchBar", array(), array());
        // line 49
        echo "                    ";
        $this->loadTemplate("WebProfilerBundle:Profiler:admin.html.twig", "WebProfilerBundle:Profiler:layout.html.twig", 49)->display(array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))));
        // line 50
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 32
    public function block_panel($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 32,  155 => 50,  152 => 49,  149 => 48,  145 => 46,  139 => 45,  131 => 42,  123 => 41,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  106 => 36,  101 => 33,  98 => 32,  96 => 31,  92 => 29,  83 => 25,  80 => 24,  74 => 22,  66 => 20,  64 => 19,  60 => 18,  55 => 16,  52 => 15,  50 => 14,  43 => 9,  41 => 8,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:base.html.twig' %}

{% block body %}

    {% render 'WebProfilerBundle:Profiler:toolbar' with { 'token': token, 'position': 'normal' } %}

    <div id=\"content\">
        {% include 'WebProfilerBundle:Profiler:header.html.twig' only %}

        <div id=\"main\">

            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    {% if profile %}
                        <div id=\"resume\">
                            <a id=\"resume-view-all\" href=\"{{ path('_profiler_search', {limit: 10}) }}\">View all</a>
                            <strong>Profile for:</strong>
                            {{ profile.method|upper }}
                            {% if profile.method|upper in ['GET', 'HEAD'] %}
                                <a href=\"{{ profile.url }}\">{{ profile.url }}</a>
                            {% else %}
                                {{ profile.url }}
                            {% endif %}
                            <span class=\"date\">
                                <em>by {{ profile.ip }}</em> at <em>{{ profile.time|date('r') }}</em>
                            </span>
                        </div>
                    {% endif %}

                    <div id=\"collector_content\">
                        {% include 'WebProfilerBundle:Profiler:base_js.html.twig' %}
                        {% block panel '' %}
                    </div>
                </div>
                <div id=\"navigation\">
                    {% if templates is defined %}
                        <ul id=\"menu_profiler\">
                            {% for name, template in templates %}
                                {% set menu %}{{ template.renderBlock('menu', { 'collector': profile.getcollector(name)}) }}{% endset %}
                                {% if menu != '' %}
                                    <li class=\"{{ name }}{% if name == panel %} selected{% endif %}\">
                                        <a href=\"{{ path('_profiler', { 'token': token, 'panel': name }) }}\">{{ menu|raw }}</a>
                                    </li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                    {% render 'WebProfilerBundle:Profiler:searchBar' %}
                    {% include 'WebProfilerBundle:Profiler:admin.html.twig' with { 'token': token } only %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:layout.html.twig", "/var/www/FileUpload/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/layout.html.twig");
    }
}

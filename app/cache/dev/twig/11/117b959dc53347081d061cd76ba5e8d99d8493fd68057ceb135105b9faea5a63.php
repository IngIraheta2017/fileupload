<?php

/* WebProfilerBundle:Profiler:toolbar.html.twig */
class __TwigTemplate_607e1c97f92bed9501e2f0a957f2197db619db6559f60db7621c0ac435a0a2ea extends Twig_Template
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
        // line 1
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 3
            echo "    ";
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_style.html.twig", "WebProfilerBundle:Profiler:toolbar.html.twig", 3)->display(array_merge($context, array("position" => (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "floatable" => true)));
            // line 4
            echo "    <div style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 6
        echo "
<div class=\"sf-toolbarreset\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute(            // line 10
(isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>             // line 11
(isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "token" => $this->getAttribute(            // line 12
(isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "token", array()), "name" =>             // line 13
$context["name"])), "method"), "html", null, true);
            // line 15
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    ";
        // line 18
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 19
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
        \"></a>
    ";
        }
        // line 25
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  58 => 19,  56 => 18,  53 => 17,  46 => 15,  44 => 13,  43 => 12,  42 => 11,  41 => 10,  39 => 9,  35 => 8,  31 => 6,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- START of Symfony2 Web Debug Toolbar -->
{% if 'normal' != position %}
    {% include 'WebProfilerBundle:Profiler:toolbar_style.html.twig' with { 'position': position, 'floatable': true } %}
    <div style=\"clear: both; height: 38px;\"></div>
{% endif %}

<div class=\"sf-toolbarreset\">
    {% for name, template in templates %}
        {{ template.renderblock('toolbar', {
            'collector': profile.getcollector(name),
            'profiler_url': profiler_url,
            'token': profile.token,
            'name': name
          })
        }}
    {% endfor %}

    {% if 'normal' != position %}
        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
        \"></a>
    {% endif %}
</div>
<!-- END of Symfony2 Web Debug Toolbar -->
", "WebProfilerBundle:Profiler:toolbar.html.twig", "/var/www/FileUpload/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar.html.twig");
    }
}

<?php

/* TwigBundle:Exception:traces.html.twig */
class __TwigTemplate_0cd3894f77ad57175dfa068271255fae7f1d42cc133420ded25cb0fe3d239641 extends Twig_Template
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
        echo "<div class=\"block\">
    ";
        // line 2
        if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) > 0)) {
            // line 3
            echo "        <h2>
            <span><small>[";
            // line 4
            echo twig_escape_filter($this->env, (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) - (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position"))) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1), "html", null, true);
            echo "]</small></span>
            ";
            // line 5
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\CodeExtension')->abbrClass($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "class", array()));
            echo ": ";
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\CodeExtension')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true)));
            echo "&nbsp;
            ";
            // line 6
            ob_start();
            // line 7
            echo "            <a href=\"#\" onclick=\"toggle('traces_";
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "', 'traces'); switchIcons('icon_traces_";
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "_open', 'icon_traces_";
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "_close'); return false;\">
                <img class=\"toggle\" id=\"icon_traces_";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "_close\" alt=\"-\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) ? ("visible") : ("hidden"));
            echo "\" />
                <img class=\"toggle\" id=\"icon_traces_";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "_open\" alt=\"+\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) ? ("hidden") : ("visible"));
            echo "; margin-left: -18px\" />
            </a>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 12
            echo "        </h2>
    ";
        } else {
            // line 14
            echo "        <h2>Stack Trace</h2>
    ";
        }
        // line 16
        echo "
    <a id=\"traces_link_";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
        echo "\"></a>
    <ol class=\"traces list_exception\" id=\"traces_";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
        echo "\" style=\"display: ";
        echo (((0 == (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) ? ("block") : ("none"));
        echo "\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 20
            echo "            <li>
                ";
            // line 21
            $this->loadTemplate("TwigBundle:Exception:trace.html.twig", "TwigBundle:Exception:traces.html.twig", 21)->display(array("prefix" => (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "i" => $context["i"], "trace" => $context["trace"]));
            // line 22
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ol>
</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  98 => 22,  96 => 21,  93 => 20,  89 => 19,  83 => 18,  79 => 17,  76 => 16,  72 => 14,  68 => 12,  58 => 9,  50 => 8,  41 => 7,  39 => 6,  33 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"block\">
    {% if count > 0 %}
        <h2>
            <span><small>[{{ count - position + 1 }}/{{ count + 1 }}]</small></span>
            {{ exception.class|abbr_class }}: {{ exception.message|nl2br|format_file_from_text }}&nbsp;
            {% spaceless %}
            <a href=\"#\" onclick=\"toggle('traces_{{ position }}', 'traces'); switchIcons('icon_traces_{{ position }}_open', 'icon_traces_{{ position }}_close'); return false;\">
                <img class=\"toggle\" id=\"icon_traces_{{ position }}_close\" alt=\"-\" src=\"{{ asset('bundles/framework/images/blue_picto_less.gif') }}\" style=\"visibility: {{ 0 == count ? 'visible' : 'hidden' }}\" />
                <img class=\"toggle\" id=\"icon_traces_{{ position }}_open\" alt=\"+\" src=\"{{ asset('bundles/framework/images/blue_picto_more.gif') }}\" style=\"visibility: {{ 0 == count ? 'hidden' : 'visible' }}; margin-left: -18px\" />
            </a>
            {% endspaceless %}
        </h2>
    {% else %}
        <h2>Stack Trace</h2>
    {% endif %}

    <a id=\"traces_link_{{ position }}\"></a>
    <ol class=\"traces list_exception\" id=\"traces_{{ position }}\" style=\"display: {{ 0 == count ? 'block' : 'none' }}\">
        {% for i, trace in exception.trace %}
            <li>
                {% include 'TwigBundle:Exception:trace.html.twig' with { 'prefix': position, 'i': i, 'trace': trace } only %}
            </li>
        {% endfor %}
    </ol>
</div>
", "TwigBundle:Exception:traces.html.twig", "/var/www/FileUpload/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.html.twig");
    }
}

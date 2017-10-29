<?php

/* TwigBundle:Exception:trace.html.twig */
class __TwigTemplate_f71f11f49962ea08e1b935df2cd67687277f4420dc2822523b10b2d5508a1a37 extends Twig_Template
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
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at
    <strong>
        <abbr title=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "short_class", array()), "html", null, true);
            echo "</abbr>
        ";
            // line 5
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array()) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())), "html", null, true);
            echo "
    </strong>
    (";
            // line 7
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\CodeExtension')->formatArgs($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        }
        // line 9
        echo "
";
        // line 10
        if (((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array())) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true)) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array()))) {
            // line 11
            echo "    ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) ? ("<br />") : (""));
            echo "
    in ";
            // line 12
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\CodeExtension')->formatFile($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array()), $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array()));
            echo "&nbsp;
    ";
            // line 13
            ob_start();
            // line 14
            echo "    <a href=\"#\" onclick=\"toggle('trace_";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "_") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "'); switchIcons('icon_";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "_") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "_open', 'icon_";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "_") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "_close'); return false;\">
        <img class=\"toggle\" id=\"icon_";
            // line 15
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "_") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "_close\" alt=\"-\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) ? ("visible") : ("hidden"));
            echo "\" />
        <img class=\"toggle\" id=\"icon_";
            // line 16
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "_") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "_open\" alt=\"+\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) ? ("hidden") : ("visible"));
            echo "; margin-left: -18px\" />
    </a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 19
            echo "    <div id=\"trace_";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")) . "_") . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "html", null, true);
            echo "\" style=\"display: ";
            echo (((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) ? ("block") : ("none"));
            echo "\" class=\"trace\">
        ";
            // line 20
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\CodeExtension')->fileExcerpt($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array()), $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array()));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  84 => 19,  74 => 16,  66 => 15,  57 => 14,  55 => 13,  51 => 12,  46 => 11,  44 => 10,  41 => 9,  36 => 7,  31 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at
    <strong>
        <abbr title=\"{{ trace.class }}\">{{ trace.short_class }}</abbr>
        {{ trace.type ~ trace.function }}
    </strong>
    ({{ trace.args|format_args }})
{% endif %}

{% if trace.file is defined and trace.file and trace.line is defined and trace.line %}
    {{ trace.function ? '<br />' : '' }}
    in {{ trace.file|format_file(trace.line) }}&nbsp;
    {% spaceless %}
    <a href=\"#\" onclick=\"toggle('trace_{{ prefix ~ '_' ~ i }}'); switchIcons('icon_{{ prefix ~ '_' ~ i }}_open', 'icon_{{ prefix ~ '_' ~ i }}_close'); return false;\">
        <img class=\"toggle\" id=\"icon_{{ prefix ~ '_' ~ i }}_close\" alt=\"-\" src=\"{{ asset('bundles/framework/images/blue_picto_less.gif') }}\" style=\"visibility: {{ 0 == i ? 'visible' : 'hidden' }}\" />
        <img class=\"toggle\" id=\"icon_{{ prefix ~ '_' ~ i }}_open\" alt=\"+\" src=\"{{ asset('bundles/framework/images/blue_picto_more.gif') }}\" style=\"visibility: {{ 0 == i ? 'hidden' : 'visible' }}; margin-left: -18px\" />
    </a>
    {% endspaceless %}
    <div id=\"trace_{{ prefix ~ '_' ~ i }}\" style=\"display: {{ 0 == i ? 'block' : 'none' }}\" class=\"trace\">
        {{ trace.file|file_excerpt(trace.line) }}
    </div>
{% endif %}
", "TwigBundle:Exception:trace.html.twig", "/var/www/FileUpload/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.html.twig");
    }
}

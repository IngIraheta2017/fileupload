<?php

/* TwigBundle:Exception:exception.html.twig */
class __TwigTemplate_007ca54440ee7b4d791f90d06bcedc4c87050c30758b2548598a95adb0716d10 extends Twig_Template
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
        echo "<div class=\"sf-exceptionreset\">

    <div class=\"block_exception\">
        <div class=\"block_exception_detected clear_fix\">
            <div class=\"illustration_exception\">
                <img alt=\"Exception detected!\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/framework/images/exception_detected.png"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"text_exception\">

                <div class=\"open_quote\">
                    <img alt=\"\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/framework/images/open_quote.gif"), "html", null, true);
        echo "\"/>
                </div>

                <h1>
                    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\CodeExtension')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true)));
        echo "
                </h1>

                <div>
                    <strong>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo " - ";
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\CodeExtension')->abbrClass($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "class", array()));
        echo "
                </div>

                ";
        // line 22
        $context["previous_count"] = twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "allPrevious", array()));
        // line 23
        echo "                ";
        if ((isset($context["previous_count"]) ? $context["previous_count"] : $this->getContext($context, "previous_count"))) {
            // line 24
            echo "                    <div class=\"linked\"><span><strong>";
            echo twig_escape_filter($this->env, (isset($context["previous_count"]) ? $context["previous_count"] : $this->getContext($context, "previous_count")), "html", null, true);
            echo "</strong> linked Exception";
            echo ((((isset($context["previous_count"]) ? $context["previous_count"] : $this->getContext($context, "previous_count")) > 1)) ? ("s") : (""));
            echo ":</span>
                        <ul>
                            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "allPrevious", array()));
            foreach ($context['_seq'] as $context["i"] => $context["previous"]) {
                // line 27
                echo "                                <li>
                                    ";
                // line 28
                echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\CodeExtension')->abbrClass($this->getAttribute($context["previous"], "class", array()));
                echo " <a href=\"#traces_link_";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "\" onclick=\"toggle('traces_";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "', 'traces'); switchIcons('icon_traces_";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "_open', 'icon_traces_";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "_close');\">&#187;</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['previous'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                        </ul>
                    </div>
                ";
        }
        // line 34
        echo "
                <div class=\"close_quote\">
                    <img alt=\"\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/framework/images/close_quote.gif"), "html", null, true);
        echo "\"/>
                </div>

            </div>
        </div>
    </div>

    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["position"] => $context["e"]) {
            // line 44
            echo "        ";
            $this->loadTemplate("TwigBundle:Exception:traces.html.twig", "TwigBundle:Exception:exception.html.twig", 44)->display(array("exception" => $context["e"], "position" => $context["position"], "count" => (isset($context["previous_count"]) ? $context["previous_count"] : $this->getContext($context, "previous_count"))));
            // line 45
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
    ";
        // line 47
        if ((isset($context["logger"]) ? $context["logger"] : $this->getContext($context, "logger"))) {
            // line 48
            echo "        <div class=\"block\">
            <div class=\"logs clear_fix\">
                ";
            // line 50
            ob_start();
            // line 51
            echo "                <h2>
                    Logs&nbsp;
                    <a href=\"#\" onclick=\"toggle('logs'); switchIcons('icon_logs_open', 'icon_logs_close'); return false;\">
                        <img class=\"toggle\" id=\"icon_logs_open\" alt=\"+\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: hidden\" />
                        <img class=\"toggle\" id=\"icon_logs_close\" alt=\"-\" src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: visible; margin-left: -18px\" />
                    </a>
                </h2>
                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 59
            echo "
                ";
            // line 60
            if ($this->getAttribute((isset($context["logger"]) ? $context["logger"] : $this->getContext($context, "logger")), "counterrors", array())) {
                // line 61
                echo "                    <div class=\"error_count\">
                        <span>
                            ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logger"]) ? $context["logger"] : $this->getContext($context, "logger")), "counterrors", array()), "html", null, true);
                echo " error";
                echo ((($this->getAttribute((isset($context["logger"]) ? $context["logger"] : $this->getContext($context, "logger")), "counterrors", array()) > 1)) ? ("s") : (""));
                echo "
                        </span>
                    </div>
                ";
            }
            // line 67
            echo "
            </div>

            <div id=\"logs\">
                ";
            // line 71
            $this->loadTemplate("TwigBundle:Exception:logs.html.twig", "TwigBundle:Exception:exception.html.twig", 71)->display(array("logs" => $this->getAttribute((isset($context["logger"]) ? $context["logger"] : $this->getContext($context, "logger")), "logs", array())));
            // line 72
            echo "            </div>

        </div>
    ";
        }
        // line 76
        echo "
    ";
        // line 77
        if ((isset($context["currentContent"]) ? $context["currentContent"] : $this->getContext($context, "currentContent"))) {
            // line 78
            echo "        <div class=\"block\">
            ";
            // line 79
            ob_start();
            // line 80
            echo "            <h2>
                Content of the Output&nbsp;
                <a href=\"#\" onclick=\"toggle('output_content'); switchIcons('icon_content_open', 'icon_content_close'); return false;\">
                    <img class=\"toggle\" id=\"icon_content_close\" alt=\"-\" src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: hidden\" />
                    <img class=\"toggle\" id=\"icon_content_open\" alt=\"+\" src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: visible; margin-left: -18px\" />
                </a>
            </h2>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 88
            echo "
            <div id=\"output_content\" style=\"display: none\">
                ";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["currentContent"]) ? $context["currentContent"] : $this->getContext($context, "currentContent")), "html", null, true);
            echo "
            </div>

            <div style=\"clear: both\"></div>
        </div>
    ";
        }
        // line 96
        echo "
</div>

<script type=\"text/javascript\">//<![CDATA[
    function toggle(id, clazz) {
        var el = document.getElementById(id),
            current = el.style.display,
            i;

        if (clazz) {
            var tags = document.getElementsByTagName('*');
            for (i = tags.length - 1; i >= 0 ; i--) {
                if (tags[i].className === clazz) {
                    tags[i].style.display = 'none';
                }
            }
        }

        el.style.display = current === 'none' ? 'block' : 'none';
    }

    function switchIcons(id1, id2) {
        var icon1, icon2, visibility1, visibility2;

        icon1 = document.getElementById(id1);
        icon2 = document.getElementById(id2);

        visibility1 = icon1.style.visibility;
        visibility2 = icon2.style.visibility;

        icon1.style.visibility = visibility2;
        icon2.style.visibility = visibility1;
    }
//]]></script>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  178 => 71,  172 => 67,  163 => 63,  159 => 61,  157 => 60,  154 => 59,  147 => 55,  143 => 54,  138 => 51,  136 => 50,  132 => 48,  130 => 47,  127 => 46,  121 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 34,  95 => 31,  78 => 28,  75 => 27,  71 => 26,  63 => 24,  60 => 23,  58 => 22,  48 => 19,  41 => 15,  34 => 11,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sf-exceptionreset\">

    <div class=\"block_exception\">
        <div class=\"block_exception_detected clear_fix\">
            <div class=\"illustration_exception\">
                <img alt=\"Exception detected!\" src=\"{{ asset('bundles/framework/images/exception_detected.png') }}\"/>
            </div>
            <div class=\"text_exception\">

                <div class=\"open_quote\">
                    <img alt=\"\" src=\"{{ asset('bundles/framework/images/open_quote.gif') }}\"/>
                </div>

                <h1>
                    {{ exception.message|nl2br|format_file_from_text }}
                </h1>

                <div>
                    <strong>{{ status_code }}</strong> {{ status_text }} - {{ exception.class|abbr_class }}
                </div>

                {% set previous_count = exception.allPrevious|length %}
                {% if previous_count %}
                    <div class=\"linked\"><span><strong>{{ previous_count }}</strong> linked Exception{{ previous_count > 1 ? 's' : '' }}:</span>
                        <ul>
                            {% for i, previous in exception.allPrevious %}
                                <li>
                                    {{ previous.class|abbr_class }} <a href=\"#traces_link_{{ i + 1 }}\" onclick=\"toggle('traces_{{ i + 1 }}', 'traces'); switchIcons('icon_traces_{{ i + 1 }}_open', 'icon_traces_{{ i + 1 }}_close');\">&#187;</a>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                {% endif %}

                <div class=\"close_quote\">
                    <img alt=\"\" src=\"{{ asset('bundles/framework/images/close_quote.gif') }}\"/>
                </div>

            </div>
        </div>
    </div>

    {% for position, e in exception.toarray %}
        {% include 'TwigBundle:Exception:traces.html.twig' with { 'exception': e, 'position': position, 'count': previous_count } only %}
    {% endfor %}

    {% if logger %}
        <div class=\"block\">
            <div class=\"logs clear_fix\">
                {% spaceless %}
                <h2>
                    Logs&nbsp;
                    <a href=\"#\" onclick=\"toggle('logs'); switchIcons('icon_logs_open', 'icon_logs_close'); return false;\">
                        <img class=\"toggle\" id=\"icon_logs_open\" alt=\"+\" src=\"{{ asset('bundles/framework/images/blue_picto_more.gif') }}\" style=\"visibility: hidden\" />
                        <img class=\"toggle\" id=\"icon_logs_close\" alt=\"-\" src=\"{{ asset('bundles/framework/images/blue_picto_less.gif') }}\" style=\"visibility: visible; margin-left: -18px\" />
                    </a>
                </h2>
                {% endspaceless %}

                {% if logger.counterrors %}
                    <div class=\"error_count\">
                        <span>
                            {{ logger.counterrors }} error{{ logger.counterrors > 1 ? 's' : ''}}
                        </span>
                    </div>
                {% endif %}

            </div>

            <div id=\"logs\">
                {% include 'TwigBundle:Exception:logs.html.twig' with { 'logs': logger.logs } only %}
            </div>

        </div>
    {% endif %}

    {% if currentContent %}
        <div class=\"block\">
            {% spaceless %}
            <h2>
                Content of the Output&nbsp;
                <a href=\"#\" onclick=\"toggle('output_content'); switchIcons('icon_content_open', 'icon_content_close'); return false;\">
                    <img class=\"toggle\" id=\"icon_content_close\" alt=\"-\" src=\"{{ asset('bundles/framework/images/blue_picto_less.gif') }}\" style=\"visibility: hidden\" />
                    <img class=\"toggle\" id=\"icon_content_open\" alt=\"+\" src=\"{{ asset('bundles/framework/images/blue_picto_more.gif') }}\" style=\"visibility: visible; margin-left: -18px\" />
                </a>
            </h2>
            {% endspaceless %}

            <div id=\"output_content\" style=\"display: none\">
                {{ currentContent }}
            </div>

            <div style=\"clear: both\"></div>
        </div>
    {% endif %}

</div>

<script type=\"text/javascript\">//<![CDATA[
    function toggle(id, clazz) {
        var el = document.getElementById(id),
            current = el.style.display,
            i;

        if (clazz) {
            var tags = document.getElementsByTagName('*');
            for (i = tags.length - 1; i >= 0 ; i--) {
                if (tags[i].className === clazz) {
                    tags[i].style.display = 'none';
                }
            }
        }

        el.style.display = current === 'none' ? 'block' : 'none';
    }

    function switchIcons(id1, id2) {
        var icon1, icon2, visibility1, visibility2;

        icon1 = document.getElementById(id1);
        icon2 = document.getElementById(id2);

        visibility1 = icon1.style.visibility;
        visibility2 = icon2.style.visibility;

        icon1.style.visibility = visibility2;
        icon2.style.visibility = visibility1;
    }
//]]></script>
", "TwigBundle:Exception:exception.html.twig", "/var/www/FileUpload/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.html.twig");
    }
}

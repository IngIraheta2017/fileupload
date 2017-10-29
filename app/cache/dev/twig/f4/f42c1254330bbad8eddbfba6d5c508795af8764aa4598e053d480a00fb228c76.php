<?php

/* WebProfilerBundle:Collector:request.html.twig */
class __TwigTemplate_f2f67e22c77ef8951d4a96685b453960ea8a39d2ee6c4f26917047d7ef1a6706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "WebProfilerBundle:Collector:request.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 6
            echo "            ";
            $context["link"] = $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\CodeExtension')->getFileLink($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller", array()), "file", array()), $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller", array()), "line", array()));
            // line 7
            echo "            <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\">";
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\CodeExtension')->abbrClass($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller", array()), "class", array()));
            echo "</span>
            <span class=\"sf-toolbar-info-method\" onclick=\"";
            // line 8
            if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                echo "window.location='";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                echo "';window.event.stopPropagation();return false;";
            }
            echo "\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller", array()), "method", array()), "html", null, true);
            echo "
            </span>
        ";
        } else {
            // line 12
            echo "            <span class=\"sf-toolbar-info-class\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 14
        echo "    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "    ";
        $context["request_status_code_color"] = (((400 > $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode", array()))) ? ((((200 == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode", array()))) ? ("green") : ("yellow"))) : ("red"));
        // line 16
        echo "    ";
        $context["request_route"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "route", array())) ? ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "route", array())) : ("NONE"));
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        <img width=\"28\" height=\"28\" alt=\"Request\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAACvElEQVR42tVTbUhTYRTerDCnKVoUUr/KCZmypA9Koet0bXNLJ5XazDJ/WFaCUY0pExRZXxYiJgsxWWjkaL+yK+po1gjyR2QfmqWxtBmaBtqWGnabT++c11Fu4l/P4VzOPc95zoHznsNZodIbLDdRcKnc1Bu8DAK45ZsOnykQNMopsNooLxCknb0cDq5vml9FtHiIgpBR0R6iihYyFMTDt2Lg56ObPkI6TMGXSof1EV67IqCwisJSWliFAG/E0CfFIiebdNypcxi/1zgyFiIiZ3sJQr0RQx5frLa6k7SOKRo3oMFNR5t62h2rttKXEOKFqDCxtXNmmBokO2KKTlp3IdWuT2dYRNGKwEXEBCcL172G5FG0aIxC0kR9PBTVH1kkwQn+IqJnCE33EalVzT9GJQS1tAdD3CKicJYFrxqx7W2ejCEdZy1FiC5tZxHhLJKOZaRdQJAyV/YAvDliySALHxmxR4Hqe2iwvaOR/CEuZYJFSgYhVbZRkA8KGdEktrqnqra90NndCdkt77fjIHIhexOrfO6O3bbbOj/rqu5IptgyR3sU93QbOYhquZK4MCDp0Ina/PLsu5JvbCTRaapUdUmIV/RzoMdsk/0hWRNdAvKOmvqlN0drsJbJf1P4YsQ5lGrJeuosiOUgbOC8cto3LfOXTdVd7BqZsQKbse+0jUL6WPcesqs4MNSUTQAxGjwFiC8m3yzmqwHJBWYKBJ9WNqW/dHkpU/osch1Yj5RJfXPfSEe/2UPsN490NPfZG5CKyJmcV5ayHyzy7BMqsXfuHhGK/cjAIeSpR92gehR55D8TcQhDEKJwytBJ4fr4NULvrEM8NszfJPyxDoHYAQ1oPCWmIX4gifmDS/DV2DKeb25FHWr76yEG7/9L4YFPeiQQ4/8LkgJ8Et+NncTCsYqzXAEXa7CWdPZzGWdlyV+vST0JanfPvwAAAABJRU5ErkJggg==\"/>
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["request_status_code_color"]) ? $context["request_status_code_color"] : $this->getContext($context, "request_status_code_color")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode", array()), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["request_handler"]) ? $context["request_handler"] : $this->getContext($context, "request_handler")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-info-piece-additional-detail\">on <i>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["request_route"]) ? $context["request_route"] : $this->getContext($context, "request_route")), "html", null, true);
        echo "</i></span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        ob_start();
        // line 25
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Status Code</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["request_status_code_color"]) ? $context["request_status_code_color"] : $this->getContext($context, "request_status_code_color")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode", array()), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["request_handler"]) ? $context["request_handler"] : $this->getContext($context, "request_handler")), "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["request_route"]) ? $context["request_route"] : $this->getContext($context, "request_route")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 39
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata", array()))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 42
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        echo "    ";
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "WebProfilerBundle:Collector:request.html.twig", 43)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 46
    public function block_menu($context, array $blocks = array())
    {
        // line 47
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/webprofiler/images/profiler/request.png"), "html", null, true);
        echo "\" alt=\"Request\" /></span>
    <strong>Request</strong>
</span>
";
    }

    // line 53
    public function block_panel($context, array $blocks = array())
    {
        // line 54
        echo "    <h2>Request GET Parameters</h2>

    ";
        // line 56
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestquery", array()), "all", array()))) {
            // line 57
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig", "WebProfilerBundle:Collector:request.html.twig", 57)->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestquery", array())));
            // line 58
            echo "    ";
        } else {
            // line 59
            echo "        <p>
            <em>No GET parameters</em>
        </p>
    ";
        }
        // line 63
        echo "
    <h2>Request POST Parameters</h2>

    ";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestrequest", array()), "all", array()))) {
            // line 67
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig", "WebProfilerBundle:Collector:request.html.twig", 67)->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestrequest", array())));
            // line 68
            echo "    ";
        } else {
            // line 69
            echo "        <p>
            <em>No POST parameters</em>
        </p>
    ";
        }
        // line 73
        echo "
    <h2>Request Attributes</h2>

    ";
        // line 76
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestattributes", array()), "all", array()))) {
            // line 77
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig", "WebProfilerBundle:Collector:request.html.twig", 77)->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestattributes", array())));
            // line 78
            echo "    ";
        } else {
            // line 79
            echo "        <p>
            <em>No attributes</em>
        </p>
    ";
        }
        // line 83
        echo "
    <h2>Request Cookies</h2>

    ";
        // line 86
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestcookies", array()), "all", array()))) {
            // line 87
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig", "WebProfilerBundle:Collector:request.html.twig", 87)->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestcookies", array())));
            // line 88
            echo "    ";
        } else {
            // line 89
            echo "        <p>
            <em>No cookies</em>
        </p>
    ";
        }
        // line 93
        echo "
    <h2>Request Headers</h2>

    ";
        // line 96
        $this->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig", "WebProfilerBundle:Collector:request.html.twig", 96)->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestheaders", array())));
        // line 97
        echo "
    <h2>Request Content</h2>

    ";
        // line 100
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content", array()) == false)) {
            // line 101
            echo "        <p><em>Request content not available (it was retrieved as a resource).</em></p>
    ";
        } elseif ($this->getAttribute(        // line 102
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content", array())) {
            // line 103
            echo "        <pre>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content", array()), "html", null, true);
            echo "</pre>
    ";
        } else {
            // line 105
            echo "        <p><em>No content</em></p>
    ";
        }
        // line 107
        echo "
    <h2>Request Server Parameters</h2>

    ";
        // line 110
        $this->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig", "WebProfilerBundle:Collector:request.html.twig", 110)->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestserver", array())));
        // line 111
        echo "
    <h2>Response Headers</h2>

    ";
        // line 114
        $this->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig", "WebProfilerBundle:Collector:request.html.twig", 114)->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "responseheaders", array())));
        // line 115
        echo "
    <h2>Session Metadata</h2>

    ";
        // line 118
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata", array()))) {
            // line 119
            echo "    ";
            $this->loadTemplate("WebProfilerBundle:Profiler:table.html.twig", "WebProfilerBundle:Collector:request.html.twig", 119)->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata", array())));
            // line 120
            echo "    ";
        } else {
            // line 121
            echo "    <p>
        <em>No session metadata</em>
    </p>
    ";
        }
        // line 125
        echo "
    <h2>Session Attributes</h2>

    ";
        // line 128
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionattributes", array()))) {
            // line 129
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:table.html.twig", "WebProfilerBundle:Collector:request.html.twig", 129)->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionattributes", array())));
            // line 130
            echo "    ";
        } else {
            // line 131
            echo "        <p>
            <em>No session attributes</em>
        </p>
    ";
        }
        // line 135
        echo "
    <h2>Flashes</h2>

    ";
        // line 138
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "flashes", array()))) {
            // line 139
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:table.html.twig", "WebProfilerBundle:Collector:request.html.twig", 139)->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "flashes", array())));
            // line 140
            echo "    ";
        } else {
            // line 141
            echo "        <p>
            <em>No flashes</em>
        </p>
    ";
        }
        // line 145
        echo "
    ";
        // line 146
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent", array())) {
            // line 147
            echo "        <h2><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent", array()), "token", array()))), "html", null, true);
            echo "\">Parent request: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent", array()), "token", array()), "html", null, true);
            echo "</a></h2>

        ";
            // line 149
            $this->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig", "WebProfilerBundle:Collector:request.html.twig", 149)->display(array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent", array()), "getcollector", array(0 => "request"), "method"), "requestattributes", array())));
            // line 150
            echo "    ";
        }
        // line 151
        echo "
    ";
        // line 152
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()))) {
            // line 153
            echo "        <h2>Sub requests</h2>

        ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 156
                echo "            <h3><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "token", array()), "html", null, true);
                echo "</a></h3>
            ";
                // line 157
                $this->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig", "WebProfilerBundle:Collector:request.html.twig", 157)->display(array("bag" => $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "requestattributes", array())));
                // line 158
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "    ";
        }
        // line 160
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 160,  386 => 159,  380 => 158,  378 => 157,  371 => 156,  367 => 155,  363 => 153,  361 => 152,  358 => 151,  355 => 150,  353 => 149,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 135,  315 => 131,  312 => 130,  309 => 129,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 118,  283 => 115,  281 => 114,  276 => 111,  274 => 110,  269 => 107,  265 => 105,  259 => 103,  257 => 102,  254 => 101,  252 => 100,  247 => 97,  245 => 96,  240 => 93,  234 => 89,  231 => 88,  228 => 87,  226 => 86,  221 => 83,  215 => 79,  212 => 78,  209 => 77,  207 => 76,  202 => 73,  196 => 69,  193 => 68,  190 => 67,  188 => 66,  183 => 63,  177 => 59,  174 => 58,  171 => 57,  169 => 56,  165 => 54,  162 => 53,  154 => 48,  151 => 47,  148 => 46,  143 => 43,  140 => 42,  130 => 39,  123 => 35,  116 => 31,  107 => 27,  103 => 25,  100 => 24,  97 => 23,  92 => 21,  88 => 20,  82 => 19,  79 => 18,  76 => 17,  73 => 16,  70 => 15,  67 => 14,  61 => 12,  55 => 9,  47 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set request_handler %}
        {% if collector.controller.class is defined %}
            {% set link = collector.controller.file|file_link(collector.controller.line) %}
            <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\">{{ collector.controller.class|abbr_class }}</span>
            <span class=\"sf-toolbar-info-method\" onclick=\"{% if link %}window.location='{{link}}';window.event.stopPropagation();return false;{% endif %}\">
                {{ collector.controller.method }}
            </span>
        {% else %}
            <span class=\"sf-toolbar-info-class\">{{ collector.controller }}</span>
        {% endif %}
    {% endset %}
    {% set request_status_code_color = (400 > collector.statuscode) ? ((200 == collector.statuscode) ? 'green' : 'yellow') : 'red'%}
    {% set request_route = collector.route ? collector.route : 'NONE' %}
    {% set icon %}
        <img width=\"28\" height=\"28\" alt=\"Request\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAACvElEQVR42tVTbUhTYRTerDCnKVoUUr/KCZmypA9Koet0bXNLJ5XazDJ/WFaCUY0pExRZXxYiJgsxWWjkaL+yK+po1gjyR2QfmqWxtBmaBtqWGnabT++c11Fu4l/P4VzOPc95zoHznsNZodIbLDdRcKnc1Bu8DAK45ZsOnykQNMopsNooLxCknb0cDq5vml9FtHiIgpBR0R6iihYyFMTDt2Lg56ObPkI6TMGXSof1EV67IqCwisJSWliFAG/E0CfFIiebdNypcxi/1zgyFiIiZ3sJQr0RQx5frLa6k7SOKRo3oMFNR5t62h2rttKXEOKFqDCxtXNmmBokO2KKTlp3IdWuT2dYRNGKwEXEBCcL172G5FG0aIxC0kR9PBTVH1kkwQn+IqJnCE33EalVzT9GJQS1tAdD3CKicJYFrxqx7W2ejCEdZy1FiC5tZxHhLJKOZaRdQJAyV/YAvDliySALHxmxR4Hqe2iwvaOR/CEuZYJFSgYhVbZRkA8KGdEktrqnqra90NndCdkt77fjIHIhexOrfO6O3bbbOj/rqu5IptgyR3sU93QbOYhquZK4MCDp0Ina/PLsu5JvbCTRaapUdUmIV/RzoMdsk/0hWRNdAvKOmvqlN0drsJbJf1P4YsQ5lGrJeuosiOUgbOC8cto3LfOXTdVd7BqZsQKbse+0jUL6WPcesqs4MNSUTQAxGjwFiC8m3yzmqwHJBWYKBJ9WNqW/dHkpU/osch1Yj5RJfXPfSEe/2UPsN490NPfZG5CKyJmcV5ayHyzy7BMqsXfuHhGK/cjAIeSpR92gehR55D8TcQhDEKJwytBJ4fr4NULvrEM8NszfJPyxDoHYAQ1oPCWmIX4gifmDS/DV2DKeb25FHWr76yEG7/9L4YFPeiQQ4/8LkgJ8Et+NncTCsYqzXAEXa7CWdPZzGWdlyV+vST0JanfPvwAAAABJRU5ErkJggg==\"/>
        <span class=\"sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}\">{{ collector.statuscode }}</span>
        <span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">{{ request_handler }}</span>
        <span class=\"sf-toolbar-info-piece-additional-detail\">on <i>{{ request_route }}</i></span>
    {% endset %}
    {% set text %}
        {% spaceless %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Status Code</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}\">{{ collector.statuscode }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                {{ request_handler }}
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>{{ request_route }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>{% if collector.sessionmetadata|length %}yes{% else %}no{% endif %}</span>
            </div>
        {% endspaceless %}
    {% endset %}
    {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><img src=\"{{ asset('bundles/webprofiler/images/profiler/request.png') }}\" alt=\"Request\" /></span>
    <strong>Request</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Request GET Parameters</h2>

    {% if collector.requestquery.all|length %}
        {% include 'WebProfilerBundle:Profiler:bag.html.twig' with { 'bag': collector.requestquery } only %}
    {% else %}
        <p>
            <em>No GET parameters</em>
        </p>
    {% endif %}

    <h2>Request POST Parameters</h2>

    {% if collector.requestrequest.all|length %}
        {% include 'WebProfilerBundle:Profiler:bag.html.twig' with { 'bag': collector.requestrequest } only %}
    {% else %}
        <p>
            <em>No POST parameters</em>
        </p>
    {% endif %}

    <h2>Request Attributes</h2>

    {% if collector.requestattributes.all|length %}
        {% include 'WebProfilerBundle:Profiler:bag.html.twig' with { 'bag': collector.requestattributes } only %}
    {% else %}
        <p>
            <em>No attributes</em>
        </p>
    {% endif %}

    <h2>Request Cookies</h2>

    {% if collector.requestcookies.all|length %}
        {% include 'WebProfilerBundle:Profiler:bag.html.twig' with { 'bag': collector.requestcookies } only %}
    {% else %}
        <p>
            <em>No cookies</em>
        </p>
    {% endif %}

    <h2>Request Headers</h2>

    {% include 'WebProfilerBundle:Profiler:bag.html.twig' with { 'bag': collector.requestheaders } only %}

    <h2>Request Content</h2>

    {% if collector.content == false %}
        <p><em>Request content not available (it was retrieved as a resource).</em></p>
    {% elseif collector.content %}
        <pre>{{ collector.content }}</pre>
    {% else %}
        <p><em>No content</em></p>
    {% endif %}

    <h2>Request Server Parameters</h2>

    {% include 'WebProfilerBundle:Profiler:bag.html.twig' with { 'bag': collector.requestserver } only %}

    <h2>Response Headers</h2>

    {% include 'WebProfilerBundle:Profiler:bag.html.twig' with { 'bag': collector.responseheaders } only %}

    <h2>Session Metadata</h2>

    {% if collector.sessionmetadata|length %}
    {% include 'WebProfilerBundle:Profiler:table.html.twig' with { 'data': collector.sessionmetadata } only %}
    {% else %}
    <p>
        <em>No session metadata</em>
    </p>
    {% endif %}

    <h2>Session Attributes</h2>

    {% if collector.sessionattributes|length %}
        {% include 'WebProfilerBundle:Profiler:table.html.twig' with { 'data': collector.sessionattributes } only %}
    {% else %}
        <p>
            <em>No session attributes</em>
        </p>
    {% endif %}

    <h2>Flashes</h2>

    {% if collector.flashes|length %}
        {% include 'WebProfilerBundle:Profiler:table.html.twig' with { 'data': collector.flashes } only %}
    {% else %}
        <p>
            <em>No flashes</em>
        </p>
    {% endif %}

    {% if profile.parent %}
        <h2><a href=\"{{ path('_profiler', { 'token': profile.parent.token }) }}\">Parent request: {{ profile.parent.token }}</a></h2>

        {% include 'WebProfilerBundle:Profiler:bag.html.twig' with { 'bag': profile.parent.getcollector('request').requestattributes } only %}
    {% endif %}

    {% if profile.children|length %}
        <h2>Sub requests</h2>

        {% for child in profile.children %}
            <h3><a href=\"{{ path('_profiler', { 'token': child.token }) }}\">{{ child.token }}</a></h3>
            {% include 'WebProfilerBundle:Profiler:bag.html.twig' with { 'bag': child.getcollector('request').requestattributes } only %}
        {% endfor %}
    {% endif %}

{% endblock %}
", "WebProfilerBundle:Collector:request.html.twig", "/var/www/FileUpload/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/request.html.twig");
    }
}

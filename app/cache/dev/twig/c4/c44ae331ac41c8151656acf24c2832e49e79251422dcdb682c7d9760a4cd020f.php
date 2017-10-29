<?php

/* SwiftmailerBundle:Collector:swiftmailer.html.twig */
class __TwigTemplate_d0de42cbcd822b9cc0d3f20f454bb76d609da4738f8c28492e2150cf0e42593a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "SwiftmailerBundle:Collector:swiftmailer.html.twig", 1);
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
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messagecount", array())) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img width=\"23\" height=\"28\" alt=\"Swiftmailer\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAcCAYAAACK7SRjAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0NEOTU1MjM0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0NEOTU1MjQ0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxMEQ5OTQ5QzQ5OEMxMUUwODc3MkE1MTY4ODBDMzEzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3Q0Q5NTUyMjQ5OEUxMUUwODc3MkE1MTY4ODBDMzEzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PpkRnSAAAAJ0SURBVHjaYvz//z8DrQATAw3BqOFYAaO9vT1FBhw4cGCAXA5MipxBQUHT3r17l0AVAxkZ/wkLC89as2ZNIcjlYkALXKnlWqBZTH/+/PEDmQsynLW/v3+NoaHhN2oYDjJn8uTJK4BMNpDhPwsLCwOKiop2+fn5vafEYC8vrw8gc/Lz8wOB3B8gw/nev38vn5WV5eTg4LA/Ly/vESsrK2npmYmJITU19SnQ8L0gc4DxpwgyF2S4EEjB58+f+crLy31YWFjOt7S0XBYUFPxHjMEcHBz/6+rqboqJiZ0qKSnxBpkDlRICGc4MU/j792+2CRMm+L18+fLSxIkTDykoKPzBZ7CoqOi/np6eE8rKylvb29v9fvz4wYEkzYKRzjk5OX/LyMjcnDRpEkjjdisrK6wRraOj8wvokAMLFy788ejRoxcaGhrPCWai4ODgB8DUE3/mzBknYMToASNoMzAfvEVW4+Tk9LmhoWFbTU2NwunTpx2BjiiMjo6+hm4WCzJHUlLyz+vXrxkfP36sDOI/ffpUPikpibe7u3sLsJjQW7VqlSrQxe+Avjmanp7u9PbtWzGQOmCCkARmmu/m5uYfT548yY/V5UpKSl+2b9+uiiz26dMnIWBSDTp27NgdYGrYCIzwE7m5uR4wg2Hg/PnzSsDI/QlKOcjZ3wGUBLm5uf+DwLdv38gub4AG/xcSEvr35s0bZmCB5sgCE/z69SsjyDJKMtG/f/8YQQYD8wkoGf8H51AbG5sH1CpbQBnQ09PzBiiHgoIFFHlBQGwLxLxUMP8dqJgH4k3gIhfIkAKVYkDMTmmhCHIxEL8A4peMo02L4WU4QIABANxZAoDIQDv3AAAAAElFTkSuQmCC\" />
            <span class=\"sf-toolbar-status\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messageCount", array()), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Messages</b>
                <span>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messageCount", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Is spooled ?</b>
                <span>";
            // line 16
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "isSpool", array())) ? ("yes") : ("no"));
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 19
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "SwiftmailerBundle:Collector:swiftmailer.html.twig", 19)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 20
            echo "    ";
        }
    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        // line 24
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAYAAABaKIzgAAAEDElEQVR42u2XWUhUURjHy6isILAebO+lonpJ8qkHM3NFVFxAUVFM0RSXUKnwwdAQn3wQE0MyA1MwBEUQcxvHZTTTHNcZl9DUGqd0JBOzcsZ7+n8XJ0Z0GueOVwg68GfmnLn3O7/7Lee7s4cxZpHq6uos0bb3+Q+6DrG3u7v7RHt7u3tbW9uD5ubm8qamJnlDQ4NKIpG8HhkZOU3X7BYoD9Tb22sjk8mcWltb70ul0pcAegugBfzOjKmzs/MJ7j0kCujw8PBhADkAKAVAz+EZGYA+08bmCN79qdFo7sGmjaWg+wgIIUtoaWl5CqDmxsbGj7SJpYK3uYWFBRnsDmEfWyGg+zs6OkIBNEoGxVB9fT2bnZ1VIHff03xmZuY29rUyF9QWT6sWC5I0OTk5rVAo3unnSqXyEfa1Nhf0Kp5UKRYk8lsDD0oM1/r6+l5h32Pmgl5UqVTP5ubmlEgBHRlCobC8vDzm5eXFHB0dRZWzs/OXsLCwu5SCpkBPo4DaMVRI9rbp6Wk1vnP+/v5kaFfk4eGhAcdJU6Dn+/v7q9aTnpPL5YqVlRV5eXm5Fk+7Gx7lCgsL68Fx2RToWST7C8McQgr8yMrKWkLu/hQz/LDNIZojycnJb8BxwRTocYT8oSEoQs8bSkpK0k5MTGgiIiK4nYYMDg7mcBLIo6OjP9Ec44opUGvIF+eoTg/a1dX1x2BISMgyKncpLS1tbacgU1NT2djY2HxoaOi8fg3jhilQK+gmQvBVD4qQbzDs4+ND6bBWUFCgtRQyJyeHdwSKdcODY9zaTgu9jheMcWOgJFdXV1ZZWclqamp0bm5uQoqGVVRUrFHBuru782tCQC+hW0j/BkpCPlGXIY9wfn5+5hQN5T3dS+cz5btg0DNTU1NFpkBra2tZaWkpy8jIYOPj4ywmJmY7RcMGBwdZZmYmKykpoa7ELPGozeLiYrIetKenZ5OhuLg4ft3T05OfJyQk8LDp6el/LRq6JiUlheb8vXgzY7m5uYJBD0LeeDnRApQ8sKloqK3GxsZuWEPrYzhiWHFx8ZZFMzo6yiIjIw1DTTZ+qNXqMRcXF0GgVpADKltDoCisDcbj4+NZfn7+ll5D9fKeprYbFRXFwsPDWVVV1SodPwEBAVueEtnZ2QNIhTkhoKRrAxhb5WhRURFzcnIyGmIcX9rq6uoPq6urAzqdrresrGwIHtMZux62OOT6AD4FgZ5bXl5+DMhv6P16j/KhCwoK2vHO5O3t/SsxMfG7ENAjkAOUBUkMvMVDiiFKDSGge6Gj0CUoGmffpvwSEfg7dUch/0LtkWcdvr6+a2JDBgYG6tDt6DXPTgjoKegOVAo1QVKR1AgVQ8GQrRDQA+uw9ushuSWSyLYdQRr7K/JP6DcTwr8i7Fj8pwAAAABJRU5ErkJggg==\" alt=\"Configuration\" /></span>
    <strong>E-Mails</strong>
    <span class=\"count\">
        <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messagecount", array()), "html", null, true);
        echo "</span>
    </span>
</span>
";
    }

    // line 33
    public function block_panel($context, array $blocks = array())
    {
        // line 34
        echo "    <h2>Messages ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "isSpool", array())) ? ("spooled") : ("sent"));
        echo "</h2>

    ";
        // line 36
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array())) {
            // line 37
            echo "        <p>
            <em>No message sent.</em>
        </p>
    ";
        } else {
            // line 41
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array()));
            foreach ($context['_seq'] as $context["i"] => $context["message"]) {
                // line 42
                echo "            <h3>Message ";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messagecount", array()), "html", null, true);
                echo "</h3>

            ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["message"], "headers", array()), "all", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                    // line 45
                    echo "                <pre>";
                    echo twig_escape_filter($this->env, $context["header"], "html", null, true);
                    echo "</pre>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "
            <p>
                <pre>";
                // line 50
                if ($this->getAttribute($context["message"], "charset", array())) {
                    // line 51
                    echo twig_escape_filter($this->env, twig_convert_encoding(twig_escape_filter($this->env, $this->getAttribute($context["message"], "body", array()), "html", $this->getAttribute($context["message"], "charset", array())), "UTF-8", $this->getAttribute($context["message"], "charset", array())), "html", null, true);
                } else {
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "body", array()), "html");
                }
                // line 55
                echo "</pre>
            </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SwiftmailerBundle:Collector:swiftmailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 58,  147 => 55,  144 => 53,  141 => 51,  139 => 50,  135 => 47,  126 => 45,  122 => 44,  114 => 42,  109 => 41,  103 => 37,  101 => 36,  95 => 34,  92 => 33,  84 => 28,  78 => 24,  75 => 23,  70 => 20,  67 => 19,  61 => 16,  54 => 12,  50 => 10,  47 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
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
    {% if collector.messagecount %}
        {% set icon %}
            <img width=\"23\" height=\"28\" alt=\"Swiftmailer\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAcCAYAAACK7SRjAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0NEOTU1MjM0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0NEOTU1MjQ0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxMEQ5OTQ5QzQ5OEMxMUUwODc3MkE1MTY4ODBDMzEzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3Q0Q5NTUyMjQ5OEUxMUUwODc3MkE1MTY4ODBDMzEzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PpkRnSAAAAJ0SURBVHjaYvz//z8DrQATAw3BqOFYAaO9vT1FBhw4cGCAXA5MipxBQUHT3r17l0AVAxkZ/wkLC89as2ZNIcjlYkALXKnlWqBZTH/+/PEDmQsynLW/v3+NoaHhN2oYDjJn8uTJK4BMNpDhPwsLCwOKiop2+fn5vafEYC8vrw8gc/Lz8wOB3B8gw/nev38vn5WV5eTg4LA/Ly/vESsrK2npmYmJITU19SnQ8L0gc4DxpwgyF2S4EEjB58+f+crLy31YWFjOt7S0XBYUFPxHjMEcHBz/6+rqboqJiZ0qKSnxBpkDlRICGc4MU/j792+2CRMm+L18+fLSxIkTDykoKPzBZ7CoqOi/np6eE8rKylvb29v9fvz4wYEkzYKRzjk5OX/LyMjcnDRpEkjjdisrK6wRraOj8wvokAMLFy788ejRoxcaGhrPCWai4ODgB8DUE3/mzBknYMToASNoMzAfvEVW4+Tk9LmhoWFbTU2NwunTpx2BjiiMjo6+hm4WCzJHUlLyz+vXrxkfP36sDOI/ffpUPikpibe7u3sLsJjQW7VqlSrQxe+Avjmanp7u9PbtWzGQOmCCkARmmu/m5uYfT548yY/V5UpKSl+2b9+uiiz26dMnIWBSDTp27NgdYGrYCIzwE7m5uR4wg2Hg/PnzSsDI/QlKOcjZ3wGUBLm5uf+DwLdv38gub4AG/xcSEvr35s0bZmCB5sgCE/z69SsjyDJKMtG/f/8YQQYD8wkoGf8H51AbG5sH1CpbQBnQ09PzBiiHgoIFFHlBQGwLxLxUMP8dqJgH4k3gIhfIkAKVYkDMTmmhCHIxEL8A4peMo02L4WU4QIABANxZAoDIQDv3AAAAAElFTkSuQmCC\" />
            <span class=\"sf-toolbar-status\">{{ collector.messageCount }}</span>
        {% endset %}
        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Messages</b>
                <span>{{ collector.messageCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Is spooled ?</b>
                <span>{{ collector.isSpool ? 'yes' : 'no' }}</span>
            </div>
        {% endset %}
        {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}
    {% endif %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAYAAABaKIzgAAAEDElEQVR42u2XWUhUURjHy6isILAebO+lonpJ8qkHM3NFVFxAUVFM0RSXUKnwwdAQn3wQE0MyA1MwBEUQcxvHZTTTHNcZl9DUGqd0JBOzcsZ7+n8XJ0Z0GueOVwg68GfmnLn3O7/7Lee7s4cxZpHq6uos0bb3+Q+6DrG3u7v7RHt7u3tbW9uD5ubm8qamJnlDQ4NKIpG8HhkZOU3X7BYoD9Tb22sjk8mcWltb70ul0pcAegugBfzOjKmzs/MJ7j0kCujw8PBhADkAKAVAz+EZGYA+08bmCN79qdFo7sGmjaWg+wgIIUtoaWl5CqDmxsbGj7SJpYK3uYWFBRnsDmEfWyGg+zs6OkIBNEoGxVB9fT2bnZ1VIHff03xmZuY29rUyF9QWT6sWC5I0OTk5rVAo3unnSqXyEfa1Nhf0Kp5UKRYk8lsDD0oM1/r6+l5h32Pmgl5UqVTP5ubmlEgBHRlCobC8vDzm5eXFHB0dRZWzs/OXsLCwu5SCpkBPo4DaMVRI9rbp6Wk1vnP+/v5kaFfk4eGhAcdJU6Dn+/v7q9aTnpPL5YqVlRV5eXm5Fk+7Gx7lCgsL68Fx2RToWST7C8McQgr8yMrKWkLu/hQz/LDNIZojycnJb8BxwRTocYT8oSEoQs8bSkpK0k5MTGgiIiK4nYYMDg7mcBLIo6OjP9Ec44opUGvIF+eoTg/a1dX1x2BISMgyKncpLS1tbacgU1NT2djY2HxoaOi8fg3jhilQK+gmQvBVD4qQbzDs4+ND6bBWUFCgtRQyJyeHdwSKdcODY9zaTgu9jheMcWOgJFdXV1ZZWclqamp0bm5uQoqGVVRUrFHBuru782tCQC+hW0j/BkpCPlGXIY9wfn5+5hQN5T3dS+cz5btg0DNTU1NFpkBra2tZaWkpy8jIYOPj4ywmJmY7RcMGBwdZZmYmKykpoa7ELPGozeLiYrIetKenZ5OhuLg4ft3T05OfJyQk8LDp6el/LRq6JiUlheb8vXgzY7m5uYJBD0LeeDnRApQ8sKloqK3GxsZuWEPrYzhiWHFx8ZZFMzo6yiIjIw1DTTZ+qNXqMRcXF0GgVpADKltDoCisDcbj4+NZfn7+ll5D9fKeprYbFRXFwsPDWVVV1SodPwEBAVueEtnZ2QNIhTkhoKRrAxhb5WhRURFzcnIyGmIcX9rq6uoPq6urAzqdrresrGwIHtMZux62OOT6AD4FgZ5bXl5+DMhv6P16j/KhCwoK2vHO5O3t/SsxMfG7ENAjkAOUBUkMvMVDiiFKDSGge6Gj0CUoGmffpvwSEfg7dUch/0LtkWcdvr6+a2JDBgYG6tDt6DXPTgjoKegOVAo1QVKR1AgVQ8GQrRDQA+uw9ushuSWSyLYdQRr7K/JP6DcTwr8i7Fj8pwAAAABJRU5ErkJggg==\" alt=\"Configuration\" /></span>
    <strong>E-Mails</strong>
    <span class=\"count\">
        <span>{{ collector.messagecount }}</span>
    </span>
</span>
{% endblock %}

{% block panel %}
    <h2>Messages {{ collector.isSpool ? 'spooled' : 'sent' }}</h2>

    {% if not collector.messages %}
        <p>
            <em>No message sent.</em>
        </p>
    {% else %}
        {% for i, message in collector.messages %}
            <h3>Message {{ i + 1 }} / {{ collector.messagecount }}</h3>

            {% for header in message.headers.all %}
                <pre>{{ header }}</pre>
            {% endfor %}

            <p>
                <pre>
                    {%- if message.charset %}
                        {{- message.body|e('html', message.charset)|convert_encoding('UTF-8', message.charset) }}
                    {%- else %}
                        {{- message.body|e('html') }}
                    {%- endif -%}
                </pre>
            </p>
        {% endfor %}
    {% endif %}
{% endblock %}
", "SwiftmailerBundle:Collector:swiftmailer.html.twig", "/var/www/FileUpload/vendor/symfony/swiftmailer-bundle/Symfony/Bundle/SwiftmailerBundle/Resources/views/Collector/swiftmailer.html.twig");
    }
}

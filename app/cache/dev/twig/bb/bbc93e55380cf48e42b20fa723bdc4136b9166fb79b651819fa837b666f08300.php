<?php

/* FileFileBundle:Default:index.html.twig */
class __TwigTemplate_3ebb43eb1028892a10384a669fccc54f760784936a2b6c792bc7805df8d2987b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>FileUploads</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link href=\" ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/filefile/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/filefile/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\" ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/filefile/css/bootstrap-fileupload.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/filefile/css/bootstrap-fileupload.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>

    <body>
";
        // line 16
        if ( !array_key_exists("status", $context)) {
            // line 17
            echo "            <div class=\"row-fluid\">
                <div class=\"fileupload fileupload-new\" data-provides=\"fileupload\">
                    <div class=\"input-append\">
                        <form class=\"form\" method =\"POST\"  enctype=\"multipart/form-data\" action=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_file_homepage"), "html", null, true);
            echo "\">
                            <h2 class=\"form-signin-heading\">Please Upload</h2>
                            <div class=\"uneditable-input span6\">
                                <i class=\"icon-file fileupload-exists\"></i> 
                                <span class=\"fileupload-preview\"></span>
                            </div>
                            <span class=\"btn btn-file\">
                                <span class=\"fileupload-new\">Select file</span>
                                <span class=\"fileupload-exists\">Change</span>
                                <input type=\"file\" name=\"img\"/>
                            </span>
                            <button class=\"btn btn-primary fileupload-exists\" type=\"submit\">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
";
        } elseif ((        // line 36
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "success")) {
            // line 37
            echo "   ";
            if (array_key_exists("uploadedURL", $context)) {
                // line 38
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl((isset($context["uploadedURL"]) ? $context["uploadedURL"] : $this->getContext($context, "uploadedURL"))), "html", null, true);
                echo "\">
   ";
            }
        } else {
            // line 40
            echo " 
   ";
            // line 41
            if (array_key_exists("message", $context)) {
                // line 42
                echo "            <div class=\"alert alert-error\">
                <p>";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</p>
            </div>
   ";
            }
        }
        // line 47
        echo "
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/filefile/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/filefile/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/filefile/js/bootstrap-fileupload.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/filefile/js/bootstrap-fileupload.min.js"), "html", null, true);
        echo "\"></script>
        </body>";
    }

    public function getTemplateName()
    {
        return "FileFileBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 51,  112 => 50,  108 => 49,  104 => 48,  101 => 47,  94 => 43,  91 => 42,  89 => 41,  86 => 40,  79 => 38,  76 => 37,  74 => 36,  55 => 20,  50 => 17,  48 => 16,  41 => 12,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>FileUploads</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link href=\" {{asset('bundles/filefile/css/bootstrap.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('bundles/filefile/css/bootstrap-responsive.css')}}\" rel=\"stylesheet\">
        <link href=\" {{asset('bundles/filefile/css/bootstrap-fileupload.css')}}\" rel=\"stylesheet\">
        <link href=\" {{asset('bundles/filefile/css/bootstrap-fileupload.min.css')}}\" rel=\"stylesheet\">
    </head>

    <body>
{%if status is not defined %}
            <div class=\"row-fluid\">
                <div class=\"fileupload fileupload-new\" data-provides=\"fileupload\">
                    <div class=\"input-append\">
                        <form class=\"form\" method =\"POST\"  enctype=\"multipart/form-data\" action=\"{{path('file_file_homepage')}}\">
                            <h2 class=\"form-signin-heading\">Please Upload</h2>
                            <div class=\"uneditable-input span6\">
                                <i class=\"icon-file fileupload-exists\"></i> 
                                <span class=\"fileupload-preview\"></span>
                            </div>
                            <span class=\"btn btn-file\">
                                <span class=\"fileupload-new\">Select file</span>
                                <span class=\"fileupload-exists\">Change</span>
                                <input type=\"file\" name=\"img\"/>
                            </span>
                            <button class=\"btn btn-primary fileupload-exists\" type=\"submit\">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
{% elseif status=='success'%}
   {% if uploadedURL is defined%}
            <img src=\"{{asset(uploadedURL)}}\">
   {% endif %}
{% else %} 
   {% if message is defined%}
            <div class=\"alert alert-error\">
                <p>{{message}}</p>
            </div>
   {% endif %}
{% endif %}

            <script src=\"{{asset('bundles/filefile/js/jquery.js')}}\"></script>
            <script src=\"{{asset('bundles/filefile/js/bootstrap.js')}}\"></script>
            <script src=\"{{asset('bundles/filefile/js/bootstrap-fileupload.js')}}\"></script>
            <script src=\"{{asset('bundles/filefile/js/bootstrap-fileupload.min.js')}}\"></script>
        </body>", "FileFileBundle:Default:index.html.twig", "/var/www/FileUpload/src/File/FileBundle/Resources/views/Default/index.html.twig");
    }
}

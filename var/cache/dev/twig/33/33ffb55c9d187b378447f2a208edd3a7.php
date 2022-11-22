<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html.twig */
class __TwigTemplate_9a9cb40139bf4e7de973d3f22ca34e09 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <br><br>

    <div class=\"container-fluid\">
        <div class=\"col-md-6 offset-md-3\">
            <form action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create-task");
        echo "\" method=\"POST\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <input type=\"text\" class=\"form-control\" id=\"task\" name=\"task\" placeholder=\"Message name\" aria-label=\"Task name\">
                    </div>
                </div>
                <br>
                <button type=\"submit\" class=\"btn btn-primary\" style=\"min-width:140px;\">Create Message</button>
            </form>
        </div>

        <br>

        <div class=\"col-md-6 offset-md-3\">
            <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all");
        echo "\" class=\"btn btn-warning mb-1\" style=\"min-width:140px;\">
                See all Messages
            </a>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}

    <br><br>

    <div class=\"container-fluid\">
        <div class=\"col-md-6 offset-md-3\">
            <form action=\"{{ path('create-task') }}\" method=\"POST\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <input type=\"text\" class=\"form-control\" id=\"task\" name=\"task\" placeholder=\"Message name\" aria-label=\"Task name\">
                    </div>
                </div>
                <br>
                <button type=\"submit\" class=\"btn btn-primary\" style=\"min-width:140px;\">Create Message</button>
            </form>
        </div>

        <br>

        <div class=\"col-md-6 offset-md-3\">
            <a href=\"{{ path('all') }}\" class=\"btn btn-warning mb-1\" style=\"min-width:140px;\">
                See all Messages
            </a>
        </div>
    </div>

{% endblock %}", "index.html.twig", "/home/vikas/Documents/demo_proj/symfony/docker-symfony/templates/index.html.twig");
    }
}

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

/* all.html.twig */
class __TwigTemplate_b35788e2038151316f65dc76825a3586 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "all.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "all.html.twig", 1);
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

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 10
            echo "
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "
                <div class=\"alert alert-";
                // line 13
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " col-md-6 offset-md-3 col-xs-12\" role=\"alert\">
                    ";
                // line 14
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
        <div class=\"alert alert-warning col-md-6 offset-md-3 col-xs-12\" role=\"alert\">
            Completed tasks are marked with green colour.
        </div>

        <div class=\"col-md-6 offset-md-3 col-xs-12\">
            <ul class=\"list-group\">
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 28
            echo "
                    <li ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 29)) {
                echo " class=\"list-group-item list-group-item-success\" ";
            } else {
                echo " class=\"list-group-item\" ";
            }
            echo ">
                        ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo ".  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete-task", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-danger float-end m-1\">
                            Delete
                        </a>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update-status", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn btn-primary float-end m-1\">
                            Switch status
                        </a>
                    </li>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </ul>
        </div>

        <br>

        <div class=\"col-md-6 offset-md-3 col-xs-12\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination\">

                    ";
        // line 49
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 49, $this->source); })()));
        echo "

                </ul>
            </nav>
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 49,  149 => 40,  137 => 34,  131 => 31,  125 => 30,  117 => 29,  114 => 28,  110 => 27,  101 => 20,  94 => 18,  84 => 14,  80 => 13,  77 => 12,  73 => 11,  70 => 10,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}

    <br><br>

    <div class=\"container-fluid\">

        {% for label, messages in app.flashes %}

            {% for message in messages %}

                <div class=\"alert alert-{{ label }} col-md-6 offset-md-3 col-xs-12\" role=\"alert\">
                    {{ message }}
                </div>

            {% endfor %}

        {% endfor %}

        <div class=\"alert alert-warning col-md-6 offset-md-3 col-xs-12\" role=\"alert\">
            Completed tasks are marked with green colour.
        </div>

        <div class=\"col-md-6 offset-md-3 col-xs-12\">
            <ul class=\"list-group\">
                {% for task in tasks %}

                    <li {% if task.status %} class=\"list-group-item list-group-item-success\" {% else %} class=\"list-group-item\" {% endif %}>
                        {{ task.id }}.  {{ task.name }}
                        <a href=\"{{ path('delete-task', {id:task.id}) }}\" class=\"btn btn-danger float-end m-1\">
                            Delete
                        </a>
                        <a href=\"{{ path('update-status', {id:task.id}) }}\" class=\"btn btn-primary float-end m-1\">
                            Switch status
                        </a>
                    </li>

                {% endfor %}
            </ul>
        </div>

        <br>

        <div class=\"col-md-6 offset-md-3 col-xs-12\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination\">

                    {{ knp_pagination_render(tasks) }}

                </ul>
            </nav>
        </div>

    </div>

{% endblock %}", "all.html.twig", "/home/vikas/Documents/demo_proj/symfony/Symfony-5-CRUD-app/templates/all.html.twig");
    }
}

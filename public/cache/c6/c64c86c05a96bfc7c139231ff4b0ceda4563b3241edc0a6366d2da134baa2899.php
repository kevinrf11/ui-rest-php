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

/* details.html.twig */
class __TwigTemplate_fbb9e8fa9aa8f85dfa4b6e1c5800582645c9d315795a7b89ea1913e576db389d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "\t<div class=\"container full-container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 class=\"display-6 text-center\">Details of employee</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row justify-content-center mt-5\">
\t\t\t";
        // line 9
        if ((0 === twig_compare(($context["details"] ?? null), null))) {
            // line 10
            echo "\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t\tThe employee number is incorrect or not found in the database.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 16
            echo "\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Nombre</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Apellidos</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Género</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Departamento</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Cargo</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Salario</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Fecha de contratación</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Fecha de nacimiento</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 33
            echo twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "emp_no", [], "any", false, false, false, 33);
            echo "</th>
\t\t\t\t\t\t\t\t<td>";
            // line 34
            echo twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "first_name", [], "any", false, false, false, 34);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "last_name", [], "any", false, false, false, 35);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "gender", [], "any", false, false, false, 36);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "dept_name", [], "any", false, false, false, 37);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "title", [], "any", false, false, false, 38);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "salary", [], "any", false, false, false, 39);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "hire_date", [], "any", false, false, false, 40);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 41
            echo twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "birth_date", [], "any", false, false, false, 41);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
        }
        // line 47
        echo "\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 47,  107 => 41,  103 => 40,  99 => 39,  95 => 38,  91 => 37,  87 => 36,  83 => 35,  79 => 34,  75 => 33,  56 => 16,  48 => 10,  46 => 9,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "details.html.twig", "/var/www/html/ui-rest-php/public/templates/details.html.twig");
    }
}

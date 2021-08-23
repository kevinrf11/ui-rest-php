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

/* listEmp.html.twig */
class __TwigTemplate_44a5a49729bfd6d78d6a228e7ca70da2d0c6219b9422fafaf59ef69f8b693120 extends Template
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
        echo "<div class=\"container\">
    <div class=\"row justify-content-center mt-4\">
        <div class=\"col\">
            <h2 class=\"display-6 text-center\">List of employees</h2>
        </div>
    </div>
    <div class=\"row justify-content-center mt-2\">
        <div class=\"col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-8\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Nombre</th>
                        <th scope=\"col\">Apellidos</th>
                        <th scope=\"col\">Departamento</th>
                        <th scope=\"col\">Salario</th>
                        <th scope=\"col\">Cargo</th>
                        <th scope=\"col\">Fecha de contratación</th>
                    </tr>
                </thead>
                <tbody>
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
            // line 24
            echo "                        <tr id=";
            echo ("e-" . twig_get_attribute($this->env, $this->source, $context["emp"], "emp_no", [], "any", false, false, false, 24));
            echo " class=\"tr-emp\">
                            <th scope=\"row\">";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["emp"], "emp_no", [], "any", false, false, false, 25);
            echo "</th>
                            <td>";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["emp"], "first_name", [], "any", false, false, false, 26);
            echo "</td>
                            <td>";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["emp"], "last_name", [], "any", false, false, false, 27);
            echo "</td>
                            <td>";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["emp"], "dept_name", [], "any", false, false, false, 28);
            echo "</td>
                            <td>";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["emp"], "salary", [], "any", false, false, false, 29);
            echo "</td>
                            <td>";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["emp"], "title", [], "any", false, false, false, 30);
            echo "</td>
                            <td>";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["emp"], "hire_date", [], "any", false, false, false, 31);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </tbody>
            </table>
        </div>
    </div>
    <div class=\"row justify-content-center mt-2 mb-4\">
        <div class=\"col d-flex justify-content-center\">
            <button type=\"button\" id=\"createEmp\" class=\"btn btn-primary\">New employee</button>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "listEmp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  93 => 31,  89 => 30,  85 => 29,  81 => 28,  77 => 27,  73 => 26,  69 => 25,  64 => 24,  60 => 23,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "listEmp.html.twig", "/var/www/html/ui-rest-php/public/templates/listEmp.html.twig");
    }
}

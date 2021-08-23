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

/* createForm.html.twig */
class __TwigTemplate_21088d7fad71cce1e58894f50046e23834fadb48a08d70b95f3a974b53858b13 extends Template
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
\t\t\t\t<h2 class=\"display-6 text-center\">Create employee</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row justify-content-center mt-5\">
\t\t\t<div class=\"col-11 d-flex justify-content-center flex-column\">
\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-addon1\">First name</span>
\t\t\t\t\t<input type=\"text\" name=\"FirstName\" class=\"form-control\" placeholder=\"FirstName\" aria-label=\"FirstName\" aria-describedby=\"basic-addon1\">
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-addon2\">Last name</span>
\t\t\t\t\t<input type=\"text\"  name=\"LastName\" class=\"form-control\" placeholder=\"LastName\" aria-label=\"LastName\" aria-describedby=\"basic-addon2\">
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-addon3\">Birth date</span>
\t\t\t\t\t<input type=\"date\"  name=\"BirthDate\" class=\"form-control\" placeholder=\"BirthDate\" aria-label=\"BirthDate\" aria-describedby=\"basic-addon3\">
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t<label class=\"input-group-text\" for=\"genderSelect\">Gender</label>
\t\t\t\t\t<select class=\"form-select\" name=\"Gender\" id=\"genderSelect\">
\t\t\t\t\t\t<option selected>Choose...</option>
\t\t\t\t\t\t<option value=\"M\">Male</option>
\t\t\t\t\t\t<option value=\"F\">Female</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t<label class=\"input-group-text\" for=\"departmentSelect\">Department</label>
\t\t\t\t\t<select class=\"form-select\" name=\"Department\" id=\"departmentSelect\">
\t\t\t\t\t\t<option selected>Choose...</option>
\t\t\t\t\t\t<option value=\"d009\">d009 - Customer Service</option>
\t\t\t\t\t\t<option value=\"d005\">d005 - Development</option>
\t\t\t\t\t\t<option value=\"d002\">d002 - Finance</option>
\t\t\t\t\t\t<option value=\"d003\">d003 - Human Resources</option>
\t\t\t\t\t\t<option value=\"d001\">d001 - Marketing</option>
\t\t\t\t\t\t<option value=\"d004\">d004 - Production</option>
\t\t\t\t\t\t<option value=\"d006\">d006 - Quality Management</option>
\t\t\t\t\t\t<option value=\"d008\">d008 - Research</option>
\t\t\t\t\t\t<option value=\"d007\">d007 - Sales</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t<label class=\"input-group-text\" for=\"titleSelect\">Title</label>
\t\t\t\t\t<select class=\"form-select\" name=\"Title\" id=\"titleSelect\">
\t\t\t\t\t\t<option selected>Choose...</option>
\t\t\t\t\t\t<option value=\"Senior Engineer\">Senior Engineer</option>
\t\t\t\t\t\t<option value=\"Staff\">Staff</option>
\t\t\t\t\t\t<option value=\"Engineer\">Engineer</option>
\t\t\t\t\t\t<option value=\"Senior Staff\">Senior Staff</option>
\t\t\t\t\t\t<option value=\"Assistant Engineer\">Assistant Engineer</option>
\t\t\t\t\t\t<option value=\"Technique Leader\">Technique Leader</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t<span class=\"input-group-text\">Salary</span>
\t\t\t\t\t<input type=\"number\" name=\"Salary\" class=\"form-control\" aria-label=\"Salary\">
\t\t\t\t\t<span class=\"input-group-text\">.00</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-6 d-flex justify-content-center\">
\t\t\t\t<button type=\"button\" id=\"sendForm\" class=\"btn btn-primary\">Create</button>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "createForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "createForm.html.twig", "/var/www/html/ui-rest-php/public/templates/createForm.html.twig");
    }
}

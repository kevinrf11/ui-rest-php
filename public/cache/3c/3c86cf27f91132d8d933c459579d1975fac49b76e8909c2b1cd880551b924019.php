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

/* 404.html.twig */
class __TwigTemplate_d558d1798efd37b3d17c6ad18471822abd952db24175a9ac27a4a3bce20fc482 extends Template
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
            <h2  class=\"display-4 text-center\">Error 404 not found</h2>
        </div>
    </div>
      <div class=\"row justify-content-center mt-1\">
        <div class=\"col-8\">
            <p class=\"text-center\">
                ";
        // line 11
        echo ($context["message"] ?? null);
        echo "
            </p>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "404.html.twig", "/var/www/html/ui-rest-php/public/templates/404.html.twig");
    }
}

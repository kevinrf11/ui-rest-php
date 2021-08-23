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

/* header.html.twig */
class __TwigTemplate_1e92b6db7bc9f9bc46347cac6cf664c3876d63ed312a66421b83886f2728ea43 extends Template
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
        // line 1
        echo "<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"author\" content=\"Kevin RF\">
        <title>Prueba interfaz</title>
        <link rel=\"stylesheet\" href=\"/public/assets/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/public/assets/css/bootstrap.rtl.min.css\">
        <link rel=\"stylesheet\" href=\"/public/assets/css/index.css\">
    </head>
    <body>
    <div id=\"liveAlertPlaceholder\"></div>
";
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.html.twig", "/var/www/html/ui-rest-php/public/templates/header.html.twig");
    }
}

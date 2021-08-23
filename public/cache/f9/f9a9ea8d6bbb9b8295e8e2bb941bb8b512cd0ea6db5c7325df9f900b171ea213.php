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

/* footer.html.twig */
class __TwigTemplate_90ab50aae62830ec14142d13daa2dfb253e3834560db2319fc1c46d1cee532fd extends Template
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
        echo "    </body>
    <footer>
        <script src=\"/public/js/jquery-3.6.0.min.js\" ></script>
        <script src=\"/public/js/bootstrap.bundle.min.js\" ></script>
        <script src=\"/public/js/bootstrap.min.js\" ></script>
        <script src=\"/public/js/popper.min.js\"></script>
        <script src=\"/public/js/index.js\"></script>
    </footer>
</html>";
    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.html.twig", "/var/www/html/ui-rest-php/public/templates/footer.html.twig");
    }
}

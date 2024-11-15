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

/* default/template/faq/contact_us_component.twig */
class __TwigTemplate_df3d1209276e29ecd1e1e2529c6b3541 extends Template
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
        echo "<div class=\"row align-items-center justify-content-around bg-white py-5\">
\t<div class=\"col-md-4 col-10 row gap-4 wow animate__fadeIn\">
\t\t<h3 class=\"display-3 brand_primary fw-bold text-dark\">";
        // line 3
        echo ($context["title"] ?? null);
        echo "</h3>
    <p class=\"primarycolor\" >";
        // line 4
        echo ($context["subtitle"] ?? null);
        echo "</p>
\t   <a href=\"";
        // line 5
        echo ($context["link"] ?? null);
        echo "\">
\t\t<button class=\"btn btn-primary py-3 px-4 fs-4 w-auto border-0\" style=\"background-color:rgba(0, 33, 71, 1) !important;\">";
        // line 6
        echo ($context["buttonname"] ?? null);
        echo "</button>
\t\t</a>
\t</div>
\t<div class=\"col-md-4 col-sm-8 text-center wow animate__fadeIn\">
\t\t<img src=\"";
        // line 10
        echo ($context["thumb"] ?? null);
        echo "\" width=\"";
        echo ($context["width"] ?? null);
        echo "\" height=\"";
        echo ($context["height"] ?? null);
        echo "\"/>
\t</div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/faq/contact_us_component.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  60 => 10,  53 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/faq/contact_us_component.twig", "");
    }
}

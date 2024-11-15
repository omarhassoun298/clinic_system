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

/* default/template/extension/module/home/custom1.twig */
class __TwigTemplate_c7e9e9a6c1ec9567a3e135f8bbdd00ae extends Template
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
        echo "<div class=\"bootstrap-5-container\">
    <div class=\"row align-items-center justify-content-center\">
        <div class=\"col-md-4 col-sm-8 row text-center gap-4\">
            <h3 class=\"display-3 brand_primary\">WGo ahead,<br/>live your best life</h3>
            <p>It's your does-it-all finance platform to save you both time and money. Passive investing and active trading for stocks, ETFs, crypto - all in one place.</p>
            <div class=\"m-0\">
                <a href=\"#\"><img alt=\"Get it on Google Play\" src=\"";
        // line 7
        echo ($context["googleplay"] ?? null);
        echo "\" style=\"max-width: 150px; width: 150px; height: 45px;\"></a>
                <a href=\"#\"><img alt=\"Get it on App Store\" src=\"";
        // line 8
        echo ($context["appstore"] ?? null);
        echo "\" style=\"max-width: 150px; width: 150px; height: 45px;\"></a>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-8 text-center\">
            <img src=\"";
        // line 12
        echo ($context["img1"] ?? null);
        echo "\" />
        </div>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/extension/module/home/custom1.twig";
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
        return array (  56 => 12,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/home/custom1.twig", "");
    }
}

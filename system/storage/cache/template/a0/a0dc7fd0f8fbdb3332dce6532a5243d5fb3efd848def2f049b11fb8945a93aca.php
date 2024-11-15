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

/* default/template/extension/module/home/custom2.twig */
class __TwigTemplate_f73760c32a9f44971d2c268035c3220159f098ea4fff6e6f74f1f2587729fa46 extends Template
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
\t<div class=\"row align-items-center justify-content-center gap-3 brand_primary\">
\t\t<div class=\"text-center\">
\t\t\t<h3>What are you waiting for?</h3>
\t\t</div>
\t\t<div class=\"text-center\">
\t\t\t<h3 class=\"display-3\">Give all your money a place to grow.</h3>
\t\t</div>
\t\t<div>
            <div class=\"row justify-content-center mt-5 gap-3\">
                <a class=\"col-md-4 col-sm-8 text-decoration-none\" href=\"#\">
                    <div class=\"d-flex flex-column align-items-center justify-content-center gap-3 bg-white py-5\">
                        <div class=\"\"><img alt=\"Security scale image\" loading=\"lazy\" width=\"45\" height=\"45\" decoding=\"async\" data-nimg=\"1\" src=\"";
        // line 13
        echo ($context["img1"] ?? null);
        echo "\" style=\"color: transparent;\"></div>
                        <h3 class=\"brand_primary\">Create a Beta account</h3>
                        <span class=\"brand_primary\">setup your account and start investing</span>
                    </div>
                </a>
                <a class=\"col-md-4 col-sm-8 text-decoration-none\" href=\"#\">
                    <div class=\"d-flex flex-column align-items-center justify-content-center gap-3 bg-white py-5\">
                        <div class=\"\"><img alt=\"Security scale image\" loading=\"lazy\" width=\"45\" height=\"45\" decoding=\"async\" data-nimg=\"1\" src=\"";
        // line 20
        echo ($context["img2"] ?? null);
        echo "\" style=\"color: transparent;\"></div>
                        <h3 class=\"brand_primary\">FAQ</h3>
                        <span class=\"brand_primary\">View our most frequently asked questions</span>
                    </div>
                </a>
            </div>
\t\t</div>
\t</div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/extension/module/home/custom2.twig";
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
        return array (  61 => 20,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/home/custom2.twig", "");
    }
}

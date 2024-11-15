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

/* default/template/faq/category_list.twig */
class __TwigTemplate_bd4d4cd0c81d7375c86f1d14c96669c3 extends Template
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
        echo ($context["header"] ?? null);
        echo "
<style>
\t.primarycolor {
\t\tcolor: rgba(0, 33, 71, 1) !important;
\t}
</style>
<div class=\"bootstrap-5-container\">
\t<div class=\"row align-items-center justify-content-around bg-white py-5\">
\t\t<div class=\"col-md-4 col-10 row gap-4\">
\t\t\t<h3 class=\"display-3 brand_primary fw-bold text-dark\">How can we better support you?</h3>
\t\t\t<p>Search our knowledge base for answers to common questions.</p>
\t\t</div>
\t\t<div class=\"col-md-4 col-sm-8 text-center\">
\t\t\t<img src=\"https://help.sarwa.co/hc/theming_assets/01HZKSZWNKFY4M58K2269KN1H0\"/>
\t\t</div>
\t</div>
\t<div class=\"container-xl bg-light\">
        <div class=\"row bg-white my-5 p-5\">
            <div class=\"col-md-4\">
                <div class=\"card p-3 mb-2 border-0 shadow\">
                    <a href=\"#\" class=\"text-decoration-none text-center text-dark py-5 d-flex flex-column align-items-center justify-content-center gap-3 w-100\">
                        <img src=\"https://help.sarwa.co/hc/theming_assets/01HZKSZWWXNVMD3K5QS8EWQZF1\" class=\"mb-4\" style=\"width:100px;\"/>
                        <h3 class=\"primarycolor fs-2 fw-bolder\">Beta Invest</h3>
                        <p class=\"primarycolor\">Investing concepts, understanding your dashboard, and more about Sarwa Invest.</p>
                    </a>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card p-3 mb-2 border-0 shadow\">
                    <a href=\"#\" class=\"text-decoration-none text-center text-dark py-5 d-flex flex-column align-items-center justify-content-center gap-3 w-100\">
                        <img src=\"https://help.sarwa.co/hc/theming_assets/01HZKSZWWXNVMD3K5QS8EWQZF1\" class=\"mb-4\" style=\"width:100px;\"/>
                        <h3 class=\"primarycolor fs-2 fw-bolder\">Beta Invest</h3>
                        <p class=\"primarycolor\">Investing concepts, understanding your dashboard, and more about Sarwa Invest.</p>
                    </a>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card p-3 mb-2 border-0 shadow\">
                    <a href=\"#\" class=\"text-decoration-none text-center text-dark py-5 d-flex flex-column align-items-center justify-content-center gap-3 w-100\">
                        <img src=\"https://help.sarwa.co/hc/theming_assets/01HZKSZWWXNVMD3K5QS8EWQZF1\" class=\"mb-4\" style=\"width:100px;\"/>
                        <h3 class=\"primarycolor fs-2 fw-bolder\">Beta Invest</h3>
                        <p class=\"primarycolor\">Investing concepts, understanding your dashboard, and more about Sarwa Invest.</p>
                    </a>
                </div>
            </div>
        <div>
\t\t<div class=\"row justify-content-center bg-white my-5 p-5\">
\t\t\t<div class=\"col-md-4 d-flex justify-content-center\">
\t\t\t\t<a href=\"#\" class=\"text-decoration-none text-dark p-0 w-100\">
\t\t\t\t\t<div class=\"text-center shadow rounded p-5 d-flex flex-column align-items-center justify-content-center gap-3 h-100\">
\t\t\t\t\t\t<img src=\"https://help.sarwa.co/hc/theming_assets/01HZKSZWWXNVMD3K5QS8EWQZF1\" class=\"mb-4\" style=\"width:100px;\"/>
\t\t\t\t\t\t<h3 class=\"primarycolor fs-2 fw-bolder\">Beta Invest</h3>
\t\t\t\t\t\t<p class=\"primarycolor\">Investing concepts, understanding your dashboard, and more about Sarwa Invest.</p>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 d-flex justify-content-center\">
\t\t\t\t<a href=\"#\" class=\"text-decoration-none text-dark p-0 w-100\">
\t\t\t\t\t<div class=\"text-center shadow rounded p-5 d-flex flex-column align-items-center justify-content-center gap-3 h-100\">
\t\t\t\t\t\t<img src=\"https://help.sarwa.co/hc/theming_assets/01HZKSZX4A4HRWE6TKW34225H2\" class=\"mb-4\" style=\"width:100px;\"/>
\t\t\t\t\t\t<h3 class=\"primarycolor fs-2 fw-bolder\">Beta Invest Portfolios</h3>
\t\t\t\t\t\t<p class=\"primarycolor\">Our target portfolio allocations for the various risk levels</p>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 d-flex justify-content-center\">
\t\t\t\t<a href=\"#\" class=\"text-decoration-none text-dark p-0 w-100\">
\t\t\t\t\t<div class=\"text-center shadow rounded p-5 d-flex flex-column align-items-center justify-content-center gap-3 h-100\">
\t\t\t\t\t\t<img src=\"https://help.sarwa.co/hc/theming_assets/01HZKSZX96BDPYF2FKPRWSSAKM\" class=\"mb-4\" style=\"width:100px;\"/>
\t\t\t\t\t\t<h3 class=\"primarycolor fs-2 fw-bolder\">Beta Save</h3>
\t\t\t\t\t\t<p class=\"primarycolor\">More about Beta Save</p>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 d-flex justify-content-center\">
\t\t\t\t<a href=\"#\" class=\"text-decoration-none text-dark p-0 w-100\">
\t\t\t\t\t<div class=\"text-center shadow rounded p-5 d-flex flex-column align-items-center justify-content-center gap-3 h-100\">
\t\t\t\t\t\t<img src=\"https://help.sarwa.co/hc/theming_assets/01HZKSZWWXNVMD3K5QS8EWQZF1\" class=\"mb-4\" style=\"width:100px;\"/>
\t\t\t\t\t\t<h3 class=\"primarycolor fs-2 fw-bolder\">Beta Invest</h3>
\t\t\t\t\t\t<p class=\"primarycolor\">Investing concepts, understanding your dashboard, and more about Sarwa Invest.</p>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 d-flex justify-content-center\">
\t\t\t\t<a href=\"#\" class=\"text-decoration-none text-dark p-0 w-100\">
\t\t\t\t\t<div class=\"text-center shadow rounded p-5 d-flex flex-column align-items-center justify-content-center gap-3 h-100\">
\t\t\t\t\t\t<img src=\"https://help.sarwa.co/hc/theming_assets/01HZKSZX4A4HRWE6TKW34225H2\" class=\"mb-4\" style=\"width:100px;\"/>
\t\t\t\t\t\t<h3 class=\"primarycolor fs-2 fw-bolder\">Beta Invest Portfolios</h3>
\t\t\t\t\t\t<p class=\"primarycolor\">Our target portfolio allocations for the various risk levels</p>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 d-flex justify-content-center\">
\t\t\t\t<a href=\"#\" class=\"text-decoration-none text-dark p-0 w-100\">
\t\t\t\t\t<div class=\"text-center shadow rounded p-5 d-flex flex-column align-items-center justify-content-center gap-3 h-100\">
\t\t\t\t\t\t<img src=\"https://help.sarwa.co/hc/theming_assets/01HZKSZX96BDPYF2FKPRWSSAKM\" class=\"mb-4\" style=\"width:100px;\"/>
\t\t\t\t\t\t<h3 class=\"primarycolor fs-2 fw-bolder\">Beta Save</h3>
\t\t\t\t\t\t<p class=\"primarycolor\">More about Beta Save</p>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 d-flex justify-content-center\">
\t\t\t\t<a href=\"#\" class=\"text-decoration-none text-dark p-0 w-100\">
\t\t\t\t\t<div class=\"text-center shadow rounded p-5 d-flex flex-column align-items-center justify-content-center gap-3 h-100\">
\t\t\t\t\t\t<img src=\"https://help.sarwa.co/hc/theming_assets/01HZKSZWWXNVMD3K5QS8EWQZF1\" class=\"mb-4\" style=\"width:100px;\"/>
\t\t\t\t\t\t<h3 class=\"primarycolor fs-2 fw-bolder\">Beta Invest</h3>
\t\t\t\t\t\t<p class=\"primarycolor\">Investing concepts, understanding your dashboard, and more about Sarwa Invest.</p>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 d-flex justify-content-center\">
\t\t\t\t<a href=\"#\" class=\"text-decoration-none text-dark p-0 w-100\">
\t\t\t\t\t<div class=\"text-center shadow rounded p-5 d-flex flex-column align-items-center justify-content-center gap-3 h-100\">
\t\t\t\t\t\t<img src=\"https://help.sarwa.co/hc/theming_assets/01HZKSZX4A4HRWE6TKW34225H2\" class=\"mb-4\" style=\"width:100px;\"/>
\t\t\t\t\t\t<h3 class=\"primarycolor fs-2 fw-bolder\">Beta Invest Portfolios</h3>
\t\t\t\t\t\t<p class=\"primarycolor\">Our target portfolio allocations for the various risk levels</p>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 d-flex justify-content-center\">
\t\t\t\t<a href=\"#\" class=\"text-decoration-none text-dark p-0 w-100\">
\t\t\t\t\t<div class=\"text-center shadow rounded p-5 d-flex flex-column align-items-center justify-content-center gap-3 h-100\">
\t\t\t\t\t\t<img src=\"https://help.sarwa.co/hc/theming_assets/01HZKSZX96BDPYF2FKPRWSSAKM\" class=\"mb-4\" style=\"width:100px;\"/>
\t\t\t\t\t\t<h3 class=\"primarycolor fs-2 fw-bolder\">Beta Save</h3>
\t\t\t\t\t\t<p class=\"primarycolor\">More about Beta Save</p>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row align-items-center justify-content-around bg-white py-5\">
\t\t<div class=\"col-md-4 col-10 row gap-4\">
\t\t\t<h3 class=\"display-3 brand_primary fw-bold text-dark\">Still Have Questions?</h3>
\t\t\t<p class=\"primarycolor\">Our customer care team is here for you!</p>
            <button class=\"btn btn-primary py-3 px-4 fs-4 w-auto border-0\" style=\"background-color:rgba(0, 33, 71, 1) !important;\">Contact us</button>
\t\t</div>
\t\t<div class=\"col-md-4 col-sm-8 text-center\">
\t\t\t<img src=\"https://help.sarwa.co/hc/theming_assets/01HZKSZYFTZADMYWB2B4CEX2X4\"/>
\t\t</div>
\t</div>
</div>
";
        // line 142
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/faq/category_list.twig";
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
        return array (  181 => 142,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/faq/category_list.twig", "");
    }
}

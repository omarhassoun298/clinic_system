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

/* journal3/template/journal3/css.twig */
class __TwigTemplate_210abbfd3e3c3728854c30870c47464507be6e262c61768c48d227393acb3e13 extends Template
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
        echo "<style>
  ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMiniSearchDisplay"], "method", false, false, false, 2) == "page")) {
            // line 3
            echo "  .search-page .mini-search {
    --search-container-padding: ";
            // line 4
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMiniSearchDropdownPadding"], "method", false, false, false, 4);
            echo "px;
    --search-container-padding-outer: ";
            // line 5
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMiniSearchDropdownPaddingOuter"], "method", false, false, false, 5);
            echo "px;
  }
  ";
        }
        // line 8
        echo "

  ";
        // line 11
        echo "  ";
        if (((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["sectionShippingVisibility"], "method", false, false, false, 11) != "true") && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["sectionPaymentVisibility"], "method", false, false, false, 11) != "true"))) {
            // line 12
            echo "  .quick-checkout-wrapper .shipping-payment {
    display: none;
  }
  ";
        }
        // line 16
        echo "
</style>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/css.twig";
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
        return array (  68 => 16,  62 => 12,  59 => 11,  55 => 8,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/css.twig", "");
    }
}

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

/* journal3/template/common/search.twig */
class __TwigTemplate_75af9b01c725fc8fb5c9cf996747df666eff5b83c01bae196dfde7d87f969bac extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogSearchStatus"], "method", false, false, false, 1)) {
            // line 10
            echo "<div id=\"search\" class=\"dropdown search-dropdown-";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMiniSearchDisplay"], "method", false, false, false, 10);
            echo "\">
  <button class=\"dropdown-toggle search-trigger\" data-toggle=\"dropdown\" aria-label=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["searchStyleSearchPlaceholder"], "method", false, false, false, 11);
            echo "\"><span class=\"menu-icon\"></span></button>
  <div class=\"dropdown-menu j-dropdown color-scheme-__SEARCH_COLOR_SCHEME__\">
    <div class=\"header-search\">
      ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["searchStyleSearchCategoriesSelectorStatus"], "method", false, false, false, 14) && ($context["categories"] ?? null))) {
                // line 15
                echo "        <div class=\"search-categories dropdown drop-menu\">
          <div class=\"search-categories-button dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 16
                echo ((($context["category_id"] ?? null)) ? (($context["category"] ?? null)) : (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["searchStyleSearchCategories"], "method", false, false, false, 16)));
                echo "</div>
          <div class=\"dropdown-menu j-dropdown color-scheme-__SEARCH_CATEGORIES_COLOR_SCHEME__\">
            <ul class=\"j-menu\">
              <li data-category_id=\"0\" class=\"category-level-1 menu-item\"><a href=\"javascript:;\">";
                // line 19
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["searchStyleSearchCategories"], "method", false, false, false, 19);
                echo "</a></li>
              ";
                // line 20
                echo twig_call_macro($macros["_self"], "macro_renderSearchCategories", [$context, ($context["categories"] ?? null), ($context["category_id"] ?? null), 1], 20, $context, $this->getSourceContext());
                echo "
            </ul>
          </div>
        </div>
      ";
            }
            // line 25
            echo "      <label class=\"sr-only\" for=\"search-input-el\">";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["searchStyleSearchPlaceholder"], "method", false, false, false, 25);
            echo "</label>
      <input id=\"search-input-el\" type=\"text\" name=\"search\" value=\"";
            // line 26
            echo ($context["search"] ?? null);
            echo "\" placeholder=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["searchStyleSearchPlaceholder"], "method", false, false, false, 26);
            echo "\" class=\"search-input\" data-category_id=\"";
            echo ($context["category_id"] ?? null);
            echo "\"/>
      <button type=\"button\" class=\"search-button\" data-search-url=\"";
            // line 27
            echo ($context["search_url"] ?? null);
            echo "\" aria-label=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["searchStyleSearchPlaceholder"], "method", false, false, false, 27);
            echo "\"></button>
    </div>
  </div>
</div>
";
        }
    }

    // line 2
    public function macro_renderSearchCategories($__context__ = null, $__categories__ = null, $__category_id__ = null, $__index__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "context" => $__context__,
            "categories" => $__categories__,
            "category_id" => $__category_id__,
            "index" => $__index__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 3
            echo "  ";
            $context["journal3"] = twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "journal3", [], "any", false, false, false, 3);
            // line 4
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 5
                echo "    ";
                $context["classes"] = ["selected" => (twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 5) == ($context["category_id"] ?? null))];
                // line 6
                echo "    <li data-category_id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 6);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 6);
                echo " category-level-";
                echo ($context["index"] ?? null);
                echo " menu-item\"><a href=\"javascript:;\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 6);
                echo "</a></li>
    ";
                // line 7
                echo twig_call_macro($macros["_self"], "macro_renderSearchCategories", [($context["context"] ?? null), twig_get_attribute($this->env, $this->source, $context["category"], "items", [], "any", false, false, false, 7), ($context["category_id"] ?? null), (($context["index"] ?? null) + 1)], 7, $context, $this->getSourceContext());
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/common/search.twig";
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
        return array (  137 => 7,  126 => 6,  123 => 5,  118 => 4,  115 => 3,  99 => 2,  87 => 27,  79 => 26,  74 => 25,  66 => 20,  62 => 19,  56 => 16,  53 => 15,  51 => 14,  45 => 11,  40 => 10,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/search.twig", "");
    }
}

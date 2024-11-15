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

/* journal3/template/common/currency.twig */
class __TwigTemplate_0829fbc414e34a27210dc4aaac382d1c2679e96e31f4e83f9eeba71431c39f6f extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCurrencyStatus"], "method", false, false, false, 1)) {
            // line 2
            if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
                // line 3
                echo "<div id=\"currency\" class=\"currency\">
  <form action=\"";
                // line 4
                echo ($context["action"] ?? null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
    <div class=\"dropdown drop-menu\">
      <button type=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"currency-symbol-title\">
          ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                    // line 9
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 9) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 9) == ($context["code"] ?? null)))) {
                        // line 10
                        echo "          <span class=\"symbol\">";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 10);
                        echo "</span>
          <span class=\"currency-title\">";
                        // line 11
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 11);
                        echo "</span>
          <span class=\"currency-code\">";
                        // line 12
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 12);
                        echo "</span>
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 13
$context["currency"], "symbol_right", [], "any", false, false, false, 13) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 13) == ($context["code"] ?? null)))) {
                        // line 14
                        echo "          <span class=\"symbol\">";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 14);
                        echo "</span>
          <span class=\"currency-title\">";
                        // line 15
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 15);
                        echo "</span>
          <span class=\"currency-code\">";
                        // line 16
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 16);
                        echo "</span>
          ";
                    }
                    // line 18
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "        </span>
      </button>
      <div class=\"dropdown-menu j-dropdown\">
      <ul class=\"j-menu\">
        ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                    // line 24
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 24)) {
                        // line 25
                        echo "        <li class=\"menu-item\">
          <a class=\"currency-select\" data-name=\"";
                        // line 26
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 26);
                        echo "\" role=\"button\">
            <span class=\"currency-symbol\">";
                        // line 27
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 27);
                        echo "</span>
            <span class=\"currency-title-dropdown\">";
                        // line 28
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 28);
                        echo "</span>
            <span class=\"currency-code-dropdown\">";
                        // line 29
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 29);
                        echo "</span>
          </a>
        </li>
        ";
                    } else {
                        // line 33
                        echo "        <li class=\"menu-item\">
          <a class=\"currency-select\" data-name=\"";
                        // line 34
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 34);
                        echo "\" role=\"button\">
            <span class=\"currency-symbol\">";
                        // line 35
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 35);
                        echo "</span>
            <span class=\"currency-title-dropdown\">";
                        // line 36
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 36);
                        echo "</span>
            <span class=\"currency-code-dropdown\">";
                        // line 37
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 37);
                        echo "</span>
          </a>
        </li>
        ";
                    }
                    // line 41
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "      </ul>
      </div>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
                // line 46
                echo ($context["redirect"] ?? null);
                echo "\" />
  </form>
</div>
";
            }
            // line 49
            echo " 
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/common/currency.twig";
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
        return array (  169 => 49,  162 => 46,  156 => 42,  150 => 41,  143 => 37,  139 => 36,  135 => 35,  131 => 34,  128 => 33,  121 => 29,  117 => 28,  113 => 27,  109 => 26,  106 => 25,  103 => 24,  99 => 23,  93 => 19,  87 => 18,  82 => 16,  78 => 15,  73 => 14,  71 => 13,  67 => 12,  63 => 11,  58 => 10,  55 => 9,  51 => 8,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/currency.twig", "");
    }
}

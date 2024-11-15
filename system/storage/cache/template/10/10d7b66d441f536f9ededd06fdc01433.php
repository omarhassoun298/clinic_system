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

/* journal3/template/journal3/module/countdown.twig */
class __TwigTemplate_557698e6b75cbed4973bacd3c6577e86 extends Template
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
        echo "<div class=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 1);
        echo "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 2
        echo ($context["edit"] ?? null);
        echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        echo ($context["name"] ?? null);
        echo "\"></em></button>
  <div class=\"module-body\">
    ";
        // line 4
        if ((($context["title"] ?? null) || ($context["text"] ?? null))) {
            // line 5
            echo "   <div class=\"module-text\">
    <div>
      ";
            // line 7
            if (($context["title"] ?? null)) {
                // line 8
                echo "        <h3 class=\"title module-title\">";
                echo ($context["title"] ?? null);
                echo "</h3>
      ";
            }
            // line 10
            echo "      ";
            if (($context["text"] ?? null)) {
                // line 11
                echo "        <div class=\"countdown-text\">";
                echo ($context["text"] ?? null);
                echo "</div>
      ";
            }
            // line 13
            echo "    </div>
   </div>
    ";
        }
        // line 16
        echo "    <div class=\"countdown\" data-date=\"";
        echo ($context["date"] ?? null);
        echo "\">
      <div>00 <span>";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["countdownDay"], "method", false, false, false, 17);
        echo "</span></div>
      <div>00 <span>";
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["countdownHour"], "method", false, false, false, 18);
        echo "</span></div>
      <div>00 <span>";
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["countdownMin"], "method", false, false, false, 19);
        echo "</span></div>
      <div>00 <span>";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["countdownSec"], "method", false, false, false, 20);
        echo "</span></div>
    </div>
  </div>
  ";
        // line 23
        echo ($context["products"] ?? null);
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/module/countdown.twig";
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
        return array (  100 => 23,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  77 => 16,  72 => 13,  66 => 11,  63 => 10,  57 => 8,  55 => 7,  51 => 5,  49 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/countdown.twig", "");
    }
}

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

/* journal3/template/journal3/module/title.twig */
class __TwigTemplate_d5756966730a0922cd347b665c7202f4 extends Template
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
  <div class=\"title-wrapper\">
    ";
        // line 4
        if (($context["label"] ?? null)) {
            // line 5
            echo "      <div class=\"title-label\">";
            echo ($context["label"] ?? null);
            echo "</div>
    ";
        }
        // line 7
        echo "    ";
        if (($context["title"] ?? null)) {
            // line 8
            echo "      <div class=\"title-main\">
        <h3>";
            // line 9
            echo ($context["title"] ?? null);
            echo "</h3>
        ";
            // line 10
            if (($context["inline_button_text"] ?? null)) {
                // line 11
                echo "          <a class=\"btn title-inline-btn\" href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["inline_button_link"] ?? null), "href", [], "any", false, false, false, 11);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [($context["inline_button_link"] ?? null)], "method", false, false, false, 11);
                echo "><span>";
                echo ($context["inline_button_text"] ?? null);
                echo "</span></a>
        ";
            }
            // line 13
            echo "      </div>
    ";
        }
        // line 15
        echo "    <div class=\"title-divider\"></div>
    <div class=\"subtitle\">";
        // line 16
        echo ($context["subtitle"] ?? null);
        echo "</div>
    ";
        // line 17
        if ((($context["button_1_text"] ?? null) || ($context["button_2_text"] ?? null))) {
            // line 18
            echo "    <div class=\"title-buttons\">
      ";
            // line 19
            if (($context["button_1_text"] ?? null)) {
                // line 20
                echo "      <a class=\"btn title-btn-1\" href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["button_1_link"] ?? null), "href", [], "any", false, false, false, 20);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [($context["button_1_link"] ?? null)], "method", false, false, false, 20);
                echo "><span>";
                echo ($context["button_1_text"] ?? null);
                echo "</span></a>
      ";
            }
            // line 22
            echo "      ";
            if (($context["button_2_text"] ?? null)) {
                // line 23
                echo "      <a class=\"btn title-btn-2\" href=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["button_2_link"] ?? null), "href", [], "any", false, false, false, 23);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [($context["button_2_link"] ?? null)], "method", false, false, false, 23);
                echo "><span>";
                echo ($context["button_2_text"] ?? null);
                echo "</span></a>
      ";
            }
            // line 25
            echo "    </div>
    ";
        }
        // line 27
        echo "  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/module/title.twig";
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
        return array (  124 => 27,  120 => 25,  110 => 23,  107 => 22,  97 => 20,  95 => 19,  92 => 18,  90 => 17,  86 => 16,  83 => 15,  79 => 13,  69 => 11,  67 => 10,  63 => 9,  60 => 8,  57 => 7,  51 => 5,  49 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/title.twig", "");
    }
}

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

/* journal3/template/journal3/module/button.twig */
class __TwigTemplate_1b46f804aebfdb6c8e26f552ec2d29311e7bee5c46f303421e7f47384b7e8d21 extends Template
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
  ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "href", [], "any", false, false, false, 3)) {
            // line 4
            echo "    <a class=\"btn\" href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "href", [], "any", false, false, false, 4);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [($context["link"] ?? null)], "method", false, false, false, 4);
            echo ">";
            echo ($context["title"] ?? null);
            echo "</a>
  ";
        } else {
            // line 6
            echo "    <a class=\"btn\">";
            echo ($context["title"] ?? null);
            echo "</a>
  ";
        }
        // line 8
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/module/button.twig";
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
        return array (  66 => 8,  60 => 6,  50 => 4,  48 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/button.twig", "");
    }
}

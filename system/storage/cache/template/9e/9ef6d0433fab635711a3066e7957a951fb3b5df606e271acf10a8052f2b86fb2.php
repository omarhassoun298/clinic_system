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

/* journal3/template/journal3/module/newsletter.twig */
class __TwigTemplate_8cb6ddfa0843e67792171fd7c89b789bd7e2640f0c8afb334b8b1e38f0bb0a22 extends Template
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
        echo " ";
        echo ($context["color_scheme_module"] ?? null);
        echo "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 2
        echo ($context["edit"] ?? null);
        echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        echo ($context["name"] ?? null);
        echo "\"></em></button>
  ";
        // line 3
        if (($context["title"] ?? null)) {
            // line 4
            echo "    <h3 class=\"title module-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
  ";
        }
        // line 6
        echo "  <div class=\"module-body\">
    ";
        // line 7
        if (($context["text"] ?? null)) {
            // line 8
            echo "      <div class=\"newsletter-text\">";
            echo ($context["text"] ?? null);
            echo "</div>
    ";
        }
        // line 10
        echo "    <div class=\"newsletter-form\">
      <form action=\"";
        // line 11
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <div class=\"input-group ";
        // line 12
        echo ($context["color_scheme_input"] ?? null);
        echo "\">
          <label class=\"sr-only\" for=\"newsletter-input-el-";
        // line 13
        echo ($context["id"] ?? null);
        echo "\">";
        echo ($context["placeholder"] ?? null);
        echo "</label>
          <input id=\"newsletter-input-el-";
        // line 14
        echo ($context["id"] ?? null);
        echo "\" type=\"text\" name=\"email\" placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"form-control newsletter-email\"/>
          <span class=\"input-group-btn\">
              <button type=\"submit\" class=\"btn btn-primary\" ";
        // line 16
        if (((($context["buttonType"] ?? null) == "icon") && (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 16) && ($context["tooltipStatus"] ?? null)))) {
            echo "data-toggle=\"tooltip-hover\" data-tooltip-class=\"newsletter-tooltip-";
            echo ($context["module_id"] ?? null);
            echo "\" data-placement=\"";
            echo ($context["tooltipPosition"] ?? null);
            echo "\" title=\"";
            echo ($context["tooltipText"] ?? null);
            echo "\"";
        }
        echo " data-loading-text=\"<span>";
        echo ($context["buttonText"] ?? null);
        echo "</span>\"><span>";
        echo ($context["buttonText"] ?? null);
        echo "</span></button>
          </span>
        </div>
        ";
        // line 19
        if (($context["captcha"] ?? null)) {
            // line 20
            echo "        <div class=\"input-captcha\">";
            echo ($context["captcha"] ?? null);
            echo "</div>
        ";
        }
        // line 22
        echo "        ";
        if (($context["agree_data"] ?? null)) {
            // line 23
            echo "          <div class=\"checkbox\">
            <label for=\"newsletter-checkbox-el-";
            // line 24
            echo ($context["id"] ?? null);
            echo "\">
              <input id=\"newsletter-checkbox-el-";
            // line 25
            echo ($context["id"] ?? null);
            echo "\" type=\"checkbox\" name=\"agree\" value=\"1\"/>
              ";
            // line 26
            echo twig_get_attribute($this->env, $this->source, ($context["agree_data"] ?? null), "text", [], "any", false, false, false, 26);
            echo "
            </label>
          </div>
        ";
        }
        // line 30
        echo "      </form>
    </div>
  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/module/newsletter.twig";
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
        return array (  140 => 30,  133 => 26,  129 => 25,  125 => 24,  122 => 23,  119 => 22,  113 => 20,  111 => 19,  93 => 16,  86 => 14,  80 => 13,  76 => 12,  72 => 11,  69 => 10,  63 => 8,  61 => 7,  58 => 6,  52 => 4,  50 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/newsletter.twig", "");
    }
}

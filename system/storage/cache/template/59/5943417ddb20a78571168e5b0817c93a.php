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

/* journal3/template/common/language.twig */
class __TwigTemplate_f2b6a1c4c12ba21a268b8095e3fc67c6 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogLanguageStatus"], "method", false, false, false, 1)) {
            // line 2
            if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
                // line 3
                echo "<div id=\"language\" class=\"language\">
  <form action=\"";
                // line 4
                echo ($context["action"] ?? null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
    <div class=\"dropdown drop-menu\">
      <button type=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"language-flag-title\">
          ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 9
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 9) == ($context["code"] ?? null))) {
                        // line 10
                        echo "          <span class=\"symbol\" style=\"background-image: url('";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "journal3_language_image", [], "any", false, false, false, 10);
                        echo "')\"><img src=\"";
                        echo ($context["journal3_language_image_placeholder"] ?? null);
                        echo "\" width=\"";
                        echo ($context["journal3_language_image_width"] ?? null);
                        echo "\" height=\"";
                        echo ($context["journal3_language_image_height"] ?? null);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 10);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 10);
                        echo "\"/></span>
          <span class=\"language-title\">";
                        // line 11
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 11);
                        echo "</span>
          ";
                    }
                    // line 13
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "        </span>
      </button>
      <div class=\"dropdown-menu j-dropdown\">
      <ul class=\"j-menu\">
        ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 19
                    echo "        <li class=\"menu-item\">
          <a class=\"language-select\" ";
                    // line 20
                    if (($context["journal3_is_oc4"] ?? null)) {
                        echo "href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "href", [], "any", false, false, false, 20);
                        echo "\" ";
                    } else {
                        echo "role=\"button\"";
                    }
                    echo " data-name=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 20);
                    echo "\">
            <span class=\"language-flag\" style=\"background-image: url('";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "journal3_language_image", [], "any", false, false, false, 21);
                    echo "')\"><img src=\"";
                    echo ($context["journal3_language_image_placeholder"] ?? null);
                    echo "\" width=\"";
                    echo ($context["journal3_language_image_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["journal3_language_image_height"] ?? null);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 21);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 21);
                    echo "\"/></span>
            <span class=\"language-title-dropdown\">";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 22);
                    echo "</span>
          </a>
        </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "      </ul>
      </div>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
                // line 30
                echo ($context["redirect"] ?? null);
                echo "\" />
  </form>
</div>
";
            }
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/common/language.twig";
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
        return array (  139 => 30,  133 => 26,  123 => 22,  109 => 21,  97 => 20,  94 => 19,  90 => 18,  84 => 14,  78 => 13,  73 => 11,  58 => 10,  55 => 9,  51 => 8,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/language.twig", "");
    }
}

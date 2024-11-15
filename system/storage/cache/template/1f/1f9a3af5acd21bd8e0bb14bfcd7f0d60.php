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

/* journal3/template/journal3/module/blog_comments.twig */
class __TwigTemplate_5c634c675fddba0ea3ffd61cfa31a3f2 extends Template
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
        if (($context["items"] ?? null)) {
            // line 2
            echo "  <div class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 2);
            echo "\">
    <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
            // line 3
            echo ($context["edit"] ?? null);
            echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
            echo ($context["name"] ?? null);
            echo "\"></em></button>
    ";
            // line 4
            if (($context["title"] ?? null)) {
                // line 5
                echo "      <h3 class=\"title module-title\">";
                echo ($context["title"] ?? null);
                echo "</h3>
    ";
            }
            // line 7
            echo "    <div class=\"module-body\">
      ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                echo "        <div class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 9)], "method", false, false, false, 9);
                echo "\">
          <a class=\"side-image\" href=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 10);
                echo "\">
            <img src=\"https://s.gravatar.com/avatar/";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["item"], "avatar", [], "any", false, false, false, 11);
                echo "?s=";
                echo ($context["imageSize"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "subtitle", [], "any", false, false, false, 11);
                echo "\" width=\"";
                echo ($context["imageSize"] ?? null);
                echo "\" height=\"";
                echo ($context["imageSize"] ?? null);
                echo "\"/>
          </a>
          <div class=\"side-details\">
            <a class=\"side-title\" href=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 14);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 14);
                echo "</a>
            <div class=\"side-subtitle\">
              <span>";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["item"], "subtitle", [], "any", false, false, false, 16);
                echo "</span>
            </div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </div>
  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/module/blog_comments.twig";
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
        return array (  106 => 21,  95 => 16,  88 => 14,  74 => 11,  70 => 10,  65 => 9,  61 => 8,  58 => 7,  52 => 5,  50 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/blog_comments.twig", "");
    }
}

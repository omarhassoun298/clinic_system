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

/* journal3/template/journal3/module/icons_menu.twig */
class __TwigTemplate_d354753f298e22307d664d0997e72a160883f0f7171ffd9c38b7deadbbc475a4 extends Template
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
            echo "    <ul>
      ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                echo "        <li class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [twig_get_attribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 9)], "method", false, false, false, 9);
                echo "\">
          ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 10), "href", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "            <a ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 11) && ($context["tooltipStatus"] ?? null))) {
                        echo "data-toggle=\"tooltip-hover\" data-tooltip-class=\"icons-menu-tooltip-";
                        echo ($context["module_id"] ?? null);
                        echo "\" data-placement=\"";
                        echo ($context["tooltipPosition"] ?? null);
                        echo "\" data-selector=\"true\" data-title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 11);
                        echo "\"";
                    }
                    echo " title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 11);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 11), "href", [], "any", false, false, false, 11);
                    echo "\" ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 11)], "method", false, false, false, 11);
                    echo ">
              ";
                    // line 12
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 12) == "image")) {
                        // line 13
                        echo "                <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 13);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 13)) {
                            echo " srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 13);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 13);
                            echo " 2x\" ";
                        }
                        echo " width=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["imageDimensions"] ?? null), "width", [], "any", false, false, false, 13);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["imageDimensions"] ?? null), "height", [], "any", false, false, false, 13);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 13);
                        echo "\" class=\"info-block-img\"/>
              ";
                    }
                    // line 15
                    echo "              ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 15), "total", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 15), "classes", [], "any", false, false, false, 15)], "method", false, false, false, 15);
                    echo "
            </a>
          ";
                } else {
                    // line 18
                    echo "            <a href=\"javascript:;\">
              ";
                    // line 19
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 19) == "image")) {
                        // line 20
                        echo "                <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 20);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 20)) {
                            echo " srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 20);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 20);
                            echo " 2x\" ";
                        }
                        echo " width=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["imageDimensions"] ?? null), "width", [], "any", false, false, false, 20);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, ($context["imageDimensions"] ?? null), "height", [], "any", false, false, false, 20);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 20);
                        echo "\" class=\"info-block-img\"/>
              ";
                    }
                    // line 22
                    echo "              ";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 22), "total", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 22), "classes", [], "any", false, false, false, 22)], "method", false, false, false, 22);
                    echo "
            </a>
          ";
                }
                // line 25
                echo "        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </ul>
  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/module/icons_menu.twig";
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
        return array (  159 => 27,  152 => 25,  145 => 22,  125 => 20,  123 => 19,  120 => 18,  113 => 15,  93 => 13,  91 => 12,  72 => 11,  70 => 10,  65 => 9,  61 => 8,  58 => 7,  52 => 5,  50 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/icons_menu.twig", "");
    }
}

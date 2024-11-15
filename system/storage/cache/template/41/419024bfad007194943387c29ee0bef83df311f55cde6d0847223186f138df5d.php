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

/* journal3/template/journal3/module/image.twig */
class __TwigTemplate_1b00121398a96dae1566e3569b734e6c6baf93c4006c217dbcee47095863f4d5 extends Template
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
        echo "<div id=\"";
        echo ($context["id"] ?? null);
        echo "\" class=\"";
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
        if (($context["title"] ?? null)) {
            // line 4
            echo "    <h3 class=\"title module-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
  ";
        }
        // line 6
        echo "  <div class=\"module-body\">
    <a href=\"";
        // line 7
        echo ((twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "href", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "href", [], "any", false, false, false, 7), "javascript:;")) : ("javascript:;"));
        echo "\" ";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [($context["link"] ?? null)], "method", false, false, false, 7);
        echo ">
      ";
        // line 8
        if ((($context["type"] ?? null) != "icon")) {
            // line 9
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 9) && ($context["lazyLoad"] ?? null))) {
                // line 10
                echo "          <img src=\"";
                echo ($context["dummy_image"] ?? null);
                echo "\" data-src=\"";
                echo ($context["image"] ?? null);
                echo "\" ";
                if (($context["image2x"] ?? null)) {
                    echo "data-srcset=\"";
                    echo ($context["image"] ?? null);
                    echo " 1x, ";
                    echo ($context["image2x"] ?? null);
                    echo " 2x\" ";
                }
                echo " alt=\"";
                echo ($context["alt"] ?? null);
                echo "\" width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\" class=\"lazyload\"/>
        ";
            } else {
                // line 12
                echo "          <img src=\"";
                echo ($context["image"] ?? null);
                echo "\" ";
                if (($context["image2x"] ?? null)) {
                    echo "srcset=\"";
                    echo ($context["image"] ?? null);
                    echo " 1x, ";
                    echo ($context["image2x"] ?? null);
                    echo " 2x\" ";
                }
                echo " alt=\"";
                echo ($context["alt"] ?? null);
                echo "\" width=\"";
                echo ($context["image_width"] ?? null);
                echo "\" height=\"";
                echo ($context["image_height"] ?? null);
                echo "\"/>
        ";
            }
            // line 14
            echo "      ";
        } else {
            // line 15
            echo "        <em class=\"image-icon\"></em>
      ";
        }
        // line 17
        echo "    </a>
    ";
        // line 18
        if (($context["caption"] ?? null)) {
            // line 19
            echo "      <span class=\"image-caption\">";
            echo ($context["caption"] ?? null);
            echo "</span>
    ";
        }
        // line 21
        echo "  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/module/image.twig";
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
        return array (  132 => 21,  126 => 19,  124 => 18,  121 => 17,  117 => 15,  114 => 14,  94 => 12,  72 => 10,  69 => 9,  67 => 8,  61 => 7,  58 => 6,  52 => 4,  50 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/image.twig", "");
    }
}

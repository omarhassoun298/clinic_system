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

/* journal3/template/journal3/blog/posts.twig */
class __TwigTemplate_82c8796f5c7eed2c3d9bc4f1a798c63b extends Template
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
        echo ($context["header"] ?? null);
        echo "
";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 2) == "top")) {
            // line 3
            echo "  <h1 class=\"title page-title ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 3);
            echo "\">
    <span class=\"page-title-text\">
      ";
            // line 5
            echo ($context["heading_title"] ?? null);
            echo "
      ";
            // line 6
            if (($context["feed_url"] ?? null)) {
                // line 7
                echo "        <a class=\"blog-feed\" href=\"";
                echo ($context["feed_url"] ?? null);
                echo "\" target=\"_blank\"><span class=\"feed-text\">";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogFeedText"], "method", false, false, false, 7);
                echo "</span></a>
      ";
            }
            // line 9
            echo "    </span>
  </h1>
";
        }
        // line 12
        echo ($context["journal3_top"] ?? null);
        echo "
<div class=\"breadcrumbs ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["breadcrumbs_color_scheme"], "method", false, false, false, 13);
        echo "\">
  <ul class=\"breadcrumb\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </ul>
</div>
<div class=\"container blog-home\">
  <div class=\"row\">";
        // line 21
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\">
      ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 23) == "default")) {
            // line 24
            echo "        <h1 class=\"title page-title ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 24);
            echo "\">
          ";
            // line 25
            echo ($context["heading_title"] ?? null);
            echo "
          ";
            // line 26
            if (($context["feed_url"] ?? null)) {
                // line 27
                echo "            <a class=\"blog-feed\" href=\"";
                echo ($context["feed_url"] ?? null);
                echo "\" target=\"_blank\"><span class=\"feed-text\">";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogFeedText"], "method", false, false, false, 27);
                echo "</span></a>
          ";
            }
            // line 29
            echo "        </h1>
      ";
        }
        // line 31
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 32
        if (($context["category_description"] ?? null)) {
            // line 33
            echo "      <div class=\"category-description\">";
            echo ($context["category_description"] ?? null);
            echo "</div>
      ";
        }
        // line 35
        echo "      ";
        if (($context["posts"] ?? null)) {
            // line 36
            echo "        <div class=\"main-posts post-";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalPostView"], "method", false, false, false, 36);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalPostGridType"], "method", false, false, false, 36);
            echo "-grid\">
          ";
            // line 37
            echo ($context["posts"] ?? null);
            echo "
        </div>
        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">";
            // line 40
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 41
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        } else {
            // line 44
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 46
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 49
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 50
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 52
        echo ($context["journal3_rich_snippets"] ?? null);
        echo "
";
        // line 53
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/blog/posts.twig";
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
        return array (  194 => 53,  190 => 52,  185 => 50,  180 => 49,  172 => 46,  166 => 44,  160 => 41,  156 => 40,  150 => 37,  143 => 36,  140 => 35,  134 => 33,  132 => 32,  127 => 31,  123 => 29,  115 => 27,  113 => 26,  109 => 25,  104 => 24,  102 => 23,  97 => 21,  92 => 18,  81 => 16,  77 => 15,  72 => 13,  68 => 12,  63 => 9,  55 => 7,  53 => 6,  49 => 5,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/blog/posts.twig", "");
    }
}

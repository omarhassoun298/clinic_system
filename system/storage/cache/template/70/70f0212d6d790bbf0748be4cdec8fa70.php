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

/* journal3/template/journal3/module/product_blocks_reviews.twig */
class __TwigTemplate_b906e8dd7f6b83b02f91ecef72b0058e extends Template
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
        echo "<form class=\"form-horizontal\" id=\"form-review\">
  <div id=\"review\"></div>
  <h4>";
        // line 3
        echo ($context["text_write"] ?? null);
        echo "</h4>
  ";
        // line 4
        if (($context["review_status"] ?? null)) {
            // line 5
            echo "  ";
            if (($context["review_guest"] ?? null)) {
                // line 6
                echo "    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-name\">";
                // line 7
                echo ($context["entry_name"] ?? null);
                echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"name\" value=\"";
                // line 9
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-review\">";
                // line 13
                echo ($context["entry_review"] ?? null);
                echo "</label>
      <div class=\"col-sm-10\">
        <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
        <div class=\"help-block\">";
                // line 16
                echo ($context["text_note"] ?? null);
                echo "</div>
      </div>
    </div>
    <fieldset>
      <legend class=\"sr-only\">";
                // line 20
                echo ($context["entry_rating"] ?? null);
                echo "</legend>
      <div class=\"form-group required\">
        <label class=\"col-sm-2 control-label\">";
                // line 22
                echo ($context["entry_rating"] ?? null);
                echo "</label>

        <div class=\"col-sm-10 rate\">
          <span>";
                // line 25
                echo ($context["entry_bad"] ?? null);
                echo "</span>
          <input type=\"radio\" name=\"rating\" value=\"1\" aria-label=\"1\" title=\"1\"/>

          <input type=\"radio\" name=\"rating\" value=\"2\" aria-label=\"2\" title=\"2\"/>

          <input type=\"radio\" name=\"rating\" value=\"3\" aria-label=\"3\" title=\"3\"/>

          <input type=\"radio\" name=\"rating\" value=\"4\" aria-label=\"4\" title=\"4\"/>

          <input type=\"radio\" name=\"rating\" value=\"5\" aria-label=\"5\" title=\"5\"/>
          <span>";
                // line 35
                echo ($context["entry_good"] ?? null);
                echo "</span>
        </div>
      </div>
    </fieldset>
    ";
                // line 39
                echo ($context["captcha"] ?? null);
                echo "
    <div class=\"buttons clearfix\">
      <div class=\"pull-right\">
        <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 42
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
      </div>
    </div>
  ";
            } else {
                // line 46
                echo "    ";
                echo ($context["text_login"] ?? null);
                echo "
  ";
            }
            // line 48
            echo "  ";
        }
        // line 49
        echo "</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/module/product_blocks_reviews.twig";
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
        return array (  133 => 49,  130 => 48,  124 => 46,  115 => 42,  109 => 39,  102 => 35,  89 => 25,  83 => 22,  78 => 20,  71 => 16,  65 => 13,  58 => 9,  53 => 7,  50 => 6,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/product_blocks_reviews.twig", "");
    }
}

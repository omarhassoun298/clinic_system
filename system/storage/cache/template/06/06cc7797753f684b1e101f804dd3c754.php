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

/* journal3/template/journal3/module/popup.twig */
class __TwigTemplate_3c7a5564352ac3359d9fdc4a48d3fd0b extends Template
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
        if (($context["iframe"] ?? null)) {
            // line 2
            echo "  ";
            if ((($context["contentType"] ?? null) == "image")) {
                // line 3
                echo "    <div class=\"popup-content\">
      <img src=\"";
                // line 4
                echo ($context["image"] ?? null);
                echo "\" alt=\"\" width=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["imageDimensions"] ?? null), "width", [], "any", false, false, false, 4);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["imageDimensions"] ?? null), "height", [], "any", false, false, false, 4);
                echo "\"/>
    </div>
  ";
            } elseif ((            // line 6
($context["contentType"] ?? null) == "text")) {
                // line 7
                echo "    <div class=\"popup-content\">
      ";
                // line 8
                echo ($context["text"] ?? null);
                echo "
    </div>
  ";
            } else {
                // line 11
                echo "    ";
                echo ($context["content"] ?? null);
                echo "
  ";
            }
        } else {
            // line 14
            echo "  <div class=\"popup-wrapper ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 14);
            echo "\" data-options='";
            echo json_encode(($context["options"] ?? null));
            echo "'>
    <div class=\"journal-loading\"><em class=\"fa fa-spinner fa-spin\"></em></div>
    <div class=\"popup-container\">
      <div class=\"popup-body\">
        <div class=\"popup-inner-body\">
          <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
            // line 19
            echo ($context["edit"] ?? null);
            echo "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
            echo ($context["name"] ?? null);
            echo "\"></em></button>
          ";
            // line 20
            if (($context["closeButton"] ?? null)) {
                // line 21
                echo "            <button class=\"btn popup-close\" aria-label=\"Close\"></button>
          ";
            }
            // line 23
            echo "          ";
            if (($context["headerText"] ?? null)) {
                // line 24
                echo "            <div class=\"title popup-header\">";
                echo ($context["headerText"] ?? null);
                echo "</div>
          ";
            }
            // line 26
            echo "          ";
            if ((($context["ajax"] ?? null) && (($context["contentType"] ?? null) == "grid"))) {
                // line 27
                echo "            <iframe src=\"";
                echo ($context["iframe_src"] ?? null);
                echo "\" width=\"100%\" height=\"100%\" frameborder=\"0\" onload=\"update_popup_height(this)\"></iframe>
          ";
            } elseif ((            // line 28
($context["contentType"] ?? null) == "image")) {
                // line 29
                echo "            <div class=\"popup-content\">
              <img src=\"";
                // line 30
                echo ($context["image"] ?? null);
                echo "\" alt=\"\" width=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["imageDimensions"] ?? null), "width", [], "any", false, false, false, 30);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["imageDimensions"] ?? null), "height", [], "any", false, false, false, 30);
                echo "\"/>
            </div>
          ";
            } elseif ((            // line 32
($context["contentType"] ?? null) == "text")) {
                // line 33
                echo "            <div class=\"popup-content\">
              ";
                // line 34
                echo ($context["text"] ?? null);
                echo "
            </div>
          ";
            } else {
                // line 37
                echo "            <div class=\"popup-content\">
              ";
                // line 38
                echo ($context["content"] ?? null);
                echo "
            </div>
          ";
            }
            // line 41
            echo "          ";
            if (($context["footer"] ?? null)) {
                // line 42
                echo "            <div class=\"popup-footer\">";
                if ((($context["button1"] ?? null) || ($context["button2"] ?? null))) {
                    echo "<div class=\"popup-buttons\">
                  ";
                    // line 43
                    if (($context["button1"] ?? null)) {
                        // line 44
                        echo "                    <a class=\"btn btn-popup btn-popup-1\"";
                        if (twig_get_attribute($this->env, $this->source, ($context["button1Link"] ?? null), "href", [], "any", false, false, false, 44)) {
                            echo " href=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["button1Link"] ?? null), "href", [], "any", false, false, false, 44);
                            echo "\"";
                        }
                        echo "><span class=\"btn-text\">";
                        echo ($context["button1Text"] ?? null);
                        echo "</span></a>
                  ";
                    }
                    // line 46
                    echo "                  ";
                    if (($context["button2"] ?? null)) {
                        // line 47
                        echo "                    <a class=\"btn btn-popup btn-popup-2\"";
                        if (twig_get_attribute($this->env, $this->source, ($context["button2Link"] ?? null), "href", [], "any", false, false, false, 47)) {
                            echo " href=\"";
                            echo twig_get_attribute($this->env, $this->source, ($context["button2Link"] ?? null), "href", [], "any", false, false, false, 47);
                            echo "\"";
                        }
                        echo "><span class=\"btn-text\">";
                        echo ($context["button2Text"] ?? null);
                        echo "</span></a>
                  ";
                    }
                    // line 49
                    echo "                </div>";
                }
                if (( !($context["ajax"] ?? null) && ($context["doNotShowAgain"] ?? null))) {
                    echo "<label class=\"popup-dont-show\" for=\"popup-checkbox-el-";
                    echo ($context["id"] ?? null);
                    echo "\">
                  <input id=\"popup-checkbox-el-";
                    // line 50
                    echo ($context["id"] ?? null);
                    echo "\" type=\"checkbox\" ";
                    if (($context["doNotShowAgainChecked"] ?? null)) {
                        echo "checked";
                    }
                    echo ">
                  <span>";
                    // line 51
                    echo ($context["doNotShowAgainText"] ?? null);
                    echo "</span>
                </label>";
                }
                // line 52
                echo "</div>
          ";
            }
            // line 54
            echo "        </div>
      </div>
    </div>
    <div class=\"popup-bg ";
            // line 57
            if (($context["closeButton"] ?? null)) {
                echo "popup-bg-closable";
            }
            echo "\"></div>
  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/module/popup.twig";
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
        return array (  213 => 57,  208 => 54,  204 => 52,  199 => 51,  191 => 50,  183 => 49,  171 => 47,  168 => 46,  156 => 44,  154 => 43,  149 => 42,  146 => 41,  140 => 38,  137 => 37,  131 => 34,  128 => 33,  126 => 32,  117 => 30,  114 => 29,  112 => 28,  107 => 27,  104 => 26,  98 => 24,  95 => 23,  91 => 21,  89 => 20,  83 => 19,  72 => 14,  65 => 11,  59 => 8,  56 => 7,  54 => 6,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/popup.twig", "");
    }
}

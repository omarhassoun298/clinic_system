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

/* journal3/template/account/login.twig */
class __TwigTemplate_06693d1945aeff77c404f96bd3d525c8 extends Template
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
            echo "\"><span class=\"page-title-text\">";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 5
        echo "<div class=\"breadcrumbs ";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["breadcrumbs_color_scheme"], "method", false, false, false, 5);
        echo "\">
  <ul class=\"breadcrumb\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  </ul>
</div>
";
        // line 12
        echo ($context["journal3_top"] ?? null);
        echo "
<div id=\"account-login\" class=\"container\">
  ";
        // line 14
        if (($context["success"] ?? null)) {
            // line 15
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 17
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 20
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 21
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 23
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 29) == "default")) {
            // line 30
            echo "      <h1 class=\"title page-title ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 30);
            echo "\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 32
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row login-box\">
        ";
        // line 34
        if ( !twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 34)) {
            // line 35
            echo "        ";
            // line 47
            echo "        ";
        }
        // line 48
        echo "        <div class=\"col-sm-4\">
          <div class=\"well\">
            <h2 class=\"title\">";
        // line 50
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 51
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
            <div id=\"alert\" class=\"toast-container position-fixed top-0 end-0 p-3\"></div>
            <form action=\"";
        // line 53
        echo ((($context["journal3_is_oc4"] ?? null)) ? (($context["login"] ?? null)) : (($context["action"] ?? null)));
        echo "\" method=\"post\" ";
        if (($context["journal3_is_oc3"] ?? null)) {
            echo "enctype=\"multipart/form-data\"";
        }
        echo " class=\"login-form form-horizontal\" ";
        if (($context["journal3_is_oc4"] ?? null)) {
            echo "data-oc-toggle=\"ajax\"";
        }
        echo ">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 55
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 56
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 59
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 60
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                </div><a class=\"forgot-password\" href=\"";
        // line 61
        echo ($context["forgotten"] ?? null);
        echo "\" target=\"_top\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
              <div class=\"buttons\">
                <div class=\"pull-right\">
                  <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"<span>";
        // line 64
        echo ($context["button_login"] ?? null);
        echo "</span>\"><span>";
        echo ($context["button_login"] ?? null);
        echo "</span></button>
                </div>
              </div>
              ";
        // line 67
        if (($context["redirect"] ?? null)) {
            // line 68
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 70
        echo "            </form>
          </div>
        </div>
      </div>
      ";
        // line 74
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 75
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 77
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/account/login.twig";
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
        return array (  238 => 77,  233 => 75,  229 => 74,  223 => 70,  217 => 68,  215 => 67,  207 => 64,  199 => 61,  193 => 60,  189 => 59,  181 => 56,  177 => 55,  164 => 53,  159 => 51,  155 => 50,  151 => 48,  148 => 47,  146 => 35,  144 => 34,  138 => 32,  130 => 30,  128 => 29,  123 => 28,  120 => 27,  117 => 26,  114 => 25,  111 => 24,  108 => 23,  105 => 22,  103 => 21,  98 => 20,  92 => 18,  89 => 17,  83 => 15,  81 => 14,  76 => 12,  72 => 10,  61 => 8,  57 => 7,  51 => 5,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/login.twig", "");
    }
}

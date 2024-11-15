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

/* common/login.twig */
class __TwigTemplate_c16c7b0525ff73cda89db1c8e67c2e3a05db3965f3b39d8cf528623ccfc09d40 extends Template
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
<div id=\"content\">
  <div class=\"container-fluid\"><br/>
    <br/>
    <div class=\"row justify-content-center\">
      <div class=\"col-sm-10 col-md-8 col-lg-5\">
        <div class=\"card\">
          <div class=\"card-header\">
         <i class=\"fa-solid fa-lock\"></i> ";
        // line 9
        echo ($context["text_login"] ?? null);
        echo "
          </div>
          <div class=\"card-body\">
            ";
        // line 12
        if (($context["success"] ?? null)) {
            // line 13
            echo "            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
              <i class=\"fa fa-check-circle\"></i> ";
            // line 14
            echo ($context["success"] ?? null);
            echo "
              <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
            ";
        }
        // line 18
        echo "            ";
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
              <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 20
            echo ($context["error_warning"] ?? null);
            echo "
              <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
            ";
        }
        // line 24
        echo "            <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"mb-3\">
                <label for=\"input-username\" class=\"form-label\">";
        // line 26
        echo ($context["entry_username"] ?? null);
        echo "</label>
                <div class=\"input-group\">
                  <span class=\"input-group-text\"><i class=\"fa fa-user\"></i></span>
                  <input type=\"text\" name=\"username\" value=\"";
        // line 29
        echo ($context["username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-password\" class=\"form-label\">";
        // line 33
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <div class=\"input-group\">
                  <span class=\"input-group-text\"><i class=\"fa fa-lock\"></i></span>
                  <input type=\"password\" name=\"password\" value=\"";
        // line 36
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                </div>
                ";
        // line 43
        echo "              </div>
              <div class=\"text-end\">
                <button type=\"submit\" class=\"btn btn-primary\">
                  <i class=\"fa fa-key\"></i> ";
        // line 46
        echo ($context["button_login"] ?? null);
        echo "
                </button>
              </div>
              ";
        // line 49
        if (($context["redirect"] ?? null)) {
            // line 50
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 52
        echo "            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 59
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "common/login.twig";
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
        return array (  141 => 59,  132 => 52,  126 => 50,  124 => 49,  118 => 46,  113 => 43,  106 => 36,  100 => 33,  91 => 29,  85 => 26,  79 => 24,  72 => 20,  69 => 19,  66 => 18,  59 => 14,  56 => 13,  54 => 12,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/login.twig", "");
    }
}

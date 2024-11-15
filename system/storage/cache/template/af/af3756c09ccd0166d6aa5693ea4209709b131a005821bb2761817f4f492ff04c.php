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

/* user/user_form.twig */
class __TwigTemplate_bb73888ea0363412e18a5078138cae736fac93871ae8798798ad7e3d869b1411 extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-user\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
        </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 19
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-user\" action=\"";
        // line 21
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" >
          <fieldset>
            <legend>";
        // line 23
        echo ($context["text_user"] ?? null);
        echo "</legend>
            <div class=\"row mb-3 required\">
              <label for=\"input-username\" class=\"col-sm-2 col-form-label\">";
        // line 25
        echo ($context["entry_username"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"username\" value=\"";
        // line 27
        echo ($context["username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\"/>
                <div id=\"error-username\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-user-group\" class=\"col-sm-2 col-form-label\">";
        // line 32
        echo ($context["entry_user_group"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"user_group_id\" id=\"input-user-group\" class=\"form-select\">
                  ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user_group"]) {
            // line 36
            echo "                    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["user_group"], "user_group_id", [], "any", false, false, false, 36);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["user_group"], "user_group_id", [], "any", false, false, false, 36) == ($context["user_group_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["user_group"], "name", [], "any", false, false, false, 36);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </select>
              </div>
            </div>
            <div class=\"row mb-3 required\">
              <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 42
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"firstname\" value=\"";
        // line 44
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3 required\">
              <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 49
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"lastname\" value=\"";
        // line 51
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
                <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3 required\">
              <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 56
        echo ($context["entry_email"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"email\" value=\"";
        // line 58
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                <div id=\"error-email\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 63
        echo ($context["entry_image"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"card image\">
                  <img src=\"";
        // line 66
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/>
                  <div class=\"card-body\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 68
        echo ($context["button_edit"] ?? null);
        echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 69
        echo ($context["button_clear"] ?? null);
        echo "</button>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>Password</legend>
            <div class=\"row mb-3 required\">
              <label for=\"input-password\" class=\"col-sm-2 col-form-label\">";
        // line 78
        echo ($context["entry_password"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"password\" name=\"password\" value=\"";
        // line 80
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                <div id=\"error-password\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3 required\">
              <label for=\"input-confirm\" class=\"col-sm-2 col-form-label\">";
        // line 85
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"password\" name=\"confirm\" value=\"";
        // line 87
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>Other</legend>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 95
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"form-check form-switch form-switch-lg\">
                  <input type=\"hidden\" name=\"status\" value=\"0\"/>
                  <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 99
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                </div>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 109
        echo ($context["footer"] ?? null);
        echo " ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/user_form.twig";
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
        return array (  276 => 109,  261 => 99,  254 => 95,  241 => 87,  236 => 85,  226 => 80,  221 => 78,  209 => 69,  205 => 68,  196 => 66,  190 => 63,  180 => 58,  175 => 56,  165 => 51,  160 => 49,  150 => 44,  145 => 42,  139 => 38,  124 => 36,  120 => 35,  114 => 32,  104 => 27,  99 => 25,  94 => 23,  89 => 21,  84 => 19,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/user_form.twig", "");
    }
}

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

/* localisation/country_list.twig */
class __TwigTemplate_0ee4e1e7bb7261da4b41a2a522f35e6d51e8e5e01a64e1efd7b8fb9e2103f404 extends Template
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
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-country').toggleClass('d-none');\" class=\"btn btn-light d-md-none d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-country\" formaction=\"";
        // line 8
        echo ($context["delete"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" onclick=\"return confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-country\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 22
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label class=\"form-label\">";
        // line 25
        echo ($context["entry_name"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_name\" value=\"";
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
            </div>
            <div class=\"mb-3\">
              <label class=\"form-label\">";
        // line 28
        echo ($context["entry_iso_code_2"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_iso_code_2\" value=\"";
        echo ($context["filter_iso_code_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_iso_code_2"] ?? null);
        echo "\" id=\"input-iso-code-2\" class=\"form-control\"/>
            </div>
            <div class=\"mb-3\">
              <label class=\"form-label\">";
        // line 31
        echo ($context["entry_iso_code_3"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_iso_code_3\" value=\"";
        echo ($context["filter_iso_code_3"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_iso_code_3"] ?? null);
        echo "\" id=\"input-iso-code-3\" class=\"form-control\"/>
            </div>
            <div class=\"text-end\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 34
        echo ($context["button_filter"] ?? null);
        echo "</button>
              <button type=\"button\" id=\"button-clear\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> Clear</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 42
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div id=\"country\" class=\"card-body\">
            <form id=\"form-country\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        // line 44
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#country\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
                      <td class=\"text-start\"><a href=\"";
        // line 50
        echo ($context["sort_name"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_name"] ?? null);
        echo "</a></td>
                      <td class=\"text-start\"><a href=\"";
        // line 51
        echo ($context["sort_iso_code_2"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "iso_code_2")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_iso_code_2"] ?? null);
        echo "</a></td>
                      <td class=\"text-start\"><a href=\"";
        // line 52
        echo ($context["sort_iso_code_3"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "iso_code_3")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_iso_code_3"] ?? null);
        echo "</a></td>
                      <td class=\"text-end\">";
        // line 53
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 57
        if (($context["countries"] ?? null)) {
            // line 58
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 59
                echo "                        <tr>
                          <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 60);
                echo "\" class=\"form-check-input\"/></td>
                          <td class=\"text-start\">";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 61);
                echo "
                            <br/>
                            ";
                // line 63
                if (twig_get_attribute($this->env, $this->source, $context["country"], "status", [], "any", false, false, false, 63)) {
                    // line 64
                    echo "                              <small class=\"text-success\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</small>
                            ";
                } else {
                    // line 66
                    echo "                              <small class=\"text-danger\">";
                    echo ($context["text_disabled"] ?? null);
                    echo "</small>
                            ";
                }
                // line 68
                echo "                          </td>
                          <td class=\"text-start\">";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["country"], "iso_code_2", [], "any", false, false, false, 69);
                echo "</td>
                          <td class=\"text-start\">";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["country"], "iso_code_3", [], "any", false, false, false, 70);
                echo "</td>
                          <td class=\"text-end\"><a href=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["country"], "edit", [], "any", false, false, false, 71);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                    ";
        } else {
            // line 75
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"5\">";
            // line 76
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 79
        echo "                  </tbody>
                </table>
              </div>
              <div class=\"row\">
                <div class=\"col-sm-6 text-start\">";
        // line 83
        echo ($context["pagination"] ?? null);
        echo "</div>
                <div class=\"col-sm-6 text-end\">";
        // line 84
        echo ($context["results"] ?? null);
        echo "</div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-clear').on('click',function(){
  \tlocation = 'index.php?route=localisation/country&user_token=";
        // line 95
        echo ($context["user_token"] ?? null);
        echo "';
})
\$('#button-filter').on('click', function () {
    var url = '';

    var filter_name = \$('#input-name').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_iso_code_2 = \$('#input-iso-code-2').val();

    if (filter_iso_code_2) {
        url += '&filter_iso_code_2=' + encodeURIComponent(filter_iso_code_2);
    }

    var filter_iso_code_3 = \$('#input-iso-code-3').val();

    if (filter_iso_code_3) {
        url += '&filter_iso_code_3=' + encodeURIComponent(filter_iso_code_3);
    }

    location='index.php?route=localisation/country&user_token=";
        // line 118
        echo ($context["user_token"] ?? null);
        echo "'+ url;
});
//--></script>
";
        // line 121
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "localisation/country_list.twig";
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
        return array (  321 => 121,  315 => 118,  289 => 95,  275 => 84,  271 => 83,  265 => 79,  259 => 76,  256 => 75,  253 => 74,  242 => 71,  238 => 70,  234 => 69,  231 => 68,  225 => 66,  219 => 64,  217 => 63,  212 => 61,  208 => 60,  205 => 59,  200 => 58,  198 => 57,  191 => 53,  179 => 52,  167 => 51,  155 => 50,  146 => 44,  141 => 42,  130 => 34,  120 => 31,  110 => 28,  100 => 25,  94 => 22,  85 => 15,  74 => 13,  70 => 12,  65 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "localisation/country_list.twig", "");
    }
}
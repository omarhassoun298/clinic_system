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

/* clinic/patient_list.twig */
class __TwigTemplate_3e142bbbbd5c4a470067a651e8295d01763513e9e76f381d1b86d4a761984902 extends Template
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
        <a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\">
          <i class=\"fa-solid fa-plus\"></i>
        </a>
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" 
          onclick=\"confirm('";
        // line 10
        echo ($context["text_confirm"] ?? null);
        echo "') ? document.getElementById('form-doctor').submit() : false;\">
          <i class=\"fa-regular fa-trash-can\"></i>
        </button>
      </div>
      <h1>";
        // line 14
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "        <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-country\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 26
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label class=\"form-label\">Name</label> <input type=\"text\" name=\"filter_name\" value=\"";
        // line 29
        echo ($context["filter_name"] ?? null);
        echo "\" data-oc-target=\"autocomplete-name\" autocomplete=\"off\" placeholder=\"Enter Name\" id=\"input-name\" class=\"form-control\"/>
              <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
            </div>
            <div class=\"mb-3\">
              <label class=\"form-label\">Telephone</label> <input type=\"text\" name=\"filter_iso_code_2\" value=\"";
        // line 33
        echo ($context["filter_telephone"] ?? null);
        echo "\" placeholder=\"Enter Telephone\" id=\"input-telephone\" class=\"form-control\"/>
            </div>
            <div class=\"mb-3\">
              <label class=\"form-label\">";
        // line 36
        echo ($context["entry_iso_code_3"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_iso_code_3\" value=\"";
        echo ($context["filter_iso_code_3"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_iso_code_3"] ?? null);
        echo "\" id=\"input-iso-code-3\" class=\"form-control\"/>
            </div>
            <div class=\"text-end\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 39
        echo ($context["button_filter"] ?? null);
        echo "</button>
              <button type=\"button\" id=\"button-clear\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> Clear</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> Patient List</div>
          <div id=\"country\" class=\"card-body\">
              <form action=\"";
        // line 49
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-doctor\">
                  <div class=\"table-responsive\">
<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <th style=\"width: 1px;\" class=\"text-center\">
          <input type=\"checkbox\" class=\"form-check-input\" onclick=\"document.querySelectorAll('input[name*=\\'selected\\']').forEach(el => el.checked = this.checked);\" />
        </th>
        <th class=\"text-left\">Information</th>
        <th class=\"text-left\">Doctor</th>
        <th class=\"text-left\">Diagnosis</th>
        <th class=\"text-left\">Description</th>
        <th class=\"text-end\">Action</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 66
        if (($context["patients"] ?? null)) {
            // line 67
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["patients"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                // line 68
                echo "      <tr>
        <td class=\"text-center\">
          ";
                // line 70
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["patient"], "patient_id", [], "any", false, false, false, 70), ($context["selected"] ?? null))) {
                    // line 71
                    echo "          <input type=\"checkbox\" class=\"form-check-input\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["patient"], "patient_id", [], "any", false, false, false, 71);
                    echo "\" checked />
          ";
                } else {
                    // line 73
                    echo "          <input type=\"checkbox\" class=\"form-check-input\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["patient"], "patient_id", [], "any", false, false, false, 73);
                    echo "\" />
          ";
                }
                // line 75
                echo "        </td>
        <td class=\"text-left\">
          <table>
            <tbody>
              <tr>
                <td style=\"padding-right:3px;\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i></td>
                <td>";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "name", [], "any", false, false, false, 81);
                echo "</td>
              </tr>
              <tr>
                <td style=\"padding-right:3px;\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></td>
                <td>";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "email", [], "any", false, false, false, 85);
                echo "</td>
              </tr>
              <tr>
                <td style=\"padding-right:3px;\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></td>
                <td>";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "telephone", [], "any", false, false, false, 89);
                echo "</td>
              </tr>
            </tbody>
          </table>
        </td>
        <td class=\"text-left\">";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "doctor", [], "any", false, false, false, 94);
                echo "</td>
        <td class=\"text-left\">";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "diagnosis", [], "any", false, false, false, 95);
                echo "</td>
        <td class=\"text-left\">";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "description", [], "any", false, false, false, 96);
                echo "</td>
        <td class=\"text-end\">
          <a href=\"";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "edit", [], "any", false, false, false, 98);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\">
            <i class=\"fa fa-pencil\"></i>
          </a>
        </td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "      ";
        } else {
            // line 105
            echo "      <tr>
        <td class=\"text-center\" colspan=\"6\">";
            // line 106
            echo ($context["text_no_results"] ?? null);
            echo "</td>
      </tr>
      ";
        }
        // line 109
        echo "    </tbody>
  </table>
</div>

                  </div>
                </form>
                <div class=\"row\">
                  <div class=\"col-sm-6 text-start\">";
        // line 116
        echo ($context["pagination"] ?? null);
        echo "</div>
                  <div class=\"col-sm-6 text-end\">";
        // line 117
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=clinic/patient/autocomplete&user_token=";
        // line 129
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['patient_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});
</script>
<script type=\"text/javascript\"><!--
\$('#button-clear').on('click',function(){
  \tlocation = 'index.php?route=clinic/patient&user_token=";
        // line 148
        echo ($context["user_token"] ?? null);
        echo "';
})
\$('#button-filter').on('click', function () {
    var url = '';

    var filter_name = \$('#input-name').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    location='index.php?route=clinic/patient&user_token=";
        // line 159
        echo ($context["user_token"] ?? null);
        echo "'+ url;
});
//--></script>
";
        // line 162
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "clinic/patient_list.twig";
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
        return array (  320 => 162,  314 => 159,  300 => 148,  278 => 129,  263 => 117,  259 => 116,  250 => 109,  244 => 106,  241 => 105,  238 => 104,  224 => 98,  219 => 96,  215 => 95,  211 => 94,  203 => 89,  196 => 85,  189 => 81,  181 => 75,  175 => 73,  169 => 71,  167 => 70,  163 => 68,  158 => 67,  156 => 66,  136 => 49,  123 => 39,  113 => 36,  107 => 33,  100 => 29,  94 => 26,  85 => 19,  74 => 17,  70 => 16,  65 => 14,  58 => 10,  54 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "clinic/patient_list.twig", "");
    }
}

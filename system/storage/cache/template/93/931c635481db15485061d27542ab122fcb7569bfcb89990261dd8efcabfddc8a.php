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
class __TwigTemplate_1e3e7fb06db46f8ddcb1fc7f37ae2a88f901ce4050d1710ef454a795f7a43eff extends Template
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
              <label class=\"form-label\">Telephone</label> <input type=\"text\" name=\"filter_telephone\" value=\"";
        // line 33
        echo ($context["filter_telephone"] ?? null);
        echo "\" placeholder=\"Enter Telephone\"  data-oc-target=\"autocomplete-telephone\" autocomplete=\"off\" id=\"input-telephone\" class=\"form-control\"/>
              <ul id=\"autocomplete-telephone\" class=\"dropdown-menu\"></ul>
            </div>
            <div class=\"text-end\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 37
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
        // line 47
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-doctor\">
                  <div class=\"table-wrapper\" style=\"overflow-x: auto; max-height: 400px;\">
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
        // line 63
        if (($context["patients"] ?? null)) {
            // line 64
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["patients"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                // line 65
                echo "                        <tr>
                          <td class=\"text-center\">
                            ";
                // line 67
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["patient"], "patient_id", [], "any", false, false, false, 67), ($context["selected"] ?? null))) {
                    // line 68
                    echo "                            <input type=\"checkbox\" class=\"form-check-input\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["patient"], "patient_id", [], "any", false, false, false, 68);
                    echo "\" checked />
                            ";
                } else {
                    // line 70
                    echo "                            <input type=\"checkbox\" class=\"form-check-input\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["patient"], "patient_id", [], "any", false, false, false, 70);
                    echo "\" />
                            ";
                }
                // line 72
                echo "                          </td>
                          <td class=\"text-left\">
                            <table>
                              <tbody>
                                <tr>
                                  <td style=\"padding-right:3px;\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i></td>
                                  <td>";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "name", [], "any", false, false, false, 78);
                echo "</td>
                                </tr>
                                <tr>
                                  <td style=\"padding-right:3px;\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></td>
                                  <td>";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "email", [], "any", false, false, false, 82);
                echo "</td>
                                </tr>
                                <tr>
                                  <td style=\"padding-right:3px;\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></td>
                                  <td>";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "telephone", [], "any", false, false, false, 86);
                echo "</td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                          <td class=\"text-left\">";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "doctor", [], "any", false, false, false, 91);
                echo "</td>
                          <td class=\"text-left\">";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "diagnosis", [], "any", false, false, false, 92);
                echo "</td>
                          <td class=\"text-left\">";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "description", [], "any", false, false, false, 93);
                echo "</td>
                          <td class=\"text-end\">
                            <a href=\"";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["patient"], "edit", [], "any", false, false, false, 95);
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
            // line 101
            echo "                        ";
        } else {
            // line 102
            echo "                        <tr>
                          <td class=\"text-center\" colspan=\"6\">";
            // line 103
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                        </tr>
                        ";
        }
        // line 106
        echo "                      </tbody>
                    </table>
                  </div>
                </form>
                <div class=\"row\">
                  <div class=\"col-sm-6 text-start\">";
        // line 111
        echo ($context["pagination"] ?? null);
        echo "</div>
                  <div class=\"col-sm-6 text-end\">";
        // line 112
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
        // line 124
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
\$('input[name=\\'filter_telephone\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=clinic/patient/autocompleteTelephone&user_token=";
        // line 143
        echo ($context["user_token"] ?? null);
        echo "&filter_telephone=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['telephone'],
\t\t\t\t\t\tvalue: item['patient_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_telephone\\']').val(item['label']);
\t}
});
</script>
<script type=\"text/javascript\"><!--
\$('#button-clear').on('click',function(){
  \tlocation = 'index.php?route=clinic/patient&user_token=";
        // line 162
        echo ($context["user_token"] ?? null);
        echo "';
})
\$('#button-filter').on('click', function () {
    var url = '';

    var filter_name = \$('#input-name').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }
    var filter_telephone = \$('#input-telephone').val();

    if (filter_telephone) {
        url += '&filter_telephone=' + encodeURIComponent(filter_telephone);
    }

    location='index.php?route=clinic/patient&user_token=";
        // line 178
        echo ($context["user_token"] ?? null);
        echo "'+ url;
});
//--></script>
";
        // line 181
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
        return array (  335 => 181,  329 => 178,  310 => 162,  288 => 143,  266 => 124,  251 => 112,  247 => 111,  240 => 106,  234 => 103,  231 => 102,  228 => 101,  214 => 95,  209 => 93,  205 => 92,  201 => 91,  193 => 86,  186 => 82,  179 => 78,  171 => 72,  165 => 70,  159 => 68,  157 => 67,  153 => 65,  148 => 64,  146 => 63,  127 => 47,  114 => 37,  107 => 33,  100 => 29,  94 => 26,  85 => 19,  74 => 17,  70 => 16,  65 => 14,  58 => 10,  54 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "clinic/patient_list.twig", "");
    }
}

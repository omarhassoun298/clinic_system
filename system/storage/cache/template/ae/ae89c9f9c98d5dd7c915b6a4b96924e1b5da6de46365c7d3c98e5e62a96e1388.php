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

/* common/setting.twig */
class __TwigTemplate_cc0c625d7ecc85364cddde8389a648bfba80841cd25e6fb42b2c3eab60079472 extends Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\"  class=\"btn btn-primary\">
          <i class=\"fa fa-save\"></i>
        </button>
      </div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "        <li class=\"breadcrumb-item\"><a href=\"";
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
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "    <div class=\"alert alert-danger alert-dismissible fade show\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        // line 24
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "    <div class=\"alert alert-success alert-dismissible fade show\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        // line 29
        echo "    <div class=\"card\">
      <div class=\"card-header\">
        <i class=\"fa fa-pencil\"></i> ";
        // line 31
        echo ($context["text_edit"] ?? null);
        echo "
      </div>
      <div class=\"card-body\">
       <form action=\"";
        // line 34
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\">
          <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
              <a class=\"nav-link active\" id=\"tab-general-tab\" data-bs-toggle=\"tab\" href=\"#tab-general\" role=\"tab\" aria-controls=\"tab-general\" aria-selected=\"true\">";
        // line 37
        echo ($context["tab_general"] ?? null);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
              <a class=\"nav-link\" id=\"tab-nationalities-tab\" data-bs-toggle=\"tab\" href=\"#tab-nationalities\" role=\"tab\" aria-controls=\"tab-nationalities\" aria-selected=\"false\">Nationalities</a>
            </li>
          </ul>
          <div class=\"tab-content\" id=\"myTabContent\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3\">
                    <label for=\"input-country\" class=\"col-sm-2 col-form-label\">Default Country</label>
                    <div class=\"col-sm-10\">
                        <select name=\"module_setting_default_country_id\" id=\"input-country\" class=\"form-control\">
                            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 50
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 50) == ($context["module_setting_default_country_id"] ?? null))) {
                // line 51
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 51);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 51);
                echo "</option>
                                ";
            } else {
                // line 53
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 53);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 53);
                echo "</option>
                                ";
            }
            // line 55
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                        </select>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">Default Region / State</label>
                    <div class=\"col-sm-10\">
                        <select name=\"module_setting_default_zone_id\" id=\"input-zone\" class=\"form-control\">
                        </select>
                    </div>
                </div>

               <div class=\"row mb-3\">
                    <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">Default Nationality</label>
                    <div class=\"col-sm-10\">
                        <select name=\"module_setting_default_nationality\" class=\"form-control\">
                            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["module_setting_nationalities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["nationality"]) {
            // line 73
            echo "                                ";
            if (($context["nationality"] == ($context["module_setting_default_nationality"] ?? null))) {
                // line 74
                echo "                                    <option value=\"";
                echo $context["nationality"];
                echo "\" selected=\"selected\">";
                echo $context["nationality"];
                echo "</option>
                                ";
            } else {
                // line 76
                echo "                                    <option value=\"";
                echo $context["nationality"];
                echo "\">";
                echo $context["nationality"];
                echo "</option>
                                ";
            }
            // line 78
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nationality'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                        </select>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-nationalities\">
                <div class=\"table-responsive\">
                    <table id=\"nationalities\" class=\"table table-bordered table-hover\">
                        <tbody>
                            ";
        // line 87
        $context["nationality_row"] = 0;
        // line 88
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["module_setting_nationalities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["nationality"]) {
            // line 89
            echo "                            <tr id=\"nationality-row-";
            echo ($context["nationality_row"] ?? null);
            echo "\">
                                <td class=\"text-end\"><input type=\"text\" name=\"module_setting_nationalities[";
            // line 90
            echo ($context["nationality_row"] ?? null);
            echo "]\" value=\"";
            echo $context["nationality"];
            echo "\" placeholder=\"Nationality\" class=\"form-control\"/></td>
                                <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#nationality-row-";
            // line 91
            echo ($context["nationality_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                            ";
            // line 93
            $context["nationality_row"] = (($context["nationality_row"] ?? null) + 1);
            // line 94
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nationality'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                        </tbody>
                        <tfoot>
                            <tr>
                            <td></td>
                            <td class=\"text-end\"><button type=\"button\" id=\"button-nationality\" data-bs-toggle=\"tooltip\" title=\"Add Nationality\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
   var nationality_row = ";
        // line 111
        echo ($context["nationality_row"] ?? null);
        echo ";

    \$('#button-nationality').on('click', function () {
        html = '<tr id=\"nationality-row-' + nationality_row + '\">';
        html += '  <td class=\"text-end\"><input type=\"text\" name=\"module_setting_nationalities[' + nationality_row + ']\" value=\"\" placeholder=\"Nationality\" class=\"form-control\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#nationality-row-' + nationality_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 116
        echo twig_escape_filter($this->env, ($context["button_remove"] ?? null), "js");
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#nationalities tbody').append(html);

        var inputName = \"module_setting_nationalities[\" + nationality_row + \"]\";
        \$('input[name=\"' + inputName + '\"]').focus();

        nationality_row++;
    });
  </script>
  <script type=\"text/javascript\">
    \$('select[name=\"module_setting_default_country_id\"]').on('change', function() {
      \$.ajax({
        url: 'index.php?route=localisation/country/country&user_token=";
        // line 130
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
          \$('select[name=\"module_setting_default_country_id\"]').prop('disabled', true);
        },
        complete: function() {
          \$('select[name=\"module_setting_default_country_id\"]').prop('disabled', false);
        },
        success: function(json) {
          let html = '<option value=\"\">";
        // line 139
        echo ($context["text_select"] ?? null);
        echo "</option>';
          if (json['zone'] && json['zone'] !== '') {
            for (let i = 0; i < json['zone'].length; i++) {
              html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';
              if (json['zone'][i]['zone_id'] == '";
        // line 143
        echo ($context["module_setting_default_zone_id"] ?? null);
        echo "') {
                html += ' selected=\"selected\"';
              }
              html += '>' + json['zone'][i]['name'] + '</option>';
            }
          } else {
            html += '<option value=\"0\" selected=\"selected\">";
        // line 149
        echo ($context["text_none"] ?? null);
        echo "</option>';
          }
          \$('select[name=\"module_setting_default_zone_id\"]').html(html);
          \$('#button-save').prop('disabled', false);
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    });

    \$('select[name=\"module_setting_default_country_id\"]').trigger('change');
  </script>
</div>
";
        // line 163
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "common/setting.twig";
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
        return array (  338 => 163,  321 => 149,  312 => 143,  305 => 139,  293 => 130,  276 => 116,  268 => 111,  250 => 95,  244 => 94,  242 => 93,  235 => 91,  229 => 90,  224 => 89,  219 => 88,  217 => 87,  207 => 79,  201 => 78,  193 => 76,  185 => 74,  182 => 73,  178 => 72,  160 => 56,  154 => 55,  146 => 53,  138 => 51,  135 => 50,  131 => 49,  116 => 37,  110 => 34,  104 => 31,  100 => 29,  92 => 25,  89 => 24,  81 => 20,  79 => 19,  73 => 15,  62 => 13,  58 => 12,  53 => 10,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/setting.twig", "");
    }
}

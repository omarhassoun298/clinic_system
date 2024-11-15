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

/* extension/module/modification_manager/list.twig */
class __TwigTemplate_06e3cb8bfb97a3e2a25918dcb89b7c076bf8766aadae9271338d7478d69f0d88 extends Template
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
      <div class=\"pull-right\">
        <a href=\"";
        // line 6
        echo ($context["refresh"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-refresh\"></i></a>
      \t<a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        ";
        // line 8
        if (($context["import_url"] ?? null)) {
            echo "<a href=\"";
            echo ($context["import_url"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_import"] ?? null);
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-file\"></i></a>";
        }
        // line 9
        echo "      \t<a href=\"";
        echo ($context["clear"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_clear"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-eraser\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 10
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-modification').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
       ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 21
        if (($context["error_warning"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 27
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 31
        echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        echo ($context["text_refresh"] ?? null);
        echo "</div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 34
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
          <li><a href=\"#tab-log\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_log"] ?? null);
        echo "</a></li>
          ";
        // line 40
        if (($context["modified_files"] ?? null)) {
            echo "<li><a href=\"#tab-files\" data-toggle=\"tab\">";
            echo ($context["tab_files"] ?? null);
            echo "</a></li>";
        }
        // line 41
        echo "          ";
        if (($context["error_log"] ?? null)) {
            echo "<li><a href=\"#tab-error\" data-toggle=\"tab\">";
            echo ($context["tab_error"] ?? null);
            echo "</a></li>";
        }
        // line 42
        echo "        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-general\">
            <form id=\"form-filter\" method=\"get\" class=\"well\">
\t\t      <div class=\"row\">
\t\t        <div class=\"col-sm-4\">
\t\t          <div class=\"form-group\">
\t\t            <label class=\"control-label\" for=\"input-name\">";
        // line 49
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t                <input type=\"text\" name=\"filter_name\" value=\"";
        // line 50
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t              </div>
\t            </div>
\t            <div class=\"col-sm-4\">
\t              <div class=\"form-group\">
\t                <label class=\"control-label\" for=\"input-author\">";
        // line 55
        echo ($context["entry_author"] ?? null);
        echo "</label>
\t                <input type=\"text\" name=\"filter_author\" value=\"";
        // line 56
        echo ($context["filter_author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\" />
\t              </div>
\t            </div>
\t            <div class=\"col-sm-4\">
\t              <div class=\"form-group\">
\t                <label class=\"control-label\" for=\"input-xml\">";
        // line 61
        echo ($context["entry_xml"] ?? null);
        echo "</label>
\t                <input type=\"text\" name=\"filter_xml\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["filter_xml"] ?? null));
        echo "\" placeholder=\"";
        echo ($context["entry_xml"] ?? null);
        echo "\" id=\"input-xml\" class=\"form-control\" />
\t              </div>
\t            </div>
\t            <div class=\"col-sm-12\">
\t              <div class=\"btn-group pull-right\">
\t\t            <button type=\"submit\" id=\"button-filter\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
        // line 67
        echo ($context["button_filter"] ?? null);
        echo "\"><i class=\"fa fa-search\"></i></button>
\t\t            ";
        // line 68
        if ((( !twig_test_empty(($context["filter_name"] ?? null)) ||  !twig_test_empty(($context["filter_author"] ?? null))) ||  !twig_test_empty(($context["filter_xml"] ?? null)))) {
            echo "<a href=\"";
            echo ($context["reset_url"] ?? null);
            echo "\" id=\"button-filter\" class=\"btn btn-danger\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_reset"] ?? null);
            echo "\"><i class=\"fa fa-times\"></i></a>";
        }
        // line 69
        echo "\t\t          </div>
\t            </div>
\t          </div>
\t        </form>
            <form action=\"";
        // line 73
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-modification\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></th>
                      <th class=\"text-left\"><a href=\"";
        // line 79
        echo ($context["sort_name"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_name"] ?? null);
        echo "</a></th>
                      <th class=\"text-left\"><a href=\"";
        // line 80
        echo ($context["sort_author"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "author")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_author"] ?? null);
        echo "</a></th>
                      <th class=\"text-center\"><a href=\"";
        // line 81
        echo ($context["sort_version"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "version")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_version"] ?? null);
        echo "</a></th>
                      <th class=\"text-center\"><a href=\"";
        // line 82
        echo ($context["sort_date_added"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "date_added")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_added"] ?? null);
        echo "</a></th>
                      <th class=\"text-center\"><a href=\"";
        // line 83
        echo ($context["sort_date_modified"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "date_modified")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_modified"] ?? null);
        echo "</a></th>
                      <th class=\"text-center\"><a href=\"";
        // line 84
        echo ($context["sort_status"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "status")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_status"] ?? null);
        echo "</a></th>
                      <th class=\"text-right\">";
        // line 85
        echo ($context["column_action"] ?? null);
        echo "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 89
        if (($context["modifications"] ?? null)) {
            // line 90
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modifications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["modification"]) {
                // line 91
                echo "                    <tr>
                      <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 92);
                echo "\"";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 92), ($context["selected"] ?? null))) {
                    echo " checked=\"checked\" ";
                }
                echo " /></td>
                      <td class=\"text-left\">";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "name", [], "any", false, false, false, 93);
                echo "</td>
                      <td class=\"text-left\">";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "author", [], "any", false, false, false, 94);
                echo "</td>
                      <td class=\"text-center\">";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "version", [], "any", false, false, false, 95);
                echo "</td>
                      <td class=\"text-center\">";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "date_added", [], "any", false, false, false, 96);
                echo "</td>
                      <td class=\"text-center\">";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "date_modified", [], "any", false, false, false, 97);
                echo "</td>
                      <td class=\"text-center\"><i class=\"fa fa-";
                // line 98
                if (twig_get_attribute($this->env, $this->source, $context["modification"], "enabled", [], "any", false, false, false, 98)) {
                    echo "check-circle text-success";
                } else {
                    echo "times-circle text-warning";
                }
                echo " fa-2x\"></i></td>
                      <td class=\"text-right\">
                      ";
                // line 100
                if (twig_get_attribute($this->env, $this->source, $context["modification"], "edit", [], "any", false, false, false, 100)) {
                    // line 101
                    echo "        \t            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "edit", [], "any", false, false, false, 101);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                      ";
                } else {
                    // line 103
                    echo "\t\t\t            <button type=\"button\" class=\"btn btn-info\" disabled=\"disabled\"><i class=\"fa fa-link\"></i></button>
\t\t              ";
                }
                // line 105
                echo "
      \t              ";
                // line 106
                if (twig_get_attribute($this->env, $this->source, $context["modification"], "link", [], "any", false, false, false, 106)) {
                    // line 107
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "link", [], "any", false, false, false, 107);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_link"] ?? null);
                    echo "\" class=\"btn btn-info\" target=\"_blank\"><i class=\"fa fa-link\"></i></a>
                      ";
                } else {
                    // line 109
                    echo "                        <button type=\"button\" class=\"btn btn-info\" disabled=\"disabled\"><i class=\"fa fa-link\"></i></button>
                      ";
                }
                // line 111
                echo "
                      ";
                // line 112
                if (twig_get_attribute($this->env, $this->source, $context["modification"], "enabled", [], "any", false, false, false, 112)) {
                    // line 113
                    echo "                          <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "disable", [], "any", false, false, false, 113);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_disable"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                      ";
                } else {
                    // line 115
                    echo "                          <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "enable", [], "any", false, false, false, 115);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_enable"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
                      ";
                }
                // line 116
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                    ";
        } else {
            // line 120
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"7\">";
            // line 121
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 124
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 129
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 130
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
          ";
        // line 133
        if (($context["error_log"] ?? null)) {
            // line 134
            echo "          <div class=\"tab-pane form-horizontal\" id=\"tab-error\">
            <p>
              <textarea wrap=\"off\" rows=\"15\" class=\"form-control\">";
            // line 136
            echo ($context["error_log"] ?? null);
            echo "</textarea>
            </p>
            <div class=\"text-right\"><a href=\"";
            // line 138
            echo ($context["clear_log"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> ";
            echo ($context["button_clear"] ?? null);
            echo "</a></div>
          </div>
          ";
        }
        // line 141
        echo "          ";
        if (($context["modified_files"] ?? null)) {
            // line 142
            echo "          <div class=\"tab-pane form-horizontal\" id=\"tab-files\">
          \t<div class=\"table-responsive\">
            <table class=\"table table-bordered table-condensed\">
            \t<thead><tr>
            \t\t<th class=\"text-center\">File</th>
            \t\t<th class=\"text-center\">Modified By</th>
            \t</tr></thead>
            \t<tbody>
            \t";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modified_files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["modified_file"]) {
                // line 151
                echo "            \t<tr>
            \t\t<td style=\"vertical-align:top\">";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["modified_file"], "file", [], "any", false, false, false, 152);
                echo "</td>
            \t\t<td>";
                // line 153
                if (twig_get_attribute($this->env, $this->source, $context["modified_file"], "modifications", [], "any", false, false, false, 153)) {
                    // line 154
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["modified_file"], "modifications", [], "any", false, false, false, 154));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["modified_file_modification"]) {
                        // line 155
                        echo "            \t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 155) > 1)) {
                            echo "<br />";
                        }
                        // line 156
                        echo "            \t\t\t\t<b>";
                        echo twig_get_attribute($this->env, $this->source, $context["modified_file_modification"], "name", [], "any", false, false, false, 156);
                        echo "</b> by: ";
                        echo twig_get_attribute($this->env, $this->source, $context["modified_file_modification"], "author", [], "any", false, false, false, 156);
                        echo "
                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modified_file_modification'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 158
                    echo "            \t\t";
                }
                echo "</td>
            \t</tr>
            \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modified_file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "            \t</tbody>
            </table>
            </div>
            <div class=\"text-right\"><a href=\"";
            // line 164
            echo ($context["clear_log"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> ";
            echo ($context["button_clear"] ?? null);
            echo "</a></div>
          </div>
          ";
        }
        // line 167
        echo "          <div class=\"tab-pane form-horizontal\" id=\"tab-log\">
            <p>
              <textarea wrap=\"off\" rows=\"15\" class=\"form-control\">";
        // line 169
        echo ($context["log"] ?? null);
        echo "</textarea>
            </p>
            <div class=\"text-right\"><a href=\"";
        // line 171
        echo ($context["clear_log"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-filter').on('submit', function() {
\tvar url = 'index.php?route=marketplace/modification&user_token=";
        // line 180
        echo ($context["user_token"] ?? null);
        echo "';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();
\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_xml = \$('input[name=\\'filter_xml\\']').val();
\tif (filter_xml) {
\t\turl += '&filter_xml=' + encodeURIComponent(filter_xml);
\t}

\tvar filter_author = \$('input[name=\\'filter_author\\']').val();
\tif (filter_author) {
\t\turl += '&filter_author=' + encodeURIComponent(filter_author);
\t}

\tlocation = url;

\treturn false;
});
//--></script>
";
        // line 202
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/module/modification_manager/list.twig";
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
        return array (  613 => 202,  588 => 180,  574 => 171,  569 => 169,  565 => 167,  557 => 164,  552 => 161,  542 => 158,  523 => 156,  518 => 155,  500 => 154,  498 => 153,  494 => 152,  491 => 151,  487 => 150,  477 => 142,  474 => 141,  466 => 138,  461 => 136,  457 => 134,  455 => 133,  449 => 130,  445 => 129,  438 => 124,  432 => 121,  429 => 120,  426 => 119,  418 => 116,  410 => 115,  402 => 113,  400 => 112,  397 => 111,  393 => 109,  385 => 107,  383 => 106,  380 => 105,  376 => 103,  368 => 101,  366 => 100,  357 => 98,  353 => 97,  349 => 96,  345 => 95,  341 => 94,  337 => 93,  329 => 92,  326 => 91,  321 => 90,  319 => 89,  312 => 85,  300 => 84,  288 => 83,  276 => 82,  264 => 81,  252 => 80,  240 => 79,  231 => 73,  225 => 69,  217 => 68,  213 => 67,  203 => 62,  199 => 61,  189 => 56,  185 => 55,  175 => 50,  171 => 49,  162 => 42,  155 => 41,  149 => 40,  145 => 39,  141 => 38,  134 => 34,  127 => 31,  119 => 27,  116 => 26,  108 => 22,  106 => 21,  100 => 17,  89 => 15,  85 => 14,  80 => 12,  73 => 10,  66 => 9,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/modification_manager/list.twig", "");
    }
}

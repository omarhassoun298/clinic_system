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
class __TwigTemplate_4aeaa05b47adcf35641c9d598c4d78e4 extends Template
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
        echo ($context["refresh"] ?? null);
        echo "\" title=\"";
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-info\" data-bs-toggle=\"tooltip\"><i class=\"fa fa-refresh\"></i></a>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\" data-bs-toggle=\"tooltip\"><i class=\"fa fa-plus\"></i></a>
        ";
        // line 8
        if (($context["import_url"] ?? null)) {
            echo "<a href=\"";
            echo ($context["import_url"] ?? null);
            echo "\" title=\"";
            echo ($context["button_import"] ?? null);
            echo "\" class=\"btn btn-secondary\" data-bs-toggle=\"tooltip\"><i class=\"fa fa-file\"></i></a>";
        }
        // line 9
        echo "        <a href=\"";
        echo ($context["clear"] ?? null);
        echo "\" title=\"";
        echo ($context["button_clear"] ?? null);
        echo "\" class=\"btn btn-warning\" data-bs-toggle=\"tooltip\"><i class=\"fa fa-eraser\"></i></a>
        <button type=\"button\" title=\"";
        // line 10
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? document.getElementById('form-modification').submit() : false;\"><i class=\"fa-regular fa-trash-can\"></i></button>
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
            echo "        <li class=\"breadcrumb-item\"><a href=\"";
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
            echo "    <div class=\"alert alert-danger alert-dismissible\">
      <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 23
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 27
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 28
            echo "    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa fa-check-circle\"></i> ";
            // line 29
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 33
        echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        echo ($context["text_refresh"] ?? null);
        echo "</div>
    <div class=\"card\">
      <div class=\"card-header\">
        <h3 class=\"card-title\"><i class=\"fa fa-list\"></i> ";
        // line 36
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#tab-general\" data-bs-toggle=\"tab\">";
        // line 40
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-log\" data-bs-toggle=\"tab\">";
        // line 41
        echo ($context["tab_log"] ?? null);
        echo "</a></li>
          ";
        // line 42
        if (($context["modified_files"] ?? null)) {
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-files\" data-bs-toggle=\"tab\">";
            echo ($context["tab_files"] ?? null);
            echo "</a></li>";
        }
        // line 43
        echo "          ";
        if (($context["error_log"] ?? null)) {
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-error\" data-bs-toggle=\"tab\">";
            echo ($context["tab_error"] ?? null);
            echo "</a></li>";
        }
        // line 44
        echo "        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane fade show active\" id=\"tab-general\">
            <form id=\"form-filter\" method=\"get\" class=\"well\">
              <div class=\"row\">
                <div class=\"col-sm-4\">
                  <div class=\"form-group\">
                    <label for=\"input-name\">";
        // line 51
        echo ($context["entry_name"] ?? null);
        echo "</label>
                    <input type=\"text\" name=\"filter_name\" value=\"";
        // line 52
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"col-sm-4\">
                  <div class=\"form-group\">
                    <label for=\"input-author\">";
        // line 57
        echo ($context["entry_author"] ?? null);
        echo "</label>
                    <input type=\"text\" name=\"filter_author\" value=\"";
        // line 58
        echo ($context["filter_author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"col-sm-4\">
                  <div class=\"form-group\">
                    <label for=\"input-xml\">";
        // line 63
        echo ($context["entry_xml"] ?? null);
        echo "</label>
                    <input type=\"text\" name=\"filter_xml\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["filter_xml"] ?? null));
        echo "\" placeholder=\"";
        echo ($context["entry_xml"] ?? null);
        echo "\" id=\"input-xml\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"col-sm-12\">
                  <div class=\"btn-group float-end\">
                    <button type=\"submit\" id=\"button-filter\" class=\"btn btn-primary\" title=\"";
        // line 69
        echo ($context["button_filter"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\"><i class=\"fa fa-search\"></i></button>
                    ";
        // line 70
        if ((( !twig_test_empty(($context["filter_name"] ?? null)) ||  !twig_test_empty(($context["filter_author"] ?? null))) ||  !twig_test_empty(($context["filter_xml"] ?? null)))) {
            // line 71
            echo "                    <a href=\"";
            echo ($context["reset_url"] ?? null);
            echo "\" class=\"btn btn-danger\" title=\"";
            echo ($context["button_reset"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\"><i class=\"fa fa-times\"></i></a>
                    ";
        }
        // line 73
        echo "                  </div>
                </div>
              </div>
            </form>
            <form action=\"";
        // line 77
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-modification\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></th>
                      <th class=\"text-start\"><a href=\"";
        // line 83
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
                      <th class=\"text-start\"><a href=\"";
        // line 84
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
        // line 85
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
        // line 86
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
        // line 87
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
        // line 88
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
                      <th class=\"text-end\">";
        // line 89
        echo ($context["column_action"] ?? null);
        echo "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 93
        if (($context["modifications"] ?? null)) {
            // line 94
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modifications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["modification"]) {
                // line 95
                echo "                    <tr>
                      <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 96);
                echo "\"";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 96), ($context["selected"] ?? null))) {
                    echo " checked=\"checked\" ";
                }
                echo " /></td>
                      <td class=\"text-start\">";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "name", [], "any", false, false, false, 97);
                echo "</td>
                      <td class=\"text-start\">";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "author", [], "any", false, false, false, 98);
                echo "</td>
                      <td class=\"text-center\">";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "version", [], "any", false, false, false, 99);
                echo "</td>
                      <td class=\"text-center\">";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "date_added", [], "any", false, false, false, 100);
                echo "</td>
                      <td class=\"text-center\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "date_modified", [], "any", false, false, false, 101);
                echo "</td>
                      <td class=\"text-center\"><i class=\"fa fa-";
                // line 102
                if (twig_get_attribute($this->env, $this->source, $context["modification"], "enabled", [], "any", false, false, false, 102)) {
                    echo "check-circle text-success";
                } else {
                    echo "times-circle text-warning";
                }
                echo " fa-2x\"></i></td>
                      <td class=\"text-end\">
                        ";
                // line 104
                if (twig_get_attribute($this->env, $this->source, $context["modification"], "edit", [], "any", false, false, false, 104)) {
                    // line 105
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "edit", [], "any", false, false, false, 105);
                    echo "\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\" data-bs-toggle=\"tooltip\"><i class=\"fa fa-pencil\"></i></a>
                        ";
                }
                // line 107
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["modification"], "link", [], "any", false, false, false, 107)) {
                    // line 108
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "link", [], "any", false, false, false, 108);
                    echo "\" title=\"";
                    echo ($context["button_link"] ?? null);
                    echo "\" class=\"btn btn-info\" data-bs-toggle=\"tooltip\" target=\"_blank\"><i class=\"fa fa-link\"></i></a>
                        ";
                }
                // line 110
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["modification"], "enabled", [], "any", false, false, false, 110)) {
                    // line 111
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "disable", [], "any", false, false, false, 111);
                    echo "\" title=\"";
                    echo ($context["button_disable"] ?? null);
                    echo "\" class=\"btn btn-danger\" data-bs-toggle=\"tooltip\"><i class=\"fa fa-minus-circle\"></i></a>
                        ";
                } else {
                    // line 113
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "enable", [], "any", false, false, false, 113);
                    echo "\" title=\"";
                    echo ($context["button_enable"] ?? null);
                    echo "\" class=\"btn btn-success\" data-bs-toggle=\"tooltip\"><i class=\"fa fa-plus-circle\"></i></a>
                        ";
                }
                // line 115
                echo "                      </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                    ";
        } else {
            // line 119
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"8\">";
            // line 120
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 123
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-start\">";
        // line 128
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-end\">";
        // line 129
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
          ";
        // line 132
        if (($context["error_log"] ?? null)) {
            // line 133
            echo "          <div class=\"tab-pane fade\" id=\"tab-error\">
            <textarea wrap=\"off\" rows=\"15\" class=\"form-control\">";
            // line 134
            echo ($context["error_log"] ?? null);
            echo "</textarea>
            <div class=\"text-end mt-2\"><a href=\"";
            // line 135
            echo ($context["clear_log"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> ";
            echo ($context["button_clear"] ?? null);
            echo "</a></div>
          </div>
          ";
        }
        // line 138
        echo "          ";
        if (($context["modified_files"] ?? null)) {
            // line 139
            echo "          <div class=\"tab-pane fade\" id=\"tab-files\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-sm\">
                <thead>
                  <tr>
                    <th class=\"text-center\">File</th>
                    <th class=\"text-center\">Modified By</th>
                  </tr>
                </thead>
                <tbody>
                  ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modified_files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["modified_file"]) {
                // line 150
                echo "                  <tr>
                    <td>";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["modified_file"], "file", [], "any", false, false, false, 151);
                echo "</td>
                    <td>";
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["modified_file"], "modifications", [], "any", false, false, false, 152));
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
                    // line 153
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 153) > 1)) {
                        echo "<br />";
                    }
                    // line 154
                    echo "                      <b>";
                    echo twig_get_attribute($this->env, $this->source, $context["modified_file_modification"], "name", [], "any", false, false, false, 154);
                    echo "</b> by: ";
                    echo twig_get_attribute($this->env, $this->source, $context["modified_file_modification"], "author", [], "any", false, false, false, 154);
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
                // line 156
                echo "                    </td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modified_file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "                </tbody>
              </table>
            </div>
            <div class=\"text-end mt-2\"><a href=\"";
            // line 162
            echo ($context["clear_log"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> ";
            echo ($context["button_clear"] ?? null);
            echo "</a></div>
          </div>
          ";
        }
        // line 165
        echo "          <div class=\"tab-pane fade\" id=\"tab-log\">
            <textarea wrap=\"off\" rows=\"15\" class=\"form-control\">";
        // line 166
        echo ($context["log"] ?? null);
        echo "</textarea>
            <div class=\"text-end mt-2\"><a href=\"";
        // line 167
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
<script type=\"text/javascript\">
  document.getElementById('form-filter').onsubmit = function() {
    var url = 'index.php?route=marketplace/modification&user_token=";
        // line 176
        echo ($context["user_token"] ?? null);
        echo "';

    var filter_name = document.querySelector('input[name=\"filter_name\"]').value;
    if (filter_name) {
      url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_xml = document.querySelector('input[name=\"filter_xml\"]').value;
    if (filter_xml) {
      url += '&filter_xml=' + encodeURIComponent(filter_xml);
    }

    var filter_author = document.querySelector('input[name=\"filter_author\"]').value;
    if (filter_author) {
      url += '&filter_author=' + encodeURIComponent(filter_author);
    }

    location.href = url;
    return false;
  };
</script>
";
        // line 197
        echo ($context["footer"] ?? null);
        echo "
";
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
        return array (  599 => 197,  575 => 176,  561 => 167,  557 => 166,  554 => 165,  546 => 162,  541 => 159,  533 => 156,  514 => 154,  509 => 153,  492 => 152,  488 => 151,  485 => 150,  481 => 149,  469 => 139,  466 => 138,  458 => 135,  454 => 134,  451 => 133,  449 => 132,  443 => 129,  439 => 128,  432 => 123,  426 => 120,  423 => 119,  420 => 118,  412 => 115,  404 => 113,  396 => 111,  393 => 110,  385 => 108,  382 => 107,  374 => 105,  372 => 104,  363 => 102,  359 => 101,  355 => 100,  351 => 99,  347 => 98,  343 => 97,  335 => 96,  332 => 95,  327 => 94,  325 => 93,  318 => 89,  306 => 88,  294 => 87,  282 => 86,  270 => 85,  258 => 84,  246 => 83,  237 => 77,  231 => 73,  223 => 71,  221 => 70,  217 => 69,  207 => 64,  203 => 63,  193 => 58,  189 => 57,  179 => 52,  175 => 51,  166 => 44,  159 => 43,  153 => 42,  149 => 41,  145 => 40,  138 => 36,  131 => 33,  124 => 29,  121 => 28,  118 => 27,  111 => 23,  108 => 22,  106 => 21,  100 => 17,  89 => 15,  85 => 14,  80 => 12,  73 => 10,  66 => 9,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/modification_manager/list.twig", "");
    }
}

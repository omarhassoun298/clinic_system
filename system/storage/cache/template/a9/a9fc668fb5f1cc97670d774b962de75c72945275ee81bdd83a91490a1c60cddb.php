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

/* customer/customer_list.twig */
class __TwigTemplate_ec7d564219a14ffaef04f2833f15f101462aee6b0d3fbe07c45ed9e7c706aac8 extends Template
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
        echo "\" onclick=\"\$('#filter-customer').toggleClass('d-none');\" class=\"btn btn-default d-md-none\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-customer').submit() : false;\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
       <nav aria-label=\"breadcrumb\">
\t\t\t\t<h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t\t</ol>
\t\t\t</nav>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 23
        if (($context["error_warning"] ?? null)) {
            // line 24
            echo "    <div class=\"alert alert-danger alert-dismissible fade show\">
      <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 25
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        // line 29
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 30
            echo "    <div class=\"alert alert-success alert-dismissible fade show\">
      <i class=\"fa fa-check-circle\"></i> ";
            // line 31
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        // line 35
        echo "    <div class=\"row\">

      <div class=\"col-md-9\">
        <div class=\"card\">
          <div class=\"card-header\">
           <i class=\"fa fa-list\"></i> ";
        // line 40
        echo ($context["text_list"] ?? null);
        echo "
          </div>
          <div class=\"card-body\">
            <div class=\"table-responsive\">
              <form action=\"";
        // line 44
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" class=\"form-check-input\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 49
        if ((($context["sort"] ?? null) == "name")) {
            echo "<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 50
        if ((($context["sort"] ?? null) == "c.email")) {
            echo "<a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 51
        if ((($context["sort"] ?? null) == "customer_group")) {
            echo "<a href=\"";
            echo ($context["sort_customer_group"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer_group"] ?? null);
            echo "</a>";
        } else {
            echo " <a href=\"";
            echo ($context["sort_customer_group"] ?? null);
            echo "\">";
            echo ($context["column_customer_group"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 52
        if ((($context["sort"] ?? null) == "c.status")) {
            echo "<a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 53
        if ((($context["sort"] ?? null) == "c.date_added")) {
            echo "<a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-end\">";
        // line 54
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 58
        if (($context["customers"] ?? null)) {
            // line 59
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 60
                echo "                    <tr>
                      <td class=\"text-center \">";
                // line 61
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 61), ($context["selected"] ?? null))) {
                    // line 62
                    echo "                        <input type=\"checkbox\" class=\"form-check-input\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 62);
                    echo "\" checked=\"checked\" />
                        ";
                } else {
                    // line 64
                    echo "                        <input type=\"checkbox\" class=\"form-check-input\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 64);
                    echo "\" />
                        ";
                }
                // line 66
                echo "                      </td>
                      <td class=\"text-left\">";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "name", [], "any", false, false, false, 67);
                echo "</td>
                      <td class=\"text-left\">";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 68);
                echo "</td>
                      <td class=\"text-left\">";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_group", [], "any", false, false, false, 69);
                echo "</td>
                      <td class=\"text-left\">";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "status", [], "any", false, false, false, 70);
                echo "</td>
                      <td class=\"text-left\">";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "date_added", [], "any", false, false, false, 71);
                echo "</td>
                      <td class=\"text-end\">
                          <a href=\"";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "edit", [], "any", false, false, false, 73);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                      </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                    ";
        } else {
            // line 78
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"8\">";
            // line 79
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 82
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"8\">
                        <div class=\"float-start\">";
        // line 86
        echo ($context["pagination"] ?? null);
        echo "</div>
                        <div class=\"float-end\">";
        // line 87
        echo ($context["results"] ?? null);
        echo "</div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </form>
            </div>
          </div>
        </div>
      </div> 
      <div id=\"filter-customer\" class=\"col-md-3 d-none d-md-block\">
        <div class=\"card\">
          <div class=\"card-header\">
            <i class=\"fa fa-filter\"></i> ";
        // line 100
        echo ($context["text_filter"] ?? null);
        echo "
          </div>
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label class=\"form-label\" for=\"input-name\">";
        // line 104
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 105
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"mb-3\">
              <label class=\"form-label\" for=\"input-email\">";
        // line 108
        echo ($context["entry_email"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_email\" value=\"";
        // line 109
        echo ($context["filter_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
            </div>
            <div class=\"mb-3\">
              <label class=\"form-label\" for=\"input-customer-group\">";
        // line 112
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
              <select name=\"filter_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                <option value=\"\"></option>
                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 116
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 116);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 116) == ($context["filter_customer_group_id"] ?? null))) {
                echo "selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 116);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "              </select>
            </div>
            <div class=\"mb-3\">
              <label class=\"form-label\" for=\"input-status\">";
        // line 121
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                <option value=\"\"></option>
                <option value=\"1\" ";
        // line 124
        if ((($context["filter_status"] ?? null) == "1")) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                <option value=\"0\" ";
        // line 125
        if ((($context["filter_status"] ?? null) == "0")) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
              </select>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-date-added\" class=\"form-label\">";
        // line 129
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 131
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" id=\"input-date-added\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
            </div>
            <div class=\"text-end\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 136
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
  \$('.table-responsive').on('shown.bs.dropdown', function (e) {
    var t = \$(this),
      m = \$(e.target).find('.dropdown-menu'),
      tb = t.offset().top + t.height(),
      mb = m.offset().top + m.outerHeight(true),
      d = 20;
    if (t[0].scrollWidth > t.innerWidth()) {
      if (mb + d > tb) {
        t.css('padding-bottom', ((mb + d) - tb));
      }
    } else {
      t.css('overflow', 'visible');
    }
  }).on('hidden.bs.dropdown', function () {
    \$(this).css({'padding-bottom': '', 'overflow': ''});
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#button-filter').on('click', function() {
    url = 'index.php?route=customer/customer&user_token=";
        // line 164
        echo ($context["user_token"] ?? null);
        echo "';
    var filter_name = \$('input[name=\\'filter_name\\']').val();
    if (filter_name) {
      url += '&filter_name=' + encodeURIComponent(filter_name);
    }
    var filter_email = \$('input[name=\\'filter_email\\']').val();
    if (filter_email) {
      url += '&filter_email=' + encodeURIComponent(filter_email);
    }
    var filter_customer_group_id = \$('select[name=\\'filter_customer_group_id\\']').val();
    if (filter_customer_group_id !== '') {
      url += '&filter_customer_group_id=' + encodeURIComponent(filter_customer_group_id);
    }
    var filter_status = \$('select[name=\\'filter_status\\']').val();
    if (filter_status !== '') {
      url += '&filter_status=' + encodeURIComponent(filter_status); 
    }
    var filter_ip = \$('input[name=\\'filter_ip\\']').val();
    if (filter_ip) {
      url += '&filter_ip=' + encodeURIComponent(filter_ip);
    }
    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
    if (filter_date_added) {
      url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }
    location = url;
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'filter_name\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 196
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['name'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_name\\']').val(item['label']);
    }
  });
  \$('input[name=\\'filter_email\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 215
        echo ($context["user_token"] ?? null);
        echo "&filter_email=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['email'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_email\\']').val(item['label']);
    }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 234
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });
  //--></script>
";
        // line 238
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "customer/customer_list.twig";
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
        return array (  554 => 238,  547 => 234,  525 => 215,  503 => 196,  468 => 164,  437 => 136,  427 => 131,  422 => 129,  411 => 125,  403 => 124,  397 => 121,  392 => 118,  377 => 116,  373 => 115,  367 => 112,  359 => 109,  355 => 108,  347 => 105,  343 => 104,  336 => 100,  320 => 87,  316 => 86,  310 => 82,  304 => 79,  301 => 78,  298 => 77,  286 => 73,  281 => 71,  277 => 70,  273 => 69,  269 => 68,  265 => 67,  262 => 66,  256 => 64,  250 => 62,  248 => 61,  245 => 60,  240 => 59,  238 => 58,  231 => 54,  213 => 53,  195 => 52,  177 => 51,  159 => 50,  141 => 49,  133 => 44,  126 => 40,  119 => 35,  112 => 31,  109 => 30,  106 => 29,  99 => 25,  96 => 24,  94 => 23,  87 => 18,  76 => 15,  73 => 14,  69 => 13,  64 => 11,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/customer_list.twig", "");
    }
}

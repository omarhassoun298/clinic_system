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

/* extension/module/aqe/customer/customer_list.twig */
class __TwigTemplate_53a129300610687d111a7f46956e9c21 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo ($context["header"] ?? null);
        echo "
<!-- confirm deletion -->
<div class=\"modal fade\" id=\"confirmDelete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmDeleteLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\" id=\"confirmDeleteLabel\">";
        // line 20
        echo ($context["text_confirm_delete"] ?? null);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<p>";
        // line 23
        echo ($context["text_are_you_sure"] ?? null);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-ban\"></i> ";
        // line 26
        echo ($context["button_cancel"] ?? null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-danger delete\"><i class=\"fa fa-trash-o\"></i> ";
        // line 27
        echo ($context["button_delete"] ?? null);
        echo "</button>
\t\t\t</div>
\t\t</div><!-- /.modal-content -->
\t</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- action menu modal -->
<div class=\"modal fade\" id=\"aqe-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"aqeModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\" id=\"aqeModalLabel\"></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body bull5i-container\">
\t\t\t\t<div class=\"notice\">
\t\t\t\t</div>
\t\t\t\t<form enctype=\"multipart/form-data\" id=\"aqeQuickEditForm\" class=\"form-horizontal\">
\t\t\t\t\t<fieldset class=\"aqe-modal-contents\">
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default cancel\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> ";
        // line 50
        echo ($context["button_close"] ?? null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary submit\" data-form=\"#aqeQuickEditForm\" data-context=\"#aqe-modal\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i> ";
        // line 51
        echo ($context["text_saving"] ?? null);
        echo "\"><i class=\"fa fa-save\"></i> ";
        echo ($context["button_save"] ?? null);
        echo "</button>
\t\t\t</div>
\t\t</div><!-- /.modal-content -->
\t</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

";
        // line 57
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<div class=\"nav navbar-nav navbar-checkbox hidden\" id=\"batch-edit-container\">
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"batch-edit\"";
        // line 65
        echo ((($context["batch_edit"] ?? null)) ? (" checked") : (""));
        echo "> ";
        echo ($context["text_batch_edit"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        // line 69
        echo ($context["button_add"] ?? null);
        echo "\" data-url=\"";
        echo ($context["add"] ?? null);
        echo "\" id=\"btn-insert\" data-form=\"#pqe-list-form\" data-context=\"#content\" data-overlay=\"#page-overlay\"><i class=\"fa fa-plus\"></i></button>
\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        // line 70
        echo ($context["button_delete"] ?? null);
        echo "\" data-url=\"";
        echo ($context["delete"] ?? null);
        echo "\" id=\"btn-delete\" data-form=\"#pqe-list-form\" data-context=\"#content\" data-overlay=\"#page-overlay\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\" disabled><i class=\"fa fa-trash-o\"></i></button>
\t\t\t</div>
\t\t\t<h1><i class=\"fa fa-list fa-fw ext-icon\"></i> ";
        // line 72
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 75
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 75);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 75);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"alerts\">
\t\t<div class=\"container-fluid\" id=\"alerts\">
\t\t\t";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["_alerts"]) {
            // line 84
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["_alerts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                // line 85
                echo "\t\t\t\t\t";
                if ($context["alert"]) {
                    // line 86
                    echo "\t\t\t<div class=\"alert alert-";
                    if (($context["type"] == "error")) {
                        echo "danger";
                    } else {
                        echo $context["type"];
                    }
                    echo " fade in\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<i class=\"fa ";
                    // line 88
                    echo twig_call_macro($macros["_self"], "macro_alert_icon", [$context["type"]], 88, $context, $this->getSourceContext());
                    echo "\"></i>";
                    echo $context["alert"];
                    echo "
\t\t\t</div>
\t\t\t\t\t";
                }
                // line 91
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['_alerts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "\t\t</div>
\t</div>

\t<div class=\"container-fluid bull5i-content bull5i-container\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 99
        echo ($context["text_list"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form method=\"post\" enctype=\"multipart/form-data\" id=\"pqe-list-form\" class=\"form-horizontal\" role=\"form\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"table table-bordered table-condensed";
        // line 105
        echo ((($context["module_admin_quick_edit_row_hover_highlighting"] ?? null)) ? (" table-hover") : (""));
        echo ((($context["module_admin_quick_edit_alternate_row_colour"] ?? null)) ? (" table-striped") : (""));
        echo "\" id=\"dT\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($context["col"] == "selector")) {
                // line 110
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["column_info"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 110);
                echo " col_";
                echo $context["col"];
                echo "\" width=\"1\"><input type=\"checkbox\" id=\"global-selector\" /></th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 =             // line 111
($context["column_info"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["col"]] ?? null) : null), "sort", [], "any", false, false, false, 111)) {
                // line 112
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["column_info"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 112);
                echo " col_";
                echo $context["col"];
                echo "\"><a href=\"";
                echo (($__internal_compile_3 = ($context["sorts"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["col"]] ?? null) : null);
                echo "\"";
                echo (((($context["sort"] ?? null) == twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["column_info"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["col"]] ?? null) : null), "sort", [], "any", false, false, false, 112))) ? (((" class=\"" . twig_lower_filter($this->env, ($context["order"] ?? null))) . "\"")) : (""));
                echo ">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["column_info"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["col"]] ?? null) : null), "name", [], "any", false, false, false, 112);
                echo "</a></th>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["column_info"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 114);
                echo " col_";
                echo $context["col"];
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["column_info"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["col"]] ?? null) : null), "name", [], "any", false, false, false, 114);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 116
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr class=\"filters\">
\t\t\t\t\t\t\t\t\t\t";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 120
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (twig_in_filter($context["col"], ["selector"])) {
                // line 121
                echo "\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter(            // line 122
$context["col"], ["newsletter", "safe"])) {
                // line 123
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["column_info"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 123);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 124
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"";
                // line 126
                echo ((((($__internal_compile_9 = ($context["filters"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["col"]] ?? null) : null) == "1")) ? (" selected") : (""));
                echo ">";
                echo ($context["text_yes"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"";
                // line 127
                echo ((((($__internal_compile_10 = ($context["filters"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[$context["col"]] ?? null) : null) == "0")) ? (" selected") : (""));
                echo ">";
                echo ($context["text_no"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter(            // line 130
$context["col"], ["status", "affiliate_status"])) {
                // line 131
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["column_info"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 131);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 132
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"";
                // line 134
                echo ((((($__internal_compile_12 = ($context["filters"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["col"]] ?? null) : null) == "1")) ? (" selected") : (""));
                echo ">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"";
                // line 135
                echo ((((($__internal_compile_13 = ($context["filters"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[$context["col"]] ?? null) : null) == "0")) ? (" selected") : (""));
                echo ">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 138
$context["col"] == "action")) {
                // line 139
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = ($context["column_info"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 139);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-default\" id=\"filter\" data-toggle=\"tooltip\" data-container=\"body\" title=\"";
                // line 141
                echo ($context["text_filter"] ?? null);
                echo "\"><i class=\"fa fa-filter fa-fw\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-default\" id=\"clear-filter\" data-toggle=\"tooltip\" data-container=\"body\" title=\"";
                // line 142
                echo ($context["text_clear_filter"] ?? null);
                echo "\"><i class=\"fa fa-times fa-fw\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 145
$context["col"] == "customer_group")) {
                // line 146
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["column_info"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 146);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 147
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                    // line 150
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 150);
                    echo "\"";
                    echo ((((($__internal_compile_16 = ($context["filters"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[$context["col"]] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 150))) ? (" selected") : (""));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 150);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter(            // line 154
$context["col"], ["name", "email"])) {
                // line 155
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = ($context["column_info"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 155);
                echo "\"><input type=\"text\" name=\"filter_";
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo " typeahead\" placeholder=\"";
                echo ($context["text_autocomplete"] ?? null);
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\" value=\"";
                echo (($__internal_compile_18 = ($context["filters"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[$context["col"]] ?? null) : null);
                echo "\"></th>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 157
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = ($context["column_info"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 157);
                echo "\"><input type=\"text\" name=\"filter_";
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\" value=\"";
                echo (($__internal_compile_20 = ($context["filters"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[$context["col"]] ?? null) : null);
                echo "\"></th>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 159
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 163
        if (($context["customers"] ?? null)) {
            // line 164
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 165
                echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 167
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (($context["col"] == "selector")) {
                        // line 168
                        echo "\t\t\t\t\t\t\t\t\t\t<td style=\"width:1px\" class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                        // line 169
                        echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 169);
                        echo "\"";
                        echo ((twig_get_attribute($this->env, $this->source, $context["customer"], "selected", [], "any", false, false, false, 169)) ? (" checked") : (""));
                        echo "/>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 171
$context["col"] == "action")) {
                        // line 172
                        echo "\t\t\t\t\t\t\t\t\t\t<td class=\"";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = ($context["column_info"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 172);
                        echo " action\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 174
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customer"], "action", [], "any", false, false, false, 174));
                        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                            // line 175
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 175) == "link")) {
                                // line 176
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 176)) {
                                    // line 177
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 177);
                                    echo "\" class=\"btn btn-default btn-sm ";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 177);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 177);
                                    echo "\" id=\"";
                                    echo ((twig_get_attribute($this->env, $this->source, $context["action"], "action", [], "any", false, false, false, 177) . "-") . twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 177));
                                    echo "\" data-toggle=\"tooltip\" data-container=\"body\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 177);
                                    echo "\"><i class=\"fa fa-";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 177);
                                    echo "\"></i>";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 177);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 179
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm action ";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 179);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 179);
                                    echo "\" id=\"";
                                    echo ((twig_get_attribute($this->env, $this->source, $context["action"], "action", [], "any", false, false, false, 179) . "-") . twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 179));
                                    echo "\" data-toggle=\"tooltip\" data-container=\"body\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 179);
                                    echo "\" data-column=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "action", [], "any", false, false, false, 179);
                                    echo "\"";
                                    echo ((twig_get_attribute($this->env, $this->source, $context["action"], "rel", [], "any", false, false, false, 179)) ? (((" data-rel=\"" . twig_get_attribute($this->env, $this->source, $context["action"], "rel", [], "any", false, false, false, 179)) . "\"")) : (""));
                                    echo " disabled>";
                                    if (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 179)) {
                                        echo "<i class=\"fa fa-";
                                        echo twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 179);
                                        echo "\"></i>";
                                    }
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 179);
                                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 181
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } elseif ((twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 181) == "menu")) {
                                // line 182
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\"  data-toggle=\"tooltip\" data-container=\"body\">
             <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary btn-sm action dropdown-toggle ";
                                // line 183
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 183);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 183);
                                echo "\" id=\"";
                                echo ((twig_get_attribute($this->env, $this->source, $context["action"], "action", [], "any", false, false, false, 183) . "-") . twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 183));
                                echo "\" ><span class=\"caret\"></span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">";
                                // line 185
                                echo ($context["text_option"] ?? null);
                                echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 186
                                if (twig_get_attribute($this->env, $this->source, $context["action"], "unlock", [], "any", false, false, false, 186)) {
                                    // line 187
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "unlock", [], "any", false, false, false, 187);
                                    echo "\"><i class=\"fa fa-unlock\"></i> ";
                                    echo ($context["text_unlock"] ?? null);
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 189
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"disabled\"><a><i class=\"fa fa-unlock\"></i> ";
                                    echo ($context["text_unlock"] ?? null);
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 191
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">";
                                // line 192
                                echo ($context["text_login"] ?? null);
                                echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 193
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                                foreach ($context['_seq'] as $context["store_id"] => $context["store"]) {
                                    // line 194
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.php?route=customer/customer/login&user_token=";
                                    echo ($context["user_token"] ?? null);
                                    echo "&customer_id=";
                                    echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 194);
                                    echo "&store_id=";
                                    echo $context["store_id"];
                                    echo "\" target=\"_blank\"><i class=\"fa fa-lock\"></i> ";
                                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 194);
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['store_id'], $context['store'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 196
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 199
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 199)) {
                                    // line 200
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 200);
                                    echo "\" class=\"btn btn-default btn-sm ";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 200);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 200);
                                    echo "\" id=\"";
                                    echo ((twig_get_attribute($this->env, $this->source, $context["action"], "action", [], "any", false, false, false, 200) . "-") . twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 200));
                                    echo "\" data-toggle=\"tooltip\" data-container=\"body\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 200);
                                    echo "\"><i class=\"fa fa-";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 200);
                                    echo "\"></i>";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 200);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 202
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn ";
                                    echo ((twig_get_attribute($this->env, $this->source, $context["action"], "data", [], "any", false, false, false, 202)) ? ("btn-warning") : ("btn-default"));
                                    echo " btn-sm action ";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 202);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 202);
                                    echo "\" id=\"";
                                    echo ((twig_get_attribute($this->env, $this->source, $context["action"], "action", [], "any", false, false, false, 202) . "-") . twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 202));
                                    echo "\" data-toggle=\"tooltip\" data-container=\"body\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 202);
                                    echo "\" data-column=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "action", [], "any", false, false, false, 202);
                                    echo "\"";
                                    echo ((twig_get_attribute($this->env, $this->source, $context["action"], "rel", [], "any", false, false, false, 202)) ? (((" data-rel=\"" . twig_get_attribute($this->env, $this->source, $context["action"], "rel", [], "any", false, false, false, 202)) . "\"")) : (""));
                                    echo ">";
                                    if (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 202)) {
                                        echo "<i class=\"fa fa-";
                                        echo twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 202);
                                        echo "\"></i>";
                                    }
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 202);
                                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 204
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 205
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 206
                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 209
                        echo "\t\t\t\t\t\t\t\t\t\t<td class=\"";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = ($context["column_info"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 209);
                        echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = ($context["column_info"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[$context["col"]] ?? null) : null), "qe_status", [], "any", false, false, false, 209)) ? ((" " . twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = ($context["column_info"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[$context["col"]] ?? null) : null), "type", [], "any", false, false, false, 209))) : (""));
                        echo "\" id=\"";
                        echo (($context["col"] . "-") . twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 209));
                        echo "\">";
                        echo (($__internal_compile_25 = $context["customer"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[$context["col"]] ?? null) : null);
                        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 211
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 212
                echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "\t\t\t\t\t\t\t\t\t";
        } else {
            // line 215
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"";
            // line 216
            echo (twig_length_filter($this->env, ($context["columns"] ?? null)) + 1);
            echo "\">";
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        // line 219
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 225
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 226
        echo ($context["results"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
(function(bull5i,\$,undefined){
var related=";
        // line 234
        echo json_encode(($context["related"] ?? null));
        echo ";bull5i.batch_edit=parseInt(\"";
        echo (($context["batch_edit"] ?? null) * 1);
        echo "\"),bull5i.texts=\$.extend({},bull5i.texts,{error_ajax_request:\"";
        echo addslashes(($context["error_ajax_request"] ?? null));
        echo "\"}),bull5i.update_related=function(){return!1};
bull5i.filter=function(){url='index.php?route=customer/customer&user_token=";
        // line 235
        echo ($context["user_token"] ?? null);
        echo "&sort=";
        echo ($context["sort"] ?? null);
        echo "&order=";
        echo ($context["order"] ?? null);
        echo "&aqer=1';
";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_info"] ?? null));
        foreach ($context['_seq'] as $context["column"] => $context["val"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "filter", [], "any", false, false, false, 236), "show", [], "any", false, false, false, 236)) {
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "filter", [], "any", false, false, false, 236), "type", [], "any", false, false, false, 236) == 0)) {
                    // line 237
                    echo "var filter_";
                    echo $context["column"];
                    echo "=\$('input[name=\\'filter_";
                    echo $context["column"];
                    echo "\\']').not(':disabled').val();
if(filter_";
                    // line 238
                    echo $context["column"];
                    echo "){url+='&filter_";
                    echo $context["column"];
                    echo "='+encodeURIComponent(filter_";
                    echo $context["column"];
                    echo ");}
";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 239
$context["val"], "filter", [], "any", false, false, false, 239), "type", [], "any", false, false, false, 239) == 1)) {
                    // line 240
                    echo "var filter_";
                    echo $context["column"];
                    echo "=\$('select[name=\\'filter_";
                    echo $context["column"];
                    echo "\\']').val();
if (filter_";
                    // line 241
                    echo $context["column"];
                    echo "&&filter_";
                    echo $context["column"];
                    echo "!='*'){url+='&filter_";
                    echo $context["column"];
                    echo "='+encodeURIComponent(filter_";
                    echo $context["column"];
                    echo ");}
";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['column'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "location = url;}
";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_info"] ?? null));
        foreach ($context['_seq'] as $context["column"] => $context["val"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "filter", [], "any", false, false, false, 243), "autocomplete", [], "any", false, false, false, 243)) {
                // line 244
                echo "\$('input[name=\\'filter_";
                echo $context["column"];
                echo "\\']').autocomplete({source:function(request,response){\$.ajax({url:'index.php?route=extension/module/admin_quick_edit/customer__customer__autocomplete&user_token=";
                echo ($context["user_token"] ?? null);
                echo "&filter_";
                echo $context["column"];
                echo "='+encodeURIComponent(request),dataType:'json',success:function(json){response(\$.unique(\$.map(json,function(item){
";
                // line 245
                if (is_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "filter", [], "any", false, false, false, 245), "autocomplete", [], "any", false, false, false, 245), "return", [], "any", false, false, false, 245))) {
                    echo "return { ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "filter", [], "any", false, false, false, 245), "autocomplete", [], "any", false, false, false, 245), "return", [], "any", false, false, false, 245));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        echo $context["k"];
                        echo ":item['";
                        echo $context["v"];
                        echo "'],";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "}
";
                } else {
                    // line 246
                    echo "return item['";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "filter", [], "any", false, false, false, 246), "autocomplete", [], "any", false, false, false, 246), "return", [], "any", false, false, false, 246);
                    echo "']";
                }
                // line 247
                echo "})));}});},select:function(item){\$('input[name=\\'filter_";
                echo $context["column"];
                echo "\\']').val(item['label']);return false;}});";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['column'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "\$(function(){\$(\"input.fltr.date_added\").datetimepicker({pickTime:!1,format:\"YYYY-MM-DD\",keepInvalid:1}),\$(\".qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{type:\"bs_text\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",onblur:\"cancel\",placeholder:\"\",select:!0}),\$(\".name_qe\").editable(function(e,t){return t.indicator},{type:\"popup_edit\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",onblur:\"ignore\",placeholder:\"\",loadurl:\"";
        echo ($context["load_popup_url"] ?? null);
        echo "\",saveurl:\"";
        echo ($context["update_url"] ?? null);
        echo "\",loadtype:\"POST\",loadtext:\"";
        echo ($context["text_loading"] ?? null);
        echo "\"}),\$(\".status_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{data:\"";
        echo twig_trim_filter(($context["status_select"] ?? null));
        echo "\",type:\"bs_select\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",onblur:\"cancel\"}),\$(\".group_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{data:\"";
        echo twig_trim_filter(($context["customer_groups_select"] ?? null));
        echo "\",type:\"bs_select\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",onblur:\"cancel\"}),\$(\".yes_no_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{data:\"";
        echo twig_trim_filter(($context["yes_no_select"] ?? null));
        echo "\",type:\"bs_select\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",placeholder:\"\",onblur:\"cancel\"}),\$(\".number_qe\").editable(function(t,i){return bull5i.quick_update(this,t,i,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),i.indicator},{data:function(t,i){return \$.trim(t.replace(/[^\\d\\.]/g,\"\"))},type:\"bs_text\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",onblur:\"cancel\",placeholder:\"\",select:!0,html:!0})});
}(window.bull5i=window.bull5i||{},jQuery));
//--></script>
";
        // line 251
        echo ($context["footer"] ?? null);
        echo "
";
    }

    // line 1
    public function macro_alert_icon($__type__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            ob_start(function () { return ''; });
            // line 2
            echo "\t\t";
            if ((($context["type"] ?? null) == "error")) {
                // line 3
                echo "\t\t\tfa-times-circle
\t\t";
            } elseif ((            // line 4
($context["type"] ?? null) == "warning")) {
                // line 5
                echo "\t\t\tfa-exclamation-triangle
\t\t";
            } elseif ((            // line 6
($context["type"] ?? null) == "success")) {
                // line 7
                echo "\t\t\tfa-check-circle
\t\t";
            } elseif ((            // line 8
($context["type"] ?? null) == "info")) {
                // line 9
                echo "\t\t\tfa-info-circle
\t\t";
            } else {
                // line 11
                echo "\t\t";
            }
            $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1
            echo twig_spaceless($___internal_parse_0_);

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/module/aqe/customer/customer_list.twig";
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
        return array (  942 => 1,  938 => 11,  934 => 9,  932 => 8,  929 => 7,  927 => 6,  924 => 5,  922 => 4,  919 => 3,  916 => 2,  902 => 1,  896 => 251,  833 => 248,  824 => 247,  819 => 246,  802 => 245,  793 => 244,  788 => 243,  785 => 242,  769 => 241,  762 => 240,  760 => 239,  752 => 238,  745 => 237,  739 => 236,  731 => 235,  723 => 234,  712 => 226,  708 => 225,  700 => 219,  692 => 216,  689 => 215,  686 => 214,  679 => 212,  673 => 211,  662 => 209,  657 => 206,  651 => 205,  648 => 204,  623 => 202,  605 => 200,  602 => 199,  597 => 196,  582 => 194,  578 => 193,  574 => 192,  571 => 191,  565 => 189,  557 => 187,  555 => 186,  551 => 185,  542 => 183,  539 => 182,  536 => 181,  513 => 179,  495 => 177,  492 => 176,  489 => 175,  485 => 174,  479 => 172,  477 => 171,  470 => 169,  467 => 168,  464 => 167,  460 => 166,  457 => 165,  452 => 164,  450 => 163,  445 => 160,  439 => 159,  425 => 157,  409 => 155,  407 => 154,  403 => 152,  390 => 150,  386 => 149,  377 => 147,  372 => 146,  370 => 145,  364 => 142,  360 => 141,  354 => 139,  352 => 138,  344 => 135,  338 => 134,  329 => 132,  324 => 131,  322 => 130,  314 => 127,  308 => 126,  299 => 124,  294 => 123,  292 => 122,  289 => 121,  286 => 120,  282 => 119,  278 => 117,  272 => 116,  262 => 114,  248 => 112,  246 => 111,  239 => 110,  236 => 109,  232 => 108,  225 => 105,  216 => 99,  208 => 93,  202 => 92,  196 => 91,  188 => 88,  178 => 86,  175 => 85,  170 => 84,  166 => 83,  158 => 77,  147 => 75,  143 => 74,  138 => 72,  131 => 70,  125 => 69,  116 => 65,  105 => 57,  94 => 51,  90 => 50,  64 => 27,  60 => 26,  54 => 23,  48 => 20,  38 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/aqe/customer/customer_list.twig", "");
    }
}

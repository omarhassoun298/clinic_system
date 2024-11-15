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

/* extension/module/aqe/catalog/product_list.twig */
class __TwigTemplate_d395b17346545157c264c83efa0ee291 extends Template
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

";
        // line 33
        if ((twig_in_filter("image", ($context["columns"] ?? null)) || twig_in_filter("images", ($context["actions"] ?? null)))) {
            // line 34
            echo "<!-- image manager -->
<div class=\"modal fade\" id=\"modal-image\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\"></div>
";
        }
        // line 37
        echo "
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
        // line 55
        echo ($context["button_close"] ?? null);
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary submit\" data-form=\"#aqeQuickEditForm\" data-context=\"#aqe-modal\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i> ";
        // line 56
        echo ($context["text_saving"] ?? null);
        echo "\"><i class=\"fa fa-save\"></i> ";
        echo ($context["button_save"] ?? null);
        echo "</button>
\t\t\t</div>
\t\t</div><!-- /.modal-content -->
\t</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

";
        // line 62
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
        // line 70
        echo ((($context["batch_edit"] ?? null)) ? (" checked") : (""));
        echo "> ";
        echo ($context["text_batch_edit"] ?? null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        // line 74
        echo ($context["button_add"] ?? null);
        echo "\" data-url=\"";
        echo ($context["add"] ?? null);
        echo "\" id=\"btn-insert\" data-form=\"#pqe-list-form\" data-context=\"#content\" data-overlay=\"#page-overlay\"><i class=\"fa fa-plus\"></i></button>
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        // line 75
        echo ($context["button_copy"] ?? null);
        echo "\" data-url=\"";
        echo ($context["copy"] ?? null);
        echo "\" id=\"btn-copy\" data-form=\"#pqe-list-form\" data-context=\"#content\" data-overlay=\"#page-overlay\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\" disabled><i class=\"fa fa-copy\"></i></button>
\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        // line 76
        echo ($context["button_delete"] ?? null);
        echo "\" data-url=\"";
        echo ($context["delete"] ?? null);
        echo "\" id=\"btn-delete\" data-form=\"#pqe-list-form\" data-context=\"#content\" data-overlay=\"#page-overlay\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\" disabled><i class=\"fa fa-trash-o\"></i></button>
\t\t\t</div>
\t\t\t<h1><i class=\"fa fa-list fa-fw ext-icon\"></i> ";
        // line 78
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 81
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 81);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 81);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"alerts\">
\t\t<div class=\"container-fluid\" id=\"alerts\">
\t\t\t";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["_alerts"]) {
            // line 90
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["_alerts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                // line 91
                echo "\t\t\t\t\t";
                if ($context["alert"]) {
                    // line 92
                    echo "\t\t\t<div class=\"alert alert-";
                    if (($context["type"] == "error")) {
                        echo "danger";
                    } else {
                        echo $context["type"];
                    }
                    echo " fade in\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<i class=\"fa ";
                    // line 94
                    echo twig_call_macro($macros["_self"], "macro_alert_icon", [$context["type"]], 94, $context, $this->getSourceContext());
                    echo "\"></i>";
                    echo $context["alert"];
                    echo "
\t\t\t</div>
\t\t\t\t\t";
                }
                // line 97
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['_alerts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t\t</div>
\t</div>

\t<div class=\"container-fluid bull5i-content bull5i-container\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 105
        echo ($context["text_list"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form method=\"post\" enctype=\"multipart/form-data\" id=\"pqe-list-form\" class=\"form-horizontal\" role=\"form\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"table table-bordered table-condensed";
        // line 111
        echo ((($context["module_admin_quick_edit_row_hover_highlighting"] ?? null)) ? (" table-hover") : (""));
        echo ((($context["module_admin_quick_edit_alternate_row_colour"] ?? null)) ? (" table-striped") : (""));
        echo "\" id=\"dT\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 115
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($context["col"] == "selector")) {
                // line 116
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["column_info"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 116);
                echo " col_";
                echo $context["col"];
                echo "\" width=\"1\"><input type=\"checkbox\" id=\"global-selector\" /></th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 117
$context["col"] == "image")) {
                // line 118
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["column_info"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 118);
                echo " col_";
                echo $context["col"];
                echo "\" width=\"1\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["column_info"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["col"]] ?? null) : null), "name", [], "any", false, false, false, 118);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (twig_get_attribute($this->env, $this->source, (($__internal_compile_3 =             // line 119
($context["column_info"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["col"]] ?? null) : null), "sort", [], "any", false, false, false, 119)) {
                // line 120
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["column_info"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 120);
                echo " col_";
                echo $context["col"];
                echo "\"><a href=\"";
                echo (($__internal_compile_5 = ($context["sorts"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["col"]] ?? null) : null);
                echo "\"";
                echo (((($context["sort"] ?? null) == twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["column_info"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["col"]] ?? null) : null), "sort", [], "any", false, false, false, 120))) ? (((" class=\"" . twig_lower_filter($this->env, ($context["order"] ?? null))) . "\"")) : (""));
                echo ">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["column_info"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["col"]] ?? null) : null), "name", [], "any", false, false, false, 120);
                echo "</a></th>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["column_info"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 122);
                echo " col_";
                echo $context["col"];
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["column_info"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["col"]] ?? null) : null), "name", [], "any", false, false, false, 122);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 124
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr class=\"filters\">
\t\t\t\t\t\t\t\t\t\t";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 128
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (twig_in_filter($context["col"], ["selector", "view_in_store"])) {
                // line 129
                echo "\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 130
$context["col"] == "status")) {
                // line 131
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = ($context["column_info"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 131);
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
                echo ((((($__internal_compile_11 = ($context["filters"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["col"]] ?? null) : null) == "1")) ? (" selected") : (""));
                echo ">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"";
                // line 135
                echo ((((($__internal_compile_12 = ($context["filters"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["col"]] ?? null) : null) == "0")) ? (" selected") : (""));
                echo ">";
                echo ($context["text_disabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter(            // line 138
$context["col"], ["image", "subtract", "requires_shipping"])) {
                // line 139
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["column_info"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 139);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 140
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\"";
                // line 142
                echo ((((($__internal_compile_14 = ($context["filters"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[$context["col"]] ?? null) : null) == "1")) ? (" selected") : (""));
                echo ">";
                echo ($context["text_yes"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\"";
                // line 143
                echo ((((($__internal_compile_15 = ($context["filters"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[$context["col"]] ?? null) : null) == "0")) ? (" selected") : (""));
                echo ">";
                echo ($context["text_no"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 146
$context["col"] == "action")) {
                // line 147
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = ($context["column_info"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 147);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-default\" id=\"filter\" data-toggle=\"tooltip\" data-container=\"body\" title=\"";
                // line 149
                echo ($context["text_filter"] ?? null);
                echo "\"><i class=\"fa fa-filter fa-fw\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-default\" id=\"clear-filter\" data-toggle=\"tooltip\" data-container=\"body\" title=\"";
                // line 150
                echo ($context["text_clear_filter"] ?? null);
                echo "\"><i class=\"fa fa-times fa-fw\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 153
$context["col"] == "manufacturer")) {
                // line 154
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = ($context["column_info"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 154);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 155
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"*\"";
                // line 157
                echo ((((($__internal_compile_18 = ($context["filters"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[$context["col"]] ?? null) : null) == "*")) ? (" selected") : (""));
                echo ">";
                echo ($context["text_none"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 158
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                    // line 159
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["m"], "manufacturer_id", [], "any", false, false, false, 159);
                    echo "\"";
                    echo ((((($__internal_compile_19 = ($context["filters"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[$context["col"]] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["m"], "manufacturer_id", [], "any", false, false, false, 159))) ? (" selected") : (""));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 159);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 163
$context["col"] == "category")) {
                // line 164
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = ($context["column_info"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 164);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 165
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"*\"";
                // line 167
                echo ((((($__internal_compile_21 = ($context["filters"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[$context["col"]] ?? null) : null) == "*")) ? (" selected") : (""));
                echo ">";
                echo ($context["text_none"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 168
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["c"], "category_id", [], "any", false, false, false, 169);
                    echo "\"";
                    echo ((((($__internal_compile_22 = ($context["filters"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[$context["col"]] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["c"], "category_id", [], "any", false, false, false, 169))) ? (" selected") : (""));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 169);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 173
$context["col"] == "download")) {
                // line 174
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = ($context["column_info"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 174);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 175
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"*\"";
                // line 177
                echo ((((($__internal_compile_24 = ($context["filters"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[$context["col"]] ?? null) : null) == "*")) ? (" selected") : (""));
                echo ">";
                echo ($context["text_none"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 178
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["downloads"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["dl"]) {
                    // line 179
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["dl"], "download_id", [], "any", false, false, false, 179);
                    echo "\"";
                    echo ((((($__internal_compile_25 = ($context["filters"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[$context["col"]] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["dl"], "download_id", [], "any", false, false, false, 179))) ? (" selected") : (""));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["dl"], "name", [], "any", false, false, false, 179);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dl'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 181
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 183
$context["col"] == "filter")) {
                // line 184
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = ($context["column_info"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 184);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 185
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"*\"";
                // line 187
                echo ((((($__internal_compile_27 = ($context["filters"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[$context["col"]] ?? null) : null) == "*")) ? (" selected") : (""));
                echo ">";
                echo ($context["text_none"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 188
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["_filters"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["fg"]) {
                    // line 189
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                    echo addslashes(twig_get_attribute($this->env, $this->source, $context["fg"], "name", [], "any", false, false, false, 189));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 190
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["fg"], "filters", [], "any", false, false, false, 190));
                    foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                        // line 191
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["f"], "filter_id", [], "any", false, false, false, 191);
                        echo "\"";
                        echo ((((($__internal_compile_28 = ($context["filters"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[$context["col"]] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["f"], "filter_id", [], "any", false, false, false, 191))) ? (" selected") : (""));
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["f"], "name", [], "any", false, false, false, 191);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 193
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 195
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 197
$context["col"] == "store")) {
                // line 198
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_29 = ($context["column_info"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 198);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 199
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"*\"";
                // line 201
                echo ((((($__internal_compile_30 = ($context["filters"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[$context["col"]] ?? null) : null) == "*")) ? (" selected") : (""));
                echo ">";
                echo ($context["text_none"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 202
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["store_id"] => $context["s"]) {
                    // line 203
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $context["store_id"];
                    echo "\"";
                    echo (((((($__internal_compile_31 = ($context["filters"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[$context["col"]] ?? null) : null) != "") && ((($__internal_compile_32 = ($context["filters"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[$context["col"]] ?? null) : null) == $context["store_id"]))) ? (" selected") : (""));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 203);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['store_id'], $context['s'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 205
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 207
$context["col"] == "length_class")) {
                // line 208
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_33 = ($context["column_info"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 208);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 209
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 211
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["lc"]) {
                    // line 212
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["lc"], "length_class_id", [], "any", false, false, false, 212);
                    echo "\"";
                    echo ((((($__internal_compile_34 = ($context["filters"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[$context["col"]] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["lc"], "length_class_id", [], "any", false, false, false, 212))) ? (" selected") : (""));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["lc"], "title", [], "any", false, false, false, 212);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 214
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 216
$context["col"] == "weight_class")) {
                // line 217
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_35 = ($context["column_info"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 217);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 218
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 220
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["wc"]) {
                    // line 221
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["wc"], "weight_class_id", [], "any", false, false, false, 221);
                    echo "\"";
                    echo ((((($__internal_compile_36 = ($context["filters"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[$context["col"]] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["wc"], "weight_class_id", [], "any", false, false, false, 221))) ? (" selected") : (""));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["wc"], "title", [], "any", false, false, false, 221);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 223
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 225
$context["col"] == "tax_class")) {
                // line 226
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_37 = ($context["column_info"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 226);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 227
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"*\"";
                // line 229
                echo ((((($__internal_compile_38 = ($context["filters"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[$context["col"]] ?? null) : null) == "*")) ? (" selected") : (""));
                echo ">";
                echo ($context["text_none"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 230
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["tc"]) {
                    // line 231
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tc"], "tax_class_id", [], "any", false, false, false, 231);
                    echo "\"";
                    echo ((((($__internal_compile_39 = ($context["filters"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[$context["col"]] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["tc"], "tax_class_id", [], "any", false, false, false, 231))) ? (" selected") : (""));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["tc"], "title", [], "any", false, false, false, 231);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 233
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 235
$context["col"] == "stock_status")) {
                // line 236
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_40 = ($context["column_info"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 236);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 237
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 239
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["ss"]) {
                    // line 240
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ss"], "stock_status_id", [], "any", false, false, false, 240);
                    echo "\"";
                    echo ((((($__internal_compile_41 = ($context["filters"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[$context["col"]] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["ss"], "stock_status_id", [], "any", false, false, false, 240))) ? (" selected") : (""));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["ss"], "name", [], "any", false, false, false, 240);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ss'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 242
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 244
$context["col"] == "price")) {
                // line 245
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_42 = ($context["column_info"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 245);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_";
                // line 247
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" id=\"filter_price\" value=\"";
                echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "special_price", [], "any", false, false, false, 247), ["active", "expired", "future", "na"])) ? (twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "special_price", [], "any", false, false, false, 247)) : ((($__internal_compile_43 = ($context["filters"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[$context["col"]] ?? null) : null)));
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\" ";
                echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "special_price", [], "any", false, false, false, 247), ["active", "expired", "future", "na"])) ? (" disabled") : (""));
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"filter_special_price\" value=\"\" id=\"filter_special_price\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" tabindex=\"-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">";
                // line 252
                echo ($context["text_toggle_dropdown"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu text-left pull-right price\" role=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li";
                // line 255
                echo ((twig_in_filter( !twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "special_price", [], "any", false, false, false, 255), ["active", "expired", "future", "na"])) ? (" class=\"active\"") : (""));
                echo "><a href=\"#\" class=\"filter-special-price\" data-value=\"\" id=\"special-price-off\"><i class=\"fa fa-fw";
                echo ((twig_in_filter( !twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "special_price", [], "any", false, false, false, 255), ["active", "expired", "future", "na"])) ? (" fa-check") : (""));
                echo "\"></i> ";
                echo ($context["text_special_off"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li";
                // line 256
                echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "special_price", [], "any", false, false, false, 256) == "active")) ? (" class=\"active\"") : (""));
                echo "><a href=\"#\" class=\"filter-special-price\" data-value=\"active\"><i class=\"fa fa-fw";
                echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "special_price", [], "any", false, false, false, 256) == "active")) ? (" fa-check") : (""));
                echo "\"></i> ";
                echo ($context["text_special_active"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li";
                // line 257
                echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "special_price", [], "any", false, false, false, 257) == "expired")) ? (" class=\"active\"") : (""));
                echo "><a href=\"#\" class=\"filter-special-price\" data-value=\"expired\"><i class=\"fa fa-fw";
                echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "special_price", [], "any", false, false, false, 257) == "expired")) ? (" fa-check") : (""));
                echo "\"></i> ";
                echo ($context["text_special_expired"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li";
                // line 258
                echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "special_price", [], "any", false, false, false, 258) == "future")) ? (" class=\"active\"") : (""));
                echo "><a href=\"#\" class=\"filter-special-price\" data-value=\"future\"><i class=\"fa fa-fw";
                echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "special_price", [], "any", false, false, false, 258) == "future")) ? (" fa-check") : (""));
                echo "\"></i> ";
                echo ($context["text_special_future"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li";
                // line 259
                echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "special_price", [], "any", false, false, false, 259) == "na")) ? (" class=\"active\"") : (""));
                echo "><a href=\"#\" class=\"filter-special-price\" data-value=\"na\"><i class=\"fa fa-fw";
                echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "special_price", [], "any", false, false, false, 259) == "na")) ? (" fa-check") : (""));
                echo "\"></i> ";
                echo ($context["text_special_not_available"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter(            // line 264
$context["col"], ["name", "model", "sku", "upc", "ean", "jan", "isbn", "mpn", "location", "seo"])) {
                // line 265
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_44 = ($context["column_info"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 265);
                echo "\"><input type=\"text\" name=\"filter_";
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo " typeahead\" data-column=\"";
                echo $context["col"];
                echo "\" value=\"";
                echo (($__internal_compile_45 = ($context["filters"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[$context["col"]] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["text_autocomplete"] ?? null);
                echo "\"></th>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 268
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_46 = ($context["column_info"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 268);
                echo "\"><input type=\"text\" name=\"filter_";
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\" value=\"";
                echo (($__internal_compile_47 = ($context["filters"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[$context["col"]] ?? null) : null);
                echo "\"></th>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 270
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 274
        if (($context["products"] ?? null)) {
            // line 275
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 276
                echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t";
                // line 277
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 278
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (($context["col"] == "selector")) {
                        // line 279
                        echo "\t\t\t\t\t\t\t\t\t\t<td style=\"width:1px\" class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                        // line 280
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 280);
                        echo "\"";
                        echo ((twig_get_attribute($this->env, $this->source, $context["product"], "selected", [], "any", false, false, false, 280)) ? (" checked") : (""));
                        echo "/>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 282
$context["col"] == "image")) {
                        // line 283
                        echo "\t\t\t\t\t\t\t\t\t\t<td class=\"";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_48 = ($context["column_info"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 283);
                        echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_49 = ($context["column_info"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[$context["col"]] ?? null) : null), "qe_status", [], "any", false, false, false, 283)) ? ((" " . twig_get_attribute($this->env, $this->source, (($__internal_compile_50 = ($context["column_info"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[$context["col"]] ?? null) : null), "type", [], "any", false, false, false, 283))) : (""));
                        echo "\" id=\"";
                        echo (($context["col"] . "-") . twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 283));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 284
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 284);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 284);
                        echo "\" class=\"img-thumbnail\" data-id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 284);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 284);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 286
$context["col"] == "view_in_store")) {
                        // line 287
                        echo "\t\t\t\t\t\t\t\t\t\t<td class=\"view_store ";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_51 = ($context["column_info"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 287);
                        echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_52 = ($context["column_info"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[$context["col"]] ?? null) : null), "qe_status", [], "any", false, false, false, 287)) ? ((" " . twig_get_attribute($this->env, $this->source, (($__internal_compile_53 = ($context["column_info"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[$context["col"]] ?? null) : null), "type", [], "any", false, false, false, 287))) : (""));
                        echo "\" id=\"";
                        echo (($context["col"] . "-") . twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 287));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<select onchange=\"((this.value !== '') ? window.open(this.value) : null); this.value = '';\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 289
                        echo ($context["text_select"] ?? null);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 290
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_54 = $context["product"]) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54[$context["col"]] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                            // line 291
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 291);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 291);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 293
                        echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 295
$context["col"] == "action")) {
                        // line 296
                        echo "\t\t\t\t\t\t\t\t\t\t<td class=\"";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_55 = ($context["column_info"] ?? null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 296);
                        echo " action\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 298
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "action", [], "any", false, false, false, 298));
                        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                            // line 299
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 299)) {
                                // line 300
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 300);
                                echo "\" class=\"btn btn-default btn-sm ";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 300);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 300);
                                echo "\" id=\"";
                                echo ((twig_get_attribute($this->env, $this->source, $context["action"], "action", [], "any", false, false, false, 300) . "-") . twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 300));
                                echo "\" data-toggle=\"tooltip\" data-container=\"body\" title=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 300);
                                echo "\"><i class=\"fa fa-";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 300);
                                echo "\"></i>";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 300);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 302
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn ";
                                echo ((twig_get_attribute($this->env, $this->source, $context["action"], "data", [], "any", false, false, false, 302)) ? ("btn-warning") : ("btn-default"));
                                echo " btn-sm action ";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 302);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 302);
                                echo "\" id=\"";
                                echo ((twig_get_attribute($this->env, $this->source, $context["action"], "action", [], "any", false, false, false, 302) . "-") . twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 302));
                                echo "\" data-toggle=\"tooltip\" data-container=\"body\" title=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 302);
                                echo "\" data-column=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "action", [], "any", false, false, false, 302);
                                echo "\"";
                                echo ((twig_get_attribute($this->env, $this->source, $context["action"], "rel", [], "any", false, false, false, 302)) ? (((" data-rel='" . twig_get_attribute($this->env, $this->source, $context["action"], "rel", [], "any", false, false, false, 302)) . "'")) : (""));
                                echo ">";
                                if (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 302)) {
                                    echo "<i class=\"fa fa-";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 302);
                                    echo "\"></i>";
                                }
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 302);
                                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 304
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 305
                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 308
                        echo "\t\t\t\t\t\t\t\t\t\t<td class=\"";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_56 = ($context["column_info"] ?? null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 308);
                        echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_57 = ($context["column_info"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57[$context["col"]] ?? null) : null), "qe_status", [], "any", false, false, false, 308)) ? ((" " . twig_get_attribute($this->env, $this->source, (($__internal_compile_58 = ($context["column_info"] ?? null)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58[$context["col"]] ?? null) : null), "type", [], "any", false, false, false, 308))) : (""));
                        echo "\" id=\"";
                        echo (($context["col"] . "-") . twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 308));
                        echo "\">";
                        echo (($__internal_compile_59 = $context["product"]) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59[$context["col"]] ?? null) : null);
                        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 310
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 311
                echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            echo "\t\t\t\t\t\t\t\t\t";
        } else {
            // line 314
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"";
            // line 315
            echo (twig_length_filter($this->env, ($context["columns"] ?? null)) + 1);
            echo "\">";
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        // line 318
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 324
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 325
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
        // line 333
        echo json_encode(($context["related"] ?? null));
        echo ";bull5i.batch_edit=parseInt(\"";
        echo (($context["batch_edit"] ?? null) * 1);
        echo "\"),bull5i.texts=\$.extend({},bull5i.texts,{error_ajax_request:\"";
        echo addslashes(($context["error_ajax_request"] ?? null));
        echo "\"}),bull5i.update_image=function(e){var t=e,a=\$.Deferred();return \$.when(\$.ajax({url:\"index.php?route=common/filemanager&user_token=";
        echo ($context["user_token"] ?? null);
        echo "&target=\"+encodeURIComponent(t),dataType:\"html\"})).done(function(e){\$(\"#\"+t).val(\"\"),\$(\"#modal-image\").append(e),\$(\"#modal-image\").modal(\"show\"),\$(\"#modal-image\").on(\"hide.bs.modal\",function(){\$(\"#\"+t).val()?a.resolve():a.reject(),\$(\"#modal-image\").off(\"hide.bs.modal\")}).on(\"hidden.bs.modal\",function(){\$(\"#modal-image\").empty(),\$(\"#modal-image\").off(\"hidden.bs.modal\")})}).fail(function(){a.reject()}),a.promise()},bull5i.update_related=function(e,t){if(t&&related[e]&&related[e].length){var a={};return \$.each(related[e],function(e,r){a[r]=t,\$.each(t,function(e,t){\$(\"#\"+r+\"-\"+t)&&bull5i.cell_updating(\$(\"#\"+r+\"-\"+t))})}),\$.ajax({url:\"";
        echo ($context["refresh_url"] ?? null);
        echo "\",type:\"POST\",cache:!1,dataType:\"json\",data:{data:a}}).done(function(e){e.error?bull5i.display_alert(\$(\"#alerts\"),e.error,\"error\",0,!0):e.values&&\$.each(e.values,function(e,t){\$.each(t,function(t,a){var r=\$(\"#\"+t+\"-\"+e);r.empty().removeClass(\"updating\").removeAttr(\"style\").editable(\"enable\"),setTimeout(function(){r.html(a)},10)})})}).fail(function(e){var t=\"string\"==typeof e?e:e.responseText||e.statusText||\"Unknown error!\";bull5i.display_alert(\$(\"#alerts\"),bull5i.texts.error_ajax_request+\" \"+t,\"error\",0,!0)}).always(function(){\$(\"td.updating\").each(function(){var e=\$(this);e.empty().removeClass(\"updating\").removeAttr(\"style\").editable(\"enable\"),setTimeout(function(){e.html(e.data(\"original-content\"))},10)})}),!0}return!1};
bull5i.filter=function(){url='index.php?route=catalog/product&user_token=";
        // line 334
        echo ($context["user_token"] ?? null);
        echo "&sort=";
        echo ($context["sort"] ?? null);
        echo "&order=";
        echo ($context["order"] ?? null);
        echo "&aqer=1';
";
        // line 335
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_info"] ?? null));
        foreach ($context['_seq'] as $context["column"] => $context["val"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "filter", [], "any", false, false, false, 335), "show", [], "any", false, false, false, 335)) {
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "filter", [], "any", false, false, false, 335), "type", [], "any", false, false, false, 335) == 0)) {
                    // line 336
                    echo "var filter_";
                    echo $context["column"];
                    echo "=\$('input[name=\\'filter_";
                    echo $context["column"];
                    echo "\\']').not(':disabled').val();
if(filter_";
                    // line 337
                    echo $context["column"];
                    echo "){url+='&filter_";
                    echo $context["column"];
                    echo "='+encodeURIComponent(filter_";
                    echo $context["column"];
                    echo ")};
";
                    // line 338
                    if (($context["column"] == "price")) {
                        echo "var filter_special_price=\$('input[name=\\'filter_special_price\\']').val();
if(filter_special_price){url+='&filter_special_price='+encodeURIComponent(filter_special_price)};";
                    }
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 340
$context["val"], "filter", [], "any", false, false, false, 340), "type", [], "any", false, false, false, 340) == 1)) {
                    // line 341
                    echo "var filter_";
                    echo $context["column"];
                    echo "=\$('select[name=\\'filter_";
                    echo $context["column"];
                    echo "\\']').val();
";
                    // line 342
                    if (twig_in_filter($context["column"], ["manufacturer", "category", "tax_class", "store", "filter", "download"])) {
                        echo "if(filter_";
                        echo $context["column"];
                        echo "){ ";
                    } else {
                        echo "if(filter_";
                        echo $context["column"];
                        echo "&&filter_";
                        echo $context["column"];
                        echo "!='*'){ ";
                    }
                    echo "url+='&filter_";
                    echo $context["column"];
                    echo "='+encodeURIComponent(filter_";
                    echo $context["column"];
                    echo ")";
                    echo ((($context["column"] == "category")) ? ((("+'&filter_sub_category=" . ((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "sub_category", [], "any", false, false, false, 342)) ? (twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "sub_category", [], "any", false, false, false, 342)) : ("0"))) . "'")) : (""));
                    echo " }
";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['column'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 343
        echo "location=url};
";
        // line 344
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_info"] ?? null));
        foreach ($context['_seq'] as $context["column"] => $context["val"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "filter", [], "any", false, false, false, 344), "autocomplete", [], "any", false, false, false, 344)) {
                // line 345
                echo "\$('input[name=\\'filter_";
                echo $context["column"];
                echo "\\']').autocomplete({source:function(request,response){\$.ajax({url:'index.php?route=extension/module/admin_quick_edit/catalog__product__autocomplete&user_token=";
                echo ($context["user_token"] ?? null);
                echo "&filter_";
                echo $context["column"];
                echo "='+encodeURIComponent(request),dataType:'json',success:function(json){var dupes={},unique=[];\$.each(\$.map(json,function(item){return {
";
                // line 346
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "filter", [], "any", false, false, false, 346), "autocomplete", [], "any", false, false, false, 346), "return", [], "any", false, false, false, 346));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo $context["k"];
                    echo ": item['";
                    echo $context["v"];
                    echo "'],";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "}}),function(i,el){idx=el.value!==undefined?el.value:el;if(idx&&!dupes[idx]){dupes[idx]=true,unique.push(el)}}),response(unique)}});
},select:function(item){\$('input[name=\\'filter_";
                // line 347
                echo $context["column"];
                echo "\\']').val(item['label']);return false;}});";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['column'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        echo "\$(function(){\$(\"input.fltr.date_available,input.fltr.date_modified,input.fltr.date_added\").datetimepicker({pickTime:!1,format:\"YYYY-MM-DD\",keepInvalid:1}),\$(\".qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{type:\"bs_text\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",onblur:\"cancel\",placeholder:\"\",select:!0}),\$(\".seo_qe\").editable(function(e,t){return t.indicator},{type:\"multilingual_edit\",indicator:\"";
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
        echo "\"}),\$(\".image_qe\").editable(function(e,t){var i={alt:\$(this.revert).attr(\"alt\")};return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\",i).done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),\$(this).html()},{type:\"image_edit\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",onblur:\"ignore\",placeholder:\"\",html:!0}),\$(\".cat_qe, .store_qe, .dl_qe, .filter_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\",\$(\"#aqeQuickEditForm\").serializeHash()).done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{type:\"multiselect_edit\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",onblur:\"ignore\",placeholder:\"\",loadurl:\"";
        echo ($context["load_popup_url"] ?? null);
        echo "\",loadtype:\"POST\",loadtext:\"";
        echo ($context["text_loading"] ?? null);
        echo "\",html:!0}),\$(\".attr_qe,.dscnt_qe,.images_qe,.filters_qe,.option_qe,.recur_qe,.related_qe,.special_qe,.descr_qe,.dls_qe,.keyw_qe\").on(\"click\",function(e){e.preventDefault();var t=\$(this).attr(\"id\"),i=\$(this).attr(\"id\").split(\"-\")[1],l=\$(this).attr(\"id\").split(\"-\")[0],p={alerts:\$.merge(\$(\"#aqe-modal .notice\"),\$(\"#alerts\"))};bull5i.load_popup_data(\"";
        echo ($context["load_popup_url"] ?? null);
        echo "\",{id:t}).done(function(e){e.alerts&&bull5i.display_alerts(e.alerts,!0,p.alerts),bull5i.aqe_popup(e.title,e.popup,function(o){e={id:t,old:\"\",\"new\":\"\"},bull5i.batch_edit&&\$(\"input[name*='selected']:checked\").length&&(e.ids=\$(\"input[name*='selected']:checked\").serializeObject().selected),\$.extend(e,\$(\"#aqeQuickEditForm\").serializeHash()),bull5i.aqe_popup_update.call(p,\"";
        echo ($context["update_url"] ?? null);
        echo "\",e).done(function(t){(t===!0||t.success)&&bull5i.update_related(l,\$.unique(\$.merge([i],e.ids||[]))),typeof o==='function'&&o.call(null,t)}).fail(function(e){typeof o==='function'&&o.call(null,e)})},\"modal-lg\")})}),\$(\".date_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{type:\"date_edit\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",onblur:\"ignore\"}),\$(\".datetime_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{type:\"date_time_edit\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",onblur:\"ignore\"}),\$(\".status_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{data:\"";
        echo twig_trim_filter(($context["status_select"] ?? null));
        echo "\",type:\"bs_select\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",onblur:\"cancel\"}),\$(\".qty_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{data:function(e){return \$.trim(e.replace(/<.*?>/g,\"\"))},type:\"bs_text\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",onblur:\"cancel\",placeholder:\"\",select:!0,html:!0}),\$(\".price_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{data:function(e){var t=\$(\"<div/>\").html(e);return t.children(\"span\").length?t.children(\"span\").first().text():\$.trim(e)},type:\"bs_text\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",onblur:\"cancel\",placeholder:\"\",select:!0,html:!0})";
        if (($context["single_lang_editing"] ?? null)) {
            echo ",\$(\".name_qe, .tag_qe\").editable(function(e,t){var i={lang_id:\"";
            echo ($context["language_id"] ?? null);
            echo "\"};return bull5i.quick_update(this,e,t,\"";
            echo ($context["update_url"] ?? null);
            echo "\",i).done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{type:\"bs_text\",indicator:\"";
            echo ($context["text_saving"] ?? null);
            echo "\",tooltip:\"";
            echo ($context["module_admin_quick_edit_tooltip"] ?? null);
            echo "\",event:\"";
            echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
            echo "\",onblur:\"cancel\",placeholder:\"\",select:!0})";
        } else {
            echo ",\$(\".name_qe, .tag_qe\").editable(function(e,t){return t.indicator},{type:\"multilingual_edit\",indicator:\"";
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
            echo "\"})";
        }
        echo ",\$(\".manufac_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{data:\"";
        echo twig_trim_filter(($context["manufacturer_select"] ?? null));
        echo "\",type:\"bs_select\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",placeholder:\"\",onblur:\"cancel\"}),\$(\".length_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{data:\"";
        echo twig_trim_filter(($context["length_class_select"] ?? null));
        echo "\",type:\"bs_select\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",placeholder:\"\",onblur:\"cancel\"}),\$(\".weight_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{data:\"";
        echo twig_trim_filter(($context["weight_class_select"] ?? null));
        echo "\",type:\"bs_select\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",placeholder:\"\",onblur:\"cancel\"}),\$(\".yes_no_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{data:\"";
        echo twig_trim_filter(($context["yes_no_select"] ?? null));
        echo "\",type:\"bs_select\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",placeholder:\"\",onblur:\"cancel\"}),\$(\".stock_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{data:\"";
        echo twig_trim_filter(($context["stock_status_select"] ?? null));
        echo "\",type:\"bs_select\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",placeholder:\"\",onblur:\"cancel\"}),\$(\".tax_cls_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{data:\"";
        echo twig_trim_filter(($context["tax_class_select"] ?? null));
        echo "\",type:\"bs_select\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",placeholder:\"\",onblur:\"cancel\"})});
}(window.bull5i=window.bull5i||{},jQuery));
//--></script>
";
        // line 351
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
        return "extension/module/aqe/catalog/product_list.twig";
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
        return array (  1455 => 1,  1451 => 11,  1447 => 9,  1445 => 8,  1442 => 7,  1440 => 6,  1437 => 5,  1435 => 4,  1432 => 3,  1429 => 2,  1415 => 1,  1409 => 351,  1232 => 348,  1224 => 347,  1210 => 346,  1201 => 345,  1196 => 344,  1193 => 343,  1167 => 342,  1160 => 341,  1158 => 340,  1153 => 338,  1145 => 337,  1138 => 336,  1132 => 335,  1124 => 334,  1112 => 333,  1101 => 325,  1097 => 324,  1089 => 318,  1081 => 315,  1078 => 314,  1075 => 313,  1068 => 311,  1062 => 310,  1051 => 308,  1046 => 305,  1040 => 304,  1015 => 302,  997 => 300,  994 => 299,  990 => 298,  984 => 296,  982 => 295,  978 => 293,  967 => 291,  963 => 290,  959 => 289,  950 => 287,  948 => 286,  937 => 284,  929 => 283,  927 => 282,  920 => 280,  917 => 279,  914 => 278,  910 => 277,  907 => 276,  902 => 275,  900 => 274,  895 => 271,  889 => 270,  875 => 268,  858 => 265,  856 => 264,  844 => 259,  836 => 258,  828 => 257,  820 => 256,  812 => 255,  806 => 252,  790 => 247,  784 => 245,  782 => 244,  778 => 242,  765 => 240,  761 => 239,  752 => 237,  747 => 236,  745 => 235,  741 => 233,  728 => 231,  724 => 230,  718 => 229,  709 => 227,  704 => 226,  702 => 225,  698 => 223,  685 => 221,  681 => 220,  672 => 218,  667 => 217,  665 => 216,  661 => 214,  648 => 212,  644 => 211,  635 => 209,  630 => 208,  628 => 207,  624 => 205,  611 => 203,  607 => 202,  601 => 201,  592 => 199,  587 => 198,  585 => 197,  581 => 195,  574 => 193,  561 => 191,  557 => 190,  552 => 189,  548 => 188,  542 => 187,  533 => 185,  528 => 184,  526 => 183,  522 => 181,  509 => 179,  505 => 178,  499 => 177,  490 => 175,  485 => 174,  483 => 173,  479 => 171,  466 => 169,  462 => 168,  456 => 167,  447 => 165,  442 => 164,  440 => 163,  436 => 161,  423 => 159,  419 => 158,  413 => 157,  404 => 155,  399 => 154,  397 => 153,  391 => 150,  387 => 149,  381 => 147,  379 => 146,  371 => 143,  365 => 142,  356 => 140,  351 => 139,  349 => 138,  341 => 135,  335 => 134,  326 => 132,  321 => 131,  319 => 130,  316 => 129,  313 => 128,  309 => 127,  305 => 125,  299 => 124,  289 => 122,  275 => 120,  273 => 119,  264 => 118,  262 => 117,  255 => 116,  252 => 115,  248 => 114,  241 => 111,  232 => 105,  224 => 99,  218 => 98,  212 => 97,  204 => 94,  194 => 92,  191 => 91,  186 => 90,  182 => 89,  174 => 83,  163 => 81,  159 => 80,  154 => 78,  147 => 76,  141 => 75,  135 => 74,  126 => 70,  115 => 62,  104 => 56,  100 => 55,  80 => 37,  75 => 34,  73 => 33,  64 => 27,  60 => 26,  54 => 23,  48 => 20,  38 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/aqe/catalog/product_list.twig", "");
    }
}

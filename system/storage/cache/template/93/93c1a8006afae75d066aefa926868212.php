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

/* extension/module/aqe/catalog/category_list.twig */
class __TwigTemplate_4c080aa90a62e945a5256fc5b1fa6dc8 extends Template
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
        if (twig_in_filter("image", ($context["columns"] ?? null))) {
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
\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-nav-link\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        // line 75
        echo ($context["button_rebuild"] ?? null);
        echo "\" data-url=\"";
        echo ($context["rebuild"] ?? null);
        echo "\" id=\"btn-rebuild\" data-form=\"#pqe-list-form\" data-context=\"#content\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\"><i class=\"fa fa-refresh\"></i></button>
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
$context["col"], ["image", "top"])) {
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
$context["col"] == "parent")) {
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
                $context['_seq'] = twig_ensure_traversable(($context["_categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 159
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["c"], "category_id", [], "any", false, false, false, 159);
                    echo "\"";
                    echo ((((($__internal_compile_19 = ($context["filters"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[$context["col"]] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["c"], "category_id", [], "any", false, false, false, 159))) ? (" selected") : (""));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 159);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 163
$context["col"] == "filter")) {
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
                $context['_seq'] = twig_ensure_traversable(($context["_filters"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["fg"]) {
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                    echo addslashes(twig_get_attribute($this->env, $this->source, $context["fg"], "name", [], "any", false, false, false, 169));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 170
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["fg"], "filters", [], "any", false, false, false, 170));
                    foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                        // line 171
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["f"], "filter_id", [], "any", false, false, false, 171);
                        echo "\"";
                        echo ((((($__internal_compile_22 = ($context["filters"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[$context["col"]] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["f"], "filter_id", [], "any", false, false, false, 171))) ? (" selected") : (""));
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["f"], "name", [], "any", false, false, false, 171);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 173
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 177
$context["col"] == "store")) {
                // line 178
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = ($context["column_info"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 178);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"filter_";
                // line 179
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"*\"";
                // line 181
                echo ((((($__internal_compile_24 = ($context["filters"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[$context["col"]] ?? null) : null) == "*")) ? (" selected") : (""));
                echo ">";
                echo ($context["text_none"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 182
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["store_id"] => $context["s"]) {
                    // line 183
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $context["store_id"];
                    echo "\"";
                    echo (((((($__internal_compile_25 = ($context["filters"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[$context["col"]] ?? null) : null) != "") && ((($__internal_compile_26 = ($context["filters"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[$context["col"]] ?? null) : null) == $context["store_id"]))) ? (" selected") : (""));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 183);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['store_id'], $context['s'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 185
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (twig_in_filter(            // line 187
$context["col"], ["name", "seo"])) {
                // line 188
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = ($context["column_info"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 188);
                echo "\"><input type=\"text\" name=\"filter_";
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo " typeahead\" data-column=\"";
                echo $context["col"];
                echo "\" value=\"";
                echo (($__internal_compile_28 = ($context["filters"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[$context["col"]] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["text_autocomplete"] ?? null);
                echo "\"></th>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 191
                echo "\t\t\t\t\t\t\t\t\t\t<th class=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_29 = ($context["column_info"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 191);
                echo "\"><input type=\"text\" name=\"filter_";
                echo $context["col"];
                echo "\" class=\"form-control input-sm search_init fltr ";
                echo $context["col"];
                echo "\" data-column=\"";
                echo $context["col"];
                echo "\" value=\"";
                echo (($__internal_compile_30 = ($context["filters"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[$context["col"]] ?? null) : null);
                echo "\"></th>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 193
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 197
        if (($context["categories"] ?? null)) {
            // line 198
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 199
                echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t";
                // line 200
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 201
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (($context["col"] == "selector")) {
                        // line 202
                        echo "\t\t\t\t\t\t\t\t\t\t<td style=\"width:1px\" class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                        // line 203
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 203);
                        echo "\"";
                        echo ((twig_get_attribute($this->env, $this->source, $context["category"], "selected", [], "any", false, false, false, 203)) ? (" checked") : (""));
                        echo "/>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 205
$context["col"] == "image")) {
                        // line 206
                        echo "\t\t\t\t\t\t\t\t\t\t<td class=\"";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_31 = ($context["column_info"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 206);
                        echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_32 = ($context["column_info"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[$context["col"]] ?? null) : null), "qe_status", [], "any", false, false, false, 206)) ? ((" " . twig_get_attribute($this->env, $this->source, (($__internal_compile_33 = ($context["column_info"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[$context["col"]] ?? null) : null), "type", [], "any", false, false, false, 206))) : (""));
                        echo "\" id=\"";
                        echo (($context["col"] . "-") . twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 206));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 207
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 207);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 207);
                        echo "\" class=\"img-thumbnail\" data-id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 207);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 207);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 209
$context["col"] == "view_in_store")) {
                        // line 210
                        echo "\t\t\t\t\t\t\t\t\t\t<td class=\"view_store ";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_34 = ($context["column_info"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 210);
                        echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_35 = ($context["column_info"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[$context["col"]] ?? null) : null), "qe_status", [], "any", false, false, false, 210)) ? ((" " . twig_get_attribute($this->env, $this->source, (($__internal_compile_36 = ($context["column_info"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[$context["col"]] ?? null) : null), "type", [], "any", false, false, false, 210))) : (""));
                        echo "\" id=\"";
                        echo (($context["col"] . "-") . twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 210));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<select onchange=\"((this.value !== '') ? window.open(this.value) : null); this.value = '';\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 212
                        echo ($context["text_select"] ?? null);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 213
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_compile_37 = $context["category"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[$context["col"]] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                            // line 214
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 214);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 214);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 216
                        echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 218
$context["col"] == "action")) {
                        // line 219
                        echo "\t\t\t\t\t\t\t\t\t\t<td class=\"";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_38 = ($context["column_info"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 219);
                        echo " action\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 221
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "action", [], "any", false, false, false, 221));
                        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                            // line 222
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 222)) {
                                // line 223
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 223);
                                echo "\" class=\"btn btn-default btn-sm ";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 223);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 223);
                                echo "\" id=\"";
                                echo ((twig_get_attribute($this->env, $this->source, $context["action"], "action", [], "any", false, false, false, 223) . "-") . twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 223));
                                echo "\" data-toggle=\"tooltip\" data-container=\"body\" title=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 223);
                                echo "\"><i class=\"fa fa-";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 223);
                                echo "\"></i>";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 223);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 225
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn ";
                                echo ((twig_get_attribute($this->env, $this->source, $context["action"], "data", [], "any", false, false, false, 225)) ? ("btn-warning") : ("btn-default"));
                                echo " btn-sm action ";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 225);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 225);
                                echo "\" id=\"";
                                echo ((twig_get_attribute($this->env, $this->source, $context["action"], "action", [], "any", false, false, false, 225) . "-") . twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 225));
                                echo "\" data-toggle=\"tooltip\" data-container=\"body\" title=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 225);
                                echo "\" data-column=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "action", [], "any", false, false, false, 225);
                                echo "\"";
                                echo ((twig_get_attribute($this->env, $this->source, $context["action"], "rel", [], "any", false, false, false, 225)) ? (((" data-rel='" . twig_get_attribute($this->env, $this->source, $context["action"], "rel", [], "any", false, false, false, 225)) . "'")) : (""));
                                echo ">";
                                if (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 225)) {
                                    echo "<i class=\"fa fa-";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 225);
                                    echo "\"></i>";
                                }
                                echo twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 225);
                                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 227
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 228
                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 231
                        echo "\t\t\t\t\t\t\t\t\t\t<td class=\"";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_compile_39 = ($context["column_info"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[$context["col"]] ?? null) : null), "align", [], "any", false, false, false, 231);
                        echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_40 = ($context["column_info"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[$context["col"]] ?? null) : null), "qe_status", [], "any", false, false, false, 231)) ? ((" " . twig_get_attribute($this->env, $this->source, (($__internal_compile_41 = ($context["column_info"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[$context["col"]] ?? null) : null), "type", [], "any", false, false, false, 231))) : (""));
                        echo "\" id=\"";
                        echo (($context["col"] . "-") . twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 231));
                        echo "\">";
                        echo (($__internal_compile_42 = $context["category"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[$context["col"]] ?? null) : null);
                        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 233
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 234
                echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            echo "\t\t\t\t\t\t\t\t\t";
        } else {
            // line 237
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"";
            // line 238
            echo (twig_length_filter($this->env, ($context["columns"] ?? null)) + 1);
            echo "\">";
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        // line 241
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 247
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 248
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
        // line 256
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
bull5i.filter=function(){url='index.php?route=catalog/category&user_token=";
        // line 257
        echo ($context["user_token"] ?? null);
        echo "&sort=";
        echo ($context["sort"] ?? null);
        echo "&order=";
        echo ($context["order"] ?? null);
        echo "&aqer=1';
";
        // line 258
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_info"] ?? null));
        foreach ($context['_seq'] as $context["column"] => $context["val"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "filter", [], "any", false, false, false, 258), "show", [], "any", false, false, false, 258)) {
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "filter", [], "any", false, false, false, 258), "type", [], "any", false, false, false, 258) == 0)) {
                    // line 259
                    echo "var filter_";
                    echo $context["column"];
                    echo "=\$('input[name=\\'filter_";
                    echo $context["column"];
                    echo "\\']').not(':disabled').val();
if(filter_";
                    // line 260
                    echo $context["column"];
                    echo "){url+='&filter_";
                    echo $context["column"];
                    echo "='+encodeURIComponent(filter_";
                    echo $context["column"];
                    echo ");}
";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 261
$context["val"], "filter", [], "any", false, false, false, 261), "type", [], "any", false, false, false, 261) == 1)) {
                    // line 262
                    echo "var filter_";
                    echo $context["column"];
                    echo " = \$('select[name=\\'filter_";
                    echo $context["column"];
                    echo "\\']').val();
";
                    // line 263
                    if (twig_in_filter($context["column"], ["store", "parent", "filter"])) {
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
                    echo ");}
";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['column'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "location=url;}
";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_info"] ?? null));
        foreach ($context['_seq'] as $context["column"] => $context["val"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "filter", [], "any", false, false, false, 265), "autocomplete", [], "any", false, false, false, 265)) {
                // line 266
                echo "\$('input[name=\\'filter_";
                echo $context["column"];
                echo "\\']').autocomplete({source:function(request,response){\$.ajax({url:'index.php?route=extension/module/admin_quick_edit/catalog__category__autocomplete&user_token=";
                echo ($context["user_token"] ?? null);
                echo "&filter_";
                echo $context["column"];
                echo "='+encodeURIComponent(request),dataType:'json',success:function(json){response(\$.unique(\$.map(json,function(item){
";
                // line 267
                if (is_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "filter", [], "any", false, false, false, 267), "autocomplete", [], "any", false, false, false, 267), "return", [], "any", false, false, false, 267))) {
                    echo "return { ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "filter", [], "any", false, false, false, 267), "autocomplete", [], "any", false, false, false, 267), "return", [], "any", false, false, false, 267));
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
                    // line 268
                    echo "return item['";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "filter", [], "any", false, false, false, 268), "autocomplete", [], "any", false, false, false, 268), "return", [], "any", false, false, false, 268);
                    echo "']";
                }
                // line 269
                echo "})));}});},select:function(item){\$('input[name=\\'filter_";
                echo $context["column"];
                echo "\\']').val(item['label']);return false;}});";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['column'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        echo "\$(function(){\$(\".qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
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
        echo "\",onblur:\"ignore\",placeholder:\"\",html:!0}),\$(\".store_qe, .filter_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
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
        echo "\",html:!0}),\$(\".filters_qe,.descr_qe,.keyw_qe\").on(\"click\",function(e){e.preventDefault();var t=\$(this).attr(\"id\"),i=\$(this).attr(\"id\").split(\"-\")[1],l=\$(this).attr(\"id\").split(\"-\")[0],p={alerts:\$.merge(\$(\"#aqe-modal .notice\"),\$(\"#alerts\"))};bull5i.load_popup_data(\"";
        echo ($context["load_popup_url"] ?? null);
        echo "\",{id:t}).done(function(e){e.alerts&&bull5i.display_alerts(e.alerts,!0,p.alerts),bull5i.aqe_popup(e.title,e.popup,function(o){e={id:t,old:\"\",\"new\":\"\"},bull5i.batch_edit&&\$(\"input[name*='selected']:checked\").length&&(e.ids=\$(\"input[name*='selected']:checked\").serializeObject().selected),\$.extend(e,\$(\"#aqeQuickEditForm\").serializeHash()),bull5i.aqe_popup_update.call(p,\"";
        echo ($context["update_url"] ?? null);
        echo "\",e).done(function(t){(t===!0||t.success)&&bull5i.update_related(l,\$.unique(\$.merge([i],e.ids||[]))),\$.isFunction(o)&&o.call(null,t)}).fail(function(e){\$.isFunction(o)&&o.call(null,e)})},\"modal-lg\")})}),\$(\".status_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{data:\"";
        echo twig_trim_filter(($context["status_select"] ?? null));
        echo "\",type:\"bs_select\",indicator:\"";
        echo ($context["text_saving"] ?? null);
        echo "\",tooltip:\"";
        echo ($context["module_admin_quick_edit_tooltip"] ?? null);
        echo "\",event:\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\",onblur:\"cancel\"})";
        if (($context["single_lang_editing"] ?? null)) {
            echo ",\$(\".name_qe\").editable(function(e,t){var i={lang_id:\"";
            echo ($context["language_id"] ?? null);
            echo "\"};return bull5i.quick_update(this,e,t,\"";
            echo ($context["update_url"] ?? null);
            echo "\",i).done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{data:function(e){return \$.trim(e.replace(/^.*\\ &gt; (.*)\$/g,\"\$1\"))},type:\"bs_text\",indicator:\"";
            echo ($context["text_saving"] ?? null);
            echo "\",tooltip:\"";
            echo ($context["module_admin_quick_edit_tooltip"] ?? null);
            echo "\",event:\"";
            echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
            echo "\",onblur:\"cancel\",placeholder:\"\",select:!0})";
        } else {
            echo ",\$(\".name_qe\").editable(function(e,t){return t.indicator},{type:\"multilingual_edit\",indicator:\"";
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
        echo ",\$(\".parent_qe\").editable(function(e,t){return bull5i.quick_update(this,e,t,\"";
        echo ($context["update_url"] ?? null);
        echo "\").done(\$.proxy(bull5i.update_finished,{column:\$(this).attr(\"id\").split(\"-\")[0]})).fail(\$.proxy(bull5i.update_failed,this)),t.indicator},{data:\"";
        echo twig_trim_filter(($context["parent_select"] ?? null));
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
        echo "\",placeholder:\"\",onblur:\"cancel\"})});
}(window.bull5i=window.bull5i||{},jQuery));
//--></script>
";
        // line 273
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
        return "extension/module/aqe/catalog/category_list.twig";
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
        return array (  1071 => 1,  1067 => 11,  1063 => 9,  1061 => 8,  1058 => 7,  1056 => 6,  1053 => 5,  1051 => 4,  1048 => 3,  1045 => 2,  1031 => 1,  1025 => 273,  920 => 270,  911 => 269,  906 => 268,  889 => 267,  880 => 266,  875 => 265,  872 => 264,  848 => 263,  841 => 262,  839 => 261,  831 => 260,  824 => 259,  818 => 258,  810 => 257,  798 => 256,  787 => 248,  783 => 247,  775 => 241,  767 => 238,  764 => 237,  761 => 236,  754 => 234,  748 => 233,  737 => 231,  732 => 228,  726 => 227,  701 => 225,  683 => 223,  680 => 222,  676 => 221,  670 => 219,  668 => 218,  664 => 216,  653 => 214,  649 => 213,  645 => 212,  636 => 210,  634 => 209,  623 => 207,  615 => 206,  613 => 205,  606 => 203,  603 => 202,  600 => 201,  596 => 200,  593 => 199,  588 => 198,  586 => 197,  581 => 194,  575 => 193,  561 => 191,  544 => 188,  542 => 187,  538 => 185,  525 => 183,  521 => 182,  515 => 181,  506 => 179,  501 => 178,  499 => 177,  495 => 175,  488 => 173,  475 => 171,  471 => 170,  466 => 169,  462 => 168,  456 => 167,  447 => 165,  442 => 164,  440 => 163,  436 => 161,  423 => 159,  419 => 158,  413 => 157,  404 => 155,  399 => 154,  397 => 153,  391 => 150,  387 => 149,  381 => 147,  379 => 146,  371 => 143,  365 => 142,  356 => 140,  351 => 139,  349 => 138,  341 => 135,  335 => 134,  326 => 132,  321 => 131,  319 => 130,  316 => 129,  313 => 128,  309 => 127,  305 => 125,  299 => 124,  289 => 122,  275 => 120,  273 => 119,  264 => 118,  262 => 117,  255 => 116,  252 => 115,  248 => 114,  241 => 111,  232 => 105,  224 => 99,  218 => 98,  212 => 97,  204 => 94,  194 => 92,  191 => 91,  186 => 90,  182 => 89,  174 => 83,  163 => 81,  159 => 80,  154 => 78,  147 => 76,  141 => 75,  135 => 74,  126 => 70,  115 => 62,  104 => 56,  100 => 55,  80 => 37,  75 => 34,  73 => 33,  64 => 27,  60 => 26,  54 => 23,  48 => 20,  38 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/aqe/catalog/category_list.twig", "");
    }
}

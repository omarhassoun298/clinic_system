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

/* blog/blog_form.twig */
class __TwigTemplate_f0ca23ea17949c49dadd32abe70f232e extends Template
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
        <button type=\"submit\" form=\"form-blog\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
          <i class=\"fa fa-save\"></i>
        </button>
        <a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-secondary\">
          <i class=\"fa fa-reply\"></i>
        </a>
      </div>
      <nav aria-label=\"breadcrumb\">
            <h1>";
        // line 14
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <ol class=\"breadcrumb\">
          ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
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
        echo "        </ol>
      </nav>
    </div>
  </div>
  
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\">
        <i class=\"fa fa-pencil\"></i> ";
        // line 27
        echo ($context["text_form"] ?? null);
        echo "
      </div>
      <div class=\"card-body\">
        <form action=\"";
        // line 30
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blog\" class=\"row\">
          <div class=\"mb-3 row\">
            <label for=\"input-title\" class=\"col-md-2 col-form-label\">";
        // line 32
        echo ($context["entry_title"] ?? null);
        echo "</label>
            <div class=\"col-md-10\">
              <input type=\"text\" name=\"title\" id=\"input-title\" value=\"";
        // line 34
        echo ($context["title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 38
        echo ($context["entry_keyword"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"keyword\" value=\"\" placeholder=\"";
        // line 40
        echo ($context["entry_keyword"] ?? null);
        echo "\" id=\"input-keyword\" data-oc-target=\"autocomplete-keyword\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-keyword\" class=\"dropdown-menu\"></ul>
                <div class=\"input-group\">
                  <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                    <table id=\"blog-keyword\" class=\"table m-0\">
                      <tbody>
                        ";
        // line 46
        if (($context["blog_keywords"] ?? null)) {
            // line 47
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blog_keywords"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog_keyword"]) {
                // line 48
                echo "                            <tr id=\"blog-keyword-";
                echo twig_get_attribute($this->env, $this->source, $context["blog_keyword"], "keyword_id", [], "any", false, false, false, 48);
                echo "\">
                              <td>";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["blog_keyword"], "name", [], "any", false, false, false, 49);
                echo "<input type=\"hidden\" name=\"blog_keyword[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["blog_keyword"], "keyword_id", [], "any", false, false, false, 49);
                echo "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_keyword'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                        ";
        }
        echo "  
                      </tbody>
                    </table>
                  </div>
                  ";
        // line 57
        if (($context["master_id"] ?? null)) {
            // line 58
            echo "                    <div class=\"input-group-text\">
                      <div class=\"form-check form-switch\">
                        <input type=\"checkbox\" name=\"override[blog_keyword]\" value=\"1\" id=\"input-variant-keyword\" data-oc-toggle=\"switch\" data-oc-target=\"#input-keyword, #blog-keyword\" class=\"form-check-input\"";
            // line 60
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "blog_keyword", [], "any", false, false, false, 60)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-keyword\" class=\"form-check-label\"></label>
                      </div>
                    </div>
                  ";
        }
        // line 64
        echo "                </div>
                <div class=\"form-text\">";
        // line 65
        echo ($context["help_keyword"] ?? null);
        echo "</div>
              </div>
            </div>
          <div class=\"row mb-3\">
            <label for=\"input-Content\" class=\"col-sm-2 col-form-label\">Content</label>
            <div class=\"col-sm-10\">
              <textarea name=\"content\" placeholder=\"Content\" id=\"input-Content\" data-oc-toggle=\"ckeditor\" data-lang=\"";
        // line 71
        echo ($context["ckeditor"] ?? null);
        echo "\" class=\"form-control\">";
        echo ($context["content"] ?? null);
        echo "</textarea>
            </div>
          </div>    
          <div class=\"row mb-3\">
            <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 75
        echo ($context["entry_image"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"card image\">
                <img src=\"";
        // line 78
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/>
                <div class=\"card-body\">
                  <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 80
        echo ($context["button_edit"] ?? null);
        echo "</button>
                  <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 81
        echo ($context["button_clear"] ?? null);
        echo "</button>
                </div>
              </div>
            </div>
          </div>
           <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 87
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 91
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
              </div>
              <div class=\"form-text\">";
        // line 93
        echo ($context["help_status"] ?? null);
        echo "</div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<style>
.cke_notification_warning {
display: none ;
    }
</style>
<script src=\"view/javascript/ckeditor/ckeditor.js\"></script>
<script src=\"view/javascript/ckeditor/adapters/jquery.js\"></script>
<script type=\"text/javascript\">
// keyword
\$('#input-keyword').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=blog/keyword/autocomplete&user_token=";
        // line 113
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['keyword_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-keyword').val('');

        \$('#blog-keyword-' + item['value']).remove();

        html = '<tr id=\"blog-keyword-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"blog_keyword[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#blog-keyword tbody').append(html);
    }
});

\$('#blog-keyword').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});
</script>
<script type=\"text/javascript\">
  \$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '";
        // line 145
        echo ($context["ckeditor"] ?? null);
        echo "'
  });

  \$('#button-filter').on('click', function() {
    var url = '';
    var filter_name = \$('input[name=\\'filter_name\\']').val();

    if (filter_name) {
      url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    location = 'index.php?route=catalog/blog&user_token=";
        // line 156
        echo ($context["user_token"] ?? null);
        echo "' + url;
  });

  \$('button[form=\\'form-blog\\']').on('click', function(e) {
    \$('#form-blog').attr('action', \$(this).attr('formaction'));
  });

\$('#input-parent').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/blog/autocomplete&user_token=";
        // line 166
        echo ($context["user_token"] ?? null);
        echo "&filter_title=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                json.unshift({
                    'title': '";
        // line 170
        echo ($context["text_none"] ?? null);
        echo "',
                    'blog_id': '0'
                });

                response(\$.map(json, function (item) {
                    return {
                        value: item['blog_id'],
                        label: item['title']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-parent').val(item['label']);
        \$('#input-parent-id').val(item['value']);
    }
});
  
</script>

";
        // line 191
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "blog/blog_form.twig";
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
        return array (  357 => 191,  333 => 170,  326 => 166,  313 => 156,  299 => 145,  264 => 113,  241 => 93,  234 => 91,  227 => 87,  218 => 81,  214 => 80,  205 => 78,  199 => 75,  190 => 71,  181 => 65,  178 => 64,  169 => 60,  165 => 58,  163 => 57,  155 => 53,  143 => 49,  138 => 48,  133 => 47,  131 => 46,  122 => 40,  117 => 38,  108 => 34,  103 => 32,  98 => 30,  92 => 27,  82 => 19,  71 => 17,  67 => 16,  62 => 14,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/blog_form.twig", "");
    }
}

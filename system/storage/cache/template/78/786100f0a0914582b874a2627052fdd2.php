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

/* journal3/template/journal3/blog/post.twig */
class __TwigTemplate_d2b737a576c69e718b16c8eb93bcba0d extends Template
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
        echo "
";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 2) == "top")) {
            // line 3
            echo "  <h1 class=\"title page-title ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 3);
            echo "\"><span class=\"page-title-text\">";
            echo ($context["post_name"] ?? null);
            echo "</span></h1>
";
        }
        // line 5
        echo "<div class=\"breadcrumbs ";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["breadcrumbs_color_scheme"], "method", false, false, false, 5);
        echo "\">
  <ul class=\"breadcrumb\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  </ul>
</div>
";
        // line 12
        echo ($context["journal3_top"] ?? null);
        echo "
<div class=\"container blog-post\">
  <div class=\"row\">";
        // line 14
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\">
      ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 16) == "default")) {
            // line 17
            echo "        <h1 class=\"title page-title ";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 17);
            echo "\">";
            echo ($context["post_name"] ?? null);
            echo "</h1>
      ";
        }
        // line 19
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"post-details\">
        <div class=\"post-image\">
          ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["datePosition"], "method", false, false, false, 22) == "image")) {
            // line 23
            echo "            <span class=\"p-date p-date-image\">";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "blog_date", [($context["post_date"] ?? null)], "method", false, false, false, 23);
            echo "</span>
          ";
        }
        // line 25
        echo "          <img src=\"";
        echo ($context["post_image"] ?? null);
        echo "\" ";
        if (($context["post_image2x"] ?? null)) {
            echo " srcset=\"";
            echo ($context["post_image"] ?? null);
            echo " 1x, ";
            echo ($context["post_image2x"] ?? null);
            echo " 2x\" ";
        }
        echo " width=\"";
        echo ($context["image_width"] ?? null);
        echo "\" height=\"";
        echo ($context["image_height"] ?? null);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["post_name"] ?? null));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, ($context["post_name"] ?? null));
        echo "\"/>
        </div>
        <div class=\"post-stats-wrapper\">
          <div class=\"post-stats\">
            ";
        // line 29
        if (($context["post_author"] ?? null)) {
            // line 30
            echo "              <span class=\"p-posted\">";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogPostedByText"], "method", false, false, false, 30);
            echo "</span>
              <span class=\"p-author\">";
            // line 31
            echo ($context["post_author"] ?? null);
            echo "</span>
            ";
        }
        // line 33
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["datePosition"], "method", false, false, false, 33) == "default")) {
            // line 34
            echo "              <span class=\"p-date p-date-default\">";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "blog_date", [($context["post_date"] ?? null)], "method", false, false, false, 34);
            echo "</span>
            ";
        }
        // line 36
        echo "            <span class=\"p-comment\">";
        echo twig_length_filter($this->env, ($context["comments"] ?? null));
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogCommentsText"], "method", false, false, false, 36);
        echo "</span>
            <span class=\"p-view\">";
        // line 37
        echo ($context["post_views"] ?? null);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogViewsText"], "method", false, false, false, 37);
        echo "</span>
            ";
        // line 38
        if (($context["post_categories"] ?? null)) {
            // line 39
            echo "              <span class=\"p-category\">
          ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post_categories"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 41
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 41);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41);
                echo "</a>
            ";
                // line 42
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "            <span>, </span>
          ";
                }
                // line 45
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "          </span>
            ";
        }
        // line 48
        echo "          </div>
        </div>
        <div class=\"post-content\">
          ";
        // line 51
        echo ($context["post_content"] ?? null);
        echo "
        </div>
        ";
        // line 53
        if (($context["post_gallery"] ?? null)) {
            // line 54
            echo "          <div class=\"post-gallery\">
            ";
            // line 55
            echo ($context["post_gallery"] ?? null);
            echo "
          </div>
        ";
        }
        // line 58
        echo "        ";
        if (($context["post_tags"] ?? null)) {
            // line 59
            echo "          <div class=\"tags\">
            <span class=\"tags-title\">";
            // line 60
            echo ($context["text_tags"] ?? null);
            echo "</span>
            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post_tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 62
                echo "              <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 62);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 62);
                echo "</a><b>,</b>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "          </div>
        ";
        }
        // line 66
        echo "      </div>

      ";
        // line 68
        echo ($context["content_bottom"] ?? null);
        echo "

      ";
        // line 70
        if (($context["allow_comments"] ?? null)) {
            // line 71
            echo "        <div class=\"post-comments\">
          ";
            // line 72
            if ((($context["comments_total"] ?? null) > 0)) {
                // line 73
                echo "            <h3 class=\"title\">";
                echo ($context["comments_total"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogCommentsText"], "method", false, false, false, 73);
                echo "</h3>
          ";
            }
            // line 75
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 76
                echo "            <div class=\"post-comment\" data-comment-id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "comment_id", [], "any", false, false, false, 76);
                echo "\" data-has-form=\"false\">
              <img class=\"user-avatar\" src=\"https://s.gravatar.com/avatar/";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "avatar", [], "any", false, false, false, 77);
                echo "?s=";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 77);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 77);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 77);
                echo "\" alt=\"\">
              <div class=\"comment\">
                <div class=\"user-name\">";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "name", [], "any", false, false, false, 79);
                echo ":</div>
                <div class=\"user-data\">
                  <div>
                    <span class=\"user-date p-date\">";
                // line 82
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "blog_date", [twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 82)], "method", false, false, false, 82);
                echo "</span>
                    <span class=\"user-time p-time\">";
                // line 83
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 83), ($context["time_format"] ?? null));
                echo "</span>
                  </div>
                  ";
                // line 85
                if (twig_get_attribute($this->env, $this->source, $context["comment"], "website", [], "any", false, false, false, 85)) {
                    // line 86
                    echo "                    <span class=\"user-site p-site\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["comment"], "website", [], "any", false, false, false, 86);
                    echo "\" target=\"_blank\">";
                    echo twig_get_attribute($this->env, $this->source, $context["comment"], "website", [], "any", false, false, false, 86);
                    echo "</a></span>
                  ";
                }
                // line 88
                echo "                </div>
                <a class=\"btn reply-btn\">";
                // line 89
                echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogReplyText"], "method", false, false, false, 89);
                echo "</a>
                <p>";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 90);
                echo "</p>
                ";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["comment"], "replies", [], "any", false, false, false, 91));
                foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                    // line 92
                    echo "                  <div class=\"post-reply\">
                    <img class=\"user-avatar\" src=\"https://s.gravatar.com/avatar/";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["comment"], "avatar", [], "any", false, false, false, 93);
                    echo "?s=";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 93);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 93);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 93);
                    echo "\" alt=\"\">
                    <div class=\"comment\">
                      <div class=\"user-name\">";
                    // line 95
                    echo twig_get_attribute($this->env, $this->source, $context["reply"], "name", [], "any", false, false, false, 95);
                    echo ":</div>
                      <div class=\"user-data\">
                        <div>
                          <span class=\"user-date p-date\">";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "blog_date", [twig_get_attribute($this->env, $this->source, $context["reply"], "date", [], "any", false, false, false, 98)], "method", false, false, false, 98);
                    echo "</span>
                          <span class=\"user-time p-time\">";
                    // line 99
                    echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reply"], "date", [], "any", false, false, false, 99), ($context["time_format"] ?? null));
                    echo "</span>
                        </div>
                        ";
                    // line 101
                    if (twig_get_attribute($this->env, $this->source, $context["reply"], "website", [], "any", false, false, false, 101)) {
                        // line 102
                        echo "                          <span class=\"user-site p-site\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "website", [], "any", false, false, false, 102);
                        echo "\" target=\"_blank\">";
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "website", [], "any", false, false, false, 102);
                        echo "</a></span>
                        ";
                    }
                    // line 104
                    echo "                      </div>
                      <p>";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["reply"], "comment", [], "any", false, false, false, 105);
                    echo "</p>
                    </div>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "          <div class=\"comment-form\">
            <h3 class=\"title\">";
            // line 113
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogLeaveCommentText"], "method", false, false, false, 113);
            echo "</h3>
            <form method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
              <fieldset>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 117
            echo ($context["entry_name"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"name\" value=\"";
            // line 119
            echo ($context["default_name"] ?? null);
            echo "\" id=\"input-name\" class=\"form-control\"/>
                  </div>
                </div>

                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-email\">";
            // line 124
            echo ($context["entry_email"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"email\" value=\"";
            // line 126
            echo ($context["default_email"] ?? null);
            echo "\" id=\"input-email\" class=\"form-control\"/>

                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-website\">";
            // line 132
            echo ($context["entry_website"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"website\" value=\"";
            // line 134
            echo ($context["default_website"] ?? null);
            echo "\" id=\"input-website\" class=\"form-control\"/>
                  </div>
                </div>

                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
            // line 139
            echo ($context["text_comment"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"10\" id=\"input-comment\" class=\"form-control\">";
            // line 141
            echo ($context["default_comment"] ?? null);
            echo "</textarea>
                  </div>
                </div>
              </fieldset>

              ";
            // line 146
            if (($context["captcha"] ?? null)) {
                // line 147
                echo "              <div class=\"input-captcha\">";
                echo ($context["captcha"] ?? null);
                echo "</div>
              ";
            }
            // line 149
            echo "
              <div class=\"buttons\">
                <div class=\"pull-right\">
                  <button type=\"button\" class=\"btn comment-submit\">";
            // line 152
            echo ($context["button_submit"] ?? null);
            echo "</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        ";
            // line 158
            if ((($context["comments_total"] ?? null) > 0)) {
                // line 159
                echo "        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">";
                // line 160
                echo ($context["pagination"] ?? null);
                echo "</div>
          <div class=\"col-sm-6 text-right\">";
                // line 161
                echo ($context["results"] ?? null);
                echo "</div>
        </div>
        ";
            }
            // line 164
            echo "      ";
        }
        // line 165
        echo "
    </div>
    ";
        // line 167
        echo ($context["column_right"] ?? null);
        echo "
  </div>
  ";
        // line 169
        if (($context["allow_comments"] ?? null)) {
            // line 170
            echo "    <script type=\"text/javascript\">
      function generateComment(\$form, cls, \$appendTo, callback) {
        \$form.find('.has-error').removeClass('has-error');

        \$.post('index.php?route=journal3/blog";
            // line 174
            echo twig_constant("JOURNAL3_ROUTE_SEPARATOR");
            echo "comment&post_id=";
            echo ($context["post_id"] ?? null);
            echo "', \$form.serializeArray(), function (response) {
          if (response.status === 'success') {
            if (response.response.data) {
              var html = '';

              html += '<div class=\"' + cls + '\" data-comment-id=\"' + response.response.data.comment_id + '\" data-has-form=\"false\">';
              html += ' <img class=\"user-avatar\" src=\"https://s.gravatar.com/avatar/' + response.response.data.avatar + '?s=";
            // line 180
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 180);
            echo "\" width=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 180);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 180);
            echo "\" alt=\"\">';
              html += ' <div class=\"comment\">';
              html += '   <div class=\"user-name\">' + response.response.data.name + ':</div>';
              html += '   <div class=\"user-data\">';
              html += '     <div>';
              html += '       <span class=\"user-date p-date\">' + response.response.data.date + '</span>';
              html += '       <span class=\"user-time p-time\">' + response.response.data.time + '</span>';
              html += '     </div>';
              html += '     <span class=\"user-site p-site\"><a href=\"' + response.response.data.website + '\" target=\"_blank\">' + response.response.data.website + '</a></span>';
              html += '   </div>';

              if (cls === 'post-comment') {
                html += ' <a class=\"btn reply-btn\">";
            // line 192
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogReplyText"], "method", false, false, false, 192);
            echo "</a>';
              }

              html += ' <p>' + response.response.data.comment + '</p>';
              html += '</div>';

              \$appendTo.before(html);
            }

            callback && callback(response.response.message);
          }

          if (response.status === 'error') {
            \$.each(response.response.errors, function (field) {
              if (field === 'captcha') {
                \$form.find('.input-captcha .form-group').addClass('has-error');
              } else {
                \$form.find('[name=\"' + field + '\"]').closest('.form-group').addClass('has-error');
              }
            });
          }
        }, 'json');
      }

      \$(document).delegate('.reply-btn', 'click', function () {
        var \$comment = \$(this).closest('.post-comment');

        if (\$comment.attr('data-has-form') === 'false') {
          var \$form = \$('.post-comments form').clone(true, true);
          \$form.find('script').remove();
          \$form.find('.g-recaptcha').html('');
          \$form.find('.has-error').removeClass('has-error');
          \$form.append('<input type=\"hidden\" name=\"parent_id\" value=\"' + \$comment.attr('data-comment-id') + '\" />');
          \$form.find('button').removeClass('comment-submit').addClass('reply-submit');
          \$comment.find('> .comment').append('<div class=\"reply-form\"><h3 class=\"title\">' + '";
            // line 226
            echo twig_get_attribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogLeaveReplyText"], "method", false, false, false, 226);
            echo "' + '</h3><div class=\"comment-form\"><div><form class=\"form-horizontal\">' + \$form.html() + '</form></div></div></div>');
          \$comment.attr('data-has-form', 'true');
          var gc = \$comment.find('.reply-form .g-recaptcha');
          if (gc.length && window.grecaptcha) {
            window.grecaptcha.render(gc[0]);
          }
        } else {
          \$comment.find('.reply-form').remove();
          \$comment.attr('data-has-form', 'false');
        }
      });

      \$(document).delegate('form .comment-submit', 'click', function () {
        var \$form = \$(this).closest('form');
        var \$comment_form = \$('.comment-form');

        generateComment(\$form, 'post-comment', \$comment_form, function (message) {
          show_message({
            message: message,
          });
          \$form[0].reset();
        });
      });

      \$(document).delegate('form .reply-submit', 'click', function () {
        var \$form = \$(this).closest('form');
        var \$reply_form = \$(this).closest('.post-comment').find('.reply-form');

        generateComment(\$form, 'post-reply', \$reply_form, function (message) {
          show_message({
            message: message,
          });
          \$form.closest('.post-comment').attr('data-has-form', 'false');
          \$reply_form.remove();
        });
      });
    </script>
  ";
        }
        // line 264
        echo "</div>
";
        // line 265
        echo ($context["journal3_rich_snippets"] ?? null);
        echo "
";
        // line 266
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "journal3/template/journal3/blog/post.twig";
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
        return array (  652 => 266,  648 => 265,  645 => 264,  604 => 226,  567 => 192,  548 => 180,  537 => 174,  531 => 170,  529 => 169,  524 => 167,  520 => 165,  517 => 164,  511 => 161,  507 => 160,  504 => 159,  502 => 158,  493 => 152,  488 => 149,  482 => 147,  480 => 146,  472 => 141,  467 => 139,  459 => 134,  454 => 132,  445 => 126,  440 => 124,  432 => 119,  427 => 117,  420 => 113,  417 => 112,  409 => 109,  399 => 105,  396 => 104,  388 => 102,  386 => 101,  381 => 99,  377 => 98,  371 => 95,  360 => 93,  357 => 92,  353 => 91,  349 => 90,  345 => 89,  342 => 88,  334 => 86,  332 => 85,  327 => 83,  323 => 82,  317 => 79,  306 => 77,  301 => 76,  296 => 75,  288 => 73,  286 => 72,  283 => 71,  281 => 70,  276 => 68,  272 => 66,  268 => 64,  257 => 62,  253 => 61,  249 => 60,  246 => 59,  243 => 58,  237 => 55,  234 => 54,  232 => 53,  227 => 51,  222 => 48,  218 => 46,  204 => 45,  200 => 43,  198 => 42,  191 => 41,  174 => 40,  171 => 39,  169 => 38,  163 => 37,  156 => 36,  150 => 34,  147 => 33,  142 => 31,  137 => 30,  135 => 29,  111 => 25,  105 => 23,  103 => 22,  96 => 19,  88 => 17,  86 => 16,  81 => 14,  76 => 12,  72 => 10,  61 => 8,  57 => 7,  51 => 5,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/blog/post.twig", "");
    }
}

<?php

/* __string_template__74ecd7b093ba514281ffbf2817f01a2173688d99e9d6f820837c0d333a91dcb2 */
class __TwigTemplate_095bf754c1693376522f96684ca6a88f5f0c80b7fe3d354baaac9b6e07dfc2df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__74ecd7b093ba514281ffbf2817f01a2173688d99e9d6f820837c0d333a91dcb2", 13);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 15
        $context["menus"] = array(0 => "content", 1 => "admin_recommend");
        // line 13
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        echo "おすすめ商品管理";
    }

    // line 18
    public function block_sub_title($context, array $blocks = array())
    {
        echo "おすすめ商品内容設定";
    }

    // line 20
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 21
        echo "    <style type=\"text/css\">
        .item_list .item_box .item_photo {
            padding-left: 0px;
        }
        .sortable_list .icon_sortable {
            top: auto;
            position: relative;
            margin: auto;
            vertical-align: middle;
        }
        .table_list tr > th, .table_list tr > td {
             border-left: none;
        }
        .ui-sortable-helper {
            display: table;
        }
    </style>

";
    }

    // line 41
    public function block_javascript($context, array $blocks = array())
    {
        // line 42
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.core.min.js\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.widget.min.js\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js\"></script>
    <script type=\"text/javascript\">
        \$(function () {
            var oldRanks = [];
            // 画面の中のrank一覧を保持
            \$(\"div.item_list .item_box\").each(function() {
                oldRanks.push(this.dataset.rank);
            });
            // reverse sort
            oldRanks.sort(function(a,b){return a - b;}).reverse();

            \$(\"div.item_list\").sortable({
                items: '.item_box',
                cursor: 'move',
                update: function(e, ui) {
                    \$(\"body\").append(\$('<div class=\"modal-backdrop in\"></div>'));
                    updateRank();
                }
            });

            var updateRank = function() {
                // 並び替え後にrankを更新
                var newRanks = {};
                var i = 0;
                \$(\"div.item_list .item_box\").each(function() {
                    newRanks[this.dataset.recommendId] = oldRanks[i];
                    i++;
                });
                \$.ajax({
                    url: '";
        // line 74
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_recommend_rank_move");
        echo "',
                    type: 'POST',
                    data: newRanks
                }).done(function(data) {
                    \$(\".modal-backdrop\").remove();
                }).fail(function(data) {
                    alert('Error!!');
                    \$(\".modal-backdrop\").remove();
                });
            };
        })
    </script>
";
    }

    // line 88
    public function block_main($context, array $blocks = array())
    {
        // line 89
        echo "<form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div id=\"sortable_list\" class=\"box\">
                <div class=\"box-header with-arrow\">
                    <h3 class=\"box-title\"><span class=\"normal\"><strong>";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["total_item_count"]) ? $context["total_item_count"] : null), "html", null, true);
        echo " 件</strong> が該当しました</span></h3>
                </div><!-- /.box-header -->

                ";
        // line 97
        if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
            // line 98
            echo "                <div id=\"sortable_list_box\" class=\"box-body no-padding no-border\">
                    <div class=\"sortable_list\">
                        <div class=\"item_list\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover\">
                                    <colgroup>
                                        <col width=\"2%\">
                                        <col>
                                        <col width=\"10%\">
                                        <col>
                                        <col width=\"5%\">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>商品画像</th>
                                            <th>商品名</th>
                                            <th>説明文</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["RecommendProduct"]) {
                // line 121
                echo "                                    <tr class=\"item_box tr\" data-rank=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["RecommendProduct"], "rank", array()), "html", null, true);
                echo "\" data-recommend-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["RecommendProduct"], "id", array()), "html", null, true);
                echo "\">
                                            <td class=\"icon_sortable td\">
                                                <svg class=\"cb cb-ellipsis-v\"> <use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#cb-ellipsis-v\"></use></svg>
                                            </td>
                                        <td id=\"product_image\" class=\"item_photo td\">

                                            <a href=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_recommend_edit", array("id" => $this->getAttribute($context["RecommendProduct"], "id", array()))), "html", null, true);
                echo "\" >
                                                <img src=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "mainFileName", array())), "html", null, true);
                echo "\"/>
                                            </a>
                                        </td>
                                        <td class=\"product_name\">
                                            <a href=\"";
                // line 132
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_recommend_edit", array("id" => $this->getAttribute($context["RecommendProduct"], "id", array()))), "html", null, true);
                echo "\" >
                                                ";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "name", array()), "html", null, true);
                echo "
                                                <br>
                                                ";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "code_min", array()), "html", null, true);
                echo "
                                                ";
                // line 136
                if (($this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "code_min", array()) != $this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "code_max", array()))) {
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "code_max", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 138
                echo "                                            </a>
                                        </td>
                                        <td class=\"comment\">";
                // line 140
                echo nl2br($this->getAttribute($context["RecommendProduct"], "comment", array()));
                echo "</td>
                                        <td class=\"icon_edit\">
                                            <div class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li>
                                                        <a href=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_recommend_edit", array("id" => $this->getAttribute($context["RecommendProduct"], "id", array()))), "html", null, true);
                echo "\" >編集</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"";
                // line 149
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_recommend_delete", array("id" => $this->getAttribute($context["RecommendProduct"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-message=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.plugin.recommend.delete.confirm"), "html", null, true);
                echo "\">削除</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                   </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RecommendProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->
                ";
        }
        // line 163
        echo "            </div><!-- /.box -->
        </div><!-- /.col -->
    </div>
<div class=\"row\">
    <div class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
        <a href=\"";
        // line 168
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_recommend_new");
        echo "\" class=\"btn btn-primary btn-block btn-lg\">おすすめ商品を新規登録</a>
    </div>
</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "__string_template__74ecd7b093ba514281ffbf2817f01a2173688d99e9d6f820837c0d333a91dcb2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 168,  273 => 163,  264 => 156,  247 => 149,  241 => 146,  232 => 140,  228 => 138,  221 => 136,  217 => 135,  212 => 133,  208 => 132,  199 => 128,  195 => 127,  183 => 121,  179 => 120,  155 => 98,  153 => 97,  147 => 94,  140 => 89,  137 => 88,  120 => 74,  88 => 45,  84 => 44,  80 => 43,  75 => 42,  72 => 41,  50 => 21,  47 => 20,  41 => 18,  35 => 17,  31 => 13,  29 => 15,  11 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__74ecd7b093ba514281ffbf2817f01a2173688d99e9d6f820837c0d333a91dcb2", "");
    }
}

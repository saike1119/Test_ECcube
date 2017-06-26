<?php

/* __string_template__996c0b3975a851168351f883e4fc262c54b71d2312dd788b8aa34eaf152fdf20 */
class __TwigTemplate_f995d7f4bbbbc2d2eff4da2d02306f313211daca9533d8fec3a7b24279121ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__996c0b3975a851168351f883e4fc262c54b71d2312dd788b8aa34eaf152fdf20", 9);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
            'modal' => array($this, 'block_modal'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["menus"] = array(0 => "content", 1 => "admin_recommend");
        // line 16
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 17
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["searchProductModalForm"]) ? $context["searchProductModalForm"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "おすすめ商品管理";
    }

    // line 14
    public function block_sub_title($context, array $blocks = array())
    {
        echo "おすすめ商品内容設定";
    }

    // line 19
    public function block_javascript($context, array $blocks = array())
    {
        // line 20
        echo "<script>
    var recommend = '";
        // line 21
        echo (isset($context["recommend_products"]) ? $context["recommend_products"] : null);
        echo "';

    \$(function() {
        \$('#showSearchProductModal').on('click', function() {
                var tbody = \$('#searchProductModalList tbody');
                tbody.children().remove();
                \$('div.box-footer').remove();
            }
        );

        \$('#searchProductModalButton').on('click', function() {
            var list = \$('#searchProductModalList');
            list.children().remove();
            \$.ajax({
                type: 'POST',
                dataType: 'html',
                data: {
                    'id' : \$('#admin_search_product_id').val(),
                    'category_id' : \$('#admin_search_product_category_id').val()
                },
                url: '";
        // line 41
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_recommend_search_product");
        echo "',
                success: function(data) {
                    // モーダルに結果を書き出し.
                    \$('#searchProductModalList').html(data);

                },
                error: function() {
                    alert('Search product failed.');
                }
            });
        });
    });
</script>
";
    }

    // line 56
    public function block_main($context, array $blocks = array())
    {
        // line 57
        echo "<div class=\"row\" id=\"aside_wrap\">
    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\">
    ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
        <div class=\"col-md-9\">
            <div class=\"box accordion\">
                <div class=\"box-header toggle active\">
                    <h3 class=\"box-title\">おすすめ商品情報<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
                </div><!-- /.box-header -->
                <div class=\"box-body accpanel\" style=\"display: block;\">
                    <div class=\"order_list form-horizontal\">
                        ";
        // line 68
        echo "                        <div class=\"form-group\" style=\"display: none;\">
                            ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'widget');
        echo "
                                ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'errors');
        echo "
                            </div>
                        </div>
                        ";
        // line 76
        echo "                        <div class=\"form-group\" style=\"display: block;\">
                            ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 79
        if ( !(null === (isset($context["Product"]) ? $context["Product"] : null))) {
            // line 80
            echo "                                    <div id=\"product_image\">
                                        <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_product_edit", array("id" => $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "id", array()))), "html", null, true);
            echo "\" id=\"product_image_link\">
                                            <img src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "mainFileName", array())), "html", null, true);
            echo "\" style=\"max-width: 135px;\" id=\"product_image_img\"/>
                                        </a>
                                    </div>
                                    <br>
                                    <p id=\"product_name\">
                                        ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "name", array()), "html", null, true);
            echo "
                                    </p>
                                    <br>
                                    <p id=\"product_code\">
                                        ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_min", array()), "html", null, true);
            echo "
                                        ";
            // line 92
            if (($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_min", array()) != $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_max", array()))) {
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_max", array()), "html", null, true);
                echo "
                                        ";
            }
            // line 94
            echo "                                    </p>
                                ";
        } else {
            // line 96
            echo "                                    <div id=\"product_image\" class=\"hidden\">
                                        <a href=\"\" id=\"product_image_link\">
                                            <img src=\"\" style=\"max-width: 135px;\" id=\"product_image_img\"/>
                                        </a>
                                    </div>
                                    <p id=\"product_name\" class=\"hidden\"></p>
                                    <p id=\"product_code\" class=\"hidden\"></p>
                                ";
        }
        // line 104
        echo "                                <div class=\"row col-sm-3 col-lg-3\">
                                    <a id=\"showSearchProductModal\" class=\"btn btn-default btn-block btn-sm\" data-toggle=\"modal\" data-target=\"#searchProductModal\">商品の追加</a>
                                </div>
                                <div class=\"clearfix\"></div>
                                ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Product", array()), 'widget');
        echo "
                                ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Product", array()), 'errors');
        echo "
                                <div id=\"warning\" class=\"text-info\"></div>
                            </div>
                        </div>
                        ";
        // line 114
        echo "                        <div class=\"form-group\">
                            ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comment", array()), 'label');
        echo "
                            <div class=\"col-sm-9 col-lg-10\">
                                ";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comment", array()), 'widget');
        echo "
                                ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comment", array()), 'errors');
        echo "
                                <p class=\"text-muted\" style=\"text-align: right\">（最大4000文字）</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            <div class=\"row\">
                <div class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
                    <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">登録</button>
                    <p><a href=\"";
        // line 128
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_recommend_list");
        echo "\">戻る</a></p>
                </div>
            </div>

        </div><!-- /.col -->
    </form>
</div>
";
    }

    // line 137
    public function block_modal($context, array $blocks = array())
    {
        // line 143
        echo "<div class=\"modal\" id=\"searchProductModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"modal-close\" aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">商品検索</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    ";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchProductModalForm"]) ? $context["searchProductModalForm"] : null), "id", array()), 'widget', array("attr" => array("placeholder" => "商品名・ID・コード")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchProductModalForm"]) ? $context["searchProductModalForm"] : null), "category_id", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    <button type=\"button\" id=\"searchProductModalButton\" class=\"btn btn-primary\" >検索</button>
                </div>
                <div class=\"form-group\" id=\"searchProductModalList\">
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__996c0b3975a851168351f883e4fc262c54b71d2312dd788b8aa34eaf152fdf20";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 155,  261 => 152,  250 => 143,  247 => 137,  235 => 128,  222 => 118,  218 => 117,  213 => 115,  210 => 114,  203 => 109,  199 => 108,  193 => 104,  183 => 96,  179 => 94,  172 => 92,  168 => 91,  161 => 87,  151 => 82,  147 => 81,  144 => 80,  142 => 79,  137 => 77,  134 => 76,  128 => 72,  124 => 71,  119 => 69,  116 => 68,  105 => 59,  101 => 57,  98 => 56,  80 => 41,  57 => 21,  54 => 20,  51 => 19,  45 => 14,  39 => 13,  35 => 9,  33 => 17,  31 => 16,  29 => 11,  11 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__996c0b3975a851168351f883e4fc262c54b71d2312dd788b8aa34eaf152fdf20", "");
    }
}

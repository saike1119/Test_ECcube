<?php

/* __string_template__933ad79f56971f6a46c64b80116dcc91305161255b58fce5cff478e81b755e76 */
class __TwigTemplate_e5fb14cd3d2ef2584e4d4e5809bcab0698ad51065b9d2f6b91fd8e2a2cc9a408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 24
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__933ad79f56971f6a46c64b80116dcc91305161255b58fce5cff478e81b755e76", 24);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 26
        $context["menus"] = array(0 => "content", 1 => "block");
        // line 24
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        echo "コンテンツ管理";
    }

    // line 29
    public function block_sub_title($context, array $blocks = array())
    {
        echo "ブロック管理";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "<form name=\"content_block_form\" id=\"content_block_form\" method=\"post\" action=\"\">
    <div id=\"block_wrap\" class=\"container-fluid\">
        <div id=\"block_list\" class=\"row\">
            <div id=\"block_list_box\" class=\"col-md-12\">
                <div id=\"block_list_box__body\" class=\"box\">
                    <div id=\"block_list_box__header\" class=\"box-header\">
                        <div class=\"box-title\">
                            ブロック一覧
                        </div>
                    </div>
                    <div id=\"sortable_list\" class=\"box-body no-padding no-border\">
                        <div id=\"sortable_list_box\" class=\"sortable_list\">
                            <div id=\"sortable_list__list\"class=\"tableish\">
                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Blocks"]) ? $context["Blocks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Block"]) {
            // line 46
            echo "                                    <div id=\"sortable_list__item--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Block"], "id", array()), "html", null, true);
            echo "\" class=\"item_box tr\">
                                        <div id=\"sortable_list__name--";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["Block"], "id", array()), "html", null, true);
            echo "\" class=\"item_pattern td\">
                                            ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["Block"], "name", array()), "html", null, true);
            echo "
                                        </div>
                                        <div id=\"sortable_list__menu_box--";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["Block"], "id", array()), "html", null, true);
            echo "\" class=\"icon_edit td\">
                                            <div id=\"sortable_list__menu_box_toggle--";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["Block"], "id", array()), "html", null, true);
            echo "\" class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                                <ul id=\"sortable_list__menu--";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["Block"], "id", array()), "html", null, true);
            echo "\" class=\"dropdown-menu dropdown-menu-right\">
                                                    <li>
                                                        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_content_block_edit", array("id" => $this->getAttribute($context["Block"], "id", array()))), "html", null, true);
            echo "\">編集</a>
                                                    </li>
                                                    <li>
                                                        ";
            // line 58
            if (($this->getAttribute($context["Block"], "deletable_flg", array()) == 1)) {
                // line 59
                echo "                                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_content_block_delete", array("id" => $this->getAttribute($context["Block"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-message=\"このブロックを削除してもよろしいですか？\">削除</a>
                                                        ";
            } else {
                // line 61
                echo "                                                            <a>削除</a>
                                                        ";
            }
            // line 63
            echo "                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- /.item_box -->
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->

            <div id=\"block_list__footer\" class=\"row btn_area2\">
                <div id=\"block_list__insert_button\" class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center\">
                    <a class=\"btn btn-primary btn-block btn-lg\" href=\"";
        // line 77
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_content_block_new");
        echo "\">新規入力</a>
                </div>
            </div>

        </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "__string_template__933ad79f56971f6a46c64b80116dcc91305161255b58fce5cff478e81b755e76";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 77,  126 => 69,  115 => 63,  111 => 61,  103 => 59,  101 => 58,  95 => 55,  90 => 53,  85 => 51,  81 => 50,  76 => 48,  72 => 47,  67 => 46,  63 => 45,  48 => 32,  45 => 31,  39 => 29,  33 => 28,  29 => 24,  27 => 26,  11 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__933ad79f56971f6a46c64b80116dcc91305161255b58fce5cff478e81b755e76", "");
    }
}

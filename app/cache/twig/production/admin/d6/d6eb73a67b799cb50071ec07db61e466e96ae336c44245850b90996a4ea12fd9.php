<?php

/* __string_template__bff8df7afddfedb3f101fbf9de952d8acb6e213ed44197d467ac9cd33a8a1ed6 */
class __TwigTemplate_1c9a38c3f35d60a5480783b5532eaee4ed20c99278ffd5b832101396985a6ede extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 24
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__bff8df7afddfedb3f101fbf9de952d8acb6e213ed44197d467ac9cd33a8a1ed6", 24);
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
        // line 31
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
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

    // line 33
    public function block_main($context, array $blocks = array())
    {
        // line 34
        echo "<form name=\"content_block_form\" id=\"content_block_form\" method=\"post\" action=\"";
        // line 35
        if ( !(null === (isset($context["block_id"]) ? $context["block_id"] : null))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_content_block_edit", array("id" => (isset($context["block_id"]) ? $context["block_id"] : null))), "html", null, true);
        } else {
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_content_block_new");
        }
        echo "\">
    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'widget');
        echo "
    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "DeviceType", array()), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
    <div class=\"row\" id=\"aside_wrap\">
        <div id=\"detail_wrap\" class=\"col-md-9\">
            <div id=\"detail_box\" class=\"box form-horizontal\">
                <div id=\"detail_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">ブロック編集</h3>
                </div>
                <!-- /.box-header -->
                <div id=\"detail_box__body\" class=\"box-body\">

                    <div id=\"detail_box__name\" class=\"form-group\">
                        ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
        echo "
                        <div class=\"col-sm-9 col-lg-10\">
                            ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "
                            ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div id=\"detail_box__file_name\" class=\"form-group\">
                        ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file_name", array()), 'label');
        echo "
                        <div class=\"col-sm-9 col-lg-10 padT07\">
                            ";
        // line 59
        if ((isset($context["deletable"]) ? $context["deletable"] : null)) {
            // line 60
            echo "                                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file_name", array()), 'widget');
            echo ".twig
                            ";
        } else {
            // line 62
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file_name", array()), "vars", array()), "value", array()), "html", null, true);
            echo ".twig
                                ";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file_name", array()), 'widget', array("type" => "hidden"));
            echo "
                            ";
        }
        // line 65
        echo "                            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file_name", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div id=\"detail_box__block_html\" class=\"form-group\">
                        ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "block_html", array()), 'label');
        echo "
                        <div class=\"col-sm-9 col-lg-10\">
                            ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "block_html", array()), 'widget', array("attr" => array("rows" => 15, "style" => "font-size:12px")));
        echo "
                            ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "block_html", array()), 'errors');
        echo "
                        </div>
                    </div>

                    <div class=\"extra-form\">
                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 79
            echo "                            ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 80
                echo "                                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                            ";
            }
            // line 82
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </div>
                </div>
            </div>

            <div id=\"detail_box__footer\" class=\"row hidden-xs hidden-sm\">
                <div id=\"detail_box__back_button\" class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
                    <p><a href=\"";
        // line 89
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_content_block");
        echo "\">戻る</a></p>
                </div>
            </div>

        </div>
        <!-- /.col -->
        <div id=\"common_box\" class=\"col-md-3\">
            <div class=\"col_inner\" id=\"aside_column\">
                <div id=\"common_button_box\" class=\"box no-header\">
                    <div id=\"common_button_box__body\" class=\"box-body\">
                        <div id=\"common_button_box__insert_button\" class=\"row text-center\">
                            <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">登録</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.col -->
    </div>

</form>
";
    }

    public function getTemplateName()
    {
        return "__string_template__bff8df7afddfedb3f101fbf9de952d8acb6e213ed44197d467ac9cd33a8a1ed6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 89,  167 => 83,  161 => 82,  155 => 80,  152 => 79,  148 => 78,  140 => 73,  136 => 72,  131 => 70,  122 => 65,  117 => 63,  112 => 62,  106 => 60,  104 => 59,  99 => 57,  91 => 52,  87 => 51,  82 => 49,  68 => 38,  64 => 37,  60 => 36,  52 => 35,  50 => 34,  47 => 33,  41 => 29,  35 => 28,  31 => 24,  29 => 31,  27 => 26,  11 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__bff8df7afddfedb3f101fbf9de952d8acb6e213ed44197d467ac9cd33a8a1ed6", "");
    }
}

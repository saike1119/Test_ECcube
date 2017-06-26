<?php

/* __string_template__b1ec9fb4804c9b80cd0338586b6043ef208910c355acaa73be778c94c33f5af7 */
class __TwigTemplate_79f070d9838eddefc5e7c439b8e444f6678bf6a223269d3b5f0a55f626488ce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__b1ec9fb4804c9b80cd0338586b6043ef208910c355acaa73be778c94c33f5af7", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
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
        // line 24
        $context["menus"] = array(0 => "content", 1 => "page");
        // line 29
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 30
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["list_form"]) ? $context["list_form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "コンテンツ管理";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "レイアウト管理";
    }

    // line 32
    public function block_javascript($context, array $blocks = array())
    {
        // line 33
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.core.min.js\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.widget.min.js\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/layout_design.js\"></script>
    <script>
        \$(function() {
            var page_id = '";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "id", array()), "html", null, true);
        echo "';
            if (page_id != '1') {
                \$('.anywhere').attr('disabled', true);
                \$('.anywhere:checked').each(function() {
                    \$(this).parents('.sort').children('input[type=hidden]').each(function() {
                        \$(this).remove();
                    });
                });
            }

            \$(\"#";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["list_form"]) ? $context["list_form"] : null), "layout", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\").on(\"change\", function() {
                var url = '";
        // line 51
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_content_layout_edit", array("id" => 9999));
        echo "';
                location.href = url.replace(9999, \$(this).val());
            });
        });
        function doPreview() {
            document.form1.action = \"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_content_layout_preview", array("id" => $this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "id", array()))), "html", null, true);
        echo "\";
            document.form1.target = \"_blank\";
            document.form1.submit();
            return false;
        }
        function doRegister() {
            document.form1.action = \"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_content_layout_edit", array("id" => $this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "id", array()))), "html", null, true);
        echo "\";
            document.form1.target = \"_self\";
            document.form1.submit();
            return false;
        }
    </script>
";
    }

    // line 70
    public function block_main($context, array $blocks = array())
    {
        // line 71
        echo "    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_content_layout_edit", array("id" => $this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "id", array()))), "html", null, true);
        echo "\">
        ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
        <div class=\"row\" id=\"aside_wrap\">
            <div id=\"detail_wrap\" class=\"col-md-9\">
                ";
        // line 76
        echo "                <div id=\"detail_box\" class=\"box\">
                    <div id=\"detail_box__menu\" class=\"box-header\">
                        ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["list_form"]) ? $context["list_form"] : null), "layout", array()), 'widget');
        echo "
                    </div>
                    <div id=\"detail_box__body\" class=\"box-body no-border row\">
                        <div id=\"detail_box__layout_box--left_column\" class=\"col-md-8\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered text-center design-layout\">
                                    <tbody>

                                    <tr>
                                        <td id=\"position_";
        // line 87
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_HEAD"), "html", null, true);
        echo "\" class=\"ui-sortable\" colspan=\"3\">
                                            ";
        // line 88
        $context["loop_index"] = 0;
        // line 89
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "HeadPosition", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 90
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 100
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 101
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                                        </td>
                                    </tr>

                                    <tr>
                                        <td id=\"position_";
        // line 106
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_HEADER"), "html", null, true);
        echo "\" class=\"ui-sortable\" colspan=\"3\">
                                            ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "HeaderPosition", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 108
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 118
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 119
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                                        </td>
                                    </tr>

                                    <tr>
                                        <td id=\"position_";
        // line 124
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_CONTENTS_TOP"), "html", null, true);
        echo "\" class=\"ui-sortable\" colspan=\"3\">
                                            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "ContentsTopPosition", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 126
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 127
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 129
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 130
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 133
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 136
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 137
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                                        </td>
                                    </tr>

                                    <tr>
                                        <td id=\"position_";
        // line 142
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_SIDE_LEFT"), "html", null, true);
        echo "\" class=\"ui-sortable\" rowspan=\"3\">
                                            ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "SideLeftPosition", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 144
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 145
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 146
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 147
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 148
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 151
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 154
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 155
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                                        </td>
                                        <td id=\"position_";
        // line 157
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_MAIN_TOP"), "html", null, true);
        echo "\" class=\"ui-sortable\">
                                            ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "MainTopPosition", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 159
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 160
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 161
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 162
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 163
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 166
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 169
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 170
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "                                        </td>
                                        <td id=\"position_";
        // line 172
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_SIDE_RIGHT"), "html", null, true);
        echo "\" class=\"ui-sortable\" rowspan=\"3\">
                                            ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "SideRightPosition", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 174
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 175
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 176
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 177
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 178
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 181
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 184
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 185
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "                                        </td>
                                    </tr>

                                    <tr id=\"detail_box__layout_item_main_text\">
                                        <td>
                                            Main
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id=\"position_";
        // line 196
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_MAIN_BOTTOM"), "html", null, true);
        echo "\" class=\"ui-sortable\">
                                            ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "MainBottomPosition", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 198
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 199
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 200
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 201
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 202
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 205
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 208
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 209
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                                        </td>
                                    </tr>

                                    <tr>
                                        <td id=\"position_";
        // line 214
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_CONTENTS_BOTTOM"), "html", null, true);
        echo "\" class=\"ui-sortable\" colspan=\"3\">
                                            ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "ContentsBottomPosition", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 216
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 217
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 218
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 219
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 220
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 223
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 226
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 227
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "                                        </td>
                                    </tr>

                                    <tr>
                                        <td id=\"position_";
        // line 232
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_FOOTER"), "html", null, true);
        echo "\" class=\"ui-sortable\" colspan=\"3\">
                                            ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "FooterPosition", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 234
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 235
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 236
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 237
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 238
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 239
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 241
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 244
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 245
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            ";
        // line 253
        echo "                        </div>
                        <div id=\"detail_box__layout_box--right_column\" class=\"col-md-4\">
                            <div class=\"\">
                                <table class=\"table table-bordered text-center design-layout\">
                                    <tbody>
                                    <tr>
                                        <td id=\"position_";
        // line 259
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\PageLayout::TARGET_ID_UNUSED"), "html", null, true);
        echo "\" class=\"ui-sortable\">
                                            ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "UnusedPosition", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["BlockPosition"]) {
            // line 261
            echo "                                                <div id=\"detail_box__layout_item--";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" class=\"sort";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " first";
            }
            echo "\">
                                                    <input type=\"hidden\" class=\"name\" name=\"name_";
            // line 262
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"id\" name=\"id_";
            // line 263
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"target-id\" name=\"target_id_";
            // line 264
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "target_id", array()), "html", null, true);
            echo "\" />
                                                    <input type=\"hidden\" class=\"top\" name=\"top_";
            // line 265
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["BlockPosition"], "block_row", array()), "html", null, true);
            echo "\" />
                                                    ";
            // line 266
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["BlockPosition"], "Block", array()), "name", array()), "html", null, true);
            echo "
                                                    <label class=\"anywherecheck\">
                                                        (<input type=\"checkbox\" class=\"anywhere\" name=\"anywhere_";
            // line 268
            echo twig_escape_filter($this->env, (isset($context["loop_index"]) ? $context["loop_index"] : null), "html", null, true);
            echo "\" value=\"1\" ";
            if (($this->getAttribute($context["BlockPosition"], "anywhere", array()) == 1)) {
                echo " checked=\"checked\"";
            }
            echo " />全ページ)
                                                    </label>
                                                </div>
                                                ";
            // line 271
            $context["loop_index"] = ((isset($context["loop_index"]) ? $context["loop_index"] : null) + 1);
            // line 272
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BlockPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- /.col -->
                    </div>
                    <div id=\"detail_box__footer\" class=\"row\">
                        <div id=\"detail_box__back_button\" class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area2\">
                            <p><a href=\"";
        // line 282
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_content_page");
        echo "\">戻る</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"common_box\" class=\"col-md-3\">
                <div id=\"aside_column\" class=\"col_inner\">
                    <div id=\"common_button_box\" class=\"box no-header\">
                        <div id=\"common_button_box__body\" class=\"box-body\">
                            <div id=\"common_button_box__insert_button\" class=\"row text-center\">
                                <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                    <button class=\"btn btn-primary btn-block btn-lg\" onclick=\"return doRegister();\">登録</button>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                    <div id=\"preview_box\" class=\"box\">
                        <div id=\"preview_box__preview_button\" class=\"box-header\">
                            ";
        // line 300
        $context["disabled"] = true;
        // line 301
        echo "                            ";
        if (((((((((((($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "entry_activate") && ($this->getAttribute(        // line 302
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping")) && ($this->getAttribute(        // line 303
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping_shipping")) && ($this->getAttribute(        // line 304
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping_shipping_multiple")) && ($this->getAttribute(        // line 305
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping_complete")) && ($this->getAttribute(        // line 306
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping_login")) && ($this->getAttribute(        // line 307
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping_nonmember")) && ($this->getAttribute(        // line 308
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping_shipping_edit")) && ($this->getAttribute(        // line 309
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping_shipping_multiple_edit")) && ($this->getAttribute(        // line 310
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "shopping_error")) && ($this->getAttribute(        // line 311
(isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "url", array()) != "forgot_reset"))) {
            // line 313
            echo "                            ";
            $context["disabled"] = false;
            // line 314
            echo "                            ";
        }
        // line 315
        echo "                            <button  class=\"btn btn-default btn-block btn-sm\" ";
        if ((($this->getAttribute($this->getAttribute((isset($context["TargetPageLayout"]) ? $context["TargetPageLayout"] : null), "DeviceType", array()), "id", array()) != twig_constant("Eccube\\Entity\\Master\\DeviceType::DEVICE_TYPE_PC")) || (isset($context["disabled"]) ? $context["disabled"] : null))) {
            echo "disabled";
        }
        echo " onclick=\"return doPreview();\">
                                プレビュー
                            </button>
                        </div><!-- /.box-header -->
                    </div>

                </div>
            </div><!-- /.col -->
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "__string_template__b1ec9fb4804c9b80cd0338586b6043ef208910c355acaa73be778c94c33f5af7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1121 => 315,  1118 => 314,  1115 => 313,  1113 => 311,  1112 => 310,  1111 => 309,  1110 => 308,  1109 => 307,  1108 => 306,  1107 => 305,  1106 => 304,  1105 => 303,  1104 => 302,  1102 => 301,  1100 => 300,  1079 => 282,  1068 => 273,  1054 => 272,  1052 => 271,  1042 => 268,  1037 => 266,  1031 => 265,  1025 => 264,  1019 => 263,  1013 => 262,  1004 => 261,  987 => 260,  983 => 259,  975 => 253,  967 => 246,  953 => 245,  951 => 244,  941 => 241,  936 => 239,  930 => 238,  924 => 237,  918 => 236,  912 => 235,  903 => 234,  886 => 233,  882 => 232,  876 => 228,  862 => 227,  860 => 226,  850 => 223,  845 => 221,  839 => 220,  833 => 219,  827 => 218,  821 => 217,  812 => 216,  795 => 215,  791 => 214,  785 => 210,  771 => 209,  769 => 208,  759 => 205,  754 => 203,  748 => 202,  742 => 201,  736 => 200,  730 => 199,  721 => 198,  704 => 197,  700 => 196,  688 => 186,  674 => 185,  672 => 184,  662 => 181,  657 => 179,  651 => 178,  645 => 177,  639 => 176,  633 => 175,  624 => 174,  607 => 173,  603 => 172,  600 => 171,  586 => 170,  584 => 169,  574 => 166,  569 => 164,  563 => 163,  557 => 162,  551 => 161,  545 => 160,  536 => 159,  519 => 158,  515 => 157,  512 => 156,  498 => 155,  496 => 154,  486 => 151,  481 => 149,  475 => 148,  469 => 147,  463 => 146,  457 => 145,  448 => 144,  431 => 143,  427 => 142,  421 => 138,  407 => 137,  405 => 136,  395 => 133,  390 => 131,  384 => 130,  378 => 129,  372 => 128,  366 => 127,  357 => 126,  340 => 125,  336 => 124,  330 => 120,  316 => 119,  314 => 118,  304 => 115,  299 => 113,  293 => 112,  287 => 111,  281 => 110,  275 => 109,  266 => 108,  249 => 107,  245 => 106,  239 => 102,  225 => 101,  223 => 100,  213 => 97,  208 => 95,  202 => 94,  196 => 93,  190 => 92,  184 => 91,  175 => 90,  157 => 89,  155 => 88,  151 => 87,  139 => 78,  135 => 76,  129 => 72,  124 => 71,  121 => 70,  110 => 62,  101 => 56,  93 => 51,  89 => 50,  76 => 40,  70 => 37,  66 => 36,  62 => 35,  58 => 34,  53 => 33,  50 => 32,  44 => 27,  38 => 26,  34 => 22,  32 => 30,  30 => 29,  28 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__b1ec9fb4804c9b80cd0338586b6043ef208910c355acaa73be778c94c33f5af7", "");
    }
}

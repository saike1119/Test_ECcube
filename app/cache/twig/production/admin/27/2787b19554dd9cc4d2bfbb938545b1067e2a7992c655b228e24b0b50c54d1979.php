<?php

/* __string_template__de703f37013497999ef8a6946d082281d762186e7ff5634f3f23e18383507972 */
class __TwigTemplate_e89445bb22126cb9a666f97f989a24e9a17b928e01d920d7f94ad26c13c77302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        echo "
<script>
    function fnSelectProduct(\$row, product_id, product_name, product_image_link, product_image_img, product_code_min, product_code_max) {
        // Add product argument
        \$('#product_name').text(product_name);
        \$('#admin_recommend_Product').val(product_id);
        \$('#product_image_link').removeAttr('href');
        \$('#product_image_link').attr('href', product_image_link);
        \$('#product_image_img').removeAttr('src');
        \$('#product_image_img').attr('src', product_image_img);
        if(product_code_min != product_code_max)
            product_code_min += ' ～ ' + product_code_max;
        \$('#product_code').text(product_code_min);
        // Display new product
        \$('#product_image').removeClass('hidden');
        \$('#product_name').removeClass('hidden');
        \$('#product_code').removeClass('hidden');

        // Check product exist
        \$('#warning').text('');
        if (recommend.indexOf(product_id) != -1) {
            \$('#warning').text(\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("plugin.recommend.type.product_recommend.existed"), "html", null, true);
        echo "\");
        }

        // モーダル閉じる.
        \$('#searchProductModal').modal('hide');
        return false;
    }

    // 商品検索
    \$('div.box-footer a').on('click', function(event) {
        var list = \$('#searchProductModalList');
        list.children().remove();
        \$.ajax({
            type: 'GET',
            dataType: 'html',
            url: \$(this).attr('href'),
            success: function(data) {
                \$('#searchProductModalList').html(data);
            },
            error: function() {
                alert('paginator failed.');
            }
        });
        event.preventDefault();
    });
</script>
<div class=\"table-responsive\">
    <table class=\"table\">
        <tbody>
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 60
            echo "            <form name=\"product_form";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
            echo "\">
                <tr>
                    <td>
                        ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "name", array()), "html", null, true);
            echo "
                        <br>
                        <span>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "code_min", array()), "html", null, true);
            echo "
                            ";
            // line 66
            if (($this->getAttribute($context["Product"], "code_min", array()) != $this->getAttribute($context["Product"], "code_max", array()))) {
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "code_max", array()), "html", null, true);
                echo "
                            ";
            }
            // line 68
            echo "                        </span>
                    </td>
                    <td class=\"text-right\">
                        <button onclick=\"fnSelectProduct(\$(this).parent().parent(), '";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["Product"], "name", array()), "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_product_edit", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($context["Product"], "mainFileName", array())), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "code_min", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "code_max", array()), "html", null, true);
            echo "')\" type=\"button\" class=\"btn btn-default btn-sm\">
                            決定
                        </button>
                    </td>
                </tr>
            </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
        </tbody>
    </table>
    ";
        // line 81
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "totalItemCount", array()) > 0)) {
            // line 82
            echo "        ";
            $this->loadTemplate("pager.twig", "__string_template__de703f37013497999ef8a6946d082281d762186e7ff5634f3f23e18383507972", 82)->display(array_merge($context, array("pages" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "paginationData", array()), "routes" => "admin_recommend_search_product_page")));
            // line 83
            echo "    ";
        }
        // line 84
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__de703f37013497999ef8a6946d082281d762186e7ff5634f3f23e18383507972";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 84,  141 => 83,  138 => 82,  136 => 81,  131 => 78,  106 => 71,  101 => 68,  94 => 66,  90 => 65,  85 => 63,  78 => 60,  74 => 59,  42 => 30,  19 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__de703f37013497999ef8a6946d082281d762186e7ff5634f3f23e18383507972", "");
    }
}

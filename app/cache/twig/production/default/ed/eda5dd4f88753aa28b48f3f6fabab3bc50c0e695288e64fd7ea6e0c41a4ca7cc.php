<?php

/* __string_template__fdc5979668a3085d04b88b27ebe0406a6c516ca0511e670d8ead8e2a1e2a0dad */
class __TwigTemplate_0f69ab48d75961a63e8b9f76f51024353c45f98ed8c2255cbbeef948efef4d94 extends Twig_Template
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
        // line 22
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 23
            echo "    <div id=\"member\" class=\"member drawer_block pc\">
        <ul class=\"member_link\">
            <li>
                <a href=\"";
            // line 26
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("mypage");
            echo "\">
                    <svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\" /></svg>マイページ
                </a>
            </li>
            ";
            // line 30
            if (($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_favorite_product", array()) == 1)) {
                // line 31
                echo "                <li><a href=\"";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("mypage_favorite");
                echo "\"><svg class=\"cb cb-heart-circle\"><use xlink:href=\"#cb-heart-circle\"></use></svg>お気に入り</a></li>
            ";
            }
            // line 33
            echo "            <li>
                <a href=\"";
            // line 34
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("logout");
            echo "\">
                    <svg class=\"cb cb-lock-circle\"><use xlink:href=\"#cb-lock-circle\" /></svg>ログアウト
                </a>
            </li>
        </ul>
    </div>
";
        } else {
            // line 41
            echo "    <div id=\"member\" class=\"member drawer_block pc\">
        <ul class=\"member_link\">
            <li>
                <a href=\"";
            // line 44
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("entry");
            echo "\">
                    <svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\" /></svg>新規会員登録
                </a>
            </li>
            ";
            // line 48
            if (($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_favorite_product", array()) == 1)) {
                // line 49
                echo "                <li><a href=\"";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("mypage_favorite");
                echo "\"><svg class=\"cb cb-heart-circle\"><use xlink:href=\"#cb-heart-circle\"></use></svg>お気に入り</a></li>
            ";
            }
            // line 51
            echo "            <li>
                <a href=\"";
            // line 52
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("mypage_login");
            echo "\">
                    <svg class=\"cb cb-lock-circle\"><use xlink:href=\"#cb-lock-circle\" /></svg>ログイン
                </a>
            </li>
        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__fdc5979668a3085d04b88b27ebe0406a6c516ca0511e670d8ead8e2a1e2a0dad";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 52,  74 => 51,  68 => 49,  66 => 48,  59 => 44,  54 => 41,  44 => 34,  41 => 33,  35 => 31,  33 => 30,  26 => 26,  21 => 23,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__fdc5979668a3085d04b88b27ebe0406a6c516ca0511e670d8ead8e2a1e2a0dad", "");
    }
}

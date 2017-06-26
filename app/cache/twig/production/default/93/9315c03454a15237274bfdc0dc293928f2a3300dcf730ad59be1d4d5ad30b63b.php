<?php

/* Block/free.twig */
class __TwigTemplate_310b6b09031b8e7696194a3cab1f64e106b4e804d33863a8bda87a98bb95c527 extends Twig_Template
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
        echo "<div class=\"col-sm-3 txt_bnr_area\">
    <div class=\"txt_bnr\">
        <strong>5,000以上の購入で<br><strong>配送料無料</strong></strong><br>一部地域は除く
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Block/free.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/free.twig", "/home/actalive/www/test/src/Eccube/Resource/template/default/Block/free.twig");
    }
}

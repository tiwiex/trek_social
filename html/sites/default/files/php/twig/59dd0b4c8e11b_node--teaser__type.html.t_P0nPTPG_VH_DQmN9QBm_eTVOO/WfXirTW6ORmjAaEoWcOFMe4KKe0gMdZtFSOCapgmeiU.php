<?php

/* node--teaser__type.html.twig */
class __TwigTemplate_c97a0017939dab67608ea6960e229d1b065a044c50e64266392d994603ee76be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'card_teaser_type' => array($this, 'block_card_teaser_type'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"teaser__teaser-type\">
  <svg class=\"teaser__teaser-type-icon\">
    <use xlink:href=\"#icon-";
        // line 3
        $this->displayBlock('card_teaser_type', $context, $blocks);
        echo "\"></use>
  </svg>
</div>
";
    }

    public function block_card_teaser_type($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "node--teaser__type.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 3,  44 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--teaser__type.html.twig", "themes/contrib/socialbase/templates/node/node--teaser__type.html.twig");
    }
}

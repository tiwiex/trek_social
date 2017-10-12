<?php

/* themes/contrib/socialbase/templates/block/block--system-menu-block--main.html.twig */
class __TwigTemplate_29a53a4c38522ff1d88990e63f1d20173e3c686dc211da1769beef7a0ca7d4fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 38, "trans" => 41);
        $filters = array();
        $functions = array("attach_library" => 46);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'trans'),
                array(),
                array('attach_library')
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

        // line 36
        echo "<div id=\"main-navigation\" class=\"collapse navbar-collapse\">
  <div class=\"navbar-collapse-order\">
    ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "    <div class='navbar-search' title='";
        echo t("Click to open", array());
        echo "'>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "links", array()), "search_block", array()), "html", null, true));
        echo "</div>
  </div>
</div>

";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("social_core/navbar-search"), "html", null, true));
        echo "
";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/block/block--system-menu-block--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 39,  66 => 38,  60 => 46,  50 => 41,  48 => 38,  44 => 36,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/socialbase/templates/block/block--system-menu-block--main.html.twig", "/home/trekafrik/opensocial/html/themes/contrib/socialbase/templates/block/block--system-menu-block--main.html.twig");
    }
}

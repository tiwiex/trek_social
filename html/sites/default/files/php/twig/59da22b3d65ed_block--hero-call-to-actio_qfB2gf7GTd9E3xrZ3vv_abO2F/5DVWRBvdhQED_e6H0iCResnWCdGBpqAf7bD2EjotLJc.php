<?php

/* themes/contrib/socialbase/templates/block/block--hero-call-to-action-block.html.twig */
class __TwigTemplate_d0fc6437bda909ae6af59466d46794fe4e7a974c961a9b2e0e1f3f1678090017 extends Twig_Template
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
        $tags = array("set" => 52, "if" => 60, "block" => 69);
        $filters = array();
        $functions = array("attach_library" => 49);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
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

        // line 48
        echo "
";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/hero"), "html", null, true));
        echo "

";
        // line 52
        $context["classes"] = array(0 => "cover", 1 => "brand-bg-primary", 2 => "cover-with-canvas", 3 => ((        // line 56
($context["has_image"] ?? null)) ? ("cover-img") : ("")));
        // line 59
        echo "
";
        // line 60
        if (($context["has_image"] ?? null)) {
            // line 61
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo " style=\"background-image: url(";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["image_url"] ?? null), "html", null, true));
            echo ")\">
";
        } else {
            // line 63
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
";
        }
        // line 65
        echo "
  ";
        // line 66
        if (($context["content"] ?? null)) {
            // line 67
            echo "    <div class=\"cover-wrap\">
      <div class=\"hero-canvas\">
        ";
            // line 69
            $this->displayBlock('content', $context, $blocks);
            // line 72
            echo "      </div>
    </div>
  ";
        }
        // line 75
        echo "
</div>
";
    }

    // line 69
    public function block_content($context, array $blocks = array())
    {
        // line 70
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/block/block--hero-call-to-action-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 70,  96 => 69,  90 => 75,  85 => 72,  83 => 69,  79 => 67,  77 => 66,  74 => 65,  68 => 63,  60 => 61,  58 => 60,  55 => 59,  53 => 56,  52 => 52,  47 => 49,  44 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/socialbase/templates/block/block--hero-call-to-action-block.html.twig", "/home/trekafrik/opensocial/html/themes/contrib/socialbase/templates/block/block--hero-call-to-action-block.html.twig");
    }
}

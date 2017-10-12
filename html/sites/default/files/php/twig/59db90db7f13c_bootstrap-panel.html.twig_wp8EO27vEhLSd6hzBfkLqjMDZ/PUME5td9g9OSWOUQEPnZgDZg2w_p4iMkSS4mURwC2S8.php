<?php

/* themes/contrib/socialbase/templates/card/bootstrap-panel.html.twig */
class __TwigTemplate_98750efb6c4619d5add0f708398ae2245054a2baec2515d3adb9d2617cc50feb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 47, "if" => 57, "block" => 58);
        $filters = array("clean_class" => 51);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class'),
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
        echo "
";
        // line 45
        echo "
";
        // line 47
        $context["classes"] = array(0 => "card", 1 => "brand-border-radius", 2 => ((        // line 50
($context["collapsible"] ?? null)) ? ("panel") : ("")), 3 => (((        // line 51
($context["collapsible"] ?? null) && ($context["errors"] ?? null))) ? ("panel-danger") : (("panel-" . \Drupal\Component\Utility\Html::getClass(($context["panel_type"] ?? null))))));
        // line 54
        echo "<fieldset ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">

  ";
        // line 57
        echo "  ";
        if (($context["heading"] ?? null)) {
            // line 58
            echo "    ";
            $this->displayBlock('heading', $context, $blocks);
            // line 67
            echo "  ";
        }
        // line 68
        echo "
  ";
        // line 70
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 103
        echo "
  ";
        // line 105
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 106
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
            // line 114
            echo "  ";
        }
        // line 115
        echo "
</fieldset>
";
    }

    // line 58
    public function block_heading($context, array $blocks = array())
    {
        // line 59
        echo "      <h4 class=\"card__title card__title--underline\">
          ";
        // line 60
        if (($context["collapsible"] ?? null)) {
            // line 61
            echo "            <a";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading_attributes"] ?? null), "html", null, true));
            echo " href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["target"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true));
            echo "</a>
          ";
        } else {
            // line 63
            echo "            <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading_attributes"] ?? null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true));
            echo "</div>
          ";
        }
        // line 65
        echo "      </h4>
    ";
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        // line 71
        echo "    ";
        // line 72
        $context["body_classes"] = array(0 => "card__block", 1 => ((        // line 74
($context["collapsible"] ?? null)) ? ("panel-collapse") : ("")), 2 => ((        // line 75
($context["collapsible"] ?? null)) ? ("collapse") : ("")), 3 => ((        // line 76
($context["collapsible"] ?? null)) ? ("fade") : ("")), 4 => (((        // line 77
($context["errors"] ?? null) || (($context["collapsible"] ?? null) &&  !($context["collapsed"] ?? null)))) ? ("in") : ("")));
        // line 80
        echo "    ";
        // line 81
        $context["description_classes"] = array(0 => "help-block", 1 => (((        // line 83
($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", array()) == "invisible"))) ? ("sr-only") : ("")));
        // line 86
        echo "
    ";
        // line 87
        if (($context["errors"] ?? null)) {
            // line 88
            echo "      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>";
            // line 89
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "</strong>
      </div>
    ";
        }
        // line 92
        echo "
    <div";
        // line 93
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["body_attributes"] ?? null), "addClass", array(0 => ($context["body_classes"] ?? null)), "method"), "html", null, true));
        echo ">
      ";
        // line 94
        if ((($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", array()) == "before"))) {
            // line 95
            echo "        <p";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "</p>
      ";
        }
        // line 97
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "
      ";
        // line 98
        if (((($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", array()) == "after")) || ($this->getAttribute(($context["description"] ?? null), "position", array()) == "invisible"))) {
            // line 99
            echo "        <p";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "</p>
      ";
        }
        // line 101
        echo "    </div>
  ";
    }

    // line 106
    public function block_footer($context, array $blocks = array())
    {
        // line 107
        echo "      ";
        // line 108
        $context["footer_classes"] = array(0 => "card__actionbar");
        // line 112
        echo "      <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["footer_attributes"] ?? null), "addClass", array(0 => ($context["footer_classes"] ?? null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
        echo "</div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/card/bootstrap-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 112,  198 => 108,  196 => 107,  193 => 106,  188 => 101,  180 => 99,  178 => 98,  173 => 97,  165 => 95,  163 => 94,  159 => 93,  156 => 92,  150 => 89,  147 => 88,  145 => 87,  142 => 86,  140 => 83,  139 => 81,  137 => 80,  135 => 77,  134 => 76,  133 => 75,  132 => 74,  131 => 72,  129 => 71,  126 => 70,  121 => 65,  113 => 63,  103 => 61,  101 => 60,  98 => 59,  95 => 58,  89 => 115,  86 => 114,  83 => 106,  80 => 105,  77 => 103,  74 => 70,  71 => 68,  68 => 67,  65 => 58,  62 => 57,  56 => 54,  54 => 51,  53 => 50,  52 => 47,  49 => 45,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/socialbase/templates/card/bootstrap-panel.html.twig", "/home/trekafrik/opensocial/html/themes/contrib/socialbase/templates/card/bootstrap-panel.html.twig");
    }
}

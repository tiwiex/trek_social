<?php

/* themes/contrib/socialbase/templates/form/form-element.html.twig */
class __TwigTemplate_4ce9b3970c1d281978c07698ba14b8710e9c7f6a92a932e1905a9dd0ab34ec72 extends Twig_Template
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
        $tags = array("set" => 49, "if" => 78);
        $filters = array("clean_class" => 52);
        $functions = array("attach_library" => 79);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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

        // line 49
        $context["classes"] = array(0 => "form-item", 1 => "js-form-item", 2 => ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 52
($context["type"] ?? null))), 3 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 53
($context["type"] ?? null))), 4 => ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 54
($context["name"] ?? null))), 5 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 55
($context["name"] ?? null))), 6 => "brand-border-radius", 7 => ((!twig_in_filter(        // line 57
($context["title_display"] ?? null), array(0 => "after", 1 => "before"))) ? ("form-no-label") : ("")), 8 => (((        // line 58
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 9 => ((        // line 59
($context["is_form_group"] ?? null)) ? ("form-group") : ("")), 10 => (((        // line 60
($context["type"] ?? null) == "textarea")) ? ("form-group") : ("")), 11 => ((        // line 61
($context["is_radio"] ?? null)) ? ("radio") : ("")), 12 => ((        // line 62
($context["is_checkbox"] ?? null)) ? ("checkbox") : ("")), 13 => ((        // line 63
($context["is_autocomplete"] ?? null)) ? ("form-autocomplete") : ("")), 14 => ((        // line 64
($context["errors"] ?? null)) ? ("error has-error") : ("")), 15 => ((((        // line 65
($context["name"] ?? null) == "pass") && ($context["logged_in"] ?? null))) ? ("section-password") : ("")), 16 => (((        // line 66
($context["name"] ?? null) == "pass[pass1]")) ? ("form-group--password") : ("")), 17 => (((        // line 67
($context["name"] ?? null) == "pass[pass2]")) ? ("form-group--password form-group--confirm-password") : ("")));
        // line 70
        $context["description_classes"] = array(0 => "help-block", 1 => ((((        // line 72
($context["name"] ?? null) == "pass") && ($context["logged_in"] ?? null))) ? ("form-group--password__help-block") : ("")), 2 => (((        // line 73
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")));
        // line 76
        echo "
";
        // line 78
        if ((($context["name"] ?? null) == "pass")) {
            // line 79
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/form--password"), "html", null, true));
            echo "
";
        }
        // line 81
        echo "
<div";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "removeClass", array(0 => "form-inline"), "method"), "html", null, true));
        echo ">
  ";
        // line 83
        if (twig_in_filter(($context["label_display"] ?? null), array(0 => "before", 1 => "invisible"))) {
            // line 84
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 86
        echo "
  ";
        // line 87
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 88
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 90
        echo "
  ";
        // line 91
        if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
            // line 92
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "attributes", array()), "html", null, true));
            echo ">
      ";
            // line 93
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 96
        echo "
  ";
        // line 97
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "

  ";
        // line 99
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 100
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 102
        echo "
  ";
        // line 103
        if ((($context["label_display"] ?? null) == "after")) {
            // line 104
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 106
        echo "
  ";
        // line 107
        if ((twig_in_filter(($context["description_display"] ?? null), array(0 => "after", 1 => "invisible")) && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
            // line 108
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
            echo ">
      ";
            // line 109
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 112
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 112,  154 => 109,  149 => 108,  147 => 107,  144 => 106,  138 => 104,  136 => 103,  133 => 102,  127 => 100,  125 => 99,  120 => 97,  117 => 96,  111 => 93,  106 => 92,  104 => 91,  101 => 90,  95 => 88,  93 => 87,  90 => 86,  84 => 84,  82 => 83,  78 => 82,  75 => 81,  69 => 79,  67 => 78,  64 => 76,  62 => 73,  61 => 72,  60 => 70,  58 => 67,  57 => 66,  56 => 65,  55 => 64,  54 => 63,  53 => 62,  52 => 61,  51 => 60,  50 => 59,  49 => 58,  48 => 57,  47 => 55,  46 => 54,  45 => 53,  44 => 52,  43 => 49,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/socialbase/templates/form/form-element.html.twig", "/home/trekafrik/opensocial/html/themes/contrib/socialbase/templates/form/form-element.html.twig");
    }
}

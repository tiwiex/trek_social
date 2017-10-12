<?php

/* themes/contrib/socialbase/templates/form/fieldset.html.twig */
class __TwigTemplate_7f0cc07d54ac9e7a9db96f46daabe303fd1242aa64bace41de512c3bcbb6843d extends Twig_Template
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
        $tags = array("set" => 26, "if" => 45);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 26
        $context["classes"] = array(0 => ((        // line 27
($context["form_group"] ?? null)) ? ("form-group") : ("")), 1 => (( !        // line 28
($context["form_group"] ?? null)) ? ("js-form-wrapper") : ("")), 2 => (( !        // line 29
($context["form_group"] ?? null)) ? ("form-wrapper") : ("")));
        // line 32
        echo "<fieldset";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 34
        $context["label_classes"] = array(0 => ((        // line 35
($context["form_group"] ?? null)) ? ("control-label") : ("")), 1 => ((        // line 36
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((        // line 37
($context["required"] ?? null)) ? ("form-required") : ("")), 3 => (((        // line 38
($context["title_display"] ?? null) == "invisible")) ? ("sr-only") : ("")));
        // line 41
        echo "  ";
        // line 42
        echo "  <label";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["legend"] ?? null), "attributes", array()), "addClass", array(0 => ($context["label_classes"] ?? null)), "method"), "html", null, true));
        echo ">
    <span";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["legend_span"] ?? null), "attributes", array()), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["legend"] ?? null), "title", array()), "html", null, true));
        echo "</span>
  </label>";
        // line 45
        if (($context["required"] ?? null)) {
            // line 46
            echo "<span class=\"form-required\">*</span>";
        }
        // line 48
        echo "<div class=\"fieldset-wrapper\">
    ";
        // line 49
        if (($context["errors"] ?? null)) {
            // line 50
            echo "      <div>
        ";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 54
        echo "    ";
        if (($context["prefix"] ?? null)) {
            // line 55
            echo "      <span class=\"field-prefix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
            echo "</span>
    ";
        }
        // line 57
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "
    ";
        // line 58
        if (($context["suffix"] ?? null)) {
            // line 59
            echo "      <span class=\"field-suffix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
            echo "</span>
    ";
        }
        // line 61
        echo "    ";
        if ($this->getAttribute(($context["description"] ?? null), "content", array())) {
            // line 62
            echo "      <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => "help-block"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "</div>
    ";
        }
        // line 64
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 64,  116 => 62,  113 => 61,  107 => 59,  105 => 58,  100 => 57,  94 => 55,  91 => 54,  85 => 51,  82 => 50,  80 => 49,  77 => 48,  74 => 46,  72 => 45,  66 => 43,  61 => 42,  59 => 41,  57 => 38,  56 => 37,  55 => 36,  54 => 35,  53 => 34,  48 => 32,  46 => 29,  45 => 28,  44 => 27,  43 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/socialbase/templates/form/fieldset.html.twig", "/home/trekafrik/opensocial/html/themes/contrib/socialbase/templates/form/fieldset.html.twig");
    }
}

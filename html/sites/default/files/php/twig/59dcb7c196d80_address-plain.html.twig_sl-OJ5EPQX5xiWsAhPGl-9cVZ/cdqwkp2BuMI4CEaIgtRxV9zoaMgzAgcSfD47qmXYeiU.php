<?php

/* themes/contrib/socialbase/templates/field/address-plain.html.twig */
class __TwigTemplate_3b1b6d03a4b2629af2e5e57f68053dcf5e4a41482ff362ac5057b029fe739577 extends Twig_Template
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
        $tags = array("if" => 34);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 33
        echo "
";
        // line 34
        if (($context["recipient"] ?? null)) {
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["recipient"] ?? null), "html", null, true));
            echo ",
";
        }
        // line 37
        echo "
";
        // line 38
        if (($context["organization"] ?? null)) {
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["organization"] ?? null), "html", null, true));
            echo ",
";
        }
        // line 41
        echo "
";
        // line 42
        if (($context["address_line1"] ?? null)) {
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["address_line1"] ?? null), "html", null, true));
            echo ",
";
        }
        // line 45
        echo "
";
        // line 46
        if (($context["address_line2"] ?? null)) {
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["address_line2"] ?? null), "html", null, true));
            echo ",
";
        }
        // line 49
        echo "
";
        // line 50
        if ($this->getAttribute(($context["dependent_locality"] ?? null), "name", array())) {
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute(($context["dependent_locality"] ?? null), "code", array())) ? ($this->getAttribute(($context["dependent_locality"] ?? null), "code", array())) : ($this->getAttribute(($context["dependent_locality"] ?? null), "name", array()))), "html", null, true));
            echo ",
";
        }
        // line 53
        echo "
";
        // line 54
        if ($this->getAttribute(($context["locality"] ?? null), "name", array())) {
            // line 55
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["locality"] ?? null), "name", array()), "html", null, true));
            echo ",
";
        } elseif ($this->getAttribute(        // line 56
($context["locality"] ?? null), "code", array())) {
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["locality"] ?? null), "code", array()), "html", null, true));
            echo ",
";
        } elseif (        // line 58
($context["locality"] ?? null)) {
            // line 59
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["locality"] ?? null), "html", null, true));
            echo ",
";
        }
        // line 61
        echo "
";
        // line 62
        if (($context["postal_code"] ?? null)) {
            // line 63
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["postal_code"] ?? null), "html", null, true));
            echo ",
";
        }
        // line 65
        echo "
";
        // line 66
        if ($this->getAttribute(($context["administrative_area"] ?? null), "name", array())) {
            // line 67
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute(($context["administrative_area"] ?? null), "code", array())) ? ($this->getAttribute(($context["administrative_area"] ?? null), "code", array())) : ($this->getAttribute(($context["administrative_area"] ?? null), "name", array()))), "html", null, true));
            echo ",
";
        }
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["country"] ?? null), "name", array()), "html", null, true));
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/field/address-plain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 70,  131 => 67,  129 => 66,  126 => 65,  120 => 63,  118 => 62,  115 => 61,  110 => 59,  108 => 58,  104 => 57,  102 => 56,  98 => 55,  96 => 54,  93 => 53,  88 => 51,  86 => 50,  83 => 49,  78 => 47,  76 => 46,  73 => 45,  68 => 43,  66 => 42,  63 => 41,  58 => 39,  56 => 38,  53 => 37,  48 => 35,  46 => 34,  43 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/socialbase/templates/field/address-plain.html.twig", "/home/trekafrik/opensocial/html/themes/contrib/socialbase/templates/field/address-plain.html.twig");
    }
}

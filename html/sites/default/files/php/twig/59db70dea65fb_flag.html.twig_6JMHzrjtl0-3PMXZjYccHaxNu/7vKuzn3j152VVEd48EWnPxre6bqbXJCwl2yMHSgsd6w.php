<?php

/* themes/contrib/socialbase/templates/field/flag.html.twig */
class __TwigTemplate_51266d270267c5a3c34d39ea563bfc98e748638d86098756d240091072b8aa65 extends Twig_Template
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
        $tags = array("spaceless" => 14, "if" => 17, "set" => 18);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('spaceless', 'if', 'set'),
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

        // line 14
        ob_start();
        // line 15
        echo "
";
        // line 17
        if ((($context["action"] ?? null) == "unflag")) {
            // line 18
            echo "    ";
            $context["action_class"] = "action-unflag";
        } else {
            // line 20
            echo "    ";
            $context["action_class"] = "action-flag";
        }
        // line 22
        echo "
";
        // line 24
        $context["classes"] = array(0 => "btn", 1 => "btn-default", 2 => "waves-effect", 3 => "btn-sm", 4 => "btn-follow", 5 => "flag", 6 => ("flag-" . $this->getAttribute(        // line 31
($context["flag"] ?? null), "id", array(), "method")), 7 => ((("flag-" . $this->getAttribute(        // line 32
($context["flag"] ?? null), "id", array(), "method")) . "-") . $this->getAttribute(($context["flaggable"] ?? null), "id", array(), "method")), 8 =>         // line 33
($context["action_class"] ?? null));
        // line 35
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method");
        // line 36
        echo "
<a role=\"button\"";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</a>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/field/flag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 37,  68 => 36,  66 => 35,  64 => 33,  63 => 32,  62 => 31,  61 => 24,  58 => 22,  54 => 20,  50 => 18,  48 => 17,  45 => 15,  43 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/socialbase/templates/field/flag.html.twig", "/home/trekafrik/opensocial/html/themes/contrib/socialbase/templates/field/flag.html.twig");
    }
}

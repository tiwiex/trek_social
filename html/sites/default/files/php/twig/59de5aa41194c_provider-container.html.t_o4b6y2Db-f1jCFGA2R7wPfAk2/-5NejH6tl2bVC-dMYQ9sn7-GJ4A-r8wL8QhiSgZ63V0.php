<?php

/* modules/contrib/social_login/templates/provider-container.html.twig */
class __TwigTemplate_eb19af581bd914d07443e386a0e2b83d84907664dac2633b9333b1375da1ab1f extends Twig_Template
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
        $tags = array("if" => 8);
        $filters = array("raw" => 14);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('raw'),
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

        // line 7
        echo "<div class=\"social_login\" style=\"margin:20px 0 10px 0\">
 ";
        // line 8
        if ( !twig_test_empty(($context["label"] ?? null))) {
            echo "<label>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</label>";
        }
        // line 9
        echo " <div id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["containerid"] ?? null), "html", null, true));
        echo "\"></div>
</div>

<script type=\"text/javascript\">
\tvar _oneall = _oneall || [];
\t_oneall.push([\"";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["plugintype"] ?? null), "html", null, true));
        echo "\", \"set_providers\", [";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["providers"] ?? null)));
        echo "]]);
\t_oneall.push([\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["plugintype"] ?? null), "html", null, true));
        echo "\", \"set_callback_uri\", \"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["callbackuri"] ?? null), "html", null, true));
        echo "\"]);
\t_oneall.push([\"";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["plugintype"] ?? null), "html", null, true));
        echo "\", \"set_force_re_authentication\", ";
        if ((($context["plugintype"] ?? null) == "social_link")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "]);
\t";
        // line 17
        if ( !twig_test_empty(($context["token"] ?? null))) {
            // line 18
            echo "\t_oneall.push([\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["plugintype"] ?? null), "html", null, true));
            echo "\", \"set_user_token\", \"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
            echo "\"]);
\t";
        }
        // line 20
        echo "\t_oneall.push([\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["plugintype"] ?? null), "html", null, true));
        echo "\", \"do_render_ui\", \"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["containerid"] ?? null), "html", null, true));
        echo "\"]);
</script>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/social_login/templates/provider-container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 20,  85 => 18,  83 => 17,  73 => 16,  67 => 15,  61 => 14,  52 => 9,  46 => 8,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/social_login/templates/provider-container.html.twig", "/home/trekafrik/opensocial/html/modules/contrib/social_login/templates/provider-container.html.twig");
    }
}

<?php

/* themes/contrib/socialbase/templates/node/page-hero-data.html.twig */
class __TwigTemplate_4b9ddeb883b51df0a2cc2b0b2eca461afd71a3378c084b75b75a40e2815ee11a extends Twig_Template
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
        $tags = array("if" => 23, "trans" => 32);
        $filters = array();
        $functions = array("attach_library" => 21);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
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

        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/hero"), "html", null, true));
        echo "

";
        // line 23
        if (($context["hero_styled_image_url"] ?? null)) {
            // line 24
            echo "<div style=\"background-image: url('";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["hero_styled_image_url"] ?? null), "html", null, true));
            echo "')\" class=\"cover cover-img cover-img-gradient brand-bg-primary\">
    ";
        } else {
            // line 26
            echo "    <div class=\"cover brand-bg-primary\">
        ";
        }
        // line 28
        echo "
        ";
        // line 29
        if (($context["node"] ?? null)) {
            // line 30
            echo "        ";
            if (($context["node_edit_url"] ?? null)) {
                // line 31
                echo "            <div class=\"hero-action-button\">
                <a href=\"";
                // line 32
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["node_edit_url"] ?? null), "html", null, true));
                echo "\" title=\"";
                echo t("Edit content", array());
                echo "\" class=\"waves-effect waves-light btn btn-raised btn-default btn-floating\">
                    <svg class=\"icon-gray icon-medium\">
                        <use xlink:href=\"#icon-edit\"></use>
                    </svg>
                </a>
            </div>
        ";
            }
            // line 39
            echo "        <div class=\"cover-wrap\">
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "

            ";
        // line 44
        if (($context["title"] ?? null)) {
            // line 45
            echo "                <h1";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["section_class"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h1>
            ";
        }
        // line 47
        echo "
            ";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

            ";
        // line 50
        if (($context["event_enrollment"] ?? null)) {
            // line 51
            echo "                <div class=\"hero-footer\">
                    <div class=\"hero-footer__text\"></div>
                    <div class=\"hero-footer__cta\">
                        <div class=\"btn-group\">
                            ";
            // line 55
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["event_enrollment"] ?? null), "html", null, true));
            echo "
                        </div>
                    </div>
                </div>
            ";
        }
        // line 60
        echo "
            ";
        // line 61
        if (($context["node"] ?? null)) {
            // line 62
            echo "        </div>
        ";
        }
        // line 64
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/node/page-hero-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 64,  134 => 62,  132 => 61,  129 => 60,  121 => 55,  115 => 51,  113 => 50,  108 => 48,  105 => 47,  97 => 45,  95 => 44,  90 => 42,  87 => 41,  83 => 39,  71 => 32,  68 => 31,  65 => 30,  63 => 29,  60 => 28,  56 => 26,  50 => 24,  48 => 23,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/socialbase/templates/node/page-hero-data.html.twig", "/home/trekafrik/opensocial/html/themes/contrib/socialbase/templates/node/page-hero-data.html.twig");
    }
}

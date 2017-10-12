<?php

/* themes/contrib/socialbase/templates/profile/profile--profile--hero.html.twig */
class __TwigTemplate_709620ed363d78addb6f7f933b97e181ba6184e62ee557445982a7f9e34ef23b extends Twig_Template
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
        $tags = array("if" => 22);
        $filters = array("render" => 41, "without" => 59);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('render', 'without'),
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

        // line 22
        if (($context["profile_edit_url"] ?? null)) {
            // line 23
            echo "  <div class=\"hero-action-button\">
    <a href=\"";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["profile_edit_url"] ?? null), "html", null, true));
            echo "\" title=\"Edit profile information\" class=\"waves-effect waves-light btn btn-raised btn-default btn-floating\">
      <svg class=\"icon-gray icon-medium\">
        <use xlink:href=\"#icon-edit\"></use>
      </svg>
    </a>
  </div>
";
        }
        // line 31
        echo "
<div class=\"cover-wrap\">
  <header>
  <h1 class=\"page-title\">
    ";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["profile_name"] ?? null), "html", null, true));
        echo "
  </h1>

    ";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_profile_image", array()), "html", null, true));
        echo "
  </header>

  ";
        // line 41
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", array())) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", array())))) {
            // line 42
            echo "    <footer class=\"hero-footer\">
      <div class=\"hero-footer__text\">
        ";
            // line 44
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", array()))) {
                // line 45
                echo "          <strong>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", array())), "html", null, true));
                echo "</strong>
        ";
            }
            // line 47
            echo "        ";
            if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", array())) && $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", array())))) {
                // line 48
                echo "        &nbsp;-&nbsp;
        ";
            }
            // line 50
            echo "        ";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", array()))) {
                // line 51
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", array())), "html", null, true));
                echo "
        ";
            }
            // line 53
            echo "      </div>

    </footer>
  ";
        }
        // line 57
        echo "
  ";
        // line 59
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_profile_first_name", "field_profile_last_name", "field_profile_image", "field_profile_function", "field_profile_organization"), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/profile/profile--profile--hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 59,  112 => 57,  106 => 53,  100 => 51,  97 => 50,  93 => 48,  90 => 47,  84 => 45,  82 => 44,  78 => 42,  76 => 41,  70 => 38,  64 => 35,  58 => 31,  48 => 24,  45 => 23,  43 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/socialbase/templates/profile/profile--profile--hero.html.twig", "/home/trekafrik/opensocial/html/themes/contrib/socialbase/templates/profile/profile--profile--hero.html.twig");
    }
}

<?php

/* themes/contrib/socialbase/templates/profile/profile--profile--default.html.twig */
class __TwigTemplate_f8f5bf67184c7150773332de85cdd6ae09657c63256d2c64c9a7773015ae8a61 extends Twig_Template
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
        $tags = array("trans" => 72, "if" => 74, "for" => 105);
        $filters = array("render" => 74);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans', 'if', 'for'),
                array('render'),
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

        // line 68
        echo "
<div class=\"card brand-border-radius\">
  <div class=\"card__body\">

    <h4>";
        // line 72
        echo t("Contact information", array());
        echo "</h4>

    ";
        // line 74
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_phone_number", array()))) {
            // line 75
            echo "      <div class=\"list-item\">
          <div class=\"list-item__label\">";
            // line 76
            echo t("Phone", array());
            echo "</div>
          <div class=\"list-item__text\">";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_profile_phone_number", array()), "html", null, true));
            echo "</div>
      </div>
    ";
        }
        // line 80
        echo "
    ";
        // line 81
        if (($context["user_mail"] ?? null)) {
            // line 82
            echo "      <div class=\"list-item\">
          <div class=\"list-item__label\">";
            // line 83
            echo t("E-mail", array());
            echo "</div>
          <div class=\"list-item__text\">";
            // line 84
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["user_mail"] ?? null), "html", null, true));
            echo "</a></div>
      </div>
    ";
        }
        // line 87
        echo "
    ";
        // line 88
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_address", array()))) {
            // line 89
            echo "      <div class=\"list-item\">
          <div class=\"list-item__label\">";
            // line 90
            echo t("Address", array());
            echo "</div>
          <div class=\"list-item__text\">
              ";
            // line 92
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_profile_address", array()), "html", null, true));
            echo "
          </div>
      </div>
    ";
        }
        // line 96
        echo "

    ";
        // line 98
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_self_introduction", array()))) {
            // line 99
            echo "      <h5>";
            echo t("Intro", array());
            echo "</h5>
      ";
            // line 100
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_profile_self_introduction", array()), "html", null, true));
            echo "
    ";
        }
        // line 102
        echo "
    ";
        // line 103
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_interests", array()), "#items", array(), "array")) {
            // line 104
            echo "      <h5>";
            echo t("Your interests", array());
            echo "</h5>
      ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_interests", array()), "#items", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 106
                echo "        <div class=\"badge badge--pill badge--large badge-default\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "entity", array()), "label", array()), "html", null, true));
                echo "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "    ";
        }
        // line 109
        echo "
    ";
        // line 110
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_expertise", array()), "#items", array(), "array")) {
            // line 111
            echo "      <h5>";
            echo t("Your expertise", array());
            echo "</h5>
      ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_expertise", array()), "#items", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 113
                echo "        <div class=\"badge badge--pill badge--large badge-default\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "entity", array()), "label", array()), "html", null, true));
                echo "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "    ";
        }
        // line 116
        echo "
    ";
        // line 117
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_profile_tag", array()), "#items", array(), "array")) {
            // line 118
            echo "      <h5>";
            echo t("Profile tags", array());
            echo "</h5>
      ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_profile_tag", array()), "#items", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 120
                echo "        <div class=\"badge badge--pill badge--large badge-default\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "entity", array()), "label", array()), "html", null, true));
                echo "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "    ";
        }
        // line 123
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/profile/profile--profile--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 123,  198 => 122,  189 => 120,  185 => 119,  180 => 118,  178 => 117,  175 => 116,  172 => 115,  163 => 113,  159 => 112,  154 => 111,  152 => 110,  149 => 109,  146 => 108,  137 => 106,  133 => 105,  128 => 104,  126 => 103,  123 => 102,  118 => 100,  113 => 99,  111 => 98,  107 => 96,  100 => 92,  95 => 90,  92 => 89,  90 => 88,  87 => 87,  81 => 84,  77 => 83,  74 => 82,  72 => 81,  69 => 80,  63 => 77,  59 => 76,  56 => 75,  54 => 74,  49 => 72,  43 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/socialbase/templates/profile/profile--profile--default.html.twig", "/home/trekafrik/opensocial/html/themes/contrib/socialbase/templates/profile/profile--profile--default.html.twig");
    }
}

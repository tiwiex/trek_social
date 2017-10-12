<?php

/* node--teaser.html.twig */
class __TwigTemplate_3c09a0284a6dda31586371b5ebf05e9229ec7d8db6d2eed4c054dafbc47a8fbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'card_teaser_type' => array($this, 'block_card_teaser_type'),
            'card_image' => array($this, 'block_card_image'),
            'card_body' => array($this, 'block_card_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 72, "if" => 87, "block" => 88, "trans" => 130);
        $filters = array();
        $functions = array("attach_library" => 69);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block', 'trans'),
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

        // line 68
        echo "
";
        // line 69
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/teaser"), "html", null, true));
        echo "

";
        // line 72
        $context["classes"] = array(0 => "teaser", 1 => (((        // line 74
($context["view_mode"] ?? null) == "teaser")) ? ("card brand-border-radius") : ("")), 2 => (((        // line 75
($context["view_mode"] ?? null) == "activity")) ? ("teaser--stream") : ("")), 3 => (((        // line 76
($context["view_mode"] ?? null) == "activity_comment")) ? ("teaser--stream") : ("")), 4 => (($this->getAttribute(        // line 77
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("promoted") : ("")), 5 => (($this->getAttribute(        // line 78
($context["node"] ?? null), "isSticky", array(), "method")) ? ("sticky") : ("")), 6 => (( !$this->getAttribute(        // line 79
($context["node"] ?? null), "isPublished", array(), "method")) ? ("teaser--unpublished") : ("")));
        // line 82
        echo "
<div ";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">

  <div class='teaser__image'>

    ";
        // line 87
        if ((($context["view_mode"] ?? null) == "teaser")) {
            // line 88
            echo "      ";
            $this->displayBlock('card_teaser_type', $context, $blocks);
            // line 89
            echo "    ";
        }
        // line 90
        echo "
    ";
        // line 91
        $this->displayBlock('card_image', $context, $blocks);
        // line 92
        echo "
    ";
        // line 93
        if (($context["status_label"] ?? null)) {
            // line 94
            echo "      <div class=\"status\">
        ";
            // line 95
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["status_label"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 98
        echo "
  </div>

  <div class='teaser__body'>
    <div class=\"teaser__content\">
      ";
        // line 103
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
      ";
        // line 104
        if ( !($context["page"] ?? null)) {
            // line 105
            echo "        <h4";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo " class=\"teaser__title\">
            <a href=\"";
            // line 106
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a>
        </h4>
      ";
        }
        // line 109
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

      ";
        // line 111
        $this->displayBlock('card_body', $context, $blocks);
        // line 114
        echo "    </div>

    <div class=\"card__actionbar\">

        ";
        // line 118
        if ((($context["comment_count"] ?? null) > 0)) {
            // line 119
            echo "          <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "#section-comments\" class=\"badge badge--pill badge-default teaser__badge\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\">
                <use xlink:href=\"#icon-comment\"></use>
              </svg>
              <span class=\"badge__label\">";
            // line 124
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["comment_count"] ?? null), "html", null, true));
            echo "</span>
            </span>
          </a>
        ";
        }
        // line 128
        echo "
        ";
        // line 129
        if ((($context["visibility_icon"] ?? null) && ($context["visibility_label"] ?? null))) {
            // line 130
            echo "          <div class=\"badge teaser__badge\" title=\"";
            echo t("The visibility of this content is set to", array());
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["visibility_label"] ?? null), "html", null, true));
            echo "\">
              <svg class=\"badge__icon\">
                <use xlink:href=\"#icon-";
            // line 132
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["visibility_icon"] ?? null), "html", null, true));
            echo "\"></use>
              </svg>
          </div>
        ";
        }
        // line 136
        echo "
        ";
        // line 137
        if ($this->getAttribute(($context["content"] ?? null), "enrolled", array())) {
            // line 138
            echo "          <span class=\"badge badge-secondary teaser__badge\">";
            // line 139
            echo t("Enrolled", array());
            // line 140
            echo "</span>
        ";
        }
        // line 142
        echo "
      ";
        // line 143
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "links", array()), "html", null, true));
        echo "
    </div>

  </div>

</div>

";
        // line 150
        if (((($context["view_mode"] ?? null) == "activity") && $this->getAttribute(($context["content"] ?? null), "field_book_comments", array()))) {
            // line 151
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_book_comments", array()), "html", null, true));
            echo "
";
        }
    }

    // line 88
    public function block_card_teaser_type($context, array $blocks = array())
    {
        echo " ";
    }

    // line 91
    public function block_card_image($context, array $blocks = array())
    {
        echo " ";
    }

    // line 111
    public function block_card_body($context, array $blocks = array())
    {
        // line 112
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 112,  225 => 111,  219 => 91,  213 => 88,  205 => 151,  203 => 150,  193 => 143,  190 => 142,  186 => 140,  184 => 139,  182 => 138,  180 => 137,  177 => 136,  170 => 132,  162 => 130,  160 => 129,  157 => 128,  150 => 124,  141 => 119,  139 => 118,  133 => 114,  131 => 111,  125 => 109,  117 => 106,  112 => 105,  110 => 104,  106 => 103,  99 => 98,  93 => 95,  90 => 94,  88 => 93,  85 => 92,  83 => 91,  80 => 90,  77 => 89,  74 => 88,  72 => 87,  65 => 83,  62 => 82,  60 => 79,  59 => 78,  58 => 77,  57 => 76,  56 => 75,  55 => 74,  54 => 72,  49 => 69,  46 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--teaser.html.twig", "themes/contrib/socialbase/templates/node/node--teaser.html.twig");
    }
}

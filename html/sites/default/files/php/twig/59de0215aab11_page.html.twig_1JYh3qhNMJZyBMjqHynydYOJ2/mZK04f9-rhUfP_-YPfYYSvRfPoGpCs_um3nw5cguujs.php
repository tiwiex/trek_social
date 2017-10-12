<?php

/* themes/contrib/socialbase/templates/layout/page.html.twig */
class __TwigTemplate_c5896c6ebf438b283db7a701014e02e09a5abc07d3bcebfdc0dee6cb59c7f5df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 36, "set" => 60, "block" => 89);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'block'),
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

        // line 35
        echo "
";
        // line 36
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 37
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
";
        }
        // line 39
        echo "
<main id=\"content\" class=\"main-container\" role=\"main\">

  ";
        // line 42
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())) {
            // line 43
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "
  ";
        }
        // line 45
        echo "
  ";
        // line 46
        if ($this->getAttribute(($context["page"] ?? null), "hero", array())) {
            // line 47
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "hero", array()), "html", null, true));
            echo "
  ";
        }
        // line 49
        echo "
  ";
        // line 50
        if ($this->getAttribute(($context["page"] ?? null), "secondary_navigation", array())) {
            // line 51
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_navigation", array()), "html", null, true));
            echo "
  ";
        }
        // line 53
        echo "
  ";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 55
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
  ";
        }
        // line 57
        echo "
  ";
        // line 59
        echo "  ";
        // line 60
        $context["content_classes"] = array(0 => "row", 1 => "container", 2 => ((($this->getAttribute(        // line 63
($context["page"] ?? null), "title", array()) && ($context["display_page_title"] ?? null))) ? ("with-title-region") : ("")), 3 => ((($this->getAttribute(        // line 64
($context["page"] ?? null), "complementary_top", array()) || $this->getAttribute(($context["page"] ?? null), "complementary_bottom", array()))) ? ("layout--with-complementary") : ("")), 4 => (((twig_test_empty($this->getAttribute(        // line 65
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("layout--with-complementary") : ("")), 5 => (((((twig_test_empty($this->getAttribute(        // line 66
($context["page"] ?? null), "complementary_top", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "complementary_bottom", array()))) && $this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("layout--with-three-columns") : ("")), 6 => (((((twig_test_empty($this->getAttribute(        // line 67
($context["page"] ?? null), "complementary_top", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "complementary_bottom", array()))) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) && $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()))) ? ("layout--with-two-columns") : ("")), 7 => (((((twig_test_empty($this->getAttribute(        // line 68
($context["page"] ?? null), "complementary_top", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "complementary_bottom", array()))) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array()))) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("layout--with-two-columns") : ("")));
        // line 71
        echo "
  <section";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

    ";
        // line 74
        if (($this->getAttribute(($context["page"] ?? null), "title", array()) && ($context["display_page_title"] ?? null))) {
            // line 75
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "title", array()), "html", null, true));
            echo "
    ";
        }
        // line 77
        echo "
    ";
        // line 78
        if (($this->getAttribute(($context["page"] ?? null), "complementary_top", array()) || $this->getAttribute(($context["page"] ?? null), "complementary_bottom", array()))) {
            // line 79
            echo "      <aside class=\"region--complementary\" role=\"complementary\">
        ";
            // line 80
            if ($this->getAttribute(($context["page"] ?? null), "complementary_top", array())) {
                // line 81
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "complementary_top", array()), "html", null, true));
                echo "
        ";
            }
            // line 83
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "complementary_bottom", array())) {
                // line 84
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "complementary_bottom", array()), "html", null, true));
                echo "
        ";
            }
            // line 86
            echo "      </aside>
    ";
        }
        // line 88
        echo "
    ";
        // line 89
        $this->displayBlock('content', $context, $blocks);
        // line 93
        echo "
    ";
        // line 95
        echo "    ";
        if ((($this->getAttribute(($context["page"] ?? null), "sidebar_first", array()) &&  !$this->getAttribute(($context["page"] ?? null), "complementary_top", array())) &&  !$this->getAttribute(($context["page"] ?? null), "complementary_bottom", array()))) {
            // line 96
            echo "      ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 99
            echo "    ";
        }
        // line 100
        echo "
    ";
        // line 102
        echo "    ";
        if ((($this->getAttribute(($context["page"] ?? null), "sidebar_second", array()) &&  !$this->getAttribute(($context["page"] ?? null), "complementary_top", array())) &&  !$this->getAttribute(($context["page"] ?? null), "complementary_bottom", array()))) {
            // line 103
            echo "      ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 106
            echo "    ";
        }
        // line 107
        echo "
  </section>

  ";
        // line 110
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            // line 111
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
            echo "
  ";
        }
        // line 113
        echo "
</main>

";
        // line 116
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 117
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
";
        }
    }

    // line 89
    public function block_content($context, array $blocks = array())
    {
        // line 90
        echo "      <a id=\"main-content\" tabindex=\"-1\"></a>
      ";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
    ";
    }

    // line 96
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 97
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
      ";
    }

    // line 103
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 104
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 104,  240 => 103,  233 => 97,  230 => 96,  224 => 91,  221 => 90,  218 => 89,  210 => 117,  208 => 116,  203 => 113,  197 => 111,  195 => 110,  190 => 107,  187 => 106,  184 => 103,  181 => 102,  178 => 100,  175 => 99,  172 => 96,  169 => 95,  166 => 93,  164 => 89,  161 => 88,  157 => 86,  151 => 84,  148 => 83,  142 => 81,  140 => 80,  137 => 79,  135 => 78,  132 => 77,  126 => 75,  124 => 74,  119 => 72,  116 => 71,  114 => 68,  113 => 67,  112 => 66,  111 => 65,  110 => 64,  109 => 63,  108 => 60,  106 => 59,  103 => 57,  97 => 55,  95 => 54,  92 => 53,  86 => 51,  84 => 50,  81 => 49,  75 => 47,  73 => 46,  70 => 45,  64 => 43,  62 => 42,  57 => 39,  51 => 37,  49 => 36,  46 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/socialbase/templates/layout/page.html.twig", "/home/trekafrik/opensocial/html/themes/contrib/socialbase/templates/layout/page.html.twig");
    }
}

<?php

/* node--topic--teaser.html.twig */
class __TwigTemplate_799bf34bbfa3da0b1f6b2ed59b1daa2100847093e106a372386ee8bc0de4f345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("node--teaser.html.twig", "node--topic--teaser.html.twig", 1);
        $this->blocks = array(
            'card_image' => array($this, 'block_card_image'),
            'card_teaser_type' => array($this, 'block_card_teaser_type'),
            'card_body' => array($this, 'block_card_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node--teaser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("embed" => 8, "if" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('embed', 'if'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_card_image($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_topic_image", array()), "html", null, true));
        echo "
";
    }

    // line 7
    public function block_card_teaser_type($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->loadTemplate("node--topic--teaser.html.twig", "node--topic--teaser.html.twig", 8, "326031333")->display($context);
    }

    // line 13
    public function block_card_body($context, array $blocks = array())
    {
        // line 14
        echo "
  ";
        // line 15
        $this->loadTemplate("node--topic--teaser.html.twig", "node--topic--teaser.html.twig", 15, "1686842982")->display($context);
        // line 24
        echo "
  ";
        // line 25
        if (($context["topic_type"] ?? null)) {
            // line 26
            echo "    ";
            $this->loadTemplate("node--topic--teaser.html.twig", "node--topic--teaser.html.twig", 26, "1628264088")->display($context);
            // line 30
            echo "  ";
        }
        // line 31
        echo "
  ";
        // line 32
        if ($this->getAttribute(($context["content"] ?? null), "group_name", array())) {
            // line 33
            echo "    ";
            $this->loadTemplate("node--topic--teaser.html.twig", "node--topic--teaser.html.twig", 33, "2132606061")->display($context);
            // line 37
            echo "  ";
        }
        // line 38
        echo "
";
    }

    public function getTemplateName()
    {
        return "node--topic--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 38,  99 => 37,  96 => 33,  94 => 32,  91 => 31,  88 => 30,  85 => 26,  83 => 25,  80 => 24,  78 => 15,  75 => 14,  72 => 13,  67 => 8,  64 => 7,  57 => 4,  54 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--topic--teaser.html.twig", "themes/contrib/socialbase/templates/node/topic/node--topic--teaser.html.twig");
    }
}


/* node--topic--teaser.html.twig */
class __TwigTemplate_799bf34bbfa3da0b1f6b2ed59b1daa2100847093e106a372386ee8bc0de4f345_326031333 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("node--teaser__type.html.twig", "node--topic--teaser.html.twig", 8);
        $this->blocks = array(
            'card_teaser_type' => array($this, 'block_card_teaser_type'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node--teaser__type.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_card_teaser_type($context, array $blocks = array())
    {
        echo "topic";
    }

    public function getTemplateName()
    {
        return "node--topic--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 9,  144 => 8,  102 => 38,  99 => 37,  96 => 33,  94 => 32,  91 => 31,  88 => 30,  85 => 26,  83 => 25,  80 => 24,  78 => 15,  75 => 14,  72 => 13,  67 => 8,  64 => 7,  57 => 4,  54 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--topic--teaser.html.twig", "themes/contrib/socialbase/templates/node/topic/node--topic--teaser.html.twig");
    }
}


/* node--topic--teaser.html.twig */
class __TwigTemplate_799bf34bbfa3da0b1f6b2ed59b1daa2100847093e106a372386ee8bc0de4f345_1686842982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--topic--teaser.html.twig", 15);
        $this->blocks = array(
            'field_icon' => array($this, 'block_field_icon'),
            'field_value' => array($this, 'block_field_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_field_icon($context, array $blocks = array())
    {
        echo "account_circle";
    }

    // line 17
    public function block_field_value($context, array $blocks = array())
    {
        // line 18
        echo "      <div class=\"teaser__published\">
        <div class=\"teaser__published-date\"> ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
        echo " &bullet; </div>
        <div class=\"teaser__published-author\"> ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_name"] ?? null), "html", null, true));
        echo " </div>
      </div>";
    }

    public function getTemplateName()
    {
        return "node--topic--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 20,  282 => 19,  279 => 18,  276 => 17,  270 => 16,  228 => 15,  185 => 9,  144 => 8,  102 => 38,  99 => 37,  96 => 33,  94 => 32,  91 => 31,  88 => 30,  85 => 26,  83 => 25,  80 => 24,  78 => 15,  75 => 14,  72 => 13,  67 => 8,  64 => 7,  57 => 4,  54 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--topic--teaser.html.twig", "themes/contrib/socialbase/templates/node/topic/node--topic--teaser.html.twig");
    }
}


/* node--topic--teaser.html.twig */
class __TwigTemplate_799bf34bbfa3da0b1f6b2ed59b1daa2100847093e106a372386ee8bc0de4f345_1628264088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--topic--teaser.html.twig", 26);
        $this->blocks = array(
            'field_icon' => array($this, 'block_field_icon'),
            'field_value' => array($this, 'block_field_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_field_icon($context, array $blocks = array())
    {
        echo "label";
    }

    // line 28
    public function block_field_value($context, array $blocks = array())
    {
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topic_type"] ?? null), "html", null, true));
    }

    public function getTemplateName()
    {
        return "node--topic--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 28,  371 => 27,  329 => 26,  286 => 20,  282 => 19,  279 => 18,  276 => 17,  270 => 16,  228 => 15,  185 => 9,  144 => 8,  102 => 38,  99 => 37,  96 => 33,  94 => 32,  91 => 31,  88 => 30,  85 => 26,  83 => 25,  80 => 24,  78 => 15,  75 => 14,  72 => 13,  67 => 8,  64 => 7,  57 => 4,  54 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--topic--teaser.html.twig", "themes/contrib/socialbase/templates/node/topic/node--topic--teaser.html.twig");
    }
}


/* node--topic--teaser.html.twig */
class __TwigTemplate_799bf34bbfa3da0b1f6b2ed59b1daa2100847093e106a372386ee8bc0de4f345_2132606061 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 33
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--topic--teaser.html.twig", 33);
        $this->blocks = array(
            'field_icon' => array($this, 'block_field_icon'),
            'field_value' => array($this, 'block_field_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_field_icon($context, array $blocks = array())
    {
        echo "group";
    }

    // line 35
    public function block_field_value($context, array $blocks = array())
    {
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "group_name", array()), "html", null, true));
    }

    public function getTemplateName()
    {
        return "node--topic--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  468 => 35,  462 => 34,  420 => 33,  377 => 28,  371 => 27,  329 => 26,  286 => 20,  282 => 19,  279 => 18,  276 => 17,  270 => 16,  228 => 15,  185 => 9,  144 => 8,  102 => 38,  99 => 37,  96 => 33,  94 => 32,  91 => 31,  88 => 30,  85 => 26,  83 => 25,  80 => 24,  78 => 15,  75 => 14,  72 => 13,  67 => 8,  64 => 7,  57 => 4,  54 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--topic--teaser.html.twig", "themes/contrib/socialbase/templates/node/topic/node--topic--teaser.html.twig");
    }
}

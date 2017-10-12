<?php

/* node--event--teaser.html.twig */
class __TwigTemplate_7ac1932bd9a03ad2f6b9cac9afa3d064800b03d18098bcb6ae78c6c80b4f0972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("node--teaser.html.twig", "node--event--teaser.html.twig", 1);
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
        $tags = array("embed" => 8, "if" => 26);
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_event_image", array()), "html", null, true));
        echo "
";
    }

    // line 7
    public function block_card_teaser_type($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 8, "2000333708")->display($context);
    }

    // line 14
    public function block_card_body($context, array $blocks = array())
    {
        // line 15
        echo "
  ";
        // line 16
        $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 16, "1117754681")->display($context);
        // line 20
        echo "
  ";
        // line 21
        $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 21, "587752258")->display($context);
        // line 25
        echo "
  ";
        // line 26
        if (($context["event_type"] ?? null)) {
            // line 27
            echo "    ";
            $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 27, "963772457")->display($context);
            // line 31
            echo "  ";
        }
        // line 32
        echo "
  ";
        // line 33
        if ($this->getAttribute(($context["content"] ?? null), "group_name", array())) {
            // line 34
            echo "    ";
            $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 34, "1320440387")->display($context);
            // line 38
            echo "  ";
        }
        // line 39
        echo "
";
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 39,  104 => 38,  101 => 34,  99 => 33,  96 => 32,  93 => 31,  90 => 27,  88 => 26,  85 => 25,  83 => 21,  80 => 20,  78 => 16,  75 => 15,  72 => 14,  67 => 8,  64 => 7,  57 => 4,  54 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
}


/* node--event--teaser.html.twig */
class __TwigTemplate_7ac1932bd9a03ad2f6b9cac9afa3d064800b03d18098bcb6ae78c6c80b4f0972_2000333708 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("node--teaser__type.html.twig", "node--event--teaser.html.twig", 8);
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
        echo "event";
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 9,  149 => 8,  107 => 39,  104 => 38,  101 => 34,  99 => 33,  96 => 32,  93 => 31,  90 => 27,  88 => 26,  85 => 25,  83 => 21,  80 => 20,  78 => 16,  75 => 15,  72 => 14,  67 => 8,  64 => 7,  57 => 4,  54 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
}


/* node--event--teaser.html.twig */
class __TwigTemplate_7ac1932bd9a03ad2f6b9cac9afa3d064800b03d18098bcb6ae78c6c80b4f0972_1117754681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 16);
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

    // line 17
    public function block_field_icon($context, array $blocks = array())
    {
        echo "event";
    }

    // line 18
    public function block_field_value($context, array $blocks = array())
    {
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["event_date"] ?? null), "html", null, true));
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 18,  275 => 17,  233 => 16,  190 => 9,  149 => 8,  107 => 39,  104 => 38,  101 => 34,  99 => 33,  96 => 32,  93 => 31,  90 => 27,  88 => 26,  85 => 25,  83 => 21,  80 => 20,  78 => 16,  75 => 15,  72 => 14,  67 => 8,  64 => 7,  57 => 4,  54 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
}


/* node--event--teaser.html.twig */
class __TwigTemplate_7ac1932bd9a03ad2f6b9cac9afa3d064800b03d18098bcb6ae78c6c80b4f0972_587752258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 21
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 21);
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

    // line 22
    public function block_field_icon($context, array $blocks = array())
    {
        echo "location";
    }

    // line 23
    public function block_field_value($context, array $blocks = array())
    {
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_event_location", array()), "html", null, true));
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 23,  367 => 22,  325 => 21,  281 => 18,  275 => 17,  233 => 16,  190 => 9,  149 => 8,  107 => 39,  104 => 38,  101 => 34,  99 => 33,  96 => 32,  93 => 31,  90 => 27,  88 => 26,  85 => 25,  83 => 21,  80 => 20,  78 => 16,  75 => 15,  72 => 14,  67 => 8,  64 => 7,  57 => 4,  54 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
}


/* node--event--teaser.html.twig */
class __TwigTemplate_7ac1932bd9a03ad2f6b9cac9afa3d064800b03d18098bcb6ae78c6c80b4f0972_963772457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 27
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 27);
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

    // line 28
    public function block_field_icon($context, array $blocks = array())
    {
        echo "label";
    }

    // line 29
    public function block_field_value($context, array $blocks = array())
    {
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["event_type"] ?? null), "html", null, true));
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 29,  458 => 28,  416 => 27,  373 => 23,  367 => 22,  325 => 21,  281 => 18,  275 => 17,  233 => 16,  190 => 9,  149 => 8,  107 => 39,  104 => 38,  101 => 34,  99 => 33,  96 => 32,  93 => 31,  90 => 27,  88 => 26,  85 => 25,  83 => 21,  80 => 20,  78 => 16,  75 => 15,  72 => 14,  67 => 8,  64 => 7,  57 => 4,  54 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
}


/* node--event--teaser.html.twig */
class __TwigTemplate_7ac1932bd9a03ad2f6b9cac9afa3d064800b03d18098bcb6ae78c6c80b4f0972_1320440387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 34
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 34);
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

    // line 35
    public function block_field_icon($context, array $blocks = array())
    {
        echo "group";
    }

    // line 36
    public function block_field_value($context, array $blocks = array())
    {
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "group_name", array()), "html", null, true));
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  555 => 36,  549 => 35,  507 => 34,  464 => 29,  458 => 28,  416 => 27,  373 => 23,  367 => 22,  325 => 21,  281 => 18,  275 => 17,  233 => 16,  190 => 9,  149 => 8,  107 => 39,  104 => 38,  101 => 34,  99 => 33,  96 => 32,  93 => 31,  90 => 27,  88 => 26,  85 => 25,  83 => 21,  80 => 20,  78 => 16,  75 => 15,  72 => 14,  67 => 8,  64 => 7,  57 => 4,  54 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
}

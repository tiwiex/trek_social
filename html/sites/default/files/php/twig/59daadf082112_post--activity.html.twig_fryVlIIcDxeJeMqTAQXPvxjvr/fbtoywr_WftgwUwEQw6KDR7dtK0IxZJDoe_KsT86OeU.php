<?php

/* themes/contrib/socialbase/templates/post/post--activity.html.twig */
class __TwigTemplate_eb0a9236fe76a3c009eb46e4a7a42eac6d03494b5bef4b2934c0d93c61143384 extends Twig_Template
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
        $tags = array("set" => 20, "if" => 27);
        $filters = array("render" => 27);
        $functions = array("attach_library" => 18);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('render'),
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

        // line 1
        echo "  ";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/comment"), "html", null, true));
        echo "
";
        // line 20
        $context["classes"] = array(0 => "margin-top-m", 1 => ((        // line 22
($context["logged_in"] ?? null)) ? ("margin-bottom-m") : ("")));
        // line 25
        echo "

";
        // line 27
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "links", array()))) {
            // line 28
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "links", array()), "html", null, true));
            echo "
";
        }
        // line 30
        echo "
<div";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">

  ";
        // line 33
        if ($this->getAttribute(($context["content"] ?? null), "field_post", array())) {
            // line 34
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_post", array()), "html", null, true));
            echo "
  ";
        }
        // line 36
        echo "
  ";
        // line 37
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_post_image", array()))) {
            // line 38
            echo "    <p><span class=\"post-image\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_post_image", array()), "html", null, true));
            echo "</span></p>
  ";
        }
        // line 40
        echo "
  ";
        // line 41
        if ($this->getAttribute(($context["content"] ?? null), "like_and_dislike", array())) {
            // line 42
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "like_and_dislike", array()), "html", null, true));
            echo "
  ";
        }
        // line 44
        echo "
</div>

";
        // line 47
        if (($context["logged_in"] ?? null)) {
            // line 48
            echo "  <div class=\"card__nested-section\">
    ";
            // line 49
            if ($this->getAttribute(($context["content"] ?? null), "field_post_comments", array())) {
                // line 50
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_post_comments", array()), "html", null, true));
                echo "
    ";
            }
            // line 52
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/post/post--activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 52,  114 => 50,  112 => 49,  109 => 48,  107 => 47,  102 => 44,  96 => 42,  94 => 41,  91 => 40,  85 => 38,  83 => 37,  80 => 36,  74 => 34,  72 => 33,  67 => 31,  64 => 30,  58 => 28,  56 => 27,  52 => 25,  50 => 22,  49 => 20,  45 => 18,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/socialbase/templates/post/post--activity.html.twig", "/home/trekafrik/opensocial/html/themes/contrib/socialbase/templates/post/post--activity.html.twig");
    }
}

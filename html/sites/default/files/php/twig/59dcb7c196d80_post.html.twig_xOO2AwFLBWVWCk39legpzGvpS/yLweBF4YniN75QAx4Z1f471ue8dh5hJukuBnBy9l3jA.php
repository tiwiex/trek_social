<?php

/* themes/contrib/socialbase/templates/post/post.html.twig */
class __TwigTemplate_449e6c123ee87f9bf742d29586bf6d0da6000b0291cacccf21cfebe4bfc425f2 extends Twig_Template
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
        $tags = array("if" => 26);
        $filters = array("render" => 49);
        $functions = array("attach_library" => 19);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
        echo "
";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/comment"), "html", null, true));
        echo "
<div class=\"card brand-border-radius\">
  <div class=\"card__block\">

    <div class=\"media-wrapper\">
      <div class=\"media\">
        <div class=\"media-left avatar\">
          ";
        // line 26
        if (($context["author_picture"] ?? null)) {
            // line 27
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
            echo "
          ";
        }
        // line 29
        echo "        </div>
        <div class=\"media-body\">
          <div class=\"media-heading text-m\">
            ";
        // line 32
        if ($this->getAttribute(($context["content"] ?? null), "user_id", array())) {
            // line 33
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "user_id", array()), "html", null, true));
            echo "
            ";
        }
        // line 35
        echo "            <div class=\"post-date\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
        echo "</div>
          </div>
        </div>
      </div>

      ";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "links", array()), "html", null, true));
        echo "
  </div>

    <div class=\"margin-top-s\">

      ";
        // line 45
        if ($this->getAttribute(($context["content"] ?? null), "field_post", array())) {
            // line 46
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_post", array()), "html", null, true));
            echo "
      ";
        }
        // line 48
        echo "
      ";
        // line 49
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_post_image", array()))) {
            // line 50
            echo "        <p>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_post_image", array()), "html", null, true));
            echo "</p>
      ";
        }
        // line 52
        echo "
      ";
        // line 53
        if ($this->getAttribute(($context["content"] ?? null), "like_and_dislike", array())) {
            // line 54
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "like_and_dislike", array()), "html", null, true));
            echo "
      ";
        }
        // line 56
        echo "    </div>

    <div class=\"card__nested-section\">
      ";
        // line 59
        if ($this->getAttribute(($context["content"] ?? null), "field_post_comments", array())) {
            // line 60
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_post_comments", array()), "html", null, true));
            echo "
      ";
        }
        // line 62
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/post/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 62,  133 => 60,  131 => 59,  126 => 56,  120 => 54,  118 => 53,  115 => 52,  109 => 50,  107 => 49,  104 => 48,  98 => 46,  96 => 45,  88 => 40,  79 => 35,  73 => 33,  71 => 32,  66 => 29,  60 => 27,  58 => 26,  48 => 19,  45 => 18,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/socialbase/templates/post/post.html.twig", "/home/trekafrik/opensocial/html/themes/contrib/socialbase/templates/post/post.html.twig");
    }
}

<?php

/* MascotasMascotasBundle:Default:index.html.twig */
class __TwigTemplate_aa542df8fd03ca648d614c14a534c57e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        echo "<h3 class=\"text-center\">";
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : $this->getContext($context, "titulo")), "html", null, true);
        echo "</h3>";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"text-center\"><h4>";
        echo twig_escape_filter($this->env, (isset($context["mens"]) ? $context["mens"] : $this->getContext($context, "mens")), "html", null, true);
        echo "!</h4></div>
";
    }

    public function getTemplateName()
    {
        return "MascotasMascotasBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  37 => 3,  29 => 2,);
    }
}

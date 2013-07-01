<?php

/* MascotasMascotasBundle:Mascota:new.html.twig */
class __TwigTemplate_d8d43c1c70921b8f31efe4ff8350c36d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
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
        echo "<h1 align=\"center\">Agregar una Mascota</h1>";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "   <title class=\"h1\">";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
   <div align=\"center\" style=\"central\">
    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mascota_create"), "html", null, true);
        echo "\" method=\"post\" class=\"text-center\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " style=\"color: blue\">
        <div align=\"center\">";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "</div>
        <p>
            <button type=\"submit\" class=\"btn-primary\">agregar</button>
        </p>
    </form>
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mascota"), "html", null, true);
        echo "\">
            Volver a la lista
        </a>
    </li>
</ul>
 </div>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Agregar Mascota";
    }

    public function getTemplateName()
    {
        return "MascotasMascotasBundle:Mascota:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 4,  61 => 14,  51 => 7,  45 => 6,  39 => 4,  36 => 3,  30 => 2,);
    }
}

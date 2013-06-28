<?php

/* MascotasMascotasBundle:Mascota:new.html.twig */
class __TwigTemplate_cae1d5157ca39ae33f5e3e4b944a8665 extends Twig_Template
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
        echo "<h1 align=\"center\">Agregar una Mascota</h1>";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "   <div align=\"center\" style=\"central\">
    <form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mascota_create"), "html", null, true);
        echo "\" method=\"post\" class=\"text-center\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " style=\"color: blue\">
        <div align=\"center\">";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "</div>
        <p>
            <button type=\"submit\" class=\"btn-primary\">agregar</button>
        </p>
    </form>
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mascota"), "html", null, true);
        echo "\">
            Volver a la lista
        </a>
    </li>
</ul>
 </div>
";
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
        return array (  57 => 13,  47 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}

<?php

/* MascotasMascotasBundle:Publicacion:new.html.twig */
class __TwigTemplate_dca53cccdaa1e3ca0d92c86c32c3917b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<title class=\"h1\">";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<div class=\"text-center\">
    <h3>Crear una Nueva Publicacion</h3>
    <h5 class=\"text-info\"><br>Si Perdiste a tu mascota, en el campo \"tipo\" coloca:Perdido.</br>
        <br>Si has encotrado una mascota en el campo \"tipo\" coloca: Encontrado.</br></h5>
    <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <p>
            <button type=\"submit\" class=\"btn-primary\">publicar</button>
        </p>
    </form>
         ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "        <ul class=\"record_actions\">
    <li>
        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion"), "html", null, true);
            echo "\">
            Volver a la Lista
        </a>
    </li>
</ul>
     ";
        }
        // line 24
        echo "</div>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Nueva Publicacion";
    }

    public function getTemplateName()
    {
        return "MascotasMascotasBundle:Publicacion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 4,  70 => 24,  61 => 18,  57 => 16,  55 => 15,  47 => 10,  41 => 9,  32 => 4,  29 => 3,);
    }
}

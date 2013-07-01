<?php

/* MascotasMascotasBundle:Comentario:new.html.twig */
class __TwigTemplate_8760907826cc8d1ba5a493e62b9edf8d extends Twig_Template
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
        echo "<div class=\"text-center\">
   <title class=\"h1\">";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <h1>Comentario</h1>

    <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comentario_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <p>
            <button type=\"submit\" class=\"btn-primary\">Crear</button>
        </p>
    </form>
   ";
        // line 14
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 15
            echo "        <ul class=\"record_actions\">
    <li>
        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comentario"), "html", null, true);
            echo "\">
            Volver a la lista
        </a>
    </li>
</ul>
    ";
        }
        // line 23
        echo "</div>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Comentar";
    }

    public function getTemplateName()
    {
        return "MascotasMascotasBundle:Comentario:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 5,  70 => 23,  61 => 17,  57 => 15,  55 => 14,  47 => 9,  41 => 8,  35 => 5,  32 => 4,  29 => 3,);
    }
}

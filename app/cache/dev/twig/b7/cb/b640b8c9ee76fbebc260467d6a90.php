<?php

/* MascotasMascotasBundle:Usuario:new.html.twig */
class __TwigTemplate_b7cbb640b8c9ee76fbebc260467d6a90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
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
        $this->displayBlock('menu', $context, $blocks);
        // line 6
        echo "<div class=\"text-center\">
    <h1>Nuevo Usuario</h1>

    <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <p>
            <button type=\"submit\">Crear</button>
        </p>
    </form>
 ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "        <ul class=\"record_actions\">
    <li>
       
        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion"), "html", null, true);
            echo "\">
            Volver
        </a>
    </li>
</ul>
 ";
        }
        // line 25
        echo "</div>
";
    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MascotasMascotasBundle:Usuario:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 4,  69 => 25,  60 => 19,  55 => 16,  53 => 15,  45 => 10,  39 => 9,  34 => 6,  32 => 4,  29 => 3,);
    }
}

<?php

/* MascotasMascotasBundle:Comentario:new.html.twig */
class __TwigTemplate_8760907826cc8d1ba5a493e62b9edf8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"span5\"><p><br/></p></div>
<div class=\"span3 well container text-center\">
   <legend>Ingresa un comentario</legend>
   <title class=\"h1\">";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comentario_create", array("publicacion_id" => $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <p>
            <button type=\"submit\" class=\"btn-primary\">Comentar</button>
        </p>
    </form>
   ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "        <ul class=\"record_actions\">
    <li>
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comentario"), "html", null, true);
            echo "\">
            Volver a la lista
        </a>
    </li>
</ul>
    ";
        }
        // line 20
        echo "  </div>


";
    }

    // line 4
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
        return array (  58 => 20,  49 => 14,  25 => 4,  115 => 46,  111 => 44,  109 => 43,  105 => 41,  99 => 40,  84 => 31,  79 => 28,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  48 => 17,  45 => 12,  43 => 11,  30 => 4,  24 => 3,  20 => 1,  145 => 58,  139 => 55,  135 => 53,  131 => 51,  129 => 50,  126 => 49,  123 => 52,  113 => 41,  108 => 39,  102 => 36,  97 => 34,  92 => 31,  90 => 34,  87 => 29,  85 => 28,  77 => 27,  73 => 22,  69 => 21,  65 => 4,  61 => 19,  57 => 21,  53 => 20,  38 => 4,  35 => 6,  29 => 5,);
    }
}

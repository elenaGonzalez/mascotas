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
        echo "<div class=\"span4\"><p></p></div>
<div class=\"span4 well container text-center\">
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
        echo "    <div class=\"span4\"><p></p></div>
    </div>


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
        return array (  66 => 4,  58 => 20,  49 => 14,  45 => 12,  35 => 6,  29 => 5,  25 => 4,  96 => 34,  89 => 32,  81 => 28,  75 => 25,  71 => 23,  69 => 22,  65 => 21,  61 => 20,  55 => 19,  52 => 18,  48 => 17,  43 => 11,  40 => 13,  38 => 12,  26 => 2,  20 => 1,);
    }
}

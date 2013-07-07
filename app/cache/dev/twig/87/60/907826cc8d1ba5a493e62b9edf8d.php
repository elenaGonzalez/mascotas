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
        return array (  45 => 12,  43 => 11,  35 => 6,  29 => 5,  25 => 4,  20 => 1,  90 => 34,  83 => 32,  75 => 28,  69 => 25,  65 => 23,  63 => 22,  59 => 21,  55 => 20,  49 => 14,  46 => 18,  42 => 17,  37 => 14,  34 => 13,  32 => 12,  19 => 1,  232 => 56,  229 => 55,  223 => 54,  217 => 51,  212 => 50,  206 => 48,  202 => 46,  200 => 45,  196 => 44,  192 => 42,  189 => 41,  185 => 92,  175 => 85,  170 => 83,  164 => 80,  159 => 77,  156 => 76,  149 => 72,  145 => 71,  141 => 69,  138 => 68,  134 => 66,  132 => 65,  129 => 64,  127 => 63,  124 => 62,  120 => 60,  118 => 41,  115 => 40,  113 => 39,  110 => 38,  108 => 37,  103 => 34,  98 => 32,  95 => 31,  93 => 30,  89 => 29,  85 => 28,  81 => 27,  76 => 26,  72 => 24,  68 => 22,  66 => 4,  62 => 20,  58 => 20,  54 => 16,  52 => 15,  39 => 4,  36 => 3,  30 => 2,);
    }
}

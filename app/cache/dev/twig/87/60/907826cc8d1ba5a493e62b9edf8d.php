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
        echo "<div class=\"span5\"><p></p></div>
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
        return array (  65 => 4,  58 => 20,  77 => 27,  53 => 20,  20 => 1,  172 => 57,  167 => 56,  146 => 51,  118 => 33,  102 => 27,  90 => 34,  76 => 8,  63 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 40,  128 => 38,  119 => 42,  107 => 36,  71 => 19,  38 => 10,  177 => 65,  165 => 64,  160 => 60,  135 => 47,  126 => 45,  114 => 42,  84 => 31,  70 => 20,  67 => 24,  61 => 13,  94 => 22,  89 => 20,  85 => 14,  75 => 23,  68 => 24,  56 => 9,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 15,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 55,  156 => 58,  151 => 52,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 41,  91 => 31,  62 => 22,  49 => 14,  24 => 3,  25 => 4,  19 => 1,  79 => 28,  72 => 25,  69 => 7,  47 => 50,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 52,  120 => 40,  115 => 46,  111 => 44,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 61,  52 => 52,  50 => 51,  43 => 11,  41 => 7,  35 => 6,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 58,  173 => 74,  168 => 66,  164 => 55,  162 => 62,  154 => 53,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 35,  116 => 32,  112 => 42,  109 => 43,  106 => 28,  103 => 37,  99 => 40,  95 => 34,  92 => 33,  86 => 28,  82 => 13,  80 => 19,  73 => 19,  64 => 23,  60 => 22,  57 => 21,  54 => 17,  51 => 14,  48 => 17,  45 => 12,  42 => 7,  39 => 9,  36 => 7,  33 => 4,  30 => 4,);
    }
}

<?php

/* MascotasMascotasBundle:Usuario:edit.html.twig */
class __TwigTemplate_193a636255b0092412a8738ac1c8874f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Usuario edit</h1>

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <p>
            <button type=\"submit\">Edit</button>
        </p>
    </form>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "MascotasMascotasBundle:Usuario:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  124 => 51,  81 => 34,  65 => 4,  58 => 20,  77 => 25,  53 => 16,  20 => 1,  172 => 57,  167 => 56,  146 => 51,  118 => 33,  102 => 35,  90 => 34,  76 => 8,  63 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 55,  128 => 53,  119 => 49,  107 => 51,  71 => 27,  38 => 4,  177 => 65,  165 => 64,  160 => 60,  135 => 47,  126 => 45,  114 => 41,  84 => 31,  70 => 23,  67 => 24,  61 => 21,  94 => 22,  89 => 28,  85 => 31,  75 => 4,  68 => 18,  56 => 12,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 36,  78 => 28,  46 => 17,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 55,  156 => 58,  151 => 52,  142 => 59,  138 => 58,  136 => 56,  121 => 46,  117 => 44,  105 => 41,  91 => 41,  62 => 21,  49 => 14,  24 => 3,  25 => 4,  19 => 1,  79 => 28,  72 => 4,  69 => 26,  47 => 10,  40 => 6,  37 => 5,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 52,  120 => 40,  115 => 46,  111 => 44,  108 => 37,  101 => 39,  98 => 31,  96 => 32,  83 => 30,  74 => 28,  66 => 23,  55 => 15,  52 => 52,  50 => 18,  43 => 8,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 58,  173 => 74,  168 => 66,  164 => 55,  162 => 62,  154 => 53,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 50,  116 => 48,  112 => 4,  109 => 43,  106 => 41,  103 => 37,  99 => 40,  95 => 36,  92 => 33,  86 => 39,  82 => 13,  80 => 29,  73 => 24,  64 => 23,  60 => 13,  57 => 16,  54 => 19,  51 => 19,  48 => 17,  45 => 6,  42 => 8,  39 => 6,  36 => 7,  33 => 4,  30 => 2,);
    }
}

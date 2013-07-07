<?php

/* MascotasMascotasBundle:Usuario:show.html.twig */
class __TwigTemplate_3e9fa97f910b6f207eac31e6a430db44 extends Twig_Template
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
        echo "<h1>Usuario</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellido"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tel"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Usuario</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "usuario"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "password"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 53
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
        return "MascotasMascotasBundle:Usuario:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 56,  223 => 54,  212 => 50,  206 => 48,  200 => 45,  192 => 42,  175 => 85,  159 => 77,  129 => 64,  127 => 63,  124 => 62,  118 => 41,  110 => 38,  76 => 26,  113 => 39,  100 => 32,  102 => 35,  81 => 34,  77 => 25,  53 => 18,  58 => 18,  20 => 1,  90 => 34,  65 => 24,  63 => 22,  34 => 6,  221 => 72,  217 => 51,  213 => 70,  204 => 74,  202 => 46,  198 => 67,  195 => 66,  191 => 64,  185 => 92,  179 => 57,  170 => 83,  134 => 66,  59 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 55,  224 => 71,  220 => 70,  214 => 69,  208 => 69,  169 => 60,  143 => 40,  140 => 39,  132 => 65,  128 => 42,  119 => 31,  107 => 51,  71 => 19,  38 => 4,  177 => 65,  165 => 53,  160 => 61,  135 => 47,  126 => 45,  114 => 46,  84 => 34,  70 => 25,  67 => 26,  61 => 21,  94 => 4,  89 => 32,  85 => 28,  75 => 4,  68 => 22,  56 => 22,  87 => 32,  21 => 2,  26 => 1,  93 => 30,  88 => 6,  78 => 27,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 44,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 76,  151 => 57,  142 => 47,  138 => 68,  136 => 45,  121 => 46,  117 => 39,  105 => 26,  91 => 41,  62 => 23,  49 => 20,  24 => 3,  25 => 4,  19 => 1,  79 => 32,  72 => 24,  69 => 25,  47 => 10,  40 => 4,  37 => 3,  22 => 2,  246 => 32,  157 => 56,  145 => 71,  139 => 50,  131 => 37,  123 => 41,  120 => 60,  115 => 40,  111 => 36,  108 => 37,  101 => 32,  98 => 32,  96 => 32,  83 => 30,  74 => 30,  66 => 24,  55 => 16,  52 => 15,  50 => 10,  43 => 8,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 41,  187 => 84,  182 => 66,  176 => 56,  173 => 55,  168 => 66,  164 => 80,  162 => 62,  154 => 54,  149 => 72,  147 => 58,  144 => 53,  141 => 69,  133 => 55,  130 => 43,  125 => 34,  122 => 43,  116 => 36,  112 => 53,  109 => 27,  106 => 36,  103 => 34,  99 => 46,  95 => 35,  92 => 15,  86 => 13,  82 => 28,  80 => 8,  73 => 24,  64 => 17,  60 => 22,  57 => 16,  54 => 16,  51 => 7,  48 => 53,  45 => 10,  42 => 8,  39 => 10,  36 => 3,  33 => 4,  30 => 2,);
    }
}

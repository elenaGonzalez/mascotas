<?php

/* MascotasMascotasBundle:Comentario:index.html.twig */
class __TwigTemplate_e8bf2a8356bb2e7873855de671a037a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"text-center\">
    <p><br/></p>
    <h3>Lista de Comentarios</h3>

    <table class=\"container table-bordered table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Comentario</th>
                <th>Fecha</th>
                ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "                <th>Actiones</th> ";
        }
        // line 17
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "usuario"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comentario"), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha"), "d/m/Y h:iA"), "html", null, true);
            echo "</td>
                
                 ";
            // line 27
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 28
                echo "                <td>
                <ul>
                    <li>
                        <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comentario_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">ver</a>
                    </li>
                    <li>
                        <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comentario_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">editar</a>
                    </li>
                </ul>
                </td>
            </tr>
             ";
            }
            // line 40
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
        ";
        // line 43
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 44
            echo "        <ul>
        <li>
            <a href=\"";
            // line 46
            echo "\">
                Crear un Nuevo Comentario
            </a>
        </li>
    </ul>
     ";
        }
        // line 52
        echo "</div>
    ";
    }

    public function getTemplateName()
    {
        return "MascotasMascotasBundle:Comentario:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  53 => 20,  20 => 1,  172 => 57,  167 => 56,  146 => 51,  118 => 33,  102 => 27,  90 => 34,  76 => 8,  63 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 40,  128 => 38,  119 => 42,  107 => 36,  71 => 19,  38 => 10,  177 => 65,  165 => 64,  160 => 60,  135 => 47,  126 => 45,  114 => 42,  84 => 31,  70 => 20,  67 => 24,  61 => 13,  94 => 22,  89 => 20,  85 => 14,  75 => 23,  68 => 24,  56 => 9,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 15,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 55,  156 => 58,  151 => 52,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 41,  91 => 31,  62 => 22,  49 => 19,  24 => 3,  25 => 1,  19 => 1,  79 => 28,  72 => 25,  69 => 7,  47 => 50,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 52,  120 => 40,  115 => 46,  111 => 44,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 61,  52 => 52,  50 => 51,  43 => 15,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 58,  173 => 74,  168 => 66,  164 => 55,  162 => 62,  154 => 53,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 35,  116 => 32,  112 => 42,  109 => 43,  106 => 28,  103 => 37,  99 => 40,  95 => 34,  92 => 33,  86 => 28,  82 => 13,  80 => 19,  73 => 19,  64 => 23,  60 => 22,  57 => 21,  54 => 17,  51 => 14,  48 => 17,  45 => 16,  42 => 7,  39 => 9,  36 => 7,  33 => 4,  30 => 4,);
    }
}

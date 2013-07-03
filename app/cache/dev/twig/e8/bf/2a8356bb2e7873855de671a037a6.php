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
        return array (  115 => 46,  111 => 44,  109 => 43,  105 => 41,  99 => 40,  84 => 31,  79 => 28,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  48 => 17,  45 => 16,  43 => 15,  30 => 4,  24 => 3,  20 => 1,  145 => 58,  139 => 55,  135 => 53,  131 => 51,  129 => 50,  126 => 49,  123 => 52,  113 => 41,  108 => 39,  102 => 36,  97 => 34,  92 => 31,  90 => 34,  87 => 29,  85 => 28,  77 => 27,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  57 => 21,  53 => 20,  38 => 4,  35 => 3,  29 => 2,);
    }
}

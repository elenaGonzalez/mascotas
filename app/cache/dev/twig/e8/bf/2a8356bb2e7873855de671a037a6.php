<?php

/* MascotasMascotasBundle:Comentario:index.html.twig */
class __TwigTemplate_e8bf2a8356bb2e7873855de671a037a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"text-center\">
    <p><br/></p>
    <h3>Lista de Comentarios</h3>

    <table class=\"container table-bordered table-striped\">
        <thead>
            <tr class=\"alert alert-info\">
                <th>Usuario</th>
                <th>Comentario</th>
                <th>Fecha</th>
                ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "                    <th>Acciones</th> ";
        }
        // line 14
        echo "                </tr>
            </thead>
            <tbody>
                ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "                    <tr>
                        <td id=\"comentario-";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "usuario"), "html", null, true);
            echo "</td>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comentario"), "html", null, true);
            echo "</td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha"), "d/m/Y h:iA"), "html", null, true);
            echo "</td>
                        ";
            // line 22
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 23
                echo "                        <td>
                            <div class=\"btn btn-small\">
                                <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comentario_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">ver</a>
                            </div>
                            <div class=\"btn btn-small\">
                                <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comentario_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">editar</a>
                            </div>
                        </td>
                    </tr>
             ";
            }
            // line 32
            echo "                     
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                   
                </tbody>
            </table>
        </div>
";
    }

    public function getTemplateName()
    {
        return "MascotasMascotasBundle:Comentario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 34,  83 => 32,  75 => 28,  69 => 25,  65 => 23,  63 => 22,  59 => 21,  55 => 20,  49 => 19,  46 => 18,  42 => 17,  37 => 14,  34 => 13,  32 => 12,  19 => 1,  232 => 56,  229 => 55,  223 => 54,  217 => 51,  212 => 50,  206 => 48,  202 => 46,  200 => 45,  196 => 44,  192 => 42,  189 => 41,  185 => 92,  175 => 85,  170 => 83,  164 => 80,  159 => 77,  156 => 76,  149 => 72,  145 => 71,  141 => 69,  138 => 68,  134 => 66,  132 => 65,  129 => 64,  127 => 63,  124 => 62,  120 => 60,  118 => 41,  115 => 40,  113 => 39,  110 => 38,  108 => 37,  103 => 34,  98 => 32,  95 => 31,  93 => 30,  89 => 29,  85 => 28,  81 => 27,  76 => 26,  72 => 24,  68 => 22,  66 => 21,  62 => 20,  58 => 18,  54 => 16,  52 => 15,  39 => 4,  36 => 3,  30 => 2,);
    }
}

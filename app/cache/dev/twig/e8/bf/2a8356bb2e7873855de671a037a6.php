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
    <h3>Lista de Comentarios.......</h3>

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
        return array (  90 => 34,  83 => 32,  69 => 25,  65 => 23,  49 => 19,  46 => 18,  42 => 17,  37 => 14,  34 => 13,  32 => 12,  19 => 1,  186 => 46,  182 => 45,  178 => 44,  174 => 43,  170 => 42,  166 => 40,  163 => 39,  159 => 74,  149 => 67,  144 => 65,  138 => 62,  133 => 59,  130 => 58,  123 => 54,  119 => 53,  115 => 51,  112 => 50,  110 => 39,  107 => 38,  105 => 37,  102 => 36,  100 => 35,  97 => 34,  94 => 33,  91 => 32,  89 => 31,  79 => 24,  75 => 28,  71 => 22,  67 => 21,  63 => 22,  59 => 21,  55 => 20,  39 => 4,  36 => 3,  30 => 2,);
    }
}

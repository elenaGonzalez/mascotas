<?php

/* MascotasMascotasBundle:Publicacion:panel.html.twig */
class __TwigTemplate_edd0b859121d799f79fbdda408589f30 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "Hola. Estas son tus publicaciones:
<table class=\"container table-bordered table-striped\">
    <thead>
        <tr class=\"text-center alert alert-danger\">
            <th class=\"text-center\">Nro de Aviso</th>
            <th class=\"text-center\">Foto</th>
            <th class=\"text-center\">Avisos</th>
            <th class=\"text-center\">Acciones</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "            <tr style=\"central\">
                <td class=\"text-center\">
                    <div class=\"btn btn-small\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto"), "webpath")), "html", null, true);
            echo "\" alt=\"Zelda!\"alt=\"Zelda!\" width=\"140\" height=\"140\" class=\"img-polaroid\"></td>
                <td class=\"text-center\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aviso"), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    <div class=\"btn btn-small\"><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Editar</a></td></div>
                    <div class=\"btn btn-small\"><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Finalizar</a></td></div>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "MascotasMascotasBundle:Publicacion:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  69 => 22,  65 => 21,  60 => 19,  56 => 18,  52 => 17,  48 => 15,  44 => 14,  31 => 3,  28 => 2,);
    }
}

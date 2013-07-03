<?php

/* MascotasMascotasBundle:Publicacion:index.html.twig */
class __TwigTemplate_682ff2271a5414a7d0cfaaa6274758c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
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
        echo " <title class=\"h1\">";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<div class=\"text-center\" style=\"margin: auto\">
    <h1 class=\"text-info\">Publicaciones</h1>
    <h4>Estas son las Publicaciones</h4>
    <h4>Ayudanos a que estas mascotas puedan volver a sus hogares.</h4>
    <p><br></br></p>
    <table class=\"container table-bordered table-striped\">
        <thead>
            <tr class=\"text-center\">
                <th class=\"text-center\">Id</th>
                <th class=\"text-center\">Aviso</th>
                <th class=\"text-center\">Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "            <tr style=\"central\">
                <td class=\"text-center\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aviso"), "html", null, true);
            echo "</td>
                
                <td class=\"text-center\">
                <ul>
                     ";
            // line 26
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 27
                echo "                    <li class=\"text-center\">
                        <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">ver</a>
                    </li>
                    <li class=\"text-center\">
                        <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">editar</a>
                    </li>
                </ul>
                 </td>
                 ";
            }
            // line 36
            echo "                         <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">ver Mas</a>
                    </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "      </tbody>
    </table>

        <ul>
        <li>
           
        </li>
    </ul>
</div>
    ";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Publicaciones";
    }

    public function getTemplateName()
    {
        return "MascotasMascotasBundle:Publicacion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 4,  99 => 40,  88 => 36,  80 => 31,  74 => 28,  71 => 27,  69 => 26,  62 => 22,  58 => 21,  55 => 20,  51 => 19,  32 => 4,  29 => 3,);
    }
}

<?php

/* MascotasMascotasBundle:Seguridad:login.html.twig */
class __TwigTemplate_b1daf469b324ba4121758bffb5289a6a extends Twig_Template
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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo " 
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
    <label for=\"username\">Usuario:</label>
    <input id=\"username\" type=\"text\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
    <label for=\"password\">Contraseña:</label>
    <input id=\"password\" type=\"password\" name=\"_password\" /> <input type=\"submit\" name=\"login\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "MascotasMascotasBundle:Seguridad:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  42 => 7,  39 => 6,  33 => 4,  31 => 3,  28 => 2,);
    }
}

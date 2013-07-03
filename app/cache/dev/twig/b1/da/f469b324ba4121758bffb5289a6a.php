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
        echo "<div class=\"thumbnail center well well-small text-center\">
  <h2>Login</h2>
  <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
    <div class=\"input-prepend\"><span class=\"add-on\"><i class=\"icon-user\"></i></span>
        <input type=\"text\" id=\"username\" name=\"_username\" placeholder=\"Usuario\">
    </div>
     <br />
    <div class=\"input-prepend\"><span class=\"add-on\"><i class=\"icon-lock\"></i></span>
        <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Contraseña\">
    </div>
    <br />
    <input type=\"submit\" value=\"ingresar\" class=\"btn btn-primary\" />
  </form>
  <div class=\"text-center\">
  <h4>Si todavía no estas registrado<a class=\"brand\">
          <a href= \"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registro"), "html", null, true);
        echo "\"><i class=\"icon-pencil\"></i>Registrarse</a></h4>
  </div>
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
        return array (  59 => 21,  43 => 8,  39 => 6,  33 => 4,  31 => 3,  28 => 2,);
    }
}

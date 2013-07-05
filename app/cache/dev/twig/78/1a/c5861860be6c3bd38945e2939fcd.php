<?php

/* ::base.html.twig */
class __TwigTemplate_781ac5861860be6c3bd38945e2939fcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'titulo' => array($this, 'block_titulo'),
            'saludo' => array($this, 'block_saludo'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
    <html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title class=\"h1\">";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
  ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 49
        echo "     ";
        $this->displayBlock('titulo', $context, $blocks);
        // line 50
        echo "     ";
        $this->displayBlock('saludo', $context, $blocks);
        // line 52
        echo "     ";
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "      </div>
      </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Inicio";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " <LINK href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <LINK href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"></a>
        ";
    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        // line 14
        echo "         <div class=\"hero-unit badge-warning\">
            <div class=\"header-logo text-center\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/img/perrogato.jpg"), "html", null, true);
        // line 17
        echo "\"/><h1 class=\"text-center bar\">Sistema Mascotas</h1></div></div>
  
  <div class=\"row-fluid\">
  <div class=\"span12\">
      <div class=\"navbar navbar-fixed-top navbar-inner\">
        <div class=\"navbar-inner\">
           <div class=\"container-fluid\">
           <div class=\"row-fluid\">
               <ul>
                  <div class=\"span2\"><li class=\"brand\"><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion"), "html", null, true);
        echo "\"><i class=\"icon-home icon-white\"></i>Sistema Mascotas</a></div>
                  <div class=\"span2\"><li class=\"brand\"><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion"), "html", null, true);
        echo "\">Ver las Publicaciones</a></li></div>
                  <div class=\"span2\"><li class=\"brand\"><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_new"), "html", null, true);
        echo "\">Realizar una Publicacion</a></li></div>
                  <div class=\"span2\"><li class=\"brand\">
                          <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mascota_new"), "html", null, true);
        echo "\">Agregar a tu mascota</a>
                   </li></div>
                  ";
        // line 32
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 33
            echo "                     <div class=\"span2\">     
                     <li class=\"brand\">
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
            echo "\">Salir</a>
                        </a></li></div>
                    ";
        }
        // line 38
        echo "                    <div class=\"span2\">     
                      <li class=\"brand\">
                        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacto"), "html", null, true);
        echo "\">Contacto</a></li>
                    </div>
               </ul>
            </div>
      </div>
   </div>
   </div>
  </div>
  ";
    }

    // line 49
    public function block_titulo($context, array $blocks = array())
    {
    }

    // line 50
    public function block_saludo($context, array $blocks = array())
    {
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            echo "<h4 class=\"text-right\"><i class=\"icon-user\"></i>
         Hola ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</h4>";
        }
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        // line 53
        echo "     <div class=\"span10 text-center\">
    </div>
      ";
        // line 55
        $this->displayBlock('script', $context, $blocks);
        // line 60
        echo "      ";
    }

    // line 55
    public function block_script($context, array $blocks = array())
    {
        // line 56
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/js/jquery-1.10.1.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 58,  188 => 57,  183 => 56,  180 => 55,  176 => 60,  174 => 55,  170 => 53,  167 => 52,  161 => 51,  155 => 50,  150 => 49,  137 => 40,  133 => 38,  127 => 35,  123 => 33,  121 => 32,  116 => 30,  111 => 28,  107 => 27,  103 => 26,  92 => 17,  90 => 15,  87 => 14,  84 => 13,  78 => 8,  71 => 7,  65 => 6,  57 => 61,  54 => 52,  51 => 50,  48 => 49,  46 => 13,  39 => 10,  37 => 7,  33 => 6,  26 => 1,);
    }
}

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
        // line 48
        echo " 
     ";
        // line 49
        $this->displayBlock('titulo', $context, $blocks);
        // line 50
        echo "     ";
        $this->displayBlock('body', $context, $blocks);
        // line 59
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
                  <div class=\"span2\"><a class=\"brand\"><href=\"#\"><i class=\"icon-home icon-white\"></i>Sistema Mascotas</a></div>
                  <div class=\"span2\"><li class=\"brand\"><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_publicacion"), "html", null, true);
        echo "\">Ver las Publicaciones</a></li></div>
                  <div class=\"span2\"><li class=\"brand\"> 
                         <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_publicacionNew"), "html", null, true);
        echo "\">Realizar una Publicacion</li></div>
                  <div class=\"span2\"><li class=\"brand\">
                          <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_mascotaNew"), "html", null, true);
        echo "\">Agregar a tu mascota</a>
                   </li></div>
                  <div class=\"span2\"><li class=\"brand\">
                    ";
        // line 34
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            echo " 
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
            echo "\">Salir</a>
                    ";
        } else {
            // line 37
            echo "                         <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registro"), "html", null, true);
            echo "\">Registrarse</a>
                    ";
        }
        // line 38
        echo "</a></li></div>

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
    public function block_body($context, array $blocks = array())
    {
        // line 51
        echo "     <div class=\"span10 text-center\">
    </div>
      ";
        // line 53
        $this->displayBlock('script', $context, $blocks);
        // line 58
        echo "      ";
    }

    // line 53
    public function block_script($context, array $blocks = array())
    {
        // line 54
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/js/jquery-1.10.1.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mascotasmascotas/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 56
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
        return array (  176 => 56,  172 => 55,  167 => 54,  164 => 53,  160 => 58,  158 => 53,  154 => 51,  151 => 50,  146 => 49,  133 => 38,  127 => 37,  122 => 35,  118 => 34,  112 => 31,  107 => 29,  102 => 27,  90 => 17,  88 => 15,  85 => 14,  82 => 13,  69 => 7,  52 => 50,  50 => 49,  47 => 48,  45 => 13,  36 => 7,  32 => 6,  25 => 1,  83 => 25,  80 => 24,  76 => 8,  74 => 24,  63 => 6,  59 => 15,  55 => 59,  41 => 4,  38 => 10,  30 => 2,);
    }
}

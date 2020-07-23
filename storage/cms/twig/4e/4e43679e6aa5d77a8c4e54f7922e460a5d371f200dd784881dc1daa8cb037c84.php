<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/html/themes/demo/pages/pagina-principal.htm */
class __TwigTemplate_898b5535a10313cf885bea0e19f709cac1db41ce4974ce1a4acfe4c522380c25 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html> 
    <head>
        <link href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/pagina-principal.css");
        echo "\" rel=\"stylesheet\">
        <title>pagina-principal</title>  
    </head>
<div class = \"desktop\">
    
    <div class = \"contenedor\">
        <h1> SISTEMA DE INFORMACION </h1> <br>
        <h1> LICENCIATURA ELECTRONICA  </h1> <br>
        
        <div class = \"opcion\">
            <h3> <a href = \"/semestres/\">";
        // line 13
        echo "Semestres";
        echo "</a></h3>   
        </div>
        
        <div class = \"opcion\">
            <h3> <a href = \"/cursos/:id/";
        // line 17
        echo twig_escape_filter($this->env, ($context["curso"] ?? null), "html", null, true);
        echo "\">";
        echo "Cursos";
        echo "</a></h3> 
            <!--<h3> <a href = \"/cursos/:id/\">";
        // line 18
        echo "Cursos";
        echo "</a></h3>   -->
        </div>
        
        <div class = \"opcion\">
            <h3> <a href = \"/estudiantes/\">";
        // line 22
        echo "Estudiantes";
        echo "</a></h3>   
        </div>
        
        <div class = \"opcion\">
            <h3> <a href = \"/cohortes/\">";
        // line 26
        echo "Cohortes";
        echo "</a></h3>   
        </div>
        
    </div> 
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/demo/pages/pagina-principal.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  74 => 22,  67 => 18,  61 => 17,  54 => 13,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html> 
    <head>
        <link href=\"{{ 'assets/css/pagina-principal.css'|theme }}\" rel=\"stylesheet\">
        <title>pagina-principal</title>  
    </head>
<div class = \"desktop\">
    
    <div class = \"contenedor\">
        <h1> SISTEMA DE INFORMACION </h1> <br>
        <h1> LICENCIATURA ELECTRONICA  </h1> <br>
        
        <div class = \"opcion\">
            <h3> <a href = \"/semestres/\">{{ 'Semestres' }}</a></h3>   
        </div>
        
        <div class = \"opcion\">
            <h3> <a href = \"/cursos/:id/{{curso}}\">{{ 'Cursos' }}</a></h3> 
            <!--<h3> <a href = \"/cursos/:id/\">{{ 'Cursos' }}</a></h3>   -->
        </div>
        
        <div class = \"opcion\">
            <h3> <a href = \"/estudiantes/\">{{ 'Estudiantes' }}</a></h3>   
        </div>
        
        <div class = \"opcion\">
            <h3> <a href = \"/cohortes/\">{{ 'Cohortes' }}</a></h3>   
        </div>
        
    </div> 
</div>", "/var/www/html/themes/demo/pages/pagina-principal.htm", "");
    }
}

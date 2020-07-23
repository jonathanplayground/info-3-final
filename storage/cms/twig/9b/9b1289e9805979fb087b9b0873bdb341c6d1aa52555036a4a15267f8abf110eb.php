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

/* /var/www/html/themes/demo/pages/sistemadatos.htm */
class __TwigTemplate_9b5e003f3806002a3005d1488c93c31e34ea2990361d97d681e5d24bd7db74cb extends \Twig\Template
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
        <title>Semestres</title>  
    </head>
    <body>
    <div class = \"contenedor\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Semestres1"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["semestre"]) {
            echo "      
                <div class = \"opcion\">
                    <h3> <a href = \"/cursos/";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["semestre"], "id", [], "any", false, false, false, 10), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["semestre"], "nombre", [], "any", false, false, false, 10), "html", null, true);
            echo "</a></h3>   
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['semestre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            <div>
                <h3> <a href = \"/pagina-principal/\">";
        // line 14
        echo "pagina principal";
        echo "</a></h3>   
            </div>
    </div>
        
    </body>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/demo/pages/sistemadatos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  67 => 13,  56 => 10,  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html> 
    <head>
        <link href=\"{{ 'assets/css/pagina-principal.css'|theme }}\" rel=\"stylesheet\">
        <title>Semestres</title>  
    </head>
    <body>
    <div class = \"contenedor\">
        {% for semestre in Semestres1 %}      
                <div class = \"opcion\">
                    <h3> <a href = \"/cursos/{{semestre.id}}\">{{ semestre.nombre }}</a></h3>   
                </div>
            {% endfor %}
            <div>
                <h3> <a href = \"/pagina-principal/\">{{ 'pagina principal' }}</a></h3>   
            </div>
    </div>
        
    </body>", "/var/www/html/themes/demo/pages/sistemadatos.htm", "");
    }
}

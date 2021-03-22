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

/* base.html.twig */
class __TwigTemplate_57cc93f113ff6f2dbf348160a53e8b4106eeaad2875f633f55c7ad87c94ad476 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'contenuPrincipal' => [$this, 'block_contenuPrincipal'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "        
    </head>
    <!-- PARTIE BODY -->
    <body>
        ";
        // line 37
        $this->loadTemplate("composants/nav.html.twig", "base.html.twig", 37)->display($context);
        // line 38
        echo "         <!--   MAIN     -->
        <main>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col\">
                        ";
        // line 43
        $this->displayBlock('contenuPrincipal', $context, $blocks);
        // line 44
        echo "                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
            
        </main>
        ";
        // line 49
        $this->loadTemplate("composants/footer.html.twig", "base.html.twig", 49)->display($context);
        // line 50
        echo "
        
        

        ";
        // line 55
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "
    </body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Troc'Eco";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            
            <!-- lien vers bootstrap-->
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl\" crossorigin=\"anonymous\"> 
            <!-- IMPORT POLICE -->
            <!-- OPEN SANS  -->
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
            <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap\" rel=\"stylesheet\">
            <!-- LATO -->
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
            <link href=\"https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Open+Sans:wght@800&display=swap\" rel=\"stylesheet\">
            <!-- ANTON -->
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
            <link href=\"https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@900&family=Open+Sans:wght@800&display=swap\" rel=\"stylesheet\">
            <!-- FONT AWESOME ICONS -->
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css\" integrity=\"sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==\" crossorigin=\"anonymous\" />
            <script src=\"https://kit.fontawesome.com/a3b3ad3be6.js\" crossorigin=\"anonymous\"></script>
            <!-- lien vers fichier css -->
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../css/style.css"), "html", null, true);
        echo "\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../css/index.css"), "html", null, true);
        echo "\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../css/form.css"), "html", null, true);
        echo "\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../css/maison.css"), "html", null, true);
        echo "\" media=\"all\"/>
            <!-- icone barre navigation -->
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\" rel=\"icon\" type=\"image/x-icon\"/> 
            
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_contenuPrincipal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "
             
            <!-- JavaScript Bundle with Popper -->
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js\" integrity=\"sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==\" crossorigin=\"anonymous\"></script>

            <!--JavaScript Textilate -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.js\"></script>


        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 56,  205 => 55,  187 => 43,  174 => 30,  169 => 28,  165 => 27,  161 => 26,  157 => 25,  138 => 8,  128 => 7,  109 => 5,  95 => 69,  92 => 55,  86 => 50,  84 => 49,  77 => 44,  75 => 43,  68 => 38,  66 => 37,  60 => 33,  58 => 7,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Troc'Eco{% endblock %}</title>

        {% block stylesheets %}
            
            <!-- lien vers bootstrap-->
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl\" crossorigin=\"anonymous\"> 
            <!-- IMPORT POLICE -->
            <!-- OPEN SANS  -->
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
            <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap\" rel=\"stylesheet\">
            <!-- LATO -->
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
            <link href=\"https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Open+Sans:wght@800&display=swap\" rel=\"stylesheet\">
            <!-- ANTON -->
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
            <link href=\"https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@900&family=Open+Sans:wght@800&display=swap\" rel=\"stylesheet\">
            <!-- FONT AWESOME ICONS -->
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css\" integrity=\"sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==\" crossorigin=\"anonymous\" />
            <script src=\"https://kit.fontawesome.com/a3b3ad3be6.js\" crossorigin=\"anonymous\"></script>
            <!-- lien vers fichier css -->
            <link rel=\"stylesheet\" href=\"{{asset('../css/style.css') }}\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"{{asset('../css/index.css') }}\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"{{asset('../css/form.css') }}\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"{{asset('../css/maison.css') }}\" media=\"all\"/>
            <!-- icone barre navigation -->
            <link href=\"{{ asset('img/logo1.png') }}\" rel=\"icon\" type=\"image/x-icon\"/> 
            
        {% endblock %}
        
    </head>
    <!-- PARTIE BODY -->
    <body>
        {% include 'composants/nav.html.twig' %}
         <!--   MAIN     -->
        <main>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col\">
                        {% block contenuPrincipal %}{% endblock %}
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
            
        </main>
        {% include 'composants/footer.html.twig' %}

        
        

        {#BLOC JAVASCRIPT#}
        {% block javascripts %}

             
            <!-- JavaScript Bundle with Popper -->
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js\" integrity=\"sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==\" crossorigin=\"anonymous\"></script>

            <!--JavaScript Textilate -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.js\"></script>


        {% endblock %}

    </body>
</html>

", "base.html.twig", "/Users/bouhidjennifer/Desktop/projet-symfony/projet-soutenance/templates/base.html.twig");
    }
}

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

/* parent.html.twig */
class __TwigTemplate_87914cc4d55bd361ebe50da17495913c71f8fb004bbb53967a93d1599743f4da extends \Twig\Template
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
            'header' => [$this, 'block_header'],
            'contenuPrincipal' => [$this, 'block_contenuPrincipal'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parent.html.twig"));

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
        // line 14
        echo "        
    </head>
    <!-- PARTIE BODY -->
    <body>
        <header class=\"bg-header\">
            <!-- BLOC HEADER -->
            ";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 52
        echo "
        </header>
         <!--   MAIN     -->
        <main>
            ";
        // line 56
        $this->displayBlock('contenuPrincipal', $context, $blocks);
        // line 60
        echo "        </main>

        ";
        // line 63
        echo "        <footer>

        ";
        // line 65
        $this->displayBlock('footer', $context, $blocks);
        // line 103
        echo "
        </footer>
        

        ";
        // line 108
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 111
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
        echo "            <!-- lien vers bootstrap-->
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl\" crossorigin=\"anonymous\"> 
            <!-- lien vers fichier css -->
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../css/style.css"), "html", null, true);
        echo "\" media=\"all\">
            
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "                <!-- BARRE DE NAVIGATION -->
                <div class=\"container header\">
                    <div class=\"logo-header\">
                        <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">
                            <img src=\"../img/logo.png\" alt=\"logo\" width=\"45\" height=\"35\">
                        </a>
                    </div>

                    <nav class=\"nav\">
                        <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Comment je fais ?</a>
                        <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout");
        echo "\">J'ajoute un troc</a>
                        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche");
        echo "\">Je recherche</a>

                        <!--Affichage du lien \"mon profil\" et \"Me déconnecter\" slmt si je ss connecté-->
                        ";
        // line 35
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 36
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\">Mon profil</a>
                            <a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            echo "\">Message</a>
                            <button class=\"btn\" type=\"button\">
                                <a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Me déconnecter</a>
                            </button>
                        ";
        }
        // line 42
        echo "                    </nav>

                    <button class=\"btn\" type=\"button\">
                        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">Se connecter</a>
                    </button>

                    <!-- !!! TROUVER UNE CONDITION QUI PERMETTRAIT DE MODIFIER BTN SE CONNECTER EN SE DECONNECTER APRES QUE USER SOIT CONNECTE !!!  -->

                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_contenuPrincipal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        // line 57
        echo "                

            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 66
        echo "            <div class=\"footer\">
            <!-- DEBUT CONTENU FOOTER -->
                <!-- btn de scroll TELECHARGER FONTAWESOME -->
                <a href=\"#\" class=\"scroll-btn\">
                     <button class=\"bouton-scroll\"><i class=\"fas fa-arrow-up\"></i></button>
                </a>

                <!-- DEBUT FOOTER  -->

                <div class=\"row\">
                    <div class=\"col-md-6 text-left\">
                        <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contactez-nous</a>
                        
                    </div>
                    <div class=\"col-md-6 text-right\">
                        <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("politique");
        echo "\">Politique de confidentialité</a>
                        
                    </div>
                    <div>

                    </div>

                    
                    <!-- carte  -->
                        <!--<div class=\"col-md-8\">
                                <iframe id=\"map\"
                                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.6037205336725!2d2.3024096157624276!3d48.86576657928823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fdc9500b9a9%3A0x411c1baafb72ac94!2s12%20Avenue%20Montaigne%2C%2075008%20Paris!5e0!3m2!1sfr!2sfr!4v1614327456646!5m2!1sfr!2sfr\"
                                style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                            </div>-->

                
                </div>


                
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
        echo "            ";
        // line 110
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "parent.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  333 => 110,  331 => 109,  321 => 108,  289 => 81,  282 => 77,  269 => 66,  259 => 65,  247 => 57,  237 => 56,  220 => 45,  215 => 42,  209 => 39,  204 => 37,  199 => 36,  197 => 35,  191 => 32,  187 => 31,  183 => 30,  174 => 24,  169 => 21,  159 => 20,  146 => 11,  141 => 8,  131 => 7,  112 => 5,  99 => 111,  96 => 108,  90 => 103,  88 => 65,  84 => 63,  80 => 60,  78 => 56,  72 => 52,  70 => 20,  62 => 14,  60 => 7,  55 => 5,  49 => 1,);
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
            <!-- lien vers fichier css -->
            <link rel=\"stylesheet\" href=\"{{asset('../css/style.css') }}\" media=\"all\">
            
        {% endblock %}
        
    </head>
    <!-- PARTIE BODY -->
    <body>
        <header class=\"bg-header\">
            <!-- BLOC HEADER -->
            {% block header %}
                <!-- BARRE DE NAVIGATION -->
                <div class=\"container header\">
                    <div class=\"logo-header\">
                        <a href=\"{{ path('accueil') }}\">
                            <img src=\"../img/logo.png\" alt=\"logo\" width=\"45\" height=\"35\">
                        </a>
                    </div>

                    <nav class=\"nav\">
                        <a href=\"{{ path('accueil') }}\">Comment je fais ?</a>
                        <a href=\"{{ path('ajout') }}\">J'ajoute un troc</a>
                        <a href=\"{{ path('recherche') }}\">Je recherche</a>

                        <!--Affichage du lien \"mon profil\" et \"Me déconnecter\" slmt si je ss connecté-->
                        {% if is_granted('ROLE_USER')%}
                            <a href=\"{{ path('profil') }}\">Mon profil</a>
                            <a href=\"{{ path('message') }}\">Message</a>
                            <button class=\"btn\" type=\"button\">
                                <a href=\"{{ path('app_logout') }}\">Me déconnecter</a>
                            </button>
                        {% endif %}
                    </nav>

                    <button class=\"btn\" type=\"button\">
                        <a href=\"{{ path('inscription') }}\">Se connecter</a>
                    </button>

                    <!-- !!! TROUVER UNE CONDITION QUI PERMETTRAIT DE MODIFIER BTN SE CONNECTER EN SE DECONNECTER APRES QUE USER SOIT CONNECTE !!!  -->

                </div>
            {% endblock %}

        </header>
         <!--   MAIN     -->
        <main>
            {% block contenuPrincipal %}
                

            {% endblock %}
        </main>

        {# BLOC FOOTER #}
        <footer>

        {% block footer %}
            <div class=\"footer\">
            <!-- DEBUT CONTENU FOOTER -->
                <!-- btn de scroll TELECHARGER FONTAWESOME -->
                <a href=\"#\" class=\"scroll-btn\">
                     <button class=\"bouton-scroll\"><i class=\"fas fa-arrow-up\"></i></button>
                </a>

                <!-- DEBUT FOOTER  -->

                <div class=\"row\">
                    <div class=\"col-md-6 text-left\">
                        <a href=\"{{ path('contact') }}\">Contactez-nous</a>
                        
                    </div>
                    <div class=\"col-md-6 text-right\">
                        <a href=\"{{ path('politique') }}\">Politique de confidentialité</a>
                        
                    </div>
                    <div>

                    </div>

                    
                    <!-- carte  -->
                        <!--<div class=\"col-md-8\">
                                <iframe id=\"map\"
                                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.6037205336725!2d2.3024096157624276!3d48.86576657928823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fdc9500b9a9%3A0x411c1baafb72ac94!2s12%20Avenue%20Montaigne%2C%2075008%20Paris!5e0!3m2!1sfr!2sfr!4v1614327456646!5m2!1sfr!2sfr\"
                                style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                            </div>-->

                
                </div>


                
            </div>
        {% endblock %}

        </footer>
        

        {#BLOC JAVASCRIPT#}
        {% block javascripts %}
            {#{{ encore_entry_script_tags('app') }}#}
        {% endblock %}

    </body>
</html>
", "parent.html.twig", "/Users/bouhidjennifer/Desktop/projet-symfony/projet-soutenance/templates/parent.html.twig");
    }
}

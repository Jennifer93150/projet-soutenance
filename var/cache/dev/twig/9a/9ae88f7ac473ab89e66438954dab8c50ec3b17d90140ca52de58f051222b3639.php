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

/* composants/nav.html.twig */
class __TwigTemplate_696db48eb11ddf85b8e67f253cb8f0c1e948611fe1c3f845e646822dd16972c0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composants/nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composants/nav.html.twig"));

        // line 1
        echo "<header class=\"bg-header\">
    <!-- BLOC HEADER -->
        ";
        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 49
        echo "</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "            <!-- BARRE DE NAVIGATION -->
            <div class=\"container header\">
                <div class=\"logo-header\">
                    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">
                        <img src=\"../img/logo.png\" alt=\"logo\" width=\"50\" height=\"50\">
                    </a>
                </div>

                <nav class=\"nav\">
                    
                    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Comment je fais ?</a>   
                    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche");
        echo "\">Je recherche</a>
                    

                    <!-- Si connecté affiche dans la navbar \"j'ajoute troc\", \"profil\",\"message\"-->
                    ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 20
            echo "
                        <a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout");
            echo "\">J'ajoute un troc</a>
                        <a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\">Mon profil</a>
                        <a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            echo "\">Mes messages</a>

                        <!-- Si role admin alors affiche btn Gestion -->
                        ";
            // line 26
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 27
                echo "                            <a class=\"nav-link button\" href=\"#\">Gestion</a>
                        ";
            }
            // line 29
            echo "                        <!-- Fin condition btn Gestion -->

                        <button class=\"btn\" type=\"button\">
                            <a class=\"nav-link button\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Me déconnecter</a>
                        </button>

                    <!-- sinon (pas connecté) affiche \"Se connecter\" et \"Je m'inscris\" -->        
                    ";
        } else {
            // line 37
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            echo "\">Je m'inscris</a>
                        <button class=\"btn\" type=\"button\">
                             <a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a>
                        </button>

                    ";
        }
        // line 43
        echo "                    <!-- Fin condition-->
                        
                </nav>

            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "composants/nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  140 => 39,  134 => 37,  126 => 32,  121 => 29,  117 => 27,  115 => 26,  109 => 23,  105 => 22,  101 => 21,  98 => 20,  96 => 19,  89 => 15,  85 => 14,  75 => 7,  70 => 4,  60 => 3,  50 => 49,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"bg-header\">
    <!-- BLOC HEADER -->
        {% block header %}
            <!-- BARRE DE NAVIGATION -->
            <div class=\"container header\">
                <div class=\"logo-header\">
                    <a href=\"{{ path('accueil') }}\">
                        <img src=\"../img/logo.png\" alt=\"logo\" width=\"50\" height=\"50\">
                    </a>
                </div>

                <nav class=\"nav\">
                    
                    <a href=\"{{ path('accueil') }}\">Comment je fais ?</a>   
                    <a href=\"{{ path('recherche') }}\">Je recherche</a>
                    

                    <!-- Si connecté affiche dans la navbar \"j'ajoute troc\", \"profil\",\"message\"-->
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                        <a href=\"{{ path('ajout') }}\">J'ajoute un troc</a>
                        <a href=\"{{ path('profil') }}\">Mon profil</a>
                        <a href=\"{{ path('message') }}\">Mes messages</a>

                        <!-- Si role admin alors affiche btn Gestion -->
                        {% if is_granted('ROLE_ADMIN') %}
                            <a class=\"nav-link button\" href=\"#\">Gestion</a>
                        {% endif %}
                        <!-- Fin condition btn Gestion -->

                        <button class=\"btn\" type=\"button\">
                            <a class=\"nav-link button\" href=\"{{ path('app_logout') }}\">Me déconnecter</a>
                        </button>

                    <!-- sinon (pas connecté) affiche \"Se connecter\" et \"Je m'inscris\" -->        
                    {% else %}
                        <a href=\"{{ path('inscription') }}\">Je m'inscris</a>
                        <button class=\"btn\" type=\"button\">
                             <a href=\"{{ path('app_login') }}\">Se connecter</a>
                        </button>

                    {% endif %}
                    <!-- Fin condition-->
                        
                </nav>

            </div>
        {% endblock %}
</header>", "composants/nav.html.twig", "/Applications/MAMP/htdocs/SYMFONY/projet-soutenance/templates/composants/nav.html.twig");
    }
}

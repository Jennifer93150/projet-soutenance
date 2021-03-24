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
        echo "<header>
    <!-- BLOC HEADER -->
        ";
        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 51
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
            <div class=\"container-fluid header mt-4\">
                <div>
                    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">
                        <img  class=\"logo m-3\" src=\"../img/logo.png\" alt=\"logo\" width=\"50\" height=\"50\">
                    </a>
                </div>
                

                <nav class=\"nav\">
                   
                    
                    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Comment je fais ?</a>   
                    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche");
        echo "\">Je recherche</a>
                    

                    <!-- Si connecté affiche dans la navbar \"j'ajoute troc\", \"profil\",\"message\"-->
                    ";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 22
            echo "
                        <a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout");
            echo "\">J'ajoute un troc</a>
                        <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\">Mon profil</a>
                        <a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
            echo "\">Mes messages</a>

                        <!-- Si role admin alors affiche btn Gestion -->
                        ";
            // line 28
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 29
                echo "                            <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion");
                echo "\">Gestion</a>
                        ";
            }
            // line 31
            echo "                        <!-- Fin condition btn Gestion -->

                        
                        <a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Je me déconnecte</a>
                        

                    <!-- sinon (pas connecté) affiche \"Se connecter\" et \"Je m'inscris\" -->        
                    ";
        } else {
            // line 39
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            echo "\">Je m'inscris</a>
                        
                        <a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Je me connecte</a>
                       

                    ";
        }
        // line 45
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
        return array (  151 => 45,  144 => 41,  138 => 39,  130 => 34,  125 => 31,  119 => 29,  117 => 28,  111 => 25,  107 => 24,  103 => 23,  100 => 22,  98 => 21,  91 => 17,  87 => 16,  75 => 7,  70 => 4,  60 => 3,  50 => 51,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <!-- BLOC HEADER -->
        {% block header %}
            <!-- BARRE DE NAVIGATION -->
            <div class=\"container-fluid header mt-4\">
                <div>
                    <a href=\"{{ path('accueil') }}\">
                        <img  class=\"logo m-3\" src=\"../img/logo.png\" alt=\"logo\" width=\"50\" height=\"50\">
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
                            <a href=\"{{ path('gestion') }}\">Gestion</a>
                        {% endif %}
                        <!-- Fin condition btn Gestion -->

                        
                        <a href=\"{{ path('app_logout') }}\">Je me déconnecte</a>
                        

                    <!-- sinon (pas connecté) affiche \"Se connecter\" et \"Je m'inscris\" -->        
                    {% else %}
                        <a href=\"{{ path('inscription') }}\">Je m'inscris</a>
                        
                        <a href=\"{{ path('app_login') }}\">Je me connecte</a>
                       

                    {% endif %}
                    <!-- Fin condition-->
                        
                </nav>

            </div>
        {% endblock %}
</header>", "composants/nav.html.twig", "/Applications/MAMP/htdocs/SYMFONY/projet-soutenance/templates/composants/nav.html.twig");
    }
}

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

/* /troc-eco/index.html.twig */
class __TwigTemplate_990da57f11cf6030c9ae8ba61b5557eb4c0cdb3f0add53abe9be738285f7e5b9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contenuPrincipal' => [$this, 'block_contenuPrincipal'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/troc-eco/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/troc-eco/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/troc-eco/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_contenuPrincipal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        // line 4
        echo "   
    
        <section class=\"\">
      
            <div>
                <h1 class=\"text-center \">Comment je fais ?</h1>
            </div>
            

            <!-- Fonction is_granted() => permet de savoir si l’utilisateur possède un certain rôle 
            IS_AUTHENTICATED_FULLY => si réellement connecté-->
            ";
        // line 15
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 16
            echo "            <div class=\"text-end\">
                <a class=\"lien-profil\" href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\">
                    Bonjour ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
            echo ".
                    <!-- \"app\" : pr acceder a user, la variable est une instance de Symfony\\Bridge\\Twig\\AppVariable qui donne auto accès à user (variable specifique a l'appli)-->
                </a>     
            </div>  
                        
            ";
        }
        // line 24
        echo "        
           
                <article class=\"col\">
                    <h2 class=\"h2-accueil mb-5 ml-5\">TROC'ECO, </br>UN GESTE SIMPLE.</h2>
                    <div class=\"container\">
                        <div class=\"row\">
                            
                                <img class=\"robe col-4\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/robe.png"), "html", null, true);
        echo "\" alt=\"Robe bleu\">
                                <img class=\"fleche col-4\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fleche.png"), "html", null, true);
        echo "\" alt=\"fleche echange\">
                                <img class=\"livres col-4\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/livres.png"), "html", null, true);
        echo "\" alt=\"livres\">
                            
                            
                        </div>
                        <p class=\"figcaption text-center mt-3\">Echangez un de vos objet contre un autre objet</p>
                    </div>
                </article>

        </section>
        <section>
            <div>
                <article>
                    <h2>
                    </h2>
                    <p>
                    </p>
                </article>

            </div>
        
        </section>
        <section>
            <div>
                <article>
                    <h2>
                    </h2>
                    <p>
                    </p>
                </article>

            </div>
        
        </section>
        
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/troc-eco/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 33,  112 => 32,  108 => 31,  99 => 24,  90 => 18,  86 => 17,  83 => 16,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{# Page Accueil #}
{% block contenuPrincipal %}
   
    
        <section class=\"\">
      
            <div>
                <h1 class=\"text-center \">Comment je fais ?</h1>
            </div>
            

            <!-- Fonction is_granted() => permet de savoir si l’utilisateur possède un certain rôle 
            IS_AUTHENTICATED_FULLY => si réellement connecté-->
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <div class=\"text-end\">
                <a class=\"lien-profil\" href=\"{{ path('profil') }}\">
                    Bonjour {{ app.user.nom }}.
                    <!-- \"app\" : pr acceder a user, la variable est une instance de Symfony\\Bridge\\Twig\\AppVariable qui donne auto accès à user (variable specifique a l'appli)-->
                </a>     
            </div>  
                        
            {% endif %}
        
           
                <article class=\"col\">
                    <h2 class=\"h2-accueil mb-5 ml-5\">TROC'ECO, </br>UN GESTE SIMPLE.</h2>
                    <div class=\"container\">
                        <div class=\"row\">
                            
                                <img class=\"robe col-4\" src=\"{{ asset('img/robe.png')}}\" alt=\"Robe bleu\">
                                <img class=\"fleche col-4\" src=\"{{ asset('img/fleche.png')}}\" alt=\"fleche echange\">
                                <img class=\"livres col-4\" src=\"{{ asset('img/livres.png')}}\" alt=\"livres\">
                            
                            
                        </div>
                        <p class=\"figcaption text-center mt-3\">Echangez un de vos objet contre un autre objet</p>
                    </div>
                </article>

        </section>
        <section>
            <div>
                <article>
                    <h2>
                    </h2>
                    <p>
                    </p>
                </article>

            </div>
        
        </section>
        <section>
            <div>
                <article>
                    <h2>
                    </h2>
                    <p>
                    </p>
                </article>

            </div>
        
        </section>
        
    

{% endblock %}", "/troc-eco/index.html.twig", "/Users/bouhidjennifer/Desktop/projet-symfony/projet-soutenance/templates/troc-eco/index.html.twig");
    }
}

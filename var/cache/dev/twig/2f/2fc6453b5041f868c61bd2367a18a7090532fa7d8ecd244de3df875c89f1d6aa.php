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

/* /user/profil.html.twig */
class __TwigTemplate_dc612792506b2df6390e57bca929f78b4a56bbaa306aa1eca0b1eb3eb91f8ebf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/user/profil.html.twig", 1);
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
        $this->displayParentBlock("contenuPrincipal", $context, $blocks);
        echo "

    <section>
        <div >
            <h1 class=\"text-center\">Mon profil</h1>
        </div>
        <div class=\"bg-vert\">
            <div class=\"card mb-3\" style=\"max-width: 540px;\">
                <div class=\"row g-0\">
                    <div class=\"col-md-4\">
                        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profil.png"), "html", null, true);
        echo "\" alt=\"img-profil\">
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "</h5>
                            <p class=\"card-text\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "email", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
                            <p class=\"card-text\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "ville", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
                            <p class=\"card-text\"><small class=\"text-muted\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "cp", [], "any", false, false, false, 21), "html", null, true);
        echo "</small>
                            </p>
                            <p class=\"card-text\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "telephone", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div>
                <h2>A propos de moi</h2>
                <p>Gingerbread sesame snaps powder marzipan pie tootsie roll jelly-o. Tiramisu lollipop biscuit liquorice candy canes tootsie roll brownie. Soufflé tiramisu tootsie roll bear claw carrot cake. Jelly-o sweet sesame snaps cheesecake dessert gummies. Muffin sugar plum liquorice caramels fruitcake marzipan candy canes.</p>
            </div>
            <div>
                <h2>Mes trocs</h2>
                <!-- Faire une boucle for 
                
                -->
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mesproduits"]) || array_key_exists("mesproduits", $context) ? $context["mesproduits"] : (function () { throw new RuntimeError('Variable "mesproduits" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 40
            echo "                <div class=\"card mb-3\" style=\"max-width: 540px;\">
                    <div class=\"row g-0\">
                        <div class=\"col-md-4\">
                            <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fer-a-repasser.png"), "html", null, true);
            echo "\" alt=\"img-profil\">
                        </div>
                        <div class=\"col-md-8\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", [], "any", false, false, false, 47), "html", null, true);
            echo "</h5>
                                <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
            </div>

           
       

        
            
        
        </div>
    </section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/user/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 56,  140 => 47,  133 => 43,  128 => 40,  124 => 39,  105 => 23,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  81 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block contenuPrincipal %}
{{parent()}}

    <section>
        <div >
            <h1 class=\"text-center\">Mon profil</h1>
        </div>
        <div class=\"bg-vert\">
            <div class=\"card mb-3\" style=\"max-width: 540px;\">
                <div class=\"row g-0\">
                    <div class=\"col-md-4\">
                        <img src=\"{{ asset('img/profil.png')}}\" alt=\"img-profil\">
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ app.user.nom }}</h5>
                            <p class=\"card-text\">{{ app.user.email }}</p>
                            <p class=\"card-text\">{{ app.user.ville }}</p>
                            <p class=\"card-text\"><small class=\"text-muted\">{{ app.user.cp }}</small>
                            </p>
                            <p class=\"card-text\">{{ app.user.telephone }}</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div>
                <h2>A propos de moi</h2>
                <p>Gingerbread sesame snaps powder marzipan pie tootsie roll jelly-o. Tiramisu lollipop biscuit liquorice candy canes tootsie roll brownie. Soufflé tiramisu tootsie roll bear claw carrot cake. Jelly-o sweet sesame snaps cheesecake dessert gummies. Muffin sugar plum liquorice caramels fruitcake marzipan candy canes.</p>
            </div>
            <div>
                <h2>Mes trocs</h2>
                <!-- Faire une boucle for 
                
                -->
                {% for produit in mesproduits %}
                <div class=\"card mb-3\" style=\"max-width: 540px;\">
                    <div class=\"row g-0\">
                        <div class=\"col-md-4\">
                            <img src=\"{{ asset('img/fer-a-repasser.png')}}\" alt=\"img-profil\">
                        </div>
                        <div class=\"col-md-8\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ produit.titre }}</h5>
                                <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}

            </div>

           
       

        
            
        
        </div>
    </section>


{% endblock %}
", "/user/profil.html.twig", "/Applications/MAMP/htdocs/SYMFONY/projet-soutenance/templates/user/profil.html.twig");
    }
}

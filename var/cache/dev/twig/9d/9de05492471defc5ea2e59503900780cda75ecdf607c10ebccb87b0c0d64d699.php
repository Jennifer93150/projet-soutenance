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
class __TwigTemplate_f59c807e27e0d17efb2dcc2a44f47c7791182d1464dd2fc92042f483547e7bda extends \Twig\Template
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

    <section class=\"\">
        <div >
            <h1 class=\"text-center my-5 py-3\">Mon profil</h1>
        </div>
        <div class=\"container bg-vert rounded\">
            <div class=\" mb-3\">
                <div class=\"row g-0\">
                    <div class=\"col-md-6\">
                        <img class=\"rounded shadow-lg\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profil.png"), "html", null, true);
        echo "\" alt=\"img-profil\">
                    </div>
                    <div class=\"col-md-6 p-5\">
                        
                            <h2 class=\"text-capitalize\">Coucou ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "</h2>
                            <p class=\"\">Email : ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "email", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
                            <p class=\"text-capitalize\">Ville : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "ville", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
                            <p class=\"\">Code postal :";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "cp", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
                            <p class=\"\">Tel : 0";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "telephone", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
            <div class=\"my-5\">
                <h2>A propos de moi</h2>
                <p>Gingerbread sesame snaps powder marzipan pie tootsie roll jelly-o. Tiramisu lollipop biscuit liquorice candy canes tootsie roll brownie. Soufflé tiramisu tootsie roll bear claw carrot cake. Jelly-o sweet sesame snaps cheesecake dessert gummies. Muffin sugar plum liquorice caramels fruitcake marzipan candy canes.</p>
                <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier-profil");
        echo "\">Modifier mon profil</a>
            </div>
            <div>
                <h2>Mes trocs</h2>
                <!-- Faire une boucle for 
                
                -->
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mesproduits"]) || array_key_exists("mesproduits", $context) ? $context["mesproduits"] : (function () { throw new RuntimeError('Variable "mesproduits" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 37
            echo "                <div class=\"mb-3\">
                    <div class=\"row g-0\">
                        <div class=\"col-md-6\">
                            <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["produit"], "photo", [], "any", false, false, false, 40))), "html", null, true);
            echo "\" alt=\"image produit du profil\">
                        </div>
                        <div class=\"col-md-6 p-5\">
                            <div class=\"\">
                                <h2 class=\"text-capitalize\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", [], "any", false, false, false, 44), "html", null, true);
            echo "</h2>
                                <p class=\"\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 45), "html", null, true);
            echo "</p>
                                <p class=\"\"><small class=\"text-muted\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "date", [], "any", false, false, false, 46), "html", null, true);
            echo "</small>
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
        // line 53
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
        return array (  161 => 53,  148 => 46,  144 => 45,  140 => 44,  133 => 40,  128 => 37,  124 => 36,  114 => 29,  104 => 22,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  81 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block contenuPrincipal %}
{{parent()}}

    <section class=\"\">
        <div >
            <h1 class=\"text-center my-5 py-3\">Mon profil</h1>
        </div>
        <div class=\"container bg-vert rounded\">
            <div class=\" mb-3\">
                <div class=\"row g-0\">
                    <div class=\"col-md-6\">
                        <img class=\"rounded shadow-lg\" src=\"{{ asset('img/profil.png')}}\" alt=\"img-profil\">
                    </div>
                    <div class=\"col-md-6 p-5\">
                        
                            <h2 class=\"text-capitalize\">Coucou {{ app.user.nom }}</h2>
                            <p class=\"\">Email : {{ app.user.email }}</p>
                            <p class=\"text-capitalize\">Ville : {{ app.user.ville }}</p>
                            <p class=\"\">Code postal :{{ app.user.cp }}</p>
                            <p class=\"\">Tel : 0{{ app.user.telephone }}</p>
                    </div>
                </div>
            </div>
            <div class=\"my-5\">
                <h2>A propos de moi</h2>
                <p>Gingerbread sesame snaps powder marzipan pie tootsie roll jelly-o. Tiramisu lollipop biscuit liquorice candy canes tootsie roll brownie. Soufflé tiramisu tootsie roll bear claw carrot cake. Jelly-o sweet sesame snaps cheesecake dessert gummies. Muffin sugar plum liquorice caramels fruitcake marzipan candy canes.</p>
                <a href=\"{{ path('modifier-profil')}}\">Modifier mon profil</a>
            </div>
            <div>
                <h2>Mes trocs</h2>
                <!-- Faire une boucle for 
                
                -->
                {% for produit in mesproduits %}
                <div class=\"mb-3\">
                    <div class=\"row g-0\">
                        <div class=\"col-md-6\">
                            <img src=\"{{ asset('uploads/brochures/' ~ produit.photo)}}\" alt=\"image produit du profil\">
                        </div>
                        <div class=\"col-md-6 p-5\">
                            <div class=\"\">
                                <h2 class=\"text-capitalize\">{{ produit.titre }}</h2>
                                <p class=\"\">{{ produit.description }}</p>
                                <p class=\"\"><small class=\"text-muted\">{{ produit.date }}</small>
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
", "/user/profil.html.twig", "/Users/bouhidjennifer/Desktop/projet-symfony/projet-soutenance/templates/user/profil.html.twig");
    }
}

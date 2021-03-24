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
        echo "
    <section>
        <div  class=\"shadow-lg\">
            <h1 class=\"text-center my-5 py-3\">Mon profil</h1>
        </div>
        <div class=\"container shadow bg-vert rounded\">
            <div class=\"mb-3\">
                <div class=\"row g-0\">
                    <div class=\"col-lg-6\">
                        <img class=\"rounded shadow-lg\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profil.png"), "html", null, true);
        echo "\" alt=\"img-profil\">
                    </div>
                    <div class=\"contenu-profil col-lg-6 p-5\">
                        
                            <h2 class=\"text-capitalize\">Coucou ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
        echo "</h2>
                            <p class=\"\">Email : ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "email", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
                            <p class=\"text-capitalize\">Ville : ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "ville", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
                            <p class=\"\">Code postal :";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "cp", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
                            <p class=\"\">Tel : 0";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "telephone", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
        </div>
            <div>
=======
            <div class=\"my-5\">
>>>>>>> 912df4ed0d6529199cc0e3745e5dad9219e504f3
                <h2>A propos de moi</h2>
                <p>Gingerbread sesame snaps powder marzipan pie tootsie roll jelly-o. Tiramisu lollipop biscuit liquorice candy canes tootsie roll brownie. Soufflé tiramisu tootsie roll bear claw carrot cake. Jelly-o sweet sesame snaps cheesecake dessert gummies. Muffin sugar plum liquorice caramels fruitcake marzipan candy canes.</p>
                <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\">Modifier mon profil</a>
            </div>
            <div>
                <h2>Mes trocs</h2>
                <!-- Faire une boucle for 
                
                -->
                ";
<<<<<<< HEAD
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mesproduits"]) || array_key_exists("mesproduits", $context) ? $context["mesproduits"] : (function () { throw new RuntimeError('Variable "mesproduits" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 40
            echo "                <div class=\"card mb-3\" style=\"max-width: 540px;\">
=======
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mesproduits"]) || array_key_exists("mesproduits", $context) ? $context["mesproduits"] : (function () { throw new RuntimeError('Variable "mesproduits" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 36
            echo "                <div class=\"mb-3\">
>>>>>>> 912df4ed0d6529199cc0e3745e5dad9219e504f3
                    <div class=\"row g-0\">
                        <div class=\"col-md-6\">
                            <img src=\"";
<<<<<<< HEAD
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
=======
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["produit"], "photo", [], "any", false, false, false, 39))), "html", null, true);
            echo "\" alt=\"image produit du profil\">
                        </div>
                        <div class=\"col-md-6 p-5\">
                            <div class=\"\">
                                <h2 class=\"text-capitalize\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", [], "any", false, false, false, 43), "html", null, true);
            echo "</h2>
                                <p class=\"\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
                                <p class=\"\"><small class=\"text-muted\">Mettre la date de création de l'objet</small></p>
>>>>>>> 912df4ed0d6529199cc0e3745e5dad9219e504f3
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
        // line 56
        echo "
=======
        // line 51
        echo "                <div>
                    <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_profil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)]), "html", null, true);
        echo "\">Supprimer mon profil</a>
                </div>

>>>>>>> 912df4ed0d6529199cc0e3745e5dad9219e504f3
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
<<<<<<< HEAD
        return array (  155 => 56,  140 => 47,  133 => 43,  128 => 40,  124 => 39,  105 => 23,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  81 => 14,  68 => 4,  58 => 3,  35 => 1,);
=======
        return array (  158 => 52,  155 => 51,  142 => 44,  138 => 43,  131 => 39,  126 => 36,  122 => 35,  112 => 28,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  86 => 17,  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
>>>>>>> 912df4ed0d6529199cc0e3745e5dad9219e504f3
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block contenuPrincipal %}

    <section>
        <div  class=\"shadow-lg\">
            <h1 class=\"text-center my-5 py-3\">Mon profil</h1>
        </div>
        <div class=\"container shadow bg-vert rounded\">
            <div class=\"mb-3\">
                <div class=\"row g-0\">
                    <div class=\"col-lg-6\">
                        <img class=\"rounded shadow-lg\" src=\"{{ asset('img/profil.png')}}\" alt=\"img-profil\">
                    </div>
                    <div class=\"contenu-profil col-lg-6 p-5\">
                        
                            <h2 class=\"text-capitalize\">Coucou {{ app.user.nom }}</h2>
                            <p class=\"\">Email : {{ app.user.email }}</p>
                            <p class=\"text-capitalize\">Ville : {{ app.user.ville }}</p>
                            <p class=\"\">Code postal :{{ app.user.cp }}</p>
                            <p class=\"\">Tel : 0{{ app.user.telephone }}</p>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
        </div>
            <div>
=======
            <div class=\"my-5\">
>>>>>>> 912df4ed0d6529199cc0e3745e5dad9219e504f3
                <h2>A propos de moi</h2>
                <p>Gingerbread sesame snaps powder marzipan pie tootsie roll jelly-o. Tiramisu lollipop biscuit liquorice candy canes tootsie roll brownie. Soufflé tiramisu tootsie roll bear claw carrot cake. Jelly-o sweet sesame snaps cheesecake dessert gummies. Muffin sugar plum liquorice caramels fruitcake marzipan candy canes.</p>
                <a href=\"{{ path('edit_profil', {'id':app.user.id})}}\">Modifier mon profil</a>
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
                                <p class=\"\"><small class=\"text-muted\">Mettre la date de création de l'objet</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}
                <div>
                    <a href=\"{{ path('delete_profil', {'id':app.user.id})}}\">Supprimer mon profil</a>
                </div>

            </div>

           
       

        
            
        
        </div>
    </section>


{% endblock %}
<<<<<<< HEAD
", "user/profil.html.twig", "/Applications/MAMP/htdocs/SYMFONY/projet-soutenance/templates/user/profil.html.twig");
=======
", "/user/profil.html.twig", "/Users/bouhidjennifer/Desktop/projet-symfony/projet-soutenance/templates/user/profil.html.twig");
>>>>>>> 912df4ed0d6529199cc0e3745e5dad9219e504f3
    }
}

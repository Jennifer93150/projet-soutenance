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

/* /user/inscription.html.twig */
class __TwigTemplate_db53546b6d72e611c8050bf0caf61de018066193af1fd77a83c5eda7c86412b2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/inscription.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/user/inscription.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Troc'Eco | Connexion";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_contenuPrincipal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        // line 8
        $this->displayParentBlock("contenuPrincipal", $context, $blocks);
        echo "
<section>
    <div class=\"shadow-lg\">
        <h1 class=\"text-center py-3 my-5\">Connexion</h1>
    </div>
    
     ";
        // line 15
        echo "        <div>
                <form method=\"post\">
                        <div class=\"container shadow bg-vert rounded\">
                        <button type=\"button\" class=\"btn btn-outline-info\">
                                <a class=\"text-dark btn\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">J'ai déjà un compte</a>
                        </button>
                        
                        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["id" => "new_user"]]);
        echo "
                        <div class=\"row\">
                                <div class=\"col-12\">
                                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'label');
        echo "
                                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), 'widget');
        echo "
                                </div>
                                <div class=\"col-12\">
                                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'label');
        echo "
                                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'widget');
        echo "
                                </div>
                                <div class=\"col-12\">
                                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 33, $this->source); })()), "password", [], "any", false, false, false, 33), 'label');
        echo "
                                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 34, $this->source); })()), "password", [], "any", false, false, false, 34), 'widget');
        echo "
                                </div>
                                <div class=\"col-12\">
                                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 37, $this->source); })()), "cp", [], "any", false, false, false, 37), 'label');
        echo "
                                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 38, $this->source); })()), "cp", [], "any", false, false, false, 38), 'widget');
        echo "
                                </div>
                                <div class=\"col-12\">
                                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 41, $this->source); })()), "ville", [], "any", false, false, false, 41), 'label');
        echo "
                                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 42, $this->source); })()), "ville", [], "any", false, false, false, 42), 'widget');
        echo "
                                </div>
                                <div class=\"col-12\">
                                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 45, $this->source); })()), "telephone", [], "any", false, false, false, 45), 'label');
        echo "
                                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 46, $this->source); })()), "telephone", [], "any", false, false, false, 46), 'widget');
        echo "
                                </div>
                                
                                <div class=\"col-12\">
                                        <label for=\"verifpass\">Saisir une seconde fois le mot de passe</label>
                                        <input type=\"password\" id=\"verifpass\" required>
                                </div>
                        </div>
                                
                                ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Formulaire"]) || array_key_exists("Formulaire", $context) ? $context["Formulaire"] : (function () { throw new RuntimeError('Variable "Formulaire" does not exist.', 55, $this->source); })()), 'form_end');
        echo "

                                <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Retour à l'accueil</a>
                        
                                
                        
                        
                        </div>
                </form>
        </div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/user/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 57,  184 => 55,  172 => 46,  168 => 45,  162 => 42,  158 => 41,  152 => 38,  148 => 37,  142 => 34,  138 => 33,  132 => 30,  128 => 29,  122 => 26,  118 => 25,  112 => 22,  106 => 19,  100 => 15,  91 => 8,  81 => 7,  62 => 4,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{# PAGE CREATION DE COMPTE#}
{% form_theme Formulaire 'bootstrap_4_layout.html.twig' %}
{% block title %}Troc'Eco | Connexion{% endblock %}

{# MAIN #}
{% block contenuPrincipal %}
{{parent()}}
<section>
    <div class=\"shadow-lg\">
        <h1 class=\"text-center py-3 my-5\">Connexion</h1>
    </div>
    
     {# FORMULAIRE#}
        <div>
                <form method=\"post\">
                        <div class=\"container shadow bg-vert rounded\">
                        <button type=\"button\" class=\"btn btn-outline-info\">
                                <a class=\"text-dark btn\" href=\"{{ path('app_login') }}\">J'ai déjà un compte</a>
                        </button>
                        
                        {{ form_start(Formulaire, {'attr': {'id': 'new_user'}}) }}
                        <div class=\"row\">
                                <div class=\"col-12\">
                                        {{ form_label(Formulaire.nom) }}
                                        {{ form_widget(Formulaire.nom) }}
                                </div>
                                <div class=\"col-12\">
                                        {{ form_label(Formulaire.email) }}
                                        {{ form_widget(Formulaire.email) }}
                                </div>
                                <div class=\"col-12\">
                                        {{ form_label(Formulaire.password) }}
                                        {{ form_widget(Formulaire.password) }}
                                </div>
                                <div class=\"col-12\">
                                        {{ form_label(Formulaire.cp) }}
                                        {{ form_widget(Formulaire.cp) }}
                                </div>
                                <div class=\"col-12\">
                                        {{ form_label(Formulaire.ville) }}
                                        {{ form_widget(Formulaire.ville) }}
                                </div>
                                <div class=\"col-12\">
                                        {{ form_label(Formulaire.telephone) }}
                                        {{ form_widget(Formulaire.telephone) }}
                                </div>
                                
                                <div class=\"col-12\">
                                        <label for=\"verifpass\">Saisir une seconde fois le mot de passe</label>
                                        <input type=\"password\" id=\"verifpass\" required>
                                </div>
                        </div>
                                
                                {{ form_end(Formulaire) }}

                                <a href=\"{{ path('accueil') }}\">Retour à l'accueil</a>
                        
                                
                        
                        
                        </div>
                </form>
        </div>
</section>

{% endblock %}", "/user/inscription.html.twig", "/Users/bouhidjennifer/Desktop/projet-symfony/projet-soutenance/templates/user/inscription.html.twig");
    }
}

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

/* security/login.html.twig */
class __TwigTemplate_d02ba3945bd6c1cd5c968e8c0775a651c3e76d2fa7a943e6582a017a405a3307 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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

    // line 5
    public function block_contenuPrincipal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        // line 6
        $this->displayParentBlock("contenuPrincipal", $context, $blocks);
        echo "

    <div><h1 class=\"text-center\">Connexion</h1></div>
     <!-- Formualaire -->
    <form method=\"post\">
    <!-- Message erreur -->
        ";
        // line 12
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageKey", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageData", [], "any", false, false, false, 13), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 15
        echo "
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "            <div class=\"mb-3\">
                Vous êtes déjà connecté en tant que ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
            echo ", 
            </div>
        ";
        }
        // line 21
        echo "
        <div>
            <div id=\"bouton\" class=\"row bg-vert\">
                <div class=\"col-lg-6\" style=\"background-color:#CFFFE2\">
                    <a class=\" text-dark btn\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">Je crée un compte</a>
                </div>
          
                <div class=\"col-lg-6\" style=\"background-color:#CFFFE2\">
                    <a class=\" text-dark btn\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Je me connecte</a>
                        
                </div>
            </div>
        </div>
        
        <div class=\"bg-vert\">
            <div>
                <label for=\"inputEmail\">Email</label>
                <input type=\"email\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control mt-2 mb-3\" required autofocus>
                <label for=\"inputPassword\">Mot de passe</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control mt-2 mb-3\" required>

                <input type=\"hidden\" name=\"_csrf_token\"
                    value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            </div>
            <div class=\"mb-3 text-end\">
                <button class=\"btn px-5\" style=\"background-color:#FFDAC3\" type=\"submit\">Se connecter</button>
            </div>
        </div>
        

        ";
        // line 61
        echo "
        
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 61,  152 => 43,  144 => 38,  132 => 29,  125 => 25,  119 => 21,  113 => 18,  110 => 17,  108 => 16,  105 => 15,  99 => 13,  97 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Troc'Eco | Connexion{% endblock %}

{% block contenuPrincipal %}
{{parent()}}

    <div><h1 class=\"text-center\">Connexion</h1></div>
     <!-- Formualaire -->
    <form method=\"post\">
    <!-- Message erreur -->
        {% if error %}
            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}

        {% if app.user %}
            <div class=\"mb-3\">
                Vous êtes déjà connecté en tant que {{ app.user.nom }}, 
            </div>
        {% endif %}

        <div>
            <div id=\"bouton\" class=\"row bg-vert\">
                <div class=\"col-lg-6\" style=\"background-color:#CFFFE2\">
                    <a class=\" text-dark btn\" href=\"{{ path('inscription') }}\">Je crée un compte</a>
                </div>
          
                <div class=\"col-lg-6\" style=\"background-color:#CFFFE2\">
                    <a class=\" text-dark btn\" href=\"{{ path('app_login') }}\">Je me connecte</a>
                        
                </div>
            </div>
        </div>
        
        <div class=\"bg-vert\">
            <div>
                <label for=\"inputEmail\">Email</label>
                <input type=\"email\" value=\"{{ nom }}\" name=\"email\" id=\"inputEmail\" class=\"form-control mt-2 mb-3\" required autofocus>
                <label for=\"inputPassword\">Mot de passe</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control mt-2 mb-3\" required>

                <input type=\"hidden\" name=\"_csrf_token\"
                    value=\"{{ csrf_token('authenticate') }}\">
            </div>
            <div class=\"mb-3 text-end\">
                <button class=\"btn px-5\" style=\"background-color:#FFDAC3\" type=\"submit\">Se connecter</button>
            </div>
        </div>
        

        {#
            Décommentez cette section et ajoutez une option Remember_me sous votre pare-feu pour activer la fonctionnalité Remember me.
            See https://symfony.com/doc/current/security/remember_me.html

            <div class=\"checkbox mb-3\">
                <label>
                    <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                </label>
            </div>
        #}

        
    </form>
{% endblock %}
", "security/login.html.twig", "/Applications/MAMP/htdocs/SYMFONY/projet-soutenance/templates/security/login.html.twig");
    }
}

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

/* troc-eco/contact.html.twig */
class __TwigTemplate_a533af49e93e30151949443b97a869d2594c05c70a20a2cd4e05e56b10d9a07a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
<<<<<<< HEAD
            'stylesheets' => [$this, 'block_stylesheets'],
=======
>>>>>>> 912df4ed0d6529199cc0e3745e5dad9219e504f3
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "troc-eco/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "troc-eco/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "troc-eco/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

<<<<<<< HEAD
    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
=======
    // line 5
>>>>>>> 912df4ed0d6529199cc0e3745e5dad9219e504f3
    public function block_contenuPrincipal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenuPrincipal"));

<<<<<<< HEAD
        // line 9
        echo "
<h1 class=\"text-center\">Contactez-nous</h1>

<section id=\"formulaire\">
    <form action=\"#\" method=\"POST\">
        <div class=\"container bg-vert\">
            <div class=\"row\">
                <div class=\"mb-3\">
                    <h2 class=\"text-end\">Un petit<br>message...</br></h2>
                </div>
                <div class=\"mb-3\">
                    <label for=\"exampleFormControlInput1\" class=\"form-label\">Votre nom</label>
                    <input class=\"form-control\" type=\"text\" aria-label=\"default input example\">
                </div>
                <div class=\"mb-3\">   
                    <label for=\"exampleFormControlInput1\" class=\"form-label\">Votre prénom</label>
                    <input class=\"form-control\" type=\"text\"  aria-label=\"default input example\">
                </div>
                <div class=\"mb-3\">
                    <label for=\"exampleFormControlInput1\" class=\"form-label\">Votre email</label>
                    <input type=\"email\" class=\"form-control\" id=\"exampleFormControlInput1\">
                </div>
                <div class=\"mb-3\">
                    <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Votre message</label>
                    <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                </div>
                <div class=\"mb-3 text-end\">
                    <button class=\"btn px-5\" style=\"background-color:#FFDAC3\" type=\"submit\">Envoyer</button>
                </div>
            </div>
        </div>
    </form>
</section>            
=======
        // line 6
        $this->displayParentBlock("contenuPrincipal", $context, $blocks);
        echo "

>>>>>>> 912df4ed0d6529199cc0e3745e5dad9219e504f3
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "troc-eco/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  95 => 9,  85 => 8,  73 => 5,  69 => 4,  59 => 3,  36 => 1,);
=======
        return array (  68 => 6,  58 => 5,  35 => 1,);
>>>>>>> 912df4ed0d6529199cc0e3745e5dad9219e504f3
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

<<<<<<< HEAD
{% block stylesheets %}
{{ parent() }}
<link href=\"{{asset('/css/style.css')}}\" rel=\"stylesheet\" media=\"all\">
{% endblock %}

{% block contenuPrincipal %}

<h1 class=\"text-center\">Contactez-nous</h1>

<section id=\"formulaire\">
    <form action=\"#\" method=\"POST\">
        <div class=\"container bg-vert\">
            <div class=\"row\">
                <div class=\"mb-3\">
                    <h2 class=\"text-end\">Un petit<br>message...</br></h2>
                </div>
                <div class=\"mb-3\">
                    <label for=\"exampleFormControlInput1\" class=\"form-label\">Votre nom</label>
                    <input class=\"form-control\" type=\"text\" aria-label=\"default input example\">
                </div>
                <div class=\"mb-3\">   
                    <label for=\"exampleFormControlInput1\" class=\"form-label\">Votre prénom</label>
                    <input class=\"form-control\" type=\"text\"  aria-label=\"default input example\">
                </div>
                <div class=\"mb-3\">
                    <label for=\"exampleFormControlInput1\" class=\"form-label\">Votre email</label>
                    <input type=\"email\" class=\"form-control\" id=\"exampleFormControlInput1\">
                </div>
                <div class=\"mb-3\">
                    <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Votre message</label>
                    <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                </div>
                <div class=\"mb-3 text-end\">
                    <button class=\"btn px-5\" style=\"background-color:#FFDAC3\" type=\"submit\">Envoyer</button>
                </div>
            </div>
        </div>
    </form>
</section>            
{% endblock %}", "troc-eco/contact.html.twig", "/Applications/MAMP/htdocs/SYMFONY/projet-soutenance/templates/troc-eco/contact.html.twig");
=======


{% block contenuPrincipal %}
{{parent()}}

{% endblock %}", "troc-eco/contact.html.twig", "/Users/bouhidjennifer/Desktop/projet-symfony/projet-soutenance/templates/troc-eco/contact.html.twig");
>>>>>>> 912df4ed0d6529199cc0e3745e5dad9219e504f3
    }
}

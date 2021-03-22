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

/* composants/footer.html.twig */
class __TwigTemplate_2e676c5a63732802057007e0dc599302b3b86ab65bd768bbe9de6b584208e231 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composants/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composants/footer.html.twig"));

        // line 2
        echo "<footer>

";
        // line 4
        $this->displayBlock('footer', $context, $blocks);
        // line 34
        echo "
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 5
        echo "    <div class=\"footer\">
     <!-- DEBUT CONTENU FOOTER -->
        <!-- btn de scroll TELECHARGER FONTAWESOME -->
        <a href=\"#\" class=\"btn-scroll\">
            <i class=\"fas fa-arrow-circle-up\"></i>
        </a>

        <!-- DEBUT FOOTER  -->

        <div class=\"row\">
            <div class=\"col-md-6 text-left\">
                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contactez-nous</a>
                        
            </div>
            <div class=\"col-md-6 text-right\">
                <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("politique");
        echo "\">Politique de confidentialité</a>
                        
            </div>
        <div>

    </div>

    <!-- carte  -->
    <!--<div class=\"col-md-8\">
        <iframe id=\"map\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.6037205336725!2d2.3024096157624276!3d48.86576657928823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fdc9500b9a9%3A0x411c1baafb72ac94!2s12%20Avenue%20Montaigne%2C%2075008%20Paris!5e0!3m2!1sfr!2sfr!4v1614327456646!5m2!1sfr!2sfr\"
         style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
        </div>-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "composants/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  84 => 16,  71 => 5,  61 => 4,  50 => 34,  48 => 4,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# BLOC FOOTER #}
<footer>

{% block footer %}
    <div class=\"footer\">
     <!-- DEBUT CONTENU FOOTER -->
        <!-- btn de scroll TELECHARGER FONTAWESOME -->
        <a href=\"#\" class=\"btn-scroll\">
            <i class=\"fas fa-arrow-circle-up\"></i>
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
        <iframe id=\"map\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.6037205336725!2d2.3024096157624276!3d48.86576657928823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fdc9500b9a9%3A0x411c1baafb72ac94!2s12%20Avenue%20Montaigne%2C%2075008%20Paris!5e0!3m2!1sfr!2sfr!4v1614327456646!5m2!1sfr!2sfr\"
         style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
        </div>-->

{% endblock %}

</footer>", "composants/footer.html.twig", "/Users/bouhidjennifer/Desktop/projet-symfony/projet-soutenance/templates/composants/footer.html.twig");
    }
}

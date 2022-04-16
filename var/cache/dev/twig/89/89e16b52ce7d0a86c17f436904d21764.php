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

/* user/profile.html.twig */
class __TwigTemplate_6fec6ee1aa89a0ed7329972cc5e2b139 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "user/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
     <style>
     body {
    background: white
}

.card {
    border: none;
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    cursor: pointer
}

.card:before {
    content: \"\";
    position: absolute;
    left: 0;
    top: 0;
    width: 4px;
    height: 100%;
    background-color: white;
    transform: scaleY(1);
    transition: all 0.5s;
    transform-origin: bottom
}

.card:after {
    content: \"\";
    position: absolute;
    left: 0;
    top: 0;
    width: 4px;
    height: 100%;
    background-color: #e6922e;
    transform: scaleY(0);
    transition: all 0.5s;
    transform-origin: bottom
}

.card:hover::after {
    transform: scaleY(1)
}

.fonts {
    font-size: 11px
}

.social-list {
    display: flex;
    list-style: none;
    justify-content: center;
    padding: 0
}

.social-list li {
    padding: 10px;
    color: #e6922e;
    font-size: 19px
}

.buttons button:nth-child(1) {
    border: 1px solid #e6922e !important;
    color: #e6922e;
    height: 40px
}

.buttons button:nth-child(1):hover {
    border: 1px solid #e6922e !important;
    color: #fff;
    height: 40px;
    background-color: #e6922e
}

.buttons button:nth-child(2) {
    border: 1px solid #e6922e !important;
    background-color: #e6922e;
    color: #fff;
    height: 40px
}
     </style>
\t<div class=\"container mt-5\" style=\"margin-top:10%; margin-bottom:5%\">
    <div class=\"row d-flex justify-content-center\" style='background-color:whotesmoke;display: flex;
  justify-content: center;
  align-items: center;' >
        <div class=\"col-md-7\" >
            <div class=\"card p-3 py-4\">
                <div class=\"text-center\"> 
                <img src=\"https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png\" width=\"40%\" class=\"rounded-circle\">
                 </div>
                <div class=\"text-center mt-3\"> <span class=\"bg-secondary p-1 px-4 rounded text-white\">USER PROFILE</span>
                    <h5 class=\"mt-2 mb-0\">Welcome ";
        // line 95
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "nom", [], "any", false, false, false, 95) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "prenom", [], "any", false, false, false, 95)), "html", null, true);
        echo "</h5> <span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "username", [], "any", false, false, false, 95), "html", null, true);
        echo "</span>
                    <div class=\"px-4 mt-1\">
                        <ul>
                                        <li><span>Email :</span>";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "email", [], "any", false, false, false, 98), "html", null, true);
        echo "</li>
                                        <li><span>Nom :</span>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "nom", [], "any", false, false, false, 99), "html", null, true);
        echo "</li>
                                        <li><span>Prenom :</span> ";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "prenom", [], "any", false, false, false, 100), "html", null, true);
        echo "</li>
                                        <li><span>Numero de tel:</span> ";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "numTel", [], "any", false, false, false, 101), "html", null, true);
        echo "</li>
                                        <li><span>Username:</span> ";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "username", [], "any", false, false, false, 102), "html", null, true);
        echo "</li>
                                        <li><span>date de naissance :</span>";
        // line 103
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 103, $this->source); })()), "dateNaissance", [], "any", false, false, false, 103), "d-m-Y"), "html", null, true);
        echo "</li>
                                        <li><span>adresse :</span>";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 104, $this->source); })()), "adresse", [], "any", false, false, false, 104), "html", null, true);
        echo "</li>
                                        
                    </div>
                   
                   <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"anime__details__btn\" style=\"display: flex\">

                                    <form  method=\"get\" action=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profile");
        echo "\">
                                            <button  class=\"btn btn-success btn-fw\"><i
                                                        class=\"fa fa-angle-right\"></i> edit Account</button>
                                        </form>

                                    </div>
                                    <div class=\"text-center\">
                                <a class=\"btn btn-danger btn-block enter-btn\" href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"mdi mdi-arrow-right-bold-hexagon-outline\"></i> Log out </a>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 118,  203 => 111,  193 => 104,  189 => 103,  185 => 102,  181 => 101,  177 => 100,  173 => 99,  169 => 98,  161 => 95,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block body %}

     <style>
     body {
    background: white
}

.card {
    border: none;
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    cursor: pointer
}

.card:before {
    content: \"\";
    position: absolute;
    left: 0;
    top: 0;
    width: 4px;
    height: 100%;
    background-color: white;
    transform: scaleY(1);
    transition: all 0.5s;
    transform-origin: bottom
}

.card:after {
    content: \"\";
    position: absolute;
    left: 0;
    top: 0;
    width: 4px;
    height: 100%;
    background-color: #e6922e;
    transform: scaleY(0);
    transition: all 0.5s;
    transform-origin: bottom
}

.card:hover::after {
    transform: scaleY(1)
}

.fonts {
    font-size: 11px
}

.social-list {
    display: flex;
    list-style: none;
    justify-content: center;
    padding: 0
}

.social-list li {
    padding: 10px;
    color: #e6922e;
    font-size: 19px
}

.buttons button:nth-child(1) {
    border: 1px solid #e6922e !important;
    color: #e6922e;
    height: 40px
}

.buttons button:nth-child(1):hover {
    border: 1px solid #e6922e !important;
    color: #fff;
    height: 40px;
    background-color: #e6922e
}

.buttons button:nth-child(2) {
    border: 1px solid #e6922e !important;
    background-color: #e6922e;
    color: #fff;
    height: 40px
}
     </style>
\t<div class=\"container mt-5\" style=\"margin-top:10%; margin-bottom:5%\">
    <div class=\"row d-flex justify-content-center\" style='background-color:whotesmoke;display: flex;
  justify-content: center;
  align-items: center;' >
        <div class=\"col-md-7\" >
            <div class=\"card p-3 py-4\">
                <div class=\"text-center\"> 
                <img src=\"https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png\" width=\"40%\" class=\"rounded-circle\">
                 </div>
                <div class=\"text-center mt-3\"> <span class=\"bg-secondary p-1 px-4 rounded text-white\">USER PROFILE</span>
                    <h5 class=\"mt-2 mb-0\">Welcome {{ user.nom ~ ' ' ~user.prenom}}</h5> <span>{{user.username}}</span>
                    <div class=\"px-4 mt-1\">
                        <ul>
                                        <li><span>Email :</span>{{ user.email }}</li>
                                        <li><span>Nom :</span>{{ user.nom }}</li>
                                        <li><span>Prenom :</span> {{ user.prenom }}</li>
                                        <li><span>Numero de tel:</span> {{ user.numTel }}</li>
                                        <li><span>Username:</span> {{ user.username }}</li>
                                        <li><span>date de naissance :</span>{{ user.dateNaissance | date(\"d-m-Y\")}}</li>
                                        <li><span>adresse :</span>{{ user.adresse }}</li>
                                        
                    </div>
                   
                   <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"anime__details__btn\" style=\"display: flex\">

                                    <form  method=\"get\" action=\"{{ path('edit_profile') }}\">
                                            <button  class=\"btn btn-success btn-fw\"><i
                                                        class=\"fa fa-angle-right\"></i> edit Account</button>
                                        </form>

                                    </div>
                                    <div class=\"text-center\">
                                <a class=\"btn btn-danger btn-block enter-btn\" href=\"{{ path('app_logout') }}\"><i class=\"mdi mdi-arrow-right-bold-hexagon-outline\"></i> Log out </a>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>




{% endblock %}", "user/profile.html.twig", "/home/wajih/pidev/symfonyy/ethleteinteg/templates/user/profile.html.twig");
    }
}

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

/* registration/register.html.twig */
class __TwigTemplate_bc2fdb3f7393c345efde623d3ad483b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo " <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>Bienvenue chez Nextec</title>
        <!-- plugins:css -->
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/style.css"), "html", null, true);
        echo "\">
        <!-- End layout styles -->
        

        <style>
            #registration_form_agreeTerms{
                margin-top: -16px;
            }

            ul{
                background-color: #ff2828;
                border-radius: 9px;
            }
            .card{
                border: 2px solid white;
            }
        </style>
    </head>
    <body>
    <div class=\"container-scroller\">
        <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
            <div class=\"row w-100 m-0\">
                <div class=\"content-wrapper full-page-wrapper d-flex align-items-center auth login-bg\">
                    <div class=\"card col-lg-4 mx-auto\">
                        <div class=\"card-body px-5 py-5\">
                            <h3 class=\"card-title text-center mb-3\">Sign up</h3>

                            ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "nom", [], "any", false, false, false, 45), 'errors', ["attr" => ["class" => " alert alert-danger label"]]);
        echo "
                            <div class=\"input-group input-group-merge input-group-alternative mb-3\">

                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"mdi mdi-account\"></i></span>
                                </div>
                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "nom", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control p_input", "placeholder" => "first name"]]);
        echo "
                            </div>
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "prenom", [], "any", false, false, false, 53), 'errors', ["attr" => ["class" => "label"]]);
        echo "
                            <div class=\"input-group input-group-merge input-group-alternative mb-3\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"mdi mdi-account\"></i></span>
                                </div>
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "prenom", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control p_input", "placeholder" => "last name"]]);
        echo "
                            </div>
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "email", [], "any", false, false, false, 60), 'errors', ["attr" => ["class" => "label"]]);
        echo "
                            <div class=\"input-group input-group-merge input-group-alternative mb-3\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"mdi mdi-email\"></i></span>
                                </div>
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => "email"]]);
        echo "
                            </div>
                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "plainPassword", [], "any", false, false, false, 67), 'errors', ["attr" => ["class" => "label"]]);
        echo "
                            <div class=\"input-group input-group-merge input-group-alternative mb-3\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"mdi mdi-lock\"></i></span>
                                </div>
                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "plainPassword", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password", "novalidate" => "novalidate"]]);
        echo "
                            </div>
                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 74, $this->source); })()), "numtel", [], "any", false, false, false, 74), 'errors', ["attr" => ["class" => "label"]]);
        echo "
                            <div class=\"input-group input-group-merge input-group-alternative mb-3\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"mdi mdi-cellphone\"></i></span>
                                </div>
                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 79, $this->source); })()), "numtel", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Phone Number"]]);
        echo "
                            </div>
                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "username", [], "any", false, false, false, 81), 'errors', ["attr" => ["class" => "label"]]);
        echo "
                            <div class=\"input-group input-group-merge input-group-alternative mb-3\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"mdi mdi-account\"></i></span>
                                </div>
                                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), "username", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Username"]]);
        echo "
                            </div>
                             ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 88, $this->source); })()), "dateNaissance", [], "any", false, false, false, 88), 'errors', ["attr" => ["class" => " alert alert-danger label"]]);
        echo "
                            <div class=\"input-group input-group-merge input-group-alternative mb-3\">

                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"mdi mdi-account\"></i></span>
                                </div>
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 94, $this->source); })()), "dateNaissance", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control p_input", "placeholder" => "date de naissance"]]);
        echo "
                            </div>
                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 96, $this->source); })()), "adresse", [], "any", false, false, false, 96), 'errors', ["attr" => ["class" => " alert alert-danger label"]]);
        echo "
                            <div class=\"input-group input-group-merge input-group-alternative mb-3\">

                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text date\"><i class=\"mdi mdi-account\"></i></span>
                                </div>
                                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 102, $this->source); })()), "adresse", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control p_input", "placeholder" => "adresse"]]);
        echo "
                            </div>
                            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 104, $this->source); })()), "agreeTerms", [], "any", false, false, false, 104), 'errors', ["attr" => ["class" => "label"]]);
        echo "
                            <div class=\"form-group d-flex align-items-center justify-content-between\">
                                <div class=\"form-check\">
                                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 107, $this->source); })()), "agreeTerms", [], "any", false, false, false, 107), 'label', ["label_attr" => ["class" => "form-check-label"], "label" => "Agree to the terms and services"]);
        echo "
                                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 108, $this->source); })()), "agreeTerms", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                                </div>
                            </div>

                            <div class=\"text-center\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block enter-btn\">Sign up</button>
                            </div>
                            ";
        // line 115
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 115, $this->source); })()), 'form_end');
        echo "
                            <div class=\"form-group d-flex align-items-center justify-content-between\">
                                <a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"forgot-pass\"><small>Login</small></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/misc.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/settings.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/todolist.js"), "html", null, true);
        echo "\"></script>
    <!-- endinject -->
    </body>
    </html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 139,  269 => 138,  265 => 137,  261 => 136,  257 => 135,  249 => 130,  233 => 117,  228 => 115,  218 => 108,  214 => 107,  208 => 104,  203 => 102,  194 => 96,  189 => 94,  180 => 88,  175 => 86,  167 => 81,  162 => 79,  154 => 74,  149 => 72,  141 => 67,  136 => 65,  128 => 60,  123 => 58,  115 => 53,  110 => 51,  101 => 45,  97 => 44,  67 => 17,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>Bienvenue chez Nextec</title>
        <!-- plugins:css -->
        <link rel=\"stylesheet\" href=\"{{ asset('back/assets/vendors/mdi/css/materialdesignicons.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('back/assets/vendors/css/vendor.bundle.base.css') }}\">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel=\"stylesheet\" href=\"{{ asset('back/assets/css/style.css') }}\">
        <!-- End layout styles -->
        

        <style>
            #registration_form_agreeTerms{
                margin-top: -16px;
            }

            ul{
                background-color: #ff2828;
                border-radius: 9px;
            }
            .card{
                border: 2px solid white;
            }
        </style>
    </head>
    <body>
    <div class=\"container-scroller\">
        <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
            <div class=\"row w-100 m-0\">
                <div class=\"content-wrapper full-page-wrapper d-flex align-items-center auth login-bg\">
                    <div class=\"card col-lg-4 mx-auto\">
                        <div class=\"card-body px-5 py-5\">
                            <h3 class=\"card-title text-center mb-3\">Sign up</h3>

                            {{ form_start(registrationForm , {'attr' : {'novalidate' : 'novalidate'}}) }}
                            {{ form_errors(registrationForm.nom , {'attr' : {'class' : ' alert alert-danger label'}}) }}
                            <div class=\"input-group input-group-merge input-group-alternative mb-3\">

                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"mdi mdi-account\"></i></span>
                                </div>
                                {{ form_widget(registrationForm.nom  , {'attr' : {'class' : 'form-control p_input' , 'placeholder' : 'first name'}}) }}
                            </div>
                            {{ form_errors(registrationForm.prenom  , {'attr' : {'class' : 'label' }}) }}
                            <div class=\"input-group input-group-merge input-group-alternative mb-3\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"mdi mdi-account\"></i></span>
                                </div>
                                {{ form_widget(registrationForm.prenom  , {'attr' : {'class' : 'form-control p_input' , 'placeholder' : 'last name'}}) }}
                            </div>
                            {{ form_errors(registrationForm.email  , {'attr' : {'class' : 'label' }}) }}
                            <div class=\"input-group input-group-merge input-group-alternative mb-3\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"mdi mdi-email\"></i></span>
                                </div>
                                {{ form_widget(registrationForm.email  , {'attr' : {'class' : 'form-control ' , 'placeholder' : 'email'}}) }}
                            </div>
                            {{ form_errors(registrationForm.plainPassword  , {'attr' : {'class' : 'label' }}) }}
                            <div class=\"input-group input-group-merge input-group-alternative mb-3\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"mdi mdi-lock\"></i></span>
                                </div>
                                {{ form_widget(registrationForm.plainPassword  , {'attr' : {'class' : 'form-control' , 'placeholder' : 'Password','novalidate' : 'novalidate'}}) }}
                            </div>
                            {{ form_errors(registrationForm.numtel  , {'attr' : {'class' : 'label'}}) }}
                            <div class=\"input-group input-group-merge input-group-alternative mb-3\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"mdi mdi-cellphone\"></i></span>
                                </div>
                                {{ form_widget(registrationForm.numtel  , {'attr' : {'class' : 'form-control' , 'placeholder' : 'Phone Number'}}) }}
                            </div>
                            {{ form_errors(registrationForm.username  , {'attr' : {'class' : 'label' }}) }}
                            <div class=\"input-group input-group-merge input-group-alternative mb-3\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"mdi mdi-account\"></i></span>
                                </div>
                                {{ form_widget(registrationForm.username  , {'attr' : {'class' : 'form-control' , 'placeholder' : 'Username'}}) }}
                            </div>
                             {{ form_errors(registrationForm.dateNaissance , {'attr' : {'class' : ' alert alert-danger label'}}) }}
                            <div class=\"input-group input-group-merge input-group-alternative mb-3\">

                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"mdi mdi-account\"></i></span>
                                </div>
                                {{ form_widget(registrationForm.dateNaissance  , {'attr' : {'class' : 'form-control p_input' , 'placeholder' : 'date de naissance'}}) }}
                            </div>
                            {{ form_errors(registrationForm.adresse , {'attr' : {'class' : ' alert alert-danger label'}}) }}
                            <div class=\"input-group input-group-merge input-group-alternative mb-3\">

                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text date\"><i class=\"mdi mdi-account\"></i></span>
                                </div>
                                {{ form_widget(registrationForm.adresse  , {'attr' : {'class' : 'form-control p_input' , 'placeholder' : 'adresse'}}) }}
                            </div>
                            {{ form_errors(registrationForm.agreeTerms  , {'attr' : {'class' : 'label'}}) }}
                            <div class=\"form-group d-flex align-items-center justify-content-between\">
                                <div class=\"form-check\">
                                    {{ form_label(registrationForm.agreeTerms, 'Agree to the terms and services' , {'label_attr' : {'class' : 'form-check-label'}}) }}
                                    {{ form_widget(registrationForm.agreeTerms  , {'attr' : {'class' : 'form-check-input'}} ) }}
                                </div>
                            </div>

                            <div class=\"text-center\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block enter-btn\">Sign up</button>
                            </div>
                            {{ form_end(registrationForm) }}
                            <div class=\"form-group d-flex align-items-center justify-content-between\">
                                <a href=\"{{ path('app_login') }}\" class=\"forgot-pass\"><small>Login</small></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src=\"{{ asset('back/assets/vendors/js/vendor.bundle.base.js') }}\"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=\"{{ asset('back/assets/js/off-canvas.js') }}\"></script>
    <script src=\"{{ asset('back/assets/js/hoverable-collapse.js') }}\"></script>
    <script src=\"{{ asset('back/assets/js/misc.js') }}\"></script>
    <script src=\"{{ asset('back/assets/js/settings.js') }}\"></script>
    <script src=\"{{ asset('back/assets/js/todolist.js') }}\"></script>
    <!-- endinject -->
    </body>
    </html>

", "registration/register.html.twig", "/home/wajih/pidev/symfonyy/ethleteinteg/templates/registration/register.html.twig");
    }
}

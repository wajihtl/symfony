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

/* security/forgotten_password.html.twig */
class __TwigTemplate_d36653796258472f6dfbf09dd7433bed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forgotten_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forgotten_password.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
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
                        <h3 class=\"card-title text-center mb-3\">Reset Password</h3>


                        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 36, $this->source); })()), 'form_start');
        echo "
                        <div class=\"form-group\">
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control p_input", "placeholder" => "Email"]]);
        echo "
                        </div>
                        <div class=\"text-center\"> ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 40, $this->source); })()), "submit", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => " btn btn-lg btn-primary my-4", "placeholder" => "Send Email"]]);
        echo "
                        </div>

                        <p class=\"sign-up\">Don't have an Account?<a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"> Sign Up</a></p>
                        <p class=\"sign-up\">Or Log in !<a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"> Login</a></p>

                        ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 46, $this->source); })()), 'form_end');
        echo "

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
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/misc.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/settings.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/todolist.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/forgotten_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 71,  153 => 70,  149 => 69,  145 => 68,  141 => 67,  133 => 62,  114 => 46,  109 => 44,  105 => 43,  99 => 40,  94 => 38,  89 => 36,  67 => 17,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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
                        <h3 class=\"card-title text-center mb-3\">Reset Password</h3>


                        {{ form_start(emailForm) }}
                        <div class=\"form-group\">
                            {{ form_widget(emailForm.email  , {'attr' : {'class' : 'form-control p_input' , 'placeholder' : 'Email'}}) }}
                        </div>
                        <div class=\"text-center\"> {{ form_widget(emailForm.submit , {'attr' : {'class' : ' btn btn-lg btn-primary my-4' , 'placeholder' : 'Send Email'}}) }}
                        </div>

                        <p class=\"sign-up\">Don't have an Account?<a href=\"{{ path('app_register') }}\"> Sign Up</a></p>
                        <p class=\"sign-up\">Or Log in !<a href=\"{{ path('app_login') }}\"> Login</a></p>

                        {{ form_end(emailForm) }}

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
</html>", "security/forgotten_password.html.twig", "/home/wajih/pidev/symfonyy/ethleteinteg/templates/security/forgotten_password.html.twig");
    }
}

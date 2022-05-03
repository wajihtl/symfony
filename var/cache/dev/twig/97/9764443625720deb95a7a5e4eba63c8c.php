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
class __TwigTemplate_6b22c75b2b9a2ccefc0053010d765e25 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 11
        echo "  
   <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>Bienvenue chez Nextec</title>
        <!-- plugins:css -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel=\"stylesheet\" href=\"";
        // line 28
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
                            <h3 class=\"card-title text-left mb-3\">Login</h3>

                            ";
        // line 46
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })())) {
            // line 47
            echo "                                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 47, $this->source); })()), "messageKey", [], "any", false, false, false, 47), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 47, $this->source); })()), "messageData", [], "any", false, false, false, 47), "security"), "html", null, true);
            echo "</div>
                            ";
        }
        // line 49
        echo "
                            <form method=\"post\">
                                <div class=\"form-group\">
                                    <label>Username  *</label>
                                    <input placeholder=\"Username\" type=\"text\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\" class=\"form-control p_input\" autocomplete=\"username\" required autofocus>
                                </div>
                                <div class=\"form-group\">
                                    <label>Password *</label>
                                    <input placeholder=\"Password\" type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control p_input\" autocomplete=\"current-password\" required>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"form-group d-flex align-items-center justify-content-between\">
                                    <div class=\"form-check\">
                                            <label>
                                                <label class=\"form-check-label\">
                                                <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\"> Remember me
                                            </label>
                                    </div>
                                    <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgotten_password");
        echo "\" class=\"forgot-pass\"><small>Forgot password?</small></a>
                                </div>
                                <div class=\"text-center\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-block enter-btn\">Login</button>
                                </div>
                                <div class=\"text-center\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-block enter-btn\"><a class=\"btn btn-primary btn-block enter-btn\"  href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_google");
        echo "\">Login with google</a></button>
                                </div>
                                 
                                <p class=\"sign-up\">Don't have an Account?<a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"> Sign Up</a></p>
                            </form>
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
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/misc.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/settings.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 98,  174 => 97,  170 => 96,  166 => 95,  162 => 94,  154 => 89,  138 => 76,  132 => 73,  123 => 67,  111 => 58,  103 => 53,  97 => 49,  91 => 47,  89 => 46,  68 => 28,  58 => 21,  54 => 20,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    #}
  
   <!DOCTYPE html>
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
                            <h3 class=\"card-title text-left mb-3\">Login</h3>

                            {% if error %}
                                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                            {% endif %}

                            <form method=\"post\">
                                <div class=\"form-group\">
                                    <label>Username  *</label>
                                    <input placeholder=\"Username\" type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\" class=\"form-control p_input\" autocomplete=\"username\" required autofocus>
                                </div>
                                <div class=\"form-group\">
                                    <label>Password *</label>
                                    <input placeholder=\"Password\" type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control p_input\" autocomplete=\"current-password\" required>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                </div>
                                <div class=\"form-group d-flex align-items-center justify-content-between\">
                                    <div class=\"form-check\">
                                            <label>
                                                <label class=\"form-check-label\">
                                                <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\"> Remember me
                                            </label>
                                    </div>
                                    <a href=\"{{ path('app_forgotten_password') }}\" class=\"forgot-pass\"><small>Forgot password?</small></a>
                                </div>
                                <div class=\"text-center\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-block enter-btn\">Login</button>
                                </div>
                                <div class=\"text-center\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-block enter-btn\"><a class=\"btn btn-primary btn-block enter-btn\"  href=\"{{ path('connect_google') }}\">Login with google</a></button>
                                </div>
                                 
                                <p class=\"sign-up\">Don't have an Account?<a href=\"{{ path('app_register') }}\"> Sign Up</a></p>
                            </form>
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
    </html>", "security/login.html.twig", "/home/wajih/pidev/symfonyy/ethleteinteg/templates/security/login.html.twig");
    }
}

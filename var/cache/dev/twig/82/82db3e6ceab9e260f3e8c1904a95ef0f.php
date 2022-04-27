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

/* security/reset_email.html.twig */
class __TwigTemplate_212bdba9b910dea8d0deae8ffd01dca9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_email.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">

    <style>
        .left-content a:hover {
            font-size: 15px;
        }
    </style>

</head>
<body>
<div class=\"best-features\">
    <div class=\"container\" style=\"max-width: 984px;width: 100%; margin-right: auto;background-color: #0b0c2a;margin-left: auto; height: 600px; border-radius: 0px 0px 10px 10px;\">
        <div class=\"row\">
            <div class=\"col-md-12\" style=\" width: 100%;margin: auto;\">
               
            </div>
            <div class=\"col-md-12\" style=\"\">
                <div class=\"middle-content\" style=\"text-align:center;\">
                    <h4 style=\"font-size: 22px;font-family: monospace;font-style: normal;color: #ffffff;width: 43%;background-color: #b3000d;margin: auto;border-radius: 10px;border-right: 2px solid white;border-left: 2px solid white;\" >Hello ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["fullname"]) || array_key_exists("fullname", $context) ? $context["fullname"] : (function () { throw new RuntimeError('Variable "fullname" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"left-content\" style=\"text-align:center;\">
                    <p style =\"font-weight: BOLD;color: #fcfcfc;margin: auto;font-size: 18px;padding-top: 16px;margin-bottom: 23px;font-family: ui-monospace;height: 101px;background-color: #0b0c2a;border-bottom: 2px dotted red;border-top: 2px dotted red;margin-top: 20px;\"> To Reset your NEXTEC Account. <br> please proceed onto clicking the button below to complete resetting your Password .</p>

                    <button id=\"btn\" style=\"height: 42px;background-color: #b3000d;border-radius: 5px;border: 1px solid #b3000d;width: 15%;margin-top: -11px;\">
                        <a style=\"color:white; display:contents;\"class=\"filled-button\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\">Reset</a>
                    </button>
                </div>
            </div>
        </div>
        <footer>
            <div class=\"container\" style=\"margin: auto;margin-top: 24px;\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"inner-content\" style=\"padding-top: 16px;padding-bottom: 16px;color: white;\">
                            <p style=\"padding-top: 16px;padding-bottom: 16px;background: #b3000d;color: white;width: 38%;margin: auto;text-align: center;border-radius: 10px;border-right: 2px solid white;border-left: 2px solid white;\">Copyright &copy; 2022 Nextec.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>


</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/reset_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 32,  70 => 26,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">

    <style>
        .left-content a:hover {
            font-size: 15px;
        }
    </style>

</head>
<body>
<div class=\"best-features\">
    <div class=\"container\" style=\"max-width: 984px;width: 100%; margin-right: auto;background-color: #0b0c2a;margin-left: auto; height: 600px; border-radius: 0px 0px 10px 10px;\">
        <div class=\"row\">
            <div class=\"col-md-12\" style=\" width: 100%;margin: auto;\">
               
            </div>
            <div class=\"col-md-12\" style=\"\">
                <div class=\"middle-content\" style=\"text-align:center;\">
                    <h4 style=\"font-size: 22px;font-family: monospace;font-style: normal;color: #ffffff;width: 43%;background-color: #b3000d;margin: auto;border-radius: 10px;border-right: 2px solid white;border-left: 2px solid white;\" >Hello {{ fullname }}</h4>
                </div>
                <div class=\"left-content\" style=\"text-align:center;\">
                    <p style =\"font-weight: BOLD;color: #fcfcfc;margin: auto;font-size: 18px;padding-top: 16px;margin-bottom: 23px;font-family: ui-monospace;height: 101px;background-color: #0b0c2a;border-bottom: 2px dotted red;border-top: 2px dotted red;margin-top: 20px;\"> To Reset your NEXTEC Account. <br> please proceed onto clicking the button below to complete resetting your Password .</p>

                    <button id=\"btn\" style=\"height: 42px;background-color: #b3000d;border-radius: 5px;border: 1px solid #b3000d;width: 15%;margin-top: -11px;\">
                        <a style=\"color:white; display:contents;\"class=\"filled-button\" href=\"{{ url }}\">Reset</a>
                    </button>
                </div>
            </div>
        </div>
        <footer>
            <div class=\"container\" style=\"margin: auto;margin-top: 24px;\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"inner-content\" style=\"padding-top: 16px;padding-bottom: 16px;color: white;\">
                            <p style=\"padding-top: 16px;padding-bottom: 16px;background: #b3000d;color: white;width: 38%;margin: auto;text-align: center;border-radius: 10px;border-right: 2px solid white;border-left: 2px solid white;\">Copyright &copy; 2022 Nextec.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>


</body>
</html>", "security/reset_email.html.twig", "/home/wajih/pidev/symfonyy/ethleteinteg/templates/security/reset_email.html.twig");
    }
}

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

/* front.html.twig */
class __TwigTemplate_ae0ce66899a9988564259ecc064c6227 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<html class=\"no-js\" lang=\"en\">

<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t\t<title>fly invictus</title>
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<!-- favicon -->\t\t
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/logo/favicon.ico"), "html", null, true);
        echo "\">

\t\t<!-- all css here -->

\t\t<!-- bootstrap v3.3.6 css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t<!-- owl.carousel css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/owl.carousel.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"css/owl.transitions.css\">
       <!-- Animate css -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/animate.css"), "html", null, true);
        echo "\">
        <!-- meanmenu css -->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/meanmenu.min.css"), "html", null, true);
        echo "\">
\t\t<!-- font-awesome css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/themify-icons.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/flaticon.css"), "html", null, true);
        echo "\">
\t\t<!-- magnific css -->
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/magnific.min.css"), "html", null, true);
        echo "\">
\t\t<!-- style css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/style.css"), "html", null, true);
        echo "\">
\t\t<!-- responsive css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/responsive.css"), "html", null, true);
        echo "\">

\t\t<!-- modernizr css -->
\t\t<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/vendor/modernizr-2.8.3.min.js"), "html", null, true);
        echo "\"></script>
\t</head>
\t\t<body>

\t\t<!--[if lt IE 8]>
\t\t\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
\t\t<![endif]-->

        <div id=\"preloader\"></div>
        <header class=\"header-one\">
            <!-- Start top bar -->
            <div class=\"topbar-area fix hidden-xs\">
                <div class=\"container\">
                    <div class=\"row\">
                       <div class=\"col-md-6 col-sm-6\">
                           <div class=\"topbar-left\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-envelope\"></i> info@aievari4.com</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-phone\"></i> +909-654-9805</a></li>
                                </ul>
\t\t\t\t\t\t\t</div>
                        </div>
                        <div class=\" col-md-6 col-sm-6\">
                            <div class=\"topbar-right\">
                                <div class=\"top-social\">
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-google\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End top bar -->
            <!-- header-area start -->
            <div id=\"sticker\" class=\"header-area hidden-xs\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12 col-sm-12\">
                            <div class=\"row\">
                                <!-- logo start -->
                                <div class=\"col-md-3 col-sm-3\">
                                    <div class=\"logo\">
                                        <!-- Brand -->
                                        <a class=\"navbar-brand page-scroll white-logo\" href=\"index-2.html\">
                                            <img src=\"img/logo/logo3.png\" alt=\"\">
                                        </a>
                                        <a class=\"navbar-brand page-scroll black-logo\" href=\"index-2.html\">
                                            <img src=\"img/logo/logo.png\" alt=\"\">
                                        </a>
                                    </div>
                                    <!-- logo end -->
                                </div>
                                <div class=\"col-md-9 col-sm-9\">
                                   
                                    <!-- mainmenu start -->
                                    <nav class=\"navbar navbar-default\">
                                        <div class=\"collapse navbar-collapse\" id=\"navbar-example\">
                                            <div class=\"main-menu\">
                                                <ul class=\"nav navbar-nav navbar-right\">
                                                    <li><a class=\"pages\" href=\"index-2.html\">Home</a>
                                                        <ul class=\"sub-menu\">
                                                            <li><a href=\"index-2.html\">Home 01</a></li>
                                                            <li><a href=\"index-3.html\">Home 02</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href=\"about.html\">About us</a></li>
                                                    <li><a href=\"investment.html\">Investment</a></li>
                                                    <li><a class=\"pages\" href=\"#\">Pages</a>
                                                        <ul class=\"sub-menu\">
                                                            <li><a href=\"team.html\">team</a></li>
                                                            <li><a href=\"faq.html\">FAQ</a></li>
                                                            <li><a href=\"review.html\">Reviews</a></li>
                                                            <li><a href=\"login.html\">Login</a></li>
                                                            <li><a href=\"signup.html\">Register</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class=\"pages\" href=\"#\">Blog</a>
                                                        <ul class=\"sub-menu\">
                                                            <li><a href=\"blog.html\">Blog grid</a></li>
                                                            <li><a href=\"blog-sidebar.html\">Blog Sidebar</a></li>
                                                            <li><a href=\"blog-details.html\">Blog Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href=\"contact.html\">contacts</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                    <!-- mainmenu end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class=\"mobile-menu-area hidden-lg hidden-md hidden-sm\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"mobile-menu\">
                                <div class=\"logo\">
                                    <a href=\"index-2.html\"><img src=\"img/logo/logo.png\" alt=\"\" /></a>
                                </div>
                                <nav id=\"dropdown\">
                                    <ul>
                                        <li><a class=\"pages\" href=\"index-2.html\">Home</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"index-2.html\">Home 01</a></li>
                                                <li><a href=\"index-3.html\">Home 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"about.html\">About us</a></li>
                                        <li><a href=\"investment.html\">Investment</a></li>
                                        <li><a class=\"pages\" href=\"#\">Pages</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"team.html\">team</a></li>
                                                <li><a href=\"faq.html\">FAQ</a></li>
                                                <li><a href=\"review.html\">Reviews</a></li>
                                                <li><a href=\"login.html\">Login</a></li>
                                                <li><a href=\"signup.html\">Register</a></li>
                                            </ul>
                                        </li>
                                        <li><a class=\"pages\" href=\"#\">Blog</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"blog.html\">Blog grid</a></li>
                                                <li><a href=\"blog-sidebar.html\">Blog Sidebar</a></li>
                                                <li><a href=\"blog-details.html\">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"contact.html\">contacts</a></li>
                                    </ul>
                                </nav>
                            </div>\t\t\t\t\t
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->\t\t
        </header>
        <!-- header end -->
    
        <!-- End Invest area -->
        <!-- Start Support-service Area -->
           ";
        // line 187
        $this->displayBlock('body', $context, $blocks);
        // line 284
        echo "        
        <!-- End reviews Area -->
        <!-- Start FAQ area -->
        
        <!-- End FAQ area -->
        <!-- Start Footer Area -->
        <footer class=\"footer1\">
            <div class=\"footer-area\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                            <div class=\"footer-content logo-footer\">
                                <div class=\"footer-head\">
                                    <div class=\"footer-logo\">
                                    \t<a class=\"footer-black-logo\" href=\"#\"><img src=\"img/logo/logo.png\" alt=\"\"></a>
                                    </div>
                                    <p>
                                        Are you looking for professional advice for your new business. Are you looking for professional advice for your new business. Are you looking for professional advice for your new business.
                                    </p>
                                    <div class=\"subs-feilds\">
                                        <div class=\"suscribe-input\">
                                            <input type=\"email\" class=\"email form-control width-80\" id=\"sus_email\" placeholder=\"Type Email\">
                                            <button type=\"submit\" id=\"sus_submit\" class=\"add-btn\">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class=\"col-md-4 col-sm-3 col-xs-12\">
                            <div class=\"footer-content\">
                                <div class=\"footer-head\">
                                    <h4>Services Link</h4>
                                    <ul class=\"footer-list\">
                                        <li><a href=\"#\">About us</a></li>
                                        <li><a href=\"#\">Services </a></li>
                                        <li><a href=\"#\">Events</a></li>
                                        <li><a href=\"#\">Promotion</a></li>
                                        <li><a href=\"#\">Transition</a></li>
                                        <li><a href=\"#\">Social Media</a></li>
                                    </ul>
                                    <ul class=\"footer-list hidden-sm\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Customer Care</a></li>
                                        <li><a href=\"#\">Live chat</a></li>
                                        <li><a href=\"#\">Notification</a></li>
                                        <li><a href=\"#\">Privacy</a></li>
                                        <li><a href=\"#\">Terms & Condition</a></li>
                                        <li><a href=\"#\">Contact us </a></li>
\t\t\t\t\t\t\t\t\t</ul>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class=\"col-md-3 col-sm-4 col-xs-12\">
                            <div class=\"footer-content last-content\">
                                <div class=\"footer-head\">
                                    <h4>Information</h4> 
                                    <div class=\"footer-contacts\">
\t\t\t\t\t\t\t\t\t\t<p><span>Tel :</span> +0890-564-5644</p>
\t\t\t\t\t\t\t\t\t\t<p><span>Email :</span> info@aievari4.com</p>
\t\t\t\t\t\t\t\t\t\t<p><span>Location :</span> House- 65/4, London</p>
\t\t\t\t\t\t\t\t\t</div> 
                                    <div class=\"footer-icons\">
                                        <ul>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-facebook\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-twitter\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-google\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-pinterest\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-instagram\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"footer-area-bottom\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"copyright\">
                                <p>
                                    Copyright © 2020
                                    <a href=\"#\">Aievari</a> All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer area -->
\t\t
\t\t<!-- all js here -->

\t\t<!-- jquery latest version -->
\t\t<script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- bootstrap js -->
\t\t<script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- owl.carousel js -->
\t\t<script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t  <!-- stellar js -->
        <script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- magnific js -->
        <script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/magnific.min.js"), "html", null, true);
        echo "\"></script>
        <!-- wow js -->
        <script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontjs/wow.min.js"), "html", null, true);
        echo "\"></script>
        <!-- meanmenu js -->
        <script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.meanmenu.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- Form validator js -->
\t\t<script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/form-validator.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- plugins js -->
\t\t<script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/plugins.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- main js -->
\t\t<script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/main.js"), "html", null, true);
        echo "\"></script>
\t</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 187
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 188
        echo "        <div class=\"support-service-area fix area-padding-2\">
            <div class=\"container\">
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"section-headline text-center\">
                            <h3>Why choose investment plan</h3>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"row\">
                    <div class=\"support-all\">
                        <!-- Start About -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services wow \">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-023-management\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Expert management</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start About -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services \">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-036-security\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Secure investment</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services \">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-003-approve\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Registered company</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services\">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-042-wallet\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Instant withdrawal</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services \">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-032-report\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Verified security</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services\">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-024-megaphone\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Live customer support</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Support-service Area -->
        <!-- Start Self-area -->
      
        <div class=\"self-area area-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- column end -->
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"self-content\">
\t\t\t\t\t\t\t<h4>An investment multi-national firm is a invest money of one or more experts. Provides more profite, We help your satele to future life and then create the road. Grow Money speedly without any risk. </h4>
                            <span class=\"talk-text\">Alex ferneld, CEO</span>
                        </div>
                    </div>
                    <!-- column end -->
                </div>
            </div>
        </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 188,  448 => 187,  434 => 419,  429 => 417,  424 => 415,  419 => 413,  414 => 411,  409 => 409,  404 => 407,  399 => 405,  394 => 403,  389 => 401,  270 => 284,  268 => 187,  114 => 36,  108 => 33,  103 => 31,  98 => 29,  93 => 27,  89 => 26,  85 => 25,  80 => 23,  75 => 21,  69 => 18,  64 => 16,  56 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html class=\"no-js\" lang=\"en\">

<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t\t<title>fly invictus</title>
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<!-- favicon -->\t\t
\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('front/img/logo/favicon.ico')}}\">

\t\t<!-- all css here -->

\t\t<!-- bootstrap v3.3.6 css -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('front/css/bootstrap.min.css')}}\">
\t\t<!-- owl.carousel css -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('front/css/owl.carousel.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"css/owl.transitions.css\">
       <!-- Animate css -->
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/animate.css')}}\">
        <!-- meanmenu css -->
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/meanmenu.min.css')}}\">
\t\t<!-- font-awesome css -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('front/css/font-awesome.min.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('front/css/themify-icons.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('front/css/flaticon.css')}}\">
\t\t<!-- magnific css -->
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/magnific.min.css')}}\">
\t\t<!-- style css -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('front/style.css')}}\">
\t\t<!-- responsive css -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('front/css/responsive.css')}}\">

\t\t<!-- modernizr css -->
\t\t<script src=\"{{ asset('front/js/vendor/modernizr-2.8.3.min.js')}}\"></script>
\t</head>
\t\t<body>

\t\t<!--[if lt IE 8]>
\t\t\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
\t\t<![endif]-->

        <div id=\"preloader\"></div>
        <header class=\"header-one\">
            <!-- Start top bar -->
            <div class=\"topbar-area fix hidden-xs\">
                <div class=\"container\">
                    <div class=\"row\">
                       <div class=\"col-md-6 col-sm-6\">
                           <div class=\"topbar-left\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-envelope\"></i> info@aievari4.com</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-phone\"></i> +909-654-9805</a></li>
                                </ul>
\t\t\t\t\t\t\t</div>
                        </div>
                        <div class=\" col-md-6 col-sm-6\">
                            <div class=\"topbar-right\">
                                <div class=\"top-social\">
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-google\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End top bar -->
            <!-- header-area start -->
            <div id=\"sticker\" class=\"header-area hidden-xs\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12 col-sm-12\">
                            <div class=\"row\">
                                <!-- logo start -->
                                <div class=\"col-md-3 col-sm-3\">
                                    <div class=\"logo\">
                                        <!-- Brand -->
                                        <a class=\"navbar-brand page-scroll white-logo\" href=\"index-2.html\">
                                            <img src=\"img/logo/logo3.png\" alt=\"\">
                                        </a>
                                        <a class=\"navbar-brand page-scroll black-logo\" href=\"index-2.html\">
                                            <img src=\"img/logo/logo.png\" alt=\"\">
                                        </a>
                                    </div>
                                    <!-- logo end -->
                                </div>
                                <div class=\"col-md-9 col-sm-9\">
                                   
                                    <!-- mainmenu start -->
                                    <nav class=\"navbar navbar-default\">
                                        <div class=\"collapse navbar-collapse\" id=\"navbar-example\">
                                            <div class=\"main-menu\">
                                                <ul class=\"nav navbar-nav navbar-right\">
                                                    <li><a class=\"pages\" href=\"index-2.html\">Home</a>
                                                        <ul class=\"sub-menu\">
                                                            <li><a href=\"index-2.html\">Home 01</a></li>
                                                            <li><a href=\"index-3.html\">Home 02</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href=\"about.html\">About us</a></li>
                                                    <li><a href=\"investment.html\">Investment</a></li>
                                                    <li><a class=\"pages\" href=\"#\">Pages</a>
                                                        <ul class=\"sub-menu\">
                                                            <li><a href=\"team.html\">team</a></li>
                                                            <li><a href=\"faq.html\">FAQ</a></li>
                                                            <li><a href=\"review.html\">Reviews</a></li>
                                                            <li><a href=\"login.html\">Login</a></li>
                                                            <li><a href=\"signup.html\">Register</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class=\"pages\" href=\"#\">Blog</a>
                                                        <ul class=\"sub-menu\">
                                                            <li><a href=\"blog.html\">Blog grid</a></li>
                                                            <li><a href=\"blog-sidebar.html\">Blog Sidebar</a></li>
                                                            <li><a href=\"blog-details.html\">Blog Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href=\"contact.html\">contacts</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                    <!-- mainmenu end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class=\"mobile-menu-area hidden-lg hidden-md hidden-sm\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"mobile-menu\">
                                <div class=\"logo\">
                                    <a href=\"index-2.html\"><img src=\"img/logo/logo.png\" alt=\"\" /></a>
                                </div>
                                <nav id=\"dropdown\">
                                    <ul>
                                        <li><a class=\"pages\" href=\"index-2.html\">Home</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"index-2.html\">Home 01</a></li>
                                                <li><a href=\"index-3.html\">Home 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"about.html\">About us</a></li>
                                        <li><a href=\"investment.html\">Investment</a></li>
                                        <li><a class=\"pages\" href=\"#\">Pages</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"team.html\">team</a></li>
                                                <li><a href=\"faq.html\">FAQ</a></li>
                                                <li><a href=\"review.html\">Reviews</a></li>
                                                <li><a href=\"login.html\">Login</a></li>
                                                <li><a href=\"signup.html\">Register</a></li>
                                            </ul>
                                        </li>
                                        <li><a class=\"pages\" href=\"#\">Blog</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"blog.html\">Blog grid</a></li>
                                                <li><a href=\"blog-sidebar.html\">Blog Sidebar</a></li>
                                                <li><a href=\"blog-details.html\">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"contact.html\">contacts</a></li>
                                    </ul>
                                </nav>
                            </div>\t\t\t\t\t
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->\t\t
        </header>
        <!-- header end -->
    
        <!-- End Invest area -->
        <!-- Start Support-service Area -->
           {% block body %}
        <div class=\"support-service-area fix area-padding-2\">
            <div class=\"container\">
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"section-headline text-center\">
                            <h3>Why choose investment plan</h3>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"row\">
                    <div class=\"support-all\">
                        <!-- Start About -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services wow \">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-023-management\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Expert management</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start About -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services \">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-036-security\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Secure investment</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services \">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-003-approve\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Registered company</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services\">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-042-wallet\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Instant withdrawal</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services \">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-032-report\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Verified security</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"support-services\">
                                <a class=\"support-images\" href=\"#\"><i class=\"flaticon-024-megaphone\"></i></a>
                                <div class=\"support-content\">
                                    <h4>Live customer support</h4>
                                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Support-service Area -->
        <!-- Start Self-area -->
      
        <div class=\"self-area area-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- column end -->
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"self-content\">
\t\t\t\t\t\t\t<h4>An investment multi-national firm is a invest money of one or more experts. Provides more profite, We help your satele to future life and then create the road. Grow Money speedly without any risk. </h4>
                            <span class=\"talk-text\">Alex ferneld, CEO</span>
                        </div>
                    </div>
                    <!-- column end -->
                </div>
            </div>
        </div>
        {% endblock %}
        
        <!-- End reviews Area -->
        <!-- Start FAQ area -->
        
        <!-- End FAQ area -->
        <!-- Start Footer Area -->
        <footer class=\"footer1\">
            <div class=\"footer-area\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12\">
                            <div class=\"footer-content logo-footer\">
                                <div class=\"footer-head\">
                                    <div class=\"footer-logo\">
                                    \t<a class=\"footer-black-logo\" href=\"#\"><img src=\"img/logo/logo.png\" alt=\"\"></a>
                                    </div>
                                    <p>
                                        Are you looking for professional advice for your new business. Are you looking for professional advice for your new business. Are you looking for professional advice for your new business.
                                    </p>
                                    <div class=\"subs-feilds\">
                                        <div class=\"suscribe-input\">
                                            <input type=\"email\" class=\"email form-control width-80\" id=\"sus_email\" placeholder=\"Type Email\">
                                            <button type=\"submit\" id=\"sus_submit\" class=\"add-btn\">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class=\"col-md-4 col-sm-3 col-xs-12\">
                            <div class=\"footer-content\">
                                <div class=\"footer-head\">
                                    <h4>Services Link</h4>
                                    <ul class=\"footer-list\">
                                        <li><a href=\"#\">About us</a></li>
                                        <li><a href=\"#\">Services </a></li>
                                        <li><a href=\"#\">Events</a></li>
                                        <li><a href=\"#\">Promotion</a></li>
                                        <li><a href=\"#\">Transition</a></li>
                                        <li><a href=\"#\">Social Media</a></li>
                                    </ul>
                                    <ul class=\"footer-list hidden-sm\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Customer Care</a></li>
                                        <li><a href=\"#\">Live chat</a></li>
                                        <li><a href=\"#\">Notification</a></li>
                                        <li><a href=\"#\">Privacy</a></li>
                                        <li><a href=\"#\">Terms & Condition</a></li>
                                        <li><a href=\"#\">Contact us </a></li>
\t\t\t\t\t\t\t\t\t</ul>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class=\"col-md-3 col-sm-4 col-xs-12\">
                            <div class=\"footer-content last-content\">
                                <div class=\"footer-head\">
                                    <h4>Information</h4> 
                                    <div class=\"footer-contacts\">
\t\t\t\t\t\t\t\t\t\t<p><span>Tel :</span> +0890-564-5644</p>
\t\t\t\t\t\t\t\t\t\t<p><span>Email :</span> info@aievari4.com</p>
\t\t\t\t\t\t\t\t\t\t<p><span>Location :</span> House- 65/4, London</p>
\t\t\t\t\t\t\t\t\t</div> 
                                    <div class=\"footer-icons\">
                                        <ul>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-facebook\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-twitter\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-google\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-pinterest\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-instagram\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"footer-area-bottom\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"copyright\">
                                <p>
                                    Copyright © 2020
                                    <a href=\"#\">Aievari</a> All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer area -->
\t\t
\t\t<!-- all js here -->

\t\t<!-- jquery latest version -->
\t\t<script src=\"{{ asset('front/js/vendor/jquery-1.12.4.min.js')}}\"></script>
\t\t<!-- bootstrap js -->
\t\t<script src=\"{{ asset('front/js/bootstrap.min.js')}}\"></script>
\t\t<!-- owl.carousel js -->
\t\t<script src=\"{{ asset('front/js/owl.carousel.min.js')}}\"></script>
\t\t  <!-- stellar js -->
        <script src=\"{{ asset('front/js/jquery.stellar.min.js')}}\"></script>
\t\t<!-- magnific js -->
        <script src=\"{{ asset('front/js/magnific.min.js')}}\"></script>
        <!-- wow js -->
        <script src=\"{{ asset('frontjs/wow.min.js')}}\"></script>
        <!-- meanmenu js -->
        <script src=\"{{ asset('front/js/jquery.meanmenu.js')}}\"></script>
\t\t<!-- Form validator js -->
\t\t<script src=\"{{ asset('front/js/form-validator.min.js')}}\"></script>
\t\t<!-- plugins js -->
\t\t<script src=\"{{ asset('front/js/plugins.js')}}\"></script>
\t\t<!-- main js -->
\t\t<script src=\"{{ asset('front/js/main.js')}}\"></script>
\t</body>

</html>", "front.html.twig", "/home/wajih/pidev/symfonyy/ethleteinteg/templates/front.html.twig");
    }
}

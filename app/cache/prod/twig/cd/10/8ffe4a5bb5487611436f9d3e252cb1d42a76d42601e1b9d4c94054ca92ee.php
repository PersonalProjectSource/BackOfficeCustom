<?php

/* AppAdminBundle:Layout:admin_layout.html.twig */
class __TwigTemplate_cd108ffe4a5bb5487611436f9d3e252cb1d42a76d42601e1b9d4c94054ca92ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"shortcut icon\" href=\"img/favicon.png\">

    <title>BO Custom</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src=\"js/html5shiv.js\"></script>
      <script src=\"js/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
  <section id=\"container\" class=\"\">
      <!--header start-->
      <header class=\"header white-bg\">
              <div class=\"sidebar-toggle-box\">
                  <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
              </div>
            <!--logo start-->
            <a href=\"/\" class=\"logo\">Back<span>Office</span></a>
            <!--logo end-->

            <div class=\"top-nav \">
                <!--search & user info start-->
                <ul class=\"nav pull-right top-menu\">
                    <li>
                        <input type=\"text\" class=\"form-control search\" placeholder=\"Search\">
                    </li>
                    <!-- user login dropdown start-->
                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <img alt=\"\" src=\"\">
                            <span class=\"username\">";
        // line 53
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"), "html", null, true);
        }
        echo "</span>
                            <b class=\"caret\"></b>
                        </a>
                        <ul class=\"dropdown-menu extended logout\">
                            <div class=\"log-arrow-up\"></div>
                            <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-key\"></i> Se déconneter</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      ";
        // line 66
        $this->env->loadTemplate("AppAdminBundle:Menu:main_menu.html.twig")->display($context);
        // line 67
        echo "      <section id=\"main-content\">
          <section class=\"wrapper site-min-height\">
            
            ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "          </section>
      </section>

      <footer class=\"site-footer\">
          <div class=\"text-center\">
              2014 &copy; Back office custom
              <a href=\"#\" class=\"go-top\">
                  <i class=\"fa fa-angle-up\"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 137
        echo "<!-- END JAVASCRIPTS -->
  </body>
</html>
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " 
    <!-- Bootstrap core CSS -->
      <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/css/bootstrap-reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/css/assets/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/css/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/css/assets/jquery-multi-select/css/multi-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
      <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/css/assets/advanced-datatable/media/css/demo_table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/css/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/jcrop/css/jquery.Jcrop.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      
   ";
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        // line 71
        echo "            ";
    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
    <!-- js placed at the end of the document so the pages load faster -->

    <!-- --- JQUERY --- -->
    
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" ></script>

    <!-- --- JQUERY PLUGINS --- -->

    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/jquery.nicescroll.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/jquery.sparkline.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/assets/jquery-multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>

    <!-- --- BOOTSTRAP --- -->

    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/bootstrap-switch.js"), "html", null, true);
        echo "\" ></script>

    <!-- --- WYSIYYG HTML5 --- -->

    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"), "html", null, true);
        echo "\"></script>

    <!-- --- DATATABLE --- -->

    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/assets/data-tables/jquery.dataTables.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/assets/data-tables/DT_bootstrap.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/assets/advanced-datatable/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/assets/advanced-datatable/examples/examples_support/jquery.tooltip.js"), "html", null, true);
        echo "\" ></script>

    <!-- --- OTHER --- -->

    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/owl.carousel.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/sparkline-chart.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/easy-pie-chart.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/count.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/common-scripts.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/assets/fuelux/js/spinner.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/jcrop/js/jquery.Jcrop.min.js"), "html", null, true);
        echo "\"></script>
    
    <script class=\"include\" type=\"text/javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\" ></script>

    <script>
     var Script = function () { \$('#spinner4').spinner({value:0, step: 1, min: 0, max: 200000});}();
    </script>
    

";
    }

    public function getTemplateName()
    {
        return "AppAdminBundle:Layout:admin_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 129,  288 => 127,  283 => 125,  279 => 124,  275 => 123,  271 => 122,  267 => 121,  263 => 120,  256 => 116,  252 => 115,  248 => 114,  244 => 113,  237 => 109,  233 => 108,  226 => 104,  222 => 103,  215 => 99,  211 => 98,  207 => 97,  203 => 96,  199 => 95,  195 => 94,  188 => 90,  179 => 85,  175 => 71,  172 => 70,  165 => 22,  161 => 21,  157 => 20,  153 => 19,  149 => 18,  145 => 17,  137 => 15,  133 => 14,  129 => 13,  125 => 12,  119 => 10,  112 => 137,  110 => 85,  95 => 72,  93 => 70,  88 => 67,  86 => 66,  75 => 58,  65 => 53,  35 => 25,  33 => 10,  22 => 1,  141 => 16,  138 => 75,  109 => 48,  96 => 43,  91 => 42,  84 => 37,  80 => 36,  74 => 35,  71 => 34,  67 => 33,  43 => 12,  32 => 3,  29 => 2,);
    }
}

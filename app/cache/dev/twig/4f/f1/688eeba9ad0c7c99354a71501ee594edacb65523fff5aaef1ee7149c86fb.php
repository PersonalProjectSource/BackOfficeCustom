<?php

/* AppAdminBundle:Layout:layout.html.twig */
class __TwigTemplate_4ff1688eeba9ad0c7c99354a71501ee594edacb65523fff5aaef1ee7149c86fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    <title>Hermès Quizz</title>


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

     <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
     <!--[if lt IE 9]>
       <script src=\"js/html5shiv.js\"></script>
       <script src=\"js/respond.min.js\"></script>
     <![endif]-->
</head>
<body>
";
        // line 27
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "    </body>
</html>
";
    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 28
        echo "  <section id=\"container\" class=\"\">
      <!--header start-->
      <header class=\"header white-bg\">
              <div class=\"sidebar-toggle-box\">
                  <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
              </div>
            <!--logo start-->
            <a class=\"logo\">Groupe<span>Viséo</span></a>
            <!--logo end-->
            <div class=\"nav notify-row\" id=\"top_menu\">
                <!--  notification start -->
              
                <!--  notification end -->
            </div>
            <div class=\"top-nav \">
                <!--search & user info start-->
                <!--search & user info end-->
            </div>
        </header>
      ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "  </section>
";
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        // line 48
        echo "      ";
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        // line 52
        echo "
    <!-- --- JQUERY --- -->

    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" ></script>

    <!-- --- JQUERY PLUGINS --- -->

    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/jquery.nicescroll.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/jquery.sparkline.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/assets/jquery-multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>

    <!-- --- BOOTSTRAP --- -->

    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/bootstrap-switch.js"), "html", null, true);
        echo "\" ></script>


";
    }

    public function getTemplateName()
    {
        return "AppAdminBundle:Layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 69,  161 => 68,  154 => 64,  150 => 63,  146 => 62,  142 => 61,  138 => 60,  134 => 59,  127 => 55,  122 => 52,  119 => 51,  115 => 48,  112 => 47,  107 => 49,  105 => 47,  84 => 28,  81 => 27,  73 => 51,  71 => 27,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  22 => 1,  75 => 73,  64 => 22,  61 => 21,  56 => 18,  50 => 14,  48 => 13,  41 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}

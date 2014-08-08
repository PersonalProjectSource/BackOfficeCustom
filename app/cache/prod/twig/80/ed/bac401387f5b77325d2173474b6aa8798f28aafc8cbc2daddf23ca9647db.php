<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_80edbac401387f5b77325d2173474b6aa8798f28aafc8cbc2daddf23ca9647db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AppAdminBundle:Layout:layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppAdminBundle:Layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "
   <body class=\"login-body\">

       <div class=\"container\">
         <form class=\"form-signin\" method=\"post\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
           <h2 class=\"form-signin-heading\">Espace administrateur</h2>
           <div class=\"login-wrap\">

               ";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 14
            echo "               <div class=\"alert alert-block alert-danger fade in\">
                   <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                       <i class=\"fa fa-times\"></i>
                   </button>
                       ";
            // line 18
            echo " Identifiant incorrect !
               </div>
               ";
        }
        // line 21
        echo "
               <input type=\"text\" class=\"form-control\"  value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" name=\"_username\" placeholder=\"Identifiant\" autofocus>

               <input type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Mot de passe\">
               <div>
                  <label for=\"remember_me\">Se souvenir de moi</label>
                  <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
               </div>
               <br>
              ";
        // line 35
        echo "               <br>
               <button class=\"btn btn-lg btn-login btn-block\" id=\"_submit\" type=\"submit\" name=\"_submit\">Se connecter</button>
           </div>
         </form>
       </div>
      </body>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 35,  64 => 22,  61 => 21,  56 => 18,  50 => 14,  48 => 13,  41 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}

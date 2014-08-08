<?php

/* AppAdminBundle:Menu:main_menu.html.twig */
class __TwigTemplate_f6847d2f79728f4f2e0b278839dfe78692139feeec78987b185e2233e1c89953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\" id=\"nav-accordion\">
                  ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 6
            echo "                  <li class=\"sub-menu\">
                      <a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("user_list");
            echo "\" >
                          <i class=\"fa fa-users\"></i>
                          <span>Gérer les administrateurs</span>
                      </a>
                  </li>
                  ";
        }
        // line 13
        echo "                  <li class=\"sub-menu\">
                      <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("langue");
        echo "\" >
                          <i class=\"fa fa-globe\"></i>
                          <span>Liste des langues</span>
                      </a>
                  </li>
                  <li class=\"sub-menu\">
                      <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("media");
        echo "\" >
                          <i class=\"fa fa-globe\"></i>
                          <span>Liste des médias</span>
                      </a>
                  </li>
                  <li class=\"sub-menu\">
                      <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("field");
        echo "\" >
                          <i class=\"fa fa-globe\"></i>
                          <span>Liste des champs</span>
                      </a>
                  </li>
                  <li>
                      <a  href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                          <i class=\"fa fa-power-off\"></i>
                          <span>Se déconnecter</span>
                      </a>
                  </li>
              </ul>
          </div>
      </aside>
      ";
    }

    public function getTemplateName()
    {
        return "AppAdminBundle:Menu:main_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 32,  60 => 26,  51 => 20,  42 => 14,  39 => 13,  30 => 7,  27 => 6,  25 => 5,  19 => 1,  293 => 129,  288 => 127,  283 => 125,  279 => 124,  275 => 123,  271 => 122,  267 => 121,  263 => 120,  256 => 116,  252 => 115,  248 => 114,  244 => 113,  237 => 109,  233 => 108,  226 => 104,  222 => 103,  215 => 99,  211 => 98,  207 => 97,  203 => 96,  199 => 95,  195 => 94,  188 => 90,  179 => 85,  175 => 71,  172 => 70,  165 => 22,  161 => 21,  157 => 20,  153 => 19,  149 => 18,  145 => 17,  141 => 16,  137 => 15,  133 => 14,  129 => 13,  125 => 12,  119 => 10,  112 => 137,  110 => 85,  95 => 72,  93 => 70,  88 => 67,  86 => 66,  75 => 58,  65 => 53,  35 => 25,  33 => 10,  22 => 1,  92 => 72,  58 => 41,  53 => 40,  46 => 36,  40 => 33,  36 => 32,  32 => 30,  29 => 4,);
    }
}

<?php

/* FOSUserBundle:Media:show.html.twig */
class __TwigTemplate_18209af8aad85c8aa46532bcf59ea97a2137901d6284080d8e1085dd0c71c2b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AppAdminBundle:Layout:admin_layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppAdminBundle:Layout:admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<section class=\"panel\">
   <div class=\"panel-body\">
       <a href=\"#\" class=\"task-thumb\">
           <img src=\"\" alt=\"\">
       </a>
       <div class=\"task-thumb-details\">
           <h1><a href=\"#\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "libelle"), "html", null, true);
        echo "</a></h1>
           <p>Ici seront affichés l'image cropée</p>
       </div>
       <div class=\"align-right\">

          <div class=\"btn btn-xs btn-danger margin-top\">
               <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("media");
        echo "\" class=\"white-color align-btn\">
                   Back to the list
               </a>
           </div>
           <br>
           <div class=\"btn btn-xs btn-danger margin-top\">
               <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" class=\"white-color align-btn\">
                   Edit
               </a>
           </div>
           <br>
          <div class=\"btn btn-xs btn-danger margin-top\">";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</div>
       </div>
   </div>
       
   <table class=\"table table-hover personal-task\">
       <tbody>
         <tr>
             <td>
                 <i class=\" fa fa-tasks\"></i>
             </td>
             <td>Identifiant</td>
             <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
        echo "</td>
         </tr>
         <tr>
             <td>
                 <i class=\"fa fa-exclamation-triangle\"></i>
             </td>
             <td>type</td>
             <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "type"), "html", null, true);
        echo "</td>
         </tr>
         <tr>
             <td>
                 <i class=\"fa fa-envelope\"></i>
             </td>
             <td>Libellé</td>
             <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "libelle"), "html", null, true);
        echo "</td>
         </tr>
         <tr>
             <td>
                 <i class=\" fa fa-bell-o\"></i>
             </td>
             <td>Date de création</td>
             <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateCreation"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
         </tr>
         <tr>
             <td>
                 <i class=\" fa fa-bell-o\"></i>
             </td>
             <td>Date de modification</td>
             <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateModification"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
         </tr>
         <tr>
             <td>
                 <i class=\" fa fa-bell-o\"></i>
             </td>
             <td>Path</td>
             <td>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "path"), "html", null, true);
        echo "</td></td>
         </tr>
       </tbody>
   </table>
</section>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Media:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 73,  119 => 66,  109 => 59,  99 => 52,  89 => 45,  79 => 38,  65 => 27,  57 => 22,  48 => 16,  39 => 10,  31 => 4,  28 => 3,);
    }
}

<?php

/* FOSUserBundle:Media:index.html.twig */
class __TwigTemplate_68d5d1cee6b56edcc2e09c8930edf666fac6661f6c37dce780e1a8c2931ba783 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AppAdminBundle:Layout:admin_layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "   <section class=\"site-min-height\">
       <!-- page start-->
       <section class=\"panel\">
           <header class=\"panel-heading\">
               Liste des Médias
           </header>
           <div class=\"panel-body\">
               <div class=\"adv-table editable-table\">
                   <div class=\"clearfix\">
                     <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("media_new");
        echo "\">
                      <div class=\"btn-group\">
                          <button  class=\"btn green\">
                              Ajouter un nouvel utilisateur <i class=\"fa fa-plus\"></i>
                          </button>
                      </div>
                     </a>

                    <div class=\"btn-group pull-right\">
                        <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Exporter <i class=\"fa fa-angle-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu pull-right\">
                            <li><a href=\"#\">CSV</a></li>
                        </ul>
                    </div>
                   </div>
                   <br>

                   <div class=\"space15\"></div>
                   <table class=\"table table-striped table-hover table-bordered\" id=\"editable-sample\">
                       <thead>
                       <tr>
                          <th>Id</th>
                          <th>Type média</th>
                          <th>Libellé</th>
                          <th>Date création</th>
                          <th>Date modification</th>
                          <th>Chemin</th>
                          <th>Apercu</th>
                          <th>Actions</th>
                       </tr>
                       </thead>
                       <tbody>
                        ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 46
            echo "                          <tr>
                              <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "</a></td>
                              <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "type"), "html", null, true);
            echo "</td>
                              <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "libelle"), "html", null, true);
            echo "</td>
                              <td>";
            // line 50
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateCreation")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateCreation"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                              <td>";
            // line 51
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateModification")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateModification"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                              <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "file"), "html", null, true);
            echo "</td>
                              <td><img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["sDirePath"]) ? $context["sDirePath"] : null) . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "path"))), "html", null, true);
            echo "\" width=\"50\" height=\"50\" /></td>
                              <td class=\"center\">
                                 <div class=\"hidden-phon\">
                                    <a class=\"btn btn-success btn-sm\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil\"></i></a>
                                    <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil\"></i></a>
                                   <a class=\"btn btn-danger btn-sm\" onclick=\"confirmbox('";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media", array("iId" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo ")\"><i class=\"fa fa-trash-o \"></i></a>
                                 </div>
                              </td>
                          </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                       </tbody>
                   </table>
               </div>
           </div>
       </section>
       <!-- page end-->
   </section>
                        
";
    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        // line 74
        echo "   <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" ></script>
   <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
   <script class=\"include\" type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\" ></script>
   <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\" ></script>
   <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/jquery.nicescroll.js"), "html", null, true);
        echo "\" ></script>
   <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/assets/data-tables/jquery.dataTables.js"), "html", null, true);
        echo "\" ></script>
   <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/assets/data-tables/DT_bootstrap.js"), "html", null, true);
        echo "\" ></script>
   <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/common-scripts.js"), "html", null, true);
        echo "\" ></script>
                                           
   <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/js/editable-table.js"), "html", null, true);
        echo "\" ></script>
   <script>
       jQuery(document).ready(function() {
           EditableTable.init();
       });
   </script>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Media:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 83,  185 => 81,  181 => 80,  177 => 79,  173 => 78,  169 => 77,  165 => 76,  161 => 75,  156 => 74,  153 => 73,  141 => 63,  130 => 58,  126 => 57,  122 => 56,  116 => 53,  112 => 52,  106 => 51,  100 => 50,  96 => 49,  92 => 48,  86 => 47,  83 => 46,  79 => 45,  43 => 12,  32 => 3,  29 => 2,);
    }
}

<?php

/* FOSUserBundle:Langue:index.html.twig */
class __TwigTemplate_26e59ce46da90c66a8a0e9452461067d927cac36092ce508b9aa341ba8940591 extends Twig_Template
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
        echo "    <section class=\"site-min-height\">
        <!-- page start-->
        <section class=\"panel\">
            <header class=\"panel-heading\">
                Liste des langues
            </header>
            <div class=\"panel-body\">
                <div class=\"adv-table editable-table\">
                    <div class=\"clearfix\">
                        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("langue_new");
        echo "\">
                            <div class=\"btn-group\">
                                <button  class=\"btn green\">
                                    Ajouter une nouvelle langue <i class=\"fa fa-plus\"></i>
                                </button>
                            </div>
                        </a>
                    </div>
                    <br>

                    <div class=\"space15\"></div>
                    <table class=\"display table table-striped table-hover table-bordered\" id=\"editable-sample\">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Libellé</th>
                            <th>Code</th>
                            <th style=\"width:90px;\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "                            <tr>
                                <td class=\"center\"><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show2", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "libelle"), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "code"), "html", null, true);
            echo "</td>

                                <td class=\"center\">
                                    <div class=\"hidden-phon\">
                                        ";
            // line 42
            echo "                                        <a class=\"btn btn-primary btn-sm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("langue_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil\"></i></a>
                                        <a class=\"btn btn-danger btn-sm\" onclick=\"confirmbox('";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("langue_delete_custom", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "libelle"), "html", null, true);
            echo "')\"><i class=\"fa fa-trash-o \"></i></a>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- page end-->
    </section>

    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"background: #FF6C60;\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">Suppression</h4>
                </div>
                <div class=\"modal-body\">

                </div>
                <div class=\"modal-footer\">
                    <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Annuler</button>
                    <button class=\"btn btn-danger\" type=\"button\"> Supprimer</button>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        // line 76
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        function confirmbox(location, langue){
            \$(\"#myModal\").modal();
            content = \"Voulez-vous supprimer cette langue ? (\"+ langue +\")\";
            \$(\"#myModal .modal-body\").html(content);
            \$(\"#myModal .modal-footer .btn-danger\").on('click', function(){
                document.location.href= location;
            });
        }

        var oTable = \$('#editable-sample').dataTable({
            \"aLengthMenu\": [
                [6, 15, 20, 50, 100, -1],
                [6, 15, 20, 50, 100, \"Tous\"] // change per page values here
            ],
            'bAutoWidth': false,
            // set the initial value
            \"iDisplayLength\": 6,
            \"sDom\": \"<'row'<'col-lg-6'l><'col-lg-6'f>r>t<'row'<'col-lg-6'i><'col-lg-6'p>>\",
            \"sPaginationType\": \"bootstrap\",
            \"oLanguage\": {
                \"sProcessing\":     \"Traitement en cours...\",
                \"sSearch\":         \"Rechercher&nbsp;:\",
                \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
                \"sInfo\":           \"Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                \"sInfoEmpty\":      \"Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
                \"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                \"sInfoPostFix\":    \"\",
                \"sLoadingRecords\": \"Chargement en cours...\",
                \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                \"sEmptyTable\":     \"Aucune donnée disponible dans le tableau\",
                \"oPaginate\": {
                    \"sFirst\":      \"Premier\",
                    \"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
                    \"sNext\":       \"Suivant\",
                    \"sLast\":       \"Dernier\"
                },
                \"oAria\": {
                    \"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
                    \"sSortDescending\": \": activer pour trier la colonne par ordre décroissant\"
                }
            },
            \"aoColumnDefs\": [
                { \"bSortable\": false,\"sWidth\": \"90px\", \"aTargets\" : [ 3 ] }
            ]
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Langue:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 76,  138 => 75,  109 => 48,  96 => 43,  91 => 42,  84 => 37,  80 => 36,  74 => 35,  71 => 34,  67 => 33,  43 => 12,  32 => 3,  29 => 2,);
    }
}

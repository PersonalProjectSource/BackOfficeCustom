<?php

/* FOSUserBundle:Media:edit.html.twig */
class __TwigTemplate_9cd01e88eb9dc7ff6f7e13705c64943fa3bd389b4f5e8f97c83fd62c4e4e1a40 extends Twig_Template
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "
<div>
   <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents/novedia2.png"), "html", null, true);
        echo "\" id=\"target\" />
   <img  src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path"))), "html", null, true);
        echo "\" />
</div>

<a onclick=\"crop('";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "');\">Crop</a>

";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
   ";
        // line 41
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
   
   <script language=\"Javascript\">
       var x  = 0;
       var y  = 0;
       var x2 = 0;
       var y2 = 0;
       var w  = 0;
       var h  = 0;
       var slug = \"crop1\";
       
      jQuery(function(\$) {
          \$('#target').Jcrop({
              onChange: changeCoords
          });
      });

     function changeCoords(c)
     {
        console.log(c);
        x = c.x;
        y = c.y;
        x2 = c.x2;
        y2 = c.y2;
        w = c.w;
        h = c.h;
     };
     function crop(\$id)
     {
         \$.post(\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("media_crop");
        echo "\", { x : x, y : y, x2 : x2, y2 : y2, w : w, h : h, id : \$id, slug : slug })
                 .done(function(data){    
            alert(data.path);
         });
     }
   </script>
  ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Media:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 70,  58 => 41,  53 => 40,  46 => 36,  40 => 33,  36 => 32,  32 => 30,  29 => 4,);
    }
}

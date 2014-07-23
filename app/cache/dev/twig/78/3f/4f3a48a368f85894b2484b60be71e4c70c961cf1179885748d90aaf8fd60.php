<?php

/* BloggerBlogBundle:Security:dumpString.html.twig */
class __TwigTemplate_783f4f3a48a368f85894b2484b60be71e4c70c961cf1179885748d90aaf8fd60 extends Twig_Template
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
        echo "<div>
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>
</div>
<!-- the text string for printout -->

\"This is a secure area\"
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Security:dumpString.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}

<?php

/* BloggerBlogBundle:Adicionar:adicionar.html.twig */
class __TwigTemplate_6a31c4e376ca94f75535eca183778283a34bc68336a504bb8d4bfc2e2cdebbc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BloggerBlogBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1> Adicionar Noticía </h1>

<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_adicionar");
        echo "\" method=\"post\" class=\"blogger\">
    <li.form>
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </li.form>
    <input type=\"submit\">
</form>


";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Adicionar:adicionar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  35 => 6,  31 => 4,  28 => 3,);
    }
}

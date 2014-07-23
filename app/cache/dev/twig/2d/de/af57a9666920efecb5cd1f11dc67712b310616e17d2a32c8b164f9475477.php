<?php

/* ::base.html.twig */
class __TwigTemplate_2ddeaf57a9666920efecb5cd1f11dc67712b310616e17d2a32c8b164f9475477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 20
        $this->displayBlock('navigation', $context, $blocks);
        // line 36
        echo "                </div>
                <hgroup>
                    <h2>";
        // line 38
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 39
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 47
        $this->displayBlock('sidebar', $context, $blocks);
        // line 48
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 54
        echo "            </div>
        </section>

        ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        // line 21
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_conta");
        echo "\">Registar</a></li>
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_login");
        echo "\">Entrar</a></li>
                                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_adicionar");
        echo "\">Adicionar</a></li>
                                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_nacional");
        echo "\">Nacional</a></li>
                                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_internacional");
        echo "\">Internacional</a></li>
                                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_economia");
        echo "\">Economia</a></li>
                                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_desporto");
        echo "\">Desporto</a></li>
                                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about");
        echo "\">Sobre</a></li>
                                <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\">Contactos</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 38
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">Symfony Blog</a>";
    }

    // line 39
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">Um blog para todos</a>";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
    }

    // line 47
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        // line 52
        echo "                    Criado por Daniel e Rui
                ";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 57,  198 => 52,  195 => 51,  190 => 47,  185 => 44,  177 => 39,  169 => 38,  161 => 32,  157 => 31,  153 => 30,  149 => 29,  145 => 28,  141 => 27,  137 => 26,  133 => 25,  129 => 24,  125 => 23,  121 => 21,  118 => 20,  112 => 12,  108 => 10,  105 => 9,  99 => 5,  93 => 58,  91 => 57,  86 => 54,  84 => 51,  79 => 48,  77 => 47,  73 => 45,  71 => 44,  63 => 39,  59 => 38,  55 => 36,  53 => 20,  43 => 14,  41 => 9,  34 => 5,  28 => 1,);
    }
}

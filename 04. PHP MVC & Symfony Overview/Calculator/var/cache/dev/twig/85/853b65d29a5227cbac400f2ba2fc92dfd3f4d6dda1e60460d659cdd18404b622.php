<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_05d29383a76bdb8890e566acc54c957d94351005a887bbcb4c1556c5375a4704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34bd07dc381cc05aeaaef558d47c067cf767b9af0534a1fc9050150960c4cec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34bd07dc381cc05aeaaef558d47c067cf767b9af0534a1fc9050150960c4cec3->enter($__internal_34bd07dc381cc05aeaaef558d47c067cf767b9af0534a1fc9050150960c4cec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34bd07dc381cc05aeaaef558d47c067cf767b9af0534a1fc9050150960c4cec3->leave($__internal_34bd07dc381cc05aeaaef558d47c067cf767b9af0534a1fc9050150960c4cec3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b2003182d7baa3990afe88f5e53aa527d7104789c1ebe9a317b546c22129747a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2003182d7baa3990afe88f5e53aa527d7104789c1ebe9a317b546c22129747a->enter($__internal_b2003182d7baa3990afe88f5e53aa527d7104789c1ebe9a317b546c22129747a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b2003182d7baa3990afe88f5e53aa527d7104789c1ebe9a317b546c22129747a->leave($__internal_b2003182d7baa3990afe88f5e53aa527d7104789c1ebe9a317b546c22129747a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8dcc3765a8acaed9f22b281aaf54b0b6534178a39e865bd4f56ed40ef570671f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dcc3765a8acaed9f22b281aaf54b0b6534178a39e865bd4f56ed40ef570671f->enter($__internal_8dcc3765a8acaed9f22b281aaf54b0b6534178a39e865bd4f56ed40ef570671f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8dcc3765a8acaed9f22b281aaf54b0b6534178a39e865bd4f56ed40ef570671f->leave($__internal_8dcc3765a8acaed9f22b281aaf54b0b6534178a39e865bd4f56ed40ef570671f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a55c5af99a13419d4b65d037c8f809ab5793b5b986dfe6033788e9b3be8710b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55c5af99a13419d4b65d037c8f809ab5793b5b986dfe6033788e9b3be8710b5->enter($__internal_a55c5af99a13419d4b65d037c8f809ab5793b5b986dfe6033788e9b3be8710b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a55c5af99a13419d4b65d037c8f809ab5793b5b986dfe6033788e9b3be8710b5->leave($__internal_a55c5af99a13419d4b65d037c8f809ab5793b5b986dfe6033788e9b3be8710b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}

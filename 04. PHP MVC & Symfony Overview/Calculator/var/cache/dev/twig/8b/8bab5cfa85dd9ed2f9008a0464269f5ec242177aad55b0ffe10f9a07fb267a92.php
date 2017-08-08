<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6935b04339c0b3db316b70131e3e852ca7445557f48e096e14cd41603aec05b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c284b3b288cabe39a2e4cc1e996b39ca53b6f91eb37f7cdcfb3202c67799d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c284b3b288cabe39a2e4cc1e996b39ca53b6f91eb37f7cdcfb3202c67799d30->enter($__internal_0c284b3b288cabe39a2e4cc1e996b39ca53b6f91eb37f7cdcfb3202c67799d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c284b3b288cabe39a2e4cc1e996b39ca53b6f91eb37f7cdcfb3202c67799d30->leave($__internal_0c284b3b288cabe39a2e4cc1e996b39ca53b6f91eb37f7cdcfb3202c67799d30_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1b850d13e9271d36e2e120f527416073670f0d170eaad19c8d913ea45100674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b850d13e9271d36e2e120f527416073670f0d170eaad19c8d913ea45100674->enter($__internal_b1b850d13e9271d36e2e120f527416073670f0d170eaad19c8d913ea45100674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b1b850d13e9271d36e2e120f527416073670f0d170eaad19c8d913ea45100674->leave($__internal_b1b850d13e9271d36e2e120f527416073670f0d170eaad19c8d913ea45100674_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_398aec88ab7f2f7587676cd2558f054d1ca7b51d42d853196930f86c5ae34aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398aec88ab7f2f7587676cd2558f054d1ca7b51d42d853196930f86c5ae34aff->enter($__internal_398aec88ab7f2f7587676cd2558f054d1ca7b51d42d853196930f86c5ae34aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_398aec88ab7f2f7587676cd2558f054d1ca7b51d42d853196930f86c5ae34aff->leave($__internal_398aec88ab7f2f7587676cd2558f054d1ca7b51d42d853196930f86c5ae34aff_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_42d9382f778610eb13f331b940e9042f20096bcb76d6c0aa94c2754808f0050f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d9382f778610eb13f331b940e9042f20096bcb76d6c0aa94c2754808f0050f->enter($__internal_42d9382f778610eb13f331b940e9042f20096bcb76d6c0aa94c2754808f0050f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_42d9382f778610eb13f331b940e9042f20096bcb76d6c0aa94c2754808f0050f->leave($__internal_42d9382f778610eb13f331b940e9042f20096bcb76d6c0aa94c2754808f0050f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}

<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_36faca582c5296125c691a98fc396f9ddda4f61d5fb43d3f1a9e85016a4b2b18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a8667dd98526ae5b861f4e88226e2d887d426773068e766593166dc955bede90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8667dd98526ae5b861f4e88226e2d887d426773068e766593166dc955bede90->enter($__internal_a8667dd98526ae5b861f4e88226e2d887d426773068e766593166dc955bede90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8667dd98526ae5b861f4e88226e2d887d426773068e766593166dc955bede90->leave($__internal_a8667dd98526ae5b861f4e88226e2d887d426773068e766593166dc955bede90_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8edb7f14d44dcc76e4e44a09459651a26424f5c05af6e48b05d26280e3bf756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8edb7f14d44dcc76e4e44a09459651a26424f5c05af6e48b05d26280e3bf756->enter($__internal_a8edb7f14d44dcc76e4e44a09459651a26424f5c05af6e48b05d26280e3bf756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a8edb7f14d44dcc76e4e44a09459651a26424f5c05af6e48b05d26280e3bf756->leave($__internal_a8edb7f14d44dcc76e4e44a09459651a26424f5c05af6e48b05d26280e3bf756_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d10e72ca49d50d8b5b96eeadf383fd7688d286022f20608e39d6dc692fbdf91d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10e72ca49d50d8b5b96eeadf383fd7688d286022f20608e39d6dc692fbdf91d->enter($__internal_d10e72ca49d50d8b5b96eeadf383fd7688d286022f20608e39d6dc692fbdf91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d10e72ca49d50d8b5b96eeadf383fd7688d286022f20608e39d6dc692fbdf91d->leave($__internal_d10e72ca49d50d8b5b96eeadf383fd7688d286022f20608e39d6dc692fbdf91d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_82aff47ffc23f36b51919ee940fef28776cb495764e6de17ba8214f334150898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82aff47ffc23f36b51919ee940fef28776cb495764e6de17ba8214f334150898->enter($__internal_82aff47ffc23f36b51919ee940fef28776cb495764e6de17ba8214f334150898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_82aff47ffc23f36b51919ee940fef28776cb495764e6de17ba8214f334150898->leave($__internal_82aff47ffc23f36b51919ee940fef28776cb495764e6de17ba8214f334150898_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}

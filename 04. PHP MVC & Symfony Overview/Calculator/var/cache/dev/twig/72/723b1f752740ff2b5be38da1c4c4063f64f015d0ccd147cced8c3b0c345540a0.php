<?php

/* form/fields.html.twig */
class __TwigTemplate_d8f046f97bfd4db6993ef28f4923fcb8d8def1bbd4d1d5466f8b3fca8ba4bfa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a8fc15a153e9bcefe5d21bef9ab8fc67f42866c9da9fc5ed74559981deebe92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8fc15a153e9bcefe5d21bef9ab8fc67f42866c9da9fc5ed74559981deebe92->enter($__internal_5a8fc15a153e9bcefe5d21bef9ab8fc67f42866c9da9fc5ed74559981deebe92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_5a8fc15a153e9bcefe5d21bef9ab8fc67f42866c9da9fc5ed74559981deebe92->leave($__internal_5a8fc15a153e9bcefe5d21bef9ab8fc67f42866c9da9fc5ed74559981deebe92_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_1c8a6111733f1f85ba9f95473f7a79503c3eb25cfa6bf9980d378f71face855c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8a6111733f1f85ba9f95473f7a79503c3eb25cfa6bf9980d378f71face855c->enter($__internal_1c8a6111733f1f85ba9f95473f7a79503c3eb25cfa6bf9980d378f71face855c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1c8a6111733f1f85ba9f95473f7a79503c3eb25cfa6bf9980d378f71face855c->leave($__internal_1c8a6111733f1f85ba9f95473f7a79503c3eb25cfa6bf9980d378f71face855c_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* task/index.html.twig */
class __TwigTemplate_1d3ebc07205e467d3507dea1d584326a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Task Table";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
<div class=\"min-h-screen bg-neutral-primary-soft p-6\">
    <section class=\"mx-auto max-w-7xl\">
        <div class=\"mb-8\">
            <h1 class=\"text-5xl leading-tight font-semibold text-heading\">Task</h1>
            <p class=\"mt-2 text-sm text-gray-500\">A clean overview of your current tasks.</p>
        </div>

        <div class=\"overflow-x-auto rounded-base border border-default bg-neutral-primary shadow-xs\">
            <table class=\"w-full table-auto text-left text-sm text-body\">
                <thead class=\"border-b border-default bg-neutral-secondary-soft\">
                    <tr>
                        <th scope=\"col\" class=\"px-6 py-3 text-xs font-semibold uppercase text-gray-500\">
                            Title
                        </th>
                        <th scope=\"col\" class=\"px-6 py-3 text-xs font-semibold uppercase text-gray-500\">
                            Description
                        </th>
                        <th scope=\"col\" class=\"px-6 py-3 text-xs font-semibold uppercase text-gray-500\">
                            Status
                        </th>
                        <th scope=\"col\" class=\"px-6 py-3 text-xs font-semibold uppercase text-gray-500\">
                            Created At
                        </th>
                    </tr>
                </thead>
                <tbody class=\"bg-neutral-primary\">
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 34
            yield "                    <tr class=\"border-b border-default\">
                        <th scope=\"row\" class=\"whitespace-nowrap px-6 py-4 font-semibold text-gray-800\">
                            ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 36), "html", null, true);
            yield "
                        </th>
                        <td class=\"px-6 py-4 text-gray-600\">
                            ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["task"], "description", [], "any", false, false, false, 39), "html", null, true);
            yield "
                        </td>
                        <td class=\"px-6 py-4\">
                            <span class=\"inline-flex rounded-sm bg-neutral-secondary-soft px-3 py-1 text-xs font-medium uppercase text-gray-600\">
                                ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 43), "value", [], "any", false, false, false, 43), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td class=\"whitespace-nowrap px-6 py-4 text-gray-500\">
                            ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["task"], "createdAt", [], "any", false, false, false, 47), "Y-m-d H:i"), "html", null, true);
            yield "
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 50
        if (!$context['_iterated']) {
            // line 51
            yield "                    <tr>
                        <td colspan=\"4\" class=\"px-6 py-8 text-center text-sm text-gray-500\">
                            No tasks found.
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['task'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "                </tbody>
            </table>
        </div>
    </section>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "task/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  164 => 57,  153 => 51,  151 => 50,  143 => 47,  136 => 43,  129 => 39,  123 => 36,  119 => 34,  114 => 33,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Task Table{% endblock %}

{% block body %}

<div class=\"min-h-screen bg-neutral-primary-soft p-6\">
    <section class=\"mx-auto max-w-7xl\">
        <div class=\"mb-8\">
            <h1 class=\"text-5xl leading-tight font-semibold text-heading\">Task</h1>
            <p class=\"mt-2 text-sm text-gray-500\">A clean overview of your current tasks.</p>
        </div>

        <div class=\"overflow-x-auto rounded-base border border-default bg-neutral-primary shadow-xs\">
            <table class=\"w-full table-auto text-left text-sm text-body\">
                <thead class=\"border-b border-default bg-neutral-secondary-soft\">
                    <tr>
                        <th scope=\"col\" class=\"px-6 py-3 text-xs font-semibold uppercase text-gray-500\">
                            Title
                        </th>
                        <th scope=\"col\" class=\"px-6 py-3 text-xs font-semibold uppercase text-gray-500\">
                            Description
                        </th>
                        <th scope=\"col\" class=\"px-6 py-3 text-xs font-semibold uppercase text-gray-500\">
                            Status
                        </th>
                        <th scope=\"col\" class=\"px-6 py-3 text-xs font-semibold uppercase text-gray-500\">
                            Created At
                        </th>
                    </tr>
                </thead>
                <tbody class=\"bg-neutral-primary\">
                    {% for task in tasks %}
                    <tr class=\"border-b border-default\">
                        <th scope=\"row\" class=\"whitespace-nowrap px-6 py-4 font-semibold text-gray-800\">
                            {{ task.title }}
                        </th>
                        <td class=\"px-6 py-4 text-gray-600\">
                            {{ task.description }}
                        </td>
                        <td class=\"px-6 py-4\">
                            <span class=\"inline-flex rounded-sm bg-neutral-secondary-soft px-3 py-1 text-xs font-medium uppercase text-gray-600\">
                                {{ task.status.value }}
                            </span>
                        </td>
                        <td class=\"whitespace-nowrap px-6 py-4 text-gray-500\">
                            {{ task.createdAt|date('Y-m-d H:i') }}
                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"4\" class=\"px-6 py-8 text-center text-sm text-gray-500\">
                            No tasks found.
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </section>
</div>

{% endblock %}", "task/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/github/Symfony-CRUD-Task/templates/task/index.html.twig");
    }
}

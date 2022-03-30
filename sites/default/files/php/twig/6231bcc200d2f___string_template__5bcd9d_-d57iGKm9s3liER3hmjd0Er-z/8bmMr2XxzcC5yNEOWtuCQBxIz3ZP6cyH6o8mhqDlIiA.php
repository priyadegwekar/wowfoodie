<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__5bcd9d1cdc72454d1feca3a777aa1709ecb916a39ec228789d4d9872a92579c6 */
class __TwigTemplate_9cf6746d08944b1d2d27d8d6cb2fc86c3f8be64ecaf0eb538793cd5613279991 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"food-menu-box\">
                <div class=\"food-menu-img\">
              ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_food_image"] ?? null), 3, $this->source), "html", null, true);
        echo "
                </div>

                <div class=\"food-menu-desc\">
                    <h4>";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 7, $this->source), "html", null, true);
        echo "</h4>
                    <p class=\"food-price\">";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["price__number"] ?? null), 8, $this->source), "html", null, true);
        echo "</p>
                    <p class=\"food-detail\">
                       ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 10, $this->source), "html", null, true);
        echo "
                    </p>
                    <br>

                   ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_id"] ?? null), 14, $this->source), "html", null, true);
        echo "
                </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__5bcd9d1cdc72454d1feca3a777aa1709ecb916a39ec228789d4d9872a92579c6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  59 => 10,  54 => 8,  50 => 7,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"food-menu-box\">
                <div class=\"food-menu-img\">
              {{ field_food_image }}
                </div>

                <div class=\"food-menu-desc\">
                    <h4>{{ title }}</h4>
                    <p class=\"food-price\">{{ price__number }}</p>
                    <p class=\"food-detail\">
                       {{ body }}
                    </p>
                    <br>

                   {{ product_id }}
                </div>
            </div>", "__string_template__5bcd9d1cdc72454d1feca3a777aa1709ecb916a39ec228789d4d9872a92579c6", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

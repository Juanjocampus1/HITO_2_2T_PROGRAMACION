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

/* modules/contrib/views_kanban/templates/views-view-kanban.html.twig */
class __TwigTemplate_83297e732f8d893086550697e0e96647 extends Template
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
        // line 15
        $context["classes"] = ["views-view-kaban", "container-fluid", "mt-lg-3", twig_get_attribute($this->env, $this->source,         // line 19
($context["options"] ?? null), "classes", [], "any", false, false, true, 19)];
        // line 21
        echo "
<div ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        echo " data-view_id=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_id"] ?? null), 22, $this->source), "html", null, true);
        echo "\" data-display_id=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["display_id"] ?? null), 22, $this->source), "html", null, true);
        echo "\">
  <div class=\"row flex-row flex-sm-nowrap py-3\">
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["column"]) {
            // line 25
            echo "      ";
            $context["row_classes"] = ["card", "mb-3", ((            // line 28
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 30
            echo "      <div class=\"col-12 col-lg-3 h-100 kanban-col status-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed($context["index"], 30, $this->source), [" " => ""]), "html", null, true);
            echo "\" data-col-status=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed($context["index"], 30, $this->source), [" " => ""]), "html", null, true);
            echo "\">
        <div class=\"card mb-3 border position-relative  border-";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "color", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\">
          <span class=\"badge position-absolute top-0 left-0 translate-middle bg-";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "color", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo " border border-white total-status\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "rows", [], "any", false, false, true, 32), 32, $this->source)), "html", null, true);
            echo "</span>
          <div class=\"card-header bg-";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "color", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\">
            <h3 class=\"card-title h5 mb-1 text-white\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#collapse";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed($context["index"], 35, $this->source), [" " => ""]), "html", null, true);
            echo "\">
              ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_capitalize_string_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "header", [], "any", false, false, true, 36), 36, $this->source)), "html", null, true);
            echo "
            </h3>
            ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["column"], "total", [], "any", false, false, true, 38)) {
                // line 39
                echo "              <div class=\"total text-white\">
                ";
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "total", [], "any", false, false, true, 40), "label", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo " <span class=\"badge bg-secondary\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "total", [], "any", false, false, true, 40), "value", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "</span>
              </div>
            ";
            }
            // line 43
            echo "          </div>
          <div class=\"panel-body\" id=\"collaps";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed($context["index"], 44, $this->source), [" " => ""]), "html", null, true);
            echo "\" class=\"collapse show\">
            <div class=\"card-body\" droppable=\"true\" data-value=\"";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["index"], 45, $this->source), "html", null, true);
            echo "\">
              ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "rows", [], "any", false, false, true, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 47
                echo "                <article class=\"card mb-3 cursor-grab\" id=\"item";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "entity_id", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "\" data-id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "entity_id", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "\"
                  draggable=\"true\" data-value=\"";
                // line 48
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["index"], 48, $this->source), "html", null, true);
                echo "\" data-type=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "entity_type", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "\" data-point=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "total", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "\">
                  <div ";
                // line 49
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 49), "addClass", ["card-body"], "method", false, false, true, 49), 49, $this->source), "html", null, true);
                echo ">
                    <h5 class=\"card-title\">";
                // line 50
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "</h5>
                    <div class=\"card-text mb-0\">";
                // line 51
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                echo "</div>
                    ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["row"], "progress", [], "any", false, false, true, 52)) {
                    // line 53
                    echo "                      <div class=\"d-flex align-items-center justify-content-between mb-2\">
                        <h5 class=\"h6 mb-0\">";
                    // line 54
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "author", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                    echo "</h5>
                        <div class=\"fw-bold small\">
                          <span>";
                    // line 56
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "progress", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                    echo "%</span>
                        </div>
                      </div>
                      <div class=\"progress\" style=\"height: 5px;\">
                        <div class=\"progress-bar bg-";
                    // line 60
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "color", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                    echo "\" style=\"width: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "progress", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                    echo "%\"
                             role=\"progressbar\" aria-valuenow=\"";
                    // line 61
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "progress", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"
                             data-bs-toggle=\"tooltip\" title=\"";
                    // line 62
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "progress", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                    echo "%\"></div>
                      </div>
                    ";
                }
                // line 65
                echo "                    <div class=\"row mt-2\">
                      ";
                // line 66
                if (twig_get_attribute($this->env, $this->source, $context["row"], "view", [], "any", false, false, true, 66)) {
                    // line 67
                    echo "                        <div class=\"col\">
                          ";
                    // line 68
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "view", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                    echo "
                        </div>
                      ";
                }
                // line 71
                echo "                      ";
                if (twig_get_attribute($this->env, $this->source, $context["row"], "edit", [], "any", false, false, true, 71)) {
                    // line 72
                    echo "                        <div class=\"col\">
                          ";
                    // line 73
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "edit", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                    echo "
                        </div>
                      ";
                }
                // line 76
                echo "                      <div class=\"col\">
                        ";
                // line 77
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "date", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo "
                      </div>
                      ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "assign", [], "any", false, false, true, 79));
                foreach ($context['_seq'] as $context["_key"] => $context["assign"]) {
                    // line 80
                    echo "                        <div class=\"col\">
                          ";
                    // line 81
                    if (twig_get_attribute($this->env, $this->source, $context["assign"], "avatar", [], "any", false, false, true, 81)) {
                        // line 82
                        echo "                            <img src=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["assign"], "avatar", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["assign"], "name", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                        echo "\" class=\"img-avatar rounded-circle\"
                                 data-bs-toggle=\"tooltip\">
                          ";
                    } else {
                        // line 85
                        echo "                            <div class=\"text-avatar bg-secondary text-white img-circle text-center\"
                                 title=\"";
                        // line 86
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["assign"], "name", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                        echo "\" data-uid=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["assign"], "uid", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                        echo "\" data-bs-toggle=\"tooltip\">
                              ";
                        // line 87
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["assign"], "acronym", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                        echo "
                            </div>
                          ";
                    }
                    // line 90
                    echo "                        </div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assign'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                    </div>
                  </div>
                </article>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "            </div>
          </div>
          <div class=\"card-footer bg-light\">
            ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "add", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["options", "attributes", "view_id", "display_id", "columns", "default_row_class"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/views_kanban/templates/views-view-kanban.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  280 => 104,  269 => 99,  264 => 96,  255 => 92,  248 => 90,  242 => 87,  236 => 86,  233 => 85,  224 => 82,  222 => 81,  219 => 80,  215 => 79,  210 => 77,  207 => 76,  201 => 73,  198 => 72,  195 => 71,  189 => 68,  186 => 67,  184 => 66,  181 => 65,  175 => 62,  171 => 61,  165 => 60,  158 => 56,  153 => 54,  150 => 53,  148 => 52,  144 => 51,  140 => 50,  136 => 49,  128 => 48,  121 => 47,  117 => 46,  113 => 45,  109 => 44,  106 => 43,  98 => 40,  95 => 39,  93 => 38,  88 => 36,  84 => 35,  79 => 33,  73 => 32,  69 => 31,  62 => 30,  60 => 28,  58 => 25,  54 => 24,  45 => 22,  42 => 21,  40 => 19,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/views_kanban/templates/views-view-kanban.html.twig", "C:\\xampp\\htdocs\\drupal_10\\drupal_hito\\modules\\contrib\\views_kanban\\templates\\views-view-kanban.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 15, "for" => 24, "if" => 38);
        static $filters = array("escape" => 22, "replace" => 30, "length" => 32, "capitalize" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'replace', 'length', 'capitalize'],
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

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

/* themes/custom/inteshape/templates/page.html.twig */
class __TwigTemplate_191113332d77669239bd71908cc5be86 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'main_slider' => [$this, 'block_main_slider'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 72
        $context["sidebar_first_exists"] =  !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 72), 72, $this->source)), "<img><video><audio><drupal-render-placeholder>")));
        // line 73
        $context["sidebar_second_exists"] =  !twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 73), 73, $this->source)), "<img><video><audio><drupal-render-placeholder>")));
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('head', $context, $blocks);
        // line 119
        echo "

        ";
        // line 121
        $this->displayBlock('main_slider', $context, $blocks);
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('content', $context, $blocks);
        // line 154
        echo "
";
        // line 155
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 75
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 76) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 76)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 76))) {
            // line 77
            echo "          <nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 77, $this->source), "html", null, true);
            echo ">
          ";
            // line 78
            if (($context["container_navbar"] ?? null)) {
                // line 79
                echo "          <div class=\"container\">
          ";
            }
            // line 81
            echo "          <div>
              ";
            // line 83
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
              </div>
              ";
            // line 85
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 85)) {
                // line 86
                echo "                <div class=\"form-inline navbar-form float-right\">
                  ";
                // line 87
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 90
            echo "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 91
                echo "          </div>
          ";
            }
            // line 93
            echo "          </nav>
        ";
        }
        // line 95
        echo "        <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 95, $this->source), "html", null, true);
        echo ">
          ";
        // line 96
        if (($context["container_navbar"] ?? null)) {
            // line 97
            echo "          <div class=\"container\">
          ";
        }
        // line 99
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
        echo "
            ";
        // line 100
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 100) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 100))) {
            // line 101
            echo "              <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"collapse navbar-collapse\" id=\"CollapsingNavbar\">
                ";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "
                ";
            // line 104
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 104)) {
                // line 105
                echo "                  <div class=\"form-inline navbar-form float-right\">
                    ";
                // line 106
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            }
            // line 109
            echo "\t          </div>
            ";
        }
        // line 111
        echo "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 112
            echo "              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 114
        echo "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 115
            echo "          </div>
          ";
        }
        // line 117
        echo "        </nav>
";
    }

    // line 121
    public function block_main_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "        <div id=\"coustom-slider\" class=\"container-fluid\">
        ";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_slider", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        echo "
        </div>
        ";
    }

    // line 127
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 128, $this->source), "html", null, true);
        echo "\">
          ";
        // line 129
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 131
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 131, $this->source), "html", null, true);
        echo ">
                <section class=\"section\">
                  <a href=\"#main-content\" id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
        echo "
                </section>
              </main>
            ";
        // line 137
        if (($context["sidebar_first_exists"] ?? null)) {
            // line 138
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 138, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 140
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 144
        echo "            ";
        if (($context["sidebar_second_exists"] ?? null)) {
            // line 145
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 145, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 147
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 151
        echo "          </div>
        </div>
";
    }

    // line 155
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        echo "        <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 156, $this->source), "html", null, true);
        echo "\">
          ";
        // line 157
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 157) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 157)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 157)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 157))) {
            // line 158
            echo "            <div class=\"site-footer__top clearfix\">
              ";
            // line 159
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
            echo "
              ";
            // line 160
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
            echo "
              ";
            // line 161
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo "
              ";
            // line 162
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 165
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 165)) {
            // line 166
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 167
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 170
        echo "        </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/inteshape/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 170,  297 => 167,  294 => 166,  291 => 165,  285 => 162,  281 => 161,  277 => 160,  273 => 159,  270 => 158,  268 => 157,  263 => 156,  259 => 155,  253 => 151,  246 => 147,  240 => 145,  237 => 144,  230 => 140,  224 => 138,  222 => 137,  216 => 134,  210 => 131,  205 => 129,  200 => 128,  196 => 127,  189 => 123,  186 => 122,  182 => 121,  177 => 117,  173 => 115,  170 => 114,  166 => 112,  163 => 111,  159 => 109,  153 => 106,  150 => 105,  148 => 104,  144 => 103,  140 => 101,  138 => 100,  133 => 99,  129 => 97,  127 => 96,  122 => 95,  118 => 93,  114 => 91,  111 => 90,  105 => 87,  102 => 86,  100 => 85,  94 => 83,  91 => 81,  87 => 79,  85 => 78,  80 => 77,  77 => 76,  73 => 75,  69 => 155,  66 => 154,  64 => 127,  61 => 126,  59 => 121,  55 => 119,  53 => 75,  50 => 74,  48 => 73,  46 => 72,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/inteshape/templates/page.html.twig", "C:\\xampp\\htdocs\\new-traning-site\\web\\themes\\custom\\inteshape\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 72, "block" => 75, "if" => 76);
        static $filters = array("trim" => 72, "striptags" => 72, "render" => 72, "escape" => 77);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['trim', 'striptags', 'render', 'escape'],
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

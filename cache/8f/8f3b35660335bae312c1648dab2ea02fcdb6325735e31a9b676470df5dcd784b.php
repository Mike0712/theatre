<?php

/* index.html */
class __TwigTemplate_c9a7e006791c4baa83014ccfd07457d2027f8405091556ae712ce397167e10d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("front.html", "index.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "front.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Афиша";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"billboard-content\">

    <div class=\"col x5\">
        <div class=\"inner-wrapper\">&nbsp;</div>
    </div>
    <div class=\"col x5_3\">
        <div class=\"inner-wrapper\">
            <p class=\"title\"><span class=\"big-title\">Июль 2016</span> <span class=\"date-paginator\"><a
                    href=\"/afisha/index/any/6-2016/\"><span class=\"arrow\">←</span>&nbsp;&nbsp;Июнь</a>&nbsp;<a
                    href=\"/afisha/index/any/8-2016/\">Август&nbsp;&nbsp;<span class=\"arrow\">→</span></a></span></p>
        </div>
    </div>
    <div class=\"col x5\">
        <div class=\"inner-wrapper\">&nbsp;</div>
    </div>
    <div class=\"clear\"></div>
    <hr class=\"orange\">

    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["afisha"]) ? $context["afisha"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
            // line 25
            echo "    <div style=\"float:left;width:1000px;\">

        <table style=\"width: 90%;\">
            <tbody>
            <tr>
                <td style=\"width: 15%; padding-right: 30px;\">
                    <span style=\"font-size:38px; font-weight:bold; color: #FAAE4E;\">";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["dev"], "date", array()), "title", array()), "d"), "html", null, true);
            echo "</span>
                    <br>
                    <span style=\"font-size:16px; font-weight:bold; color: #54626b;\">";
            // line 33
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dayru')->getCallable(), array(twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["dev"], "date", array()), "title", array()), "l"))), "html", null, true);
            echo "</span>

                </td>

                <td style=\"width: 20%; padding-right: 40px;\">
                    <span style=\"font-size:22px;font-weight:bold; color: #54626b;\">";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["dev"], "date", array()), "title", array()), "H:i"), "html", null, true);
            echo "</span><br>
                    <span style=\"font-size:16px;font-weight:bold; color: #54626b; \">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dev"], "scene", array()), "title", array()), "html", null, true);
            echo "</span>
                </td>

                <td style=\"width: 65%; text-align: left;\">
                    <a style=\"font-size:28px;font-weight:bold;\"

                       href=\"/controllers/perfomance/perfomance/?id=";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["dev"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dev"], "title", array()), "html", null, true);
            echo "</a>


                    <div style=\"margin-top: 10px;\">

                        <script type=\"text/javascript\" src=\"/js/jquery.simplemodal-1.1.1.js\"></script>
                        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/simplemodal.css\">


                    </div>
                </td>

            </tr>
            </tbody>
        </table>


    </div>

    <div class=\"clear\"></div>
    <div style=\"height: 20px;\"></div>


    <!-- -->
    <hr class=\"orange\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 71,  96 => 45,  87 => 39,  83 => 38,  75 => 33,  70 => 31,  62 => 25,  58 => 24,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'front.html' %}*/
/* */
/* {% block title %}Афиша{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="billboard-content">*/
/* */
/*     <div class="col x5">*/
/*         <div class="inner-wrapper">&nbsp;</div>*/
/*     </div>*/
/*     <div class="col x5_3">*/
/*         <div class="inner-wrapper">*/
/*             <p class="title"><span class="big-title">Июль 2016</span> <span class="date-paginator"><a*/
/*                     href="/afisha/index/any/6-2016/"><span class="arrow">←</span>&nbsp;&nbsp;Июнь</a>&nbsp;<a*/
/*                     href="/afisha/index/any/8-2016/">Август&nbsp;&nbsp;<span class="arrow">→</span></a></span></p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col x5">*/
/*         <div class="inner-wrapper">&nbsp;</div>*/
/*     </div>*/
/*     <div class="clear"></div>*/
/*     <hr class="orange">*/
/* */
/*     {% for dev in afisha %}*/
/*     <div style="float:left;width:1000px;">*/
/* */
/*         <table style="width: 90%;">*/
/*             <tbody>*/
/*             <tr>*/
/*                 <td style="width: 15%; padding-right: 30px;">*/
/*                     <span style="font-size:38px; font-weight:bold; color: #FAAE4E;">{{ dev.date.title | date('d') }}</span>*/
/*                     <br>*/
/*                     <span style="font-size:16px; font-weight:bold; color: #54626b;">{{ dev.date.title | date('l') | dayru }}</span>*/
/* */
/*                 </td>*/
/* */
/*                 <td style="width: 20%; padding-right: 40px;">*/
/*                     <span style="font-size:22px;font-weight:bold; color: #54626b;">{{ dev.date.title | date('H:i') }}</span><br>*/
/*                     <span style="font-size:16px;font-weight:bold; color: #54626b; ">{{ dev.scene.title }}</span>*/
/*                 </td>*/
/* */
/*                 <td style="width: 65%; text-align: left;">*/
/*                     <a style="font-size:28px;font-weight:bold;"*/
/* */
/*                        href="/controllers/perfomance/perfomance/?id={{ dev.id }}">{{ dev.title }}</a>*/
/* */
/* */
/*                     <div style="margin-top: 10px;">*/
/* */
/*                         <script type="text/javascript" src="/js/jquery.simplemodal-1.1.1.js"></script>*/
/*                         <link rel="stylesheet" type="text/css" href="/css/simplemodal.css">*/
/* */
/* */
/*                     </div>*/
/*                 </td>*/
/* */
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/* */
/* */
/*     </div>*/
/* */
/*     <div class="clear"></div>*/
/*     <div style="height: 20px;"></div>*/
/* */
/* */
/*     <!-- -->*/
/*     <hr class="orange">*/
/*     {% endfor %}*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */

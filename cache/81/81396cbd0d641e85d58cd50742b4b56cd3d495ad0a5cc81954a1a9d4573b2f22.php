<?php

/* front.html */
class __TwigTemplate_42016d9dec4c2d6e3fe18ea69c35b8b66574647f323246ae6532d7c1943fe2e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta http-equiv=\"description\"

    <link rel=\"icon\" href=\"/favicon.ico\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" href=\"/favicon.ico\" type=\"image/x-icon\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Application/templates/styles/css/style.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Application/templates/styles/css/main.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Application/templates/styles/css/chosen.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Application/templates/styles/css/simple.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Application/templates/styles/css/base.css\"/>
    <script type=\"text/javascript\"
            src=\"http://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js\"
            charset=\"UTF-8\"></script>
    <script type=\"text/javascript\" src=\"/Application/templates/styles/js/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"/Application/templates/styles/js/scripts.js\"></script>
    <script type=\"text/javascript\" src=\"/Application/templates/styles/js/chosen.jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"/Application/templates/styles/js/jquery.form.js\"></script>

</head>
<body cz-shortcut-listen=\"true\">
<div class=\"all\">
    <div id=\"general\">
        <div class=\"wrapper\">
            <div id=\"header\">
                <div id=\"logo\" class=\"col x5_2_1\">
                    <div class=\"inner-wrapper\">
                        <a href=\"/\"><img src=\"/Application/templates/images/logo_big.png\" alt=\"Театр Ермоловой\"/></a>
                        <a href=\"http://kultura.mos.ru/\" target=\"_blank\"><img src=\"/Application/templates/images/msk_dep.png\"
                                                                              alt=\"При поддержке департамента культуры г.Москвы\"/></a>
                    </div>
                </div>

                <div id=\"header-contacts\" class=\"col x5_2_1\">
                    <div class=\"inner-wrapper\">
                        <div class=\"f-left\">
                            <div style=\"width:180px;float:left;\">
                                <u style=\"font-size:16px\">Касса театра</u><br/>
                                <strong>+7 495 629-05-94</strong><br/>
                                <small>ПН 12:00 - 18:00<br/>
                                    ВТ-ВС 12:00 - 20:00<br/>
                                    ПЕРЕРЫВ 15:00 - 16:00<br/></small>
                            </div>
                            <div style=\"float:left;width:150px;\"><u style=\"font-size:16px\">Бронирование</u><br/>
                                <strong>+7 495 692-45-87</strong><br/>
                                <strong>+7 495 692-73-58</strong><br/>
                                ПН-ПТ 12:00 - 18:00
                            </div>

                        </div>
                        <div class=\"fmr-right\">
                            <p><strong><a href=\"http://www.ermolova.ru/ileti/\" class=\"white-text s-italic upper-text\">билеты<br/>он-лайн</a></strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"clear\">&nbsp;</div>
            </div>
            <script type=\"text/javascript\" src=\"/js/waypoints.js\"></script>
            <script type=\"text/javascript\">
                \$(function () {
                    \$('#main_menu').waypoint(function (direction) {
                        if (direction == 'down') {
                            \$(this).wrap('<div style=\"float:left;width:100%;\"/>').height(\$(this).height());
                            \$(this).addClass('fixed');
                            \$('.breadcrumbs').wrap('<div style=\"float:left;width:100%;\"/>').parent().height(\$('.breadcrumbs').outerHeight() + 50);
                            \$('.breadcrumbs').addClass('fixed');
                        } else {
                            \$(this).unwrap();
                            \$(this).removeClass('fixed');
                            \$('.breadcrumbs').unwrap();
                            \$('.breadcrumbs').removeClass('fixed');
                        }
                    }, {offset: 5});
                });
            </script>
            <div id=\"main_menu\">
                <div id=\"main_menu_block\">
                    <div id=\"menu_list\">
                        <div class=\"col x5\">
                            <div class=\"inner-wrapper\">
                                <a href=\"/perfomance/\">Афиша</a>
                            </div>
                        </div>
                        <div class=\"col x5\">
                            <div class=\"inner-wrapper\">
                                <a href=\"/repertoire/\" class=\"a\">Спектакли</a>
                            </div>
                        </div>
                        <div class=\"col x5\">
                            <div class=\"inner-wrapper\">
                                <a href=\"/persones/\">Персоны</a>
                            </div>
                        </div>
                        <div class=\"col x5\">
                            <div class=\"inner-wrapper\">
                                <a href=\"/theatre/\">Театр</a>
                            </div>
                        </div>
                        <div class=\"col x5\">
                            <div class=\"inner-wrapper\">
                                <a href=\"/ileti/\">Билеты</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"content\">

                <div class=\"breadcrumbs\">
                    <a style=\"width:320px;\" href=\"/repertoire/index/any/\" class=\"active\">Все</a> <a style=\"width:320px;\"
                                                                                                    href=\"/repertoire/index/main/\">Основная
                    сцена</a> <a style=\"width:320px;\" href=\"/repertoire/index/new/\">Новая сцена</a>
                </div>


                <div class=\"people-content\">
                ";
        // line 122
        $this->displayBlock('content', $context, $blocks);
        // line 123
        echo "                </div>

                <div class=\"clear\">&nbsp;</div>
            </div>
        </div>
    </div>
    <div id=\"footer\">
        <div class=\"inner-wrapper\">
            <div class=\"wrapper\">
                <div class=\"col copyright\">
                    <p>&copy; театр ермоловой. все права защищены</p>
                </div>
                <div class=\"col x5\">&nbsp;</div>
                <div class=\"col x5 designer-logo\">

                </div>
                <div class=\"col x5 socials\">
                    <div>
                        <p>
                            <a href=\"http://www.facebook.com/TeatrErmolovoj\">
                                <img src=\"/Application/templates/images/fbook.png\" alt=\"Facebook\"/>
                                <img src=\"/Application/templates/images/fbook-h.png\" class=\"ci\" alt=\"Facebook\"/>
                            </a>
                            <a href=\"http://www.youtube.com/channel/UCQzfYZihspicN5G9CaIacwg\">
                                <img src=\"/Application/templates/images/youtube.png\" alt=\"YouTube\"/>
                                <img src=\"/Application/templates/images/youtube-h.png\" class=\"ci\" alt=\"YouTube\"/>
                            </a>
                            <a href=\"#\">
                                <img src=\"/Application/templates/images/twitter.png\" alt=\"Twitter\"/>
                                <img src=\"/Application/templates/images/twitter-h.png\" class=\"ci\" alt=\"Twitter\"/>
                            </a>
                            <a href=\"http://vk.com/club43633818\">
                                <img src=\"/Application/templates/images/vk.png\" alt=\"VKontakte\"/>
                                <img src=\"/Application/templates/images/vk-h.png\" class=\"ci\" alt=\"VKontakte\"/>
                            </a>
                        </p>
                    </div>
                </div>

                <div class=\"clear\"></div>
            </div>
        </div>
    </div>
</div>
<div class=\"blackbody\"></div>
<div id=\"order_tickets_block\" class=\"popup-block\">

</div>
<div href=\"#\" id=\"toTop\"></div>
</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 122
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "front.html";
    }

    public function getDebugInfo()
    {
        return array (  209 => 122,  204 => 4,  149 => 123,  147 => 122,  26 => 4,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="ru">*/
/* <head>*/
/*     <title>{% block title %}{% endblock %}</title>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>*/
/*     <meta http-equiv="description"*/
/* */
/*     <link rel="icon" href="/favicon.ico" type="image/x-icon"/>*/
/*     <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>*/
/*     <link rel="stylesheet" type="text/css" href="/Application/templates/styles/css/style.css"/>*/
/*     <link rel="stylesheet" type="text/css" href="/Application/templates/styles/css/main.css"/>*/
/*     <link rel="stylesheet" type="text/css" href="/Application/templates/styles/css/chosen.css"/>*/
/*     <link rel="stylesheet" type="text/css" href="/Application/templates/styles/css/simple.css"/>*/
/*     <link rel="stylesheet" type="text/css" href="/Application/templates/styles/css/base.css"/>*/
/*     <script type="text/javascript"*/
/*             src="http://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js"*/
/*             charset="UTF-8"></script>*/
/*     <script type="text/javascript" src="/Application/templates/styles/js/jquery.js"></script>*/
/*     <script type="text/javascript" src="/Application/templates/styles/js/scripts.js"></script>*/
/*     <script type="text/javascript" src="/Application/templates/styles/js/chosen.jquery.min.js"></script>*/
/*     <script type="text/javascript" src="/Application/templates/styles/js/jquery.form.js"></script>*/
/* */
/* </head>*/
/* <body cz-shortcut-listen="true">*/
/* <div class="all">*/
/*     <div id="general">*/
/*         <div class="wrapper">*/
/*             <div id="header">*/
/*                 <div id="logo" class="col x5_2_1">*/
/*                     <div class="inner-wrapper">*/
/*                         <a href="/"><img src="/Application/templates/images/logo_big.png" alt="Театр Ермоловой"/></a>*/
/*                         <a href="http://kultura.mos.ru/" target="_blank"><img src="/Application/templates/images/msk_dep.png"*/
/*                                                                               alt="При поддержке департамента культуры г.Москвы"/></a>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div id="header-contacts" class="col x5_2_1">*/
/*                     <div class="inner-wrapper">*/
/*                         <div class="f-left">*/
/*                             <div style="width:180px;float:left;">*/
/*                                 <u style="font-size:16px">Касса театра</u><br/>*/
/*                                 <strong>+7 495 629-05-94</strong><br/>*/
/*                                 <small>ПН 12:00 - 18:00<br/>*/
/*                                     ВТ-ВС 12:00 - 20:00<br/>*/
/*                                     ПЕРЕРЫВ 15:00 - 16:00<br/></small>*/
/*                             </div>*/
/*                             <div style="float:left;width:150px;"><u style="font-size:16px">Бронирование</u><br/>*/
/*                                 <strong>+7 495 692-45-87</strong><br/>*/
/*                                 <strong>+7 495 692-73-58</strong><br/>*/
/*                                 ПН-ПТ 12:00 - 18:00*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="fmr-right">*/
/*                             <p><strong><a href="http://www.ermolova.ru/ileti/" class="white-text s-italic upper-text">билеты<br/>он-лайн</a></strong>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="clear">&nbsp;</div>*/
/*             </div>*/
/*             <script type="text/javascript" src="/js/waypoints.js"></script>*/
/*             <script type="text/javascript">*/
/*                 $(function () {*/
/*                     $('#main_menu').waypoint(function (direction) {*/
/*                         if (direction == 'down') {*/
/*                             $(this).wrap('<div style="float:left;width:100%;"/>').height($(this).height());*/
/*                             $(this).addClass('fixed');*/
/*                             $('.breadcrumbs').wrap('<div style="float:left;width:100%;"/>').parent().height($('.breadcrumbs').outerHeight() + 50);*/
/*                             $('.breadcrumbs').addClass('fixed');*/
/*                         } else {*/
/*                             $(this).unwrap();*/
/*                             $(this).removeClass('fixed');*/
/*                             $('.breadcrumbs').unwrap();*/
/*                             $('.breadcrumbs').removeClass('fixed');*/
/*                         }*/
/*                     }, {offset: 5});*/
/*                 });*/
/*             </script>*/
/*             <div id="main_menu">*/
/*                 <div id="main_menu_block">*/
/*                     <div id="menu_list">*/
/*                         <div class="col x5">*/
/*                             <div class="inner-wrapper">*/
/*                                 <a href="/perfomance/">Афиша</a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col x5">*/
/*                             <div class="inner-wrapper">*/
/*                                 <a href="/repertoire/" class="a">Спектакли</a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col x5">*/
/*                             <div class="inner-wrapper">*/
/*                                 <a href="/persones/">Персоны</a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col x5">*/
/*                             <div class="inner-wrapper">*/
/*                                 <a href="/theatre/">Театр</a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col x5">*/
/*                             <div class="inner-wrapper">*/
/*                                 <a href="/ileti/">Билеты</a>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="content">*/
/* */
/*                 <div class="breadcrumbs">*/
/*                     <a style="width:320px;" href="/repertoire/index/any/" class="active">Все</a> <a style="width:320px;"*/
/*                                                                                                     href="/repertoire/index/main/">Основная*/
/*                     сцена</a> <a style="width:320px;" href="/repertoire/index/new/">Новая сцена</a>*/
/*                 </div>*/
/* */
/* */
/*                 <div class="people-content">*/
/*                 {% block content %}{% endblock %}*/
/*                 </div>*/
/* */
/*                 <div class="clear">&nbsp;</div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div id="footer">*/
/*         <div class="inner-wrapper">*/
/*             <div class="wrapper">*/
/*                 <div class="col copyright">*/
/*                     <p>&copy; театр ермоловой. все права защищены</p>*/
/*                 </div>*/
/*                 <div class="col x5">&nbsp;</div>*/
/*                 <div class="col x5 designer-logo">*/
/* */
/*                 </div>*/
/*                 <div class="col x5 socials">*/
/*                     <div>*/
/*                         <p>*/
/*                             <a href="http://www.facebook.com/TeatrErmolovoj">*/
/*                                 <img src="/Application/templates/images/fbook.png" alt="Facebook"/>*/
/*                                 <img src="/Application/templates/images/fbook-h.png" class="ci" alt="Facebook"/>*/
/*                             </a>*/
/*                             <a href="http://www.youtube.com/channel/UCQzfYZihspicN5G9CaIacwg">*/
/*                                 <img src="/Application/templates/images/youtube.png" alt="YouTube"/>*/
/*                                 <img src="/Application/templates/images/youtube-h.png" class="ci" alt="YouTube"/>*/
/*                             </a>*/
/*                             <a href="#">*/
/*                                 <img src="/Application/templates/images/twitter.png" alt="Twitter"/>*/
/*                                 <img src="/Application/templates/images/twitter-h.png" class="ci" alt="Twitter"/>*/
/*                             </a>*/
/*                             <a href="http://vk.com/club43633818">*/
/*                                 <img src="/Application/templates/images/vk.png" alt="VKontakte"/>*/
/*                                 <img src="/Application/templates/images/vk-h.png" class="ci" alt="VKontakte"/>*/
/*                             </a>*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="clear"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="blackbody"></div>*/
/* <div id="order_tickets_block" class="popup-block">*/
/* */
/* </div>*/
/* <div href="#" id="toTop"></div>*/
/* </body>*/
/* </html>*/
/* */

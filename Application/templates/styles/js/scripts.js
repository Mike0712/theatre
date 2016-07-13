var l_image;
$(document).ready( function() {
    var $body = $('body'); //Cache this for performance
    var setBodyScale = function() {
        var scaleFactor = 0.3,
            scaleSource = $body.width(),
            maxScale = 370,
            minScale = 300;
        if (scaleSource >= 1024 && scaleSource <= 1280){
            var fontSize = scaleSource * scaleFactor; //Multiply the width of the body by the scaling factor:
            if (fontSize > maxScale) fontSize = maxScale;
            if (fontSize < minScale) fontSize = minScale; //Enforce the minimum and maximums
            $('.resize-font').css('font-size', fontSize + '%');
        } else {
            if (scaleSource < 1024){
                $('.resize-font').css('font-size', minScale + '%');
            } else {
                if (scaleSource > 1280){
                    $('.resize-font').css('font-size', maxScale + '%');
                }
            }
        }
    }

    $(window).resize(function(){
        setBodyScale();
    });

    //Fire it when the page first loads:
    setBodyScale();

    $('a[href^=#order]').live('click', function(){
        var id = $(this).attr('href').split('/')[1];
        $.getJSON('/order/'+id+'/', function(data){
            $('#order_tickets_block').html('').append(data.page);
            $('.blackbody').fadeIn(function(){
                $('#order_tickets_block').fadeIn();
            });
        });

        return false;
    });

    $('a[href^=#close-form]').live('click', function(){
        var id = $(this).attr('href').split('/')[1];
        closeForm(id);
        return false;
    });

    $('form input.txt, form textarea.txt-ar').live('focus', function(){
        var id = $(this).attr('id');
        var l = $('label[for='+id+']');
        if(l.length > 0 && l.css('position').toLowerCase() == 'absolute') l.hide();
    });
    $('form input.txt, form textarea.txt-ar').live('blur', function(){
        var o = $(this);
        if(o.val().replace(/\s+/g, '') != '') return false;
        var id = $(this).attr('id');
        var l = $('label[for='+id+']');
        if(l.length > 0 && l.css('position').toLowerCase() == 'absolute') l.show();
    });

    $('#order_tickets_form').live('submit', function() {
        $('#order_tickets_submit').attr('disabled', 'disabled');
        var options = {
            dataType: 'json',
            success: function(data) {
                $('.error, .success').hide();
                if(data.errors) {
                    $.each(data.errors, function(i, n) {
                        $('#'+i+'_error').show();
                    });
                    $('#order_tickets_submit').removeAttr('disabled');
                } else {
                    $('#order_tickets_form').hide();
                    $('#order_tickets_success').show();
                    setTimeout(function(){
                        closeForm('order_tickets_block');
                    }, 3000);
                }
            }
        }
        $(this).ajaxSubmit(options);
        return false;
    });
});

$(function(){
    $.fn.scrollToTop=function(){
        $(this).hide().removeAttr("href");
        if($(window).scrollTop()!="0"){
            $(this).fadeIn("slow")
        }
        var scrollDiv=$(this);
        $(window).scroll(function(){
            if($(window).scrollTop()=="0"){
                $(scrollDiv).fadeOut("slow")
            }else{
                $(scrollDiv).fadeIn("slow")
            }
        });
        $(this).click(function(){
            $("html, body").animate({scrollTop:0},"slow")
        })
    }
});
$(function() {$("#toTop").scrollToTop();});

$(function() {
    $('div.socials a').hover(function() {
        $('img.ci', this).stop(true, true).fadeIn();
    },function() {
        $('img.ci', this).stop(true, true).fadeOut();
    });

    // for_invalids
    invalids.activate();
});

afisha_slider = {
    b: null,
    by_step: 1,
    current: 0,
    step: 500,
    count: 0,
    in_action: false,
    height: 0,

    init: function() {
        var m = $('#afisha_slider');
        afisha_slider.b = $('#afisha_slider_body');
        afisha_slider.blocks = $('div.one-block-wrapper', m);

        afisha_slider.set_sizes();

        $('div.billboard div.navigation a[href=#up]').click(function() {
            afisha_slider.move('prev');
            return false;
        });

        $('div.billboard div.navigation a[href=#down]').click(function() {
            afisha_slider.move('next');
            return false;
        });

        $(window).resize(function() {
            setTimeout(function() {
                afisha_slider.set_sizes();
            }, 200);
        });
    },

    set_sizes: function() {
        afisha_slider.height = 0;
        // нужно найти самый маленький блок
        for(var i =0; i < afisha_slider.blocks.length; i++) {
            var h = $(afisha_slider.blocks[i]).height();
            if(h < afisha_slider.step) afisha_slider.step = h;
        }
        afisha_slider.blocks.each(function() {
            var a = $('a.big-title', this);
            var lh = parseFloat(a.css('line-height').replace('px', ''));
            var wh = afisha_slider.step * (a.height()/lh);
            var o = $(this);
            //var wh = afisha_slider.step * Math.ceil(o.height()/afisha_slider.step);
            if(o.height() > wh) wh = afisha_slider.step * Math.ceil(o.height()/afisha_slider.step);
            o.height(wh).find('div.one-block').height(wh - 22);
            afisha_slider.height += wh;
        });
        $('#afisha_slider').height(afisha_slider.step*4 - 1);

        afisha_slider.b.css('margin-top', 0);
        afisha_slider.current = 0;
    },

    move: function(dir) {
        if(afisha_slider.in_action) return false;

        var cm = parseFloat(afisha_slider.b.css('margin-top').replace('px', ''));
        if((dir == 'prev' && cm == 0) || (dir == 'next' && cm <= -(afisha_slider.height - afisha_slider.step*4))) return false;

        if(dir == 'prev') afisha_slider.current--;
        afisha_slider.in_action = true;
        var by_step = $(afisha_slider.blocks[afisha_slider.current]).height() / afisha_slider.step;
        var nm = cm + ((afisha_slider.step*by_step)*(dir == 'next' ? -1 : 1));

        afisha_slider.b.animate({'marginTop': nm}, 550, 'swing', function() {
            if(dir == 'next') afisha_slider.current++;
            afisha_slider.in_action = false;
        });
    }
}

closeForm = function(id) {
    $('#'+id).fadeOut(function(){
        $('.blackbody').fadeOut();
        $('#'+id).html('');
    });
}

invalids = {
    to: null,
    activate: function() {
        invalids.resize();

        $(window).resize(function() {
            if(invalids.to) clearTimeout(invalids.to);
            invalids.to = setTimeout(function() {
                invalids.resize();
            }, 200);
        })
    },
    resize: function() {
        $('.for_invalids').each(function() {
            var o = $(this);
            var oh = o.height();
            var img = $('img.invalid_ico', this);
            if(!img.length) {
                img = $('<img/>').addClass('invalid_ico').attr('src', '/img/invalid_img.png').appendTo(o);
            }

            if(oh < 33) {
                img.css({bottom:0, left:'-38px'}).width(33);
                o.css('margin-left', 33);
            } else if(oh < 300) {
                img.css({top:0, left:'-'+(oh+8)+'px'}).width(oh).height(oh);
                o.css('margin-left', oh);
            } else {
                img.css({top:0, left:'-308px'}).width(300).height(300);
                o.css('margin-left', 300);
            }
        });
    }
}

news_slider = {
    b: null,
    by_step: 1,
    current: 0,
    step: 500,
    count: 0,
    in_action: false,
    height: 0,

    init: function() {
        var m = $('#news_slider');
        news_slider.b = $('#news_slider_body');
        news_slider.blocks = $('div.one-block', m);

        news_slider.set_sizes();

        $('a[href^=#news]').click(function() {
            var d = $(this).attr('href').split('/')[1];
            news_slider.move(d);

            return false;
        });

        $(window).resize(function() {
            setTimeout(function() {
                news_slider.set_sizes();
            }, 200);
        });
    },

    set_sizes: function() {
        news_slider.step = $(news_slider.blocks[0]).height() + 14;
        news_slider.height = news_slider.step*news_slider.blocks.length;
        $('#news_slider').height(news_slider.step*3 - 1);

        news_slider.b.css('margin-top', 0);
        news_slider.current = 0;
    },

    move: function(dir) {
        if(news_slider.in_action) return false;

        var cm = parseFloat(news_slider.b.css('margin-top').replace('px', ''));
        if((dir == 'prev' && cm == 0) || (dir == 'next' && cm <= -(news_slider.height - news_slider.step*3))) return false;

        if(dir == 'prev') news_slider.current--;
        news_slider.in_action = true;
        var by_step = 1;//$(news_slider.blocks[news_slider.current]).height()+14 / news_slider.step;
        var nm = cm + ((news_slider.step*by_step)*(dir == 'next' ? -1 : 1));

        news_slider.b.animate({'marginTop': nm}, 550, 'swing', function() {
            if(dir == 'next') news_slider.current++;
            news_slider.in_action = false;
        });
    }
}
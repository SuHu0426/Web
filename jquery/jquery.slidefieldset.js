/////////////////////////////////////////////////////////////////////////////////////////
// SlideFieldset Plugin for jQuery - MIT Style License
// Copyright (c) 2009 Jeffrey Lee --- blog.darkthread.net
// ** Add a "+"/"-" in front of legend text and make the fieldset collapsible
/////////////////////////////////////////////////////////////////////////////////////////
////// TO CALL: 
// $("fieldSetname").slideFieldset();
//
// Notes: Please add an div to wrap all the content inside the fieldset, then add references to 
// jquery.slidefiedset.js and jquery.slidefieldset.css.
// (plus.gif and minus.gif should be under the same folder with css file)
(function($) {
    $.fn.slideFieldset = function() {
        return this.each(function() {
            $(this).find("legend").addClass("clsCollasibleLegend")
            .click(function() {
                var lg = $(this);
                var fs = lg.closest("fieldset");
                var bg = $(this).css("background-image");
                if (bg.indexOf("minus.gif") > 0) {
                    fs.find("div:first").slideUp("fast");
                    lg.css("background-image", bg.replace("minus", "plus"));
                } else {
                    fs.find("div:first").slideDown("fast");
                    lg.css("background-image", bg.replace("plus", "minus"));
                }
            });
            //fix IE8 legend margin-left issue
            if ($.browser.msie && $.browser.version.indexOf("8") == 0)
                $(this).find("legend").css("margin-left", "8px");
        });
    }
})(jQuery);

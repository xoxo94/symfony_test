/*
 treeMenu - jQuery plugin
 version: 0.4

 Copyright 2014 Stepan Krapivin

*/

(function($){
    $.fn.openActive = function(activeSel) {
        activeSel = activeSel || ".active";

        var c = this.attr("class");

        this.find(activeSel).each(function(){
            var el = $(this).parent();
            while (el.attr("class") !== c) {
                if(el.prop("tagName") === 'UL') {
                    el.show();
                } else if (el.prop("tagName") === 'LI') {
                    el.removeClass('tree-closed');
                    el.addClass("tree-opened");
                }

                el = el.parent();
            }
        });

        return this;
    };

    $.fn.treemenu = function(options) {
        options = options || {};
        options.delay = options.delay || 0;
        options.openActive = options.openActive || false;
        options.activeSelector = options.activeSelector || "";

        this.addClass("treemenu");
        this.find("> li").each(function() {
            e = $(this);
            var subtree = e.find('> ul');
            var button = e.find('span').eq(0).addClass('toggler');

            if( button.length == 0) {
                var button = $('<span>');
                button.addClass('toggler');
                e.prepend(button);
            } else {
                button.addClass('toggler');
            }

            if(subtree.length > 0) {
                subtree.hide();

                e.addClass('tree-closed');

                e.find(button).click(function() {
                    var li = $(this).parent('li');
                    li.find('> ul').slideToggle(options.delay);
                    li.toggleClass('tree-opened');
                    li.toggleClass('tree-closed');
                    li.toggleClass(options.activeSelector);
                });

                $(this).find('> ul').treemenu(options);
            } else {
                $(this).addClass('tree-empty');
            }
        });

        if (options.openActive) {
            this.openActive(options.activeSelector);
        }

        return this;
    }
})(jQuery);

function ShowMenu(obj, noid) {
    var block = document.getElementById(noid);
    var n = noid.substr(noid.length - 1);
    if (noid.length == 4) {
        var ul = document.getElementById(noid.substring(0, 3))
            .getElementsByTagName("ul");
        var h2 = document.getElementById(noid.substring(0, 3))
            .getElementsByTagName("h2");
        for (var i = 0; i < h2.length; i++) {
            h2[i].innerHTML = h2[i].innerHTML.replace("+", "-");
            h2[i].style.color = "";
        }
        obj.style.color = "#929496";
        for (var i = 0; i < ul.length; i++) {
            if (i != n) {
                ul[i].className = "no";
            }
        }
    } else {
        var span = document.getElementById("menu")
            .getElementsByTagName("span");
        var h1 = document.getElementById("menu")
            .getElementsByTagName("h1");
        for (var i = 0; i < h1.length; i++) {
            h1[i].innerHTML = h1[i].innerHTML.replace("+", "-");
            h1[i].style.color = "";
        }
        obj.style.color = "#56a8fd;";
        for (var i = 0; i < span.length; i++) {
            if (i != n) {
                span[i].className = "no";
            }
        }
    }
    if (block.className == "no") {
        block.className = "";
        obj.innerHTML = obj.innerHTML.replace("-", "+");
    } else {
        block.className = "no";
        obj.style.color = "";
    }
}

var modal=document.getElementById("id01");window.onclick=function(t){t.target==modal&&(modal.style.display="none")},jQuery(document).ready(function(t){t(".modal").find("input, textarea").on("keydown blur focus",function(e){var a=t(this),i=a.prev("label");"keydown"===e.type?""===a.val()?i.removeClass("active highlight"):i.addClass("active highlight"):"blur"===e.type?""===a.val()?i.removeClass("active highlight"):i.removeClass("highlight"):"focus"===e.type&&(""===a.val()?i.removeClass("highlight"):""!==a.val()&&i.addClass("highlight"))})}),jQuery(document).ready(function(t){t(".tab a").on("click",function(e){e.preventDefault(),t(this).parent().addClass("active"),t(this).parent().siblings().removeClass("active"),target=t(this).attr("href"),t(".tab-content > div").not(target).hide(),t(target).fadeIn(600)})});

!function () {
    "use strict";

    console.clear();
    var e = {
        Android: function () {
            return navigator.userAgent.match(/Android/i)
        }, BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i)
        }, iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i)
        }, Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i)
        }, Windows: function () {
            return navigator.userAgent.match(/IEMobile/i)
        }, any: function () {
            return e.Android() || e.BlackBerry() || e.iOS() || e.Opera() || e.Windows()
        }
    };

    function t(e, t) {
        !function (e) {
            const t = $(window).scrollTop(), a = t + window.innerHeight, i = $("#" + e).offset().top,
                n = i + document.getElementById(e).offsetHeight;
            return t < i && a > n
        }(e) ? $("#" + e).find(".progress-bar").css("width", "0%").html("<span>0%</span>") : $("#" + e).find(".progress-bar").css("width", t + "%").html(`<span>${t}%</span>`)
    }

    function a() {
        t("skill-1", "90"),
            t("skill-2", "90"),
            t("skill-3", "60"),
            t("skill-4", "70"),
            t("skill-5", "30"),
            t("skill-6", "80"),
            t("skill-7", "40"),
            t("skill-8", "90"),
            t("skill-9", "80")
    }


    $(function () {
        var t, i, n;

        function s(e) {
            return /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(e)
        }

        t = $(".navbar-toggler"), $(".smoothscroll[href=''], #pb-navbar ul li a[href='']").on("click", function (e) {
            e.preventDefault();
            var t = $(this).data("go");
            $("html, body").animate({scrollTop: $(t).offset().top}, 700, "easeInOutExpo")
        }), $("#pb-navbar ul li a[href^='#']").on("click", function (e) {
            t.is(":visible") && t.click()
        }), $("body").on("activate.bs.scrollspy", function () {
            console.log("nice")
        }), $(".site-animate").waypoint(function (e) {
            "down" !== e || $(this.element).hasClass("site-animated") || ($(this.element).addClass("item-animate"), setTimeout(function () {
                $("body .site-animate.item-animate").each(function (e) {
                    var t = $(this);
                    setTimeout(function () {
                        var e = t.data("animate-effect");
                        "fadeIn" === e ? t.addClass("fadeIn site-animated") : "fadeInLeft" === e ? t.addClass("fadeInLeft site-animated") : "fadeInRight" === e ? t.addClass("fadeInRight site-animated") : t.addClass("fadeInUp site-animated"), t.removeClass("item-animate")
                    }, 100 * e, "easeInOutExpo")
                })
            }, 100))
        }, {offset: "95%"}), i = 0, $(window).scroll(function () {
            var e = $(this).scrollTop(), t = $(".site-navbar");
            e > 200 ? t.addClass("scrolled") : t.removeClass("scrolled awake"), t.hasClass("scrolled") && e > 300 && (e > i ? (t.removeClass("awake"), t.addClass("sleep")) : (t.addClass("awake"), t.removeClass("sleep")), i = e)
        }), $(".site-navbar").mouseenter(function () {
            var e = $(this);
            e.addClass("awake"), e.removeClass("sleep")
        }).mouseleave(function () {
            var e = $(this);
            e.addClass("sleep"), e.removeClass("awake")
        }), $('.navbar-nav a:not([class="external"])').click(function (t) {
            var a = $(this).data("nav-section");
            return $(".navbar-nav"), e.any() && $(".navbar-toggle").click(), $('[data-section="' + a + '"]').length && $("html, body").animate({scrollTop: $('[data-section="' + a + '"]').offset().top}, 500, "easeInOutExpo"), t.preventDefault(), !1
        }), n = $("html, body"), $(".smoothscroll").click(function () {
            return n.animate({scrollTop: $($.attr(this, "href")).offset().top}, 500), !1
        }), function () {
            if ($(".filters ul li").click(function () {
                $(".filters ul li").removeClass("active"), $(this).addClass("active");
                var t = $(this).attr("data-filter");
                e.isotope({filter: t})
            }), document.getElementById("section-portfolio")) var e = $(".grid").isotope({
                itemSelector: ".all",
                percentPosition: !0,
                masonry: {columnWidth: ".all"}
            })
        }(), a(), $("#message").on("change keyup keydown paste cut", function (e) {
            for (; $(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth"));) $(this).height($(this).height() + 1)
        }), $("#name").on("blur paste cut", function () {
            "" === $("#name").val() ? $("#nameerror").show(500) : $("#nameerror").hide(500)
        }), $("#email").on("blur paste cut", function () {
            "" === $("#email").val() ? $("#emailerror").html("How can i reply then if you don't fill it :(").show(500) : s($("#email").val()) ? $("#emailerror").hide(500) : $("#emailerror").html("How can i contact you if you don't entered the correct email :(").show(500)
        }), $("#message").on("blur paste cut", function () {
            "" === $("#message").val() ? $("#messageerror").show(500) : $("#messageerror").hide(500)
        }), $(".site-form").submit(function (e) {
            e.preventDefault(), toastr.options = {
                closeButton: !0,
                debug: !1,
                newestOnTop: !1,
                progressBar: !0,
                positionClass: "toast-top-right",
                preventDuplicates: !1,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                timeOut: "3000",
                extendedTimeOut: "0",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut"
            };
            const t = $(this).serialize();
            (function () {
                let e = !0;
                return "" === $("#name").val() ? (e = !1, $("#nameerror").show(500)) : $("#nameerror").hide(500), "" === $("#email").val() ? (e = !1, $("#emailerror").html("How can i reply then if you don't fill it :(").show(500)) : s($("#email").val()) ? $("#emailerror").hide(500) : (e = !1, $("#emailerror").html("How can i contact you if you don't entered the correct email :(").show(500)), "" === $("#message").val() ? (e = !1, $("#messageerror").show(500)) : $("#messageerror").hide(500), e
            })() && $.ajax({
                data: t, url: `${window.location.origin}/submitform`, type: "POST", beforeSend: e => {
                    $('input[type="submit"]').val("Loading ...")
                }, complete: e => {
                    if (e.status === 404 || e.status === 200) {
                        $('input[type="submit"]').val("Send Message")
                        toastr.success("Thank you, you will be contacted ASAP"), $("#email,#name,#message, textarea").val("")
                        console.clear();
                    }
                }
            })
        })
    }), $(window).scroll(function () {
        a()
    })
}();

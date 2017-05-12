/**
 * Created by randy on 17/5/2.
 */
$(function () {
    if (window.location.pathname != "/")
    {
        $("#home").removeClass("is-active-top-nav__1level");
        switch (window.location.pathname) {
            case "/signup":
                $("#signup").addClass("is-active-top-nav__1level");
                break;
            case "/portfolio":
                $("#portfolio").addClass("is-active-top-nav__1level");
                break;
            case "/blog":
                $("#blog").addClass("is-active-top-nav__1level");
                break;
            case "/contact":
                $("#contact").addClass("is-active-top-nav__1level");
                break;
            case "/login":
                $("#login").addClass("is-active-top-nav__1level");
                break;
            default:
                break;
        }
    }
});
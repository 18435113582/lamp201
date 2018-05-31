! function(a, b) {
    var c = b.documentElement,
        d = b.querySelector("meta[name=viewport]"),
        e = "orientationchange" in a ? "orientationchange" : "resize",
        f = function() {
            // d && a.devicePixelRatio && d.setAttribute("content", "width=device-width, initial-scale=" + (a.devicePixelRatio >= 2 ? .5 : 1) + ", user-scalable=no");
            var b = c.clientWidth || 320;
            if(c.clientWidth < 765){
                c.style.fontSize = 100 * (b / 1080) + "px"
            }else{
                c.removeAttribute("style");
            } 
        };
    f();
    b.addEventListener && (a.addEventListener(e, f, !1), b.addEventListener("DOMContentLoaded", f, !1))
}(window, document);
window.JSCallJava&&JSCallJava.setTitle&&JSCallJava.setTitle(document.title);
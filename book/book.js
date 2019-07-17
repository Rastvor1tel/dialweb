$(function () {
    var el1 = $('#electron-1');
    var el2 = $('#electron-2');
    var el3 = $('#electron-3');

    function anim(el, dur) {
        /* 400 is len of path of ellipse */
        el.css({'stroke-dashoffset': 0})
            .animate(
                {'stroke-dashoffset': 399},
                dur,
                "linear",
                function(){
                    anim(el,dur);
                }
            );
    }
    anim(el1, 2003);
    anim(el2, 2087);
    anim(el3, 2111);
    var wrapper = document.querySelector('.book'),
        book = document.querySelector('.book-main__photo img'),
        toX,toY;

    wrapper.addEventListener('mousemove',function(e){
        toX = (e.clientX / window.innerWidth) * 5;
        toY = (e.clientY / window.innerHeight) * 5;
        book.style.webkitTransform = 'translateX(' + toX + '%) translateY(' + toY + '%)';
        book.style.transform = 'translateX(' + toX + '%) translateY(' + toY + '%)';
    });
});

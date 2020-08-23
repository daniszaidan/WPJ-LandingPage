function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 50,
                ul = document.querySelector("ul");
            if (distanceY > shrinkOn) {
                classie.add(ul,"smaller");
            } else {
                if (classie.has(ul,"smaller")) {
                    classie.remove(ul,"smaller");
                }
            }
        });
    }
    window.onload = init();
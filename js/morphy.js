(function(){
    $("#description").Morphist({
        // The entrance animation type (In).
        animateIn: "fadeIn",
        // The exit animation type (Out). Refer to Animate.css for a list of available animations.
        animateOut: "fadeOut",
        // The delay between the changing of each object in milliseconds.
        speed: 4000,
        complete: function () {
            // Called after the entrance animation is executed.
        }
    });
    $("#profilePicture").Morphist({
        // The entrance animation type (In).
        animateIn: "fadeIn",
        // The exit animation type (Out). Refer to Animate.css for a list of available animations.
        animateOut: "zoomOut",
        // The delay between the changing of each object in milliseconds.
        speed: 9000,
        complete: function () {
            // Called after the entrance animation is executed.
        }
    });
})();
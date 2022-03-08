var iSize = 0;
var sAmazonAws = 'https://corporatehappiness.s3.eu-central-1.amazonaws.com/krisen/videos/';

// Polling for the sake of my intern tests
var interval = setInterval(function() {
    if(document.readyState === 'complete') {
        clearInterval(interval);
        setTimeout(() => {
            // Load Video
            // initVideos();
            initResize();
            window.scrollBy({ top: 1, left: 0, behavior: "instant" });
            window.scrollBy({ top: -1, left: 0, behavior: "instant" });
        }, 1);
    }
}, 100);

function initResize () {
    $( window ).resize(function () {
        onResize();
    });
    onResize();
}

function onResize () {
    var w = window.innerWidth;
}

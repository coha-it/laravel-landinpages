var iSize = 0;
var sAmazonAws = 'https://corporatehappiness.s3.eu-central-1.amazonaws.com/krisen/videos/';

// Polling for the sake of my intern tests
var interval = setInterval(function() {
    if(document.readyState === 'complete') {
        clearInterval(interval);
        // Load Video
        initAll();
    }
}, 100);

function initAll() {
    // initVideos();

    initResize();
}

function initResize () {
    $( window ).resize(function () {
        onResize();
    });
    onResize();
}

function onResize () {
    var w = window.innerWidth;
}

$("#example, body").vegas({
    timer: false,
transition: 'fade',
slides: [
    { src: 'img/bg.jpg', transition: 'fade' },
    { src: 'images/slider/Home Page Slider 1.jpg', transition: 'fade'},
    { src: 'images/slider/Media Coverage-1.jpg', transition: 'slideRight2' },
    { src: 'images/slider/Media Coverage-2.jpg', transition: 'fade' },
    { src: 'images/slider/Media Coverage-3.jpg', transition: 'slideRight2' }
],
init: function (globalSettings) {
    console.log("Init");
},
play: function (index, slideSettings) {
    console.log("Play");
},
walk: function (index, slideSettings) {
    console.log("Slide index " + index + " image " + slideSettings.src);
}
});
// const triggers = [].slice.call(document.querySelectorAll('.element'));
// triggers.forEach(function(ele) {
//     ele.addEventListener('click', clickHandler);
// });
//
// const clickHandler = function(e) {
//     // Prevent the default action
//     e.preventDefault();
//
//     // Get the `href` attribute
//     const href = e.target.getAttribute('href');
//     const id = href.substr(1);
//     const target = document.getElementById(id);
//
//     scrollToTarget(target);
// };
//
// const duration = 800;
//
// const scrollToTarget = function(target) {
//     const top = target.getBoundingClientRect().top;
//     const startPos = window.pageYOffset;
//     const diff = top;
//
//     let startTime = null;
//     let requestId;
//
//     const loop = function(currentTime) {
//         if (!startTime) {
//             startTime = currentTime;
//         }
//
//         // Elapsed time in miliseconds
//         const time = currentTime - startTime;
//
//         const percent = Math.min(time / duration, 1);
//         window.scrollTo(0, startPos + diff * percent);
//
//         if (time < duration) {
//             // Continue moving
//             requestId = window.requestAnimationFrame(loop);
//         } else {
//             window.cancelAnimationFrame(requestId);
//         }
//     };
//     requestId = window.requestAnimationFrame(loop);
// };
//
// const time = currentTime - startTime;
//
// // `percent` is in the range of 0 and 1
// const percent = Math.min(time / duration, 1);
// window.scrollTo(0, startPos + diff * percent);
//
// if (time < duration) {
//     // Continue moving
//     requestId = window.requestAnimationFrame(loop);
// } else {
//     window.cancelAnimationFrame(requestId);
// }

$(document).ready(function () {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('#about').offset().top
    }, 'slow');
});

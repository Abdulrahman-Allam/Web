var navigation = new TimelineLite({paused:true, reversed:true});
navigation.to("#navigationWrap", 0.5, {opacity: 1, display: 'block'})
          .to(".navbar", 0.3, {opacity: 0}, "-=0.1")
          .to(".close", 0.3, {display: "block", opacity: 1}, "-=0.1")
          .from(".menu", 0.5, {opacity: 0, y: 30})
          .from(".social", 0.5, {opacity: 0});

$(".navbar, .close").click (function() {
  navigation.reversed() ? navigation.play() : navigation.reverse();
})

/////////////////////////////
function rotate() {
  var lastChild = $('.slider div:last-child').clone();
  $('.slider div').removeClass('firstSlide')
  $('.slider div:last-child').remove();
  $('.slider').prepend(lastChild)
  $(lastChild).addClass('firstSlide')
}

window.setInterval(function(){
  rotate()
}, 4000);


////////////////////////////
$(".popup-btn").click(function (e) {
  e.preventDefault();
  var linkID = this.hash.replace("#", "");
  $(".modal").each(function () {
    var modalID = $(this).attr("id");
    if (linkID === modalID) {
      $(this).fadeIn(200);
      $("body, html").addClass("modal-open");
      $(".modal-backdrop").addClass("in");
      $(this).addClass("in");
    } else {
      $(this).fadeOut();
      $(this).removeClass("in");
    }
  });
});
$("body, button.close, .modal-footer button.btn").click(function () {
  $("body, html").removeClass("modal-open");
  $(".modal-backdrop").removeClass("in");
  $(".modal").fadeOut();
  $(".modal").removeClass("in");
});
$(".modal-content, .popup-btn, .modal-header .close, .modal-footer .btn").click(
  function (e) {
    e.stopPropagation();
  }
);

////////////////////////////////////////


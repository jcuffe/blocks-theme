console.log("EE Contracting LLC by Schweb Design")
console.log("Initializing...")

jQuery(document).ready(function($) {
  console.log("Attaching scroll listener for splash animation.")
  $(window).scroll(function() {
    var scroll = $(window).scrollTop()
    if (scroll > 20) {
      $("body").addClass("scrolled")
    } else {
      $("body").removeClass("scrolled")
    }
  })
})

// Basic fade transition example that barba.js provides, this looks super nice already!!!
$(function() {
  console.log('%c Justin Parsons','background: red; color: white; padding: 5px 10px;');
  var FadeTransition = Barba.BaseTransition.extend({
  start: function() {
    /**
     * This function is automatically called as soon the Transition starts
     * this.newContainerLoading is a Promise for the loading of the new container
     * (Barba.js also comes with an handy Promise polyfill!)
     */

    // As soon the loading is finished and the old page is faded out, let's fade the new page
    Promise
      .all([this.newContainerLoading, this.fadeOut()])
      .then(this.fadeIn.bind(this));
  },

  fadeOut: function() {
    /**
     * this.oldContainer is the HTMLElement of the old Container
     */

    return $(this.oldContainer).animate({ opacity: 0 }).promise();
  },

  fadeIn: function() {
    /**
     * this.newContainer is the HTMLElement of the new Container
     * At this stage newContainer is on the DOM (inside our #barba-container and with visibility: hidden)
     * Please note, newContainer is available just after newContainerLoading is resolved!
     */
    //Scroll new page back to top for user, without this barba loads the next page in the current scroll position
    document.body.scrollTop = 0;

    document.documentElement.scrollTop = 0;

    //Remove open class from mobile menu after a link is clicked and a new page is loaded
    var _this = this;
    var $el = $(this.newContainer);

    $(this.oldContainer).hide();

    $el.css({
      visibility : 'visible',
      opacity : 0
    });

    $el.animate({ opacity: 1 }, 400, function() {
      /**
       * Do not forget to call .done() as soon your transition is finished!
       * .done() will automatically remove from the DOM the old Container
       */
       //Remove open class from mobile menu after a link is clicked and a new page is loaded
       Barba.Dispatcher.on('transitionCompleted', function(currentStatus, oldStatus, container) {

        });
      _this.done();
      //run scripts that should be run after content is shown
      pageCheckBefore();
    });
  }
});

/**
 * Next step, you have to tell Barba to use the new Transition
 */

Barba.Pjax.getTransition = function() {

  return FadeTransition;
};
    Barba.Pjax.start();
    pageCheckBefore();
    function pageCheckBefore(){
      if($(".menu").hasClass("open")){
            $(".menu").removeClass("open");
      };
      $('.smooth-goto').on('click', function() {
        $('html, body').animate({scrollTop: $(this.hash).offset().top - 150}, 50);
        return false;
      });
    }
});
// toggle menu
$(function() {
    $(".menuTextWrap").click(function(e){
        $(".menu").toggleClass("open");
        	e.stopPropagation();
    });
});
$(function() {
    $(".site").click(function(e){
    	if(!$(e.target).hasClass("menu")){
        	$(".menu").removeClass("open");
    	}
    });
});
$(function() {
    $(".closeMenuButton").click(function(e){
        $(".menu").toggleClass("open");
        	e.stopPropagation();
    });
});
$(function() {
    $(".mobileMenuLink").click(function(e){
        $(".menu").toggleClass("open");
        	e.stopPropagation();
    });
});

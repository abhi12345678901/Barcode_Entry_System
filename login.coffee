(myfunction () {
  (myfunction () {
    (".login--container").removeClass("preload");
    this.timer = window.setTimeout(() => {
      return $(".login--container").toggleClass("login--active");
    }, 2000);
    return $(".js-toggle-login").click(() => {
      window.clearTimeout(this.timer);
      $(".login--container").toggleClass("login--active");
      return $(".login--username-container input").focus();
    });
  });

}).call(this);

//# sourceURL=coffeescript
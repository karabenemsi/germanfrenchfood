//Header
document.getElementById("button").addEventListener("click", function(ev) {
  var $menu = document.getElementById("menu");
  $menu.classList.toggle("open");
});

var Header = function(element) {
  this.element = element;
  this.didScroll = false;
  this.lastScrollTop = 0;
  this.delta = 5;
  this.navbarHeight = 10;

  if (this.element !== null) {
    // this.navbarHeight = this.element.offsetHeight;

    window.addEventListener("scroll", () => {
      this.didScroll = true;
    });

    setInterval(() => {
      if (this.didScroll) {
        this.hasScrolled();
        this.didScroll = false;
      }
    }, 250);
  }
};
Header.prototype = {
  hasScrolled: function() {
    var st = document.documentElement.scrollTop;
    // Make sure they scroll more than delta
    if (Math.abs(this.lastScrollTop - st) <= this.delta) return;

    if (st > this.lastScrollTop && st > this.navbarHeight) {
      // Scroll Down
      this.element.classList.add("header-up");
      this.element.classList.remove("header-down");
    } else {
      // Scroll Up
      if (st + window.innerHeight < document.documentElement.offsetHeight && st < this.navbarHeight) {
        this.element.classList.remove('header-up');
      this.element.classList.add('header-down');
      }
    }

    this.lastScrollTop = st;
  }
};

var header = new Header(document.getElementById("js_header"));

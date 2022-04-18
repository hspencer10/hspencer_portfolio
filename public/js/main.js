
document.addEventListener("DOMContentLoaded", function(){

    nav_autohide = document.querySelector('.autohideNav');
    ham_autohide = document.querySelector('.autohideHam');
    
    // add padding-top to bady (if necessary)
    navbar_height = document.querySelector('.navbar').offsetHeight;
    document.body.style.paddingTop = navbar_height + 'px';
  
    if(nav_autohide){
      var last_scroll_top = 0;
      window.addEventListener('scroll', function() {
            let scroll_top = window.scrollY;
           if(scroll_top < 100) {
                nav_autohide.classList.remove('scrolled-down');
                ham_autohide.classList.add('scrolled-down');
            }
            else {
                nav_autohide.classList.add('scrolled-down');
                ham_autohide.classList.remove('scrolled-down');
            }
            last_scroll_top = scroll_top;
      }); 
      // window.addEventListener
    }
    // if
  
}); 
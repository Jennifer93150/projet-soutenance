
// JS POUR BOUTON SCROLL

document.querySelector('.btn-scroll').addEventListener('click',() => {
    document.querySelector('html').style.scrollBehavior='smooth';
    setTimeout(()=>{
        document.querySelector('html').style.scrollBehavior='unset';
    },1000)
});

/* Demo purposes only */
$(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );

// JS POUR BOUTON SCROLL

document.querySelector('.btn-scroll').addEventListener('click',() => {
    document.querySelector('html').style.scrollBehavior='smooth';
    setTimeout(()=>{
        document.querySelector('html').style.scrollBehavior='unset';
    },1000)
});

/*  
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);*/

/** vérification si les 2 mots de passe sont identiques à l'inscription **/

$("#new_user").on('submit', function(){
  if($("#utilisateur_password").val() != $("#verifpass").val()) {
      
      alert("Merci de saisir deux mots de passe identiques");
     
      return false;
  }
})
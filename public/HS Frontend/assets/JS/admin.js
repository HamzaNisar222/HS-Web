// Code for contact btn


// Code for responsive navbar
document.querySelector(".toggle-btns")
.addEventListener("click" , function(){
  var header=document.querySelector(".header");
  var hidden_navbar=document.querySelector(".hidden-menu");
  hidden_navbar.classList.toggle("active");
  header.classList.toggle("active");
});



let table = new DataTable('#myTable', {
    responsive: true,
});

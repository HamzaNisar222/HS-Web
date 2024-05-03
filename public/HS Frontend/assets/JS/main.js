// Code for contact btn
document
.getElementById("contact-btn")
.addEventListener("click", function () {
  var element = document.getElementById("contact-holder");
  element.classList.toggle("contact-active");
});


// Code for responsive navbar
document.querySelector(".toggle-btns")
.addEventListener("click" , function(){
  var header=document.querySelector(".header");
  var hidden_navbar=document.querySelector(".hidden-menu");
  hidden_navbar.classList.toggle("active");
  header.classList.toggle("active");
});

// banner slick slider
$('.image-box').slick({
  infinite: true,
  dots: false,
  arrows:false,
  autoplay:true,
  autoplayspeed:1000,
  slidesToShow: 1,
  slidesToScroll:1,
});

// Brand slider
$('.brand-slider').slick({
    infinite: true,
    dots: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 1000,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024, // Large devices (desktops, 992px and up)
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 768, // Medium devices (tablets, 768px and up)
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 576, // Small devices (landscape phones, 576px and up)
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
});

// Category slider
// Brand slider
$('.category-slider').slick({
    infinite: true,
    dots: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 1000,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024, // Large devices (desktops, 992px and up)
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 768, // Medium devices (tablets, 768px and up)
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 576, // Small devices (landscape phones, 576px and up)
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
});



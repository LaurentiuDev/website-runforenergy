var slideIndex=1;
showSlides(slideIndex);

function plusSlides(n){
    showSlides(slideIndex +=n );
}

function showSlides(n){
    var i;
    var slides=document.getElementsByClassName("slider");
    if(n>slides.length)
    {
        slideIndex=1;
    }
    if(n<1)
    {
        slideIndex=slides.length;
    }

    for(i=0;i<slides.length;i++)
    {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display="block";

}
autoSlide();
function autoSlide()
{
    var i;
    var x=document.getElementsByClassName("slider");
    for(i=0;i<x.length;i++)
    {
        x[i].style.display = "none";
    }

    if(slideIndex>x.length)
    {
        slideIndex=1;
    }

    x[slideIndex-1].style.display = "block";
    slideIndex++;
    setTimeout(autoSlide,4000);
}
window.addEventListener('DOMContentLoaded',() => {
    const popularCourse=document.querySelector('#popular_course'),
          sliderWidth=getComputedStyle(popularCourse).width,
          sliderField=document.querySelector("#popular_course_item"),
          slides=document.querySelectorAll("#popular_course_item .item"),
          prev=document.querySelector("#button-controls .owl-prev"),
          next=document.querySelector("#button-controls .owl-next");

    let a=(+sliderWidth.slice(0,(sliderWidth.length-2))-75)/5;
    let offset=0;

    slides.forEach(slide =>{
        slide.style.width=a + "px";
    });
    popularCourse.style.overflow='hidden';
    sliderField.style.width=(slides.length * (a +15 ))+"px";

    next.addEventListener('click',() => {
        if(offset == (slides.length - 1) * (a +15 ) ){
            offset=0;
        }
        else{
            offset+=(a+15);
        }
        sliderField.style.transform=`translateX(-${offset}px)`;
    })
    prev.addEventListener('click',() => {
        if(offset == 0){
            offset =(slides.length - 1) * (a +15 )
        }
        else{
            offset-=(a+15);
        }
        sliderField.style.transform=`translateX(-${offset}px)`;
    })
})
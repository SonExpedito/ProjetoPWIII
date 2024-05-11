let cardContainers = [...document.querySelectorAll('.media-container')];
let prevBtns = [...document.querySelectorAll('.prev-btn')];
let nxtBtns = [...document.querySelectorAll('.nxt-btn')];

cardContainers.forEach((item,i) =>{
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtns[i].addEventListener('click', () =>{
        item.scrollLeft += containerWidth - 200;
    })

    prevBtns[i].addEventListener('click', () =>{
        item.scrollLeft -= containerWidth +200;
    })
})

import './bootstrap';

let indexupcoming = 1;

// function scrollWin(x, y) {
//     window.scrollBy(x, y);
// }

document.getElementById("viewNews").addEventListener("click", goNews);
document.getElementById("viewStanding").addEventListener("click", goStanding);
document.getElementById("upcomingback").addEventListener("click", upcomingback);
document.getElementById("upcomingnext").addEventListener("click", upcomingnext);

function goNews() {
    window.location.href = "/news";
}
function goStanding() {
    window.location.href = "/standings";
}

function upcomingback() {
    if(indexupcoming != 1) indexupcoming--;
    window.location.href = "?page=" + indexupcoming;
}

function upcomingnext() {
    if(indexupcoming != 4) indexupcoming++;
    window.location.href = "?page=" + indexupcoming;
}

// function changeupcoming(button){
//     console.log('berhasil klik');
//     if(button==0){
//         if(indexupcoming==1) window.location.href = "#upcoming-match1";
//         if(indexupcoming==2) window.location.href = "#upcoming-match2";
//         if(indexupcoming==3) window.location.href = "#upcoming-match3";
//         if(indexupcoming!=0) indexupcoming--;
//     }else if(button==9){
//         if(indexupcoming==0) window.location.href = "#upcoming-match2";
//         if(indexupcoming==1) window.location.href = "#upcoming-match3";
//         if(indexupcoming==2) window.location.href = "#upcoming-match4";
//         if(indexupcoming!=3) indexupcoming++;
//     }

//     setTimeout(() => { scrollWin(0,-1) }, 1000);
// }

const carousel = document.querySelector(".carousel"),
firstImg = carousel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapper i");

let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
    // showing and hiding prev/next icon according to carousel scroll left value
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carousel scroll left else add to it
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
    });
});

const autoSlide = () => {
    // if there is no image left to scroll then return from here
    if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;

    positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
    let firstImgWidth = firstImg.clientWidth + 14;
    // getting difference value that needs to add or reduce from carousel left to take middle img center
    let valDifference = firstImgWidth - positionDiff;

    if(carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
        return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
    }
    // if user is scrolling to the left
    carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}

const dragStart = (e) => {
    // updatating global variables value on mouse down event
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    // scrolling images/carousel to left according to mouse pointer
    if(!isDragStart) return;
    e.preventDefault();
    isDragging = true;
    carousel.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}

const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");

    if(!isDragging) return;
    isDragging = false;
    autoSlide();
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);
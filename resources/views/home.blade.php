@extends('layouts.main')
@include('navbar.navbar')

<div class="body">
    <div class="banner">
        <div class="banner-container">
            <div class="banner-boxslider">
                <div class="banner-boxslider-content">
                    <div class="banner-boxslider-content-title s52" id="slide1">
                        <p>GALATASARAY 0-1 CHELSEA</p>
                        <div class="banner-boxslider-content-all s20">
                            <p>GO TO THE ARTICLE</p>
                            <img src="../assets/landingpage/panahbunder.svg" alt="">
                        </div>
                    </div>
                    <div class="banner-boxslider-content-title s52" id="slide2">
                        <p>INI SLIDE KEDUA YAA</p>
                        <div class="banner-boxslider-content-all s20">
                            <p>GO TO THE ARTICLE</p>
                            <img src="../assets/landingpage/panahbunder.svg" alt="">
                        </div>
                    </div>
                    <div class="banner-boxslider-content-title s52" id="slide3">
                        <p>KALO INI KETIGAA</p>
                        <div class="banner-boxslider-content-all s20">
                            <p>GO TO THE ARTICLE</p>
                            <img src="../assets/landingpage/panahbunder.svg" alt="">
                        </div>
                    </div>
                    <div class="banner-boxslider-content-title s52" id="slide4">
                        <p>NAHH INI BARU KEEMPAT</p>
                        <div class="banner-boxslider-content-all s20">
                            <p>GO TO THE ARTICLE</p>
                            <img src="../assets/landingpage/panahbunder.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="banner-boxslider-nav">
                    <a href="#slide1"></a>
                    <a href="#slide2"></a>
                    <a href="#slide3"></a>
                    <a href="#slide4"></a>
                </div>
                <div class="upcomingmatch">
                    <div class="upcomingmatch-button" onclick="changeupcoming(0)" id="upcomingback"><img src="../assets/landingpage/panahmundur.svg" alt="" class="upcomingmatch-button-icon"></div>

                    <div class="upcoming-boxslider">
                        <div class="upcoming-boxslider-content">
                            <div class="upcoming-boxslider-content-page" id="upcoming-match1">
                                <div class="upcomingmatch-box">
                                    <div class="upcomingmatch-box-content s12">
                                        <img src="../assets/landingpage/logalengkap.svg" alt="" class="upcomingmatch-box-logo">
                                        <div class="upcomingmatch-box-match s32">
                                            <img src="../assets/landingpage/logotim.svg" alt="" class="upcomingmatch-box-match-logo">
                                            <p>VS</p>
                                            <img src="../assets/landingpage/logotim.svg" alt="" class="upcomingmatch-box-match-logo">
                                        </div>
                                        <p class="upcomingmatch-box-desc">MATCHDAY 1 | 22 Mei 14:00</p>
                                        <p class="upcomingmatch-box-end">MATCH CENTER</p>
                                    </div>
                                </div>
                                <div class="upcomingmatch-box"></div>
                                <div class="upcomingmatch-box"></div>
                                <div class="upcomingmatch-box"></div>
                                <div class="upcomingmatch-box"></div>
                            </div>
                            <div class="upcoming-boxslider-content-page" id="upcoming-match2">
                                <div class="upcomingmatch-box"></div>
                                <div class="upcomingmatch-box"></div>
                                <div class="upcomingmatch-box"></div>
                                <div class="upcomingmatch-box"></div>
                                <div class="upcomingmatch-box"></div>
                            </div>
                            <div class="upcoming-boxslider-content-page" id="upcoming-match3">
                                <div class="upcomingmatch-box"></div>
                                <div class="upcomingmatch-box"></div>
                                <div class="upcomingmatch-box"></div>
                                <div class="upcomingmatch-box"></div>
                                <div class="upcomingmatch-box"></div>
                            </div>
                            <div class="upcoming-boxslider-content-page" id="upcoming-match4">
                                <div class="upcomingmatch-box"></div>
                                <div class="upcomingmatch-box"></div>
                                <div class="upcomingmatch-box"></div>
                                <div class="upcomingmatch-box"></div>
                                <div class="upcomingmatch-box"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="upcomingmatch-button" onclick="changeupcoming(9)" id="upcomingnext"><img src="../assets/landingpage/panahmaju.svg" alt="" class="mcicon"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="neswntable">
        <div class="neswntable-left">
            <div class="fixtures">
                <div class="fixtures-title">
                    <p class="fixtures-knob">FIXTURES</p>
                    <div class="fixtures-knob-content">
                        <img src="../assets/landingpage/panahmundur.svg" alt="">
                        <p>MATCHDAY 2</p>
                        <img src="../assets/landingpage/panahmaju.svg" alt="">
                    </div>
                </div>
                <div class="fixtures-content">
                    <div class="fixtures-content-grid">
                        <div class="timmatch jc-end">
                            <p>TOTTENHAM</p>
                            <img src="../assets/landingpage/logotim.svg" alt="" class="timmatch-logo">
                        </div>
                        <div class="fixtures-score">1-2</div>
                        <div class="timmatch">
                            <img src="../assets/landingpage/logotim.svg" alt="" class="timmatch-logo">
                            <p>LIVERPOOL</p>
                        </div>
                    </div>
                    <div class="fixtures-content-grid"></div>
                    <div class="fixtures-content-grid"></div>
                    <div class="fixtures-content-grid"></div>
                    <div class="fixtures-content-grid"></div>
                    <div class="fixtures-content-grid"></div>
                    <div class="fixtures-content-grid"></div>
                    <div class="fixtures-content-grid"></div>
                    <div class="fixtures-content-grid"></div>
                    <div class="fixtures-content-grid"></div>
                    <div class="fixtures-all-content">VIEW ALL FIXTURES</div>
                </div>
            </div>
            <div class="table">
                <div class="table-title s18">TABLE</div>
                <div class="table-header">
                    <div class="table-header-left">
                        <p>POS</p>
                        <p>CLUB</p>
                    </div>
                    <div class="table-header-right">
                        <div class="table-header-content">PTS</div>
                        <div class="table-header-content">G</div>
                        <div class="table-header-content">W</div>
                        <div class="table-header-content">D</div>
                        <div class="table-header-content">L</div>
                        <div class="table-header-content">GD</div>
                    </div>
                </div>
                <div class="table-content">
                    <div class="table-content-left">
                        <p>1</p>
                        <div class="table-content-club">
                            <img src="../assets/landingpage/logotim.svg" alt="" class="table-content-logo">
                            <p>LIVERPOOL</p>
                        </div>
                    </div>
                    <div class="table-header-right">
                        <div class="table-header-content">86</div>
                        <div class="table-header-content">36</div>
                        <div class="table-header-content">27</div>
                        <div class="table-header-content">5</div>
                        <div class="table-header-content">4</div>
                        <div class="table-header-content">47</div>
                    </div>
                </div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-all-content">VIEW ALL TABLES</div>
            </div>
        </div>
        <div class="akanan">
            <div class="akanama s48">
                <p>NEWS</p>
                <div class="vial s20">
                    <p>VIEW ALL</p>
                    <img src="../assets/landingpage/vial.svg" alt="">
                </div>
            </div>
            <div class="akafull">
                <div class="imagebox">
                    <img src="../assets/landingpage/fot1.png" alt="gambar" class="foto">
                </div>
                <p class="judul s20">LOREM IPSUM DOLOR SIT AMET</p>
                <p class="tanggal s14">20 Mei 2023</p>
            </div>
            <div class="akabawah">
                <div class="bag1">
                    <div class="card">
                        <div class="imagebox2">
                            <img src="../assets/landingpage/fot2.jpg" alt="gambar" class="foto2">
                        </div>
                        <p class="judul s16">LOREM IPSUM DOLOR SIT AMET</p>
                        <p class="tanggal s12">20 Mei 2023</p>
                    </div>
                    <div class="card">
                        <div class="imagebox2">
                            <img src="../assets/landingpage/fot2.jpg" alt="gambar" class="foto2">
                        </div>
                        <p class="judul s16">LOREM IPSUM DOLOR SIT AMET</p>
                        <p class="tanggal s12">20 Mei 2023</p>
                    </div>
                </div>
                <div class="bag1"><div class="card"></div><div class="card"></div></div>
                <div class="bag1"><div class="card"></div><div class="card"></div></div>
            </div>
        </div>
    </div>
    <div class="highlightngallery">
        <div class="highlight s20">
            <div class="highlightnav">
                <p class="mont s40">HIGHLIGHTS</p>
                <div class="highlightnav-right">
                    <p>VIEW ALL</p>
                    <img src="../assets/landingpage/panahmajubuletbiru.svg" alt="">
                </div>
            </div>
            <div class="highlightcontent">
                <div class="highlightcontent-card">
                    <div class="bluebox">
                        <img src="../assets/landingpage/highlight1.png" alt="">
                        <div class="highlightcontent-skor">
                            <p>AL-NASSR</p>
                            <p class="sec1">2</p>
                        </div>
                        <div class="highlightcontent-skor">
                            <p>AL-HILAL</p>
                            <p class="sec1">1</p>
                        </div>
                        <p class="highlightcontent-end s14 fw500">MATCHDAY</p>
                    </div>
                </div>
                <div class="highlightcontent-card"><div class="bluebox"></div></div>
                <div class="highlightcontent-card"><div class="bluebox"></div></div>
                <div class="highlightcontent-card"><div class="bluebox"></div></div>
            </div>
        </div>
        <div class="gallery s20">
            <div class="highlightnav">
                <p class="mont s40">PHOTO GALLERY</p>
                <div class="highlightnav-right">
                    <p>VIEW ALL</p>
                    <img src="../assets/landingpage/panahmajubuletbiru.svg" alt="">
                </div>
            </div>
            <div class="gallerycontent">
                <div class="wrapper">
                    <i id="left" class="fa-solid fa-angle-left"></i>
                    <div class="carousel">
                      <img src="../assets/landingpage/gal-1.png" alt="img" draggable="false">
                      <img src="../assets/landingpage/gal-2.png" alt="img" draggable="false">
                      <img src="../assets/landingpage/gal-3.png" alt="img" draggable="false">
                      <img src="../assets/landingpage/gal-1.png" alt="img" draggable="false">
                      <img src="../assets/landingpage/gal-2.png" alt="img" draggable="false">
                      <img src="../assets/landingpage/gal-3.png" alt="img" draggable="false">
                      <img src="../assets/landingpage/gal-1.png" alt="img" draggable="false">
                      <img src="../assets/landingpage/gal-2.png" alt="img" draggable="false">
                      <img src="../assets/landingpage//gal-3.png" alt="img" draggable="false">
                    </div>
                    <i id="right" class="fa-solid fa-angle-right"></i>
                  </div>
            </div>
        </div>
    </div>
    <script src="../js/app.js"></script>
    <script>
        let upcomingback = document.getElementById("upcomingback");
let upcomingnext = document.getElementById("upcomingnext");
let upcoming1 = document.getElementById("upcoming-match1");
let upcoming2 = document.getElementById("upcoming-match2");
let upcoming3 = document.getElementById("upcoming-match3");
let upcoming4 = document.getElementById("upcoming-match4");
let indexupcoming = 0;

function scrollWin(x, y) {
    window.scrollBy(x, y);
}

function changeupcoming(button){
    console.log('berhasil klik');
    if(button==0){
        if(indexupcoming==1) window.location.href = "#upcoming-match1";
        if(indexupcoming==2) window.location.href = "#upcoming-match2";
        if(indexupcoming==3) window.location.href = "#upcoming-match3";
        if(indexupcoming!=0) indexupcoming--;
    }else if(button==9){
        if(indexupcoming==0) window.location.href = "#upcoming-match2";
        if(indexupcoming==1) window.location.href = "#upcoming-match3";
        if(indexupcoming==2) window.location.href = "#upcoming-match4";
        if(indexupcoming!=3) indexupcoming++;
    }

    setTimeout(() => { scrollWin(0,-1) }, 1000);
}

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
    </script>
</div>

@include('footer.footer')


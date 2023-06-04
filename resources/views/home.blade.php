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
                                        @foreach ($pertandingans as $ps)
                                        <div class="upcomingmatch-box-match s32">
                                            <img src="{{'../assets/teamLogo/logotim.svg'.$ps->logo_home_tim}}" alt="" class="upcomingmatch-box-match-logo">
                                            <p>VS</p>
                                            <img src="{{'../assets/teamLogo/logotim.svg'.$ps->logo_away_tim}}" alt="" class="upcomingmatch-box-match-logo">
                                        </div>
                                        <p class="upcomingmatch-box-desc">MATCHDAY {{$ps->matchday}} | {{$ps->tanggal}} {{$ps->jam}}</p>
                                        @endforeach
                                        <p class="upcomingmatch-box-end">MATCH CENTER</p>
                                    </div>
                                </div>
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
                            <img src="../assets/teamLogo/logotim.svg" alt="" class="timmatch-logo">
                        </div>
                        <div class="fixtures-score">1-2</div>
                        <div class="timmatch">
                            <img src="../assets/teamLogo/logotim.svg" alt="" class="timmatch-logo">
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
                @php($i = 1)
                @foreach ($tims as $t)
                    <div class="table-content">
                        <div class="table-content-left">
                            <p  class="table-content-left-index">{{ $i++ }}</p>
                            <div class="table-content-club">
                                <img src="{{'../assets/teamLogo/'.$t->logo_tim}}" alt="" class="table-content-logo">
                                <p>{{ $t->nama_tim }}</p>
                            </div>
                        </div>
                        <div class="table-header-right">
                            <div class="table-header-content">{{ $t->getPoin() }}</div>
                            <div class="table-header-content">{{ $t->getGame()}}</div>
                            <div class="table-header-content">{{ $t->menang}}</div>
                            <div class="table-header-content">{{ $t->seri}}</div>
                            <div class="table-header-content">{{ $t->kalah}}</div>
                            <div class="table-header-content">{{ $t->getGD()}}</div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div> --}}
                {{-- <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div>
                <div class="table-content"></div> --}}
                <a class="table-all-content" href="/standings">VIEW ALL TABLES</a>
            </div>
        </div>
        <div class="akanan">
            <div class="akanama s48 fw700">
                <p>NEWS</p>
                <div class="vial s20">
                    <p>VIEW ALL</p>
                    <img src="../assets/landingpage/vial.svg" alt="">
                </div>
            </div>
            <div class="akafull">
                <div class="imagebox">
                    <img src="../assets/landingpage/" alt="gambar" class="foto">
                </div>
                <p class="judul s20">INI BELUM DIKONSUM</p>
                <p class="tanggal s14">ARIZ TOLONG YAA AKU GATAU PAKE IF ELSE NYA</p>
            </div>
            @foreach ($posts as $p)
            <div class="akabawah">
                <div class="bag1">
                    <div class="card">
                        <div class="imagebox2">
                            <img src={{"../assets/landingpage/".$p->gambar_berita}} alt="gambar" class="foto2">
                        </div>
                        <p class="judul s16">{{$p->judul}}</p>
                        <p class="tanggal s12">{{$p->tgl_publikasi}} TES</p>
                    </div>
                </div>
            </div>
            @endforeach
                    {{-- <div class="card">
                        <div class="imagebox2">
                            <img src="../assets/landingpage/fot2.jpg" alt="gambar" class="foto2">
                        </div>
                        <p class="judul s16">LOREM IPSUM DOLOR SIT AMET</p>
                        <p class="tanggal s12">20 Mei 2023</p>
                    </div>
                <div class="bag1"><div class="card"></div><div class="card"></div></div>
                <div class="bag1"><div class="card"></div><div class="card"></div></div> --}}
        </div>
    </div>
    <div class="highlightngallery">
        <div class="highlight s20">
            <div class="highlightnav">
                <p class="mont s40">HIGHLIGHTS</p>
                <div class="highlightnav-right">
                    <a href="/highlights">VIEW ALL</a>
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
</div>

@include('footer.footer')


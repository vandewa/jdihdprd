 <div class="col-lg-3">
     <!-- Sticky Block Start Point -->
     <div id="stickyBlockStartPoint"></div>
     <div class="js-sticky-block"
         data-hs-sticky-block-options='{
                                "parentSelector": "#stickyBlockStartPoint",
                                "breakpoint": "lg",
                                "startPoint": "#stickyBlockStartPoint",
                                "endPoint": "#stickyBlockEndPoint",
                                "stickyOffsetTop": 40,
                                "stickyOffsetBottom": 20
                            }'>
         <div class="mb-7">
             <div class="mb-2">
                 <h3>Cari Berita</h3>
             </div>

             <form class="mb-3 input-group input-group-sm input-group-merge input-group-flush" action="/search"
                 method="get">

                 <input name="q" type="search" class="form-control" placeholder="Masukkan kata kunci"
                     aria-label="Search articles" aria-describedby="searchLabel">
                 <div class="input-group-append">
                     <div class="input-group-text" id="searchLabel">
                         <button type="submit" class="no-border btn-transparent"><i class="fas fa-search"></i></button>
                     </div>
                 </div>
             </form>

         </div>

         <div class="mb-3 overflow-hidden position-relative"
             style="background: rgb(2,0,36);
         background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,121,20,1) 0%, rgb(4, 198, 85) 100%);">
             <div class="text-left position-relative">
                 <h3 class="container text-center text-white font-weight-semi-bold ">PENGADUAN
                 </h3>
             </div>
             <!-- SVG Shapes -->
             <figure class="mb-n1">
                 <svg class="top-0 bottom-0 right-0 position-absolute h-100" xmlns="http://www.w3.org/2000/svg" x="0px"
                     y="0px" viewBox="0 0 100.1 1920" height="100%">
                     <path fill="#fff" d="M0,1920c0,0,93.4-934.4,0-1920h100.1v1920H0z" />
                 </svg>
             </figure>
             <!-- End SVG Shapes -->
         </div>

         <section id="my-keyboards" data-aos="zoom-out-right" class="mb-3">
             <div class="container">
                 <div class="row">
                     <div class="mb-3 col-md-12 col-lg-12">
                         <a href="https://laporbupati.wonosobokab.go.id" target="_blank">
                             <img class="mx-auto card-img transition-zoom-hover min-w-15rem min-w-md-15rem"
                                 src="{{ asset('laporv.gif') }}">
                         </a>
                     </div>
                     {{-- <div class="mb-3 col-md-12 col-lg-12">
                         <a href="tel:112" target="_blank">
                             <img class="mx-auto card-img transition-zoom-hover min-w-15rem min-w-md-15rem"
                                 src="{{ asset('front/assets/images/callcenter.gif') }}">
                         </a>
                     </div> --}}
                 </div>
             </div>
         </section>

         <div class="mb-3 overflow-hidden position-relative"
             style="background: rgb(2,0,36);
         background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,121,20,1) 0%, rgb(4, 198, 85) 100%);">
             <div class="text-left position-relative">
                 <h3 class="container text-center text-white font-weight-semi-bold ">SOSIAL
                     MEDIA</h3>
             </div>
             <!-- SVG Shapes -->
             <figure class="mb-n1">
                 <svg class="top-0 bottom-0 right-0 position-absolute h-100" xmlns="http://www.w3.org/2000/svg" x="0px"
                     y="0px" viewBox="0 0 100.1 1920" height="100%">
                     <path fill="#fff" d="M0,1920c0,0,93.4-934.4,0-1920h100.1v1920H0z" />
                 </svg>
             </figure>
             <!-- End SVG Shapes -->
         </div>

         <section id="my-keyboards" data-aos="zoom-out-right">
             <div class="container">
                 <div class="row">
                     <div class="mb-3 col-md-12 col-lg-12">
                         <a href="https://www.instagram.com/diskominfo_wonosobo/" target="_blank">
                             <div class="keyboard-box4">
                                 <img src="front/assets/images/instagram.png" class="keyboard-img" />
                                 <h2 class="keyboard-tulisan">INSTAGRAM</h2>
                             </div>
                         </a>
                     </div>
                     <div class="mb-3 col-md-12 col-lg-12">
                         <a href="https://www.youtube.com/channel/UCZqWOVA_3o7A2bqY4ywZn8Q" target="_blank">
                             <div class="keyboard-box1">
                                 <img src="front/assets/images/youtube.png" class="keyboard-img" />
                                 <h2 class="ml-2 keyboard-tulisan1">YOUTUBE</h2>
                             </div>
                         </a>
                     </div>
                     <div class="mb-3 col-md-12 col-lg-12">
                         <a href="https://www.facebook.com/diskominfowonosobo" target="_blank">
                             <div class="keyboard-box2">
                                 <img src="front/assets/images/fb.png" class="keyboard-img" />
                                 <h2 class="ml-2 keyboard-tulisan">FACEBOOK</h2>
                             </div>
                         </a>
                     </div>
                     <div class="mb-3 col-md-12 col-lg-12">
                         <a href="https://twitter.com/diskominfo_wsb" target="_blank">
                             <div class="keyboard-box3">
                                 <img src="front/assets/images/twitter.png" class="keyboard-img" />
                                 <h2 class="ml-2 keyboard-tulisan1">TWITTER</h2>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>
         </section>
     </div>
 </div>

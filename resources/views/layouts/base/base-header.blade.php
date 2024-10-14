 <!-- start header -->
 <header>
     <!-- start navigation -->
     <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse glass-effect"
         data-header-hover="light">
         <div class="container-fluid">
             <div class="col-auto col-xxl-3 col-lg-2 me-lg-0 me-auto">
                 <a class="navbar-brand" href="/">
                     <img src="{{ asset('storage/images/logo/teresa_full_logo_dark.png') }}"
                         data-at2x="images/demo-it-business-logo-white@2x.png" alt="" class="default-logo">
                     <img src="{{ asset('storage/images/logo/teresa_full_logo.png') }}"
                         data-at2x="images/demo-it-business-logo-black@2x.png" alt="" class="alt-logo">
                     <img src="{{ asset('storage/images/logo/teresa_logo.png') }}"
                         data-at2x="images/demo-it-business-logo-black@2x.png" alt="" class="mobile-logo">
                 </a>
             </div>
             <div class="col-auto col-xxl-6 col-lg-8 menu-order position-static">
                 <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                     data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                     <span class="navbar-toggler-line"></span>
                     <span class="navbar-toggler-line"></span>
                     <span class="navbar-toggler-line"></span>
                     <span class="navbar-toggler-line"></span>
                 </button>
                 <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                     <ul class="navbar-nav">
                         <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                         {{-- <li class="nav-item"><a href="/" class="nav-link">About</a></li> --}}
                         <li class="nav-item dropdown dropdown-with-icon-style02">
                             <a href="#" class="nav-link">Services</a>
                             <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink"
                                 role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                             <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                 <li><a target="_blank" rel="noopener noreferrer"
                                         href="{{ route('filament.fuse.home') }}"><img style="width: 16px;height:16px;"
                                             src="{{ asset('storage/images/logo/teresa_fuse_logo.png') }}">Fuse</a></li>
                                 <li><a target="_blank" rel="noopener noreferrer"
                                         href="{{ route('filament.beverly.tenant') }}"><img
                                             style="width: 16px;height:16px;"
                                             src="{{ asset('storage/images/logo/teresa_beverly_logo.png') }}">Beverly</a>
                                 </li>
                                 <li><a target="_blank" rel="noopener noreferrer"
                                         href="{{ route('filament.falcon.tenant') }}"><img
                                             style="width: 16px;height:16px;"
                                             src="{{ asset('storage/images/logo/teresa_falcon_logo.png') }}">Falcon</a>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item"><a href="demo-it-business-contact.html" class="nav-link">Contact</a>
                         </li>
                     </ul>
                 </div>
             </div>
             @auth
                 <div class="col-auto col-xxl-3 col-lg-2 text-end d-none d-sm-flex">
                     <div class="header-icon">
                         <div class="header-button"><a href="#"
                                 class="btn btn-large btn-transparent-white-light btn-rounded text-transform-none border-1">{{ auth()->user()->name }}</a>
                         </div>
                     </div>
                 </div>
             @endauth

         </div>
     </nav>
     <!-- end navigation -->
 </header>
 <!-- end header -->

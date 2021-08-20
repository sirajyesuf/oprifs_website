   <!-- Navbar STart -->
   <header id="topnav" class="defaultscroll sticky">
       <div class="container">
           <!-- Logo container-->
           <a class="logo float-md-start " href="/">
               <img src="{{asset('oprifs_img/logo6.png')}}" class="" height="100" alt="">
           </a>
           <!-- End Logo container-->
           <div class="menu-extras">
               <div class="menu-item">
                   <!-- Mobile menu toggle-->
                   <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                       <div class="lines">
                           <span></span>
                           <span></span>
                           <span></span>
                       </div>
                   </a>
                   <!-- End mobile menu toggle-->
               </div>
           </div>

           <div id="navigation">
               <!-- Navigation Menu-->
               <ul class="navigation-menu">
                   <li onclick="toggleMenu()">
                       <a href="/" class="sub-menu-item">Home</a>
                   </li>
                   <li onclick="toggleMenu()">
                       <a href="/#news" class="sub-menu-item">News</a>
                   </li>
                   <li onclick="toggleMenu()">
                       <a href="/#gallery" class="sub-menu-item">Gallery</a>
                   </li>
                   <li onclick="toggleMenu()">
                       <a href="/#overallgoal" class="sub-menu-item">Our Goal</a>
                   </li>

               </ul>
               <!--end navigation menu-->
           </div>
           <!--end navigation-->
       </div>
       <!--end container-->
   </header>
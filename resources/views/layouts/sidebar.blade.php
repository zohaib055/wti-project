 <div class="sidebar-menu">
        
            
        <header class="logo-env">
            
            <!-- logo -->
            <div class="logo">
                <a href="/">
                    <img src="{{ asset( 'assets/images/logo@2x.png')}}" width="160" height="53" alt="" />
                </a>
            </div>
            
                        <!-- logo collapse icon -->
                        
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
            
                                    
            
            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
            
        </header>
                
        
        
                
        
                
        <ul id="main-menu" class="">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            <!-- Search Bar -->

            @section("menu")
           
                @include("layouts.menu")

            @show
            
        </ul>
                
    </div>
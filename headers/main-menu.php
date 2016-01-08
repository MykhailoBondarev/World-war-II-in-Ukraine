        <nav class="container">
            <div  class="hidden-xs col-sm-4 col-md-4 col-lg-4"> <!-- id="main-menu" -->
                <div id="search-btn" class="search-btn"><div></div></div>
            </div>
            <form role="search" method="get" action="http://war2.lemon.ua/" class="search-form up-search-form">
                <input type="search" class="search-field search-box" placeholder="Що Ви шукаєте?" name="s">              
            </form>
            <a href="<?php bloginfo('url'); ?>" class="col-xs-4 col-sm-3 col-md-4 col-lg-4">
                <span class="logo"></span>
            </a>
            <div id="main-menu" class=" col-xs-6 col-sm-5 col-md-4 col-lg-4">
                <div>  
                    <div id="menu-btn" class="menu-btn" title="Меню"><div></div></div>
                </div>
                <div>   
                   <div id="maki-btn" class="maki-btn" title="Зроби мак пам'яті"><div></div></div>          
                </div>
                <?php  if (is_home()) {?>
                    <div id="mute-btn" class="unmute-btn"><div></div></div>
                <?php  } ?>          
            </div>
        </nav>
    </header>


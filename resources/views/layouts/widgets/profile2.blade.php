 <!-- Raw Links -->
    <div class="col-md-6 col-sm-4 clearfix hidden-xs">
        
        <ul class="list-inline links-list pull-right">
            
            <!-- Language Selector -->          <li class="dropdown language-selector">
                
                Language: &nbsp;
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                    <img src="{{ asset( 'assets/images/flag-uk.png')}}" />
                </a>
                
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="#">
                            <img src="{{ asset( 'assets/images/flag-de.png')}}" />
                            <span>Deutsch</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            <img src="{{ asset( 'assets/images/flag-uk.png')}}" />
                            <span>English</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset( 'assets/images/flag-fr.png')}}" />
                            <span>François</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset( 'assets/images/flag-al.png')}}" />
                            <span>Shqip</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset( 'assets/images/flag-es.png')}}" />
                            <span>Español</span>
                        </a>
                    </li>
                </ul>
                
            </li>
            
            <li class="sep"></li>
            

            
            <li class="sep"></li>
            
            <li>
                <a href="{{ route('logout') }}" 

                     onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                     
                    Log Out <i class="entypo-logout right"></i>
                </a>
            </li>
        </ul>
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           {{ csrf_field() }}
        </form>
    </div>
    
 <li id="search">
     <form method="get" action="">
        <input type="text" name="q" class="search-input" placeholder="Search something..."/>
        <button type="submit">
            <i class="entypo-search"></i>
        </button>
    </form>
</li>
<li class="active opened active">
    <a href="#">
        <i class="entypo-gauge"></i>
        <span>Dashboard</span>
    </a>
</li>
<li>
<a href="#">
    <i class="entypo-layout"></i>
    <span>Plot Management</span>
</a>
<ul>
<li class=" ">
    <a href="{{route('plots.create')}}">
        <span><i class="entypo-dot"></i>Register A Member</span>
    </a>
</li>
<li class=" ">
    <a href="{{route('plots.index')}}">
        <span><i class="entypo-dot"></i>Registered Member's</span>
    </a>
</li>

</ul>
</li>
<li class=" ">
    <a href="#">
        <i class="entypo-lifebuoy"></i>
        <span>Settings</span>
    </a>
    <ul>
        <li class=" ">
            <a href="{{route('change-password')}}">
                <span><i class="entypo-dot"></i>Change Password</span>
            </a>
        </li>
        
    </ul>
</li>
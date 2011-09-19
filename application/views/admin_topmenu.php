<body>
    <div id="wrapper">
        <header>
            <div class="container_8 clearfix">
                <h1 class="grid_1"><a href="/admin/">MyCMS</a></h1>
                <nav class="grid_5">
                    <ul class="clearfix">                        
                        <li class="active"><a href="/admin/">Dashboard</a></li>
                        <li><a href="#">Profile</a></li>
                        <li class="fr"><a href="#"><?=$user_name?><span class="arrow-down"></span></a>
                            <ul>                                
                                <li><a href="/login/logout">Sign out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <form class="grid_2">
                    <input class="full" type="text" placeholder="Search..." />
                </form>
            </div>
        </header>

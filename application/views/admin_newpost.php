<body>
    <div id="wrapper">
        <header>
            <div class="container_8 clearfix">
                <h1 class="grid_1"><a href="/admin/">MyCMS</a></h1>
                <nav class="grid_5">
                    <ul class="clearfix">                        
                        <li class="active"><a href="/admin/">Dashboard</a></li>
                        <li><a href="#">Profile</a></li>
                        <li class="fr"><a href="#">administrator<span class="arrow-down"></span></a>
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
        
        <section>
            <div class="container_8 clearfix">

                <!-- Sidebar -->

                <aside class="grid_1">

                    <nav class="global">
                        <ul class="clearfix">
                            <li><a class="nav-icon icon-house" href="/admin/">Overview</a></li>
                            <li><a class="nav-icon icon-time" href="/admin/posts/">Posts</a></li>
                            <li class="active"><a class="nav-icon icon-note" href="/admin/newpost/">New Post</a></li>
                        </ul>
                    </nav>                    
                </aside>

                <!-- Sidebar End -->
                

                <!-- Main Section -->

                <section class="main-section grid_7">

                    <div class="main-content">
                        <header>                            
                            <h2>
                                New post
                            </h2>
                        </header>
                        <section class="container_6 clearfix">                            
                          
                            <div class="grid_6">
                                <p>
                                    <a class="modalInput button button-blue" rel="#prompt">Add new category</a>
                                </p>
                                <form id="form" class="form2 grid_6">
                                    <label>Timezone<small>Your timezone</small></label><select><option>America/Los Angeles</option><option>America/New York</option><option>Asia/Manila</option></select>
                                    <label>Title <em>*</em><small>Enter post title</small></label><input type="text" name="name" required="required" />
                                    <div class="clear1"></div>
                                    <label>Post <em>*</em><small>Enter post content</small></label>
                                    <div class="clear2"></div>
                                    <textarea id="newpost" name="newpost" required="required" ></textarea>
                                    <div class="clear3"></div>
                                    <div class="action">
                                        <button class="button button-gray" type="submit"><span class="add"></span>Save</button>
                                        <button class="button button-gray" type="submit"><span class="accept"></span>Publish</button>
                                        <button class="button button-gray" type="reset"><span class="cancel"></span>Reset</button>
                                    </div>
                                </form>
                                
                            </div>
                        </section>
                    </div>

                </section>

                <!-- Main Section End -->

            </div>
            <div id="push"></div>
        </section>
        
        <div class="widget modal" id="prompt">
         <header><h2>This is a modal dialog</h2></header>
         <section>
             <p>
                 You can only interact with elements that are inside this dialog.
                 To close it click a button or use the ESC key.
             </p>

             <!-- input form. you can press enter too -->
             <form>
                 <input type="text" />
                 <hr />
                 <button class="button button-gray" type="submit">OK</button>
                 <button class="button button-gray close" type="button">Cancel</button>
             </form>
         </section>
        </div>
        
    </div>   

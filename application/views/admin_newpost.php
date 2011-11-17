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
                                <form id="form" class="form grid_6" method="post" >
                                    <label>Categories<small>Also known as tags</small></label><input type="text" id="add_post_categories" name="post_categories" value="" readonly />
                                    <label>Title <em>*</em><small>Enter post title</small></label><input type="text" id="add_post_title" name="post_title" required="required"/>
                                    <label>Url <em>*</em><small>Enter post url</small></label><input type="text" id="add_post_url" name="post_url" required="required"/>                                    
                                    <div class="clear1"></div>
                                    <label>Content <em>*</em><small>Enter post content</small></label>
                                    <div class="clear2"></div>
                                    <textarea id="post_content" name="post_content" required="required"></textarea>
                                    <div class="clear3"></div>
                                    <div class="action">
                                        <button class="button button-gray" name="save" type="submit"><span class="add"></span>Save</button>
                                        <button class="button button-gray" name="publish" type="submit"><span class="publish"></span>Publish</button>
                                        <button class="button button-gray" name="reset" id="reset" type="reset"><span class="reload"></span>Reset</button>
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
                 <input type="text" id="post_new_category" name="post_new_category"/>
                 <hr />
                 <button class="button button-gray" type="submit">OK</button>
                 <button class="button button-gray close" type="button">Cancel</button>
             </form>
         </section>
        </div>
        
    </div>   

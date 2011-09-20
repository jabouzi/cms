               <!-- Main Section -->

                <section class="main-section grid_7">

                    <div class="main-content">
                        <header>                            
                            <h2>
                                Edit post
                            </h2>
                        </header>
                        <section class="container_6 clearfix">                            
                            <div class="message error" style="display:none">
                                <h3>Error!</h3>
                                <p id="error_message">                                    
                                </p>
                            </div>
                            <div class="message success" style="display:none">
                                <h3>Success!</h3>
                                <p id="success_message">                                    
                                </p>
                            </div>
                            <div class="grid_6">
                                <p>
                                    <a class="modalInput button button-blue" rel="#prompt">Add new category</a>
                                </p>
                                <form id="form" class="form grid_6">
                                    <label>Category<small>Edit category</small></label><select><option>America/Los Angeles</option><option>America/New York</option><option>Asia/Manila</option></select>
                                   <label>Title <em>*</em><small>Edit post title</small></label><input type="text" id="post_title" name="post_title" required="required" />
                                    <label>Url <em>*</em><small>Edit post url</small></label><input type="text" id="post_url" name="post_url" required="required" />
                                    <div class="clear1"></div>
                                    <label>Content <em>*</em><small>Edit post content</small></label>
                                    <div class="clear2"></div>
                                    <textarea id="post_content" name="post_content" required="required" ></textarea>
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
                 <input type="text" id="post_category"/>
                 <hr />
                 <button class="button button-gray" type="submit">OK</button>
                 <button class="button button-gray close" type="button">Cancel</button>
             </form>
         </section>
        </div>
        
    </div>   

               <!-- Main Section -->

                <section class="main-section grid_7">

                    <div class="main-content">
                        <header>                            
                            <h2>
                                Edit post
                            </h2>
                        </header>
                        <section class="container_6 clearfix">
                            <?if ($save == 'error') :?>
                                <div id="display_message" class="message error">
                                    <h3>Error!</h3>
                                    <p id="error_message">
                                        An error occured during the post update.                                
                                    </p>
                                </div>
                            <?elseif ($save == 'success') :?>                         
                                <div id="display_message" class="message success">
                                    <h3>Success!</h3>
                                    <p id="success_message">
                                        The post was updated with success.
                                    </p>
                                </div>
                            <?endif?>
                            <div class="grid_6">
                                <p>
                                    <a class="modalInput button button-blue" rel="#prompt">Add new category</a>
                                </p>
                                <form id="form" class="form grid_6" method="post">
                                    <label>Categories<small>Also known as tags</small></label>
                                    <select id="post_categories" name="post_categories[]" multiple="multiple" size="2" style="width:265px;">
                                        <?foreach($tags as $tag):?>
                                            <?$selected = '';?>
                                            <?if (in_array($tag->tag_id, $post_tags)) $selected = 'selected';?>
                                            <option value="<?=$tag->tag_id?>" <?=$selected?> ><?=$tag->tag_name?></option>                                        
                                        <?endforeach?>
                                    </select>      
                                    <label>Title <em>*</em><small>Edit post title</small></label><input type="text" id="edit_post_title" name="post_title" required="required" value="<?=$post[0]->post_title?>" />
                                    <label>Url <em>*</em><small>Edit post url</small></label><input type="text" id="edit_post_url" name="post_url" required="required" value="<?=$post[0]->post_custom_url?>" />
                                    <div class="clear1"></div>
                                    <label>Content <em>*</em><small>Edit post content</small></label>
                                    <div class="clear2"></div>
                                    <textarea id="post_content" name="post_content" required="required" ><?=$post[0]->post_content?></textarea>
                                    <div class="clear3"></div>
                                    <div class="action">
                                        <button class="button button-gray" name="save" type="submit"><span class="add"></span>Save</button>
                                        <button class="button button-gray" name="<?=strtolower($next_status)?>" type="submit"><span class="<?=strtolower($next_status)?>"></span><?=ucfirst($next_status)?></button>
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
                 <input type="text" id="post_category"/>
                 <hr />
                 <button class="button button-gray close" id="add_category_button" type="submit">OK</button>
                 <button class="button button-gray close" type="button">Cancel</button>
             </form>
         </section>
        </div>
        
    </div>   

                <!-- Main Section -->

                <section class="main-section grid_7">

                    <div class="main-content grid_3 alpha">
                        <header>
                            <ul class="action-buttons clearfix fr">
                            </ul>
                                <h2>Posts categories <a href="#"></a></h2>                                
                        </header>
                        <section>
							<p>
                                <a class="modalInput button button-blue" rel="#prompt2">Add new category</a>
                            </p>

                            <ul id="categories" class="listing list-view clearfix">
                                <?foreach($categories as $category):?>
                                <li class="category clearfix">                                    
                                    <span class="timestamp">
                                        <a style="cursor: pointer;" id="delete_category_<?=$category->category_id?>"><img src="<?=base_url()?>public/images/icons/delete.png" /></a>
                                    </span>
                                    <span id="<?=$category->category_id?>" class="edit_category editable name"><?=$category->category_name?></span>
                                </li>
                                <?endforeach?>                     
                            </ul>
                            <?/*
                            <ul class="pagination clearfix">
                                <li><a href="#" class="button-blue">&laquo;</a></li>
                                <li><a href="#" class="current button-blue">1</a></li>
                                <li><a href="#" class="button-blue">2</a></li>
                                <li><a href="#" class="button-blue">3</a></li>
                                <li><a href="#" class="button-blue">&raquo;</a></li>
                            </ul>  
                            */?>                          
                        </section>
                    </div>

                    <div class="preview-pane grid_4 omega">
                        <div class="content">
                            <div class="message info" id="info">
                                <h3>Helpful Tips</h3>
                                <img src="<?=base_url()?>public/images/lightbulb_32.png" class="fl" />
                                <p>Phasellus at sapien eget sapien mattis porttitor. Donec ultricies turpis pulvinar enim convallis egestas. Pellentesque egestas luctus mattis. Nulla eu risus massa, nec blandit lectus. Aliquam vel augue eget ante dapibus rhoncus ac quis risus.</p>
                            </div>
                            <div id="form" class="form grid_3" style="display:none">
                                <fieldset>
                                    <legend>Category informations</legend>
                                    <label>Category title <em>*</em><small>Enter a title</small></label><input type="text" name="name" ID="category_name" required="required" />
                                    <label>Add to menu <small>Checke it if yes</small></label><input type="checkbox" id="category_active" name="category_active" value="1"/>
                                    <label>Parent Category <small>Select a category</small></label>
                                    <select id="parent_category" name="parent_category">
                                        <option id="cat_0">Select a category parent</option>
                                        <?foreach($categories as $category):?>
                                            <option class="category_opt" value="<?=$category->category_id?>" id="cat_<?=$category->category_id?>"><?=$category->category_name?></option>
                                        <?endforeach?>        
                                    </select>
                                    <div class="action">
                                        <button class="button button-gray" onclick="save_category_infos()"><span class="accept"></span>OK</button>
                                        <button class="button button-gray" onclick="get_category_infos()">Reset</button>
                                        <input type="hidden" value="" id="category_id" />
                                    </div>
                                </fieldset>
                            </div>                            
                        </div>                        
                    </div>

                </section>

                <!-- Main Section End -->
                
                <div class="widget modal" id="prompt2">
                 <header><h2>This is a modal dialog</h2></header>
                 <section>
                     <p>
                         You can only interact with elements that are inside this dialog.
                         To close it click a button or use the ESC key.
                     </p>

                     <!-- input form. you can press enter too -->
                     
                         <input type="text" id="post_new_category" name="post_new_category"/>
                         <hr />
                         <button class="button button-gray close" id="add_category_button" type="submit">OK</button>
                         <button class="button button-gray close" type="button">Cancel</button>
                   
                 </section>
                </div>


            </div>
            <div id="push"></div>
        </section>        
    </div>

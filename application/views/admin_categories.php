                <!-- Main Section -->

                <section class="main-section grid_7">

                    <div class="main-content grid_4 alpha">
                        <header>
                            <ul class="action-buttons clearfix fr">
                                <li><a href="#" class="button button-gray no-text current" title="View as a List" onclick="$(this).addClass('current').parent().siblings().find('a').removeClass('current');$('#contacts').removeClass('grid-view').addClass('list-view');return false;"><span class="view-list"></span></a></li>
                                <li><a href="#" class="button button-gray no-text" title="View as a Grid" onclick="$(this).addClass('current').parent().siblings().find('a').removeClass('current');$('#contacts').removeClass('list-view').addClass('grid-view');return false;"><span class="view-grid"></span></a></li>
                            </ul>
                                <h2>Posts categories <a href="#"></a></h2>                                
                        </header>
                        <section>
                            <ul id="categories" class="listing list-view clearfix">
                                <?foreach($tags as $tag):?>
                                <li class="category clearfix">                                    
                                    <span class="timestamp">
                                        <a href="#" id="delete_tag_<?=$tag->tag_id?>"><img src="<?=base_url()?>public/images/icons/delete.png" /></a>
                                        <a href="#" id="save_tag_<?=$tag->tag_id?>" style="display:none"><img src="<?=base_url()?>public/images/icons/disk.png" /></a>
                                    </span>
                                    <span onclick="editTag('<?=$tag->tag_id?>')" class="editable name" id="<?=$tag->tag_id?>"><?=$tag->tag_name?></span>
                                </li>
                                <?endforeach?>                     
                            </ul>
                            <ul class="pagination clearfix">
                                <li><a href="#" class="button-blue">&laquo;</a></li>
                                <li><a href="#" class="current button-blue">1</a></li>
                                <li><a href="#" class="button-blue">2</a></li>
                                <li><a href="#" class="button-blue">3</a></li>
                                <li><a href="#" class="button-blue">&raquo;</a></li>
                            </ul>                            
                        </section>
                    </div>

                    <div class="preview-pane grid_3 omega">
                        <div class="content">
                            <h3>Preview Pane</h3>
                            <p>This is the preview pane. Click on the more button on an item to view more information.</p>
                            <div class="message info">
                                <h3>Helpful Tips</h3>
                                <img src="<?=base_url()?>public/images/lightbulb_32.png" class="fl" />
                                <p>Phasellus at sapien eget sapien mattis porttitor. Donec ultricies turpis pulvinar enim convallis egestas. Pellentesque egestas luctus mattis. Nulla eu risus massa, nec blandit lectus. Aliquam vel augue eget ante dapibus rhoncus ac quis risus.</p>
                            </div>
                        </div>
                        <div class="preview">
                        </div>
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
                <label>Category title: </label><input type="text" id="category_title" name="category_title"/>
                <label>Add to menu: </label><input type="checkbox" id="category_menu" name="category_menu" value="1"/>
                <label>Parent Category: </label>
                <select id="parent_category" name="parent_category">
                    <?foreach($tags as $tag):?>
                        <select id="<?=$tag->tag_id?>"><?=$tag->tag_name?></select>
                    <?endforeach?>        
                </select>
                <hr />
                <button class="button button-gray close" id="add_category_button" type="submit">OK</button>
                <button class="button button-gray close" type="button">Cancel</button>
            </form>
         </section>
        </div>
    </div>

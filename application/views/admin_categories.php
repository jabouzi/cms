                <!-- Main Section -->

                <section class="main-section grid_7">

                    <div class="main-content grid_3 alpha">
                        <header>
                            <ul class="action-buttons clearfix fr">
                            </ul>
                                <h2>Posts categories <a href="#"></a></h2>                                
                        </header>
                        <section>
                            <span class="editable name">
                                <a style="cursor: pointer;" id="add_category" style="display:none"><img src="<?=base_url()?>public/images/icons/add.png" />Add a category</a>
                            </span>
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
                                    <label>Add to menu <small>Checke it if yes</small></label><input type="checkbox" id="category_menu" name="category_menu" value="1"/>
                                    <label>Parent Category <small>Select a category</small></label>
                                    <select id="parent_category" name="parent_category">
                                        <option id="cat_0">Select a category parent</option>
                                        <?foreach($categories as $category):?>
                                            <option class="category_opt" id="cat_<?=$category->category_id?>"><?=$category->category_name?></option>
                                        <?endforeach?>        
                                    </select>
                                    <div class="action">
                                        <button class="button button-gray" id="save_cat" type="submit"><span class="accept"></span>OK</button>
                                        <button class="button button-gray" id="reset" type="reset">Reset</button>
                                    </div>
                                </fieldset>
                            </div>                            
                        </div>                        
                    </div>

                </section>

                <!-- Main Section End -->


            </div>
            <div id="push"></div>
        </section>        
    </div>

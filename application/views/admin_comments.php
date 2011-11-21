                <!-- Main Section -->

                <section class="main-section grid_7">

                    <div class="main-content grid_4 alpha">
                        <header>
                            <ul class="action-buttons clearfix fr">
                                <li><a href="#" class="button button-gray no-text current" title="View as a List" onclick="$(this).addClass('current').parent().siblings().find('a').removeClass('current');$('#contacts').removeClass('grid-view').addClass('list-view');return false;"><span class="view-list"></span></a></li>
                                <li><a href="#" class="button button-gray no-text" title="View as a Grid" onclick="$(this).addClass('current').parent().siblings().find('a').removeClass('current');$('#contacts').removeClass('list-view').addClass('grid-view');return false;"><span class="view-grid"></span></a></li>
                            </ul>
                                <h2>Posts comments <a href="#"></a></h2>                                
                        </header>
                        <section>
                            <ul id="contacts" class="listing list-view clearfix">
                                <?foreach($comments as $comment):?>
                                <li class="contact clearfix">
                                    <div class="avatar"><img src="<?=base_url()?>public/images/user_32.png" /></div>
                                    <span class="timestamp"><?=$comment->comment_date?></span>
                                    <span class="editable name" id="<?=$comment->comment_id?>"><?=$comment->comment_email?> (<small><i><?=$comment->comment_status?></i></small>)</span>
                                    <div class="entry-meta" id="comment_<?=$comment->comment_id?>">
                                        <?=$comment->comment_content?>
                                    </div>
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
    </div>

                <!-- Main Section -->

                <section class="main-section grid_7">

                    <div class="main-content grid_4 alpha">
                        <header>                           
                            <h2>
                                My Posts
                            </h2>
                        </header>
                        <section>
                            <ul class="listing list-view">
                                <?foreach($posts as $post):?>
                                <li class="note">
                                    <span class="timestamp"><?=$post->post_date?></span>
                                    <a href="<?=base_url()?>admin/editpost/<?=$post->post_id?>"><?=$post->post_title?> (<small><?=$post->post_status?>)</small></a>                                    
                                    <div class="entry-meta">
                                        <p>Comments(<?=$post->post_comment_count?>)</p>
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

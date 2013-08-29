                <!-- Main Section -->

                <section class="main-section grid_7">

                    <div class="main-content">
                        <header>                           
                            <h2>
                                My Posts
                            </h2>
                        </header>
                        <section class="container_6 clearfix">
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
<!--
                            <ul class="pagination clearfix">
                                <li><a href="#" class="button-blue">&laquo;</a></li>
                                <li><a href="#" class="current button-blue">1</a></li>
                                <li><a href="#" class="button-blue">2</a></li>
                                <li><a href="#" class="button-blue">3</a></li>
                                <li><a href="#" class="button-blue">&raquo;</a></li>
                            </ul>
-->
                        </section>
                    </div>

                </section>

                <!-- Main Section End -->


            </div>
            <div id="push"></div>
        </section>
    </div>

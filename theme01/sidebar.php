 <div class="box-right">
   <?php if( is_dynamic_sidebar() ){ dynamic_sidebar(); }else{ ?>
        <div>
                <h2>Search</h2>
                <ul>
                <?php get_search_form(); ?>
                </ul>
        </div>
        <hr style="border:0;background-color:#C3C2C2;height:1px;"/>
        <div>
                <h2>category</h2>
                <ul>
                <?php wp_list_cats(); ?>
                </ul>
        </div>
        <hr style="border:0;background-color:#C3C2C2;height:1px;"/>
        <div>
                <h2>page list</h2>
                <ul>
                <?php wp_list_pages(); ?>
                </ul>
        </div>
        <hr style="border:0;background-color:#C3C2C2;height:1px;"/>
        <!-- <div>
                <h2>blogroll</h2>
                <ul>
                <?php get_links(); ?>
                </ul>
        </div> -->
        <div>
                <h2>functions</h2>
                <ul>
                <?php wp_register(); ?>
                <?php wp_loginout(); ?>
                </ul>
        </div>
    <?php }?>
</div>

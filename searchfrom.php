<form role="search" method="get" id="searchform" action="<?php echo home_url('/');?>">
    <div>
        <label class="screen-reader-text" for="s">搜索:</label>
        <input type="text" value="" name="s" id="s" placeholder="<?php the_search_query();?>"/>
        <input type="submit" id="searchsubmit" value="搜索"/>
    </div>
</form>

<!-- 搜索框代码，需要时调用 >
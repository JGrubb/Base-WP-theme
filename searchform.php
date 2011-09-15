<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <input type="text" value="search" onfocus="if (this.value=='search') this.value = ''" onblur="if (this.value=='') this.value = 'search'; this.style.color = '#dddddd'" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="" />
    </div>
</form>
<header class="clearfix">
    <div class="menu-wrapper">
        <hgroup>
            <h1><a id="logo" class="scrollPage" href="#home"><img src="<?php echo base_url();?>assets/site/img/menu-logo-grey.png" alt="Cloudstation - Web designers and developers"/></a></h1>
        </hgroup>
        <nav class="main-nav">
            <ul>
                <?php foreach($menu as $item):?>
                <li><a class="scrollPage" href="#<?php echo $item['pagetype_name'];?>"><?php echo $item['pagetype_name'];?></a></li>
                <?php endforeach;?>
                <li><a class="scrollPage" href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
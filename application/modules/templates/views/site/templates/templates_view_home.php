<?php $this->load->view($header);?>

<?php echo Modules::run('sidenav');?>

<div class="content-wrapper-overlay"></div>

<div class="content-wrapper clearfix">

    <div id="home">
        <h2 id="h2-home" class="row-header">Cloudstation</h2>
        <p>We love making sites that do exactly what you want. We'll talk to you and make sure we all know what, how and when you want your site. No hard sell or stupid, expensive add-ons. We want to be able to rely on your recommendation for our next job.</p>
    </div>
    
    <?php foreach($page_content as $page_type => $content):?>
    <div id="<?= $page_type;?>" class="clearfix">
        
    <h2 class="row-header"><?= $page_type;?></h2>
        <div class="grid-row clearfix">
            <?php foreach($content as $item):?>
            <div class="grid<?= $item['grid'];?>">
                <a href="<?= base_url().lcfirst($page_type).'/'.$item['page_url'];?>"><img class="lazy" src="<?= base_url();?>assets/site/img/cms/no-image.png" data-original="<?= base_url();?>assets/site/img/cms/<?= (!empty($item['page_thumb'])) ? $item['page_thumb'] : 'no-image.png';?>"/></a>
                <h3><?= $item['page_title'];?></h3>
                <p><?= $item['page_short_content'];?></p>
            </div>  
            <?php endforeach;?>
        </div>

    </div>
    <?php endforeach;?>

    <?php echo Modules::run('contact');?>

</div><!-- content end-->

<?php echo Modules::run('socialnav');?>

<?php $this->load->view($footer,$overlay);?>
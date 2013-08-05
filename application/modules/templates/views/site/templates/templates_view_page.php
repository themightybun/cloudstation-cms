<div id="overlay" class="clearfix">

    <div class="overlay-header clearfix">
        <h2 id="<?= $page_content[0]['page_html_title'];?>"><?= $page_content[0]['page_title'];?></h2>
        <nav class="page-controls right">
            <ul class="<?= $page_content[0]['page_id'];?>">
                <li>
                    <?php if(isset($pagination['previous']['page_url'])):?>
                    <a href="#<?=$type.'='.$pagination['previous']['page_url'];?>" class="pagination" >Previous</a>
                    <?php else:?>
                    <a href="" class="paginationDisabled" disabled="disabled">Previous</a>
                    <?php endif;?>
                </li>
                <li>
                    <?php if(isset($pagination['next']['page_url'])):?>
                    <a href="#<?=$type.'='.$pagination['next']['page_url'];?>" class="pagination" >Next</a>
                    <?php else:?>
                    <a href="" class="paginationDisabled" disabled="disabled">Next</a>
                    <?php endif;?>
                </li>
                <li>
                    <a href="#" class="btn-share">Share</a>
                </li>
                <li><a href="#" class="close-overlay" >Close</a></li>
            </ul>
        </nav>
        
    </div>
    <img class="grid4" src="<?= base_url();?>assets/site/img/cms/<?= !empty($page_content[0]['page_thumb_loc']) ? $page_content[0]['page_thumb_loc'] : 'no-image.png';?>"/>
    <?= $page_content[0]['page_content'];?>
</div>
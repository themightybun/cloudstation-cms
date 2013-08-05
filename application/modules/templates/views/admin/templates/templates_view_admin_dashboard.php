<?php $this->load->view($admin_header);?>

<div class="wrapper clearfix">
    <div class="container-fluid">
        <div class="row-fluid">
            
            <?php $this->load->view($admin_nav);?>
            
            <div class="span10">
                <table id="dashboardTb" class="table table-hover tablesorter">
                    <thead>
                        <tr>
                            <th>Page Title</th>
                            <th>Publish date</th>
                            <th>Page url</th>
                            <th>Page Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($dashboard as $id => $item):?>
                    <tr>
                        
                        <td><?= $item['page_title'];?></td>
                        <td><?= date('F j, Y, g:i a',strtotime($item['page_timestamp']));?></td>
                        <td><?= $item['page_url'];?></td>
                        <td><?= $item['page_type'];?></td>
                        <td>
                            <a class="btn btn-mini btn-primary" title="edit" href=""><i class="icon-edit icon-white"></i></a>
                            <a class="btn btn-mini btn-danger" title="delete" href=""><i class="icon-trash icon-white"></i></a>
                        </td>
                        
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view($admin_footer);?>
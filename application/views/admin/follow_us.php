<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Follow Us List</h1>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <!-- <li class="breadcrumb-item active" aria-current="page">Library</li> -->
            </ol>
        </nav>
    </div>


    <!-- Content Row -->

    <div class="col-12">
    <?php if (encryptids("D", $_SESSION['admin_type']) == 3) {   ?>
        <div class="card border-top card-body">
            <div>
                <button type="button" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#newform">Add  New Follow Us link</button>
                <div class="modal fade " id="newform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Follow Us Link</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form action="<?php echo base_url(); ?>admin/add_follow_us" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="row">

                                    <div class="mb-2 col-md-4">
                                        <label class="d-block text-font">Icon</label>
                                        <input type="file" class="form-control input-font" name="follow_us" id="follow_us">
                                        <span class="error_text">
                                            <?php //echo form_error('title'); ?>
                                        </span>
                                    </div>
                                    <div class="mb-2 col-md-4">
                                        <label class="d-block text-font">Title</label>
                                        <input type="text" class="form-control input-font" name="title" id="title">
                                        <span class="error_text">
                                            <?php //echo form_error('title'); ?>
                                        </span>
                                    </div>
                                    <div class="mb-2 col-md-4">
                                        <label class="d-block text-font">Link</label>
                                        <input type="text" class="form-control input-font" name="link" id="link">
                                        <span class="error_text">
                                            <?php //echo form_error('title'); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php } ?>
        <?php
        if ($this->session->flashdata('MSG')) {
            echo $this->session->flashdata('MSG');
        }
        ?>
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card border-top card-body">
                    <table id="example" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Link</th>
                                <?php if (encryptids("D", $_SESSION['admin_type']) == 3) {   ?>
                                <th>Action</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($follow_us)){
                            $i=1;
                            foreach($follow_us as $list_follow)
                            {?>
                            <tr>
                                <td>1</td>
                                <td><?php if($list_follow['icon']){ ?>                                 
                                    <img src="<?php echo base_url(); ?>uploads/<?php echo $list_follow['icon']?>" width="50">
                                    <?php }else{ echo "No Uploaded";} ?></td>
                                    <td><?php echo $list_follow['title']; ?></td>
                                <td><?php echo $list_follow['link']; ?></td>
                                <?php if (encryptids("D", $_SESSION['admin_type']) == 3) {   ?>
                                <td class="d-flex border-bottom-0">
                                    <button onClick="" class="btn btn-info btn-sm mr-2 text-white" data-toggle="modal"
                                        data-target="#editform"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button onclick="deleteFollowUs(' <?php echo $list_follow['id']; ?> ');" data-id ='<?php echo $list_follow['id']; ?>'
                                    class="btn btn-danger btn-sm mr-2"><i class="fa fa-trash"
                                            aria-hidden="true"></i></button>
                                    <!-- Modal -->
            
                                    <div class="modal fade " id="editform" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Follow Us Link
                                                    </h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">

                                                        <div class="mb-2 col-md-4">
                                                            <label class="d-block text-font">Icon</label>
                                                            <input type="file" class="form-control input-font" name=""
                                                                id="">
                                                            <span class="error_text">
                                                                <?php //echo form_error('title'); ?>
                                                            </span>
                                                        </div>
                                                        <div class="mb-2 col-md-4">
                                                            <label class="d-block text-font">Title</label>
                                                            <input type="text" class="form-control input-font" name=""
                                                                id="">
                                                            <span class="error_text">
                                                                <?php //echo form_error('title'); ?>
                                                            </span>
                                                        </div>
                                                        <div class="mb-2 col-md-4">
                                                            <label class="d-block text-font">Link</label>
                                                            <input type="text" class="form-control input-font" name=""
                                                                id="">
                                                            <span class="error_text">
                                                                <?php //echo form_error('title'); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button"
                                                            data-dismiss="modal">Cancel</button>
                                                        <button class="btn btn-primary">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <?php } ?>
                            </tr>

<?php }} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script>
function deleteFollowUs(que_id) {
                    var c = confirm("Are you sure to delete this survey details? ");
                    if (c == true) {
                        // const $loader = $('.igr-ajax-loader');
                        //$loader.show();
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo base_url(); ?>admin/deleteFollowUs',
                            data: {
                                que_id: que_id,
                            },
                            success: function(result) {
                                // $('#row' + que_id).css({
                                //     'display': 'none'
                                // });
                               // alert('success' 'refresh');
                                location.reload();
                            },
                            error: function(result) {
                                alert("Error,Please try again.");
                            }
                        });

                    }
                }
            </script>

<style>
        .error_text
        {
            color: red;
        }
    </style>
        <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Winner Wall Form</h1> 
            
        </div> 
       
       
        <!-- Content Row -->
       
        <div class="row">
            <div class="col-12 mt-3">
            <div class="card border-top">
               <div class="card-body"> 
                <div class="row">
                    <div class="mb-2 col-md-4">
                        <label class="d-block text-font">Name of Competition<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control input-font" name="competition" id="competition" placeholder="Enter Name of Competition">
                        <span class="error_text"><?php echo form_error('title');?></span>
                        
                    </div>
                    <div class="mb-2 col-md-4">
                        <label class="d-block text-font">Name of Competition Date<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control input-font" name="competition" id="competition" placeholder="Name of Competition Date">
                        <span class="error_text"><?php echo form_error('title');?></span>
                        
                    </div>
                </div>
                
                <div class="row mt-2">
                <div class="mb-2 col-md-12">
                <table id="example" class="hover table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name of winners</th>
                            <th>Location</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Rank/Prize</th>
                         </tr>
                    </thead> 
                    <tbody>
                    <tr>
                         <td>1</td>
                         <td>Winner</td>
                         <td>Pune Maharashtra</td>
                         <td>7057085889</td>
                         <td>anismulani1999@gmail.com</td>
                         <td>First Rank</td>   
                    </tr>
                    </tbody>
                </table>
           </div>
                </div>  
                
                                           
                <div class="col-md-12 submit_btn p-3">
                       <a class="btn btn-success btn-sm text-white" data-bs-toggle="modal" data-bs-target="#submitForm">Submit</a>
                       <a class="btn btn-danger btn-sm text-white" data-bs-toggle="modal" data-bs-target="#cancelForm">Cancel</a> 
                       <input type="reset" name="Reset" class="btn btn-warning btn-sm text-white">
               </div>
                <!-- Modal -->
                <div class="modal fade" id="submitForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Submit Form</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to Submit?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                    </div>
                  </div>
                </div>
              </div>       
                          <!-- Modal -->  
               <!-- Modal -->
               <div class="modal fade" id="cancelForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to cancel?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>       
                          <!-- Modal -->
            </div> 
          </div>
        </div>
    </form>
       </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->


<!-- Logout Modal-->
<!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
    </div>
</div>
</div>
</div> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>assets/admin/js/jquery-3.5.1.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/jquery.dataTables.min.js"></script>


<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
   </script> -->

   <!-- Bootstrap core JavaScript-->
   <!-- <script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Core plugin JavaScript-->
    <!-- <script src="<?php echo base_url();?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script> -->

    <!-- Custom scripts for all pages-->
    <!-- <script src="<?php echo base_url();?>assets/admin/js/sb-admin-2.min.js"></script> -->
    <script src="<?php echo base_url();?>assets/admin/js/jquery-3.5.1.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/jquery.dataTables.min.js"></script>
 
    <!-- Page level plugins -->
    <!-- <script src="<?php echo base_url();?>assets/admin/vendor/chart.js/Chart.min.js"></script> -->

    <!-- Page level custom scripts -->
    <!-- <script src="<?php echo base_url();?>assets/admin/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/demo/chart-pie-demo.js"></script> -->
 
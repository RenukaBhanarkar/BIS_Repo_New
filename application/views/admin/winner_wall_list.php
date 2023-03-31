    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Winners Wall List</h1>
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
              </nav>
           
        </div>
       
       
        <!-- Content Row -->
        <div class="row">
            <div class="col-12">
                 <div class="card border-top card-body">
                    <div>
                           <button type="button" class="btn btn-primary btn-sm mr-2" onclick="location.href='<?php echo base_url();?>admin/winner_wall_form'">Create New Winner Wall</button> 
                    </div>
                 </div>   
            </div>     
        </div>
        <div class="row">
            <div class="col-12 mt-3">
            <div class="card border-top card-body">
                <table id="example" class="hover table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name of Competition</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                                <tr>
                                 <td>1</td>
                                 <td>Quiz Competition</td>
                                 <td>23/04/2022</td>
                                 <td class="d-flex border-bottom-0">
                                    <button onClick="location.href='#'" class="btn btn-primary btn-sm mr-2"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    <button onClick="location.href='#'" class="btn btn-info btn-sm mr-2"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    <button onClick="location.href='#'" class="btn btn-danger btn-sm mr-2"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                 </td>
                                  
                            
                                    <!-- Modal -->
                        </tr>
                        
                        
                           
                    </tbody>
                </table>
            </div>    
          </div>
        </div>
       </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Bureau of Indian Standards 2022</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>


<script src="<?php echo base_url(); ?>assets/admin/js/jquery-3.5.1.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.dataTables.min.js"></script>

<!-- Page level plugins -->

        
<script>
$(document).ready(function () {
$('#example').DataTable();
});
</script>


</body>
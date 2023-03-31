    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Quiz</h1>
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
              </nav>
           
        </div>
       
       
        <!-- Content Row -->
        
        <div class="row">
            <div class="col-12 mt-3">
            <div class="card border-top card-body">
                <table id="example" class="hover table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Quiz ID</th>
                            <th>Quiz Title</th>
                            <th>Quiz Start Date</th>
                            <th>Quiz End Date</th>
                            <th>Total Questions in Quiz</th>
                            <th>Total Questions in QB</th>
                            <th>Total Marks</th>
                            <th>Status</th> 
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if(!empty($allquize)){
                            $i=1;
                            foreach($allquize as $quiz)
                            {?>
                                <tr>
                                 <td><?php echo $i++?></td>
                                 <td><?php echo $quiz['quiz_id']?></td>
                                 <td><?php echo $quiz['title']?></td>
                                 <td><?php echo $quiz['start_date']?></td>
                                 <td><?php echo $quiz['end_date']?></td>
                                 <td><?php echo $quiz['total_question']?></td>
                                 <td>0</td>
                                 <td><?php echo $quiz['total_mark']?></td>
                                 <td><?php echo $quiz['status_name']?></td> 
                                 <td class="d-flex border-bottom-0"> 
                                    <a href="admin_manage_quiz_view/<?php echo $quiz['id']?>"class="btn btn-primary btn-sm mr-2"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        
                            <?php } }?> 
                           
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
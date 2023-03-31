<div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">On Going Quiz View</h1>
                        
                    </div>
<!-- Content Row -->
<div class="row">
                        <div class="col-12 mt-3">
                        <div class="card border-top">
                           <div class="card-body"> 
                            <div class="row">
                               <div class="mb-2 col-md-4">
                                    <label class="d-block text-font">Quiz ID</label>
                                    <div>
                                        <p><?php echo $quizdata['quiz_id'];?></p>
                                    </div>    
                                </div>
                                <div class="mb-2 col-md-4">
                                    <label class="d-block text-font">Quiz Title</label>
                                    <div>
                                         <p><?php echo $quizdata['title'];?></p>
                                    </div>    
                                </div>
                                <div class="mb-2 col-md-4">
                                    <label class="d-block text-font">Quiz Start Date</label>
                                    <div>
                                        <p><?php echo $quizdata['start_date'];?></p>
                                    </div>    
                                </div>
                                <div class="mb-2 col-md-4">
                                    <label class="d-block text-font">Quiz end Date</label>
                                    <div>
                                        <p><?php echo $quizdata['end_date'];?></p>
                                    </div>    
                                </div>
                                <div class="mb-2 col-md-4">
                                    <label class="d-block text-font">Total Question in Quiz</label>
                                    <div>
                                        <p><?php echo $quizdata['total_question'];?></p>
                                    </div>    
                                </div>
                                <div class="mb-2 col-md-4">
                                    <label class="d-block text-font">Total Question in QB<sup class="text-danger">*</sup></label>
                                    <div>
                                        <p>50</p>
                                    </div>    
                                </div>
                                <div class="mb-2 col-md-4">
                                    <label class="d-block text-font">Total Marks<sup class="text-danger">*</sup></label>
                                    <div>
                                       <p><?php echo $quizdata['total_mark'];?></p>
                                    </div>    
                                </div>
                              </div>
                          </div>
                          <div class="col-md-12 submit_btn p-3">
                               <a class="btn btn-primary btn-sm text-white" onclick="location.href='<?php echo base_url();?>admin/admin_ongoing_quiz_list'">Back</a>
                          </div>  
                        </div> 
                      </div>
                    </div>
                    </div>
<!-- /.container-fluid -->

<!-- </div>
</div>
                    </div>
                   </div> -->
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
    
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                © <script>document.write(new Date().getFullYear())</script> <?= $site_title ?> <span class="d-none d-sm-inline-block"> Crafted with <i class="mdi mdi-heart text-danger"></i> by <?=$powered_by;?>.</span>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Modal -->
        <div class="modal" id="myModel" tabindex="-1" aria-labelledby="myModelLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    
                </div>
            </div>
        </div>
        <!----- modal end------->

        <!-- JAVASCRIPT -->
        <script src="<?php echo base_url(); ?>assets/admin/js/pages/datatables.init.js"></script> 
        <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/node-waves/waves.min.js"></script>


        <!-- Peity chart-->
        <script src="<?php echo base_url(); ?>assets/admin/libs/peity/jquery.peity.min.js"></script>

        <!-- Plugin Js-->
        <script src="<?php echo base_url(); ?>assets/admin/libs/chartist/chartist.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/pages/dashboard.init.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/app.js"></script>
        
        
        <!-- Required datatable js -->
        <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/jszip/jszip.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        
       <script src="<?php echo base_url(); ?>assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- table editable -->

        <script src="<?php echo base_url(); ?>assets/admin/libs/table-edits/build/table-edits.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/pages/table-editable.init.js"></script> 

        <!-- table editable -->        
        
        <script src="<?php echo base_url(); ?>assets/admin/js/raj_custom.js"></script>
        
        <script>
              
            function closeModel()
            {
                $('#myModel').hide();
            }

            function addData() {
                $('#addModal').fadeIn(500);
            }
            function hideModal() {
               $('.modal').hide();
            }
        </script>  
    </body>

</html>
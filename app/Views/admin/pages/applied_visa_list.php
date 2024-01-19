            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Applied Visa</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Applied Visa</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone No</th>
                                                    <th>Nationality</th>
                                                    <th>Photo</th>
                                                    <th>Passport</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($data as $row): ?>
                                                <tr>
                                                    <td><?php echo $row->full_name; ?></td>
                                                    <td><?php echo $row->email; ?></td>
                                                    <td><?php echo $row->phone; ?></td>
                                                    <td><?php echo $row->nationality; ?></td>
                                                    <td><img src='<?php echo base_url().$row->photo; ?>'  height="70px" width="70px"></td>
                                                    <td><img src='<?php echo base_url().$row->doc; ?>'  height="70px" width="70px" ></td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
    
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
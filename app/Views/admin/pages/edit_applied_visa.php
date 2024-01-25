            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Edit Visa</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Edit Visa</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Form layouts</h4>
                                        <?php include('error.php'); ?>
                                        <?php echo form_open('update-applied-visa/'.$data['id'].'/'.$data['child_one'].'/'.$data['child_two'], ['enctype' => 'multipart/form-data']); ?>
                                        <form>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="mt-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">First name</label>
                                                            <input type="text" name="full_name" class="form-control" id="formrow-firstname-input" value="<?php echo $data['full_name']; ?>" >
                                                        </div>

                                                        <div class="row">                                                            
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-email-input">Email</label>
                                                                    <input type="email" name="email" class="form-control" id="formrow-email-input" value="<?php echo $data['email']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                <label for="evisa_phone">Phone number</label>
                                                                <input class="form-control form-control" maxlength="150" type="text" name="phone" id="evisa_phone" value="<?php echo $data['phone']; ?>">
                                                                </div>
                                                            </div>
                                                        </div>
            
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                <label for="evisa_From">Grant Evisa valid from <span class="text-danger h5"></span></label>
                                                                <input class="form-control form-control" maxlength="150" type="text"  name="date_valid" id="evisa_phone" value="<?php echo $data['date_valid']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                <label for="evisa_entryCheckpoint">Entry through checkpoint</label>
                                                                <input class="form-control form-control" maxlength="150" type="text" name="entry_checkpoint" id="evisa_phone" value="<?php echo $data['entry_checkpoint']; ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="row">                                                            
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="formrow-email-input">Nationality</label>
                                                                <input type="text" name="nationality" class="form-control" id="formrow-email-input" value="<?php echo $data['nationality']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                            <label for="evisa_phone">Purpose of entry</label>
                                                            <input class="form-control form-control" maxlength="150" type="text" name="purpose_of_entry" id="evisa_phone" value="<?php echo $data['purpose_of_entry']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 ms-lg-auto">
                                                <div class="mt-5 mt-lg-4">
                                                        
                                                    <div class="row">                                                            
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="formrow-email-input">Portrait photo</label>
                                                                <input class="form-control form-control" id="photo" name="photo" type="file">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                            <img src='<?php echo base_url().$data['photo']; ?>' class="img-thumbnail" alt="photo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">                                                            
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="formrow-email-input">Passport data page image</label>
                                                                <input class="form-control form-control" id="passport" name="doc" type="file">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                            <img src='<?php echo base_url().$data['doc']; ?>' class="img-thumbnail" alt="doc">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-firstname-input">Status</label>
                                                        <select name="status" class="form-select" aria-label="Default select example">
                                                            <option <?php echo ($data['status']=="Pending") ?  "selected" : "" ; ?> value="Pending">Pending</option>
                                                            <option <?php echo ($data['status']=="Approved") ?  "selected" : "" ; ?> value="Approved">Approved</option>
                                                            <option <?php echo ($data['status']=="Rejected") ?  "selected" : "" ; ?> value="Rejected">Rejected</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="row">
                                            <h2 class="font-size-24 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Child 1</h2>
                                            <div class="col-lg-5">
                                                <div class="mt-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">First name</label>
                                                            <input type="text" name="evisa_childrenName1" class="form-control" id="formrow-firstname-input" value="<?php echo $data['evisa_childrenName1']; ?>" >
                                                        </div>

                                                        <div class="row">                                                            
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-email-input">Gender</label>
                                                                    <input type="text" name="evisa_childrenSex1" class="form-control" id="formrow-email-input" value="<?php echo $data['evisa_childrenSex1']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                <label for="evisa_phone">DOB</label>
                                                                <input class="form-control form-control" maxlength="150" type="text" name="evisa_childrenDOB1" id="evisa_phone" value="<?php echo $data['evisa_childrenDOB1']; ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 ms-lg-auto">
                                                <div class="mt-5 mt-lg-4">
                                                        
                                                    <div class="row">                                                            
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="formrow-email-input">Portrait photo</label>
                                                                <input class="form-control form-control" id="photo" name="childphoto1" type="file">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                            <img src='<?php echo base_url().$data['childphoto1']; ?>' class="img-thumbnail" alt="photo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <h2 class="font-size-24 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Child 2</h2>
                                            <div class="col-lg-5">
                                                <div class="mt-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">First name</label>
                                                            <input type="text" name="evisa_childrenName2" class="form-control" id="formrow-firstname-input" value="<?php echo $data['evisa_childrenName2']; ?>" >
                                                        </div>

                                                        <div class="row">                                                            
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-email-input">Gender</label>
                                                                    <input type="text" name="evisa_childrenSex2" class="form-control" id="formrow-email-input" value="<?php echo $data['evisa_childrenSex2']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                <label for="evisa_phone">DOB</label>
                                                                <input class="form-control form-control" maxlength="150" type="text" name="evisa_childrenDOB2" id="evisa_phone" value="<?php echo $data['evisa_childrenDOB2']; ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 ms-lg-auto">
                                                <div class="mt-5 mt-lg-4">
                                                        
                                                    <div class="row">                                                            
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="formrow-email-input">Portrait photo</label>
                                                                <input class="form-control form-control" id="photo" name="childphoto2" type="file">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                            <img src='<?php echo base_url().$data['childphoto2']; ?>' class="img-thumbnail" alt="photo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="mt-4 text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>

                                        </div>
                                        </form>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Form Layout -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
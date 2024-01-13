
<?php include 'header.php';?>

 
 <div class="immg">
   <div class="container">
      <div class="mt-4 mb-3">
         <h1 class="w-100 text-center h2">Booking E-visa for outside Vietnam foreigners</h1>
      </div>
      <form action="#" method="post">
         <h3 class="mb-4 h4"> <i class="fa fa-file-image-o" aria-hidden="true"></i>  Foreigner's images</h3>
         <div class="row mt-4">
            <div class="col-sm-5 mb-3">
               <label for="evisa_portraitPhoto">Portrait photo <span class="text-danger h5">*</span></label>
               <div class="kv-avatar">
                  <div class="file-input file-input-ajax-new">
                     <div class="file-preview ">
                        <div class=" file-drop-zone clearfix">
                           <div class="file-preview-thumbnails clearfix">
                              <div class="file-default-preview"><img src="images/evisa-portrait-photo.jpg" alt="Portrait Photo" width="126" height="190"></div>
                           </div>
                           <div class="file-preview-status text-center text-success"></div>
                           <div class="kv-fileinput-error"></div>
                        </div>
                     </div>
                     <div class="kv-upload-progress kv-hidden" style="display: none;">
                        <div class="progress">
                           <div class="progress-bar bg-success progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                              0%
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div tabindex="500" class="btn btn-secondary btn-file"> <i class="fa fa-folder-open-o" aria-hidden="true"></i> &nbsp;  <span class="hidden-xs">Browse …</span><input id="photo" name="photo" type="file"></div>
                  </div>
               </div>
               <div id="kv-photo-errors" class="mt-2 center-block alert alert-block alert-danger" style="width:100%;display:none"></div>
            </div>
            <div class="col-sm-7 mb-3">
               <label for="evisa_passportPhoto">Passport data page image <span class="text-danger h5">*</span></label>
               <div class="kv-avatar">
                  <div class="file-input file-input-ajax-new">
                     <div class="file-preview ">
                        <div class=" file-drop-zone clearfix">
                           <div class="file-preview-thumbnails clearfix">
                              <div class="file-default-preview"><img src="images/evisa_passport_photo.jpg" alt="Passport Photo" width="285" height="190"></div>
                           </div>
                           <div class="file-preview-status text-center text-success"></div>
                           <div class="kv-fileinput-error"></div>
                        </div>
                     </div>
                     <div class="kv-upload-progress kv-hidden" style="display: none;">
                        <div class="progress">
                           <div class="progress-bar bg-success progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                              0%
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div tabindex="500" class="btn btn-secondary btn-file"> <i class="fa fa-folder-open-o" aria-hidden="true"></i> &nbsp;  <span class="hidden-xs">Browse …</span><input id="passport" name="passport" type="file"></div>
                  </div>
               </div>
               <div id="kv-passport-errors" class="mt-2 center-block alert alert-block alert-danger" style="width:100%;display:none"></div>
            </div>
         </div>
         <div class="mt-5"></div>
         <div class="mt-5"></div>
         <h3 class="mb-4 h4"> <i class="fa fa-info-circle" aria-hidden="true"></i> Requested information</h3>
         <div class="row mt-4">
            <div class="col-sm-6 mb-3">
               <div class="row">
                  <div class="col-sm-4">
                     <label for="evisa_From">Grant Evisa valid from <span class="text-danger h5">*</span></label>
                  </div>
                  <div class="col-sm-8">
                     <div class="input-group date" id="evisa_From" data-target-input="nearest">
                        <input id="evisa_From" name="evisa_From" autocomplete="off" placeholder="MM dd, YYYY" type="text" class="form-control form-control-lg datetimepicker-input" aria-required="true" data-target="#evisa_From" value="">
                        <div class="input-group-append" data-target="#evisa_From" data-toggle="datetimepicker">
                           <div class="input-group-text"><i class="fal fa-calendar-alt fa-lg"></i></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 mb-3">
               <div class="row">
                  <div class="col-sm-4">
                     <label for="evisa_entryCheckpoint">Allowed to entry through checkpoint <span class="text-danger h5">*</span></label>
                  </div>
                  <div class="col-sm-8">
                     <select class="form-control form-control-lg" id="evisa_entryCheckpoint" name="evisa_entryCheckpoint">
                        <option value="">[ Select intended entry gate ]</option>
                        <optgroup label="Airport">
                           <option value="Cam Ranh Airport (CXR) – Khanh Hoa">Cam Ranh Airport (CXR) – Khanh Hoa</option>
                           <option value="Can Tho Airport (VCA) - Can Tho">Can Tho Airport (VCA) - Can Tho</option>
                           <option value="Cat Bi Airport (HPH) – Hai Phong">Cat Bi Airport (HPH) – Hai Phong</option>
                           <option value="Da Nang Airport (DAD) – Da Nang">Da Nang Airport (DAD) – Da Nang</option>
                           <option value="Noi Bai Airport (HAN) – Ha Noi">Noi Bai Airport (HAN) – Ha Noi</option>
                           <option value="Phu Quoc Airport (PQC) – Kien Giang">Phu Quoc Airport (PQC) – Kien Giang</option>
                           <option value="Phu Bai Airport (HUI) – Hue">Phu Bai Airport (HUI) – Hue</option>
                           <option value="Tan Son Nhat Airport (SGN) – Ho Chi Minh City">Tan Son Nhat Airport (SGN) – Ho Chi Minh City</option>
                        </optgroup>
                        <optgroup label="Landport">
                           <option value="Bo Y Landport">Bo Y Landport</option>
                           <option value="Cha Lo Landport">Cha Lo Landport</option>
                           <option value="Cau Treo Landport">Cau Treo Landport</option>
                           <option value="Ha Tien Landport">Ha Tien Landport</option>
                           <option value="Huu Nghi Landport">Huu Nghi Landport</option>
                           <option value="La Lay Landport">La Lay Landport</option>
                           <option value="Lao Bao Landport">Lao Bao Landport</option>
                           <option value="Lao Cai Landport">Lao Cai Landport</option>
                           <option value="Moc Bai Landport">Moc Bai Landport</option>
                           <option value="Mong Cai Landport">Mong Cai Landport</option>
                           <option value="Na Meo Landport">Na Meo Landport</option>
                           <option value="Nam Can Landport">Nam Can Landport</option>
                           <option value="Song Tien Landport">Song Tien Landport</option>
                           <option value="Tay Trang Landport">Tay Trang Landport</option>
                           <option value="Tinh Bien Landport">Tinh Bien Landport</option>
                           <option value="Xa Mat Landport">Xa Mat Landport</option>
                        </optgroup>
                        <optgroup label="Seaport">
                           <option value="Chan May Seaport">Chan May Seaport</option>
                           <option value="Da Nang Seaport">Da Nang Seaport</option>
                           <option value="Duong Dong Seaport">Duong Dong Seaport</option>
                           <option value="Hai Phong Seaport">Hai Phong Seaport</option>
                           <option value="Ho Chi Minh City Seaport">Ho Chi Minh City Seaport</option>
                           <option value="Hon Gai Seaport">Hon Gai Seaport</option>
                           <option value="Nha Trang Seaport">Nha Trang Seaport</option>
                           <option value="Quy Nhon Seaport">Quy Nhon Seaport</option>
                           <option value="Vung Tau Seaport">Vung Tau Seaport</option>
                        </optgroup>
                     </select>
                  </div>
               </div>
            </div>
         </div>
         <div class="row mt-4">
            <div class="col-sm-6 mb-3">
               <div class="row">
                  <div class="col-sm-4">
                     <label for="evisa_nationality">Nationality <span class="text-danger h5">*</span></label>
                  </div>
                  <div class="col-sm-8">
                     <select name="evisa_nationality" id="evisa_nationality" class="form-control form-control-lg">
                        <option value="">[ Choose nationality ]</option>
                        <optgroup label="Most selected">
                           <option value="United Kingdom">United Kingdom</option>
                           <option value="United States">United States</option>
                        </optgroup>
                        <optgroup label="A">
                           <option value="Andorra">Andorra</option>
                           <option value="Argentina">Argentina</option>
                           <option value="Armenia">Armenia</option>
                           <option value="Australia">Australia</option>
                           <option value="Austria">Austria</option>
                           <option value="Azerbaijan">Azerbaijan</option>
                        </optgroup>
                        <optgroup label="B">
                           <option value="Belarus">Belarus</option>
                           <option value="Belgium">Belgium</option>
                           <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                           <option value="Brazil">Brazil</option>
                           <option value="Bruney">Bruney</option>
                           <option value="Bulgaria">Bulgaria</option>
                        </optgroup>
                        <optgroup label="C">
                           <option value="Canada">Canada</option>
                           <option value="Chile">Chile</option>
                           <option value="China (Hongkong)">China (Hongkong)</option>
                           <option value="China (Macao)">China (Macao)</option>
                           <option value="Colombia">Colombia</option>
                           <option value="Croatia">Croatia</option>
                           <option value="Cuba">Cuba</option>
                           <option value="Cyprus">Cyprus</option>
                           <option value="Czech Republic">Czech Republic</option>
                        </optgroup>
                        <optgroup label="D">
                           <option value="Denmark">Denmark</option>
                        </optgroup>
                        <optgroup label="E">
                           <option value="Estonia">Estonia</option>
                        </optgroup>
                        <optgroup label="F">
                           <option value="Fiji">Fiji</option>
                           <option value="Finland">Finland</option>
                           <option value="France">France</option>
                        </optgroup>
                        <optgroup label="G">
                           <option value="Georgia">Georgia</option>
                           <option value="Germany">Germany</option>
                           <option value="Greece">Greece</option>
                        </optgroup>
                        <optgroup label="H">
                           <option value="Hungary">Hungary</option>
                        </optgroup>
                        <optgroup label="I">
                           <option value="Iceland">Iceland</option>
                           <option value="India">India</option>
                           <option value="Ireland">Ireland</option>
                           <option value="Italy">Italy</option>
                        </optgroup>
                        <optgroup label="J">
                           <option value="Japan">Japan</option>
                        </optgroup>
                        <optgroup label="K">
                           <option value="Kazakhstan">Kazakhstan</option>
                           <option value="Korea (South)">Korea (South)</option>
                        </optgroup>
                        <optgroup label="L">
                           <option value="Latvia">Latvia</option>
                           <option value="Liechtenstein">Liechtenstein</option>
                           <option value="Lithuania">Lithuania</option>
                           <option value="Luxembourg">Luxembourg</option>
                        </optgroup>
                        <optgroup label="M">
                           <option value="Macedonia The former Yogoslav of">Macedonia The former Yogoslav of</option>
                           <option value="Malta">Malta</option>
                           <option value="Marshall Islands">Marshall Islands</option>
                           <option value="Mexico">Mexico</option>
                           <option value="Micronesia Federated States of">Micronesia Federated States of</option>
                           <option value="Moldova">Moldova</option>
                           <option value="Monaco">Monaco</option>
                           <option value="Mongolia">Mongolia</option>
                           <option value="Montenegro">Montenegro</option>
                           <option value="Myanmar">Myanmar</option>
                        </optgroup>
                        <optgroup label="N">
                           <option value="Nauru">Nauru</option>
                           <option value="Netherlands">Netherlands</option>
                           <option value="New Zealand">New Zealand</option>
                           <option value="Norway">Norway</option>
                        </optgroup>
                        <optgroup label="P">
                           <option value="Palau">Palau</option>
                           <option value="Panama">Panama</option>
                           <option value="Papua New Guinea">Papua New Guinea</option>
                           <option value="Peru">Peru</option>
                           <option value="Philippines">Philippines</option>
                           <option value="Poland">Poland</option>
                           <option value="Portugal">Portugal</option>
                        </optgroup>
                        <optgroup label="R">
                           <option value="Romania">Romania</option>
                           <option value="Russia">Russia</option>
                        </optgroup>
                        <optgroup label="S">
                           <option value="Samoa">Samoa</option>
                           <option value="San Marino">San Marino</option>
                           <option value="Serbia">Serbia</option>
                           <option value="Slovakia">Slovakia</option>
                           <option value="Slovenia">Slovenia</option>
                           <option value="Solomon Islands">Solomon Islands</option>
                           <option value="Spain">Spain</option>
                           <option value="Sweden">Sweden</option>
                           <option value="Switzerland">Switzerland</option>
                        </optgroup>
                        <optgroup label="T">
                           <option value="Timor Leste">Timor Leste</option>
                        </optgroup>
                        <optgroup label="U">
                           <option value="United Arab Emirates">United Arab Emirates</option>
                           <option value="United Kingdom of Great Britain and Northern Ireland">United Kingdom of Great Britain and Northern Ireland</option>
                           <option value="United States of America">United States of America</option>
                           <option value="Uruguay">Uruguay</option>
                        </optgroup>
                        <optgroup label="V">
                           <option value="Vanuatu">Vanuatu</option>
                           <option value="Venezuela">Venezuela</option>
                        </optgroup>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 mb-3">
               <div class="row">
                  <div class="col-sm-4">
                     <label for="evisa_purpose">Purpose of entry <span class="text-danger h5">*</span></label>
                  </div>
                  <div class="col-sm-8">
                     <select name="evisa_purpose" id="evisa_purpose" class="form-control form-control-lg">
                        <option value="">[ Choose immigration purpose ]</option>
                        <option value="aid activities">aid activities</option>
                        <option value="air crewman">air crewman</option>
                        <option value="business activities">business activities</option>
                        <option value="dealing with problem">dealing with problem</option>
                        <option value="diplomat">diplomat</option>
                        <option value="for volunteer">for volunteer</option>
                        <option value="internship">internship</option>
                        <option value="investment">investment</option>
                        <option value="journalism">journalism</option>
                        <option value="labor, employment">labor, employment</option>
                        <option value="office / orgarnization of economy, culture, technology, non-government">office / orgarnization of economy, culture, technology, non-government</option>
                        <option value="official visit">official visit</option>
                        <option value="participate in sport competitions">participate in sport competitions</option>
                        <option value="personal / private">personal / private</option>
                        <option value="playing fooball">playing fooball</option>
                        <option value="study">study</option>
                        <option value="summit, conference">summit, conference</option>
                        <option value="teaching">teaching</option>
                        <option value="to participate Asian Physics Olympic">to participate Asian Physics Olympic</option>
                        <option value="tourism">tourism</option>
                        <option value="tourism, visiting relatives">tourism, visiting relatives</option>
                        <option value="transit travel">transit travel</option>
                        <option value="visiting relatives">visiting relatives</option>
                        <option value="working">working</option>
                        <option value="other">other</option>
                     </select>
                  </div>
               </div>
            </div>
         </div>
         <h4 class="mt-4 mb-4"> <i class="fa fa-address-card-o" aria-hidden="true"></i>  Contact Information</h4>
         <div class="row mt-4">
            <div class="col-sm-4 mb-3">
               <label for="evisa_fullname">Full name <span class="text-danger h5">*</span></label>
               <input class="form-control form-control-lg" maxlength="150" type="text" name="evisa_fullname" id="evisa_fullname" value="">
            </div>
            <div class="col-sm-4 mb-3">
               <label for="evisa_email">Email <span class="text-danger h5">*</span></label>
               <input class="form-control form-control-lg" maxlength="150" type="text" name="evisa_email" id="evisa_email" value="">
            </div>
            <div class="col-sm-4 mb-3">
               <label for="evisa_phone">Phone number</label>
               <input class="form-control form-control-lg" maxlength="150" type="text" name="evisa_phone" id="evisa_phone" value="">
            </div>
         </div>
         <div class="mt-5"></div>
         <h3 class="mb-4 h4">
            <a data-toggle="collapse" class="" data-target="#children" aria-controls="faq2" aria-expanded="false" style="cursor: pointer;" title="Open children form">
            <i class="fa fa-chevron-down" aria-hidden="true"></i> Under 14 years old accompanying child(ren) included in your passport (if any)
            </a>
         </h3>
         <div class="collapse" id="children">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th scope="col" style="width: 60%">Children Infomation</th>
                     <th scope="col" style="width: 40%">Portrait Photo</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td scope="row">
                        <div class="row">
                           <div class="col-sm-4"><label for="evisa_childrenName1">1. Full name</label></div>
                           <div class="col-sm-8"><input class="form-control form-control-lg" maxlength="150" type="text" name="evisa_childrenName1" id="evisa_childrenName1" value=""></div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-sm-4"><label for="evisa_childrenSex">Sex</label></div>
                           <div class="col-sm-8">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <input type="radio" name="evisa_childrenSex1" id="child1_male" value="Male"> <label for="child1_male">Male</label>
                                 </div>
                                 <div class="col-sm-6">
                                    <input type="radio" name="evisa_childrenSex1" id="child1_female" value="Female"> <label for="child1_female">Female</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-sm-4"><label for="evisa_childrenDOB1">Date of birth</label></div>
                           <div class="col-sm-8">
                              <div class="input-group date" id="evisa_childrenDOB1" data-target-input="nearest">
                                 <input id="evisa_childrenDOB1" name="evisa_childrenDOB1" autocomplete="off" placeholder="MM dd, YYYY" type="text" class="form-control form-control-lg datetimepicker-input" aria-required="true" data-target="#evisa_childrenDOB1" value="">
                                 <div class="input-group-append" data-target="#evisa_childrenDOB1" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fal fa-calendar-alt fa-lg"></i></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </td>
                     <td>
                        <div class="kv-avatar">
                           <div class="file-input file-input-ajax-new">
                              <div class="file-preview ">
                                 <div class=" file-drop-zone clearfix">
                                    <div class="file-preview-thumbnails clearfix">
                                       <div class="file-default-preview"><img src="images/evisa-child1-photo.jpg" alt="Child 1 Photo" width="100" height="150"></div>
                                    </div>
                                    <div class="file-preview-status text-center text-success"></div>
                                    <div class="kv-fileinput-error"></div>
                                 </div>
                              </div>
                              <div class="kv-upload-progress kv-hidden" style="display: none;">
                                 <div class="progress">
                                    <div class="progress-bar bg-success progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                       0%
                                    </div>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                              <div tabindex="500" class="btn btn-secondary btn-file"><i class="fa fa-folder-open"></i>&nbsp;  <span class="hidden-xs">Browse …</span><input id="child1" name="child1" type="file"></div>
                           </div>
                        </div>
                        <div id="kv-child1-errors" class="mt-2 center-block alert alert-block alert-danger" style="width:100%;display:none"></div>
                     </td>
                  </tr>
                  <tr>
                     <td scope="row">
                        <div class="row">
                           <div class="col-sm-4"><label for="evisa_childrenName2">2. Full name</label></div>
                           <div class="col-sm-8"><input class="form-control form-control-lg" maxlength="150" type="text" name="evisa_childrenName2" id="evisa_childrenName2" value=""></div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-sm-4"><label for="evisa_childrenSex2">Sex</label></div>
                           <div class="col-sm-8">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <input type="radio" name="evisa_childrenSex2" id="child2_male" value="Male"> <label for="child2_male">Male</label>
                                 </div>
                                 <div class="col-sm-6">
                                    <input type="radio" name="evisa_childrenSex2" id="child2_female" value="Female"> <label for="child2_female">Female</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-sm-4"><label for="evisa_childrenDOB2">Date of birth</label></div>
                           <div class="col-sm-8">
                              <div class="input-group date" id="evisa_childrenDOB2" data-target-input="nearest">
                                 <input id="evisa_childrenDOB2" name="evisa_childrenDOB2" autocomplete="off" placeholder="MM dd, YYYY" type="text" class="form-control form-control-lg datetimepicker-input" aria-required="true" data-target="#evisa_childrenDOB2" value="">
                                 <div class="input-group-append" data-target="#evisa_childrenDOB2" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fal fa-calendar-alt fa-lg"></i></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </td>
                     <td>
                        <div class="kv-avatar">
                           <div class="file-input file-input-ajax-new">
                              <div class="file-preview ">
                                 <div class=" file-drop-zone clearfix">
                                    <div class="file-preview-thumbnails clearfix">
                                       <div class="file-default-preview"><img src="images/evisa-child2-photo.jpg" alt="Child 2 Photo" width="100" height="150"></div>
                                    </div>
                                    <div class="file-preview-status text-center text-success"></div>
                                    <div class="kv-fileinput-error"></div>
                                 </div>
                              </div>
                              <div class="kv-upload-progress kv-hidden" style="display: none;">
                                 <div class="progress">
                                    <div class="progress-bar bg-success progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                       0%
                                    </div>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                              <div tabindex="500" class="btn btn-secondary btn-file"><i class="fa fa-folder-open"></i>&nbsp;  <span class="hidden-xs">Browse …</span><input id="child2" name="child2" type="file"></div>
                           </div>
                        </div>
                        <div id="kv-child2-errors" class="mt-2 center-block alert alert-block alert-danger" style="width:100%;display:none"></div>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="mt-5"></div>
         <div class="mt-2 text-center"><input type="checkbox" name="v4_evisa_agree" id="v4_evisa_agree"> <label for="v4_evisa_agree">I assure that I have truthfully declared all relevant details.</label></div>
         <div class="row mt-3">
            <div class="d-flex w-100 justify-content-center">
               <div class="w-auto">
                  <button type="submit" class="btn btn-primary btn-block py-3 btn-lg">Review application form</button>
               </div>
            </div>
         </div>
      </form>
      <div class="mt-3 mb-5 clearfix"></div>
   </div>
</div>         
		 
 


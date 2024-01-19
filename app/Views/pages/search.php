<div class="evisa_reg">
            <div class="container">
               <h2>Check application status and download E-Visa</h2>
               <?php include('error.php'); ?>
            <?php echo form_open('fetch-seach-data'); ?>
               <form>
                  <div class="field">
                     <lable>Registration Code: 
                        <input type="text" name="registration" placeholder="Registration Code:"> 
                     </lable>
                  </div>
                  <div class="field">
                     <lable>Email 
                        <input type="text" name="email" placeholder="Email"> 
                     </lable>
                  </div>
                  <div class="field">
                     <lable>Date of birth: 
                        <input type="date" id="birthday" name="dob" placeholder="Date of Birth"> 
                     </lable>
                  </div>
                  <div class="field">
                     <button>Search</button>
                  </div>
               </form>
            <?php echo form_close(); ?>
            </div>
         </div>
 
 
 
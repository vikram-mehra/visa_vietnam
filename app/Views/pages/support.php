<div class="evisa_reg">
         <div class="container">
            <h2>E-visa support</h2>
            <p>Please send us your problems. We will contact you as soon as possible</p>
            <?php include('error.php'); ?>
            <?php echo form_open('submit-support-form'); ?>
            <form>
               <div class="field">
                  <lable>Your Name: 
                     <input type="text" name="name" placeholder="Your Name"> 
                  </lable>
               </div>
               <div class="field">
                  <lable>Passport Number: 
                     <input type="text" name="passport_no" placeholder="Passport Number"> 
                  </lable>
               </div>
               <div class="field">
                  <lable>Nationality: 
                     <input type="text" name="nationality" placeholder="Nationality"> 
                  </lable>
               </div>
               <div class="field">
                  <lable>Registration Email 
                     <input type="text" name="email" placeholder="Registration Email"> 
                  </lable>
               </div>
               <div class="field">
                  <lable>
                     Problem type: 
                     <select class="form-select" name="problem" aria-label="Default select example">
                        <option selected> Wrong application information</option>
                        <option value="1"> Pay failed</option>
                        <option value="2"> Don't remember registration code</option>
                        <option value="3">Others</option>
                     </select>
                  </lable>
               </div>
               <div class="field">
                  <lable>Description (Please write detail your problem) 
                     <textarea id="Description" name="description" rows="4" cols="50"></textarea>
                  </lable>
               </div>
               <div class="field">
              
                  <div class="field">
                     <button>Send</button>
                  </div>
            </form>
            <?php echo form_close(); ?>
            </div>
         </div>
 
 
  
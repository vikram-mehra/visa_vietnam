  <?php include 'header.php';?>
         <div class="evisa_reg">
            <div class="container">
               <h2>Vietnam E-Visa / Electronic Visa</h2>
               <div class="ecard_sec">
                  <h3>Vietnam E-Visa Application</h3>
                  <p>Vietnamese electronic visa (E-visa) is one of visa types issued to foreigners by Vietnamese Immigration Department via electronic system.</p>
                  <p>Vietnam E-Visa is a kind of travel documents granted by Vietnamese competent authorities, providing permission to travel to and enter Vietnam.</p>
                  <p>Vietnam Evisa is valid for maximum of 30 days, single entry only.</p>
               </div>
               <div class="ecard_sec">
                  <h3>Processing Time</h3>
                  <form>
                     <ul>
                        <li><input type="radio" name="browser" onclick="check(this.value)" value="60 USD">Normal - 4 working days<br></li>
                        <li><input type="radio" name="browser" onclick="check(this.value)" value="100 USD">Urgent - 3 working days<br></li>
                        <li><input type="radio" name="browser" onclick="check(this.value)" value="130 USD">Urgent - 2 working days<br></li>
                        <li><input type="radio" name="browser" onclick="check(this.value)" value="150 USD">Urgent - 1 working day<br></li>
                        <li><input type="radio" name="browser" onclick="check(this.value)" value="180 USD">Super Urgent - 4 working hours<br></li>
                        <li><input type="radio" name="browser" onclick="check(this.value)" value="220 USD">Super Urgent - 2 working hours<br></li>
                        <br>
                     </ul>
                  </form>
               </div>
               <div class="ecard_sec">
                  <h3>Service Fee</h3>
                  <ul>
                     <li><input type="text" id="answer" size="20"></li>
                  </ul>
                  <button><a href="apply-visa.php"> Apply Now </a> </button>
               </div>
            </div>
         </div>
         </div>
 
         <script>
            function check(browser) {
              document.getElementById("answer").value=browser;
            }
         </script>
   <?php include('footer.php'); ?>
<?php
  include("header.php");
?>
            <?php
			  if(isset( $str))
			  {
				  echo  $str;
			  }
			?>
                 
                 <form name="frm_users" method="post"  enctype="multipart/form-data" onSubmit="return checkRequired();">			
                    
                    <table class="table">
                         <tr>
						 <td>First Name</td>
						 <td>
						    <input type="text" name="first_name" id="first_name"  value="<?=$first_name?>" class="form-control-static">
						 </td>
				     </tr><tr>
						 <td>Last Name</td>
						 <td>
						    <input type="text" name="last_name" id="last_name"  value="<?=$last_name?>" class="form-control-static">
						 </td>
				     </tr><tr>
						 <td>Email</td>
						 <td>
						    <input type="text" name="email" id="email"  value="<?=$email?>" class="form-control-static">
						 </td>
				     </tr><tr>
						 <td>Password</td>
						 <td>
						    <input type="text" name="password" id="password"  value="<?=$password?>" class="form-control-static">
						 </td>
				     </tr>
                         <tr> 
                             <td align="right"></td>
                             <td>
                                <input type="hidden" name="cmd" value="register">
                                <input type="submit" name="btn_submit" id="btn_submit" value="submit" class="btn red">
                             </td>     
                         </tr>
                        </table>
                      
                </form>

<?php
  include("footer.php");
?>
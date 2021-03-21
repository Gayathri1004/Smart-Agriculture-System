<form action="reg_test.php" method="POST">
                <table>
                  <tr>
                    <td width="136" height="34" align="right">Name<font color="#FF0000">*</font></td>
                    <td width="811"><input type="text" name="pname" required></td>
                  </tr>
                  <tr>
                    <td width="136" height="34" align="right">Gender<font color="#FF0000">*</font></td>
                    <td width="811"><input type="text" name="gender" required></td>
                  </tr>
                  <tr>
                    <td width="136" height="34" align="right">Age<font color="#FF0000">*</font></td>
                    <td width="811"><input type="number" name="age" required></td>
                  </tr>
                  
                  <tr>
                    <td height="40" align="right">Phone NO<font color="#FF0000"> *</font></td>
                    <td>
                    <input type="phone" name="pmobile" required>  </td>
                  </tr>
                  <tr>
                    <td height="48" align="right">Address <font color="#FF0000">*</font></td>
                    <td><textarea name="address" id="paddress" required></textarea></td>
                  </tr>
                  <tr>
                    <td height="40" align="right">City <font color="#FF0000"> *</font></td>
                    <td width="811"><input type="text" name="pcity" required></td>
                  </tr>
              
                  <tr>
                    <td height="39" align="right">Email ID<font color="#FF0000"> *</font></td>
                    <td><input type="email_id" name="pemail" required></td>
                  </tr> 
                  <tr>
                    <td height="36" align="right">Password<font color="#FF0000"> *</font></td>
                    <td><input type="password" name="ppassword" required></td>
                  </tr>
                  <tr>
                    <td><input type="submit" value="Submit" name="register"></td>
                  </tr>
                </table>  
              </form>
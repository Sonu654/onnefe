/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

   function validate_password() {

                password = document.getElementById('password').value;
                re_password = document.getElementById('re-pass').value;
                if (password != re_password) {
                    document.getElementById("pass_validation").innerHTML = "Your Password not matched";
                }
            }

            function validate_form() {
                validate_password();
            }

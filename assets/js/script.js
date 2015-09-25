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


function match()
{
    if ((document.getElementById("c_u_pass").value) != (document.getElementById("c_s_pass").value))
    {
        document.getElementById('pass_res').innerHTML="old password does't match please enter again";
                document.getElementById('c_u_pass').value = "";
        document.getElementById('c_s_pass').value = "";

        document.getElementById('p1').focus();
        return false;
    }else{
        if((document.getElementById('n_u_pass'))!=(document.getElementById('r_n_u_pass'))){
                  document.getElementById('n_u_pass').value = "";
        document.getElementById('r_n_u_pass').value = "";
document.getElementById('pass_res').innerHTML="<span>new password does't match please enter again</span>";
        document.getElementById('n_u_pass').focus();  
        }else{
            
        }
    }
}


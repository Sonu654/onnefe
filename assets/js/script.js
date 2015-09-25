/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function validate_password() {



    if ((document.getElementById("password").value) != (document.getElementById('re-pass').value)) {
        document.getElementById("pass_validation").innerHTML = "Your Password not matched";
        document.getElementById('password').innerHTML = "";
        document.getElementById('re-pass').innerHTML = "";
        document.getElementById('re-pass').focus();

    }
}
   function show_interest(){
                            document.getElementById('interest').style.display="list-item";
                        }
                        
                        function hide_interest(){
                            document.getElementById('interest').style.display="none";
                        }
function match_pass(){
     if ((document.getElementById("n_u_pass").value) != (document.getElementById("r_n_u_pass").value))
    {
        document.getElementById('pass_res').innerHTML = "Password not matched!";
    }else{
        document.getElementById('pass_res').innerHTML = "Password matched!";
    }
}


function match()
{
    if ((document.getElementById("c_u_pass").value) != (document.getElementById("c_s_pass").value))
    {
        document.getElementById('pass_res').innerHTML = "old password does't match please enter again";
        document.getElementById('c_u_pass').value = "";
        document.getElementById('c_s_pass').value = "";
        document.getElementById('n_u_pass').value = "";
        document.getElementById('r_n_u_pass').value = "";
        document.getElementById('c_u_pass').focus();
        return false;
    } else {
        if ((document.getElementById('n_u_pass')) != (document.getElementById('r_n_u_pass'))) {
            document.getElementById('n_u_pass').value = "";
            document.getElementById('r_n_u_pass').value = "";
            document.getElementById('pass_res').innerHTML = "new password does't match please enter again";
            document.getElementById('n_u_pass').focus();
        }
    }
}


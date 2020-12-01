  function useraccount() {
                var letter = /^[A-Za-z]+$/;
                var emailvalidate = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                var data = /^[0-9-"/"]+$/
                var phone = /^\+?([0-9]{2})\)?[-.]?([0-9]{4})[-.]?([0-9]{4})$/;
                if (document.fom.firstname.value == "") {
                    document.getElementById("firstname").innerHTML = '<font color ="red">please fill the first Name</font>';
                    document.getElementById("lastname").innerHTML ='';          
                   document.fom.firstname.focus();
                    return false;
                }
                else if (!letter.test(document.fom.firstname.value)) {
                    document.getElementById('firstname').innerHTML = '<font color="red">please fill the fn only letter</font>';
                    document.getElementById("lastname").innerHTML ='';
                    document.fom.firstname.focus();
                    return false;
                }
                else if(document.fom.lastname.value == "") {
                    document.getElementById('lastname').innerHTML = '<font color ="red">please fill the last Name</font>';
                    document.getElementById('firstname').innerHTML ='';
                    document.fom.lastname.focus();
                    return false;
                }
                 else if (!letter.test(document.fom.lastname.value)) {
                    document.getElementById('lastname').innerHTML = '<font color="red">please fill the last name only letter</font>';
                    document.getElementById('firstname').innerHTML ='';
                    document.fom.lastname.focus();
                    return false;
                }else if(document.fom.sex.value == "sex") {
                    document.getElementById('sex').innerHTML = '<font color ="red">please select sex</font>';
                     document.getElementById('firstname').innerHTML ='';
                      document.getElementById("lastname").innerHTML ='';
                    document.fom.sex.focus();
                    return false;
                }else if(document.fom.userid.value == "") {
                    document.getElementById('userid').innerHTML = '<font color ="red">please fill User Id</font>';
                     document.getElementById('firstname').innerHTML ='';
                      document.getElementById("lastname").innerHTML ='';
                       document.getElementById('sex').innerHTML ='';
                    document.fom.userid.focus();
                    return false;
                }else if(document.fom.phonenumber.value == "") {
                    document.getElementById('phonenumber').innerHTML = '<font color ="red">please fill Phone Number</font>';
                     document.getElementById('firstname').innerHTML ='';
                      document.getElementById("lastname").innerHTML ='';
                       document.getElementById('sex').innerHTML ='';
                       document.getElementById('userid').innerHTML ='';
                    document.fom.phonenumber.focus();
                    return false;
                } else if (!phone.test(document.fom.phonenumber.value)) {
                    document.getElementById('phonenumber').innerHTML = '<font color="red">please enter valid phone number</font>';
                    document.getElementById('firstname').innerHTML ='';
                      document.getElementById("lastname").innerHTML ='';
                       document.getElementById('sex').innerHTML ='';
                       document.getElementById('userid').innerHTML ='';
                    document.fom.phonenumber.focus();
                    return false;
                }
                else if (document.fom.email.value == "") {
                    document.getElementById('email').innerHTML = '<font color="red">please enter valid email</font>';
                    document.getElementById('firstname').innerHTML ='';
                      document.getElementById("lastname").innerHTML ='';
                       document.getElementById('sex').innerHTML ='';
                       document.getElementById('userid').innerHTML ='';
                       document.getElementById('phonenumber').innerHTML ='';
                    document.fom.email.focus();
                    return false;
                }
                else if (!emailvalidate.test(document.fom.email.value)) {
                    document.getElementById('email').innerHTML = '<font color="red">please enter valid email </font>';
                    document.getElementById('firstname').innerHTML ='';
                      document.getElementById("lastname").innerHTML ='';
                       document.getElementById('sex').innerHTML ='';
                       document.getElementById('userid').innerHTML ='';
                       document.getElementById('phonenumber').innerHTML ='';
                    document.fom.email.focus();
                    return false;
                }
                else if (document.fom.username.value == "") {
                    document.getElementById('username').innerHTML = '<font color="red">please enter user name</font>';
                    document.getElementById('firstname').innerHTML ='';
                      document.getElementById("lastname").innerHTML ='';
                       document.getElementById('sex').innerHTML ='';
                       document.getElementById('userid').innerHTML ='';
                       document.getElementById('phonenumber').innerHTML ='';
                        document.getElementById('email').innerHTML ='';
                    document.fom.username.focus();
                    return false;
                }
                else if (!letter.test(document.fom.username.value)) {
                    document.getElementById('username').innerHTML = '<font color="red">please enter valid user name </font>';
                    document.fom.username.focus();
                    return false;
                }
                else if (document.fom.password.value == "") {
                    document.getElementById('password').innerHTML = '<font color ="red">please enter password</font>';
                    document.getElementById('firstname').innerHTML ='';
                      document.getElementById("lastname").innerHTML ='';
                       document.getElementById('sex').innerHTML ='';
                       document.getElementById('userid').innerHTML ='';
                       document.getElementById('phonenumber').innerHTML ='';
                        document.getElementById('email').innerHTML ='';
                    document.fom.password.focus();
                    return false;
                }
                else if (document.fom.usertype.value == "b") {
                    document.getElementById('usertype').innerHTML = '<font color ="red">please select your user type</font>';
                    document.getElementById('firstname').innerHTML ='';
                      document.getElementById("lastname").innerHTML ='';
                       document.getElementById('sex').innerHTML ='';
                       document.getElementById('userid').innerHTML ='';
                       document.getElementById('phonenumber').innerHTML ='';
                        document.getElementById('email').innerHTML ='';
                         document.getElementById('usertype').innerHTML ='';
                    document.fom.usertype.focus();
                    return false;
                }
                else if (document.fom.department.value == "a") {
                    document.getElementById('dep').innerHTML = '<font color ="red">please select your department</font>';
                    document.getElementById('firstname').innerHTML ='';
                      document.getElementById("lastname").innerHTML ='';
                       document.getElementById('sex').innerHTML ='';
                       document.getElementById('userid').innerHTML ='';
                       document.getElementById('phonenumber').innerHTML ='';
                        document.getElementById('email').innerHTML ='';
                         document.getElementById('usertype').innerHTML ='';
                          document.getElementById('usertype').innerHTML = '';
                    document.fom.department.focus();
                    return false;
                }
                    return true;
                }
            
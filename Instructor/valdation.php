<script type="text/javascript">
            function fun() {
                var letters = /^[A-Za-z]/;
                var numbers = /^[0-9]/;
                var minlength = '10';
                var re='0';
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                var fname = document.fom.fname.value;
                var lname = document.fom.lname.value;
                var age = document.fom.age.value;
                var sex = document.fom.sex.value;
                var email = document.fom.email.value;
                var gpa = document.fom.gpa.value;
                var phone = document.fom.phone.value;
                var jobtitle = document.fom.jobtitle.value;
                var upload = document.fom.upload.value;
                if (fname == '' || fname == 'null') {
                    document.getElementById('fname1').innerHTML = '<font color="red"> Please fill your first name??</font>';
                    document.getElementById('lname2').innerHTML = '';
                    document.getElementById('age3').innerHTML = '';
                    document.getElementById('sex4').innerHTML = '';
                    document.getElementById('email5').innerHTML = '';
                    document.getElementById('gpa6').innerHTML = '';
                    document.getElementById('phone7').innerHTML = '';
                    document.getElementById('jobtitle8').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.fname.focus();
                    return false;
                }
                else if (!letters.test(document.fom.fname.value)) {
                    document.getElementById("fname1").innerHTML = '<font color="blue"> Please fill  only letter??</font>';
                    document.getElementById('lname2').innerHTML = '';
                    document.getElementById('age3').innerHTML = '';
                    document.getElementById('sex4').innerHTML = '';
                    document.getElementById('email5').innerHTML = '';
                    document.getElementById('gpa6').innerHTML = '';
                    document.getElementById('phone7').innerHTML = '';
                    document.getElementById('jobtitle8').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.fname.focus();
                    return false;
                }
                 if (lname == '' || lname == 'null') {
                    document.getElementById('lname2').innerHTML = '<font color="red"> Please fill your first name??</font>';
                    document.getElementById('fname1').innerHTML = '';
                    document.getElementById('age3').innerHTML = '';
                    document.getElementById('sex4').innerHTML = '';
                    document.getElementById('email5').innerHTML = '';
                    document.getElementById('gpa6').innerHTML = '';
                    document.getElementById('phone7').innerHTML = '';
                    document.getElementById('jobtitle8').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.lname.focus();
                    return false;
                }  else if (!letters.test(document.fom.lname.value)) {
                    document.getElementById("lname2").innerHTML = '<font color="blue"> Please fill  only letter??</font>';
                  document.getElementById('fname1').innerHTML = '';
                    document.getElementById('age3').innerHTML = '';
                    document.getElementById('sex4').innerHTML = '';
                    document.getElementById('email5').innerHTML = '';
                    document.getElementById('gpa6').innerHTML = '';
                    document.getElementById('phone7').innerHTML = '';
                    document.getElementById('jobtitle8').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.lname.focus();
                    return false;
                }
                if (age == '' || age == 'null') {
                    document.getElementById('age3').innerHTML = '<font color="red"> Please fill your age??</font>';
                    document.getElementById('lname2').innerHTML = '';
                    document.getElementById('fname1').innerHTML = '';
                    document.getElementById('sex4').innerHTML = '';
                    document.getElementById('email5').innerHTML = '';
                    document.getElementById('gpa6').innerHTML = '';
                    document.getElementById('phone7').innerHTML = '';
                    document.getElementById('jobtitle8').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.age.focus();
                    return false;
                }
                 else if (!numbers.test(document.fom.age.value)) {
                    document.getElementById("age3").innerHTML = '<font color="blue"> Please fill  only number??</font>';
                  document.getElementById('lname2').innerHTML = '';
                    document.getElementById('fname1').innerHTML = '';
                    document.getElementById('sex4').innerHTML = '';
                    document.getElementById('email5').innerHTML = '';
                    document.getElementById('gpa6').innerHTML = '';
                    document.getElementById('phone7').innerHTML = '';
                    document.getElementById('jobtitle8').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.age.focus();
                    return false;
                }
                if (sex == '' || sex == 'null') {
                    document.getElementById('sex4').innerHTML = '<font color="red"> Please fill your email??</font>';
                    document.getElementById('age3').innerHTML = '';
                    document.getElementById('lname2').innerHTML = '';
                    document.getElementById('fname1').innerHTML = '';
                    document.getElementById('email5').innerHTML = '';
                    document.getElementById('gpa6').innerHTML = '';
                    document.getElementById('phone7').innerHTML = '';
                    document.getElementById('jobtitle8').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.sex.focus();
                    return false;
                }
                  else if (!letters.test(document.fom.sex.value)) {
                    document.getElementById("sex4").innerHTML = '<font color="blue"> Please fill only number??</font>';
                    document.getElementById('age3').innerHTML = '';
                    document.getElementById('lname2').innerHTML = '';
                    document.getElementById('fname1').innerHTML = '';
                    document.getElementById('email5').innerHTML = '';
                    document.getElementById('gpa6').innerHTML = '';
                    document.getElementById('phone7').innerHTML = '';
                    document.getElementById('jobtitle8').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.sex.focus();
                    return false;
                }
                if (email == '' || email == 'null') {
                    document.getElementById('email5').innerHTML = '<font color="red"> Please fill your email??</font>';
                    document.getElementById('sex4').innerHTML = '';
                    document.getElementById('age3').innerHTML = '';
                    document.getElementById('lname2').innerHTML = '';
                    document.getElementById('fname1').innerHTML = '';
                    document.getElementById('gpa6').innerHTML = '';
                    document.getElementById('phone7').innerHTML = '';
                    document.getElementById('jobtitle8').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.email.focus();
                    return false;
                }else if (!mailformat.test(document.fom.email.value)) {
                    document.getElementById('email5').innerHTML = '<font color="blue"> Please fill correct email format??</font>';
                    document.getElementById('sex4').innerHTML = '';
                    document.getElementById('age3').innerHTML = '';
                    document.getElementById('lname2').innerHTML = '';
                    document.getElementById('fname1').innerHTML = '';
                    document.getElementById('gpa6').innerHTML = '';
                    document.getElementById('phone7').innerHTML = '';
                    document.getElementById('jobtitle8').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.email.focus();
                    return false;
                }if (gpa == '' || gpa == 'null') {
                    document.getElementById('gpa6').innerHTML = '<font color="red"> Please fill your gpa??</font>';
                    document.getElementById('email5').innerHTML = '';
                    document.getElementById('sex4').innerHTML = '';
                    document.getElementById('age3').innerHTML = '';
                    document.getElementById('lname2').innerHTML = '';
                    document.getElementById('fname1').innerHTML = '';
                    document.getElementById('phone7').innerHTML = '';
                    document.getElementById('jobtitle8').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.gpa.focus();
                    return false;
                }
                else if (!numbers.test(document.fom.gpa.value)) {
                    document.getElementById("gpa6").innerHTML = '<font color="blue"> Please fill only numbers??</font>';
                    document.getElementById('email5').innerHTML = '';
                    document.getElementById('sex4').innerHTML = '';
                    document.getElementById('age3').innerHTML = '';
                    document.getElementById('lname2').innerHTML = '';
                    document.getElementById('fname1').innerHTML = '';
                    document.getElementById('phone7').innerHTML = '';
                    document.getElementById('jobtitle8').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.gpa.focus();
                    return false;
                }
                if (phone == '' || phone == 'null') {
                    document.getElementById('phone7').innerHTML = '<font color="red"> Please enter your phone number??</font>';
                    document.getElementById('gpa6').innerHTML = '';
                    document.getElementById('email5').innerHTML = '';
                    document.getElementById('sex4').innerHTML = '';
                    document.getElementById('age3').innerHTML = '';
                    document.getElementById('lname2').innerHTML = '';
                    document.getElementById('fname1').innerHTML = '';
                    document.getElementById('jobtitle8').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.phone.focus();
                    return false;
                }
                 else if (phone.length != minlength) {
              document.getElementById('phone7').innerHTML = '<font color="blue"> Please enter only 10 digite??</font>';
                    document.getElementById('gpa6').innerHTML = '';
                    document.getElementById('email5').innerHTML = '';
                    document.getElementById('sex4').innerHTML = '';
                    document.getElementById('age3').innerHTML = '';
                    document.getElementById('lname2').innerHTML = '';
                    document.getElementById('fname1').innerHTML = '';
                    document.getElementById('jobtitle8').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.phone.focus();
                    return false;
                }else if (phone.charAt(0) != re) {
              document.getElementById('phone7').innerHTML = '<font color="black"> the first number must be zero??</font>';
                    document.getElementById('gpa6').innerHTML = '';
                    document.getElementById('email5').innerHTML = '';
                    document.getElementById('sex4').innerHTML = '';
                    document.getElementById('age3').innerHTML = '';
                    document.getElementById('lname2').innerHTML = '';
                    document.getElementById('fname1').innerHTML = '';
                    document.getElementById('jobtitle8').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.phone.focus();
                    return false;
                }
                
                if (jobtitle == '' || jobtitle == 'null') {
                    document.getElementById('jobtitle8').innerHTML = '<font color="red"> Please enter jobtitle??</font>';
                    document.getElementById('phone7').innerHTML = '';
                    document.getElementById('gpa6').innerHTML = '';
                    document.getElementById('email5').innerHTML = '';
                    document.getElementById('sex4').innerHTML = '';
                    document.getElementById('age3').innerHTML = '';
                    document.getElementById('lname2').innerHTML = '';
                    document.getElementById('fname1').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.jobtitle.focus();
                    return false;
                }
                  else if (!letters.test(document.fom.jobtitle.value)) {
                    document.getElementById("jobtitle8").innerHTML = '<font color="blue"> Please fill only numbers??</font>';
                    document.getElementById('phone7').innerHTML = '';
                    document.getElementById('gpa6').innerHTML = '';
                    document.getElementById('email5').innerHTML = '';
                    document.getElementById('sex4').innerHTML = '';
                    document.getElementById('age3').innerHTML = '';
                    document.getElementById('lname2').innerHTML = '';
                    document.getElementById('fname1').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.jobtitle.focus();
                    return false;
                }
                 if (upload == '' || upload == 'null') {
                    document.getElementById('mname9').innerHTML = '<font color="red"> Please choose fill??</font>';
                    document.getElementById('jobtitle8').innerHTML = '';
                    document.getElementById('phone7').innerHTML = '';
                    document.getElementById('gpa6').innerHTML = '';
                    document.getElementById('email5').innerHTML = '';
                    document.getElementById('sex4').innerHTML = '';
                    document.getElementById('age3').innerHTML = '';
                    document.getElementById('lname2').innerHTML = '';
                    document.getElementById('fname1').innerHTML = '';
                    document.getElementById('mname9').innerHTML = '';
                    document.fom.upload.focus();
                    return false;
                }
                else {
                    return true;
                }
            }

        </script>
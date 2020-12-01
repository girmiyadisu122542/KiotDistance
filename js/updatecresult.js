function corsevalidation() {
    var numbers = /^[0-9]/;
    var letters = /^[A-Za-z]/;
    if (document.fom.Studentid.value == "default") {
        document.getElementById('sid').innerHTML = '<font color="red"> Please Select Student Id</font>';
        document.fom.Studentid.focus();
        return false;
          }
                else {
                    return true;
                }
            }

    
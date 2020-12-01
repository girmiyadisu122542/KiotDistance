function corsevalidation() {
    var numbers = /^[0-9]/;
    var letters = /^[A-Za-z]+$/;
    if (document.fom.coursename.value == "default") {
        document.getElementById('course').innerHTML = '<font color="red"> Please Select course code</font>';
        document.fom.coursename.focus();
        return false;
            }
    return true;
}

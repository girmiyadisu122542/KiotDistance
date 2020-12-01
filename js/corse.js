function corsevalidation() {
    var numbers = /^[0-9]/;
    var letters = /^[A-Za-z]+$/;
    if (document.fom.Studentid.value == "default") {
        document.getElementById('sid').innerHTML = '<font color="red"> Please Select Student Id</font>';
        document.fom.Studentid.focus();
        return false;
    } else if (document.fom.coursecode.value == "default") {
        document.getElementById('coid').innerHTML = '<font color="red"> Pleas Select Cource Code</font>';
        document.getElementById('sid').innerHTML = '';
        document.fom.coursecode.focus();
        return false;
    } else if (document.fom.Assigment1.value == "") {
        document.getElementById('ass1').innerHTML = '<font color="red"> Pleas fill Assignment one Value.</font>';
        document.getElementById('sid').innerHTML = '';
        document.getElementById('coid').innerHTML = '';
        document.fom.Assigment1.focus();
        return false;
    } else if (!numbers.test(document.fom.Assigment1.value)) {
        document.getElementById('ass1').innerHTML = '<font color="red"> Pleas inters Numbers Only.</font>';
        document.getElementById('sid').innerHTML = '';
        document.getElementById('coid').innerHTML = '';
        document.fom.Assigment1.focus();
        return false;
    } else if (document.fom.Assigment2.value == "") {
        document.getElementById('ass1').innerHTML = '';
        document.getElementById('ass2').innerHTML = '<font color="red"> Pleas fill Assignment one Value.</font>';
        document.getElementById('sid').innerHTML = '';
        document.getElementById('coid').innerHTML = '';
        document.fom.Assigment2.focus();
        return false;
    } else if (!numbers.test(document.fom.Assigment2.value)) {
        document.getElementById('ass1').innerHTML = '';
        document.getElementById('ass2').innerHTML = '<font color="red"> Pleas inters Numbers Only.</font>';
        document.getElementById('sid').innerHTML = '';
        document.getElementById('coid').innerHTML = '';
        document.fom.Assigment2.focus();
    } else if (document.fom.Quizz.value == "") {
        document.getElementById('quizz').innerHTML = '<font color="red"> Pleas fill Quizz Value.</font>';
        document.getElementById('ass1').innerHTML = '';
        document.getElementById('ass2').innerHTML = '';
        document.getElementById('sid').innerHTML = '';
        document.getElementById('coid').innerHTML = '';
        document.fom.Quizz.focus();
        return false;
    } else if (!numbers.test(document.fom.Quizz.value)) {
        document.getElementById('quizz').innerHTML = '<font color="red"> Pleas inters Numbers Only.</font>';
        document.getElementById('ass1').innerHTML = '';
        document.getElementById('ass2').innerHTML = '';
        document.getElementById('sid').innerHTML = '';
        document.getElementById('coid').innerHTML = '';
        document.fom.Quizz.focus();
    } else if (document.fom.Test1.value == "") {
        document.getElementById('test1').innerHTML = '<font color="red"> Pleas fill Test1 Value.</font>';
        document.getElementById('quizz').innerHTML =
                document.getElementById('ass1').innerHTML = '';
        document.getElementById('ass2').innerHTML = '';
        document.getElementById('sid').innerHTML = '';
        document.getElementById('coid').innerHTML = '';
        document.fom.Test1.focus();
        return false;
    } else if (!numbers.test(document.fom.Test1.value)) {
        document.getElementById('test1').innerHTML = '<font color="red"> Pleas inters Numbers Only.</font>';
        document.getElementById('quizz').innerHTML =
                document.getElementById('ass1').innerHTML = '';
        document.getElementById('ass2').innerHTML = '';
        document.getElementById('sid').innerHTML = '';
        document.getElementById('coid').innerHTML = '';
        document.fom.Test1.focus();
    } else if (document.fom.Test2.value == "") {
        document.getElementById('test2').innerHTML = '<font color="red"> Pleas fill Test2 Value.</font>';
        document.getElementById('test1').innerHTML ='';
        document.getElementById('quizz').innerHTML ='';
         document.getElementById('ass1').innerHTML = '';
        document.getElementById('ass2').innerHTML = '';
        document.getElementById('sid').innerHTML = '';
        document.getElementById('coid').innerHTML = '';
        document.fom.Test2.focus();
        return false;
    } else if (!numbers.test(document.fom.Test2.value)) {
        document.getElementById('test2').innerHTML = '<font color="red"> Pleas inters Numbers Only.</font>';
        document.getElementById('test1').innerHTML ='';
        document.getElementById('quizz').innerHTML =
        document.getElementById('ass1').innerHTML = '';
        document.getElementById('ass2').innerHTML = '';
        document.getElementById('sid').innerHTML = '';
        document.getElementById('coid').innerHTML = '';
        document.fom.Test2.focus();
        } else if (document.fom.Test3.value == "") {
             document.getElementById('test3').innerHTML ='<font color="red"> Pleas fill Test3 Value.</font>';
        document.getElementById('test2').innerHTML = '';
        document.getElementById('test1').innerHTML ='';
        document.getElementById('quizz').innerHTML ='';
         document.getElementById('ass1').innerHTML = '';
        document.getElementById('ass2').innerHTML = '';
        document.getElementById('sid').innerHTML = '';
        document.getElementById('coid').innerHTML = '';
        document.fom.Test3.focus();
        return false;
    } else if (!numbers.test(document.fom.Test3.value)) {
        document.getElementById('test3').innerHTML = '<font color="red"> Pleas inters Numbers Only.</font>';
        document.getElementById('test1').innerHTML ='';
         document.getElementById('test2').innerHTML = '';
        document.getElementById('quizz').innerHTML ='';
        document.getElementById('ass1').innerHTML = '';
        document.getElementById('ass2').innerHTML = '';
        document.getElementById('sid').innerHTML = '';
        document.getElementById('coid').innerHTML = '';
        document.fom.Test3.focus();
        } else if (document.fom.final.value == "") {
             document.getElementById('final').innerHTML ='<font color="red"> Pleas fill Final Value.</font>';
             document.getElementById('test3').innerHTML ='';
        document.getElementById('test2').innerHTML = '';
        document.getElementById('test1').innerHTML ='';
        document.getElementById('quizz').innerHTML ='';
         document.getElementById('ass1').innerHTML = '';
        document.getElementById('ass2').innerHTML = '';
        document.getElementById('sid').innerHTML = '';
        document.getElementById('coid').innerHTML = '';
        document.fom.final.focus();
        return false;
    } else if (!numbers.test(document.fom.final.value)) {
        document.getElementById('final').innerHTML = '<font color="red"> Pleas inters Numbers Only.</font>';
        document.getElementById('test3').innerHTML ='';
        document.getElementById('test1').innerHTML ='';
         document.getElementById('test2').innerHTML = '';
        document.getElementById('quizz').innerHTML ='';
        document.getElementById('ass1').innerHTML = '';
        document.getElementById('ass2').innerHTML = '';
        document.getElementById('sid').innerHTML = '';
        document.getElementById('coid').innerHTML = '';
        document.fom.final.focus();

        return false;
    }
    return true;
}

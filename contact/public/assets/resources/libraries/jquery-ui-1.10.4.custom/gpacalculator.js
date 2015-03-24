/**
 * Created with JetBrains PhpStorm.
 * User: Femencha Azombo Fabr
 * Date: 6/8/14
 * Time: 8:36 PM
 * To change this template use File | Settings | File Templates.
 */

function addRows(semester){
    var rowHTML = '<tr>\
                            <td><input class="gpa-form-data" type="text"></td>\
                            <td><input class="gpa-form-data" type="text" size="40"></td>\
                            <td><input class="gpa-form-data" type="text" onkeyup="validate(this , '+semester+')"></td>\
                            <td>\
                                <select class="gpa-form-data" onchange="processGPA('+semester+')">\
                                    <option value="-1">--</option>\
                                    <option value="4">A</option>\
                                    <option value="3.5">B+</option>\
                                    <option value="3">B</option>\
                                    <option value="2.5">C+</option>\
                                    <option value="2">C</option>\
                                    <option value="1.5">D+</option>\
                                    <option value="1">D</option>\
                                    <option value="0">F</option>\
                                </select>\
                            </td>\
                         <tr>' ;

    $((semester == 1) ? "#gpa-table1 tr:last" : "#gpa-table2 tr:last").after(function(){
        return rowHTML ;
    }) ;
}

function removeRows(semester){
    if(document.getElementById((semester == 1)? "gpa-table1" : "gpa-table2").rows.length > 2){
        $((semester == 1)? "#gpa-table1 tr:last" : "#gpa-table2 tr:last").remove();
    }

    else{
        alert("You cant delete the only row remaining") ;
    }

    processGPA(semester) ;
}

function validate(that , semester){
    if(that.value == "") ;
    else if(isNaN(that.value) || that.value == 0){
        alert("The credit value you entered is incorrect") ;
        that.value="" ;
    }
    processGPA(semester) ;
}

function processGPA(semester){
    var gpaValue = (semester == 1)? "gpa1" : "gpa2" ;
    var tableName = (semester == 1)? "gpa-table1" : "gpa-table2" ;
    var gradeSum = 0 ;
    var creditSum = 0 ;

    numRow = document.getElementById(tableName).rows.length ;
    for(var i = 1 ;  i < numRow ; i++){
        var cell = document.getElementById(tableName).rows[i].cells ;
        if(cell[2].children[0].value != "" && cell[3].children[0].value != -1){
            gradeSum += (cell[3].children[0].value *  parseFloat(cell[2].children[0].value)) ;
            creditSum += 4 * (cell[2].children[0].value ) ;
        }

        if(semester == 1){
            document.getElementById('acqCredit1').value = gradeSum ;
            document.getElementById('totalCredit1').value = creditSum ;
        }

        else{
            document.getElementById('acqCredit2').value = gradeSum ;
            document.getElementById('totalCredit2').value = creditSum ;
        }
    }

    var GPA  = (gradeSum/creditSum) * 4.00 ;
    if(isNaN(GPA)){
        GPA = 0;
    }

    document.getElementById(gpaValue).value = GPA.toFixed(2) ;
    processCumulativeGPA() ;
}

function processCumulativeGPA(){
    var acqCredit = parseFloat(document.getElementById("acqCredit1").value) + parseFloat(document.getElementById("acqCredit2").value) ;
    var totalCredit = parseFloat(document.getElementById("totalCredit1").value) + parseFloat(document.getElementById("totalCredit2").value) ;

    var GPA = (acqCredit/totalCredit) * 4.00 ;
    if(isNaN(GPA)){
        GPA = 0.00;
    }

    document.getElementById("cumGPA").value = GPA.toFixed(2) ;
}
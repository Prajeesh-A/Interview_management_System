function Calc(v) {
    /*Detail Calculation Each Row*/


    var index = $(v).parent().parent().parent().parent().index();
    var n1  = document.getElementsByName("n1[]")[index].value;
    var n2 = document.getElementsByName("n2[]")[index].value;
    var n3 = document.getElementsByName("n3[]")[index].value;
    var n4 = document.getElementsByName("n4[]")[index].value;
    var m1=parseInt(n1);
    var m2=parseInt(n2);
    var m3=parseInt(n3);
    var m4=parseInt(n4);
    var amt = m1+m2+m3+m4;
    document.getElementsByName("amt[]")[index].value = amt;

    
}


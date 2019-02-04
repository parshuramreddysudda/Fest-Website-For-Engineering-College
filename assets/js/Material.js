function show(nr) {
    document.getElementById("year1").style.display="none";
    document.getElementById("year2").style.display="none";
    document.getElementById("year3").style.display="none";
    document.getElementById("year4").style.display="none";
     document.getElementById("year5").style.display="none";
    document.getElementById("year6").style.display="none";
    document.getElementById("year7").style.display="none";
    document.getElementById("year8").style.display="none";
    document.getElementById("year"+nr).style.display="block";
  nr=nr+4;
    document.getElementById("year"+nr).style.display="block";

}

function con_home() {
  // body...
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main_content").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "index.php");
  xhttp.send();
}

function con_change() {
	// body...
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main_content").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "about.html");
  xhttp.send();
}

function con_contact() {
  // body...
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main_content").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "contact.html");
  xhttp.send();
}


function con_project() {
  // body...
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main_content").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "projects.php");
  xhttp.send();
}
function con_experience() {
  // body...
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main_content").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "exp.php");
  xhttp.send();
}
function con_skill() {
  // body...
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main_content").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "skill.php");
  xhttp.send();
}
 // $(document).ready(function(){
 // $("#btn_stb").click(function(){
 //  alert("hhhh");

 // });


 // });


function validateLogin(){
  var name = document.forms["login"]["username"].value;
  var password = document.forms["login"]["password"].value;
  if(name == null || name == ""){
    alert("Username is invalid");
    return false;
  }
  else if(password == null || password == ""){
    alert("Password is invalid");
    return false;
  }
}

function validateForm(){
  var q1 = document.forms["store"]["quantity1"].value;
  var q2 = document.forms["store"]["quantity2"].value;
  var q3 = document.forms["store"]["quantity3"].value;
  var ship = document.forms["store"]["shipping"].value;
  if(q1 == null || q1 == "" || parseInt(q1) < 0){
    alert("Bracelet quantity invalid");
    return false;
  }
  else if(q2 == null || q2 == "" || parseInt(q2) < 0){
    alert("Necklace quantity invalid");
    return false;
  }
  else if(q3 == null || q3 == "" || parseInt(q3) < 0){
    alert("Ring quantity invalid");
    return false;
  }
  else if(ship == null || ship == ""){
    alert("Must choose shipping option");
    return false;
  }
}

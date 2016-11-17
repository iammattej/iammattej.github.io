function countChar(val) {
            var len = val.value.length;
            if (len >= 501) {
                val.value = val.value.substring(0 , 500);
            }
            else{
                $('#charNum').text(500 - len);
            }
        };




        /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}








        function submitted() {
            var fname = document.forms["Contact"]["FirstName"].value;
            var lname = document.forms["Contact"]["LastName"].value;
            var email = document.forms["Contact"]["Email"].value;
            var message = document.forms["Contact"]["Message"].value;
            var fullname = fname + lname;

            var x = 0

            if (fullname == null || fullname == "") {
                x = x + 1
            }

            if (email == null || fullname == "") {
                x = x + 10
            }

            if (message == null || message == "") {
                x = x + 100
            }

            else {
                document.getElementById("submitted").innerHTML = x;
            }
        }
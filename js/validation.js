function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
            if (x == "") {
                alert("First Name must be filled out");
                return false;
            }
        var q = document.forms["myForm"]["lname"].value;
            if (q == "") {
                alert("Last Name must be filled out");
                return false;
            }
        var w = document.forms["myForm"]["email"].value;
            if (w == "") {
                alert("Please, write your email address!");
                return false;
            }
        var w = document.forms["myForm"]["pass"].value;
            if (w == "") {
                alert("Please, write your Password!");
                return false;
            }
}
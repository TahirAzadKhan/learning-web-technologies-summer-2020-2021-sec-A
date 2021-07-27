function validating() {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let bloodGroup = document.getElementById('bloodGroup').value;
    let gender = document.getElementById('gender').value;
    let Dob = document.getElementById('dob').value;
    let profilePic = document.getElementById('profilePic').value;
    let degree = document.getElementById('degree').value;

    function name_validating() {
        if (name == "") {
            document.getElementById('msg1').innerHTML = "*name field cannot be empty";
        } else {
            if (uname.split(" ").length < 2) {
                document.getElementById('msg1').innerHTML = "*name must contain at least 2 words";
            }
        }
    }

    function bloodGroup_validating() {
        if (bloodGroup == "") {
            document.getElementById('msg4').innerHTML = "*bloodGroup field cannot be empty";
        }
    }

    function email_validating() {
        if (email == "") {
            document.getElementById('msg5').innerHTML = "*email field cannot be empty";
        }
    }
        function gender_validating() {
            if (gender.checked == false) {
                document.getElementById('msg10').innerHTML = "*gender field cannot be empty";
            }
        }

        function dob_validating() {
            if (Dob == "") {
                document.getElementById('msg11').innerHTML = "**Date of Birth cannot be empty";
            }
        }

        function profilePic_validating() {
            if (profilePic == "") {
                document.getElementById('msg12').innerHTML = "**Picture cannot be empty";
            }
        }
        function degree_validating() {
            if (degree.checked == false) {
                document.getElementById('msg12').innerHTML = "**degree cannot be empty";
            }
        }
    }





const form = document.getElementById("appointmentForm");

// Submit Event
form.addEventListener("submit", function (event) {

    event.preventDefault();

    // Clear previous messages
    clearErrors();

    // Input Values
    let fname = document.getElementById("fname");
    let lname = document.getElementById("lname");
    let email = document.getElementById("email");
    let password = document.getElementById("password");
    let department = document.getElementById("department");
    let description = document.getElementById("description");

    let gender = document.querySelector('input[name="gender"]:checked');
    let services = document.querySelectorAll('input[name="service"]:checked');

    let valid = true;

    // ------------------------
    // First Name Validation
    // ------------------------

    if (fname.value.trim() == "") {

        showError(fname, "fnameError", "First name is required.");
        valid = false;

    }
    else if (!/^[A-Za-z ]+$/.test(fname.value.trim())) {

        showError(fname, "fnameError", "Only letters are allowed.");
        valid = false;

    }
    else {

        showSuccess(fname);

    }

    // ------------------------
    // Last Name Validation
    // ------------------------

    if (lname.value.trim() == "") {

        showError(lname, "lnameError", "Last name is required.");
        valid = false;

    }
    else if (!/^[A-Za-z ]+$/.test(lname.value.trim())) {

        showError(lname, "lnameError", "Only letters are allowed.");
        valid = false;

    }
    else {

        showSuccess(lname);

    }

    // ------------------------
    // Email Validation
    // ------------------------

    if (email.value.trim() == "") {

        showError(email, "emailError", "Email is required.");
        valid = false;

    }
    else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())) {

        showError(email, "emailError", "Invalid email address.");
        valid = false;

    }
    else {

        showSuccess(email);

    }

    // ------------------------
    // Password Validation
    // ------------------------

    if (password.value == "") {

        showError(password, "passwordError", "Password is required.");
        valid = false;

    }
    else if (password.value.length < 6) {

        showError(password, "passwordError", "Password must be at least 6 characters.");
        valid = false;

    }
    else {

        showSuccess(password);

    }

    // ------------------------
    // Gender Validation
    // ------------------------

    if (gender == null) {

        document.getElementById("genderError").innerHTML =
            "Please select your gender.";

        valid = false;

    }

    // ------------------------
    // Service Validation
    // ------------------------

    if (services.length == 0) {

        document.getElementById("serviceError").innerHTML =
            "Select at least one service.";

        valid = false;

    }

    // ------------------------
    // Department Validation
    // ------------------------

    if (department.value == "") {

        showError(
            department,
            "departmentError",
            "Please select a department."
        );

        valid = false;

    }
    else {

        showSuccess(department);

    }

    // ------------------------
    // Description Validation
    // ------------------------

    if (description.value.trim() == "") {

        showError(description, "descriptionError", "Health description is required.");
        valid = false;

    }
    else if (description.value.trim().length < 10) {

        showError(
            description,
            "descriptionError",
            "Description must be at least 10 characters."
        );

        valid = false;

    }
    else {

        showSuccess(description);

    }

    // ------------------------
    // Success
    // ------------------------

    if (valid) {

        document.getElementById("successMessage").innerHTML =
            "Appointment Registered Successfully!";

        form.reset();

        clearErrors();

    }

});

// ==========================
// Functions
// ==========================

// Show Error
function showError(input, errorId, message) {

    input.classList.add("errorBorder");
    input.classList.remove("successBorder");

    document.getElementById(errorId).innerHTML = message;

}

// Show Success
function showSuccess(input) {

    input.classList.remove("errorBorder");
    input.classList.add("successBorder");

}

// Clear All Errors
function clearErrors() {

    let errors = document.querySelectorAll(".error");

    errors.forEach(function (item) {

        item.innerHTML = "";

    });

    let fields = document.querySelectorAll("input, select, textarea");

    fields.forEach(function (field) {

        field.classList.remove("errorBorder");
        field.classList.remove("successBorder");

    });

    document.getElementById("successMessage").innerHTML = "";

}
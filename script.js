const form = document.getElementById("orderForm");

form.addEventListener("submit", function (event) {

    event.preventDefault();

    // Clear previous errors
    document.getElementById("nameError").textContent = "";
    document.getElementById("emailError").textContent = "";
    document.getElementById("phoneError").textContent = "";
    document.getElementById("studentIdError").textContent = "";
    document.getElementById("genderError").textContent = "";
    document.getElementById("departmentError").textContent = "";
    document.getElementById("foodError").textContent = "";
    document.getElementById("quantityError").textContent = "";
    document.getElementById("result").innerHTML = "";

    let valid = true;

    // Get values
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const studentId = document.getElementById("studentId").value.trim();
    const department = document.getElementById("department").value;
    const quantity = Number(document.getElementById("quantity").value);
    const instructions = document.getElementById("instructions").value.trim();

    // Name
    if (name === "") {
        document.getElementById("nameError").textContent = "Name cannot be empty.";
        valid = false;
    }

    // Email
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if (email === "") {
        document.getElementById("emailError").textContent = "Email cannot be empty.";
        valid = false;
    }
    else if (!emailPattern.test(email)) {
        document.getElementById("emailError").textContent = "Enter a valid email.";
        valid = false;
    }

    // Phone
    if (phone === "") {
        document.getElementById("phoneError").textContent = "Phone number cannot be empty.";
        valid = false;
    }

    // Student ID
    if (studentId === "") {
        document.getElementById("studentIdError").textContent = "Student ID cannot be empty.";
        valid = false;
    }

    // Gender
    const gender = document.querySelector('input[name="gender"]:checked');

    if (gender === null) {
        document.getElementById("genderError").textContent = "Please select your gender.";
        valid = false;
    }

    // Department
    if (department === "") {
        document.getElementById("departmentError").textContent = "Please select a department.";
        valid = false;
    }

    // Food Items
    const foods = document.querySelectorAll('input[name="food"]:checked');

    if (foods.length === 0) {
        document.getElementById("foodError").textContent = "Select at least one food item.";
        valid = false;
    }

    // Quantity
    if (quantity <= 0 || isNaN(quantity)) {
        document.getElementById("quantityError").textContent = "Quantity must be greater than 0.";
        valid = false;
    }

    // Stop if validation fails
    if (!valid) {
        return;
    }

    // Calculate Bill
    let totalPrice = 0;
    let selectedItems = "";

    foods.forEach(function (food) {

        let price = Number(food.dataset.price);

        totalPrice += price;

        selectedItems += food.value + " - $" + price + "<br>";
    });

    let totalBill = totalPrice * quantity;

    // Display Result
    document.getElementById("result").innerHTML = `
        <h2>Order placed successfully!</h2>

        <p><strong>Customer Name:</strong> ${name}</p>

        <p><strong>Student ID:</strong> ${studentId}</p>

        <p><strong>Department:</strong> ${department}</p>

        <p><strong>Gender:</strong> ${gender.value}</p>

        <p><strong>Selected Items:</strong><br>${selectedItems}</p>

        <p><strong>Quantity:</strong> ${quantity}</p>

        <p><strong>Special Instructions:</strong> ${instructions || "None"}</p>

        <h3>Total Bill: $${totalBill}</h3>
    `;

    // Reset Form
    form.reset();

});
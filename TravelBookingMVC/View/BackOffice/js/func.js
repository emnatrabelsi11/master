document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('OfferForm');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission

        // Get form values
        const title = document.getElementById('title').value;
        const destination = document.getElementById('destination').value;
        const departureDate = new Date(document.getElementById('departure_date').value);
        const returnDate = new Date(document.getElementById('return_date').value);
        const price = parseFloat(document.getElementById('price').value);
        const checkbox = document.getElementById('checkbox').checked;
        const category = document.getElementById('category').value;

        // Hide all error and success messages initially
        const messages = [
            'titleer', 'deser', 'depdater', 'retdater', 
            'prer', 'checker', 'cater', 
            'titlesuccess', 'destinationsuccess', 
            'departuredatesuccess', 'returndatesuccess', 
            'pricesuccess', 'checkboxsuccess', 'categorysuccess'
        ];
        messages.forEach(id => {
            document.getElementById(id).style.display = 'none';
        });

        let isValid = true;

        // Validate Title
        if (title.length < 3) {
            document.getElementById('titleer').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('titlesuccess').style.display = 'block';
        }

        // Validate Destination
        if (!/^[a-zA-Z\s]{3,}$/.test(destination)) {
            document.getElementById('deser').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('destinationsuccess').style.display = 'block';
        }

        // Validate Departure Date
        if (isNaN(departureDate.getTime())) {
            document.getElementById('depdater').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('departuredatesuccess').style.display = 'block';
        }

        // Validate Return Date
        if (isNaN(returnDate.getTime()) || returnDate <= departureDate) {
            document.getElementById('retdater').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('returndatesuccess').style.display = 'block';
        }

        // Validate Price
        if (price <= 0 || isNaN(price)) {
            document.getElementById('prer').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('pricesuccess').style.display = 'block';
        }

        // Validate Checkbox
        if (!checkbox) {
            document.getElementById('checker').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('checkboxsuccess').style.display = 'block';
        }

        // Validate Category
        if (category === "") {
            document.getElementById('cater').style.display = 'block';
            isValid = false;
        } else {
            document.getElementById('categorysuccess').style.display = 'block';
        }

        // If all validations pass, show success alert
        if (isValid) {
            alert('Form submitted successfully');
            // Uncomment the next line to submit the form
            // form.submit();
        }
    });
});
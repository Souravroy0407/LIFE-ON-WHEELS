
document.getElementById("bookingForm").addEventListener("submit", function(event) {
event.preventDefault(); // Prevent the form from submitting immediately

var serviceId = "{{ $s->service_id }}"; // Access the service_id value
var pnumber = document.getElementById("pnumber").value;
var url = "/booking/" + encodeURIComponent(pnumber) + "/" + serviceId;
this.action = url;

// Submit the form
this.submit();
});


//for terms and condition checkbox checking
document.addEventListener("DOMContentLoaded", function () {
document.getElementById("submitButton").disabled = true;
const acceptTermsCheckbox = document.getElementById("acceptTerms");
const submitButton = document.getElementById("submitButton");

// Check if the user has agreed to the terms and enable the submit button accordingly
acceptTermsCheckbox.addEventListener("change", function () {
if((document.getElementById("validationResult").innerHTML === "Invalid phone number")||(document.getElementById("validationResult2").innerHTML === "Invalid email address")||(acceptTermsCheckbox.checked === false)){
    submitButton.disabled = true;
}
else{
    submitButton.disabled = false;
}
});

// Listen for the "Agree" button click
document.getElementById("agreeButton").addEventListener("click", function () {
// Set a flag to indicate that the user has agreed
acceptTermsCheckbox.checked = true;
if((document.getElementById("validationResult").innerHTML === "Invalid phone number")||(document.getElementById("validationResult2").innerHTML === "Invalid email address")||(acceptTermsCheckbox.checked === false)){
    submitButton.disabled = true;
}
else{
    submitButton.disabled = false;
}
});

// Listen for form submission
document.getElementById("myForm").addEventListener("submit", function (e) {
e.preventDefault();
// Handle form submission logic here
alert("Form submitted!");
});
});

// Get a reference to the checkbox element
var checkbox = document.getElementById('acceptTerms');

// Check if the checkbox is selected
if (checkbox.checked) {
console.log('Checkbox is selected');
} else {
console.log('Checkbox is not selected');
}


//for distance calculation and convert javascript value into php
function calculateDistance2() {
var origin = document.getElementById("origin").value;
var destination = document.getElementById("destination").value;

var service = new google.maps.DistanceMatrixService();
service.getDistanceMatrix({
    origins: [origin],
    destinations: [destination],
    travelMode: 'DRIVING',
}, function(response, status) {
    if (status == 'OK') {
        var distance = response.rows[0].elements[0].distance.text;
        distance = distance.replace(' km', ''); // Remove " km" from the string
        document.getElementById("result").innerHtml = "Distance: " + distance;
        // Update the PHP variable with the calculated distance
        var distanceInput = document.createElement('input');
            distanceInput.type = 'hidden';
            distanceInput.name = 'distance';
            distanceInput.value = distance;

            var form = document.querySelector('form');
            form.appendChild(distanceInput);
            form.submit();
    } else {
        document.getElementById("result").innerHTML = "Error: Unable to calculate distance.";
    }
});
}


//form map
function initMap() {

    var origin = document.getElementById("origin").value;
    var destination = document.getElementById("destination").value;


    const directionsService = new google.maps.DirectionsService();
    const directionsRenderer = new google.maps.DirectionsRenderer();
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 12,
        center: { lat: 22.5726, lng: 88.3639 }, 
        disableDefaultUI: true, // Disable the default user interface
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    directionsRenderer.setMap(map);

    // Define the request for directions
    const request = {
        origin: origin,
        destination: destination,
        travelMode: google.maps.TravelMode.DRIVING,
    };

    // Get directions and display them on the map
    directionsService.route(request, function (result, status) {
        if (status === google.maps.DirectionsStatus.OK) {
            directionsRenderer.setDirections(result);
        } else {
            console.error("Directions request failed:", status);
        }
    });
}
window.onload = initMap;


//validate phone no
function validatePhoneNumber(input) {
    var phoneNumber = input.value;
    var phonePattern = /^\d{10}$/; // This example assumes a 10-digit phone number

    if (phonePattern.test(phoneNumber)) {
        document.getElementById("validationResult").innerHTML = "";
        return val();
        //document.getElementById("submitButton").removeAttribute("disabled");
    } else {
        document.getElementById("acceptTerms").checked = false;
        
        document.getElementById("validationResult").innerHTML = "Invalid phone number";
        
        document.getElementById("submitButton").setAttribute("disabled", "disabled");
        
        };
    }

    //validate email address
    function validateEmail(input) {
        var email = input.value;
        var emailPattern = /^[a-zA-Z0-9._-]+@(gmail\.com|yahool\.com|hotmail\.com|outlook\.com)$/;

        if (emailPattern.test(email)) {
            document.getElementById("validationResult2").innerHTML = "";
            return val();
            //document.getElementById("submitButton").removeAttribute("disabled");
        } else {
            document.getElementById("acceptTerms").checked = false;
            document.getElementById("validationResult2").innerHTML = "Invalid email address";
            document.getElementById("submitButton").setAttribute("disabled", "disabled");
            
            
        }
    }
//validate to enable/disable submit button
function val(){
    const isEmailValid = document.getElementById("validationResult2").innerHTML === "";
        const isPhoneValid = document.getElementById("validationResult").innerHTML === "";
        const isTermsAccepted = acceptTermsCheckbox.checked;

        if (isEmailValid && isPhoneValid && isTermsAccepted) {
            submitButton.removeAttribute("disabled");
        } else {
            submitButton.setAttribute("disabled", "disabled");
        }

}





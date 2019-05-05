var servicesButton = document.getElementsByClassName('services_button');
var requestForm = document.getElementById('services_request-form_wrapper');

console.log("servicesButton=" + servicesButton);
console.log("requestForm=" + requestForm);

if (servicesButton !== null) {
    for (var i = 0, l = servicesButton.length; i < l; i++) {
        servicesButton[i].addEventListener('click', function () {
            showRequestForm();
        });
    }
}

function showRequestForm() {
    requestForm.classList.add("show");
};

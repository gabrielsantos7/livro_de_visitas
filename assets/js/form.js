const form = document.getElementById("form");
form.addEventListener('submit', validateInput);

const pAlert = document.getElementById('p-alert');

const input = document.getElementById("name");
input.addEventListener('keyup', capitalizeFirstLetter);
input.addEventListener('blur', validateInput);

input.addEventListener("keydown", function(event) {
    if (event.key >= '0' && event.key <= '9') {
        event.preventDefault();
    }
});

function showAlert() {
    pAlert.classList.remove('invisible');
    input.style.border = "2px solid rgb(204, 31, 31)"
}

function hideAlert() {
    pAlert.classList.add('invisible');
    input.style.border = "2px solid #003cffaa";
}

function capitalizeFirstLetter() {
    hideAlert();
    let inputValue = input.value;

    let words = inputValue.split(' ');

    for (let i = 0; i < words.length; i++) {
        if (words[i].length > 0) {
            words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
        }
    }

    let capitalizedText = words.join(' ');

    input.value = capitalizedText;
}

function validateInput(event) {

    let inputValue = input.value;

    if (inputValue.length <= 3) {
        showAlert();
        event.preventDefault();
    } else {
        hideAlert();
    }
}

window.onload = function() {
    sweetalert();
};

function sweetalert() {
    Swal.fire({
        title: 'Bien Hecho',
        text: "Tus resultados se han calculado!",
        icon: 'success',
        confirmButtonText: 'Ver Resultados'
    });
};


function validarForm() {
    lado1 = document.getElementById('lado1');
    lado2 = document.getElementById('lado2');
    lado3 = document.getElementById('lado3');

    let isValid = true;

    if (lado1) {
        if (lado1.value === '') {
            document.getElementById('error-lado1').textContent = "El campo no puede estar vacío";
            isValid = false;
        } else if (lado1.value < 1) {
            document.getElementById('error-lado1').textContent = "El campo no puede ser menor que 0.";
            isValid = false;
        } else {
            document.getElementById('error-lado1').textContent = "";

        }

    }

    if (lado2) {
        if (lado2.value === '') {
            document.getElementById('error-lado2').textContent = "El campo no puede estar vacío";
            isValid = false;
        } else if (lado2.value < 1) {
            document.getElementById('error-lado2').textContent = "El campo no puede ser menor que 0.";
            isValid = false;
        } else {
            document.getElementById('error-lado2').textContent = "";
        }
    }

    if (lado3) {
        if (lado3.value === '') {
            document.getElementById('error-lado3').textContent = "El campo no puede estar vacío";
            isValid = false;
        } else if (lado3.value < 1) {
            document.getElementById('error-lado3').textContent = "El campo no puede ser menor que 0.";
            isValid = false;
        } else {
            document.getElementById('error-lado3').textContent = "";
        }
    }

    return isValid;


}
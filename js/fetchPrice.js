var typeSelect = document.getElementById("type");
var priceSelect = document.getElementById("price");
var totalPrice = document.getElementById("totalPrice");
typeSelect.addEventListener("change", function() {
    var id = typeSelect.value;
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "http://localhost/lawyerProject/php/getPrice.php?id=" + id);
    xhr.onload = function() {
        if (xhr.status === 200) {
            var price = JSON.parse(xhr.responseText);
            priceSelect.value = price;
            totalPrice.textContent = price;
        }
    };
    xhr.send();
});
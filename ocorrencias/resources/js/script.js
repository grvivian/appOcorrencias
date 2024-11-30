const input = document.querySelector('input');
const img = document.getElementById('foto2');

input.addEventListener('change', function() {
 const reader = new FileReader();
 reader.onload = function(e) {
 img.src = e.target.result;
 };
 reader.readAsDataURL(input.files[0]);
});

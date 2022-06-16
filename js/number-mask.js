
let elements = document.getElementsByClassName("number");

for (let i = 0; i < elements.length; i++) {
new IMask(elements[i], {
    mask: "+{7}(000)000-00-00",
});
}

// <script src="https://unpkg.com/imask"></script>
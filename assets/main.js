document.querySelectorAll('a.btn-like').forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault()
        var spanCount = link.querySelector('span.like_count')
        var icone = link.querySelector('i')

        if (icone.classList.contains('fas')) {
            icone.classList.replace('fas', 'far')
            spanCount.innerHTML = 0
        } else {
            icone.classList.replace('far', 'fas')
            spanCount.innerHTML = 1
        }
    })
})

function darkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}

function burgerMenu() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
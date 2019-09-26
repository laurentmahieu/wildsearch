let checkbox = document.querySelector('input[name=theme]');

checkbox.addEventListener('change', function() {
    if(this.checked) {
        trans()
        document.documentElement.setAttribute('data-theme', 'dark')
    } else {
        trans()
        document.documentElement.setAttribute('data-theme', 'light')
    }
})

let trans = () => {
    document.documentElement.classList.add('transition');
    window.setTimeout(() => {
        document.documentElement.classList.remove('transition')
    }, 1000)
}

function darkLight() {
    if (localStorage.toggled != 'dark') {
       $('#main, p').toggleClass('dark', true);
       localStorage.toggled = "dark";
    } else {
       $('#main, p').toggleClass('dark', false);
       localStorage.toggled = "";
    }
 }
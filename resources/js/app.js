require('./bootstrap');

require('alpinejs');

// Autosize each textarea and on input
document.querySelectorAll('textarea').forEach(item => {

    item.addEventListener('input', function(event) {
        event.target.style.height = (event.target.scrollHeight)+"px";
    });
});

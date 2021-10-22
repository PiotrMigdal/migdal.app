require('./bootstrap');

require('alpinejs');

// Autosize textarea on click and input
['input', 'click'].forEach( event =>
    document.querySelectorAll('textarea').forEach(item => {
        item.addEventListener(event, function(event) {
            event.target.style.height = (event.target.scrollHeight)+"px";
        });
    })
);
document.querySelector('.enlarge').addEventListener('click', function() {
    document.querySelector('.enlarged').classList.remove('hidden');
    document.querySelector('.enlarged').classList.add('flex');
});
document.querySelector('.enlarged').addEventListener('click', function() {
    document.querySelector('.enlarged').classList.add('hidden');
    document.querySelector('.enlarged').classList.remove('flex');
});
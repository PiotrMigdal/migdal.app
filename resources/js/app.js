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

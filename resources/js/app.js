import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Echo from 'laravel-echo';

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'your-pusher-key', // Ezt a Pusher API kulcsoddal kell helyettesíteni
    cluster: 'your-pusher-cluster', // Ezt a Pusher clusterről szerezd be
    encrypted: true
});



    window.Echo.channel('comments')
    .listen('NewComment', (event) => {
        alert('Új komment érkezett: ' + event.comment.body); // vagy használhatsz egyedi értesítési módot
    });
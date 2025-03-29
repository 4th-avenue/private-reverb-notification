import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const userId = document.querySelector("meta[name='user-id']").getAttribute("content");
window.Echo.private(`user.${userId}`)
.listen('.private-notification', (event) => {
    alert(event.message);
})

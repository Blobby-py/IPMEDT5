document.addEventListener('DOMContentLoaded', function () {
    const nextUserBtn = document.getElementById('next-user-btn');
    const currentUserDiv = document.getElementById('current-user');
    const activeUsers = JSON.parse(currentUserDiv.dataset.activeUsers);
    const esp32Users = activeUsers.filter(user => user.device_type === 'esp32'); // Filter alleen gebruikers met device_type 'esp32'
    let currentUserIndex = 0;

    nextUserBtn.addEventListener('click', () => {
        currentUserIndex = (currentUserIndex + 1) % esp32Users.length;
        currentUserDiv.innerHTML = `<p>Aan de beurt: ${esp32Users[currentUserIndex].ip_address}</p>`;
    });
});
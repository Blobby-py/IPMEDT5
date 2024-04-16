document.addEventListener('DOMContentLoaded', function () {
    const nextUserBtn = document.getElementById('next-user-btn');
    const currentUserDiv = document.getElementById('current-user');
    const activeUsers = JSON.parse(currentUserDiv.dataset.activeUsers);
    let currentUserIndex = 0;

    nextUserBtn.addEventListener('click', () => {
        currentUserIndex = (currentUserIndex + 1) % activeUsers.length;
        currentUserDiv.innerHTML = `<p>Aan de beurt: ${activeUsers[currentUserIndex].ip_address}</p>`;
    });
});
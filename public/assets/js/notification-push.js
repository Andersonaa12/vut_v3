import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,   // tu key en .env
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true
});

window.Echo.private(`App.Models.User.${user_id}`)
    .notification((notification) => {
        console.log("🔔 Nueva notificación recibida:", notification);

        const countEl = document.getElementById("notification-count");
        let count = parseInt(countEl.innerText) || 0;
        countEl.innerText = count + 1;

        const dropdown = document.querySelector("#dropdownMenuButton + .dropdown-menu");
        const li = document.createElement("li");
        li.classList.add("mb-2");
        li.innerHTML = `
          <a class="dropdown-item border-radius-md" href="javascript:;">
            <div class="d-flex py-1">
              <div class="my-auto">
                <div class="user-initials rounded-circle text-center text-white fw-bold d-flex align-items-center justify-content-center"
                  style="background-color: rgba(0, 159, 189, 1); width: 40px; height: 40px; font-size: 16px;">
                  ${getInitials(notification.sender_name ?? "U")}
                </div>
              </div>
              <div class="d-flex flex-column justify-content-center ms-2">
                <h6 class="text-sm font-weight-normal mb-1">
                  <span class="font-weight-bold">${notification.sender_name ?? "Usuario"}</span>: 
                  ${notification.title}
                </h6>
                <p class="text-xs text-secondary mb-0">
                  ${notification.description}
                </p>
                <p class="text-xs text-secondary mb-0">
                  <i class="fa fa-clock me-1"></i> Justo ahora
                </p>
              </div>
            </div>
          </a>
        `;
        dropdown.prepend(li);
    });

function getInitials(name) {
    let parts = name.trim().split(" ");
    return (parts[0]?.[0] || "") + (parts[1]?.[0] || "");
}

document.addEventListener('DOMContentLoaded', () => {
    // Referências para os elementos HTML
    const profileContainer = document.getElementById('profile-container');
    const settingsItem = document.getElementById('settings-item');
    const settingsModal = document.getElementById('settings-modal');
    const closeSettingsBtn = document.getElementById('close-settings');

    // Funcionalidade para o menu de notificação (do exemplo anterior)
    const notificationToggle = document.getElementById('notification-toggle');
    const notificationOptions = document.getElementById('notification-options');

    // Lida com o clique no item "Configurações"
    settingsItem.addEventListener('click', () => {
        // Oculta a tela de perfil
        // profileContainer.classList.add('hidden');
        
        // Exibe a tela de configurações após um pequeno atraso
        setTimeout(() => {
            settingsModal.classList.add('show');
        }, 500); // O atraso deve corresponder à duração da transição CSS
    });

    // Lida com o clique no botão de fechar da tela de configurações
    closeSettingsBtn.addEventListener('click', () => {
        // Oculta a tela de configurações
        settingsModal.classList.remove('show');
        
        // Exibe a tela de perfil após um pequeno atraso
        setTimeout(() => {
            profileContainer.classList.remove('hidden');
        }, 500); // O atraso deve corresponder à duração da transição CSS
    });
    
    // Funcionalidade do menu de notificação (código do exemplo anterior)
    notificationToggle.addEventListener('click', (event) => {
        event.stopPropagation();
        const isVisible = notificationOptions.classList.toggle('drop-up');

        if (isVisible) {
            document.addEventListener('click', closeMenu);
        } else {
            document.removeEventListener('click', closeMenu);
        }
    });

    function closeMenu(event) {
        if (!notificationOptions.contains(event.target) && !notificationToggle.contains(event.target)) {
            notificationOptions.classList.remove('drop-up');
            document.removeEventListener('click', closeMenu);
        }
    }

    const options = notificationOptions.querySelectorAll('.option');
    options.forEach(option => {
        option.addEventListener('click', (event) => {
            event.stopPropagation();
            const statusText = option.textContent;
            document.querySelector('.notification-status').textContent = statusText;
            notificationOptions.classList.remove('drop-up');
        });
    });
});
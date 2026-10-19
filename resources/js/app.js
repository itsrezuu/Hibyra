import './bootstrap';

const menuToggle = document.querySelector('.menu-toggle');
const navigation = document.querySelector('.primary-navigation');

if (menuToggle && navigation) {
    const closeMenu = () => {
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Buka navigasi');
        navigation.classList.remove('is-open');
    };

    menuToggle.addEventListener('click', () => {
        const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
        menuToggle.setAttribute('aria-expanded', String(!isOpen));
        menuToggle.setAttribute('aria-label', isOpen ? 'Buka navigasi' : 'Tutup navigasi');
        navigation.classList.toggle('is-open', !isOpen);
    });

    navigation.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMenu));
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') closeMenu();
    });
}

document.querySelectorAll('[data-filter]').forEach((filterButton) => {
    filterButton.addEventListener('click', () => {
        const filter = filterButton.dataset.filter;

        document.querySelectorAll('[data-filter]').forEach((button) => {
            const isSelected = button === filterButton;
            button.classList.toggle('is-selected', isSelected);
            button.setAttribute('aria-pressed', String(isSelected));
        });

        document.querySelectorAll('.catalog-item').forEach((item) => {
            const itemCategory = item.querySelector('[data-menu-category]')?.dataset.menuCategory;
            item.classList.toggle('is-hidden', filter !== 'all' && itemCategory !== filter);
        });
    });
});

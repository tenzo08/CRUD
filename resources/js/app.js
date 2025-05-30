import './bootstrap';

window.addEventListener('DOMContentLoaded', () => {
    const filterSelect = document.getElementById('filter-active');
    const searchBox = document.getElementById('search-box');

    if (filterSelect && searchBox) {
        filterSelect.addEventListener('change', updateEntriesCount);
        searchBox.addEventListener('input', updateEntriesCount);
        updateEntriesCount();
    }
});

function updateEntriesCount() {
    const filterSelect = document.getElementById('filter-active');
    const searchTerm = document.getElementById('search-box').value.toLowerCase();
    const rows = document.querySelectorAll('tbody tr');
    let visibleCount = 0;

    rows.forEach(row => {
        const isActive = row.getAttribute('data-active');
        const name = row.querySelector('td a').textContent.toLowerCase();

        const matchesFilter = filterSelect.value === 'all' || isActive === filterSelect.value;
        const matchesSearch = name.includes(searchTerm);

        if (matchesFilter && matchesSearch) {
            row.style.display = '';
            visibleCount++;
        } else {
            row.style.display = 'none';
        }
    });

    const counter = document.getElementById('entries-count');
    if (counter) {
        counter.textContent = 'No. of entries : ' + visibleCount;
    }
}

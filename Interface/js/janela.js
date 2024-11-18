const areas = document.querySelectorAll('.area');
const AreaInfo = document.getElementById('AreaInfo');
const InfoAutomovel = document.getElementById('InfoAutomovel');

areas.forEach(area => {
    area.addEventListener('click', () => {
        const info = area.getAttribute('data-info');

        InfoAutomovel.textContent = info;

        AreaInfo.classList.add('open');
    });
});
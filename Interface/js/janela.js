const areas = document.querySelectorAll('.area');
const AreaInfo = document.getElementById('AreaInfo');
const InfoAutomovel = document.getElementById('InfoAutomovel');
const TituloInfo = document.getElementById('TituloInfo');

areas.forEach(area => {
    area.addEventListener('click', () => {
        const info = area.getAttribute('data-info');
        const titulo = area.textContent;

        InfoAutomovel.textContent = info;
        TituloInfo.textContent = titulo;

        AreaInfo.classList.add('open');
    });
});
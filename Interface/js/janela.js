// Seleção dos elemento em HTML
const areas = document.querySelectorAll('.area');   // selecionar todas as classes '.area'
const infoBox = document.getElementById('infoBox'); // seleciona o id 'infoBox' do formulario
const infoTitle = document.getElementById('infoTitle'); // seleciona o id 'infoTitle' dentro do formulario
const infoDetails = document.getElementById('infoDetails'); // slecioaa o id 'infoDetails' dentro form
const infoBoxContainer = document.getElementById('infoBoxContainer');   // seleciona o id 'infoBoxConteinar' seria o div da janela

// faz um varredura verificnado cada area{classe} e cada uma delas se atribuindo a varial 'area' dentro dos paramentro
areas.forEach(area => {
    // Adiciona o evento de clique sáreas
    area.addEventListener('click', () => {
        // Obtém as informações da área clicada
        const areaInfo = area.getAttribute('data-info');  // pega as informçãoes que estaõ dentro do atributo data-info que contem o PHP e joga na variavel
        const areaName = area.textContent;  // Pegar o nome que mostra na tela e joga na variavel

        // Define as informações na janela
        infoTitle.textContent = areaName; // pegar é mostrado na tela e é jogado para o 'id' infoTItle dentro do from que ficara no topo da janela
        infoDetails.innerHTML = areaInfo; // pegas as informações do atributo data-info e joga para dentro do id infoDetails que esta dentro do from e mostrara as iformaçõe dos autmoves, a função innerHTML permite que a tag <br> funcione corretamente

        // Exibe a janela lateral com efeito deslizante
        infoBoxContainer.style.display = 'block'; // Torna a janela visível
        setTimeout(() => {
            infoBoxContainer.style.transform = 'translateX(0)'; // Desliza a janela
        }, 10); // Atraso para a transição funcionar corretamente
    });
});

// de forma sincera, isso aqui não etendi muito ainda
// Oculta a janela lateral ao clicar fora da área ou da janela
document.addEventListener('click', (e) => {
    if (!infoBoxContainer.contains(e.target) && ![...areas].includes(e.target)) {
        infoBoxContainer.style.transform = 'translateX(100%)'; // Oculta a janela lateral
        setTimeout(() => {
            infoBoxContainer.style.display = 'none'; // Torna a janela invisível
        }, 300); // Aguarda a animação de esconder
    }
});
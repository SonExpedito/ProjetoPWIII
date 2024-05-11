let carousel = document.querySelector('.carousel');
let sliders = [];

let slideIndex = 0;

let movies = [
    {
        name: 'X-MEN 97',
        des: ' A história de um grupo de mutantes com habilidades extraordinárias, enfrentando desafios pessoais e sociais enquanto lutam para proteger um mundo que os teme e os odeia.',
        image: '/img/slider1.PNG' // Corrigido aqui
    },
    {
        name: 'Alladin',
        des: 'A história de um jovem humilde que encontra uma lâmpada mágica e um gênio poderoso, transformando-se em um príncipe para conquistar o coração da princesa Jasmine, enfrentando o malvado feiticeiro Jafar.',
        image: '/img/slider2.PNG' // Corrigido aqui
    },
    {
        name: 'FROZEN II',
        des: 'Elsa e Anna embarcam em uma jornada perigosa para descobrir a origem dos poderes de gelo de Elsa e salvar seu reino de uma antiga magia, explorando temas de amor, família e autodescoberta.',
        image: '/img/slider3.PNG' // Corrigido aqui
    },
    {
        name: 'STAR WARS: The Force Awakens',
        des: 'A Resistência trava uma batalha contra a ameaça da Primeira Ordem. Rey, Finn e Poe Dameron se unem em uma jornada para enfrentar esse desafio.',
        image: '/img/slider4.PNG' // Corrigido aqui
    }
];

const createSlide = () => {
    if (slideIndex >= movies.length) {
        slideIndex = 0;
    }

    let slide = document.createElement('div');
    let imgElement = document.createElement('img');
    let content = document.createElement('div');
    let h1 = document.createElement('h1');
    let p = document.createElement('p');

    imgElement.src = movies[slideIndex].image; // Corrigido aqui
    h1.appendChild(document.createTextNode(movies[slideIndex].name));
    p.appendChild(document.createTextNode(movies[slideIndex].des));
    content.appendChild(h1);
    content.appendChild(p);
    slide.appendChild(content);
    slide.appendChild(imgElement);
    carousel.appendChild(slide);

    slideIndex++;

    slide.className = 'Slider';
    content.className = 'slider-content';
    h1.className = 'movie-title';
    p.className = 'movie-desc';

    sliders.push(slide);

    if (sliders.length) {
        sliders[0].style.marginLeft = `calc(-${100 * (sliders.length - 2)}% - ${30 * (sliders.length - 2)}px)`;
    }
};

for (let i = 0; i < 6; i++) {
    createSlide();
}

setInterval(() => {
    createSlide();

}, 3000);
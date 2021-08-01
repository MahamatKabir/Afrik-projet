const reviews = [
    {
        id: 1,
        name:"susam smith",
        job:"web developer",
        img:"G:\javascript\tennis game\build 15 javascrip projet\Review projet\nasra.jpg",
        text:
        " Iam baby meggings twee health goth +1.Bicyle rights tumeric chartreuse brfore jdfmklrjngfklsnbjktlnbjkn rgvfgn af avec certains precaution they sould out chambry pop-up ",
    },
    {
        id: 2,
        name:"leo smith",
        job:"web developer",
        img:"G:\javascript\tennis game\build 15 javascrip projet\Review projet\kabirou.jpg",
        text:
        " Iam baby meggings twee health goth +1.Bicyle rights tumeric chartreuse brfore jdfmklrjngfklsnbjktlnbjkn rgvfgn af avec certains precaution they sould out chambry pop-up ",
    },
    {
        id: 3,
        name:"jack smith",
        job:"web developer",
        img:"G:\javascript\tennis game\build 15 javascrip projet\Review projet\issa2.jpg",
        text:
        " Iam baby meggings twee health goth +1.Bicyle rights tumeric chartreuse brfore jdfmklrjngfklsnbjktlnbjkn rgvfgn af avec certains precaution they sould out chambry pop-up ",
    },
    {
        id: 4,
        name: "kabirou smith",
        job: "web developer",
        img: "G:\javascript\tennis game\build 15 javascrip projet\Review projet\ssamou1.jpg",
        text:
        " Iam baby meggings twee health goth +1.Bicyle rights tumeric chartreuse brfore jdfmklrjngfklsnbjktlnbjkn rgvfgn af avec certains precaution they sould out chambry pop-up ",
    },
];

//select items

const img = document.getElementById("person-img");
const autor = document.getElementById("autor");
const job = document.getElementById("job");
const info = document.getElementById("info");

const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const randomBtn = document.querySelector('.random-btn');

let current= 2;

window.addEventListener("DOMContentLoaded", function () {
    const item = reviews[current];
    img.src = item.img;
    autor.textContent = item.name;
});

const videoPlayer1 = document.querySelector('.video-player-1');
const videoPlayer2 = document.querySelector('.video-player-2');
const videoPlayer3 = document.querySelector('.video-player-3');
const videoPlayBtn1 = document.querySelector('.play-icon-1');
const videoPlayBtn2 = document.querySelector('.play-icon-2');
const videoPlayBtn3 = document.querySelector('.play-icon-3');

const videos = [
    {
        artist: "The Smashing Pumpkins",
        title: "Cherub Rock",
        src: 'https://www.youtube.com/embed/9vuMayqtlSc?si=Kh5nmuedXC_Zy3sM'
    },
    {
        artist: "Plush",
        title: "Stone Temple Pilots",
        src: 'https://www.youtube.com/embed/jeyIPKoDyqk?si=-cLS7OWQhyZPGjHl'
    },
    {
        artist: "Even Flow",
        title: "Pearl Jam",
        src: 'https://www.youtube.com/embed/02r-juLqLfI?si=gm1sWtQqwv_b0Q1b'
    },
];

videoPlayBtn1.addEventListener('click', () => {
    videoPlayer1.classList.replace('hide-video', 'show-video');
    videoPlayer2.classList.replace('show-video', 'hide-video');
    videoPlayer3.classList.replace('show-video', 'hide-video');
});

videoPlayBtn2.addEventListener('click', () => {
    videoPlayer1.classList.replace('show-video', 'hide-video');
    videoPlayer2.classList.replace('hide-video', 'show-video');
    videoPlayer3.classList.replace('show-video', 'hide-video');
});

videoPlayBtn3.addEventListener('click', () => {
    videoPlayer1.classList.replace('show-video', 'hide-video');
    videoPlayer2.classList.replace('show-video', 'hide-video');
    videoPlayer3.classList.replace('hide-video', 'show-video'); 
});
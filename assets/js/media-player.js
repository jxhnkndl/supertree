
const videoPlayer = document.querySelector('iframe');
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
        src: 'https://www.youtube.com/embed/jeyIPKoDyqk?si=Fgu8sZO9fa49E5qW'
    },
    {
        artist: "Even Flow",
        title: "Pearl Jam",
        src: 'https://www.youtube.com/embed/02r-juLqLfI?si=gm1sWtQqwv_b0Q1b'
    },
];

const toggleVideo = (index) => {
    videoPlayer.src = videos[index].src;
}

videoPlayBtn1.addEventListener('click', () => {
    toggleVideo(0)
});

videoPlayBtn2.addEventListener('click', () => {
    toggleVideo(1)
});

videoPlayBtn3.addEventListener('click', () => {
    toggleVideo(2)
});
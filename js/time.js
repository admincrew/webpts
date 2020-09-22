const arrMonth = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember"
];
const arrDay = [
    "Minggu",
    "Senin",
    "Selasa",
    "Rabu",
    "Kamis",
    "Jumaat",
    "Sabtu"
];
const mataPelajaran = [{
        day: null,
        label: null,
        desc: null
    },
    {
        day: "Senin",
        label: ["Pendidikan Agama", "Bahasa Indonesia"],
        desc: ["https://bit.ly/3cGeMp0", "https://bit.ly/3eXRNqT"]
    },
    {
        day: "Selasa",
        label: ["Matematika", "Seni Budaya"],
        desc: ["https://bit.ly/375xyFd", "https://bit.ly/2BAOozW"]
    },
    {
        day: "Rabu",
        label: ["Bahasa Inggris", "IPS"],
        desc: ["https://bit.ly/3eVdGHx", "https://bit.ly/2XFAaXi"]
    },
    {
        day: "Kamis",
        label: ["IPA", "PJOK"],
        desc: ["https://bit.ly/2BHlWfW", "https://bit.ly/30iN7rM"]
    },
    {
        day: "Jumaat",
        label: ["PPKN", "Prakarya"],
        desc: ["https://bit.ly/2AJTiKz", "https://bit.ly/2XM48c0"]
    }
];

const date = new Date();
const day = date.getDate();
const month = date.getMonth();
const thisDay = date.getDay();
const yy = date.getFullYear();

const hariIni = arrDay[thisDay] + ',' + day + ' ' + arrMonth[month] + ' ' + yy;
document.getElementById("dateNow").innerHTML = hariIni;

const showLabel = mataPelajaran[thisDay].label;
const showLink = mataPelajaran[thisDay].desc;

const lisTombol = document.getElementById('listTombol');
lisTombol.innerHTML = "";
if (thisDay !== 0) {
    let btnPelajaran1 = "<a href=" + showLink[0] + " class='primary-btn2 mb-3 mb-sm-0'>" + showLabel[0] + "</a>";
    let btnPelajaran2 = "<a href=" + showLink[1] + " class='primary-btn2 mb-3 mb-sm-0'>" + showLabel[1] + "</a>";
    lisTombol.innerHTML += "<div>" + btnPelajaran1 + " " + btnPelajaran2 + "</div>";
} else {
    lisTombol.innerHTML += "<div> <a href='#' class='primary-btn2 mb-3 mb-sm-0'>UJIAN AKAN DIMULAI BESOK</a></div>";
}


// console.log(mataPelajaran[1].label);
// const showLabel = mataPelajaran[thisDay].label;

// console.log(mataPelajaran[1].label[0]);
// console.log(mataPelajaran[1].desc[0]);
// console.log(thisDay);
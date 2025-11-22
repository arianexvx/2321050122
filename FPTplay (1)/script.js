let dsPhim = [
  {
    id: 1,
    tenPhim: "Girl From Now Where",
    namPhatHanh: 2025,
    tuoi: 16,
    thoiLuong: 2,
    quocGia: "Thái Lan",
    poster: "img/poster_nanno.jpg",
    theLoai: "Phim chiếu rạp",
    trailer:"https://www.youtube.com/watch?v=WYAMLoLOVYI",
  },
  {
    id: 2,
    tenPhim: "Golbin",
    namPhatHanh: 2016,
    tuoi: 16,
    thoiLuong: 16,
    quocGia: "Hàn Quốc",
    poster: "img/poster_golbin.jpg",
    theLoai: "Phim truyền hình",
    trailer:"https://www.youtube.com/watch?v=8AcNEVUzV4o",
  },
  {
    id: 3,
    tenPhim: "The Medium",
    namPhatHanh: 2021,
    tuoi:18,
    thoiLuong:2,
    quocGia:"Thái Lan",
    poster:"img/poster_themedium.jpg",
    theLoai:"Phim chiếu rạp",
    trailer:"https://www.youtube.com/watch?v=wDtJ3M4arIc",
  },
  {
    id: 4,
    tenPhim: "When Life Gives You Tangerines",
    namPhatHanh: 2025,
    tuoi: 16,
    thoiLuong: 2,
    quocGia: "Hàn Quốc",
    poster: "img/poster_quaquyt.jpg",
    theLoai: "Phim truyền hình",
    trailer:"https://www.youtube.com/watch?v=4ECAaQkNAbc",
  },
   {
    id: 5,
    tenPhim: "Hope",
    namPhatHanh: 2013,
    tuoi: 16,
    thoiLuong: 2,
    quocGia: "Hàn Quốc",
    poster: "img/poster_hope.jpg",
    theLoai: "Phim chiếu rạp",
    trailer:"https://www.youtube.com/watch?v=WCkkwl-9bmw",
  },
  {
    id: 6,
    tenPhim: "The Witch 2",
    namPhatHanh: 2022,
    tuoi: 16,
    thoiLuong: 2,
    quocGia: "Hàn Quốc",
    poster: "img/poster_witch2.jpg",
    theLoai: "Phim chiếu rạp",
    trailer:"https://www.youtube.com/watch?v=EgOiCWTR_JU"
  },
  {
    id: 7,
    tenPhim: "The Inmaculate",
    namPhatHanh: 2025,
    tuoi: 16,
    thoiLuong: 2,
    quocGia: "Mỹ",
    poster: "img/poster_immaculate.jpg",
    theLoai: "Phim chiếu rạp",
    trailer:"https://www.youtube.com/watch?v=ewxS9Z-XXYo",
  },
   {
    id: 8,
    tenPhim: "Spirited Away",
    namPhatHanh: 2025,
    tuoi: 13,
    thoiLuong: 2,
    quocGia: "Nhật Bản",
    poster: "img/poster_Glibi.jpg",
    theLoai: "Phim chiếu rạp",
    trailer:"https://www.youtube.com/watch?v=ByXuk9QqQkk",
  },
];

let phimHienTai = dsPhim[0];
let banner = document.getElementsByClassName("bn")[0];
let trailer = document.getElementById("trailerLink");
let ten = document.getElementById("tenPhim");
let nam = document.getElementById("namPhatHanh");
let tuoi = document.getElementById("tuoi");
let quocgia = document.getElementById("quocGia");
let theloai = document.getElementById("theLoai");

function chonPhim(idPhim) {
  for (let i = 0; i < dsPhim.length; i++) {
    if (dsPhim[i].id == idPhim) {
      trailer.href= dsPhim[i].trailer;
      banner.src = dsPhim[i].poster;
      phimHienTai = dsPhim[i];
      ten.innerText = phimHienTai.tenPhim;
      nam.innerText = phimHienTai.namPhatHanh;
      quocgia.innerText = phimHienTai.quocGia;
      theloai.innerText = phimHienTai.theLoai;
      break;
    }
  }
}

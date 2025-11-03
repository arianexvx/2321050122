let danhSachPhim=[
    {
        id: 1,
        tenPhim:"when life give you tangerines",
        namPhatHanh:2025,
        tuoi:16,
        thoiLuong:2,
        quocGia:"Hàn Quốc",
        poster:"when-life-gives-you-tangerines_750550.png"
    },
     {id: 2,
        tenPhim:"Mưa Đỏ",
        namPhatHanh:2025,
        tuoi:16,
        thoiLuong:2,
        quocGia:"Việt Nam",
        poster:"muado_banner.jpg"
    }

];
let phimHienTai=danhSachPhim[0] ;

let banner = document.getElementByClassName('bn')[0];

function chonPhim(id) {
  for (let i = 0; i < danhSachPhim.length; i++) {
    if (danhSachPhim[i].id == id) {
      banner.src = danhSachPhim[i].poster; 
      phimHienTai = danhSachPhim[i];       
      alert(id);                           
      break;                               
    }
  }
}




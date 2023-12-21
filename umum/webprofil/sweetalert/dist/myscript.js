const flashDataMenu = $('.flash-data-menu').data('flashdata');

if ( flashDataMenu ){
    Swal.fire({
        title: 'Data Menu',
        text: 'Berhasil ' + flashDataMenu,
        icon: 'success'
    })
}

const flashDataSubmenu = $('.flash-data-submenu').data('flashdata');

if ( flashDataSubmenu ){
    Swal.fire({
        title: 'Data Sub Menu',
        text: 'Berhasil ' + flashDataSubmenu,
        icon: 'success'
    })
}

const flashDataEditprofil = $('.flash-data-editprofil').data('flashdata');

if ( flashDataEditprofil ){
    Swal.fire({
        title: 'Profil Anda',
        text: 'Berhasil ' + flashDataEditprofil,
        icon: 'success'
    })
}

const flashDataRole = $('.flash-data-role').data('flashdata');

if ( flashDataRole ){
    Swal.fire({
        title: 'Akses',
        text: 'Berhasil ' + flashDataRole,
        icon: 'success'
    })
}

$('.tombol-hapus').on('click', function(e){

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah Anda yakin?',
        showClass: {
          popup: 'animate__animated animate__shakeX'
        },
        text: "Data ini akan dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus data ini!'
      }).then((result) => {
        if (result.value) {
          document.location.href = href;
        }
      })
});

$('.tombol-keluar').on('click', function(e){

  e.preventDefault();
  const href = $(this).attr('href');

  Swal.fire({
      title: 'Apakah Anda yakin?',
      showClass: {
        popup: 'animate__animated animate__swing'
      },
      hideClass: {
        popup: 'animate__animated animate__backOutUp'
      },
      text: 'Pilih tombol "KELUAR" di bawah ini, jika Anda siap untuk mengakhiri sesi saat ini.',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Keluar',
    }).then((result) => {
      if (result.value) {
        document.location.href = href;
      }
    })
});
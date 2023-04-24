// fungsi detail pada tim untuk memunculkan modal box
$('#tombol-detail').on('click', function(){
    var name = $(this).data('name');
    var nim = $(this).data('nim');
    var prodi = $(this).data('prodi');
    var jabatan = $(this).data('jabatan');
    var keahlian = $(this).data('keahlian');
    var guru_pamong = $(this).data('guruGP');
    var sosmed = $(this).data('sosmed');
    var gambar = $(this).data('gambar');

    $('#name').text(name);
    $('#nim').text(nim);
    $('#prodi').text(prodi);
    $('#jabatan').text(jabatan);
    $('#keahlian').text(keahlian);
    $('#guruGP').text(guruGP);
    $('#sosmend').text(sosmed);
    $('gambar').text(gambar);

    alert('test');
    console.log('test');
    
});

// tombol delete kategori
$('.delete-kategori').on('click', function(e){

    // e = event
    // mematikan funtion href yang seharusnya berjalan jika di klick
    e.preventDefault();
    
    //var href 
    const href = $(this).attr('href');

    Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Ingin menghapus data kategori ini",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus Kategori!'
            }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
                Swal.fire(
                'Hapus!',
                'Data kategori berhasil dihapus.',
                'success'
                )
            }
            })

});


// tombol delete team
$('.delete-tim').on('click', function(e){

    // e = event
    // mematikan funtion href yang seharusnya berjalan jika di klick
    e.preventDefault();
    
    //var href 
    const href = $(this).attr('href');

    Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Ingin menghapus nama dari tim",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus nama dari tim!'
            }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
                Swal.fire(
                'Hapus!',
                'Data berhasil dihapus.',
                'success'
                )
            }
            })

});



/// tombol delete dosen
$('.delete-dosen-gp').on('click', function(e){

    // e = event
    // mematikan funtion href yang seharusnya berjalan jika di klick
    e.preventDefault();
    
    //var href 
    const href = $(this).attr('href');

    Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Ingin menghapus nama dari tim",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus nama dari tim!'
            }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
                Swal.fire(
                'Hapus!',
                'Data berhasil dihapus.',
                'success'
                )
            }
            })

});


// delete kegiatan
$('.delete-kegiatan').on('click', function(e){

    // e = event
    // mematikan funtion href yang seharusnya berjalan jika di klick
    e.preventDefault();
    
    //var href 
    const href = $(this).attr('href');

    Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Ingin menghapus kegiatan ini",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus kegiatan!'
            }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
                Swal.fire(
                'Hapus!',
                'Data berhasil dihapus.',
                'success'
                )
            }
            })

});

// delete galeri 
$('.delete-galeri').on('click', function(e){

    // e = event
    // mematikan funtion href yang seharusnya berjalan jika di klick
    e.preventDefault();
    
    //var href 
    const href = $(this).attr('href');

    Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Ingin menghapus galeri ini",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus galeri!'
            }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
                Swal.fire(
                'Hapus!',
                'Data berhasil dihapus.',
                'success'
                )
            }
            })

});
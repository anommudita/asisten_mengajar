<?php


// config pagination
// $config['base_url'] = 'http://localhost/asisten_mengajar/admin/kategori/index';

// total data semua kategori
// $config['total_rows'] = $this->kategori->countAllCategory();
// $config['per_page'] = 5;
// $config['num_links'] = 3;


// styling pagination
// tag pembuka dan tag penutup
$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-end">';
$config['full_tag_close'] = '  </ul></nav>';

// tampilan first
$config['first_link'] = 'First';
$config['first_tag_open'] = '<li class="page-item">';
$config['first_tag_close'] = '</li>';

// tampilan last
$config['last_link'] = 'Last';
$config['last_tag_open'] = '<li class="page-item">';
$config['last_tag_close'] = '</li>';

// tampilan tanda next
$config['next_link'] = '&raquo';
$config['next_tag_open'] = '<li class="page-item">';
$config['next_tag_close'] = '</li>';

// tampilan tanda prev
$config['prev_link'] = '&laquo';
$config['prev_tag_open'] = '<li class="page-item">';
$config['prev_tag_close'] = '</li>';

// tampilan current page atau tampilan sekarang yang sedang active
$config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#">';
$config['cur_tag_close'] = '</a></li>';

// tampilan number atau digit
$config['num_tag_open'] = '<li class="page-item">';
$config['num_tag_close'] = '</li>';

// dikarenakan pagination ci tidak memiliki class maka kita harus menambahkan class dengan code berikut!
$config['attributes'] = array('class' => 'page-link');

?>
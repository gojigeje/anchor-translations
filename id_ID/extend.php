<?php

return array(

	'extend' => 'Perluas',

	'fields' => 'Ruas custom',
	'fields_desc' => 'Buat ruas tambahan',

	'variables' => 'Variabel Situs',
	'variables_desc' => 'Buat metadata tambahan',

	'create_field' => 'Buat ruas baru',
	'editing_custom_field' => 'Mengedit ruas &ldquo;%s&rdquo;',
	'nofields_desc' => 'Belum ada ruas',

	'create_variable' => 'Buat variabel baru',
	'editing_variable' => 'Mengedit variabel &ldquo;%s&rdquo;',
	'novars_desc' => 'Belum ada variabel',

	// form fields
	'type' => 'Tipe',
	'type_explain' => 'Tipe konten yang hendak dimasukkan ke ruas ini.',

	'field' => 'Ruas',
	'field_explain' => 'Tipe masukan HTML',

	'key' => 'Kunci Unik',
	'key_explain' => 'Kunci unik untuk ruas Anda',
	'key_missing' => 'Harap masukkan kunci unik',
	'key_exists' => 'Kunci sudah digunakan',

	'label' => 'Label',
	'label_explain' => 'Versi mudah baca dari nama ruas Anda',
	'label_missing' => 'Harap masukkan label',

	'attribute_type' => 'Tipe file',
	'attribute_type_explain' => 'Tipe file yang diterima, dipisahkan dengan tanda koma. Kosongi untuk menerima semua tipe file.',

	// images
	'attributes_size_width' => 'Lebar gambar maksimal',
	'attributes_size_width_explain' => 'Gambar akan diperkecil jika ukurannya melebihi ukuran maksimal',

	'attributes_size_height' => 'Tinggi gambar maksimal',
	'attributes_size_height_explain' => 'Gambar akan diperkecil jika ukurannya melebihi ukuran maksimal',

	// custom vars
	'name' => 'Nama',
	'name_explain' => 'Nama unik',
	'name_missing' => 'Harap masukkan nama yang unik',
	'name_exists' => 'Nama telah digunakan',

	'value' => 'Nilai',
	'value_explain' => 'Data yang ingin Anda simpan (hingga 64kb)',
	'value_code_snipet' => 'Snippet untuk menyisipkan ke template Anda:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Variabel Anda telah dibuat',
	'variable_updated' => 'Variabel Anda telah diperbarui',
	'variable_deleted' => 'Variabel Anda telah dihapus',

	'field_created' => 'Ruas Anda telah dibuat',
	'field_updated' => 'Ruas Anda telah diperbarui',
	'field_deleted' => 'Ruas Anda telah dihapus'

);

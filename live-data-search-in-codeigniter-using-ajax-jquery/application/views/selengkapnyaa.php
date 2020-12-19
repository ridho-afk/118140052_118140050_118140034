

<?php foreach($laporan as $data){ ?>
JUDUL : 
<?php echo $data->judul; ?>
<br>
<?php echo $data->laporan; ?>
<br>
<?php echo $data->cover_img;  ?>
<br>
<embed src="<?php echo base_url('upload/') .$data->cover_img;?>" alt="" width="100px" height="100px"  >
<br>
<br>

<?php echo $data->aspek; ?>
<?php echo "   "; ?>
<?php echo $data->created_at ; ?>
<?php echo "   "; ?>
<?php echo anchor('Ajaxsearch/update/'.$data->id,'Update', ['class' => '']); ?>
<?php echo "   "; ?>
<?php echo anchor('Ajaxsearch/hapus/'.$data->id, 'Hapus', ['class' => 'redDelete']); ?>

<?php } ?>

    
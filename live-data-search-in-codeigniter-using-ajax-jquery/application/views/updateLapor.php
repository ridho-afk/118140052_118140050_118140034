<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Article</title>

    <style>

    * {
        padding: 0;
        margin: 0;
        font-family: 'DM Sans', sans-serif;
    }

    body {
        background-color: white
    }

    a {
        text-decoration: none;
        color: black;
    }
        
    .banner {
        
        height: 200px;
        width: 100%;
        background-repeat: repeat;
        background-size: cover; 
        background-position-y: -16rem;
        /* background-position-x: 10rem; */
    }

    .text-center-title {
        text-align: center;
    }

    .banner > h2 {
        
        font-size:45px;
        padding: 60px 0;
    } 

    .banner > a {
        padding:10px 20px;
        background-color: #50a376;
        border-radius: 5px;
        
    }

    .container{
       
        background-size: cover; 
        background-position-y: -24rem;
    }

    </style>
</head>
<body>    
    <div class="text-center-title banner">
        <h2>UPDATE LAPORAN</h2>
    </div>

    <?php validation_errors(); ?>
    

    <div class="container mt-5">
    <?php foreach($laporan as $data){ ?>
        <?php echo form_open_multipart('Ajaxsearch/updateLaporan'); ?>
      
        <input type="text" class="form-control" name="id" value="<?php echo $data->id; ?>" style="display:none;">
            <div class="form-group">
                <label>Judul Laporan</label>
                <input type="text" class="form-control" name="judul" value="<?php echo $data->judul; ?>" placeholder="Masukkan Judul Laporan">
                <p><?php echo  form_error('judul'); ?></p>
            </div>
            <div class="form-group">
                <label>Laporan</label>
                <textarea class="form-control" name="laporan"  rows="4"><?php echo $data->laporan; ?></textarea>
                <p><?php echo  form_error('laporan'); ?></p>
            </div>
            <div class="form-group">
                <label>aspek</label>
                <select name="aspek" class="form-control">
                    <option value="Infrastruktur">Infrastruktur</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Pengajaran">Pengajaran</option>
                </select>
                <p><?php echo  form_error('aspek'); ?></p>
            </div>
            <div class="form-group">
                <label>Masukkan Lampiran</label><br>
                <?php echo $data->cover_img; ?>
                <input type="file" name="cover_img">
            </div>
            <?php echo  form_error('cover_img'); ?>
         
            <br>
            <input type="submit" value="Update Lapor" class="btn btn-primary w-100">
        </form>
        <?php } ?>
    </div>

</body>
</html> 

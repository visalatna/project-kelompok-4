<!-- Tampilan Pembayaran -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $items)
                    {
                        $grand_total = $grand_total + $items['subtotal'];
                    }
                echo "<h4>Total Belanja Anda : Rp. ".number_format($grand_total, 0,',','.');
                ?>
            </div><br><br>

            <h3>Input Alamat Pengiriman Dan Pembayaran</h3>

            <form method="post" action="<?php echo base_url()?>dashboard/proses_pesanan">
                
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="pengiriman" placeholder="Nomor Telepon Anda" class="form-control">
                </div>
            
                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>JNE</option>
                        <option>GO-JEK</option>
                        <option>GRAB</option>
                        <option>KANTOR POS INDONESIA</option>
                        <option>TIKI</option>
                    </select>
                  
                </div>

                
                <div class="form-group">
                    <label>Pilih Pembayaran</label>
                    <select class="form-control">
                        <option>BCA - XXXXXXX</option>
                        <option>MANDIRI</option>
                        <option>BNI </option>
                        <option>BRI</option>
                    </select>
                  
                </div>

                <button type="submit" class="btn-sm btn-success mb-3">Pesan</button>
            
            
            </form>

            <?php 
            }else
            {
                echo "<h4>Keranjang Belanja Anda Kosong";
            } ?>

        </div>

       
        <div class="col-md-2"></div>
    </div>
</div>
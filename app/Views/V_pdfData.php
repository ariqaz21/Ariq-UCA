<h1>LIST DATA MAHASISWA</h1>
<table id="example" class="table table-striped table-bordered" style="width:100%" table border="2">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Fakultas</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach ($hasil as $row) {

            
        
        ?>
        <tr>
            <td><?php echo $row->nim; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->fakultas; ?></td>
            <td><?php echo $row->alamat; ?></td>
            
            
        </tr>
        <?php
            }
        ?>
</tbody>
</table>
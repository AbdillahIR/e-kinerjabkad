<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    Detail Jabatan
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table">
                            <tr>
                                <td>FOTO</td>
                                <th>:</th>
                                <th>
                                    <img width="200px" src="https://media.istockphoto.com/id/1354776457/vector/default-image-icon-vector-missing-picture-page-for-website-design-or-mobile-app-no-photo.jpg?s=612x612&w=0&k=20&c=w3OW0wX3LyiFRuDHo9A32Q0IUMtD4yjXEvQlqyYk9O4=" alt="">
                                </th>
                            </tr>
                            <tr>
                                <td>KODE JABATAN</td>
                                <th>:</th>
                                <th><?= $jabatan['kode'] ?></th>
                            </tr>
                            <tr>
                                <td>NAMA JABATAN</td>
                                <th>:</th>
                                <th><?= $jabatan['nama_jabatan'] ?></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
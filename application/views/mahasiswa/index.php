<div class="container">
    <?php foreach($data["mahasiswa"] as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["name"]; ?></li>
            <li>NPM : <?= $mhs["npm"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</div>
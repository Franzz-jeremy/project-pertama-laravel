<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profil">profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
       
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
   <h1>INI HALAMAN MAHASISWA</h1>

   <table class="table table-sm table-hover table-danger table-bordered text-center">
    <thead>
<tr>
    <th>NIM</th>
    <th>Nama Mahasiswa</th>
    <th>Jenis kelamin</th>
    <th colspan="2">Tempat Tanggal lahir</th>
</tr>
    </thead>
    <tbody>
        <tr>
    <th>124</th>
    <th>AZIS</th>
    <th>laki-laki</th>
    <th>18-12-2005</th>
    <th rowspan="3">Kota Medan</th>
        </tr>
         <tr>
    <th>125</th>
    <th>NASUTION</th>
    <th>laki-laki</th>
    <th>18-12-2005</th>
        </tr>
         <tr>
    <th>123</th>
    <th>ABDUL</th>
    <th>laki-laki</th>
    <th>18-12-2005</th>
        </tr>
    </tbody>
   </table>

</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>
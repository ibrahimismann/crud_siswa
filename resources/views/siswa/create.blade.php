<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');
        body { font-family: 'Inter', sans-serif; background: #f9fafb; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: white; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); width: 100%; max-width: 400px; }
        h2 { margin-top: 0; color: #1f2937; }
        label { display: block; margin-top: 15px; font-size: 0.875rem; color: #6b7280; margin-bottom: 5px; }
        input { width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; box-sizing: border-box; font-size: 1rem; }
        input:focus { outline: none; border-color: #4f46e5; ring: 2px solid #4f46e5; }
        button { width: 100%; background: #4f46e5; color: white; border: none; padding: 12px; border-radius: 8px; font-weight: 600; margin-top: 25px; cursor: pointer; transition: 0.3s; }
        button:hover { background: #4338ca; }
        .back { display: block; text-align: center; margin-top: 15px; color: #6b7280; text-decoration: none; font-size: 0.875rem; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Tambah Siswa</h2>
        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukkan nama" required>
            
            <label>Umur</label>
            <input type="number" name="umur" placeholder="Contoh: 17" required>
            
            <label>Nilai Akhir</label>
            <input type="number" step="0.01" name="nilai" placeholder="Contoh: 90.0" required>
            
            <button type="submit">Simpan Data Siswa</button>
            <a href="{{ route('siswa.index') }}" class="back">← Kembali ke Daftar</a>
        </form>
    </div>
</body>
</html>
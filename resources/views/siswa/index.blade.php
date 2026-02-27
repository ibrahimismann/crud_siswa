<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');
        :root { --primary: #4f46e5; --danger: #ef4444; --warning: #f59e0b; --bg: #f9fafb; --text: #1f2937; }
        body { font-family: 'Inter', sans-serif; background: var(--bg); color: var(--text); padding: 40px 20px; margin: 0; }
        .container { max-width: 900px; margin: auto; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; }
        .btn-tambah { background: var(--primary); color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none; font-weight: 600; transition: 0.3s; }
        .btn-tambah:hover { opacity: 0.9; transform: translateY(-2px); }
        table { width: 100%; border-collapse: separate; border-spacing: 0; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); }
        th { background: #f3f4f6; color: #6b7280; text-transform: uppercase; font-size: 0.75rem; letter-spacing: 0.05em; padding: 15px; text-align: left; }
        td { padding: 15px; border-top: 1px solid #f3f4f6; }
        .btn-edit { color: var(--warning); text-decoration: none; font-weight: 600; margin-right: 10px; }
        .btn-hapus { background: none; border: none; color: var(--danger); font-weight: 600; cursor: pointer; padding: 0; font-family: inherit; }
        .alert { background: #ecfdf5; color: #065f46; padding: 15px; border-radius: 8px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Daftar Siswa</h2>
            <a href="{{ route('siswa.create') }}" class="btn-tambah">+ Tambah Siswa</a>
        </div>

        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Nilai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $s)
                <tr>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->umur }} Thn</td>
                    <td><strong>{{ $s->nilai }}</strong></td>
                    <td>
                        <a href="{{ route('siswa.edit', $s->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn-hapus" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
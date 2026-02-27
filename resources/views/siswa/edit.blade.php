<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');
        
        body { 
            font-family: 'Inter', sans-serif; 
            background: #f9fafb; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
        }
        
        .card { 
            background: white; 
            padding: 30px; 
            border-radius: 16px; 
            box-shadow: 0 10px 25px rgba(0,0,0,0.05); 
            width: 100%; 
            max-width: 400px; 
        }
        
        h2 { 
            margin-top: 0; 
            color: #1f2937; 
            font-size: 1.5rem;
            border-left: 4px solid #4f46e5;
            padding-left: 12px;
            margin-bottom: 20px;
        }
        
        label { 
            display: block; 
            margin-top: 15px; 
            font-size: 0.875rem; 
            color: #6b7280; 
            font-weight: 600;
            margin-bottom: 5px; 
        }
        
        input { 
            width: 100%; 
            padding: 12px; 
            border: 1px solid #d1d5db; 
            border-radius: 8px; 
            box-sizing: border-box; 
            font-size: 1rem; 
            transition: 0.3s;
        }
        
        input:focus { 
            outline: none; 
            border-color: #4f46e5; 
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1); 
        }
        
        button { 
            width: 100%; 
            background: #4f46e5; 
            color: white; 
            border: none; 
            padding: 12px; 
            border-radius: 8px; 
            font-weight: 600; 
            margin-top: 25px; 
            cursor: pointer; 
            transition: 0.3s; 
        }
        
        button:hover { 
            background: #4338ca; 
            transform: translateY(-1px);
        }
        
        .back { 
            display: block; 
            text-align: center; 
            margin-top: 15px; 
            color: #6b7280; 
            text-decoration: none; 
            font-size: 0.875rem; 
        }
        
        .back:hover { color: #1f2937; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Edit Data Siswa</h2>
        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PUT') <label>Nama Lengkap</label>
            <input type="text" name="nama" value="{{ $siswa->nama }}" required>
            
            <label>Umur</label>
            <input type="number" name="umur" value="{{ $siswa->umur }}" required>
            
            <label>Nilai Akhir</label>
            <input type="number" step="0.01" name="nilai" value="{{ $siswa->nilai }}" required>
            
            <button type="submit">Update Perubahan</button>
            <a href="{{ route('siswa.index') }}" class="back">← Batal & Kembali</a>
        </form>
    </div>
</body>
</html>
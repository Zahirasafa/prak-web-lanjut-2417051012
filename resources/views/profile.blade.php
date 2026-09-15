<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <style>
        body {
            font-family: 'Trebuchet MS', Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(160deg, #d7c8f5 0%, #e9def9 45%, #fdf3d0 100%);
        }

        .profile-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 14px;
            background: #ffffff;
            padding: 40px 36px;
            border-radius: 24px;
            box-shadow: 0 16px 32px rgba(150, 130, 200, 0.18);
        }

        .avatar {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            background: linear-gradient(135deg, #fde9b4, #fbd98f);
            border: 5px solid #cbb8f2;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 8px;
            box-shadow: 0 6px 14px rgba(203, 184, 242, 0.35);
        }

        .avatar svg {
            width: 62px;
            height: 62px;
            fill: #ffffff;
        }

        .info-box {
            width: 280px;
            padding: 16px 20px;
            background: #f9f6ff;
            border: 2px solid #e2d6fa;
            border-left: 6px solid #b7a3e8;
            border-radius: 12px;
            text-align: center;
            font-size: 18px;
            font-weight: 600;
            color: #6b5b95;
            transition: transform 0.15s ease;
        }

        .info-box:hover {
            transform: translateY(-3px);
            border-left-color: #f0cd75;
        }

        .info-label {
            display: block;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #e0b054;
            margin-bottom: 4px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="avatar">
            <svg viewBox="0 0 24 24">
                <path d="M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2.4c-3.3 0-9.8 1.6-9.8 4.9v2.4h19.6v-2.4c0-3.3-6.5-4.9-9.8-4.9z"/>
            </svg>
        </div>

        <div class="info-box">
            <span class="info-label">Nama</span>
            {{ $nama }}
        </div>
        <div class="info-box">
            <span class="info-label">NPM</span>
            {{ $npm }}
        </div>
        <div class="info-box">
            <span class="info-label">Kelas</span>
            {{ $kelas }}
        </div>
    </div>

</body>
</html>

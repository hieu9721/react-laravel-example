# Laravel + React + Vite + Docker (local.example.com)

Dự án tích hợp Laravel 12 + React sử dụng Vite để build frontend. Hệ thống chạy hoàn toàn trong Docker với các container: PHP (FPM), MySQL, Node (Vite), và Nginx.

---

## 🔧 Yêu cầu hệ thống

- [Docker](https://www.docker.com/) & Docker Compose
- Trình chỉnh sửa mã (Visual Studio Code...)
- Trình duyệt (để truy cập `http://local.example.com`)

---

## 📂 Cấu trúc chính

```bash
├── docker/
│ ├── php/ # Dockerfile PHP
│ └── nginx/ # Config nginx trỏ Laravel
├── docker-compose.yml
├── .env # Laravel config
├── README.md
└── (Laravel + React source)
```

---

## 🛠 Thiết lập và chạy ứng dụng

### 1️⃣ Clone và chỉnh domain

```bash
git clone <repo_url>
cd your-project-folder
```

### 2️⃣ Khởi động Docker

```bash
docker-compose up -d --build
```

### 3️⃣ Cài đặt Laravel (bên trong container laravel-app)

#### Cài composer packages

```bash
composer install
```

#### Tạo file .env

```bash
cp .env.example .env
```

#### Tạo APP_KEY

```bash
php artisan key:generate
```

#### (Tuỳ chọn) Seed dữ liệu mẫu

```bash
php artisan db:seed
```

---

## Cài node_modules

```bash
npm install
```

## Chạy Vite

```bash
npm run dev
```

---

## Thêm vào file hosts của hệ điều hành

| Hệ điều hành | File đường dẫn                          |
| ------------ | --------------------------------------- |
| Windows      | `C:\Windows\System32\drivers\etc\hosts` |
| macOS/Linux  | `/etc/hosts`                            |

### Thêm dòng này vào cuối file

```bash
127.0.0.1 local.example.com
```

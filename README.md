# Restaurant Feedback System 🍽️

A sleek and modern restaurant feedback collection system built with Laravel, featuring real-time rating visualization and a responsive design.

![Restaurant Feedback Demo](demo-screenshot.gif)

## ✨ Features

- Beautiful, animated UI with a modern design
- Real-time star rating system
- Mobile-responsive layout
- Form validation
- Success notifications
- Database storage of feedback
- Smooth animations and transitions

## 🚀 Tech Stack

- **Laravel 10** - PHP Framework
- **Alpine.js** - Minimal JavaScript Framework
- **Tailwind CSS** - Utility-first CSS Framework
- **MySQL** - Database

## 📦 Prerequisites

- PHP >= 8.1
- Composer
- MySQL
- Node.js & NPM

## 🛠️ Installation

1. Clone the repository
```bash
git clone https://github.com/MinhaulMahmud/RestaurantFeedback.git
cd restaurant-feedback
```

2. Install PHP dependencies
```bash
composer install
```

3. Install NPM dependencies
```bash
npm install
```

4. Create environment file
```bash
cp .env.example .env
```

5. Generate application key
```bash
php artisan key:generate
```

6. Configure your database in `.env` file
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=restaurant_feedback
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run database migrations
```bash
php artisan migrate
```

8. Compile assets
```bash
npm run dev
```

9. Start the development server
```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser to see the application.

## 🎯 Usage

1. Navigate to the feedback form
2. Enter customer details:
   - Name
   - Email
   - Rating (1-5 stars)
   - Comments
3. Submit the feedback
4. View success notification

## 💻 Development

To work on the project in development mode:

```bash
# Run Laravel development server
php artisan serve

# Watch for asset changes
npm run watch
```

## 🧪 Testing

Run the test suite:

```bash
php artisan test
```

## 📝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👏 Acknowledgments

- [Laravel](https://laravel.com)
- [Alpine.js](https://alpinejs.dev)
- [Tailwind CSS](https://tailwindcss.com)

## 📧 Contact

Minhazul Mahmud - [@minhazulmahmud](https://twitter.com/minhazulmahmud) - minhaz.oj@gmail.com

Project Link: [https://github.com/MinhaulMahmud/RestaurantFeedback](https://github.com/MinhaulMahmud/RestaurantFeedback)


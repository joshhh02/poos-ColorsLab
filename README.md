# COLORS Lab

A simple web application built with the LAMP stack that allows users to create accounts, log in, and manage a personal collection of colors.

## Description

COLORS is a color management application where users can:
- Create an account and log in securely
- Add colors to their personal collection
- Search through their saved colors
- Log out to end their session

Each user's colors are stored in a database and persist across login sessions.

## Technologies Used

- MySQL - Database management
- PHP - Server-side scripting for API endpoints
- HTML/CSS/JavaScript ## Frontend interface

## Project Structure
## Used AI to help construct 

colors-lamp/
├── api/
│   ├── addColor.php
│   ├── Login.php
│   └── SearchColors.php
├── public/
│   ├── css/
│   │   └── styles.css
│   ├── js/
│   │   ├── code.js
│   │   └── md5.js
│   ├── index.html
│   └── color.html
├── README.md
├── LICENSE.md
└── .gitignore
```

## Database Setup

1. Create a MySQL database named `COP4331`
2. Create two tables:
   - Users: stores user account information
   - Colors: stores user's saved colors

## How to Run

- Run the ip or the url in an incognito browser: 
- joshpache.xyz 
- 45.55.57.68
- Login with an existing account
- Search for color in database
- Add color in database ( if color doesn't exist )

## Features

- User authentication with hashed passwords (MD5)
- Session management using cookies
- Add colors to personal collection
- Search functionality to find saved colors
- Secure logout

## Limitations

- No delete functionality for colors once added
- No edit/update functionality for existing colors

## AI Usage

AI assistance was used for README project structure and github best practice instructions.

## License

This project is licensed under the MIT License

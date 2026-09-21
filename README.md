<div align="center">

  # FaceGuard

A lightweight, real-time biometric authentication system powered by client-side AI (`face-api.js`) and a minimal PHP backend storing vector embeddings in a flat `.txt` file database.
</div>

## Features

- **Real-Time Detection:** Live face tracking using `@vladmandic/face-api`.
- **Privacy & Privacy-First:** Face embeddings are processed locally in the browser; facial images are never sent to the server.
- **3-Second Hold Verification:** Requires continuous visual retention before granting access.
- **Automatic Anonymisation:** Real-time pixelation overlay for non-authorised faces.
- **KISS Backend:** Zero heavy database dependencies (MySQL/PostgreSQL) — uses safe concurrent flat-file I/O (`LOCK_EX`) in PHP.

## Tech Stack

- **Frontend:** HTML5, CSS3, JavaScript (ES6+)
- **Backend:** PHP
- **Storage:** JSON Lines in `user.txt`

## How to Run Locally

1. Clone this repository:
   ```bash
   git clone https://github.com/drJhonatan00/FaceGuard.git
2. Serve the directory using a PHP local server:
   ```bash
   php -S localhost:8000
3. Open http://localhost:8000 in your browser and grant webcam permissions.

<!-- Watashi wa watashi sore dake -->

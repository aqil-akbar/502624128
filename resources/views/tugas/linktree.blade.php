<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ChaTraMueIndonesia | Linktree</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        background-color: #a8a8a8;
        min-height: 100vh;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        font-family:
          -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        padding: 30px 16px 60px;
      }

      .card {
        background: #efefef;
        border-radius: 24px;
        width: 100%;
        max-width: 560px;
        padding: 20px 24px 32px;
        position: relative;
      }

      /* Top bar */
      .topbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 28px;
      }

      .icon-btn {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: #fff;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
      }

      .icon-btn svg {
        width: 18px;
        height: 18px;
      }

      /* Profile */
      .profile {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 30px;
      }

      .avatar {
        width: 88px;
        height: 88px;
        border-radius: 50%;
        background: #fff;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);
      }

      .avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .username {
        font-size: 1.35rem;
        font-weight: 700;
        color: #111;
        letter-spacing: 0.1px;
      }

      /* Links */
      .links {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 40px;
      }

      .link-row {
        background: #fff;
        border-radius: 14px;
        display: flex;
        align-items: center;
        min-height: 66px;
        text-decoration: none;
        color: #111;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.07);
        transition:
          transform 0.15s,
          box-shadow 0.15s;
        cursor: pointer;
      }

      .link-row:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.12);
      }

      .link-thumb {
        width: 66px;
        height: 66px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f5f5f5;
        border-radius: 14px 0 0 14px;
        overflow: hidden;
      }

      .link-label {
        flex: 1;
        text-align: center;
        font-size: 1rem;
        font-weight: 600;
        color: #111;
        padding: 0 10px;
      }

      .link-more {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #aaa;
        font-size: 20px;
        flex-shrink: 0;
        letter-spacing: 0;
      }

      /* Join button */
      .join-btn {
        display: block;
        width: 100%;
        background: #fff;
        border: none;
        border-radius: 50px;
        padding: 17px 20px;
        text-align: center;
        font-size: 0.95rem;
        font-weight: 700;
        color: #111;
        cursor: pointer;
        text-decoration: none;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 22px;
        transition: box-shadow 0.15s;
      }

      .join-btn:hover {
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.16);
      }

      /* Footer */
      .footer {
        text-align: center;
        font-size: 0.78rem;
        color: #666;
      }

      .footer a {
        color: #666;
        text-decoration: none;
      }

      .footer a:hover {
        text-decoration: underline;
      }

      .footer .dot {
        margin: 0 5px;
      }
    </style>
  </head>

  <body>
    <div class="card">
      <!-- Top bar -->
      <div class="topbar">
        <!-- Linktree asterisk star -->
        <button class="icon-btn">
          <img
            src="assets/img/linktree.svg"
            alt="Linktree"
            width="22"
            height="22"
            style="object-fit: contain"
          />
        </button>
        <!-- Share icon -->
        <button class="icon-btn">
          <img
            src="assets/img/share.svg"
            alt="Share"
            width="22"
            height="22"
            style="object-fit: contain"
          />
        </button>
      </div>

      <!-- Logo Chatramue -->
      <div class="profile">
        <div class="avatar">
          <img src="assets/img/ChaTraMue.jpg" alt="ChaTraMue Logo" />
        </div>
        <div class="username">@ChaTraMueIndonesia</div>
      </div>

      <!-- Links -->
      <div class="links">
        <!-- ChaTraMue Call Center -->
        <a class="link-row" href="https://wa.me/628001881000" target="_blank">
          <div class="link-thumb">
            <!-- WhatsApp icon -->
            <img
              src="assets/img/WA.png"
              width="66"
              height="66"
              style="object-fit: cover"
            />
          </div>
          <span class="link-label">ChaTraMue Call Center</span>
          <div class="link-more">⋮</div>
        </a>

        <!-- Official Tiktok -->
        <a
          class="link-row"
          href="https://www.tiktok.com/@chatramue.indonesia?is_from_webapp=1&sender_device=pc"
          target="_blank"
        >
          <div class="link-thumb">
            <img
              src="assets/img/tiktok.png"
              width="66"
              height="66"
              style="object-fit: cover"
            />
          </div>
          <span class="link-label">Official Tiktok</span>
          <div class="link-more">⋮</div>
        </a>
      </div>

      <!-- Join Linktree -->
      <a class="join-btn" href="https://linktr.ee" target="_blank">
        Bergabung dengan ChaTraMueIndonesia di Linktree
      </a>

      <!-- Footer -->
      <div class="footer">
        <a href="#">Cookie Preferences</a>
        <span class="dot">•</span>
        <a href="#">Report</a>
        <span class="dot">•</span>
        <a href="#">Privacy</a>
        <span class="dot">•</span>
        <a href="#">Explore</a>
      </div>
    </div>
  </body>
</html>

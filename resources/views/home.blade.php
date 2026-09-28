<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
        content="ZADEV.ID — Web & Digital Studio. Website bisnis, landing page, toko online, branding digital, domain dan hosting.">

    <title>ZADEV.ID — Web & Digital Studio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --bg: #030713;
            --bg-soft: #070d1d;
            --panel: rgba(10, 18, 39, .72);
            --panel-solid: #0a1227;
            --line: rgba(110, 133, 190, .20);
            --text: #f7f9ff;
            --muted: #94a1bd;
            --blue: #08a7ff;
            --blue-2: #245cff;
            --purple: #8a35ff;
            --purple-2: #c12cff;
            --cyan: #00d7ff;
            --shadow: 0 25px 80px rgba(0, 0, 0, .42);
            --radius: 24px;
            --max: 1180px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Inter, sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at 80% 12%, rgba(53, 49, 255, .16), transparent 28%),
                radial-gradient(circle at 15% 30%, rgba(0, 174, 255, .09), transparent 25%),
                var(--bg);
            overflow-x: hidden;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            font: inherit;
        }

        .page-glow {
            position: fixed;
            width: 460px;
            height: 460px;
            border-radius: 50%;
            pointer-events: none;
            filter: blur(90px);
            opacity: .12;
            z-index: -1;
        }

        .glow-one {
            background: #075eff;
            top: 5%;
            right: -180px;
        }

        .glow-two {
            background: #a020ff;
            top: 55%;
            left: -220px;
        }

        .container {
            width: min(var(--max), calc(100% - 40px));
            margin-inline: auto;
        }

        /* NAVBAR */
        .navbar {
            position: fixed;
            inset: 0 0 auto;
            z-index: 50;
            transition: .3s ease;
        }

        .navbar.scrolled {
            background: rgba(3, 7, 19, .78);
            backdrop-filter: blur(18px);
            border-bottom: 1px solid var(--line);
        }

        .nav-inner {
            height: 78px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            font-family: "Space Grotesk", sans-serif;
            font-weight: 700;
            letter-spacing: .16em;
            font-size: 18px;
        }

        .brand-mark {
            width: 31px;
            height: 31px;
            display: grid;
            place-items: center;
            font-size: 20px;
            font-weight: 800;
            transform: skew(-8deg);
            color: #fff;
            border-radius: 7px;
            background: linear-gradient(145deg, var(--cyan), var(--blue-2) 52%, var(--purple));
            box-shadow: 0 0 25px rgba(43, 91, 255, .4);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 31px;
        }

        .nav-links a {
            color: #b9c3d8;
            font-size: 13px;
            transition: .25s;
            position: relative;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #fff;
        }

        .nav-links a.active::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: -10px;
            width: 22px;
            height: 2px;
            transform: translateX(-50%);
            border-radius: 9px;
            background: linear-gradient(90deg, var(--blue), var(--purple));
        }

        .nav-cta {
            padding: 11px 17px;
            border-radius: 10px;
            font-size: 12px;
            font-weight: 700;
            background: linear-gradient(90deg, #0b8fff, #6d20ff);
            box-shadow: 0 10px 28px rgba(65, 53, 255, .25);
        }

        .menu-btn {
            display: none;
            border: 1px solid var(--line);
            background: #0b1225;
            color: #fff;
            width: 42px;
            height: 42px;
            border-radius: 10px;
            cursor: pointer;
        }

        /* HERO */
        .hero {
            min-height: 780px;
            padding: 150px 0 85px;
            position: relative;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            align-items: center;
            gap: 65px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 8px 12px;
            border: 1px solid rgba(45, 151, 255, .25);
            border-radius: 999px;
            color: #a9d8ff;
            background: rgba(8, 100, 255, .07);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        .eyebrow i {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #24d9ff;
            box-shadow: 0 0 12px #24d9ff;
        }

        h1 {
            margin-top: 22px;
            font-family: "Space Grotesk", sans-serif;
            font-size: clamp(46px, 6vw, 78px);
            line-height: .98;
            letter-spacing: -.045em;
            max-width: 720px;
        }

        .gradient-text {
            background: linear-gradient(90deg, #13b8ff 0%, #5576ff 45%, #c02cff 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero-copy {
            margin-top: 24px;
            max-width: 590px;
            color: var(--muted);
            line-height: 1.8;
            font-size: 15px;
        }

        .hero-actions {
            display: flex;
            gap: 12px;
            margin-top: 31px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 14px 20px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 700;
            transition: .25s;
        }

        .btn-primary {
            background: linear-gradient(100deg, #049eff, #6326ff 80%);
            box-shadow: 0 14px 34px rgba(47, 74, 255, .28);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 18px 40px rgba(47, 74, 255, .4);
        }

        .btn-ghost {
            border: 1px solid var(--line);
            background: rgba(255, 255, 255, .025);
            color: #dce4f5;
        }

        .btn-ghost:hover {
            border-color: rgba(91, 126, 255, .5);
            background: rgba(40, 65, 140, .13);
        }

        .hero-proof {
            margin-top: 40px;
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
        }

        .proof-item strong {
            display: block;
            font-family: "Space Grotesk";
            font-size: 21px;
        }

        .proof-item span {
            color: #74819c;
            font-size: 11px;
        }

        /* HERO VISUAL */
        .hero-visual {
            position: relative;
            min-height: 470px;
            display: grid;
            place-items: center;
        }

        .orbit {
            position: absolute;
            width: 460px;
            height: 460px;
            border: 1px solid rgba(71, 98, 194, .17);
            border-radius: 50%;
        }

        .orbit::before,
        .orbit::after {
            content: "";
            position: absolute;
            inset: 55px;
            border: 1px dashed rgba(57, 117, 255, .13);
            border-radius: 50%;
        }

        .orbit::after {
            inset: 105px;
            border-color: rgba(167, 49, 255, .12);
        }

        .mockup {
            width: min(530px, 100%);
            position: relative;
            z-index: 2;
            transform: perspective(1000px) rotateY(-8deg) rotateX(3deg);
            filter: drop-shadow(0 40px 55px rgba(0, 0, 0, .5));
        }

        .laptop {
            background: linear-gradient(145deg, #141c34, #050912);
            border: 1px solid #34405e;
            border-radius: 15px 15px 8px 8px;
            padding: 10px;
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, .03);
        }

        .screen {
            aspect-ratio: 16/10;
            border-radius: 9px;
            overflow: hidden;
            background:
                radial-gradient(circle at 80% 20%, rgba(132, 46, 255, .42), transparent 28%),
                linear-gradient(145deg, #0a1530, #030710);
            border: 1px solid #283653;
            padding: 17px;
        }

        .screen-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 7px;
            color: #9ba8c4;
        }

        .mini-logo {
            color: #fff;
            font-weight: 800;
            letter-spacing: .16em;
        }

        .mini-nav {
            display: flex;
            gap: 10px;
        }

        .screen-main {
            padding-top: 50px;
            width: 78%;
        }

        .screen-main small {
            color: #5ccfff;
            font-size: 7px;
        }

        .screen-main h3 {
            font-family: "Space Grotesk";
            font-size: 31px;
            line-height: 1;
            margin: 8px 0;
        }

        .screen-main h3 span {
            color: #6954ff;
        }

        .screen-main p {
            color: #78859e;
            font-size: 7px;
            line-height: 1.6;
            max-width: 230px;
        }

        .screen-btn {
            margin-top: 13px;
            display: inline-block;
            padding: 6px 10px;
            font-size: 7px;
            border-radius: 4px;
            background: linear-gradient(90deg, #079cff, #6d25ff);
        }

        .screen-card {
            position: absolute;
            width: 105px;
            height: 70px;
            right: 38px;
            top: 145px;
            border: 1px solid #344366;
            border-radius: 8px;
            background: rgba(18, 29, 60, .72);
            padding: 10px;
        }

        .bar {
            height: 5px;
            width: 50px;
            border-radius: 5px;
            background: #334b8e;
            margin-bottom: 7px;
        }

        .bar.short {
            width: 30px;
        }

        .dot-row {
            display: flex;
            gap: 4px;
            margin-top: 12px;
        }

        .dot-row i {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #6750ff;
        }

        .laptop-base {
            width: 108%;
            height: 20px;
            margin-left: -4%;
            border-radius: 0 0 45% 45%;
            background: linear-gradient(180deg, #202a44, #070b15);
            border: 1px solid #34405e;
            border-top: 0;
        }

        .floating-card {
            position: absolute;
            z-index: 3;
            right: -15px;
            bottom: 42px;
            width: 175px;
            padding: 14px;
            border: 1px solid rgba(98, 121, 192, .3);
            border-radius: 15px;
            background: rgba(8, 15, 34, .88);
            backdrop-filter: blur(16px);
            box-shadow: var(--shadow);
        }

        .floating-card .fc-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .fc-icon {
            width: 28px;
            height: 28px;
            border-radius: 8px;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, #0caeff, #7229ff);
        }

        .floating-card b {
            font-size: 10px;
        }

        .floating-card p {
            color: #7785a1;
            font-size: 8px;
            line-height: 1.6;
            margin-top: 9px;
        }

        .floating-phone {
            position: absolute;
            left: -10px;
            bottom: 10px;
            width: 105px;
            height: 200px;
            border: 4px solid #252d43;
            border-radius: 18px;
            background: #071022;
            box-shadow: 0 25px 45px rgba(0, 0, 0, .4);
            z-index: 4;
            padding: 9px 7px;
            transform: rotate(-4deg);
        }

        .phone-notch {
            width: 34px;
            height: 7px;
            background: #01040b;
            border-radius: 0 0 8px 8px;
            margin: 0 auto 12px;
        }

        .phone-title {
            font-size: 10px;
            font-weight: 800;
            line-height: 1.2;
        }

        .phone-title span {
            color: #8c43ff;
        }

        .phone-lines {
            margin-top: 12px;
            display: grid;
            gap: 7px;
        }

        .phone-lines div {
            height: 5px;
            border-radius: 5px;
            background: #273457;
        }

        .phone-lines div:nth-child(2) {
            width: 70%
        }

        .phone-lines div:nth-child(3) {
            width: 82%
        }

        .phone-btn {
            margin-top: 15px;
            font-size: 6px;
            text-align: center;
            padding: 7px;
            border-radius: 5px;
            background: linear-gradient(90deg, #00a8ff, #6930ff);
        }

        /* MARQUEE */
        .marquee-wrap {
            border-top: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
            overflow: hidden;
            background: rgba(7, 13, 29, .5);
        }

        .marquee {
            display: flex;
            gap: 38px;
            width: max-content;
            padding: 15px 0;
            animation: scroll 28s linear infinite;
        }

        .marquee span {
            color: #60708e;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            white-space: nowrap;
        }

        .marquee b {
            color: #347cff;
        }

        @keyframes scroll {
            to {
                transform: translateX(-50%);
            }
        }

        /* COMMON */
        section {
            padding: 110px 0;
        }

        .section-head {
            max-width: 700px;
            margin-bottom: 45px;
        }

        .section-kicker {
            color: #51baff;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: .15em;
            text-transform: uppercase;
        }

        .section-title {
            margin-top: 10px;
            font-family: "Space Grotesk";
            font-size: clamp(31px, 4vw, 49px);
            line-height: 1.06;
            letter-spacing: -.035em;
        }

        .section-desc {
            color: var(--muted);
            font-size: 14px;
            line-height: 1.8;
            margin-top: 15px;
        }

        /* SERVICES */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .service {
            position: relative;
            padding: 28px;
            min-height: 245px;
            border: 1px solid var(--line);
            border-radius: 20px;
            background: linear-gradient(145deg, rgba(14, 25, 54, .72), rgba(7, 12, 27, .72));
            overflow: hidden;
            transition: .3s;
        }

        .service:hover {
            transform: translateY(-5px);
            border-color: rgba(60, 130, 255, .42);
        }

        .service::after {
            content: "";
            position: absolute;
            width: 130px;
            height: 130px;
            right: -65px;
            top: -65px;
            border-radius: 50%;
            background: rgba(74, 48, 255, .12);
            filter: blur(20px);
        }

        .service-icon {
            width: 45px;
            height: 45px;
            display: grid;
            place-items: center;
            border-radius: 13px;
            border: 1px solid rgba(66, 133, 255, .25);
            background: linear-gradient(145deg, rgba(9, 158, 255, .14), rgba(130, 39, 255, .12));
            font-size: 19px;
        }

        .service h3 {
            font-family: "Space Grotesk";
            font-size: 19px;
            margin-top: 22px;
        }

        .service p {
            color: #78869f;
            font-size: 12px;
            line-height: 1.7;
            margin-top: 10px;
        }

        .service a {
            display: inline-block;
            margin-top: 18px;
            color: #68caff;
            font-size: 11px;
            font-weight: 700;
        }

        /* ABOUT / FEATURE */
        .split {
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 70px;
            align-items: center;
        }

        .feature-panel {
            position: relative;
            min-height: 440px;
            border-radius: 28px;
            overflow: hidden;
            border: 1px solid var(--line);
            background:
                radial-gradient(circle at 75% 25%, rgba(91, 36, 255, .28), transparent 25%),
                radial-gradient(circle at 20% 80%, rgba(0, 180, 255, .18), transparent 25%),
                #070d1e;
        }

        .feature-panel::before {
            content: "";
            position: absolute;
            inset: 35px;
            border: 1px solid rgba(67, 96, 165, .16);
            border-radius: 50%;
            box-shadow: 0 0 100px rgba(49, 66, 255, .08);
        }

        .feature-center {
            position: absolute;
            inset: 0;
            display: grid;
            place-items: center;
        }

        .z-big {
            width: 150px;
            height: 150px;
            border-radius: 35px;
            display: grid;
            place-items: center;
            font-family: "Space Grotesk";
            font-weight: 700;
            font-size: 95px;
            background: linear-gradient(145deg, #0caeff, #2854ff 50%, #a22cff);
            color: white;
            transform: rotate(-9deg);
            box-shadow: 0 35px 75px rgba(36, 73, 255, .35);
        }

        .pill {
            position: absolute;
            padding: 9px 13px;
            border-radius: 999px;
            border: 1px solid var(--line);
            background: rgba(8, 15, 33, .82);
            backdrop-filter: blur(10px);
            color: #aebbd4;
            font-size: 10px;
        }

        .pill.one {
            top: 55px;
            left: 38px
        }

        .pill.two {
            right: 32px;
            top: 105px
        }

        .pill.three {
            left: 45px;
            bottom: 85px
        }

        .pill.four {
            right: 37px;
            bottom: 58px
        }

        .check-list {
            display: grid;
            gap: 16px;
            margin-top: 27px;
        }

        .check {
            display: flex;
            gap: 12px;
            align-items: flex-start;
        }

        .check-mark {
            flex: none;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: rgba(0, 169, 255, .1);
            border: 1px solid rgba(0, 169, 255, .22);
            color: #29baff;
            font-size: 11px;
        }

        .check b {
            font-size: 13px;
        }

        .check p {
            color: #75839d;
            font-size: 11px;
            line-height: 1.6;
            margin-top: 3px;
        }

        /* PORTFOLIO */
        .portfolio-grid {
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            gap: 16px;
        }

        .project {
            min-height: 280px;
            position: relative;
            overflow: hidden;
            border-radius: 21px;
            border: 1px solid var(--line);
            background: #081027;
        }

        .project.large {
            grid-row: span 2;
            min-height: 576px;
        }

        .project-bg {
            position: absolute;
            inset: 0;
            background:
                linear-gradient(135deg, rgba(8, 18, 43, .4), rgba(4, 7, 18, .95)),
                radial-gradient(circle at 70% 25%, #4d22bc, transparent 28%),
                linear-gradient(120deg, #07366d, #0b0e24 60%, #160725);
        }

        .project:nth-child(2) .project-bg {
            background: linear-gradient(135deg, rgba(5, 12, 30, .35), #07101e), radial-gradient(circle at 75% 20%, #0da6cf, transparent 30%), #071528;
        }

        .project:nth-child(3) .project-bg {
            background: linear-gradient(135deg, rgba(7, 10, 27, .25), #090718), radial-gradient(circle at 75% 35%, #7a22de, transparent 35%), #0a0618;
        }

        .project-content {
            position: absolute;
            inset: auto 24px 23px;
            z-index: 2;
        }

        .tag {
            display: inline-block;
            padding: 6px 9px;
            border: 1px solid rgba(125, 150, 220, .23);
            border-radius: 999px;
            background: rgba(4, 10, 25, .65);
            color: #a6b6d6;
            font-size: 9px;
        }

        .project h3 {
            font-family: "Space Grotesk";
            font-size: 22px;
            margin-top: 10px;
        }

        .project p {
            color: #91a0bb;
            font-size: 11px;
            margin-top: 5px;
        }

        /* PROCESS */
        .process {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 13px;
        }

        .step {
            padding: 24px;
            border-top: 1px solid #273657;
            position: relative;
        }

        .step-num {
            font-family: "Space Grotesk";
            font-size: 11px;
            color: #5078ff;
        }

        .step h3 {
            font-size: 15px;
            margin-top: 14px;
        }

        .step p {
            color: #74829d;
            font-size: 11px;
            line-height: 1.7;
            margin-top: 8px;
        }

        /* CTA */
        .cta {
            position: relative;
            overflow: hidden;
            padding: 70px;
            border: 1px solid rgba(86, 113, 207, .25);
            border-radius: 30px;
            background:
                radial-gradient(circle at 15% 50%, rgba(0, 174, 255, .2), transparent 30%),
                radial-gradient(circle at 85% 50%, rgba(140, 39, 255, .24), transparent 30%),
                linear-gradient(100deg, #0a1732, #0b0e26);
            text-align: center;
        }

        .cta::before {
            content: "";
            position: absolute;
            width: 500px;
            height: 1px;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
            background: linear-gradient(90deg, transparent, #2f8cff, transparent);
        }

        .cta h2 {
            font-family: "Space Grotesk";
            font-size: clamp(30px, 4vw, 48px);
            letter-spacing: -.03em;
        }

        .cta p {
            color: #8d9ab4;
            font-size: 13px;
            max-width: 550px;
            margin: 13px auto 25px;
            line-height: 1.8;
        }

        /* FOOTER */
        footer {
            padding: 55px 0 25px;
            border-top: 1px solid var(--line);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.4fr 1fr 1fr 1fr;
            gap: 35px;
        }

        .footer-brand p {
            max-width: 310px;
            color: #6f7c95;
            font-size: 11px;
            line-height: 1.8;
            margin-top: 15px;
        }

        .footer-col h4 {
            font-size: 11px;
            color: #dce4f5;
            margin-bottom: 15px;
        }

        .footer-col a {
            display: block;
            color: #71809a;
            font-size: 11px;
            margin: 10px 0;
        }

        .footer-col a:hover {
            color: #fff;
        }

        .copyright {
            border-top: 1px solid var(--line);
            margin-top: 40px;
            padding-top: 18px;
            color: #56637b;
            font-size: 10px;
            display: flex;
            justify-content: space-between;
            gap: 15px;
        }

        /* REVEAL */
        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: .75s ease;
        }

        .reveal.show {
            opacity: 1;
            transform: none;
        }

        @media (max-width: 950px) {

            .hero-grid,
            .split {
                grid-template-columns: 1fr;
            }

            .hero {
                padding-top: 125px;
            }

            .hero-visual {
                min-height: 430px;
            }

            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .portfolio-grid {
                grid-template-columns: 1fr 1fr;
            }

            .project.large {
                grid-row: auto;
                min-height: 380px;
            }

            .process {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 700px) {
            .container {
                width: min(var(--max), calc(100% - 28px));
            }

            .nav-links {
                display: none;
                position: absolute;
                left: 14px;
                right: 14px;
                top: 68px;
                padding: 16px;
                border: 1px solid var(--line);
                border-radius: 16px;
                background: rgba(5, 10, 24, .96);
                backdrop-filter: blur(20px);
                flex-direction: column;
                align-items: stretch;
                gap: 0;
            }

            .nav-links.open {
                display: flex;
            }

            .nav-links a {
                padding: 12px 8px;
            }

            .nav-links a.active::after {
                display: none;
            }

            .nav-cta {
                text-align: center;
                margin-top: 6px;
            }

            .menu-btn {
                display: block;
            }

            .hero {
                min-height: auto;
                padding-bottom: 55px;
            }

            h1 {
                font-size: 48px;
            }

            .hero-visual {
                transform: scale(.83);
                margin: -35px -30px -20px;
                min-height: 390px;
            }

            .services-grid,
            .portfolio-grid,
            .process,
            .footer-grid {
                grid-template-columns: 1fr;
            }

            .project.large {
                min-height: 360px;
            }

            section {
                padding: 80px 0;
            }

            .cta {
                padding: 45px 22px;
            }

            .copyright {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <div class="page-glow glow-one"></div>
    <div class="page-glow glow-two"></div>

    {{-- ==================== NAVBAR ==================== --}}
    <header class="navbar" id="navbar">
        <div class="container nav-inner">
            <a href="#home" class="brand">
                <span class="brand-mark">Z</span>
                <span>ZADEV.ID</span>
            </a>

            <nav class="nav-links" id="navLinks">
                <a href="#home" class="active">Home</a>
                <a href="#services">Services</a>
                <a href="#portfolio">Portfolio</a>
                <a href="#about">About</a>
                <a href="#contact" class="nav-cta">Konsultasi Gratis</a>
            </nav>

            <button class="menu-btn" id="menuBtn" aria-label="Buka menu">☰</button>
        </div>
    </header>

    <main>
        <section class="hero" id="home">
            <div class="container hero-grid">
                <div class="reveal">
                    <span class="eyebrow"><i></i> Web & Digital Studio</span>
                    <h1>Build a Brand That <span class="gradient-text">Gets Remembered.</span></h1>
                    <p class="hero-copy">
                        Kami membantu bisnis membangun identitas digital yang terlihat profesional,
                        dipercaya pelanggan, dan dirancang untuk mendukung pertumbuhan bisnis.
                    </p>

                    <div class="hero-actions">
                        <a href="#contact" class="btn btn-primary">Mulai Project <span>→</span></a>
                        <a href="#portfolio" class="btn btn-ghost">Lihat Portfolio</a>
                    </div>

                    <div class="hero-proof">
                        <div class="proof-item"><strong>50+</strong><span>Project Digital</span></div>
                        <div class="proof-item"><strong>98%</strong><span>Client Satisfaction</span></div>
                        <div class="proof-item"><strong>24/7</strong><span>Support Responsive</span></div>
                    </div>
                </div>

                <div class="hero-visual reveal">
                    <div class="orbit"></div>

                    <div class="mockup">
                        <div class="laptop">
                            <div class="screen">
                                <div class="screen-top">
                                    <span class="mini-logo">Z A D E V . I D</span>
                                    <div class="mini-nav"><span>Home</span><span>Services</span><span>Work</span></div>
                                </div>
                                <div class="screen-main">
                                    <small>WEB & DIGITAL STUDIO</small>
                                    <h3>Turn Ideas Into <span>Digital Impact.</span></h3>
                                    <p>Website modern untuk membuat brand Anda lebih profesional dan mudah ditemukan.
                                    </p>
                                    <span class="screen-btn">Start Project →</span>
                                </div>
                                <div class="screen-card">
                                    <div class="bar"></div>
                                    <div class="bar short"></div>
                                    <div class="dot-row"><i></i><i></i><i></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="laptop-base"></div>
                    </div>

                    <div class="floating-card">
                        <div class="fc-top">
                            <div class="fc-icon">✦</div><b>Digital Growth</b>
                        </div>
                        <p>Design yang bukan hanya menarik, tapi punya tujuan untuk membantu bisnis berkembang.</p>
                    </div>

                    <div class="floating-phone">
                        <div class="phone-notch"></div>
                        <div class="phone-title">Solusi Digital<br><span>Untuk Bisnis Anda.</span></div>
                        <div class="phone-lines">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="phone-btn">Hubungi Kami →</div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ==================== MARQUEE ==================== --}} <div class="marquee-wrap">
            <div class="marquee">
                <span>Branding <b>✦</b></span><span>Web Design <b>✦</b></span><span>Landing Page
                    <b>✦</b></span><span>Digital Marketing <b>✦</b></span><span>Business Website
                    <b>✦</b></span><span>E-Commerce <b>✦</b></span>
                <span>Branding <b>✦</b></span><span>Web Design <b>✦</b></span><span>Landing Page
                    <b>✦</b></span><span>Digital Marketing <b>✦</b></span><span>Business Website
                    <b>✦</b></span><span>E-Commerce <b>✦</b></span>
            </div>
        </div>

        {{-- ==================== SERVICES ==================== --}} <section id="services">
            <div class="container">
                <div class="section-head reveal">
                    <span class="section-kicker">What We Do</span>
                    <h2 class="section-title">Digital presence yang dibangun untuk <span
                            class="gradient-text">menghasilkan.</span></h2>
                    <p class="section-desc">Dari identitas brand sampai website siap jualan, semua dirancang agar bisnis
                        Anda tampil lebih kredibel di dunia digital.</p>
                </div>

                <div class="services-grid">
                    <article class="service reveal">
                        <div class="service-icon">✦</div>
                        <h3>Brand Identity</h3>
                        <p>Logo, visual identity, warna, typography, dan direction visual untuk membangun brand yang
                            konsisten.</p>
                        <a href="#contact">Pelajari →</a>
                    </article>
                    <article class="service reveal">
                        <div class="service-icon">⌁</div>
                        <h3>Business Website</h3>
                        <p>Website company profile modern yang membuat bisnis terlihat profesional dan meningkatkan
                            kepercayaan calon pelanggan.</p>
                        <a href="#contact">Pelajari →</a>
                    </article>
                    <article class="service reveal">
                        <div class="service-icon">↗</div>
                        <h3>Landing Page</h3>
                        <p>Landing page fokus konversi untuk campaign, iklan, produk, jasa, maupun personal branding.
                        </p>
                        <a href="#contact">Pelajari →</a>
                    </article>
                    <article class="service reveal">
                        <div class="service-icon">◇</div>
                        <h3>Digital Marketing</h3>
                        <p>Strategi konten dan campaign digital yang membantu brand menjangkau audiens yang tepat.</p>
                        <a href="#contact">Pelajari →</a>
                    </article>
                    <article class="service reveal">
                        <div class="service-icon">◫</div>
                        <h3>Online Store</h3>
                        <p>Toko online yang rapi, cepat, mobile-friendly, dan mudah dikelola untuk mendukung penjualan.
                        </p>
                        <a href="#contact">Pelajari →</a>
                    </article>
                    <article class="service reveal">
                        <div class="service-icon">◎</div>
                        <h3>Domain & Hosting</h3>
                        <p>Setup domain, hosting, SSL, email bisnis, hingga maintenance agar website tetap aman dan
                            optimal.</p>
                        <a href="#contact">Pelajari →</a>
                    </article>
                </div>
            </div>
        </section>

        {{-- ==================== ABOUT ==================== --}} <section id="about">
            <div class="container split">
                <div class="feature-panel reveal">
                    <span class="pill one">Strategy</span>
                    <span class="pill two">Creative</span>
                    <span class="pill three">Technology</span>
                    <span class="pill four">Growth</span>
                    <div class="feature-center">
                        <div class="z-big">Z</div>
                    </div>
                </div>

                <div class="reveal">
                    <span class="section-kicker">Why ZADEV.ID</span>
                    <h2 class="section-title">Bukan sekadar membuat website. Kami membangun <span
                            class="gradient-text">kesan pertama.</span></h2>
                    <p class="section-desc">Website adalah salah satu titik pertama calon pelanggan mengenal bisnis
                        Anda. Karena itu kami menggabungkan strategi, desain, dan teknologi dalam satu proses.</p>

                    <div class="check-list">
                        <div class="check"><span class="check-mark">✓</span>
                            <div><b>Design yang punya tujuan</b>
                                <p>Setiap layout, warna, dan CTA dirancang berdasarkan tujuan bisnis.</p>
                            </div>
                        </div>
                        <div class="check"><span class="check-mark">✓</span>
                            <div><b>Fast & responsive</b>
                                <p>Nyaman dibuka dari desktop, tablet, maupun smartphone.</p>
                            </div>
                        </div>
                        <div class="check"><span class="check-mark">✓</span>
                            <div><b>Siap dikembangkan</b>
                                <p>Struktur website dibuat agar mudah dikembangkan saat bisnis bertumbuh.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ==================== PORTFOLIO ==================== --}} <section id="portfolio">
            <div class="container">
                <div class="section-head reveal">
                    <span class="section-kicker">Selected Work</span>
                    <h2 class="section-title">Beberapa karya yang kami <span class="gradient-text">banggakan.</span>
                    </h2>
                    <p class="section-desc">Contoh konsep portfolio — ganti dengan project asli Anda.</p>
                </div>

                <div class="portfolio-grid">
                    <article class="project large reveal">
                        <div class="project-bg"></div>
                        <div class="project-content">
                            <span class="tag">Corporate Website</span>
                            <h3>Modern Business Platform</h3>
                            <p>Web Design • Development • Strategy</p>
                        </div>
                    </article>
                    <article class="project reveal">
                        <div class="project-bg"></div>
                        <div class="project-content">
                            <span class="tag">Landing Page</span>
                            <h3>Digital Campaign</h3>
                            <p>Conversion • Creative • Copy</p>
                        </div>
                    </article>
                    <article class="project reveal">
                        <div class="project-bg"></div>
                        <div class="project-content">
                            <span class="tag">E-Commerce</span>
                            <h3>Online Store Experience</h3>
                            <p>UI/UX • Development • Optimization</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="section-head reveal">
                    <span class="section-kicker">How It Works</span>
                    <h2 class="section-title">Dari ide sampai <span class="gradient-text">go live.</span></h2>
                </div>

                <div class="process">
                    <div class="step reveal"><span class="step-num">01 / DISCOVER</span>
                        <h3>Kenali bisnis</h3>
                        <p>Kami memahami bisnis, target audience, kompetitor, dan tujuan project.</p>
                    </div>
                    <div class="step reveal"><span class="step-num">02 / STRATEGY</span>
                        <h3>Susun strategi</h3>
                        <p>Menentukan struktur, pesan utama, visual direction, dan user journey.</p>
                    </div>
                    <div class="step reveal"><span class="step-num">03 / CREATE</span>
                        <h3>Build & refine</h3>
                        <p>Design dan development dikerjakan dengan komunikasi yang transparan.</p>
                    </div>
                    <div class="step reveal"><span class="step-num">04 / LAUNCH</span>
                        <h3>Go live</h3>
                        <p>Website dipublish dan siap digunakan untuk mendukung aktivitas marketing.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ==================== CONTACT / CTA ==================== --}} <section id="contact">
            <div class="container">
                <div class="cta reveal">
                    <span class="section-kicker">Let's Build Something</span>
                    <h2>Siap membuat brand Anda terlihat <span class="gradient-text">lebih profesional?</span></h2>
                    <p>Ceritakan kebutuhan Anda. Kami bantu menentukan solusi digital yang paling sesuai untuk bisnis
                        Anda.</p>
                    <a class="btn btn-primary"
                        href="https://wa.me/6281234567890?text=Halo%20ZADEV,%20saya%20ingin%20konsultasi%20tentang%20website."
                        target="_blank" rel="noopener">Chat via WhatsApp →</a>
                </div>
            </div>
        </section>
    </main>

    {{-- ==================== FOOTER ==================== --}} <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="#home" class="brand"><span class="brand-mark">Z</span><span>ZADEV.ID</span></a>
                    <p>Web & Digital Studio yang membantu bisnis membangun digital presence yang modern, profesional,
                        dan berorientasi pada pertumbuhan.</p>
                </div>
                <div class="footer-col">
                    <h4>Services</h4><a href="#services">Brand Identity</a><a href="#services">Business Website</a><a
                        href="#services">Landing Page</a><a href="#services">Digital Marketing</a>
                </div>
                <div class="footer-col">
                    <h4>Company</h4><a href="#about">About</a><a href="#portfolio">Portfolio</a><a
                        href="#contact">Contact</a>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4><a href="mailto:hello@zadev.id">hello@zadev.id</a><a
                        href="https://wa.me/6281234567890" target="_blank" rel="noopener">WhatsApp</a><a
                        href="#">Instagram</a>
                </div>
            </div>
            <div class="copyright"><span>© {{ date('Y') }} ZADEV.ID. All rights reserved.</span><span>Transforming
                    Vision Into Digital Presence.</span></div>
        </div>
    </footer>

    <script>
        const navbar = document.getElementById('navbar');
        const menuBtn = document.getElementById('menuBtn');
        const navLinks = document.getElementById('navLinks');

        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 30);
        });

        menuBtn.addEventListener('click', () => navLinks.classList.toggle('open'));
        navLinks.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', () => navLinks.classList.remove('open'));
        });

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) entry.target.classList.add('show');
            });
        }, {
            threshold: .12
        });

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>

    <script>
        const navbar = document.getElementById('navbar');
        const menuBtn = document.getElementById('menuBtn');
        const navLinks = document.getElementById('navLinks');

        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 30);
        });

        menuBtn.addEventListener('click', () => navLinks.classList.toggle('open'));
        navLinks.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', () => navLinks.classList.remove('open'));
        });

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) entry.target.classList.add('show');
            });
        }, {
            threshold: .12
        });

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>

</body>

</html>

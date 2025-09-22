<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Examhelpbangla – Interactive Landing Page</title>
<link rel="stylesheet" href="style.css">
<style>
/* Basic Reset */
* {margin:0;padding:0;box-sizing:border-box;}
body {font-family:'Poppins',sans-serif;line-height:1.6;background:#f4f6f9;color:#333;transition:0.3s;}
a {text-decoration:none;color:inherit;}
.container {max-width:1200px;margin:auto;padding:0 20px;}

/* Navbar */
nav {position:sticky;top:0;background:#0056b3;color:white;display:flex;justify-content:space-between;align-items:center;padding:15px 20px;z-index:1000;}
nav a {margin:0 10px;color:white;font-weight:bold;transition:0.3s;}
nav a:hover {text-decoration:underline;}

/* Hero */
header {background:#007BFF;color:white;text-align:center;padding:100px 20px;}
header h1 {font-size:3em;margin-bottom:15px;}
header p {font-size:1.2em;margin-bottom:20px;}
.btn {background:#ff5722;color:white;padding:12px 25px;border-radius:5px;font-weight:bold;transition:0.3s;cursor:pointer;}
.btn:hover {background:#e64a19;transform:scale(1.05);}

/* Sections */
section {padding:60px 0;opacity:0;transform:translateY(30px);transition:0.8s;}
section.show {opacity:1;transform:translateY(0);}
h2 {font-size:2em;color:#007BFF;margin-bottom:20px;text-align:center;}
p {text-align:center;margin-bottom:20px;}

/* Cards */
.cards {display:flex;flex-wrap:wrap;gap:20px;justify-content:center;margin-top:30px;}
.card {background:white;flex:1 1 280px;padding:25px;border-radius:10px;box-shadow:0 4px 12px rgba(0,0,0,0.1);text-align:center;transition:0.3s;}
.card:hover {transform:translateY(-5px) scale(1.02);box-shadow:0 6px 20px rgba(0,0,0,0.15);}
.card h3 {margin-bottom:15px;color:#007BFF;}
.card a {color:#ff5722;font-weight:bold;display:inline-block;margin-top:10px;}
.card a:hover {text-decoration:underline;}

/* Tools */
.tool-input, textarea {width:90%;padding:10px;margin-bottom:10px;border:1px solid #ccc;border-radius:5px;}
.tool-btn {padding:8px 20px;border:none;background:#007BFF;color:white;border-radius:5px;cursor:pointer;}
.tool-btn:hover {background:#0056b3;transform:scale(1.05);transition:0.3s;}

/* Social */
.social {display:flex;justify-content:center;gap:25px;margin-top:30px;}
.social a {background:#007BFF;color:white;padding:15px 20px;border-radius:50px;font-weight:bold;transition:0.3s;}
.social a:hover {background:#0056b3;transform:scale(1.1);}

/* Footer */
footer {background:#333;color:white;text-align:center;padding:25px 20px;}

/* Dark Mode */
.dark-mode {background:#1c1c1c;color:white;}
.dark-mode header {background:#222;}
.dark-mode nav {background:#111;}
.dark-mode .card {background:#2b2b2b;color:white;}
.dark-mode .social a {background:#555;}

/* Responsive */
@media(max-width:768px){
  nav {flex-direction:column;}
  .cards {flex-direction:column;align-items:center;}
  header h1 {font-size:2.2em;}
}
</style>
</head>
<body>

<!-- Navbar -->
<nav>
  <div>Examhelpbangla</div>
  <div class="nav-links">
    <a href="#about">About</a>
    <a href="#courses">Courses</a>
    <a href="#tools">Tools</a>
    <a href="#social">Social</a>
    <a href="#" id="darkToggle">Dark Mode</a>
  </div>
</nav>

<!-- Hero Section -->
<header>
  <h1>Examhelpbangla</h1>
  <p>সহজ ভাষায় প্রস্তুতি এবং Career Guidance</p>
  <a href="#courses" class="btn">Start Learning</a>
</header>

<!-- About Section -->
<section id="about">
  <div class="container">
    <h2>আমাদের সম্পর্কে</h2>
    <p>Examhelpbangla একটি trusted platform যেখানে ছাত্রছাত্রীরা সহজভাবে exam preparation করতে পারে। আমরা career guidance, study tips, latest exam updates এবং AI tools সরবরাহ করি।</p>
  </div>
</section>

<!-- Courses Section -->
<section id="courses">
  <div class="container">
    <h2>প্রস্তাবিত কোর্স / Affiliate Links</h2>
    <div class="cards">
      <div class="card"><h3>SSC Complete Course</h3><a href="AFFILIATE_LINK_1" target="_blank">বিস্তারিত দেখুন</a></div>
      <div class="card"><h3>Railway Exam Guide</h3><a href="AFFILIATE_LINK_2" target="_blank">বিস্তারিত দেখুন</a></div>
      <div class="card"><h3>Bank Exam Preparation</h3><a href="AFFILIATE_LINK_3" target="_blank">বিস্তারিত দেখুন</a></div>
    </div>
  </div>
</section>

<!-- Tools Section -->
<section id="tools">
  <div class="container">
    <h2>AI Tools</h2>
    <div class="cards">
      <div class="card">
        <h3>MCQ Generator</h3>
        <input type="text" id="mcqInput" placeholder="Write topic here">
        <button class="tool-btn" onclick="callAPI('mcq')">Generate MCQ</button>
        <p id="mcqOutput"></p>
      </div>
      <div class="card">
        <h3>Notes Summarizer</h3>
        <textarea id="notesInput" placeholder="Paste your notes"></textarea>
        <button class="tool-btn" onclick="callAPI('summary')">Summarize</button>
        <p id="notesOutput"></p>
      </div>
      <div class="card">
        <h3>Exam Calendar</h3>
        <input type="date" id="examDate">
        <button class="tool-btn" onclick="addExam()">Add Exam</button>
        <ul id="examList"></ul>
      </div>
    </div>
  </div>
</section>

<!-- Social Section -->
<section id="social">
  <div class="container">
    <h2>আমাদের Social Media</h2>
    <div class="social">
      <a href="https://t.me/yourgroup" target="_blank">Telegram</a>
      <a href="https://instagram.com/yourpage" target="_blank">Instagram</a>
      <a href="https://www.youtube.com/c/examhelpbangla" target="_blank">YouTube</a>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <p>© 2025 Examhelpbangla | All Rights Reserved</p>
</footer>

<script>
// Smooth Scroll
document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e){
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({behavior:'smooth'});
  });
});

// Dark Mode Toggle
document.getElementById('darkToggle').addEventListener('click',function(e){
  e.preventDefault();
  document.body.classList.toggle('dark-mode');
});

// Animate Sections on scroll
const sections = document.querySelectorAll('section');
window.addEventListener('scroll', ()=>{
  sections.forEach(sec=>{
    const rect = sec.getBoundingClientRect();
    if(rect.top < window.innerHeight-100){ sec.classList.add('show'); }
  });
});

// AI Tools API Call
function callAPI(task){
  let input = task==='mcq' ? document.getElementById('mcqInput').value : document.getElementById('notesInput').value;
  if(!input){ alert('Input required'); return; }

  let formData = new FormData();
  formData.append('input', input);
  formData.append('task', task==='mcq' ? 'Generate 5 MCQs' : 'Summarize notes');

  fetch('api.php',{method:'POST',body:formData})
  .then(res=>res.json())
  .then(data=>{
    if(data.choices && data.choices[0].message){
      let text=data.
